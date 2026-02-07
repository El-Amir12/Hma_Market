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

/* partials/menu/_menu_cashier.html.twig */
class __TwigTemplate_e690e41176c50c40601320855684363b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_cashier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_cashier.html.twig"));

        // line 1
        yield "<!-- Menu CAISSIER -->
<li class=\"menu-title\" data-key=\"t-menu\">Point de Vente</li>

<li class=\"nav-item\">
    <a href=\"#\" class=\"nav-link\" data-key=\"t-pos\">
        <i class=\"fas fa-cash-register\"></i>
        <span data-key=\"t-pos\">Caisse enregistreuse</span>
    </a>
</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-transactions\">
        <i class=\"fas fa-receipt\"></i>
        <span data-key=\"t-transactions\">Transactions</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-history me-1\"></i> Historique des ventes
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-sun me-1\"></i> Ventes du jour
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-undo me-1\"></i> Remboursements
            </a>
        </li>
    </ul>
</li>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/menu/_menu_cashier.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Menu CAISSIER -->
<li class=\"menu-title\" data-key=\"t-menu\">Point de Vente</li>

<li class=\"nav-item\">
    <a href=\"#\" class=\"nav-link\" data-key=\"t-pos\">
        <i class=\"fas fa-cash-register\"></i>
        <span data-key=\"t-pos\">Caisse enregistreuse</span>
    </a>
</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-transactions\">
        <i class=\"fas fa-receipt\"></i>
        <span data-key=\"t-transactions\">Transactions</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-history me-1\"></i> Historique des ventes
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-sun me-1\"></i> Ventes du jour
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-undo me-1\"></i> Remboursements
            </a>
        </li>
    </ul>
</li>", "partials/menu/_menu_cashier.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\menu\\_menu_cashier.html.twig");
    }
}
