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

/* admin/purchase/pdf_order.html.twig */
class __TwigTemplate_b03388831fab7fad9a9a245f9a3c1600 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/pdf_order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/pdf_order.html.twig"));

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
        @page { margin: 20mm; }
        body { 
            font-family: 'Helvetica', 'Arial', sans-serif; 
            font-size: 12px; 
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        /* Header */
        .header { 
            text-align: center; 
            margin-bottom: 30px; 
            padding-bottom: 20px;
            border-bottom: 3px solid #4a90e2;
        }
        
        .header h1 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 24px;
            font-weight: 700;
        }
        
        .header .order-number { 
            margin: 0 0 15px 0; 
            color: #4a90e2;
            font-size: 18px;
            font-weight: 600;
        }
        
        /* Status */
        .status {
            display: inline-block;
            padding: 8px 20px;
            background-color: #4a90e2;
            color: white;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            margin: 10px 0;
        }
        
        /* Company Info */
        .company-info { 
            margin-bottom: 25px;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 10px;
            border: 1px solid #e1e8ed;
        }
        
        .company-info h3 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 16px;
            font-weight: 700;
        }
        
        /* Card Layout */
        .card {
            background: white;
            border-radius: 10px;
            border: 1px solid #e1e8ed;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .card-title {
            color: #2c3e50;
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 15px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #4a90e2;
        }
        
        /* Supplier Info */
        .supplier-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .info-item {
            margin-bottom: 8px;
        }
        
        .info-label { 
            font-weight: 600; 
            color: #666;
            margin-bottom: 2px;
            font-size: 11px;
        }
        
        .info-value { 
            color: #333;
            font-size: 12px;
        }
        
        /* Summary */
        .summary {
            display: flex;
            justify-content: space-between;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #4a90e2;
        }
        
        .summary-item {
            text-align: center;
        }
        
        .summary-value {
            font-size: 18px;
            font-weight: 700;
            color: #4a90e2;
            margin-bottom: 5px;
        }
        
        .summary-label {
            font-size: 11px;
            color: #666;
            text-transform: uppercase;
        }
        
        /* Table */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0;
        }
        
        thead th { 
            background-color: #2c3e50;
            color: white;
            padding: 12px 10px; 
            text-align: left; 
            font-weight: 600;
            font-size: 11px;
            text-transform: uppercase;
            border: none;
        }
        
        tbody td { 
            padding: 12px 10px; 
            border-bottom: 1px solid #e1e8ed;
            vertical-align: top;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        /* Product Info */
        .product-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 3px;
        }
        
        .product-details {
            font-size: 11px;
            color: #666;
        }
        
        .batch-info {
            background-color: rgba(74, 144, 226, 0.1);
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 10px;
            color: #4a90e2;
            display: inline-block;
            margin-top: 5px;
        }
        
        /* Totals */
        .totals {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e1e8ed;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed #e1e8ed;
        }
        
        .total-label {
            color: #666;
        }
        
        .total-value {
            font-weight: 600;
            color: #2c3e50;
        }
        
        .grand-total {
            font-size: 16px;
            color: #4a90e2;
            font-weight: 700;
            border-bottom: none;
            margin-top: 10px;
        }
        
        /* Notes */
        .notes {
            background-color: #fff8e1;
            border-left: 4px solid #ffc107;
            padding: 15px;
            border-radius: 6px;
            margin-top: 20px;
        }
        
        .notes-title {
            font-weight: 600;
            color: #856404;
            margin-bottom: 8px;
            font-size: 12px;
        }
        
        .notes-content {
            color: #666;
            font-size: 11px;
            line-height: 1.4;
        }
        
        /* Footer */
        .footer { 
            margin-top: 40px; 
            padding-top: 20px; 
            border-top: 1px solid #e1e8ed; 
            font-size: 10px; 
            color: #999;
            text-align: center;
        }
        
        /* Utility Classes */
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .text-bold { font-weight: 700; }
        .text-muted { color: #999; }
        
        /* Date Info */
        .date-info {
            color: #666;
            font-size: 11px;
            text-align: center;
            margin-top: 5px;
        }
        
        /* Page Number */
        .page-number {
            position: fixed;
            bottom: 10mm;
            right: 10mm;
            font-size: 10px;
            color: #999;
        }
    </style>
</head>
<body>
    <!-- DEBUG SECTION (à supprimer après) -->
    <div style=\"background: yellow; padding: 10px; margin-bottom: 20px; border: 2px solid red;\">
        <h3>DEBUG - PDF TEMPLATE</h3>
        <p>Purchase ID: ";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 278, $this->source); })()), "id", [], "any", false, false, false, 278), "html", null, true);
        yield "</p>
        <p>Purchase Number: ";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 279, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 279), "html", null, true);
        yield "</p>
        <p>Total Amount: ";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 280, $this->source); })()), "totalAmount", [], "any", false, false, false, 280), "html", null, true);
        yield "</p>
        <p>Purchase Items count: ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 281, $this->source); })()), "purchaseItems", [], "any", false, false, false, 281)), "html", null, true);
        yield "</p>
        
        ";
        // line 283
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 283, $this->source); })()), "purchaseItems", [], "any", false, false, false, 283)) > 0)) {
            // line 284
            yield "            <table border=\"1\" style=\"width: 100%;\">
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
                ";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 292, $this->source); })()), "purchaseItems", [], "any", false, false, false, 292));
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
                // line 293
                yield "                    <tr>
                        <td>";
                // line 294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 294), "html", null, true);
                yield "</td>
                        <td>";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 295), "name", [], "any", false, false, false, 295), "html", null, true);
                yield "</td>
                        <td>";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 296), "html", null, true);
                yield "</td>
                        <td>";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 297), "html", null, true);
                yield "</td>
                        <td>";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 298), "html", null, true);
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
            // line 301
            yield "            </table>
        ";
        } else {
            // line 303
            yield "            <p style=\"color: red; font-weight: bold;\">NO ITEMS FOUND!</p>
        ";
        }
        // line 305
        yield "    </div>
    <!-- END DEBUG -->
    
    <!-- Page Number -->
    <div class=\"page-number\">Page 1/1</div>
    
    <div class=\"header\">
        <h1>BON DE COMMANDE</h1>
        <div class=\"order-number\">N° ";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 313, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 313), "html", null, true);
        yield "</div>
        <div class=\"status\">COMMANDE CONFIRMÉE</div>
        <div class=\"date-info\">
            Date : ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 316, $this->source); })()), "createdAt", [], "any", false, false, false, 316), "d/m/Y"), "html", null, true);
        yield " | Heure : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 316, $this->source); })()), "createdAt", [], "any", false, false, false, 316), "H:i"), "html", null, true);
        yield "
        </div>
    </div>
    
    <div class=\"company-info\">
        <h3>HMA MARKET</h3>
        <p style=\"margin: 5px 0; color: #666;\">Votre épicerie de quartier</p>
        <p style=\"margin: 5px 0; color: #666;\">Tél: +229 01 56 13 92 00</p>
        <p style=\"margin: 5px 0; color: #666;\">Email: contact@hma-market.com</p>
    </div>
    
    <div class=\"card\">
        <div class=\"card-title\">INFORMATIONS FOURNISSEUR</div>
        <div class=\"supplier-info\">
            ";
        // line 330
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 330, $this->source); })()), "supplier", [], "any", false, false, false, 330)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 331
            yield "                <div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">NOM DU FOURNISSEUR</div>
                        <div class=\"info-value\">";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 334, $this->source); })()), "supplier", [], "any", false, false, false, 334), "name", [], "any", false, false, false, 334), "html", null, true);
            yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">EMAIL</div>
                        <div class=\"info-value\">";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 338, $this->source); })()), "supplier", [], "any", false, false, false, 338), "email", [], "any", false, false, false, 338), "html", null, true);
            yield "</div>
                    </div>
                </div>
                <div>
                    ";
            // line 342
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 342, $this->source); })()), "supplier", [], "any", false, false, false, 342), "phone", [], "any", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 343
                yield "                    <div class=\"info-item\">
                        <div class=\"info-label\">TÉLÉPHONE</div>
                        <div class=\"info-value\">";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 345, $this->source); })()), "supplier", [], "any", false, false, false, 345), "phone", [], "any", false, false, false, 345), "html", null, true);
                yield "</div>
                    </div>
                    ";
            }
            // line 348
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 348, $this->source); })()), "supplier", [], "any", false, false, false, 348), "adress", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 349
                yield "                    <div class=\"info-item\">
                        <div class=\"info-label\">ADRESSE</div>
                        <div class=\"info-value\">";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 351, $this->source); })()), "supplier", [], "any", false, false, false, 351), "adress", [], "any", false, false, false, 351), "html", null, true);
                yield "</div>
                    </div>
                    ";
            }
            // line 354
            yield "                </div>
            ";
        } else {
            // line 356
            yield "                <div class=\"info-item\">
                    <div class=\"info-value\" style=\"color: #e74c3c; font-style: italic;\">
                        Aucun fournisseur spécifié
                    </div>
                </div>
            ";
        }
        // line 362
        yield "        </div>
    </div>
    
    <div class=\"card\">
        <div class=\"card-title\">RÉSUMÉ DE LA COMMANDE</div>
        
        <div class=\"summary\">
            <div class=\"summary-item\">
                <div class=\"summary-value\">";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 370, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"summary-label\">Articles</div>
            </div>
            <div class=\"summary-item\">
                <div class=\"summary-value\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 374, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"summary-label\">Quantité totale</div>
            </div>
            <div class=\"summary-item\">
                <div class=\"summary-value\">";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 378, $this->source); })())), "html", null, true);
        yield "</div>
                <div class=\"summary-label\">Montant total</div>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th width=\"5%\">#</th>
                    <th width=\"45%\">PRODUIT</th>
                    <th width=\"10%\" class=\"text-center\">QTÉ</th>
                    <th width=\"15%\" class=\"text-right\">PRIX UNITAIRE</th>
                    <th width=\"15%\" class=\"text-right\">TOTAL</th>
                    <th width=\"10%\" class=\"text-center\">INFOS</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 395
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 395, $this->source); })()), "purchaseItems", [], "any", false, false, false, 395)) > 0)) {
            // line 396
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 396, $this->source); })()), "purchaseItems", [], "any", false, false, false, 396));
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
                // line 397
                yield "                        <tr>
                            <td class=\"text-center\">";
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 398), "html", null, true);
                yield "</td>
                            <td>
                                <div class=\"product-name\">";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 400), "name", [], "any", false, false, false, 400), "html", null, true);
                yield "</div>
                                <div class=\"product-details\">
                                    Réf: ";
                // line 402
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 402), "barcode", [], "any", false, false, false, 402), "html", null, true);
                yield "
                                </div>
                                ";
                // line 404
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 404)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 405
                    yield "                                    <div class=\"batch-info\">
                                        Lot: ";
                    // line 406
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 406), "html", null, true);
                    yield "
                                    </div>
                                ";
                }
                // line 409
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 410
                    yield "                                    <div class=\"batch-info\" style=\"background-color: rgba(231, 76, 60, 0.1); color: #e74c3c;\">
                                        Exp: ";
                    // line 411
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 411), "d/m/Y"), "html", null, true);
                    yield "
                                    </div>
                                ";
                }
                // line 414
                yield "                            </td>
                            <td class=\"text-center\">
                                <span style=\"font-weight: 600;\">";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 416), "html", null, true);
                yield "</span>
                            </td>
                            <td class=\"text-right\">";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 418)), "html", null, true);
                yield "</td>
                            <td class=\"text-right\" style=\"font-weight: 600;\">";
                // line 419
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 419)), "html", null, true);
                yield "</td>
                            <td class=\"text-center\">
                                ";
                // line 421
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 421), "hasExpiryDate", [], "any", false, false, false, 421)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 422
                    yield "                                    <span style=\"color: #e74c3c; font-size: 9px;\">⚠️ Périmable</span>
                                ";
                } else {
                    // line 424
                    yield "                                    <span style=\"color: #27ae60; font-size: 9px;\">✓ Non périmable</span>
                                ";
                }
                // line 426
                yield "                            </td>
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
            // line 429
            yield "                ";
        } else {
            // line 430
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\" style=\"padding: 40px; color: #999;\">
                            Aucun produit dans cette commande
                        </td>
                    </tr>
                ";
        }
        // line 436
        yield "            </tbody>
        </table>
        
        <div class=\"totals\">
            <div class=\"total-row\">
                <span class=\"total-label\">Sous-total (";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 441, $this->source); })()), "html", null, true);
        yield " article";
        if (((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 441, $this->source); })()) > 1)) {
            yield "s";
        }
        yield ")</span>
                <span class=\"total-value\">";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 442, $this->source); })())), "html", null, true);
        yield "</span>
            </div>
            <div class=\"total-row\">
                <span class=\"total-label\">Frais de livraison</span>
                <span class=\"total-value\">0 F CFA</span>
            </div>
            <div class=\"total-row grand-total\">
                <span class=\"total-label\">MONTANT TOTAL</span>
                <span class=\"total-value\">";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 450, $this->source); })()), "totalAmount", [], "any", false, false, false, 450)), "html", null, true);
        yield "</span>
            </div>
        </div>
    </div>
    
    ";
        // line 455
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 455, $this->source); })()), "notes", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "    <div class=\"notes\">
        <div class=\"notes-title\">📝 NOTES & COMMENTAIRES</div>
        <div class=\"notes-content\">";
            // line 458
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 458, $this->source); })()), "notes", [], "any", false, false, false, 458), "html", null, true));
            yield "</div>
    </div>
    ";
        }
        // line 461
        yield "    
    <div class=\"card\">
        <div class=\"card-title\">SIGNATURE & VALIDATION</div>
        <div style=\"padding: 20px; text-align: center;\">
            <div style=\"margin-bottom: 30px;\">
                <div style=\"border-bottom: 1px solid #333; width: 60%; margin: 0 auto; padding-top: 40px;\"></div>
                <p style=\"color: #666; margin-top: 5px; font-size: 11px;\">Signature et cachet du fournisseur</p>
            </div>
            
            <div>
                <p style=\"color: #666; margin-bottom: 5px;\">Date de validation : __________________________</p>
                <p style=\"color: #666; font-size: 10px; margin-top: 20px;\">
                    Pour acceptation et prise en charge<br>
                    Document généré le ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
                </p>
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>HMA MARKET • Bahhh de commande N° ";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 481, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 481), "html", null, true);
        yield "</p>
        <p>Document généré automatiquement • Ce document ne nécessite pas de signature manuscrite</p>
        <p>Pour toute question, contactez-nous à contact@hma-market.com</p>
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
        return "admin/purchase/pdf_order.html.twig";
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
        return array (  744 => 481,  734 => 474,  719 => 461,  713 => 458,  709 => 456,  707 => 455,  699 => 450,  688 => 442,  680 => 441,  673 => 436,  665 => 430,  662 => 429,  646 => 426,  642 => 424,  638 => 422,  636 => 421,  631 => 419,  627 => 418,  622 => 416,  618 => 414,  612 => 411,  609 => 410,  606 => 409,  600 => 406,  597 => 405,  595 => 404,  590 => 402,  585 => 400,  580 => 398,  577 => 397,  559 => 396,  557 => 395,  537 => 378,  530 => 374,  523 => 370,  513 => 362,  505 => 356,  501 => 354,  495 => 351,  491 => 349,  488 => 348,  482 => 345,  478 => 343,  476 => 342,  469 => 338,  462 => 334,  457 => 331,  455 => 330,  436 => 316,  430 => 313,  420 => 305,  416 => 303,  412 => 301,  395 => 298,  391 => 297,  387 => 296,  383 => 295,  379 => 294,  376 => 293,  359 => 292,  349 => 284,  347 => 283,  342 => 281,  338 => 280,  334 => 279,  330 => 278,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Bon de commande #{{ purchase.purchaseNumber }}</title>
    <style>
        @page { margin: 20mm; }
        body { 
            font-family: 'Helvetica', 'Arial', sans-serif; 
            font-size: 12px; 
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        /* Header */
        .header { 
            text-align: center; 
            margin-bottom: 30px; 
            padding-bottom: 20px;
            border-bottom: 3px solid #4a90e2;
        }
        
        .header h1 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 24px;
            font-weight: 700;
        }
        
        .header .order-number { 
            margin: 0 0 15px 0; 
            color: #4a90e2;
            font-size: 18px;
            font-weight: 600;
        }
        
        /* Status */
        .status {
            display: inline-block;
            padding: 8px 20px;
            background-color: #4a90e2;
            color: white;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            margin: 10px 0;
        }
        
        /* Company Info */
        .company-info { 
            margin-bottom: 25px;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 10px;
            border: 1px solid #e1e8ed;
        }
        
        .company-info h3 { 
            margin: 0 0 10px 0; 
            color: #2c3e50;
            font-size: 16px;
            font-weight: 700;
        }
        
        /* Card Layout */
        .card {
            background: white;
            border-radius: 10px;
            border: 1px solid #e1e8ed;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .card-title {
            color: #2c3e50;
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 15px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #4a90e2;
        }
        
        /* Supplier Info */
        .supplier-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .info-item {
            margin-bottom: 8px;
        }
        
        .info-label { 
            font-weight: 600; 
            color: #666;
            margin-bottom: 2px;
            font-size: 11px;
        }
        
        .info-value { 
            color: #333;
            font-size: 12px;
        }
        
        /* Summary */
        .summary {
            display: flex;
            justify-content: space-between;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #4a90e2;
        }
        
        .summary-item {
            text-align: center;
        }
        
        .summary-value {
            font-size: 18px;
            font-weight: 700;
            color: #4a90e2;
            margin-bottom: 5px;
        }
        
        .summary-label {
            font-size: 11px;
            color: #666;
            text-transform: uppercase;
        }
        
        /* Table */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0;
        }
        
        thead th { 
            background-color: #2c3e50;
            color: white;
            padding: 12px 10px; 
            text-align: left; 
            font-weight: 600;
            font-size: 11px;
            text-transform: uppercase;
            border: none;
        }
        
        tbody td { 
            padding: 12px 10px; 
            border-bottom: 1px solid #e1e8ed;
            vertical-align: top;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        /* Product Info */
        .product-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 3px;
        }
        
        .product-details {
            font-size: 11px;
            color: #666;
        }
        
        .batch-info {
            background-color: rgba(74, 144, 226, 0.1);
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 10px;
            color: #4a90e2;
            display: inline-block;
            margin-top: 5px;
        }
        
        /* Totals */
        .totals {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e1e8ed;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed #e1e8ed;
        }
        
        .total-label {
            color: #666;
        }
        
        .total-value {
            font-weight: 600;
            color: #2c3e50;
        }
        
        .grand-total {
            font-size: 16px;
            color: #4a90e2;
            font-weight: 700;
            border-bottom: none;
            margin-top: 10px;
        }
        
        /* Notes */
        .notes {
            background-color: #fff8e1;
            border-left: 4px solid #ffc107;
            padding: 15px;
            border-radius: 6px;
            margin-top: 20px;
        }
        
        .notes-title {
            font-weight: 600;
            color: #856404;
            margin-bottom: 8px;
            font-size: 12px;
        }
        
        .notes-content {
            color: #666;
            font-size: 11px;
            line-height: 1.4;
        }
        
        /* Footer */
        .footer { 
            margin-top: 40px; 
            padding-top: 20px; 
            border-top: 1px solid #e1e8ed; 
            font-size: 10px; 
            color: #999;
            text-align: center;
        }
        
        /* Utility Classes */
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .text-bold { font-weight: 700; }
        .text-muted { color: #999; }
        
        /* Date Info */
        .date-info {
            color: #666;
            font-size: 11px;
            text-align: center;
            margin-top: 5px;
        }
        
        /* Page Number */
        .page-number {
            position: fixed;
            bottom: 10mm;
            right: 10mm;
            font-size: 10px;
            color: #999;
        }
    </style>
</head>
<body>
    <!-- DEBUG SECTION (à supprimer après) -->
    <div style=\"background: yellow; padding: 10px; margin-bottom: 20px; border: 2px solid red;\">
        <h3>DEBUG - PDF TEMPLATE</h3>
        <p>Purchase ID: {{ purchase.id }}</p>
        <p>Purchase Number: {{ purchase.purchaseNumber }}</p>
        <p>Total Amount: {{ purchase.totalAmount }}</p>
        <p>Purchase Items count: {{ purchase.purchaseItems|length }}</p>
        
        {% if purchase.purchaseItems|length > 0 %}
            <table border=\"1\" style=\"width: 100%;\">
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
                {% for item in purchase.purchaseItems %}
                    <tr>
                        <td>{{ loop.index }}</td>
                        <td>{{ item.product.name }}</td>
                        <td>{{ item.quantity }}</td>
                        <td>{{ item.unitPrice }}</td>
                        <td>{{ item.totalPrice }}</td>
                    </tr>
                {% endfor %}
            </table>
        {% else %}
            <p style=\"color: red; font-weight: bold;\">NO ITEMS FOUND!</p>
        {% endif %}
    </div>
    <!-- END DEBUG -->
    
    <!-- Page Number -->
    <div class=\"page-number\">Page 1/1</div>
    
    <div class=\"header\">
        <h1>BON DE COMMANDE</h1>
        <div class=\"order-number\">N° {{ purchase.purchaseNumber }}</div>
        <div class=\"status\">COMMANDE CONFIRMÉE</div>
        <div class=\"date-info\">
            Date : {{ purchase.createdAt|date('d/m/Y') }} | Heure : {{ purchase.createdAt|date('H:i') }}
        </div>
    </div>
    
    <div class=\"company-info\">
        <h3>HMA MARKET</h3>
        <p style=\"margin: 5px 0; color: #666;\">Votre épicerie de quartier</p>
        <p style=\"margin: 5px 0; color: #666;\">Tél: +229 01 56 13 92 00</p>
        <p style=\"margin: 5px 0; color: #666;\">Email: contact@hma-market.com</p>
    </div>
    
    <div class=\"card\">
        <div class=\"card-title\">INFORMATIONS FOURNISSEUR</div>
        <div class=\"supplier-info\">
            {% if purchase.supplier %}
                <div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">NOM DU FOURNISSEUR</div>
                        <div class=\"info-value\">{{ purchase.supplier.name }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">EMAIL</div>
                        <div class=\"info-value\">{{ purchase.supplier.email }}</div>
                    </div>
                </div>
                <div>
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
                </div>
            {% else %}
                <div class=\"info-item\">
                    <div class=\"info-value\" style=\"color: #e74c3c; font-style: italic;\">
                        Aucun fournisseur spécifié
                    </div>
                </div>
            {% endif %}
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
                <div class=\"summary-value\">{{ subtotal|format_fcfa }}</div>
                <div class=\"summary-label\">Montant total</div>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th width=\"5%\">#</th>
                    <th width=\"45%\">PRODUIT</th>
                    <th width=\"10%\" class=\"text-center\">QTÉ</th>
                    <th width=\"15%\" class=\"text-right\">PRIX UNITAIRE</th>
                    <th width=\"15%\" class=\"text-right\">TOTAL</th>
                    <th width=\"10%\" class=\"text-center\">INFOS</th>
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
                            <td class=\"text-center\">
                                <span style=\"font-weight: 600;\">{{ item.quantity }}</span>
                            </td>
                            <td class=\"text-right\">{{ item.unitPrice|format_fcfa }}</td>
                            <td class=\"text-right\" style=\"font-weight: 600;\">{{ item.totalPrice|format_fcfa }}</td>
                            <td class=\"text-center\">
                                {% if item.product.hasExpiryDate %}
                                    <span style=\"color: #e74c3c; font-size: 9px;\">⚠️ Périmable</span>
                                {% else %}
                                    <span style=\"color: #27ae60; font-size: 9px;\">✓ Non périmable</span>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\" style=\"padding: 40px; color: #999;\">
                            Aucun produit dans cette commande
                        </td>
                    </tr>
                {% endif %}
            </tbody>
        </table>
        
        <div class=\"totals\">
            <div class=\"total-row\">
                <span class=\"total-label\">Sous-total ({{ total_items }} article{% if total_items > 1 %}s{% endif %})</span>
                <span class=\"total-value\">{{ subtotal|format_fcfa }}</span>
            </div>
            <div class=\"total-row\">
                <span class=\"total-label\">Frais de livraison</span>
                <span class=\"total-value\">0 F CFA</span>
            </div>
            <div class=\"total-row grand-total\">
                <span class=\"total-label\">MONTANT TOTAL</span>
                <span class=\"total-value\">{{ purchase.totalAmount|format_fcfa }}</span>
            </div>
        </div>
    </div>
    
    {% if purchase.notes %}
    <div class=\"notes\">
        <div class=\"notes-title\">📝 NOTES & COMMENTAIRES</div>
        <div class=\"notes-content\">{{ purchase.notes|nl2br }}</div>
    </div>
    {% endif %}
    
    <div class=\"card\">
        <div class=\"card-title\">SIGNATURE & VALIDATION</div>
        <div style=\"padding: 20px; text-align: center;\">
            <div style=\"margin-bottom: 30px;\">
                <div style=\"border-bottom: 1px solid #333; width: 60%; margin: 0 auto; padding-top: 40px;\"></div>
                <p style=\"color: #666; margin-top: 5px; font-size: 11px;\">Signature et cachet du fournisseur</p>
            </div>
            
            <div>
                <p style=\"color: #666; margin-bottom: 5px;\">Date de validation : __________________________</p>
                <p style=\"color: #666; font-size: 10px; margin-top: 20px;\">
                    Pour acceptation et prise en charge<br>
                    Document généré le {{ \"now\"|date('d/m/Y à H:i') }}
                </p>
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>HMA MARKET • Bahhh de commande N° {{ purchase.purchaseNumber }}</p>
        <p>Document généré automatiquement • Ce document ne nécessite pas de signature manuscrite</p>
        <p>Pour toute question, contactez-nous à contact@hma-market.com</p>
    </div>
</body>
</html>", "admin/purchase/pdf_order.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\pdf_order.html.twig");
    }
}
