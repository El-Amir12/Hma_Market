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

/* admin/promotion/_form.html.twig */
class __TwigTemplate_4075c48e92e03be8e176aac0097220a5 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["bootstrap_5_layout.html.twig"], true);
        // line 4
        yield "
<div class=\"container-fluid px-4\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

    <div class=\"row g-4\">
        <!-- Carte Image -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-image me-2\"></i>Image de la promotion
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column\">
                    <div class=\"promo-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 21))), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
            yield "\"
                                     class=\"img-fluid rounded shadow-lg promo-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                ";
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 25)))) {
                // line 26
                yield "                                    <button type=\"button\"
                                            class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                            style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"#deleteImageModal\"
                                            title=\"Supprimer l'image\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                ";
            }
            // line 35
            yield "                            </div>
                        ";
        } else {
            // line 37
            yield "                            <div class=\"promo-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-tag fa-5x\"></i>
                            </div>
                        ";
        }
        // line 42
        yield "                    </div>

                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewPromoImage(this)", "accept" => "image/*"]]);
        // line 50
        yield "
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 5M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 56), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            <label for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                ";
        // line 63
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer l'image") : ("Choisir une image"));
        yield "
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la promotion -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-percent me-2\"></i>
                        ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 77)))) {
            // line 78
            yield "                            Modifier la promotion
                        ";
        } else {
            // line 80
            yield "                            Nouvelle promotion
                        ";
        }
        // line 82
        yield "                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Informations de base -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 93
        yield "
                                <label for=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la promotion *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 98), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 111
        yield "
                                <label for=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 116), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-select", "placeholder" => " "]]);
        // line 128
        yield "
                                <label for=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-layer-group me-1\"></i> Type de promotion *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 133), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 143
        yield "
                                <label for=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 144), "vars", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calculator me-1\"></i> Valeur de réduction *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 148), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 160
        yield "
                                <label for=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de début *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 165), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 174
        yield "
                                <label for=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 175), "vars", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de fin
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 179), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class=\"my-4\">

                    <!-- Statut -->
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                    <span class=\"fw-bold\">Statut de la promotion</span>
                                </div>
                                <span class=\"badge ";
        // line 195
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "data", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                    ";
        // line 196
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "data", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 203
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
        yield "\" id=\"status-label\">
                                    ";
        // line 205
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 205), "vars", [], "any", false, false, false, 205), "data", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Promotion active") : ("Promotion inactive"));
        yield "
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les promotions inactives ne seront pas appliquées
                            </small>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTION EXPLICATION PERMANENTE -->
                    <!-- ========================================== -->
                    <div class=\"card border-0 bg-info bg-opacity-10 mt-4\">
                        <div class=\"card-body p-4\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <div class=\"rounded-circle bg-white bg-opacity-25 p-3 d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-info-circle fa-xl text-white\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h6 class=\"fw-bold mb-3 text-white\">
                                        <i class=\"fas fa-question-circle text-white me-2\"></i>Comment s'applique cette promotion ?
                                    </h6>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-secondary me-2 px-2 py-1\">Cas 1</span>
                                                    <span class=\"text-white\">Aucune sélection → <strong class=\"text-white fw-bold\">TOUS les ";
        // line 235
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield "</strong></span>
                                                </li>
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-success me-2 px-2 py-1\">Cas 2</span>
                                                    <span class=\"text-white\">Catégories uniquement → <strong class=\"text-white fw-bold\">tous les ";
        // line 239
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield "</strong> des catégories sélectionnées</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-primary me-2 px-2 py-1\">Cas 3</span>
                                                    <span class=\"text-white\">";
        // line 247
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "Plats";
        } else {
            yield "Produits";
        }
        yield " uniquement → <strong class=\"text-white fw-bold\">ces ";
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield " uniquement</strong></span>
                                                </li>
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-warning text-dark me-2 px-2 py-1\">Cas 4</span>
                                                    <span class=\"text-white\">Catégories + ";
        // line 251
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "Plats";
        } else {
            yield "Produits";
        }
        yield " → <strong class=\"text-white fw-bold\">l'ensemble</strong> (union des deux)</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"mt-3 pt-2 border-top border-white border-opacity-25\">
                                        <div class=\"d-flex align-items-start\">
                                            <i class=\"fas fa-lightbulb text-warning me-2 mt-1\"></i>
                                            <span class=\"small text-white\">
                                                <strong class=\"text-warning\">Astuce :</strong> 
                                                Si un ";
        // line 261
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "plat";
        } else {
            yield "produit";
        }
        yield " est déjà inclus via une catégorie, 
                                                <strong class=\"text-white fw-bold\">il n'est pas dupliqué</strong>. La promotion s'applique une seule fois.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTIONS DES ASSOCIATIONS AVEC COLLECTIONTYPE -->
                    <!-- ========================================== -->
                    ";
        // line 274
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 275
            yield "                        <!-- SECTION CATÉGORIES DE PLATS -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-utensils me-2 text-primary\"></i>Catégories de plats concernées
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les catégories de plats concernées par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-category-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 286), "vars", [], "any", false, false, false, 286), "prototype", [], "any", false, false, false, 286), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 287)), "html", null, true);
            yield "\">
                                    ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 288));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                // line 289
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 291
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 291), 'widget', ["attr" => ["class" => "form-select select2-category-recipe"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 298
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoCategoryRecipe"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-category-recipes-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PLATS -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-hamburger me-2 text-primary\"></i>Plats concernés
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les plats spécifiques concernés par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionRecipes", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "prototype", [], "any", false, false, false, 319), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionRecipes", [], "any", false, false, false, 320)), "html", null, true);
            yield "\">
                                    ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionRecipes", [], "any", false, false, false, 321));
            foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                // line 322
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 324
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 324), 'widget', ["attr" => ["class" => "form-select select2-recipe"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 331
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoRecipe"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-recipes-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter un plat
                                </button>
                            </div>
                        </div>
                    ";
        } else {
            // line 341
            yield "                        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-folder-tree me-2 text-primary\"></i>Catégories concernées
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les catégories de produits concernées par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-categories-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategories", [], "any", false, false, false, 352), "vars", [], "any", false, false, false, 352), "prototype", [], "any", false, false, false, 352), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategories", [], "any", false, false, false, 353)), "html", null, true);
            yield "\">
                                    ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategories", [], "any", false, false, false, 354));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategory"]) {
                // line 355
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 357
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoCategory"], "category", [], "any", false, false, false, 357), 'widget', ["attr" => ["class" => "form-select select2-category"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 364
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoCategory"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategory'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 367
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-categories-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits concernés
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les produits spécifiques concernés par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-products-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionProducts", [], "any", false, false, false, 385), "vars", [], "any", false, false, false, 385), "prototype", [], "any", false, false, false, 385), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionProducts", [], "any", false, false, false, 386)), "html", null, true);
            yield "\">
                                    ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionProducts", [], "any", false, false, false, 387));
            foreach ($context['_seq'] as $context["_key"] => $context["promoProduct"]) {
                // line 388
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 390
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoProduct"], "product", [], "any", false, false, false, 390), 'widget', ["attr" => ["class" => "form-select select2-product"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 397
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoProduct"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoProduct'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-products-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter un produit
                                </button>
                            </div>
                        </div>
                    ";
        }
        // line 407
        yield "                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 412
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                ";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer la promotion")) : ("Enregistrer la promotion")), "html", null, true);
        yield "
                            </button>
                            ";
        // line 420
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 420) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 420)))) {
            // line 421
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 421)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                    <i class=\"fas fa-eye me-2\"></i> Voir
                                </a>
                            ";
        }
        // line 425
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 432
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>

<!-- Modal de confirmation pour suppression d'élément de collection -->
<div class=\"modal fade\" id=\"confirmRemoveModal\" tabindex=\"-1\" aria-hidden=\"true\">
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
                <h5>Êtes-vous sûr de vouloir supprimer cet élément ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
                <div class=\"alert alert-warning mt-2\" id=\"itemToRemoveInfo\">
                    <span id=\"itemToRemoveName\"></span>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmRemoveItemBtn\">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour supprimer l'image -->
";
        // line 462
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 462) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 462))) && CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 462))) {
            // line 463
            yield "<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 479))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 480), "html", null, true);
            yield "\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 489)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 490))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer l'image
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 500
        yield "
";
        // line 501
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 742
        yield "
";
        // line 743
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        yield from [];
    }

    // line 501
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 502
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewPromoImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.promo-preview') || 
                       document.querySelector('.promo-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('promo-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg promo-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Variable globale pour stocker l'élément à supprimer
let pendingRemoveItem = null;

document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 ==========
    if (typeof \$ !== 'undefined') {
        \$('.select2-category, .select2-product, .select2-category-recipe, .select2-recipe').each(function() {
            \$(this).select2({
                theme: 'bootstrap-5',
                placeholder: 'Rechercher...',
                allowClear: true,
                width: '100%',
                language: {
                    noResults: function() { return 'Aucun résultat trouvé'; }
                }
            });
        });
    }

    // ========== GESTION DU SWITCH DE STATUT ==========
    const activeSwitch = document.getElementById('";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 546), "vars", [], "any", false, false, false, 546), "id", [], "any", false, false, false, 546), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Promotion active' : 'Promotion inactive';
        });
    }

    // ========== GESTION DYNAMIQUE DU CHAMP VALEUR ==========
    const typeSelect = document.getElementById('";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 560), "vars", [], "any", false, false, false, 560), "id", [], "any", false, false, false, 560), "html", null, true);
        yield "');
    const valueInput = document.getElementById('";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 561), "vars", [], "any", false, false, false, 561), "id", [], "any", false, false, false, 561), "html", null, true);
        yield "');
    const valueLabel = document.querySelector('label[for=\"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 562), "vars", [], "any", false, false, false, 562), "id", [], "any", false, false, false, 562), "html", null, true);
        yield "\"]');

    if (typeSelect && valueInput && valueLabel) {
        function updateValuePlaceholder() {
            const selectedText = typeSelect.options[typeSelect.selectedIndex]?.text;
            const isPercentage = selectedText === 'Pourcentage';
            valueInput.placeholder = isPercentage ? 'Ex: 20' : 'Ex: 5000';
            const suffix = isPercentage ? '%' : ' (FCFA)';
            valueLabel.innerHTML = `<i class=\"fas fa-calculator me-1\"></i> Valeur de réduction * \${suffix}`;
        }
        typeSelect.addEventListener('change', updateValuePlaceholder);
        updateValuePlaceholder();
    }

    // ========== GESTION DES COLLECTIONS ==========
    
    // Fonction pour initialiser Select2 sur un élément
    function initSelect2OnElement(element) {
        if (typeof \$ !== 'undefined') {
            const select = element.querySelector('select');
            if (select && !\$(select).data('select2')) {
                \$(select).select2({
                    theme: 'bootstrap-5',
                    placeholder: 'Rechercher...',
                    allowClear: true,
                    width: '100%'
                });
            }
        }
    }
    
    // Fonction pour attacher l'événement de suppression à un bouton
    function attachRemoveEvent(button) {
        // Supprimer l'ancien événement pour éviter les doublons
        button.removeEventListener('click', handleRemoveClick);
        button.addEventListener('click', handleRemoveClick);
    }
    
    // Gestionnaire de clic pour suppression avec modal
    function handleRemoveClick(e) {
        e.preventDefault();
        e.stopPropagation();
        const button = e.currentTarget;
        const item = button.closest('.collection-item');
        
        if (item) {
            // Récupérer le nom de l'élément à supprimer (peut être vide)
            const select = item.querySelector('select');
            let itemName = '';
            if (select && select.options && select.options[select.selectedIndex]) {
                const selectedOption = select.options[select.selectedIndex];
                if (selectedOption.value && selectedOption.text) {
                    itemName = selectedOption.text;
                }
            }
            
            // Si aucun élément sélectionné, afficher un message générique
            if (!itemName) {
                itemName = 'ce bloc vide';
            }
            
            const itemToRemoveNameSpan = document.getElementById('itemToRemoveName');
            if (itemToRemoveNameSpan) {
                itemToRemoveNameSpan.innerHTML = `<strong>\${escapeHtml(itemName)}</strong> sera supprimé(e) de la liste.`;
            }
            
            pendingRemoveItem = item;
            const modal = new bootstrap.Modal(document.getElementById('confirmRemoveModal'));
            modal.show();
        }
    }
    
    // Fonction pour créer un nouvel élément de collection
    function createCollectionItem(prototype, index) {
        const div = document.createElement('div');
        div.className = 'collection-item row g-2 mb-2';
        let html = prototype.replace(/__name__/g, index);
        
        // Ajouter la structure HTML correcte
        // Chercher où placer le bouton supprimer
        if (html.includes('select')) {
            // Remplacer la structure existante
            html = html.replace(/<div class=\"col-md-10\">/, '<div class=\"col-md-10\">');
            html = html.replace(/<\\/div>\\s*\$/, '');
            html += '</div><div class=\"col-md-2\"><button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\"><i class=\"fas fa-trash\"></i></button></div>';
        }
        
        div.innerHTML = html;
        return div;
    }
    
    // Fonction pour ajouter un élément à une collection
    function addCollectionItem(collectionId) {
        const collection = document.getElementById(collectionId);
        if (!collection) return;
        
        const prototype = collection.dataset.prototype;
        let index = parseInt(collection.dataset.index);
        
        // Créer le nouvel élément
        const newItem = createCollectionItem(prototype, index);
        
        // Ajouter à la collection
        collection.appendChild(newItem);
        collection.dataset.index = index + 1;
        
        // Initialiser Select2 sur le nouveau select
        initSelect2OnElement(newItem);
        
        // Attacher l'événement de suppression sur le nouveau bouton
        const removeBtn = newItem.querySelector('.remove-collection-item');
        if (removeBtn) {
            attachRemoveEvent(removeBtn);
        }
    }
    
    // Gestionnaire de clic pour ajout
    function handleAddCollection(e) {
        const button = e.currentTarget;
        const collectionId = button.dataset.collection;
        if (collectionId) {
            addCollectionItem(collectionId);
        }
    }
    
    // Attacher les événements d'ajout
    document.querySelectorAll('.add-collection-item').forEach(button => {
        button.removeEventListener('click', handleAddCollection);
        button.addEventListener('click', handleAddCollection);
    });
    
    // Attacher les événements de suppression sur les éléments existants (pour l'édition)
    document.querySelectorAll('.remove-collection-item').forEach(button => {
        attachRemoveEvent(button);
    });
    
    // Confirmation de suppression
    const confirmRemoveBtn = document.getElementById('confirmRemoveItemBtn');
    if (confirmRemoveBtn) {
        confirmRemoveBtn.removeEventListener('click', handleConfirmRemove);
        confirmRemoveBtn.addEventListener('click', handleConfirmRemove);
    }
    
    function handleConfirmRemove() {
        if (pendingRemoveItem) {
            pendingRemoveItem.remove();
            pendingRemoveItem = null;
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmRemoveModal'));
            if (modal) modal.hide();
        }
    }
    
    // Nettoyer pendingRemoveItem quand le modal est fermé
    const confirmModal = document.getElementById('confirmRemoveModal');
    if (confirmModal) {
        confirmModal.addEventListener('hidden.bs.modal', function() {
            pendingRemoveItem = null;
        });
    }

    // ========== VALIDATION BOOTSTRAP ==========
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}
</script>
";
        yield from [];
    }

    // line 743
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 744
        yield "<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.card-hover {
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 10px !important;
    min-height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
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
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
}
.promo-preview {
    transition: all 0.3s ease;
}
.promo-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.collection-item {
    background: #f8f9fa;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
}
.bg-light {
    background-color: #f8f9fa !important;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/promotion/_form.html.twig";
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
        return array (  1086 => 744,  1079 => 743,  894 => 562,  890 => 561,  886 => 560,  869 => 546,  823 => 502,  816 => 501,  811 => 743,  808 => 742,  806 => 501,  803 => 500,  790 => 490,  786 => 489,  774 => 480,  770 => 479,  752 => 463,  750 => 462,  717 => 432,  708 => 425,  700 => 421,  698 => 420,  693 => 418,  684 => 412,  677 => 407,  668 => 400,  659 => 397,  649 => 390,  645 => 388,  641 => 387,  637 => 386,  633 => 385,  613 => 367,  604 => 364,  594 => 357,  590 => 355,  586 => 354,  582 => 353,  578 => 352,  565 => 341,  556 => 334,  547 => 331,  537 => 324,  533 => 322,  529 => 321,  525 => 320,  521 => 319,  501 => 301,  492 => 298,  482 => 291,  478 => 289,  474 => 288,  470 => 287,  466 => 286,  453 => 275,  451 => 274,  431 => 261,  414 => 251,  397 => 247,  382 => 239,  371 => 235,  338 => 205,  334 => 204,  331 => 203,  329 => 200,  322 => 196,  318 => 195,  299 => 179,  292 => 175,  289 => 174,  287 => 171,  278 => 165,  271 => 161,  268 => 160,  266 => 157,  254 => 148,  247 => 144,  244 => 143,  242 => 139,  233 => 133,  226 => 129,  223 => 128,  221 => 125,  209 => 116,  202 => 112,  199 => 111,  197 => 107,  185 => 98,  178 => 94,  175 => 93,  173 => 89,  164 => 82,  160 => 80,  156 => 78,  154 => 77,  137 => 63,  132 => 61,  124 => 56,  116 => 50,  114 => 46,  108 => 42,  101 => 37,  97 => 35,  86 => 26,  84 => 25,  78 => 22,  74 => 21,  71 => 20,  69 => 19,  53 => 6,  49 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\_form.html.twig");
    }
}
