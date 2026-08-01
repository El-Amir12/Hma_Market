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
class __TwigTemplate_281fc3f785b0770d2a399119c06049ab extends Template
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
        $context["isInCart"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30))) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), ((array_key_exists("cartProductIds", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cartProductIds"]) || array_key_exists("cartProductIds", $context) ? $context["cartProductIds"] : (function () { throw new RuntimeError('Variable "cartProductIds" does not exist.', 30, $this->source); })()), [])) : ([]))));
        // line 31
        yield "
";
        // line 33
        yield "<div class=\"product-card ";
        if ((($tmp = (isset($context["hasActivePromotion"]) || array_key_exists("hasActivePromotion", $context) ? $context["hasActivePromotion"] : (function () { throw new RuntimeError('Variable "hasActivePromotion" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-promotion";
        }
        yield "\">
    <div class=\"product-image\" onclick=\"window.location.href='";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "'\">
        ";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
            yield "\" loading=\"lazy\">
        ";
        } else {
            // line 38
            yield "            <div class=\"placeholder\">
                <i class=\"fas fa-box\"></i>
            </div>
        ";
        }
        // line 42
        yield "        
        ";
        // line 44
        yield "        ";
        if ((($tmp = (isset($context["hasActivePromotion"]) || array_key_exists("hasActivePromotion", $context) ? $context["hasActivePromotion"] : (function () { throw new RuntimeError('Variable "hasActivePromotion" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "            <span class=\"product-badge discount\">
                ";
            // line 46
            if (((isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 46, $this->source); })()) == "percentage")) {
                // line 47
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discountPercent"]) || array_key_exists("discountPercent", $context) ? $context["discountPercent"] : (function () { throw new RuntimeError('Variable "discountPercent" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "%
                ";
            } elseif ((            // line 48
(isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 48, $this->source); })()) == "fixed")) {
                // line 49
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["discountAmount"]) || array_key_exists("discountAmount", $context) ? $context["discountAmount"] : (function () { throw new RuntimeError('Variable "discountAmount" does not exist.', 49, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "hmaService", [], "any", false, false, false, 49)), "html", null, true);
                yield "
                ";
            }
            // line 51
            yield "            </span>
            <span class=\"product-badge promo-label\">🔥 PROMO</span>
        ";
        }
        // line 54
        yield "        
        ";
        // line 56
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)))) {
            // line 57
            yield "            <button class=\"favorite-btn ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), (isset($context["favoriteIds"]) || array_key_exists("favoriteIds", $context) ? $context["favoriteIds"] : (function () { throw new RuntimeError('Variable "favoriteIds" does not exist.', 57, $this->source); })()))) {
                yield "active";
            }
            yield "\" 
                    onclick=\"event.stopPropagation(); toggleFavorite(this, ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
            yield ")\"
                    data-product-id=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
                <i class=\"";
            // line 60
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), (isset($context["favoriteIds"]) || array_key_exists("favoriteIds", $context) ? $context["favoriteIds"] : (function () { throw new RuntimeError('Variable "favoriteIds" does not exist.', 60, $this->source); })()))) {
                yield "fas";
            } else {
                yield "far";
            }
            yield " fa-heart\"></i>
            </button>
        ";
        }
        // line 63
        yield "    </div>
    
    <div class=\"product-body\" onclick=\"window.location.href='";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
        yield "'\">
        ";
        // line 67
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "category", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "            <span class=\"product-category\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "category", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
            yield "</span>
        ";
        } else {
            // line 70
            yield "            <span class=\"product-category\">Non catégorisé</span>
        ";
        }
        // line 72
        yield "        
        <h5 class=\"product-name\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
        yield "</h5>
        
        ";
        // line 76
        yield "        <div class=\"product-pricing\">
            ";
        // line 77
        if ((($tmp = (isset($context["hasActivePromotion"]) || array_key_exists("hasActivePromotion", $context) ? $context["hasActivePromotion"] : (function () { throw new RuntimeError('Variable "hasActivePromotion" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                ";
            // line 79
            yield "                ";
            if ((((isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 79, $this->source); })()) == "percentage") && ((isset($context["discountPercent"]) || array_key_exists("discountPercent", $context) ? $context["discountPercent"] : (function () { throw new RuntimeError('Variable "discountPercent" does not exist.', 79, $this->source); })()) > 0))) {
                // line 80
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "salePrice", [], "any", false, false, false, 80) * (1 - ((isset($context["discountPercent"]) || array_key_exists("discountPercent", $context) ? $context["discountPercent"] : (function () { throw new RuntimeError('Variable "discountPercent" does not exist.', 80, $this->source); })()) / 100)));
                // line 81
                yield "                ";
            } elseif ((((isset($context["promotionType"]) || array_key_exists("promotionType", $context) ? $context["promotionType"] : (function () { throw new RuntimeError('Variable "promotionType" does not exist.', 81, $this->source); })()) == "fixed") && ((isset($context["discountAmount"]) || array_key_exists("discountAmount", $context) ? $context["discountAmount"] : (function () { throw new RuntimeError('Variable "discountAmount" does not exist.', 81, $this->source); })()) > 0))) {
                // line 82
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 82, $this->source); })()), "salePrice", [], "any", false, false, false, 82) - (isset($context["discountAmount"]) || array_key_exists("discountAmount", $context) ? $context["discountAmount"] : (function () { throw new RuntimeError('Variable "discountAmount" does not exist.', 82, $this->source); })()));
                // line 83
                yield "                ";
            } else {
                // line 84
                yield "                    ";
                $context["promoPrice"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "salePrice", [], "any", false, false, false, 84);
                // line 85
                yield "                ";
            }
            // line 86
            yield "                
                ";
            // line 88
            yield "                <span class=\"product-price promo-price\">
                    ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["promoPrice"]) || array_key_exists("promoPrice", $context) ? $context["promoPrice"] : (function () { throw new RuntimeError('Variable "promoPrice" does not exist.', 89, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 89, $this->source); })()), "hmaService", [], "any", false, false, false, 89)), "html", null, true);
            yield "
                </span>
                <span class=\"old-price\">
                    ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 92, $this->source); })()), "salePrice", [], "any", false, false, false, 92), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 92, $this->source); })()), "hmaService", [], "any", false, false, false, 92)), "html", null, true);
            yield "
                </span>
                
                ";
            // line 96
            yield "                ";
            if ((($tmp = (isset($context["promotionName"]) || array_key_exists("promotionName", $context) ? $context["promotionName"] : (function () { throw new RuntimeError('Variable "promotionName" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                    <span class=\"promo-name-tag\">
                        <i class=\"fas fa-tag\"></i> ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotionName"]) || array_key_exists("promotionName", $context) ? $context["promotionName"] : (function () { throw new RuntimeError('Variable "promotionName" does not exist.', 98, $this->source); })()), "html", null, true);
                yield "
                    </span>
                ";
            }
            // line 101
            yield "                
            ";
        } else {
            // line 103
            yield "                ";
            // line 104
            yield "                <span class=\"product-price\">
                    ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 105, $this->source); })()), "salePrice", [], "any", false, false, false, 105), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 105, $this->source); })()), "hmaService", [], "any", false, false, false, 105)), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 108
        yield "        </div>
        
        ";
        // line 111
        yield "        <div class=\"product-rating\">
            <div class=\"stars\">
                ";
        // line 113
        $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 113, $this->source); })()), "averageRating", [], "any", false, false, false, 113), 0)) : (0));
        // line 114
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 115
            yield "                    ";
            if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 115, $this->source); })()))) {
                // line 116
                yield "                        <i class=\"fas fa-star filled\"></i>
                    ";
            } elseif (((            // line 117
$context["i"] - 0.5) <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 117, $this->source); })()))) {
                // line 118
                yield "                        <i class=\"fas fa-star-half-alt half-filled\"></i>
                    ";
            } else {
                // line 120
                yield "                        <i class=\"far fa-star\"></i>
                    ";
            }
            // line 122
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "            </div>
            <span class=\"rating-text\">(<strong>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "ratingsCount", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 124, $this->source); })()), "ratingsCount", [], "any", false, false, false, 124), 0)) : (0)), "html", null, true);
        yield "</strong>)</span>
        </div>
        
        ";
        // line 128
        yield "        <div class=\"action-buttons\" onclick=\"event.stopPropagation();\">
            ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129)))) {
            // line 130
            yield "                ";
            // line 131
            yield "                ";
            if ((($tmp = (isset($context["isInCart"]) || array_key_exists("isInCart", $context) ? $context["isInCart"] : (function () { throw new RuntimeError('Variable "isInCart" does not exist.', 131, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 132
                yield "                    <button class=\"add-to-cart already-in-cart\" 
                            data-product-id=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133), "html", null, true);
                yield "\"
                            data-product-name=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 134, $this->source); })()), "name", [], "any", false, false, false, 134), "html", null, true);
                yield "\"
                            disabled>
                        <i class=\"fas fa-check me-1\"></i> Dans le panier
                    </button>
                ";
            } else {
                // line 139
                yield "                    <button class=\"add-to-cart\" 
                            data-product-id=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140), "html", null, true);
                yield "\"
                            data-product-name=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 141, $this->source); })()), "name", [], "any", false, false, false, 141), "html", null, true);
                yield "\">
                        <i class=\"fas fa-cart-plus\"></i> Ajouter au panier
                    </button>
                ";
            }
            // line 145
            yield "            ";
        } else {
            // line 146
            yield "                ";
            // line 147
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
            yield "\" 
                   class=\"add-to-cart btn-login-to-add\"
                   onclick=\"event.stopPropagation();\">
                    <i class=\"fas fa-cart-plus\"></i> Ajouter au panier
                </a>
            ";
        }
        // line 153
        yield "        </div>
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
        return array (  417 => 153,  407 => 147,  405 => 146,  402 => 145,  395 => 141,  391 => 140,  388 => 139,  380 => 134,  376 => 133,  373 => 132,  370 => 131,  368 => 130,  366 => 129,  363 => 128,  357 => 124,  354 => 123,  348 => 122,  344 => 120,  340 => 118,  338 => 117,  335 => 116,  332 => 115,  327 => 114,  325 => 113,  321 => 111,  317 => 108,  311 => 105,  308 => 104,  306 => 103,  302 => 101,  296 => 98,  293 => 97,  290 => 96,  284 => 92,  278 => 89,  275 => 88,  272 => 86,  269 => 85,  266 => 84,  263 => 83,  260 => 82,  257 => 81,  254 => 80,  251 => 79,  249 => 78,  247 => 77,  244 => 76,  239 => 73,  236 => 72,  232 => 70,  226 => 68,  223 => 67,  219 => 65,  215 => 63,  205 => 60,  201 => 59,  197 => 58,  190 => 57,  187 => 56,  184 => 54,  179 => 51,  173 => 49,  171 => 48,  166 => 47,  164 => 46,  161 => 45,  158 => 44,  155 => 42,  149 => 38,  141 => 36,  139 => 35,  135 => 34,  128 => 33,  125 => 31,  123 => 30,  120 => 28,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  64 => 10,  61 => 9,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  48 => 2,);
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

{# Vérifier si le produit est déjà dans le panier (uniquement si connecté) #}
{% set isInCart = app.user and is_customer(app.user) and product.id in cartProductIds|default([]) %}

{# ==================== CARTE PRODUIT ==================== #}
<div class=\"product-card {% if hasActivePromotion %}has-promotion{% endif %}\">
    <div class=\"product-image\" onclick=\"window.location.href='{{ path('marketplace_product_show', {id: product.id}) }}'\">
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
        
        {# BOUTON FAVORIS - UNIQUEMENT si connecté en tant que Customer #}
        {% if app.user and is_customer(app.user) %}
            <button class=\"favorite-btn {% if product.id in favoriteIds %}active{% endif %}\" 
                    onclick=\"event.stopPropagation(); toggleFavorite(this, {{ product.id }})\"
                    data-product-id=\"{{ product.id }}\">
                <i class=\"{% if product.id in favoriteIds %}fas{% else %}far{% endif %} fa-heart\"></i>
            </button>
        {% endif %}
    </div>
    
    <div class=\"product-body\" onclick=\"window.location.href='{{ path('marketplace_product_show', {id: product.id}) }}'\">
        {# Affichage sécurisé de la catégorie #}
        {% if product.category %}
            <span class=\"product-category\">{{ product.category.name }}</span>
        {% else %}
            <span class=\"product-category\">Non catégorisé</span>
        {% endif %}
        
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
        
        {# BOUTON AJOUTER AU PANIER #}
        <div class=\"action-buttons\" onclick=\"event.stopPropagation();\">
            {% if app.user and is_customer(app.user) %}
                {# Utilisateur connecté - afficher le bouton normal #}
                {% if isInCart %}
                    <button class=\"add-to-cart already-in-cart\" 
                            data-product-id=\"{{ product.id }}\"
                            data-product-name=\"{{ product.name }}\"
                            disabled>
                        <i class=\"fas fa-check me-1\"></i> Dans le panier
                    </button>
                {% else %}
                    <button class=\"add-to-cart\" 
                            data-product-id=\"{{ product.id }}\"
                            data-product-name=\"{{ product.name }}\">
                        <i class=\"fas fa-cart-plus\"></i> Ajouter au panier
                    </button>
                {% endif %}
            {% else %}
                {# Utilisateur non connecté - afficher un bouton de connexion #}
                <a href=\"{{ path('marketplace_login') }}\" 
                   class=\"add-to-cart btn-login-to-add\"
                   onclick=\"event.stopPropagation();\">
                    <i class=\"fas fa-cart-plus\"></i> Ajouter au panier
                </a>
            {% endif %}
        </div>
    </div>
</div>", "marketplace/_product_card.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\_product_card.html.twig");
    }
}
