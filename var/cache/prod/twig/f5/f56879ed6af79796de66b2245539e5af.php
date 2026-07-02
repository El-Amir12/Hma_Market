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

/* admin/product/print_sheet.html.twig */
class __TwigTemplate_0672d5b6278a88f1ebf76cea916f818f extends Template
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
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Fiche produit - ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</title>
    <style>
        @media print {
            body {
                margin: 0;
                padding: 20px;
            }
            .no-print {
                display: none;
            }
            .page-break {
                page-break-after: always;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            background: #f5f5f5;
            padding: 40px;
        }

        .sheet-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .header .barcode {
            font-family: 'Courier New', monospace;
            font-size: 20px;
            letter-spacing: 2px;
            background: rgba(255,255,255,0.2);
            display: inline-block;
            padding: 8px 16px;
            border-radius: 8px;
            margin-top: 10px;
        }

        .content {
            padding: 30px;
        }

        .section {
            margin-bottom: 25px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            font-size: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
        }

        .info-label {
            font-size: 12px;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin-top: 4px;
        }

        .info-value.price {
            color: #28a745;
            font-weight: bold;
            font-size: 18px;
        }

        .info-value.purchase {
            color: #dc3545;
        }

        .image-container {
            text-align: center;
            margin-bottom: 25px;
        }

        .product-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .image-placeholder {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .image-placeholder i {
            font-size: 64px;
            color: #adb5bd;
        }

        .description {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            line-height: 1.6;
            color: #555;
        }

        .footer {
            background: #f8f9fa;
            padding: 20px 30px;
            text-align: center;
            font-size: 11px;
            color: #888;
            border-top: 1px solid #eee;
        }

        .badge-status {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .badge-active {
            background: #28a745;
            color: white;
        }

        .badge-inactive {
            background: #dc3545;
            color: white;
        }

        .badge-perishable {
            background: #ffc107;
            color: #856404;
        }

        .badge-non-perishable {
            background: #6c757d;
            color: white;
        }

        .row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .col {
            flex: 1;
        }

        .print-actions {
            text-align: center;
            margin-bottom: 30px;
        }

        .print-actions button {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-print {
            background: #667eea;
            color: white;
        }

        .btn-print:hover {
            background: #5a67d8;
            transform: translateY(-1px);
        }

        .btn-close {
            background: #6c757d;
            color: white;
        }

        .btn-close:hover {
            background: #5a6268;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #eee;
        }

        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            .row {
                flex-direction: column;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class=\"print-actions no-print\">
        <button class=\"btn-print\" onclick=\"window.print()\">
            <i class=\"fas fa-print\"></i> Imprimer
        </button>
        <button class=\"btn-close\" onclick=\"window.close()\">
            <i class=\"fas fa-times\"></i> Fermer
        </button>
    </div>

    <div class=\"sheet-container\">
        <div class=\"header\">
            <h1>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 273), "html", null, true);
        yield "</h1>
            <div class=\"barcode\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 274), "html", null, true);
        yield "</div>
        </div>

        <div class=\"content\">
            <!-- Image -->
            <div class=\"image-container\">
                ";
        // line 280
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 280) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 280) != "default-product.png"))) {
            // line 281
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 281))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 282), "html", null, true);
            yield "\" 
                         class=\"product-image\">
                ";
        } else {
            // line 285
            yield "                    <div class=\"image-placeholder\">
                        <i class=\"fas fa-box\"></i>
                    </div>
                ";
        }
        // line 289
        yield "            </div>

            <!-- Informations générales -->
            <div class=\"section\">
                <div class=\"section-title\">
                    <i class=\"fas fa-info-circle\"></i>
                    Informations générales
                </div>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <span class=\"info-label\">Code-barres</span>
                        <span class=\"info-value\">";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 300), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\">Catégorie</span>
                        <span class=\"info-value\">";
        // line 304
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 304), "name", [], "any", false, false, false, 304), "html", null, true)) : ("Non catégorisé"));
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\">Unité de mesure</span>
                        <span class=\"info-value\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 308), "pièce")) : ("pièce"))), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\">Statut</span>
                        <span class=\"info-value\">
                            <span class=\"badge-status ";
        // line 313
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-active") : ("badge-inactive"));
        yield "\">
                                ";
        // line 314
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Prix et stock -->
            <div class=\"section\">
                <div class=\"section-title\">
                    <i class=\"fas fa-chart-line\"></i>
                    Prix et stock
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Prix d'achat</span>
                            <span class=\"info-value purchase\">";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 331), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 331)), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Prix de vente</span>
                            <span class=\"info-value price\">";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 337), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 337)), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Stock actuel</span>
                            <span class=\"info-value\">";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 345), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 345)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 345), "pièce")) : ("pièce")), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Stock minimum</span>
                            <span class=\"info-value\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 351), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 351)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 351), "pièce")) : ("pièce")), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>
                ";
        // line 355
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 356
            yield "                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Marge unitaire</span>
                            ";
            // line 360
            $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 360) - CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 360));
            // line 361
            yield "                            ";
            $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 361) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["margin"] ?? null) / CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 361)) * 100), 1)) : (0));
            // line 362
            yield "                            <span class=\"info-value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["margin"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 362)), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["marginPercentage"] ?? null), "html", null, true);
            yield "%)</span>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Valeur du stock</span>
                            <span class=\"info-value\">";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 368) * CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 368)), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 368)), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 373
        yield "            </div>

            <!-- Caractéristiques -->
            <div class=\"section\">
                <div class=\"section-title\">
                    <i class=\"fas fa-flask\"></i>
                    Caractéristiques
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Type de produit</span>
                            <span class=\"info-value\">
                                <span class=\"badge-status ";
        // line 386
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-perishable") : ("badge-non-perishable"));
        yield "\">
                                    ";
        // line 387
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Périssable") : ("Non périssable"));
        yield "
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Prescription</span>
                            <span class=\"info-value\">";
        // line 395
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "prescriptionRequired", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Obligatoire") : ("Non requise"));
        yield "</span>
                        </div>
                    </div>
                </div>
                ";
        // line 399
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "dosage", [], "any", false, false, false, 399) || CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form", [], "any", false, false, false, 399))) {
            // line 400
            yield "                <div class=\"row\">
                    ";
            // line 401
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "dosage", [], "any", false, false, false, 401)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 402
                yield "                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Dosage</span>
                            <span class=\"info-value\">";
                // line 405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "dosage", [], "any", false, false, false, 405), "html", null, true);
                yield "</span>
                        </div>
                    </div>
                    ";
            }
            // line 409
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form", [], "any", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 410
                yield "                    <div class=\"col\">
                        <div class=\"info-item\">
                            <span class=\"info-label\">Forme</span>
                            <span class=\"info-value\">";
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form", [], "any", false, false, false, 413), "html", null, true);
                yield "</span>
                        </div>
                    </div>
                    ";
            }
            // line 417
            yield "                </div>
                ";
        }
        // line 419
        yield "            </div>

            <!-- Description -->
            ";
        // line 422
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 423
            yield "            <div class=\"section\">
                <div class=\"section-title\">
                    <i class=\"fas fa-align-left\"></i>
                    Description
                </div>
                <div class=\"description\">
                    ";
            // line 429
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 429), "html", null, true));
            yield "
                </div>
            </div>
            ";
        }
        // line 433
        yield "
            <!-- Informations système -->
            <div class=\"section\">
                <div class=\"section-title\">
                    <i class=\"fas fa-history\"></i>
                    Informations système
                </div>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <span class=\"info-label\">Créé le</span>
                        <span class=\"info-value\">";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "createdAt", [], "any", false, false, false, 443), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 445
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "updatedAt", [], "any", false, false, false, 445)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 446
            yield "                    <div class=\"info-item\">
                        <span class=\"info-label\">Modifié le</span>
                        <span class=\"info-value\">";
            // line 448
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "updatedAt", [], "any", false, false, false, 448), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 451
        yield "                </div>
            </div>
        </div>

        <div class=\"footer\">
            Document généré par HMA Market le ";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "<br>
            Fiche produit - ";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 457), "html", null, true);
        yield "
        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/product/print_sheet.html.twig";
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
        return array (  619 => 457,  615 => 456,  608 => 451,  602 => 448,  598 => 446,  596 => 445,  591 => 443,  579 => 433,  572 => 429,  564 => 423,  562 => 422,  557 => 419,  553 => 417,  546 => 413,  541 => 410,  538 => 409,  531 => 405,  526 => 402,  524 => 401,  521 => 400,  519 => 399,  512 => 395,  501 => 387,  497 => 386,  482 => 373,  474 => 368,  462 => 362,  459 => 361,  457 => 360,  451 => 356,  449 => 355,  440 => 351,  429 => 345,  418 => 337,  409 => 331,  389 => 314,  385 => 313,  377 => 308,  370 => 304,  363 => 300,  350 => 289,  344 => 285,  338 => 282,  333 => 281,  331 => 280,  322 => 274,  318 => 273,  49 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/print_sheet.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\print_sheet.html.twig");
    }
}
