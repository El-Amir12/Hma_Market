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
class __TwigTemplate_573a39d49be2c16b9c5f517b20ee7eee extends Template
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
        yield "Mes paiements - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 4), "html", null, true);
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
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 95), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 113), 0)) : (0))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", false, false, false, 128), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", false, false, false, 144), 0)) : (0))), "html", null, true);
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
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 156) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 156)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 156)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 156))) {
            // line 157
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 158
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 159
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 161) == "completed")) {
                    yield "Payé
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 162
($context["filters"] ?? null), "status", [], "any", false, false, false, 162) == "pending")) {
                    yield "En attente
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 163
($context["filters"] ?? null), "status", [], "any", false, false, false, 163) == "failed")) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('payment_method')\">
                <i class=\"fas fa-credit-card me-1\"></i> Mode: 
                ";
                // line 171
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 171) == "card")) {
                    yield "Carte bancaire
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 172
($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 172) == "mobile_money")) {
                    yield "Mobile Money
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 173
($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 173) == "transfer")) {
                    yield "Virement
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 174
($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 174) == "cash")) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: ";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 181), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 185
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 186
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 187), "html", null, true);
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 206) == "completed")) ? ("selected") : (""));
        yield ">✅ Payé</option>
                    <option value=\"pending\" ";
        // line 207
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 207) == "pending")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                    <option value=\"failed\" ";
        // line 208
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 208) == "failed")) ? ("selected") : (""));
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 217) == "card")) ? ("selected") : (""));
        yield ">💳 Carte bancaire</option>
                    <option value=\"mobile_money\" ";
        // line 218
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 218) == "mobile_money")) ? ("selected") : (""));
        yield ">📱 Mobile Money</option>
                    <option value=\"transfer\" ";
        // line 219
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 219) == "transfer")) ? ("selected") : (""));
        yield ">🏦 Virement</option>
                    <option value=\"cash\" ";
        // line 220
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 220) == "cash")) ? ("selected") : (""));
        yield ">💰 Espèces</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 227), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 233), "html", null, true);
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
        if (Twig\Extension\CoreExtension::testEmpty(($context["payments"] ?? null))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["payments"] ?? null));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288), [], "array", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["methodLabels"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288))) : (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 288))), "html", null, true);
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
        yield from [];
    }

    // line 343
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  607 => 354,  594 => 344,  587 => 343,  580 => 339,  577 => 338,  568 => 334,  561 => 330,  556 => 327,  554 => 326,  549 => 323,  542 => 318,  535 => 314,  530 => 312,  526 => 310,  524 => 309,  518 => 305,  512 => 302,  506 => 298,  504 => 297,  499 => 295,  488 => 288,  486 => 282,  475 => 273,  471 => 271,  467 => 269,  465 => 268,  462 => 267,  460 => 266,  456 => 265,  450 => 262,  445 => 260,  438 => 255,  433 => 254,  423 => 246,  421 => 245,  406 => 233,  397 => 227,  387 => 220,  383 => 219,  379 => 218,  375 => 217,  363 => 208,  359 => 207,  355 => 206,  343 => 196,  336 => 191,  329 => 187,  326 => 186,  323 => 185,  316 => 181,  313 => 180,  310 => 179,  305 => 176,  300 => 174,  296 => 173,  292 => 172,  288 => 171,  284 => 169,  281 => 168,  276 => 165,  271 => 163,  267 => 162,  263 => 161,  259 => 159,  257 => 158,  254 => 157,  252 => 156,  237 => 144,  218 => 128,  200 => 113,  183 => 99,  176 => 95,  158 => 80,  149 => 73,  142 => 72,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/payment/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\payment\\index.html.twig");
    }
}
