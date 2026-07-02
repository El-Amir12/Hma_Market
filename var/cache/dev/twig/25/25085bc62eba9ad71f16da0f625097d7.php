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

/* stock/transfer/index.html.twig */
class __TwigTemplate_5bfe2d5da0a19c6b52a849bf6363642b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/index.html.twig"));

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

        yield "Transferts de stock - HMA Market";
        
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
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-info .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-primary .stat-value,
    .card-bg-warning .stat-value,
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-info .stat-value {
        color: white;
    }
    .card-bg-primary .text-muted,
    .card-bg-warning .text-muted,
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-info .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                Transferts de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les transferts de stock entre emplacements
            </p>
        </div>
        <div>
            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouveau transfert
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
                            <div class=\"stat-label\">Total transferts</div>
                            <div class=\"stat-value\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 128, $this->source); })()), "total", [], "any", false, false, false, 128), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">transferts créés</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-exchange-alt fa-2x\"></i>
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
                            <div class=\"stat-label\">En attente</div>
                            <div class=\"stat-value\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 144, $this->source); })()), "pending", [], "any", false, false, false, 144), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">transfert(s) en attente</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-clock fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">En transit</div>
                            <div class=\"stat-value\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "in_transit", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 160, $this->source); })()), "in_transit", [], "any", false, false, false, 160), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">transfert(s) en transit</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-truck fa-2x\"></i>
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
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 176)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 176, $this->source); })()), "completed", [], "any", false, false, false, 176), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">transfert(s) terminés</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
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
                        <option value=\"pending\" ";
        // line 201
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 201, $this->source); })()), "status", [], "any", false, false, false, 201) == "pending")) ? ("selected") : (""));
        yield ">En attente</option>
                        <option value=\"in_transit\" ";
        // line 202
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 202, $this->source); })()), "status", [], "any", false, false, false, 202) == "in_transit")) ? ("selected") : (""));
        yield ">En transit</option>
                        <option value=\"completed\" ";
        // line 203
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 203, $this->source); })()), "status", [], "any", false, false, false, 203) == "completed")) ? ("selected") : (""));
        yield ">Terminé</option>
                        <option value=\"cancelled\" ";
        // line 204
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 204, $this->source); })()), "status", [], "any", false, false, false, 204) == "cancelled")) ? ("selected") : (""));
        yield ">Annulé</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 209, $this->source); })()), "date_from", [], "any", false, false, false, 209), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 213, $this->source); })()), "date_to", [], "any", false, false, false, 213), "html", null, true);
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

    <!-- Tableau des transferts -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des transferts
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 231, $this->source); })())), "html", null, true);
        yield " résultat(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>N° transfert</th>
                            <th>Date</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>De → Vers</th>
                            <th>Statut</th>
                            <th>Créé par</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 250, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transfer"]) {
            // line 251
            yield "                            <tr>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 253), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">créé le ";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdAt", [], "any", false, false, false, 254), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                </div>
                                <td class=\"align-middle\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdAt", [], "any", false, false, false, 256), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 258), "product", [], "any", false, false, false, 258), "name", [], "any", false, false, false, 258)), "truncate", [35], "method", false, false, false, 258), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 259), "product", [], "any", false, false, false, 259), "barcode", [], "any", false, false, false, 259), "html", null, true);
            yield "</small>
                                </div>
                                <td class=\"align-middle\"><code class=\"small\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 261), "batchNumber", [], "any", false, false, false, 261), "html", null, true);
            yield "</code></div>
                                <td class=\"align-middle text-end fw-bold\">";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "quantity", [], "any", false, false, false, 262), 0, ",", " "), "html", null, true);
            yield "</div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-1\">
                                        <span class=\"badge bg-success bg-opacity-10 text-success\">
                                            <i class=\"fas fa-map-marker-alt\"></i> ";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "sourceLocation", [], "any", false, false, false, 266), "displayName", [], "any", false, false, false, 266), "html", null, true);
            yield "
                                        </span>
                                        <i class=\"fas fa-arrow-right text-muted\"></i>
                                        <span class=\"badge bg-primary bg-opacity-10 text-primary\">
                                            <i class=\"fas fa-map-marker-alt\"></i> ";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "destinationLocation", [], "any", false, false, false, 270), "displayName", [], "any", false, false, false, 270), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                </div>
                                <td class=\"align-middle\">
                                    <span class=\"badge ";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusBadgeClass", [], "any", false, false, false, 275), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusIcon", [], "any", false, false, false, 276), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusLabel", [], "any", false, false, false, 277), "html", null, true);
            yield "
                                    </span>
                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>";
            // line 283
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 283), "fullName", [], "any", false, false, false, 283)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 283), "fullName", [], "any", false, false, false, 283), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 283), "email", [], "any", false, false, false, 283), "html", null, true)));
            yield "</small>
                                    </div>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 288)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        ";
            // line 291
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 291) == "pending")) {
                // line 292
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-success start-transfer-btn\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 292), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 292), "html", null, true);
                yield "\" title=\"Expédier\">
                                                <i class=\"fas fa-truck\"></i>
                                            </button>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 295
$context["transfer"], "status", [], "any", false, false, false, 295) == "in_transit")) {
                // line 296
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 296)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Réceptionner\">
                                                <i class=\"fas fa-check-circle\"></i>
                                            </a>
                                        ";
            }
            // line 300
            yield "                                        ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 300), ["pending", "in_transit"])) {
                // line 301
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger cancel-transfer-btn\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 301), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 301), "html", null, true);
                yield "\" title=\"Annuler\">
                                                <i class=\"fas fa-ban\"></i>
                                            </button>
                                        ";
            }
            // line 305
            yield "                                    </div>
                                </div>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 308
        if (!$context['_iterated']) {
            // line 309
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-exchange-alt fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun transfert trouvé</p>
                                    <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouveau transfert</p>
                                    <a href=\"";
            // line 314
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_new");
            yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un transfert
                                    </a>
                                </div>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transfer'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modale confirmation départ -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-truck me-2\"></i> Confirmer le départ</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\"></strong> ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera déduit de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"startTransferForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("start-transfer"), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-success\">Confirmer le départ</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modale confirmation annulation -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-ban me-2\"></i> Annuler le transfert</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est irréversible.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("cancel-transfer"), "html", null, true);
        yield "\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 384
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

        // line 385
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Départ transfert
    const startModal = new bootstrap.Modal(document.getElementById('startTransferModal'));
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    
    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startModal.show();
        });
    });
    
    // Annulation transfert
    const cancelModal = new bootstrap.Modal(document.getElementById('cancelTransferModal'));
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    
    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelModal.show();
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
        return "stock/transfer/index.html.twig";
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
        return array (  651 => 385,  638 => 384,  618 => 374,  586 => 345,  559 => 320,  547 => 314,  540 => 309,  538 => 308,  531 => 305,  521 => 301,  518 => 300,  510 => 296,  508 => 295,  499 => 292,  497 => 291,  491 => 288,  483 => 283,  474 => 277,  470 => 276,  466 => 275,  458 => 270,  451 => 266,  444 => 262,  440 => 261,  435 => 259,  431 => 258,  426 => 256,  421 => 254,  417 => 253,  413 => 251,  408 => 250,  386 => 231,  365 => 213,  358 => 209,  350 => 204,  346 => 203,  342 => 202,  338 => 201,  310 => 176,  291 => 160,  272 => 144,  253 => 128,  236 => 114,  214 => 95,  205 => 88,  192 => 87,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/transfer/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Transferts de stock - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-info .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-primary .stat-value,
    .card-bg-warning .stat-value,
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-info .stat-value {
        color: white;
    }
    .card-bg-primary .text-muted,
    .card-bg-warning .text-muted,
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-info .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                Transferts de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les transferts de stock entre emplacements
            </p>
        </div>
        <div>
            <a href=\"{{ path('app_stock_transfer_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouveau transfert
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
                            <div class=\"stat-label\">Total transferts</div>
                            <div class=\"stat-value\">{{ stats.total|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">transferts créés</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-exchange-alt fa-2x\"></i>
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
                            <div class=\"stat-label\">En attente</div>
                            <div class=\"stat-value\">{{ stats.pending|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">transfert(s) en attente</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-clock fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">En transit</div>
                            <div class=\"stat-value\">{{ stats.in_transit|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">transfert(s) en transit</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-truck fa-2x\"></i>
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
                            <div class=\"stat-value\">{{ stats.completed|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">transfert(s) terminés</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
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
                        <option value=\"pending\" {{ filters.status == 'pending' ? 'selected' }}>En attente</option>
                        <option value=\"in_transit\" {{ filters.status == 'in_transit' ? 'selected' }}>En transit</option>
                        <option value=\"completed\" {{ filters.status == 'completed' ? 'selected' }}>Terminé</option>
                        <option value=\"cancelled\" {{ filters.status == 'cancelled' ? 'selected' }}>Annulé</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to }}\">
                </div>
                <div class=\"col-md-3 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des transferts -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des transferts
            </h5>
            <span class=\"badge bg-secondary\">{{ transfers|length }} résultat(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>N° transfert</th>
                            <th>Date</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>De → Vers</th>
                            <th>Statut</th>
                            <th>Créé par</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for transfer in transfers %}
                            <tr>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">{{ transfer.transferNumber }}</div>
                                    <small class=\"text-muted\">créé le {{ transfer.createdAt|date('d/m/Y H:i') }}</small>
                                </div>
                                <td class=\"align-middle\">{{ transfer.createdAt|date('d/m/Y H:i') }}</div>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">{{ transfer.stockBatch.product.name|u.truncate(35) }}</div>
                                    <small class=\"text-muted\">{{ transfer.stockBatch.product.barcode }}</small>
                                </div>
                                <td class=\"align-middle\"><code class=\"small\">{{ transfer.stockBatch.batchNumber }}</code></div>
                                <td class=\"align-middle text-end fw-bold\">{{ transfer.quantity|number_format(0, ',', ' ') }}</div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-1\">
                                        <span class=\"badge bg-success bg-opacity-10 text-success\">
                                            <i class=\"fas fa-map-marker-alt\"></i> {{ transfer.sourceLocation.displayName }}
                                        </span>
                                        <i class=\"fas fa-arrow-right text-muted\"></i>
                                        <span class=\"badge bg-primary bg-opacity-10 text-primary\">
                                            <i class=\"fas fa-map-marker-alt\"></i> {{ transfer.destinationLocation.displayName }}
                                        </span>
                                    </div>
                                </div>
                                <td class=\"align-middle\">
                                    <span class=\"badge {{ transfer.statusBadgeClass }}\">
                                        <i class=\"fas {{ transfer.statusIcon }} me-1\"></i>
                                        {{ transfer.statusLabel }}
                                    </span>
                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>{{ transfer.createdBy.fullName ?: transfer.createdBy.email }}</small>
                                    </div>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_stock_transfer_show', {'id': transfer.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        {% if transfer.status == 'pending' %}
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-success start-transfer-btn\" data-id=\"{{ transfer.id }}\" data-number=\"{{ transfer.transferNumber }}\" title=\"Expédier\">
                                                <i class=\"fas fa-truck\"></i>
                                            </button>
                                        {% elseif transfer.status == 'in_transit' %}
                                            <a href=\"{{ path('app_stock_transfer_receive', {'id': transfer.id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"Réceptionner\">
                                                <i class=\"fas fa-check-circle\"></i>
                                            </a>
                                        {% endif %}
                                        {% if transfer.status in ['pending', 'in_transit'] %}
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger cancel-transfer-btn\" data-id=\"{{ transfer.id }}\" data-number=\"{{ transfer.transferNumber }}\" title=\"Annuler\">
                                                <i class=\"fas fa-ban\"></i>
                                            </button>
                                        {% endif %}
                                    </div>
                                </div>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-exchange-alt fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun transfert trouvé</p>
                                    <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouveau transfert</p>
                                    <a href=\"{{ path('app_stock_transfer_new') }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un transfert
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

<!-- Modale confirmation départ -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-truck me-2\"></i> Confirmer le départ</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\"></strong> ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera déduit de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"startTransferForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('start-transfer') }}\">
                    <button type=\"submit\" class=\"btn btn-success\">Confirmer le départ</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modale confirmation annulation -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-ban me-2\"></i> Annuler le transfert</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est irréversible.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel-transfer') }}\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Départ transfert
    const startModal = new bootstrap.Modal(document.getElementById('startTransferModal'));
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    
    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startModal.show();
        });
    });
    
    // Annulation transfert
    const cancelModal = new bootstrap.Modal(document.getElementById('cancelTransferModal'));
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    
    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelModal.show();
        });
    });
});
</script>
{% endblock %}", "stock/transfer/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\index.html.twig");
    }
}
