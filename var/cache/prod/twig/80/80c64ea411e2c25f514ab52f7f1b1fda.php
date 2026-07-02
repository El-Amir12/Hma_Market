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
class __TwigTemplate_cb872a7e4fa0793608ccfc4fcee6940c extends Template
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
        yield "<div class=\"product-card ";
        if ((($tmp = ($context["hasActivePromotion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-promotion";
        }
        yield "\">
    <div class=\"product-image\">
        ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 33))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
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
        if ((($tmp = ($context["hasActivePromotion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "            <span class=\"product-badge discount\">
                ";
            // line 43
            if ((($context["promotionType"] ?? null) == "percentage")) {
                // line 44
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["discountPercent"] ?? null), "html", null, true);
                yield "%
                ";
            } elseif ((            // line 45
($context["promotionType"] ?? null) == "fixed")) {
                // line 46
                yield "                    -";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["discountAmount"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 46)), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53) && $this->extensions['App\Twig\AppExtension']->isCustomer(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53)))) {
            // line 54
            yield "            <button class=\"favorite-btn ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 54), ($context["favoriteIds"] ?? null))) {
                yield "active";
            }
            yield "\" 
                    onclick=\"toggleFavorite(this, ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
            yield ")\"
                    data-product-id=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\">
                <i class=\"";
            // line 57
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 57), ($context["favoriteIds"] ?? null))) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
        <h5 class=\"product-name\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 64), "html", null, true);
        yield "</h5>
        
        ";
        // line 67
        yield "        <div class=\"product-pricing\">
            ";
        // line 68
        if ((($tmp = ($context["hasActivePromotion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                ";
            // line 70
            yield "                ";
            if (((($context["promotionType"] ?? null) == "percentage") && (($context["discountPercent"] ?? null) > 0))) {
                // line 71
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 71) * (1 - (($context["discountPercent"] ?? null) / 100)));
                // line 72
                yield "                ";
            } elseif (((($context["promotionType"] ?? null) == "fixed") && (($context["discountAmount"] ?? null) > 0))) {
                // line 73
                yield "                    ";
                $context["promoPrice"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 73) - ($context["discountAmount"] ?? null));
                // line 74
                yield "                ";
            } else {
                // line 75
                yield "                    ";
                $context["promoPrice"] = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 75);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["promoPrice"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 80)), "html", null, true);
            yield "
                </span>
                <span class=\"old-price\">
                    ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 83), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 83)), "html", null, true);
            yield "
                </span>
                
                ";
            // line 87
            yield "                ";
            if ((($tmp = ($context["promotionName"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "                    <span class=\"promo-name-tag\">
                        <i class=\"fas fa-tag\"></i> ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["promotionName"] ?? null), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 96), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 96)), "html", null, true);
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
        $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", false, false, false, 104), 0)) : (0));
        // line 105
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 106
            yield "                    ";
            if (($context["i"] <= ($context["rating"] ?? null))) {
                // line 107
                yield "                        <i class=\"fas fa-star filled\"></i>
                    ";
            } elseif (((            // line 108
$context["i"] - 0.5) <= ($context["rating"] ?? null))) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "ratingsCount", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "ratingsCount", [], "any", false, false, false, 115), 0)) : (0)), "html", null, true);
        yield "</strong>)</span>
        </div>
        
        ";
        // line 119
        yield "        <div class=\"action-buttons\">
            <a href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 120)]), "html", null, true);
        yield "\" class=\"btn-view\">
                <i class=\"fas fa-eye\"></i> Voir
            </a>
            <button class=\"add-to-cart\" 
                    data-product-id=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 124), "html", null, true);
        yield "\"
                    ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "currentStock", [], "any", false, false, false, 125) <= 0)) {
            yield "disabled";
        }
        yield ">
                <i class=\"fas fa-cart-plus\"></i> Ajouter
            </button>
        </div>
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
        return array (  348 => 125,  344 => 124,  337 => 120,  334 => 119,  328 => 115,  325 => 114,  319 => 113,  315 => 111,  311 => 109,  309 => 108,  306 => 107,  303 => 106,  298 => 105,  296 => 104,  292 => 102,  288 => 99,  282 => 96,  279 => 95,  277 => 94,  273 => 92,  267 => 89,  264 => 88,  261 => 87,  255 => 83,  249 => 80,  246 => 79,  243 => 77,  240 => 76,  237 => 75,  234 => 74,  231 => 73,  228 => 72,  225 => 71,  222 => 70,  220 => 69,  218 => 68,  215 => 67,  210 => 64,  206 => 63,  201 => 60,  191 => 57,  187 => 56,  183 => 55,  176 => 54,  173 => 53,  170 => 51,  165 => 48,  159 => 46,  157 => 45,  152 => 44,  150 => 43,  147 => 42,  144 => 41,  141 => 39,  135 => 35,  127 => 33,  125 => 32,  117 => 30,  114 => 28,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  58 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/_product_card.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\_product_card.html.twig");
    }
}
