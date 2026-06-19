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

/* admin/subscription/index.html.twig */
class __TwigTemplate_1d5f8313dc97f0ceb719030ca7b5914a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/subscription/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/subscription/index.html.twig"));

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

        yield "Mes abonnements - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 4, $this->source); })()), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-value {
        font-size: 1.75rem;
        font-weight: bold;
        color: #ffffff !important;
    }
    .stat-card .small {
        color: rgba(255,255,255,0.8) !important;
    }
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
    }
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    .subscription-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        border: 1px solid rgba(0,0,0,0.05);
        cursor: pointer;
    }
    .subscription-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }
    .filter-badge {
        cursor: pointer;
        transition: all 0.2s;
        background: #e2e8f0;
        color: #1e293b;
        padding: 0.3rem 0.7rem;
        border-radius: 2rem;
        font-size: 0.7rem;
    }
    .filter-badge:hover {
        background: #cbd5e1;
        transform: scale(1.05);
    }
    .btn-action {
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        transform: scale(1.05);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
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

        // line 69
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-tags me-1\"></i> Mes abonnements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                Mes abonnements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-building me-1\"></i>
                ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 91, $this->source); })()), "companyName", [], "any", false, false, false, 91), "html", null, true);
        yield "
            </p>
        </div>
        <div>
            <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-credit-card me-1\"></i> Voir mes paiements
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-primary h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Total abonnements</div>
                            <div class=\"stat-value text-white\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 109, $this->source); })()), "total", [], "any", false, false, false, 109), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-tags fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-success h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Abonnements actifs</div>
                            <div class=\"stat-value text-white\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 124, $this->source); })()), "active", [], "any", false, false, false, 124), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-check-circle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-warning h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">En attente</div>
                            <div class=\"stat-value text-white\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 139, $this->source); })()), "pending", [], "any", false, false, false, 139), 0)) : (0)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-clock fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-danger h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Expirés/Annulés</div>
                            <div class=\"stat-value text-white\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 154, $this->source); })()), "expired", [], "any", false, false, false, 154), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cancelled", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 154, $this->source); })()), "cancelled", [], "any", false, false, false, 154), 0)) : (0))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-exclamation-circle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    ";
        // line 166
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 166, $this->source); })()), "status", [], "any", false, false, false, 166) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 166, $this->source); })()), "date_from", [], "any", false, false, false, 166)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 166, $this->source); })()), "date_to", [], "any", false, false, false, 166))) {
            // line 167
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 168
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 168, $this->source); })()), "status", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                ";
                // line 171
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 171, $this->source); })()), "status", [], "any", false, false, false, 171) == "active")) {
                    yield "Actif
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 172
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 172, $this->source); })()), "status", [], "any", false, false, false, 172) == "pending")) {
                    yield "En attente
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 173
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 173, $this->source); })()), "status", [], "any", false, false, false, 173) == "expired")) {
                    yield "Expiré
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 174
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 174, $this->source); })()), "status", [], "any", false, false, false, 174) == "cancelled")) {
                    yield "Annulé
                ";
                }
                // line 176
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 179
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 179, $this->source); })()), "date_from", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: ";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 181, $this->source); })()), "date_from", [], "any", false, false, false, 181), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 185
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 185, $this->source); })()), "date_to", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 186
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 187, $this->source); })()), "date_to", [], "any", false, false, false, 187), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 191
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 196
        yield "
    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\" id=\"filterForm\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-filter me-1\"></i>Statut
                    </label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" ";
        // line 207
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 207, $this->source); })()), "status", [], "any", false, false, false, 207) == "active")) ? ("selected") : (""));
        yield ">✓ Actif</option>
                        <option value=\"pending\" ";
        // line 208
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 208, $this->source); })()), "status", [], "any", false, false, false, 208) == "pending")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                        <option value=\"expired\" ";
        // line 209
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 209, $this->source); })()), "status", [], "any", false, false, false, 209) == "expired")) ? ("selected") : (""));
        yield ">⌛ Expiré</option>
                        <option value=\"cancelled\" ";
        // line 210
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "status", [], "any", false, false, false, 210) == "cancelled")) ? ("selected") : (""));
        yield ">✗ Annulé</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-calendar me-1\"></i>Date du
                    </label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 217, $this->source); })()), "date_from", [], "any", false, false, false, 217), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-calendar me-1\"></i>Date au
                    </label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 223, $this->source); })()), "date_to", [], "any", false, false, false, 223), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 mt-4\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Dernier abonnement - Pleine largeur -->
    ";
        // line 235
        $context["lastSubscription"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 235, $this->source); })()));
        // line 236
        yield "    ";
        if ((($tmp = (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 236, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 237
            yield "        <div class=\"last-subscription-card p-4 mb-4 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 1rem;\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier abonnement enregistré
                </h5>
                <i class=\"fas fa-tag fa-2x opacity-50\"></i>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Plan</span>
                        <span style=\"font-weight: 600;\">";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 248, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 248), "displayName", [], "any", false, false, false, 248), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Période</span>
                        <span style=\"font-weight: 600;\">";
            // line 254
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 254, $this->source); })()), "billingPeriod", [], "any", false, false, false, 254) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Statut</span>
                        <span style=\"font-weight: 600;\">
                            ";
            // line 261
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 261, $this->source); })()), "status", [], "any", false, false, false, 261) == "active")) {
                // line 262
                yield "                                <span class=\"badge bg-success\">✓ Actif</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 263
(isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 263, $this->source); })()), "status", [], "any", false, false, false, 263) == "pending")) {
                // line 264
                yield "                                <span class=\"badge bg-warning text-dark\">⏳ En attente</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 265
(isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 265, $this->source); })()), "status", [], "any", false, false, false, 265) == "expired")) {
                // line 266
                yield "                                <span class=\"badge bg-danger\">⌛ Expiré</span>
                            ";
            } else {
                // line 268
                yield "                                <span class=\"badge bg-secondary\">✗ Annulé</span>
                            ";
            }
            // line 270
            yield "                        </span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Date début</span>
                        <span style=\"font-weight: 600;\">";
            // line 276
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 276, $this->source); })()), "startsAt", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 276, $this->source); })()), "startsAt", [], "any", false, false, false, 276), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Date fin</span>
                        <span style=\"font-weight: 600;\">";
            // line 282
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 282, $this->source); })()), "endsAt", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 282, $this->source); })()), "endsAt", [], "any", false, false, false, 282), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Création</span>
                        <span style=\"font-weight: 600;\">";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 288, $this->source); })()), "createdAt", [], "any", false, false, false, 288), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                    </div>
                </div>
            </div>
            <div class=\"mt-3 text-end\">
                <a href=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 293, $this->source); })()), "id", [], "any", false, false, false, 293)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails complets
                </a>
            </div>
        </div>
    ";
        } else {
            // line 299
            yield "        <div class=\"last-subscription-card p-4 mb-4 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 1rem;\">
            <div class=\"text-center py-3\">
                <i class=\"fas fa-tags fa-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0\">Aucun abonnement enregistré pour le moment</p>
            </div>
        </div>
    ";
        }
        // line 306
        yield "
    <!-- Liste des abonnements -->
    <div class=\"row g-4\">
        ";
        // line 309
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 309, $this->source); })()))) {
            // line 310
            yield "            <div class=\"col-12\">
                <div class=\"text-center py-5 bg-light rounded-4\">
                    <i class=\"fas fa-tags fa-4x text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"fw-semibold\">Aucun abonnement trouvé</h5>
                    <p class=\"text-muted\">Modifiez vos filtres ou contactez le support</p>
                </div>
            </div>
        ";
        } else {
            // line 318
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 318, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 319
                yield "                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"subscription-card card h-100 shadow-sm\">
                        <div class=\"card-body p-4\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <div>
                                    <h5 class=\"mb-1 fw-bold\">";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionPlan", [], "any", false, false, false, 324), "displayName", [], "any", false, false, false, 324), "html", null, true);
                yield "</h5>
                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas ";
                // line 326
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "billingPeriod", [], "any", false, false, false, 326) == "monthly")) ? ("fa-calendar-alt") : ("fa-calendar"));
                yield " me-1\"></i>
                                        ";
                // line 327
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "billingPeriod", [], "any", false, false, false, 327) == "monthly")) ? ("Mensuel") : ("Annuel"));
                yield "
                                    </span>
                                </div>
                                <span class=\"badge-status ";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "status", [], "any", false, false, false, 330), "html", null, true);
                yield "\">
                                    ";
                // line 331
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "status", [], "any", false, false, false, 331) == "active")) {
                    // line 332
                    yield "                                        <i class=\"fas fa-check-circle me-1\"></i> Actif
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 333
$context["sub"], "status", [], "any", false, false, false, 333) == "pending")) {
                    // line 334
                    yield "                                        <i class=\"fas fa-clock me-1\"></i> En attente
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 335
$context["sub"], "status", [], "any", false, false, false, 335) == "expired")) {
                    // line 336
                    yield "                                        <i class=\"fas fa-hourglass-end me-1\"></i> Expiré
                                    ";
                } else {
                    // line 338
                    yield "                                        <i class=\"fas fa-ban me-1\"></i> Annulé
                                    ";
                }
                // line 340
                yield "                                </span>
                            </div>
                            
                            <div class=\"mt-3\">
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-calendar-alt me-1\"></i>Date début
                                    </span>
                                    <strong>";
                // line 348
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "startsAt", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "startsAt", [], "any", false, false, false, 348), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</strong>
                                </div>
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-calendar-check me-1\"></i>Date fin
                                    </span>
                                    <strong>
                                        ";
                // line 355
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 355), "d/m/Y"), "html", null, true)) : ("-"));
                yield "
                                        ";
                // line 356
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 356) && (CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 356) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                    // line 357
                    yield "                                            <i class=\"fas fa-exclamation-triangle text-danger ms-1\" title=\"Expiré\"></i>
                                        ";
                }
                // line 359
                yield "                                    </strong>
                                </div>
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-power-off me-1\"></i>Statut actif
                                    </span>
                                    ";
                // line 365
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionActive", [], "any", false, false, false, 365)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 366
                    yield "                                        <span class=\"badge bg-success\"><i class=\"fas fa-check me-1\"></i> Actif</span>
                                    ";
                } else {
                    // line 368
                    yield "                                        <span class=\"badge bg-danger\"><i class=\"fas fa-times me-1\"></i> Inactif</span>
                                    ";
                }
                // line 370
                yield "                                </div>
                            </div>
                            
                            <div class=\"mt-3 pt-3 border-top\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"far fa-calendar me-1\"></i>
                                        Créé le ";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "createdAt", [], "any", false, false, false, 377), "d/m/Y"), "html", null, true);
                yield "
                                    </small>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 380)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir détails\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index", ["subscription_id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 383)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Voir les paiements\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-credit-card\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            yield "        ";
        }
        // line 394
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 398
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

        // line 399
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '";
        // line 409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_index");
        yield "';
}
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
        return "admin/subscription/index.html.twig";
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
        return array (  736 => 409,  723 => 399,  710 => 398,  697 => 394,  694 => 393,  678 => 383,  672 => 380,  666 => 377,  657 => 370,  653 => 368,  649 => 366,  647 => 365,  639 => 359,  635 => 357,  633 => 356,  629 => 355,  619 => 348,  609 => 340,  605 => 338,  601 => 336,  599 => 335,  596 => 334,  594 => 333,  591 => 332,  589 => 331,  585 => 330,  579 => 327,  575 => 326,  570 => 324,  563 => 319,  558 => 318,  548 => 310,  546 => 309,  541 => 306,  532 => 299,  523 => 293,  515 => 288,  506 => 282,  497 => 276,  489 => 270,  485 => 268,  481 => 266,  479 => 265,  476 => 264,  474 => 263,  471 => 262,  469 => 261,  459 => 254,  450 => 248,  437 => 237,  434 => 236,  432 => 235,  417 => 223,  408 => 217,  398 => 210,  394 => 209,  390 => 208,  386 => 207,  373 => 196,  366 => 191,  359 => 187,  356 => 186,  353 => 185,  346 => 181,  343 => 180,  340 => 179,  335 => 176,  330 => 174,  326 => 173,  322 => 172,  318 => 171,  314 => 169,  312 => 168,  309 => 167,  307 => 166,  292 => 154,  274 => 139,  256 => 124,  238 => 109,  221 => 95,  214 => 91,  196 => 76,  187 => 69,  174 => 68,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/subscription/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mes abonnements - {{ company.companyName }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-value {
        font-size: 1.75rem;
        font-weight: bold;
        color: #ffffff !important;
    }
    .stat-card .small {
        color: rgba(255,255,255,0.8) !important;
    }
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
    }
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    .subscription-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        border: 1px solid rgba(0,0,0,0.05);
        cursor: pointer;
    }
    .subscription-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }
    .filter-badge {
        cursor: pointer;
        transition: all 0.2s;
        background: #e2e8f0;
        color: #1e293b;
        padding: 0.3rem 0.7rem;
        border-radius: 2rem;
        font-size: 0.7rem;
    }
    .filter-badge:hover {
        background: #cbd5e1;
        transform: scale(1.05);
    }
    .btn-action {
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        transform: scale(1.05);
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
                        <i class=\"fas fa-tags me-1\"></i> Mes abonnements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                Mes abonnements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-building me-1\"></i>
                {{ company.companyName }}
            </p>
        </div>
        <div>
            <a href=\"{{ path('admin_payment_index') }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-credit-card me-1\"></i> Voir mes paiements
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-primary h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Total abonnements</div>
                            <div class=\"stat-value text-white\">{{ stats.total|default(0) }}</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-tags fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-success h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Abonnements actifs</div>
                            <div class=\"stat-value text-white\">{{ stats.active|default(0) }}</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-check-circle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-warning h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">En attente</div>
                            <div class=\"stat-value text-white\">{{ stats.pending|default(0) }}</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-clock fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-danger h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Expirés/Annulés</div>
                            <div class=\"stat-value text-white\">{{ (stats.expired|default(0)) + (stats.cancelled|default(0)) }}</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-exclamation-circle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    {% if filters.status or filters.date_from or filters.date_to %}
    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        {% if filters.status %}
            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                {% if filters.status == 'active' %}Actif
                {% elseif filters.status == 'pending' %}En attente
                {% elseif filters.status == 'expired' %}Expiré
                {% elseif filters.status == 'cancelled' %}Annulé
                {% endif %}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_from %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: {{ filters.date_from }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_to %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: {{ filters.date_to }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    {% endif %}

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\" id=\"filterForm\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-filter me-1\"></i>Statut
                    </label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" {{ filters.status == 'active' ? 'selected' }}>✓ Actif</option>
                        <option value=\"pending\" {{ filters.status == 'pending' ? 'selected' }}>⏳ En attente</option>
                        <option value=\"expired\" {{ filters.status == 'expired' ? 'selected' }}>⌛ Expiré</option>
                        <option value=\"cancelled\" {{ filters.status == 'cancelled' ? 'selected' }}>✗ Annulé</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-calendar me-1\"></i>Date du
                    </label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-calendar me-1\"></i>Date au
                    </label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to }}\">
                </div>
                <div class=\"col-md-3\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 mt-4\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Dernier abonnement - Pleine largeur -->
    {% set lastSubscription = subscriptions|first %}
    {% if lastSubscription %}
        <div class=\"last-subscription-card p-4 mb-4 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 1rem;\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier abonnement enregistré
                </h5>
                <i class=\"fas fa-tag fa-2x opacity-50\"></i>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Plan</span>
                        <span style=\"font-weight: 600;\">{{ lastSubscription.subscriptionPlan.displayName }}</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Période</span>
                        <span style=\"font-weight: 600;\">{{ lastSubscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Statut</span>
                        <span style=\"font-weight: 600;\">
                            {% if lastSubscription.status == 'active' %}
                                <span class=\"badge bg-success\">✓ Actif</span>
                            {% elseif lastSubscription.status == 'pending' %}
                                <span class=\"badge bg-warning text-dark\">⏳ En attente</span>
                            {% elseif lastSubscription.status == 'expired' %}
                                <span class=\"badge bg-danger\">⌛ Expiré</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">✗ Annulé</span>
                            {% endif %}
                        </span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Date début</span>
                        <span style=\"font-weight: 600;\">{{ lastSubscription.startsAt ? lastSubscription.startsAt|date('d/m/Y') : '-' }}</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Date fin</span>
                        <span style=\"font-weight: 600;\">{{ lastSubscription.endsAt ? lastSubscription.endsAt|date('d/m/Y') : '-' }}</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.2);\">
                        <span style=\"font-size: 0.8rem; opacity: 0.8;\">Création</span>
                        <span style=\"font-weight: 600;\">{{ lastSubscription.createdAt|date('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>
            <div class=\"mt-3 text-end\">
                <a href=\"{{ path('admin_subscription_show', {'id': lastSubscription.id}) }}\" class=\"btn btn-light btn-sm\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails complets
                </a>
            </div>
        </div>
    {% else %}
        <div class=\"last-subscription-card p-4 mb-4 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 1rem;\">
            <div class=\"text-center py-3\">
                <i class=\"fas fa-tags fa-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0\">Aucun abonnement enregistré pour le moment</p>
            </div>
        </div>
    {% endif %}

    <!-- Liste des abonnements -->
    <div class=\"row g-4\">
        {% if subscriptions is empty %}
            <div class=\"col-12\">
                <div class=\"text-center py-5 bg-light rounded-4\">
                    <i class=\"fas fa-tags fa-4x text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"fw-semibold\">Aucun abonnement trouvé</h5>
                    <p class=\"text-muted\">Modifiez vos filtres ou contactez le support</p>
                </div>
            </div>
        {% else %}
            {% for sub in subscriptions %}
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"subscription-card card h-100 shadow-sm\">
                        <div class=\"card-body p-4\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <div>
                                    <h5 class=\"mb-1 fw-bold\">{{ sub.subscriptionPlan.displayName }}</h5>
                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas {{ sub.billingPeriod == 'monthly' ? 'fa-calendar-alt' : 'fa-calendar' }} me-1\"></i>
                                        {{ sub.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}
                                    </span>
                                </div>
                                <span class=\"badge-status {{ sub.status }}\">
                                    {% if sub.status == 'active' %}
                                        <i class=\"fas fa-check-circle me-1\"></i> Actif
                                    {% elseif sub.status == 'pending' %}
                                        <i class=\"fas fa-clock me-1\"></i> En attente
                                    {% elseif sub.status == 'expired' %}
                                        <i class=\"fas fa-hourglass-end me-1\"></i> Expiré
                                    {% else %}
                                        <i class=\"fas fa-ban me-1\"></i> Annulé
                                    {% endif %}
                                </span>
                            </div>
                            
                            <div class=\"mt-3\">
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-calendar-alt me-1\"></i>Date début
                                    </span>
                                    <strong>{{ sub.startsAt ? sub.startsAt|date('d/m/Y') : '-' }}</strong>
                                </div>
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-calendar-check me-1\"></i>Date fin
                                    </span>
                                    <strong>
                                        {{ sub.endsAt ? sub.endsAt|date('d/m/Y') : '-' }}
                                        {% if sub.endsAt and sub.endsAt < date() %}
                                            <i class=\"fas fa-exclamation-triangle text-danger ms-1\" title=\"Expiré\"></i>
                                        {% endif %}
                                    </strong>
                                </div>
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-power-off me-1\"></i>Statut actif
                                    </span>
                                    {% if sub.subscriptionActive %}
                                        <span class=\"badge bg-success\"><i class=\"fas fa-check me-1\"></i> Actif</span>
                                    {% else %}
                                        <span class=\"badge bg-danger\"><i class=\"fas fa-times me-1\"></i> Inactif</span>
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"mt-3 pt-3 border-top\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"far fa-calendar me-1\"></i>
                                        Créé le {{ sub.createdAt|date('d/m/Y') }}
                                    </small>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('admin_subscription_show', {'id': sub.id}) }}\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir détails\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('admin_payment_index', {'subscription_id': sub.id}) }}\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Voir les paiements\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-credit-card\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '{{ path('admin_subscription_index') }}';
}
</script>
{% endblock %}", "admin/subscription/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\subscription\\index.html.twig");
    }
}
