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

/* partials/menu/_menu_admin.html.twig */
class __TwigTemplate_3c54337c13380d96aaa798f074f21473 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_admin.html.twig"));

        // line 1
        yield "<!-- Menu ADMINISTRATEUR -->
<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-dashboards\">
        <i class=\"fas fa-users-cog\"></i>
        <span data-key=\"t-dashboards\">Gestion Utilisateurs</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-list me-1\"></i> Liste des utilisateurs
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-plus me-1\"></i> Créer un utilisateur
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-tag me-1\"></i> Gestion des rôles
            </a>
        </li>
    </ul>
</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-config\">
        <i class=\"fas fa-cogs\"></i>
        <span data-key=\"t-config\">Configuration</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-sliders-h me-1\"></i> Paramètres généraux
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-store me-1\"></i> Configuration boutique
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-percent me-1\"></i> Taxes & TVA
            </a>
        </li>
    </ul>
</li>

<!-- Inclure les menus communs -->
";
        // line 51
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_manager.html.twig");
        yield "
";
        // line 52
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_stock_manager.html.twig");
        yield "
";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_cashier.html.twig");
        yield "
";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_common.html.twig");
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/menu/_menu_admin.html.twig";
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
        return array (  118 => 54,  114 => 53,  110 => 52,  106 => 51,  66 => 14,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Menu ADMINISTRATEUR -->
<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-dashboards\">
        <i class=\"fas fa-users-cog\"></i>
        <span data-key=\"t-dashboards\">Gestion Utilisateurs</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-list me-1\"></i> Liste des utilisateurs
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('app_user_new') }}\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-plus me-1\"></i> Créer un utilisateur
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-tag me-1\"></i> Gestion des rôles
            </a>
        </li>
    </ul>
</li>

<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-config\">
        <i class=\"fas fa-cogs\"></i>
        <span data-key=\"t-config\">Configuration</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-sliders-h me-1\"></i> Paramètres généraux
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-store me-1\"></i> Configuration boutique
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-percent me-1\"></i> Taxes & TVA
            </a>
        </li>
    </ul>
</li>

<!-- Inclure les menus communs -->
{{ include('partials/menu/_menu_manager.html.twig') }}
{{ include('partials/menu/_menu_stock_manager.html.twig') }}
{{ include('partials/menu/_menu_cashier.html.twig') }}
{{ include('partials/menu/_menu_common.html.twig') }}", "partials/menu/_menu_admin.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\menu\\_menu_admin.html.twig");
    }
}
