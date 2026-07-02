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

/* super_admin/subscription/index.html.twig */
class __TwigTemplate_e0bdac75f126bd8cc1118d6feac187f4 extends Template
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
        yield "Gestion des abonnements - Super Admin";
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
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    .table-container {
        overflow-x: auto;
    }
    .subscription-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .subscription-row:hover {
        background: #f1f5f9;
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
    /* Carte dernier abonnement */
    .last-subscription-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .last-subscription-card:hover {
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
    }
    .info-value {
        font-weight: 600;
    }
</style>
";
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-tags me-1\"></i> Abonnements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                Gestion des abonnements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-globe me-1\"></i>
                Gérez tous les abonnements des entreprises
            </p>
        </div>
        <div>
            <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
        yield "\" class=\"btn btn-outline-info me-2\">
                <i class=\"fas fa-credit-card me-1\"></i> Voir les paiements
            </a>
            <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel abonnement
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-primary bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Total abonnements</div>
                            <div class=\"stat-value\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["subscriptions"] ?? null)), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-primary p-3\">
                            <i class=\"fas fa-tags fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-success bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Abonnements actifs</div>
                            <div class=\"stat-value\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["subscriptions"] ?? null), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "status", [], "any", false, false, false, 155) == "active"); })), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-success p-3\">
                            <i class=\"fas fa-check-circle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-warning bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">En attente</div>
                            <div class=\"stat-value\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["subscriptions"] ?? null), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "status", [], "any", false, false, false, 170) == "pending"); })), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-warning p-3\">
                            <i class=\"fas fa-clock fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card stat-card bg-danger bg-opacity-10\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small\">Expirés/Annulés</div>
                            <div class=\"stat-value\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["subscriptions"] ?? null), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return ((CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "status", [], "any", false, false, false, 185) == "expired") || (CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "status", [], "any", false, false, false, 185) == "cancelled")); })), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-danger p-3\">
                            <i class=\"fas fa-exclamation-circle fa-fw text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges de filtres actifs -->
    ";
        // line 197
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 197) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 197)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 197)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 197))) {
            // line 198
            yield "    <div class=\"d-flex gap-2 flex-wrap mb-3\">
        ";
            // line 199
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 199) && array_key_exists("companies", $context))) {
                // line 200
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["companies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                    // line 201
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 201) == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 201))) {
                        // line 202
                        yield "                    <span class=\"filter-badge\" onclick=\"removeFilter('company_id')\">
                        <i class=\"fas fa-building me-1\"></i> ";
                        // line 203
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 203), "html", null, true);
                        yield "
                        <i class=\"fas fa-times ms-1\"></i>
                    </span>
                ";
                    }
                    // line 207
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                yield "        ";
            }
            // line 209
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 210
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                ";
                // line 212
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 212) == "active")) {
                    yield "Actif
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 213
($context["filters"] ?? null), "status", [], "any", false, false, false, 213) == "pending")) {
                    yield "En attente
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 214
($context["filters"] ?? null), "status", [], "any", false, false, false, 214) == "expired")) {
                    yield "Expiré
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 215
($context["filters"] ?? null), "status", [], "any", false, false, false, 215) == "cancelled")) {
                    yield "Annulé
                ";
                } else {
                    // line 216
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 216), "html", null, true);
                    yield "
                ";
                }
                // line 218
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 221
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 222
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: ";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 223), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 227
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 228
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: ";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 229), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 233
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 238
        yield "
    <!-- Filtres -->
    <div class=\"filter-card p-4 mb-4 shadow-sm\">
        <form method=\"get\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-building me-1\"></i>Entreprise
                </label>
                <select name=\"company_id\" class=\"form-select\">
                    <option value=\"\">Toutes</option>
                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("companies", $context)) ? (Twig\Extension\CoreExtension::default(($context["companies"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 249
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 249), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 249) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 249))) ? ("selected") : (""));
            yield ">
                            ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 250), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        yield "                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"active\" ";
        // line 261
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 261) == "active")) ? ("selected") : (""));
        yield ">✓ Actif</option>
                    <option value=\"pending\" ";
        // line 262
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 262) == "pending")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                    <option value=\"expired\" ";
        // line 263
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 263) == "expired")) ? ("selected") : (""));
        yield ">⌛ Expiré</option>
                    <option value=\"cancelled\" ";
        // line 264
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 264) == "cancelled")) ? ("selected") : (""));
        yield ">✗ Annulé</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 271), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-semibold small mb-1\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 277), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-3\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- Dernier abonnement - Pleine largeur -->
    ";
        // line 288
        $context["lastSubscription"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["subscriptions"] ?? null));
        // line 289
        yield "    ";
        if ((($tmp = ($context["lastSubscription"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "        <div class=\"last-subscription-card p-4 mb-4 text-white\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier abonnement enregistré
                </h5>
                <i class=\"fas fa-tag fa-2x opacity-50\"></i>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Entreprise</span>
                        <span class=\"info-value\">";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "hmaService", [], "any", false, false, false, 301), "companyName", [], "any", false, false, false, 301), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Plan</span>
                        <span class=\"info-value\">";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 307), "displayName", [], "any", false, false, false, 307), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Période</span>
                        <span class=\"info-value\">";
            // line 313
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "billingPeriod", [], "any", false, false, false, 313) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Statut</span>
                        <span class=\"info-value\">
                            ";
            // line 320
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "status", [], "any", false, false, false, 320) == "active")) {
                // line 321
                yield "                                <span class=\"badge bg-success\">✓ Actif</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 322
($context["lastSubscription"] ?? null), "status", [], "any", false, false, false, 322) == "pending")) {
                // line 323
                yield "                                <span class=\"badge bg-warning text-dark\">⏳ En attente</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 324
($context["lastSubscription"] ?? null), "status", [], "any", false, false, false, 324) == "expired")) {
                // line 325
                yield "                                <span class=\"badge bg-danger\">⌛ Expiré</span>
                            ";
            } else {
                // line 327
                yield "                                <span class=\"badge bg-secondary\">✗ Annulé</span>
                            ";
            }
            // line 329
            yield "                        </span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date création</span>
                        <span class=\"info-value\">";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "createdAt", [], "any", false, false, false, 335), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date fin</span>
                        <span class=\"info-value\">";
            // line 341
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "endsAt", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "endsAt", [], "any", false, false, false, 341), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
                    </div>
                </div>
            </div>
            <div class=\"mt-3 text-end\">
                <a href=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["lastSubscription"] ?? null), "id", [], "any", false, false, false, 346)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails complets
                </a>
            </div>
        </div>
    ";
        } else {
            // line 352
            yield "        <div class=\"last-subscription-card p-4 mb-4 text-white\">
            <div class=\"text-center py-3\">
                <i class=\"fas fa-tags fa-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0\">Aucun abonnement enregistré pour le moment</p>
            </div>
        </div>
    ";
        }
        // line 359
        yield "
    <!-- Liste des abonnements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des abonnements
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["subscriptions"] ?? null)), "html", null, true);
        yield " abonnement(s)</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                ";
        // line 371
        if (Twig\Extension\CoreExtension::testEmpty(($context["subscriptions"] ?? null))) {
            // line 372
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-tags fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0\">Aucun abonnement trouvé</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel abonnement</p>
                        <a href=\"";
            // line 376
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_new");
            yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-1\"></i> Nouvel abonnement
                        </a>
                    </div>
                ";
        } else {
            // line 381
            yield "                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 80px\">ID</th>
                                <th style=\"min-width: 200px\">Entreprise</th>
                                <th style=\"min-width: 180px\">Plan</th>
                                <th style=\"min-width: 120px\">Période</th>
                                <th style=\"min-width: 100px\">Statut</th>
                                <th style=\"min-width: 110px\">Date début</th>
                                <th style=\"min-width: 110px\">Date fin</th>
                                <th style=\"min-width: 80px\">Actif</th>
                                <th style=\"min-width: 130px\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 396
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscriptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 397
                yield "                                <tr class=\"subscription-row\">
                                    <td onclick=\"window.location='";
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 398)]), "html", null, true);
                yield "'\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 398), "html", null, true);
                yield "</td>
                                    <td onclick=\"window.location='";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 399)]), "html", null, true);
                yield "'\">
                                        <strong>";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "hmaService", [], "any", false, false, false, 400), "companyName", [], "any", false, false, false, 400), "html", null, true);
                yield "</strong>
                                        <br>
                                        <small class=\"text-muted\">";
                // line 402
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "hmaService", [], "any", false, false, false, 402), "subscriptionNumber", [], "any", false, false, false, 402), "html", null, true);
                yield "</small>
                                    </td>
                                    <td onclick=\"window.location='";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 404)]), "html", null, true);
                yield "'\">
                                        <strong>";
                // line 405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionPlan", [], "any", false, false, false, 405), "displayName", [], "any", false, false, false, 405), "html", null, true);
                yield "</strong>
                                        <br>
                                        <small class=\"text-muted\">";
                // line 407
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionPlan", [], "any", false, false, false, 407), "name", [], "any", false, false, false, 407), "html", null, true);
                yield "</small>
                                    </td>
                                    <td onclick=\"window.location='";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 409)]), "html", null, true);
                yield "'\">
                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas ";
                // line 411
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "billingPeriod", [], "any", false, false, false, 411) == "monthly")) ? ("fa-calendar-alt") : ("fa-calendar"));
                yield " me-1\"></i>
                                            ";
                // line 412
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "billingPeriod", [], "any", false, false, false, 412) == "monthly")) ? ("Mensuel") : ("Annuel"));
                yield "
                                        </span>
                                    </td>
                                    <td onclick=\"window.location='";
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 415)]), "html", null, true);
                yield "'\">
                                        <span class=\"badge-status ";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "status", [], "any", false, false, false, 416), "html", null, true);
                yield "\">
                                            ";
                // line 417
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "status", [], "any", false, false, false, 417) == "active")) {
                    // line 418
                    yield "                                                <i class=\"fas fa-check-circle me-1\"></i> Actif
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 419
$context["sub"], "status", [], "any", false, false, false, 419) == "pending")) {
                    // line 420
                    yield "                                                <i class=\"fas fa-clock me-1\"></i> En attente
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 421
$context["sub"], "status", [], "any", false, false, false, 421) == "expired")) {
                    // line 422
                    yield "                                                <i class=\"fas fa-hourglass-end me-1\"></i> Expiré
                                            ";
                } else {
                    // line 424
                    yield "                                                <i class=\"fas fa-ban me-1\"></i> Annulé
                                            ";
                }
                // line 426
                yield "                                        </span>
                                    </td>
                                    <td onclick=\"window.location='";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 428)]), "html", null, true);
                yield "'\">
                                        ";
                // line 429
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "startsAt", [], "any", false, false, false, 429)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "startsAt", [], "any", false, false, false, 429), "d/m/Y"), "html", null, true)) : ("-"));
                yield "
                                    </td>
                                    <td onclick=\"window.location='";
                // line 431
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 431)]), "html", null, true);
                yield "'\">
                                        ";
                // line 432
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 432), "d/m/Y"), "html", null, true)) : ("-"));
                yield "
                                        ";
                // line 433
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 433) && (CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 433) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                    // line 434
                    yield "                                            <i class=\"fas fa-exclamation-triangle text-danger ms-1\" title=\"Expiré\"></i>
                                        ";
                }
                // line 436
                yield "                                    </td>
                                    <td onclick=\"window.location='";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 437)]), "html", null, true);
                yield "'\">
                                        ";
                // line 438
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionActive", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 439
                    yield "                                            <span class=\"badge bg-success\"><i class=\"fas fa-check me-1\"></i> Oui</span>
                                        ";
                } else {
                    // line 441
                    yield "                                            <span class=\"badge bg-danger\"><i class=\"fas fa-times me-1\"></i> Non</span>
                                        ";
                }
                // line 443
                yield "                                    </td>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"";
                // line 446
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 446)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 449
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index", ["subscription_id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 449)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Voir les paiements\">
                                                <i class=\"fas fa-credit-card\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 456
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 459
        yield "            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 465
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 466
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
        // line 476
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "';
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/subscription/index.html.twig";
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
        return array (  828 => 476,  815 => 466,  808 => 465,  799 => 459,  794 => 456,  781 => 449,  775 => 446,  770 => 443,  766 => 441,  762 => 439,  760 => 438,  756 => 437,  753 => 436,  749 => 434,  747 => 433,  743 => 432,  739 => 431,  734 => 429,  730 => 428,  726 => 426,  722 => 424,  718 => 422,  716 => 421,  713 => 420,  711 => 419,  708 => 418,  706 => 417,  702 => 416,  698 => 415,  692 => 412,  688 => 411,  683 => 409,  678 => 407,  673 => 405,  669 => 404,  664 => 402,  659 => 400,  655 => 399,  649 => 398,  646 => 397,  642 => 396,  625 => 381,  617 => 376,  611 => 372,  609 => 371,  602 => 367,  592 => 359,  583 => 352,  574 => 346,  566 => 341,  557 => 335,  549 => 329,  545 => 327,  541 => 325,  539 => 324,  536 => 323,  534 => 322,  531 => 321,  529 => 320,  519 => 313,  510 => 307,  501 => 301,  488 => 290,  485 => 289,  483 => 288,  469 => 277,  460 => 271,  450 => 264,  446 => 263,  442 => 262,  438 => 261,  428 => 253,  419 => 250,  412 => 249,  408 => 248,  396 => 238,  389 => 233,  382 => 229,  379 => 228,  376 => 227,  369 => 223,  366 => 222,  363 => 221,  358 => 218,  353 => 216,  348 => 215,  344 => 214,  340 => 213,  336 => 212,  332 => 210,  329 => 209,  326 => 208,  320 => 207,  313 => 203,  310 => 202,  307 => 201,  302 => 200,  300 => 199,  297 => 198,  295 => 197,  280 => 185,  262 => 170,  244 => 155,  226 => 140,  209 => 126,  203 => 123,  181 => 104,  172 => 97,  165 => 96,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/subscription/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription\\index.html.twig");
    }
}
