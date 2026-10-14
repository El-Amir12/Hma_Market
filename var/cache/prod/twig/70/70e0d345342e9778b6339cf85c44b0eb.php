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

/* emails/direct_sale_confirmation.html.twig */
class __TwigTemplate_9010abb9ad07827eac87a1c696fded2e extends Template
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
    <title>Confirmation de votre commande #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 8), "html", null, true);
        yield "</title>
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
                🛒 Commande confirmée !
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 22), "html", null, true);
        yield "
            </p>
            <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                Enregistrée le ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 25), "d/m/Y à H:i"), "html", null, true);
        yield "
            </p>
            <div style=\"margin-top: 10px;\">
                <span style=\"display: inline-block; padding: 4px 20px; border-radius: 50px; background: #dcfce7; color: #16a34a; font-weight: 700; font-size: 14px;\">
                    ✅ Commande terminée
                </span>
            </div>
        </div>

        <!-- Message de confirmation -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <p style=\"color: #475569; font-size: 16px; margin: 0;\">
                Bonjour <strong>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 37), "html", null, true);
        yield "</strong>,
            </p>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 10px;\">
                Votre commande a été enregistrée avec succès en caisse.
                Vous trouverez ci-dessous le récapitulatif de votre achat.
            </p>
        </div>

        <!-- Détails de la commande -->
        <div style=\"background: #f0fdf4; border-radius: 12px; padding: 15px 20px; margin: 20px 0; border-left: 4px solid #16a34a;\">
            <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                <span style=\"color: #475569; font-weight: 600;\">Statut</span>
                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #dcfce7; color: #16a34a; font-weight: 600; font-size: 14px;\">
                    ✅ Payée
                </span>
            </div>
            <div style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 5px;\">
                <span style=\"color: #475569; font-weight: 600;\">Paiement</span>
                <span style=\"color: #475569; font-size: 14px;\">
                    ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 56) == "cash")) {
            // line 57
            yield "                        💰 Espèces
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 58) == "card")) {
            // line 59
            yield "                        💳 Carte bancaire
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 60) == "mobile_money")) {
            // line 61
            yield "                        📱 Mobile Money
                    ";
        } else {
            // line 63
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 63)), "html", null, true);
            yield "
                    ";
        }
        // line 65
        yield "                </span>
            </div>
            ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 67) > 0)) {
            // line 68
            yield "                <div style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 5px;\">
                    <span style=\"color: #475569; font-weight: 600;\">Monnaie rendue</span>
                    <span style=\"color: #16a34a; font-weight: 600;\">
                        ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 71), 0, ",", " "), "html", null, true);
            yield " FCFA
                    </span>
                </div>
            ";
        }
        // line 75
        yield "        </div>

        <!-- Articles commandés -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 84
            yield "                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 87), "html", null, true);
            yield "
                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px;\">
                            Quantité: ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 90), "html", null, true);
            yield "
                            ";
            // line 91
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 93), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 96
            yield "                        </div>
                        ";
            // line 97
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 98
                yield "                            <div style=\"color: #94a3b8; font-size: 11px; font-style: italic; margin-top: 2px;\">
                                📝 ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 99), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 102
            yield "                    </div>
                    <div style=\"font-weight: 600; color: #0f172a; font-size: 15px;\">
                        ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 104), 0, ",", " "), "html", null, true);
            yield " FCFA
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "        </div>

        <!-- Récapitulatif des totaux -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569;\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "subtotal", [], "any", false, false, false, 114), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "discountTotal", [], "any", false, false, false, 116) > 0)) {
            // line 117
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>Remise</span>
                    <span>- ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "discountTotal", [], "any", false, false, false, 119), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
            ";
        }
        // line 122
        yield "            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 6px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 16px;\">Total</span>
                <span style=\"font-weight: 700; color: #0463f1; font-size: 18px;\">
                    ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 125), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
        </div>

        <!-- Informations de paiement -->
        <div style=\"margin: 25px 0; background: #f0fdf4; border-radius: 12px; padding: 20px; border: 1px solid #dcfce7;\">
            <h3 style=\"font-size: 14px; color: #16a34a; margin: 0 0 10px 0;\">
                💳 Informations de paiement
            </h3>
            <div style=\"display: flex; justify-content: space-between; padding: 4px 0;\">
                <span style=\"color: #475569;\">Méthode</span>
                <span style=\"color: #0f172a; font-weight: 600;\">
                    ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 138) == "cash")) {
            // line 139
            yield "                        💰 Espèces
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 140
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 140) == "card")) {
            // line 141
            yield "                        💳 Carte bancaire
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 142
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 142) == "mobile_money")) {
            // line 143
            yield "                        📱 Mobile Money
                    ";
        } else {
            // line 145
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 145)), "html", null, true);
            yield "
                    ";
        }
        // line 147
        yield "                </span>
            </div>
            <div style=\"display: flex; justify-content: space-between; padding: 4px 0;\">
                <span style=\"color: #475569;\">Montant payé</span>
                <span style=\"color: #0f172a; font-weight: 600;\">
                    ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "amountPaid", [], "any", false, false, false, 152), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
            ";
        // line 155
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 155) > 0)) {
            // line 156
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 4px 0;\">
                    <span style=\"color: #475569;\">Monnaie</span>
                    <span style=\"color: #16a34a; font-weight: 600;\">
                        ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 159), 0, ",", " "), "html", null, true);
            yield " FCFA
                    </span>
                </div>
            ";
        }
        // line 163
        yield "            <div style=\"display: flex; justify-content: space-between; padding: 4px 0; border-top: 1px solid #e5e7eb; margin-top: 4px; padding-top: 8px;\">
                <span style=\"color: #475569; font-weight: 600;\">Statut</span>
                <span style=\"display: inline-block; padding: 2px 12px; border-radius: 50px; background: #dcfce7; color: #16a34a; font-weight: 600; font-size: 12px;\">
                    ✅ Payé
                </span>
            </div>
        </div>

        <!-- Boutons d'action -->
        <div style=\"text-align: center; margin: 30px 0;\">
            <a href=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["appUrl"] ?? null) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_order_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 173)])), "html", null, true);
        yield "\" 
               style=\"display: inline-block; background: #0463f1; color: white; padding: 12px 40px; 
                      border-radius: 50px; text-decoration: none; font-weight: 600; margin-bottom: 10px;\">
                Voir le détail de ma commande
            </a>
            <br>
            <a href=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["appUrl"] ?? null) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products")), "html", null, true);
        yield "\" 
               style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px;\">
                Continuer mes achats
            </a>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0;\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["appName"] ?? null), "html", null, true);
        yield " - Votre marketplace de confiance</p>
            <p style=\"margin: 5px 0;\">
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Conditions générales</a>
                &nbsp;•&nbsp;
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Contact</a>
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px;\">
                Cet email a été envoyé à ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerEmail", [], "any", false, false, false, 194), "html", null, true);
        yield ". 
                Merci de votre confiance !
            </p>
            <p style=\"margin: 5px 0 0 0; font-size: 11px; color: #94a3b8;\">
                ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["appName"] ?? null), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
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
        return "emails/direct_sale_confirmation.html.twig";
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
        return array (  367 => 198,  360 => 194,  350 => 187,  339 => 179,  330 => 173,  318 => 163,  311 => 159,  306 => 156,  304 => 155,  298 => 152,  291 => 147,  285 => 145,  281 => 143,  279 => 142,  276 => 141,  274 => 140,  271 => 139,  269 => 138,  253 => 125,  248 => 122,  242 => 119,  238 => 117,  236 => 116,  231 => 114,  223 => 108,  213 => 104,  209 => 102,  203 => 99,  200 => 98,  198 => 97,  195 => 96,  189 => 93,  186 => 92,  184 => 91,  180 => 90,  174 => 87,  169 => 84,  165 => 83,  155 => 75,  148 => 71,  143 => 68,  141 => 67,  137 => 65,  131 => 63,  127 => 61,  125 => 60,  122 => 59,  120 => 58,  117 => 57,  115 => 56,  93 => 37,  78 => 25,  72 => 22,  61 => 16,  50 => 8,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/direct_sale_confirmation.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\direct_sale_confirmation.html.twig");
    }
}
