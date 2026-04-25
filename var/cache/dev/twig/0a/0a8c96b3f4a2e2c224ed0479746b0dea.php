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

/* sale/orders/show.html.twig */
class __TwigTemplate_a7d085b4c8b944d0c35cf023f9758113 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/show.html.twig"));

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

        yield "Détails de la commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "orderNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    .order-card {
        background: white;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    .order-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    .info-item {
        padding: 0.75rem 1.25rem;
        border-bottom: 1px solid #f1f5f9;
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    .info-value {
        font-weight: 600;
    }
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-cancelled { background: #fee2e2; color: #dc2626; }
    .status-refunded { background: #fef3c7; color: #d97706; }
    
    .return-card {
        background: #fffbeb;
        border-left: 4px solid #f59e0b;
        transition: transform 0.2s;
    }
    .return-card:hover {
        transform: translateX(5px);
    }
    
    .action-buttons {
        margin-top: 1rem;
        text-align: right;
    }
    .items-table th, .items-table td {
        vertical-align: middle;
    }
    
    .quantity-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        padding: 0.25rem 0.5rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    .quantity-returned {
        background-color: #fee2e2;
        color: #dc2626;
    }
    .quantity-remaining {
        background-color: #dcfce7;
        color: #16a34a;
    }
    .quantity-total {
        background-color: #e5e7eb;
        color: #374151;
    }
    .return-items-list {
        margin-top: 0.5rem;
        padding-top: 0.5rem;
        border-top: 1px dashed #e5e7eb;
    }
    .return-item-badge {
        display: inline-block;
        background: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 12px;
        font-size: 0.7rem;
        margin: 0.2rem 0.2rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
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

        // line 103
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 115, $this->source); })()), "orderNumber", [], "any", false, false, false, 115), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-receipt me-2 text-primary\"></i>
                Commande #";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 121, $this->source); })()), "orderNumber", [], "any", false, false, false, 121), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-calendar me-1\"></i>
                Créée le ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 125, $this->source); })()), "createdAt", [], "any", false, false, false, 125), "d/m/Y H:i"), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"printReceiptBtn\">
                <i class=\"fas fa-print me-1\"></i> Imprimer le reçu
            </button>
            <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations commande -->
        <div class=\"col-lg-4\">
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations commande</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 148
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 148, $this->source); })()), "status", [], "any", false, false, false, 148) == "completed")) {
            // line 149
            yield "                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 150
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 150, $this->source); })()), "status", [], "any", false, false, false, 150) == "cancelled")) {
            // line 151
            yield "                            <span class=\"status-badge status-cancelled\">❌ Annulée</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 152
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 152, $this->source); })()), "status", [], "any", false, false, false, 152) == "refunded")) {
            // line 153
            yield "                            <span class=\"status-badge status-refunded\">🔄 Remboursée</span>
                        ";
        } else {
            // line 155
            yield "                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        ";
        }
        // line 157
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">";
        // line 161
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 161, $this->source); })()), "customerName", [], "any", false, false, false, 161)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 161, $this->source); })()), "customerName", [], "any", false, false, false, 161), "html", null, true)) : ("Non renseigné"));
        yield "</div>
                    ";
        // line 162
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 162, $this->source); })()), "customerPhone", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                        <div class=\"small text-muted mt-1\">
                            <i class=\"fas fa-phone me-1\"></i> ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "customerPhone", [], "any", false, false, false, 164), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 167
        yield "                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Caissier</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
        // line 172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "photo", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "photo", [], "any", false, false, false, 173))), "html", null, true);
            yield "\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                            ";
        } else {
            // line 175
            yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-user text-secondary\"></i>
                                </div>
                            ";
        }
        // line 179
        yield "                            <div>
                                <strong>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 180), "fullName", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "fullName", [], "any", false, false, false, 180), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "email", [], "any", false, false, false, 180))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "email", [], "any", false, false, false, 180))), "html", null, true);
        yield "</strong>
                                <br><small class=\"text-muted\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181), "roles", [], "any", false, false, false, 181)), ["ROLE_" => ""]), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Mode de paiement</div>
                    <div class=\"info-value\">
                        ";
        // line 189
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 189, $this->source); })()), "paymentMethod", [], "any", false, false, false, 189) == "cash")) {
            // line 190
            yield "                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 191
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 191, $this->source); })()), "paymentMethod", [], "any", false, false, false, 191) == "card")) {
            // line 192
            yield "                            <i class=\"fas fa-credit-card text-primary me-1\"></i> Carte bancaire
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 193
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 193, $this->source); })()), "paymentMethod", [], "any", false, false, false, 193) == "mobile_money")) {
            // line 194
            yield "                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        ";
        }
        // line 196
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Montants</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Total :</span>
                            <strong class=\"text-primary\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 203, $this->source); })()), "totalAmount", [], "any", false, false, false, 203), 0, ",", " "), "html", null, true);
        yield " FCFA</strong>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <span>Payé :</span>
                            <span>";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 207, $this->source); })()), "amountPaid", [], "any", false, false, false, 207), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        ";
        // line 209
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 209, $this->source); })()), "changeAmount", [], "any", false, false, false, 209) > 0)) {
            // line 210
            yield "                            <div class=\"d-flex justify-content-between mt-1\">
                                <span>Monnaie :</span>
                                <span class=\"text-success\">";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 212, $this->source); })()), "changeAmount", [], "any", false, false, false, 212), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                            </div>
                        ";
        }
        // line 215
        yield "                    </div>
                </div>
                ";
        // line 217
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 217, $this->source); })()), "notes", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 218
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Notes</div>
                    <div class=\"info-value text-muted\">";
            // line 220
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 220, $this->source); })()), "notes", [], "any", false, false, false, 220), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 223
        yield "            </div>
        </div>

        <!-- Colonne droite - Articles et retours -->
        <div class=\"col-lg-8\">
            <!-- Articles commandés -->
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Articles commandés
                        <span class=\"badge bg-secondary ms-2\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 234, $this->source); })()), "orderItems", [], "any", false, false, false, 234)), "html", null, true);
        yield " article(s)</span>
                    </h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 items-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>
                                    ";
        // line 242
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 242, $this->source); })()) == "restaurant")) {
            // line 243
            yield "                                        Article
                                    ";
        } else {
            // line 245
            yield "                                        Produit
                                    ";
        }
        // line 247
        yield "                                </th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-center\">Prix unitaire</th>
                                <th class=\"text-center\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 254, $this->source); })()), "orderItems", [], "any", false, false, false, 254));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 255
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            ";
            // line 258
            if (((isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 258, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe", [], "any", false, false, false, 258))) {
                // line 259
                yield "                                                <i class=\"fas fa-utensils text-primary me-2 fa-fw\"></i>
                                            ";
            } else {
                // line 261
                yield "                                                <i class=\"fas fa-box text-success me-2 fa-fw\"></i>
                                            ";
            }
            // line 263
            yield "                                            <div>
                                                <strong>";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 264), "html", null, true);
            yield "</strong>
                                                ";
            // line 265
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 266
                yield "                                                    <br><small class=\"text-primary\"><i class=\"fas fa-tag me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 266), "html", null, true);
                yield " (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionDiscountPercentage", [], "any", false, false, false, 266), "html", null, true);
                yield "%)</small>
                                                ";
            }
            // line 268
            yield "                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-secondary\">";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 272), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 275
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 276
                yield "                                            <span class=\"text-muted text-decoration-line-through\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 276), 0, ",", " "), "html", null, true);
                yield " FCFA</span><br>
                                            <span class=\"text-primary\">";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 277), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                        ";
            } else {
                // line 279
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 279), 0, ",", " "), "html", null, true);
                yield " FCFA
                                        ";
            }
            // line 281
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        <strong>";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 283), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end fw-bold\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5\">
                                    ";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 292, $this->source); })()), "totalAmount", [], "any", false, false, false, 292), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Retours effectués -->
            ";
        // line 301
        if ((array_key_exists("returns", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 301, $this->source); })())) > 0))) {
            // line 302
            yield "            <div class=\"order-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                        Retours effectués
                        <span class=\"badge bg-warning ms-2\">";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 307, $this->source); })())), "html", null, true);
            yield " retour(s)</span>
                    </h5>
                </div>
                <div class=\"p-3\">
                    ";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 311, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 312
                yield "                        <div class=\"return-card card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-2\">
                                    <div>
                                        <h6 class=\"mb-1\">
                                            <a href=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 317)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                                <i class=\"fas fa-receipt me-1\"></i> ";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 318), "html", null, true);
                yield "
                                            </a>
                                        </h6>
                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i> ";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 322), "d/m/Y H:i"), "html", null, true);
                yield "
                                        </div>
                                    </div>
                                    <div>
                                        ";
                // line 326
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 326) == "pending")) {
                    // line 327
                    yield "                                            <span class=\"badge bg-warning\">⏳ En attente</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 328
$context["return"], "status", [], "any", false, false, false, 328) == "approved")) {
                    // line 329
                    yield "                                            <span class=\"badge bg-primary\">✓ Approuvé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 330
$context["return"], "status", [], "any", false, false, false, 330) == "completed")) {
                    // line 331
                    yield "                                            <span class=\"badge bg-success\">✅ Remboursé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 332
$context["return"], "status", [], "any", false, false, false, 332) == "rejected")) {
                    // line 333
                    yield "                                            <span class=\"badge bg-danger\">❌ Rejeté</span>
                                        ";
                }
                // line 335
                yield "                                    </div>
                                </div>
                                
                                <div class=\"mt-3\">
                                    <table class=\"table table-sm table-bordered mb-0\">
                                        <thead class=\"table-light\">
                                            <tr>
                                                <th>Produit</th>
                                                <th class=\"text-center\">Quantité retournée</th>
                                                <th class=\"text-center\">Quantité restante</th>
                                                <th class=\"text-center\">Prix unitaire</th>
                                                <th class=\"text-center\">Total remboursé</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
                // line 350
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnItems", [], "any", false, false, false, 350));
                foreach ($context['_seq'] as $context["_key"] => $context["returnItem"]) {
                    // line 351
                    yield "                                                ";
                    $context["originalQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "originalOrderItem", [], "any", false, false, false, 351), "quantity", [], "any", false, false, false, 351);
                    // line 352
                    yield "                                                ";
                    $context["returnedQty"] = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "quantityReturned", [], "any", false, false, false, 352);
                    // line 353
                    yield "                                                ";
                    $context["remainingQty"] = ((isset($context["originalQty"]) || array_key_exists("originalQty", $context) ? $context["originalQty"] : (function () { throw new RuntimeError('Variable "originalQty" does not exist.', 353, $this->source); })()) - (isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 353, $this->source); })()));
                    // line 354
                    yield "                                                <tr>
                                                    <td>
                                                        <strong>";
                    // line 356
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "productName", [], "any", false, false, false, 356), "html", null, true);
                    yield "</strong>
                                                        ";
                    // line 357
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 358
                        yield "                                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 358), "html", null, true);
                        yield "</small>
                                                        ";
                    }
                    // line 360
                    yield "                                                        <br><small class=\"text-muted\">
                                                            <i class=\"fas ";
                    // line 361
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 361) == "recipe")) {
                        yield "fa-utensils";
                    } else {
                        yield "fa-box";
                    }
                    yield " me-1\"></i>
                                                            ";
                    // line 362
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 362) == "recipe")) {
                        yield "Menu";
                    } else {
                        yield "Produit";
                    }
                    // line 363
                    yield "                                                        </small>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge bg-danger\">";
                    // line 366
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 366, $this->source); })()), "html", null, true);
                    yield "</span>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 369
                    if (((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 369, $this->source); })()) > 0)) {
                        // line 370
                        yield "                                                            <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 370, $this->source); })()), "html", null, true);
                        yield "</span>
                                                        ";
                    } else {
                        // line 372
                        yield "                                                            <span class=\"badge bg-secondary\">0</span>
                                                        ";
                    }
                    // line 374
                    yield "                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 376
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "unitPriceAtSale", [], "any", false, false, false, 376), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <strong class=\"text-primary\">";
                    // line 379
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "totalRefund", [], "any", false, false, false, 379), 0, ",", " "), "html", null, true);
                    yield " FCFA</strong>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['returnItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 383
                yield "                                        </tbody>
                                        <tfoot class=\"table-light\">
                                            <tr>
                                                <td colspan=\"4\" class=\"text-end fw-bold\">Total remboursé :</td>
                                                <td class=\"text-center fw-bold text-primary h5\">
                                                    ";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "totalRefundAmount", [], "any", false, false, false, 388), 0, ",", " "), "html", null, true);
                yield " FCFA
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                                <div class=\"row mt-2 small\">
                                    <div class=\"col-md-4\">
                                        <strong>Motif :</strong> ";
                // line 397
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 397), [], "array", true, true, false, 397)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 397, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 397), [], "array", false, false, false, 397), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 397))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 397))), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Enregistré par :</strong> ";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 400), "fullName", [], "any", false, false, false, 400), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Méthode :</strong>
                                        ";
                // line 404
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "refundMethod", [], "any", false, false, false, 404) == "cash")) {
                    // line 405
                    yield "                                            💰 Espèces
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 406
$context["return"], "refundMethod", [], "any", false, false, false, 406) == "mobile_money")) {
                    // line 407
                    yield "                                            📱 Mobile Money
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 408
$context["return"], "refundMethod", [], "any", false, false, false, 408) == "bank_transfer")) {
                    // line 409
                    yield "                                            🏦 Virement bancaire
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 410
$context["return"], "refundMethod", [], "any", false, false, false, 410) == "wallet")) {
                    // line 411
                    yield "                                            📱 Porte-monnaie électronique
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 412
$context["return"], "refundMethod", [], "any", false, false, false, 412) == "credit_note")) {
                    // line 413
                    yield "                                            📝 Avoir / Note de crédit
                                        ";
                }
                // line 415
                yield "                                    </div>
                                </div>
                                <div class=\"mt-2\">
                                    <a href=\"";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 418)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['return'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            yield "                </div>
            </div>
            ";
        }
        // line 428
        yield "
            <!-- Bouton Nouveau retour - Condition simple -->
            ";
        // line 430
        $context["hasRemainingItems"] = false;
        // line 431
        yield "
            ";
        // line 433
        yield "            ";
        $context["returnedQuantities"] = ((array_key_exists("totalReturnedQuantities", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalReturnedQuantities"]) || array_key_exists("totalReturnedQuantities", $context) ? $context["totalReturnedQuantities"] : (function () { throw new RuntimeError('Variable "totalReturnedQuantities" does not exist.', 433, $this->source); })()), [])) : ([]));
        // line 434
        yield "
            ";
        // line 436
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 436, $this->source); })()), "orderItems", [], "any", false, false, false, 436));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 437
            yield "                ";
            $context["alreadyReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnedQuantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 437), [], "array", true, true, false, 437)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnedQuantities"]) || array_key_exists("returnedQuantities", $context) ? $context["returnedQuantities"] : (function () { throw new RuntimeError('Variable "returnedQuantities" does not exist.', 437, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 437), [], "array", false, false, false, 437), 0)) : (0));
            // line 438
            yield "                ";
            $context["remaining"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 438) - (isset($context["alreadyReturned"]) || array_key_exists("alreadyReturned", $context) ? $context["alreadyReturned"] : (function () { throw new RuntimeError('Variable "alreadyReturned" does not exist.', 438, $this->source); })()));
            // line 439
            yield "                ";
            if (((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 439, $this->source); })()) > 0)) {
                // line 440
                yield "                    ";
                $context["hasRemainingItems"] = true;
                // line 441
                yield "                ";
            }
            // line 442
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        yield "
            ";
        // line 445
        yield "            ";
        if ((($tmp = (isset($context["hasRemainingItems"]) || array_key_exists("hasRemainingItems", $context) ? $context["hasRemainingItems"] : (function () { throw new RuntimeError('Variable "hasRemainingItems" does not exist.', 445, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 446
            yield "                <div class=\"action-buttons\">
                    <a href=\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_new", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 447, $this->source); })()), "id", [], "any", false, false, false, 447)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-undo-alt me-2\"></i> Demander un retour
                    </a>
                </div>
            ";
        }
        // line 452
        yield "        </div>
    </div>
</div>

<!-- Modal d'impression -->
<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Aperçu du reçu
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptModalBtn\">
                    <i class=\"fas fa-print me-2\"></i> Imprimer
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 484
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

        // line 485
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
\$(document).ready(function() {
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    // Impression du reçu
    \$('#printReceiptBtn').click(function() {
        loadReceipt();
    });
    
    function loadReceipt() {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch('";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_receipt_content", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 500, $this->source); })()), "id", [], "any", false, false, false, 500)]), "html", null, true);
        yield "')
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement du reçu</div>';
            });
    }
    
    \$('#printReceiptModalBtn').click(function() {
        const printContent = receiptContent.innerHTML;
        const printWindow = window.open('', '_blank', 'width=450,height=650');
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Reçu de vente - ";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 517, $this->source); })()), "orderNumber", [], "any", false, false, false, 517), "html", null, true);
        yield "</title>
                <meta charset=\"UTF-8\">
                <style>
                    body { font-family: monospace; margin: 0; padding: 20px; width: 400px; margin: 0 auto; }
                    .receipt { text-align: center; }
                    .receipt-header { margin-bottom: 15px; }
                    .receipt-header h2 { margin: 0; font-size: 18px; }
                    .receipt-header p { margin: 5px 0; font-size: 12px; }
                    .receipt-line { border-top: 1px dashed #000; margin: 10px 0; }
                    .receipt-items { width: 100%; margin: 10px 0; font-size: 12px; }
                    .receipt-items th, .receipt-items td { text-align: left; padding: 3px 0; }
                    .receipt-items td:last-child { text-align: right; }
                    .receipt-total { font-weight: bold; margin-top: 10px; }
                    .receipt-footer { margin-top: 15px; font-size: 10px; text-align: center; }
                    @media print {
                        body { margin: 0; padding: 10px; }
                        .no-print { display: none; }
                    }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>
                    window.print();
                <\\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    });
});
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
        return "sale/orders/show.html.twig";
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
        return array (  973 => 517,  953 => 500,  935 => 485,  922 => 484,  881 => 452,  873 => 447,  870 => 446,  867 => 445,  864 => 443,  858 => 442,  855 => 441,  852 => 440,  849 => 439,  846 => 438,  843 => 437,  838 => 436,  835 => 434,  832 => 433,  829 => 431,  827 => 430,  823 => 428,  818 => 425,  805 => 418,  800 => 415,  796 => 413,  794 => 412,  791 => 411,  789 => 410,  786 => 409,  784 => 408,  781 => 407,  779 => 406,  776 => 405,  774 => 404,  767 => 400,  761 => 397,  749 => 388,  742 => 383,  732 => 379,  726 => 376,  722 => 374,  718 => 372,  712 => 370,  710 => 369,  704 => 366,  699 => 363,  693 => 362,  685 => 361,  682 => 360,  676 => 358,  674 => 357,  670 => 356,  666 => 354,  663 => 353,  660 => 352,  657 => 351,  653 => 350,  636 => 335,  632 => 333,  630 => 332,  627 => 331,  625 => 330,  622 => 329,  620 => 328,  617 => 327,  615 => 326,  608 => 322,  601 => 318,  597 => 317,  590 => 312,  586 => 311,  579 => 307,  572 => 302,  570 => 301,  558 => 292,  551 => 287,  541 => 283,  537 => 281,  531 => 279,  526 => 277,  521 => 276,  519 => 275,  513 => 272,  507 => 268,  499 => 266,  497 => 265,  493 => 264,  490 => 263,  486 => 261,  482 => 259,  480 => 258,  475 => 255,  471 => 254,  462 => 247,  458 => 245,  454 => 243,  452 => 242,  441 => 234,  428 => 223,  422 => 220,  418 => 218,  416 => 217,  412 => 215,  406 => 212,  402 => 210,  400 => 209,  395 => 207,  388 => 203,  379 => 196,  375 => 194,  373 => 193,  370 => 192,  368 => 191,  365 => 190,  363 => 189,  352 => 181,  348 => 180,  345 => 179,  339 => 175,  333 => 173,  331 => 172,  324 => 167,  318 => 164,  315 => 163,  313 => 162,  309 => 161,  303 => 157,  299 => 155,  295 => 153,  293 => 152,  290 => 151,  288 => 150,  285 => 149,  283 => 148,  264 => 132,  254 => 125,  247 => 121,  238 => 115,  230 => 110,  221 => 103,  208 => 102,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails de la commande #{{ order.orderNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    .order-card {
        background: white;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    .order-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    .info-item {
        padding: 0.75rem 1.25rem;
        border-bottom: 1px solid #f1f5f9;
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    .info-value {
        font-weight: 600;
    }
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-cancelled { background: #fee2e2; color: #dc2626; }
    .status-refunded { background: #fef3c7; color: #d97706; }
    
    .return-card {
        background: #fffbeb;
        border-left: 4px solid #f59e0b;
        transition: transform 0.2s;
    }
    .return-card:hover {
        transform: translateX(5px);
    }
    
    .action-buttons {
        margin-top: 1rem;
        text-align: right;
    }
    .items-table th, .items-table td {
        vertical-align: middle;
    }
    
    .quantity-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        padding: 0.25rem 0.5rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    .quantity-returned {
        background-color: #fee2e2;
        color: #dc2626;
    }
    .quantity-remaining {
        background-color: #dcfce7;
        color: #16a34a;
    }
    .quantity-total {
        background-color: #e5e7eb;
        color: #374151;
    }
    .return-items-list {
        margin-top: 0.5rem;
        padding-top: 0.5rem;
        border-top: 1px dashed #e5e7eb;
    }
    .return-item-badge {
        display: inline-block;
        background: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 12px;
        font-size: 0.7rem;
        margin: 0.2rem 0.2rem;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_orders_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        {{ order.orderNumber }}
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-receipt me-2 text-primary\"></i>
                Commande #{{ order.orderNumber }}
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-calendar me-1\"></i>
                Créée le {{ order.createdAt|date('d/m/Y H:i') }}
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"printReceiptBtn\">
                <i class=\"fas fa-print me-1\"></i> Imprimer le reçu
            </button>
            <a href=\"{{ path('app_orders_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations commande -->
        <div class=\"col-lg-4\">
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations commande</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        {% if order.status == 'completed' %}
                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        {% elseif order.status == 'cancelled' %}
                            <span class=\"status-badge status-cancelled\">❌ Annulée</span>
                        {% elseif order.status == 'refunded' %}
                            <span class=\"status-badge status-refunded\">🔄 Remboursée</span>
                        {% else %}
                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        {% endif %}
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">{{ order.customerName ?: 'Non renseigné' }}</div>
                    {% if order.customerPhone %}
                        <div class=\"small text-muted mt-1\">
                            <i class=\"fas fa-phone me-1\"></i> {{ order.customerPhone }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Caissier</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            {% if order.user.photo %}
                                <img src=\"{{ asset('uploads/users/' ~ order.user.photo) }}\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                            {% else %}
                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-user text-secondary\"></i>
                                </div>
                            {% endif %}
                            <div>
                                <strong>{{ order.user.fullName|default(order.user.email) }}</strong>
                                <br><small class=\"text-muted\">{{ order.user.roles|first|replace({'ROLE_': ''}) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Mode de paiement</div>
                    <div class=\"info-value\">
                        {% if order.paymentMethod == 'cash' %}
                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        {% elseif order.paymentMethod == 'card' %}
                            <i class=\"fas fa-credit-card text-primary me-1\"></i> Carte bancaire
                        {% elseif order.paymentMethod == 'mobile_money' %}
                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        {% endif %}
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Montants</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Total :</span>
                            <strong class=\"text-primary\">{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</strong>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <span>Payé :</span>
                            <span>{{ order.amountPaid|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                        {% if order.changeAmount > 0 %}
                            <div class=\"d-flex justify-content-between mt-1\">
                                <span>Monnaie :</span>
                                <span class=\"text-success\">{{ order.changeAmount|number_format(0, ',', ' ') }} FCFA</span>
                            </div>
                        {% endif %}
                    </div>
                </div>
                {% if order.notes %}
                <div class=\"info-item\">
                    <div class=\"info-label\">Notes</div>
                    <div class=\"info-value text-muted\">{{ order.notes|nl2br }}</div>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- Colonne droite - Articles et retours -->
        <div class=\"col-lg-8\">
            <!-- Articles commandés -->
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Articles commandés
                        <span class=\"badge bg-secondary ms-2\">{{ order.orderItems|length }} article(s)</span>
                    </h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 items-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>
                                    {% if companyType == 'restaurant' %}
                                        Article
                                    {% else %}
                                        Produit
                                    {% endif %}
                                </th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-center\">Prix unitaire</th>
                                <th class=\"text-center\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in order.orderItems %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            {% if isRestaurant and item.recipe %}
                                                <i class=\"fas fa-utensils text-primary me-2 fa-fw\"></i>
                                            {% else %}
                                                <i class=\"fas fa-box text-success me-2 fa-fw\"></i>
                                            {% endif %}
                                            <div>
                                                <strong>{{ item.productName }}</strong>
                                                {% if item.promotionName %}
                                                    <br><small class=\"text-primary\"><i class=\"fas fa-tag me-1\"></i>{{ item.promotionName }} (-{{ item.promotionDiscountPercentage }}%)</small>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-secondary\">{{ item.quantity }}</span>
                                    </td>
                                    <td class=\"text-center\">
                                        {% if item.originalUnitPrice %}
                                            <span class=\"text-muted text-decoration-line-through\">{{ item.originalUnitPrice|number_format(0, ',', ' ') }} FCFA</span><br>
                                            <span class=\"text-primary\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</span>
                                        {% else %}
                                            {{ item.unitPrice|number_format(0, ',', ' ') }} FCFA
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <strong>{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</strong>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end fw-bold\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5\">
                                    {{ order.totalAmount|number_format(0, ',', ' ') }} FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Retours effectués -->
            {% if returns is defined and returns|length > 0 %}
            <div class=\"order-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                        Retours effectués
                        <span class=\"badge bg-warning ms-2\">{{ returns|length }} retour(s)</span>
                    </h5>
                </div>
                <div class=\"p-3\">
                    {% for return in returns %}
                        <div class=\"return-card card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-2\">
                                    <div>
                                        <h6 class=\"mb-1\">
                                            <a href=\"{{ path('returns_show', {'id': return.id}) }}\" class=\"text-decoration-none\">
                                                <i class=\"fas fa-receipt me-1\"></i> {{ return.returnNumber }}
                                            </a>
                                        </h6>
                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i> {{ return.createdAt|date('d/m/Y H:i') }}
                                        </div>
                                    </div>
                                    <div>
                                        {% if return.status == 'pending' %}
                                            <span class=\"badge bg-warning\">⏳ En attente</span>
                                        {% elseif return.status == 'approved' %}
                                            <span class=\"badge bg-primary\">✓ Approuvé</span>
                                        {% elseif return.status == 'completed' %}
                                            <span class=\"badge bg-success\">✅ Remboursé</span>
                                        {% elseif return.status == 'rejected' %}
                                            <span class=\"badge bg-danger\">❌ Rejeté</span>
                                        {% endif %}
                                    </div>
                                </div>
                                
                                <div class=\"mt-3\">
                                    <table class=\"table table-sm table-bordered mb-0\">
                                        <thead class=\"table-light\">
                                            <tr>
                                                <th>Produit</th>
                                                <th class=\"text-center\">Quantité retournée</th>
                                                <th class=\"text-center\">Quantité restante</th>
                                                <th class=\"text-center\">Prix unitaire</th>
                                                <th class=\"text-center\">Total remboursé</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for returnItem in return.returnItems %}
                                                {% set originalQty = returnItem.originalOrderItem.quantity %}
                                                {% set returnedQty = returnItem.quantityReturned %}
                                                {% set remainingQty = originalQty - returnedQty %}
                                                <tr>
                                                    <td>
                                                        <strong>{{ returnItem.productName }}</strong>
                                                        {% if returnItem.promotionName %}
                                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> {{ returnItem.promotionName }}</small>
                                                        {% endif %}
                                                        <br><small class=\"text-muted\">
                                                            <i class=\"fas {% if returnItem.itemType == 'recipe' %}fa-utensils{% else %}fa-box{% endif %} me-1\"></i>
                                                            {% if returnItem.itemType == 'recipe' %}Menu{% else %}Produit{% endif %}
                                                        </small>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge bg-danger\">{{ returnedQty }}</span>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        {% if remainingQty > 0 %}
                                                            <span class=\"badge bg-success\">{{ remainingQty }}</span>
                                                        {% else %}
                                                            <span class=\"badge bg-secondary\">0</span>
                                                        {% endif %}
                                                    </td>
                                                    <td class=\"text-center\">
                                                        {{ returnItem.unitPriceAtSale|number_format(0, ',', ' ') }} FCFA
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <strong class=\"text-primary\">{{ returnItem.totalRefund|number_format(0, ',', ' ') }} FCFA</strong>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                        <tfoot class=\"table-light\">
                                            <tr>
                                                <td colspan=\"4\" class=\"text-end fw-bold\">Total remboursé :</td>
                                                <td class=\"text-center fw-bold text-primary h5\">
                                                    {{ return.totalRefundAmount|number_format(0, ',', ' ') }} FCFA
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                                <div class=\"row mt-2 small\">
                                    <div class=\"col-md-4\">
                                        <strong>Motif :</strong> {{ reasons[return.reason]|default(return.reason) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Enregistré par :</strong> {{ return.returnedBy.fullName }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Méthode :</strong>
                                        {% if return.refundMethod == 'cash' %}
                                            💰 Espèces
                                        {% elseif return.refundMethod == 'mobile_money' %}
                                            📱 Mobile Money
                                        {% elseif return.refundMethod == 'bank_transfer' %}
                                            🏦 Virement bancaire
                                        {% elseif return.refundMethod == 'wallet' %}
                                            📱 Porte-monnaie électronique
                                        {% elseif return.refundMethod == 'credit_note' %}
                                            📝 Avoir / Note de crédit
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"mt-2\">
                                    <a href=\"{{ path('returns_show', {'id': return.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
            {% endif %}

            <!-- Bouton Nouveau retour - Condition simple -->
            {% set hasRemainingItems = false %}

            {# Récupérer les quantités déjà retournées #}
            {% set returnedQuantities = totalReturnedQuantities|default([]) %}

            {# Parcourir les articles de la commande #}
            {% for item in order.orderItems %}
                {% set alreadyReturned = returnedQuantities[item.id]|default(0) %}
                {% set remaining = item.quantity - alreadyReturned %}
                {% if remaining > 0 %}
                    {% set hasRemainingItems = true %}
                {% endif %}
            {% endfor %}

            {# Afficher le bouton seulement s'il reste des articles à retourner #}
            {% if hasRemainingItems %}
                <div class=\"action-buttons\">
                    <a href=\"{{ path('returns_new', {'orderId': order.id}) }}\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-undo-alt me-2\"></i> Demander un retour
                    </a>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Modal d'impression -->
<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Aperçu du reçu
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptModalBtn\">
                    <i class=\"fas fa-print me-2\"></i> Imprimer
                </button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
\$(document).ready(function() {
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    // Impression du reçu
    \$('#printReceiptBtn').click(function() {
        loadReceipt();
    });
    
    function loadReceipt() {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch('{{ path(\"app_orders_receipt_content\", {\"id\": order.id}) }}')
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement du reçu</div>';
            });
    }
    
    \$('#printReceiptModalBtn').click(function() {
        const printContent = receiptContent.innerHTML;
        const printWindow = window.open('', '_blank', 'width=450,height=650');
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Reçu de vente - {{ order.orderNumber }}</title>
                <meta charset=\"UTF-8\">
                <style>
                    body { font-family: monospace; margin: 0; padding: 20px; width: 400px; margin: 0 auto; }
                    .receipt { text-align: center; }
                    .receipt-header { margin-bottom: 15px; }
                    .receipt-header h2 { margin: 0; font-size: 18px; }
                    .receipt-header p { margin: 5px 0; font-size: 12px; }
                    .receipt-line { border-top: 1px dashed #000; margin: 10px 0; }
                    .receipt-items { width: 100%; margin: 10px 0; font-size: 12px; }
                    .receipt-items th, .receipt-items td { text-align: left; padding: 3px 0; }
                    .receipt-items td:last-child { text-align: right; }
                    .receipt-total { font-weight: bold; margin-top: 10px; }
                    .receipt-footer { margin-top: 15px; font-size: 10px; text-align: center; }
                    @media print {
                        body { margin: 0; padding: 10px; }
                        .no-print { display: none; }
                    }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>
                    window.print();
                <\\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    });
});
</script>
{% endblock %}", "sale/orders/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\show.html.twig");
    }
}
