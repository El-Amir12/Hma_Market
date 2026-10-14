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
class __TwigTemplate_898369c29d249be672ab3206b29bc653 extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "promotionProducts", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["promotionProduct"]) {
            // line 11
            yield "    ";
            $context["promotion"] = CoreExtension::getAttribute($this->env, $this->source, $context["promotionProduct"], "promotion", [], "any", false, false, false, 11);
            // line 12
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 12) && (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "startDate", [], "any", false, false, false, 12) <= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 12)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 12) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())))) {
                // line 13
                yield "        ";
                $context["hasActivePromotion"] = true;
                // line 14
                yield "        ";
                $context["promotionName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 14);
                // line 15
                yield "        ";
                $context["typePromotion"] = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 15);
                // line 16
                yield "        ";
                if ((($tmp = ($context["typePromotion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 17
                    yield "            ";
                    $context["typeName"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["typePromotion"] ?? null), "name", [], "any", false, false, false, 17));
                    // line 18
                    yield "            ";
                    if ((((($context["typeName"] ?? null) == "pourcentage") || (($context["typeName"] ?? null) == "percentage")) || (($context["typeName"] ?? null) == "%"))) {
                        // line 19
                        yield "                ";
                        $context["promotionType"] = "percentage";
                        // line 20
                        yield "                ";
                        $context["discountPercent"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "discountPercentage", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "discountPercentage", [], "any", false, false, false, 20), 0)) : (0));
                        // line 21
                        yield "            ";
                    } elseif ((((($context["typeName"] ?? null) == "montant fixe") || (($context["typeName"] ?? null) == "fixed")) || (($context["typeName"] ?? null) == "fixe"))) {
                        // line 22
                        yield "                ";
                        $context["promotionType"] = "fixed";
                        // line 23
                        yield "                ";
                        $context["discountAmount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "discountAmount", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "discountAmount", [], "any", false, false, false, 23), 0)) : (0));
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
        $context["isInCart"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30))) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 30), ((array_key_exists("cartProductIds", $context)) ? (Twig\Extension\CoreExtension::default(($context["cartProductIds"] ?? null), [])) : ([]))));
        // line 31
        yield "
";
        // line 33
        yield "<div class=\"product-card ";
        if ((($tmp = ($context["hasActivePromotion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-promotion";
        }
        yield "\">
    <div class=\"product-image\" onclick=\"window.location.href='";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "'\">
        ";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 36))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
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
        if ((($tmp = ($context["hasActivePromotion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "            <span class=\"product-badge discount\">
                ";
            // line 46
            if ((($context["promotionType"] ?? null) == "percentage")) {
                // line 47
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["discountPercent"] ?? null), "html", null, true);
                yield "%
                ";
            } elseif ((            // line 48
($context["promotionType"] ?? null) == "fixed")) {
                // line 49
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["discountAmount"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 49)), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56)))) {
            // line 57
            yield "            <button class=\"favorite-btn ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 57), ($context["favoriteIds"] ?? null))) {
                yield "active";
            }
            yield "\" 
                    onclick=\"event.stopPropagation(); toggleFavorite(this, ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
            yield ")\"
                    data-product-id=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
                <i class=\"";
            // line 60
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 60), ($context["favoriteIds"] ?? null))) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 65)]), "html", null, true);
        yield "'\">
        ";
        // line 67
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "            <span class=\"product-category\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 73), "html", null, true);
        yield "</h5>
        
        ";
        // line 76
        yield "        <div class=\"product-pricing\">
            ";
        // line 77
        if ((($tmp = ($context["hasActivePromotion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                ";
            // line 79
            yield "                ";
            if (((($context["promotionType"] ?? null) == "percentage") && (($context["discountPercent"] ?? null) > 0))) {
                // line 80
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 80) * (1 - (($context["discountPercent"] ?? null) / 100)));
                // line 81
                yield "                ";
            } elseif (((($context["promotionType"] ?? null) == "fixed") && (($context["discountAmount"] ?? null) > 0))) {
                // line 82
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 82) - ($context["discountAmount"] ?? null));
                // line 83
                yield "                ";
            } else {
                // line 84
                yield "                    ";
                $context["promoPrice"] = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 84);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["promoPrice"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 89)), "html", null, true);
            yield "
                </span>
                <span class=\"old-price\">
                    ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 92), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 92)), "html", null, true);
            yield "
                </span>
                
                ";
            // line 96
            yield "                ";
            if ((($tmp = ($context["promotionName"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                    <span class=\"promo-name-tag\">
                        <i class=\"fas fa-tag\"></i> ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["promotionName"] ?? null), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 105), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 105)), "html", null, true);
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
        $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", false, false, false, 113), 0)) : (0));
        // line 114
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 115
            yield "                    ";
            if (($context["i"] <= ($context["rating"] ?? null))) {
                // line 116
                yield "                        <i class=\"fas fa-star filled\"></i>
                    ";
            } elseif (((            // line 117
$context["i"] - 0.5) <= ($context["rating"] ?? null))) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "ratingsCount", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "ratingsCount", [], "any", false, false, false, 124), 0)) : (0)), "html", null, true);
        yield "</strong>)</span>
        </div>
        
        ";
        // line 128
        yield "        <div class=\"action-buttons\" onclick=\"event.stopPropagation();\">
            ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 129) && $this->extensions['App\Twig\RatingExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 129)))) {
            // line 130
            yield "                ";
            // line 131
            yield "                ";
            if ((($tmp = ($context["isInCart"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 132
                yield "                    <button class=\"add-to-cart already-in-cart\" 
                            data-product-id=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 133), "html", null, true);
                yield "\"
                            data-product-name=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 134), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 140), "html", null, true);
                yield "\"
                            data-product-name=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 141), "html", null, true);
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
        return array (  411 => 153,  401 => 147,  399 => 146,  396 => 145,  389 => 141,  385 => 140,  382 => 139,  374 => 134,  370 => 133,  367 => 132,  364 => 131,  362 => 130,  360 => 129,  357 => 128,  351 => 124,  348 => 123,  342 => 122,  338 => 120,  334 => 118,  332 => 117,  329 => 116,  326 => 115,  321 => 114,  319 => 113,  315 => 111,  311 => 108,  305 => 105,  302 => 104,  300 => 103,  296 => 101,  290 => 98,  287 => 97,  284 => 96,  278 => 92,  272 => 89,  269 => 88,  266 => 86,  263 => 85,  260 => 84,  257 => 83,  254 => 82,  251 => 81,  248 => 80,  245 => 79,  243 => 78,  241 => 77,  238 => 76,  233 => 73,  230 => 72,  226 => 70,  220 => 68,  217 => 67,  213 => 65,  209 => 63,  199 => 60,  195 => 59,  191 => 58,  184 => 57,  181 => 56,  178 => 54,  173 => 51,  167 => 49,  165 => 48,  160 => 47,  158 => 46,  155 => 45,  152 => 44,  149 => 42,  143 => 38,  135 => 36,  133 => 35,  129 => 34,  122 => 33,  119 => 31,  117 => 30,  114 => 28,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  58 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/_product_card.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\_product_card.html.twig");
    }
}
