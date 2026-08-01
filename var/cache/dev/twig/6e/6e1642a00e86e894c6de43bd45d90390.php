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

/* admin/promotion/show.html.twig */
class __TwigTemplate_7338fe80616ba3f24abb494b9531c373 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Promotion : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePromotionModal\">
                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer
            </button>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne image -->
        <div class=\"col-lg-5 col-xl-4\">
            <div class=\"card shadow-sm border-0 rounded-4 overflow-hidden\">
                <div class=\"position-relative\">
                    ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32))), "html", null, true);
            yield "\" 
                             class=\"card-img-top\" 
                             alt=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
            yield "\" 
                             style=\"object-fit: cover; height: 350px; width: 100%;\">
                    ";
        } else {
            // line 37
            yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 350px;\">
                            <i class=\"fas fa-tag fa-8x text-muted opacity-25\"></i>
                        </div>
                    ";
        }
        // line 41
        yield "                    <div class=\"position-absolute top-0 end-0 p-3\">
                        <span class=\"badge ";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 42, $this->source); })()), "isActive", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " fs-6 px-3 py-2 shadow\">
                            <i class=\"fas ";
        // line 43
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 43, $this->source); })()), "isActive", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                            ";
        // line 44
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 44, $this->source); })()), "isActive", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                        <div>
                            <i class=\"far fa-calendar-alt me-1 text-muted\"></i>
                            <small class=\"text-muted\">Créée le ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 52, $this->source); })()), "createdAt", [], "any", false, false, false, 52), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                        </div>
                        ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 54, $this->source); })()), "updatedAt", [], "any", false, false, false, 54) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 54, $this->source); })()), "updatedAt", [], "any", false, false, false, 54) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 54, $this->source); })()), "createdAt", [], "any", false, false, false, 54)))) {
            // line 55
            yield "                        <div>
                            <i class=\"far fa-edit me-1 text-muted\"></i>
                            <small class=\"text-muted\">Modifiée le ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 57, $this->source); })()), "updatedAt", [], "any", false, false, false, 57), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                        </div>
                        ";
        }
        // line 60
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne informations -->
        <div class=\"col-lg-7 col-xl-8\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-body p-4 p-xl-5\">
                    <h3 class=\"card-title mb-4\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Détails de la promotion
                    </h3>
                    
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-layer-group text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Type de réduction</small>
                                </div>
                                <p class=\"fw-bold fs-4 mb-0\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 80, $this->source); })()), "typePromotion", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-percent text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Valeur de la réduction</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-primary mb-0\">
                                    ";
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 90, $this->source); })()), "typePromotion", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90) == "Pourcentage")) {
            // line 91
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 91, $this->source); })()), "value", [], "any", false, false, false, 91), "html", null, true);
            yield "%
                                    ";
        } else {
            // line 93
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 93, $this->source); })()), "value", [], "any", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "hmaService", [], "any", false, false, false, 93)), "html", null, true);
            yield "
                                    ";
        }
        // line 95
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-align-left text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Description</small>
                                </div>
                                <p class=\"mb-0\">
                                    ";
        // line 105
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-check text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de début</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 116, $this->source); })()), "startDate", [], "any", false, false, false, 116), "d/m/Y"), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-times text-danger me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de fin</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 127
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 127, $this->source); })()), "endDate", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 128, $this->source); })()), "endDate", [], "any", false, false, false, 128), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 130
            yield "                                        <span class=\"badge bg-info\">Sans limite</span>
                                    ";
        }
        // line 132
        yield "                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Informations de l'utilisateur créateur -->
                    <div class=\"mt-4 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 141
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "photo", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "photo", [], "any", false, false, false, 142))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "fullName", [], "any", false, false, false, 142), "html", null, true);
            yield "\" class=\"rounded-circle\" width=\"60\" height=\"60\" style=\"object-fit: cover;\">
                                ";
        } else {
            // line 144
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-user fa-2x text-white\"></i>
                                    </div>
                                ";
        }
        // line 148
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée par</small>
                                <p class=\"fw-bold mb-0\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "fullName", [], "any", false, false, false, 151), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-envelope me-1\"></i> ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "email", [], "any", false, false, false, 153), "html", null, true);
        yield "
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- TABLEAUX DES ASSOCIATIONS -->
    <!-- ========================================== -->
    
    ";
        // line 167
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 167, $this->source); })()) == "restaurant")) {
            // line 168
            yield "        <!-- SECTION CATÉGORIES DE PLATS -->
        ";
            // line 169
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 169, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 169)) > 0)) {
                // line 170
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-utensils me-2\"></i>Catégories de plats concernées
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 174, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 174)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\" style=\"width: 150px\">Hiérarchie</th>
                                <th class=\"text-white\" style=\"width: 120px\" class=\"text-center\">Nombre de plats</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 190, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 190));
                foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                    // line 191
                    yield "                                ";
                    $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 191);
                    // line 192
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 194
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 194, $this->source); })()), "image", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 195
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 195, $this->source); })()), "image", [], "any", false, false, false, 195))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 195, $this->source); })()), "name", [], "any", false, false, false, 195), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 197
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensils fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 201
                    yield "                                    </td>
                                    <td>
                                        <strong>";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 203, $this->source); })()), "name", [], "any", false, false, false, 203), "html", null, true);
                    yield "</strong>
                                        ";
                    // line 204
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 204, $this->source); })()), "parent", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 205
                        yield "                                            <small class=\"text-muted d-block\">(Sous-catégorie de ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 205, $this->source); })()), "parent", [], "any", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
                        yield ")</small>
                                        ";
                    }
                    // line 207
                    yield "                                    </td>
                                    <td class=\"text-muted\">";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 208)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 208, $this->source); })()), "description", [], "any", false, false, false, 208), "-")) : ("-")), 0, 80), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 208, $this->source); })()), "description", [], "any", false, false, false, 208)) > 80)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>
                                        ";
                    // line 210
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 210, $this->source); })()), "parent", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 211
                        yield "                                            <span class=\"badge bg-info\">Niveau ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 211, $this->source); })()), "hierarchyLevel", [], "any", false, false, false, 211), "html", null, true);
                        yield "</span>
                                        ";
                    } else {
                        // line 213
                        yield "                                            <span class=\"badge bg-secondary\">Catégorie principale</span>
                                        ";
                    }
                    // line 215
                    yield "                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">";
                    // line 217
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 217, $this->source); })()), "recipes", [], "any", false, false, false, 217)), "html", null, true);
                    yield "</span>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 227
            yield "
        <!-- SECTION PLATS -->
        ";
            // line 229
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 229, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 229)) > 0)) {
                // line 230
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-hamburger me-2\"></i>Plats concernés
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 234, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 234)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\">Catégorie</th>
                                <th class=\"text-white text-end\">Prix de vente</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 250
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 250, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 250));
                foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                    // line 251
                    yield "                                ";
                    $context["recipe"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 251);
                    // line 252
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 254
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 254, $this->source); })()), "image", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 255
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 255, $this->source); })()), "image", [], "any", false, false, false, 255))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 255, $this->source); })()), "name", [], "any", false, false, false, 255), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 257
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensil-spoon fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 261
                    yield "                                    </td>
                                    <td><strong>";
                    // line 262
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 262, $this->source); })()), "name", [], "any", false, false, false, 262), "html", null, true);
                    yield "</strong></td>
                                    <td class=\"text-muted\">";
                    // line 263
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 263, $this->source); })()), "description", [], "any", false, false, false, 263), "-")) : ("-")), 0, 80), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 263, $this->source); })()), "description", [], "any", false, false, false, 263)) > 80)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>";
                    // line 264
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 264, $this->source); })()), "category", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 264, $this->source); })()), "category", [], "any", false, false, false, 264), "name", [], "any", false, false, false, 264), "html", null, true)) : ("-"));
                    yield "</td>
                                    <td class=\"text-end fw-bold text-primary\">";
                    // line 265
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 265, $this->source); })()), "sellingPrice", [], "any", false, false, false, 265), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "hmaService", [], "any", false, false, false, 265)), "html", null, true);
                    yield "</td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 268
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 274
            yield "
        <!-- Message si aucune sélection -->
        ";
            // line 276
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 276, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 276)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 276, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 276)) == 0))) {
                // line 277
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-light\">
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-globe fa-4x text-primary mb-3\"></i>
                <h5 class=\"mb-2\">Promotion globale</h5>
                <p class=\"text-muted mb-0\">Cette promotion s'applique à tous les plats du menu</p>
            </div>
        </div>
        ";
            }
            // line 285
            yield "
    ";
        } else {
            // line 287
            yield "        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
        ";
            // line 288
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 288, $this->source); })()), "promotionCategories", [], "any", false, false, false, 288)) > 0)) {
                // line 289
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-folder-tree me-2\"></i>Catégories concernées
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 293, $this->source); })()), "promotionCategories", [], "any", false, false, false, 293)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\" style=\"width: 150px\">Hiérarchie</th>
                                <th class=\"text-white\" style=\"width: 120px\" class=\"text-center\">Nombre de produits</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 309
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 309, $this->source); })()), "promotionCategories", [], "any", false, false, false, 309));
                foreach ($context['_seq'] as $context["_key"] => $context["promoCategory"]) {
                    // line 310
                    yield "                                ";
                    $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategory"], "category", [], "any", false, false, false, 310);
                    // line 311
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 313
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 313, $this->source); })()), "image", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 314
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 314, $this->source); })()), "image", [], "any", false, false, false, 314))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 314, $this->source); })()), "name", [], "any", false, false, false, 314), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 316
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-folder fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 320
                    yield "                                    </td>
                                    <td>
                                        <strong>";
                    // line 322
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 322, $this->source); })()), "name", [], "any", false, false, false, 322), "html", null, true);
                    yield "</strong>
                                        ";
                    // line 323
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 323, $this->source); })()), "parent", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 324
                        yield "                                            <small class=\"text-muted d-block\">(Sous-catégorie de ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 324, $this->source); })()), "parent", [], "any", false, false, false, 324), "name", [], "any", false, false, false, 324), "html", null, true);
                        yield ")</small>
                                        ";
                    }
                    // line 326
                    yield "                                    </td>
                                    <td class=\"text-muted\">";
                    // line 327
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 327)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 327, $this->source); })()), "description", [], "any", false, false, false, 327), "-")) : ("-")), 0, 80), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 327, $this->source); })()), "description", [], "any", false, false, false, 327)) > 80)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>
                                        ";
                    // line 329
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 329, $this->source); })()), "parent", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 330
                        yield "                                            <span class=\"badge bg-info\">Niveau ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 330, $this->source); })()), "hierarchyLevel", [], "any", false, false, false, 330), "html", null, true);
                        yield "</span>
                                        ";
                    } else {
                        // line 332
                        yield "                                            <span class=\"badge bg-secondary\">Catégorie principale</span>
                                        ";
                    }
                    // line 334
                    yield "                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 336, $this->source); })()), "products", [], "any", false, false, false, 336)), "html", null, true);
                    yield "</span>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoCategory'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 346
            yield "
        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
        ";
            // line 348
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 348, $this->source); })()), "promotionProducts", [], "any", false, false, false, 348)) > 0)) {
                // line 349
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-boxes me-2\"></i>Produits concernés
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 353, $this->source); })()), "promotionProducts", [], "any", false, false, false, 353)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Code-barres</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\">Catégorie</th>
                                <th class=\"text-white text-center\">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 370
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 370, $this->source); })()), "promotionProducts", [], "any", false, false, false, 370));
                foreach ($context['_seq'] as $context["_key"] => $context["promoProduct"]) {
                    // line 371
                    yield "                                ";
                    $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoProduct"], "product", [], "any", false, false, false, 371);
                    // line 372
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 374
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 374, $this->source); })()), "image", [], "any", false, false, false, 374) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 374, $this->source); })()), "image", [], "any", false, false, false, 374) != "default-product.png"))) {
                        // line 375
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 375, $this->source); })()), "image", [], "any", false, false, false, 375))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 375, $this->source); })()), "name", [], "any", false, false, false, 375), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 377
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-box fa-2x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 381
                    yield "                                    </td>
                                    <td><strong>";
                    // line 382
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 382, $this->source); })()), "name", [], "any", false, false, false, 382), "html", null, true);
                    yield "</strong></td>
                                    <td><code>";
                    // line 383
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 383, $this->source); })()), "barcode", [], "any", false, false, false, 383), "html", null, true);
                    yield "</code></td>
                                    <td class=\"text-muted\">";
                    // line 384
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", true, true, false, 384)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 384, $this->source); })()), "description", [], "any", false, false, false, 384), "-")) : ("-")), 0, 60), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 384, $this->source); })()), "description", [], "any", false, false, false, 384)) > 60)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td>";
                    // line 385
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 385, $this->source); })()), "category", [], "any", false, false, false, 385)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 385, $this->source); })()), "category", [], "any", false, false, false, 385), "name", [], "any", false, false, false, 385), "html", null, true)) : ("-"));
                    yield "</td>
                                    <td class=\"text-center\">
                                        ";
                    // line 387
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 387, $this->source); })()), "stockQuantity", [], "any", false, false, false, 387) <= 0)) {
                        // line 388
                        yield "                                            <span class=\"badge bg-danger\">Rupture</span>
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 389
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 389, $this->source); })()), "stockQuantity", [], "any", false, false, false, 389) <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 389, $this->source); })()), "minQuantity", [], "any", false, false, false, 389))) {
                        // line 390
                        yield "                                            <span class=\"badge bg-warning text-dark\">Stock faible (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 390, $this->source); })()), "stockQuantity", [], "any", false, false, false, 390), "html", null, true);
                        yield ")</span>
                                        ";
                    } else {
                        // line 392
                        yield "                                            <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 392, $this->source); })()), "stockQuantity", [], "any", false, false, false, 392), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 392)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 392, $this->source); })()), "unit", [], "any", false, false, false, 392), "unités")) : ("unités")), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 394
                    yield "                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoProduct'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 397
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 403
            yield "
        <!-- Message si aucune sélection -->
        ";
            // line 405
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 405, $this->source); })()), "promotionCategories", [], "any", false, false, false, 405)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 405, $this->source); })()), "promotionProducts", [], "any", false, false, false, 405)) == 0))) {
                // line 406
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-light\">
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-globe fa-4x text-primary mb-3\"></i>
                <h5 class=\"mb-2\">Promotion globale</h5>
                <p class=\"text-muted mb-0\">Cette promotion s'applique à tous les produits du catalogue</p>
            </div>
        </div>
        ";
            }
            // line 414
            yield "    ";
        }
        // line 415
        yield "
    <!-- Section récapitulative des cas -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-info bg-opacity-10\">
        <div class=\"card-body p-4\">
            <div class=\"d-flex flex-wrap align-items-center gap-3\">
                <div class=\"flex-shrink-0\">
                    <div class=\"rounded-circle bg-white p-3 d-flex align-items-center justify-content-center shadow-sm\" style=\"width: 60px; height: 60px;\">
                        <i class=\"fas fa-info-circle fa-2x text-info\"></i>
                    </div>
                </div>
                <div class=\"flex-grow-1\">
                    <h6 class=\"mb-2 fw-bold\">Comment s'applique cette promotion ?</h6>
                    <p class=\"mb-0\">
                        ";
        // line 428
        $context["hasCategories"] = ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 428, $this->source); })()) == "restaurant")) ? ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 428, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 428)) > 0)) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 428, $this->source); })()), "promotionCategories", [], "any", false, false, false, 428)) > 0)));
        // line 429
        yield "                        ";
        $context["hasItems"] = ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 429, $this->source); })()) == "restaurant")) ? ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 429, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 429)) > 0)) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 429, $this->source); })()), "promotionProducts", [], "any", false, false, false, 429)) > 0)));
        // line 430
        yield "                        
                        ";
        // line 431
        if (( !(isset($context["hasCategories"]) || array_key_exists("hasCategories", $context) ? $context["hasCategories"] : (function () { throw new RuntimeError('Variable "hasCategories" does not exist.', 431, $this->source); })()) &&  !(isset($context["hasItems"]) || array_key_exists("hasItems", $context) ? $context["hasItems"] : (function () { throw new RuntimeError('Variable "hasItems" does not exist.', 431, $this->source); })()))) {
            // line 432
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 1 :</strong> Promotion sur <strong class=\"text-primary\">TOUS les ";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 432, $this->source); })()) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield "</strong>
                        ";
        } elseif ((        // line 433
(isset($context["hasCategories"]) || array_key_exists("hasCategories", $context) ? $context["hasCategories"] : (function () { throw new RuntimeError('Variable "hasCategories" does not exist.', 433, $this->source); })()) &&  !(isset($context["hasItems"]) || array_key_exists("hasItems", $context) ? $context["hasItems"] : (function () { throw new RuntimeError('Variable "hasItems" does not exist.', 433, $this->source); })()))) {
            // line 434
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 2 :</strong> Promotion sur les <strong class=\"text-primary\">catégories sélectionnées</strong> uniquement
                        ";
        } elseif (( !        // line 435
(isset($context["hasCategories"]) || array_key_exists("hasCategories", $context) ? $context["hasCategories"] : (function () { throw new RuntimeError('Variable "hasCategories" does not exist.', 435, $this->source); })()) && (isset($context["hasItems"]) || array_key_exists("hasItems", $context) ? $context["hasItems"] : (function () { throw new RuntimeError('Variable "hasItems" does not exist.', 435, $this->source); })()))) {
            // line 436
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 3 :</strong> Promotion sur les <strong class=\"text-primary\">";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 436, $this->source); })()) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield " sélectionnés</strong> uniquement
                        ";
        } else {
            // line 438
            yield "                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 4 :</strong> Promotion sur <strong class=\"text-primary\">l'ensemble</strong> (catégories + ";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 438, $this->source); })()) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield " sélectionnés)
                        ";
        }
        // line 440
        yield "                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation pour la suppression de la promotion -->
    <div class=\"modal fade\" id=\"deletePromotionModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr de vouloir supprimer cette promotion ?</h5>
                    <p class=\"text-muted\">Cette action est irréversible.</p>
                    <div class=\"alert alert-warning mt-3\">
                        <strong>";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 461, $this->source); })()), "name", [], "any", false, false, false, 461), "html", null, true);
        yield "</strong><br>
                        Toutes les associations (catégories et ";
        // line 462
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 462, $this->source); })()) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield ") seront également supprimées.
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 467, $this->source); })()), "id", [], "any", false, false, false, 467)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 468, $this->source); })()), "id", [], "any", false, false, false, 468))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 477
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 628
        yield "
";
        // line 629
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 477
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 478
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Styles généraux */
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
    }
    
    /* Styles du tableau */
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
        color: #ffffff !important;
        border: none;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 14px 12px;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .table td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
        background-color: #ffffff;
        border-bottom: 1px solid #e9ecef;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Card header */
    .card-header {
        border-bottom: none;
    }
    
    /* Badges */
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    /* Modal */
    .modal-content {
        border-radius: 1rem;
        border: none;
    }
    
    .modal-header {
        border-bottom: none;
    }
    
    .modal-footer {
        border-top: none;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.75rem;
        }
        .table th {
            font-size: 0.7rem;
            letter-spacing: 0.5px;
        }
        .display-5 {
            font-size: 1.75rem;
        }
        .info-card .fs-2 {
            font-size: 1.5rem;
        }
        .info-card .fs-4 {
            font-size: 1.25rem;
        }
        .info-card .fs-5 {
            font-size: 0.9rem;
        }
        .btn-group {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .display-5 {
            font-size: 1.5rem;
        }
        .info-card .fs-1 {
            font-size: 1.75rem;
        }
        .d-flex.gap-2 {
            flex-wrap: wrap;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 629
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

        // line 630
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajout d'un effet de tooltip sur les badges si besoin
        const stockBadges = document.querySelectorAll('.badge.bg-warning, .badge.bg-danger');
        stockBadges.forEach(badge => {
            if (badge.textContent.includes('Stock faible')) {
                badge.setAttribute('title', 'Le stock est inférieur au seuil d\\'alerte');
            }
            if (badge.textContent.includes('Rupture')) {
                badge.setAttribute('title', 'Produit en rupture de stock');
            }
        });
    });
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
        return "admin/promotion/show.html.twig";
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
        return array (  1161 => 630,  1148 => 629,  987 => 478,  974 => 477,  963 => 629,  960 => 628,  958 => 477,  946 => 468,  942 => 467,  930 => 462,  926 => 461,  903 => 440,  893 => 438,  883 => 436,  881 => 435,  878 => 434,  876 => 433,  867 => 432,  865 => 431,  862 => 430,  859 => 429,  857 => 428,  842 => 415,  839 => 414,  829 => 406,  827 => 405,  823 => 403,  815 => 397,  807 => 394,  799 => 392,  793 => 390,  791 => 389,  788 => 388,  786 => 387,  781 => 385,  774 => 384,  770 => 383,  766 => 382,  763 => 381,  757 => 377,  749 => 375,  747 => 374,  743 => 372,  740 => 371,  736 => 370,  716 => 353,  710 => 349,  708 => 348,  704 => 346,  696 => 340,  686 => 336,  682 => 334,  678 => 332,  672 => 330,  670 => 329,  662 => 327,  659 => 326,  653 => 324,  651 => 323,  647 => 322,  643 => 320,  637 => 316,  629 => 314,  627 => 313,  623 => 311,  620 => 310,  616 => 309,  597 => 293,  591 => 289,  589 => 288,  586 => 287,  582 => 285,  572 => 277,  570 => 276,  566 => 274,  558 => 268,  549 => 265,  545 => 264,  538 => 263,  534 => 262,  531 => 261,  525 => 257,  517 => 255,  515 => 254,  511 => 252,  508 => 251,  504 => 250,  485 => 234,  479 => 230,  477 => 229,  473 => 227,  465 => 221,  455 => 217,  451 => 215,  447 => 213,  441 => 211,  439 => 210,  431 => 208,  428 => 207,  422 => 205,  420 => 204,  416 => 203,  412 => 201,  406 => 197,  398 => 195,  396 => 194,  392 => 192,  389 => 191,  385 => 190,  366 => 174,  360 => 170,  358 => 169,  355 => 168,  353 => 167,  336 => 153,  331 => 151,  326 => 148,  320 => 144,  312 => 142,  310 => 141,  299 => 132,  295 => 130,  289 => 128,  287 => 127,  273 => 116,  259 => 105,  247 => 95,  241 => 93,  235 => 91,  233 => 90,  220 => 80,  198 => 60,  192 => 57,  188 => 55,  186 => 54,  181 => 52,  170 => 44,  166 => 43,  162 => 42,  159 => 41,  153 => 37,  147 => 34,  141 => 32,  139 => 31,  122 => 17,  115 => 13,  108 => 9,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Promotion : {{ promotion.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"{{ path('app_admin_promotion_index') }}\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>{{ promotion.name }}
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"{{ path('app_admin_promotion_edit', {id: promotion.id}) }}\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePromotionModal\">
                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer
            </button>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne image -->
        <div class=\"col-lg-5 col-xl-4\">
            <div class=\"card shadow-sm border-0 rounded-4 overflow-hidden\">
                <div class=\"position-relative\">
                    {% if promotion.image %}
                        <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\" 
                             class=\"card-img-top\" 
                             alt=\"{{ promotion.name }}\" 
                             style=\"object-fit: cover; height: 350px; width: 100%;\">
                    {% else %}
                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 350px;\">
                            <i class=\"fas fa-tag fa-8x text-muted opacity-25\"></i>
                        </div>
                    {% endif %}
                    <div class=\"position-absolute top-0 end-0 p-3\">
                        <span class=\"badge {{ promotion.isActive ? 'bg-success' : 'bg-secondary' }} fs-6 px-3 py-2 shadow\">
                            <i class=\"fas {{ promotion.isActive ? 'fa-check-circle' : 'fa-ban' }} me-1\"></i>
                            {{ promotion.isActive ? 'ACTIVE' : 'INACTIVE' }}
                        </span>
                    </div>
                </div>
                <div class=\"card-body bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                        <div>
                            <i class=\"far fa-calendar-alt me-1 text-muted\"></i>
                            <small class=\"text-muted\">Créée le {{ promotion.createdAt|date('d/m/Y à H:i') }}</small>
                        </div>
                        {% if promotion.updatedAt and promotion.updatedAt != promotion.createdAt %}
                        <div>
                            <i class=\"far fa-edit me-1 text-muted\"></i>
                            <small class=\"text-muted\">Modifiée le {{ promotion.updatedAt|date('d/m/Y à H:i') }}</small>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne informations -->
        <div class=\"col-lg-7 col-xl-8\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-body p-4 p-xl-5\">
                    <h3 class=\"card-title mb-4\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Détails de la promotion
                    </h3>
                    
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-layer-group text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Type de réduction</small>
                                </div>
                                <p class=\"fw-bold fs-4 mb-0\">{{ promotion.typePromotion.name }}</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-percent text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Valeur de la réduction</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-primary mb-0\">
                                    {% if promotion.typePromotion.name == 'Pourcentage' %}
                                        {{ promotion.value }}%
                                    {% else %}
                                        {{ promotion.value|price_with_currency(app.user.hmaService) }}
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-align-left text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Description</small>
                                </div>
                                <p class=\"mb-0\">
                                    {{ promotion.description|default('Aucune description fournie')|nl2br }}
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-check text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de début</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    {{ promotion.startDate|date('d/m/Y') }}
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-times text-danger me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de fin</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    {% if promotion.endDate %}
                                        {{ promotion.endDate|date('d/m/Y') }}
                                    {% else %}
                                        <span class=\"badge bg-info\">Sans limite</span>
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Informations de l'utilisateur créateur -->
                    <div class=\"mt-4 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                {% if promotion.user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ promotion.user.photo) }}\" alt=\"{{ promotion.user.fullName }}\" class=\"rounded-circle\" width=\"60\" height=\"60\" style=\"object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fas fa-user fa-2x text-white\"></i>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée par</small>
                                <p class=\"fw-bold mb-0\">{{ promotion.user.fullName }}</p>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-envelope me-1\"></i> {{ promotion.user.email }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- TABLEAUX DES ASSOCIATIONS -->
    <!-- ========================================== -->
    
    {% if companyType == 'restaurant' %}
        <!-- SECTION CATÉGORIES DE PLATS -->
        {% if promotion.promotionCategoryRecipes|length > 0 %}
        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-utensils me-2\"></i>Catégories de plats concernées
                    <span class=\"badge bg-light text-dark ms-2\">{{ promotion.promotionCategoryRecipes|length }}</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\" style=\"width: 150px\">Hiérarchie</th>
                                <th class=\"text-white\" style=\"width: 120px\" class=\"text-center\">Nombre de plats</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for promoCategoryRecipe in promotion.promotionCategoryRecipes %}
                                {% set category = promoCategoryRecipe.categoryRecipe %}
                                <tr>
                                    <td>
                                        {% if category.image %}
                                            <img src=\"{{ asset('uploads/categories_plats/' ~ category.image) }}\" alt=\"{{ category.name }}\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensils fa-2x text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <strong>{{ category.name }}</strong>
                                        {% if category.parent %}
                                            <small class=\"text-muted d-block\">(Sous-catégorie de {{ category.parent.name }})</small>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-muted\">{{ category.description|default('-')|slice(0, 80) }}{% if category.description|length > 80 %}...{% endif %}</td>
                                    <td>
                                        {% if category.parent %}
                                            <span class=\"badge bg-info\">Niveau {{ category.hierarchyLevel }}</span>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">Catégorie principale</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">{{ category.recipes|length }}</span>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {% endif %}

        <!-- SECTION PLATS -->
        {% if promotion.promotionRecipes|length > 0 %}
        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-hamburger me-2\"></i>Plats concernés
                    <span class=\"badge bg-light text-dark ms-2\">{{ promotion.promotionRecipes|length }}</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\">Catégorie</th>
                                <th class=\"text-white text-end\">Prix de vente</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for promoRecipe in promotion.promotionRecipes %}
                                {% set recipe = promoRecipe.recipe %}
                                <tr>
                                    <td>
                                        {% if recipe.image %}
                                            <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" alt=\"{{ recipe.name }}\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-utensil-spoon fa-2x text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </td>
                                    <td><strong>{{ recipe.name }}</strong></td>
                                    <td class=\"text-muted\">{{ recipe.description|default('-')|slice(0, 80) }}{% if recipe.description|length > 80 %}...{% endif %}</td>
                                    <td>{{ recipe.category ? recipe.category.name : '-' }}</td>
                                    <td class=\"text-end fw-bold text-primary\">{{ recipe.sellingPrice|price_with_currency(app.user.hmaService) }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {% endif %}

        <!-- Message si aucune sélection -->
        {% if promotion.promotionCategoryRecipes|length == 0 and promotion.promotionRecipes|length == 0 %}
        <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-light\">
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-globe fa-4x text-primary mb-3\"></i>
                <h5 class=\"mb-2\">Promotion globale</h5>
                <p class=\"text-muted mb-0\">Cette promotion s'applique à tous les plats du menu</p>
            </div>
        </div>
        {% endif %}

    {% else %}
        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
        {% if promotion.promotionCategories|length > 0 %}
        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-folder-tree me-2\"></i>Catégories concernées
                    <span class=\"badge bg-light text-dark ms-2\">{{ promotion.promotionCategories|length }}</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\" style=\"width: 150px\">Hiérarchie</th>
                                <th class=\"text-white\" style=\"width: 120px\" class=\"text-center\">Nombre de produits</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for promoCategory in promotion.promotionCategories %}
                                {% set category = promoCategory.category %}
                                <tr>
                                    <td>
                                        {% if category.image %}
                                            <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" alt=\"{{ category.name }}\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-folder fa-2x text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <strong>{{ category.name }}</strong>
                                        {% if category.parent %}
                                            <small class=\"text-muted d-block\">(Sous-catégorie de {{ category.parent.name }})</small>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-muted\">{{ category.description|default('-')|slice(0, 80) }}{% if category.description|length > 80 %}...{% endif %}</td>
                                    <td>
                                        {% if category.parent %}
                                            <span class=\"badge bg-info\">Niveau {{ category.hierarchyLevel }}</span>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">Catégorie principale</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">{{ category.products|length }}</span>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {% endif %}

        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
        {% if promotion.promotionProducts|length > 0 %}
        <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-boxes me-2\"></i>Produits concernés
                    <span class=\"badge bg-light text-dark ms-2\">{{ promotion.promotionProducts|length }}</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 80px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white\">Code-barres</th>
                                <th class=\"text-white\">Description</th>
                                <th class=\"text-white\">Catégorie</th>
                                <th class=\"text-white text-center\">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for promoProduct in promotion.promotionProducts %}
                                {% set product = promoProduct.product %}
                                <tr>
                                    <td>
                                        {% if product.image and product.image != 'default-product.png' %}
                                            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"{{ product.name }}\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                        {% else %}
                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                <i class=\"fas fa-box fa-2x text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </td>
                                    <td><strong>{{ product.name }}</strong></td>
                                    <td><code>{{ product.barcode }}</code></td>
                                    <td class=\"text-muted\">{{ product.description|default('-')|slice(0, 60) }}{% if product.description|length > 60 %}...{% endif %}</td>
                                    <td>{{ product.category ? product.category.name : '-' }}</td>
                                    <td class=\"text-center\">
                                        {% if product.stockQuantity <= 0 %}
                                            <span class=\"badge bg-danger\">Rupture</span>
                                        {% elseif product.stockQuantity <= product.minQuantity %}
                                            <span class=\"badge bg-warning text-dark\">Stock faible ({{ product.stockQuantity }})</span>
                                        {% else %}
                                            <span class=\"badge bg-success\">{{ product.stockQuantity }} {{ product.unit|default('unités') }}</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {% endif %}

        <!-- Message si aucune sélection -->
        {% if promotion.promotionCategories|length == 0 and promotion.promotionProducts|length == 0 %}
        <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-light\">
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-globe fa-4x text-primary mb-3\"></i>
                <h5 class=\"mb-2\">Promotion globale</h5>
                <p class=\"text-muted mb-0\">Cette promotion s'applique à tous les produits du catalogue</p>
            </div>
        </div>
        {% endif %}
    {% endif %}

    <!-- Section récapitulative des cas -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-4 bg-info bg-opacity-10\">
        <div class=\"card-body p-4\">
            <div class=\"d-flex flex-wrap align-items-center gap-3\">
                <div class=\"flex-shrink-0\">
                    <div class=\"rounded-circle bg-white p-3 d-flex align-items-center justify-content-center shadow-sm\" style=\"width: 60px; height: 60px;\">
                        <i class=\"fas fa-info-circle fa-2x text-info\"></i>
                    </div>
                </div>
                <div class=\"flex-grow-1\">
                    <h6 class=\"mb-2 fw-bold\">Comment s'applique cette promotion ?</h6>
                    <p class=\"mb-0\">
                        {% set hasCategories = (companyType == 'restaurant' ? promotion.promotionCategoryRecipes|length > 0 : promotion.promotionCategories|length > 0) %}
                        {% set hasItems = (companyType == 'restaurant' ? promotion.promotionRecipes|length > 0 : promotion.promotionProducts|length > 0) %}
                        
                        {% if not hasCategories and not hasItems %}
                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 1 :</strong> Promotion sur <strong class=\"text-primary\">TOUS les {% if companyType == 'restaurant' %}plats{% else %}produits{% endif %}</strong>
                        {% elseif hasCategories and not hasItems %}
                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 2 :</strong> Promotion sur les <strong class=\"text-primary\">catégories sélectionnées</strong> uniquement
                        {% elseif not hasCategories and hasItems %}
                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 3 :</strong> Promotion sur les <strong class=\"text-primary\">{% if companyType == 'restaurant' %}plats{% else %}produits{% endif %} sélectionnés</strong> uniquement
                        {% else %}
                            <i class=\"fas fa-check-circle text-success me-2\"></i> <strong>Cas 4 :</strong> Promotion sur <strong class=\"text-primary\">l'ensemble</strong> (catégories + {% if companyType == 'restaurant' %}plats{% else %}produits{% endif %} sélectionnés)
                        {% endif %}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation pour la suppression de la promotion -->
    <div class=\"modal fade\" id=\"deletePromotionModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr de vouloir supprimer cette promotion ?</h5>
                    <p class=\"text-muted\">Cette action est irréversible.</p>
                    <div class=\"alert alert-warning mt-3\">
                        <strong>{{ promotion.name }}</strong><br>
                        Toutes les associations (catégories et {% if companyType == 'restaurant' %}plats{% else %}produits{% endif %}) seront également supprimées.
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"{{ path('app_admin_promotion_delete', {id: promotion.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ promotion.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{% block stylesheets %}
{{ parent() }}
<style>
    /* Styles généraux */
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
    }
    
    /* Styles du tableau */
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
        color: #ffffff !important;
        border: none;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 14px 12px;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .table td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
        background-color: #ffffff;
        border-bottom: 1px solid #e9ecef;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Card header */
    .card-header {
        border-bottom: none;
    }
    
    /* Badges */
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    /* Modal */
    .modal-content {
        border-radius: 1rem;
        border: none;
    }
    
    .modal-header {
        border-bottom: none;
    }
    
    .modal-footer {
        border-top: none;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.75rem;
        }
        .table th {
            font-size: 0.7rem;
            letter-spacing: 0.5px;
        }
        .display-5 {
            font-size: 1.75rem;
        }
        .info-card .fs-2 {
            font-size: 1.5rem;
        }
        .info-card .fs-4 {
            font-size: 1.25rem;
        }
        .info-card .fs-5 {
            font-size: 0.9rem;
        }
        .btn-group {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .display-5 {
            font-size: 1.5rem;
        }
        .info-card .fs-1 {
            font-size: 1.75rem;
        }
        .d-flex.gap-2 {
            flex-wrap: wrap;
        }
    }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajout d'un effet de tooltip sur les badges si besoin
        const stockBadges = document.querySelectorAll('.badge.bg-warning, .badge.bg-danger');
        stockBadges.forEach(badge => {
            if (badge.textContent.includes('Stock faible')) {
                badge.setAttribute('title', 'Le stock est inférieur au seuil d\\'alerte');
            }
            if (badge.textContent.includes('Rupture')) {
                badge.setAttribute('title', 'Produit en rupture de stock');
            }
        });
    });
</script>
{% endblock %}
{% endblock %}", "admin/promotion/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\show.html.twig");
    }
}
