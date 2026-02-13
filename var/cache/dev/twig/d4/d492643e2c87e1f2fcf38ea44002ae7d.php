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

/* partials/menu/_menu_manager.html.twig */
class __TwigTemplate_5ea77bbe2b0df2586fdcce03d8766068 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_manager.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_manager.html.twig"));

        // line 1
        yield "<!-- Menu GESTIONNAIRE -->
<li class=\"menu-title\" data-key=\"t-menu\">Gestion Commerciale</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-products\">
        <i class=\"fas fa-box-open\"></i>
        <span data-key=\"t-products\">Produits</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        yield "\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-th-large me-1\"></i> Catalogue produits
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-plus-circle me-1\"></i> Ajouter un produit
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        yield "\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-tags me-1\"></i> Catégories
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-tag me-1\"></i> Promotions
            </a>
        </li>
    </ul>
</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-sales\">
        <i class=\"fas fa-chart-line\"></i>
        <span data-key=\"t-sales\">Ventes & Analyses</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-file-invoice-dollar me-1\"></i> Rapport des ventes
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-star me-1\"></i> Meilleurs produits
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-friends me-1\"></i> Analyse clients
            </a>
        </li>
    </ul>
</li>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/menu/_menu_manager.html.twig";
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
        return array (  73 => 21,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Menu GESTIONNAIRE -->
<li class=\"menu-title\" data-key=\"t-menu\">Gestion Commerciale</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-products\">
        <i class=\"fas fa-box-open\"></i>
        <span data-key=\"t-products\">Produits</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"{{ path('admin_categories_index') }}\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-th-large me-1\"></i> Catalogue produits
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-plus-circle me-1\"></i> Ajouter un produit
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('admin_categories_index') }}\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-tags me-1\"></i> Catégories
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-tag me-1\"></i> Promotions
            </a>
        </li>
    </ul>
</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-sales\">
        <i class=\"fas fa-chart-line\"></i>
        <span data-key=\"t-sales\">Ventes & Analyses</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-file-invoice-dollar me-1\"></i> Rapport des ventes
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-star me-1\"></i> Meilleurs produits
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-friends me-1\"></i> Analyse clients
            </a>
        </li>
    </ul>
</li>

", "partials/menu/_menu_manager.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\menu\\_menu_manager.html.twig");
    }
}
