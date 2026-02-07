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

/* emails/purchase_receipt.html.twig */
class __TwigTemplate_3d05ae59756399dcaf07eebdb018e7b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_receipt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_receipt.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de réception #";
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
            border-bottom: 2px solid #28a745; 
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
            border-left: 4px solid #28a745; 
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
            background-color: #28a745; 
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
            border-top: 2px solid #28a745;
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
        .success-badge { 
            display: inline-block; 
            background-color: #28a745; 
            color: white; 
            padding: 6px 12px; 
            border-radius: 20px; 
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .info-box {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            padding: 15px;
            border-radius: 4px;
            margin: 15px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 style=\"margin: 0 0 10px 0; color: #28a745;\">CONFIRMATION DE RÉCEPTION</h1>
        <h2 style=\"margin: 0; color: #333;\">Commande N° ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 107, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 107), "html", null, true);
        yield "</h2>
        <div class=\"success-badge\">REÇU</div>
        <p style=\"margin: 5px 0 0 0; color: #666;\">
            Réceptionnée le ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 110, $this->source); })()), "receivedAt", [], "any", false, false, false, 110), "d/m/Y à H:i"), "html", null, true);
        yield "
        </p>
    </div>
    
    <div class=\"company-info\">
        <h3 style=\"margin: 0 0 10px 0; color: #333;\">HMA MARKET</h3>
        <p style=\"margin: 0 0 5px 0;\">Votre épicerie de quartier</p>
        <p style=\"margin: 0;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS FOURNISSEUR</div>
        ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 122, $this->source); })()), "supplier", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "            <div style=\"margin-bottom: 10px;\">
                <strong>Nom :</strong> ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 124, $this->source); })()), "supplier", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
            yield "
            </div>
            <div style=\"margin-bottom: 10px;\">
                <strong>Email :</strong> ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 127, $this->source); })()), "supplier", [], "any", false, false, false, 127), "email", [], "any", false, false, false, 127), "html", null, true);
            yield "
            </div>
        ";
        } else {
            // line 130
            yield "            <p>Aucun fournisseur spécifié</p>
        ";
        }
        // line 132
        yield "    </div>
    
    <div class=\"info-box\">
        <p style=\"margin: 0;\">
            <strong>✅ Réception confirmée :</strong> Nous avons bien reçu votre livraison correspondant à cette commande.
            Les produits ont été vérifiés et sont maintenant disponibles dans notre stock.
        </p>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">DÉTAILS DE LA COMMANDE RECUE</div>
        
        ";
        // line 144
        if ((array_key_exists("total_items", $context) && array_key_exists("total_quantity", $context))) {
            // line 145
            yield "            <div style=\"margin-bottom: 15px;\">
                <strong>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 146, $this->source); })()), "html", null, true);
            yield "</strong> article(s) reçu(s) | 
                <strong>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 147, $this->source); })()), "html", null, true);
            yield "</strong> unité(s) totale(s)
            </div>
        ";
        }
        // line 150
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
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 162, $this->source); })()), "purchaseItems", [], "any", false, false, false, 162));
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
            // line 163
            yield "                    <tr>
                        <td class=\"text-center\">";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"product-info\">
                                <strong>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 167), "name", [], "any", false, false, false, 167), "html", null, true);
            yield "</strong>
                            </div>
                            <div class=\"batch-info\">
                                Réf: ";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 170), "barcode", [], "any", false, false, false, 170), "html", null, true);
            yield "
                                ";
            // line 171
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 172
                yield "                                    <br>Lot: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 172), "html", null, true);
                yield "
                                ";
            }
            // line 174
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 175
                yield "                                    <br>Exp: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true);
                yield "
                                ";
            }
            // line 177
            yield "                            </div>
                        </td>
                        <td class=\"text-center\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 179), "html", null, true);
            yield "</td>
                        <td class=\"text-right\">";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 180)), "html", null, true);
            yield "</td>
                        <td class=\"text-right\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 181)), "html", null, true);
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
        // line 183
        if (!$context['_iterated']) {
            // line 184
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
        // line 190
        yield "            </tbody>
            <tfoot>
                <tr class=\"total-row\">
                    <td colspan=\"4\" class=\"text-right\"><strong>TOTAL :</strong></td>
                    <td class=\"text-right\"><strong>";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 194, $this->source); })()), "totalAmount", [], "any", false, false, false, 194)), "html", null, true);
        yield "</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    ";
        // line 200
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 200, $this->source); })()), "notes", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 201
            yield "        <div class=\"section\">
            <div class=\"section-title\">NOTES DE RÉCEPTION</div>
            <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 4px; font-size: 14px;\">
                ";
            // line 204
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 204, $this->source); })()), "notes", [], "any", false, false, false, 204), "html", null, true));
            yield "
            </div>
        </div>
    ";
        }
        // line 208
        yield "    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS DE RÉCEPTION</div>
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 15px;\">
            <div>
                <strong>Date de réception :</strong><br>
                ";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 214, $this->source); })()), "receivedAt", [], "any", false, false, false, 214), "d/m/Y à H:i"), "html", null, true);
        yield "
            </div>
            <div>
                <strong>Réceptionnée par :</strong><br>
                ";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, true, false, 218), "fullName", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "fullName", [], "any", false, false, false, 218), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "email", [], "any", false, false, false, 218))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "email", [], "any", false, false, false, 218))), "html", null, true);
        yield "
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>Document généré le ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
        <p>HMA MARKET - Confirmation de réception N° ";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 225, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 225), "html", null, true);
        yield "</p>
        <p>Nous vous remercions pour votre livraison rapide et de qualité.</p>
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
        return "emails/purchase_receipt.html.twig";
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
        return array (  395 => 225,  391 => 224,  382 => 218,  375 => 214,  367 => 208,  360 => 204,  355 => 201,  353 => 200,  344 => 194,  338 => 190,  327 => 184,  325 => 183,  310 => 181,  306 => 180,  302 => 179,  298 => 177,  292 => 175,  289 => 174,  283 => 172,  281 => 171,  277 => 170,  271 => 167,  265 => 164,  262 => 163,  244 => 162,  230 => 150,  224 => 147,  220 => 146,  217 => 145,  215 => 144,  201 => 132,  197 => 130,  191 => 127,  185 => 124,  182 => 123,  180 => 122,  165 => 110,  159 => 107,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de réception #{{ purchase.purchaseNumber }}</title>
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
            border-bottom: 2px solid #28a745; 
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
            border-left: 4px solid #28a745; 
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
            background-color: #28a745; 
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
            border-top: 2px solid #28a745;
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
        .success-badge { 
            display: inline-block; 
            background-color: #28a745; 
            color: white; 
            padding: 6px 12px; 
            border-radius: 20px; 
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .info-box {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            padding: 15px;
            border-radius: 4px;
            margin: 15px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 style=\"margin: 0 0 10px 0; color: #28a745;\">CONFIRMATION DE RÉCEPTION</h1>
        <h2 style=\"margin: 0; color: #333;\">Commande N° {{ purchase.purchaseNumber }}</h2>
        <div class=\"success-badge\">REÇU</div>
        <p style=\"margin: 5px 0 0 0; color: #666;\">
            Réceptionnée le {{ purchase.receivedAt|date('d/m/Y à H:i') }}
        </p>
    </div>
    
    <div class=\"company-info\">
        <h3 style=\"margin: 0 0 10px 0; color: #333;\">HMA MARKET</h3>
        <p style=\"margin: 0 0 5px 0;\">Votre épicerie de quartier</p>
        <p style=\"margin: 0;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
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
    
    <div class=\"info-box\">
        <p style=\"margin: 0;\">
            <strong>✅ Réception confirmée :</strong> Nous avons bien reçu votre livraison correspondant à cette commande.
            Les produits ont été vérifiés et sont maintenant disponibles dans notre stock.
        </p>
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">DÉTAILS DE LA COMMANDE RECUE</div>
        
        {% if total_items is defined and total_quantity is defined %}
            <div style=\"margin-bottom: 15px;\">
                <strong>{{ total_items }}</strong> article(s) reçu(s) | 
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
                    <td colspan=\"4\" class=\"text-right\"><strong>TOTAL :</strong></td>
                    <td class=\"text-right\"><strong>{{ purchase.totalAmount|format_fcfa }}</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    {% if purchase.notes %}
        <div class=\"section\">
            <div class=\"section-title\">NOTES DE RÉCEPTION</div>
            <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 4px; font-size: 14px;\">
                {{ purchase.notes|nl2br }}
            </div>
        </div>
    {% endif %}
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS DE RÉCEPTION</div>
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 15px;\">
            <div>
                <strong>Date de réception :</strong><br>
                {{ purchase.receivedAt|date('d/m/Y à H:i') }}
            </div>
            <div>
                <strong>Réceptionnée par :</strong><br>
                {{ purchase.user.fullName|default(purchase.user.email) }}
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>Document généré le {{ \"now\"|date('d/m/Y à H:i') }}</p>
        <p>HMA MARKET - Confirmation de réception N° {{ purchase.purchaseNumber }}</p>
        <p>Nous vous remercions pour votre livraison rapide et de qualité.</p>
    </div>
</body>
</html>", "emails/purchase_receipt.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_receipt.html.twig");
    }
}
