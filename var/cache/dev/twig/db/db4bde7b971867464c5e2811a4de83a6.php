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

/* emails/order_confirmation.html.twig */
class __TwigTemplate_58c13d4d289b21ad29e44c3bf92d345a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_confirmation.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation de paiement #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "orderNumber", [], "any", false, false, false, 8), "html", null, true);
        yield "</title>
</head>
<body style=\"font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #f8fafc; margin: 0; padding: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 16px; padding: 40px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);\">
        
        <!-- Header -->
        <div style=\"text-align: center; padding-bottom: 30px; border-bottom: 2px solid #f1f5f9;\">
            <div style=\"margin-bottom: 15px;\">
                <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["appUrl"]) || array_key_exists("appUrl", $context) ? $context["appUrl"] : (function () { throw new RuntimeError('Variable "appUrl" does not exist.', 16, $this->source); })()) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" style=\"max-height: 60px;\">
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                ✅ Paiement confirmé !
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "orderNumber", [], "any", false, false, false, 22), "html", null, true);
        yield "
            </p>
            <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                Payée le ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
            </p>
        </div>

        <!-- Message de bienvenue -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <p style=\"color: #475569; font-size: 16px; margin: 0;\">
                Bonjour <strong>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "customerName", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong>,
            </p>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 10px;\">
                Nous avons bien reçu votre paiement. Votre commande est en cours de traitement 
                et sera expédiée dans les plus brefs délais.
            </p>
        </div>

        <!-- Statut de la commande -->
        <div style=\"background: #f0fdf4; border-radius: 12px; padding: 15px 20px; margin: 20px 0; border-left: 4px solid #16a34a;\">
            <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                <span style=\"color: #475569; font-weight: 600;\">Statut du paiement</span>
                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #dcfce7; color: #166534; font-weight: 600; font-size: 14px;\">
                    ✅ Payé
                </span>
            </div>
            <p style=\"color: #64748b; font-size: 12px; margin-top: 5px;\">
                Votre commande sera traitée dans les 24-48 heures.
            </p>
        </div>

        <!-- Articles commandés -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 59, $this->source); })()), "orderItems", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            yield "                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 63), "html", null, true);
            yield "
                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px;\">
                            Quantité: ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 66), "html", null, true);
            yield "
                            ";
            // line 67
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 69), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 72
            yield "                        </div>
                    </div>
                    <div style=\"font-weight: 600; color: #0f172a; font-size: 15px;\">
                        ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 75), 0, ",", " "), "html", null, true);
            yield " FCFA
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </div>

        <!-- Récapitulatif des totaux -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569;\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 85, $this->source); })()), "subtotal", [], "any", false, false, false, 85), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 87, $this->source); })()), "discountTotal", [], "any", false, false, false, 87) > 0)) {
            // line 88
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>Remise</span>
                    <span>- ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 90, $this->source); })()), "discountTotal", [], "any", false, false, false, 90), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
            ";
        }
        // line 93
        yield "            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 6px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 16px;\">Total payé</span>
                <span style=\"font-weight: 700; color: #16a34a; font-size: 18px;\">
                    ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 96, $this->source); })()), "totalAmount", [], "any", false, false, false, 96), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; margin-top: 6px; border-top: 1px dashed #e5e7eb; padding-top: 8px;\">
                <span style=\"color: #64748b; font-size: 13px;\">Méthode de paiement</span>
                <span style=\"color: #475569; font-size: 13px; font-weight: 600;\">
                    ";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 102, $this->source); })()), "paymentMethod", [], "any", false, false, false, 102) == "feda_pay")) {
            // line 103
            yield "                        FedaPay
                    ";
        } else {
            // line 105
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 105, $this->source); })()), "paymentMethod", [], "any", false, false, false, 105)), "html", null, true);
            yield "
                    ";
        }
        // line 107
        yield "                </span>
            </div>
        </div>

        <!-- Adresse de livraison -->
        ";
        // line 112
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 112, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "            <div style=\"margin: 25px 0; background: #f8fafc; border-radius: 12px; padding: 20px;\">
                <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                    📍 Adresse de livraison
                </h3>
                <p style=\"color: #475569; font-size: 14px; margin: 0; line-height: 1.6;\">
                    ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 118, $this->source); })()), "customerName", [], "any", false, false, false, 118), "html", null, true);
            yield "<br>
                    ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 119, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 119), "html", null, true);
            yield "<br>
                    ";
            // line 120
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 120, $this->source); })()), "deliveryCity", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 120, $this->source); })()), "deliveryCity", [], "any", false, false, false, 120), "html", null, true);
            }
            // line 121
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 121, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 121, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 121), "html", null, true);
            }
            // line 122
            yield "                    <br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "deliveryCountry", [], "any", false, false, false, 122), "Bénin")) : ("Bénin")), "html", null, true);
            yield "
                </p>
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 125, $this->source); })()), "customerPhone", [], "any", false, false, false, 125), "html", null, true);
            yield "
                </p>
            </div>
        ";
        }
        // line 129
        yield "
        <!-- Boutons d'action -->
        <div style=\"text-align: center; margin: 30px 0;\">
            <a href=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["appUrl"]) || array_key_exists("appUrl", $context) ? $context["appUrl"] : (function () { throw new RuntimeError('Variable "appUrl" does not exist.', 132, $this->source); })()) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_order_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)])), "html", null, true);
        yield "\" 
               style=\"display: inline-block; background: #0463f1; color: white; padding: 12px 40px; 
                      border-radius: 50px; text-decoration: none; font-weight: 600; margin-bottom: 10px;\">
                Suivre ma commande
            </a>
            <br>
            <a href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["appUrl"]) || array_key_exists("appUrl", $context) ? $context["appUrl"] : (function () { throw new RuntimeError('Variable "appUrl" does not exist.', 138, $this->source); })()) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products")), "html", null, true);
        yield "\" 
               style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px;\">
                Continuer mes achats
            </a>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0;\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 146, $this->source); })()), "html", null, true);
        yield " - Votre marketplace de confiance</p>
            <p style=\"margin: 5px 0;\">
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Conditions générales</a>
                &nbsp;•&nbsp;
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Contact</a>
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px;\">
                Cet email a été envoyé à ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 153, $this->source); })()), "customerEmail", [], "any", false, false, false, 153), "html", null, true);
        yield ". 
                Si vous n'êtes pas à l'origine de cette commande, ignorez cet email.
            </p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/order_confirmation.html.twig";
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
        return array (  303 => 153,  293 => 146,  282 => 138,  273 => 132,  268 => 129,  261 => 125,  254 => 122,  248 => 121,  244 => 120,  240 => 119,  236 => 118,  229 => 113,  227 => 112,  220 => 107,  214 => 105,  210 => 103,  208 => 102,  199 => 96,  194 => 93,  188 => 90,  184 => 88,  182 => 87,  177 => 85,  169 => 79,  159 => 75,  154 => 72,  148 => 69,  145 => 68,  143 => 67,  139 => 66,  133 => 63,  128 => 60,  124 => 59,  94 => 32,  84 => 25,  78 => 22,  67 => 16,  56 => 8,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/order_confirmation.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation de paiement #{{ order.orderNumber }}</title>
</head>
<body style=\"font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #f8fafc; margin: 0; padding: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 16px; padding: 40px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);\">
        
        <!-- Header -->
        <div style=\"text-align: center; padding-bottom: 30px; border-bottom: 2px solid #f1f5f9;\">
            <div style=\"margin-bottom: 15px;\">
                <img src=\"{{ appUrl ~ asset('images/logo.png') }}\" alt=\"{{ appName }}\" style=\"max-height: 60px;\">
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                ✅ Paiement confirmé !
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #{{ order.orderNumber }}
            </p>
            <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                Payée le {{ \"now\"|date('d/m/Y à H:i') }}
            </p>
        </div>

        <!-- Message de bienvenue -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <p style=\"color: #475569; font-size: 16px; margin: 0;\">
                Bonjour <strong>{{ order.customerName }}</strong>,
            </p>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 10px;\">
                Nous avons bien reçu votre paiement. Votre commande est en cours de traitement 
                et sera expédiée dans les plus brefs délais.
            </p>
        </div>

        <!-- Statut de la commande -->
        <div style=\"background: #f0fdf4; border-radius: 12px; padding: 15px 20px; margin: 20px 0; border-left: 4px solid #16a34a;\">
            <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                <span style=\"color: #475569; font-weight: 600;\">Statut du paiement</span>
                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #dcfce7; color: #166534; font-weight: 600; font-size: 14px;\">
                    ✅ Payé
                </span>
            </div>
            <p style=\"color: #64748b; font-size: 12px; margin-top: 5px;\">
                Votre commande sera traitée dans les 24-48 heures.
            </p>
        </div>

        <!-- Articles commandés -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            {% for item in order.orderItems %}
                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            {{ item.productName }}
                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px;\">
                            Quantité: {{ item.quantity }}
                            {% if item.promotionName %}
                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    {{ item.promotionName }}
                                </span>
                            {% endif %}
                        </div>
                    </div>
                    <div style=\"font-weight: 600; color: #0f172a; font-size: 15px;\">
                        {{ item.totalPrice|number_format(0, ',', ' ') }} FCFA
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Récapitulatif des totaux -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569;\">{{ order.subtotal|number_format(0, ',', ' ') }} FCFA</span>
            </div>
            {% if order.discountTotal > 0 %}
                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>Remise</span>
                    <span>- {{ order.discountTotal|number_format(0, ',', ' ') }} FCFA</span>
                </div>
            {% endif %}
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 6px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 16px;\">Total payé</span>
                <span style=\"font-weight: 700; color: #16a34a; font-size: 18px;\">
                    {{ order.totalAmount|number_format(0, ',', ' ') }} FCFA
                </span>
            </div>
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; margin-top: 6px; border-top: 1px dashed #e5e7eb; padding-top: 8px;\">
                <span style=\"color: #64748b; font-size: 13px;\">Méthode de paiement</span>
                <span style=\"color: #475569; font-size: 13px; font-weight: 600;\">
                    {% if order.paymentMethod == 'feda_pay' %}
                        FedaPay
                    {% else %}
                        {{ order.paymentMethod|capitalize }}
                    {% endif %}
                </span>
            </div>
        </div>

        <!-- Adresse de livraison -->
        {% if order.deliveryAddress %}
            <div style=\"margin: 25px 0; background: #f8fafc; border-radius: 12px; padding: 20px;\">
                <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                    📍 Adresse de livraison
                </h3>
                <p style=\"color: #475569; font-size: 14px; margin: 0; line-height: 1.6;\">
                    {{ order.customerName }}<br>
                    {{ order.deliveryAddress }}<br>
                    {% if order.deliveryCity %}{{ order.deliveryCity }}{% endif %}
                    {% if order.deliveryZipcode %} - {{ order.deliveryZipcode }}{% endif %}
                    <br>{{ order.deliveryCountry|default('Bénin') }}
                </p>
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 {{ order.customerPhone }}
                </p>
            </div>
        {% endif %}

        <!-- Boutons d'action -->
        <div style=\"text-align: center; margin: 30px 0;\">
            <a href=\"{{ appUrl ~ path('marketplace_order_detail', {id: order.id}) }}\" 
               style=\"display: inline-block; background: #0463f1; color: white; padding: 12px 40px; 
                      border-radius: 50px; text-decoration: none; font-weight: 600; margin-bottom: 10px;\">
                Suivre ma commande
            </a>
            <br>
            <a href=\"{{ appUrl ~ path('marketplace_products') }}\" 
               style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px;\">
                Continuer mes achats
            </a>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0;\">{{ appName }} - Votre marketplace de confiance</p>
            <p style=\"margin: 5px 0;\">
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Conditions générales</a>
                &nbsp;•&nbsp;
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Contact</a>
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px;\">
                Cet email a été envoyé à {{ order.customerEmail }}. 
                Si vous n'êtes pas à l'origine de cette commande, ignorez cet email.
            </p>
        </div>
    </div>
</body>
</html>", "emails/order_confirmation.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\order_confirmation.html.twig");
    }
}
