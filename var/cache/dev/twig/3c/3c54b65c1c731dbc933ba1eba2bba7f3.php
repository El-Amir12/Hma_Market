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

/* dashboard/index.html.twig */
class __TwigTemplate_abcd0413a9c941070f37caff4ddd8a42 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
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

        yield "Tableau de bord - HMA Market";
        
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
        yield "<!-- Begin page -->
<div id=\"layout-wrapper\">
    
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"main-content\">

        <div class=\"page-content\">
            <div class=\"container-fluid\">

                <!-- Start Content -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"page-title-box d-sm-flex align-items-center justify-content-between\">
                            <h4 class=\"mb-sm-0\">Tableau de Bord</h4>
                            <div class=\"page-title-right\">
                                <ol class=\"breadcrumb m-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">HMA Market</a></li>
                                    <li class=\"breadcrumb-item active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <!-- Welcome Card -->
                    <div class=\"col-xl-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-6\">
                                        <div class=\"mb-4\">
                                            <h5 class=\"card-title mb-0\">Bienvenue, ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "fullName", [], "any", false, false, false, 41), "html", null, true);
        yield " ! 👋</h5>
                                            <p class=\"text-muted\">
                                                ";
        // line 43
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "roles", [], "any", false, false, false, 43))) {
            // line 44
            yield "                                                    Administrateur
                                                ";
        } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "roles", [], "any", false, false, false, 45))) {
            // line 46
            yield "                                                    Gestionnaire
                                                ";
        } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47))) {
            // line 48
            yield "                                                    Responsable Stock
                                                ";
        } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "roles", [], "any", false, false, false, 49))) {
            // line 50
            yield "                                                    Caissier
                                                ";
        }
        // line 52
        yield "                                            </p>
                                        </div>
                                        
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div>
                                                    <p class=\"text-muted mb-2\">Date</p>
                                                    <h5>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</h5>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div>
                                                    <p class=\"text-muted mb-2\">Heure</p>
                                                    <h5>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i"), "html", null, true);
        yield "</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"mt-4 mt-md-0 text-center\">
                                            <i class=\"bx bx-store display-4 text-primary\"></i>
                                            <h4 class=\"mt-2\">HMA MARKET</h4>
                                            <p class=\"text-muted\">Système de Gestion Complet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards (Style similaire à votre premier exemple) -->
                <div class=\"row\">
                    <!-- Card 1: Produits totaux -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-primary\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Produits Totaux</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 96, $this->source); })()), "totalProducts", [], "any", false, false, false, 96), "html", null, true);
        yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 103, $this->source); })()), "totalProducts", [], "any", false, false, false, 103), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 103, $this->source); })()), "totalProducts", [], "any", false, false, false, 103), "html", null, true);
        yield "</span> Produits
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir le catalogue</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-package text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Card 2: Ventes Totales -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-success\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Ventes Totales</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 128, $this->source); })()), "totalSales", [], "any", false, false, false, 128), "html", null, true);
        yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 135, $this->source); })()), "totalSales", [], "any", false, false, false, 135), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 135, $this->source); })()), "totalSales", [], "any", false, false, false, 135), "html", null, true);
        yield "</span> Transactions
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir les ventes</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-cart text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Card 3: Chiffre d'Affaires -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-info\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Chiffre d'Affaires</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 160, $this->source); })()), "totalRevenue", [], "any", false, false, false, 160) / 1000000), 1), "html", null, true);
        yield "M
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 167, $this->source); })()), "totalRevenue", [], "any", false, false, false, 167), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 167, $this->source); })()), "totalRevenue", [], "any", false, false, false, 167), 0, ",", " "), "html", null, true);
        yield "</span> FCFA
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir rapports</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-dollar-circle text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Card 4: Clients -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-warning\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Clients</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 192, $this->source); })()), "totalCustomers", [], "any", false, false, false, 192), "html", null, true);
        yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 199, $this->source); })()), "totalCustomers", [], "any", false, false, false, 199), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 199, $this->source); })()), "totalCustomers", [], "any", false, false, false, 199), "html", null, true);
        yield "</span> Clients
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir clients</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-user-circle text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- Deuxième ligne de cartes selon le rôle -->
                <div class=\"row\">
                    ";
        // line 218
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 219
            yield "                    <!-- Card 5: Ventes du jour -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-primary\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Ventes Aujourd'hui</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> ";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboardData"]) || array_key_exists("dashboardData", $context) ? $context["dashboardData"] : (function () { throw new RuntimeError('Variable "dashboardData" does not exist.', 229, $this->source); })()), "todaySales", [], "any", false, false, false, 229), "count", [], "any", false, false, false, 229), "html", null, true);
            yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboardData"]) || array_key_exists("dashboardData", $context) ? $context["dashboardData"] : (function () { throw new RuntimeError('Variable "dashboardData" does not exist.', 236, $this->source); })()), "todaySales", [], "any", false, false, false, 236), "count", [], "any", false, false, false, 236), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboardData"]) || array_key_exists("dashboardData", $context) ? $context["dashboardData"] : (function () { throw new RuntimeError('Variable "dashboardData" does not exist.', 236, $this->source); })()), "todaySales", [], "any", false, false, false, 236), "count", [], "any", false, false, false, 236), "html", null, true);
            yield "</span> Ventes
                                        </h4>
                                        <span class=\"text-white-50\">";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboardData"]) || array_key_exists("dashboardData", $context) ? $context["dashboardData"] : (function () { throw new RuntimeError('Variable "dashboardData" does not exist.', 238, $this->source); })()), "todaySales", [], "any", false, false, false, 238), "amount", [], "any", false, false, false, 238), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-money text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    ";
        }
        // line 251
        yield "
                    ";
        // line 252
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 253
            yield "                    <!-- Card 6: Alertes Stock -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-danger\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Stock Faible</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> ";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 263, $this->source); })()), "lowStockProducts", [], "any", false, false, false, 263), "html", null, true);
            yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 270, $this->source); })()), "lowStockProducts", [], "any", false, false, false, 270), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 270, $this->source); })()), "lowStockProducts", [], "any", false, false, false, 270), "html", null, true);
            yield "</span> Produits
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Réapprovisionner</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-alarm text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    ";
        }
        // line 285
        yield "
                    ";
        // line 286
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 287
            yield "                    <!-- Card 7: Utilisateurs -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-secondary\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Utilisateurs</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> ";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 297, $this->source); })()), "totalUsers", [], "any", false, false, false, 297), "html", null, true);
            yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 304, $this->source); })()), "totalUsers", [], "any", false, false, false, 304), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 304, $this->source); })()), "totalUsers", [], "any", false, false, false, 304), "html", null, true);
            yield "</span> Utilisateurs
                                        </h4>
                                        <a href=\"";
            // line 306
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\" class=\"text-decoration-underline text-white-50\">Gérer</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-user-plus text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    ";
        }
        // line 319
        yield "
                    <!-- Card 8: Commandes en attente -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-info\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">En Attente</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-down-line fs-13 align-middle\"></i> ";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 330, $this->source); })()), "pendingOrders", [], "any", false, false, false, 330), "html", null, true);
        yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 337, $this->source); })()), "pendingOrders", [], "any", false, false, false, 337), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 337, $this->source); })()), "pendingOrders", [], "any", false, false, false, 337), "html", null, true);
        yield "</span> Commandes
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Traiter</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-time-five text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- Quick Actions Section -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title mb-4\">Actions Rapides</h4>
                                
                                <div class=\"row\">
                                    ";
        // line 362
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CASHIER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 363
            yield "                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-primary btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-cart-add me-2\"></i> Nouvelle Vente
                                        </a>
                                    </div>
                                    ";
        }
        // line 369
        yield "                                    
                                    ";
        // line 370
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 371
            yield "                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-success btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-plus-circle me-2\"></i> Ajouter Produit
                                        </a>
                                    </div>
                                    ";
        }
        // line 377
        yield "                                    
                                    ";
        // line 378
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 379
            yield "                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-warning btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-package me-2\"></i> Inventaire
                                        </a>
                                    </div>
                                    ";
        }
        // line 385
        yield "                                    
                                    ";
        // line 386
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 387
            yield "                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"";
            // line 388
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-info btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-user-plus me-2\"></i> Nouvel Utilisateur
                                        </a>
                                    </div>
                                    ";
        }
        // line 393
        yield "                                    
                                    ";
        // line 394
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 395
            yield "                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-danger btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-chart me-2\"></i> Rapports
                                        </a>
                                    </div>
                                    ";
        }
        // line 401
        yield "                                    
                                    ";
        // line 402
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 403
            yield "                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-secondary btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-cog me-2\"></i> Paramètres
                                        </a>
                                    </div>
                                    ";
        }
        // line 409
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 428
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 429
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<!-- Counter Animation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation des compteurs
        const counters = document.querySelectorAll('.counter-value');
        const speed = 200;

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace(/\\s/g, '');
            const increment = target / speed;

            const updateCount = () => {
                if (count < target) {
                    const newValue = Math.ceil(count + increment);
                    counter.innerText = newValue.toLocaleString();
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            updateCount();
        });

        // Animation des cartes au scroll
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, observerOptions);

        // Observer les cartes
        document.querySelectorAll('.card-animate').forEach(card => {
            observer.observe(card);
        });
    });
</script>

<!-- Add CSS animations -->
<style>
    .card-animate {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card-animate:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    /* Animation pour les compteurs */
    @keyframes countUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .counter-value {
        animation: countUp 0.5s ease-out;
    }
</style>
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
        return "dashboard/index.html.twig";
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
        return array (  688 => 429,  675 => 428,  647 => 409,  639 => 403,  637 => 402,  634 => 401,  626 => 395,  624 => 394,  621 => 393,  613 => 388,  610 => 387,  608 => 386,  605 => 385,  597 => 379,  595 => 378,  592 => 377,  584 => 371,  582 => 370,  579 => 369,  571 => 363,  569 => 362,  539 => 337,  529 => 330,  516 => 319,  500 => 306,  493 => 304,  483 => 297,  471 => 287,  469 => 286,  466 => 285,  446 => 270,  436 => 263,  424 => 253,  422 => 252,  419 => 251,  403 => 238,  396 => 236,  386 => 229,  374 => 219,  372 => 218,  348 => 199,  338 => 192,  308 => 167,  298 => 160,  268 => 135,  258 => 128,  228 => 103,  218 => 96,  184 => 65,  175 => 59,  166 => 52,  162 => 50,  160 => 49,  157 => 48,  155 => 47,  152 => 46,  150 => 45,  147 => 44,  145 => 43,  140 => 41,  121 => 25,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de bord - HMA Market{% endblock %}

{% block body %}
<!-- Begin page -->
<div id=\"layout-wrapper\">
    
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"main-content\">

        <div class=\"page-content\">
            <div class=\"container-fluid\">

                <!-- Start Content -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"page-title-box d-sm-flex align-items-center justify-content-between\">
                            <h4 class=\"mb-sm-0\">Tableau de Bord</h4>
                            <div class=\"page-title-right\">
                                <ol class=\"breadcrumb m-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">HMA Market</a></li>
                                    <li class=\"breadcrumb-item active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <!-- Welcome Card -->
                    <div class=\"col-xl-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-6\">
                                        <div class=\"mb-4\">
                                            <h5 class=\"card-title mb-0\">Bienvenue, {{ app.user.fullName }} ! 👋</h5>
                                            <p class=\"text-muted\">
                                                {% if 'ROLE_ADMIN' in app.user.roles %}
                                                    Administrateur
                                                {% elseif 'ROLE_MANAGER' in app.user.roles %}
                                                    Gestionnaire
                                                {% elseif 'ROLE_STOCK_MANAGER' in app.user.roles %}
                                                    Responsable Stock
                                                {% elseif 'ROLE_CASHIER' in app.user.roles %}
                                                    Caissier
                                                {% endif %}
                                            </p>
                                        </div>
                                        
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div>
                                                    <p class=\"text-muted mb-2\">Date</p>
                                                    <h5>{{ \"now\"|date('d/m/Y') }}</h5>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div>
                                                    <p class=\"text-muted mb-2\">Heure</p>
                                                    <h5>{{ \"now\"|date('H:i') }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"mt-4 mt-md-0 text-center\">
                                            <i class=\"bx bx-store display-4 text-primary\"></i>
                                            <h4 class=\"mt-2\">HMA MARKET</h4>
                                            <p class=\"text-muted\">Système de Gestion Complet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards (Style similaire à votre premier exemple) -->
                <div class=\"row\">
                    <!-- Card 1: Produits totaux -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-primary\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Produits Totaux</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> {{ stats.totalProducts }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ stats.totalProducts }}\">{{ stats.totalProducts }}</span> Produits
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir le catalogue</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-package text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Card 2: Ventes Totales -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-success\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Ventes Totales</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> {{ stats.totalSales }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ stats.totalSales }}\">{{ stats.totalSales }}</span> Transactions
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir les ventes</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-cart text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Card 3: Chiffre d'Affaires -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-info\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Chiffre d'Affaires</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> {{ (stats.totalRevenue / 1000000)|number_format(1) }}M
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ stats.totalRevenue }}\">{{ stats.totalRevenue|number_format(0, ',', ' ') }}</span> FCFA
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir rapports</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-dollar-circle text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Card 4: Clients -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-warning\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Clients</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> {{ stats.totalCustomers }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ stats.totalCustomers }}\">{{ stats.totalCustomers }}</span> Clients
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Voir clients</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-user-circle text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- Deuxième ligne de cartes selon le rôle -->
                <div class=\"row\">
                    {% if is_granted('ROLE_CASHIER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                    <!-- Card 5: Ventes du jour -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-primary\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Ventes Aujourd'hui</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> {{ dashboardData.todaySales.count }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ dashboardData.todaySales.count }}\">{{ dashboardData.todaySales.count }}</span> Ventes
                                        </h4>
                                        <span class=\"text-white-50\">{{ dashboardData.todaySales.amount|number_format(0, ',', ' ') }} FCFA</span>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-money text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    {% endif %}

                    {% if is_granted('ROLE_STOCK_MANAGER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                    <!-- Card 6: Alertes Stock -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-danger\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Stock Faible</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> {{ stats.lowStockProducts }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ stats.lowStockProducts }}\">{{ stats.lowStockProducts }}</span> Produits
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Réapprovisionner</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-alarm text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    {% endif %}

                    {% if is_granted('ROLE_ADMIN') %}
                    <!-- Card 7: Utilisateurs -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-secondary\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">Utilisateurs</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-up-line fs-13 align-middle\"></i> {{ stats.totalUsers }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ stats.totalUsers }}\">{{ stats.totalUsers }}</span> Utilisateurs
                                        </h4>
                                        <a href=\"{{ path('app_user_index') }}\" class=\"text-decoration-underline text-white-50\">Gérer</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-user-plus text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    {% endif %}

                    <!-- Card 8: Commandes en attente -->
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card card-animate bg-info\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-grow-1 overflow-hidden\">
                                        <p class=\"text-uppercase fw-bold text-white-50 text-truncate mb-0\">En Attente</p>
                                    </div>
                                    <div class=\"flex-shrink-0\">
                                        <h5 class=\"text-white fs-14 mb-0\">
                                            <i class=\"ri-arrow-right-down-line fs-13 align-middle\"></i> {{ stats.pendingOrders }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-end justify-content-between mt-4\">
                                    <div>
                                        <h4 class=\"fs-22 fw-bold ff-secondary text-white mb-4\">
                                            <span class=\"counter-value\" data-target=\"{{ stats.pendingOrders }}\">{{ stats.pendingOrders }}</span> Commandes
                                        </h4>
                                        <a href=\"#\" class=\"text-decoration-underline text-white-50\">Traiter</a>
                                    </div>
                                    <div class=\"avatar-sm flex-shrink-0\">
                                        <span class=\"avatar-title bg-soft-light rounded fs-3\">
                                            <i class=\"bx bx-time-five text-white\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- Quick Actions Section -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title mb-4\">Actions Rapides</h4>
                                
                                <div class=\"row\">
                                    {% if is_granted('ROLE_CASHIER') %}
                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-primary btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-cart-add me-2\"></i> Nouvelle Vente
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_MANAGER') or is_granted('ROLE_ADMIN') %}
                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-success btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-plus-circle me-2\"></i> Ajouter Produit
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_STOCK_MANAGER') %}
                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-warning btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-package me-2\"></i> Inventaire
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-info btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-user-plus me-2\"></i> Nouvel Utilisateur
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_STOCK_MANAGER') or is_granted('ROLE_MANAGER') %}
                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-danger btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-chart me-2\"></i> Rapports
                                        </a>
                                    </div>
                                    {% endif %}
                                    
                                    {% if is_granted('ROLE_MANAGER') or is_granted('ROLE_ADMIN') %}
                                    <div class=\"col-xl-3 col-md-4 col-sm-6\">
                                        <a href=\"#\" class=\"btn btn-secondary btn-lg w-100 mb-3\">
                                            <i class=\"bx bx-cog me-2\"></i> Paramètres
                                        </a>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
{% endblock %}

{% block javascripts %}
{{ parent() }}
<!-- Counter Animation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation des compteurs
        const counters = document.querySelectorAll('.counter-value');
        const speed = 200;

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace(/\\s/g, '');
            const increment = target / speed;

            const updateCount = () => {
                if (count < target) {
                    const newValue = Math.ceil(count + increment);
                    counter.innerText = newValue.toLocaleString();
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            updateCount();
        });

        // Animation des cartes au scroll
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, observerOptions);

        // Observer les cartes
        document.querySelectorAll('.card-animate').forEach(card => {
            observer.observe(card);
        });
    });
</script>

<!-- Add CSS animations -->
<style>
    .card-animate {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card-animate:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    /* Animation pour les compteurs */
    @keyframes countUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .counter-value {
        animation: countUp 0.5s ease-out;
    }
</style>
{% endblock %}", "dashboard/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\dashboard\\index.html.twig");
    }
}
