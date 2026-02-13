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

/* partials/header.html.twig */
class __TwigTemplate_bb2a90e61cdc0c73195a21c242162ded extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        yield "<!-- ========== Header Start ========== -->
<header id=\"page-topbar\">
    <div class=\"navbar-header\">
        <div class=\"d-flex\">
            <!-- LOGO -->
            <div class=\"navbar-brand-box\">
                <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"logo logo-dark\">
                    <span class=\"logo-sm\">
                        <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
                    </span>
                    <span class=\"logo-lg\">
                        <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        yield "\" alt=\"\" height=\"20\">
                    </span>
                </a>

                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"logo logo-light\">
                    <span class=\"logo-sm\">
                        <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
                    </span>
                    <span class=\"logo-lg\">
                        <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        yield "\" alt=\"\" height=\"20\">
                    </span>
                </a>
            </div>

            <button type=\"button\" class=\"btn btn-sm px-3 font-size-16 header-item waves-effect\"
                id=\"vertical-menu-btn\">
                <i class=\"fa fa-fw fa-bars\"></i>
            </button>

            <!-- App Search-->
            <form class=\"app-search d-none d-lg-block\">
                <div class=\"position-relative\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                    <span class=\"bx bx-search-alt\"></span>
                </div>
            </form>
        </div>

        <div class=\"d-flex\">

            <div class=\"dropdown d-inline-block d-lg-none ms-2\">
                <button type=\"button\" class=\"btn header-item noti-icon waves-effect\"
                    id=\"page-header-search-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                    <i class=\"mdi mdi-magnify\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\"
                    aria-labelledby=\"page-header-search-dropdown\">

                    <form class=\"p-3\">
                        <div class=\"form-group m-0\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search ...\"
                                    aria-label=\"Recipient's username\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"submit\"><i
                                            class=\"mdi mdi-magnify\"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"dropdown d-none d-lg-inline-block ms-1\">
                <button type=\"button\" class=\"btn header-item noti-icon waves-effect\"
                    data-toggle=\"fullscreen\">
                    <i class=\"bx bx-fullscreen\"></i>
                </button>
            </div>

            <div class=\"dropdown d-inline-block\">
                <button type=\"button\" class=\"btn header-item waves-effect\" id=\"page-header-user-dropdown\"
                    data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "photo", [], "any", false, false, false, 76))) {
            // line 77
            yield "                        <img class=\"rounded-circle header-profile-user\" 
                            src=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "photo", [], "any", false, false, false, 78))), "html", null, true);
            yield "\" 
                            alt=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "fullName", [], "any", false, false, false, 79), "html", null, true);
            yield "\">
                    ";
        } else {
            // line 81
            yield "                        <img class=\"rounded-circle header-profile-user\" 
                            src=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/user-dummy-img.jpg"), "html", null, true);
            yield "\" 
                            alt=\"Avatar par défaut\">
                    ";
        }
        // line 85
        yield "                    <span class=\"d-none d-xl-inline-block ms-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "fullName", [], "any", false, false, false, 85), "html", null, true);
        yield "</span>
                    <i class=\"mdi mdi-chevron-down d-none d-xl-inline-block\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                    <!-- item-->
                    <a class=\"dropdown-item\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                        <i class=\"bx bx-user font-size-16 align-middle me-1\"></i> Profil
                    </a>
                    <a class=\"dropdown-item\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\">
                        <i class=\"bx bx-cog font-size-16 align-middle me-1\"></i> Paramètres
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item text-danger\" href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <i class=\"bx bx-power-off font-size-16 align-middle me-1 text-danger\"></i> Déconnexion
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- ========== Header End ========== -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
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
        return array (  188 => 97,  181 => 93,  175 => 90,  166 => 85,  160 => 82,  157 => 81,  152 => 79,  148 => 78,  145 => 77,  143 => 76,  85 => 21,  79 => 18,  74 => 16,  67 => 12,  61 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- ========== Header Start ========== -->
<header id=\"page-topbar\">
    <div class=\"navbar-header\">
        <div class=\"d-flex\">
            <!-- LOGO -->
            <div class=\"navbar-brand-box\">
                <a href=\"{{ path('app_dashboard') }}\" class=\"logo logo-dark\">
                    <span class=\"logo-sm\">
                        <img src=\"{{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
                    </span>
                    <span class=\"logo-lg\">
                        <img src=\"{{ asset('assets/images/logo-dark.png') }}\" alt=\"\" height=\"20\">
                    </span>
                </a>

                <a href=\"{{ path('app_dashboard') }}\" class=\"logo logo-light\">
                    <span class=\"logo-sm\">
                        <img src=\"{{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
                    </span>
                    <span class=\"logo-lg\">
                        <img src=\"{{ asset('assets/images/logo-light.png') }}\" alt=\"\" height=\"20\">
                    </span>
                </a>
            </div>

            <button type=\"button\" class=\"btn btn-sm px-3 font-size-16 header-item waves-effect\"
                id=\"vertical-menu-btn\">
                <i class=\"fa fa-fw fa-bars\"></i>
            </button>

            <!-- App Search-->
            <form class=\"app-search d-none d-lg-block\">
                <div class=\"position-relative\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                    <span class=\"bx bx-search-alt\"></span>
                </div>
            </form>
        </div>

        <div class=\"d-flex\">

            <div class=\"dropdown d-inline-block d-lg-none ms-2\">
                <button type=\"button\" class=\"btn header-item noti-icon waves-effect\"
                    id=\"page-header-search-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                    <i class=\"mdi mdi-magnify\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\"
                    aria-labelledby=\"page-header-search-dropdown\">

                    <form class=\"p-3\">
                        <div class=\"form-group m-0\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search ...\"
                                    aria-label=\"Recipient's username\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"submit\"><i
                                            class=\"mdi mdi-magnify\"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"dropdown d-none d-lg-inline-block ms-1\">
                <button type=\"button\" class=\"btn header-item noti-icon waves-effect\"
                    data-toggle=\"fullscreen\">
                    <i class=\"bx bx-fullscreen\"></i>
                </button>
            </div>

            <div class=\"dropdown d-inline-block\">
                <button type=\"button\" class=\"btn header-item waves-effect\" id=\"page-header-user-dropdown\"
                    data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {% if app.user and app.user.photo %}
                        <img class=\"rounded-circle header-profile-user\" 
                            src=\"{{ asset('uploads/users/' ~ app.user.photo) }}\" 
                            alt=\"{{ app.user.fullName }}\">
                    {% else %}
                        <img class=\"rounded-circle header-profile-user\" 
                            src=\"{{ asset('assets/images/users/user-dummy-img.jpg') }}\" 
                            alt=\"Avatar par défaut\">
                    {% endif %}
                    <span class=\"d-none d-xl-inline-block ms-1\">{{ app.user.fullName }}</span>
                    <i class=\"mdi mdi-chevron-down d-none d-xl-inline-block\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                    <!-- item-->
                    <a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">
                        <i class=\"bx bx-user font-size-16 align-middle me-1\"></i> Profil
                    </a>
                    <a class=\"dropdown-item\" href=\"{{ path('app_settings') }}\">
                        <i class=\"bx bx-cog font-size-16 align-middle me-1\"></i> Paramètres
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
                        <i class=\"bx bx-power-off font-size-16 align-middle me-1 text-danger\"></i> Déconnexion
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- ========== Header End ========== -->", "partials/header.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\header.html.twig");
    }
}
