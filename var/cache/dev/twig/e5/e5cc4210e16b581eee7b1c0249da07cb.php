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

/* super_admin/payment/index.html.twig */
class __TwigTemplate_7ae79af065bd0634189b5f4e9e66bb26 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/payment/index.html.twig"));

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

        yield "Gestion des paiements - Super Admin";
        
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
    .stat-card .text-muted {
        color: rgba(255,255,255,0.7) !important;
    }
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
        transition: all 0.2s ease;
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
    .badge-status.refunded { background: #f1f5f9; color: #475569; }
    .table-container {
        overflow-x: auto;
    }
    .payment-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .payment-row:hover {
        background: #f1f5f9;
    }
    .amount-cell {
        font-weight: 700;
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
    /* Carte dernier paiement */
    .last-payment-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .last-payment-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.8rem;
        opacity: 0.8;
        color: rgba(255,255,255,0.8);
    }
    .info-value {
        font-weight: 600;
        color: #ffffff;
    }
    .stat-card .small {
        color: rgba(255,255,255,0.8) !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
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

        // line 110
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-credit-card me-1\"></i> Paiements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-credit-card text-primary me-2\"></i>
                Gestion des paiements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-globe me-1\"></i>
                Consultez tous les paiements effectués par les entreprises
            </p>
        </div>
        <div>
            <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-tags me-1\"></i> Voir les abonnements
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
                            <div class=\"small text-white opacity-75\">Total paiements</div>
                            <div class=\"stat-value text-white\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 150, $this->source); })()))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-credit-card fa-fw text-white\"></i>
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
                            <div class=\"small text-white opacity-75\">Montant total</div>
                            <div class=\"stat-value text-white\">
                                ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("totalAmount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 166, $this->source); })()), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <small class=\"text-white opacity-75\">FCFA</small>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-money-bill-wave fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-info h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Paiements réussis</div>
                            <div class=\"stat-value text-white\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 183, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 183, $this->source); })()), "status", [], "any", false, false, false, 183) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 183, $this->source); })()), "status", [], "any", false, false, false, 183) == "paid")); }))), "html", null, true);
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
            <div class=\"card stat-card bg-danger h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Échoués/En attente</div>
                            <div class=\"stat-value text-white\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 198, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 198, $this->source); })()), "status", [], "any", false, false, false, 198) == "failed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 198, $this->source); })()), "status", [], "any", false, false, false, 198) == "pending")); }))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-exclamation-triangle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    ";
        // line 210
        if (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "company_id", [], "any", false, false, false, 210) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "status", [], "any", false, false, false, 210)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "payment_method", [], "any", false, false, false, 210)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "date_from", [], "any", false, false, false, 210)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "date_to", [], "any", false, false, false, 210))) {
            // line 211
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 212
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 212, $this->source); })()), "company_id", [], "any", false, false, false, 212) && array_key_exists("companies", $context))) {
                // line 213
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 213, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                    // line 214
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 214) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 214, $this->source); })()), "company_id", [], "any", false, false, false, 214))) {
                        // line 215
                        yield "                    <span class=\"filter-badge\" onclick=\"removeFilter('company_id')\">
                        <i class=\"fas fa-building me-1\"></i> ";
                        // line 216
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 216), "html", null, true);
                        yield "
                        <i class=\"fas fa-times ms-1\"></i>
                    </span>
                ";
                    }
                    // line 220
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                yield "        ";
            }
            // line 222
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 222, $this->source); })()), "status", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 223
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                ";
                // line 225
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 225, $this->source); })()), "status", [], "any", false, false, false, 225) == "completed")) {
                    yield "Payé
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 226
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 226, $this->source); })()), "status", [], "any", false, false, false, 226) == "pending")) {
                    yield "En attente
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 227
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 227, $this->source); })()), "status", [], "any", false, false, false, 227) == "failed")) {
                    yield "Échoué
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 228
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 228, $this->source); })()), "status", [], "any", false, false, false, 228) == "refunded")) {
                    yield "Remboursé
                ";
                } else {
                    // line 229
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 229, $this->source); })()), "status", [], "any", false, false, false, 229), "html", null, true);
                    yield "
                ";
                }
                // line 231
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 234
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 234, $this->source); })()), "payment_method", [], "any", false, false, false, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 235
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('payment_method')\">
                <i class=\"fas fa-credit-card me-1\"></i> Mode: 
                ";
                // line 237
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 237, $this->source); })()), "payment_method", [], "any", false, false, false, 237) == "card")) {
                    yield "Carte bancaire
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 238
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 238, $this->source); })()), "payment_method", [], "any", false, false, false, 238) == "mobile_money")) {
                    yield "Mobile Money
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 239
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 239, $this->source); })()), "payment_method", [], "any", false, false, false, 239) == "transfer")) {
                    yield "Virement
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 240
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 240, $this->source); })()), "payment_method", [], "any", false, false, false, 240) == "cash")) {
                    yield "Espèces
                ";
                } else {
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 241, $this->source); })()), "payment_method", [], "any", false, false, false, 241), "html", null, true);
                    yield "
                ";
                }
                // line 243
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 246
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 246, $this->source); })()), "date_from", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: ";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 248, $this->source); })()), "date_from", [], "any", false, false, false, 248), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 252
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 252, $this->source); })()), "date_to", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 253
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: ";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 254, $this->source); })()), "date_to", [], "any", false, false, false, 254), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 258
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 263
        yield "
    <!-- Filtres -->
    <div class=\"filter-card p-4 mb-4 shadow-sm\">
        <form method=\"get\" class=\"row g-3 align-items-end\" id=\"filterForm\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-building me-1\"></i>Entreprise
                </label>
                <select name=\"company_id\" class=\"form-select\">
                    <option value=\"\">Toutes</option>
                    ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("companies", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 273, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 274
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 274), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 274, $this->source); })()), "company_id", [], "any", false, false, false, 274) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 274))) ? ("selected") : (""));
            yield ">
                            ";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 275), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"completed\" ";
        // line 286
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 286, $this->source); })()), "status", [], "any", false, false, false, 286) == "completed")) ? ("selected") : (""));
        yield ">✅ Payé</option>
                    <option value=\"pending\" ";
        // line 287
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 287, $this->source); })()), "status", [], "any", false, false, false, 287) == "pending")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                    <option value=\"failed\" ";
        // line 288
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 288, $this->source); })()), "status", [], "any", false, false, false, 288) == "failed")) ? ("selected") : (""));
        yield ">❌ Échoué</option>
                    <option value=\"refunded\" ";
        // line 289
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 289, $this->source); })()), "status", [], "any", false, false, false, 289) == "refunded")) ? ("selected") : (""));
        yield ">↩️ Remboursé</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-credit-card me-1\"></i>Mode de paiement
                </label>
                <select name=\"payment_method\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"card\" ";
        // line 298
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 298, $this->source); })()), "payment_method", [], "any", false, false, false, 298) == "card")) ? ("selected") : (""));
        yield ">💳 Carte bancaire</option>
                    <option value=\"mobile_money\" ";
        // line 299
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 299, $this->source); })()), "payment_method", [], "any", false, false, false, 299) == "mobile_money")) ? ("selected") : (""));
        yield ">📱 Mobile Money</option>
                    <option value=\"transfer\" ";
        // line 300
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 300, $this->source); })()), "payment_method", [], "any", false, false, false, 300) == "transfer")) ? ("selected") : (""));
        yield ">🏦 Virement</option>
                    <option value=\"cash\" ";
        // line 301
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 301, $this->source); })()), "payment_method", [], "any", false, false, false, 301) == "cash")) ? ("selected") : (""));
        yield ">💰 Espèces</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 308, $this->source); })()), "date_from", [], "any", false, false, false, 308), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 314, $this->source); })()), "date_to", [], "any", false, false, false, 314), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-1\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Dernier paiement - Pleine largeur -->
    ";
        // line 325
        $context["lastPayment"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 325, $this->source); })()));
        // line 326
        yield "    ";
        if ((($tmp = (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 326, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 327
            yield "        <div class=\"last-payment-card p-4 mb-4 text-white\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier paiement enregistré
                </h5>
                <i class=\"fas fa-credit-card fa-2x opacity-50\"></i>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Entreprise</span>
                        <span class=\"info-value\">";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 338, $this->source); })()), "hmaService", [], "any", false, false, false, 338), "companyName", [], "any", false, false, false, 338), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Montant</span>
                        <span class=\"info-value\">";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 344, $this->source); })()), "amount", [], "any", false, false, false, 344), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Mode de paiement</span>
                        <span class=\"info-value\">
                            ";
            // line 351
            $context["methodLabels"] = ["card" => "💳 Carte", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement", "cash" => "💰 Espèces"];
            // line 357
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 357, $this->source); })()), "paymentMethod", [], "any", false, false, false, 357), [], "array", true, true, false, 357)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methodLabels"]) || array_key_exists("methodLabels", $context) ? $context["methodLabels"] : (function () { throw new RuntimeError('Variable "methodLabels" does not exist.', 357, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 357, $this->source); })()), "paymentMethod", [], "any", false, false, false, 357), [], "array", false, false, false, 357), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 357, $this->source); })()), "paymentMethod", [], "any", false, false, false, 357))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 357, $this->source); })()), "paymentMethod", [], "any", false, false, false, 357))), "html", null, true);
            yield "
                        </span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Statut</span>
                        <span class=\"info-value\">
                            ";
            // line 365
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 365, $this->source); })()), "status", [], "any", false, false, false, 365) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 365, $this->source); })()), "status", [], "any", false, false, false, 365) == "paid"))) {
                // line 366
                yield "                                <span class=\"badge bg-success\">✓ Payé</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 367
(isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 367, $this->source); })()), "status", [], "any", false, false, false, 367) == "pending")) {
                // line 368
                yield "                                <span class=\"badge bg-warning text-dark\">⏳ En attente</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 369
(isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 369, $this->source); })()), "status", [], "any", false, false, false, 369) == "failed")) {
                // line 370
                yield "                                <span class=\"badge bg-danger\">❌ Échoué</span>
                            ";
            } else {
                // line 372
                yield "                                <span class=\"badge bg-secondary\">↩️ Remboursé</span>
                            ";
            }
            // line 374
            yield "                        </span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date paiement</span>
                        <span class=\"info-value\">";
            // line 380
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 380, $this->source); })()), "paymentDate", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 380, $this->source); })()), "paymentDate", [], "any", false, false, false, 380), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 380, $this->source); })()), "createdAt", [], "any", false, false, false, 380), "d/m/Y H:i"), "html", null, true)));
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Transaction</span>
                        <span class=\"info-value\">
                            ";
            // line 387
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 387, $this->source); })()), "transactionId", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 388
                yield "                                <code class=\"small bg-dark text-white px-2 py-1 rounded\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 388, $this->source); })()), "transactionId", [], "any", false, false, false, 388), 0, 12), "html", null, true);
                yield "...</code>
                            ";
            } else {
                // line 390
                yield "                                —
                            ";
            }
            // line 392
            yield "                        </span>
                    </div>
                </div>
            </div>
            <div class=\"mt-3 text-end\">
                <a href=\"";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 397, $this->source); })()), "id", [], "any", false, false, false, 397)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails complets
                </a>
            </div>
        </div>
    ";
        } else {
            // line 403
            yield "        <div class=\"last-payment-card p-4 mb-4 text-white\">
            <div class=\"text-center py-3\">
                <i class=\"fas fa-credit-card fa-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0\">Aucun paiement enregistré pour le moment</p>
            </div>
        </div>
    ";
        }
        // line 410
        yield "
    <!-- Liste des paiements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Historique des paiements
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 418, $this->source); })())), "html", null, true);
        yield " paiement(s)</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                ";
        // line 422
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 422, $this->source); })()))) {
            // line 423
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-credit-card fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0\">Aucun paiement trouvé</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres</p>
                    </div>
                ";
        } else {
            // line 429
            yield "                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 200px\">Entreprise</th>
                                <th style=\"min-width: 130px\">Abonnement</th>
                                <th style=\"min-width: 120px\">Montant</th>
                                <th style=\"min-width: 130px\">Mode</th>
                                <th style=\"min-width: 100px\">Statut</th>
                                <th style=\"min-width: 150px\">Date</th>
                                <th style=\"min-width: 150px\">Transaction</th>
                                <th style=\"min-width: 130px\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 443
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 443, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 444
                yield "                                <tr class=\"payment-row\">
                                    <td onclick=\"window.location='";
                // line 445
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 445)]), "html", null, true);
                yield "'\">
                                        <strong>";
                // line 446
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "hmaService", [], "any", false, false, false, 446), "companyName", [], "any", false, false, false, 446), "html", null, true);
                yield "</strong>
                                        <br>
                                        <small class=\"text-muted\">";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "hmaService", [], "any", false, false, false, 448), "subscriptionNumber", [], "any", false, false, false, 448), "html", null, true);
                yield "</small>
                                    </td>
                                    <td onclick=\"window.location='";
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 450)]), "html", null, true);
                yield "'\">
                                        ";
                // line 451
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 451)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 452
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 452), "id", [], "any", false, false, false, 452)]), "html", null, true);
                    yield "\" class=\"text-decoration-none\" onclick=\"event.stopPropagation()\">
                                                <span class=\"badge bg-info\">
                                                    <i class=\"fas fa-tag me-1\"></i> Abo #";
                    // line 454
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 454), "id", [], "any", false, false, false, 454), "html", null, true);
                    yield "
                                                </span>
                                            </a>
                                            <br>
                                            <small class=\"text-muted\">";
                    // line 458
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 458), "subscriptionPlan", [], "any", false, false, false, 458), "displayName", [], "any", false, false, false, 458), "html", null, true);
                    yield "</small>
                                        ";
                } else {
                    // line 460
                    yield "                                            <span class=\"badge bg-secondary\">Sans abonnement</span>
                                        ";
                }
                // line 462
                yield "                                    </td>
                                    <td class=\"amount-cell\" onclick=\"window.location='";
                // line 463
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 463)]), "html", null, true);
                yield "'\">
                                        ";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 464), 0, ",", " "), "html", null, true);
                yield " FCFA
                                    </td>
                                    <td onclick=\"window.location='";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 466)]), "html", null, true);
                yield "'\">
                                        ";
                // line 467
                $context["methodLabels"] = ["card" => "💳 Carte", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement", "cash" => "💰 Espèces"];
                // line 473
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 473), [], "array", true, true, false, 473)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methodLabels"]) || array_key_exists("methodLabels", $context) ? $context["methodLabels"] : (function () { throw new RuntimeError('Variable "methodLabels" does not exist.', 473, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 473), [], "array", false, false, false, 473), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 473))) : (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 473))), "html", null, true);
                yield "
                                    </td>
                                    <td onclick=\"window.location='";
                // line 475
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 475)]), "html", null, true);
                yield "'\">
                                        <span class=\"badge-status ";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 476), "html", null, true);
                yield "\">
                                            ";
                // line 477
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 477) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 477) == "paid"))) {
                    // line 478
                    yield "                                                <i class=\"fas fa-check-circle me-1\"></i> Payé
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 479
$context["payment"], "status", [], "any", false, false, false, 479) == "pending")) {
                    // line 480
                    yield "                                                <i class=\"fas fa-clock me-1\"></i> En attente
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 481
$context["payment"], "status", [], "any", false, false, false, 481) == "failed")) {
                    // line 482
                    yield "                                                <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 483
$context["payment"], "status", [], "any", false, false, false, 483) == "refunded")) {
                    // line 484
                    yield "                                                <i class=\"fas fa-undo-alt me-1\"></i> Remboursé
                                            ";
                } else {
                    // line 486
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 486), "html", null, true);
                    yield "
                                            ";
                }
                // line 488
                yield "                                        </span>
                                    </td>
                                    <td onclick=\"window.location='";
                // line 490
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 490)]), "html", null, true);
                yield "'\">
                                        <i class=\"far fa-calendar text-muted me-1\"></i>
                                        ";
                // line 492
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 492)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 492), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 492), "d/m/Y H:i"), "html", null, true)));
                yield "
                                    </td>
                                    <td onclick=\"window.location='";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 494)]), "html", null, true);
                yield "'\">
                                        ";
                // line 495
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 496
                    yield "                                            <code class=\"small\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 496), 0, 12), "html", null, true);
                    yield "...</code>
                                        ";
                } else {
                    // line 498
                    yield "                                            <span class=\"text-muted\">—</span>
                                        ";
                }
                // line 500
                yield "                                    </td>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 503)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            ";
                // line 506
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 506)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 507
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 507), "id", [], "any", false, false, false, 507)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Voir l'abonnement\">
                                                    <i class=\"fas fa-tags\"></i>
                                                </a>
                                            ";
                }
                // line 511
                yield "                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 518
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 524
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

        // line 525
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
        // line 535
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
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
        return "super_admin/payment/index.html.twig";
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
        return array (  976 => 535,  963 => 525,  950 => 524,  935 => 518,  930 => 515,  921 => 511,  913 => 507,  911 => 506,  905 => 503,  900 => 500,  896 => 498,  890 => 496,  888 => 495,  884 => 494,  879 => 492,  874 => 490,  870 => 488,  864 => 486,  860 => 484,  858 => 483,  855 => 482,  853 => 481,  850 => 480,  848 => 479,  845 => 478,  843 => 477,  839 => 476,  835 => 475,  829 => 473,  827 => 467,  823 => 466,  818 => 464,  814 => 463,  811 => 462,  807 => 460,  802 => 458,  795 => 454,  789 => 452,  787 => 451,  783 => 450,  778 => 448,  773 => 446,  769 => 445,  766 => 444,  762 => 443,  746 => 429,  738 => 423,  736 => 422,  729 => 418,  719 => 410,  710 => 403,  701 => 397,  694 => 392,  690 => 390,  684 => 388,  682 => 387,  672 => 380,  664 => 374,  660 => 372,  656 => 370,  654 => 369,  651 => 368,  649 => 367,  646 => 366,  644 => 365,  632 => 357,  630 => 351,  620 => 344,  611 => 338,  598 => 327,  595 => 326,  593 => 325,  579 => 314,  570 => 308,  560 => 301,  556 => 300,  552 => 299,  548 => 298,  536 => 289,  532 => 288,  528 => 287,  524 => 286,  514 => 278,  505 => 275,  498 => 274,  494 => 273,  482 => 263,  475 => 258,  468 => 254,  465 => 253,  462 => 252,  455 => 248,  452 => 247,  449 => 246,  444 => 243,  439 => 241,  434 => 240,  430 => 239,  426 => 238,  422 => 237,  418 => 235,  415 => 234,  410 => 231,  405 => 229,  400 => 228,  396 => 227,  392 => 226,  388 => 225,  384 => 223,  381 => 222,  378 => 221,  372 => 220,  365 => 216,  362 => 215,  359 => 214,  354 => 213,  352 => 212,  349 => 211,  347 => 210,  332 => 198,  314 => 183,  294 => 166,  275 => 150,  258 => 136,  236 => 117,  227 => 110,  214 => 109,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/payment/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des paiements - Super Admin{% endblock %}

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
    .stat-card .text-muted {
        color: rgba(255,255,255,0.7) !important;
    }
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
        transition: all 0.2s ease;
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
    .badge-status.refunded { background: #f1f5f9; color: #475569; }
    .table-container {
        overflow-x: auto;
    }
    .payment-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .payment-row:hover {
        background: #f1f5f9;
    }
    .amount-cell {
        font-weight: 700;
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
    /* Carte dernier paiement */
    .last-payment-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .last-payment-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.8rem;
        opacity: 0.8;
        color: rgba(255,255,255,0.8);
    }
    .info-value {
        font-weight: 600;
        color: #ffffff;
    }
    .stat-card .small {
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
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-credit-card me-1\"></i> Paiements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-credit-card text-primary me-2\"></i>
                Gestion des paiements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-globe me-1\"></i>
                Consultez tous les paiements effectués par les entreprises
            </p>
        </div>
        <div>
            <a href=\"{{ path('super_admin_subscription_index') }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-tags me-1\"></i> Voir les abonnements
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
                            <div class=\"small text-white opacity-75\">Total paiements</div>
                            <div class=\"stat-value text-white\">{{ payments|length|number_format }}</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-credit-card fa-fw text-white\"></i>
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
                            <div class=\"small text-white opacity-75\">Montant total</div>
                            <div class=\"stat-value text-white\">
                                {{ totalAmount|default(0)|number_format(0, ',', ' ') }}
                            </div>
                            <small class=\"text-white opacity-75\">FCFA</small>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-money-bill-wave fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-info h-100\">
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\">Paiements réussis</div>
                            <div class=\"stat-value text-white\">{{ payments|filter(p => p.status == 'completed' or p.status == 'paid')|length|number_format }}</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-check-circle fa-fw text-white\"></i>
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
                            <div class=\"small text-white opacity-75\">Échoués/En attente</div>
                            <div class=\"stat-value text-white\">{{ payments|filter(p => p.status == 'failed' or p.status == 'pending')|length|number_format }}</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                            <i class=\"fas fa-exclamation-triangle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    {% if filters.company_id or filters.status or filters.payment_method or filters.date_from or filters.date_to %}
    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        {% if filters.company_id and companies is defined %}
            {% for company in companies %}
                {% if company.id == filters.company_id %}
                    <span class=\"filter-badge\" onclick=\"removeFilter('company_id')\">
                        <i class=\"fas fa-building me-1\"></i> {{ company.companyName }}
                        <i class=\"fas fa-times ms-1\"></i>
                    </span>
                {% endif %}
            {% endfor %}
        {% endif %}
        {% if filters.status %}
            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                {% if filters.status == 'completed' %}Payé
                {% elseif filters.status == 'pending' %}En attente
                {% elseif filters.status == 'failed' %}Échoué
                {% elseif filters.status == 'refunded' %}Remboursé
                {% else %}{{ filters.status }}
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
                {% else %}{{ filters.payment_method }}
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
                    <i class=\"fas fa-building me-1\"></i>Entreprise
                </label>
                <select name=\"company_id\" class=\"form-select\">
                    <option value=\"\">Toutes</option>
                    {% for company in companies|default([]) %}
                        <option value=\"{{ company.id }}\" {{ filters.company_id == company.id ? 'selected' }}>
                            {{ company.companyName }}
                        </option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"completed\" {{ filters.status == 'completed' ? 'selected' }}>✅ Payé</option>
                    <option value=\"pending\" {{ filters.status == 'pending' ? 'selected' }}>⏳ En attente</option>
                    <option value=\"failed\" {{ filters.status == 'failed' ? 'selected' }}>❌ Échoué</option>
                    <option value=\"refunded\" {{ filters.status == 'refunded' ? 'selected' }}>↩️ Remboursé</option>
                </select>
            </div>
            <div class=\"col-md-2\">
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
            <div class=\"col-md-1\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Dernier paiement - Pleine largeur -->
    {% set lastPayment = payments|first %}
    {% if lastPayment %}
        <div class=\"last-payment-card p-4 mb-4 text-white\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier paiement enregistré
                </h5>
                <i class=\"fas fa-credit-card fa-2x opacity-50\"></i>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Entreprise</span>
                        <span class=\"info-value\">{{ lastPayment.hmaService.companyName }}</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Montant</span>
                        <span class=\"info-value\">{{ lastPayment.amount|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Mode de paiement</span>
                        <span class=\"info-value\">
                            {% set methodLabels = {
                                'card': '💳 Carte',
                                'mobile_money': '📱 Mobile Money',
                                'transfer': '🏦 Virement',
                                'cash': '💰 Espèces'
                            } %}
                            {{ methodLabels[lastPayment.paymentMethod]|default(lastPayment.paymentMethod) }}
                        </span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Statut</span>
                        <span class=\"info-value\">
                            {% if lastPayment.status == 'completed' or lastPayment.status == 'paid' %}
                                <span class=\"badge bg-success\">✓ Payé</span>
                            {% elseif lastPayment.status == 'pending' %}
                                <span class=\"badge bg-warning text-dark\">⏳ En attente</span>
                            {% elseif lastPayment.status == 'failed' %}
                                <span class=\"badge bg-danger\">❌ Échoué</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">↩️ Remboursé</span>
                            {% endif %}
                        </span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date paiement</span>
                        <span class=\"info-value\">{{ lastPayment.paymentDate ? lastPayment.paymentDate|date('d/m/Y H:i') : lastPayment.createdAt|date('d/m/Y H:i') }}</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Transaction</span>
                        <span class=\"info-value\">
                            {% if lastPayment.transactionId %}
                                <code class=\"small bg-dark text-white px-2 py-1 rounded\">{{ lastPayment.transactionId|slice(0, 12) }}...</code>
                            {% else %}
                                —
                            {% endif %}
                        </span>
                    </div>
                </div>
            </div>
            <div class=\"mt-3 text-end\">
                <a href=\"{{ path('super_admin_payment_show', {'id': lastPayment.id}) }}\" class=\"btn btn-light btn-sm\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails complets
                </a>
            </div>
        </div>
    {% else %}
        <div class=\"last-payment-card p-4 mb-4 text-white\">
            <div class=\"text-center py-3\">
                <i class=\"fas fa-credit-card fa-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0\">Aucun paiement enregistré pour le moment</p>
            </div>
        </div>
    {% endif %}

    <!-- Liste des paiements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Historique des paiements
            </h5>
            <span class=\"badge bg-secondary\">{{ payments|length }} paiement(s)</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                {% if payments is empty %}
                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-credit-card fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0\">Aucun paiement trouvé</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres</p>
                    </div>
                {% else %}
                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 200px\">Entreprise</th>
                                <th style=\"min-width: 130px\">Abonnement</th>
                                <th style=\"min-width: 120px\">Montant</th>
                                <th style=\"min-width: 130px\">Mode</th>
                                <th style=\"min-width: 100px\">Statut</th>
                                <th style=\"min-width: 150px\">Date</th>
                                <th style=\"min-width: 150px\">Transaction</th>
                                <th style=\"min-width: 130px\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for payment in payments %}
                                <tr class=\"payment-row\">
                                    <td onclick=\"window.location='{{ path('super_admin_payment_show', {'id': payment.id}) }}'\">
                                        <strong>{{ payment.hmaService.companyName }}</strong>
                                        <br>
                                        <small class=\"text-muted\">{{ payment.hmaService.subscriptionNumber }}</small>
                                    </td>
                                    <td onclick=\"window.location='{{ path('super_admin_payment_show', {'id': payment.id}) }}'\">
                                        {% if payment.subscription %}
                                            <a href=\"{{ path('super_admin_subscription_show', {'id': payment.subscription.id}) }}\" class=\"text-decoration-none\" onclick=\"event.stopPropagation()\">
                                                <span class=\"badge bg-info\">
                                                    <i class=\"fas fa-tag me-1\"></i> Abo #{{ payment.subscription.id }}
                                                </span>
                                            </a>
                                            <br>
                                            <small class=\"text-muted\">{{ payment.subscription.subscriptionPlan.displayName }}</small>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">Sans abonnement</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"amount-cell\" onclick=\"window.location='{{ path('super_admin_payment_show', {'id': payment.id}) }}'\">
                                        {{ payment.amount|number_format(0, ',', ' ') }} FCFA
                                    </td>
                                    <td onclick=\"window.location='{{ path('super_admin_payment_show', {'id': payment.id}) }}'\">
                                        {% set methodLabels = {
                                            'card': '💳 Carte',
                                            'mobile_money': '📱 Mobile Money',
                                            'transfer': '🏦 Virement',
                                            'cash': '💰 Espèces'
                                        } %}
                                        {{ methodLabels[payment.paymentMethod]|default(payment.paymentMethod) }}
                                    </td>
                                    <td onclick=\"window.location='{{ path('super_admin_payment_show', {'id': payment.id}) }}'\">
                                        <span class=\"badge-status {{ payment.status }}\">
                                            {% if payment.status == 'completed' or payment.status == 'paid' %}
                                                <i class=\"fas fa-check-circle me-1\"></i> Payé
                                            {% elseif payment.status == 'pending' %}
                                                <i class=\"fas fa-clock me-1\"></i> En attente
                                            {% elseif payment.status == 'failed' %}
                                                <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                            {% elseif payment.status == 'refunded' %}
                                                <i class=\"fas fa-undo-alt me-1\"></i> Remboursé
                                            {% else %}
                                                {{ payment.status }}
                                            {% endif %}
                                        </span>
                                    </td>
                                    <td onclick=\"window.location='{{ path('super_admin_payment_show', {'id': payment.id}) }}'\">
                                        <i class=\"far fa-calendar text-muted me-1\"></i>
                                        {{ payment.paymentDate ? payment.paymentDate|date('d/m/Y H:i') : payment.createdAt|date('d/m/Y H:i') }}
                                    </td>
                                    <td onclick=\"window.location='{{ path('super_admin_payment_show', {'id': payment.id}) }}'\">
                                        {% if payment.transactionId %}
                                            <code class=\"small\">{{ payment.transactionId|slice(0, 12) }}...</code>
                                        {% else %}
                                            <span class=\"text-muted\">—</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"{{ path('super_admin_payment_show', {'id': payment.id}) }}\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            {% if payment.subscription %}
                                                <a href=\"{{ path('super_admin_subscription_show', {'id': payment.subscription.id}) }}\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Voir l'abonnement\">
                                                    <i class=\"fas fa-tags\"></i>
                                                </a>
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>
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
    window.location.href = '{{ path('super_admin_payment_index') }}';
}
</script>
{% endblock %}", "super_admin/payment/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\payment\\index.html.twig");
    }
}
