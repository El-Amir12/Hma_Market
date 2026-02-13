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

/* admin/purchase/pdf_receipt.html.twig */
class __TwigTemplate_6f90dc468a13cd024fbd248417fd9c4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/pdf_receipt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/pdf_receipt.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu d'achat #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        @page { margin: 15mm; }
        body { 
            font-family: 'DejaVu Sans', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            font-size: 11px; 
            line-height: 1.3;
            color: #2c3e50;
            margin: 0;
            padding: 0;
        }
        
        /* Header */
        .header { 
            text-align: center; 
            margin-bottom: 25px; 
            padding-bottom: 15px;
            border-bottom: 3px solid #2a9d8f;
        }
        
        .header h1 { 
            margin: 0 0 5px 0; 
            color: #2a9d8f;
            font-size: 22px;
            font-weight: 700;
        }
        
        .header h2 { 
            margin: 0 0 10px 0; 
            color: #2a9d8f;
            font-size: 18px;
            font-weight: 600;
        }
        
        /* Status Badge */
        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 10px;
            background-color: rgba(42, 157, 143, 0.1);
            color: #2a9d8f;
            border: 1px solid #2a9d8f;
        }
        
        /* Company Info */
        .company-info { 
            margin-bottom: 25px;
            padding: 12px 15px;
            background: linear-gradient(135deg, #f8f9fc 0%, #eef1fd 100%);
            border-radius: 8px;
            border: 1px solid #e9ecef;
        }
        
        .company-info h3 { 
            margin: 0 0 8px 0; 
            color: #2c3e50;
            font-size: 16px;
            font-weight: 700;
        }
        
        /* Sections */
        .section { 
            margin-bottom: 20px; 
        }
        
        .section-title { 
            background: linear-gradient(135deg, #2a9d8f 0%, #1d7873 100%);
            color: white;
            padding: 10px 15px; 
            font-weight: 600; 
            margin-bottom: 12px;
            border-radius: 6px;
            font-size: 12px;
            letter-spacing: 0.5px;
        }
        
        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .info-item {
            padding: 8px 0;
        }
        
        .info-label { 
            font-weight: 600; 
            color: #495057;
            margin-bottom: 3px;
        }
        
        .info-value { 
            color: #6c757d;
        }
        
        /* Table Styling */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 15px 0 20px 0;
            font-size: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        
        thead {
            background: linear-gradient(135deg, #2a9d8f 0%, #1d7873 100%);
        }
        
        th { 
            color: white;
            padding: 12px 10px; 
            text-align: left; 
            border: none;
            font-weight: 600;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        td { 
            padding: 12px 10px; 
            border-bottom: 1px solid #e9ecef;
            vertical-align: top;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        tbody tr:hover {
            background-color: rgba(42, 157, 143, 0.05);
        }
        
        /* Product Info in Table */
        .product-cell {
            padding: 5px 0;
        }
        
        .product-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 3px;
            font-size: 11px;
        }
        
        .product-details {
            font-size: 9px;
            color: #6c757d;
            margin-bottom: 2px;
        }
        
        /* Batch Info */
        .batch-info {
            background-color: rgba(13, 202, 240, 0.1);
            padding: 3px 6px;
            border-radius: 4px;
            font-size: 9px;
            color: #0dcaf0;
            display: inline-block;
            margin-top: 3px;
        }
        
        /* Date Column */
        .date-column {
            min-width: 100px;
        }
        
        .date-cell {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        .date-item {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 9px;
        }
        
        .date-label {
            font-weight: 600;
            color: #495057;
            min-width: 40px;
        }
        
        .date-value {
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 9px;
            font-weight: 500;
        }
        
        .date-manufacture {
            background-color: rgba(67, 97, 238, 0.1);
            color: #4361ee;
            border: 1px solid rgba(67, 97, 238, 0.2);
        }
        
        .date-expiry {
            background-color: rgba(244, 162, 97, 0.1);
            color: #f4a261;
            border: 1px solid rgba(244, 162, 97, 0.2);
        }
        
        .date-na {
            color: #6c757d;
            font-style: italic;
            background-color: #f8f9fa;
            padding: 2px 6px;
            border-radius: 3px;
            border: 1px dashed #dee2e6;
        }
        
        .date-expired {
            background-color: rgba(231, 57, 70, 0.1);
            color: #e63946;
            border: 1px solid rgba(231, 57, 70, 0.2);
            font-weight: 600;
        }
        
        .date-soon-expired {
            background-color: rgba(244, 162, 97, 0.15);
            color: #f4a261;
            border: 1px solid rgba(244, 162, 97, 0.3);
            font-weight: 600;
        }
        
        /* Total Row */
        .total-row { 
            background: linear-gradient(135deg, #f8f9fc 0%, #e9ecef 100%);
            font-weight: 700;
        }
        
        .total-label {
            text-align: right;
            color: #2c3e50;
        }
        
        .total-value {
            text-align: right;
            color: #2a9d8f;
            font-size: 12px;
        }
        
        /* Quantity Badge */
        .quantity-badge {
            display: inline-block;
            padding: 4px 8px;
            background-color: rgba(67, 97, 238, 0.1);
            border-radius: 4px;
            font-weight: 600;
            color: #4361ee;
            border: 1px solid rgba(67, 97, 238, 0.2);
        }
        
        /* Price Formatting */
        .price-unit {
            color: #2c3e50;
            font-weight: 600;
        }
        
        .price-total {
            color: #2a9d8f;
            font-weight: 700;
        }
        
        /* Non-perishable Indicator */
        .non-perishable {
            color: #6c757d;
            font-style: italic;
            font-size: 9px;
            padding: 3px 6px;
            background-color: #f8f9fa;
            border-radius: 4px;
            display: inline-block;
        }
        
        /* Alert Boxes */
        .alert-box {
            padding: 10px 12px;
            border-radius: 6px;
            margin: 15px 0;
            font-size: 10px;
        }
        
        .alert-success {
            background-color: rgba(42, 157, 143, 0.1);
            border-left: 4px solid #2a9d8f;
            color: #1d7873;
        }
        
        .alert-info {
            background-color: rgba(13, 202, 240, 0.1);
            border-left: 4px solid #0dcaf0;
            color: #0c5460;
        }
        
        /* Footer */
        .footer { 
            margin-top: 30px; 
            padding-top: 15px; 
            border-top: 1px solid #dee2e6; 
            font-size: 9px; 
            text-align: center;
            color: #6c757d;
        }
        
        /* Signature */
        .signature-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
        }
        
        .signature-box {
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }
        
        .signature-line {
            border-top: 1px solid #2c3e50;
            width: 100%;
            margin: 25px 0 8px 0;
        }
        
        /* Receipt Details */
        .receipt-details {
            background-color: rgba(42, 157, 143, 0.05);
            padding: 12px 15px;
            border-radius: 6px;
            margin: 15px 0;
            border: 1px solid rgba(42, 157, 143, 0.2);
        }
        
        /* Page Break Control */
        .avoid-break {
            page-break-inside: avoid;
        }
        
        /* Utility Classes */
        .mb-1 { margin-bottom: 5px; }
        .mb-2 { margin-bottom: 10px; }
        .mb-3 { margin-bottom: 15px; }
        .mt-1 { margin-top: 5px; }
        .mt-2 { margin-top: 10px; }
        .mt-3 { margin-top: 15px; }
        .p-1 { padding: 5px; }
        .p-2 { padding: 10px; }
        .p-3 { padding: 15px; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-bold { font-weight: 700; }
        .text-success { color: #2a9d8f; }
        .text-primary { color: #4361ee; }
        .text-warning { color: #f4a261; }
        .text-danger { color: #e63946; }
        .text-muted { color: #6c757d; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>CONFIRMATION DE RÉCEPTION</h1>
        <h2>Commande N° ";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 376, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 376), "html", null, true);
        yield "</h2>
        <div class=\"status-badge\">
            <i class=\"fas fa-check-circle\"></i> RÉCEPTION CONFIRMÉE
        </div>
        <p style=\"margin: 5px 0 0 0; color: #6c757d;\">
            Réceptionnée le ";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 381, $this->source); })()), "receivedAt", [], "any", false, false, false, 381), "d/m/Y à H:i"), "html", null, true);
        yield "
        </p>
    </div>
    
    <div class=\"company-info\">
        <h3>HMA MARKET</h3>
        <p style=\"margin: 0 0 5px 0; color: #495057;\">Votre épicerie de quartier</p>
        <p style=\"margin: 0; color: #6c757d;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
    </div>
    
    <div class=\"alert-box alert-success\">
        <i class=\"fas fa-check-circle\"></i> 
        <strong>Réception validée :</strong> Les produits ont été vérifiés, reçus et ajoutés au stock.
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS FOURNISSEUR</div>
        <div class=\"info-grid\">
            ";
        // line 399
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 399, $this->source); })()), "supplier", [], "any", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 400
            yield "            <div class=\"info-item\">
                <div class=\"info-label\">Nom du fournisseur</div>
                <div class=\"info-value\">";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 402, $this->source); })()), "supplier", [], "any", false, false, false, 402), "name", [], "any", false, false, false, 402), "html", null, true);
            yield "</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Email</div>
                <div class=\"info-value\">";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 406, $this->source); })()), "supplier", [], "any", false, false, false, 406), "email", [], "any", false, false, false, 406), "html", null, true);
            yield "</div>
            </div>
            ";
            // line 408
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 408, $this->source); })()), "supplier", [], "any", false, false, false, 408), "phone", [], "any", false, false, false, 408)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 409
                yield "            <div class=\"info-item\">
                <div class=\"info-label\">Téléphone</div>
                <div class=\"info-value\">";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 411, $this->source); })()), "supplier", [], "any", false, false, false, 411), "phone", [], "any", false, false, false, 411), "html", null, true);
                yield "</div>
            </div>
            ";
            }
            // line 414
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 414, $this->source); })()), "supplier", [], "any", false, false, false, 414), "adress", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 415
                yield "            <div class=\"info-item\">
                <div class=\"info-label\">Adresse</div>
                <div class=\"info-value\">";
                // line 417
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 417, $this->source); })()), "supplier", [], "any", false, false, false, 417), "adress", [], "any", false, false, false, 417), "html", null, true);
                yield "</div>
            </div>
            ";
            }
            // line 420
            yield "            ";
        } else {
            // line 421
            yield "            <div class=\"info-item\">
                <div class=\"info-value\" style=\"color: #e63946; font-style: italic;\">
                    <i class=\"fas fa-exclamation-circle\"></i> Aucun fournisseur spécifié
                </div>
            </div>
            ";
        }
        // line 427
        yield "        </div>
    </div>
    
    <div class=\"receipt-details\">
        <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;\">
            <div>
                <div class=\"info-label\">Date de commande</div>
                <div class=\"info-value\">";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 434, $this->source); })()), "createdAt", [], "any", false, false, false, 434), "d/m/Y H:i"), "html", null, true);
        yield "</div>
            </div>
            <div>
                <div class=\"info-label\">Date de réception</div>
                <div class=\"info-value\">";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 438, $this->source); })()), "receivedAt", [], "any", false, false, false, 438), "d/m/Y H:i"), "html", null, true);
        yield "</div>
            </div>
            <div>
                <div class=\"info-label\">Réceptionné par</div>
                <div class=\"info-value\">";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, true, false, 442), "fullName", [], "any", true, true, false, 442)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 442, $this->source); })()), "user", [], "any", false, false, false, 442), "fullName", [], "any", false, false, false, 442), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 442, $this->source); })()), "user", [], "any", false, false, false, 442), "email", [], "any", false, false, false, 442))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 442, $this->source); })()), "user", [], "any", false, false, false, 442), "email", [], "any", false, false, false, 442))), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>
    
    <div class=\"section avoid-break\">
        <div class=\"section-title\">DÉTAILS DES PRODUITS REÇUS</div>
        
        <div style=\"margin-bottom: 15px; padding: 8px 12px; background-color: #f8f9fa; border-radius: 6px;\">
            <span class=\"text-bold text-success\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("total_items", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 451, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 451, $this->source); })()), "purchaseItems", [], "any", false, false, false, 451)))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 451, $this->source); })()), "purchaseItems", [], "any", false, false, false, 451)))), "html", null, true);
        yield "</span> produit(s) reçu(s) | 
            <span class=\"text-bold text-success\">";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("total_quantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 452, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span> unité(s) totale(s)
        </div>
        
        <table>
            <thead>
                <tr>
                    <th width=\"5%\" class=\"text-center\">#</th>
                    <th width=\"30%\">PRODUIT</th>
                    <th width=\"15%\" class=\"text-center\">N° LOT</th>
                    <th width=\"10%\" class=\"text-center\">QTÉ</th>
                    <th width=\"15%\" class=\"text-right\">PRIX UNIT.</th>
                    <th width=\"25%\" class=\"text-center\">DATES CRITIQUES</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 467
        $context["totalQuantity"] = 0;
        // line 468
        yield "                ";
        $context["totalAmount"] = 0;
        // line 469
        yield "                
                ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 470, $this->source); })()), "purchaseItems", [], "any", false, false, false, 470));
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
            // line 471
            yield "                    ";
            $context["totalQuantity"] = ((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 471, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 471));
            // line 472
            yield "                    ";
            $context["totalAmount"] = ((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 472, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 472));
            // line 473
            yield "                    
                    ";
            // line 474
            $context["isPerishable"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 474), "hasExpiryDate", [], "any", false, false, false, 474);
            // line 475
            yield "                    ";
            $context["manufacturingDate"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 475);
            // line 476
            yield "                    ";
            $context["expiryDate"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 476);
            // line 477
            yield "                    
                    ";
            // line 478
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
            // line 479
            yield "                    ";
            $context["expiryTimestamp"] = (((($tmp = (isset($context["expiryDate"]) || array_key_exists("expiryDate", $context) ? $context["expiryDate"] : (function () { throw new RuntimeError('Variable "expiryDate" does not exist.', 479, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["expiryDate"]) || array_key_exists("expiryDate", $context) ? $context["expiryDate"] : (function () { throw new RuntimeError('Variable "expiryDate" does not exist.', 479, $this->source); })()), "timestamp", [], "any", false, false, false, 479)) : (null));
            // line 480
            yield "                    
                    <tr>
                        <td class=\"text-center\">";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 482), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"product-cell\">
                                <div class=\"product-name\">";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485), "html", null, true);
            yield "</div>
                                <div class=\"product-details\">
                                    <strong>Réf:</strong> ";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 487), "barcode", [], "any", false, false, false, 487), "html", null, true);
            yield "
                                    ";
            // line 488
            if ((($tmp = (isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 488, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 489
                yield "                                        <span style=\"color: #f4a261; font-size: 8px;\">
                                            <i class=\"fas fa-clock\"></i> Périssable
                                        </span>
                                    ";
            }
            // line 493
            yield "                                </div>
                            </div>
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 497
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 497)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 498
                yield "                                <span class=\"batch-info\">
                                    <i class=\"fas fa-box\"></i> ";
                // line 499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 499), "html", null, true);
                yield "
                                </span>
                            ";
            } else {
                // line 502
                yield "                                <span class=\"date-na\">N/A</span>
                            ";
            }
            // line 504
            yield "                        </td>
                        <td class=\"text-center\">
                            <span class=\"quantity-badge\">";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 506), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"text-right price-unit\">";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 508)), "html", null, true);
            yield "</td>
                        <td class=\"date-column\">
                            <div class=\"date-cell\">
                                ";
            // line 511
            if ((($tmp = (isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 511, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 512
                yield "                                    <div class=\"date-item\">
                                        <span class=\"date-label\">Fab:</span>
                                        ";
                // line 514
                if ((($tmp = (isset($context["manufacturingDate"]) || array_key_exists("manufacturingDate", $context) ? $context["manufacturingDate"] : (function () { throw new RuntimeError('Variable "manufacturingDate" does not exist.', 514, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 515
                    yield "                                            <span class=\"date-value date-manufacture\">
                                                ";
                    // line 516
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["manufacturingDate"]) || array_key_exists("manufacturingDate", $context) ? $context["manufacturingDate"] : (function () { throw new RuntimeError('Variable "manufacturingDate" does not exist.', 516, $this->source); })()), "d/m/Y"), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } else {
                    // line 519
                    yield "                                            <span class=\"date-na\">N/A</span>
                                        ";
                }
                // line 521
                yield "                                    </div>
                                    <div class=\"date-item\">
                                        <span class=\"date-label\">Exp:</span>
                                        ";
                // line 524
                if ((($tmp = (isset($context["expiryDate"]) || array_key_exists("expiryDate", $context) ? $context["expiryDate"] : (function () { throw new RuntimeError('Variable "expiryDate" does not exist.', 524, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 525
                    yield "                                            ";
                    if (((isset($context["expiryTimestamp"]) || array_key_exists("expiryTimestamp", $context) ? $context["expiryTimestamp"] : (function () { throw new RuntimeError('Variable "expiryTimestamp" does not exist.', 525, $this->source); })()) < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 525, $this->source); })()))) {
                        // line 526
                        yield "                                                ";
                        // line 527
                        yield "                                                <span class=\"date-value date-expired\" title=\"Produit expiré\">
                                                    ";
                        // line 528
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiryDate"]) || array_key_exists("expiryDate", $context) ? $context["expiryDate"] : (function () { throw new RuntimeError('Variable "expiryDate" does not exist.', 528, $this->source); })()), "d/m/Y"), "html", null, true);
                        yield "
                                                    <i class=\"fas fa-exclamation-triangle\"></i>
                                                </span>
                                            ";
                    } elseif ((                    // line 531
(isset($context["expiryTimestamp"]) || array_key_exists("expiryTimestamp", $context) ? $context["expiryTimestamp"] : (function () { throw new RuntimeError('Variable "expiryTimestamp" does not exist.', 531, $this->source); })()) < ((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 531, $this->source); })()) + (((30 * 24) * 60) * 60)))) {
                        // line 532
                        yield "                                                ";
                        // line 533
                        yield "                                                <span class=\"date-value date-soon-expired\" title=\"Expire bientôt\">
                                                    ";
                        // line 534
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiryDate"]) || array_key_exists("expiryDate", $context) ? $context["expiryDate"] : (function () { throw new RuntimeError('Variable "expiryDate" does not exist.', 534, $this->source); })()), "d/m/Y"), "html", null, true);
                        yield "
                                                    <i class=\"fas fa-clock\"></i>
                                                </span>
                                            ";
                    } else {
                        // line 538
                        yield "                                                <span class=\"date-value date-expiry\">
                                                    ";
                        // line 539
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiryDate"]) || array_key_exists("expiryDate", $context) ? $context["expiryDate"] : (function () { throw new RuntimeError('Variable "expiryDate" does not exist.', 539, $this->source); })()), "d/m/Y"), "html", null, true);
                        yield "
                                                </span>
                                            ";
                    }
                    // line 542
                    yield "                                        ";
                } else {
                    // line 543
                    yield "                                            <span class=\"date-na\">N/A</span>
                                        ";
                }
                // line 545
                yield "                                    </div>
                                ";
            } else {
                // line 547
                yield "                                    <div class=\"date-item\">
                                        <span class=\"non-perishable\">
                                            <i class=\"fas fa-infinity\"></i> Non périssable
                                        </span>
                                    </div>
                                ";
            }
            // line 553
            yield "                            </div>
                        </td>
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
        // line 556
        if (!$context['_iterated']) {
            // line 557
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\" style=\"padding: 30px; color: #6c757d;\">
                            <i class=\"fas fa-box-open fa-2x mb-2\" style=\"display: block;\"></i>
                            Aucun produit dans cette réception
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        yield "            </tbody>
            <tfoot>
                <tr class=\"total-row\">
                    <td colspan=\"3\" class=\"total-label\">
                        <strong>TOTAL QUANTITÉ REÇUE</strong>
                    </td>
                    <td class=\"text-center\">
                        <strong style=\"color: #4361ee; font-size: 12px;\">";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 571, $this->source); })()), "html", null, true);
        yield "</strong>
                    </td>
                    <td class=\"total-label\">
                        <strong>MONTANT TOTAL</strong>
                    </td>
                    <td class=\"total-value\">
                        <strong style=\"font-size: 14px;\">";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 577, $this->source); })()), "totalAmount", [], "any", false, false, false, 577)), "html", null, true);
        yield "</strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    ";
        // line 584
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 584, $this->source); })()), "notes", [], "any", false, false, false, 584)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 585
            yield "        <div class=\"section avoid-break\">
            <div class=\"section-title\">NOTES DE RÉCEPTION</div>
            <div style=\"padding: 12px 15px; background-color: #f8f9fa; border-radius: 6px; border-left: 4px solid #2a9d8f;\">
                <p style=\"margin: 0; font-size: 10px; line-height: 1.4; white-space: pre-line;\">";
            // line 588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 588, $this->source); })()), "notes", [], "any", false, false, false, 588), "html", null, true);
            yield "</p>
            </div>
        </div>
    ";
        }
        // line 592
        yield "    
    <div class=\"alert-box alert-info\">
        <i class=\"fas fa-info-circle\"></i> 
        <strong>Informations stock :</strong> 
        Tous les produits ont été ajoutés au stock avec leurs numéros de lot et dates d'expiration respectives.
        Les mouvements de stock correspondants ont été enregistrés.
    </div>
    
    <div class=\"signature-section avoid-break\">
        <div class=\"signature-box\">
            <div style=\"margin-bottom: 10px;\">
                <p style=\"margin: 0; color: #6c757d; font-size: 10px;\">
                    Pour attestation de bonne réception
                </p>
            </div>
            <div class=\"signature-line\"></div>
            <p style=\"margin: 5px 0 0 0; color: #495057; font-size: 10px;\">
                Signature du responsable réception
            </p>
            <p style=\"margin: 15px 0 0 0; color: #6c757d; font-size: 9px;\">
                Date: ______________________
            </p>
        </div>
    </div>
    
    <div class=\"footer\">
        <p style=\"margin: 0 0 5px 0;\">
            Document généré le ";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield " par ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, true, false, 619), "fullName", [], "any", true, true, false, 619)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619), "fullName", [], "any", false, false, false, 619), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619), "email", [], "any", false, false, false, 619))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619), "email", [], "any", false, false, false, 619))), "html", null, true);
        yield "
        </p>
        <p style=\"margin: 0 0 5px 0;\">
            HMA MARKET • Reçu d'achat N° ";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 622, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 622), "html", null, true);
        yield " • Page 1/1
        </p>
        <p style=\"margin: 0; font-style: italic;\">
            Ce document certifie la réception des marchandises ci-dessus mentionnées
        </p>
        <p style=\"margin: 5px 0 0 0; font-size: 8px; color: #adb5bd;\">
            <i class=\"fas fa-shield-alt\"></i> Document sécurisé • ID: ";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 628, $this->source); })()), "id", [], "any", false, false, false, 628), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "YmdHis"), "html", null, true);
        yield "
        </p>
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
        return "admin/purchase/pdf_receipt.html.twig";
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
        return array (  883 => 628,  874 => 622,  866 => 619,  837 => 592,  830 => 588,  825 => 585,  823 => 584,  813 => 577,  804 => 571,  795 => 564,  783 => 557,  781 => 556,  766 => 553,  758 => 547,  754 => 545,  750 => 543,  747 => 542,  741 => 539,  738 => 538,  731 => 534,  728 => 533,  726 => 532,  724 => 531,  718 => 528,  715 => 527,  713 => 526,  710 => 525,  708 => 524,  703 => 521,  699 => 519,  693 => 516,  690 => 515,  688 => 514,  684 => 512,  682 => 511,  676 => 508,  671 => 506,  667 => 504,  663 => 502,  657 => 499,  654 => 498,  652 => 497,  646 => 493,  640 => 489,  638 => 488,  634 => 487,  629 => 485,  623 => 482,  619 => 480,  616 => 479,  614 => 478,  611 => 477,  608 => 476,  605 => 475,  603 => 474,  600 => 473,  597 => 472,  594 => 471,  576 => 470,  573 => 469,  570 => 468,  568 => 467,  550 => 452,  546 => 451,  534 => 442,  527 => 438,  520 => 434,  511 => 427,  503 => 421,  500 => 420,  494 => 417,  490 => 415,  487 => 414,  481 => 411,  477 => 409,  475 => 408,  470 => 406,  463 => 402,  459 => 400,  457 => 399,  436 => 381,  428 => 376,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu d'achat #{{ purchase.purchaseNumber }}</title>
    <style>
        @page { margin: 15mm; }
        body { 
            font-family: 'DejaVu Sans', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            font-size: 11px; 
            line-height: 1.3;
            color: #2c3e50;
            margin: 0;
            padding: 0;
        }
        
        /* Header */
        .header { 
            text-align: center; 
            margin-bottom: 25px; 
            padding-bottom: 15px;
            border-bottom: 3px solid #2a9d8f;
        }
        
        .header h1 { 
            margin: 0 0 5px 0; 
            color: #2a9d8f;
            font-size: 22px;
            font-weight: 700;
        }
        
        .header h2 { 
            margin: 0 0 10px 0; 
            color: #2a9d8f;
            font-size: 18px;
            font-weight: 600;
        }
        
        /* Status Badge */
        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 10px;
            background-color: rgba(42, 157, 143, 0.1);
            color: #2a9d8f;
            border: 1px solid #2a9d8f;
        }
        
        /* Company Info */
        .company-info { 
            margin-bottom: 25px;
            padding: 12px 15px;
            background: linear-gradient(135deg, #f8f9fc 0%, #eef1fd 100%);
            border-radius: 8px;
            border: 1px solid #e9ecef;
        }
        
        .company-info h3 { 
            margin: 0 0 8px 0; 
            color: #2c3e50;
            font-size: 16px;
            font-weight: 700;
        }
        
        /* Sections */
        .section { 
            margin-bottom: 20px; 
        }
        
        .section-title { 
            background: linear-gradient(135deg, #2a9d8f 0%, #1d7873 100%);
            color: white;
            padding: 10px 15px; 
            font-weight: 600; 
            margin-bottom: 12px;
            border-radius: 6px;
            font-size: 12px;
            letter-spacing: 0.5px;
        }
        
        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .info-item {
            padding: 8px 0;
        }
        
        .info-label { 
            font-weight: 600; 
            color: #495057;
            margin-bottom: 3px;
        }
        
        .info-value { 
            color: #6c757d;
        }
        
        /* Table Styling */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 15px 0 20px 0;
            font-size: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        
        thead {
            background: linear-gradient(135deg, #2a9d8f 0%, #1d7873 100%);
        }
        
        th { 
            color: white;
            padding: 12px 10px; 
            text-align: left; 
            border: none;
            font-weight: 600;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        td { 
            padding: 12px 10px; 
            border-bottom: 1px solid #e9ecef;
            vertical-align: top;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        tbody tr:hover {
            background-color: rgba(42, 157, 143, 0.05);
        }
        
        /* Product Info in Table */
        .product-cell {
            padding: 5px 0;
        }
        
        .product-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 3px;
            font-size: 11px;
        }
        
        .product-details {
            font-size: 9px;
            color: #6c757d;
            margin-bottom: 2px;
        }
        
        /* Batch Info */
        .batch-info {
            background-color: rgba(13, 202, 240, 0.1);
            padding: 3px 6px;
            border-radius: 4px;
            font-size: 9px;
            color: #0dcaf0;
            display: inline-block;
            margin-top: 3px;
        }
        
        /* Date Column */
        .date-column {
            min-width: 100px;
        }
        
        .date-cell {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        .date-item {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 9px;
        }
        
        .date-label {
            font-weight: 600;
            color: #495057;
            min-width: 40px;
        }
        
        .date-value {
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 9px;
            font-weight: 500;
        }
        
        .date-manufacture {
            background-color: rgba(67, 97, 238, 0.1);
            color: #4361ee;
            border: 1px solid rgba(67, 97, 238, 0.2);
        }
        
        .date-expiry {
            background-color: rgba(244, 162, 97, 0.1);
            color: #f4a261;
            border: 1px solid rgba(244, 162, 97, 0.2);
        }
        
        .date-na {
            color: #6c757d;
            font-style: italic;
            background-color: #f8f9fa;
            padding: 2px 6px;
            border-radius: 3px;
            border: 1px dashed #dee2e6;
        }
        
        .date-expired {
            background-color: rgba(231, 57, 70, 0.1);
            color: #e63946;
            border: 1px solid rgba(231, 57, 70, 0.2);
            font-weight: 600;
        }
        
        .date-soon-expired {
            background-color: rgba(244, 162, 97, 0.15);
            color: #f4a261;
            border: 1px solid rgba(244, 162, 97, 0.3);
            font-weight: 600;
        }
        
        /* Total Row */
        .total-row { 
            background: linear-gradient(135deg, #f8f9fc 0%, #e9ecef 100%);
            font-weight: 700;
        }
        
        .total-label {
            text-align: right;
            color: #2c3e50;
        }
        
        .total-value {
            text-align: right;
            color: #2a9d8f;
            font-size: 12px;
        }
        
        /* Quantity Badge */
        .quantity-badge {
            display: inline-block;
            padding: 4px 8px;
            background-color: rgba(67, 97, 238, 0.1);
            border-radius: 4px;
            font-weight: 600;
            color: #4361ee;
            border: 1px solid rgba(67, 97, 238, 0.2);
        }
        
        /* Price Formatting */
        .price-unit {
            color: #2c3e50;
            font-weight: 600;
        }
        
        .price-total {
            color: #2a9d8f;
            font-weight: 700;
        }
        
        /* Non-perishable Indicator */
        .non-perishable {
            color: #6c757d;
            font-style: italic;
            font-size: 9px;
            padding: 3px 6px;
            background-color: #f8f9fa;
            border-radius: 4px;
            display: inline-block;
        }
        
        /* Alert Boxes */
        .alert-box {
            padding: 10px 12px;
            border-radius: 6px;
            margin: 15px 0;
            font-size: 10px;
        }
        
        .alert-success {
            background-color: rgba(42, 157, 143, 0.1);
            border-left: 4px solid #2a9d8f;
            color: #1d7873;
        }
        
        .alert-info {
            background-color: rgba(13, 202, 240, 0.1);
            border-left: 4px solid #0dcaf0;
            color: #0c5460;
        }
        
        /* Footer */
        .footer { 
            margin-top: 30px; 
            padding-top: 15px; 
            border-top: 1px solid #dee2e6; 
            font-size: 9px; 
            text-align: center;
            color: #6c757d;
        }
        
        /* Signature */
        .signature-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
        }
        
        .signature-box {
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }
        
        .signature-line {
            border-top: 1px solid #2c3e50;
            width: 100%;
            margin: 25px 0 8px 0;
        }
        
        /* Receipt Details */
        .receipt-details {
            background-color: rgba(42, 157, 143, 0.05);
            padding: 12px 15px;
            border-radius: 6px;
            margin: 15px 0;
            border: 1px solid rgba(42, 157, 143, 0.2);
        }
        
        /* Page Break Control */
        .avoid-break {
            page-break-inside: avoid;
        }
        
        /* Utility Classes */
        .mb-1 { margin-bottom: 5px; }
        .mb-2 { margin-bottom: 10px; }
        .mb-3 { margin-bottom: 15px; }
        .mt-1 { margin-top: 5px; }
        .mt-2 { margin-top: 10px; }
        .mt-3 { margin-top: 15px; }
        .p-1 { padding: 5px; }
        .p-2 { padding: 10px; }
        .p-3 { padding: 15px; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-bold { font-weight: 700; }
        .text-success { color: #2a9d8f; }
        .text-primary { color: #4361ee; }
        .text-warning { color: #f4a261; }
        .text-danger { color: #e63946; }
        .text-muted { color: #6c757d; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>CONFIRMATION DE RÉCEPTION</h1>
        <h2>Commande N° {{ purchase.purchaseNumber }}</h2>
        <div class=\"status-badge\">
            <i class=\"fas fa-check-circle\"></i> RÉCEPTION CONFIRMÉE
        </div>
        <p style=\"margin: 5px 0 0 0; color: #6c757d;\">
            Réceptionnée le {{ purchase.receivedAt|date('d/m/Y à H:i') }}
        </p>
    </div>
    
    <div class=\"company-info\">
        <h3>HMA MARKET</h3>
        <p style=\"margin: 0 0 5px 0; color: #495057;\">Votre épicerie de quartier</p>
        <p style=\"margin: 0; color: #6c757d;\">Tél: +229 01 56 13 92 00 | Email: contact@hma-market.com</p>
    </div>
    
    <div class=\"alert-box alert-success\">
        <i class=\"fas fa-check-circle\"></i> 
        <strong>Réception validée :</strong> Les produits ont été vérifiés, reçus et ajoutés au stock.
    </div>
    
    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS FOURNISSEUR</div>
        <div class=\"info-grid\">
            {% if purchase.supplier %}
            <div class=\"info-item\">
                <div class=\"info-label\">Nom du fournisseur</div>
                <div class=\"info-value\">{{ purchase.supplier.name }}</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Email</div>
                <div class=\"info-value\">{{ purchase.supplier.email }}</div>
            </div>
            {% if purchase.supplier.phone %}
            <div class=\"info-item\">
                <div class=\"info-label\">Téléphone</div>
                <div class=\"info-value\">{{ purchase.supplier.phone }}</div>
            </div>
            {% endif %}
            {% if purchase.supplier.adress %}
            <div class=\"info-item\">
                <div class=\"info-label\">Adresse</div>
                <div class=\"info-value\">{{ purchase.supplier.adress }}</div>
            </div>
            {% endif %}
            {% else %}
            <div class=\"info-item\">
                <div class=\"info-value\" style=\"color: #e63946; font-style: italic;\">
                    <i class=\"fas fa-exclamation-circle\"></i> Aucun fournisseur spécifié
                </div>
            </div>
            {% endif %}
        </div>
    </div>
    
    <div class=\"receipt-details\">
        <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;\">
            <div>
                <div class=\"info-label\">Date de commande</div>
                <div class=\"info-value\">{{ purchase.createdAt|date('d/m/Y H:i') }}</div>
            </div>
            <div>
                <div class=\"info-label\">Date de réception</div>
                <div class=\"info-value\">{{ purchase.receivedAt|date('d/m/Y H:i') }}</div>
            </div>
            <div>
                <div class=\"info-label\">Réceptionné par</div>
                <div class=\"info-value\">{{ purchase.user.fullName|default(purchase.user.email) }}</div>
            </div>
        </div>
    </div>
    
    <div class=\"section avoid-break\">
        <div class=\"section-title\">DÉTAILS DES PRODUITS REÇUS</div>
        
        <div style=\"margin-bottom: 15px; padding: 8px 12px; background-color: #f8f9fa; border-radius: 6px;\">
            <span class=\"text-bold text-success\">{{ total_items|default(purchase.purchaseItems|length) }}</span> produit(s) reçu(s) | 
            <span class=\"text-bold text-success\">{{ total_quantity|default(0) }}</span> unité(s) totale(s)
        </div>
        
        <table>
            <thead>
                <tr>
                    <th width=\"5%\" class=\"text-center\">#</th>
                    <th width=\"30%\">PRODUIT</th>
                    <th width=\"15%\" class=\"text-center\">N° LOT</th>
                    <th width=\"10%\" class=\"text-center\">QTÉ</th>
                    <th width=\"15%\" class=\"text-right\">PRIX UNIT.</th>
                    <th width=\"25%\" class=\"text-center\">DATES CRITIQUES</th>
                </tr>
            </thead>
            <tbody>
                {% set totalQuantity = 0 %}
                {% set totalAmount = 0 %}
                
                {% for item in purchase.purchaseItems %}
                    {% set totalQuantity = totalQuantity + item.quantity %}
                    {% set totalAmount = totalAmount + item.totalPrice %}
                    
                    {% set isPerishable = item.product.hasExpiryDate %}
                    {% set manufacturingDate = item.manufacturingDate %}
                    {% set expiryDate = item.expiryDate %}
                    
                    {% set now = \"now\"|date(\"U\") %}
                    {% set expiryTimestamp = expiryDate ? expiryDate.timestamp : null %}
                    
                    <tr>
                        <td class=\"text-center\">{{ loop.index }}</td>
                        <td>
                            <div class=\"product-cell\">
                                <div class=\"product-name\">{{ item.product.name }}</div>
                                <div class=\"product-details\">
                                    <strong>Réf:</strong> {{ item.product.barcode }}
                                    {% if isPerishable %}
                                        <span style=\"color: #f4a261; font-size: 8px;\">
                                            <i class=\"fas fa-clock\"></i> Périssable
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </td>
                        <td class=\"text-center\">
                            {% if item.batchNumber %}
                                <span class=\"batch-info\">
                                    <i class=\"fas fa-box\"></i> {{ item.batchNumber }}
                                </span>
                            {% else %}
                                <span class=\"date-na\">N/A</span>
                            {% endif %}
                        </td>
                        <td class=\"text-center\">
                            <span class=\"quantity-badge\">{{ item.quantity }}</span>
                        </td>
                        <td class=\"text-right price-unit\">{{ item.unitPrice|format_fcfa }}</td>
                        <td class=\"date-column\">
                            <div class=\"date-cell\">
                                {% if isPerishable %}
                                    <div class=\"date-item\">
                                        <span class=\"date-label\">Fab:</span>
                                        {% if manufacturingDate %}
                                            <span class=\"date-value date-manufacture\">
                                                {{ manufacturingDate|date('d/m/Y') }}
                                            </span>
                                        {% else %}
                                            <span class=\"date-na\">N/A</span>
                                        {% endif %}
                                    </div>
                                    <div class=\"date-item\">
                                        <span class=\"date-label\">Exp:</span>
                                        {% if expiryDate %}
                                            {% if expiryTimestamp < now %}
                                                {# Expiré #}
                                                <span class=\"date-value date-expired\" title=\"Produit expiré\">
                                                    {{ expiryDate|date('d/m/Y') }}
                                                    <i class=\"fas fa-exclamation-triangle\"></i>
                                                </span>
                                            {% elseif expiryTimestamp < (now + (30 * 24 * 60 * 60)) %}
                                                {# Expire dans moins de 30 jours #}
                                                <span class=\"date-value date-soon-expired\" title=\"Expire bientôt\">
                                                    {{ expiryDate|date('d/m/Y') }}
                                                    <i class=\"fas fa-clock\"></i>
                                                </span>
                                            {% else %}
                                                <span class=\"date-value date-expiry\">
                                                    {{ expiryDate|date('d/m/Y') }}
                                                </span>
                                            {% endif %}
                                        {% else %}
                                            <span class=\"date-na\">N/A</span>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    <div class=\"date-item\">
                                        <span class=\"non-perishable\">
                                            <i class=\"fas fa-infinity\"></i> Non périssable
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\" style=\"padding: 30px; color: #6c757d;\">
                            <i class=\"fas fa-box-open fa-2x mb-2\" style=\"display: block;\"></i>
                            Aucun produit dans cette réception
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr class=\"total-row\">
                    <td colspan=\"3\" class=\"total-label\">
                        <strong>TOTAL QUANTITÉ REÇUE</strong>
                    </td>
                    <td class=\"text-center\">
                        <strong style=\"color: #4361ee; font-size: 12px;\">{{ totalQuantity }}</strong>
                    </td>
                    <td class=\"total-label\">
                        <strong>MONTANT TOTAL</strong>
                    </td>
                    <td class=\"total-value\">
                        <strong style=\"font-size: 14px;\">{{ purchase.totalAmount|format_fcfa }}</strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    {% if purchase.notes %}
        <div class=\"section avoid-break\">
            <div class=\"section-title\">NOTES DE RÉCEPTION</div>
            <div style=\"padding: 12px 15px; background-color: #f8f9fa; border-radius: 6px; border-left: 4px solid #2a9d8f;\">
                <p style=\"margin: 0; font-size: 10px; line-height: 1.4; white-space: pre-line;\">{{ purchase.notes }}</p>
            </div>
        </div>
    {% endif %}
    
    <div class=\"alert-box alert-info\">
        <i class=\"fas fa-info-circle\"></i> 
        <strong>Informations stock :</strong> 
        Tous les produits ont été ajoutés au stock avec leurs numéros de lot et dates d'expiration respectives.
        Les mouvements de stock correspondants ont été enregistrés.
    </div>
    
    <div class=\"signature-section avoid-break\">
        <div class=\"signature-box\">
            <div style=\"margin-bottom: 10px;\">
                <p style=\"margin: 0; color: #6c757d; font-size: 10px;\">
                    Pour attestation de bonne réception
                </p>
            </div>
            <div class=\"signature-line\"></div>
            <p style=\"margin: 5px 0 0 0; color: #495057; font-size: 10px;\">
                Signature du responsable réception
            </p>
            <p style=\"margin: 15px 0 0 0; color: #6c757d; font-size: 9px;\">
                Date: ______________________
            </p>
        </div>
    </div>
    
    <div class=\"footer\">
        <p style=\"margin: 0 0 5px 0;\">
            Document généré le {{ \"now\"|date('d/m/Y à H:i') }} par {{ purchase.user.fullName|default(purchase.user.email) }}
        </p>
        <p style=\"margin: 0 0 5px 0;\">
            HMA MARKET • Reçu d'achat N° {{ purchase.purchaseNumber }} • Page 1/1
        </p>
        <p style=\"margin: 0; font-style: italic;\">
            Ce document certifie la réception des marchandises ci-dessus mentionnées
        </p>
        <p style=\"margin: 5px 0 0 0; font-size: 8px; color: #adb5bd;\">
            <i class=\"fas fa-shield-alt\"></i> Document sécurisé • ID: {{ purchase.id }} • {{ \"now\"|date('YmdHis') }}
        </p>
    </div>
</body>
</html>", "admin/purchase/pdf_receipt.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\pdf_receipt.html.twig");
    }
}
