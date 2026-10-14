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
class __TwigTemplate_ced5c25fc338ed28e01a314410c054c4 extends Template
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

        <!-- ⚠️ ALERTE RUPTURE DE STOCK -->
        ";
        // line 37
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 37, $this->source); })())))) {
            // line 38
            yield "        <div style=\"background: #fef2f2; border-radius: 12px; padding: 20px; margin: 20px 0; border: 2px solid #dc2626;\">
            <div style=\"display: flex; align-items: center; gap: 12px; margin-bottom: 15px;\">
                <span style=\"font-size: 2rem;\">🚨</span>
                <div>
                    <h2 style=\"color: #991b1b; font-size: 18px; margin: 0; font-weight: 800;\">
                        RUPTURE DE STOCK DÉTECTÉE
                    </h2>
                    <p style=\"color: #64748b; font-size: 13px; margin: 5px 0 0 0;\">
                        ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 46, $this->source); })())), "html", null, true);
            yield " produit(s) en rupture de stock dans cette commande
                    </p>
                </div>
            </div>
            
            <!-- Liste des produits en rupture -->
            <div style=\"margin-top: 10px;\">
                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
                // line 54
                yield "                <div style=\"display: flex; align-items: center; padding: 12px 16px; background: #fee2e2; border-radius: 8px; margin-bottom: 8px; border-left: 4px solid #dc2626;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 700; color: #991b1b; font-size: 14px;\">
                            ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "product_name", [], "any", false, false, false, 57), "html", null, true);
                yield "
                            ";
                // line 58
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "product_id", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 59
                    yield "                                <span style=\"color: #94a3b8; font-size: 11px; font-weight: 400;\">
                                    (ID: ";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "product_id", [], "any", false, false, false, 60), "html", null, true);
                    yield ")
                                </span>
                            ";
                }
                // line 63
                yield "                        </div>
                        <div style=\"display: flex; gap: 20px; margin-top: 4px;\">
                            <div>
                                <span style=\"color: #64748b; font-size: 11px;\">Quantité commandée</span>
                                <div style=\"font-weight: 700; color: #dc2626; font-size: 15px;\">
                                    ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "quantity_requested", [], "any", false, false, false, 68), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "unit", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "unit", [], "any", false, false, false, 68), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                yield "
                                </div>
                            </div>
                            <div>
                                <span style=\"color: #64748b; font-size: 11px;\">Stock disponible</span>
                                <div style=\"font-weight: 700; color: #dc2626; font-size: 15px;\">
                                    ";
                // line 74
                if (CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "available_stock", [], "any", true, true, false, 74)) {
                    // line 75
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "available_stock", [], "any", false, false, false, 75), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "unit", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "unit", [], "any", false, false, false, 75), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 77
                    yield "                                        0 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "unit", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "unit", [], "any", false, false, false, 77), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                    yield "
                                    ";
                }
                // line 79
                yield "                                </div>
                            </div>
                            ";
                // line 81
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "error", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "                            <div>
                                <span style=\"color: #64748b; font-size: 11px;\">Erreur</span>
                                <div style=\"font-weight: 600; color: #dc2626; font-size: 12px;\">
                                    ";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "error", [], "any", false, false, false, 85), "html", null, true);
                    yield "
                                </div>
                            </div>
                            ";
                }
                // line 89
                yield "                        </div>
                    </div>
                    <div style=\"text-align: right;\">
                        <span style=\"display: inline-block; padding: 2px 12px; background: #dc2626; color: white; border-radius: 50px; font-size: 11px; font-weight: 700;\">
                            RUPTURE
                        </span>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['issue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "            </div>
            
            <!-- Message d'action -->
            <div style=\"background: #fef3c7; border-radius: 8px; padding: 12px 16px; margin-top: 12px;\">
                <p style=\"color: #92400e; font-size: 13px; margin: 0;\">
                    <strong>📋 Action recommandée :</strong> 
                    Contacter le fournisseur pour commander les produits en rupture et informer le client du délai supplémentaire.
                </p>
            </div>
        </div>
        ";
        }
        // line 109
        yield "
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
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 119, $this->source); })()), "customerName", [], "any", false, false, false, 119), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Téléphone</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 125, $this->source); })()), "customerPhone", [], "any", false, false, false, 125), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Email</p>
                    <p style=\"color: #0463f1; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 131, $this->source); })()), "customerEmail", [], "any", false, false, false, 131), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Méthode de paiement</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 14px; margin: 2px 0;\">
                        ";
        // line 137
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 137, $this->source); })()), "paymentMethod", [], "any", false, false, false, 137) == "feda_pay")) {
            // line 138
            yield "                            💳 FedaPay
                        ";
        } else {
            // line 140
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 140, $this->source); })()), "paymentMethod", [], "any", false, false, false, 140)), "html", null, true);
            yield "
                        ";
        }
        // line 142
        yield "                    </p>
                </div>
            </div>
            <div style=\"margin-top: 10px; padding-top: 10px; border-top: 1px solid #e5e7eb;\">
                <p style=\"color: #64748b; font-size: 12px; margin: 0;\">Statut du paiement</p>
                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #dcfce7; color: #166534; font-weight: 700; font-size: 14px; margin-top: 4px;\">
                    ✅ PAYÉ
                </span>
                ";
        // line 150
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 150, $this->source); })()), "status", [], "any", false, false, false, 150) == "pending") && array_key_exists("stockIssues", $context)) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 150, $this->source); })())))) {
            // line 151
            yield "                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #fef3c7; color: #92400e; font-weight: 700; font-size: 14px; margin-top: 4px; margin-left: 8px;\">
                    ⚠️ EN ATTENTE (rupture)
                </span>
                ";
        }
        // line 155
        yield "            </div>
        </div>

        <!-- Résumé de la commande avec indicateur de rupture -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "orderItems", [], "any", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 165
            yield "                ";
            $context["isOutOfStock"] = false;
            // line 166
            yield "                ";
            if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 166, $this->source); })())))) {
                // line 167
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 167, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
                    // line 168
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "product_id", [], "any", false, false, false, 168) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 168)) || (CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "product_name", [], "any", false, false, false, 168) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 168)))) {
                        // line 169
                        yield "                            ";
                        $context["isOutOfStock"] = true;
                        // line 170
                        yield "                        ";
                    }
                    // line 171
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['issue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                yield "                ";
            }
            // line 173
            yield "                
                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9; ";
            // line 174
            if ((($tmp = (isset($context["isOutOfStock"]) || array_key_exists("isOutOfStock", $context) ? $context["isOutOfStock"] : (function () { throw new RuntimeError('Variable "isOutOfStock" does not exist.', 174, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "background: #fef2f2; padding-left: 12px; border-radius: 6px;";
            }
            yield "\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 177), "html", null, true);
            yield "
                            ";
            // line 178
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "                                <span style=\"color: #94a3b8; font-size: 11px; font-weight: 400;\">
                                    (ID: ";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 180), "html", null, true);
                yield ")
                                </span>
                            ";
            }
            // line 183
            yield "                            ";
            if ((($tmp = (isset($context["isOutOfStock"]) || array_key_exists("isOutOfStock", $context) ? $context["isOutOfStock"] : (function () { throw new RuntimeError('Variable "isOutOfStock" does not exist.', 183, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 184
                yield "                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dc2626; color: white; border-radius: 50px; font-size: 10px; font-weight: 700;\">
                                    RUPTURE
                                </span>
                            ";
            }
            // line 188
            yield "                        </div>
                        <div style=\"color: #94a3b8; font-size: 12px; margin-top: 2px;\">
                            Quantité: ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 190), "html", null, true);
            yield "
                            ";
            // line 191
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 192
                yield "                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dcfce7; color: #16a34a; border-radius: 4px; font-size: 11px; font-weight: 600;\">
                                    🎯 ";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 193), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 196
            yield "                        </div>
                        ";
            // line 197
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 198
                yield "                            <div style=\"color: #64748b; font-size: 12px; margin-top: 4px; font-style: italic;\">
                                📝 ";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 199), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 202
            yield "                        ";
            if ((($tmp = (isset($context["isOutOfStock"]) || array_key_exists("isOutOfStock", $context) ? $context["isOutOfStock"] : (function () { throw new RuntimeError('Variable "isOutOfStock" does not exist.', 202, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 203
                yield "                            <div style=\"color: #dc2626; font-size: 11px; margin-top: 4px; font-weight: 600;\">
                                ⚠️ Produit en rupture de stock - Commande en attente
                            </div>
                        ";
            }
            // line 207
            yield "                    </div>
                    <div style=\"text-align: right;\">
                        <div style=\"font-weight: 700; color: #0f172a; font-size: 15px;\">
                            ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 210), 0, ",", " "), "html", null, true);
            yield " FCFA
                        </div>
                        <div style=\"color: #94a3b8; font-size: 11px;\">
                            ";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 213), 0, ",", " "), "html", null, true);
            yield " FCFA/unité
                        </div>
                        ";
            // line 215
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discountAmountValue", [], "any", false, false, false, 215) > 0)) {
                // line 216
                yield "                            <div style=\"color: #16a34a; font-size: 11px;\">
                                - ";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discountAmountValue", [], "any", false, false, false, 217), 0, ",", " "), "html", null, true);
                yield " FCFA (remise)
                            </div>
                        ";
            }
            // line 220
            yield "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "        </div>

        <!-- Récapitulatif des totaux (détaillé) -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 20px;\">
            <div style=\"display: flex; justify-content: space-between; padding: 6px 0;\">
                <span style=\"color: #64748b;\">Sous-total</span>
                <span style=\"color: #475569; font-weight: 600;\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 229, $this->source); })()), "subtotal", [], "any", false, false, false, 229), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            ";
        // line 231
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 231, $this->source); })()), "discountTotal", [], "any", false, false, false, 231) > 0)) {
            // line 232
            yield "                <div style=\"display: flex; justify-content: space-between; padding: 6px 0; color: #16a34a;\">
                    <span>🎯 Remise totale</span>
                    <span style=\"font-weight: 600;\">- ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 234, $this->source); })()), "discountTotal", [], "any", false, false, false, 234), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                </div>
            ";
        }
        // line 237
        yield "            <div style=\"display: flex; justify-content: space-between; padding: 6px 0; border-top: 2px solid #e5e7eb; margin-top: 8px; padding-top: 12px;\">
                <span style=\"font-weight: 700; color: #0f172a; font-size: 18px;\">💰 Total payé</span>
                <span style=\"font-weight: 700; color: #16a34a; font-size: 20px;\">
                    ";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 240, $this->source); })()), "totalAmount", [], "any", false, false, false, 240), 0, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
        </div>

        <!-- Adresse de livraison -->
        ";
        // line 246
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 246, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "            <div style=\"margin: 25px 0; background: #f8fafc; border-radius: 12px; padding: 20px;\">
                <h3 style=\"font-size: 14px; color: #0f172a; margin: 0 0 10px 0;\">
                    📍 Adresse de livraison
                </h3>
                <p style=\"color: #475569; font-size: 14px; margin: 0; line-height: 1.6;\">
                    <strong>";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 252, $this->source); })()), "customerName", [], "any", false, false, false, 252), "html", null, true);
            yield "</strong><br>
                    ";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 253, $this->source); })()), "deliveryAddress", [], "any", false, false, false, 253), "html", null, true);
            yield "<br>
                    ";
            // line 254
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 254, $this->source); })()), "deliveryCity", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 254, $this->source); })()), "deliveryCity", [], "any", false, false, false, 254), "html", null, true);
            }
            // line 255
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 255, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 255)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 255, $this->source); })()), "deliveryZipcode", [], "any", false, false, false, 255), "html", null, true);
            }
            // line 256
            yield "                    <br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "deliveryCountry", [], "any", true, true, false, 256)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 256, $this->source); })()), "deliveryCountry", [], "any", false, false, false, 256), "Bénin")) : ("Bénin")), "html", null, true);
            yield "
                </p>
                <p style=\"color: #64748b; font-size: 13px; margin-top: 10px;\">
                    📞 ";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 259, $this->source); })()), "customerPhone", [], "any", false, false, false, 259), "html", null, true);
            yield "
                </p>
                ";
            // line 261
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 261, $this->source); })()), "deliveryLatitude", [], "any", false, false, false, 261) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 261, $this->source); })()), "deliveryLongitude", [], "any", false, false, false, 261))) {
                // line 262
                yield "                    <p style=\"color: #94a3b8; font-size: 12px; margin-top: 5px;\">
                        📍 Coordonnées GPS: ";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 263, $this->source); })()), "deliveryLatitude", [], "any", false, false, false, 263), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 263, $this->source); })()), "deliveryLongitude", [], "any", false, false, false, 263), "html", null, true);
                yield "
                    </p>
                ";
            }
            // line 266
            yield "            </div>
        ";
        }
        // line 268
        yield "
        <!-- Dates importantes -->
        <div style=\"background: #f8fafc; border-radius: 12px; padding: 15px; margin: 20px 0;\">
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 10px;\">
                <div>
                    <p style=\"color: #94a3b8; font-size: 11px; margin: 0;\">Date de commande</p>
                    <p style=\"color: #0f172a; font-weight: 600; font-size: 13px; margin: 2px 0;\">
                        ";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 275, $this->source); })()), "createdAt", [], "any", false, false, false, 275), "d/m/Y H:i"), "html", null, true);
        yield "
                    </p>
                </div>
                <div>
                    <p style=\"color: #94a3b8; font-size: 11px; margin: 0;\">Paiement confirmé</p>
                    <p style=\"color: #16a34a; font-weight: 600; font-size: 13px; margin: 2px 0;\">
                        ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
                    </p>
                </div>
            </div>
        </div>

        <!-- ✅ BOUTONS D'ACTION POUR LE SUPER ADMIN -->
        <div style=\"text-align: center; margin-top: 30px; background: ";
        // line 288
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 288, $this->source); })())))) {
            yield "#fef2f2";
        } else {
            yield "#f0f7ff";
        }
        yield "; border-radius: 12px; padding: 25px;\">
            <p style=\"color: #475569; font-size: 14px; margin: 0 0 15px 0; font-weight: 600;\">
                ";
        // line 290
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 290, $this->source); })())))) {
            // line 291
            yield "                    🚨 Action urgente : Rupture de stock détectée
                ";
        } else {
            // line 293
            yield "                    🔔 Action requise : Traitez cette commande
                ";
        }
        // line 295
        yield "            </p>
            <div style=\"display: flex; flex-direction: column; gap: 10px; align-items: center;\">
                <a href=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 297, $this->source); })()), "id", [], "any", false, false, false, 297)])), "html", null, true);
        yield "\" 
                   style=\"display: inline-block; background: ";
        // line 298
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 298, $this->source); })())))) {
            yield "#dc2626";
        } else {
            yield "#0463f1";
        }
        yield "; color: white; padding: 14px 45px; 
                          border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;
                          box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);\">
                    🔗 Voir la commande dans l'admin
                </a>
                <a href=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index")), "html", null, true);
        yield "\" 
                   style=\"display: inline-block; color: #0463f1; text-decoration: none; font-weight: 600; font-size: 14px;\">
                    📊 Accéder à la liste des commandes
                </a>
                <a href=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard")), "html", null, true);
        yield "\" 
                   style=\"display: inline-block; color: #64748b; text-decoration: none; font-size: 13px;\">
                    🏠 Tableau de bord
                </a>
            </div>
        </div>

        <!-- Résumé rapide avec statut -->
        <div style=\"background: ";
        // line 315
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 315, $this->source); })())))) {
            yield "#fef2f2";
        } else {
            yield "#fef3c7";
        }
        yield "; border-radius: 12px; padding: 15px; margin: 20px 0; border-left: 4px solid ";
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 315, $this->source); })())))) {
            yield "#dc2626";
        } else {
            yield "#f59e0b";
        }
        yield ";\">
            <p style=\"color: ";
        // line 316
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 316, $this->source); })())))) {
            yield "#991b1b";
        } else {
            yield "#92400e";
        }
        yield "; font-size: 13px; margin: 0; text-align: center;\">
                ";
        // line 317
        if ((array_key_exists("stockIssues", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 317, $this->source); })())))) {
            // line 318
            yield "                    🚨 <strong>Action urgente :</strong> 
                    ";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stockIssues"]) || array_key_exists("stockIssues", $context) ? $context["stockIssues"] : (function () { throw new RuntimeError('Variable "stockIssues" does not exist.', 319, $this->source); })())), "html", null, true);
            yield " produit(s) en rupture de stock. 
                    Contactez le fournisseur et informez le client.
                ";
        } else {
            // line 322
            yield "                    ⚡ <strong>Action rapide :</strong> 
                    Connectez-vous au back-office pour valider l'expédition de la commande #";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 323, $this->source); })()), "orderNumber", [], "any", false, false, false, 323), "html", null, true);
            yield ".
                ";
        }
        // line 325
        yield "            </p>
        </div>

        <!-- Footer -->
        <div style=\"text-align: center; padding-top: 30px; border-top: 2px solid #f1f5f9; color: #94a3b8; font-size: 12px;\">
            <p style=\"margin: 0; font-weight: 600; color: #475569;\">
                ";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 331, $this->source); })()), "html", null, true);
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
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 342, $this->source); })()), "orderNumber", [], "any", false, false, false, 342), "html", null, true);
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
        return array (  692 => 342,  678 => 331,  670 => 325,  665 => 323,  662 => 322,  656 => 319,  653 => 318,  651 => 317,  643 => 316,  629 => 315,  618 => 307,  611 => 303,  599 => 298,  595 => 297,  591 => 295,  587 => 293,  583 => 291,  581 => 290,  572 => 288,  562 => 281,  553 => 275,  544 => 268,  540 => 266,  532 => 263,  529 => 262,  527 => 261,  522 => 259,  515 => 256,  509 => 255,  505 => 254,  501 => 253,  497 => 252,  490 => 247,  488 => 246,  479 => 240,  474 => 237,  468 => 234,  464 => 232,  462 => 231,  457 => 229,  449 => 223,  441 => 220,  435 => 217,  432 => 216,  430 => 215,  425 => 213,  419 => 210,  414 => 207,  408 => 203,  405 => 202,  399 => 199,  396 => 198,  394 => 197,  391 => 196,  385 => 193,  382 => 192,  380 => 191,  376 => 190,  372 => 188,  366 => 184,  363 => 183,  357 => 180,  354 => 179,  352 => 178,  348 => 177,  340 => 174,  337 => 173,  334 => 172,  328 => 171,  325 => 170,  322 => 169,  319 => 168,  314 => 167,  311 => 166,  308 => 165,  304 => 164,  293 => 155,  287 => 151,  285 => 150,  275 => 142,  269 => 140,  265 => 138,  263 => 137,  254 => 131,  245 => 125,  236 => 119,  224 => 109,  211 => 98,  197 => 89,  190 => 85,  185 => 82,  183 => 81,  179 => 79,  173 => 77,  165 => 75,  163 => 74,  152 => 68,  145 => 63,  139 => 60,  136 => 59,  134 => 58,  130 => 57,  125 => 54,  121 => 53,  111 => 46,  101 => 38,  99 => 37,  84 => 25,  78 => 22,  67 => 16,  56 => 8,  48 => 2,);
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

        <!-- ⚠️ ALERTE RUPTURE DE STOCK -->
        {% if stockIssues is defined and stockIssues is not empty %}
        <div style=\"background: #fef2f2; border-radius: 12px; padding: 20px; margin: 20px 0; border: 2px solid #dc2626;\">
            <div style=\"display: flex; align-items: center; gap: 12px; margin-bottom: 15px;\">
                <span style=\"font-size: 2rem;\">🚨</span>
                <div>
                    <h2 style=\"color: #991b1b; font-size: 18px; margin: 0; font-weight: 800;\">
                        RUPTURE DE STOCK DÉTECTÉE
                    </h2>
                    <p style=\"color: #64748b; font-size: 13px; margin: 5px 0 0 0;\">
                        {{ stockIssues|length }} produit(s) en rupture de stock dans cette commande
                    </p>
                </div>
            </div>
            
            <!-- Liste des produits en rupture -->
            <div style=\"margin-top: 10px;\">
                {% for issue in stockIssues %}
                <div style=\"display: flex; align-items: center; padding: 12px 16px; background: #fee2e2; border-radius: 8px; margin-bottom: 8px; border-left: 4px solid #dc2626;\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 700; color: #991b1b; font-size: 14px;\">
                            {{ issue.product_name }}
                            {% if issue.product_id %}
                                <span style=\"color: #94a3b8; font-size: 11px; font-weight: 400;\">
                                    (ID: {{ issue.product_id }})
                                </span>
                            {% endif %}
                        </div>
                        <div style=\"display: flex; gap: 20px; margin-top: 4px;\">
                            <div>
                                <span style=\"color: #64748b; font-size: 11px;\">Quantité commandée</span>
                                <div style=\"font-weight: 700; color: #dc2626; font-size: 15px;\">
                                    {{ issue.quantity_requested }} {{ issue.unit|default('pièce(s)') }}
                                </div>
                            </div>
                            <div>
                                <span style=\"color: #64748b; font-size: 11px;\">Stock disponible</span>
                                <div style=\"font-weight: 700; color: #dc2626; font-size: 15px;\">
                                    {% if issue.available_stock is defined %}
                                        {{ issue.available_stock }} {{ issue.unit|default('pièce(s)') }}
                                    {% else %}
                                        0 {{ issue.unit|default('pièce(s)') }}
                                    {% endif %}
                                </div>
                            </div>
                            {% if issue.error %}
                            <div>
                                <span style=\"color: #64748b; font-size: 11px;\">Erreur</span>
                                <div style=\"font-weight: 600; color: #dc2626; font-size: 12px;\">
                                    {{ issue.error }}
                                </div>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                    <div style=\"text-align: right;\">
                        <span style=\"display: inline-block; padding: 2px 12px; background: #dc2626; color: white; border-radius: 50px; font-size: 11px; font-weight: 700;\">
                            RUPTURE
                        </span>
                    </div>
                </div>
                {% endfor %}
            </div>
            
            <!-- Message d'action -->
            <div style=\"background: #fef3c7; border-radius: 8px; padding: 12px 16px; margin-top: 12px;\">
                <p style=\"color: #92400e; font-size: 13px; margin: 0;\">
                    <strong>📋 Action recommandée :</strong> 
                    Contacter le fournisseur pour commander les produits en rupture et informer le client du délai supplémentaire.
                </p>
            </div>
        </div>
        {% endif %}

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
                {% if order.status == 'pending' and stockIssues is defined and stockIssues is not empty %}
                <span style=\"display: inline-block; padding: 4px 16px; border-radius: 50px; background: #fef3c7; color: #92400e; font-weight: 700; font-size: 14px; margin-top: 4px; margin-left: 8px;\">
                    ⚠️ EN ATTENTE (rupture)
                </span>
                {% endif %}
            </div>
        </div>

        <!-- Résumé de la commande avec indicateur de rupture -->
        <div style=\"margin: 25px 0;\">
            <h3 style=\"font-size: 16px; color: #0f172a; margin: 0 0 15px 0;\">
                📦 Articles commandés
            </h3>
            
            {% for item in order.orderItems %}
                {% set isOutOfStock = false %}
                {% if stockIssues is defined and stockIssues is not empty %}
                    {% for issue in stockIssues %}
                        {% if issue.product_id == item.productId or issue.product_name == item.productName %}
                            {% set isOutOfStock = true %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                
                <div style=\"display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9; {% if isOutOfStock %}background: #fef2f2; padding-left: 12px; border-radius: 6px;{% endif %}\">
                    <div style=\"flex: 1;\">
                        <div style=\"font-weight: 600; color: #0f172a; font-size: 14px;\">
                            {{ item.productName }}
                            {% if item.productId %}
                                <span style=\"color: #94a3b8; font-size: 11px; font-weight: 400;\">
                                    (ID: {{ item.productId }})
                                </span>
                            {% endif %}
                            {% if isOutOfStock %}
                                <span style=\"display: inline-block; margin-left: 8px; padding: 0 8px; background: #dc2626; color: white; border-radius: 50px; font-size: 10px; font-weight: 700;\">
                                    RUPTURE
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
                        {% if isOutOfStock %}
                            <div style=\"color: #dc2626; font-size: 11px; margin-top: 4px; font-weight: 600;\">
                                ⚠️ Produit en rupture de stock - Commande en attente
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
        <div style=\"text-align: center; margin-top: 30px; background: {% if stockIssues is defined and stockIssues is not empty %}#fef2f2{% else %}#f0f7ff{% endif %}; border-radius: 12px; padding: 25px;\">
            <p style=\"color: #475569; font-size: 14px; margin: 0 0 15px 0; font-weight: 600;\">
                {% if stockIssues is defined and stockIssues is not empty %}
                    🚨 Action urgente : Rupture de stock détectée
                {% else %}
                    🔔 Action requise : Traitez cette commande
                {% endif %}
            </p>
            <div style=\"display: flex; flex-direction: column; gap: 10px; align-items: center;\">
                <a href=\"{{ absolute_url(path('app_orders_show', {id: order.id})) }}\" 
                   style=\"display: inline-block; background: {% if stockIssues is defined and stockIssues is not empty %}#dc2626{% else %}#0463f1{% endif %}; color: white; padding: 14px 45px; 
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

        <!-- Résumé rapide avec statut -->
        <div style=\"background: {% if stockIssues is defined and stockIssues is not empty %}#fef2f2{% else %}#fef3c7{% endif %}; border-radius: 12px; padding: 15px; margin: 20px 0; border-left: 4px solid {% if stockIssues is defined and stockIssues is not empty %}#dc2626{% else %}#f59e0b{% endif %};\">
            <p style=\"color: {% if stockIssues is defined and stockIssues is not empty %}#991b1b{% else %}#92400e{% endif %}; font-size: 13px; margin: 0; text-align: center;\">
                {% if stockIssues is defined and stockIssues is not empty %}
                    🚨 <strong>Action urgente :</strong> 
                    {{ stockIssues|length }} produit(s) en rupture de stock. 
                    Contactez le fournisseur et informez le client.
                {% else %}
                    ⚡ <strong>Action rapide :</strong> 
                    Connectez-vous au back-office pour valider l'expédition de la commande #{{ order.orderNumber }}.
                {% endif %}
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
