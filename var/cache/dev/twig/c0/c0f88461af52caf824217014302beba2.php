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

/* admin/payment/show.html.twig */
class __TwigTemplate_dbdedbb7d19cab893693b9a441a5b19e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/payment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/payment/show.html.twig"));

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

        yield "Paiement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        
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
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 1rem;
    }
    .status-badge {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
    }
    .status-badge.completed, .status-badge.paid { background: #d1fae5; color: #065f46; }
    .status-badge.pending { background: #fef3c7; color: #b45309; }
    .status-badge.failed { background: #fee2e2; color: #991b1b; }
    .amount-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #64748b;
        font-size: 0.85rem;
    }
    .info-value {
        font-weight: 600;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        // line 49
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-credit-card me-1\"></i> Mes paiements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">#";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-receipt text-primary me-2\"></i>
                Paiement #";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "
            </h1>
        </div>
        <div>
            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche -->
        <div class=\"col-xl-7\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Détails du paiement
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut</small>
                                <div class=\"mt-2\">
                                    <span class=\"status-badge ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 90, $this->source); })()), "status", [], "any", false, false, false, 90), "html", null, true);
        yield "\">
                                        ";
        // line 91
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 91, $this->source); })()), "status", [], "any", false, false, false, 91) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 91, $this->source); })()), "status", [], "any", false, false, false, 91) == "paid"))) {
            // line 92
            yield "                                            <i class=\"fas fa-check-circle me-1\"></i> Payé
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 93
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93) == "pending")) {
            // line 94
            yield "                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 95
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 95, $this->source); })()), "status", [], "any", false, false, false, 95) == "failed")) {
            // line 96
            yield "                                            <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                        ";
        }
        // line 98
        yield "                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 106
        $context["methodLabels"] = ["card" => "💳 Carte bancaire", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement bancaire", "cash" => "💰 Espèces"];
        // line 112
        yield "                                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 112, $this->source); })()), "paymentMethod", [], "any", false, false, false, 112), [], "array", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methodLabels"]) || array_key_exists("methodLabels", $context) ? $context["methodLabels"] : (function () { throw new RuntimeError('Variable "methodLabels" does not exist.', 112, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 112, $this->source); })()), "paymentMethod", [], "any", false, false, false, 112), [], "array", false, false, false, 112), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 112, $this->source); })()), "paymentMethod", [], "any", false, false, false, 112))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 112, $this->source); })()), "paymentMethod", [], "any", false, false, false, 112))), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date du paiement</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 120
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 120, $this->source); })()), "paymentDate", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 120, $this->source); })()), "paymentDate", [], "any", false, false, false, 120), "d/m/Y H:i:s"), "html", null, true)) : ("Non définie"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 font-monospace small\">
                                    ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "transactionId", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 128, $this->source); })()), "transactionId", [], "any", false, false, false, 128), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        ";
        // line 132
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 132, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                            <div class=\"col-md-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Numéro de facture</small>
                                    <div class=\"fw-bold mt-1\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 136, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 136), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                        ";
        }
        // line 140
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 140, $this->source); })()), "notes", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "                            <div class=\"col-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Notes</small>
                                    <div class=\"mt-1\">";
            // line 144
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 144, $this->source); })()), "notes", [], "any", false, false, false, 144), "html", null, true));
            yield "</div>
                                </div>
                            </div>
                        ";
        }
        // line 148
        yield "                    </div>
                </div>
            </div>

            <!-- Abonnement associé -->
            ";
        // line 153
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 153, $this->source); })()), "subscription", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-tags me-2 text-primary\"></i>
                        Abonnement associé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan</small>
                                <div class=\"fw-bold\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 166, $this->source); })()), "subscription", [], "any", false, false, false, 166), "subscriptionPlan", [], "any", false, false, false, 166), "displayName", [], "any", false, false, false, 166), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période</small>
                                <div class=\"fw-bold\">";
            // line 172
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 172, $this->source); })()), "subscription", [], "any", false, false, false, 172), "billingPeriod", [], "any", false, false, false, 172) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date début</small>
                                <div>";
            // line 178
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 178, $this->source); })()), "subscription", [], "any", false, false, false, 178), "startsAt", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 178, $this->source); })()), "subscription", [], "any", false, false, false, 178), "startsAt", [], "any", false, false, false, 178), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date fin</small>
                                <div>";
            // line 184
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 184, $this->source); })()), "subscription", [], "any", false, false, false, 184), "endsAt", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 184, $this->source); })()), "subscription", [], "any", false, false, false, 184), "endsAt", [], "any", false, false, false, 184), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 189, $this->source); })()), "subscription", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-eye me-1\"></i> Voir mon abonnement
                        </a>
                    </div>
                </div>
            </div>
            ";
        }
        // line 196
        yield "        </div>

        <!-- Colonne droite - Montant -->
        <div class=\"col-xl-5\">
            <div class=\"amount-card p-4 mb-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75\">Montant du paiement</small>
                        <div class=\"h1 mb-0 fw-bold\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 204, $this->source); })()), "amount", [], "any", false, false, false, 204), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                        <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                    </div>
                </div>
            </div>

            <!-- Informations complémentaires -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-calendar-alt me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Créé le</span>
                        <span class=\"info-value\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 223, $this->source); })()), "createdAt", [], "any", false, false, false, 223), "d/m/Y H:i:s"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Dernière mise à jour</span>
                        <span class=\"info-value\">";
        // line 227
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 227, $this->source); })()), "updatedAt", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 227, $this->source); })()), "updatedAt", [], "any", false, false, false, 227), "d/m/Y H:i:s"), "html", null, true)) : ("-"));
        yield "</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        return "admin/payment/show.html.twig";
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
        return array (  419 => 227,  412 => 223,  390 => 204,  380 => 196,  370 => 189,  362 => 184,  353 => 178,  344 => 172,  335 => 166,  321 => 154,  319 => 153,  312 => 148,  305 => 144,  300 => 141,  297 => 140,  290 => 136,  285 => 133,  283 => 132,  276 => 128,  265 => 120,  253 => 112,  251 => 106,  241 => 98,  237 => 96,  235 => 95,  232 => 94,  230 => 93,  227 => 92,  225 => 91,  221 => 90,  196 => 68,  189 => 64,  181 => 59,  174 => 55,  166 => 49,  153 => 48,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/payment/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Paiement #{{ payment.id }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 1rem;
    }
    .status-badge {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
    }
    .status-badge.completed, .status-badge.paid { background: #d1fae5; color: #065f46; }
    .status-badge.pending { background: #fef3c7; color: #b45309; }
    .status-badge.failed { background: #fee2e2; color: #991b1b; }
    .amount-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #64748b;
        font-size: 0.85rem;
    }
    .info-value {
        font-weight: 600;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_payment_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-credit-card me-1\"></i> Mes paiements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">#{{ payment.id }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-receipt text-primary me-2\"></i>
                Paiement #{{ payment.id }}
            </h1>
        </div>
        <div>
            <a href=\"{{ path('admin_payment_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche -->
        <div class=\"col-xl-7\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Détails du paiement
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut</small>
                                <div class=\"mt-2\">
                                    <span class=\"status-badge {{ payment.status }}\">
                                        {% if payment.status == 'completed' or payment.status == 'paid' %}
                                            <i class=\"fas fa-check-circle me-1\"></i> Payé
                                        {% elseif payment.status == 'pending' %}
                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        {% elseif payment.status == 'failed' %}
                                            <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1\">
                                    {% set methodLabels = {
                                        'card': '💳 Carte bancaire',
                                        'mobile_money': '📱 Mobile Money',
                                        'transfer': '🏦 Virement bancaire',
                                        'cash': '💰 Espèces'
                                    } %}
                                    {{ methodLabels[payment.paymentMethod]|default(payment.paymentMethod) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date du paiement</small>
                                <div class=\"fw-bold mt-1\">
                                    {{ payment.paymentDate ? payment.paymentDate|date('d/m/Y H:i:s') : 'Non définie' }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 font-monospace small\">
                                    {{ payment.transactionId|default('Non défini') }}
                                </div>
                            </div>
                        </div>
                        {% if payment.invoiceNumber %}
                            <div class=\"col-md-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Numéro de facture</small>
                                    <div class=\"fw-bold mt-1\">{{ payment.invoiceNumber }}</div>
                                </div>
                            </div>
                        {% endif %}
                        {% if payment.notes %}
                            <div class=\"col-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Notes</small>
                                    <div class=\"mt-1\">{{ payment.notes|nl2br }}</div>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Abonnement associé -->
            {% if payment.subscription %}
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-tags me-2 text-primary\"></i>
                        Abonnement associé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan</small>
                                <div class=\"fw-bold\">{{ payment.subscription.subscriptionPlan.displayName }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période</small>
                                <div class=\"fw-bold\">{{ payment.subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date début</small>
                                <div>{{ payment.subscription.startsAt ? payment.subscription.startsAt|date('d/m/Y') : '-' }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date fin</small>
                                <div>{{ payment.subscription.endsAt ? payment.subscription.endsAt|date('d/m/Y') : '-' }}</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"{{ path('admin_subscription_show', {'id': payment.subscription.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-eye me-1\"></i> Voir mon abonnement
                        </a>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>

        <!-- Colonne droite - Montant -->
        <div class=\"col-xl-5\">
            <div class=\"amount-card p-4 mb-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75\">Montant du paiement</small>
                        <div class=\"h1 mb-0 fw-bold\">{{ payment.amount|number_format(0, ',', ' ') }} FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                        <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                    </div>
                </div>
            </div>

            <!-- Informations complémentaires -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-calendar-alt me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Créé le</span>
                        <span class=\"info-value\">{{ payment.createdAt|date('d/m/Y H:i:s') }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Dernière mise à jour</span>
                        <span class=\"info-value\">{{ payment.updatedAt ? payment.updatedAt|date('d/m/Y H:i:s') : '-' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/payment/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\payment\\show.html.twig");
    }
}
