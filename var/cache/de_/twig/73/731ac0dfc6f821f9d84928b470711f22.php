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

/* admin/promotion/category/show.html.twig */
class __TwigTemplate_6cf153dbd9444dfdd4d67a814a6d6b7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/category/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/category/show.html.twig"));

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
        yield " - Catégorie ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "
                <span class=\"fs-4 text-muted mx-2\">→</span>
                <i class=\"fas fa-folder-tree text-success me-2\"></i>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
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

        <!-- Colonne droite - Informations de la catégorie -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-folder-tree me-2\"></i>Informations de la catégorie
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 134, $this->source); })()), "image", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 135, $this->source); })()), "image", [], "any", false, false, false, 135))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 137
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-folder fa-4x text-muted\"></i>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 147, $this->source); })()), "name", [], "any", false, false, false, 147), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-sitemap text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Chemin complet</small>
                        </div>
                        <p class=\"fw-semibold fs-5 mb-0\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 155, $this->source); })()), "fullPath", [], "any", false, false, false, 155), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">";
        // line 163
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 163)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 163, $this->source); })()), "description", [], "any", false, false, false, 163), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-layer-group text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Hiérarchie</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 174, $this->source); })()), "parent", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                        <span class=\"badge bg-info\">Sous-catégorie de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 175, $this->source); })()), "parent", [], "any", false, false, false, 175), "name", [], "any", false, false, false, 175), "html", null, true);
            yield "</span>
                                    ";
        } else {
            // line 177
            yield "                                        <span class=\"badge bg-secondary\">Catégorie principale</span>
                                    ";
        }
        // line 179
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-boxes text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Nombre de produits</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-primary mb-0\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 188, $this->source); })()), "products", [], "any", false, false, false, 188)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 196
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 196, $this->source); })()), "isActive", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " fs-6 px-3 py-2\">
                                    <i class=\"fas ";
        // line 197
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 197, $this->source); })()), "isActive", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 198
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 198, $this->source); })()), "isActive", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée par</small>
                                <p class=\"fw-bold mb-0\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "fullName", [], "any", false, false, false, 203), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204), "email", [], "any", false, false, false, 204), "html", null, true);
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
                        Cette promotion s'applique <strong class=\"text-primary\">à tous les produits</strong> de la catégorie <strong>";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 226, $this->source); })()), "name", [], "any", false, false, false, 226), "html", null, true);
        yield "</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des produits de la catégorie -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
        <div class=\"card-header bg-gradient-primary text-white py-3\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-boxes me-2\"></i>Produits de la catégorie
                <span class=\"badge bg-light text-dark ms-2\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 238, $this->source); })())), "html", null, true);
        yield "</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 60px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white\">Code-barres</th>
                            <th class=\"text-white\">Prix de vente</th>
                            <th class=\"text-white\">Stock</th>
                            <th class=\"text-white\">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 255, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 256
            yield "                            <tr>
                                <td>
                                    ";
            // line 258
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 258) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 258) != "default-product.png"))) {
                // line 259
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 259))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 259), "html", null, true);
                yield "\" class=\"rounded\" style=\"width: 40px; height: 40px; object-fit: cover;\">
                                    ";
            } else {
                // line 261
                yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                            <i class=\"fas fa-box fa-lg text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 265
            yield "                                </td>
                                <td><strong>";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 266), "html", null, true);
            yield "</strong></td>
                                <td><code>";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 267), "html", null, true);
            yield "</code></td>
                                <td>";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 268), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "user", [], "any", false, false, false, 268), "hmaService", [], "any", false, false, false, 268)), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 270) <= 0)) {
                // line 271
                yield "                                        <span class=\"badge bg-danger\">Rupture</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 272
$context["product"], "stockQuantity", [], "any", false, false, false, 272) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 272))) {
                // line 273
                yield "                                        <span class=\"badge bg-warning text-dark\">Stock faible (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 273), "html", null, true);
                yield ")</span>
                                    ";
            } else {
                // line 275
                yield "                                        <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 275), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 275), "unités")) : ("unités")), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 277
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 279
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 279)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 280
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 284
        if (!$context['_iterated']) {
            // line 285
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                    <i class=\"fas fa-box fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p>Aucun produit dans cette catégorie.</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "                    </tbody>
                </table>
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
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 311, $this->source); })()), "name", [], "any", false, false, false, 311), "html", null, true);
        yield "</strong> ne sera plus appliquée à la catégorie <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 311, $this->source); })()), "name", [], "any", false, false, false, 311), "html", null, true);
        yield "</strong>.</p>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionCategory"]) || array_key_exists("promotionCategory", $context) ? $context["promotionCategory"] : (function () { throw new RuntimeError('Variable "promotionCategory" does not exist.', 315, $this->source); })()), "id", [], "any", false, false, false, 315)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-category" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionCategory"]) || array_key_exists("promotionCategory", $context) ? $context["promotionCategory"] : (function () { throw new RuntimeError('Variable "promotionCategory" does not exist.', 316, $this->source); })()), "id", [], "any", false, false, false, 316))), "html", null, true);
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
        return "admin/promotion/category/show.html.twig";
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
        return array (  603 => 316,  599 => 315,  590 => 311,  569 => 292,  557 => 285,  555 => 284,  546 => 280,  542 => 279,  538 => 277,  530 => 275,  524 => 273,  522 => 272,  519 => 271,  517 => 270,  512 => 268,  508 => 267,  504 => 266,  501 => 265,  495 => 261,  487 => 259,  485 => 258,  481 => 256,  476 => 255,  456 => 238,  441 => 226,  416 => 204,  412 => 203,  404 => 198,  400 => 197,  396 => 196,  385 => 188,  374 => 179,  370 => 177,  364 => 175,  362 => 174,  348 => 163,  337 => 155,  326 => 147,  318 => 141,  312 => 137,  304 => 135,  302 => 134,  284 => 118,  278 => 116,  276 => 115,  272 => 114,  265 => 110,  261 => 109,  257 => 108,  247 => 100,  243 => 98,  237 => 96,  235 => 95,  222 => 85,  209 => 75,  199 => 67,  193 => 65,  187 => 63,  185 => 62,  173 => 53,  165 => 47,  159 => 43,  151 => 41,  149 => 40,  127 => 21,  120 => 17,  115 => 15,  108 => 11,  103 => 8,  90 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/promotion/category/show.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Promotion {{ promotion.name }} - Catégorie {{ category.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"{{ path('app_admin_promotion_category_index') }}\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <h1 class=\"display-5 fw-bold mt-2\">
                <i class=\"fas fa-tag text-primary me-3\"></i>{{ promotion.name }}
                <span class=\"fs-4 text-muted mx-2\">→</span>
                <i class=\"fas fa-folder-tree text-success me-2\"></i>{{ category.name }}
            </h1>
        </div>
        <div class=\"mt-2 mt-sm-0 d-flex gap-2\">
            <a href=\"{{ path('app_admin_promotion_edit', {id: promotion.id}) }}\" class=\"btn btn-primary btn-lg\">
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

        <!-- Colonne droite - Informations de la catégorie -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-folder-tree me-2\"></i>Informations de la catégorie
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    {% if category.image %}
                        <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" alt=\"{{ category.name }}\" class=\"img-fluid rounded mb-3\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                    {% else %}
                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 150px;\">
                            <i class=\"fas fa-folder fa-4x text-muted\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-tag text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-4 mb-0\">{{ category.name }}</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-sitemap text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Chemin complet</small>
                        </div>
                        <p class=\"fw-semibold fs-5 mb-0\">{{ category.fullPath }}</p>
                    </div>
                    
                    <div class=\"info-card p-3 bg-light rounded-3 mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-align-left text-primary me-2\"></i>
                            <small class=\"text-muted text-uppercase\">Description</small>
                        </div>
                        <p class=\"mb-0\">{{ category.description|default('Aucune description')|nl2br }}</p>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-layer-group text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Hiérarchie</small>
                                </div>
                                <p class=\"fw-semibold fs-5 mb-0\">
                                    {% if category.parent %}
                                        <span class=\"badge bg-info\">Sous-catégorie de {{ category.parent.name }}</span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">Catégorie principale</span>
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-boxes text-primary me-2\"></i>
                                    <small class=\"text-muted text-uppercase\">Nombre de produits</small>
                                </div>
                                <p class=\"fw-bold fs-2 text-primary mb-0\">{{ category.products|length }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge {{ category.isActive ? 'bg-success' : 'bg-secondary' }} fs-6 px-3 py-2\">
                                    <i class=\"fas {{ category.isActive ? 'fa-check-circle' : 'fa-ban' }} me-1\"></i>
                                    {{ category.isActive ? 'ACTIVE' : 'INACTIVE' }}
                                </span>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <small class=\"text-muted\">Créée par</small>
                                <p class=\"fw-bold mb-0\">{{ category.user.fullName }}</p>
                                <small class=\"text-muted\">{{ category.user.email }}</small>
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
                        Cette promotion s'applique <strong class=\"text-primary\">à tous les produits</strong> de la catégorie <strong>{{ category.name }}</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des produits de la catégorie -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
        <div class=\"card-header bg-gradient-primary text-white py-3\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-boxes me-2\"></i>Produits de la catégorie
                <span class=\"badge bg-light text-dark ms-2\">{{ products|length }}</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 60px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white\">Code-barres</th>
                            <th class=\"text-white\">Prix de vente</th>
                            <th class=\"text-white\">Stock</th>
                            <th class=\"text-white\">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for product in products %}
                            <tr>
                                <td>
                                    {% if product.image and product.image != 'default-product.png' %}
                                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"{{ product.name }}\" class=\"rounded\" style=\"width: 40px; height: 40px; object-fit: cover;\">
                                    {% else %}
                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                            <i class=\"fas fa-box fa-lg text-muted\"></i>
                                        </div>
                                    {% endif %}
                                </td>
                                <td><strong>{{ product.name }}</strong></td>
                                <td><code>{{ product.barcode }}</code></td>
                                <td>{{ product.salePrice|price_with_currency(app.user.hmaService) }}</td>
                                <td>
                                    {% if product.stockQuantity <= 0 %}
                                        <span class=\"badge bg-danger\">Rupture</span>
                                    {% elseif product.stockQuantity <= product.minQuantity %}
                                        <span class=\"badge bg-warning text-dark\">Stock faible ({{ product.stockQuantity }})</span>
                                    {% else %}
                                        <span class=\"badge bg-success\">{{ product.stockQuantity }} {{ product.unit|default('unités') }}</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        {{ product.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                    <i class=\"fas fa-box fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p>Aucun produit dans cette catégorie.</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
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
                    <p>La promotion <strong>{{ promotion.name }}</strong> ne sera plus appliquée à la catégorie <strong>{{ category.name }}</strong>.</p>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"{{ path('app_admin_promotion_category_delete', {id: promotionCategory.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-category' ~ promotionCategory.id) }}\">
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
{% endblock %}", "admin/promotion/category/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\category\\show.html.twig");
    }
}
