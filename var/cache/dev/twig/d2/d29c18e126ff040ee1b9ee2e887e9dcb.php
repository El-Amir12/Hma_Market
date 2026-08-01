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
class __TwigTemplate_1a97e2ab2c7b3cb6852a4409f7ffcefd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_status_update_customer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_status_update_customer.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["appUrl"]) || array_key_exists("appUrl", $context) ? $context["appUrl"] : (function () { throw new RuntimeError('Variable "appUrl" does not exist.', 16, $this->source); })()) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" style=\"max-height: 60px;\">
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                🔔 Mise à jour de votre commande
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "orderNumber", [], "any", false, false, false, 22), "html", null, true);
        yield "
            </p>
        </div>

        <!-- Message personnalisé selon le statut -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <p style=\"color: #475569; font-size: 16px; margin: 0;\">
                Bonjour <strong>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "customerName", [], "any", false, false, false, 29), "html", null, true);
        yield "</strong>,
            </p>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 10px;\">
                ";
        // line 32
        if (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 32, $this->source); })()) == "pending")) {
            // line 33
            yield "                    Votre commande est en attente de validation.
                ";
        } elseif ((        // line 34
(isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 34, $this->source); })()) == "processing")) {
            // line 35
            yield "                    Votre commande est en cours de préparation.
                ";
        } elseif ((        // line 36
(isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 36, $this->source); })()) == "shipped")) {
            // line 37
            yield "                    Votre commande a été expédiée !
                ";
        } elseif ((        // line 38
(isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 38, $this->source); })()) == "delivered")) {
            // line 39
            yield "                    Votre commande a été livrée avec succès.
                ";
        } elseif ((        // line 40
(isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 40, $this->source); })()) == "completed")) {
            // line 41
            yield "                    Votre commande est terminée. Merci pour votre achat !
                ";
        } elseif ((        // line 42
(isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 42, $this->source); })()) == "cancelled")) {
            // line 43
            yield "                    Votre commande a été annulée.
                ";
        } elseif ((        // line 44
(isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 44, $this->source); })()) == "refunded")) {
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
        if (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 55, $this->source); })()) == "pending")) {
            yield "#fef3c7";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 55, $this->source); })()) == "processing")) {
            yield "#dbeafe";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 55, $this->source); })()) == "shipped")) {
            yield "#dbeafe";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 55, $this->source); })()) == "delivered")) {
            yield "#dcfce7";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 55, $this->source); })()) == "completed")) {
            yield "#dcfce7";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 55, $this->source); })()) == "cancelled")) {
            yield "#fee2e2";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 55, $this->source); })()) == "refunded")) {
            yield "#f3f4f6";
        }
        yield ";
                        color: ";
        // line 56
        if (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 56, $this->source); })()) == "pending")) {
            yield "#92400e";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 56, $this->source); })()) == "processing")) {
            yield "#1d4ed8";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 56, $this->source); })()) == "shipped")) {
            yield "#1d4ed8";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 56, $this->source); })()) == "delivered")) {
            yield "#16a34a";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 56, $this->source); })()) == "completed")) {
            yield "#16a34a";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 56, $this->source); })()) == "cancelled")) {
            yield "#dc2626";
        } elseif (((isset($context["newStatus"]) || array_key_exists("newStatus", $context) ? $context["newStatus"] : (function () { throw new RuntimeError('Variable "newStatus" does not exist.', 56, $this->source); })()) == "refunded")) {
            yield "#374151";
        }
        yield ";
                        font-weight: 700; font-size: 18px;\">
                ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newStatusLabel"]) || array_key_exists("newStatusLabel", $context) ? $context["newStatusLabel"] : (function () { throw new RuntimeError('Variable "newStatusLabel" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "
            </div>
            <p style=\"color: #94a3b8; font-size: 14px; margin-top: 10px;\">
                Ancien statut : <span style=\"text-decoration: line-through;\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["oldStatusLabel"]) || array_key_exists("oldStatusLabel", $context) ? $context["oldStatusLabel"] : (function () { throw new RuntimeError('Variable "oldStatusLabel" does not exist.', 61, $this->source); })()), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 71, $this->source); })()), "orderItems", [], "any", false, false, false, 71));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 97, $this->source); })()), "subtotal", [], "any", false, false, false, 97), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 99, $this->source); })()), "discountTotal", [], "any", false, false, false, 99) > 0)) {
            // line 100
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>Remise</span>
                    <span>- ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 102, $this->source); })()), "discountTotal", [], "any", false, false, false, 102), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 108, $this->source); })()), "totalAmount", [], "any", false, false, false, 108), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
        </div>

        <!-- Adresse de livraison -->
        ";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 114, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "            <div style=\"margin: 25px 0; background: #f8fafc; border-radius: 12px; padding: 20px;\">
                <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                    📍 Adresse de livraison
                </h3>
                <p style=\"color: #475569; font-size: 14px; margin: 0; line-height: 1.6;\">
                    ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 120, $this->source); })()), "customerName", [], "any", false, false, false, 120), "html", null, true);
            yield "<br>
                    ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 121, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 121), "html", null, true);
            yield "<br>
                    ";
            // line 122
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "deliveryCity", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "deliveryCity", [], "any", false, false, false, 122), "html", null, true);
            }
            // line 123
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 123, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 123, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 123), "html", null, true);
            }
            // line 124
            yield "                    <br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 124, $this->source); })()), "deliveryCountry", [], "any", false, false, false, 124), "Bénin")) : ("Bénin")), "html", null, true);
            yield "
                </p>
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 127, $this->source); })()), "customerPhone", [], "any", false, false, false, 127), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_order_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)])), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 149, $this->source); })()), "html", null, true);
        yield " - Votre marketplace de confiance</p>
            <p style=\"margin: 5px 0;\">
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Conditions générales</a>
                &nbsp;•&nbsp;
                <a href=\"#\" style=\"color: #94a3b8; text-decoration: none;\">Contact</a>
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px;\">
                Cet email a été envoyé à ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "customerEmail", [], "any", false, false, false, 156), "html", null, true);
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
        return array (  356 => 156,  346 => 149,  335 => 141,  325 => 134,  320 => 131,  313 => 127,  306 => 124,  300 => 123,  296 => 122,  292 => 121,  288 => 120,  281 => 115,  279 => 114,  270 => 108,  265 => 105,  259 => 102,  255 => 100,  253 => 99,  248 => 97,  240 => 91,  230 => 87,  225 => 84,  219 => 81,  216 => 80,  214 => 79,  210 => 78,  204 => 75,  199 => 72,  195 => 71,  182 => 61,  176 => 58,  157 => 56,  139 => 55,  131 => 49,  127 => 47,  123 => 45,  121 => 44,  118 => 43,  116 => 42,  113 => 41,  111 => 40,  108 => 39,  106 => 38,  103 => 37,  101 => 36,  98 => 35,  96 => 34,  93 => 33,  91 => 32,  85 => 29,  75 => 22,  64 => 16,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/order_status_update_customer.html.twig #}

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
                <img src=\"{{ appUrl ~ asset('images/logo.png') }}\" alt=\"{{ appName }}\" style=\"max-height: 60px;\">
            </div>
            <h1 style=\"color: #0f172a; font-size: 24px; margin: 0;\">
                🔔 Mise à jour de votre commande
            </h1>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 5px;\">
                Commande #{{ order.orderNumber }}
            </p>
        </div>

        <!-- Message personnalisé selon le statut -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <p style=\"color: #475569; font-size: 16px; margin: 0;\">
                Bonjour <strong>{{ order.customerName }}</strong>,
            </p>
            <p style=\"color: #64748b; font-size: 14px; margin-top: 10px;\">
                {% if newStatus == 'pending' %}
                    Votre commande est en attente de validation.
                {% elseif newStatus == 'processing' %}
                    Votre commande est en cours de préparation.
                {% elseif newStatus == 'shipped' %}
                    Votre commande a été expédiée !
                {% elseif newStatus == 'delivered' %}
                    Votre commande a été livrée avec succès.
                {% elseif newStatus == 'completed' %}
                    Votre commande est terminée. Merci pour votre achat !
                {% elseif newStatus == 'cancelled' %}
                    Votre commande a été annulée.
                {% elseif newStatus == 'refunded' %}
                    Votre commande a été remboursée.
                {% else %}
                    Le statut de votre commande a été mis à jour.
                {% endif %}
            </p>
        </div>

        <!-- Statut -->
        <div style=\"text-align: center; padding: 20px 0;\">
            <div style=\"display: inline-block; padding: 10px 30px; border-radius: 50px; 
                        background: {% if newStatus == 'pending' %}#fef3c7{% elseif newStatus == 'processing' %}#dbeafe{% elseif newStatus == 'shipped' %}#dbeafe{% elseif newStatus == 'delivered' %}#dcfce7{% elseif newStatus == 'completed' %}#dcfce7{% elseif newStatus == 'cancelled' %}#fee2e2{% elseif newStatus == 'refunded' %}#f3f4f6{% endif %};
                        color: {% if newStatus == 'pending' %}#92400e{% elseif newStatus == 'processing' %}#1d4ed8{% elseif newStatus == 'shipped' %}#1d4ed8{% elseif newStatus == 'delivered' %}#16a34a{% elseif newStatus == 'completed' %}#16a34a{% elseif newStatus == 'cancelled' %}#dc2626{% elseif newStatus == 'refunded' %}#374151{% endif %};
                        font-weight: 700; font-size: 18px;\">
                {{ newStatusLabel }}
            </div>
            <p style=\"color: #94a3b8; font-size: 14px; margin-top: 10px;\">
                Ancien statut : <span style=\"text-decoration: line-through;\">{{ oldStatusLabel }}</span>
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
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 {{ order.customerPhone }}
                </p>
            </div>
        {% endif %}

        <!-- ✅ BOUTON POUR LE CLIENT -->
        <div style=\"text-align: center; margin-top: 30px;\">
            <a href=\"{{ absolute_url(path('marketplace_order_detail', {id: order.id})) }}\" 
               style=\"display: inline-block; background: #0463f1; color: white; padding: 12px 40px; 
                      border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;\">
                <i class=\"fas fa-eye\" style=\"margin-right: 8px;\"></i>
                Voir ma commande
            </a>
            <br>
            <a href=\"{{ absolute_url(path('marketplace_products')) }}\" 
               style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px; margin-top: 15px;\">
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
</html>", "emails/order_status_update_customer.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\order_status_update_customer.html.twig");
    }
}
