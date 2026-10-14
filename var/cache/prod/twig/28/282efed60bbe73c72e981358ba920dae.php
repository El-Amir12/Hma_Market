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

/* emails/order_status_update_customer.html.twig */
class __TwigTemplate_2a39ad992d2478de86e7df2b687f7683 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mise à jour de votre commande</title>
</head>
<body style=\"font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #f8fafc; margin: 0; padding: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 16px; padding: 40px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);\">
        
        <!-- Header -->
        <div style=\"text-align: center; padding-bottom: 30px; border-bottom: 2px solid #f1f5f9;\">
            <div style=\"margin-bottom: 15px;\">
                <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["appUrl"] ?? null) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["appName"] ?? null), "html", null, true);
        yield "\" style=\"max-height: 60px;\">
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                🔔 Mise à jour de votre commande
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 22), "html", null, true);
        yield "
            </p>
        </div>

        <!-- Message personnalisé selon le statut -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <p style=\"color: #475569; font-size: 16px; margin: 0;\">
                Bonjour <strong>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 29), "html", null, true);
        yield "</strong>,
            </p>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 10px;\">
                ";
        // line 32
        if ((($context["newStatus"] ?? null) == "pending")) {
            // line 33
            yield "                    Votre commande est en attente de validation.
                ";
        } elseif ((        // line 34
($context["newStatus"] ?? null) == "processing")) {
            // line 35
            yield "                    Votre commande est en cours de préparation.
                ";
        } elseif ((        // line 36
($context["newStatus"] ?? null) == "shipped")) {
            // line 37
            yield "                    Votre commande a été expédiée !
                ";
        } elseif ((        // line 38
($context["newStatus"] ?? null) == "delivered")) {
            // line 39
            yield "                    Votre commande a été livrée avec succès.
                ";
        } elseif ((        // line 40
($context["newStatus"] ?? null) == "completed")) {
            // line 41
            yield "                    Votre commande est terminée. Merci pour votre achat !
                ";
        } elseif ((        // line 42
($context["newStatus"] ?? null) == "cancelled")) {
            // line 43
            yield "                    Votre commande a été annulée.
                ";
        } elseif ((        // line 44
($context["newStatus"] ?? null) == "refunded")) {
            // line 45
            yield "                    Votre commande a été remboursée.
                ";
        } else {
            // line 47
            yield "                    Le statut de votre commande a été mis à jour.
                ";
        }
        // line 49
        yield "            </p>
        </div>

        <!-- Statut -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <div style=\"display: inline-block; padding: 10px 30px; border-radius: 50px; 
                        background: ";
        // line 55
        if ((($context["newStatus"] ?? null) == "pending")) {
            yield "#fef3c7";
        } elseif ((($context["newStatus"] ?? null) == "processing")) {
            yield "#dbeafe";
        } elseif ((($context["newStatus"] ?? null) == "shipped")) {
            yield "#dbeafe";
        } elseif ((($context["newStatus"] ?? null) == "delivered")) {
            yield "#dcfce7";
        } elseif ((($context["newStatus"] ?? null) == "completed")) {
            yield "#dcfce7";
        } elseif ((($context["newStatus"] ?? null) == "cancelled")) {
            yield "#fee2e2";
        } elseif ((($context["newStatus"] ?? null) == "refunded")) {
            yield "#f3f4f6";
        }
        yield ";
                        color: ";
        // line 56
        if ((($context["newStatus"] ?? null) == "pending")) {
            yield "#92400e";
        } elseif ((($context["newStatus"] ?? null) == "processing")) {
            yield "#1d4ed8";
        } elseif ((($context["newStatus"] ?? null) == "shipped")) {
            yield "#1d4ed8";
        } elseif ((($context["newStatus"] ?? null) == "delivered")) {
            yield "#16a34a";
        } elseif ((($context["newStatus"] ?? null) == "completed")) {
            yield "#16a34a";
        } elseif ((($context["newStatus"] ?? null) == "cancelled")) {
            yield "#dc2626";
        } elseif ((($context["newStatus"] ?? null) == "refunded")) {
            yield "#374151";
        }
        yield ";
                        font-weight: 700; font-size: 18px;\">
                ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["newStatusLabel"] ?? null), "html", null, true);
        yield "
            </div>
            <p style=\"color: #94a3b8; font-size: 14px; margin-top: 10px;\">
                Ancien statut : <span style=\"text-decoration: line-through;\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["oldStatusLabel"] ?? null), "html", null, true);
        yield "</span>
            </p>
        </div>

        <!-- Articles commandés -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            yield "                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 75), "html", null, true);
            yield "
                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px;\">
                            Quantité: ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 78), "html", null, true);
            yield "
                            ";
            // line 79
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 81), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 84
            yield "                        </div>
                    </div>
                    <div style=\"font-weight: 600; color: #0f172a; font-size: 15px;\">
                        ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 87), 0, ",", " "), "html", null, true);
            yield " FCFA
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "        </div>

        <!-- Récapitulatif des totaux -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569;\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "subtotal", [], "any", false, false, false, 97), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "discountTotal", [], "any", false, false, false, 99) > 0)) {
            // line 100
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>Remise</span>
                    <span>- ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "discountTotal", [], "any", false, false, false, 102), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
            ";
        }
        // line 105
        yield "            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 6px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 16px;\">Total</span>
                <span style=\"font-weight: 700; color: #0463f1; font-size: 18px;\">
                    ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 108), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
        </div>

        <!-- Adresse de livraison -->
        ";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryAddress", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "            <div style=\"margin: 25px 0; background: #f8fafc; border-radius: 12px; padding: 20px;\">
                <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                    📍 Adresse de livraison
                </h3>
                <p style=\"color: #475569; font-size: 14px; margin: 0; line-height: 1.6;\">
                    ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 120), "html", null, true);
            yield "<br>
                    ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryAddress", [], "any", false, false, false, 121), "html", null, true);
            yield "<br>
                    ";
            // line 122
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCity", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCity", [], "any", false, false, false, 122), "html", null, true);
            }
            // line 123
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryZipcode", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryZipcode", [], "any", false, false, false, 123), "html", null, true);
            }
            // line 124
            yield "                    <br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", false, false, false, 124), "Bénin")) : ("Bénin")), "html", null, true);
            yield "
                </p>
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerPhone", [], "any", false, false, false, 127), "html", null, true);
            yield "
                </p>
            </div>
        ";
        }
        // line 131
        yield "
        <!-- ✅ BOUTON POUR LE CLIENT -->
        <div style=\"text-align: center; margin-top: 30px;\">
            <a href=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_order_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 134)])), "html", null, true);
        yield "\" 
               style=\"display: inline-block; background: #0463f1; color: white; padding: 12px 40px; 
                      border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;\">
                <i class=\"fas fa-eye\" style=\"margin-right: 8px;\"></i>
                Voir ma commande
            </a>
            <br>
            <a href=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products")), "html", null, true);
        yield "\" 
               style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px; margin-top: 15px;\">
                Continuer mes achats
            </a>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0;\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["appName"] ?? null), "html", null, true);
        yield " - Votre marketplace de confiance</p>
            <p style=\"margin: 5px 0;\">
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Conditions générales</a>
                &nbsp;•&nbsp;
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Contact</a>
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px;\">
                Cet email a été envoyé à ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerEmail", [], "any", false, false, false, 156), "html", null, true);
        yield ". 
                Si vous n'êtes pas à l'origine de cette commande, ignorez cet email.
            </p>
        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/order_status_update_customer.html.twig";
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
        return array (  350 => 156,  340 => 149,  329 => 141,  319 => 134,  314 => 131,  307 => 127,  300 => 124,  294 => 123,  290 => 122,  286 => 121,  282 => 120,  275 => 115,  273 => 114,  264 => 108,  259 => 105,  253 => 102,  249 => 100,  247 => 99,  242 => 97,  234 => 91,  224 => 87,  219 => 84,  213 => 81,  210 => 80,  208 => 79,  204 => 78,  198 => 75,  193 => 72,  189 => 71,  176 => 61,  170 => 58,  151 => 56,  133 => 55,  125 => 49,  121 => 47,  117 => 45,  115 => 44,  112 => 43,  110 => 42,  107 => 41,  105 => 40,  102 => 39,  100 => 38,  97 => 37,  95 => 36,  92 => 35,  90 => 34,  87 => 33,  85 => 32,  79 => 29,  69 => 22,  58 => 16,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/order_status_update_customer.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\order_status_update_customer.html.twig");
    }
}
