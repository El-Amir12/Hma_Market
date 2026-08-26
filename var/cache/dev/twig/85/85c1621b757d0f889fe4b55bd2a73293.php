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
class __TwigTemplate_859450c26435df3226269e637434de50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/index.html.twig"));

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

        yield "Ajustements de stock - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
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
        color: rgba(255,255,255,0.8) !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-calculator me-1\"></i> Ajustements de stock
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Ajustements de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les entrées et sorties manuelles de stock (casse, perte, surplus, etc.)
            </p>
        </div>
        <div>
            <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel ajustement
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées (+) </div>
                            <div class=\"stat-value\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 122, $this->source); })()), "total_in", [], "any", false, false, false, 122), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 123, $this->source); })()), "count_in", [], "any", false, false, false, 123), "html", null, true);
        yield " mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-plus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Sorties (-)</div>
                            <div class=\"stat-value\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 138, $this->source); })()), "total_out", [], "any", false, false, false, 138), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 139, $this->source); })()), "count_out", [], "any", false, false, false, 139), "html", null, true);
        yield " mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-minus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total mouvements</div>
                            <div class=\"stat-value\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 154, $this->source); })()), "total_movements", [], "any", false, false, false, 154), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">ajustements effectués</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
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
                            <div class=\"stat-label\">Quantité totale</div>
                            <div class=\"stat-value\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 170, $this->source); })()), "total_quantity", [], "any", false, false, false, 170), 0, ",", " "), "html", null, true);
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
                    <label class=\"form-label fw-bold small\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"in\" ";
        // line 195
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 195, $this->source); })()), "type", [], "any", false, false, false, 195) == "in")) ? ("selected") : (""));
        yield ">Entrées (+) </option>
                        <option value=\"out\" ";
        // line 196
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 196, $this->source); })()), "type", [], "any", false, false, false, 196) == "out")) ? ("selected") : (""));
        yield ">Sorties (-)</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 201, $this->source); })()), "date_from", [], "any", false, false, false, 201), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 205, $this->source); })()), "date_to", [], "any", false, false, false, 205), "html", null, true);
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

    <!-- Tableau des ajustements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des ajustements
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["adjustments"]) || array_key_exists("adjustments", $context) ? $context["adjustments"] : (function () { throw new RuntimeError('Variable "adjustments" does not exist.', 223, $this->source); })())), "html", null, true);
        yield " résultat(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>Raison</th>
                            <th>Utilisateur</th>
                            <th>Justificatif</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["adjustments"]) || array_key_exists("adjustments", $context) ? $context["adjustments"] : (function () { throw new RuntimeError('Variable "adjustments" does not exist.', 242, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 243
            yield "                            <tr>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 245), "d/m/Y"), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 246), "H:i"), "html", null, true);
            yield "</small>
                                </div>
                                <td class=\"align-middle\">
                                    <span class=\"badge ";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeBadgeClass", [], "any", false, false, false, 249), "html", null, true);
            yield "\">
                                        <i class=\"";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeIcon", [], "any", false, false, false, 250), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeLabel", [], "any", false, false, false, 251), "html", null, true);
            yield "
                                    </span>
                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 255), "product", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255)), "truncate", [35], "method", false, false, false, 255), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 256), "product", [], "any", false, false, false, 256), "barcode", [], "any", false, false, false, 256), "html", null, true);
            yield "</small>
                                </div>
                                <td class=\"align-middle\">
                                    <code class=\"small\">";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 259), "batchNumber", [], "any", false, false, false, 259), "html", null, true);
            yield "</code>
                                </div>
                                <td class=\"align-middle text-end\">
                                    <span class=\"fw-bold ";
            // line 262
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 262) == "in")) ? ("text-success") : ("text-danger"));
            yield "\">
                                        ";
            // line 263
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 263) == "in")) ? ("+") : ("-"));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "quantity", [], "any", false, false, false, 263), 0, ",", " "), "html", null, true);
            yield "
                                    </span>
                                </div>
                                <td class=\"align-middle\">
                                    <small>";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "reason", [], "any", false, false, false, 267)), "truncate", [45], "method", false, false, false, 267), "html", null, true);
            yield "</small>
                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>";
            // line 272
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 272), "fullName", [], "any", false, false, false, 272)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 272), "fullName", [], "any", false, false, false, 272), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 272), "email", [], "any", false, false, false, 272), "html", null, true)));
            yield "</small>
                                    </div>
                                </div>
                                <td class=\"align-middle text-center\">
                                    ";
            // line 276
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 277
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 277))), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-info\" title=\"Voir le justificatif\">
                                            <i class=\"fas fa-file me-1\"></i> Voir
                                        </a>
                                    ";
            } else {
                // line 281
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 283
            yield "                                </td>
                                <td class=\"align-middle text-center\">
                                    <a href=\"";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "id", [], "any", false, false, false, 285)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 290
        if (!$context['_iterated']) {
            // line 291
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-calculator fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun ajustement trouvé</p>
                                    <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel ajustement</p>
                                    <a href=\"";
            // line 296
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
            yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un ajustement
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 310
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

        // line 311
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
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
        return array (  556 => 311,  543 => 310,  526 => 302,  514 => 296,  507 => 291,  505 => 290,  495 => 285,  491 => 283,  487 => 281,  479 => 277,  477 => 276,  470 => 272,  462 => 267,  454 => 263,  450 => 262,  444 => 259,  438 => 256,  434 => 255,  427 => 251,  423 => 250,  419 => 249,  413 => 246,  409 => 245,  405 => 243,  400 => 242,  378 => 223,  357 => 205,  350 => 201,  342 => 196,  338 => 195,  310 => 170,  291 => 154,  273 => 139,  269 => 138,  251 => 123,  247 => 122,  230 => 108,  208 => 89,  199 => 82,  186 => 81,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/adjustment/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Ajustements de stock - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
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
                        <i class=\"fas fa-calculator me-1\"></i> Ajustements de stock
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Ajustements de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les entrées et sorties manuelles de stock (casse, perte, surplus, etc.)
            </p>
        </div>
        <div>
            <a href=\"{{ path('app_stock_adjustment_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel ajustement
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées (+) </div>
                            <div class=\"stat-value\">{{ stats.total_in|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">{{ stats.count_in }} mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-plus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Sorties (-)</div>
                            <div class=\"stat-value\">{{ stats.total_out|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">{{ stats.count_out }} mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-minus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Total mouvements</div>
                            <div class=\"stat-value\">{{ stats.total_movements|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">ajustements effectués</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
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
                            <div class=\"stat-label\">Quantité totale</div>
                            <div class=\"stat-value\">{{ stats.total_quantity|number_format(0, ',', ' ') }}</div>
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
                    <label class=\"form-label fw-bold small\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"in\" {{ filters.type == 'in' ? 'selected' }}>Entrées (+) </option>
                        <option value=\"out\" {{ filters.type == 'out' ? 'selected' }}>Sorties (-)</option>
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

    <!-- Tableau des ajustements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des ajustements
            </h5>
            <span class=\"badge bg-secondary\">{{ adjustments|length }} résultat(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>Raison</th>
                            <th>Utilisateur</th>
                            <th>Justificatif</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for adjustment in adjustments %}
                            <tr>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">{{ adjustment.createdAt|date('d/m/Y') }}</div>
                                    <small class=\"text-muted\">{{ adjustment.createdAt|date('H:i') }}</small>
                                </div>
                                <td class=\"align-middle\">
                                    <span class=\"badge {{ adjustment.typeBadgeClass }}\">
                                        <i class=\"{{ adjustment.typeIcon }} me-1\"></i>
                                        {{ adjustment.typeLabel }}
                                    </span>
                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"fw-bold\">{{ adjustment.stockBatch.product.name|u.truncate(35) }}</div>
                                    <small class=\"text-muted\">{{ adjustment.stockBatch.product.barcode }}</small>
                                </div>
                                <td class=\"align-middle\">
                                    <code class=\"small\">{{ adjustment.stockBatch.batchNumber }}</code>
                                </div>
                                <td class=\"align-middle text-end\">
                                    <span class=\"fw-bold {{ adjustment.type == 'in' ? 'text-success' : 'text-danger' }}\">
                                        {{ adjustment.type == 'in' ? '+' : '-' }}{{ adjustment.quantity|number_format(0, ',', ' ') }}
                                    </span>
                                </div>
                                <td class=\"align-middle\">
                                    <small>{{ adjustment.reason|u.truncate(45) }}</small>
                                </div>
                                <td class=\"align-middle\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>{{ adjustment.createdBy.fullName ?: adjustment.createdBy.email }}</small>
                                    </div>
                                </div>
                                <td class=\"align-middle text-center\">
                                    {% if adjustment.justificationFile %}
                                        <a href=\"{{ asset('uploads/' ~ adjustment.justificationFile) }}\" target=\"_blank\" class=\"btn btn-sm btn-outline-info\" title=\"Voir le justificatif\">
                                            <i class=\"fas fa-file me-1\"></i> Voir
                                        </a>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td class=\"align-middle text-center\">
                                    <a href=\"{{ path('app_stock_adjustment_show', {'id': adjustment.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-calculator fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun ajustement trouvé</p>
                                    <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel ajustement</p>
                                    <a href=\"{{ path('app_stock_adjustment_new') }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un ajustement
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
{% endblock %}", "stock/adjustment/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\adjustment\\index.html.twig");
    }
}
