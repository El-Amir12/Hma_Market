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

/* admin/category/_form.html.twig */
class __TwigTemplate_ac816feeb944828c12e83bd9c145a464 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 4
        yield "
<div class=\"container-fluid px-2 px-md-4\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

    <div class=\"row g-3 g-md-4\">
        <!-- Carte Image -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-image me-2\"></i>Image de la catégorie
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column p-3 p-md-4\">
                    <!-- Preview de l'image -->
                    <div class=\"category-image-preview mb-3 mb-md-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                            <div class=\"position-relative mx-auto\" style=\"width: 150px; height: 150px;\">
                                <img src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22))), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            yield "\"
                                     class=\"img-fluid rounded shadow-lg profile-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 4px solid #f8f9fa;\">
                                ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)))) {
                // line 27
                yield "                                    <button type=\"button\"
                                            class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                            style=\"bottom: 5px; right: 5px; width: 30px; height: 30px;\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"#deleteImageModal\"
                                            title=\"Supprimer l'image\">
                                        <i class=\"fas fa-trash\" style=\"font-size: 0.7rem;\"></i>
                                    </button>
                                ";
            }
            // line 36
            yield "                            </div>
                        ";
        } else {
            // line 38
            yield "                            <div class=\"category-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 150px; height: 150px; border: 4px solid #f8f9fa;\">
                                <i class=\"fas fa-folder fa-4x\"></i>
                            </div>
                        ";
        }
        // line 43
        yield "                    </div>

                    <!-- Champ de téléchargement d'image -->
                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control form-control-sm", "onchange" => "previewCategoryImage(this)", "accept" => "image/*"]]);
        // line 52
        yield "
                            <div class=\"form-text mt-1 small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                JPG, PNG, GIF, WebP. Max 2M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- Bouton de sélection stylé -->
                        <div class=\"mt-2\">
                            <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100 btn-sm\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                ";
        // line 66
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 66, $this->source); })()), "image", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer") : ("Choisir"));
        yield "
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la catégorie -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-folder-edit me-2\"></i>
                        ";
        // line 80
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)))) {
            // line 81
            yield "                            Modifier la catégorie
                        ";
        } else {
            // line 83
            yield "                            Nouvelle catégorie
                        ";
        }
        // line 85
        yield "                    </h5>
                </div>
                <div class=\"card-body p-3 p-md-4\">
                    <!-- Nom -->
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 96
        yield "
                                <label for=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 115
        yield "
                                <label for=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "description", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "description", [], "any", false, false, false, 120), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Catégorie parente -->
                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "parent", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "form-select select2-category", "placeholder" => " "]]);
        // line 133
        yield "
                                <label for=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "parent", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "parent", [], "any", false, false, false, 138), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"form-text mt-1 small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Laissez vide pour créer une catégorie principale
                            </div>
                        </div>
                    </div>

                    <hr class=\"my-3 my-md-4\">

                    <div class=\"row g-2 g-md-3\">
                        <!-- Statut -->
                        <div class=\"col-12 col-md-6\">
                            <div class=\"card border-0 bg-light h-100\">
                                <div class=\"card-body p-3 p-md-4\">
                                    <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                            <span class=\"fw-bold small\">Statut de la catégorie</span>
                                        </div>
                                        <span class=\"badge ";
        // line 160
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "is_active", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "data", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                            ";
        // line 161
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "is_active", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "data", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "is_active", [], "any", false, false, false, 165), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 168
        yield "
                                        <label class=\"form-check-label small\" for=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "is_active", [], "any", false, false, false, 169), "vars", [], "any", false, false, false, 169), "id", [], "any", false, false, false, 169), "html", null, true);
        yield "\" id=\"status-label\">
                                            ";
        // line 170
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "is_active", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "data", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Catégorie active") : ("Catégorie inactive"));
        yield "
                                        </label>
                                    </div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Les catégories inactives ne seront pas visibles dans le catalogue.
                                    </small>
                                </div>
                            </div>
                        </div>

                        ";
        // line 181
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 181, $this->source); })()) == "pharmacy")) {
            // line 182
            yield "                        <div class=\"col-12 col-md-6\">
                            <div class=\"card border-0 bg-light h-100\">
                                <div class=\"card-body p-3 p-md-4\">
                                    <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-globe me-2 text-primary\"></i>
                                            <span class=\"fw-bold small\">Visibilité marketplace</span>
                                        </div>
                                        <span class=\"badge ";
            // line 190
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "company_public", [], "any", false, false, false, 190), "vars", [], "any", false, false, false, 190), "data", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\" id=\"visibility-badge\">
                                            ";
            // line 191
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "company_public", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "data", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("VISIBLE") : ("MASQUÉE"));
            yield "
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        ";
            // line 195
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "company_public", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 198
            yield "
                                        <label class=\"form-check-label small\" for=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "company_public", [], "any", false, false, false, 199), "vars", [], "any", false, false, false, 199), "id", [], "any", false, false, false, 199), "html", null, true);
            yield "\" id=\"visibility-label\">
                                            ";
            // line 200
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "company_public", [], "any", false, false, false, 200), "vars", [], "any", false, false, false, 200), "data", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Visible sur le marketplace") : ("Masquée sur le marketplace"));
            yield "
                                        </label>
                                    </div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Décochez pour masquer cette catégorie sur le marketplace
                                    </small>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 211
        yield "                    </div>
                </div>

                <!-- ============================================
                     FOOTER ACTIONS
                     ============================================ -->
                <div class=\"form-actions-footer\">
                    <div class=\"actions-left order-2 order-md-1\">
                        <a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                    </div>
                    <div class=\"actions-right order-1 order-md-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>
                            ";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 226, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                        </button>
                        ";
        // line 228
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 228) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 228, $this->source); })()), "id", [], "any", false, false, false, 228)))) {
            // line 229
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 229, $this->source); })()), "id", [], "any", false, false, false, 229)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 233
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 239
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), 'form_end');
        yield "
</div>

<!-- Modal suppression image -->
";
        // line 243
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 243) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 243, $this->source); })()), "id", [], "any", false, false, false, 243))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 243, $this->source); })()), "image", [], "any", false, false, false, 243))) {
            // line 244
            yield "<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <div class=\"mb-3 mb-md-4\">
                    <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                    <h5 class=\"fs-6\">Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted small\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 260, $this->source); })()), "image", [], "any", false, false, false, 260))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 261, $this->source); })()), "name", [], "any", false, false, false, 261), "html", null, true);
            yield "\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 270, $this->source); })()), "id", [], "any", false, false, false, 270)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/category/_form.html.twig";
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
        return array (  437 => 271,  433 => 270,  421 => 261,  417 => 260,  399 => 244,  397 => 243,  390 => 239,  382 => 233,  374 => 229,  372 => 228,  367 => 226,  357 => 219,  347 => 211,  333 => 200,  329 => 199,  326 => 198,  324 => 195,  317 => 191,  313 => 190,  303 => 182,  301 => 181,  287 => 170,  283 => 169,  280 => 168,  278 => 165,  271 => 161,  267 => 160,  242 => 138,  235 => 134,  232 => 133,  230 => 130,  217 => 120,  210 => 116,  207 => 115,  205 => 111,  192 => 101,  185 => 97,  182 => 96,  180 => 92,  171 => 85,  167 => 83,  163 => 81,  161 => 80,  144 => 66,  139 => 64,  130 => 58,  122 => 52,  120 => 48,  113 => 43,  106 => 38,  102 => 36,  91 => 27,  89 => 26,  83 => 23,  79 => 22,  76 => 21,  74 => 20,  57 => 6,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/_form.html.twig #}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

<div class=\"container-fluid px-2 px-md-4\">
    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

    <div class=\"row g-3 g-md-4\">
        <!-- Carte Image -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-image me-2\"></i>Image de la catégorie
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column p-3 p-md-4\">
                    <!-- Preview de l'image -->
                    <div class=\"category-image-preview mb-3 mb-md-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        {% if category.image %}
                            <div class=\"position-relative mx-auto\" style=\"width: 150px; height: 150px;\">
                                <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\"
                                     alt=\"{{ category.name }}\"
                                     class=\"img-fluid rounded shadow-lg profile-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 4px solid #f8f9fa;\">
                                {% if category.id is defined and category.id is not null %}
                                    <button type=\"button\"
                                            class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                            style=\"bottom: 5px; right: 5px; width: 30px; height: 30px;\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"#deleteImageModal\"
                                            title=\"Supprimer l'image\">
                                        <i class=\"fas fa-trash\" style=\"font-size: 0.7rem;\"></i>
                                    </button>
                                {% endif %}
                            </div>
                        {% else %}
                            <div class=\"category-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 150px; height: 150px; border: 4px solid #f8f9fa;\">
                                <i class=\"fas fa-folder fa-4x\"></i>
                            </div>
                        {% endif %}
                    </div>

                    <!-- Champ de téléchargement d'image -->
                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            {{ form_widget(form.image, {'attr': {
                                'class': 'form-control form-control-sm',
                                'onchange': 'previewCategoryImage(this)',
                                'accept': 'image/*'
                            }}) }}
                            <div class=\"form-text mt-1 small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                JPG, PNG, GIF, WebP. Max 2M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.image) }}
                            </div>
                        </div>

                        <!-- Bouton de sélection stylé -->
                        <div class=\"mt-2\">
                            <label for=\"{{ form.image.vars.id }}\" class=\"btn btn-outline-primary w-100 btn-sm\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                {{ category.image ? 'Changer' : 'Choisir' }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la catégorie -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-folder-edit me-2\"></i>
                        {% if category.id is defined and category.id is not null %}
                            Modifier la catégorie
                        {% else %}
                            Nouvelle catégorie
                        {% endif %}
                    </h5>
                </div>
                <div class=\"card-body p-3 p-md-4\">
                    <!-- Nom -->
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.name, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off'
                                }}) }}
                                <label for=\"{{ form.name.vars.id }}\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.name) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.description, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'style': 'height: 100px'
                                }}) }}
                                <label for=\"{{ form.description.vars.id }}\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Catégorie parente -->
                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.parent, {'attr': {
                                    'class': 'form-select select2-category',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.parent.vars.id }}\">
                                    <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.parent) }}
                                </div>
                            </div>
                            <div class=\"form-text mt-1 small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Laissez vide pour créer une catégorie principale
                            </div>
                        </div>
                    </div>

                    <hr class=\"my-3 my-md-4\">

                    <div class=\"row g-2 g-md-3\">
                        <!-- Statut -->
                        <div class=\"col-12 col-md-6\">
                            <div class=\"card border-0 bg-light h-100\">
                                <div class=\"card-body p-3 p-md-4\">
                                    <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                            <span class=\"fw-bold small\">Statut de la catégorie</span>
                                        </div>
                                        <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"status-badge\">
                                            {{ form.is_active.vars.data ? 'ACTIVE' : 'INACTIVE' }}
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        {{ form_widget(form.is_active, {'attr': {
                                            'class': 'form-check-input',
                                            'role': 'switch'
                                        }}) }}
                                        <label class=\"form-check-label small\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                            {{ form.is_active.vars.data ? 'Catégorie active' : 'Catégorie inactive' }}
                                        </label>
                                    </div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Les catégories inactives ne seront pas visibles dans le catalogue.
                                    </small>
                                </div>
                            </div>
                        </div>

                        {% if companyType == 'pharmacy' %}
                        <div class=\"col-12 col-md-6\">
                            <div class=\"card border-0 bg-light h-100\">
                                <div class=\"card-body p-3 p-md-4\">
                                    <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-globe me-2 text-primary\"></i>
                                            <span class=\"fw-bold small\">Visibilité marketplace</span>
                                        </div>
                                        <span class=\"badge {{ form.company_public.vars.data ? 'bg-success' : 'bg-secondary' }}\" id=\"visibility-badge\">
                                            {{ form.company_public.vars.data ? 'VISIBLE' : 'MASQUÉE' }}
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        {{ form_widget(form.company_public, {'attr': {
                                            'class': 'form-check-input',
                                            'role': 'switch'
                                        }}) }}
                                        <label class=\"form-check-label small\" for=\"{{ form.company_public.vars.id }}\" id=\"visibility-label\">
                                            {{ form.company_public.vars.data ? 'Visible sur le marketplace' : 'Masquée sur le marketplace' }}
                                        </label>
                                    </div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Décochez pour masquer cette catégorie sur le marketplace
                                    </small>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>

                <!-- ============================================
                     FOOTER ACTIONS
                     ============================================ -->
                <div class=\"form-actions-footer\">
                    <div class=\"actions-left order-2 order-md-1\">
                        <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                    </div>
                    <div class=\"actions-right order-1 order-md-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>
                            {{ button_label|default('Enregistrer') }}
                        </button>
                        {% if category.id is defined and category.id is not null %}
                            <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" class=\"btn btn-info\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

<!-- Modal suppression image -->
{% if category.id is defined and category.id is not null and category.image %}
<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <div class=\"mb-3 mb-md-4\">
                    <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                    <h5 class=\"fs-6\">Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted small\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\"
                         alt=\"{{ category.name }}\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_admin_category_delete_image', {'id': category.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-image' ~ category.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}", "admin/category/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\_form.html.twig");
    }
}
