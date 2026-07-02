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
class __TwigTemplate_e605c42ba320513c506e7bb5ff2a1615 extends Template
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
        yield "Abonnement ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 4), "displayName", [], "any", false, false, false, 4), "html", null, true);
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
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 84), "displayName", [], "any", false, false, false, 84), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                Abonnement ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 89), "displayName", [], "any", false, false, false, 89), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index", ["subscription_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "id", [], "any", false, false, false, 100)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "status", [], "any", false, false, false, 123), "html", null, true);
        yield " status-badge\">
                                        ";
        // line 124
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "status", [], "any", false, false, false, 124) == "active")) {
            // line 125
            yield "                                            <i class=\"fas fa-check-circle me-1\"></i> Actif
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["subscription"] ?? null), "status", [], "any", false, false, false, 126) == "pending")) {
            // line 127
            yield "                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 128
($context["subscription"] ?? null), "status", [], "any", false, false, false, 128) == "expired")) {
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
        if ((($tmp = ($context["isActive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 156), "displayName", [], "any", false, false, false, 156), "html", null, true);
        yield "</div>
                                ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 157), "isUnlimited", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "billingPeriod", [], "any", false, false, false, 166) == "monthly")) ? ("fa-calendar-alt") : ("fa-calendar"));
        yield " me-1\"></i>
                                    ";
        // line 167
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "billingPeriod", [], "any", false, false, false, 167) == "monthly")) ? ("Mensuel") : ("Annuel"));
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "startsAt", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "startsAt", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true)) : ("Non défini"));
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 183), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                                ";
        // line 185
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 185) && (CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 185) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 186
            yield "                                    <small class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i> Expiré</small>
                                ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 187
($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield "                                    ";
            $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 188), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 188), "days", [], "any", false, false, false, 188);
            // line 189
            yield "                                    <small class=\"text-success\"><i class=\"fas fa-hourglass-half me-1\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysLeft"] ?? null), "html", null, true);
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
        $context["maxUsers"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 214), "maxUsersPerRole", [], "any", false, false, false, 214);
        // line 215
        yield "                                    ";
        if (((null === ($context["maxUsers"] ?? null)) || (($context["maxUsers"] ?? null) == 999999999))) {
            // line 216
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 218
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxUsers"] ?? null), "html", null, true);
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
        $context["maxProducts"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 232), "maxProducts", [], "any", false, false, false, 232);
        // line 233
        yield "                                    ";
        if (((null === ($context["maxProducts"] ?? null)) || (($context["maxProducts"] ?? null) == 999999999))) {
            // line 234
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 236
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxProducts"] ?? null)), "html", null, true);
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
        $context["maxOrders"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 250), "maxOrdersPerMonth", [], "any", false, false, false, 250);
        // line 251
        yield "                                    ";
        if (((null === ($context["maxOrders"] ?? null)) || (($context["maxOrders"] ?? null) == 999999999))) {
            // line 252
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 254
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxOrders"] ?? null)), "html", null, true);
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
        $context["maxCategories"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 268), "maxCategories", [], "any", false, false, false, 268);
        // line 269
        yield "                                    ";
        if (((null === ($context["maxCategories"] ?? null)) || (($context["maxCategories"] ?? null) == 999999999))) {
            // line 270
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 272
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxCategories"] ?? null)), "html", null, true);
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
        $context["maxSuppliers"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 286), "maxSuppliers", [], "any", false, false, false, 286);
        // line 287
        yield "                                    ";
        if (((null === ($context["maxSuppliers"] ?? null)) || (($context["maxSuppliers"] ?? null) == 999999999))) {
            // line 288
            yield "                                        <i class=\"fas fa-infinity text-success\"></i>
                                    ";
        } else {
            // line 290
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxSuppliers"] ?? null)), "html", null, true);
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
        $context["hasRestaurantLimits"] = (((( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 301), "maxRecipes", [], "any", false, false, false, 301)) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 302
($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 302), "maxRecipeCategories", [], "any", false, false, false, 302))) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 303
($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 303), "maxRecipeIngredients", [], "any", false, false, false, 303))) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 304
($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 304), "maxMenuItems", [], "any", false, false, false, 304))) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 305
($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 305), "maxDailyMenuVariants", [], "any", false, false, false, 305)));
        // line 306
        yield "            
            ";
        // line 307
        if ((($tmp = ($context["hasRestaurantLimits"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 317), "maxRecipes", [], "any", false, false, false, 317))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-book text-success\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 324
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 324), "maxRecipes", [], "any", false, false, false, 324) == 999999999)) {
                    // line 325
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 327
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 327), "maxRecipes", [], "any", false, false, false, 327)), "html", null, true);
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
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 335), "maxRecipeCategories", [], "any", false, false, false, 335))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-tags text-info\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 342
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 342), "maxRecipeCategories", [], "any", false, false, false, 342) == 999999999)) {
                    // line 343
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 345
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 345), "maxRecipeCategories", [], "any", false, false, false, 345)), "html", null, true);
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
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 353), "maxRecipeIngredients", [], "any", false, false, false, 353))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 354
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-carrot text-warning\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 360
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 360), "maxRecipeIngredients", [], "any", false, false, false, 360) == 999999999)) {
                    // line 361
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 363
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 363), "maxRecipeIngredients", [], "any", false, false, false, 363)), "html", null, true);
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
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 371), "maxMenuItems", [], "any", false, false, false, 371))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 372
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-clipboard-list text-primary\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 378
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 378), "maxMenuItems", [], "any", false, false, false, 378) == 999999999)) {
                    // line 379
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 381
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 381), "maxMenuItems", [], "any", false, false, false, 381)), "html", null, true);
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
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 389), "maxDailyMenuVariants", [], "any", false, false, false, 389))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 390
                yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"limit-card\">
                                    <div class=\"limit-icon\">
                                        <i class=\"fas fa-calendar-alt text-secondary\"></i>
                                    </div>
                                    <div class=\"limit-value\">
                                        ";
                // line 396
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 396), "maxDailyMenuVariants", [], "any", false, false, false, 396) == 999999999)) {
                    // line 397
                    yield "                                            <i class=\"fas fa-infinity text-success\"></i>
                                        ";
                } else {
                    // line 399
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 399), "maxDailyMenuVariants", [], "any", false, false, false, 399)), "html", null, true);
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
        $context["features"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 412), "features", [], "any", false, false, false, 412);
        // line 413
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["features"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 436), "isUnlimited", [], "any", false, false, false, 436)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 456), "maxUsersPerRole", [], "any", false, false, false, 456)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 456), "maxUsersPerRole", [], "any", false, false, false, 456) != 999999999))) {
            // line 457
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-users me-2 text-primary\"></i> Utilisateurs max / rôle</span>
                                <span class=\"fw-bold\">";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 459), "maxUsersPerRole", [], "any", false, false, false, 459), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 462
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 462), "maxProducts", [], "any", false, false, false, 462)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 462), "maxProducts", [], "any", false, false, false, 462) != 999999999))) {
            // line 463
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-box me-2 text-success\"></i> Produits maximum</span>
                                <span class=\"fw-bold\">";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 465), "maxProducts", [], "any", false, false, false, 465)), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 468
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 468), "maxOrdersPerMonth", [], "any", false, false, false, 468)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 468), "maxOrdersPerMonth", [], "any", false, false, false, 468) != 999999999))) {
            // line 469
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-shopping-cart me-2 text-warning\"></i> Commandes max / mois</span>
                                <span class=\"fw-bold\">";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 471), "maxOrdersPerMonth", [], "any", false, false, false, 471)), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 474
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 474), "maxCategories", [], "any", false, false, false, 474)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 474), "maxCategories", [], "any", false, false, false, 474) != 999999999))) {
            // line 475
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-tags me-2 text-info\"></i> Catégories maximum</span>
                                <span class=\"fw-bold\">";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 477), "maxCategories", [], "any", false, false, false, 477)), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 480
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 480), "maxSuppliers", [], "any", false, false, false, 480)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 480), "maxSuppliers", [], "any", false, false, false, 480) != 999999999))) {
            // line 481
            yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-truck me-2 text-secondary\"></i> Fournisseurs maximum</span>
                                <span class=\"fw-bold\">";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 483), "maxSuppliers", [], "any", false, false, false, 483)), "html", null, true);
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
        if ((($tmp = ($context["hasRestaurantLimits"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 501), "maxRecipes", [], "any", false, false, false, 501)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 501), "maxRecipes", [], "any", false, false, false, 501) != 999999999))) {
                // line 502
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-book me-2 text-success\"></i> Recettes maximum</span>
                                <span class=\"fw-bold\">";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 504), "maxRecipes", [], "any", false, false, false, 504)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 507
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 507), "maxRecipeCategories", [], "any", false, false, false, 507)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 507), "maxRecipeCategories", [], "any", false, false, false, 507) != 999999999))) {
                // line 508
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-tags me-2 text-info\"></i> Catégories de recettes</span>
                                <span class=\"fw-bold\">";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 510), "maxRecipeCategories", [], "any", false, false, false, 510)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 513
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 513), "maxRecipeIngredients", [], "any", false, false, false, 513)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 513), "maxRecipeIngredients", [], "any", false, false, false, 513) != 999999999))) {
                // line 514
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-carrot me-2 text-warning\"></i> Ingrédients max / recette</span>
                                <span class=\"fw-bold\">";
                // line 516
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 516), "maxRecipeIngredients", [], "any", false, false, false, 516)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 519
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 519), "maxMenuItems", [], "any", false, false, false, 519)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 519), "maxMenuItems", [], "any", false, false, false, 519) != 999999999))) {
                // line 520
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-clipboard-list me-2 text-primary\"></i> Éléments de menu max</span>
                                <span class=\"fw-bold\">";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 522), "maxMenuItems", [], "any", false, false, false, 522)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 525
            yield "                        ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 525), "maxDailyMenuVariants", [], "any", false, false, false, 525)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 525), "maxDailyMenuVariants", [], "any", false, false, false, 525) != 999999999))) {
                // line 526
                yield "                            <div class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                <span><i class=\"fas fa-calendar-alt me-2 text-secondary\"></i> Variantes menu journalier</span>
                                <span class=\"fw-bold\">";
                // line 528
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 528), "maxDailyMenuVariants", [], "any", false, false, false, 528)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_index", ["subscription_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "id", [], "any", false, false, false, 542)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-info float-end\">
                            <i class=\"fas fa-external-link-alt me-1\"></i> Voir tout
                        </a>
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 548
        if (Twig\Extension\CoreExtension::testEmpty(($context["payments"] ?? null))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["payments"] ?? null), 0, 5));
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
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["payments"] ?? null)) > 5)) {
                // line 587
                yield "                                <div class=\"text-center mt-2\">
                                    <small class=\"text-muted\">+";
                // line 588
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["payments"] ?? null)) - 5), "html", null, true);
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
        return array (  1025 => 593,  1021 => 591,  1015 => 588,  1012 => 587,  1009 => 586,  1002 => 584,  995 => 580,  990 => 577,  988 => 576,  981 => 572,  977 => 571,  972 => 569,  964 => 564,  957 => 560,  949 => 556,  945 => 555,  942 => 554,  935 => 549,  933 => 548,  924 => 542,  915 => 535,  909 => 531,  903 => 528,  899 => 526,  896 => 525,  890 => 522,  886 => 520,  883 => 519,  877 => 516,  873 => 514,  870 => 513,  864 => 510,  860 => 508,  857 => 507,  851 => 504,  847 => 502,  845 => 501,  834 => 492,  832 => 491,  825 => 486,  819 => 483,  815 => 481,  812 => 480,  806 => 477,  802 => 475,  799 => 474,  793 => 471,  789 => 469,  786 => 468,  780 => 465,  776 => 463,  773 => 462,  767 => 459,  763 => 457,  761 => 456,  745 => 442,  738 => 437,  736 => 436,  733 => 435,  727 => 431,  717 => 427,  712 => 424,  708 => 423,  697 => 414,  694 => 413,  692 => 412,  688 => 410,  682 => 406,  675 => 401,  669 => 399,  665 => 397,  663 => 396,  655 => 390,  653 => 389,  650 => 388,  643 => 383,  637 => 381,  633 => 379,  631 => 378,  623 => 372,  621 => 371,  618 => 370,  611 => 365,  605 => 363,  601 => 361,  599 => 360,  591 => 354,  589 => 353,  586 => 352,  579 => 347,  573 => 345,  569 => 343,  567 => 342,  559 => 336,  557 => 335,  554 => 334,  547 => 329,  541 => 327,  537 => 325,  535 => 324,  527 => 318,  525 => 317,  514 => 308,  512 => 307,  509 => 306,  507 => 305,  506 => 304,  505 => 303,  504 => 302,  503 => 301,  492 => 292,  486 => 290,  482 => 288,  479 => 287,  477 => 286,  463 => 274,  457 => 272,  453 => 270,  450 => 269,  448 => 268,  434 => 256,  428 => 254,  424 => 252,  421 => 251,  419 => 250,  405 => 238,  399 => 236,  395 => 234,  392 => 233,  390 => 232,  376 => 220,  370 => 218,  366 => 216,  363 => 215,  361 => 214,  336 => 191,  330 => 189,  327 => 188,  325 => 187,  322 => 186,  320 => 185,  315 => 183,  304 => 175,  293 => 167,  289 => 166,  281 => 160,  277 => 158,  275 => 157,  271 => 156,  263 => 150,  257 => 146,  251 => 142,  249 => 141,  239 => 133,  235 => 131,  231 => 129,  229 => 128,  226 => 127,  224 => 126,  221 => 125,  219 => 124,  215 => 123,  189 => 100,  183 => 97,  172 => 89,  164 => 84,  157 => 80,  149 => 74,  142 => 73,  72 => 7,  65 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/subscription/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\subscription\\show.html.twig");
    }
}
