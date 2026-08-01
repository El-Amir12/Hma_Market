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

/* emails/order_status_update_admin.html.twig */
class __TwigTemplate_f1a2da5d20d7a0adc20d419ed428732e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_status_update_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_status_update_admin.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mise à jour de statut - Commande #";
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
                📦 Mise à jour de statut
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "orderNumber", [], "any", false, false, false, 22), "html", null, true);
        yield "
            </p>
            <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                Modifiée le ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
            </p>
        </div>

        <!-- Badge Admin -->
        <div style=\"text-align: center; margin: 10px 0 20px 0;\">
            <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #f3f4f6; color: #374151; font-weight: 600; font-size: 12px;\">
                🔐 Notification administrateur
            </span>
        </div>

        <!-- Informations client -->
        <div style=\"background: #f0f7ff; border-radius: 12px; padding: 20px; margin: 20px 0; border-left: 4px solid #0463f1;\">
            <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                👤 Informations client
            </h3>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Nom :</strong> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 42, $this->source); })()), "customerName", [], "any", false, false, false, 42), "html", null, true);
        yield "
            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Téléphone :</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "customerPhone", [], "any", false, false, false, 45), "html", null, true);
        yield "
            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Email :</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "customerEmail", [], "any", false, false, false, 48), "html", null, true);
        yield "
            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Méthode de paiement :</strong> 
                ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 52, $this->source); })()), "paymentMethod", [], "any", false, false, false, 52) == "feda_pay")) {
            // line 53
            yield "                    FedaPay
                ";
        } else {
            // line 55
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "paymentMethod", [], "any", false, false, false, 55)), "html", null, true);
            yield "
                ";
        }
        // line 57
        yield "            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Statut du paiement :</strong> 
                <span style=\"display: inline-block; padding: 2px 12px; border-radius: 50px; background: ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "paymentStatus", [], "any", false, false, false, 60) == "paid")) {
            yield "#dcfce7";
        } else {
            yield "#fef3c7";
        }
        yield "; color: ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "paymentStatus", [], "any", false, false, false, 60) == "paid")) {
            yield "#16a34a";
        } else {
            yield "#92400e";
        }
        yield "; font-weight: 600; font-size: 12px;\">
                    ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "paymentStatus", [], "any", false, false, false, 61) == "paid")) {
            yield "✅ Payé";
        } else {
            yield "⏳ En attente";
        }
        // line 62
        yield "                </span>
            </p>
        </div>

        <!-- Changement de statut -->
        <div style=\"text-align: center; padding: 20px 0; background: #f8fafc; border-radius: 12px;\">
            <div style=\"display: flex; justify-content: center; align-items: center; gap: 20px;\">
                <div>
                    <span style=\"color: #94a3b8; font-size: 12px;\">Ancien statut</span>
                    <div style=\"font-weight: 600; color: #64748b; text-decoration: line-through;\">
                        ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["oldStatusLabel"]) || array_key_exists("oldStatusLabel", $context) ? $context["oldStatusLabel"] : (function () { throw new RuntimeError('Variable "oldStatusLabel" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "
                    </div>
                </div>
                <div style=\"font-size: 24px; color: #94a3b8;\">→</div>
                <div>
                    <span style=\"color: #94a3b8; font-size: 12px;\">Nouveau statut</span>
                    <div style=\"display: inline-block; padding: 8px 24px; border-radius: 50px; 
                                background: ";
        // line 79
        if (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 79, $this->source); })()) == "pending")) {
            yield "#fef3c7";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 79, $this->source); })()) == "processing")) {
            yield "#dbeafe";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 79, $this->source); })()) == "shipped")) {
            yield "#dbeafe";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 79, $this->source); })()) == "delivered")) {
            yield "#dcfce7";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 79, $this->source); })()) == "completed")) {
            yield "#dcfce7";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 79, $this->source); })()) == "cancelled")) {
            yield "#fee2e2";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 79, $this->source); })()) == "refunded")) {
            yield "#f3f4f6";
        }
        yield ";
                                color: ";
        // line 80
        if (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 80, $this->source); })()) == "pending")) {
            yield "#92400e";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 80, $this->source); })()) == "processing")) {
            yield "#1d4ed8";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 80, $this->source); })()) == "shipped")) {
            yield "#1d4ed8";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 80, $this->source); })()) == "delivered")) {
            yield "#16a34a";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 80, $this->source); })()) == "completed")) {
            yield "#16a34a";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 80, $this->source); })()) == "cancelled")) {
            yield "#dc2626";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 80, $this->source); })()) == "refunded")) {
            yield "#374151";
        }
        yield ";
                                font-weight: 700; font-size: 16px;\">
                        ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newStatusLabel"]) || array_key_exists("newStatusLabel", $context) ? $context["newStatusLabel"] : (function () { throw new RuntimeError('Variable "newStatusLabel" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "
                    </div>
                </div>
            </div>
        </div>

        <!-- Articles commandés (version admin avec plus de détails) -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 94, $this->source); })()), "orderItems", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 95
            yield "                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 98), "html", null, true);
            yield "
                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px;\">
                            Quantité: ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 101), "html", null, true);
            yield "
                            ";
            // line 102
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "                                <span style=\"margin-left: 8px;\">ID: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 103), "html", null, true);
                yield "</span>
                            ";
            }
            // line 105
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    ";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 107), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 110
            yield "                        </div>
                        ";
            // line 111
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 112
                yield "                            <div style=\"color: #64748b; font-size: 12px; margin-top: 4px;\">
                                📝 ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 113), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 116
            yield "                    </div>
                    <div style=\"text-align: right;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 15px;\">
                            ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 119), 0, ",", " "), "html", null, true);
            yield " FCFA
                        </div>
                        <div style=\"color: #94a3b8; font-size: 11px;\">
                            ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 122), 0, ",", " "), "html", null, true);
            yield " FCFA/unité
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "        </div>

        <!-- Totaux -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569;\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 133, $this->source); })()), "subtotal", [], "any", false, false, false, 133), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 135
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 135, $this->source); })()), "discountTotal", [], "any", false, false, false, 135) > 0)) {
            // line 136
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>Remise</span>
                    <span>- ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 138, $this->source); })()), "discountTotal", [], "any", false, false, false, 138), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
            ";
        }
        // line 141
        yield "            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 6px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 16px;\">Total</span>
                <span style=\"font-weight: 700; color: #0463f1; font-size: 18px;\">
                    ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 144, $this->source); })()), "totalAmount", [], "any", false, false, false, 144), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
        </div>

        <!-- Adresse de livraison -->
        ";
        // line 150
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 150, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "            <div style=\"margin: 25px 0; background: #f8fafc; border-radius: 12px; padding: 20px;\">
                <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                    📍 Adresse de livraison
                </h3>
                <p style=\"color: #475569; font-size: 14px; margin: 0; line-height: 1.6;\">
                    ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "customerName", [], "any", false, false, false, 156), "html", null, true);
            yield "<br>
                    ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 157, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 157), "html", null, true);
            yield "<br>
                    ";
            // line 158
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 158, $this->source); })()), "deliveryCity", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 158, $this->source); })()), "deliveryCity", [], "any", false, false, false, 158), "html", null, true);
            }
            // line 159
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 159, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 159, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 159), "html", null, true);
            }
            // line 160
            yield "                    <br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 160, $this->source); })()), "deliveryCountry", [], "any", false, false, false, 160), "Bénin")) : ("Bénin")), "html", null, true);
            yield "
                </p>
                ";
            // line 162
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 162, $this->source); })()), "deliveryLatitude", [], "any", false, false, false, 162) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 162, $this->source); })()), "deliveryLongitude", [], "any", false, false, false, 162))) {
                // line 163
                yield "                    <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                        📍 Coordonnées GPS: ";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "deliveryLatitude", [], "any", false, false, false, 164), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "deliveryLongitude", [], "any", false, false, false, 164), "html", null, true);
                yield "
                    </p>
                ";
            }
            // line 167
            yield "            </div>
        ";
        }
        // line 169
        yield "
        <!-- ✅ BOUTON POUR LE SUPER ADMIN -->
        <div style=\"text-align: center; margin-top: 30px; background: #f0f7ff; border-radius: 12px; padding: 20px;\">
            <p style=\"color: #475569; font-size: 14px; margin: 0 0 15px 0;\">
                <strong>🔔 Action requise :</strong> Gérez cette commande depuis le back-office.
            </p>
            <a href=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)])), "html", null, true);
        yield "\" 
               style=\"display: inline-block; background: #0463f1; color: white; padding: 12px 40px; 
                      border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;\">
                <i class=\"fas fa-eye\" style=\"margin-right: 8px;\"></i>
                Voir la commande dans l'admin
            </a>
            <br>
            <a href=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard")), "html", null, true);
        yield "\" 
               style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px; margin-top: 15px;\">
                Accéder au tableau de bord
            </a>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0;\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 190, $this->source); })()), "html", null, true);
        yield " - Notification administrateur</p>
            <p style=\"margin: 5px 0;\">
                Cet email est envoyé automatiquement lors d'une mise à jour de statut.
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px; color: #d1d5db;\">
                Commande #";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 195, $this->source); })()), "orderNumber", [], "any", false, false, false, 195), "html", null, true);
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
        return "emails/order_status_update_admin.html.twig";
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
        return array (  435 => 195,  427 => 190,  416 => 182,  406 => 175,  398 => 169,  394 => 167,  386 => 164,  383 => 163,  381 => 162,  375 => 160,  369 => 159,  365 => 158,  361 => 157,  357 => 156,  350 => 151,  348 => 150,  339 => 144,  334 => 141,  328 => 138,  324 => 136,  322 => 135,  317 => 133,  309 => 127,  298 => 122,  292 => 119,  287 => 116,  281 => 113,  278 => 112,  276 => 111,  273 => 110,  267 => 107,  264 => 106,  261 => 105,  255 => 103,  253 => 102,  249 => 101,  243 => 98,  238 => 95,  234 => 94,  219 => 82,  200 => 80,  182 => 79,  172 => 72,  160 => 62,  154 => 61,  140 => 60,  135 => 57,  129 => 55,  125 => 53,  123 => 52,  116 => 48,  110 => 45,  104 => 42,  84 => 25,  78 => 22,  67 => 16,  56 => 8,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/order_status_update_admin.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mise à jour de statut - Commande #{{ order.orderNumber }}</title>
</head>
<body style=\"font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #f8fafc; margin: 0; padding: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 16px; padding: 40px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);\">
        
        <!-- Header -->
        <div style=\"text-align: center; padding-bottom: 30px; border-bottom: 2px solid #f1f5f9;\">
            <div style=\"margin-bottom: 15px;\">
                <img src=\"{{ appUrl ~ asset('images/logo.png') }}\" alt=\"{{ appName }}\" style=\"max-height: 60px;\">
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                📦 Mise à jour de statut
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #{{ order.orderNumber }}
            </p>
            <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                Modifiée le {{ \"now\"|date('d/m/Y à H:i') }}
            </p>
        </div>

        <!-- Badge Admin -->
        <div style=\"text-align: center; margin: 10px 0 20px 0;\">
            <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #f3f4f6; color: #374151; font-weight: 600; font-size: 12px;\">
                🔐 Notification administrateur
            </span>
        </div>

        <!-- Informations client -->
        <div style=\"background: #f0f7ff; border-radius: 12px; padding: 20px; margin: 20px 0; border-left: 4px solid #0463f1;\">
            <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                👤 Informations client
            </h3>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Nom :</strong> {{ order.customerName }}
            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Téléphone :</strong> {{ order.customerPhone }}
            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Email :</strong> {{ order.customerEmail }}
            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Méthode de paiement :</strong> 
                {% if order.paymentMethod == 'feda_pay' %}
                    FedaPay
                {% else %}
                    {{ order.paymentMethod|capitalize }}
                {% endif %}
            </p>
            <p style=\"color: #475569; font-size: 14px; margin: 5px 0;\">
                <strong>Statut du paiement :</strong> 
                <span style=\"display: inline-block; padding: 2px 12px; border-radius: 50px; background: {% if order.paymentStatus == 'paid' %}#dcfce7{% else %}#fef3c7{% endif %}; color: {% if order.paymentStatus == 'paid' %}#16a34a{% else %}#92400e{% endif %}; font-weight: 600; font-size: 12px;\">
                    {% if order.paymentStatus == 'paid' %}✅ Payé{% else %}⏳ En attente{% endif %}
                </span>
            </p>
        </div>

        <!-- Changement de statut -->
        <div style=\"text-align: center; padding: 20px 0; background: #f8fafc; border-radius: 12px;\">
            <div style=\"display: flex; justify-content: center; align-items: center; gap: 20px;\">
                <div>
                    <span style=\"color: #94a3b8; font-size: 12px;\">Ancien statut</span>
                    <div style=\"font-weight: 600; color: #64748b; text-decoration: line-through;\">
                        {{ oldStatusLabel }}
                    </div>
                </div>
                <div style=\"font-size: 24px; color: #94a3b8;\">→</div>
                <div>
                    <span style=\"color: #94a3b8; font-size: 12px;\">Nouveau statut</span>
                    <div style=\"display: inline-block; padding: 8px 24px; border-radius: 50px; 
                                background: {% if newStatus == 'pending' %}#fef3c7{% elseif newStatus == 'processing' %}#dbeafe{% elseif newStatus == 'shipped' %}#dbeafe{% elseif newStatus == 'delivered' %}#dcfce7{% elseif newStatus == 'completed' %}#dcfce7{% elseif newStatus == 'cancelled' %}#fee2e2{% elseif newStatus == 'refunded' %}#f3f4f6{% endif %};
                                color: {% if newStatus == 'pending' %}#92400e{% elseif newStatus == 'processing' %}#1d4ed8{% elseif newStatus == 'shipped' %}#1d4ed8{% elseif newStatus == 'delivered' %}#16a34a{% elseif newStatus == 'completed' %}#16a34a{% elseif newStatus == 'cancelled' %}#dc2626{% elseif newStatus == 'refunded' %}#374151{% endif %};
                                font-weight: 700; font-size: 16px;\">
                        {{ newStatusLabel }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Articles commandés (version admin avec plus de détails) -->
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
                            {% if item.productId %}
                                <span style=\"margin-left: 8px;\">ID: {{ item.productId }}</span>
                            {% endif %}
                            {% if item.promotionName %}
                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    {{ item.promotionName }}
                                </span>
                            {% endif %}
                        </div>
                        {% if item.notes %}
                            <div style=\"color: #64748b; font-size: 12px; margin-top: 4px;\">
                                📝 {{ item.notes }}
                            </div>
                        {% endif %}
                    </div>
                    <div style=\"text-align: right;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 15px;\">
                            {{ item.totalPrice|number_format(0, ',', ' ') }} FCFA
                        </div>
                        <div style=\"color: #94a3b8; font-size: 11px;\">
                            {{ item.unitPrice|number_format(0, ',', ' ') }} FCFA/unité
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Totaux -->
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
                <span style=\"font-weight: 700; color: #0f172a; font-size: 16px;\">Total</span>
                <span style=\"font-weight: 700; color: #0463f1; font-size: 18px;\">
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
                    {{ order.customerName }}<br>
                    {{ order.deliveryAddress }}<br>
                    {% if order.deliveryCity %}{{ order.deliveryCity }}{% endif %}
                    {% if order.deliveryZipcode %} - {{ order.deliveryZipcode }}{% endif %}
                    <br>{{ order.deliveryCountry|default('Bénin') }}
                </p>
                {% if order.deliveryLatitude and order.deliveryLongitude %}
                    <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                        📍 Coordonnées GPS: {{ order.deliveryLatitude }}, {{ order.deliveryLongitude }}
                    </p>
                {% endif %}
            </div>
        {% endif %}

        <!-- ✅ BOUTON POUR LE SUPER ADMIN -->
        <div style=\"text-align: center; margin-top: 30px; background: #f0f7ff; border-radius: 12px; padding: 20px;\">
            <p style=\"color: #475569; font-size: 14px; margin: 0 0 15px 0;\">
                <strong>🔔 Action requise :</strong> Gérez cette commande depuis le back-office.
            </p>
            <a href=\"{{ absolute_url(path('app_orders_show', {id: order.id})) }}\" 
               style=\"display: inline-block; background: #0463f1; color: white; padding: 12px 40px; 
                      border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;\">
                <i class=\"fas fa-eye\" style=\"margin-right: 8px;\"></i>
                Voir la commande dans l'admin
            </a>
            <br>
            <a href=\"{{ absolute_url(path('app_dashboard')) }}\" 
               style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px; margin-top: 15px;\">
                Accéder au tableau de bord
            </a>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0;\">{{ appName }} - Notification administrateur</p>
            <p style=\"margin: 5px 0;\">
                Cet email est envoyé automatiquement lors d'une mise à jour de statut.
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px; color: #d1d5db;\">
                Commande #{{ order.orderNumber }} | {{ \"now\"|date('d/m/Y H:i') }}
            </p>
        </div>
    </div>
</body>
</html>", "emails/order_status_update_admin.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\order_status_update_admin.html.twig");
    }
}
