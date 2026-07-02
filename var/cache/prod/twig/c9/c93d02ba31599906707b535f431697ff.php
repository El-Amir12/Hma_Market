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

/* marketplace/cart/index.html.twig */
class __TwigTemplate_379298317393de27340fe8a4c057c97d extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_customer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_customer.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mon panier - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <h1 class=\"h2 fw-bold mb-4\">
            <i class=\"fas fa-shopping-cart text-primary me-2\"></i>
            Mon panier
        </h1>
    </div>
</div>

";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null)) > 0)) {
            // line 17
            yield "    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm rounded-4\">
                <div class=\"card-body p-4\">
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                yield "                        <div class=\"d-flex align-items-center gap-3 py-3 border-bottom\">
                            <div class=\"flex-shrink-0\">
                                ";
                // line 24
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 24), "image", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 25
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 25), "image", [], "any", false, false, false, 25))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
                    yield "\" 
                                         style=\"width: 80px; height: 80px; object-fit: cover; border-radius: 12px;\">
                                ";
                } else {
                    // line 29
                    yield "                                    <div style=\"width: 80px; height: 80px; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center;\">
                                        <i class=\"fas fa-box fa-2x text-muted\"></i>
                                    </div>
                                ";
                }
                // line 33
                yield "                            </div>
                            <div class=\"flex-grow-1\">
                                <h6 class=\"fw-bold mb-1\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                yield "</h6>
                                <small class=\"text-muted\">";
                // line 36
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "category", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "category", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true)) : ("Non catégorisé"));
                yield "</small>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"fw-bold text-primary\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 39), 0, ",", " "), "html", null, true);
                yield " FCFA</div>
                                <div class=\"d-flex align-items-center gap-2 mt-1\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"updateQuantity(";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 41), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 41) - 1), "html", null, true);
                yield ")\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <span class=\"fw-semibold\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 44), "html", null, true);
                yield "</span>
                                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"updateQuantity(";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 45) + 1), "html", null, true);
                yield ")\">
                                        <i class=\"fas fa-plus\"></i>
                                    </button>
                                    <button class=\"btn btn-sm btn-outline-danger ms-2\" onclick=\"removeItem(";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48), "html", null, true);
                yield ")\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                </div>
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm rounded-4 sticky-top\" style=\"top: 100px;\">
                <div class=\"card-body p-4\">
                    <h5 class=\"fw-bold mb-3\">Résumé</h5>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Total articles</span>
                        <span>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemsCount"] ?? null), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <span>Total</span>
                        <span class=\"fw-bold text-primary fs-5\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total"] ?? null), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                    </div>
                    <a href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_checkout");
            yield "\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-credit-card me-2\"></i>Passer la commande
                    </a>
                    <a href=\"";
            // line 73
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
            yield "\" class=\"btn btn-outline-secondary w-100 mt-2\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Continuer vos achats
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 81
            yield "    <div class=\"text-center py-5\">
        <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
        <h4 class=\"text-muted\">Votre panier est vide</h4>
        <p class=\"text-muted\">Commencez vos achats dès maintenant !</p>
        <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
            yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Voir les produits
        </a>
    </div>
";
        }
        // line 90
        yield "
<script>
function updateQuantity(id, quantity) {
    if (quantity < 0) return;
    fetch('";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart_update", ["id" => 0]);
        yield "'.replace('0', id), {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ quantity: quantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        }
    });
}

function removeItem(id) {
    if (confirm('Supprimer cet article du panier ?')) {
        fetch('";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_cart_remove", ["id" => 0]);
        yield "'.replace('0', id), {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/cart/index.html.twig";
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
        return array (  249 => 112,  228 => 94,  222 => 90,  214 => 85,  208 => 81,  197 => 73,  191 => 70,  186 => 68,  179 => 64,  168 => 55,  155 => 48,  147 => 45,  143 => 44,  135 => 41,  130 => 39,  124 => 36,  120 => 35,  116 => 33,  110 => 29,  104 => 26,  99 => 25,  97 => 24,  93 => 22,  89 => 21,  83 => 17,  81 => 16,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/cart/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\cart\\index.html.twig");
    }
}
