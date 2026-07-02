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
class __TwigTemplate_b54b82f66d6bde35d6399b965646d803 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/cart/index.html.twig"));

        $this->parent = $this->load("base_customer.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mon panier - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            yield "    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm rounded-4\">
                <div class=\"card-body p-4\">
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 21, $this->source); })()));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemsCount"]) || array_key_exists("itemsCount", $context) ? $context["itemsCount"] : (function () { throw new RuntimeError('Variable "itemsCount" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <span>Total</span>
                        <span class=\"fw-bold text-primary fs-5\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()), 0, ",", " "), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  279 => 112,  258 => 94,  252 => 90,  244 => 85,  238 => 81,  227 => 73,  221 => 70,  216 => 68,  209 => 64,  198 => 55,  185 => 48,  177 => 45,  173 => 44,  165 => 41,  160 => 39,  154 => 36,  150 => 35,  146 => 33,  140 => 29,  134 => 26,  129 => 25,  127 => 24,  123 => 22,  119 => 21,  113 => 17,  111 => 16,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/cart/index.html.twig #}
{% extends 'base_customer.html.twig' %}

{% block title %}Mon panier - HMA Market{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12\">
        <h1 class=\"h2 fw-bold mb-4\">
            <i class=\"fas fa-shopping-cart text-primary me-2\"></i>
            Mon panier
        </h1>
    </div>
</div>

{% if items|length > 0 %}
    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm rounded-4\">
                <div class=\"card-body p-4\">
                    {% for item in items %}
                        <div class=\"d-flex align-items-center gap-3 py-3 border-bottom\">
                            <div class=\"flex-shrink-0\">
                                {% if item.product.image %}
                                    <img src=\"{{ asset('uploads/products/' ~ item.product.image) }}\" 
                                         alt=\"{{ item.product.name }}\" 
                                         style=\"width: 80px; height: 80px; object-fit: cover; border-radius: 12px;\">
                                {% else %}
                                    <div style=\"width: 80px; height: 80px; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center;\">
                                        <i class=\"fas fa-box fa-2x text-muted\"></i>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"flex-grow-1\">
                                <h6 class=\"fw-bold mb-1\">{{ item.product.name }}</h6>
                                <small class=\"text-muted\">{{ item.product.category ? item.product.category.name : 'Non catégorisé' }}</small>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"fw-bold text-primary\">{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</div>
                                <div class=\"d-flex align-items-center gap-2 mt-1\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"updateQuantity({{ item.id }}, {{ item.quantity - 1 }})\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <span class=\"fw-semibold\">{{ item.quantity }}</span>
                                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"updateQuantity({{ item.id }}, {{ item.quantity + 1 }})\">
                                        <i class=\"fas fa-plus\"></i>
                                    </button>
                                    <button class=\"btn btn-sm btn-outline-danger ms-2\" onclick=\"removeItem({{ item.id }})\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm rounded-4 sticky-top\" style=\"top: 100px;\">
                <div class=\"card-body p-4\">
                    <h5 class=\"fw-bold mb-3\">Résumé</h5>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Total articles</span>
                        <span>{{ itemsCount }}</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <span>Total</span>
                        <span class=\"fw-bold text-primary fs-5\">{{ total|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                    <a href=\"{{ path('marketplace_checkout') }}\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-credit-card me-2\"></i>Passer la commande
                    </a>
                    <a href=\"{{ path('marketplace_products') }}\" class=\"btn btn-outline-secondary w-100 mt-2\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Continuer vos achats
                    </a>
                </div>
            </div>
        </div>
    </div>
{% else %}
    <div class=\"text-center py-5\">
        <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
        <h4 class=\"text-muted\">Votre panier est vide</h4>
        <p class=\"text-muted\">Commencez vos achats dès maintenant !</p>
        <a href=\"{{ path('marketplace_products') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Voir les produits
        </a>
    </div>
{% endif %}

<script>
function updateQuantity(id, quantity) {
    if (quantity < 0) return;
    fetch('{{ path('marketplace_cart_update', {id: 0}) }}'.replace('0', id), {
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
        fetch('{{ path('marketplace_cart_remove', {id: 0}) }}'.replace('0', id), {
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
{% endblock %}", "marketplace/cart/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\cart\\index.html.twig");
    }
}
