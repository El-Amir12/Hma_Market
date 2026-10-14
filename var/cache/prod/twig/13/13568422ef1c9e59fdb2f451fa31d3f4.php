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
class __TwigTemplate_ff5cc6f2e63d17b5a0f1cc0107fd2287 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Promotion : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            <h1 class=\"h2 h-md-1 fw-bold mt-1\">
                <i class=\"fas fa-tag text-primary me-2\"></i>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 17), 0, 30), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 17)) > 30)) {
            yield "...";
        }
        // line 18
        yield "            </h1>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-sm flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePromotionModal\">
                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
            </button>
        </div>
    </div>

    <!-- ==========================================
         FLASH MESSAGES
    ========================================== -->
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            yield "        <div class=\"alert alert-success alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            yield "        <div class=\"alert alert-danger alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">
        <!-- Colonne image -->
        <div class=\"col-12 col-lg-5 col-xl-4\">
            <div class=\"card shadow-sm border-0 rounded-4 overflow-hidden\">
                <div class=\"position-relative\">
                    ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 49))), "html", null, true);
            yield "\" 
                             class=\"card-img-top\" 
                             alt=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 51), "html", null, true);
            yield "\" 
                             style=\"object-fit: cover; height: 200px; width: 100%;\">
                    ";
        } else {
            // line 54
            yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
                            <i class=\"fas fa-tag fa-5x text-muted opacity-25\"></i>
                        </div>
                    ";
        }
        // line 58
        yield "                    <div class=\"position-absolute top-0 end-0 p-2 p-md-3\">
                        <span class=\"badge ";
        // line 59
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-2 py-1 px-md-3 py-md-2 shadow\" style=\"font-size:0.6rem;\">
                            <i class=\"fas ";
        // line 60
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                            ";
        // line 61
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body bg-light p-2 p-md-3\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-1 gap-sm-2\">
                        <div>
                            <i class=\"far fa-calendar-alt me-1 text-muted\"></i>
                            <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée le ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 69), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                        </div>
                        ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 71) && (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 71) != CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 71)))) {
            // line 72
            yield "                        <div>
                            <i class=\"far fa-edit me-1 text-muted\"></i>
                            <small class=\"text-muted\" style=\"font-size:0.6rem;\">Modifiée le ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 74), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                        </div>
                        ";
        }
        // line 77
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne informations -->
        <div class=\"col-12 col-lg-7 col-xl-8\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-body p-2 p-md-4 p-xl-5\">
                    <h3 class=\"card-title mb-3 mb-md-4 fs-5 fs-md-4\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Détails de la promotion
                    </h3>
                    
                    <div class=\"row g-2 g-md-4\">
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-layer-group text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Type</small>
                                </div>
                                <p class=\"fw-bold mb-0 fs-6 fs-md-4\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-percent text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Valeur</small>
                                </div>
                                <p class=\"fw-bold mb-0 text-primary fs-5 fs-md-2\">
                                    ";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107) == "Pourcentage")) {
            // line 108
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 108), "html", null, true);
            yield "%
                                    ";
        } else {
            // line 110
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 110), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 110), "hmaService", [], "any", false, false, false, 110)), "html", null, true);
            yield "
                                    ";
        }
        // line 112
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                                </div>
                                <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">
                                    ";
        // line 122
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", false, false, false, 122), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-check text-success me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Début</small>
                                </div>
                                <p class=\"fw-semibold mb-0 fs-6 fs-md-5\">
                                    ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "startDate", [], "any", false, false, false, 133), "d/m/Y"), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-times text-danger me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Fin</small>
                                </div>
                                <p class=\"fw-semibold mb-0 fs-6 fs-md-5\">
                                    ";
        // line 144
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 145), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 147
            yield "                                        <span class=\"badge bg-info\" style=\"font-size:0.6rem;\">Sans limite</span>
                                    ";
        }
        // line 149
        yield "                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Informations de l'utilisateur créateur -->
                    <div class=\"mt-3 mt-md-4 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 158
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 158), "photo", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 159), "photo", [], "any", false, false, false, 159))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 159), "fullName", [], "any", false, false, false, 159), "html", null, true);
            yield "\" class=\"rounded-circle\" width=\"40\" height=\"40\" style=\"object-fit: cover;\">
                                ";
        } else {
            // line 161
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                        <i class=\"fas fa-user fa-1x text-white\"></i>
                                    </div>
                                ";
        }
        // line 165
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-2 ms-md-3\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée par</small>
                                <p class=\"fw-bold mb-0 small\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 168), "fullName", [], "any", false, false, false, 168), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                    <i class=\"fas fa-envelope me-1\"></i> ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 170), "email", [], "any", false, false, false, 170), "html", null, true);
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
        // line 184
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 185
            yield "        <!-- SECTION CATÉGORIES DE PLATS -->
        ";
            // line 186
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 186)) > 0)) {
                // line 187
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-utensils me-2\"></i>Catégories de plats concernées
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 191)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle table-sm\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 60px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white d-none d-md-table-cell\">Description</th>
                                <th class=\"text-white d-none d-lg-table-cell\" style=\"width: 120px\">Hiérarchie</th>
                                <th class=\"text-white text-center\" style=\"width: 80px\">Plats</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 207));
                foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                    // line 208
                    yield "                                ";
                    $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 208);
                    // line 209
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 211
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 212
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 212))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 212), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 214
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                                <i class=\"fas fa-utensils fa-1x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 218
                    yield "                                    </td>
                                    <td>
                                        <strong class=\"small\">";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 220), "html", null, true);
                    yield "</strong>
                                        ";
                    // line 221
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 222
                        yield "                                            <small class=\"text-muted d-block d-md-none\" style=\"font-size:0.55rem;\">Sous-catégorie</small>
                                        ";
                    }
                    // line 224
                    yield "                                    </td>
                                    <td class=\"text-muted d-none d-md-table-cell small\">";
                    // line 225
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 225)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 225), "-")) : ("-")), 0, 60), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 225)) > 60)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td class=\"d-none d-lg-table-cell\">
                                        ";
                    // line 227
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 228
                        yield "                                            <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Niveau ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "hierarchyLevel", [], "any", false, false, false, 228), "html", null, true);
                        yield "</span>
                                        ";
                    } else {
                        // line 230
                        yield "                                            <span class=\"badge bg-secondary\" style=\"font-size:0.55rem;\">Principale</span>
                                        ";
                    }
                    // line 232
                    yield "                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-2 py-1\" style=\"font-size:0.6rem;\">";
                    // line 234
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 234)), "html", null, true);
                    yield "</span>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 244
            yield "
        <!-- SECTION PLATS -->
        ";
            // line 246
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 246)) > 0)) {
                // line 247
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-hamburger me-2\"></i>Plats concernés
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 251)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle table-sm\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 60px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white d-none d-md-table-cell\">Description</th>
                                <th class=\"text-white d-none d-lg-table-cell\">Catégorie</th>
                                <th class=\"text-white text-end\">Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 267
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 267));
                foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                    // line 268
                    yield "                                ";
                    $context["recipe"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 268);
                    // line 269
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 271
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 272
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 272))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 272), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 274
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                                <i class=\"fas fa-utensil-spoon fa-1x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 278
                    yield "                                    </td>
                                    <td><strong class=\"small\">";
                    // line 279
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 279), "html", null, true);
                    yield "</strong></td>
                                    <td class=\"text-muted d-none d-md-table-cell small\">";
                    // line 280
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", true, true, false, 280)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 280), "-")) : ("-")), 0, 60), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 280)) > 60)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td class=\"d-none d-lg-table-cell small\">";
                    // line 281
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 281), "name", [], "any", false, false, false, 281), "html", null, true)) : ("-"));
                    yield "</td>
                                    <td class=\"text-end fw-bold text-primary small\">";
                    // line 282
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "sellingPrice", [], "any", false, false, false, 282), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 282), "hmaService", [], "any", false, false, false, 282)), "html", null, true);
                    yield "</td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 291
            yield "
        <!-- Message si aucune sélection -->
        ";
            // line 293
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 293)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 293)) == 0))) {
                // line 294
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4 bg-light\">
            <div class=\"card-body text-center py-3 py-md-5\">
                <i class=\"fas fa-globe fa-3x text-primary mb-2\"></i>
                <h5 class=\"mb-1 fs-6 fs-md-5\">Promotion globale</h5>
                <p class=\"text-muted small mb-0\">S'applique à tous les plats du menu</p>
            </div>
        </div>
        ";
            }
            // line 302
            yield "
    ";
        } else {
            // line 304
            yield "        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
        ";
            // line 305
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 305)) > 0)) {
                // line 306
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-folder-tree me-2\"></i>Catégories concernées
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 310)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle table-sm\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 60px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white d-none d-md-table-cell\">Description</th>
                                <th class=\"text-white d-none d-lg-table-cell\" style=\"width: 120px\">Hiérarchie</th>
                                <th class=\"text-white text-center\" style=\"width: 80px\">Produits</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 326
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 326));
                foreach ($context['_seq'] as $context["_key"] => $context["promoCategory"]) {
                    // line 327
                    yield "                                ";
                    $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategory"], "category", [], "any", false, false, false, 327);
                    // line 328
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 330
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 330)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 331
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 331))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 331), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 333
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                                <i class=\"fas fa-folder fa-1x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 337
                    yield "                                    </td>
                                    <td>
                                        <strong class=\"small\">";
                    // line 339
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 339), "html", null, true);
                    yield "</strong>
                                        ";
                    // line 340
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 340)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 341
                        yield "                                            <small class=\"text-muted d-block d-md-none\" style=\"font-size:0.55rem;\">Sous-catégorie</small>
                                        ";
                    }
                    // line 343
                    yield "                                    </td>
                                    <td class=\"text-muted d-none d-md-table-cell small\">";
                    // line 344
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 344)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 344), "-")) : ("-")), 0, 60), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 344)) > 60)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td class=\"d-none d-lg-table-cell\">
                                        ";
                    // line 346
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 347
                        yield "                                            <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Niveau ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "hierarchyLevel", [], "any", false, false, false, 347), "html", null, true);
                        yield "</span>
                                        ";
                    } else {
                        // line 349
                        yield "                                            <span class=\"badge bg-secondary\" style=\"font-size:0.55rem;\">Principale</span>
                                        ";
                    }
                    // line 351
                    yield "                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill px-2 py-1\" style=\"font-size:0.6rem;\">";
                    // line 353
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 353)), "html", null, true);
                    yield "</span>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoCategory'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 357
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 363
            yield "
        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
        ";
            // line 365
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 365)) > 0)) {
                // line 366
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-boxes me-2\"></i>Produits concernés
                    <span class=\"badge bg-light text-dark ms-2\">";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 370)), "html", null, true);
                yield "</span>
                </h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle table-sm\">
                        <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                            <tr>
                                <th class=\"text-white\" style=\"width: 60px\">Image</th>
                                <th class=\"text-white\">Nom</th>
                                <th class=\"text-white d-none d-md-table-cell\">Code</th>
                                <th class=\"text-white d-none d-lg-table-cell\">Description</th>
                                <th class=\"text-white d-none d-xl-table-cell\">Catégorie</th>
                                <th class=\"text-white text-center\" style=\"width: 80px\">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 387
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 387));
                foreach ($context['_seq'] as $context["_key"] => $context["promoProduct"]) {
                    // line 388
                    yield "                                ";
                    $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoProduct"], "product", [], "any", false, false, false, 388);
                    // line 389
                    yield "                                <tr>
                                    <td>
                                        ";
                    // line 391
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 391) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 391) != "default-product.png"))) {
                        // line 392
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 392))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 392), "html", null, true);
                        yield "\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                        ";
                    } else {
                        // line 394
                        yield "                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                                <i class=\"fas fa-box fa-1x text-muted\"></i>
                                            </div>
                                        ";
                    }
                    // line 398
                    yield "                                    </td>
                                    <td><strong class=\"small\">";
                    // line 399
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 399), "html", null, true);
                    yield "</strong></td>
                                    <td class=\"d-none d-md-table-cell\"><code class=\"small\" style=\"font-size:0.55rem;\">";
                    // line 400
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 400), "html", null, true);
                    yield "</code></td>
                                    <td class=\"text-muted d-none d-lg-table-cell small\">";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", true, true, false, 401)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 401), "-")) : ("-")), 0, 50), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 401)) > 50)) {
                        yield "...";
                    }
                    yield "</td>
                                    <td class=\"d-none d-xl-table-cell small\">";
                    // line 402
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 402)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 402), "name", [], "any", false, false, false, 402), "html", null, true)) : ("-"));
                    yield "</td>
                                    <td class=\"text-center\">
                                        ";
                    // line 404
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 404) <= 0)) {
                        // line 405
                        yield "                                            <span class=\"badge bg-danger\" style=\"font-size:0.55rem;\">Rupture</span>
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 406
($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 406) <= CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 406))) {
                        // line 407
                        yield "                                            <span class=\"badge bg-warning text-dark\" style=\"font-size:0.55rem;\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 407), "html", null, true);
                        yield "</span>
                                        ";
                    } else {
                        // line 409
                        yield "                                            <span class=\"badge bg-success\" style=\"font-size:0.55rem;\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 409), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 411
                    yield "                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promoProduct'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 414
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 420
            yield "
        <!-- Message si aucune sélection -->
        ";
            // line 422
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 422)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 422)) == 0))) {
                // line 423
                yield "        <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4 bg-light\">
            <div class=\"card-body text-center py-3 py-md-5\">
                <i class=\"fas fa-globe fa-3x text-primary mb-2\"></i>
                <h5 class=\"mb-1 fs-6 fs-md-5\">Promotion globale</h5>
                <p class=\"text-muted small mb-0\">S'applique à tous les produits du catalogue</p>
            </div>
        </div>
        ";
            }
            // line 431
            yield "    ";
        }
        // line 432
        yield "
    <!-- ==========================================
         SECTION RÉCAPITULATIVE
    ========================================== -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4 bg-info bg-opacity-10\">
        <div class=\"card-body p-2 p-md-4\">
            <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2 gap-md-3\">
                <div class=\"flex-shrink-0\">
                    <div class=\"rounded-circle bg-white p-2 p-md-3 d-flex align-items-center justify-content-center shadow-sm\" style=\"width: 40px; height: 40px;\">
                        <i class=\"fas fa-info-circle fa-1x text-info\"></i>
                    </div>
                </div>
                <div class=\"flex-grow-1\">
                    <h6 class=\"mb-1 fw-bold fs-6 fs-md-5\">Comment s'applique cette promotion ?</h6>
                    <p class=\"mb-0 small\">
                        ";
        // line 447
        $context["hasCategories"] = (((($context["companyType"] ?? null) == "restaurant")) ? ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 447)) > 0)) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategories", [], "any", false, false, false, 447)) > 0)));
        // line 448
        yield "                        ";
        $context["hasItems"] = (((($context["companyType"] ?? null) == "restaurant")) ? ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 448)) > 0)) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionProducts", [], "any", false, false, false, 448)) > 0)));
        // line 449
        yield "                        
                        ";
        // line 450
        if (( !($context["hasCategories"] ?? null) &&  !($context["hasItems"] ?? null))) {
            // line 451
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 1 :</strong> Promotion sur <strong class=\"text-primary\">TOUS les ";
            if ((($context["companyType"] ?? null) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield "</strong>
                        ";
        } elseif ((        // line 452
($context["hasCategories"] ?? null) &&  !($context["hasItems"] ?? null))) {
            // line 453
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 2 :</strong> Promotion sur les <strong class=\"text-primary\">catégories sélectionnées</strong>
                        ";
        } elseif (( !        // line 454
($context["hasCategories"] ?? null) && ($context["hasItems"] ?? null))) {
            // line 455
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 3 :</strong> Promotion sur les <strong class=\"text-primary\">";
            if ((($context["companyType"] ?? null) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield " sélectionnés</strong>
                        ";
        } else {
            // line 457
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 4 :</strong> Promotion sur <strong class=\"text-primary\">l'ensemble</strong> (catégories + ";
            if ((($context["companyType"] ?? null) == "restaurant")) {
                yield "plats";
            } else {
                yield "produits";
            }
            yield ")
                        ";
        }
        // line 459
        yield "                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL DE SUPPRESSION
    ========================================== -->
    <div class=\"modal fade\" id=\"deletePromotionModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0 py-2\">
                    <h5 class=\"modal-title text-danger fs-6\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-3\">
                    <i class=\"fas fa-trash-alt fa-3x text-danger mb-2\"></i>
                    <h6 class=\"fs-6\">Supprimer cette promotion ?</h6>
                    <p class=\"text-muted small\">Cette action est irréversible.</p>
                    <div class=\"alert alert-warning p-2 small mt-2\">
                        <strong>";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 482), 0, 30), "html", null, true);
        yield "</strong><br>
                        Toutes les associations seront supprimées.
                    </div>
                </div>
                <div class=\"modal-footer border-0 py-2\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 488)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 489))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 498
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 604
        yield "
";
        // line 605
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    // line 498
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 499
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
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
    
    .info-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
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
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
        color: #ffffff !important;
        border: none;
        font-weight: 600;
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 10px 8px;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .table td {
        vertical-align: middle;
        padding: 0.6rem 0.5rem;
        background-color: #ffffff;
        border-bottom: 1px solid #e9ecef;
        font-size: 0.75rem;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    .card-header {
        border-bottom: none;
    }
    
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
    
    /* Désactiver hover sur mobile */
    @media (max-width: 576px) {
        .info-card:hover {
            transform: none !important;
        }
        .btn-primary:hover {
            transform: none !important;
        }
        .btn-danger:hover {
            transform: none !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 605
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 606
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
        return array (  1096 => 606,  1089 => 605,  979 => 499,  972 => 498,  967 => 605,  964 => 604,  962 => 498,  950 => 489,  946 => 488,  937 => 482,  912 => 459,  902 => 457,  892 => 455,  890 => 454,  887 => 453,  885 => 452,  876 => 451,  874 => 450,  871 => 449,  868 => 448,  866 => 447,  849 => 432,  846 => 431,  836 => 423,  834 => 422,  830 => 420,  822 => 414,  814 => 411,  808 => 409,  802 => 407,  800 => 406,  797 => 405,  795 => 404,  790 => 402,  783 => 401,  779 => 400,  775 => 399,  772 => 398,  766 => 394,  758 => 392,  756 => 391,  752 => 389,  749 => 388,  745 => 387,  725 => 370,  719 => 366,  717 => 365,  713 => 363,  705 => 357,  695 => 353,  691 => 351,  687 => 349,  681 => 347,  679 => 346,  671 => 344,  668 => 343,  664 => 341,  662 => 340,  658 => 339,  654 => 337,  648 => 333,  640 => 331,  638 => 330,  634 => 328,  631 => 327,  627 => 326,  608 => 310,  602 => 306,  600 => 305,  597 => 304,  593 => 302,  583 => 294,  581 => 293,  577 => 291,  569 => 285,  560 => 282,  556 => 281,  549 => 280,  545 => 279,  542 => 278,  536 => 274,  528 => 272,  526 => 271,  522 => 269,  519 => 268,  515 => 267,  496 => 251,  490 => 247,  488 => 246,  484 => 244,  476 => 238,  466 => 234,  462 => 232,  458 => 230,  452 => 228,  450 => 227,  442 => 225,  439 => 224,  435 => 222,  433 => 221,  429 => 220,  425 => 218,  419 => 214,  411 => 212,  409 => 211,  405 => 209,  402 => 208,  398 => 207,  379 => 191,  373 => 187,  371 => 186,  368 => 185,  366 => 184,  349 => 170,  344 => 168,  339 => 165,  333 => 161,  325 => 159,  323 => 158,  312 => 149,  308 => 147,  302 => 145,  300 => 144,  286 => 133,  272 => 122,  260 => 112,  254 => 110,  248 => 108,  246 => 107,  233 => 97,  211 => 77,  205 => 74,  201 => 72,  199 => 71,  194 => 69,  183 => 61,  179 => 60,  175 => 59,  172 => 58,  166 => 54,  160 => 51,  154 => 49,  152 => 48,  141 => 39,  132 => 37,  127 => 36,  118 => 34,  114 => 33,  99 => 21,  94 => 18,  89 => 17,  82 => 13,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\show.html.twig");
    }
}
