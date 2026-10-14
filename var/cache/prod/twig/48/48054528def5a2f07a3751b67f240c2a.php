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
class __TwigTemplate_51f900d5d60b00428f53f118c9d97084 extends Template
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
        $this->parent = $this->load("base_marketplace.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Statut du paiement - HMA Marketplace";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "<div class=\"payment-status-container\">
    <div class=\"status-card\">
        ";
        // line 109
        if (((($context["status"] ?? null) == "approved") || (($context["status"] ?? null) == "success"))) {
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
($context["status"] ?? null) == "pending")) {
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
($context["status"] ?? null) == "error")) {
            // line 126
            yield "            <div class=\"status-icon error\">
                <i class=\"fas fa-exclamation-circle\"></i>
            </div>
            <h2 class=\"status-title\" style=\"color: #ef4444;\">Erreur de paiement</h2>
            <p class=\"status-message\">
                ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("message", $context)) ? (Twig\Extension\CoreExtension::default(($context["message"] ?? null), "Une erreur est survenue lors du traitement de votre paiement. Veuillez réessayer.")) : ("Une erreur est survenue lors du traitement de votre paiement. Veuillez réessayer.")), "html", null, true);
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
        if ((($tmp = ($context["order"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "            <div class=\"order-info\">
                <div class=\"row\">
                    <span class=\"label\">Commande</span>
                    <span class=\"value\">#";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 147), "html", null, true);
            yield "</span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Total</span>
                    <span class=\"value\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 151), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
                <div class=\"row\">
                    <span class=\"label\">Statut</span>
                    <span class=\"value\">
                        ";
            // line 156
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 156) == "paid")) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 165), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                </div>
            </div>
        ";
        }
        // line 169
        yield "
        ";
        // line 170
        if ((($tmp = ($context["transaction_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "            <p class=\"text-muted small\" style=\"margin-top: 1rem;\">
                Référence de transaction: ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["transaction_id"] ?? null), "html", null, true);
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
        return array (  304 => 181,  296 => 176,  293 => 175,  287 => 172,  284 => 171,  282 => 170,  279 => 169,  272 => 165,  266 => 161,  262 => 159,  258 => 157,  256 => 156,  248 => 151,  241 => 147,  236 => 144,  234 => 143,  231 => 142,  221 => 134,  215 => 131,  208 => 126,  206 => 125,  197 => 118,  195 => 117,  186 => 110,  184 => 109,  180 => 107,  173 => 106,  71 => 8,  64 => 7,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/cart/payment_status.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\cart\\payment_status.html.twig");
    }
}
