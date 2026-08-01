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

/* marketplace/cart/payment_status.html.twig */
class __TwigTemplate_e89f92274a301c998db93c3263e568ad extends Template
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
        // line 3
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/cart/payment_status.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/cart/payment_status.html.twig"));

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

        yield "Statut du paiement - HMA Marketplace";
        
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
    .payment-status-container {
        max-width: 600px;
        margin: 4rem auto;
        padding: 2rem;
        text-align: center;
    }

    .status-icon {
        font-size: 4rem;
        margin-bottom: 1.5rem;
    }

    .status-icon.success {
        color: #16a34a;
    }

    .status-icon.pending {
        color: #f59e0b;
    }

    .status-icon.error {
        color: #ef4444;
    }

    .status-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    }

    .status-card .status-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .status-card .status-message {
        color: #64748b;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .status-card .order-info {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
        margin: 1.5rem 0;
        text-align: left;
    }

    .status-card .order-info .row {
        display: flex;
        justify-content: space-between;
        padding: 0.4rem 0;
        border-bottom: 1px solid #e5e7eb;
    }

    .status-card .order-info .row:last-child {
        border-bottom: none;
    }

    .status-card .order-info .label {
        color: #64748b;
        font-size: 0.9rem;
    }

    .status-card .order-info .value {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.9rem;
    }

    .btn-return {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.7rem 2rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }

    .btn-return:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(4, 99, 241, 0.3);
        color: white;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
        yield "<div class=\"payment-status-container\">
    <div class=\"status-card\">
        ";
        // line 109
        if ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 109, $this->source); })()) == "approved") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 109, $this->source); })()) == "success"))) {
            // line 110
            yield "            <div class=\"status-icon success\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #16a34a;\">Paiement confirmé !</h2>
            <p class=\"status-message\">
                Votre paiement a été effectué avec succès. Votre commande est maintenant en cours de traitement.
            </p>
        ";
        } elseif ((        // line 117
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 117, $this->source); })()) == "pending")) {
            // line 118
            yield "            <div class=\"status-icon pending\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #f59e0b;\">Paiement en attente</h2>
            <p class=\"status-message\">
                Votre paiement est en cours de validation. Vous recevrez une confirmation par email dès qu'il sera approuvé.
            </p>
        ";
        } elseif ((        // line 125
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 125, $this->source); })()) == "error")) {
            // line 126
            yield "            <div class=\"status-icon error\">
                <i class=\"fas fa-exclamation-circle\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #ef4444;\">Erreur de paiement</h2>
            <p class=\"status-message\">
                ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("message", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 131, $this->source); })()), "Une erreur est survenue lors du traitement de votre paiement. Veuillez réessayer.")) : ("Une erreur est survenue lors du traitement de votre paiement. Veuillez réessayer.")), "html", null, true);
            yield "
            </p>
        ";
        } else {
            // line 134
            yield "            <div class=\"status-icon pending\">
                <i class=\"fas fa-hourglass-half\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #64748b;\">Statut inconnu</h2>
            <p class=\"status-message\">
                Nous n'avons pas pu déterminer le statut de votre paiement. Veuillez contacter le support.
            </p>
        ";
        }
        // line 142
        yield "
        ";
        // line 143
        if ((($tmp = (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 143, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "            <div class=\"order-info\">
                <div class=\"row\">
                    <span class=\"label\">Commande</span>
                    <span class=\"value\">#";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 147, $this->source); })()), "orderNumber", [], "any", false, false, false, 147), "html", null, true);
            yield "</span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Total</span>
                    <span class=\"value\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 151, $this->source); })()), "totalAmount", [], "any", false, false, false, 151), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Statut</span>
                    <span class=\"value\">
                        ";
            // line 156
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "paymentStatus", [], "any", false, false, false, 156) == "paid")) {
                // line 157
                yield "                            <span style=\"color: #16a34a;\">Payé</span>
                        ";
            } else {
                // line 159
                yield "                            <span style=\"color: #f59e0b;\">En attente</span>
                        ";
            }
            // line 161
            yield "                    </span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Date</span>
                    <span class=\"value\">";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 165, $this->source); })()), "createdAt", [], "any", false, false, false, 165), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                </div>
            </div>
        ";
        }
        // line 169
        yield "
        ";
        // line 170
        if ((($tmp = (isset($context["transaction_id"]) || array_key_exists("transaction_id", $context) ? $context["transaction_id"] : (function () { throw new RuntimeError('Variable "transaction_id" does not exist.', 170, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "            <p class=\"text-muted small\" style=\"margin-top: 1rem;\">
                Référence de transaction: ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transaction_id"]) || array_key_exists("transaction_id", $context) ? $context["transaction_id"] : (function () { throw new RuntimeError('Variable "transaction_id" does not exist.', 172, $this->source); })()), "html", null, true);
            yield "
            </p>
        ";
        }
        // line 175
        yield "
        <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_orders");
        yield "\" class=\"btn-return\">
            <i class=\"fas fa-list\"></i>
            Voir mes commandes
        </a>
        <br>
        <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"btn-return\" style=\"background: #e5e7eb; color: #475569; margin-top: 0.5rem;\">
            <i class=\"fas fa-home\"></i>
            Retour à l'accueil
        </a>
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
        return "marketplace/cart/payment_status.html.twig";
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
        return array (  346 => 181,  338 => 176,  335 => 175,  329 => 172,  326 => 171,  324 => 170,  321 => 169,  314 => 165,  308 => 161,  304 => 159,  300 => 157,  298 => 156,  290 => 151,  283 => 147,  278 => 144,  276 => 143,  273 => 142,  263 => 134,  257 => 131,  250 => 126,  248 => 125,  239 => 118,  237 => 117,  228 => 110,  226 => 109,  222 => 107,  209 => 106,  101 => 8,  88 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/cart/payment_status.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Statut du paiement - HMA Marketplace{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .payment-status-container {
        max-width: 600px;
        margin: 4rem auto;
        padding: 2rem;
        text-align: center;
    }

    .status-icon {
        font-size: 4rem;
        margin-bottom: 1.5rem;
    }

    .status-icon.success {
        color: #16a34a;
    }

    .status-icon.pending {
        color: #f59e0b;
    }

    .status-icon.error {
        color: #ef4444;
    }

    .status-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    }

    .status-card .status-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .status-card .status-message {
        color: #64748b;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .status-card .order-info {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
        margin: 1.5rem 0;
        text-align: left;
    }

    .status-card .order-info .row {
        display: flex;
        justify-content: space-between;
        padding: 0.4rem 0;
        border-bottom: 1px solid #e5e7eb;
    }

    .status-card .order-info .row:last-child {
        border-bottom: none;
    }

    .status-card .order-info .label {
        color: #64748b;
        font-size: 0.9rem;
    }

    .status-card .order-info .value {
        font-weight: 600;
        color: #0f172a;
        font-size: 0.9rem;
    }

    .btn-return {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.7rem 2rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }

    .btn-return:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(4, 99, 241, 0.3);
        color: white;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"payment-status-container\">
    <div class=\"status-card\">
        {% if status == 'approved' or status == 'success' %}
            <div class=\"status-icon success\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #16a34a;\">Paiement confirmé !</h2>
            <p class=\"status-message\">
                Votre paiement a été effectué avec succès. Votre commande est maintenant en cours de traitement.
            </p>
        {% elseif status == 'pending' %}
            <div class=\"status-icon pending\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #f59e0b;\">Paiement en attente</h2>
            <p class=\"status-message\">
                Votre paiement est en cours de validation. Vous recevrez une confirmation par email dès qu'il sera approuvé.
            </p>
        {% elseif status == 'error' %}
            <div class=\"status-icon error\">
                <i class=\"fas fa-exclamation-circle\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #ef4444;\">Erreur de paiement</h2>
            <p class=\"status-message\">
                {{ message|default('Une erreur est survenue lors du traitement de votre paiement. Veuillez réessayer.') }}
            </p>
        {% else %}
            <div class=\"status-icon pending\">
                <i class=\"fas fa-hourglass-half\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #64748b;\">Statut inconnu</h2>
            <p class=\"status-message\">
                Nous n'avons pas pu déterminer le statut de votre paiement. Veuillez contacter le support.
            </p>
        {% endif %}

        {% if order %}
            <div class=\"order-info\">
                <div class=\"row\">
                    <span class=\"label\">Commande</span>
                    <span class=\"value\">#{{ order.orderNumber }}</span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Total</span>
                    <span class=\"value\">{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Statut</span>
                    <span class=\"value\">
                        {% if order.paymentStatus == 'paid' %}
                            <span style=\"color: #16a34a;\">Payé</span>
                        {% else %}
                            <span style=\"color: #f59e0b;\">En attente</span>
                        {% endif %}
                    </span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Date</span>
                    <span class=\"value\">{{ order.createdAt|date('d/m/Y H:i') }}</span>
                </div>
            </div>
        {% endif %}

        {% if transaction_id %}
            <p class=\"text-muted small\" style=\"margin-top: 1rem;\">
                Référence de transaction: {{ transaction_id }}
            </p>
        {% endif %}

        <a href=\"{{ path('marketplace_orders') }}\" class=\"btn-return\">
            <i class=\"fas fa-list\"></i>
            Voir mes commandes
        </a>
        <br>
        <a href=\"{{ path('marketplace_home') }}\" class=\"btn-return\" style=\"background: #e5e7eb; color: #475569; margin-top: 0.5rem;\">
            <i class=\"fas fa-home\"></i>
            Retour à l'accueil
        </a>
    </div>
</div>
{% endblock %}", "marketplace/cart/payment_status.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\cart\\payment_status.html.twig");
    }
}
