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
class __TwigTemplate_f846902665ba74fa6c178965a4af6d80 extends Template
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
        yield "Paiement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
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
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 107), "companyName", [], "any", false, false, false, 107), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "status", [], "any", false, false, false, 133), "html", null, true);
        yield "\">
                                        ";
        // line 134
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "status", [], "any", false, false, false, 134) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "status", [], "any", false, false, false, 134) == "paid"))) {
            // line 135
            yield "                                            <i class=\"fas fa-check-circle me-1\"></i> Payé
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 136
($context["payment"] ?? null), "status", [], "any", false, false, false, 136) == "pending")) {
            // line 137
            yield "                                            <i class=\"fas fa-clock me-1\"></i> En attente
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 138
($context["payment"] ?? null), "status", [], "any", false, false, false, 138) == "failed")) {
            // line 139
            yield "                                            <i class=\"fas fa-times-circle me-1\"></i> Échoué
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 140
($context["payment"] ?? null), "status", [], "any", false, false, false, 140) == "refunded")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentMethod", [], "any", false, false, false, 157), [], "array", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["methodLabels"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentMethod", [], "any", false, false, false, 157)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentMethod", [], "any", false, false, false, 157))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentMethod", [], "any", false, false, false, 157))), "html", null, true);
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentDate", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentDate", [], "any", false, false, false, 165), "d/m/Y H:i:s"), "html", null, true)) : ("Non définie"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "createdAt", [], "any", false, false, false, 173), "d/m/Y H:i:s"), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "transactionId", [], "any", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "transactionId", [], "any", false, false, false, 181), "Non défini")) : ("Non défini")), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "invoiceNumber", [], "any", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "invoiceNumber", [], "any", false, false, false, 189), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        ";
        // line 193
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "notes", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "                            <div class=\"col-12\">
                                <div class=\"info-card\">
                                    <small class=\"text-muted\">Notes</small>
                                    <div class=\"mt-1\">";
            // line 197
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "notes", [], "any", false, false, false, 197), "html", null, true));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 220), "startsAt", [], "any", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 220), "startsAt", [], "any", false, false, false, 220), "d/m/Y"), "html", null, true)) : ("?"));
            yield "
                                    <i class=\"fas fa-arrow-right mx-1 text-muted\"></i>
                                    ";
            // line 222
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 222), "endsAt", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 222), "endsAt", [], "any", false, false, false, 222), "d/m/Y"), "html", null, true)) : ("?"));
            yield "
                                </div>
                                ";
            // line 224
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 224), "endsAt", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 225
                yield "                                    ";
                $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 225), "endsAt", [], "any", false, false, false, 225), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 225), "days", [], "any", false, false, false, 225);
                // line 226
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 226), "endsAt", [], "any", false, false, false, 226) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 227
                    yield "                                        <small class=\"text-success\">
                                            <i class=\"fas fa-hourglass-half me-1\"></i>";
                    // line 228
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysLeft"] ?? null), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 241), "subscriptionPlan", [], "any", false, false, false, 241), "displayName", [], "any", false, false, false, 241), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période de facturation</small>
                                <div class=\"fw-bold mt-1\">
                                    ";
            // line 248
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 248), "billingPeriod", [], "any", false, false, false, 248) == "monthly")) ? ("Mensuel") : ("Annuel"));
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
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 256), "status", [], "any", false, false, false, 256) == "active")) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 256), "status", [], "any", false, false, false, 256) == "pending")) ? ("bg-warning") : ("bg-danger"))));
            yield "\">
                                        ";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 257), "status", [], "any", false, false, false, 257), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "subscription", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "amount", [], "any", false, false, false, 280), 0, ",", " "), "html", null, true);
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
        $context["logoPath"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 298), "logo", [], "any", false, false, false, 298);
        // line 299
        yield "                        ";
        if ((($context["logoPath"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(($context["logoPath"] ?? null)))) {
            // line 300
            yield "                            ";
            if ((is_string($_v1 = ($context["logoPath"] ?? null)) && is_string($_v2 = "uploads/") && str_starts_with($_v1, $_v2))) {
                // line 301
                yield "                                ";
                $context["logoFullPath"] = ($context["logoPath"] ?? null);
                // line 302
                yield "                            ";
            } elseif ((is_string($_v3 = ($context["logoPath"] ?? null)) && is_string($_v4 = "/") && str_starts_with($_v3, $_v4))) {
                // line 303
                yield "                                ";
                $context["logoFullPath"] = ($context["logoPath"] ?? null);
                // line 304
                yield "                            ";
            } else {
                // line 305
                yield "                                ";
                $context["logoFullPath"] = ("uploads/logos/" . ($context["logoPath"] ?? null));
                // line 306
                yield "                            ";
            }
            // line 307
            yield "                            
                            ";
            // line 308
            if ((is_string($_v5 = ($context["logoFullPath"] ?? null)) && is_string($_v6 = "/") && str_starts_with($_v5, $_v6))) {
                // line 309
                yield "                                ";
                $context["logoUrl"] = ($context["logoFullPath"] ?? null);
                // line 310
                yield "                            ";
            } else {
                // line 311
                yield "                                ";
                $context["logoUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["logoFullPath"] ?? null));
                // line 312
                yield "                            ";
            }
            // line 313
            yield "                            
                            <img src=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logoUrl"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 314), "companyName", [], "any", false, false, false, 314), "html", null, true);
            yield "\" class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 315), "companyName", [], "any", false, false, false, 315), 0, 2)), "html", null, true);
            yield "</div>';\">
                        ";
        } else {
            // line 317
            yield "                            <div class=\"company-initials\">
                                ";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 318), "companyName", [], "any", false, false, false, 318), 0, 2)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 321
        yield "                    </div>
                    <div class=\"text-center mb-3\">
                        <h5 class=\"mb-0\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 323), "companyName", [], "any", false, false, false, 323), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 324), "subscriptionNumber", [], "any", false, false, false, 324), "html", null, true);
        yield "</small>
                    </div>
                    
                    <div class=\"info-row\">
                        <span class=\"info-label\">Type d'entreprise</span>
                        <span class=\"info-value\">
                            ";
        // line 330
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 330), "type", [], "any", false, false, false, 330) == "restaurant")) {
            // line 331
            yield "                                🍽️ Restaurant
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 332
($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 332), "type", [], "any", false, false, false, 332) == "commerce")) {
            // line 333
            yield "                                🛒 Commerce
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 334
($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 334), "type", [], "any", false, false, false, 334) == "service")) {
            // line 335
            yield "                                🛠️ Service
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 336
($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 336), "type", [], "any", false, false, false, 336) == "industry")) {
            // line 337
            yield "                                🏭 Industrie
                            ";
        } else {
            // line 339
            yield "                                🏢 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, true, false, 339), "type", [], "any", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 339), "type", [], "any", false, false, false, 339), "Non défini")) : ("Non défini"))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 345), "email", [], "any", false, false, false, 345), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Téléphone</span>
                        <span class=\"info-value\">";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, true, false, 349), "phone", [], "any", true, true, false, 349)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 349), "phone", [], "any", false, false, false, 349), "—")) : ("—")), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date d'inscription</span>
                        <span class=\"info-value\">";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 353), "createdAt", [], "any", false, false, false, 353), "d/m/Y"), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"mt-3\">
                        <a href=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, false, false, 357), "id", [], "any", false, false, false, 357)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary w-100\">
                            <i class=\"fas fa-eye me-1\"></i> Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            <!-- Détails techniques (si disponibles) -->
            ";
        // line 365
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", true, true, false, 365) && CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 365))) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 379), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
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
        return array (  640 => 385,  631 => 379,  616 => 366,  614 => 365,  603 => 357,  596 => 353,  589 => 349,  582 => 345,  576 => 341,  570 => 339,  566 => 337,  564 => 336,  561 => 335,  559 => 334,  556 => 333,  554 => 332,  551 => 331,  549 => 330,  540 => 324,  536 => 323,  532 => 321,  526 => 318,  523 => 317,  518 => 315,  512 => 314,  509 => 313,  506 => 312,  503 => 311,  500 => 310,  497 => 309,  495 => 308,  492 => 307,  489 => 306,  486 => 305,  483 => 304,  480 => 303,  477 => 302,  474 => 301,  471 => 300,  468 => 299,  466 => 298,  445 => 280,  434 => 271,  424 => 264,  414 => 257,  410 => 256,  399 => 248,  389 => 241,  382 => 236,  379 => 235,  373 => 231,  367 => 228,  364 => 227,  361 => 226,  358 => 225,  356 => 224,  351 => 222,  346 => 220,  331 => 207,  329 => 206,  322 => 201,  315 => 197,  310 => 194,  308 => 193,  301 => 189,  290 => 181,  279 => 173,  268 => 165,  256 => 157,  254 => 151,  244 => 143,  240 => 141,  238 => 140,  235 => 139,  233 => 138,  230 => 137,  228 => 136,  225 => 135,  223 => 134,  219 => 133,  194 => 111,  187 => 107,  172 => 95,  164 => 89,  157 => 88,  72 => 7,  65 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/payment/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\payment\\show.html.twig");
    }
}
