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

/* emails/purchase_cancellation.html.twig */
class __TwigTemplate_2da5d2d0f0b7052194f8e83132f5eea3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_cancellation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_cancellation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Annulation de commande #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px;
        }
        .header { 
            text-align: center; 
            border-bottom: 2px solid #dc3545; 
            padding-bottom: 20px; 
            margin-bottom: 30px; 
        }
        .company-info { 
            margin-bottom: 30px; 
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .section { 
            margin-bottom: 25px; 
        }
        .section-title { 
            background-color: #f8f9fa; 
            padding: 12px; 
            border-left: 4px solid #dc3545; 
            font-weight: bold; 
            margin-bottom: 15px; 
            border-radius: 4px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        th { 
            background-color: #dc3545; 
            color: white; 
            padding: 12px; 
            text-align: left; 
            border: 1px solid #ddd;
            font-weight: bold;
        }
        td { 
            padding: 12px; 
            border: 1px solid #ddd; 
            vertical-align: top;
        }
        tr:nth-child(even) { 
            background-color: #f9f9f9; 
        }
        .total-row { 
            font-weight: bold; 
            background-color: #f8f9fa; 
            border-top: 2px solid #dc3545;
        }
        .footer { 
            margin-top: 40px; 
            padding-top: 20px; 
            border-top: 1px solid #ddd; 
            font-size: 12px; 
            color: #666; 
            text-align: center;
        }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .product-info { 
            margin: 5px 0; 
            font-size: 14px;
        }
        .batch-info {
            font-size: 12px;
            color: #666;
            margin-top: 3px;
        }
        .cancelled-badge { 
            display: inline-block; 
            background-color: #dc3545; 
            color: white; 
            padding: 6px 12px; 
            border-radius: 20px; 
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .alert { 
            background-color: #fff3cd; 
            border: 1px solid #ffeaa7; 
            padding: 15px; 
            border-radius: 4px; 
            margin: 20px 0; 
            font-size: 14px;
        }
        .danger-alert {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
            font-size: 14px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 style=\"margin: 0 0 10px 0; color: #dc3545;\">ANNULATION DE COMMANDE</h1>
        <h2 style=\"margin: 0; color: #333;\">Commande N° ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 122, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 122), "html", null, true);
        yield "</h2>
        <div class=\"cancelled-badge\">ANNULÉE</div>
        <p style=\"margin: 5px 0 0 0; color: #666;\">
            Annulée le ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 125, $this->source); })()), "cancelledAt", [], "any", false, false, false, 125), "d/m/Y à H:i"), "html", null, true);
        yield "
        </p>
    </div>
    
    <div class=\"company-info\">
        <h3 style=\"margin: 0 0 10px 0; color: #333;\">HMA MARKET</h3>
        <p style=\"margin: 0 0 5px 0;\">Votre épicerie de quartier</p>
        <p style=\"margin: 0;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
    </div>
    
    <div class=\"danger-alert\">
        <p style=\"margin: 0;\">
            <strong>⚠️ IMPORTANT :</strong> Cette commande a été annulée. Veuillez ne pas livrer les produits listés ci-dessous.
            Toute livraison effectuée après cette annulation ne pourra être acceptée.
        </p>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS FOURNISSEUR</div>
        ";
        // line 144
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 144, $this->source); })()), "supplier", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "            <div style=\"margin-bottom: 10px;\">
                <strong>Nom :</strong> ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 146, $this->source); })()), "supplier", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
            yield "
            </div>
            <div style=\"margin-bottom: 10px;\">
                <strong>Email :</strong> ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 149, $this->source); })()), "supplier", [], "any", false, false, false, 149), "email", [], "any", false, false, false, 149), "html", null, true);
            yield "
            </div>
        ";
        } else {
            // line 152
            yield "            <p>Aucun fournisseur spécifié</p>
        ";
        }
        // line 154
        yield "    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">RAISON DE L'ANNULATION</div>
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 4px; font-size: 14px;\">
            <strong>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reason"]) || array_key_exists("reason", $context) ? $context["reason"] : (function () { throw new RuntimeError('Variable "reason" does not exist.', 159, $this->source); })()), "html", null, true);
        yield "</strong>
            ";
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 160, $this->source); })()), "cancellationReason", [], "any", false, false, false, 160) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 160, $this->source); })()), "cancellationReason", [], "any", false, false, false, 160) != (isset($context["reason"]) || array_key_exists("reason", $context) ? $context["reason"] : (function () { throw new RuntimeError('Variable "reason" does not exist.', 160, $this->source); })())))) {
            // line 161
            yield "                <div style=\"margin-top: 10px;\">
                    ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 162, $this->source); })()), "cancellationReason", [], "any", false, false, false, 162), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 165
        yield "        </div>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">DÉTAILS DE LA COMMANDE ANNULÉE</div>
        
        ";
        // line 171
        if ((array_key_exists("total_items", $context) && array_key_exists("total_quantity", $context))) {
            // line 172
            yield "            <div style=\"margin-bottom: 15px;\">
                <strong>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 173, $this->source); })()), "html", null, true);
            yield "</strong> article(s) annulé(s) | 
                <strong>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 174, $this->source); })()), "html", null, true);
            yield "</strong> unité(s) totale(s)
            </div>
        ";
        }
        // line 177
        yield "        
        <table>
            <thead>
                <tr>
                    <th width=\"5%\">#</th>
                    <th width=\"50%\">Produit</th>
                    <th width=\"15%\" class=\"text-center\">Quantité</th>
                    <th width=\"15%\" class=\"text-right\">Prix unitaire</th>
                    <th width=\"15%\" class=\"text-right\">Total</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 189, $this->source); })()), "purchaseItems", [], "any", false, false, false, 189));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 190
            yield "                    <tr>
                        <td class=\"text-center\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"product-info\">
                                <strong>";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 194), "name", [], "any", false, false, false, 194), "html", null, true);
            yield "</strong>
                            </div>
                            <div class=\"batch-info\">
                                Réf: ";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 197), "barcode", [], "any", false, false, false, 197), "html", null, true);
            yield "
                                ";
            // line 198
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 199
                yield "                                    <br>Lot: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 199), "html", null, true);
                yield "
                                ";
            }
            // line 201
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 202
                yield "                                    <br>Exp: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 202), "d/m/Y"), "html", null, true);
                yield "
                                ";
            }
            // line 204
            yield "                            </div>
                        </td>
                        <td class=\"text-center\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 206), "html", null, true);
            yield "</td>
                        <td class=\"text-right\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 207)), "html", null, true);
            yield "</td>
                        <td class=\"text-right\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 208)), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 210
        if (!$context['_iterated']) {
            // line 211
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center\" style=\"padding: 30px;\">
                            Aucun produit dans cette commande
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "            </tbody>
            <tfoot>
                <tr class=\"total-row\">
                    <td colspan=\"4\" class=\"text-right\"><strong>TOTAL ANNULÉ :</strong></td>
                    <td class=\"text-right\"><strong>";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 221, $this->source); })()), "totalAmount", [], "any", false, false, false, 221)), "html", null, true);
        yield "</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS D'ANNULATION</div>
        <div class=\"info-grid\">
            <div>
                <strong>Date d'annulation :</strong><br>
                ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 232, $this->source); })()), "cancelledAt", [], "any", false, false, false, 232), "d/m/Y à H:i"), "html", null, true);
        yield "
            </div>
            <div>
                <strong>Annulée par :</strong><br>
                ";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "cancelledBy", [], "any", false, true, false, 236), "fullName", [], "any", true, true, false, 236)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 236, $this->source); })()), "cancelledBy", [], "any", false, false, false, 236), "fullName", [], "any", false, false, false, 236), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 236, $this->source); })()), "cancelledBy", [], "any", false, false, false, 236), "email", [], "any", false, false, false, 236))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 236, $this->source); })()), "cancelledBy", [], "any", false, false, false, 236), "email", [], "any", false, false, false, 236))), "html", null, true);
        yield "
            </div>
            <div>
                <strong>Date de création :</strong><br>
                ";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 240, $this->source); })()), "createdAt", [], "any", false, false, false, 240), "d/m/Y à H:i"), "html", null, true);
        yield "
            </div>
            <div>
                <strong>Statut initial :</strong><br>
                ";
        // line 244
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 244, $this->source); })()), "status", [], "any", false, false, false, 244) == "draft")) ? ("Brouillon") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 244, $this->source); })()), "status", [], "any", false, false, false, 244) == "confirmed")) ? ("Confirmé") : ("Reçu"))));
        yield "
            </div>
        </div>
    </div>
    
    <div class=\"alert\">
        <p style=\"margin: 0;\">
            <strong>📋 Note :</strong> Si cette commande avait déjà été préparée ou expédiée, veuillez nous contacter 
            immédiatement à contact@hma-market.com pour coordonner le retour des marchandises.
        </p>
    </div>
    
    <div class=\"footer\">
        <p>Document généré le ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
        <p>HMA MARKET - Annulation de commande N° ";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 258, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 258), "html", null, true);
        yield "</p>
        <p>Nous nous excusons pour tout inconvénient causé et vous remercions pour votre compréhension.</p>
        <p>Nous espérons pouvoir collaborer à nouveau avec vous dans le futur.</p>
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
        return "emails/purchase_cancellation.html.twig";
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
        return array (  437 => 258,  433 => 257,  417 => 244,  410 => 240,  403 => 236,  396 => 232,  382 => 221,  376 => 217,  365 => 211,  363 => 210,  348 => 208,  344 => 207,  340 => 206,  336 => 204,  330 => 202,  327 => 201,  321 => 199,  319 => 198,  315 => 197,  309 => 194,  303 => 191,  300 => 190,  282 => 189,  268 => 177,  262 => 174,  258 => 173,  255 => 172,  253 => 171,  245 => 165,  239 => 162,  236 => 161,  234 => 160,  230 => 159,  223 => 154,  219 => 152,  213 => 149,  207 => 146,  204 => 145,  202 => 144,  180 => 125,  174 => 122,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Annulation de commande #{{ purchase.purchaseNumber }}</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px;
        }
        .header { 
            text-align: center; 
            border-bottom: 2px solid #dc3545; 
            padding-bottom: 20px; 
            margin-bottom: 30px; 
        }
        .company-info { 
            margin-bottom: 30px; 
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .section { 
            margin-bottom: 25px; 
        }
        .section-title { 
            background-color: #f8f9fa; 
            padding: 12px; 
            border-left: 4px solid #dc3545; 
            font-weight: bold; 
            margin-bottom: 15px; 
            border-radius: 4px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        th { 
            background-color: #dc3545; 
            color: white; 
            padding: 12px; 
            text-align: left; 
            border: 1px solid #ddd;
            font-weight: bold;
        }
        td { 
            padding: 12px; 
            border: 1px solid #ddd; 
            vertical-align: top;
        }
        tr:nth-child(even) { 
            background-color: #f9f9f9; 
        }
        .total-row { 
            font-weight: bold; 
            background-color: #f8f9fa; 
            border-top: 2px solid #dc3545;
        }
        .footer { 
            margin-top: 40px; 
            padding-top: 20px; 
            border-top: 1px solid #ddd; 
            font-size: 12px; 
            color: #666; 
            text-align: center;
        }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .product-info { 
            margin: 5px 0; 
            font-size: 14px;
        }
        .batch-info {
            font-size: 12px;
            color: #666;
            margin-top: 3px;
        }
        .cancelled-badge { 
            display: inline-block; 
            background-color: #dc3545; 
            color: white; 
            padding: 6px 12px; 
            border-radius: 20px; 
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .alert { 
            background-color: #fff3cd; 
            border: 1px solid #ffeaa7; 
            padding: 15px; 
            border-radius: 4px; 
            margin: 20px 0; 
            font-size: 14px;
        }
        .danger-alert {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
            font-size: 14px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 style=\"margin: 0 0 10px 0; color: #dc3545;\">ANNULATION DE COMMANDE</h1>
        <h2 style=\"margin: 0; color: #333;\">Commande N° {{ purchase.purchaseNumber }}</h2>
        <div class=\"cancelled-badge\">ANNULÉE</div>
        <p style=\"margin: 5px 0 0 0; color: #666;\">
            Annulée le {{ purchase.cancelledAt|date('d/m/Y à H:i') }}
        </p>
    </div>
    
    <div class=\"company-info\">
        <h3 style=\"margin: 0 0 10px 0; color: #333;\">HMA MARKET</h3>
        <p style=\"margin: 0 0 5px 0;\">Votre épicerie de quartier</p>
        <p style=\"margin: 0;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
    </div>
    
    <div class=\"danger-alert\">
        <p style=\"margin: 0;\">
            <strong>⚠️ IMPORTANT :</strong> Cette commande a été annulée. Veuillez ne pas livrer les produits listés ci-dessous.
            Toute livraison effectuée après cette annulation ne pourra être acceptée.
        </p>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS FOURNISSEUR</div>
        {% if purchase.supplier %}
            <div style=\"margin-bottom: 10px;\">
                <strong>Nom :</strong> {{ purchase.supplier.name }}
            </div>
            <div style=\"margin-bottom: 10px;\">
                <strong>Email :</strong> {{ purchase.supplier.email }}
            </div>
        {% else %}
            <p>Aucun fournisseur spécifié</p>
        {% endif %}
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">RAISON DE L'ANNULATION</div>
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 4px; font-size: 14px;\">
            <strong>{{ reason }}</strong>
            {% if purchase.cancellationReason and purchase.cancellationReason != reason %}
                <div style=\"margin-top: 10px;\">
                    {{ purchase.cancellationReason }}
                </div>
            {% endif %}
        </div>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">DÉTAILS DE LA COMMANDE ANNULÉE</div>
        
        {% if total_items is defined and total_quantity is defined %}
            <div style=\"margin-bottom: 15px;\">
                <strong>{{ total_items }}</strong> article(s) annulé(s) | 
                <strong>{{ total_quantity }}</strong> unité(s) totale(s)
            </div>
        {% endif %}
        
        <table>
            <thead>
                <tr>
                    <th width=\"5%\">#</th>
                    <th width=\"50%\">Produit</th>
                    <th width=\"15%\" class=\"text-center\">Quantité</th>
                    <th width=\"15%\" class=\"text-right\">Prix unitaire</th>
                    <th width=\"15%\" class=\"text-right\">Total</th>
                </tr>
            </thead>
            <tbody>
                {% for item in purchase.purchaseItems %}
                    <tr>
                        <td class=\"text-center\">{{ loop.index }}</td>
                        <td>
                            <div class=\"product-info\">
                                <strong>{{ item.product.name }}</strong>
                            </div>
                            <div class=\"batch-info\">
                                Réf: {{ item.product.barcode }}
                                {% if item.batchNumber %}
                                    <br>Lot: {{ item.batchNumber }}
                                {% endif %}
                                {% if item.expiryDate %}
                                    <br>Exp: {{ item.expiryDate|date('d/m/Y') }}
                                {% endif %}
                            </div>
                        </td>
                        <td class=\"text-center\">{{ item.quantity }}</td>
                        <td class=\"text-right\">{{ item.unitPrice|format_fcfa }}</td>
                        <td class=\"text-right\">{{ item.totalPrice|format_fcfa }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center\" style=\"padding: 30px;\">
                            Aucun produit dans cette commande
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr class=\"total-row\">
                    <td colspan=\"4\" class=\"text-right\"><strong>TOTAL ANNULÉ :</strong></td>
                    <td class=\"text-right\"><strong>{{ purchase.totalAmount|format_fcfa }}</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS D'ANNULATION</div>
        <div class=\"info-grid\">
            <div>
                <strong>Date d'annulation :</strong><br>
                {{ purchase.cancelledAt|date('d/m/Y à H:i') }}
            </div>
            <div>
                <strong>Annulée par :</strong><br>
                {{ purchase.cancelledBy.fullName|default(purchase.cancelledBy.email) }}
            </div>
            <div>
                <strong>Date de création :</strong><br>
                {{ purchase.createdAt|date('d/m/Y à H:i') }}
            </div>
            <div>
                <strong>Statut initial :</strong><br>
                {{ purchase.status == 'draft' ? 'Brouillon' : (purchase.status == 'confirmed' ? 'Confirmé' : 'Reçu') }}
            </div>
        </div>
    </div>
    
    <div class=\"alert\">
        <p style=\"margin: 0;\">
            <strong>📋 Note :</strong> Si cette commande avait déjà été préparée ou expédiée, veuillez nous contacter 
            immédiatement à contact@hma-market.com pour coordonner le retour des marchandises.
        </p>
    </div>
    
    <div class=\"footer\">
        <p>Document généré le {{ \"now\"|date('d/m/Y à H:i') }}</p>
        <p>HMA MARKET - Annulation de commande N° {{ purchase.purchaseNumber }}</p>
        <p>Nous nous excusons pour tout inconvénient causé et vous remercions pour votre compréhension.</p>
        <p>Nous espérons pouvoir collaborer à nouveau avec vous dans le futur.</p>
    </div>
</body>
</html>", "emails/purchase_cancellation.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_cancellation.html.twig");
    }
}
