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
class __TwigTemplate_a0198bbe57f8401ccde3620e64cb02d1 extends Template
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
<div class=\"container-fluid px-2 px-md-4\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

    <div class=\"row g-2 g-md-4\">
        <!-- Carte Image - 100% sur mobile, 4 sur desktop -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-image me-2\"></i>Image de la promotion
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column p-2 p-md-4\">
                    <div class=\"promo-image-preview mb-3 mb-md-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                            <div class=\"position-relative mx-auto\" style=\"width: 150px; height: 150px;\">
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
                                            style=\"bottom: 5px; right: 5px; width: 30px; height: 30px; font-size:0.7rem; padding:0;\"
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
                                 style=\"width: 150px; height: 150px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-tag fa-4x\"></i>
                            </div>
                        ";
        }
        // line 42
        yield "                    </div>

                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-sm", "onchange" => "previewPromoImage(this)", "accept" => "image/*", "style" => "font-size:0.7rem; padding:0.2rem 0.4rem;"]]);
        // line 51
        yield "
                            <div class=\"form-text mt-1 small\" style=\"font-size:0.6rem;\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats : JPG, PNG, GIF, WebP. Max : 5M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 57), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"mt-2\">
                            <label for=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        yield "\" class=\"btn btn-outline-primary btn-sm w-100\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                ";
        // line 64
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer") : ("Choisir une image"));
        yield "
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la promotion - 100% sur mobile, 8 sur desktop -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-percent me-2\"></i>
                        ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 78)))) {
            // line 79
            yield "                            Modifier la promotion
                        ";
        } else {
            // line 81
            yield "                            Nouvelle promotion
                        ";
        }
        // line 83
        yield "                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-4\">
                    <!-- Informations de base -->
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-12 col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "style" => "font-size:0.85rem;"]]);
        // line 95
        yield "
                                <label for=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
        yield "\" style=\"font-size:0.85rem;\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la promotion *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 100), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12 col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 80px; min-height:80px; font-size:0.85rem;"]]);
        // line 113
        yield "
                                <label for=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114), "html", null, true);
        yield "\" style=\"font-size:0.85rem;\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 118), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12 col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-select", "placeholder" => " ", "style" => "font-size:0.85rem;"]]);
        // line 131
        yield "
                                <label for=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        yield "\" style=\"font-size:0.85rem;\">
                                    <i class=\"fas fa-layer-group me-1\"></i> Type de promotion *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 136), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "style" => "font-size:0.85rem;"]]);
        // line 147
        yield "
                                <label for=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
        yield "\" style=\"font-size:0.85rem;\">
                                    <i class=\"fas fa-calculator me-1\"></i> Valeur de réduction *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 152), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12 col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "font-size:0.85rem;"]]);
        // line 165
        yield "
                                <label for=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "id", [], "any", false, false, false, 166), "html", null, true);
        yield "\" style=\"font-size:0.85rem;\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de début *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 170), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "font-size:0.85rem;"]]);
        // line 180
        yield "
                                <label for=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181), "html", null, true);
        yield "\" style=\"font-size:0.85rem;\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de fin
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 185), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class=\"my-3 my-md-4\">

                    <!-- Statut -->
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body p-2 p-md-3\">
                            <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between mb-2 gap-2\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                    <span class=\"fw-bold small\">Statut de la promotion</span>
                                </div>
                                <span class=\"badge ";
        // line 201
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 201), "vars", [], "any", false, false, false, 201), "data", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " px-3 py-2\" id=\"status-badge\" style=\"font-size:0.7rem;\">
                                    ";
        // line 202
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "data", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 206), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 209
        yield "
                                <label class=\"form-check-label small\" for=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "id", [], "any", false, false, false, 210), "html", null, true);
        yield "\" id=\"status-label\">
                                    ";
        // line 211
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 211), "vars", [], "any", false, false, false, 211), "data", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Promotion active") : ("Promotion inactive"));
        yield "
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.6rem;\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les promotions inactives ne seront pas appliquées
                            </small>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTION EXPLICATION PERMANENTE -->
                    <!-- ========================================== -->
                    <div class=\"card border-0 bg-info bg-opacity-10 mt-3 mt-md-4\">
                        <div class=\"card-body p-2 p-md-4\">
                            <div class=\"d-flex flex-column flex-md-row\">
                                <div class=\"flex-shrink-0 text-center text-md-start mb-2 mb-md-0\">
                                    <div class=\"rounded-circle bg-white bg-opacity-25 p-2 p-md-3 d-inline-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                        <i class=\"fas fa-info-circle fa-lg text-white\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1 ms-md-3\">
                                    <h6 class=\"fw-bold mb-2 text-white fs-6 fs-md-5\">
                                        <i class=\"fas fa-question-circle text-white me-2\"></i>Comment s'applique cette promotion ?
                                    </h6>
                                    <div class=\"row g-1 g-md-2\">
                                        <div class=\"col-12 col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-1\">
                                                    <span class=\"badge bg-secondary me-1 px-2 py-1\" style=\"font-size:0.5rem;\">Cas 1</span>
                                                    <span class=\"text-white\" style=\"font-size:0.65rem;\">Aucune sélection → <strong class=\"text-white\">TOUS</strong></span>
                                                </li>
                                                <li class=\"mb-1\">
                                                    <span class=\"badge bg-success me-1 px-2 py-1\" style=\"font-size:0.5rem;\">Cas 2</span>
                                                    <span class=\"text-white\" style=\"font-size:0.65rem;\">Catégories uniquement → <strong class=\"text-white\">tous</strong> ces catégories</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-12 col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-1\">
                                                    <span class=\"badge bg-primary me-1 px-2 py-1\" style=\"font-size:0.5rem;\">Cas 3</span>
                                                    <span class=\"text-white\" style=\"font-size:0.65rem;\">Produits uniquement → <strong class=\"text-white\">ces produits</strong></span>
                                                </li>
                                                <li class=\"mb-1\">
                                                    <span class=\"badge bg-warning text-dark me-1 px-2 py-1\" style=\"font-size:0.5rem;\">Cas 4</span>
                                                    <span class=\"text-white\" style=\"font-size:0.65rem;\">Catégories + Produits → <strong class=\"text-white\">l'ensemble</strong></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"mt-2 pt-2 border-top border-white border-opacity-25\">
                                        <div class=\"d-flex align-items-start\">
                                            <i class=\"fas fa-lightbulb text-warning me-2 mt-1\" style=\"font-size:0.7rem;\"></i>
                                            <span class=\"small text-white\" style=\"font-size:0.6rem;\">
                                                <strong class=\"text-warning\">Astuce :</strong> 
                                                Si un produit est déjà inclus via une catégorie, 
                                                <strong class=\"text-white\">il n'est pas dupliqué</strong>.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTIONS DES ASSOCIATIONS -->
                    <!-- ========================================== -->
                    ";
        // line 280
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 281
            yield "                        <!-- SECTION CATÉGORIES DE PLATS -->
                        <div class=\"card border-0 bg-light mt-3 mt-md-4\">
                            <div class=\"card-header bg-white border-0 py-2\">
                                <h5 class=\"mb-0 fs-6 fs-md-5\">
                                    <i class=\"fas fa-utensils me-2 text-primary\"></i>Catégories de plats concernées
                                </h5>
                                <p class=\"text-muted small mb-0\" style=\"font-size:0.65rem;\">Sélectionnez les catégories de plats concernées (optionnel)</p>
                            </div>
                            <div class=\"card-body p-2 p-md-3\">
                                <div id=\"promotion-category-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 292), "vars", [], "any", false, false, false, 292), "prototype", [], "any", false, false, false, 292), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 293)), "html", null, true);
            yield "\">
                                    ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 294));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                // line 295
                yield "                                        <div class=\"collection-item row g-1 g-md-2 mb-2 p-2\">
                                            <div class=\"col-10 col-md-10\">
                                                ";
                // line 297
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 297), 'widget', ["attr" => ["class" => "form-select form-select-sm select2-category-recipe", "style" => "font-size:0.7rem;"]]);
                yield "
                                            </div>
                                            <div class=\"col-2 col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger btn-sm remove-collection-item w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 304
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoCategoryRecipe"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary btn-sm mt-2 add-collection-item\" data-collection=\"promotion-category-recipes-collection\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                                    <i class=\"fas fa-plus-circle me-1\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PLATS -->
                        <div class=\"card border-0 bg-light mt-3 mt-md-4\">
                            <div class=\"card-header bg-white border-0 py-2\">
                                <h5 class=\"mb-0 fs-6 fs-md-5\">
                                    <i class=\"fas fa-hamburger me-2 text-primary\"></i>Plats concernés
                                </h5>
                                <p class=\"text-muted small mb-0\" style=\"font-size:0.65rem;\">Sélectionnez les plats spécifiques concernés (optionnel)</p>
                            </div>
                            <div class=\"card-body p-2 p-md-3\">
                                <div id=\"promotion-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionRecipes", [], "any", false, false, false, 325), "vars", [], "any", false, false, false, 325), "prototype", [], "any", false, false, false, 325), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionRecipes", [], "any", false, false, false, 326)), "html", null, true);
            yield "\">
                                    ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionRecipes", [], "any", false, false, false, 327));
            foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                // line 328
                yield "                                        <div class=\"collection-item row g-1 g-md-2 mb-2 p-2\">
                                            <div class=\"col-10 col-md-10\">
                                                ";
                // line 330
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 330), 'widget', ["attr" => ["class" => "form-select form-select-sm select2-recipe", "style" => "font-size:0.7rem;"]]);
                yield "
                                            </div>
                                            <div class=\"col-2 col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger btn-sm remove-collection-item w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 337
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoRecipe"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary btn-sm mt-2 add-collection-item\" data-collection=\"promotion-recipes-collection\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                                    <i class=\"fas fa-plus-circle me-1\"></i>Ajouter un plat
                                </button>
                            </div>
                        </div>
                    ";
        } else {
            // line 347
            yield "                        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-3 mt-md-4\">
                            <div class=\"card-header bg-white border-0 py-2\">
                                <h5 class=\"mb-0 fs-6 fs-md-5\">
                                    <i class=\"fas fa-folder-tree me-2 text-primary\"></i>Catégories concernées
                                </h5>
                                <p class=\"text-muted small mb-0\" style=\"font-size:0.65rem;\">Sélectionnez les catégories de produits concernées (optionnel)</p>
                            </div>
                            <div class=\"card-body p-2 p-md-3\">
                                <div id=\"promotion-categories-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategories", [], "any", false, false, false, 358), "vars", [], "any", false, false, false, 358), "prototype", [], "any", false, false, false, 358), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategories", [], "any", false, false, false, 359)), "html", null, true);
            yield "\">
                                    ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCategories", [], "any", false, false, false, 360));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategory"]) {
                // line 361
                yield "                                        <div class=\"collection-item row g-1 g-md-2 mb-2 p-2\">
                                            <div class=\"col-10 col-md-10\">
                                                ";
                // line 363
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoCategory"], "category", [], "any", false, false, false, 363), 'widget', ["attr" => ["class" => "form-select form-select-sm select2-category", "style" => "font-size:0.7rem;"]]);
                yield "
                                            </div>
                                            <div class=\"col-2 col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger btn-sm remove-collection-item w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 370
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoCategory"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategory'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary btn-sm mt-2 add-collection-item\" data-collection=\"promotion-categories-collection\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                                    <i class=\"fas fa-plus-circle me-1\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-3 mt-md-4\">
                            <div class=\"card-header bg-white border-0 py-2\">
                                <h5 class=\"mb-0 fs-6 fs-md-5\">
                                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits concernés
                                </h5>
                                <p class=\"text-muted small mb-0\" style=\"font-size:0.65rem;\">Sélectionnez les produits spécifiques concernés (optionnel)</p>
                            </div>
                            <div class=\"card-body p-2 p-md-3\">
                                <div id=\"promotion-products-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionProducts", [], "any", false, false, false, 391), "vars", [], "any", false, false, false, 391), "prototype", [], "any", false, false, false, 391), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionProducts", [], "any", false, false, false, 392)), "html", null, true);
            yield "\">
                                    ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionProducts", [], "any", false, false, false, 393));
            foreach ($context['_seq'] as $context["_key"] => $context["promoProduct"]) {
                // line 394
                yield "                                        <div class=\"collection-item row g-1 g-md-2 mb-2 p-2\">
                                            <div class=\"col-10 col-md-10\">
                                                ";
                // line 396
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoProduct"], "product", [], "any", false, false, false, 396), 'widget', ["attr" => ["class" => "form-select form-select-sm select2-product", "style" => "font-size:0.7rem;"]]);
                yield "
                                            </div>
                                            <div class=\"col-2 col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger btn-sm remove-collection-item w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 403
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoProduct"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoProduct'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary btn-sm mt-2 add-collection-item\" data-collection=\"promotion-products-collection\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                                    <i class=\"fas fa-plus-circle me-1\"></i>Ajouter un produit
                                </button>
                            </div>
                        </div>
                    ";
        }
        // line 413
        yield "                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-2 py-md-3\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2\">
                        <a href=\"";
        // line 418
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <div class=\"d-flex gap-1 gap-md-2 w-100 w-sm-auto\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                                <i class=\"fas fa-save me-1\"></i>
                                ";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                            </button>
                            ";
        // line 426
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 426) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 426)))) {
            // line 427
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 427)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm flex-grow-1\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir
                                </a>
                            ";
        }
        // line 431
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 438
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>

<!-- Modal de confirmation pour suppression d'élément de collection -->
<div class=\"modal fade\" id=\"confirmRemoveModal\" tabindex=\"-1\" aria-hidden=\"true\">
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
                <h6 class=\"fs-6\">Supprimer cet élément ?</h6>
                <p class=\"text-muted small\">Cette action est irréversible.</p>
                <div class=\"alert alert-warning mt-2 p-2 small\" id=\"itemToRemoveInfo\">
                    <span id=\"itemToRemoveName\"></span>
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"confirmRemoveItemBtn\">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour supprimer l'image -->
";
        // line 468
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 468) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 468))) && CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 468))) {
            // line 469
            yield "<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0 py-2\">
                <h5 class=\"modal-title text-danger fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3\">
                <div class=\"mb-3\">
                    <i class=\"fas fa-trash-alt fa-3x text-danger mb-2\"></i>
                    <h6 class=\"fs-6\">Supprimer cette image ?</h6>
                    <p class=\"text-muted small\">Cette action est irréversible.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 485))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 486), "html", null, true);
            yield "\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>
                <form action=\"";
            // line 495
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 495)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 496))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 506
        yield "
";
        // line 507
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 726
        yield "
";
        // line 727
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        yield from [];
    }

    // line 507
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 508
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
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 5px solid #f8f9fa;';
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
                dropdownAutoWidth: true,
                language: {
                    noResults: function() { return 'Aucun résultat trouvé'; }
                }
            });
        });
    }

    // ========== GESTION DU SWITCH DE STATUT ==========
    const activeSwitch = document.getElementById('";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 553), "vars", [], "any", false, false, false, 553), "id", [], "any", false, false, false, 553), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success px-3 py-2' : 'badge bg-danger px-3 py-2';
            statusBadge.style.fontSize = '0.7rem';
            statusLabel.textContent = isActive ? 'Promotion active' : 'Promotion inactive';
        });
    }

    // ========== GESTION DYNAMIQUE DU CHAMP VALEUR ==========
    const typeSelect = document.getElementById('";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typePromotion", [], "any", false, false, false, 568), "vars", [], "any", false, false, false, 568), "id", [], "any", false, false, false, 568), "html", null, true);
        yield "');
    const valueInput = document.getElementById('";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 569), "vars", [], "any", false, false, false, 569), "id", [], "any", false, false, false, 569), "html", null, true);
        yield "');
    const valueLabel = document.querySelector('label[for=\"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 570), "vars", [], "any", false, false, false, 570), "id", [], "any", false, false, false, 570), "html", null, true);
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
    
    function initSelect2OnElement(element) {
        if (typeof \$ !== 'undefined') {
            const select = element.querySelector('select');
            if (select && !\$(select).data('select2')) {
                \$(select).select2({
                    theme: 'bootstrap-5',
                    placeholder: 'Rechercher...',
                    allowClear: true,
                    width: '100%',
                    dropdownAutoWidth: true
                });
            }
        }
    }
    
    function attachRemoveEvent(button) {
        button.removeEventListener('click', handleRemoveClick);
        button.addEventListener('click', handleRemoveClick);
    }
    
    function handleRemoveClick(e) {
        e.preventDefault();
        e.stopPropagation();
        const button = e.currentTarget;
        const item = button.closest('.collection-item');
        
        if (item) {
            const select = item.querySelector('select');
            let itemName = '';
            if (select && select.options && select.options[select.selectedIndex]) {
                const selectedOption = select.options[select.selectedIndex];
                if (selectedOption.value && selectedOption.text) {
                    itemName = selectedOption.text;
                }
            }
            
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
    
    function createCollectionItem(prototype, index) {
        const div = document.createElement('div');
        div.className = 'collection-item row g-1 g-md-2 mb-2 p-2';
        let html = prototype.replace(/__name__/g, index);
        html = html.replace(/<div class=\"col-md-10\">/, '<div class=\"col-10 col-md-10\">');
        html = html.replace(/<\\/div>\\s*\$/, '');
        html += '</div><div class=\"col-2 col-md-2\"><button type=\"button\" class=\"btn btn-danger btn-sm remove-collection-item w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\"><i class=\"fas fa-trash\"></i></button></div>';
        div.innerHTML = html;
        return div;
    }
    
    function addCollectionItem(collectionId) {
        const collection = document.getElementById(collectionId);
        if (!collection) return;
        
        const prototype = collection.dataset.prototype;
        let index = parseInt(collection.dataset.index);
        
        const newItem = createCollectionItem(prototype, index);
        collection.appendChild(newItem);
        collection.dataset.index = index + 1;
        
        initSelect2OnElement(newItem);
        
        const removeBtn = newItem.querySelector('.remove-collection-item');
        if (removeBtn) {
            attachRemoveEvent(removeBtn);
        }
    }
    
    function handleAddCollection(e) {
        const button = e.currentTarget;
        const collectionId = button.dataset.collection;
        if (collectionId) {
            addCollectionItem(collectionId);
        }
    }
    
    document.querySelectorAll('.add-collection-item').forEach(button => {
        button.removeEventListener('click', handleAddCollection);
        button.addEventListener('click', handleAddCollection);
    });
    
    document.querySelectorAll('.remove-collection-item').forEach(button => {
        attachRemoveEvent(button);
    });
    
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

    // line 727
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 728
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
    font-size: 0.85rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
    padding: 1rem 0.75rem 0.5rem 2.5rem;
    border-radius: 10px;
    border: 2px solid #e0e0e0;
    font-size: 0.85rem;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 10px !important;
    min-height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
    font-size: 0.85rem;
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
    border-radius: 8px;
}
.bg-light {
    background-color: #f8f9fa !important;
}

/* ========================================
   RESPONSIVE - MOBILE (< 576px)
======================================== */
@media (max-width: 576px) {
    .card-hover:hover {
        transform: none !important;
    }
    
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-footer {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-floating > label {
        font-size: 0.7rem;
        padding-left: 2rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.75rem 0.5rem 0.35rem 2rem;
        font-size: 0.75rem;
        border-radius: 8px;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select:focus ~ label,
    .form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
        transform: scale(.8) translateY(-0.6rem) translateX(0.15rem);
    }
    
    .form-switch .form-check-input {
        width: 2.8em;
        height: 1.4em;
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.75rem 0.5rem 0.35rem 2rem;
        font-size: 0.75rem;
    }
    
    .btn {
        font-size: 0.7rem !important;
        padding: 0.2rem 0.4rem !important;
    }
    .btn i {
        font-size: 0.7rem !important;
    }
    
    .badge {
        font-size: 0.6rem !important;
        padding: 0.2rem 0.5rem !important;
    }
    
    .text-muted {
        font-size: 0.6rem !important;
    }
    
    .promo-preview {
        width: 120px !important;
        height: 120px !important;
    }
    .promo-placeholder {
        width: 120px !important;
        height: 120px !important;
    }
    .promo-placeholder i {
        font-size: 3rem !important;
    }
    
    .collection-item {
        padding: 0.5rem !important;
    }
    .collection-item .btn {
        font-size: 0.55rem !important;
        padding: 0.1rem 0.15rem !important;
    }
    
    .modal-dialog {
        margin: 0.5rem;
    }
    .modal-content {
        border-radius: 12px !important;
    }
    .modal-body {
        padding: 0.5rem !important;
    }
    .modal-footer {
        padding: 0.5rem !important;
        flex-wrap: wrap;
    }
    .modal-footer .btn {
        font-size: 0.7rem !important;
        padding: 0.2rem 0.5rem !important;
    }
    .modal-header {
        padding: 0.5rem 0.75rem !important;
    }
    .modal-title {
        font-size: 0.9rem !important;
    }
}

/* ========================================
   TABLETTE (576px - 768px)
======================================== */
@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1rem !important;
    }
    .card-header {
        padding: 0.75rem 1rem !important;
    }
    .card-footer {
        padding: 0.75rem 1rem !important;
    }
    
    .form-floating > label {
        font-size: 0.8rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        font-size: 0.8rem;
    }
    
    .btn {
        font-size: 0.75rem !important;
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
        return array (  1023 => 728,  1016 => 727,  855 => 570,  851 => 569,  847 => 568,  829 => 553,  782 => 508,  775 => 507,  770 => 727,  767 => 726,  765 => 507,  762 => 506,  749 => 496,  745 => 495,  733 => 486,  729 => 485,  711 => 469,  709 => 468,  676 => 438,  667 => 431,  659 => 427,  657 => 426,  652 => 424,  643 => 418,  636 => 413,  627 => 406,  618 => 403,  608 => 396,  604 => 394,  600 => 393,  596 => 392,  592 => 391,  572 => 373,  563 => 370,  553 => 363,  549 => 361,  545 => 360,  541 => 359,  537 => 358,  524 => 347,  515 => 340,  506 => 337,  496 => 330,  492 => 328,  488 => 327,  484 => 326,  480 => 325,  460 => 307,  451 => 304,  441 => 297,  437 => 295,  433 => 294,  429 => 293,  425 => 292,  412 => 281,  410 => 280,  338 => 211,  334 => 210,  331 => 209,  329 => 206,  322 => 202,  318 => 201,  299 => 185,  292 => 181,  289 => 180,  287 => 176,  278 => 170,  271 => 166,  268 => 165,  266 => 161,  254 => 152,  247 => 148,  244 => 147,  242 => 142,  233 => 136,  226 => 132,  223 => 131,  221 => 127,  209 => 118,  202 => 114,  199 => 113,  197 => 109,  185 => 100,  178 => 96,  175 => 95,  173 => 90,  164 => 83,  160 => 81,  156 => 79,  154 => 78,  137 => 64,  132 => 62,  124 => 57,  116 => 51,  114 => 46,  108 => 42,  101 => 37,  97 => 35,  86 => 26,  84 => 25,  78 => 22,  74 => 21,  71 => 20,  69 => 19,  53 => 6,  49 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\_form.html.twig");
    }
}
