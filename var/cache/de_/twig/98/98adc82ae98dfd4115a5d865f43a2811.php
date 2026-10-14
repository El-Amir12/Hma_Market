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
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
                    <!-- Informations de base -->
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

                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "description", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 114
        yield "
                                <label for=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "description", [], "any", false, false, false, 119), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "parent", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-select select2-category", "placeholder" => " "]]);
        // line 131
        yield "
                                <label for=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "parent", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "parent", [], "any", false, false, false, 136), 'errors');
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
        // line 158
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "is_active", [], "any", false, false, false, 158), "vars", [], "any", false, false, false, 158), "data", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                            ";
        // line 159
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "is_active", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "data", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "is_active", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 166
        yield "
                                        <label class=\"form-check-label small\" for=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "is_active", [], "any", false, false, false, 167), "vars", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167), "html", null, true);
        yield "\" id=\"status-label\">
                                            ";
        // line 168
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "is_active", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "data", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Catégorie active") : ("Catégorie inactive"));
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
        // line 180
        yield "                        ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 180, $this->source); })()) == "pharmacy")) {
            // line 181
            yield "                        <div class=\"col-12 col-md-6\">
                            <div class=\"card border-0 bg-light h-100\">
                                <div class=\"card-body p-3 p-md-4\">
                                    <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-globe me-2 text-primary\"></i>
                                            <span class=\"fw-bold small\">Visibilité marketplace</span>
                                        </div>
                                        <span class=\"badge ";
            // line 189
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "company_public", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "data", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\" id=\"visibility-badge\">
                                            ";
            // line 190
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "company_public", [], "any", false, false, false, 190), "vars", [], "any", false, false, false, 190), "data", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("VISIBLE") : ("MASQUÉE"));
            yield "
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        ";
            // line 194
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "company_public", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 197
            yield "
                                        <label class=\"form-check-label small\" for=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "company_public", [], "any", false, false, false, 198), "vars", [], "any", false, false, false, 198), "id", [], "any", false, false, false, 198), "html", null, true);
            yield "\" id=\"visibility-label\">
                                            ";
            // line 199
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "company_public", [], "any", false, false, false, 199), "vars", [], "any", false, false, false, 199), "data", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Visible sur le marketplace") : ("Masquée sur le marketplace"));
            yield "
                                        </label>
                                    </div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Décochez pour masquer cette catégorie sur le marketplace
                                    </small>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-eye-slash me-1\"></i>
                                        Elle restera visible dans votre back-office
                                    </small>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 214
        yield "                    </div>
                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-2 py-md-3\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 gap-sm-3\">
                        <a href=\"";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary w-100 w-sm-auto order-2 order-sm-1 btn-sm\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"d-flex gap-2 w-100 w-sm-auto order-1 order-sm-2\">
                            <button type=\"submit\" class=\"btn btn-primary flex-fill flex-sm-grow-0 btn-sm\">
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
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 229, $this->source); })()), "id", [], "any", false, false, false, 229)]), "html", null, true);
            yield "\" class=\"btn btn-info flex-fill flex-sm-grow-0 btn-sm\">
                                    <i class=\"fas fa-eye me-2\"></i> Voir
                                </a>
                            ";
        }
        // line 233
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 240
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), 'form_end');
        yield "
</div>

<!-- Modal pour supprimer l'image -->
";
        // line 244
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 244) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 244, $this->source); })()), "id", [], "any", false, false, false, 244))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 244, $this->source); })()), "image", [], "any", false, false, false, 244))) {
            // line 245
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
                    <i class=\"fas fa-trash-alt fa-3x fa-md-4 text-danger mb-3\"></i>
                    <h5 class=\"fs-6\">Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted small\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 261, $this->source); })()), "image", [], "any", false, false, false, 261))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 262, $this->source); })()), "name", [], "any", false, false, false, 262), "html", null, true);
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
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 272, $this->source); })()), "id", [], "any", false, false, false, 272))), "html", null, true);
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
        // line 282
        yield "
";
        // line 283
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 366
        yield "
";
        // line 367
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 283
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

        // line 284
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('category-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2 pour la catégorie parente
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Rechercher une catégorie parente...',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true,
            language: {
                noResults: function() { return 'Aucune catégorie trouvée'; }
            }
        });
    }

    // Gestion du statut (badge)
    const activeSwitch = document.getElementById('";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "is_active", [], "any", false, false, false, 325), "vars", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Catégorie active' : 'Catégorie inactive';
        });
    }

    ";
        // line 338
        yield "    ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 338, $this->source); })()) == "pharmacy")) {
            // line 339
            yield "    const visibilitySwitch = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "company_public", [], "any", false, false, false, 339), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339), "html", null, true);
            yield "');
    const visibilityBadge = document.getElementById('visibility-badge');
    const visibilityLabel = document.getElementById('visibility-label');
    if (visibilitySwitch && visibilityBadge && visibilityLabel) {
        visibilitySwitch.addEventListener('change', function() {
            const isVisible = this.checked;
            visibilityBadge.textContent = isVisible ? 'VISIBLE' : 'MASQUÉE';
            visibilityBadge.className = isVisible ? 'badge bg-success' : 'badge bg-secondary';
            visibilityLabel.textContent = isVisible ? 'Visible sur le marketplace' : 'Masquée sur le marketplace';
        });
    }
    ";
        }
        // line 351
        yield "
    // Validation Bootstrap
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
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 367
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

        // line 368
        yield "<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.card-hover {
    transition: all 0.3s ease;
    border-radius: 12px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12) !important;
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
    height: calc(3.2rem + 2px);
    line-height: 1.25;
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
    font-size: 0.9rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.7rem) translateX(0.15rem);
    color: #667eea;
    font-size: 0.75rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 8px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.2);
}
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 8px !important;
    min-height: calc(3.2rem + 2px);
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
    font-size: 0.9rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-switch .form-check-input {
    width: 2.8em;
    height: 1.5em;
    cursor: pointer;
    margin-top: 0.2rem;
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
}
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.bg-light {
    background-color: #f8f9fa !important;
}

/* ✅ RESPONSIVE */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    .card-body {
        padding: 0.75rem !important;
    }
    
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
        font-size: 0.85rem;
    }
    
    .form-floating > label {
        padding-left: 2rem;
        font-size: 0.8rem;
    }
    
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select:focus ~ label,
    .form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
        transform: scale(.85) translateY(-0.6rem) translateX(0.1rem);
        font-size: 0.7rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        font-size: 0.85rem;
    }
    
    .btn-sm {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
    }
    
    .profile-preview,
    .category-placeholder {
        width: 120px !important;
        height: 120px !important;
    }
    
    .category-placeholder i {
        font-size: 3rem !important;
    }
    
    .badge {
        font-size: 0.6rem;
        padding: 0.15rem 0.3rem;
    }
    
    .small {
        font-size: 0.7rem !important;
    }
    
    .modal .modal-body {
        padding: 0.75rem !important;
    }
    
    .modal .modal-footer {
        padding: 0.5rem !important;
    }
    
    .modal .modal-header {
        padding: 0.5rem 0.75rem !important;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1rem !important;
    }
    
    .profile-preview,
    .category-placeholder {
        width: 140px !important;
        height: 140px !important;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .btn-primary:hover {
        transform: none !important;
    }
    .profile-preview:hover {
        transform: none !important;
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
        return array (  600 => 368,  587 => 367,  562 => 351,  546 => 339,  543 => 338,  528 => 325,  485 => 284,  472 => 283,  461 => 367,  458 => 366,  456 => 283,  453 => 282,  440 => 272,  436 => 271,  424 => 262,  420 => 261,  402 => 245,  400 => 244,  393 => 240,  384 => 233,  376 => 229,  374 => 228,  369 => 226,  360 => 220,  352 => 214,  334 => 199,  330 => 198,  327 => 197,  325 => 194,  318 => 190,  314 => 189,  304 => 181,  301 => 180,  287 => 168,  283 => 167,  280 => 166,  278 => 163,  271 => 159,  267 => 158,  242 => 136,  235 => 132,  232 => 131,  230 => 128,  218 => 119,  211 => 115,  208 => 114,  206 => 110,  194 => 101,  187 => 97,  184 => 96,  182 => 92,  173 => 85,  169 => 83,  165 => 81,  163 => 80,  146 => 66,  141 => 64,  132 => 58,  124 => 52,  122 => 48,  115 => 43,  108 => 38,  104 => 36,  93 => 27,  91 => 26,  85 => 23,  81 => 22,  78 => 21,  76 => 20,  59 => 6,  55 => 4,  53 => 3,  50 => 2,);
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
                    <!-- Informations de base -->
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

                        {# ✅ AJOUT : Visibilité sur le marketplace (uniquement pour les pharmacies) #}
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
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-eye-slash me-1\"></i>
                                        Elle restera visible dans votre back-office
                                    </small>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-2 py-md-3\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 gap-sm-3\">
                        <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary w-100 w-sm-auto order-2 order-sm-1 btn-sm\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"d-flex gap-2 w-100 w-sm-auto order-1 order-sm-2\">
                            <button type=\"submit\" class=\"btn btn-primary flex-fill flex-sm-grow-0 btn-sm\">
                                <i class=\"fas fa-save me-2\"></i>
                                {{ button_label|default('Enregistrer') }}
                            </button>
                            {% if category.id is defined and category.id is not null %}
                                <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" class=\"btn btn-info flex-fill flex-sm-grow-0 btn-sm\">
                                    <i class=\"fas fa-eye me-2\"></i> Voir
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

<!-- Modal pour supprimer l'image -->
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
                    <i class=\"fas fa-trash-alt fa-3x fa-md-4 text-danger mb-3\"></i>
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
{% endif %}

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('category-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2 pour la catégorie parente
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Rechercher une catégorie parente...',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true,
            language: {
                noResults: function() { return 'Aucune catégorie trouvée'; }
            }
        });
    }

    // Gestion du statut (badge)
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Catégorie active' : 'Catégorie inactive';
        });
    }

    {# ✅ Gestion de la visibilité marketplace (pour les pharmacies) #}
    {% if companyType == 'pharmacy' %}
    const visibilitySwitch = document.getElementById('{{ form.company_public.vars.id }}');
    const visibilityBadge = document.getElementById('visibility-badge');
    const visibilityLabel = document.getElementById('visibility-label');
    if (visibilitySwitch && visibilityBadge && visibilityLabel) {
        visibilitySwitch.addEventListener('change', function() {
            const isVisible = this.checked;
            visibilityBadge.textContent = isVisible ? 'VISIBLE' : 'MASQUÉE';
            visibilityBadge.className = isVisible ? 'badge bg-success' : 'badge bg-secondary';
            visibilityLabel.textContent = isVisible ? 'Visible sur le marketplace' : 'Masquée sur le marketplace';
        });
    }
    {% endif %}

    // Validation Bootstrap
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
</script>
{% endblock %}

{% block stylesheets %}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.card-hover {
    transition: all 0.3s ease;
    border-radius: 12px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12) !important;
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
    height: calc(3.2rem + 2px);
    line-height: 1.25;
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
    font-size: 0.9rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.7rem) translateX(0.15rem);
    color: #667eea;
    font-size: 0.75rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 8px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.2);
}
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 8px !important;
    min-height: calc(3.2rem + 2px);
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
    font-size: 0.9rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-switch .form-check-input {
    width: 2.8em;
    height: 1.5em;
    cursor: pointer;
    margin-top: 0.2rem;
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
}
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.bg-light {
    background-color: #f8f9fa !important;
}

/* ✅ RESPONSIVE */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    .card-body {
        padding: 0.75rem !important;
    }
    
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
        font-size: 0.85rem;
    }
    
    .form-floating > label {
        padding-left: 2rem;
        font-size: 0.8rem;
    }
    
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select:focus ~ label,
    .form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
        transform: scale(.85) translateY(-0.6rem) translateX(0.1rem);
        font-size: 0.7rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        font-size: 0.85rem;
    }
    
    .btn-sm {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
    }
    
    .profile-preview,
    .category-placeholder {
        width: 120px !important;
        height: 120px !important;
    }
    
    .category-placeholder i {
        font-size: 3rem !important;
    }
    
    .badge {
        font-size: 0.6rem;
        padding: 0.15rem 0.3rem;
    }
    
    .small {
        font-size: 0.7rem !important;
    }
    
    .modal .modal-body {
        padding: 0.75rem !important;
    }
    
    .modal .modal-footer {
        padding: 0.5rem !important;
    }
    
    .modal .modal-header {
        padding: 0.5rem 0.75rem !important;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1rem !important;
    }
    
    .profile-preview,
    .category-placeholder {
        width: 140px !important;
        height: 140px !important;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .btn-primary:hover {
        transform: none !important;
    }
    .profile-preview:hover {
        transform: none !important;
    }
}
</style>
{% endblock %}", "admin/category/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\_form.html.twig");
    }
}
