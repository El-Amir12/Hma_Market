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

/* admin/restaurant/promotion/recipe/show.html.twig */
class __TwigTemplate_6d5df76af4e9dd67c14d38bc49f9f4a2 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/recipe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/recipe/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Promotion ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - Plat ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_recipe_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "
                <span class=\"fs-4 text-muted mx-2\">→</span>
                <i class=\"fas fa-hamburger text-info me-2\"></i>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-edit me-2\"></i> Modifier la promotion
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer l'association
            </button>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations de la promotion -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-tag me-2\"></i>Informations de la promotion
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 41, $this->source); })()), "image", [], "any", false, false, false, 41))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 43
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-tag fa-4x text-muted\"></i>
                        </div>
                    ";
        }
        // line 47
        yield "                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-layer-group text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Type de réduction</small>
                        </div>
                        <p class=\"fw-bold fs-4 mb-0\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 53, $this->source); })()), "typePromotion", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-percent text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Valeur de la réduction</small>
                        </div>
                        <p class=\"fw-bold fs-1 text-primary mb-0\">
                            ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 62, $this->source); })()), "typePromotion", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62) == "Pourcentage")) {
            // line 63
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 63, $this->source); })()), "value", [], "any", false, false, false, 63), "html", null, true);
            yield "%
                            ";
        } else {
            // line 65
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 65, $this->source); })()), "value", [], "any", false, false, false, 65), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "hmaService", [], "any", false, false, false, 65)), "html", null, true);
            yield "
                            ";
        }
        // line 67
        yield "                        </p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">";
        // line 75
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-check text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de début</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 85, $this->source); })()), "startDate", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-times text-danger me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de fin</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 95
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 95, $this->source); })()), "endDate", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 96, $this->source); })()), "endDate", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 98
            yield "                                        <span class=\"badge bg-info\">Sans limite</span>
                                    ";
        }
        // line 100
        yield "                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 108
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 108, $this->source); })()), "isActive", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " fs-6 px-3 py-2\">
                                    <i class=\"fas ";
        // line 109
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 109, $this->source); })()), "isActive", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 110
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 110, $this->source); })()), "isActive", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée le ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 114, $this->source); })()), "createdAt", [], "any", false, false, false, 114), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                                ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 115, $this->source); })()), "updatedAt", [], "any", false, false, false, 115) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 115, $this->source); })()), "updatedAt", [], "any", false, false, false, 115) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 115, $this->source); })()), "createdAt", [], "any", false, false, false, 115)))) {
            // line 116
            yield "                                    <br><small class=\"text-muted\">Modifiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 116, $this->source); })()), "updatedAt", [], "any", false, false, false, 116), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                                ";
        }
        // line 118
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Informations du plat -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-hamburger me-2\"></i>Informations du plat
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 134, $this->source); })()), "image", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 135, $this->source); })()), "image", [], "any", false, false, false, 135))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 137
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-utensil-spoon fa-4x text-muted\"></i>
                        </div>
                    ";
        }
        // line 141
        yield "                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-tag text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-4 mb-0\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 147, $this->source); })()), "name", [], "any", false, false, false, 147), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">";
        // line 155
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 155, $this->source); })()), "description", [], "any", false, false, false, 155), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-folder-tree text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Catégorie</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">";
        // line 165
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 165, $this->source); })()), "category", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 165, $this->source); })()), "category", [], "any", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true)) : ("-"));
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-utensil-spoon text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Instructions</small>
                                </div>
                                <p class=\"mb-0\">";
        // line 174
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "instructions", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 174, $this->source); })()), "instructions", [], "any", false, false, false, 174), "Aucune instruction")) : ("Aucune instruction")), "html", null, true));
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-3 mt-2\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-arrow-up text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Prix de vente</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-success mb-0\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 186, $this->source); })()), "sellingPrice", [], "any", false, false, false, 186), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "hmaService", [], "any", false, false, false, 186)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Marge estimée</small>
                                </div>
                                <p class=\"fw-bold fs-5 mb-0\">
                                    ";
        // line 196
        $context["estimatedMargin"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 196, $this->source); })()), "sellingPrice", [], "any", false, false, false, 196) - (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 196, $this->source); })()), "sellingPrice", [], "any", false, false, false, 196) * 0.6)), 0);
        // line 197
        yield "                                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["estimatedMargin"]) || array_key_exists("estimatedMargin", $context) ? $context["estimatedMargin"] : (function () { throw new RuntimeError('Variable "estimatedMargin" does not exist.', 197, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197), "hmaService", [], "any", false, false, false, 197)), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 206
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 206, $this->source); })()), "isActive", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " fs-6 px-3 py-2\">
                                    <i class=\"fas ";
        // line 207
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 207, $this->source); })()), "isActive", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 208
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 208, $this->source); })()), "isActive", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créé par</small>
                                <p class=\"fw-bold mb-0\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213), "fullName", [], "any", false, false, false, 213), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "email", [], "any", false, false, false, 214), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section récapitulative -->
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
                        <i class=\"fas fa-check-circle text-success me-2\"></i>
                        Cette promotion s'applique <strong class=\"text-primary\">uniquement au plat</strong> <strong>";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 236, $this->source); })()), "name", [], "any", false, false, false, 236), "html", null, true);
        yield "</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
                    <h5>Supprimer cette association ?</h5>
                    <p>La promotion <strong>";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 256, $this->source); })()), "name", [], "any", false, false, false, 256), "html", null, true);
        yield "</strong> ne sera plus appliquée au plat <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 256, $this->source); })()), "name", [], "any", false, false, false, 256), "html", null, true);
        yield "</strong>.</p>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_recipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionRecipe"]) || array_key_exists("promotionRecipe", $context) ? $context["promotionRecipe"] : (function () { throw new RuntimeError('Variable "promotionRecipe" does not exist.', 260, $this->source); })()), "id", [], "any", false, false, false, 260)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-recipe" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionRecipe"]) || array_key_exists("promotionRecipe", $context) ? $context["promotionRecipe"] : (function () { throw new RuntimeError('Variable "promotionRecipe" does not exist.', 261, $this->source); })()), "id", [], "any", false, false, false, 261))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    /* Dégradés */
    .bg-gradient-light {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 12px;
    }
    
    .info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        border-color: transparent;
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(220, 53, 69, 0.4);
    }
    
    .btn-outline-secondary {
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .btn-outline-secondary:hover {
        transform: translateY(-2px);
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
        letter-spacing: 1px;
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
    
    .table tbody tr {
        transition: background-color 0.2s ease;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Badges */
    .badge {
        font-weight: 500;
        padding: 0.5rem 0.75rem;
        border-radius: 8px;
    }
    
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
        .display-5 {
            font-size: 1.5rem;
        }
        .info-card .fs-1 {
            font-size: 1.75rem;
        }
        .info-card .fs-4 {
            font-size: 1.1rem;
        }
        .info-card .fs-5 {
            font-size: 0.9rem;
        }
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.7rem;
        }
        .table th {
            font-size: 0.65rem;
            letter-spacing: 0.5px;
        }
        .badge {
            padding: 0.35rem 0.5rem;
            font-size: 0.7rem;
        }
    }
    
    @media (max-width: 576px) {
        .btn-group {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .btn-group .btn {
            flex: 1;
            min-width: 100px;
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/restaurant/promotion/recipe/show.html.twig";
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
        return array (  486 => 261,  482 => 260,  473 => 256,  450 => 236,  425 => 214,  421 => 213,  413 => 208,  409 => 207,  405 => 206,  392 => 197,  390 => 196,  377 => 186,  362 => 174,  350 => 165,  337 => 155,  326 => 147,  318 => 141,  312 => 137,  304 => 135,  302 => 134,  284 => 118,  278 => 116,  276 => 115,  272 => 114,  265 => 110,  261 => 109,  257 => 108,  247 => 100,  243 => 98,  237 => 96,  235 => 95,  222 => 85,  209 => 75,  199 => 67,  193 => 65,  187 => 63,  185 => 62,  173 => 53,  165 => 47,  159 => 43,  151 => 41,  149 => 40,  127 => 21,  120 => 17,  115 => 15,  108 => 11,  103 => 8,  90 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/restaurant/promotion/recipe/show.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Promotion {{ promotion.name }} - Plat {{ recipe.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"{{ path('app_restaurant_promotion_recipe_index') }}\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>{{ promotion.name }}
                <span class=\"fs-4 text-muted mx-2\">→</span>
                <i class=\"fas fa-hamburger text-info me-2\"></i>{{ recipe.name }}
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"{{ path('app_restaurant_promotion_edit', {id: promotion.id}) }}\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-edit me-2\"></i> Modifier la promotion
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                <i class=\"fas fa-trash-alt me-2\"></i> Supprimer l'association
            </button>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations de la promotion -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-tag me-2\"></i>Informations de la promotion
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    {% if promotion.image %}
                        <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\" alt=\"{{ promotion.name }}\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    {% else %}
                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-tag fa-4x text-muted\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-layer-group text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Type de réduction</small>
                        </div>
                        <p class=\"fw-bold fs-4 mb-0\">{{ promotion.typePromotion.name }}</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-percent text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Valeur de la réduction</small>
                        </div>
                        <p class=\"fw-bold fs-1 text-primary mb-0\">
                            {% if promotion.typePromotion.name == 'Pourcentage' %}
                                {{ promotion.value }}%
                            {% else %}
                                {{ promotion.value|price_with_currency(app.user.hmaService) }}
                            {% endif %}
                        </p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">{{ promotion.description|default('Aucune description fournie')|nl2br }}</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"far fa-calendar-check text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Date de début</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">{{ promotion.startDate|date('d/m/Y') }}</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
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
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge {{ promotion.isActive ? 'bg-success' : 'bg-secondary' }} fs-6 px-3 py-2\">
                                    <i class=\"fas {{ promotion.isActive ? 'fa-check-circle' : 'fa-ban' }} me-1\"></i>
                                    {{ promotion.isActive ? 'ACTIVE' : 'INACTIVE' }}
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée le {{ promotion.createdAt|date('d/m/Y à H:i') }}</small>
                                {% if promotion.updatedAt and promotion.updatedAt != promotion.createdAt %}
                                    <br><small class=\"text-muted\">Modifiée le {{ promotion.updatedAt|date('d/m/Y à H:i') }}</small>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Informations du plat -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-hamburger me-2\"></i>Informations du plat
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    {% if recipe.image %}
                        <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" alt=\"{{ recipe.name }}\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    {% else %}
                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-utensil-spoon fa-4x text-muted\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-tag text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-4 mb-0\">{{ recipe.name }}</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">{{ recipe.description|default('Aucune description')|nl2br }}</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-folder-tree text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Catégorie</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">{{ recipe.category ? recipe.category.name : '-' }}</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-utensil-spoon text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Instructions</small>
                                </div>
                                <p class=\"mb-0\">{{ recipe.instructions|default('Aucune instruction')|nl2br }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-3 mt-2\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-arrow-up text-success me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Prix de vente</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-success mb-0\">{{ recipe.sellingPrice|price_with_currency(app.user.hmaService) }}</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-chart-line text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Marge estimée</small>
                                </div>
                                <p class=\"fw-bold fs-5 mb-0\">
                                    {% set estimatedMargin = (recipe.sellingPrice - (recipe.sellingPrice * 0.6))|number_format(0) %}
                                    {{ estimatedMargin|price_with_currency(app.user.hmaService) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge {{ recipe.isActive ? 'bg-success' : 'bg-secondary' }} fs-6 px-3 py-2\">
                                    <i class=\"fas {{ recipe.isActive ? 'fa-check-circle' : 'fa-ban' }} me-1\"></i>
                                    {{ recipe.isActive ? 'ACTIF' : 'INACTIF' }}
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créé par</small>
                                <p class=\"fw-bold mb-0\">{{ recipe.user.fullName }}</p>
                                <small class=\"text-muted\">{{ recipe.user.email }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section récapitulative -->
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
                        <i class=\"fas fa-check-circle text-success me-2\"></i>
                        Cette promotion s'applique <strong class=\"text-primary\">uniquement au plat</strong> <strong>{{ recipe.name }}</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
                    <h5>Supprimer cette association ?</h5>
                    <p>La promotion <strong>{{ promotion.name }}</strong> ne sera plus appliquée au plat <strong>{{ recipe.name }}</strong>.</p>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"{{ path('app_restaurant_promotion_recipe_delete', {id: promotionRecipe.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-recipe' ~ promotionRecipe.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    /* Dégradés */
    .bg-gradient-light {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 12px;
    }
    
    .info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        border-color: transparent;
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(220, 53, 69, 0.4);
    }
    
    .btn-outline-secondary {
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .btn-outline-secondary:hover {
        transform: translateY(-2px);
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
        letter-spacing: 1px;
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
    
    .table tbody tr {
        transition: background-color 0.2s ease;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Badges */
    .badge {
        font-weight: 500;
        padding: 0.5rem 0.75rem;
        border-radius: 8px;
    }
    
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
        .display-5 {
            font-size: 1.5rem;
        }
        .info-card .fs-1 {
            font-size: 1.75rem;
        }
        .info-card .fs-4 {
            font-size: 1.1rem;
        }
        .info-card .fs-5 {
            font-size: 0.9rem;
        }
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.7rem;
        }
        .table th {
            font-size: 0.65rem;
            letter-spacing: 0.5px;
        }
        .badge {
            padding: 0.35rem 0.5rem;
            font-size: 0.7rem;
        }
    }
    
    @media (max-width: 576px) {
        .btn-group {
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .btn-group .btn {
            flex: 1;
            min-width: 100px;
        }
        .d-flex.gap-2 {
            flex-wrap: wrap;
        }
    }
</style>
{% endblock %}", "admin/restaurant/promotion/recipe/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\recipe\\show.html.twig");
    }
}
