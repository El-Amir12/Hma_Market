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

/* emails/purchase_order.html.twig */
class __TwigTemplate_a4e12ca5abe2ccfc376e874b7a37d5c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_order.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Bon de commande #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px;
            background-color: #f8f9fa;
        }
        
        .email-container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .header { 
            text-align: center; 
            border-bottom: 3px solid #4a90e2; 
            padding-bottom: 20px; 
            margin-bottom: 30px; 
        }
        
        .header h1 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 26px;
            font-weight: 700;
        }
        
        .order-number { 
            margin: 0 0 15px 0; 
            color: #4a90e2;
            font-size: 20px;
            font-weight: 600;
        }
        
        .status-badge {
            display: inline-block;
            padding: 8px 20px;
            background-color: #4a90e2;
            color: white;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin: 10px 0;
        }
        
        .company-info { 
            margin-bottom: 30px; 
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 10px;
            border: 1px solid #e1e8ed;
        }
        
        .company-info h3 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 18px;
            font-weight: 700;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            border: 1px solid #e1e8ed;
            padding: 25px;
            margin-bottom: 25px;
        }
        
        .card-title {
            color: #2c3e50;
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 15px 0;
            padding-bottom: 12px;
            border-bottom: 2px solid #4a90e2;
        }
        
        .supplier-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 15px;
        }
        
        .info-column {
            flex: 1;
            min-width: 250px;
        }
        
        .info-item {
            margin-bottom: 10px;
        }
        
        .info-label { 
            font-weight: 600; 
            color: #666;
            margin-bottom: 3px;
            font-size: 13px;
        }
        
        .info-value { 
            color: #333;
            font-size: 14px;
        }
        
        .summary {
            display: flex;
            justify-content: space-between;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid #4a90e2;
        }
        
        .summary-item {
            text-align: center;
        }
        
        .summary-value {
            font-size: 20px;
            font-weight: 700;
            color: #4a90e2;
            margin-bottom: 5px;
        }
        
        .summary-label {
            font-size: 13px;
            color: #666;
            text-transform: uppercase;
        }
        
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
        }
        
        th { 
            background-color: #2c3e50;
            color: white;
            padding: 14px 12px; 
            text-align: left; 
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
        }
        
        td { 
            padding: 14px 12px; 
            border-bottom: 1px solid #e1e8ed; 
            vertical-align: top;
        }
        
        tr:nth-child(even) { 
            background-color: #f8f9fa; 
        }
        
        .product-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .product-details {
            font-size: 13px;
            color: #666;
        }
        
        .batch-info {
            background-color: rgba(74, 144, 226, 0.1);
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            color: #4a90e2;
            display: inline-block;
            margin-top: 5px;
        }
        
        .totals {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e1e8ed;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #e1e8ed;
        }
        
        .total-label {
            color: #666;
            font-size: 14px;
        }
        
        .total-value {
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }
        
        .grand-total {
            font-size: 18px;
            color: #4a90e2;
            font-weight: 700;
            border-bottom: none;
            margin-top: 10px;
        }
        
        .notes {
            background-color: #fff8e1;
            border-left: 4px solid #ffc107;
            padding: 20px;
            border-radius: 6px;
            margin-top: 25px;
        }
        
        .notes-title {
            font-weight: 600;
            color: #856404;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .notes-content {
            color: #666;
            font-size: 13px;
            line-height: 1.5;
        }
        
        .instructions {
            background-color: #e8f4fd;
            border-left: 4px solid #4a90e2;
            padding: 20px;
            border-radius: 6px;
            margin: 25px 0;
        }
        
        .instructions-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .footer { 
            margin-top: 40px; 
            padding-top: 20px; 
            border-top: 1px solid #e1e8ed; 
            font-size: 12px; 
            color: #666; 
            text-align: center;
        }
        
        .action-buttons {
            text-align: center;
            margin: 30px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            margin: 0 10px;
        }
        
        .btn:hover {
            background-color: #3a7bc8;
        }
        
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .text-bold { font-weight: 700; }
        
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }
        
        @media (max-width: 600px) {
            .supplier-info {
                flex-direction: column;
            }
            .summary {
                flex-direction: column;
                gap: 15px;
            }
            table {
                font-size: 12px;
            }
            th, td {
                padding: 10px 8px;
            }
        }
    </style>
</head>
<body>
    <div class=\"email-container\">
        <div class=\"header\">
            <h1>BON DE COMMANDE</h1>
            <div class=\"order-number\">N° ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 319, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 319), "html", null, true);
        yield "</div>
            <div class=\"status-badge\">COMMANDE CONFIRMÉE</div>
            <p style=\"color: #666; margin: 5px 0; font-size: 14px;\">
                Date : ";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 322, $this->source); })()), "createdAt", [], "any", false, false, false, 322), "d/m/Y à H:i"), "html", null, true);
        yield "
            </p>
        </div>
        
        <div class=\"company-info\">
            <h3>HMA MARKET</h3>
            <p style=\"margin: 5px 0; color: #666;\">Votre épicerie de quartier</p>
            <p style=\"margin: 5px 0; color: #666;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
        </div>
        
        <div class=\"card\">
            <div class=\"card-title\">INFORMATIONS FOURNISSEUR</div>
            <div class=\"supplier-info\">
                <div class=\"info-column\">
                    ";
        // line 336
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 336, $this->source); })()), "supplier", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 337
            yield "                        <div class=\"info-item\">
                            <div class=\"info-label\">NOM DU FOURNISSEUR</div>
                            <div class=\"info-value\">";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 339, $this->source); })()), "supplier", [], "any", false, false, false, 339), "name", [], "any", false, false, false, 339), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">EMAIL</div>
                            <div class=\"info-value\">";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 343, $this->source); })()), "supplier", [], "any", false, false, false, 343), "email", [], "any", false, false, false, 343), "html", null, true);
            yield "</div>
                        </div>
                    ";
        } else {
            // line 346
            yield "                        <div class=\"info-item\">
                            <div class=\"info-value\" style=\"color: #e74c3c; font-style: italic;\">
                                Aucun fournisseur spécifié
                            </div>
                        </div>
                    ";
        }
        // line 352
        yield "                </div>
                <div class=\"info-column\">
                    ";
        // line 354
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 354, $this->source); })()), "supplier", [], "any", false, false, false, 354)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 355
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 355, $this->source); })()), "supplier", [], "any", false, false, false, 355), "phone", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 356
                yield "                        <div class=\"info-item\">
                            <div class=\"info-label\">TÉLÉPHONE</div>
                            <div class=\"info-value\">";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 358, $this->source); })()), "supplier", [], "any", false, false, false, 358), "phone", [], "any", false, false, false, 358), "html", null, true);
                yield "</div>
                        </div>
                        ";
            }
            // line 361
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 361, $this->source); })()), "supplier", [], "any", false, false, false, 361), "adress", [], "any", false, false, false, 361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 362
                yield "                        <div class=\"info-item\">
                            <div class=\"info-label\">ADRESSE</div>
                            <div class=\"info-value\">";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 364, $this->source); })()), "supplier", [], "any", false, false, false, 364), "adress", [], "any", false, false, false, 364), "html", null, true);
                yield "</div>
                        </div>
                        ";
            }
            // line 367
            yield "                    ";
        }
        // line 368
        yield "                </div>
            </div>
        </div>
        
        <div class=\"card\">
            <div class=\"card-title\">RÉSUMÉ DE LA COMMANDE</div>
            
            <div class=\"summary\">
                <div class=\"summary-item\">
                    <div class=\"summary-value\">";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 377, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"summary-label\">Articles</div>
                </div>
                <div class=\"summary-item\">
                    <div class=\"summary-value\">";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 381, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"summary-label\">Quantité totale</div>
                </div>
                <div class=\"summary-item\">
                    <div class=\"summary-value\">";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 385, $this->source); })()), "totalAmount", [], "any", false, false, false, 385)), "html", null, true);
        yield "</div>
                    <div class=\"summary-label\">Montant total</div>
                </div>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th width=\"5%\">#</th>
                        <th width=\"50%\">PRODUIT</th>
                        <th width=\"15%\" class=\"text-center\">QUANTITÉ</th>
                        <th width=\"15%\" class=\"text-right\">PRIX UNITAIRE</th>
                        <th width=\"15%\" class=\"text-right\">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 401
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 401, $this->source); })()), "purchaseItems", [], "any", false, false, false, 401)) > 0)) {
            // line 402
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 402, $this->source); })()), "purchaseItems", [], "any", false, false, false, 402));
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
                // line 403
                yield "                            <tr>
                                <td class=\"text-center\">";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 404), "html", null, true);
                yield "</td>
                                <td>
                                    <div class=\"product-name\">";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 406), "name", [], "any", false, false, false, 406), "html", null, true);
                yield "</div>
                                    <div class=\"product-details\">
                                        Réf: ";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 408), "barcode", [], "any", false, false, false, 408), "html", null, true);
                yield "
                                    </div>
                                    ";
                // line 410
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 410)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 411
                    yield "                                        <div class=\"batch-info\">
                                            Lot: ";
                    // line 412
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 412), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 415
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 415)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 416
                    yield "                                        <div class=\"batch-info\" style=\"background-color: rgba(231, 76, 60, 0.1); color: #e74c3c;\">
                                            Exp: ";
                    // line 417
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 417), "d/m/Y"), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 420
                yield "                                </td>
                                <td class=\"text-center\">";
                // line 421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 421), "html", null, true);
                yield "</td>
                                <td class=\"text-right\">";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 422)), "html", null, true);
                yield "</td>
                                <td class=\"text-right\">";
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 423)), "html", null, true);
                yield "</td>
                            </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 426
            yield "                    ";
        } else {
            // line 427
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center\" style=\"padding: 40px; color: #999;\">
                                Aucun produit dans cette commande
                            </td>
                        </tr>
                    ";
        }
        // line 433
        yield "                </tbody>
                <tfoot>
                    <tr style=\"background-color: #f8f9fa; font-weight: 600;\">
                        <td colspan=\"4\" class=\"text-right\" style=\"padding: 15px;\">MONTANT TOTAL :</td>
                        <td class=\"text-right\" style=\"padding: 15px;\">";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 437, $this->source); })()), "totalAmount", [], "any", false, false, false, 437)), "html", null, true);
        yield "</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        ";
        // line 443
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 443, $this->source); })()), "notes", [], "any", false, false, false, 443)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 444
            yield "        <div class=\"notes\">
            <div class=\"notes-title\">📝 NOTES & COMMENTAIRES</div>
            <div class=\"notes-content\">";
            // line 446
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 446, $this->source); })()), "notes", [], "any", false, false, false, 446), "html", null, true));
            yield "</div>
        </div>
        ";
        }
        // line 449
        yield "        
        <div class=\"instructions\">
            <div class=\"instructions-title\">📋 INSTRUCTIONS POUR LE FOURNISSEUR</div>
            <p style=\"margin: 0; color: #666;\">
                Veuillez confirmer cette commande par retour d'email ou par téléphone dans les plus brefs délais.<br>
                Merci de nous indiquer votre délai de livraison estimé et toute information concernant la préparation de la commande.
            </p>
        </div>
        
        <div class=\"contact-info\">
            <p style=\"margin: 0 0 10px 0; font-weight: 600; color: #2c3e50;\">CONTACT HMA MARKET</p>
            <p style=\"margin: 0 0 5px 0; color: #666;\">Téléphone : +229 01 56 13 92 00</p>
            <p style=\"margin: 0 0 5px 0; color: #666;\">Email : contact@hma-market.com</p>
            <p style=\"margin: 0; color: #666;\">Heures d'ouverture : Lundi - Samedi, 8h - 20h</p>
        </div>
        
        <div class=\"action-buttons\">
            <a href=\"mailto:contact@hma-market.com?subject=Confirmation%20commande%20%23";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 466, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 466), "html", null, true);
        yield "\" class=\"btn\">
                📧 Confirmer par email
            </a>
            <a href=\"tel:+2290156139200\" class=\"btn\">
                📞 Confirmer par téléphone
            </a>
        </div>
        
        <div class=\"footer\">
            <p>Ce bon de commande a été généré automatiquement par le système HMA MARKET.</p>
            <p>HMA MARKET • Bon de commande N° ";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 476, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 476), "html", null, true);
        yield " • Date : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
            <p style=\"color: #999; font-size: 11px; margin-top: 10px;\">
                Si vous avez des questions concernant cette commande, veuillez répondre directement à cet email.
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
        return "emails/purchase_order.html.twig";
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
        return array (  659 => 476,  646 => 466,  627 => 449,  621 => 446,  617 => 444,  615 => 443,  606 => 437,  600 => 433,  592 => 427,  589 => 426,  572 => 423,  568 => 422,  564 => 421,  561 => 420,  555 => 417,  552 => 416,  549 => 415,  543 => 412,  540 => 411,  538 => 410,  533 => 408,  528 => 406,  523 => 404,  520 => 403,  502 => 402,  500 => 401,  481 => 385,  474 => 381,  467 => 377,  456 => 368,  453 => 367,  447 => 364,  443 => 362,  440 => 361,  434 => 358,  430 => 356,  427 => 355,  425 => 354,  421 => 352,  413 => 346,  407 => 343,  400 => 339,  396 => 337,  394 => 336,  377 => 322,  371 => 319,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Bon de commande #{{ purchase.purchaseNumber }}</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px;
            background-color: #f8f9fa;
        }
        
        .email-container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .header { 
            text-align: center; 
            border-bottom: 3px solid #4a90e2; 
            padding-bottom: 20px; 
            margin-bottom: 30px; 
        }
        
        .header h1 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 26px;
            font-weight: 700;
        }
        
        .order-number { 
            margin: 0 0 15px 0; 
            color: #4a90e2;
            font-size: 20px;
            font-weight: 600;
        }
        
        .status-badge {
            display: inline-block;
            padding: 8px 20px;
            background-color: #4a90e2;
            color: white;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin: 10px 0;
        }
        
        .company-info { 
            margin-bottom: 30px; 
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 10px;
            border: 1px solid #e1e8ed;
        }
        
        .company-info h3 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 18px;
            font-weight: 700;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            border: 1px solid #e1e8ed;
            padding: 25px;
            margin-bottom: 25px;
        }
        
        .card-title {
            color: #2c3e50;
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 15px 0;
            padding-bottom: 12px;
            border-bottom: 2px solid #4a90e2;
        }
        
        .supplier-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 15px;
        }
        
        .info-column {
            flex: 1;
            min-width: 250px;
        }
        
        .info-item {
            margin-bottom: 10px;
        }
        
        .info-label { 
            font-weight: 600; 
            color: #666;
            margin-bottom: 3px;
            font-size: 13px;
        }
        
        .info-value { 
            color: #333;
            font-size: 14px;
        }
        
        .summary {
            display: flex;
            justify-content: space-between;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid #4a90e2;
        }
        
        .summary-item {
            text-align: center;
        }
        
        .summary-value {
            font-size: 20px;
            font-weight: 700;
            color: #4a90e2;
            margin-bottom: 5px;
        }
        
        .summary-label {
            font-size: 13px;
            color: #666;
            text-transform: uppercase;
        }
        
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
        }
        
        th { 
            background-color: #2c3e50;
            color: white;
            padding: 14px 12px; 
            text-align: left; 
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
        }
        
        td { 
            padding: 14px 12px; 
            border-bottom: 1px solid #e1e8ed; 
            vertical-align: top;
        }
        
        tr:nth-child(even) { 
            background-color: #f8f9fa; 
        }
        
        .product-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .product-details {
            font-size: 13px;
            color: #666;
        }
        
        .batch-info {
            background-color: rgba(74, 144, 226, 0.1);
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            color: #4a90e2;
            display: inline-block;
            margin-top: 5px;
        }
        
        .totals {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e1e8ed;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #e1e8ed;
        }
        
        .total-label {
            color: #666;
            font-size: 14px;
        }
        
        .total-value {
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }
        
        .grand-total {
            font-size: 18px;
            color: #4a90e2;
            font-weight: 700;
            border-bottom: none;
            margin-top: 10px;
        }
        
        .notes {
            background-color: #fff8e1;
            border-left: 4px solid #ffc107;
            padding: 20px;
            border-radius: 6px;
            margin-top: 25px;
        }
        
        .notes-title {
            font-weight: 600;
            color: #856404;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .notes-content {
            color: #666;
            font-size: 13px;
            line-height: 1.5;
        }
        
        .instructions {
            background-color: #e8f4fd;
            border-left: 4px solid #4a90e2;
            padding: 20px;
            border-radius: 6px;
            margin: 25px 0;
        }
        
        .instructions-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .footer { 
            margin-top: 40px; 
            padding-top: 20px; 
            border-top: 1px solid #e1e8ed; 
            font-size: 12px; 
            color: #666; 
            text-align: center;
        }
        
        .action-buttons {
            text-align: center;
            margin: 30px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            margin: 0 10px;
        }
        
        .btn:hover {
            background-color: #3a7bc8;
        }
        
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .text-bold { font-weight: 700; }
        
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }
        
        @media (max-width: 600px) {
            .supplier-info {
                flex-direction: column;
            }
            .summary {
                flex-direction: column;
                gap: 15px;
            }
            table {
                font-size: 12px;
            }
            th, td {
                padding: 10px 8px;
            }
        }
    </style>
</head>
<body>
    <div class=\"email-container\">
        <div class=\"header\">
            <h1>BON DE COMMANDE</h1>
            <div class=\"order-number\">N° {{ purchase.purchaseNumber }}</div>
            <div class=\"status-badge\">COMMANDE CONFIRMÉE</div>
            <p style=\"color: #666; margin: 5px 0; font-size: 14px;\">
                Date : {{ purchase.createdAt|date('d/m/Y à H:i') }}
            </p>
        </div>
        
        <div class=\"company-info\">
            <h3>HMA MARKET</h3>
            <p style=\"margin: 5px 0; color: #666;\">Votre épicerie de quartier</p>
            <p style=\"margin: 5px 0; color: #666;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
        </div>
        
        <div class=\"card\">
            <div class=\"card-title\">INFORMATIONS FOURNISSEUR</div>
            <div class=\"supplier-info\">
                <div class=\"info-column\">
                    {% if purchase.supplier %}
                        <div class=\"info-item\">
                            <div class=\"info-label\">NOM DU FOURNISSEUR</div>
                            <div class=\"info-value\">{{ purchase.supplier.name }}</div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">EMAIL</div>
                            <div class=\"info-value\">{{ purchase.supplier.email }}</div>
                        </div>
                    {% else %}
                        <div class=\"info-item\">
                            <div class=\"info-value\" style=\"color: #e74c3c; font-style: italic;\">
                                Aucun fournisseur spécifié
                            </div>
                        </div>
                    {% endif %}
                </div>
                <div class=\"info-column\">
                    {% if purchase.supplier %}
                        {% if purchase.supplier.phone %}
                        <div class=\"info-item\">
                            <div class=\"info-label\">TÉLÉPHONE</div>
                            <div class=\"info-value\">{{ purchase.supplier.phone }}</div>
                        </div>
                        {% endif %}
                        {% if purchase.supplier.adress %}
                        <div class=\"info-item\">
                            <div class=\"info-label\">ADRESSE</div>
                            <div class=\"info-value\">{{ purchase.supplier.adress }}</div>
                        </div>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        </div>
        
        <div class=\"card\">
            <div class=\"card-title\">RÉSUMÉ DE LA COMMANDE</div>
            
            <div class=\"summary\">
                <div class=\"summary-item\">
                    <div class=\"summary-value\">{{ total_items }}</div>
                    <div class=\"summary-label\">Articles</div>
                </div>
                <div class=\"summary-item\">
                    <div class=\"summary-value\">{{ total_quantity }}</div>
                    <div class=\"summary-label\">Quantité totale</div>
                </div>
                <div class=\"summary-item\">
                    <div class=\"summary-value\">{{ purchase.totalAmount|format_fcfa }}</div>
                    <div class=\"summary-label\">Montant total</div>
                </div>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th width=\"5%\">#</th>
                        <th width=\"50%\">PRODUIT</th>
                        <th width=\"15%\" class=\"text-center\">QUANTITÉ</th>
                        <th width=\"15%\" class=\"text-right\">PRIX UNITAIRE</th>
                        <th width=\"15%\" class=\"text-right\">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    {% if purchase.purchaseItems|length > 0 %}
                        {% for item in purchase.purchaseItems %}
                            <tr>
                                <td class=\"text-center\">{{ loop.index }}</td>
                                <td>
                                    <div class=\"product-name\">{{ item.product.name }}</div>
                                    <div class=\"product-details\">
                                        Réf: {{ item.product.barcode }}
                                    </div>
                                    {% if item.batchNumber %}
                                        <div class=\"batch-info\">
                                            Lot: {{ item.batchNumber }}
                                        </div>
                                    {% endif %}
                                    {% if item.expiryDate %}
                                        <div class=\"batch-info\" style=\"background-color: rgba(231, 76, 60, 0.1); color: #e74c3c;\">
                                            Exp: {{ item.expiryDate|date('d/m/Y') }}
                                        </div>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">{{ item.quantity }}</td>
                                <td class=\"text-right\">{{ item.unitPrice|format_fcfa }}</td>
                                <td class=\"text-right\">{{ item.totalPrice|format_fcfa }}</td>
                            </tr>
                        {% endfor %}
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center\" style=\"padding: 40px; color: #999;\">
                                Aucun produit dans cette commande
                            </td>
                        </tr>
                    {% endif %}
                </tbody>
                <tfoot>
                    <tr style=\"background-color: #f8f9fa; font-weight: 600;\">
                        <td colspan=\"4\" class=\"text-right\" style=\"padding: 15px;\">MONTANT TOTAL :</td>
                        <td class=\"text-right\" style=\"padding: 15px;\">{{ purchase.totalAmount|format_fcfa }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        {% if purchase.notes %}
        <div class=\"notes\">
            <div class=\"notes-title\">📝 NOTES & COMMENTAIRES</div>
            <div class=\"notes-content\">{{ purchase.notes|nl2br }}</div>
        </div>
        {% endif %}
        
        <div class=\"instructions\">
            <div class=\"instructions-title\">📋 INSTRUCTIONS POUR LE FOURNISSEUR</div>
            <p style=\"margin: 0; color: #666;\">
                Veuillez confirmer cette commande par retour d'email ou par téléphone dans les plus brefs délais.<br>
                Merci de nous indiquer votre délai de livraison estimé et toute information concernant la préparation de la commande.
            </p>
        </div>
        
        <div class=\"contact-info\">
            <p style=\"margin: 0 0 10px 0; font-weight: 600; color: #2c3e50;\">CONTACT HMA MARKET</p>
            <p style=\"margin: 0 0 5px 0; color: #666;\">Téléphone : +229 01 56 13 92 00</p>
            <p style=\"margin: 0 0 5px 0; color: #666;\">Email : contact@hma-market.com</p>
            <p style=\"margin: 0; color: #666;\">Heures d'ouverture : Lundi - Samedi, 8h - 20h</p>
        </div>
        
        <div class=\"action-buttons\">
            <a href=\"mailto:contact@hma-market.com?subject=Confirmation%20commande%20%23{{ purchase.purchaseNumber }}\" class=\"btn\">
                📧 Confirmer par email
            </a>
            <a href=\"tel:+2290156139200\" class=\"btn\">
                📞 Confirmer par téléphone
            </a>
        </div>
        
        <div class=\"footer\">
            <p>Ce bon de commande a été généré automatiquement par le système HMA MARKET.</p>
            <p>HMA MARKET • Bon de commande N° {{ purchase.purchaseNumber }} • Date : {{ \"now\"|date('d/m/Y à H:i') }}</p>
            <p style=\"color: #999; font-size: 11px; margin-top: 10px;\">
                Si vous avez des questions concernant cette commande, veuillez répondre directement à cet email.
            </p>
        </div>
    </div>
</body>
</html>", "emails/purchase_order.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_order.html.twig");
    }
}
