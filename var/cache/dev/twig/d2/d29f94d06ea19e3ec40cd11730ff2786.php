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

/* marketplace/favorites/index.html.twig */
class __TwigTemplate_24dcd850d44766c4aa1a99aaf9ca1867 extends Template
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
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/favorites/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/favorites/index.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 2);
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

        yield "Mes favoris - HMA Market";
        
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
            <i class=\"fas fa-heart text-danger me-2\"></i>
            Mes favoris
        </h1>
    </div>
</div>

";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            yield "    <div class=\"row g-4\">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 19
                yield "            <div class=\"col-md-3 col-6\">
                <div class=\"product-card\">
                    <div class=\"product-image\">
                        ";
                // line 22
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 22), "image", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 23
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 23), "image", [], "any", false, false, false, 23))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 25
                    yield "                            <div class=\"placeholder\">
                                <i class=\"fas fa-box\"></i>
                            </div>
                        ";
                }
                // line 29
                yield "                        <button class=\"favorite-btn active\" onclick=\"toggleFavorite(this, ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
                yield ")\">
                            <i class=\"fas fa-heart\"></i>
                        </button>
                    </div>
                    <div class=\"product-body\">
                        <div class=\"product-category\">";
                // line 34
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 34), "category", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 34), "category", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true)) : ("Non catégorisé"));
                yield "</div>
                        <h6 class=\"product-name\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                yield "</h6>
                        <div class=\"product-price\">
                            ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 37), "salePrice", [], "any", false, false, false, 37), 0, ",", " "), "html", null, true);
                yield " FCFA
                        </div>
                        <button class=\"add-to-cart mt-2\" data-product-id=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
                yield "\">
                            <i class=\"fas fa-cart-plus me-1\"></i>Ajouter au panier
                        </button>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "    </div>
";
        } else {
            // line 48
            yield "    <div class=\"text-center py-5\">
        <i class=\"fas fa-heart fa-4x text-muted mb-3\"></i>
        <h4 class=\"text-muted\">Aucun favori</h4>
        <p class=\"text-muted\">Ajoutez vos produits préférés en cliquant sur le cœur ❤️</p>
        <a href=\"";
            // line 52
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
            yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Découvrir les produits
        </a>
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/favorites/index.html.twig";
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
        return array (  187 => 52,  181 => 48,  177 => 46,  164 => 39,  159 => 37,  154 => 35,  150 => 34,  141 => 29,  135 => 25,  127 => 23,  125 => 22,  120 => 19,  116 => 18,  113 => 17,  111 => 16,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/favorites/index.html.twig #}
{% extends 'base_marketplace.html.twig' %}

{% block title %}Mes favoris - HMA Market{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12\">
        <h1 class=\"h2 fw-bold mb-4\">
            <i class=\"fas fa-heart text-danger me-2\"></i>
            Mes favoris
        </h1>
    </div>
</div>

{% if favorites|length > 0 %}
    <div class=\"row g-4\">
        {% for favorite in favorites %}
            <div class=\"col-md-3 col-6\">
                <div class=\"product-card\">
                    <div class=\"product-image\">
                        {% if favorite.product.image %}
                            <img src=\"{{ asset('uploads/products/' ~ favorite.product.image) }}\" alt=\"{{ favorite.product.name }}\">
                        {% else %}
                            <div class=\"placeholder\">
                                <i class=\"fas fa-box\"></i>
                            </div>
                        {% endif %}
                        <button class=\"favorite-btn active\" onclick=\"toggleFavorite(this, {{ favorite.product.id }})\">
                            <i class=\"fas fa-heart\"></i>
                        </button>
                    </div>
                    <div class=\"product-body\">
                        <div class=\"product-category\">{{ favorite.product.category ? favorite.product.category.name : 'Non catégorisé' }}</div>
                        <h6 class=\"product-name\">{{ favorite.product.name }}</h6>
                        <div class=\"product-price\">
                            {{ favorite.product.salePrice|number_format(0, ',', ' ') }} FCFA
                        </div>
                        <button class=\"add-to-cart mt-2\" data-product-id=\"{{ favorite.product.id }}\">
                            <i class=\"fas fa-cart-plus me-1\"></i>Ajouter au panier
                        </button>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% else %}
    <div class=\"text-center py-5\">
        <i class=\"fas fa-heart fa-4x text-muted mb-3\"></i>
        <h4 class=\"text-muted\">Aucun favori</h4>
        <p class=\"text-muted\">Ajoutez vos produits préférés en cliquant sur le cœur ❤️</p>
        <a href=\"{{ path('marketplace_products') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Découvrir les produits
        </a>
    </div>
{% endif %}
{% endblock %}", "marketplace/favorites/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\favorites\\index.html.twig");
    }
}
