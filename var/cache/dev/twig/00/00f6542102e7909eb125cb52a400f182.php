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

/* super_admin/subscription/show.html.twig */
class __TwigTemplate_2769367d72b320dac74fdfe9d7e31b6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/show.html.twig"));

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

        yield "Abonnement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 4, $this->source); })()), "hmaService", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
    .payment-card {
        transition: all 0.2s ease;
        border-left: 4px solid;
    }
    .payment-card.completed { border-left-color: #10b981; }
    .payment-card.pending { border-left-color: #f59e0b; }
    .payment-card.failed { border-left-color: #ef4444; }
    .total-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

        // line 36
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Abonnements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">#";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                Abonnement #";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 54, $this->source); })()), "hmaService", [], "any", false, false, false, 54), "companyName", [], "any", false, false, false, 54), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 54, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 54), "displayName", [], "any", false, false, false, 54), "html", null, true);
        yield "
            </p>
        </div>
        <div>
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Infos abonnement -->
        <div class=\"col-xl-7\">
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
                                <small class=\"text-muted\">Statut de l'abonnement</small>
                                <div class=\"mt-2\">
                                    <span class=\"badge-status ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 80, $this->source); })()), "status", [], "any", false, false, false, 80), "html", null, true);
        yield " status-badge\">
                                        ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81) == "active")) {
            // line 82
            yield "                                            <i class=\"fas fa-check-circle me-1\"></i> Actif
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83) == "pending")) {
            // line 84
            yield "                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85) == "expired")) {
            // line 86
            yield "                                            <i class=\"fas fa-hourglass-end me-1\"></i> Expiré
                                        ";
        } else {
            // line 88
            yield "                                            <i class=\"fas fa-ban me-1\"></i> Annulé
                                        ";
        }
        // line 90
        yield "                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Abonnement actif</small>
                                <div class=\"mt-2\">
                                    ";
        // line 98
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 98, $this->source); })()), "subscriptionActive", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                                        <span class=\"badge bg-success fs-6\">✓ Oui</span>
                                    ";
        } else {
            // line 101
            yield "                                        <span class=\"badge bg-danger fs-6\">✗ Non</span>
                                    ";
        }
        // line 103
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan d'abonnement</small>
                                <div class=\"fw-bold mt-1\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 109, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 109), "displayName", [], "any", false, false, false, 109), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période de facturation</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 116
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 116, $this->source); })()), "billingPeriod", [], "any", false, false, false, 116) == "monthly")) ? ("Mensuel") : ("Annuel"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de début</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 124
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 124, $this->source); })()), "startsAt", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 124, $this->source); })()), "startsAt", [], "any", false, false, false, 124), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de fin</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
        // line 132
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 132, $this->source); })()), "endsAt", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 132, $this->source); })()), "endsAt", [], "any", false, false, false, 132), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                                ";
        // line 134
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 134, $this->source); })()), "endsAt", [], "any", false, false, false, 134) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 134, $this->source); })()), "endsAt", [], "any", false, false, false, 134) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 135
            yield "                                    <small class=\"text-danger\">Expiré</small>
                                ";
        }
        // line 137
        yield "                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "paymentMethod", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 142, $this->source); })()), "paymentMethod", [], "any", false, false, false, 142), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">ID Transaction</small>
                                <div class=\"fw-bold mt-1\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "transactionId", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 148, $this->source); })()), "transactionId", [], "any", false, false, false, 148), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        ";
        // line 151
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 151, $this->source); })()), "notes", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "                            <div class=\"col-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Notes</small>
                                    <div class=\"mt-1\">";
            // line 155
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 155, $this->source); })()), "notes", [], "any", false, false, false, 155), "html", null, true));
            yield "</div>
                                </div>
                            </div>
                        ";
        }
        // line 159
        yield "                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Créé le</small>
                                <div class=\"fw-bold mt-1\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 162, $this->source); })()), "createdAt", [], "any", false, false, false, 162), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Dernière mise à jour</small>
                                <div class=\"fw-bold mt-1\">";
        // line 168
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 168, $this->source); })()), "updatedAt", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 168, $this->source); })()), "updatedAt", [], "any", false, false, false, 168), "d/m/Y H:i:s"), "html", null, true)) : ("Jamais"));
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Total et résumé -->
        <div class=\"col-xl-5\">
            <div class=\"total-card p-4 mb-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75\">Total des paiements</small>
                        <div class=\"h2 mb-0 fw-bold\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalPaid"]) || array_key_exists("totalPaid", $context) ? $context["totalPaid"] : (function () { throw new RuntimeError('Variable "totalPaid" does not exist.', 182, $this->source); })()), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                        <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                    </div>
                </div>
            </div>

            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Historique des paiements
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 198
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 198, $this->source); })()))) {
            // line 199
            yield "                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                            <p class=\"text-muted mb-0\">Aucun paiement enregistré</p>
                        </div>
                    ";
        } else {
            // line 204
            yield "                        <div class=\"d-flex flex-column gap-3\">
                            ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 205, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 206
                yield "                                <div class=\"payment-card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 206), "html", null, true);
                yield " p-3 rounded shadow-sm bg-white\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div>
                                            <div class=\"fw-bold\">
                                                ";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", true, true, false, 210)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", false, false, false, 210), ("Paiement #" . CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 210)))) : (("Paiement #" . CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 210)))), "html", null, true);
                yield "
                                            </div>
                                            <small class=\"text-muted\">
                                                <i class=\"far fa-calendar me-1\"></i>
                                                ";
                // line 214
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 214), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 214), "d/m/Y H:i"), "html", null, true)));
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            <div class=\"fw-bold text-primary\">
                                                ";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 219), 0, ",", " "), "html", null, true);
                yield " FCFA
                                            </div>
                                            <span class=\"badge ";
                // line 221
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 221) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 221) == "paid"))) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 221) == "pending")) ? ("bg-warning") : ("bg-danger"))));
                yield "\">
                                                ";
                // line 222
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 222) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 222) == "paid"))) ? ("Payé") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 222) == "pending")) ? ("En attente") : ("Échoué"))));
                yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"mt-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-credit-card me-1\"></i>
                                            ";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", true, true, false, 229)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 229), "Mode non spécifié")) : ("Mode non spécifié")), "html", null, true);
                yield "
                                        </small>
                                        ";
                // line 231
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 232
                    yield "                                            <br>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-hashtag me-1\"></i>
                                                Transaction: ";
                    // line 235
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 235), "html", null, true);
                    yield "
                                            </small>
                                        ";
                }
                // line 238
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 239
                    yield "                                            <br>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-file-invoice me-1\"></i>
                                                Facture: ";
                    // line 242
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 242), "html", null, true);
                    yield "
                                            </small>
                                        ";
                }
                // line 245
                yield "                                    </div>
                                    ";
                // line 246
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "notes", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 247
                    yield "                                        <div class=\"mt-2 pt-2 border-top\">
                                            <small class=\"text-muted\">";
                    // line 248
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "notes", [], "any", false, false, false, 248), "html", null, true);
                    yield "</small>
                                        </div>
                                    ";
                }
                // line 251
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            yield "                        </div>
                    ";
        }
        // line 255
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
        return "super_admin/subscription/show.html.twig";
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
        return array (  514 => 255,  510 => 253,  503 => 251,  497 => 248,  494 => 247,  492 => 246,  489 => 245,  483 => 242,  478 => 239,  475 => 238,  469 => 235,  464 => 232,  462 => 231,  457 => 229,  447 => 222,  443 => 221,  438 => 219,  430 => 214,  423 => 210,  415 => 206,  411 => 205,  408 => 204,  401 => 199,  399 => 198,  380 => 182,  363 => 168,  354 => 162,  349 => 159,  342 => 155,  337 => 152,  335 => 151,  329 => 148,  320 => 142,  313 => 137,  309 => 135,  307 => 134,  302 => 132,  291 => 124,  280 => 116,  270 => 109,  262 => 103,  258 => 101,  254 => 99,  252 => 98,  242 => 90,  238 => 88,  234 => 86,  232 => 85,  229 => 84,  227 => 83,  224 => 82,  222 => 81,  218 => 80,  193 => 58,  184 => 54,  178 => 51,  170 => 46,  163 => 42,  155 => 36,  142 => 35,  104 => 7,  91 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/subscription/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Abonnement #{{ subscription.id }} - {{ subscription.hmaService.companyName }}{% endblock %}

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
    .payment-card {
        transition: all 0.2s ease;
        border-left: 4px solid;
    }
    .payment-card.completed { border-left-color: #10b981; }
    .payment-card.pending { border-left-color: #f59e0b; }
    .payment-card.failed { border-left-color: #ef4444; }
    .total-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
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
                        <a href=\"{{ path('super_admin_subscription_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Abonnements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">#{{ subscription.id }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                Abonnement #{{ subscription.id }}
            </h1>
            <p class=\"text-muted mt-2\">
                {{ subscription.hmaService.companyName }} - {{ subscription.subscriptionPlan.displayName }}
            </p>
        </div>
        <div>
            <a href=\"{{ path('super_admin_subscription_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Infos abonnement -->
        <div class=\"col-xl-7\">
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
                                <small class=\"text-muted\">Statut de l'abonnement</small>
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
                                    {% if subscription.subscriptionActive %}
                                        <span class=\"badge bg-success fs-6\">✓ Oui</span>
                                    {% else %}
                                        <span class=\"badge bg-danger fs-6\">✗ Non</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Plan d'abonnement</small>
                                <div class=\"fw-bold mt-1\">{{ subscription.subscriptionPlan.displayName }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période de facturation</small>
                                <div class=\"fw-bold mt-1\">
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
                                    <small class=\"text-danger\">Expiré</small>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1\">{{ subscription.paymentMethod|default('Non défini') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">ID Transaction</small>
                                <div class=\"fw-bold mt-1\">{{ subscription.transactionId|default('Non défini') }}</div>
                            </div>
                        </div>
                        {% if subscription.notes %}
                            <div class=\"col-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Notes</small>
                                    <div class=\"mt-1\">{{ subscription.notes|nl2br }}</div>
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Créé le</small>
                                <div class=\"fw-bold mt-1\">{{ subscription.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Dernière mise à jour</small>
                                <div class=\"fw-bold mt-1\">{{ subscription.updatedAt ? subscription.updatedAt|date('d/m/Y H:i:s') : 'Jamais' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Total et résumé -->
        <div class=\"col-xl-5\">
            <div class=\"total-card p-4 mb-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75\">Total des paiements</small>
                        <div class=\"h2 mb-0 fw-bold\">{{ totalPaid|number_format(0, ',', ' ') }} FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-3\">
                        <i class=\"fas fa-money-bill-wave fa-2x\"></i>
                    </div>
                </div>
            </div>

            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Historique des paiements
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
                            {% for payment in payments %}
                                <div class=\"payment-card {{ payment.status }} p-3 rounded shadow-sm bg-white\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div>
                                            <div class=\"fw-bold\">
                                                {{ payment.subscriptionNumber|default('Paiement #' ~ payment.id) }}
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
                                    <div class=\"mt-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-credit-card me-1\"></i>
                                            {{ payment.paymentMethod|default('Mode non spécifié') }}
                                        </small>
                                        {% if payment.transactionId %}
                                            <br>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-hashtag me-1\"></i>
                                                Transaction: {{ payment.transactionId }}
                                            </small>
                                        {% endif %}
                                        {% if payment.invoiceNumber %}
                                            <br>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-file-invoice me-1\"></i>
                                                Facture: {{ payment.invoiceNumber }}
                                            </small>
                                        {% endif %}
                                    </div>
                                    {% if payment.notes %}
                                        <div class=\"mt-2 pt-2 border-top\">
                                            <small class=\"text-muted\">{{ payment.notes }}</small>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "super_admin/subscription/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription\\show.html.twig");
    }
}
