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

/* marketplace/profile/order_detail.html.twig */
class __TwigTemplate_d1482c300ce0be548622f40c1066a937 extends Template
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
        // line 3
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/order_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/order_detail.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Détail de la commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "orderNumber", [], "any", false, false, false, 5), "html", null, true);
        yield " - HMA Marketplace";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
        --card-shadow: 0 2px 16px rgba(0,0,0,0.08);
    }

    .order-detail-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .order-detail-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .order-detail-header h1 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #0f172a;
    }

    .order-detail-header h1 .order-number {
        color: var(--primary-color);
    }

    .order-detail-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        border: 1px solid #f1f5f9;
    }

    .order-detail-card .card-title {
        font-weight: 700;
        color: #0f172a;
        font-size: 1rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .order-detail-card .card-title i {
        color: var(--primary-color);
    }

    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.75rem;
    }

    .info-grid .info-item {
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .info-grid .info-item .label {
        font-size: 0.75rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-grid .info-item .value {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.95rem;
    }

    .order-status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.35rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .order-status-badge.paid {
        background: #dcfce7;
        color: #16a34a;
    }

    .order-status-badge.pending {
        background: #fef3c7;
        color: #92400e;
    }

    .order-status-badge.completed {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .order-status-badge.cancelled {
        background: #fee2e2;
        color: #dc2626;
    }

    .order-items-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .order-item-detail {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem;
        background: #f8fafc;
        border-radius: 12px;
        transition: background 0.2s ease;
    }

    .order-item-detail:hover {
        background: #f1f5f9;
    }

    .order-item-detail .item-image {
        width: 70px;
        height: 70px;
        border-radius: 10px;
        overflow: hidden;
        background: #f1f5f9;
        flex-shrink: 0;
    }

    .order-item-detail .item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .order-item-detail .item-image .placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 1.5rem;
        background: #f1f5f9;
    }

    .order-item-detail .item-info {
        flex: 1;
    }

    .order-item-detail .item-info .item-name {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.95rem;
    }

    .order-item-detail .item-info .item-meta {
        font-size: 0.8rem;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .order-item-detail .item-info .item-meta .badge-promo {
        background: #dcfce7;
        color: #16a34a;
        padding: 0.05rem 0.4rem;
        border-radius: 4px;
        font-size: 0.65rem;
        font-weight: 600;
    }

    .order-item-detail .item-info .item-notes {
        font-size: 0.75rem;
        color: #94a3b8;
        font-style: italic;
        margin-top: 0.2rem;
    }

    .order-item-detail .item-price {
        text-align: right;
        flex-shrink: 0;
    }

    .order-item-detail .item-price .unit-price {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .order-item-detail .item-price .total-price {
        font-weight: 700;
        color: #0f172a;
        font-size: 1.05rem;
    }

    .order-totals {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
    }

    .order-totals .total-row {
        display: flex;
        justify-content: space-between;
        padding: 0.4rem 0;
        font-size: 0.9rem;
        color: #475569;
    }

    .order-totals .total-row.grand-total {
        font-weight: 700;
        color: #0f172a;
        font-size: 1.1rem;
        border-top: 2px solid #e5e7eb;
        padding-top: 0.75rem;
        margin-top: 0.5rem;
    }

    .order-totals .total-row.discount-row {
        color: #16a34a;
    }

    .delivery-address {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
        line-height: 1.6;
    }

    .delivery-address .address-line {
        color: #475569;
        font-size: 0.9rem;
    }

    .delivery-address .address-label {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-back-orders {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.5rem;
        border: 2px solid #e5e7eb;
        border-radius: 50px;
        color: #64748b;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .btn-back-orders:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 768px) {
        .info-grid {
            grid-template-columns: 1fr;
        }

        .order-item-detail {
            flex-wrap: wrap;
            padding: 0.5rem;
        }

        .order-item-detail .item-image {
            width: 60px;
            height: 60px;
        }

        .order-item-detail .item-price {
            text-align: left;
            width: 100%;
            padding-left: 0;
            margin-left: 0;
        }

        .order-detail-header h1 {
            font-size: 1.2rem;
        }

        .order-detail-card {
            padding: 1rem;
        }
    }

    @media (max-width: 480px) {
        .order-item-detail .item-image {
            width: 50px;
            height: 50px;
        }

        .order-item-detail .item-info .item-name {
            font-size: 0.85rem;
        }

        .order-item-detail .item-price .total-price {
            font-size: 0.95rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 332
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

        // line 333
        yield "<div class=\"order-detail-container\">
    <div class=\"order-detail-header\">
        <h1>
            Commande #<span class=\"order-number\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 336, $this->source); })()), "orderNumber", [], "any", false, false, false, 336), "html", null, true);
        yield "</span>
        </h1>
        <a href=\"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
        yield "\" class=\"btn-back-orders\">
            <i class=\"fas fa-arrow-left\"></i>
            Mes commandes
        </a>
    </div>

    <!-- ==================== STATUT ET INFOS GÉNÉRALES ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-info-circle\"></i>
            Informations générales
        </div>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"label\">Statut du paiement</div>
                <div class=\"value\">
                    <span class=\"order-status-badge ";
        // line 354
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 354, $this->source); })()), "paymentStatus", [], "any", false, false, false, 354) == "paid")) ? ("paid") : ("pending"));
        yield "\">
                        <i class=\"fas ";
        // line 355
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 355, $this->source); })()), "paymentStatus", [], "any", false, false, false, 355) == "paid")) ? ("fa-check-circle") : ("fa-clock"));
        yield "\"></i>
                        ";
        // line 356
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 356, $this->source); })()), "paymentStatus", [], "any", false, false, false, 356) == "paid")) ? ("Payée") : ("En attente"));
        yield "
                    </span>
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"label\">Statut de la commande</div>
                <div class=\"value\">
                    <span class=\"order-status-badge ";
        // line 363
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 363, $this->source); })()), "status", [], "any", false, false, false, 363) == "completed")) ? ("completed") : ("pending"));
        yield "\">
                        <i class=\"fas ";
        // line 364
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 364, $this->source); })()), "status", [], "any", false, false, false, 364) == "completed")) ? ("fa-check") : ("fa-hourglass-half"));
        yield "\"></i>
                        ";
        // line 365
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 365, $this->source); })()), "status", [], "any", false, false, false, 365) == "completed")) ? ("Livrée") : ("En cours"));
        yield "
                    </span>
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"label\">Date de la commande</div>
                <div class=\"value\">";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 371, $this->source); })()), "createdAt", [], "any", false, false, false, 371), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"info-item\">
                <div class=\"label\">Méthode de paiement</div>
                <div class=\"value\">
                    <i class=\"fas fa-credit-card me-1\"></i>
                    ";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 377, $this->source); })()), "paymentMethod", [], "any", false, false, false, 377)), "html", null, true);
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== ADRESSE DE LIVRAISON ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-map-marker-alt\"></i>
            Adresse de livraison
        </div>
        <div class=\"delivery-address\">
            <div class=\"address-label\">Destinataire</div>
            <div class=\"address-line\"><strong>";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 391, $this->source); })()), "customerName", [], "any", false, false, false, 391), "html", null, true);
        yield "</strong></div>
            <div class=\"address-line\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 392, $this->source); })()), "customerPhone", [], "any", false, false, false, 392), "html", null, true);
        yield "</div>
            <div class=\"address-line\">";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 393, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 393), "html", null, true);
        yield "</div>
            ";
        // line 394
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 394, $this->source); })()), "deliveryCity", [], "any", false, false, false, 394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 395
            yield "                <div class=\"address-line\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 395, $this->source); })()), "deliveryCity", [], "any", false, false, false, 395), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 395, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 395, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 395), "html", null, true);
            }
            yield "</div>
            ";
        }
        // line 397
        yield "            <div class=\"address-line\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", true, true, false, 397)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 397, $this->source); })()), "deliveryCountry", [], "any", false, false, false, 397), "Bénin")) : ("Bénin")), "html", null, true);
        yield "</div>
        </div>
    </div>

    <!-- ==================== ARTICLES ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-box\"></i>
            Articles (";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 405, $this->source); })()), "orderItems", [], "any", false, false, false, 405)), "html", null, true);
        yield ")
        </div>
        <div class=\"order-items-list\">
            ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 408, $this->source); })()), "orderItems", [], "any", false, false, false, 408));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 409
            yield "                <div class=\"order-item-detail\">
                    <div class=\"item-image\">
                        ";
            // line 411
            $context["productImage"] = null;
            // line 412
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 412)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 413
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 413, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 414
                    yield "                                ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 414) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 414)) && CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 414))) {
                        // line 415
                        yield "                                    ";
                        $context["productImage"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 415);
                        // line 416
                        yield "                                ";
                    }
                    // line 417
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 418
                yield "                        ";
            }
            // line 419
            yield "                        ";
            if ((($tmp = (isset($context["productImage"]) || array_key_exists("productImage", $context) ? $context["productImage"] : (function () { throw new RuntimeError('Variable "productImage" does not exist.', 419, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 420
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . (isset($context["productImage"]) || array_key_exists("productImage", $context) ? $context["productImage"] : (function () { throw new RuntimeError('Variable "productImage" does not exist.', 420, $this->source); })()))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 420), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 422
                yield "                            <div class=\"placeholder\">
                                <i class=\"fas fa-box\"></i>
                            </div>
                        ";
            }
            // line 426
            yield "                    </div>
                    <div class=\"item-info\">
                        <div class=\"item-name\">";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 428), "html", null, true);
            yield "</div>
                        <div class=\"item-meta\">
                            <span>Quantité: ";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 430), "html", null, true);
            yield "</span>
                            ";
            // line 431
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 431)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 432
                yield "                                <span class=\"badge-promo\">
                                    <i class=\"fas fa-tag me-1\"></i>";
                // line 433
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 433), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 436
            yield "                        </div>
                        ";
            // line 437
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 437)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 438
                yield "                            <div class=\"item-notes\">
                                <i class=\"fas fa-pencil-alt me-1\"></i>";
                // line 439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 439), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 442
            yield "                    </div>
                    <div class=\"item-price\">
                        <div class=\"unit-price\">";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 444), 0, ",", " "), "html", null, true);
            yield " FCFA / unité</div>
                        <div class=\"total-price\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 445), 0, ",", " "), "html", null, true);
            yield " FCFA</div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        yield "        </div>
    </div>

    <!-- ==================== TOTAUX ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-calculator\"></i>
            Récapitulatif
        </div>
        <div class=\"order-totals\">
            <div class=\"total-row\">
                <span>Sous-total</span>
                <span>";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "subtotal", [], "any", true, true, false, 461)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 461, $this->source); })()), "subtotal", [], "any", false, false, false, 461), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 461, $this->source); })()), "totalAmount", [], "any", false, false, false, 461))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 461, $this->source); })()), "totalAmount", [], "any", false, false, false, 461))), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 463
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 463, $this->source); })()), "discountTotal", [], "any", false, false, false, 463) > 0)) {
            // line 464
            yield "                <div class=\"total-row discount-row\">
                    <span>Remise</span>
                    <span>- ";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 466, $this->source); })()), "discountTotal", [], "any", false, false, false, 466), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
            ";
        }
        // line 469
        yield "            <div class=\"total-row grand-total\">
                <span>Total</span>
                <span>";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 471, $this->source); })()), "totalAmount", [], "any", false, false, false, 471), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 478
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

        // line 479
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ Order detail page loaded');
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
        return "marketplace/profile/order_detail.html.twig";
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
        return array (  757 => 479,  744 => 478,  727 => 471,  723 => 469,  717 => 466,  713 => 464,  711 => 463,  706 => 461,  692 => 449,  682 => 445,  678 => 444,  674 => 442,  668 => 439,  665 => 438,  663 => 437,  660 => 436,  654 => 433,  651 => 432,  649 => 431,  645 => 430,  640 => 428,  636 => 426,  630 => 422,  622 => 420,  619 => 419,  616 => 418,  610 => 417,  607 => 416,  604 => 415,  601 => 414,  596 => 413,  593 => 412,  591 => 411,  587 => 409,  583 => 408,  577 => 405,  565 => 397,  555 => 395,  553 => 394,  549 => 393,  545 => 392,  541 => 391,  524 => 377,  515 => 371,  506 => 365,  502 => 364,  498 => 363,  488 => 356,  484 => 355,  480 => 354,  461 => 338,  456 => 336,  451 => 333,  438 => 332,  104 => 8,  91 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/profile/order_detail.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Détail de la commande #{{ order.orderNumber }} - HMA Marketplace{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        --card-radius: 16px;
        --card-shadow: 0 2px 16px rgba(0,0,0,0.08);
    }

    .order-detail-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .order-detail-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .order-detail-header h1 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #0f172a;
    }

    .order-detail-header h1 .order-number {
        color: var(--primary-color);
    }

    .order-detail-card {
        background: white;
        border-radius: var(--card-radius);
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        border: 1px solid #f1f5f9;
    }

    .order-detail-card .card-title {
        font-weight: 700;
        color: #0f172a;
        font-size: 1rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .order-detail-card .card-title i {
        color: var(--primary-color);
    }

    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.75rem;
    }

    .info-grid .info-item {
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .info-grid .info-item .label {
        font-size: 0.75rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-grid .info-item .value {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.95rem;
    }

    .order-status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.35rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .order-status-badge.paid {
        background: #dcfce7;
        color: #16a34a;
    }

    .order-status-badge.pending {
        background: #fef3c7;
        color: #92400e;
    }

    .order-status-badge.completed {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .order-status-badge.cancelled {
        background: #fee2e2;
        color: #dc2626;
    }

    .order-items-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .order-item-detail {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem;
        background: #f8fafc;
        border-radius: 12px;
        transition: background 0.2s ease;
    }

    .order-item-detail:hover {
        background: #f1f5f9;
    }

    .order-item-detail .item-image {
        width: 70px;
        height: 70px;
        border-radius: 10px;
        overflow: hidden;
        background: #f1f5f9;
        flex-shrink: 0;
    }

    .order-item-detail .item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .order-item-detail .item-image .placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 1.5rem;
        background: #f1f5f9;
    }

    .order-item-detail .item-info {
        flex: 1;
    }

    .order-item-detail .item-info .item-name {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.95rem;
    }

    .order-item-detail .item-info .item-meta {
        font-size: 0.8rem;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .order-item-detail .item-info .item-meta .badge-promo {
        background: #dcfce7;
        color: #16a34a;
        padding: 0.05rem 0.4rem;
        border-radius: 4px;
        font-size: 0.65rem;
        font-weight: 600;
    }

    .order-item-detail .item-info .item-notes {
        font-size: 0.75rem;
        color: #94a3b8;
        font-style: italic;
        margin-top: 0.2rem;
    }

    .order-item-detail .item-price {
        text-align: right;
        flex-shrink: 0;
    }

    .order-item-detail .item-price .unit-price {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .order-item-detail .item-price .total-price {
        font-weight: 700;
        color: #0f172a;
        font-size: 1.05rem;
    }

    .order-totals {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
    }

    .order-totals .total-row {
        display: flex;
        justify-content: space-between;
        padding: 0.4rem 0;
        font-size: 0.9rem;
        color: #475569;
    }

    .order-totals .total-row.grand-total {
        font-weight: 700;
        color: #0f172a;
        font-size: 1.1rem;
        border-top: 2px solid #e5e7eb;
        padding-top: 0.75rem;
        margin-top: 0.5rem;
    }

    .order-totals .total-row.discount-row {
        color: #16a34a;
    }

    .delivery-address {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
        line-height: 1.6;
    }

    .delivery-address .address-line {
        color: #475569;
        font-size: 0.9rem;
    }

    .delivery-address .address-label {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-back-orders {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.5rem;
        border: 2px solid #e5e7eb;
        border-radius: 50px;
        color: #64748b;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .btn-back-orders:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 768px) {
        .info-grid {
            grid-template-columns: 1fr;
        }

        .order-item-detail {
            flex-wrap: wrap;
            padding: 0.5rem;
        }

        .order-item-detail .item-image {
            width: 60px;
            height: 60px;
        }

        .order-item-detail .item-price {
            text-align: left;
            width: 100%;
            padding-left: 0;
            margin-left: 0;
        }

        .order-detail-header h1 {
            font-size: 1.2rem;
        }

        .order-detail-card {
            padding: 1rem;
        }
    }

    @media (max-width: 480px) {
        .order-item-detail .item-image {
            width: 50px;
            height: 50px;
        }

        .order-item-detail .item-info .item-name {
            font-size: 0.85rem;
        }

        .order-item-detail .item-price .total-price {
            font-size: 0.95rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"order-detail-container\">
    <div class=\"order-detail-header\">
        <h1>
            Commande #<span class=\"order-number\">{{ order.orderNumber }}</span>
        </h1>
        <a href=\"{{ path('marketplace_orders') }}\" class=\"btn-back-orders\">
            <i class=\"fas fa-arrow-left\"></i>
            Mes commandes
        </a>
    </div>

    <!-- ==================== STATUT ET INFOS GÉNÉRALES ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-info-circle\"></i>
            Informations générales
        </div>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"label\">Statut du paiement</div>
                <div class=\"value\">
                    <span class=\"order-status-badge {{ order.paymentStatus == 'paid' ? 'paid' : 'pending' }}\">
                        <i class=\"fas {{ order.paymentStatus == 'paid' ? 'fa-check-circle' : 'fa-clock' }}\"></i>
                        {{ order.paymentStatus == 'paid' ? 'Payée' : 'En attente' }}
                    </span>
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"label\">Statut de la commande</div>
                <div class=\"value\">
                    <span class=\"order-status-badge {{ order.status == 'completed' ? 'completed' : 'pending' }}\">
                        <i class=\"fas {{ order.status == 'completed' ? 'fa-check' : 'fa-hourglass-half' }}\"></i>
                        {{ order.status == 'completed' ? 'Livrée' : 'En cours' }}
                    </span>
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"label\">Date de la commande</div>
                <div class=\"value\">{{ order.createdAt|date('d/m/Y à H:i') }}</div>
            </div>
            <div class=\"info-item\">
                <div class=\"label\">Méthode de paiement</div>
                <div class=\"value\">
                    <i class=\"fas fa-credit-card me-1\"></i>
                    {{ order.paymentMethod|capitalize }}
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== ADRESSE DE LIVRAISON ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-map-marker-alt\"></i>
            Adresse de livraison
        </div>
        <div class=\"delivery-address\">
            <div class=\"address-label\">Destinataire</div>
            <div class=\"address-line\"><strong>{{ order.customerName }}</strong></div>
            <div class=\"address-line\">{{ order.customerPhone }}</div>
            <div class=\"address-line\">{{ order.deliveryAddress }}</div>
            {% if order.deliveryCity %}
                <div class=\"address-line\">{{ order.deliveryCity }}{% if order.deliveryZipcode %} - {{ order.deliveryZipcode }}{% endif %}</div>
            {% endif %}
            <div class=\"address-line\">{{ order.deliveryCountry|default('Bénin') }}</div>
        </div>
    </div>

    <!-- ==================== ARTICLES ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-box\"></i>
            Articles ({{ order.orderItems|length }})
        </div>
        <div class=\"order-items-list\">
            {% for item in order.orderItems %}
                <div class=\"order-item-detail\">
                    <div class=\"item-image\">
                        {% set productImage = null %}
                        {% if item.productId %}
                            {% for product in products %}
                                {% if product.id == item.productId and product.image %}
                                    {% set productImage = product.image %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                        {% if productImage %}
                            <img src=\"{{ asset('uploads/products/' ~ productImage) }}\" alt=\"{{ item.productName }}\">
                        {% else %}
                            <div class=\"placeholder\">
                                <i class=\"fas fa-box\"></i>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"item-info\">
                        <div class=\"item-name\">{{ item.productName }}</div>
                        <div class=\"item-meta\">
                            <span>Quantité: {{ item.quantity }}</span>
                            {% if item.promotionName %}
                                <span class=\"badge-promo\">
                                    <i class=\"fas fa-tag me-1\"></i>{{ item.promotionName }}
                                </span>
                            {% endif %}
                        </div>
                        {% if item.notes %}
                            <div class=\"item-notes\">
                                <i class=\"fas fa-pencil-alt me-1\"></i>{{ item.notes }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"item-price\">
                        <div class=\"unit-price\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA / unité</div>
                        <div class=\"total-price\">{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <!-- ==================== TOTAUX ==================== -->
    <div class=\"order-detail-card\">
        <div class=\"card-title\">
            <i class=\"fas fa-calculator\"></i>
            Récapitulatif
        </div>
        <div class=\"order-totals\">
            <div class=\"total-row\">
                <span>Sous-total</span>
                <span>{{ order.subtotal|default(order.totalAmount)|number_format(0, ',', ' ') }} FCFA</span>
            </div>
            {% if order.discountTotal > 0 %}
                <div class=\"total-row discount-row\">
                    <span>Remise</span>
                    <span>- {{ order.discountTotal|number_format(0, ',', ' ') }} FCFA</span>
                </div>
            {% endif %}
            <div class=\"total-row grand-total\">
                <span>Total</span>
                <span>{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ Order detail page loaded');
});
</script>
{% endblock %}", "marketplace/profile/order_detail.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\profile\\order_detail.html.twig");
    }
}
