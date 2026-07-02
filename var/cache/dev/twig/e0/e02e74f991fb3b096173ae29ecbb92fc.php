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

/* admin/payment/index.html.twig */
class __TwigTemplate_0f7fc976f63d23e0bf0dcbd8e680a058 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/payment/index.html.twig"));

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

        yield "Mes paiements - ";
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
    }
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
    }
    .badge-status.completed, .badge-status.paid { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.failed { background: #fee2e2; color: #991b1b; }
    .payment-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        border: 1px solid rgba(0,0,0,0.05);
        cursor: pointer;
    }
    .payment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
    }
    .amount-text {
        font-size: 1.25rem;
        font-weight: bold;
        color: #0463f1;
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

    // line 72
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

        // line 73
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-credit-card me-1\"></i> Mes paiements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-credit-card text-primary me-2\"></i>
                Historique des paiements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-building me-1\"></i>
                ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 95, $this->source); })()), "companyName", [], "any", false, false, false, 95), "html", null, true);
        yield "
            </p>
        </div>
        <div>
            <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-tags me-1\"></i> Voir mes abonnements
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card bg-primary bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Total paiements</div>
                            <div class=\"stat-value\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 113, $this->source); })()), "total", [], "any", false, false, false, 113), 0)) : (0))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-primary bg-opacity-20 p-3\">
                            <i class=\"fas fa-credit-card text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card bg-success bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Montant total</div>
                            <div class=\"stat-value\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 128, $this->source); })()), "total_amount", [], "any", false, false, false, 128), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <div class=\"rounded-circle bg-success bg-opacity-20 p-3\">
                            <i class=\"fas fa-money-bill-wave text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card bg-info bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Paiements réussis</div>
                            <div class=\"stat-value\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 144, $this->source); })()), "completed", [], "any", false, false, false, 144), 0)) : (0))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-info bg-opacity-20 p-3\">
                            <i class=\"fas fa-check-circle text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    ";
        // line 156
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 156, $this->source); })()), "status", [], "any", false, false, false, 156) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 156, $this->source); })()), "payment_method", [], "any", false, false, false, 156)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 156, $this->source); })()), "date_from", [], "any", false, false, false, 156)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 156, $this->source); })()), "date_to", [], "any", false, false, false, 156))) {
            // line 157
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 158
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 158, $this->source); })()), "status", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 159
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 161, $this->source); })()), "status", [], "any", false, false, false, 161) == "completed")) {
                    yield "Payé
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 162
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 162, $this->source); })()), "status", [], "any", false, false, false, 162) == "pending")) {
                    yield "En attente
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 163
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 163, $this->source); })()), "status", [], "any", false, false, false, 163) == "failed")) {
                    yield "Échoué
                ";
                }
                // line 165
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 168
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 168, $this->source); })()), "payment_method", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('payment_method')\">
                <i class=\"fas fa-credit-card me-1\"></i> Mode: 
                ";
                // line 171
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 171, $this->source); })()), "payment_method", [], "any", false, false, false, 171) == "card")) {
                    yield "Carte bancaire
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 172
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 172, $this->source); })()), "payment_method", [], "any", false, false, false, 172) == "mobile_money")) {
                    yield "Mobile Money
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 173
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 173, $this->source); })()), "payment_method", [], "any", false, false, false, 173) == "transfer")) {
                    yield "Virement
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 174
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 174, $this->source); })()), "payment_method", [], "any", false, false, false, 174) == "cash")) {
                    yield "Espèces
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
    <div class=\"filter-card p-4 mb-4 shadow-sm\">
        <form method=\"get\" class=\"row g-3 align-items-end\" id=\"filterForm\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"completed\" ";
        // line 206
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 206, $this->source); })()), "status", [], "any", false, false, false, 206) == "completed")) ? ("selected") : (""));
        yield ">✅ Payé</option>
                    <option value=\"pending\" ";
        // line 207
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 207, $this->source); })()), "status", [], "any", false, false, false, 207) == "pending")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                    <option value=\"failed\" ";
        // line 208
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 208, $this->source); })()), "status", [], "any", false, false, false, 208) == "failed")) ? ("selected") : (""));
        yield ">❌ Échoué</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-credit-card me-1\"></i>Mode de paiement
                </label>
                <select name=\"payment_method\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"card\" ";
        // line 217
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 217, $this->source); })()), "payment_method", [], "any", false, false, false, 217) == "card")) ? ("selected") : (""));
        yield ">💳 Carte bancaire</option>
                    <option value=\"mobile_money\" ";
        // line 218
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 218, $this->source); })()), "payment_method", [], "any", false, false, false, 218) == "mobile_money")) ? ("selected") : (""));
        yield ">📱 Mobile Money</option>
                    <option value=\"transfer\" ";
        // line 219
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 219, $this->source); })()), "payment_method", [], "any", false, false, false, 219) == "transfer")) ? ("selected") : (""));
        yield ">🏦 Virement</option>
                    <option value=\"cash\" ";
        // line 220
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 220, $this->source); })()), "payment_method", [], "any", false, false, false, 220) == "cash")) ? ("selected") : (""));
        yield ">💰 Espèces</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 227, $this->source); })()), "date_from", [], "any", false, false, false, 227), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 233, $this->source); })()), "date_to", [], "any", false, false, false, 233), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- Liste des paiements en cartes -->
    <div class=\"row g-4\">
        ";
        // line 245
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 245, $this->source); })()))) {
            // line 246
            yield "            <div class=\"col-12\">
                <div class=\"text-center py-5 bg-light rounded-4\">
                    <i class=\"fas fa-credit-card fa-4x text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"fw-semibold\">Aucun paiement trouvé</h5>
                    <p class=\"text-muted\">Modifiez vos filtres</p>
                </div>
            </div>
        ";
        } else {
            // line 254
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 254, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 255
                yield "                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"payment-card card h-100 shadow-sm\">
                        <div class=\"card-body p-4\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <div>
                                    <span class=\"badge bg-secondary\">#";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 260), "html", null, true);
                yield "</span>
                                    <div class=\"mt-2\">
                                        <span class=\"amount-text\">";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 262), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                    </div>
                                </div>
                                <span class=\"badge-status ";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 265), "html", null, true);
                yield "\">
                                    ";
                // line 266
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 266) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 266) == "paid"))) {
                    // line 267
                    yield "                                        <i class=\"fas fa-check-circle me-1\"></i> Payé
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 268
$context["payment"], "status", [], "any", false, false, false, 268) == "pending")) {
                    // line 269
                    yield "                                        <i class=\"fas fa-clock me-1\"></i> En attente
                                    ";
                } else {
                    // line 271
                    yield "                                        <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                    ";
                }
                // line 273
                yield "                                </span>
                            </div>
                            
                            <div class=\"mt-3\">
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-credit-card me-1\"></i>Mode
                                    </span>
                                    <strong>
                                        ";
                // line 282
                $context["methodLabels"] = ["card" => "💳 Carte", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement", "cash" => "💰 Espèces"];
                // line 288
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288), [], "array", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methodLabels"]) || array_key_exists("methodLabels", $context) ? $context["methodLabels"] : (function () { throw new RuntimeError('Variable "methodLabels" does not exist.', 288, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288), [], "array", false, false, false, 288), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288))) : (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288))), "html", null, true);
                yield "
                                    </strong>
                                </div>
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"far fa-calendar me-1\"></i>Date
                                    </span>
                                    <strong>";
                // line 295
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 295), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 295), "d/m/Y H:i"), "html", null, true)));
                yield "</strong>
                                </div>
                                ";
                // line 297
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 298
                    yield "                                    <div class=\"d-flex justify-content-between\">
                                        <span class=\"text-muted\">
                                            <i class=\"fas fa-hashtag me-1\"></i>Transaction
                                        </span>
                                        <code class=\"small\">";
                    // line 302
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 302), 0, 12), "html", null, true);
                    yield "...</code>
                                    </div>
                                ";
                }
                // line 305
                yield "                            </div>
                            
                            <div class=\"mt-3 pt-3 border-top\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    ";
                // line 309
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 309)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 310
                    yield "                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-tag me-1\"></i>
                                            Abonnement #";
                    // line 312
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312), "html", null, true);
                    yield "
                                        </small>
                                        <a href=\"";
                    // line 314
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 314), "id", [], "any", false, false, false, 314)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Voir l'abonnement\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-tags\"></i>
                                        </a>
                                    ";
                } else {
                    // line 318
                    yield "                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-info-circle me-1\"></i>
                                            Sans abonnement
                                        </small>
                                    ";
                }
                // line 323
                yield "                                </div>
                            </div>
                            
                            ";
                // line 326
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 327
                    yield "                                <div class=\"mt-2\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-file-invoice me-1\"></i>
                                        Facture: ";
                    // line 330
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 330), "html", null, true);
                    yield "
                                    </small>
                                </div>
                            ";
                }
                // line 334
                yield "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            yield "        ";
        }
        // line 339
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 343
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

        // line 344
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
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index");
        yield "';
}

// Auto-click sur le filtre entreprise si subscription_id est passé
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const subscriptionId = urlParams.get('subscription_id');
    if (subscriptionId) {
        // Optionnel: afficher un message ou filtrer par abonnement
        console.log('Affichage des paiements pour l\\'abonnement:', subscriptionId);
    }
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
        return "admin/payment/index.html.twig";
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
        return array (  661 => 354,  648 => 344,  635 => 343,  622 => 339,  619 => 338,  610 => 334,  603 => 330,  598 => 327,  596 => 326,  591 => 323,  584 => 318,  577 => 314,  572 => 312,  568 => 310,  566 => 309,  560 => 305,  554 => 302,  548 => 298,  546 => 297,  541 => 295,  530 => 288,  528 => 282,  517 => 273,  513 => 271,  509 => 269,  507 => 268,  504 => 267,  502 => 266,  498 => 265,  492 => 262,  487 => 260,  480 => 255,  475 => 254,  465 => 246,  463 => 245,  448 => 233,  439 => 227,  429 => 220,  425 => 219,  421 => 218,  417 => 217,  405 => 208,  401 => 207,  397 => 206,  385 => 196,  378 => 191,  371 => 187,  368 => 186,  365 => 185,  358 => 181,  355 => 180,  352 => 179,  347 => 176,  342 => 174,  338 => 173,  334 => 172,  330 => 171,  326 => 169,  323 => 168,  318 => 165,  313 => 163,  309 => 162,  305 => 161,  301 => 159,  299 => 158,  296 => 157,  294 => 156,  279 => 144,  260 => 128,  242 => 113,  225 => 99,  218 => 95,  200 => 80,  191 => 73,  178 => 72,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/payment/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mes paiements - {{ company.companyName }}{% endblock %}

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
    }
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
    }
    .badge-status.completed, .badge-status.paid { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.failed { background: #fee2e2; color: #991b1b; }
    .payment-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        border: 1px solid rgba(0,0,0,0.05);
        cursor: pointer;
    }
    .payment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
    }
    .amount-text {
        font-size: 1.25rem;
        font-weight: bold;
        color: #0463f1;
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
                        <i class=\"fas fa-credit-card me-1\"></i> Mes paiements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-credit-card text-primary me-2\"></i>
                Historique des paiements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-building me-1\"></i>
                {{ company.companyName }}
            </p>
        </div>
        <div>
            <a href=\"{{ path('admin_subscription_index') }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-tags me-1\"></i> Voir mes abonnements
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card bg-primary bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Total paiements</div>
                            <div class=\"stat-value\">{{ stats.total|default(0)|number_format }}</div>
                        </div>
                        <div class=\"rounded-circle bg-primary bg-opacity-20 p-3\">
                            <i class=\"fas fa-credit-card text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card bg-success bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Montant total</div>
                            <div class=\"stat-value\">{{ stats.total_amount|default(0)|number_format(0, ',', ' ') }}</div>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                        <div class=\"rounded-circle bg-success bg-opacity-20 p-3\">
                            <i class=\"fas fa-money-bill-wave text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card stat-card bg-info bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Paiements réussis</div>
                            <div class=\"stat-value\">{{ stats.completed|default(0)|number_format }}</div>
                        </div>
                        <div class=\"rounded-circle bg-info bg-opacity-20 p-3\">
                            <i class=\"fas fa-check-circle text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    {% if filters.status or filters.payment_method or filters.date_from or filters.date_to %}
    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        {% if filters.status %}
            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                {% if filters.status == 'completed' %}Payé
                {% elseif filters.status == 'pending' %}En attente
                {% elseif filters.status == 'failed' %}Échoué
                {% endif %}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.payment_method %}
            <span class=\"filter-badge\" onclick=\"removeFilter('payment_method')\">
                <i class=\"fas fa-credit-card me-1\"></i> Mode: 
                {% if filters.payment_method == 'card' %}Carte bancaire
                {% elseif filters.payment_method == 'mobile_money' %}Mobile Money
                {% elseif filters.payment_method == 'transfer' %}Virement
                {% elseif filters.payment_method == 'cash' %}Espèces
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
    <div class=\"filter-card p-4 mb-4 shadow-sm\">
        <form method=\"get\" class=\"row g-3 align-items-end\" id=\"filterForm\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"completed\" {{ filters.status == 'completed' ? 'selected' }}>✅ Payé</option>
                    <option value=\"pending\" {{ filters.status == 'pending' ? 'selected' }}>⏳ En attente</option>
                    <option value=\"failed\" {{ filters.status == 'failed' ? 'selected' }}>❌ Échoué</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-credit-card me-1\"></i>Mode de paiement
                </label>
                <select name=\"payment_method\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"card\" {{ filters.payment_method == 'card' ? 'selected' }}>💳 Carte bancaire</option>
                    <option value=\"mobile_money\" {{ filters.payment_method == 'mobile_money' ? 'selected' }}>📱 Mobile Money</option>
                    <option value=\"transfer\" {{ filters.payment_method == 'transfer' ? 'selected' }}>🏦 Virement</option>
                    <option value=\"cash\" {{ filters.payment_method == 'cash' ? 'selected' }}>💰 Espèces</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from }}\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to }}\">
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- Liste des paiements en cartes -->
    <div class=\"row g-4\">
        {% if payments is empty %}
            <div class=\"col-12\">
                <div class=\"text-center py-5 bg-light rounded-4\">
                    <i class=\"fas fa-credit-card fa-4x text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"fw-semibold\">Aucun paiement trouvé</h5>
                    <p class=\"text-muted\">Modifiez vos filtres</p>
                </div>
            </div>
        {% else %}
            {% for payment in payments %}
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"payment-card card h-100 shadow-sm\">
                        <div class=\"card-body p-4\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <div>
                                    <span class=\"badge bg-secondary\">#{{ payment.id }}</span>
                                    <div class=\"mt-2\">
                                        <span class=\"amount-text\">{{ payment.amount|number_format(0, ',', ' ') }} FCFA</span>
                                    </div>
                                </div>
                                <span class=\"badge-status {{ payment.status }}\">
                                    {% if payment.status == 'completed' or payment.status == 'paid' %}
                                        <i class=\"fas fa-check-circle me-1\"></i> Payé
                                    {% elseif payment.status == 'pending' %}
                                        <i class=\"fas fa-clock me-1\"></i> En attente
                                    {% else %}
                                        <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                    {% endif %}
                                </span>
                            </div>
                            
                            <div class=\"mt-3\">
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"fas fa-credit-card me-1\"></i>Mode
                                    </span>
                                    <strong>
                                        {% set methodLabels = {
                                            'card': '💳 Carte',
                                            'mobile_money': '📱 Mobile Money',
                                            'transfer': '🏦 Virement',
                                            'cash': '💰 Espèces'
                                        } %}
                                        {{ methodLabels[payment.paymentMethod]|default(payment.paymentMethod) }}
                                    </strong>
                                </div>
                                <div class=\"d-flex justify-content-between mb-2\">
                                    <span class=\"text-muted\">
                                        <i class=\"far fa-calendar me-1\"></i>Date
                                    </span>
                                    <strong>{{ payment.paymentDate ? payment.paymentDate|date('d/m/Y H:i') : payment.createdAt|date('d/m/Y H:i') }}</strong>
                                </div>
                                {% if payment.transactionId %}
                                    <div class=\"d-flex justify-content-between\">
                                        <span class=\"text-muted\">
                                            <i class=\"fas fa-hashtag me-1\"></i>Transaction
                                        </span>
                                        <code class=\"small\">{{ payment.transactionId|slice(0, 12) }}...</code>
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mt-3 pt-3 border-top\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    {% if payment.subscription %}
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-tag me-1\"></i>
                                            Abonnement #{{ payment.subscription.id }}
                                        </small>
                                        <a href=\"{{ path('admin_subscription_show', {'id': payment.subscription.id}) }}\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Voir l'abonnement\" onclick=\"event.stopPropagation()\">
                                            <i class=\"fas fa-tags\"></i>
                                        </a>
                                    {% else %}
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-info-circle me-1\"></i>
                                            Sans abonnement
                                        </small>
                                    {% endif %}
                                </div>
                            </div>
                            
                            {% if payment.invoiceNumber %}
                                <div class=\"mt-2\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-file-invoice me-1\"></i>
                                        Facture: {{ payment.invoiceNumber }}
                                    </small>
                                </div>
                            {% endif %}
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
    window.location.href = '{{ path('admin_payment_index') }}';
}

// Auto-click sur le filtre entreprise si subscription_id est passé
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const subscriptionId = urlParams.get('subscription_id');
    if (subscriptionId) {
        // Optionnel: afficher un message ou filtrer par abonnement
        console.log('Affichage des paiements pour l\\'abonnement:', subscriptionId);
    }
});
</script>
{% endblock %}", "admin/payment/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\payment\\index.html.twig");
    }
}
