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

/* super_admin/analysis_price/index.html.twig */
class __TwigTemplate_0e99235de98559cd97653818a935f80e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Gestion des prix d'analyse - Super Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .stats-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stats-card .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    .stats-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-icon {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-info .stat-icon,
    .card-bg-purple .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    
    /* Table avec scroll */
    .price-table-container {
        max-height: 60vh;
        overflow-y: auto;
        scroll-behavior: smooth;
    }
    
    .price-table-container::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .price-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    
    .price-table {
        min-width: 1000px;
    }
    
    .price-table thead th {
        position: sticky;
        top: 0;
        background: #f8fafc;
        z-index: 10;
        box-shadow: 0 1px 0 0 #e2e8f0;
    }
    
    .price-table tr {
        transition: background 0.2s ease;
        cursor: pointer;
    }
    .price-table tr:hover {
        background: #f8fafc;
    }
    
    .price-amount {
        font-weight: 700;
        color: #0463f1;
        font-size: 1.1rem;
    }
    
    .type-badge {
        font-family: monospace;
        font-size: 0.75rem;
        background: #f1f5f9;
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
        color: #1e293b;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        flex-wrap: nowrap;
    }
    
    .action-buttons .btn {
        padding: 0.25rem 0.5rem;
    }
    
    .price-description {
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .price-description:hover {
        white-space: normal;
        word-break: break-word;
        position: relative;
        background: white;
        padding: 0.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 20;
        max-width: 300px;
        white-space: normal;
        cursor: help;
    }
    
    .badge-status {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.25rem 0.5rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    .badge-active {
        background: #d1fae5;
        color: #065f46;
    }
    .badge-inactive {
        background: #fee2e2;
        color: #991b1b;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 180
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-tags me-1\"></i> Prix des analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                Gestion des prix d'analyse
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les tarifs des analyses approfondies
            </p>
        </div>
        <div>
            <a href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouveau prix
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total offres</div>
                            <div class=\"stat-value\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 220, $this->source); })()), "total", [], "any", false, false, false, 220), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-tags fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres actives</div>
                            <div class=\"stat-value\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", true, true, false, 235)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 235, $this->source); })()), "active", [], "any", false, false, false, 235), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres inactives</div>
                            <div class=\"stat-value\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive", [], "any", true, true, false, 250)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 250, $this->source); })()), "inactive", [], "any", false, false, false, 250), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-ban fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Prix moyen</div>
                            <div class=\"stat-value\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 265, $this->source); })()), "min_price", [], "any", false, false, false, 265) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 265, $this->source); })()), "max_price", [], "any", false, false, false, 265)) / 2)), 0, ",", " "), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des prix avec scroll -->
    <div class=\"card border-0 shadow-sm rounded-4\">
        <div class=\"card-header bg-white border-0 pt-4 pb-0 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des tarifs
                <span class=\"badge bg-secondary ms-2\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 282)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 282, $this->source); })()), "total", [], "any", false, false, false, 282), 0)) : (0)), "html", null, true);
        yield " offre(s)</span>
            </h5>
        </div>
        <div class=\"price-table-container\">
            <div class=\"table-responsive\">
                <table class=\"table price-table mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 10%\">Type</th>
                            <th style=\"width: 15%\">Libellé</th>
                            <th style=\"width: 30%\">Description</th>
                            <th style=\"width: 10%\">Prix</th>
                            <th style=\"width: 8%\">Ordre</th>
                            <th style=\"width: 12%\">Statut</th>
                            <th style=\"width: 15%\" class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 300, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 301
            yield "                            <tr onclick=\"window.location='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 301)]), "html", null, true);
            yield "'\">
                                <td>
                                    <code class=\"type-badge\">";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 303), "html", null, true);
            yield "</code>
                                </td>
                                <td>
                                    <div class=\"fw-semibold\">";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 306), "html", null, true);
            yield "</div>
                                </td>
                                <td>
                                    <div class=\"price-description\" title=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", true, true, false, 309)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 309), "—")) : ("—")), "html", null, true);
            yield "\">
                                        ";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 310), "—")) : ("—"))), "truncate", [60], "method", false, false, false, 310), "html", null, true);
            yield "
                                    </div>
                                </td>
                                <td>
                                    <span class=\"price-amount\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "priceFormatted", [], "any", false, false, false, 314), "html", null, true);
            yield "</span>
                                    ";
            // line 315
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 315) == "subscription")) {
                // line 316
                yield "                                        <small class=\"text-muted\">/mois</small>
                                    ";
            }
            // line 318
            yield "                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-secondary\">";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "displayOrder", [], "any", true, true, false, 320)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "displayOrder", [], "any", false, false, false, 320), "—")) : ("—")), "html", null, true);
            yield "</span>
                                </td>
                                <td onclick=\"event.stopPropagation()\">
                                    ";
            // line 323
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 324
                yield "                                        <span class=\"badge-status badge-active\">
                                            <i class=\"fas fa-check-circle me-1\"></i> Actif
                                        </span>
                                    ";
            } else {
                // line 328
                yield "                                        <span class=\"badge-status badge-inactive\">
                                            <i class=\"fas fa-ban me-1\"></i> Inactif
                                        </span>
                                    ";
            }
            // line 332
            yield "                                </td>
                                <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                    <div class=\"action-buttons\">
                                        <a href=\"";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 335)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 339)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm ";
            // line 344
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-danger") : ("btn-outline-success"));
            yield " toggle-price-btn\"
                                                data-id=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 345), "html", null, true);
            yield "\"
                                                data-label=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 346), "html", null, true);
            yield "\"
                                                data-active=\"";
            // line 347
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
                                                data-token=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 348))), "html", null, true);
            yield "\"
                                                title=\"";
            // line 349
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 349)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                            <i class=\"fas ";
            // line 350
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["price"], "isActive", [], "any", false, false, false, 350)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-ban") : ("fa-check-circle"));
            yield "\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-danger delete-price-btn\" 
                                                data-id=\"";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 354), "html", null, true);
            yield "\" 
                                                data-label=\"";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 355), "html", null, true);
            yield "\"
                                                data-token=\"";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 356))), "html", null, true);
            yield "\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 363
        if (!$context['_iterated']) {
            // line 364
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <i class=\"fas fa-tags fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun prix configuré</p>
                                    <p class=\"text-muted small mb-3\">Commencez par créer votre première offre</p>
                                    <a href=\"";
            // line 369
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_new");
            yield "\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un prix
                                    </a>
                                 </div>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer l'offre <strong id=\"deleteLabel\"></strong> ?</p>
                <div class=\"alert alert-warning mt-2\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette action est irréversible.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 439
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 440
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== MODALE SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteLabel = document.getElementById('deleteLabel');
    const deleteToken = document.getElementById('deleteToken');
    
    document.querySelectorAll('.delete-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const id = this.dataset.id;
            const label = this.dataset.label;
            const token = this.dataset.token;
            
            deleteLabel.textContent = label;
            deleteToken.value = token;
            deleteForm.action = '/super-admin/analysis-prices/' + id + '/delete';
            
            deleteModal.show();
        });
    });
    
    // ========== MODALE ACTIVATION/DÉSACTIVATION ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleModal'));
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleBtn = document.getElementById('toggleBtn');
    
    document.querySelectorAll('.toggle-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            const id = this.dataset.id;
            const label = this.dataset.label;
            const isActive = this.dataset.active === 'true';
            const token = this.dataset.token;
            const newStatus = isActive ? 'désactiver' : 'activer';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong>\${newStatus}</strong> l'offre \"<strong>\${label}</strong>\" ?`;
            
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleToken.value = token;
            toggleForm.action = `/super-admin/analysis-prices/\${id}/toggle`;
            
            toggleModal.show();
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/analysis_price/index.html.twig";
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
        return array (  686 => 440,  673 => 439,  600 => 375,  588 => 369,  581 => 364,  579 => 363,  567 => 356,  563 => 355,  559 => 354,  552 => 350,  548 => 349,  544 => 348,  540 => 347,  536 => 346,  532 => 345,  528 => 344,  520 => 339,  513 => 335,  508 => 332,  502 => 328,  496 => 324,  494 => 323,  488 => 320,  484 => 318,  480 => 316,  478 => 315,  474 => 314,  467 => 310,  463 => 309,  457 => 306,  451 => 303,  445 => 301,  440 => 300,  419 => 282,  399 => 265,  381 => 250,  363 => 235,  345 => 220,  328 => 206,  306 => 187,  297 => 180,  284 => 179,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_price/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des prix d'analyse - Super Admin{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .stats-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stats-card .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    .stats-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-icon {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-info .stat-icon,
    .card-bg-purple .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    
    /* Table avec scroll */
    .price-table-container {
        max-height: 60vh;
        overflow-y: auto;
        scroll-behavior: smooth;
    }
    
    .price-table-container::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .price-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    
    .price-table-container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    
    .price-table {
        min-width: 1000px;
    }
    
    .price-table thead th {
        position: sticky;
        top: 0;
        background: #f8fafc;
        z-index: 10;
        box-shadow: 0 1px 0 0 #e2e8f0;
    }
    
    .price-table tr {
        transition: background 0.2s ease;
        cursor: pointer;
    }
    .price-table tr:hover {
        background: #f8fafc;
    }
    
    .price-amount {
        font-weight: 700;
        color: #0463f1;
        font-size: 1.1rem;
    }
    
    .type-badge {
        font-family: monospace;
        font-size: 0.75rem;
        background: #f1f5f9;
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
        color: #1e293b;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        flex-wrap: nowrap;
    }
    
    .action-buttons .btn {
        padding: 0.25rem 0.5rem;
    }
    
    .price-description {
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .price-description:hover {
        white-space: normal;
        word-break: break-word;
        position: relative;
        background: white;
        padding: 0.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 20;
        max-width: 300px;
        white-space: normal;
        cursor: help;
    }
    
    .badge-status {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.25rem 0.5rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
    .badge-active {
        background: #d1fae5;
        color: #065f46;
    }
    .badge-inactive {
        background: #fee2e2;
        color: #991b1b;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-tags me-1\"></i> Prix des analyses
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                Gestion des prix d'analyse
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les tarifs des analyses approfondies
            </p>
        </div>
        <div>
            <a href=\"{{ path('super_admin_analysis_price_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouveau prix
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total offres</div>
                            <div class=\"stat-value\">{{ stats.total|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-tags fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres actives</div>
                            <div class=\"stat-value\">{{ stats.active|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Offres inactives</div>
                            <div class=\"stat-value\">{{ stats.inactive|default(0) }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-ban fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Prix moyen</div>
                            <div class=\"stat-value\">{{ ((stats.min_price + stats.max_price) / 2)|round|number_format(0, ',', ' ') }}</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des prix avec scroll -->
    <div class=\"card border-0 shadow-sm rounded-4\">
        <div class=\"card-header bg-white border-0 pt-4 pb-0 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des tarifs
                <span class=\"badge bg-secondary ms-2\">{{ stats.total|default(0) }} offre(s)</span>
            </h5>
        </div>
        <div class=\"price-table-container\">
            <div class=\"table-responsive\">
                <table class=\"table price-table mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 10%\">Type</th>
                            <th style=\"width: 15%\">Libellé</th>
                            <th style=\"width: 30%\">Description</th>
                            <th style=\"width: 10%\">Prix</th>
                            <th style=\"width: 8%\">Ordre</th>
                            <th style=\"width: 12%\">Statut</th>
                            <th style=\"width: 15%\" class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for price in prices %}
                            <tr onclick=\"window.location='{{ path('super_admin_analysis_price_show', {'id': price.id}) }}'\">
                                <td>
                                    <code class=\"type-badge\">{{ price.type }}</code>
                                </td>
                                <td>
                                    <div class=\"fw-semibold\">{{ price.label }}</div>
                                </td>
                                <td>
                                    <div class=\"price-description\" title=\"{{ price.description|default('—') }}\">
                                        {{ price.description|default('—')|u.truncate(60) }}
                                    </div>
                                </td>
                                <td>
                                    <span class=\"price-amount\">{{ price.priceFormatted }}</span>
                                    {% if price.type == 'subscription' %}
                                        <small class=\"text-muted\">/mois</small>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-secondary\">{{ price.displayOrder|default('—') }}</span>
                                </td>
                                <td onclick=\"event.stopPropagation()\">
                                    {% if price.isActive %}
                                        <span class=\"badge-status badge-active\">
                                            <i class=\"fas fa-check-circle me-1\"></i> Actif
                                        </span>
                                    {% else %}
                                        <span class=\"badge-status badge-inactive\">
                                            <i class=\"fas fa-ban me-1\"></i> Inactif
                                        </span>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                    <div class=\"action-buttons\">
                                        <a href=\"{{ path('super_admin_analysis_price_show', {'id': price.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('super_admin_analysis_price_edit', {'id': price.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm {{ price.isActive ? 'btn-outline-danger' : 'btn-outline-success' }} toggle-price-btn\"
                                                data-id=\"{{ price.id }}\"
                                                data-label=\"{{ price.label }}\"
                                                data-active=\"{{ price.isActive ? 'true' : 'false' }}\"
                                                data-token=\"{{ csrf_token('toggle' ~ price.id) }}\"
                                                title=\"{{ price.isActive ? 'Désactiver' : 'Activer' }}\">
                                            <i class=\"fas {{ price.isActive ? 'fa-ban' : 'fa-check-circle' }}\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-danger delete-price-btn\" 
                                                data-id=\"{{ price.id }}\" 
                                                data-label=\"{{ price.label }}\"
                                                data-token=\"{{ csrf_token('delete' ~ price.id) }}\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <i class=\"fas fa-tags fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun prix configuré</p>
                                    <p class=\"text-muted small mb-3\">Commencez par créer votre première offre</p>
                                    <a href=\"{{ path('super_admin_analysis_price_new') }}\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un prix
                                    </a>
                                 </div>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer l'offre <strong id=\"deleteLabel\"></strong> ?</p>
                <div class=\"alert alert-warning mt-2\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette action est irréversible.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== MODALE SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteLabel = document.getElementById('deleteLabel');
    const deleteToken = document.getElementById('deleteToken');
    
    document.querySelectorAll('.delete-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const id = this.dataset.id;
            const label = this.dataset.label;
            const token = this.dataset.token;
            
            deleteLabel.textContent = label;
            deleteToken.value = token;
            deleteForm.action = '/super-admin/analysis-prices/' + id + '/delete';
            
            deleteModal.show();
        });
    });
    
    // ========== MODALE ACTIVATION/DÉSACTIVATION ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleModal'));
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleBtn = document.getElementById('toggleBtn');
    
    document.querySelectorAll('.toggle-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            const id = this.dataset.id;
            const label = this.dataset.label;
            const isActive = this.dataset.active === 'true';
            const token = this.dataset.token;
            const newStatus = isActive ? 'désactiver' : 'activer';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong>\${newStatus}</strong> l'offre \"<strong>\${label}</strong>\" ?`;
            
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleToken.value = token;
            toggleForm.action = `/super-admin/analysis-prices/\${id}/toggle`;
            
            toggleModal.show();
        });
    });
});
</script>
{% endblock %}", "super_admin/analysis_price/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\index.html.twig");
    }
}
