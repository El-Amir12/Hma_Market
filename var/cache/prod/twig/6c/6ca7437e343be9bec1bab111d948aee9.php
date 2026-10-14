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
class __TwigTemplate_29a794bde9ce41771c834e06aa182ddb extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Abonnement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "hmaService", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 0.75rem;
        margin-bottom: 0.5rem;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 0.3rem 0.8rem;
        border-radius: 2rem;
        display: inline-block;
    }
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
        white-space: nowrap;
    }
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    
    .payment-card {
        transition: all 0.2s ease;
        border-left: 4px solid;
        border-radius: 0.75rem;
        padding: 0.75rem;
    }
    .payment-card.completed { border-left-color: #10b981; }
    .payment-card.pending { border-left-color: #f59e0b; }
    .payment-card.failed { border-left-color: #ef4444; }
    .total-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
        padding: 0.75rem;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Tablette */
    @media (max-width: 768px) {
        .info-card {
            padding: 0.5rem;
        }
        .status-badge {
            font-size: 0.7rem;
            padding: 0.2rem 0.6rem;
        }
        .total-card {
            padding: 0.75rem;
        }
        .total-card .h2 {
            font-size: 1.5rem !important;
        }
        .payment-card {
            padding: 0.5rem;
        }
        .payment-card .fw-bold {
            font-size: 0.85rem;
        }
        .h1, .h3 {
            font-size: 1.1rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        .badge-status {
            font-size: 0.65rem;
            padding: 0.2rem 0.5rem;
        }
        .breadcrumb {
            font-size: 0.7rem !important;
        }
    }
    
    /* Mobile */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        /* En-tête */
        .breadcrumb {
            font-size: 0.55rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.55rem !important;
        }
        .h1, .h3 {
            font-size: 0.95rem !important;
        }
        .text-muted {
            font-size: 0.65rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.6rem !important;
        }
        
        /* Cards */
        .card {
            border-radius: 0.75rem !important;
        }
        .card-header {
            padding: 0.4rem 0.6rem !important;
        }
        .card-body {
            padding: 0.4rem 0.6rem !important;
        }
        .card-body .row.g-3 {
            --bs-gutter-y: 0.25rem;
            --bs-gutter-x: 0.25rem;
        }
        
        /* Info cards */
        .info-card {
            padding: 0.4rem 0.5rem !important;
            border-radius: 0.5rem !important;
            margin-bottom: 0.3rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.7rem !important;
        }
        .info-card .text-muted {
            font-size: 0.5rem !important;
        }
        .info-card .mt-1 {
            margin-top: 0.15rem !important;
        }
        .info-card .mt-2 {
            margin-top: 0.25rem !important;
        }
        
        /* Status badge */
        .status-badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .badge-status {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .badge-status i {
            font-size: 0.5rem !important;
        }
        
        /* Badge */
        .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .badge.fs-6 {
            font-size: 0.55rem !important;
        }
        
        /* Total card */
        .total-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .total-card .h2 {
            font-size: 1.2rem !important;
        }
        .total-card .opacity-75 {
            font-size: 0.6rem !important;
        }
        .total-card .rounded-circle {
            width: 36px !important;
            height: 36px !important;
            padding: 0.5rem !important;
        }
        .total-card .rounded-circle i {
            font-size: 1.2rem !important;
        }
        
        /* Payment cards */
        .payment-card {
            padding: 0.4rem !important;
            border-radius: 0.5rem !important;
        }
        .payment-card .fw-bold {
            font-size: 0.7rem !important;
        }
        .payment-card .text-end .fw-bold {
            font-size: 0.7rem !important;
        }
        .payment-card .badge {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .payment-card .text-muted {
            font-size: 0.5rem !important;
        }
        .payment-card .mt-2 {
            margin-top: 0.2rem !important;
        }
        .payment-card .pt-2 {
            padding-top: 0.15rem !important;
        }
        
        /* Grid */
        .row.g-4 {
            --bs-gutter-y: 0.5rem;
            --bs-gutter-x: 0.5rem;
        }
        .mb-4 {
            margin-bottom: 0.5rem !important;
        }
        
        /* Désactiver hover */
        .payment-card:hover {
            transform: none !important;
        }
    }

    /* Très petits écrans */
    @media (max-width: 400px) {
        .h1, .h3 {
            font-size: 0.85rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.6rem !important;
        }
        .payment-card .fw-bold {
            font-size: 0.6rem !important;
        }
        .payment-card .text-end .fw-bold {
            font-size: 0.6rem !important;
        }
        .total-card .h2 {
            font-size: 1rem !important;
        }
        .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 263
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 264
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Abonnements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">#";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "id", [], "any", false, false, false, 278), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Abonnement #";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "id", [], "any", false, false, false, 283), "html", null, true);
        yield "</span>
                <span class=\"d-inline d-sm-none\">#";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "id", [], "any", false, false, false, 284), "html", null, true);
        yield "</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "hmaService", [], "any", false, false, false, 287), "companyName", [], "any", false, false, false, 287), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 287), "displayName", [], "any", false, false, false, 287), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 291
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">

        <!-- Colonne gauche - Infos abonnement -->
        <div class=\"col-12 col-xl-7\">
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Détails de l'abonnement</span>
                        <span class=\"d-inline d-sm-none\">Détails</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-1 g-md-3\">
                        <!-- Statut -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Statut</small>
                                <div class=\"mt-1\">
                                    <span class=\"badge-status ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "status", [], "any", false, false, false, 319), "html", null, true);
        yield " status-badge\" style=\"font-size:0.6rem; padding:0.2rem 0.5rem;\">
                                        ";
        // line 320
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "status", [], "any", false, false, false, 320) == "active")) {
            // line 321
            yield "                                            <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 322
($context["subscription"] ?? null), "status", [], "any", false, false, false, 322) == "pending")) {
            // line 323
            yield "                                            <i class=\"fas fa-clock me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 324
($context["subscription"] ?? null), "status", [], "any", false, false, false, 324) == "expired")) {
            // line 325
            yield "                                            <i class=\"fas fa-hourglass-end me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Expiré</span>
                                        ";
        } else {
            // line 327
            yield "                                            <i class=\"fas fa-ban me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Annulé</span>
                                        ";
        }
        // line 329
        yield "                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Actif -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Abonnement actif</small>
                                <div class=\"mt-1\">
                                    ";
        // line 338
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionActive", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 339
            yield "                                        <span class=\"badge bg-success\" style=\"font-size:0.55rem;\">✓ Oui</span>
                                    ";
        } else {
            // line 341
            yield "                                        <span class=\"badge bg-danger\" style=\"font-size:0.55rem;\">✗ Non</span>
                                    ";
        }
        // line 343
        yield "                                </div>
                            </div>
                        </div>
                        <!-- Plan -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Plan</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 350), "displayName", [], "any", false, false, false, 350), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Période -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Période</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 358
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "billingPeriod", [], "any", false, false, false, 358) == "monthly")) ? ("Mensuel") : ("Annuel"));
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- Date début -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de début</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 367
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "startsAt", [], "any", false, false, false, 367)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "startsAt", [], "any", false, false, false, 367), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- Date fin -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de fin</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 376
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 376)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 376), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                                ";
        // line 378
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 378) && (CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 378) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 379
            yield "                                    <small class=\"text-danger d-block\" style=\"font-size:0.45rem;\">Expiré</small>
                                ";
        }
        // line 381
        yield "                            </div>
                        </div>
                        <!-- Mode paiement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "paymentMethod", [], "any", true, true, false, 387)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "paymentMethod", [], "any", false, false, false, 387), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- ID Transaction -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "transactionId", [], "any", true, true, false, 394)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "transactionId", [], "any", false, false, false, 394), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        ";
        // line 397
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "notes", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 398
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Notes</small>
                                <div class=\"mt-1 small\">";
            // line 401
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "notes", [], "any", false, false, false, 401), "html", null, true));
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 405
        yield "                        <!-- Créé le -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Créé le</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "createdAt", [], "any", false, false, false, 409), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Dernière mise à jour -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Dernière mise à jour</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 416
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "updatedAt", [], "any", false, false, false, 416)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "updatedAt", [], "any", false, false, false, 416), "d/m/Y H:i:s"), "html", null, true)) : ("Jamais"));
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Total et résumé -->
        <div class=\"col-12 col-xl-5\">
            <!-- Total des paiements -->
            <div class=\"total-card p-3 p-md-4 mb-3 mb-md-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75 d-block\" style=\"font-size:0.6rem;\">Total des paiements</small>
                        <div class=\"h2 mb-0 fw-bold\" style=\"font-size:1.5rem;\">";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["totalPaid"] ?? null), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                        <i class=\"fas fa-money-bill-wave\" style=\"font-size:1.2rem;\"></i>
                    </div>
                </div>
            </div>

            <!-- Historique des paiements -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Historique des paiements</span>
                        <span class=\"d-inline d-sm-none\">Paiements</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    ";
        // line 449
        if (Twig\Extension\CoreExtension::testEmpty(($context["payments"] ?? null))) {
            // line 450
            yield "                        <div class=\"text-center py-3 py-md-4\">
                            <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                            <p class=\"text-muted mb-0 small\">Aucun paiement enregistré</p>
                        </div>
                    ";
        } else {
            // line 455
            yield "                        <div class=\"d-flex flex-column gap-2 gap-md-3\">
                            ";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["payments"] ?? null), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 457
                yield "                                <div class=\"payment-card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 457), "html", null, true);
                yield " p-2 p-md-3 rounded shadow-sm bg-white\">
                                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-1 gap-sm-2\">
                                        <div>
                                            <div class=\"fw-bold small\">
                                                ";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", true, true, false, 461)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", false, false, false, 461), ("Paiement #" . CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 461)))) : (("Paiement #" . CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 461)))), "html", null, true);
                yield "
                                            </div>
                                            <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">
                                                <i class=\"far fa-calendar me-1\"></i>
                                                ";
                // line 465
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 465)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 465), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 465), "d/m/Y H:i"), "html", null, true)));
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-start text-sm-end w-100 w-sm-auto\">
                                            <div class=\"fw-bold text-primary small\">
                                                ";
                // line 470
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 470), 0, ",", " "), "html", null, true);
                yield " FCFA
                                            </div>
                                            <span class=\"badge ";
                // line 472
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 472) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 472) == "paid"))) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 472) == "pending")) ? ("bg-warning") : ("bg-danger"))));
                yield "\" style=\"font-size:0.45rem;\">
                                                ";
                // line 473
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 473) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 473) == "paid"))) ? ("Payé") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 473) == "pending")) ? ("En attente") : ("Échoué"))));
                yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"mt-1 mt-md-2\">
                                        <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                            <i class=\"fas fa-credit-card me-1\"></i>
                                            ";
                // line 480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", true, true, false, 480)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 480), "Mode non spécifié")) : ("Mode non spécifié")), "html", null, true);
                yield "
                                        </small>
                                        ";
                // line 482
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 483
                    yield "                                            <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                                <i class=\"fas fa-hashtag me-1\"></i>
                                                Trans: ";
                    // line 485
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 485), 0, 12), "html", null, true);
                    yield "
                                            </small>
                                        ";
                }
                // line 488
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 488)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 489
                    yield "                                            <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                                <i class=\"fas fa-file-invoice me-1\"></i>
                                                Facture: ";
                    // line 491
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 491), "html", null, true);
                    yield "
                                            </small>
                                        ";
                }
                // line 494
                yield "                                    </div>
                                    ";
                // line 495
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "notes", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 496
                    yield "                                        <div class=\"mt-1 mt-md-2 pt-1 pt-md-2 border-top\">
                                            <small class=\"text-muted\" style=\"font-size:0.45rem;\">";
                    // line 497
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "notes", [], "any", false, false, false, 497), "html", null, true);
                    yield "</small>
                                        </div>
                                    ";
                }
                // line 500
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["payments"] ?? null)) > 10)) {
                // line 503
                yield "                                <div class=\"text-center\">
                                    <small class=\"text-muted\">+ ";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["payments"] ?? null)) - 10), "html", null, true);
                yield " autres paiements</small>
                                </div>
                            ";
            }
            // line 507
            yield "                        </div>
                    ";
        }
        // line 509
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
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
        return array (  736 => 509,  732 => 507,  726 => 504,  723 => 503,  720 => 502,  713 => 500,  707 => 497,  704 => 496,  702 => 495,  699 => 494,  693 => 491,  689 => 489,  686 => 488,  680 => 485,  676 => 483,  674 => 482,  669 => 480,  659 => 473,  655 => 472,  650 => 470,  642 => 465,  635 => 461,  627 => 457,  623 => 456,  620 => 455,  613 => 450,  611 => 449,  590 => 431,  572 => 416,  562 => 409,  556 => 405,  549 => 401,  544 => 398,  542 => 397,  536 => 394,  526 => 387,  518 => 381,  514 => 379,  512 => 378,  507 => 376,  495 => 367,  483 => 358,  472 => 350,  463 => 343,  459 => 341,  455 => 339,  453 => 338,  442 => 329,  438 => 327,  434 => 325,  432 => 324,  429 => 323,  427 => 322,  424 => 321,  422 => 320,  418 => 319,  387 => 291,  378 => 287,  372 => 284,  368 => 283,  360 => 278,  353 => 274,  341 => 264,  334 => 263,  74 => 7,  67 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/subscription/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription\\show.html.twig");
    }
}
