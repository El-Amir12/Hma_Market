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

/* admin/subscription/show.html.twig */
class __TwigTemplate_0a00062ba516219e057d5361111caff2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/subscription/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/subscription/show.html.twig"));

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

        yield "Abonnement ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 4, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 4), "displayName", [], "any", false, false, false, 4), "html", null, true);
        
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
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    .payment-card {
        transition: all 0.2s ease;
        border-left: 4px solid;
        border-radius: 0.75rem;
    }
    .payment-card.completed { border-left-color: #10b981; }
    .payment-card.pending { border-left-color: #f59e0b; }
    .payment-card.failed { border-left-color: #ef4444; }
    .limit-card {
        background: #ffffff;
        border-radius: 0.75rem;
        padding: 1rem;
        text-align: center;
        border: 1px solid #e2e8f0;
        transition: all 0.2s ease;
        height: 100%;
    }
    .limit-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        border-color: #cbd5e1;
    }
    .limit-icon {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }
    .limit-value {
        font-size: 1.25rem;
        font-weight: bold;
        color: #1e293b;
    }
    .limit-label {
        font-size: 0.7rem;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .section-title {
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid;
    }
    .section-title.commerce { color: #0463f1; border-bottom-color: #0463f1; }
    .section-title.restaurant { color: #10b981; border-bottom-color: #10b981; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Mes abonnements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 84, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 84), "displayName", [], "any", false, false, false, 84), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                Abonnement ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 89, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 89), "displayName", [], "any", false, false, false, 89), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-building me-1\"></i>
                Gérez votre abonnement et suivez vos limites
            </p>
        </div>
        <div>
            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscription_index");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            <a href=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index", ["subscription_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-credit-card me-1\"></i> Voir les paiements
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Détails abonnement et limites -->
        <div class=\"col-xl-7\">
            <!-- Détails de l'abonnement -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Détails de l'abonnement
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut</small>
                                <div class=\"mt-2\">
                                    <span class=\"badge-status ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 123, $this->source); })()), "status", [], "any", false, false, false, 123), "html", null, true);
        yield " status-badge\">
                                        ";
        // line 124
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 124, $this->source); })()), "status", [], "any", false, false, false, 124) == "active")) {
            // line 125
            yield "                                            <i class=\"fas fa-check-circle me-1\"></i> Actif
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 126
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 126, $this->source); })()), "status", [], "any", false, false, false, 126) == "pending")) {
            // line 127
            yield "                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 128
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 128, $this->source); })()), "status", [], "any", false, false, false, 128) == "expired")) {
            // line 129
            yield "                                            <i class=\"fas fa-hourglass-end me-1\"></i> Expiré
                                        ";
        } else {
            // line 131
            yield "                                            <i class=\"fas fa-ban me-1\"></i> Annulé
                                        ";
        }
        // line 133
        yield "                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Abonnement actif</small>
                                <div class=\"mt-2\">
                                    ";
        // line 141
        if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 141, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "                                        <span class=\"badge bg-success fs-6\">
                                            <i class=\"fas fa-check-circle me-1\"></i> Oui
                                        </span>
                                    ";
        } else {
            // line 146
            yield "                                        <span class=\"badge bg-danger fs-6\">
                                            <i class=\"fas fa-times-circle me-1\"></i> Non
                                        </span>
                                    ";
        }
        // line 150
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan d'abonnement</small>
                                <div class=\"fw-bold mt-1\">";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 156, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 156), "displayName", [], "any", false, false, false, 156), "html", null, true);
        yield "</div>
                                ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 157, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 157), "isUnlimited", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "                                    <small class=\"text-success\"><i class=\"fas fa-infinity me-1\"></i> Illimité</small>
                                ";
        }
        // line 160
        yield "                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période de facturation</small>
                                <div class=\"fw-bold mt-1\">
                                    <i class=\"fas ";
        // line 166
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 166, $this->source); })()), "billingPeriod", [], "any", false, false, false, 166) == "monthly")) ? ("fa-calendar-alt") : ("fa-calendar"));
        yield " me-1\"></i>
                                    ";
        // line 167
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 167, $this->source); })()), "billingPeriod", [], "any", false, false, false, 167) == "monthly")) ? ("Mensuel") : ("Annuel"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de début</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 175
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 175, $this->source); })()), "startsAt", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 175, $this->source); })()), "startsAt", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de fin</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 183
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 183, $this->source); })()), "endsAt", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 183, $this->source); })()), "endsAt", [], "any", false, false, false, 183), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                                ";
        // line 185
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 185, $this->source); })()), "endsAt", [], "any", false, false, false, 185) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 185, $this->source); })()), "endsAt", [], "any", false, false, false, 185) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 186
            yield "                                    <small class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i> Expiré</small>
                                ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 187
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 187, $this->source); })()), "endsAt", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield "                                    ";
            $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 188, $this->source); })()), "endsAt", [], "any", false, false, false, 188), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 188), "days", [], "any", false, false, false, 188);
            // line 189
            yield "                                    <small class=\"text-success\"><i class=\"fas fa-hourglass-half me-1\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 189, $this->source); })()), "html", null, true);
            yield " jours restants</small>
                                ";
        }
        // line 191
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Limites du plan - Commerce -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                        Limites du plan - Commerce
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <!-- Utilisateurs par rôle -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-users text-primary\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    ";
        // line 214
        $context["maxUsers"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 214, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 214), "maxUsersPerRole", [], "any", false, false, false, 214);
        // line 215
        yield "                                    ";
        if (((null === (isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 215, $this->source); })())) || ((isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 215, $this->source); })()) == 999999999))) {
            // line 216
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 218
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 218, $this->source); })()), "html", null, true);
            yield "
                                    ";
        }
        // line 220
        yield "                                </div>
                                <div class=\"limit-label\">Utilisateurs max / rôle</div>
                            </div>
                        </div>

                        <!-- Produits -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-box text-success\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    ";
        // line 232
        $context["maxProducts"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 232, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 232), "maxProducts", [], "any", false, false, false, 232);
        // line 233
        yield "                                    ";
        if (((null === (isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 233, $this->source); })())) || ((isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 233, $this->source); })()) == 999999999))) {
            // line 234
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 236
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 236, $this->source); })())), "html", null, true);
            yield "
                                    ";
        }
        // line 238
        yield "                                </div>
                                <div class=\"limit-label\">Produits maximum</div>
                            </div>
                        </div>

                        <!-- Commandes par mois -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-shopping-cart text-warning\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    ";
        // line 250
        $context["maxOrders"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 250, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 250), "maxOrdersPerMonth", [], "any", false, false, false, 250);
        // line 251
        yield "                                    ";
        if (((null === (isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 251, $this->source); })())) || ((isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 251, $this->source); })()) == 999999999))) {
            // line 252
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 254
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 254, $this->source); })())), "html", null, true);
            yield "
                                    ";
        }
        // line 256
        yield "                                </div>
                                <div class=\"limit-label\">Commandes max / mois</div>
                            </div>
                        </div>

                        <!-- Catégories -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-tags text-info\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    ";
        // line 268
        $context["maxCategories"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 268, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 268), "maxCategories", [], "any", false, false, false, 268);
        // line 269
        yield "                                    ";
        if (((null === (isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 269, $this->source); })())) || ((isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 269, $this->source); })()) == 999999999))) {
            // line 270
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 272
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 272, $this->source); })())), "html", null, true);
            yield "
                                    ";
        }
        // line 274
        yield "                                </div>
                                <div class=\"limit-label\">Catégories maximum</div>
                            </div>
                        </div>

                        <!-- Fournisseurs -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-truck text-secondary\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    ";
        // line 286
        $context["maxSuppliers"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 286, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 286), "maxSuppliers", [], "any", false, false, false, 286);
        // line 287
        yield "                                    ";
        if (((null === (isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 287, $this->source); })())) || ((isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 287, $this->source); })()) == 999999999))) {
            // line 288
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 290
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 290, $this->source); })())), "html", null, true);
            yield "
                                    ";
        }
        // line 292
        yield "                                </div>
                                <div class=\"limit-label\">Fournisseurs maximum</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Limites du plan - Restaurant (Recettes) -->
            ";
        // line 301
        $context["hasRestaurantLimits"] = (((( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 301, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 301), "maxRecipes", [], "any", false, false, false, 301)) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 302
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 302, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 302), "maxRecipeCategories", [], "any", false, false, false, 302))) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 303
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 303, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 303), "maxRecipeIngredients", [], "any", false, false, false, 303))) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 304
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 304, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 304), "maxMenuItems", [], "any", false, false, false, 304))) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 305
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 305, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 305), "maxDailyMenuVariants", [], "any", false, false, false, 305)));
        // line 306
        yield "            
            ";
        // line 307
        if ((($tmp = (isset($context["hasRestaurantLimits"]) || array_key_exists("hasRestaurantLimits", $context) ? $context["hasRestaurantLimits"] : (function () { throw new RuntimeError('Variable "hasRestaurantLimits" does not exist.', 307, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 308
            yield "            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-utensils me-2 text-success\"></i>
                        Limites du plan - Restaurant
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        ";
            // line 317
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 317, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 317), "maxRecipes", [], "any", false, false, false, 317))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-book text-success\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 324
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 324, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 324), "maxRecipes", [], "any", false, false, false, 324) == 999999999)) {
                    // line 325
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 327
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 327, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 327), "maxRecipes", [], "any", false, false, false, 327)), "html", null, true);
                    yield "
                                        ";
                }
                // line 329
                yield "                                    </div>
                                    <div class=\"limit-label\">Recettes maximum</div>
                                </div>
                            </div>
                        ";
            }
            // line 334
            yield "                        
                        ";
            // line 335
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 335, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 335), "maxRecipeCategories", [], "any", false, false, false, 335))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-tags text-info\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 342
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 342, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 342), "maxRecipeCategories", [], "any", false, false, false, 342) == 999999999)) {
                    // line 343
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 345
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 345, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 345), "maxRecipeCategories", [], "any", false, false, false, 345)), "html", null, true);
                    yield "
                                        ";
                }
                // line 347
                yield "                                    </div>
                                    <div class=\"limit-label\">Catégories de recettes</div>
                                </div>
                            </div>
                        ";
            }
            // line 352
            yield "                        
                        ";
            // line 353
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 353, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 353), "maxRecipeIngredients", [], "any", false, false, false, 353))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 354
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-carrot text-warning\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 360
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 360, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 360), "maxRecipeIngredients", [], "any", false, false, false, 360) == 999999999)) {
                    // line 361
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 363
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 363, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 363), "maxRecipeIngredients", [], "any", false, false, false, 363)), "html", null, true);
                    yield "
                                        ";
                }
                // line 365
                yield "                                    </div>
                                    <div class=\"limit-label\">Ingrédients max / recette</div>
                                </div>
                            </div>
                        ";
            }
            // line 370
            yield "                        
                        ";
            // line 371
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 371, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 371), "maxMenuItems", [], "any", false, false, false, 371))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 372
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-clipboard-list text-primary\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 378
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 378, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 378), "maxMenuItems", [], "any", false, false, false, 378) == 999999999)) {
                    // line 379
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 381
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 381, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 381), "maxMenuItems", [], "any", false, false, false, 381)), "html", null, true);
                    yield "
                                        ";
                }
                // line 383
                yield "                                    </div>
                                    <div class=\"limit-label\">Éléments de menu max</div>
                                </div>
                            </div>
                        ";
            }
            // line 388
            yield "                        
                        ";
            // line 389
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 389, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 389), "maxDailyMenuVariants", [], "any", false, false, false, 389))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 390
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-calendar-alt text-secondary\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 396
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 396, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 396), "maxDailyMenuVariants", [], "any", false, false, false, 396) == 999999999)) {
                    // line 397
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 399
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 399, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 399), "maxDailyMenuVariants", [], "any", false, false, false, 399)), "html", null, true);
                    yield "
                                        ";
                }
                // line 401
                yield "                                    </div>
                                    <div class=\"limit-label\">Variantes menu journalier</div>
                                </div>
                            </div>
                        ";
            }
            // line 406
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 410
        yield "
            <!-- Fonctionnalités incluses -->
            ";
        // line 412
        $context["features"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 412, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 412), "features", [], "any", false, false, false, 412);
        // line 413
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 413, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 414
            yield "            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-star text-warning me-2\"></i>
                        Fonctionnalités incluses
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-2\">
                        ";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 423, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 424
                yield "                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-check-circle text-success me-2\"></i>
                                    <small>";
                // line 427
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["feature"]), ["_" => " "]), "html", null, true);
                yield "</small>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 435
        yield "
            ";
        // line 436
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 436, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 436), "isUnlimited", [], "any", false, false, false, 436)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 437
            yield "            <div class=\"alert alert-success mt-4 mb-0 text-center\">
                <i class=\"fas fa-infinity me-2\"></i> 
                <strong>Plan illimité</strong> - Aucune restriction sur les produits, catégories, fournisseurs, recettes ou commandes !
            </div>
            ";
        }
        // line 442
        yield "        </div>

        <!-- Colonne droite - Résumé et Paiements -->
        <div class=\"col-xl-5\">
            <!-- Carte de résumé des limites Commerce -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-simple me-2 text-primary\"></i>
                        Résumé des limites
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        ";
        // line 456
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 456, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 456), "maxUsersPerRole", [], "any", false, false, false, 456)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 456, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 456), "maxUsersPerRole", [], "any", false, false, false, 456) != 999999999))) {
            // line 457
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-users me-2 text-primary\"></i> Utilisateurs max / rôle</span>
                                <span class=\"fw-bold\">";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 459, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 459), "maxUsersPerRole", [], "any", false, false, false, 459), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 462
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 462, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 462), "maxProducts", [], "any", false, false, false, 462)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 462, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 462), "maxProducts", [], "any", false, false, false, 462) != 999999999))) {
            // line 463
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-box me-2 text-success\"></i> Produits maximum</span>
                                <span class=\"fw-bold\">";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 465, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 465), "maxProducts", [], "any", false, false, false, 465)), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 468
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 468, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 468), "maxOrdersPerMonth", [], "any", false, false, false, 468)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 468, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 468), "maxOrdersPerMonth", [], "any", false, false, false, 468) != 999999999))) {
            // line 469
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-shopping-cart me-2 text-warning\"></i> Commandes max / mois</span>
                                <span class=\"fw-bold\">";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 471, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 471), "maxOrdersPerMonth", [], "any", false, false, false, 471)), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 474
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 474, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 474), "maxCategories", [], "any", false, false, false, 474)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 474, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 474), "maxCategories", [], "any", false, false, false, 474) != 999999999))) {
            // line 475
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-tags me-2 text-info\"></i> Catégories maximum</span>
                                <span class=\"fw-bold\">";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 477, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 477), "maxCategories", [], "any", false, false, false, 477)), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 480
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 480, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 480), "maxSuppliers", [], "any", false, false, false, 480)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 480, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 480), "maxSuppliers", [], "any", false, false, false, 480) != 999999999))) {
            // line 481
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-truck me-2 text-secondary\"></i> Fournisseurs maximum</span>
                                <span class=\"fw-bold\">";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 483, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 483), "maxSuppliers", [], "any", false, false, false, 483)), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 486
        yield "                    </div>
                </div>
            </div>

            <!-- Carte de résumé des limites Restaurant -->
            ";
        // line 491
        if ((($tmp = (isset($context["hasRestaurantLimits"]) || array_key_exists("hasRestaurantLimits", $context) ? $context["hasRestaurantLimits"] : (function () { throw new RuntimeError('Variable "hasRestaurantLimits" does not exist.', 491, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 492
            yield "            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-utensils me-2 text-success\"></i>
                        Résumé Restaurant
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        ";
            // line 501
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 501, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 501), "maxRecipes", [], "any", false, false, false, 501)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 501, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 501), "maxRecipes", [], "any", false, false, false, 501) != 999999999))) {
                // line 502
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-book me-2 text-success\"></i> Recettes maximum</span>
                                <span class=\"fw-bold\">";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 504, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 504), "maxRecipes", [], "any", false, false, false, 504)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 507
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 507, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 507), "maxRecipeCategories", [], "any", false, false, false, 507)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 507, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 507), "maxRecipeCategories", [], "any", false, false, false, 507) != 999999999))) {
                // line 508
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-tags me-2 text-info\"></i> Catégories de recettes</span>
                                <span class=\"fw-bold\">";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 510, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 510), "maxRecipeCategories", [], "any", false, false, false, 510)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 513
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 513, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 513), "maxRecipeIngredients", [], "any", false, false, false, 513)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 513, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 513), "maxRecipeIngredients", [], "any", false, false, false, 513) != 999999999))) {
                // line 514
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-carrot me-2 text-warning\"></i> Ingrédients max / recette</span>
                                <span class=\"fw-bold\">";
                // line 516
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 516, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 516), "maxRecipeIngredients", [], "any", false, false, false, 516)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 519
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 519, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 519), "maxMenuItems", [], "any", false, false, false, 519)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 519, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 519), "maxMenuItems", [], "any", false, false, false, 519) != 999999999))) {
                // line 520
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-clipboard-list me-2 text-primary\"></i> Éléments de menu max</span>
                                <span class=\"fw-bold\">";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 522, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 522), "maxMenuItems", [], "any", false, false, false, 522)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 525
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 525, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 525), "maxDailyMenuVariants", [], "any", false, false, false, 525)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 525, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 525), "maxDailyMenuVariants", [], "any", false, false, false, 525) != 999999999))) {
                // line 526
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-calendar-alt me-2 text-secondary\"></i> Variantes menu journalier</span>
                                <span class=\"fw-bold\">";
                // line 528
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 528, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 528), "maxDailyMenuVariants", [], "any", false, false, false, 528)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 531
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 535
        yield "
            <!-- Historique des paiements -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Historique des paiements
                        <a href=\"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index", ["subscription_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 542, $this->source); })()), "id", [], "any", false, false, false, 542)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-info float-end\">
                            <i class=\"fas fa-external-link-alt me-1\"></i> Voir tout
                        </a>
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 548
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 548, $this->source); })()))) {
            // line 549
            yield "                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                            <p class=\"text-muted mb-0\">Aucun paiement enregistré</p>
                        </div>
                    ";
        } else {
            // line 554
            yield "                        <div class=\"d-flex flex-column gap-3\">
                            ";
            // line 555
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 555, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 556
                yield "                                <div class=\"payment-card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 556), "html", null, true);
                yield " p-3 rounded shadow-sm bg-white\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div>
                                            <div class=\"fw-bold\">
                                                ";
                // line 560
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", true, true, false, 560)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", false, false, false, 560), "Paiement")) : ("Paiement")), "html", null, true);
                yield "
                                            </div>
                                            <small class=\"text-muted\">
                                                <i class=\"far fa-calendar me-1\"></i>
                                                ";
                // line 564
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 564)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 564), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 564), "d/m/Y H:i"), "html", null, true)));
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            <div class=\"fw-bold text-primary\">
                                                ";
                // line 569
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 569), 0, ",", " "), "html", null, true);
                yield " FCFA
                                            </div>
                                            <span class=\"badge ";
                // line 571
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 571) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 571) == "paid"))) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 571) == "pending")) ? ("bg-warning") : ("bg-danger"))));
                yield "\">
                                                ";
                // line 572
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 572) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 572) == "paid"))) ? ("Payé") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 572) == "pending")) ? ("En attente") : ("Échoué"))));
                yield "
                                            </span>
                                        </div>
                                    </div>
                                    ";
                // line 576
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 576)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 577
                    yield "                                        <div class=\"mt-2\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-hashtag me-1\"></i>
                                                Transaction: ";
                    // line 580
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 580), 0, 16), "html", null, true);
                    yield "...
                                            </small>
                                        </div>
                                    ";
                }
                // line 584
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 586
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 586, $this->source); })())) > 5)) {
                // line 587
                yield "                                <div class=\"text-center mt-2\">
                                    <small class=\"text-muted\">+";
                // line 588
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 588, $this->source); })())) - 5), "html", null, true);
                yield " autre(s) paiement(s)</small>
                                </div>
                            ";
            }
            // line 591
            yield "                        </div>
                    ";
        }
        // line 593
        yield "                </div>
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
        return "admin/subscription/show.html.twig";
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
        return array (  1067 => 593,  1063 => 591,  1057 => 588,  1054 => 587,  1051 => 586,  1044 => 584,  1037 => 580,  1032 => 577,  1030 => 576,  1023 => 572,  1019 => 571,  1014 => 569,  1006 => 564,  999 => 560,  991 => 556,  987 => 555,  984 => 554,  977 => 549,  975 => 548,  966 => 542,  957 => 535,  951 => 531,  945 => 528,  941 => 526,  938 => 525,  932 => 522,  928 => 520,  925 => 519,  919 => 516,  915 => 514,  912 => 513,  906 => 510,  902 => 508,  899 => 507,  893 => 504,  889 => 502,  887 => 501,  876 => 492,  874 => 491,  867 => 486,  861 => 483,  857 => 481,  854 => 480,  848 => 477,  844 => 475,  841 => 474,  835 => 471,  831 => 469,  828 => 468,  822 => 465,  818 => 463,  815 => 462,  809 => 459,  805 => 457,  803 => 456,  787 => 442,  780 => 437,  778 => 436,  775 => 435,  769 => 431,  759 => 427,  754 => 424,  750 => 423,  739 => 414,  736 => 413,  734 => 412,  730 => 410,  724 => 406,  717 => 401,  711 => 399,  707 => 397,  705 => 396,  697 => 390,  695 => 389,  692 => 388,  685 => 383,  679 => 381,  675 => 379,  673 => 378,  665 => 372,  663 => 371,  660 => 370,  653 => 365,  647 => 363,  643 => 361,  641 => 360,  633 => 354,  631 => 353,  628 => 352,  621 => 347,  615 => 345,  611 => 343,  609 => 342,  601 => 336,  599 => 335,  596 => 334,  589 => 329,  583 => 327,  579 => 325,  577 => 324,  569 => 318,  567 => 317,  556 => 308,  554 => 307,  551 => 306,  549 => 305,  548 => 304,  547 => 303,  546 => 302,  545 => 301,  534 => 292,  528 => 290,  524 => 288,  521 => 287,  519 => 286,  505 => 274,  499 => 272,  495 => 270,  492 => 269,  490 => 268,  476 => 256,  470 => 254,  466 => 252,  463 => 251,  461 => 250,  447 => 238,  441 => 236,  437 => 234,  434 => 233,  432 => 232,  418 => 220,  412 => 218,  408 => 216,  405 => 215,  403 => 214,  378 => 191,  372 => 189,  369 => 188,  367 => 187,  364 => 186,  362 => 185,  357 => 183,  346 => 175,  335 => 167,  331 => 166,  323 => 160,  319 => 158,  317 => 157,  313 => 156,  305 => 150,  299 => 146,  293 => 142,  291 => 141,  281 => 133,  277 => 131,  273 => 129,  271 => 128,  268 => 127,  266 => 126,  263 => 125,  261 => 124,  257 => 123,  231 => 100,  225 => 97,  214 => 89,  206 => 84,  199 => 80,  191 => 74,  178 => 73,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/subscription/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Abonnement {{ subscription.subscriptionPlan.displayName }}{% endblock %}

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
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    .payment-card {
        transition: all 0.2s ease;
        border-left: 4px solid;
        border-radius: 0.75rem;
    }
    .payment-card.completed { border-left-color: #10b981; }
    .payment-card.pending { border-left-color: #f59e0b; }
    .payment-card.failed { border-left-color: #ef4444; }
    .limit-card {
        background: #ffffff;
        border-radius: 0.75rem;
        padding: 1rem;
        text-align: center;
        border: 1px solid #e2e8f0;
        transition: all 0.2s ease;
        height: 100%;
    }
    .limit-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        border-color: #cbd5e1;
    }
    .limit-icon {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }
    .limit-value {
        font-size: 1.25rem;
        font-weight: bold;
        color: #1e293b;
    }
    .limit-label {
        font-size: 0.7rem;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .section-title {
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid;
    }
    .section-title.commerce { color: #0463f1; border-bottom-color: #0463f1; }
    .section-title.restaurant { color: #10b981; border-bottom-color: #10b981; }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_subscription_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Mes abonnements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ subscription.subscriptionPlan.displayName }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                Abonnement {{ subscription.subscriptionPlan.displayName }}
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-building me-1\"></i>
                Gérez votre abonnement et suivez vos limites
            </p>
        </div>
        <div>
            <a href=\"{{ path('admin_subscription_index') }}\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            <a href=\"{{ path('admin_payment_index', {'subscription_id': subscription.id}) }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-credit-card me-1\"></i> Voir les paiements
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Détails abonnement et limites -->
        <div class=\"col-xl-7\">
            <!-- Détails de l'abonnement -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Détails de l'abonnement
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut</small>
                                <div class=\"mt-2\">
                                    <span class=\"badge-status {{ subscription.status }} status-badge\">
                                        {% if subscription.status == 'active' %}
                                            <i class=\"fas fa-check-circle me-1\"></i> Actif
                                        {% elseif subscription.status == 'pending' %}
                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        {% elseif subscription.status == 'expired' %}
                                            <i class=\"fas fa-hourglass-end me-1\"></i> Expiré
                                        {% else %}
                                            <i class=\"fas fa-ban me-1\"></i> Annulé
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Abonnement actif</small>
                                <div class=\"mt-2\">
                                    {% if isActive %}
                                        <span class=\"badge bg-success fs-6\">
                                            <i class=\"fas fa-check-circle me-1\"></i> Oui
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-danger fs-6\">
                                            <i class=\"fas fa-times-circle me-1\"></i> Non
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan d'abonnement</small>
                                <div class=\"fw-bold mt-1\">{{ subscription.subscriptionPlan.displayName }}</div>
                                {% if subscription.subscriptionPlan.isUnlimited %}
                                    <small class=\"text-success\"><i class=\"fas fa-infinity me-1\"></i> Illimité</small>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période de facturation</small>
                                <div class=\"fw-bold mt-1\">
                                    <i class=\"fas {{ subscription.billingPeriod == 'monthly' ? 'fa-calendar-alt' : 'fa-calendar' }} me-1\"></i>
                                    {{ subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de début</small>
                                <div class=\"fw-bold mt-1\">
                                    {{ subscription.startsAt ? subscription.startsAt|date('d/m/Y') : 'Non défini' }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de fin</small>
                                <div class=\"fw-bold mt-1\">
                                    {{ subscription.endsAt ? subscription.endsAt|date('d/m/Y') : 'Non défini' }}
                                </div>
                                {% if subscription.endsAt and subscription.endsAt < date() %}
                                    <small class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i> Expiré</small>
                                {% elseif subscription.endsAt %}
                                    {% set daysLeft = subscription.endsAt.diff(date()).days %}
                                    <small class=\"text-success\"><i class=\"fas fa-hourglass-half me-1\"></i> {{ daysLeft }} jours restants</small>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Limites du plan - Commerce -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                        Limites du plan - Commerce
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <!-- Utilisateurs par rôle -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-users text-primary\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    {% set maxUsers = subscription.subscriptionPlan.maxUsersPerRole %}
                                    {% if maxUsers is null or maxUsers == 999999999 %}
                                        <i class=\"fas fa-infinity text-success\"></i>
                                    {% else %}
                                        {{ maxUsers }}
                                    {% endif %}
                                </div>
                                <div class=\"limit-label\">Utilisateurs max / rôle</div>
                            </div>
                        </div>

                        <!-- Produits -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-box text-success\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    {% set maxProducts = subscription.subscriptionPlan.maxProducts %}
                                    {% if maxProducts is null or maxProducts == 999999999 %}
                                        <i class=\"fas fa-infinity text-success\"></i>
                                    {% else %}
                                        {{ maxProducts|number_format }}
                                    {% endif %}
                                </div>
                                <div class=\"limit-label\">Produits maximum</div>
                            </div>
                        </div>

                        <!-- Commandes par mois -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-shopping-cart text-warning\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    {% set maxOrders = subscription.subscriptionPlan.maxOrdersPerMonth %}
                                    {% if maxOrders is null or maxOrders == 999999999 %}
                                        <i class=\"fas fa-infinity text-success\"></i>
                                    {% else %}
                                        {{ maxOrders|number_format }}
                                    {% endif %}
                                </div>
                                <div class=\"limit-label\">Commandes max / mois</div>
                            </div>
                        </div>

                        <!-- Catégories -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-tags text-info\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    {% set maxCategories = subscription.subscriptionPlan.maxCategories %}
                                    {% if maxCategories is null or maxCategories == 999999999 %}
                                        <i class=\"fas fa-infinity text-success\"></i>
                                    {% else %}
                                        {{ maxCategories|number_format }}
                                    {% endif %}
                                </div>
                                <div class=\"limit-label\">Catégories maximum</div>
                            </div>
                        </div>

                        <!-- Fournisseurs -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"limit-card\">
                                <div class=\"limit-icon\">
                                    <i class=\"fas fa-truck text-secondary\"></i>
                                </div>
                                <div class=\"limit-value\">
                                    {% set maxSuppliers = subscription.subscriptionPlan.maxSuppliers %}
                                    {% if maxSuppliers is null or maxSuppliers == 999999999 %}
                                        <i class=\"fas fa-infinity text-success\"></i>
                                    {% else %}
                                        {{ maxSuppliers|number_format }}
                                    {% endif %}
                                </div>
                                <div class=\"limit-label\">Fournisseurs maximum</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Limites du plan - Restaurant (Recettes) -->
            {% set hasRestaurantLimits = subscription.subscriptionPlan.maxRecipes is not null 
                or subscription.subscriptionPlan.maxRecipeCategories is not null 
                or subscription.subscriptionPlan.maxRecipeIngredients is not null 
                or subscription.subscriptionPlan.maxMenuItems is not null 
                or subscription.subscriptionPlan.maxDailyMenuVariants is not null %}
            
            {% if hasRestaurantLimits %}
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-utensils me-2 text-success\"></i>
                        Limites du plan - Restaurant
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        {% if subscription.subscriptionPlan.maxRecipes is not null %}
                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-book text-success\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        {% if subscription.subscriptionPlan.maxRecipes == 999999999 %}
                                            <i class=\"fas fa-infinity text-success\"></i>
                                        {% else %}
                                            {{ subscription.subscriptionPlan.maxRecipes|number_format }}
                                        {% endif %}
                                    </div>
                                    <div class=\"limit-label\">Recettes maximum</div>
                                </div>
                            </div>
                        {% endif %}
                        
                        {% if subscription.subscriptionPlan.maxRecipeCategories is not null %}
                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-tags text-info\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        {% if subscription.subscriptionPlan.maxRecipeCategories == 999999999 %}
                                            <i class=\"fas fa-infinity text-success\"></i>
                                        {% else %}
                                            {{ subscription.subscriptionPlan.maxRecipeCategories|number_format }}
                                        {% endif %}
                                    </div>
                                    <div class=\"limit-label\">Catégories de recettes</div>
                                </div>
                            </div>
                        {% endif %}
                        
                        {% if subscription.subscriptionPlan.maxRecipeIngredients is not null %}
                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-carrot text-warning\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        {% if subscription.subscriptionPlan.maxRecipeIngredients == 999999999 %}
                                            <i class=\"fas fa-infinity text-success\"></i>
                                        {% else %}
                                            {{ subscription.subscriptionPlan.maxRecipeIngredients|number_format }}
                                        {% endif %}
                                    </div>
                                    <div class=\"limit-label\">Ingrédients max / recette</div>
                                </div>
                            </div>
                        {% endif %}
                        
                        {% if subscription.subscriptionPlan.maxMenuItems is not null %}
                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-clipboard-list text-primary\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        {% if subscription.subscriptionPlan.maxMenuItems == 999999999 %}
                                            <i class=\"fas fa-infinity text-success\"></i>
                                        {% else %}
                                            {{ subscription.subscriptionPlan.maxMenuItems|number_format }}
                                        {% endif %}
                                    </div>
                                    <div class=\"limit-label\">Éléments de menu max</div>
                                </div>
                            </div>
                        {% endif %}
                        
                        {% if subscription.subscriptionPlan.maxDailyMenuVariants is not null %}
                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-calendar-alt text-secondary\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        {% if subscription.subscriptionPlan.maxDailyMenuVariants == 999999999 %}
                                            <i class=\"fas fa-infinity text-success\"></i>
                                        {% else %}
                                            {{ subscription.subscriptionPlan.maxDailyMenuVariants|number_format }}
                                        {% endif %}
                                    </div>
                                    <div class=\"limit-label\">Variantes menu journalier</div>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% endif %}

            <!-- Fonctionnalités incluses -->
            {% set features = subscription.subscriptionPlan.features %}
            {% if features is not empty %}
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-star text-warning me-2\"></i>
                        Fonctionnalités incluses
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-2\">
                        {% for feature in features %}
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-check-circle text-success me-2\"></i>
                                    <small>{{ feature|capitalize|replace({'_': ' '}) }}</small>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            {% endif %}

            {% if subscription.subscriptionPlan.isUnlimited %}
            <div class=\"alert alert-success mt-4 mb-0 text-center\">
                <i class=\"fas fa-infinity me-2\"></i> 
                <strong>Plan illimité</strong> - Aucune restriction sur les produits, catégories, fournisseurs, recettes ou commandes !
            </div>
            {% endif %}
        </div>

        <!-- Colonne droite - Résumé et Paiements -->
        <div class=\"col-xl-5\">
            <!-- Carte de résumé des limites Commerce -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-simple me-2 text-primary\"></i>
                        Résumé des limites
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        {% if subscription.subscriptionPlan.maxUsersPerRole is not null and subscription.subscriptionPlan.maxUsersPerRole != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-users me-2 text-primary\"></i> Utilisateurs max / rôle</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxUsersPerRole }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxProducts is not null and subscription.subscriptionPlan.maxProducts != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-box me-2 text-success\"></i> Produits maximum</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxProducts|number_format }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxOrdersPerMonth is not null and subscription.subscriptionPlan.maxOrdersPerMonth != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-shopping-cart me-2 text-warning\"></i> Commandes max / mois</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxOrdersPerMonth|number_format }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxCategories is not null and subscription.subscriptionPlan.maxCategories != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-tags me-2 text-info\"></i> Catégories maximum</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxCategories|number_format }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxSuppliers is not null and subscription.subscriptionPlan.maxSuppliers != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-truck me-2 text-secondary\"></i> Fournisseurs maximum</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxSuppliers|number_format }}</span>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Carte de résumé des limites Restaurant -->
            {% if hasRestaurantLimits %}
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-utensils me-2 text-success\"></i>
                        Résumé Restaurant
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        {% if subscription.subscriptionPlan.maxRecipes is not null and subscription.subscriptionPlan.maxRecipes != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-book me-2 text-success\"></i> Recettes maximum</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxRecipes|number_format }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxRecipeCategories is not null and subscription.subscriptionPlan.maxRecipeCategories != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-tags me-2 text-info\"></i> Catégories de recettes</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxRecipeCategories|number_format }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxRecipeIngredients is not null and subscription.subscriptionPlan.maxRecipeIngredients != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-carrot me-2 text-warning\"></i> Ingrédients max / recette</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxRecipeIngredients|number_format }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxMenuItems is not null and subscription.subscriptionPlan.maxMenuItems != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-clipboard-list me-2 text-primary\"></i> Éléments de menu max</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxMenuItems|number_format }}</span>
                            </div>
                        {% endif %}
                        {% if subscription.subscriptionPlan.maxDailyMenuVariants is not null and subscription.subscriptionPlan.maxDailyMenuVariants != 999999999 %}
                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-calendar-alt me-2 text-secondary\"></i> Variantes menu journalier</span>
                                <span class=\"fw-bold\">{{ subscription.subscriptionPlan.maxDailyMenuVariants|number_format }}</span>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% endif %}

            <!-- Historique des paiements -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Historique des paiements
                        <a href=\"{{ path('admin_payment_index', {'subscription_id': subscription.id}) }}\" class=\"btn btn-sm btn-outline-info float-end\">
                            <i class=\"fas fa-external-link-alt me-1\"></i> Voir tout
                        </a>
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% if payments is empty %}
                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                            <p class=\"text-muted mb-0\">Aucun paiement enregistré</p>
                        </div>
                    {% else %}
                        <div class=\"d-flex flex-column gap-3\">
                            {% for payment in payments|slice(0, 5) %}
                                <div class=\"payment-card {{ payment.status }} p-3 rounded shadow-sm bg-white\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div>
                                            <div class=\"fw-bold\">
                                                {{ payment.subscriptionNumber|default('Paiement') }}
                                            </div>
                                            <small class=\"text-muted\">
                                                <i class=\"far fa-calendar me-1\"></i>
                                                {{ payment.paymentDate ? payment.paymentDate|date('d/m/Y H:i') : payment.createdAt|date('d/m/Y H:i') }}
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            <div class=\"fw-bold text-primary\">
                                                {{ payment.amount|number_format(0, ',', ' ') }} FCFA
                                            </div>
                                            <span class=\"badge {{ payment.status == 'completed' or payment.status == 'paid' ? 'bg-success' : (payment.status == 'pending' ? 'bg-warning' : 'bg-danger') }}\">
                                                {{ payment.status == 'completed' or payment.status == 'paid' ? 'Payé' : (payment.status == 'pending' ? 'En attente' : 'Échoué') }}
                                            </span>
                                        </div>
                                    </div>
                                    {% if payment.transactionId %}
                                        <div class=\"mt-2\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-hashtag me-1\"></i>
                                                Transaction: {{ payment.transactionId|slice(0, 16) }}...
                                            </small>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                            {% if payments|length > 5 %}
                                <div class=\"text-center mt-2\">
                                    <small class=\"text-muted\">+{{ payments|length - 5 }} autre(s) paiement(s)</small>
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/subscription/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\subscription\\show.html.twig");
    }
}
