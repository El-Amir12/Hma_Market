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

/* partials/menu/_menu_common.html.twig */
class __TwigTemplate_61e1bdbc98aa5b130443a781b68c1ca9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_common.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu/_menu_common.html.twig"));

        // line 1
        yield "<!-- Menu commun à tous les utilisateurs -->
<li class=\"menu-title\" data-key=\"t-menu\">Tableau de bord</li>
<li class=\"nav-item\">
    <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\" data-key=\"t-dashboard\">
        <i class=\"fas fa-home\"></i>
        <span data-key=\"t-dashboard\">Dashboard</span>
    </a>
</li>

<!-- Rapports (pour certains rôles) -->
";
        // line 11
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER"))) {
            // line 12
            yield "<li class=\"menu-title\" data-key=\"t-menu\">Rapports</li>
<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-reports\">
        <i class=\"fas fa-chart-bar\"></i>
        <span data-key=\"t-reports\">Analytiques</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        ";
            // line 19
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-coins me-1\"></i> Rapport financier
            </a>
        </li>
        ";
            }
            // line 26
            yield "        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-shopping-cart me-1\"></i> Rapport des ventes
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-box me-1\"></i> Rapport de stock
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-calculator me-1\"></i> Rapport de caisse
            </a>
        </li>
    </ul>
</li>
";
        }
        // line 44
        yield "
<!-- Mon compte -->
<li class=\"menu-title\" data-key=\"t-menu\">Mon Compte</li>
<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-profile\">
        <i class=\"fas fa-user-circle\"></i>
        <span data-key=\"t-profile\">Mon Profil</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-edit me-1\"></i> Modifier mon profil
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-key me-1\"></i> Changer mot de passe
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
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
        return "partials/menu/_menu_common.html.twig";
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
        return array (  129 => 64,  121 => 59,  104 => 44,  84 => 26,  76 => 20,  74 => 19,  65 => 12,  63 => 11,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Menu commun à tous les utilisateurs -->
<li class=\"menu-title\" data-key=\"t-menu\">Tableau de bord</li>
<li class=\"nav-item\">
    <a href=\"{{ path('app_home') }}\" class=\"nav-link\" data-key=\"t-dashboard\">
        <i class=\"fas fa-home\"></i>
        <span data-key=\"t-dashboard\">Dashboard</span>
    </a>
</li>

<!-- Rapports (pour certains rôles) -->
{% if is_granted('ROLE_MANAGER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STOCK_MANAGER') %}
<li class=\"menu-title\" data-key=\"t-menu\">Rapports</li>
<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-reports\">
        <i class=\"fas fa-chart-bar\"></i>
        <span data-key=\"t-reports\">Analytiques</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-coins me-1\"></i> Rapport financier
            </a>
        </li>
        {% endif %}
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-shopping-cart me-1\"></i> Rapport des ventes
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-box me-1\"></i> Rapport de stock
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-calculator me-1\"></i> Rapport de caisse
            </a>
        </li>
    </ul>
</li>
{% endif %}

<!-- Mon compte -->
<li class=\"menu-title\" data-key=\"t-menu\">Mon Compte</li>
<li class=\"nav-item\">
    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\" data-key=\"t-profile\">
        <i class=\"fas fa-user-circle\"></i>
        <span data-key=\"t-profile\">Mon Profil</span>
    </a>
    <ul class=\"sub-menu\" aria-expanded=\"false\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-user-edit me-1\"></i> Modifier mon profil
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('app_forgot_password_request') }}\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-key me-1\"></i> Changer mot de passe
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('app_logout') }}\" class=\"nav-link\" data-key=\"t-analytics\">
                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
            </a>
        </li>
    </ul>
</li>", "partials/menu/_menu_common.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\menu\\_menu_common.html.twig");
    }
}
