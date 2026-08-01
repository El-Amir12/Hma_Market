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

/* emails/admin_order_notification.html.twig */
class __TwigTemplate_873ab8f196b77a5cf93a9430add9a119 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/admin_order_notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/admin_order_notification.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>💰 Nouveau paiement - Commande #";
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
            <div style=\"display: inline-block; padding: 6px 20px; border-radius: 50px; background: #dcfce7; color: #166534; font-weight: 700; font-size: 14px; margin-bottom: 10px;\">
                💰 NOUVEAU PAIEMENT
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                Commande #";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "orderNumber", [], "any", false, false, false, 22), "html", null, true);
        yield "
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Paiement confirmé le ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
            </p>
        </div>

        <!-- Badge Admin -->
        <div style=\"text-align: center; margin: 15px 0 20px 0;\">
            <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #fef3c7; color: #92400e; font-weight: 600; font-size: 12px;\">
                🔐 Notification administrateur - Action requise
            </span>
        </div>

        <!-- Informations client -->
        <div style=\"background: #f0f7ff; border-radius: 12px; padding: 20px; margin: 20px 0; border-left: 4px solid #0463f1;\">
            <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 12px 0;\">
                👤 Informations client
            </h3>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 8px;\">
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Nom complet</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "customerName", [], "any", false, false, false, 45), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Téléphone</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "customerPhone", [], "any", false, false, false, 51), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Email</p>
                    <p style=\"color: #0463f1; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "customerEmail", [], "any", false, false, false, 57), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Méthode de paiement</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 63, $this->source); })()), "paymentMethod", [], "any", false, false, false, 63) == "feda_pay")) {
            // line 64
            yield "                            💳 FedaPay
                        ";
        } else {
            // line 66
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "paymentMethod", [], "any", false, false, false, 66)), "html", null, true);
            yield "
                        ";
        }
        // line 68
        yield "                    </p>
                </div>
            </div>
            <div style=\"margin-top: 10px; padding-top: 10px; border-top: 1px solid #e5e7eb;\">
                <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Statut du paiement</p>
                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #dcfce7; color: #166534; font-weight: 700; font-size: 14px; margin-top: 4px;\">
                    ✅ PAYÉ
                </span>
            </div>
        </div>

        <!-- Résumé de la commande -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 85, $this->source); })()), "orderItems", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 86
            yield "                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 89), "html", null, true);
            yield "
                            ";
            // line 90
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "                                <span style=\"color: #94a3b8; font-size: 11px; font-weight: 400;\">
                                    (ID: ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 92), "html", null, true);
                yield ")
                                </span>
                            ";
            }
            // line 95
            yield "                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px; margin-top: 2px;\">
                            Quantité: ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 97), "html", null, true);
            yield "
                            ";
            // line 98
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 99
                yield "                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    🎯 ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 100), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 103
            yield "                        </div>
                        ";
            // line 104
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                            <div style=\"color: #64748b; font-size: 12px; margin-top: 4px; font-style: italic;\">
                                📝 ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 106), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 109
            yield "                    </div>
                    <div style=\"text-align: right;\">
                        <div style=\"font-weight: 700; color: #0f172a; font-size: 15px;\">
                            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 112), 0, ",", " "), "html", null, true);
            yield " FCFA
                        </div>
                        <div style=\"color: #94a3b8; font-size: 11px;\">
                            ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 115), 0, ",", " "), "html", null, true);
            yield " FCFA/unité
                        </div>
                        ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discountAmountValue", [], "any", false, false, false, 117) > 0)) {
                // line 118
                yield "                            <div style=\"color: #16a34a; font-size: 11px;\">
                                - ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discountAmountValue", [], "any", false, false, false, 119), 0, ",", " "), "html", null, true);
                yield " FCFA (remise)
                            </div>
                        ";
            }
            // line 122
            yield "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "        </div>

        <!-- Récapitulatif des totaux (détaillé) -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569; font-weight: 600;\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 131, $this->source); })()), "subtotal", [], "any", false, false, false, 131), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 133
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 133, $this->source); })()), "discountTotal", [], "any", false, false, false, 133) > 0)) {
            // line 134
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>🎯 Remise totale</span>
                    <span style=\"font-weight: 600;\">- ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 136, $this->source); })()), "discountTotal", [], "any", false, false, false, 136), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
            ";
        }
        // line 139
        yield "            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 8px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 18px;\">💰 Total payé</span>
                <span style=\"font-weight: 700; color: #16a34a; font-size: 20px;\">
                    ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 142, $this->source); })()), "totalAmount", [], "any", false, false, false, 142), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
        </div>

        <!-- Adresse de livraison -->
        ";
        // line 148
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 148, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "            <div style=\"margin: 25px 0; background: #f8fafc; border-radius: 12px; padding: 20px;\">
                <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                    📍 Adresse de livraison
                </h3>
                <p style=\"color: #475569; font-size: 14px; margin: 0; line-height: 1.6;\">
                    <strong>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 154, $this->source); })()), "customerName", [], "any", false, false, false, 154), "html", null, true);
            yield "</strong><br>
                    ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 155, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 155), "html", null, true);
            yield "<br>
                    ";
            // line 156
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "deliveryCity", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "deliveryCity", [], "any", false, false, false, 156), "html", null, true);
            }
            // line 157
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 157, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 157, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 157), "html", null, true);
            }
            // line 158
            yield "                    <br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 158, $this->source); })()), "deliveryCountry", [], "any", false, false, false, 158), "Bénin")) : ("Bénin")), "html", null, true);
            yield "
                </p>
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 161, $this->source); })()), "customerPhone", [], "any", false, false, false, 161), "html", null, true);
            yield "
                </p>
                ";
            // line 163
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 163, $this->source); })()), "deliveryLatitude", [], "any", false, false, false, 163) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 163, $this->source); })()), "deliveryLongitude", [], "any", false, false, false, 163))) {
                // line 164
                yield "                    <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                        📍 Coordonnées GPS: ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 165, $this->source); })()), "deliveryLatitude", [], "any", false, false, false, 165), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 165, $this->source); })()), "deliveryLongitude", [], "any", false, false, false, 165), "html", null, true);
                yield "
                    </p>
                ";
            }
            // line 168
            yield "            </div>
        ";
        }
        // line 170
        yield "
        <!-- Dates importantes -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 15px; margin: 20px 0;\">
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 10px;\">
                <div>
                    <p style=\"color: #94a3b8; font-size: 11px; margin: 0;\">Date de commande</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 13px; margin: 2px 0;\">
                        ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 177, $this->source); })()), "createdAt", [], "any", false, false, false, 177), "d/m/Y H:i"), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #94a3b8; font-size: 11px; margin: 0;\">Paiement confirmé</p>
                    <p style=\"color: #16a34a; font-weight: 600; font-size: 13px; margin: 2px 0;\">
                        ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
                    </p>
                </div>
            </div>
        </div>

        <!-- ✅ BOUTONS D'ACTION POUR LE SUPER ADMIN -->
        <div style=\"text-align: center; margin-top: 30px; background: #f0f7ff; border-radius: 12px; padding: 25px;\">
            <p style=\"color: #475569; font-size: 14px; margin: 0 0 15px 0; font-weight: 600;\">
                🔔 Action requise : Traitez cette commande
            </p>
            <div style=\"display: flex; flex-direction: column; gap: 10px; align-items: center;\">
                <a href=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 195, $this->source); })()), "id", [], "any", false, false, false, 195)])), "html", null, true);
        yield "\" 
                   style=\"display: inline-block; background: #0463f1; color: white; padding: 14px 45px; 
                          border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;
                          box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);\">
                    🔗 Voir la commande dans l'admin
                </a>
                <a href=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index")), "html", null, true);
        yield "\" 
                   style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px;\">
                    📊 Accéder à la liste des commandes
                </a>
                <a href=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard")), "html", null, true);
        yield "\" 
                   style=\"display: inline-block; color: #64748b; text-decoration: none; font-size: 13px;\">
                    🏠 Tableau de bord
                </a>
            </div>
        </div>

        <!-- Résumé rapide -->
        <div style=\"background: #fef3c7; border-radius: 12px; padding: 15px; margin: 20px 0; border-left: 4px solid #f59e0b;\">
            <p style=\"color: #92400e; font-size: 13px; margin: 0; text-align: center;\">
                ⚡ <strong>Action rapide :</strong> 
                Connectez-vous au back-office pour valider l'expédition de la commande #";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 216, $this->source); })()), "orderNumber", [], "any", false, false, false, 216), "html", null, true);
        yield ".
            </p>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0; font-weight: 600; color: #475569;\">
                ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 223, $this->source); })()), "html", null, true);
        yield " - Notification administrateur
            </p>
            <p style=\"margin: 5px 0;\">
                Cet email est envoyé automatiquement lors d'un nouveau paiement.
            </p>
            <p style=\"margin: 5px 0;\">
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Gérer les notifications</a>
                &nbsp;•&nbsp;
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Centre d'aide</a>
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px; color: #d1d5db;\">
                Commande #";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 234, $this->source); })()), "orderNumber", [], "any", false, false, false, 234), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
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
        return "emails/admin_order_notification.html.twig";
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
        return array (  439 => 234,  425 => 223,  415 => 216,  401 => 205,  394 => 201,  385 => 195,  370 => 183,  361 => 177,  352 => 170,  348 => 168,  340 => 165,  337 => 164,  335 => 163,  330 => 161,  323 => 158,  317 => 157,  313 => 156,  309 => 155,  305 => 154,  298 => 149,  296 => 148,  287 => 142,  282 => 139,  276 => 136,  272 => 134,  270 => 133,  265 => 131,  257 => 125,  249 => 122,  243 => 119,  240 => 118,  238 => 117,  233 => 115,  227 => 112,  222 => 109,  216 => 106,  213 => 105,  211 => 104,  208 => 103,  202 => 100,  199 => 99,  197 => 98,  193 => 97,  189 => 95,  183 => 92,  180 => 91,  178 => 90,  174 => 89,  169 => 86,  165 => 85,  146 => 68,  140 => 66,  136 => 64,  134 => 63,  125 => 57,  116 => 51,  107 => 45,  84 => 25,  78 => 22,  67 => 16,  56 => 8,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/admin_order_notification.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>💰 Nouveau paiement - Commande #{{ order.orderNumber }}</title>
</head>
<body style=\"font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #f8fafc; margin: 0; padding: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 16px; padding: 40px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);\">
        
        <!-- Header -->
        <div style=\"text-align: center; padding-bottom: 30px; border-bottom: 2px solid #f1f5f9;\">
            <div style=\"margin-bottom: 15px;\">
                <img src=\"{{ appUrl ~ asset('images/logo.png') }}\" alt=\"{{ appName }}\" style=\"max-height: 60px;\">
            </div>
            <div style=\"display: inline-block; padding: 6px 20px; border-radius: 50px; background: #dcfce7; color: #166534; font-weight: 700; font-size: 14px; margin-bottom: 10px;\">
                💰 NOUVEAU PAIEMENT
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                Commande #{{ order.orderNumber }}
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Paiement confirmé le {{ \"now\"|date('d/m/Y à H:i') }}
            </p>
        </div>

        <!-- Badge Admin -->
        <div style=\"text-align: center; margin: 15px 0 20px 0;\">
            <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #fef3c7; color: #92400e; font-weight: 600; font-size: 12px;\">
                🔐 Notification administrateur - Action requise
            </span>
        </div>

        <!-- Informations client -->
        <div style=\"background: #f0f7ff; border-radius: 12px; padding: 20px; margin: 20px 0; border-left: 4px solid #0463f1;\">
            <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 12px 0;\">
                👤 Informations client
            </h3>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 8px;\">
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Nom complet</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        {{ order.customerName }}
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Téléphone</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        {{ order.customerPhone }}
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Email</p>
                    <p style=\"color: #0463f1; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        {{ order.customerEmail }}
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Méthode de paiement</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        {% if order.paymentMethod == 'feda_pay' %}
                            💳 FedaPay
                        {% else %}
                            {{ order.paymentMethod|capitalize }}
                        {% endif %}
                    </p>
                </div>
            </div>
            <div style=\"margin-top: 10px; padding-top: 10px; border-top: 1px solid #e5e7eb;\">
                <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Statut du paiement</p>
                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #dcfce7; color: #166534; font-weight: 700; font-size: 14px; margin-top: 4px;\">
                    ✅ PAYÉ
                </span>
            </div>
        </div>

        <!-- Résumé de la commande -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            {% for item in order.orderItems %}
                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            {{ item.productName }}
                            {% if item.productId %}
                                <span style=\"color: #94a3b8; font-size: 11px; font-weight: 400;\">
                                    (ID: {{ item.productId }})
                                </span>
                            {% endif %}
                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px; margin-top: 2px;\">
                            Quantité: {{ item.quantity }}
                            {% if item.promotionName %}
                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    🎯 {{ item.promotionName }}
                                </span>
                            {% endif %}
                        </div>
                        {% if item.notes %}
                            <div style=\"color: #64748b; font-size: 12px; margin-top: 4px; font-style: italic;\">
                                📝 {{ item.notes }}
                            </div>
                        {% endif %}
                    </div>
                    <div style=\"text-align: right;\">
                        <div style=\"font-weight: 700; color: #0f172a; font-size: 15px;\">
                            {{ item.totalPrice|number_format(0, ',', ' ') }} FCFA
                        </div>
                        <div style=\"color: #94a3b8; font-size: 11px;\">
                            {{ item.unitPrice|number_format(0, ',', ' ') }} FCFA/unité
                        </div>
                        {% if item.discountAmountValue > 0 %}
                            <div style=\"color: #16a34a; font-size: 11px;\">
                                - {{ item.discountAmountValue|number_format(0, ',', ' ') }} FCFA (remise)
                            </div>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Récapitulatif des totaux (détaillé) -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569; font-weight: 600;\">{{ order.subtotal|number_format(0, ',', ' ') }} FCFA</span>
            </div>
            {% if order.discountTotal > 0 %}
                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>🎯 Remise totale</span>
                    <span style=\"font-weight: 600;\">- {{ order.discountTotal|number_format(0, ',', ' ') }} FCFA</span>
                </div>
            {% endif %}
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 8px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 18px;\">💰 Total payé</span>
                <span style=\"font-weight: 700; color: #16a34a; font-size: 20px;\">
                    {{ order.totalAmount|number_format(0, ',', ' ') }} FCFA
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
                    <strong>{{ order.customerName }}</strong><br>
                    {{ order.deliveryAddress }}<br>
                    {% if order.deliveryCity %}{{ order.deliveryCity }}{% endif %}
                    {% if order.deliveryZipcode %} - {{ order.deliveryZipcode }}{% endif %}
                    <br>{{ order.deliveryCountry|default('Bénin') }}
                </p>
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 {{ order.customerPhone }}
                </p>
                {% if order.deliveryLatitude and order.deliveryLongitude %}
                    <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                        📍 Coordonnées GPS: {{ order.deliveryLatitude }}, {{ order.deliveryLongitude }}
                    </p>
                {% endif %}
            </div>
        {% endif %}

        <!-- Dates importantes -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 15px; margin: 20px 0;\">
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 10px;\">
                <div>
                    <p style=\"color: #94a3b8; font-size: 11px; margin: 0;\">Date de commande</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 13px; margin: 2px 0;\">
                        {{ order.createdAt|date('d/m/Y H:i') }}
                    </p>
                </div>
                <div>
                    <p style=\"color: #94a3b8; font-size: 11px; margin: 0;\">Paiement confirmé</p>
                    <p style=\"color: #16a34a; font-weight: 600; font-size: 13px; margin: 2px 0;\">
                        {{ \"now\"|date('d/m/Y H:i') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- ✅ BOUTONS D'ACTION POUR LE SUPER ADMIN -->
        <div style=\"text-align: center; margin-top: 30px; background: #f0f7ff; border-radius: 12px; padding: 25px;\">
            <p style=\"color: #475569; font-size: 14px; margin: 0 0 15px 0; font-weight: 600;\">
                🔔 Action requise : Traitez cette commande
            </p>
            <div style=\"display: flex; flex-direction: column; gap: 10px; align-items: center;\">
                <a href=\"{{ absolute_url(path('app_orders_show', {id: order.id})) }}\" 
                   style=\"display: inline-block; background: #0463f1; color: white; padding: 14px 45px; 
                          border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;
                          box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);\">
                    🔗 Voir la commande dans l'admin
                </a>
                <a href=\"{{ absolute_url(path('app_orders_index')) }}\" 
                   style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px;\">
                    📊 Accéder à la liste des commandes
                </a>
                <a href=\"{{ absolute_url(path('app_dashboard')) }}\" 
                   style=\"display: inline-block; color: #64748b; text-decoration: none; font-size: 13px;\">
                    🏠 Tableau de bord
                </a>
            </div>
        </div>

        <!-- Résumé rapide -->
        <div style=\"background: #fef3c7; border-radius: 12px; padding: 15px; margin: 20px 0; border-left: 4px solid #f59e0b;\">
            <p style=\"color: #92400e; font-size: 13px; margin: 0; text-align: center;\">
                ⚡ <strong>Action rapide :</strong> 
                Connectez-vous au back-office pour valider l'expédition de la commande #{{ order.orderNumber }}.
            </p>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0; font-weight: 600; color: #475569;\">
                {{ appName }} - Notification administrateur
            </p>
            <p style=\"margin: 5px 0;\">
                Cet email est envoyé automatiquement lors d'un nouveau paiement.
            </p>
            <p style=\"margin: 5px 0;\">
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Gérer les notifications</a>
                &nbsp;•&nbsp;
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Centre d'aide</a>
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px; color: #d1d5db;\">
                Commande #{{ order.orderNumber }} | {{ \"now\"|date('d/m/Y H:i') }}
            </p>
        </div>
    </div>
</body>
</html>", "emails/admin_order_notification.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\admin_order_notification.html.twig");
    }
}
