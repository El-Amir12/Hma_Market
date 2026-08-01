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

/* super_admin/payment/show.html.twig */
class __TwigTemplate_a1916170e629019cbb08d1607d748d8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/payment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/payment/show.html.twig"));

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

        yield "Paiement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 4, $this->source); })()), "hmaService", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
    .company-logo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        background: white;
        padding: 5px;
    }
    .company-initials {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
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
    .detail-card {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-top: 1rem;
    }
    .detail-card pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.7rem;
        overflow-x: auto;
        max-height: 300px;
    }
    .transaction-id {
        word-break: break-all;
        font-family: monospace;
        font-size: 0.85rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
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

        // line 89
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-credit-card me-1\"></i> Paiements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Détails du paiement</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-receipt text-primary me-2\"></i>
                Détails du paiement
            </h1>
            <p class=\"text-muted mt-2\">
                Transaction effectuée par ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 107, $this->source); })()), "hmaService", [], "any", false, false, false, 107), "companyName", [], "any", false, false, false, 107), "html", null, true);
        yield "
            </p>
        </div>
        <div>
            <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Infos paiement -->
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
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 133, $this->source); })()), "status", [], "any", false, false, false, 133), "html", null, true);
        yield "\">
                                        ";
        // line 134
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 134, $this->source); })()), "status", [], "any", false, false, false, 134) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 134, $this->source); })()), "status", [], "any", false, false, false, 134) == "paid"))) {
            // line 135
            yield "                                            <i class=\"fas fa-check-circle me-1\"></i> Payé
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 136
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 136, $this->source); })()), "status", [], "any", false, false, false, 136) == "pending")) {
            // line 137
            yield "                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 138
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 138, $this->source); })()), "status", [], "any", false, false, false, 138) == "failed")) {
            // line 139
            yield "                                            <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 140
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 140, $this->source); })()), "status", [], "any", false, false, false, 140) == "refunded")) {
            // line 141
            yield "                                            <i class=\"fas fa-undo-alt me-1\"></i> Remboursé
                                        ";
        }
        // line 143
        yield "                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 151
        $context["methodLabels"] = ["card" => "💳 Carte bancaire", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement bancaire", "cash" => "💰 Espèces"];
        // line 157
        yield "                                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 157, $this->source); })()), "paymentMethod", [], "any", false, false, false, 157), [], "array", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methodLabels"]) || array_key_exists("methodLabels", $context) ? $context["methodLabels"] : (function () { throw new RuntimeError('Variable "methodLabels" does not exist.', 157, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 157, $this->source); })()), "paymentMethod", [], "any", false, false, false, 157), [], "array", false, false, false, 157), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 157, $this->source); })()), "paymentMethod", [], "any", false, false, false, 157))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 157, $this->source); })()), "paymentMethod", [], "any", false, false, false, 157))), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date du paiement</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 165
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 165, $this->source); })()), "paymentDate", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 165, $this->source); })()), "paymentDate", [], "any", false, false, false, 165), "d/m/Y H:i:s"), "html", null, true)) : ("Non définie"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 173, $this->source); })()), "createdAt", [], "any", false, false, false, 173), "d/m/Y H:i:s"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 transaction-id\">
                                    ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "transactionId", [], "any", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 181, $this->source); })()), "transactionId", [], "any", false, false, false, 181), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Numéro de facture</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "invoiceNumber", [], "any", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 189, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 189), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        ";
        // line 193
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 193, $this->source); })()), "notes", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "                            <div class=\"col-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Notes</small>
                                    <div class=\"mt-1\">";
            // line 197
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 197, $this->source); })()), "notes", [], "any", false, false, false, 197), "html", null, true));
            yield "</div>
                                </div>
                            </div>
                        ";
        }
        // line 201
        yield "                    </div>
                </div>
            </div>

            <!-- Informations sur l'abonnement lié -->
            ";
        // line 206
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 206, $this->source); })()), "subscription", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 207
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
                                <small class=\"text-muted\">Période d'abonnement</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
            // line 220
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 220, $this->source); })()), "subscription", [], "any", false, false, false, 220), "startsAt", [], "any", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 220, $this->source); })()), "subscription", [], "any", false, false, false, 220), "startsAt", [], "any", false, false, false, 220), "d/m/Y"), "html", null, true)) : ("?"));
            yield "
                                    <i class=\"fas fa-arrow-right mx-1 text-muted\"></i>
                                    ";
            // line 222
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 222, $this->source); })()), "subscription", [], "any", false, false, false, 222), "endsAt", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 222, $this->source); })()), "subscription", [], "any", false, false, false, 222), "endsAt", [], "any", false, false, false, 222), "d/m/Y"), "html", null, true)) : ("?"));
            yield "
                                </div>
                                ";
            // line 224
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 224, $this->source); })()), "subscription", [], "any", false, false, false, 224), "endsAt", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 225
                yield "                                    ";
                $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 225, $this->source); })()), "subscription", [], "any", false, false, false, 225), "endsAt", [], "any", false, false, false, 225), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 225), "days", [], "any", false, false, false, 225);
                // line 226
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 226, $this->source); })()), "subscription", [], "any", false, false, false, 226), "endsAt", [], "any", false, false, false, 226) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 227
                    yield "                                        <small class=\"text-success\">
                                            <i class=\"fas fa-hourglass-half me-1\"></i>";
                    // line 228
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 228, $this->source); })()), "html", null, true);
                    yield " jours restants
                                        </small>
                                    ";
                } else {
                    // line 231
                    yield "                                        <small class=\"text-danger\">
                                            <i class=\"fas fa-exclamation-circle me-1\"></i>Expiré
                                        </small>
                                    ";
                }
                // line 235
                yield "                                ";
            }
            // line 236
            yield "                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan</small>
                                <div class=\"fw-bold mt-1\">";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 241, $this->source); })()), "subscription", [], "any", false, false, false, 241), "subscriptionPlan", [], "any", false, false, false, 241), "displayName", [], "any", false, false, false, 241), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période de facturation</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
            // line 248
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 248, $this->source); })()), "subscription", [], "any", false, false, false, 248), "billingPeriod", [], "any", false, false, false, 248) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut abonnement</small>
                                <div class=\"mt-1\">
                                    <span class=\"badge ";
            // line 256
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 256, $this->source); })()), "subscription", [], "any", false, false, false, 256), "status", [], "any", false, false, false, 256) == "active")) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 256, $this->source); })()), "subscription", [], "any", false, false, false, 256), "status", [], "any", false, false, false, 256) == "pending")) ? ("bg-warning") : ("bg-danger"))));
            yield "\">
                                        ";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 257, $this->source); })()), "subscription", [], "any", false, false, false, 257), "status", [], "any", false, false, false, 257), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 264, $this->source); })()), "subscription", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-eye me-1\"></i> Voir l'abonnement
                        </a>
                    </div>
                </div>
            </div>
            ";
        }
        // line 271
        yield "        </div>

        <!-- Colonne droite - Montant et entreprise -->
        <div class=\"col-xl-5\">
            <!-- Carte montant -->
            <div class=\"amount-card p-4 mb-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75\">Montant du paiement</small>
                        <div class=\"h1 mb-0 fw-bold\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 280, $this->source); })()), "amount", [], "any", false, false, false, 280), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                        <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                    </div>
                </div>
            </div>

            <!-- Carte entreprise -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-building me-2 text-primary\"></i>
                        Entreprise
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-3\">
                        ";
        // line 298
        $context["logoPath"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 298, $this->source); })()), "hmaService", [], "any", false, false, false, 298), "logo", [], "any", false, false, false, 298);
        // line 299
        yield "                        ";
        if (((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 299, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 299, $this->source); })())))) {
            // line 300
            yield "                            ";
            if ((is_string($_v0 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 300, $this->source); })())) && is_string($_v1 = "uploads/") && str_starts_with($_v0, $_v1))) {
                // line 301
                yield "                                ";
                $context["logoFullPath"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 301, $this->source); })());
                // line 302
                yield "                            ";
            } elseif ((is_string($_v2 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 302, $this->source); })())) && is_string($_v3 = "/") && str_starts_with($_v2, $_v3))) {
                // line 303
                yield "                                ";
                $context["logoFullPath"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 303, $this->source); })());
                // line 304
                yield "                            ";
            } else {
                // line 305
                yield "                                ";
                $context["logoFullPath"] = ("uploads/logos/" . (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 305, $this->source); })()));
                // line 306
                yield "                            ";
            }
            // line 307
            yield "                            
                            ";
            // line 308
            if ((is_string($_v4 = (isset($context["logoFullPath"]) || array_key_exists("logoFullPath", $context) ? $context["logoFullPath"] : (function () { throw new RuntimeError('Variable "logoFullPath" does not exist.', 308, $this->source); })())) && is_string($_v5 = "/") && str_starts_with($_v4, $_v5))) {
                // line 309
                yield "                                ";
                $context["logoUrl"] = (isset($context["logoFullPath"]) || array_key_exists("logoFullPath", $context) ? $context["logoFullPath"] : (function () { throw new RuntimeError('Variable "logoFullPath" does not exist.', 309, $this->source); })());
                // line 310
                yield "                            ";
            } else {
                // line 311
                yield "                                ";
                $context["logoUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoFullPath"]) || array_key_exists("logoFullPath", $context) ? $context["logoFullPath"] : (function () { throw new RuntimeError('Variable "logoFullPath" does not exist.', 311, $this->source); })()));
                // line 312
                yield "                            ";
            }
            // line 313
            yield "                            
                            <img src=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 314, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 314, $this->source); })()), "hmaService", [], "any", false, false, false, 314), "companyName", [], "any", false, false, false, 314), "html", null, true);
            yield "\" class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 315, $this->source); })()), "hmaService", [], "any", false, false, false, 315), "companyName", [], "any", false, false, false, 315), 0, 2)), "html", null, true);
            yield "</div>';\">
                        ";
        } else {
            // line 317
            yield "                            <div class=\"company-initials\">
                                ";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 318, $this->source); })()), "hmaService", [], "any", false, false, false, 318), "companyName", [], "any", false, false, false, 318), 0, 2)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 321
        yield "                    </div>
                    <div class=\"text-center mb-3\">
                        <h5 class=\"mb-0\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 323, $this->source); })()), "hmaService", [], "any", false, false, false, 323), "companyName", [], "any", false, false, false, 323), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 324, $this->source); })()), "hmaService", [], "any", false, false, false, 324), "subscriptionNumber", [], "any", false, false, false, 324), "html", null, true);
        yield "</small>
                    </div>
                    
                    <div class=\"info-row\">
                        <span class=\"info-label\">Type d'entreprise</span>
                        <span class=\"info-value\">
                            ";
        // line 330
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 330, $this->source); })()), "hmaService", [], "any", false, false, false, 330), "type", [], "any", false, false, false, 330) == "restaurant")) {
            // line 331
            yield "                                🍽️ Restaurant
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 332
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 332, $this->source); })()), "hmaService", [], "any", false, false, false, 332), "type", [], "any", false, false, false, 332) == "commerce")) {
            // line 333
            yield "                                🛒 Commerce
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 334
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 334, $this->source); })()), "hmaService", [], "any", false, false, false, 334), "type", [], "any", false, false, false, 334) == "service")) {
            // line 335
            yield "                                🛠️ Service
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 336
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 336, $this->source); })()), "hmaService", [], "any", false, false, false, 336), "type", [], "any", false, false, false, 336) == "industry")) {
            // line 337
            yield "                                🏭 Industrie
                            ";
        } else {
            // line 339
            yield "                                🏢 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, true, false, 339), "type", [], "any", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 339, $this->source); })()), "hmaService", [], "any", false, false, false, 339), "type", [], "any", false, false, false, 339), "Non défini")) : ("Non défini"))), "html", null, true);
            yield "
                            ";
        }
        // line 341
        yield "                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Email</span>
                        <span class=\"info-value\">";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 345, $this->source); })()), "hmaService", [], "any", false, false, false, 345), "email", [], "any", false, false, false, 345), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Téléphone</span>
                        <span class=\"info-value\">";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, true, false, 349), "phone", [], "any", true, true, false, 349)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 349, $this->source); })()), "hmaService", [], "any", false, false, false, 349), "phone", [], "any", false, false, false, 349), "—")) : ("—")), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date d'inscription</span>
                        <span class=\"info-value\">";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 353, $this->source); })()), "hmaService", [], "any", false, false, false, 353), "createdAt", [], "any", false, false, false, 353), "d/m/Y"), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"mt-3\">
                        <a href=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 357, $this->source); })()), "hmaService", [], "any", false, false, false, 357), "id", [], "any", false, false, false, 357)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary w-100\">
                            <i class=\"fas fa-eye me-1\"></i> Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            <!-- Détails techniques (si disponibles) -->
            ";
        // line 365
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", true, true, false, 365) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 365, $this->source); })()), "paymentData", [], "any", false, false, false, 365))) {
            // line 366
            yield "            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-code me-2 text-primary\"></i>
                        Données techniques
                    </h5>
                </div>
                <div class=\"card-body\">
                    <details>
                        <summary class=\"text-muted small\" style=\"cursor: pointer;\">
                            <i class=\"fas fa-info-circle me-1\"></i> Détails complets de la transaction
                        </summary>
                        <div class=\"detail-card\">
                            <pre>";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 379, $this->source); })()), "paymentData", [], "any", false, false, false, 379), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
            yield "</pre>
                        </div>
                    </details>
                </div>
            </div>
            ";
        }
        // line 385
        yield "        </div>
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
        return "super_admin/payment/show.html.twig";
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
        return array (  682 => 385,  673 => 379,  658 => 366,  656 => 365,  645 => 357,  638 => 353,  631 => 349,  624 => 345,  618 => 341,  612 => 339,  608 => 337,  606 => 336,  603 => 335,  601 => 334,  598 => 333,  596 => 332,  593 => 331,  591 => 330,  582 => 324,  578 => 323,  574 => 321,  568 => 318,  565 => 317,  560 => 315,  554 => 314,  551 => 313,  548 => 312,  545 => 311,  542 => 310,  539 => 309,  537 => 308,  534 => 307,  531 => 306,  528 => 305,  525 => 304,  522 => 303,  519 => 302,  516 => 301,  513 => 300,  510 => 299,  508 => 298,  487 => 280,  476 => 271,  466 => 264,  456 => 257,  452 => 256,  441 => 248,  431 => 241,  424 => 236,  421 => 235,  415 => 231,  409 => 228,  406 => 227,  403 => 226,  400 => 225,  398 => 224,  393 => 222,  388 => 220,  373 => 207,  371 => 206,  364 => 201,  357 => 197,  352 => 194,  350 => 193,  343 => 189,  332 => 181,  321 => 173,  310 => 165,  298 => 157,  296 => 151,  286 => 143,  282 => 141,  280 => 140,  277 => 139,  275 => 138,  272 => 137,  270 => 136,  267 => 135,  265 => 134,  261 => 133,  236 => 111,  229 => 107,  214 => 95,  206 => 89,  193 => 88,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/payment/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Paiement - {{ payment.hmaService.companyName }}{% endblock %}

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
    .company-logo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        background: white;
        padding: 5px;
    }
    .company-initials {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
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
    .detail-card {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-top: 1rem;
    }
    .detail-card pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.7rem;
        overflow-x: auto;
        max-height: 300px;
    }
    .transaction-id {
        word-break: break-all;
        font-family: monospace;
        font-size: 0.85rem;
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
                        <a href=\"{{ path('super_admin_payment_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-credit-card me-1\"></i> Paiements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Détails du paiement</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-receipt text-primary me-2\"></i>
                Détails du paiement
            </h1>
            <p class=\"text-muted mt-2\">
                Transaction effectuée par {{ payment.hmaService.companyName }}
            </p>
        </div>
        <div>
            <a href=\"{{ path('super_admin_payment_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Infos paiement -->
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
                                        {% elseif payment.status == 'refunded' %}
                                            <i class=\"fas fa-undo-alt me-1\"></i> Remboursé
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
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold mt-1\">
                                    {{ payment.createdAt|date('d/m/Y H:i:s') }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 transaction-id\">
                                    {{ payment.transactionId|default('Non défini') }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Numéro de facture</small>
                                <div class=\"fw-bold mt-1\">
                                    {{ payment.invoiceNumber|default('Non défini') }}
                                </div>
                            </div>
                        </div>
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

            <!-- Informations sur l'abonnement lié -->
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
                                <small class=\"text-muted\">Période d'abonnement</small>
                                <div class=\"fw-bold mt-1\">
                                    {{ payment.subscription.startsAt ? payment.subscription.startsAt|date('d/m/Y') : '?' }}
                                    <i class=\"fas fa-arrow-right mx-1 text-muted\"></i>
                                    {{ payment.subscription.endsAt ? payment.subscription.endsAt|date('d/m/Y') : '?' }}
                                </div>
                                {% if payment.subscription.endsAt %}
                                    {% set daysLeft = payment.subscription.endsAt.diff(date()).days %}
                                    {% if payment.subscription.endsAt > date() %}
                                        <small class=\"text-success\">
                                            <i class=\"fas fa-hourglass-half me-1\"></i>{{ daysLeft }} jours restants
                                        </small>
                                    {% else %}
                                        <small class=\"text-danger\">
                                            <i class=\"fas fa-exclamation-circle me-1\"></i>Expiré
                                        </small>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan</small>
                                <div class=\"fw-bold mt-1\">{{ payment.subscription.subscriptionPlan.displayName }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période de facturation</small>
                                <div class=\"fw-bold mt-1\">
                                    {{ payment.subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut abonnement</small>
                                <div class=\"mt-1\">
                                    <span class=\"badge {{ payment.subscription.status == 'active' ? 'bg-success' : (payment.subscription.status == 'pending' ? 'bg-warning' : 'bg-danger') }}\">
                                        {{ payment.subscription.status }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"{{ path('super_admin_subscription_show', {'id': payment.subscription.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-eye me-1\"></i> Voir l'abonnement
                        </a>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>

        <!-- Colonne droite - Montant et entreprise -->
        <div class=\"col-xl-5\">
            <!-- Carte montant -->
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

            <!-- Carte entreprise -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-building me-2 text-primary\"></i>
                        Entreprise
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-3\">
                        {% set logoPath = payment.hmaService.logo %}
                        {% if logoPath and logoPath is not empty %}
                            {% if logoPath starts with 'uploads/' %}
                                {% set logoFullPath = logoPath %}
                            {% elseif logoPath starts with '/' %}
                                {% set logoFullPath = logoPath %}
                            {% else %}
                                {% set logoFullPath = 'uploads/logos/' ~ logoPath %}
                            {% endif %}
                            
                            {% if logoFullPath starts with '/' %}
                                {% set logoUrl = logoFullPath %}
                            {% else %}
                                {% set logoUrl = asset(logoFullPath) %}
                            {% endif %}
                            
                            <img src=\"{{ logoUrl }}\" alt=\"{{ payment.hmaService.companyName }}\" class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>{{ payment.hmaService.companyName|slice(0,2)|upper }}</div>';\">
                        {% else %}
                            <div class=\"company-initials\">
                                {{ payment.hmaService.companyName|slice(0,2)|upper }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"text-center mb-3\">
                        <h5 class=\"mb-0\">{{ payment.hmaService.companyName }}</h5>
                        <small class=\"text-muted\">{{ payment.hmaService.subscriptionNumber }}</small>
                    </div>
                    
                    <div class=\"info-row\">
                        <span class=\"info-label\">Type d'entreprise</span>
                        <span class=\"info-value\">
                            {% if payment.hmaService.type == 'restaurant' %}
                                🍽️ Restaurant
                            {% elseif payment.hmaService.type == 'commerce' %}
                                🛒 Commerce
                            {% elseif payment.hmaService.type == 'service' %}
                                🛠️ Service
                            {% elseif payment.hmaService.type == 'industry' %}
                                🏭 Industrie
                            {% else %}
                                🏢 {{ payment.hmaService.type|default('Non défini')|capitalize }}
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Email</span>
                        <span class=\"info-value\">{{ payment.hmaService.email }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Téléphone</span>
                        <span class=\"info-value\">{{ payment.hmaService.phone|default('—') }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date d'inscription</span>
                        <span class=\"info-value\">{{ payment.hmaService.createdAt|date('d/m/Y') }}</span>
                    </div>
                    
                    <div class=\"mt-3\">
                        <a href=\"{{ path('app_super_admin_hma_service_show', {'id': payment.hmaService.id}) }}\" class=\"btn btn-sm btn-outline-primary w-100\">
                            <i class=\"fas fa-eye me-1\"></i> Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            <!-- Détails techniques (si disponibles) -->
            {% if payment.paymentData is defined and payment.paymentData %}
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-code me-2 text-primary\"></i>
                        Données techniques
                    </h5>
                </div>
                <div class=\"card-body\">
                    <details>
                        <summary class=\"text-muted small\" style=\"cursor: pointer;\">
                            <i class=\"fas fa-info-circle me-1\"></i> Détails complets de la transaction
                        </summary>
                        <div class=\"detail-card\">
                            <pre>{{ payment.paymentData|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>
                        </div>
                    </details>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "super_admin/payment/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\payment\\show.html.twig");
    }
}
