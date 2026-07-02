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

/* marketplace/_product_card.html.twig */
class __TwigTemplate_1235d2e4fa341f5b2a93553ac1e79426 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/_product_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/_product_card.html.twig"));

        // line 2
        yield "
";
        // line 4
        $context["hasActivePromotion"] = false;
        // line 5
        $context["discountPercent"] = 0;
        // line 6
        $context["discountAmount"] = 0;
        // line 7
        $context["promotionType"] = "";
        // line 8
        $context["promotionName"] = "";
        // line 9
        yield "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "promotionProducts", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["promotionProduct"]) {
            // line 11
            yield "    ";
            $context["promotion"] = CoreExtension::getAttribute($this->env, $this->source, $context["promotionProduct"], "promotion", [], "any", false, false, false, 11);
            // line 12
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 12, $this->source); })()), "isActive", [], "any", false, false, false, 12) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 12, $this->source); })()), "startDate", [], "any", false, false, false, 12) <= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 12, $this->source); })()), "endDate", [], "any", false, false, false, 12)) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 12, $this->source); })()), "endDate", [], "any", false, false, false, 12) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())))) {
                // line 13
                yield "        ";
                $context["hasActivePromotion"] = true;
                // line 14
                yield "        ";
                $context["promotionName"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14);
                // line 15
                yield "        ";
                $context["typePromotion"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 15, $this->source); })()), "typePromotion", [], "any", false, false, false, 15);
                // line 16
                yield "        ";
                if ((($tmp = (isset($context["typePromotion"]) || array_key_exists("typePromotion", $context) ? $context["typePromotion"] : (function () { throw new RuntimeError('Variable "typePromotion" does not exist.', 16, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 17
                    yield "            ";
                    $context["typeName"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["typePromotion"]) || array_key_exists("typePromotion", $context) ? $context["typePromotion"] : (function () { throw new RuntimeError('Variable "typePromotion" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17));
                    // line 18
                    yield "            ";
                    if (((((isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 18, $this->source); })()) == "pourcentage") || ((isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 18, $this->source); })()) == "percentage")) || ((isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 18, $this->source); })()) == "%"))) {
                        // line 19
                        yield "                ";
                        $context["promotionType"] = "percentage";
                        // line 20
                        yield "                ";
                        $context["discountPercent"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "discountPercentage", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 20, $this->source); })()), "discountPercentage", [], "any", false, false, false, 20), 0)) : (0));
                        // line 21
                        yield "            ";
                    } elseif (((((isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 21, $this->source); })()) == "montant fixe") || ((isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 21, $this->source); })()) == "fixed")) || ((isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 21, $this->source); })()) == "fixe"))) {
                        // line 22
                        yield "                ";
                        $context["promotionType"] = "fixed";
                        // line 23
                        yield "                ";
                        $context["discountAmount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "discountAmount", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 23, $this->source); })()), "discountAmount", [], "any", false, false, false, 23), 0)) : (0));
                        // line 24
                        yield "            ";
                    }
                    // line 25
                    yield "        ";
                }
                // line 26
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotionProduct'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
";
        // line 30
        yield "<div class=\"product-card ";
        if ((($tmp = (isset($context["hasActivePromotion"]) || array_key_exists("hasActivePromotion", $context) ? $context["hasActivePromotion"] : (function () { throw new RuntimeError('Variable "hasActivePromotion" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-promotion";
        }
        yield "\">
    <div class=\"product-image\">
        ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            yield "\" loading=\"lazy\">
        ";
        } else {
            // line 35
            yield "            <div class=\"placeholder\">
                <i class=\"fas fa-box\"></i>
            </div>
        ";
        }
        // line 39
        yield "        
        ";
        // line 41
        yield "        ";
        if ((($tmp = (isset($context["hasActivePromotion"]) || array_key_exists("hasActivePromotion", $context) ? $context["hasActivePromotion"] : (function () { throw new RuntimeError('Variable "hasActivePromotion" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "            <span class=\"product-badge discount\">
                ";
            // line 43
            if (((isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 43, $this->source); })()) == "percentage")) {
                // line 44
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discountPercent"]) || array_key_exists("discountPercent", $context) ? $context["discountPercent"] : (function () { throw new RuntimeError('Variable "discountPercent" does not exist.', 44, $this->source); })()), "html", null, true);
                yield "%
                ";
            } elseif ((            // line 45
(isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 45, $this->source); })()) == "fixed")) {
                // line 46
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["discountAmount"]) || array_key_exists("discountAmount", $context) ? $context["discountAmount"] : (function () { throw new RuntimeError('Variable "discountAmount" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "hmaService", [], "any", false, false, false, 46)), "html", null, true);
                yield "
                ";
            }
            // line 48
            yield "            </span>
            <span class=\"product-badge promo-label\">🔥 PROMO</span>
        ";
        }
        // line 51
        yield "        
        ";
        // line 53
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53) && $this->extensions['App\Twig\AppExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)))) {
            // line 54
            yield "            <button class=\"favorite-btn ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), (isset($context["favoriteIds"]) || array_key_exists("favoriteIds", $context) ? $context["favoriteIds"] : (function () { throw new RuntimeError('Variable "favoriteIds" does not exist.', 54, $this->source); })()))) {
                yield "active";
            }
            yield "\" 
                    onclick=\"toggleFavorite(this, ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
            yield ")\"
                    data-product-id=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\">
                <i class=\"";
            // line 57
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), (isset($context["favoriteIds"]) || array_key_exists("favoriteIds", $context) ? $context["favoriteIds"] : (function () { throw new RuntimeError('Variable "favoriteIds" does not exist.', 57, $this->source); })()))) {
                yield "fas";
            } else {
                yield "far";
            }
            yield " fa-heart\"></i>
            </button>
        ";
        }
        // line 60
        yield "    </div>
    
    <div class=\"product-body\">
        <span class=\"product-category\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 63, $this->source); })()), "category", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
        <h5 class=\"product-name\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
        yield "</h5>
        
        ";
        // line 67
        yield "        <div class=\"product-pricing\">
            ";
        // line 68
        if ((($tmp = (isset($context["hasActivePromotion"]) || array_key_exists("hasActivePromotion", $context) ? $context["hasActivePromotion"] : (function () { throw new RuntimeError('Variable "hasActivePromotion" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                ";
            // line 70
            yield "                ";
            if ((((isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 70, $this->source); })()) == "percentage") && ((isset($context["discountPercent"]) || array_key_exists("discountPercent", $context) ? $context["discountPercent"] : (function () { throw new RuntimeError('Variable "discountPercent" does not exist.', 70, $this->source); })()) > 0))) {
                // line 71
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 71, $this->source); })()), "salePrice", [], "any", false, false, false, 71) * (1 - ((isset($context["discountPercent"]) || array_key_exists("discountPercent", $context) ? $context["discountPercent"] : (function () { throw new RuntimeError('Variable "discountPercent" does not exist.', 71, $this->source); })()) / 100)));
                // line 72
                yield "                ";
            } elseif ((((isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 72, $this->source); })()) == "fixed") && ((isset($context["discountAmount"]) || array_key_exists("discountAmount", $context) ? $context["discountAmount"] : (function () { throw new RuntimeError('Variable "discountAmount" does not exist.', 72, $this->source); })()) > 0))) {
                // line 73
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "salePrice", [], "any", false, false, false, 73) - (isset($context["discountAmount"]) || array_key_exists("discountAmount", $context) ? $context["discountAmount"] : (function () { throw new RuntimeError('Variable "discountAmount" does not exist.', 73, $this->source); })()));
                // line 74
                yield "                ";
            } else {
                // line 75
                yield "                    ";
                $context["promoPrice"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "salePrice", [], "any", false, false, false, 75);
                // line 76
                yield "                ";
            }
            // line 77
            yield "                
                ";
            // line 79
            yield "                <span class=\"product-price promo-price\">
                    ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["promoPrice"]) || array_key_exists("promoPrice", $context) ? $context["promoPrice"] : (function () { throw new RuntimeError('Variable "promoPrice" does not exist.', 80, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "hmaService", [], "any", false, false, false, 80)), "html", null, true);
            yield "
                </span>
                <span class=\"old-price\">
                    ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "salePrice", [], "any", false, false, false, 83), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "hmaService", [], "any", false, false, false, 83)), "html", null, true);
            yield "
                </span>
                
                ";
            // line 87
            yield "                ";
            if ((($tmp = (isset($context["promotionName"]) || array_key_exists("promotionName", $context) ? $context["promotionName"] : (function () { throw new RuntimeError('Variable "promotionName" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "                    <span class=\"promo-name-tag\">
                        <i class=\"fas fa-tag\"></i> ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotionName"]) || array_key_exists("promotionName", $context) ? $context["promotionName"] : (function () { throw new RuntimeError('Variable "promotionName" does not exist.', 89, $this->source); })()), "html", null, true);
                yield "
                    </span>
                ";
            }
            // line 92
            yield "                
            ";
        } else {
            // line 94
            yield "                ";
            // line 95
            yield "                <span class=\"product-price\">
                    ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "salePrice", [], "any", false, false, false, 96), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "hmaService", [], "any", false, false, false, 96)), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 99
        yield "        </div>
        
        ";
        // line 102
        yield "        <div class=\"product-rating\">
            <div class=\"stars\">
                ";
        // line 104
        $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 104, $this->source); })()), "averageRating", [], "any", false, false, false, 104), 0)) : (0));
        // line 105
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 106
            yield "                    ";
            if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 106, $this->source); })()))) {
                // line 107
                yield "                        <i class=\"fas fa-star filled\"></i>
                    ";
            } elseif (((            // line 108
$context["i"] - 0.5) <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 108, $this->source); })()))) {
                // line 109
                yield "                        <i class=\"fas fa-star-half-alt half-filled\"></i>
                    ";
            } else {
                // line 111
                yield "                        <i class=\"far fa-star\"></i>
                    ";
            }
            // line 113
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "            </div>
            <span class=\"rating-text\">(<strong>";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "ratingsCount", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()), "ratingsCount", [], "any", false, false, false, 115), 0)) : (0)), "html", null, true);
        yield "</strong>)</span>
        </div>
        
        ";
        // line 119
        yield "        <div class=\"action-buttons\">
            <a href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        yield "\" class=\"btn-view\">
                <i class=\"fas fa-eye\"></i> Voir
            </a>
            <button class=\"add-to-cart\" 
                    data-product-id=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124), "html", null, true);
        yield "\"
                    ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 125, $this->source); })()), "currentStock", [], "any", false, false, false, 125) <= 0)) {
            yield "disabled";
        }
        yield ">
                <i class=\"fas fa-cart-plus\"></i> Ajouter
            </button>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/_product_card.html.twig";
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
        return array (  354 => 125,  350 => 124,  343 => 120,  340 => 119,  334 => 115,  331 => 114,  325 => 113,  321 => 111,  317 => 109,  315 => 108,  312 => 107,  309 => 106,  304 => 105,  302 => 104,  298 => 102,  294 => 99,  288 => 96,  285 => 95,  283 => 94,  279 => 92,  273 => 89,  270 => 88,  267 => 87,  261 => 83,  255 => 80,  252 => 79,  249 => 77,  246 => 76,  243 => 75,  240 => 74,  237 => 73,  234 => 72,  231 => 71,  228 => 70,  226 => 69,  224 => 68,  221 => 67,  216 => 64,  212 => 63,  207 => 60,  197 => 57,  193 => 56,  189 => 55,  182 => 54,  179 => 53,  176 => 51,  171 => 48,  165 => 46,  163 => 45,  158 => 44,  156 => 43,  153 => 42,  150 => 41,  147 => 39,  141 => 35,  133 => 33,  131 => 32,  123 => 30,  120 => 28,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  64 => 10,  61 => 9,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/_product_card.html.twig #}

{# ==================== DÉFINITION DES VARIABLES DE PROMOTION ==================== #}
{% set hasActivePromotion = false %}
{% set discountPercent = 0 %}
{% set discountAmount = 0 %}
{% set promotionType = '' %}
{% set promotionName = '' %}

{% for promotionProduct in product.promotionProducts %}
    {% set promotion = promotionProduct.promotion %}
    {% if promotion.isActive and promotion.startDate <= date() and (promotion.endDate is null or promotion.endDate >= date()) %}
        {% set hasActivePromotion = true %}
        {% set promotionName = promotion.name %}
        {% set typePromotion = promotion.typePromotion %}
        {% if typePromotion %}
            {% set typeName = typePromotion.name|lower %}
            {% if typeName == 'pourcentage' or typeName == 'percentage' or typeName == '%' %}
                {% set promotionType = 'percentage' %}
                {% set discountPercent = promotion.discountPercentage|default(0) %}
            {% elseif typeName == 'montant fixe' or typeName == 'fixed' or typeName == 'fixe' %}
                {% set promotionType = 'fixed' %}
                {% set discountAmount = promotion.discountAmount|default(0) %}
            {% endif %}
        {% endif %}
    {% endif %}
{% endfor %}

{# ==================== CARTE PRODUIT ==================== #}
<div class=\"product-card {% if hasActivePromotion %}has-promotion{% endif %}\">
    <div class=\"product-image\">
        {% if product.image %}
            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"{{ product.name }}\" loading=\"lazy\">
        {% else %}
            <div class=\"placeholder\">
                <i class=\"fas fa-box\"></i>
            </div>
        {% endif %}
        
        {# BADGE DE PROMOTION #}
        {% if hasActivePromotion %}
            <span class=\"product-badge discount\">
                {% if promotionType == 'percentage' %}
                    -{{ discountPercent }}%
                {% elseif promotionType == 'fixed' %}
                    -{{ discountAmount|price_with_currency(product.hmaService) }}
                {% endif %}
            </span>
            <span class=\"product-badge promo-label\">🔥 PROMO</span>
        {% endif %}
        
        {# BOUTON FAVORIS #}
        {% if app.user and is_customer(app.user) %}
            <button class=\"favorite-btn {% if product.id in favoriteIds %}active{% endif %}\" 
                    onclick=\"toggleFavorite(this, {{ product.id }})\"
                    data-product-id=\"{{ product.id }}\">
                <i class=\"{% if product.id in favoriteIds %}fas{% else %}far{% endif %} fa-heart\"></i>
            </button>
        {% endif %}
    </div>
    
    <div class=\"product-body\">
        <span class=\"product-category\">{{ product.category.name }}</span>
        <h5 class=\"product-name\">{{ product.name }}</h5>
        
        {# ==================== PRIX ==================== #}
        <div class=\"product-pricing\">
            {% if hasActivePromotion %}
                {# Calcul du prix promo #}
                {% if promotionType == 'percentage' and discountPercent > 0 %}
                    {% set promoPrice = product.salePrice * (1 - discountPercent / 100) %}
                {% elseif promotionType == 'fixed' and discountAmount > 0 %}
                    {% set promoPrice = product.salePrice - discountAmount %}
                {% else %}
                    {% set promoPrice = product.salePrice %}
                {% endif %}
                
                {# Affichage : prix promo en rouge + prix barré #}
                <span class=\"product-price promo-price\">
                    {{ promoPrice|price_with_currency(product.hmaService) }}
                </span>
                <span class=\"old-price\">
                    {{ product.salePrice|price_with_currency(product.hmaService) }}
                </span>
                
                {# Nom de la promotion #}
                {% if promotionName %}
                    <span class=\"promo-name-tag\">
                        <i class=\"fas fa-tag\"></i> {{ promotionName }}
                    </span>
                {% endif %}
                
            {% else %}
                {# Pas de promotion : prix normal #}
                <span class=\"product-price\">
                    {{ product.salePrice|price_with_currency(product.hmaService) }}
                </span>
            {% endif %}
        </div>
        
        {# NOTES #}
        <div class=\"product-rating\">
            <div class=\"stars\">
                {% set rating = product.averageRating|default(0) %}
                {% for i in 1..5 %}
                    {% if i <= rating %}
                        <i class=\"fas fa-star filled\"></i>
                    {% elseif i - 0.5 <= rating %}
                        <i class=\"fas fa-star-half-alt half-filled\"></i>
                    {% else %}
                        <i class=\"far fa-star\"></i>
                    {% endif %}
                {% endfor %}
            </div>
            <span class=\"rating-text\">(<strong>{{ product.ratingsCount|default(0) }}</strong>)</span>
        </div>
        
        {# BOUTONS D'ACTION #}
        <div class=\"action-buttons\">
            <a href=\"{{ path('marketplace_product_show', {id: product.id}) }}\" class=\"btn-view\">
                <i class=\"fas fa-eye\"></i> Voir
            </a>
            <button class=\"add-to-cart\" 
                    data-product-id=\"{{ product.id }}\"
                    {% if product.currentStock <= 0 %}disabled{% endif %}>
                <i class=\"fas fa-cart-plus\"></i> Ajouter
            </button>
        </div>
    </div>
</div>", "marketplace/_product_card.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\_product_card.html.twig");
    }
}
