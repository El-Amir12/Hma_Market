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

/* partials/sidebar.html.twig */
class __TwigTemplate_7ba27ec9db2fc3a33c78142721c03a89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        yield "<!-- ========== App Menu ========== -->
<div class=\"app-menu navbar-menu\">
    <!-- LOGO -->
    <div class=\"navbar-brand-box\">
        <!-- Dark Logo-->
        <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                <i class=\"fas fa-store\"></i>
            </span>
            <span class=\"logo-lg\">
                HMA MARKET
            </span>
        </a>
        <!-- Light Logo-->
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo logo-light\">
            <span class=\"logo-sm\">
                <i class=\"fas fa-store\"></i>
            </span>
            <span class=\"logo-lg\">
                HMA MARKET
            </span>
        </a>
        <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\"
                id=\"vertical-hover\">
            <i class=\"fas fa-bars\"></i>
        </button>
    </div>

    <div id=\"scrollbar\">
        <div class=\"container-fluid\">
            <div id=\"two-column-menu\"></div>
            <ul class=\"navbar-nav\" id=\"navbar-nav\">
                ";
        // line 34
        yield "                <li class=\"menu-title\">
                    <span>Tableau de bord</span>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">
                        <i class=\"fas fa-home\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                ";
        // line 45
        yield "                ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_admin.html.twig");
            yield "
                ";
        }
        // line 48
        yield "
                ";
        // line 49
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_manager.html.twig");
            yield "
                ";
        }
        // line 52
        yield "
                ";
        // line 53
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_stock_manager.html.twig");
            yield "
                ";
        }
        // line 56
        yield "
                ";
        // line 57
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu/_menu_cashier.html.twig");
            yield "
                ";
        }
        // line 60
        yield "
                ";
        // line 62
        yield "                ";
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER"))) {
            // line 63
            yield "                    <li class=\"menu-title\">
                        <span>Rapports</span>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\">
                            <i class=\"fas fa-chart-bar\"></i>
                            <span>Analytiques</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            ";
            // line 72
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-coins me-1\"></i> Rapport financier
                                </a>
                            </li>
                            ";
            }
            // line 79
            yield "                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-shopping-cart me-1\"></i> Rapport des ventes
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-box me-1\"></i> Rapport de stock
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-calculator me-1\"></i> Rapport de caisse
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 97
        yield "
                ";
        // line 99
        yield "                <li class=\"menu-title\">
                    <span>Mon Compte</span>
                </li>
                <li class=\"nav-item\">
                    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\">
                        <i class=\"fas fa-user-circle\"></i>
                        <span>Mon Profil</span>
                    </a>
                    <ul class=\"sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"fas fa-user-edit me-1\"></i> Modifier mon profil
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"nav-link\">
                                <i class=\"fas fa-key me-1\"></i> Changer mot de passe
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->

<!-- Vertical Overlay-->
<div class=\"vertical-overlay\"></div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar.html.twig";
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
        return array (  220 => 119,  212 => 114,  195 => 99,  192 => 97,  172 => 79,  164 => 73,  162 => 72,  151 => 63,  148 => 62,  145 => 60,  139 => 58,  137 => 57,  134 => 56,  128 => 54,  126 => 53,  123 => 52,  117 => 50,  115 => 49,  112 => 48,  106 => 46,  103 => 45,  94 => 38,  88 => 34,  67 => 15,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- ========== App Menu ========== -->
<div class=\"app-menu navbar-menu\">
    <!-- LOGO -->
    <div class=\"navbar-brand-box\">
        <!-- Dark Logo-->
        <a href=\"{{ path('app_home') }}\" class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                <i class=\"fas fa-store\"></i>
            </span>
            <span class=\"logo-lg\">
                HMA MARKET
            </span>
        </a>
        <!-- Light Logo-->
        <a href=\"{{ path('app_home') }}\" class=\"logo logo-light\">
            <span class=\"logo-sm\">
                <i class=\"fas fa-store\"></i>
            </span>
            <span class=\"logo-lg\">
                HMA MARKET
            </span>
        </a>
        <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\"
                id=\"vertical-hover\">
            <i class=\"fas fa-bars\"></i>
        </button>
    </div>

    <div id=\"scrollbar\">
        <div class=\"container-fluid\">
            <div id=\"two-column-menu\"></div>
            <ul class=\"navbar-nav\" id=\"navbar-nav\">
                {# Dashboard commun #}
                <li class=\"menu-title\">
                    <span>Tableau de bord</span>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_home') }}\" class=\"nav-link\">
                        <i class=\"fas fa-home\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {# Menu selon le rôle #}
                {% if is_granted('ROLE_ADMIN') %}
                    {{ include('partials/menu/_menu_admin.html.twig') }}
                {% endif %}

                {% if is_granted('ROLE_MANAGER') %}
                    {{ include('partials/menu/_menu_manager.html.twig') }}
                {% endif %}

                {% if is_granted('ROLE_STOCK_MANAGER') %}
                    {{ include('partials/menu/_menu_stock_manager.html.twig') }}
                {% endif %}

                {% if is_granted('ROLE_CASHIER') %}
                    {{ include('partials/menu/_menu_cashier.html.twig') }}
                {% endif %}

                {# Rapports (pour plusieurs rôles) #}
                {% if is_granted('ROLE_MANAGER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STOCK_MANAGER') %}
                    <li class=\"menu-title\">
                        <span>Rapports</span>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\">
                            <i class=\"fas fa-chart-bar\"></i>
                            <span>Analytiques</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-coins me-1\"></i> Rapport financier
                                </a>
                            </li>
                            {% endif %}
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-shopping-cart me-1\"></i> Rapport des ventes
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-box me-1\"></i> Rapport de stock
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"fas fa-calculator me-1\"></i> Rapport de caisse
                                </a>
                            </li>
                        </ul>
                    </li>
                {% endif %}

                {# Menu Profil (commun à tous) #}
                <li class=\"menu-title\">
                    <span>Mon Compte</span>
                </li>
                <li class=\"nav-item\">
                    <a href=\"javascript: void(0);\" class=\"nav-link has-arrow\">
                        <i class=\"fas fa-user-circle\"></i>
                        <span>Mon Profil</span>
                    </a>
                    <ul class=\"sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"fas fa-user-edit me-1\"></i> Modifier mon profil
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_forgot_password_request') }}\" class=\"nav-link\">
                                <i class=\"fas fa-key me-1\"></i> Changer mot de passe
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
                                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->

<!-- Vertical Overlay-->
<div class=\"vertical-overlay\"></div>", "partials/sidebar.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\sidebar.html.twig");
    }
}
