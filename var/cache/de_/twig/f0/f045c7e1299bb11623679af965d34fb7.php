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

/* admin/product/_form.html.twig */
class __TwigTemplate_885eca4c2729c9926b5c6ca719a3397c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/_form.html.twig"));

        // line 2
        yield "
";
        // line 4
        $context["companyType"] = ((array_key_exists("companyType", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 4, $this->source); })()), "retail")) : ("retail"));
        // line 5
        $context["canEditStock"] = ((array_key_exists("canEditStock", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["canEditStock"]) || array_key_exists("canEditStock", $context) ? $context["canEditStock"] : (function () { throw new RuntimeError('Variable "canEditStock" does not exist.', 5, $this->source); })()), false)) : (false));
        // line 6
        $context["button_label"] = ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 6, $this->source); })()), "Enregistrer")) : ("Enregistrer"));
        // line 7
        yield "
";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-3 g-md-4\">
    <!-- Carte Image -->
    <div class=\"col-12 col-lg-4\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-image me-2\"></i>Image du produit
                </h5>
            </div>
            <div class=\"card-body text-center d-flex flex-column p-3 p-md-4\">
                <!-- Preview de l'image -->
                <div class=\"product-image-preview mb-3 mb-md-4 flex-grow-1 d-flex flex-column justify-content-center\">
                    ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21) != "default-product.png"))) {
            // line 22
            yield "                        <div class=\"position-relative mx-auto\" style=\"width: 150px; height: 150px;\">
                            <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
            yield "\" 
                                 class=\"img-fluid rounded shadow-lg product-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 4px solid #f8f9fa;\">
                            ";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)))) {
                // line 28
                yield "                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                        style=\"bottom: 5px; right: 5px; width: 30px; height: 30px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deleteImageModal\"
                                        title=\"Supprimer l'image\">
                                    <i class=\"fas fa-trash\" style=\"font-size: 0.7rem;\"></i>
                                </button>
                            ";
            }
            // line 37
            yield "                        </div>
                    ";
        } else {
            // line 39
            yield "                        <div class=\"product-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 150px; height: 150px; border: 4px solid #f8f9fa;\">
                            <i class=\"fas fa-box fa-4x\"></i>
                        </div>
                    ";
        }
        // line 44
        yield "                </div>
                
                <!-- Champ de téléchargement d'image -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-sm", "onchange" => "previewProductImage(this)", "accept" => "image/*"]]);
        // line 53
        yield "
                        <div class=\"form-text mt-1 small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            JPG, PNG, GIF, WebP. Max 5M
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-2\">
                        <label for=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100 btn-sm\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            ";
        // line 67
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67) != "default-product.png"))) ? ("Changer") : ("Choisir"));
        yield "
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte Informations du produit -->
    <div class=\"col-12 col-lg-8\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-box-open me-2\"></i>
                    ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)))) {
            // line 82
            yield "                        Modifier le produit
                    ";
        } else {
            // line 84
            yield "                        Nouveau produit
                    ";
        }
        // line 86
        yield "                </h5>
            </div>
            <div class=\"card-body p-3 p-md-4\">
                <!-- Informations de base -->
                <div class=\"row g-2 g-md-3\">
                    <!-- Nom du produit -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "name", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 98
        yield "
                            <label for=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Nom du produit *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <!-- Code-barres avec scanner -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            <div class=\"input-group\">
                                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "barcode", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "id" => "product-barcode"]]);
        // line 117
        yield "
                                <button type=\"button\" 
                                        class=\"btn btn-outline-primary border-start-0 btn-sm\" 
                                        id=\"scan-barcode-btn-form\"
                                        title=\"Scanner un code-barres\">
                                    <i class=\"fas fa-barcode\"></i>
                                </button>
                                <button type=\"button\" 
                                        class=\"btn btn-outline-secondary btn-sm\" 
                                        id=\"generate-barcode-btn-form\"
                                        title=\"Générer un code-barres automatique\">
                                    <i class=\"fas fa-sync-alt\"></i>
                                </button>
                            </div>
                            <label for=\"product-barcode\">
                                <i class=\"fas fa-barcode me-1\"></i> Code-barres
                            </label>
                            <div class=\"form-text small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Laissez vide pour générer automatiquement
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "barcode", [], "any", false, false, false, 139), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Catégorie -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "category", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "form-control select2-category", "placeholder" => " "]]);
        // line 152
        yield "
                            <label for=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "category", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), "html", null, true);
        yield "\">
                                <i class=\"fas fa-folder me-1\"></i> Catégorie *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "category", [], "any", false, false, false, 157), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Unité de mesure -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "unit", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-select select2-unit", "id" => "product_unit", "placeholder" => " "]]);
        // line 171
        yield "
                            <label for=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "unit", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172), "html", null, true);
        yield "\">
                                <i class=\"fas fa-weight-hanging me-1\"></i> Unité de mesure
                            </label>
                            <div class=\"form-text small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Si aucune unité n'est sélectionnée, \"Pièce\" sera utilisé par défaut.
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "unit", [], "any", false, false, false, 180), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!-- Prix -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-";
        // line 188
        yield ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 188, $this->source); })()) == "restaurant")) ? ("12") : ("6"));
        yield "\">
                        <div class=\"form-floating\">
                            ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "purchase_price", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
        // line 195
        yield "
                            <label for=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "purchase_price", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "id", [], "any", false, false, false, 196), "html", null, true);
        yield "\">
                                <i class=\"fas fa-arrow-down me-1\"></i> Prix d'achat (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "purchase_price", [], "any", false, false, false, 200), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 204
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 204, $this->source); })()) != "restaurant")) {
            // line 205
            yield "                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
            // line 207
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "sale_price", [], "any", false, false, false, 207), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
            // line 212
            yield "
                            <label for=\"";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "sale_price", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213), "html", null, true);
            yield "\">
                                <i class=\"fas fa-arrow-up me-1\"></i> Prix de vente (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
            // line 217
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "sale_price", [], "any", false, false, false, 217), 'errors');
            yield "
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 222
        yield "                </div>
                
                <!-- Marge calculée -->
                ";
        // line 225
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 225, $this->source); })()) != "restaurant")) {
            // line 226
            yield "                <div class=\"row g-2 g-md-3 mt-2\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body py-2 px-3\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-2\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-chart-line me-1\"></i> Marge
                                    </small>
                                    <div>
                                        <span id=\"margin-amount\" class=\"fw-bold small\">0 FCFA</span>
                                        <span id=\"margin-percentage\" class=\"badge ms-2\">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 244
        yield "
                <!-- ✅ SECTION STOCK : Bloc informatif propre (plus d'alerte) -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"stock-info-card\">
                            <div class=\"stock-info-header\">
                                <div class=\"stock-info-icon\">
                                    <i class=\"fas fa-boxes\"></i>
                                </div>
                                <div class=\"stock-info-title\">
                                    <h6>Gestion automatique du stock</h6>
                                    <p>Calculé à partir de la somme des lots actifs</p>
                                </div>
                            </div>
                            <div class=\"stock-info-body\">
                                <p class=\"stock-info-text\">
                                    <i class=\"fas fa-info-circle me-2\"></i>
                                    <strong>Pour modifier le stock</strong>, utilisez l'un des mouvements suivants :
                                </p>
                                <div class=\"stock-info-actions\">
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-shopping-cart\"></i> Achats
                                    </span>
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-tag\"></i> Ventes
                                    </span>
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-plus-circle\"></i> Ajustements
                                    </span>
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-exchange-alt\"></i> Transferts
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ✅ Stock minimum d'alerte + Stock actuel -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    ";
        // line 285
        yield "                    ";
        $context["hasStockCard"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 285) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 285, $this->source); })()), "id", [], "any", false, false, false, 285)));
        // line 286
        yield "                    
                    <div class=\"";
        // line 287
        yield (((($tmp = (isset($context["hasStockCard"]) || array_key_exists("hasStockCard", $context) ? $context["hasStockCard"] : (function () { throw new RuntimeError('Variable "hasStockCard" does not exist.', 287, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-12 col-md-6") : ("col-12"));
        yield "\">
                        <div class=\"form-floating\">
                            ";
        // line 289
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "min_quantity", [], "any", false, false, false, 289), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 293
        yield "
                            <label for=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "min_quantity", [], "any", false, false, false, 294), "vars", [], "any", false, false, false, 294), "id", [], "any", false, false, false, 294), "html", null, true);
        yield "\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Stock minimum d'alerte
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 298
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "min_quantity", [], "any", false, false, false, 298), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted small\" id=\"min_quantity_unit_help\">Alerte en ";
        // line 300
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 300, $this->source); })()), "unit", [], "any", false, false, false, 300)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 300, $this->source); })()), "unit", [], "any", false, false, false, 300), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                    
                    <!-- Affichage du stock actuel (lecture seule) - UNIQUEMENT en modification -->
                    ";
        // line 305
        if ((($tmp = (isset($context["hasStockCard"]) || array_key_exists("hasStockCard", $context) ? $context["hasStockCard"] : (function () { throw new RuntimeError('Variable "hasStockCard" does not exist.', 305, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 306
            yield "                    <div class=\"col-12 col-md-6\">
                        <div class=\"current-stock-card\">
                            <div class=\"current-stock-content\">
                                <div class=\"current-stock-label\">
                                    <i class=\"fas fa-cubes me-1\"></i> Stock actuel
                                </div>
                                <div class=\"current-stock-value\">
                                    <span class=\"stock-number\">";
            // line 313
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", true, true, false, 313) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 313, $this->source); })()), "stockQuantity", [], "any", false, false, false, 313)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 313, $this->source); })()), "stockQuantity", [], "any", false, false, false, 313), "html", null, true)) : (0));
            yield "</span>
                                    <span class=\"stock-unit\">";
            // line 314
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 314, $this->source); })()), "unit", [], "any", false, false, false, 314)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 314, $this->source); })()), "unit", [], "any", false, false, false, 314), "html", null, true)) : ("pièce(s)"));
            yield "</span>
                                </div>
                            </div>
                            <div class=\"current-stock-status\">
                                ";
            // line 318
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 318, $this->source); })()), "stockQuantity", [], "any", false, false, false, 318) <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 318, $this->source); })()), "minQuantity", [], "any", false, false, false, 318))) {
                // line 319
                yield "                                    <span class=\"badge bg-danger\">
                                        <i class=\"fas fa-exclamation-triangle me-1\"></i>Stock faible
                                    </span>
                                ";
            } else {
                // line 323
                yield "                                    <span class=\"badge bg-success\">
                                        <i class=\"fas fa-check-circle me-1\"></i>OK
                                    </span>
                                ";
            }
            // line 327
            yield "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 331
        yield "                </div>
                <!-- Switches pour Statut et Date critique -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <!-- Switch Statut Actif/Inactif -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold small\">Statut du produit</span>
                                    </div>
                                    <span class=\"badge ";
        // line 343
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "is_active", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "data", [], "any", false, false, false, 343)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 344
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "is_active", [], "any", false, false, false, 344), "vars", [], "any", false, false, false, 344), "data", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "is_active", [], "any", false, false, false, 348), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 351
        yield "
                                    <label class=\"form-check-label small\" for=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "is_active", [], "any", false, false, false, 352), "vars", [], "any", false, false, false, 352), "id", [], "any", false, false, false, 352), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 353
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "is_active", [], "any", false, false, false, 353), "vars", [], "any", false, false, false, 353), "data", [], "any", false, false, false, 353)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit actif") : ("Produit inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block small\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les produits inactifs ne seront pas visibles
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 361
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "is_active", [], "any", false, false, false, 361), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Switch Date critique -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                                        <span class=\"fw-bold small\">Date critique</span>
                                    </div>
                                    <span class=\"badge ";
        // line 376
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 376), "vars", [], "any", false, false, false, 376), "data", [], "any", false, false, false, 376)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-warning text-dark") : ("bg-secondary"));
        yield "\" id=\"date-badge\">
                                        ";
        // line 377
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 377, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 377), "vars", [], "any", false, false, false, 377), "data", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("AVEC DATE") : ("SANS DATE"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 384
        yield "
                                    <label class=\"form-check-label small\" for=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 385), "vars", [], "any", false, false, false, 385), "id", [], "any", false, false, false, 385), "html", null, true);
        yield "\" id=\"date-label\">
                                        ";
        // line 386
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 386), "vars", [], "any", false, false, false, 386), "data", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit périssable") : ("Produit non périssable"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block small\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert date d'expiration lors des achats
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 394), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Description -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 405
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "description", [], "any", false, false, false, 405), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 80px"]]);
        // line 409
        yield "
                            <label for=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "description", [], "any", false, false, false, 410), "vars", [], "any", false, false, false, 410), "id", [], "any", false, false, false, 410), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 414
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "description", [], "any", false, false, false, 414), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- fin card-body -->

            <!-- Bouton Autres informations -->
            <div class=\"row g-2 g-md-3 mt-2 px-3\">
                <div class=\"col-12\">
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body py-2 px-3\">
                            <div class=\"form-check form-switch\">
                                ";
        // line 427
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), "show_extra", [], "any", false, false, false, 427), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 430
        yield "
                                <label class=\"form-check-label fw-bold small\" for=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "show_extra", [], "any", false, false, false, 431), "vars", [], "any", false, false, false, 431), "id", [], "any", false, false, false, 431), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-ellipsis-h me-2\"></i>Autre information
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Champs supplémentaires (cachés par défaut) -->
            <div id=\"extraFields\" style=\"display: none;\" class=\"px-3\">
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 445
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), "dosage", [], "any", false, false, false, 445), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "dosage", [], "any", false, false, false, 446), "vars", [], "any", false, false, false, 446), "id", [], "any", false, false, false, 446), "html", null, true);
        yield "\">Dosage</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 447
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "dosage", [], "any", false, false, false, 447), 'errors');
        yield "</div>
                            <small class=\"text-muted mt-1 d-block small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                EX : 500 mg
                            </small>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 456
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 456, $this->source); })()), "form", [], "any", false, false, false, 456), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "form", [], "any", false, false, false, 457), "vars", [], "any", false, false, false, 457), "id", [], "any", false, false, false, 457), "html", null, true);
        yield "\">Forme</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 458, $this->source); })()), "form", [], "any", false, false, false, 458), 'errors');
        yield "</div>
                            <small class=\"text-muted mt-1 d-block small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                EX : Comprimé
                            </small>
                        </div>
                    </div>
                </div>

                ";
        // line 468
        yield "                ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 468, $this->source); })()) == "pharmacy")) {
            // line 469
            yield "                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 474
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 474, $this->source); })()), "prescription_required", [], "any", false, false, false, 474), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label small\" for=\"";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), "prescription_required", [], "any", false, false, false, 475), "vars", [], "any", false, false, false, 475), "id", [], "any", false, false, false, 475), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-prescription me-2 text-danger\"></i>
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">";
            // line 479
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), "prescription_required", [], "any", false, false, false, 479), 'errors');
            yield "</div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Requiert une ordonnance à la vente
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
            // line 490
            yield "                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 494
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "company_public", [], "any", false, false, false, 494), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label small\" for=\"";
            // line 495
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 495, $this->source); })()), "company_public", [], "any", false, false, false, 495), "vars", [], "any", false, false, false, 495), "id", [], "any", false, false, false, 495), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-globe me-2 text-primary\"></i>
                                        Visible sur le marketplace
                                    </label>
                                    <div class=\"invalid-feedback d-block\">";
            // line 499
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 499, $this->source); })()), "company_public", [], "any", false, false, false, 499), 'errors');
            yield "</div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Décochez pour masquer ce produit sur le marketplace
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 510
        yield "            </div>

            ";
        // line 512
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 512, $this->source); })()) == "restaurant")) {
            // line 513
            yield "                <div class=\"row g-2 g-md-3 mt-2 mt-md-3 px-3\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 518
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "is_storable", [], "any", false, false, false, 518), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 521
            yield "
                                    <label class=\"form-check-label fw-bold small\" for=\"";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "is_storable", [], "any", false, false, false, 522), "vars", [], "any", false, false, false, 522), "id", [], "any", false, false, false, 522), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-boxes me-2\"></i>Produit stockable
                                    </label>
                                    <div class=\"form-text mt-2 small\">
                                        <i class=\"fas fa-info-circle me-1 text-info\"></i>
                                        <strong>À quoi sert cette option ?</strong>
                                        <ul class=\"mt-1 mb-0 ps-3\">
                                            <li>✅ <strong>Stockable (activé)</strong> : Le produit sera remis en stock lors d'un retour client</li>
                                            <li>❌ <strong>Non stockable (désactivé)</strong> : Le produit ne sera PAS remis en stock (plat préparé, cocktail, produit frais déjà préparé)</li>
                                        </ul>
                                        <p class=\"mt-2 mb-0 text-warning small\">
                                            <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                            <strong>Important pour les restaurants :</strong> Seuls les produits stockables (canettes, bouteilles, ingrédients non préparés) seront remis en stock lors d'un retour.
                                            Les plats préparés et cocktails mélangés ne seront jamais remis en stock.
                                        </p>
                                    </div>
                                </div>
                                <div class=\"invalid-feedback d-block\">
                                    ";
            // line 540
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 540, $this->source); })()), "is_storable", [], "any", false, false, false, 540), 'errors');
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 547
        yield "            
            <!-- ✅ FOOTER AVEC BOUTONS D'ACTION RESPONSIVE -->
            <div class=\"card-footer bg-light py-3 py-md-3\">
                <div class=\"action-buttons-container\">
                    <!-- Annuler à gauche -->
                    <div class=\"action-button-left\">
                        <a href=\"";
        // line 553
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                    </div>
                    
                    <!-- Enregistrer + Voir à droite -->
                    <div class=\"action-button-right\">
                        ";
        // line 560
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 560) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 560, $this->source); })()), "id", [], "any", false, false, false, 560)))) {
            // line 561
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 561, $this->source); })()), "id", [], "any", false, false, false, 561)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-action\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 565
        yield "                        <button type=\"submit\" class=\"btn btn-primary btn-action\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 567
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 567, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 575
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 575, $this->source); })()), 'form_end');
        yield "

<!-- Modals -->
";
        // line 578
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 578) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 578, $this->source); })()), "id", [], "any", false, false, false, 578))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 578, $this->source); })()), "image", [], "any", false, false, false, 578)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 578, $this->source); })()), "image", [], "any", false, false, false, 578) != "default-product.png"))) {
            // line 579
            yield "<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0 py-2\">
                <h5 class=\"modal-title text-danger fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3\">
                <div class=\"mb-3\">
                    <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                    <h5 class=\"fs-6\">Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted small\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 595, $this->source); })()), "image", [], "any", false, false, false, 595))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 596, $this->source); })()), "name", [], "any", false, false, false, 596), "html", null, true);
            yield "\" 
                         class=\"rounded shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2 flex-column flex-sm-row gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"";
            // line 605
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 605, $this->source); })()), "id", [], "any", false, false, false, 605)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 606, $this->source); })()), "id", [], "any", false, false, false, 606))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm w-100\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 616
        yield "
<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModalForm\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
        <div class=\"modal-content\">
            <div class=\"modal-header py-2\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-barcode me-2\"></i> Scanner un code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\">
                    <i class=\"fas fa-barcode fa-3x text-primary mb-3\"></i>
                    <p class=\"text-muted small\">Scannez ou saisissez un code-barres</p>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold small\">Code-barres :</label>
                    <input type=\"text\" 
                           id=\"barcode-scanner-input\" 
                           class=\"form-control form-control-sm text-center\"
                           placeholder=\"Saisissez ou scannez...\"
                           autofocus
                           style=\"letter-spacing: 2px; font-family: 'Courier New', monospace;\">
                    <div class=\"form-text mt-2 small\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez directement ou utilisez votre scanner USB
                    </div>
                </div>
            </div>
            <div class=\"modal-footer py-2 flex-column flex-sm-row gap-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary btn-sm w-100 w-sm-auto\" id=\"use-scanned-barcode\">
                    <i class=\"fas fa-check me-1\"></i> Utiliser
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
// Preview d'image
function previewProductImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.product-preview') || 
                       document.querySelector('.product-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('product-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg product-preview';
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

// Calcul de la marge
function calculateMargin() {
    ";
        // line 684
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 684, $this->source); })()) != "restaurant")) {
            // line 685
            yield "    const purchasePriceInput = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 685, $this->source); })()), "purchase_price", [], "any", false, false, false, 685), "vars", [], "any", false, false, false, 685), "id", [], "any", false, false, false, 685), "html", null, true);
            yield "');
    const salePriceInput = document.getElementById('";
            // line 686
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 686, $this->source); })()), "sale_price", [], "any", false, false, false, 686), "vars", [], "any", false, false, false, 686), "id", [], "any", false, false, false, 686), "html", null, true);
            yield "');
    
    const purchasePrice = purchasePriceInput ? parseFloat(purchasePriceInput.value) || 0 : 0;
    const salePrice = salePriceInput ? parseFloat(salePriceInput.value) || 0 : 0;
    
    if (purchasePrice > 0 && salePrice > 0) {
        const marginAmount = salePrice - purchasePrice;
        const marginPercentage = ((marginAmount / purchasePrice) * 100).toFixed(1);
        
        const marginAmountSpan = document.getElementById('margin-amount');
        const marginPercentageSpan = document.getElementById('margin-percentage');
        
        if (marginAmountSpan) marginAmountSpan.textContent = marginAmount.toLocaleString('fr-FR') + ' FCFA';
        if (marginPercentageSpan) {
            marginPercentageSpan.textContent = marginPercentage + '%';
            
            marginPercentageSpan.className = 'badge ms-2';
            if (marginPercentage >= 50) {
                marginPercentageSpan.classList.add('bg-success');
            } else if (marginPercentage >= 20) {
                marginPercentageSpan.classList.add('bg-warning', 'text-dark');
            } else {
                marginPercentageSpan.classList.add('bg-danger');
            }
        }
    } else {
        const marginAmountSpan = document.getElementById('margin-amount');
        const marginPercentageSpan = document.getElementById('margin-percentage');
        
        if (marginAmountSpan) marginAmountSpan.textContent = '0 FCFA';
        if (marginPercentageSpan) {
            marginPercentageSpan.textContent = '0%';
            marginPercentageSpan.className = 'badge bg-secondary ms-2';
        }
    }
    ";
        }
        // line 722
        yield "}

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé, initialisation des scripts...');
    
    // ========== MISE À JOUR DE L'UNITÉ POUR LE STOCK ==========
    const unitSelect = document.getElementById('product_unit');
    const minQuantityHelp = document.getElementById('min_quantity_unit_help');
    
    if (unitSelect && minQuantityHelp) {
        function updateUnitHelps() {
            let unitText = 'pièce';
            if (unitSelect.value && unitSelect.options[unitSelect.selectedIndex]) {
                unitText = unitSelect.options[unitSelect.selectedIndex].text;
            }
            minQuantityHelp.textContent = 'Alerte en ' + unitText;
        }
        
        updateUnitHelps();
        unitSelect.addEventListener('change', updateUnitHelps);
    }
    
    // ========== SELECT2 ==========
    if (typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        if (\$('.select2-category').length) {
            if (\$('.select2-category').data('select2')) {
                \$('.select2-category').select2('destroy');
            }
            \$('.select2-category').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"Sélectionnez une catégorie...\",
                allowClear: false,
                minimumInputLength: 0,
                dropdownAutoWidth: true
            });
        }
        
        if (\$('.select2-unit').length) {
            if (\$('.select2-unit').data('select2')) {
                \$('.select2-unit').select2('destroy');
            }
            \$('.select2-unit').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"-- Choisir une unité --\",
                allowClear: true,
                dropdownAutoWidth: true
            });
        }
    }
    
    // ========== SCANNER ==========
    const scannerModalElement = document.getElementById('scannerModalForm');
    if (scannerModalElement && typeof bootstrap !== 'undefined') {
        const scannerModal = new bootstrap.Modal(scannerModalElement);
        const scanBtn = document.getElementById('scan-barcode-btn-form');
        const generateBtn = document.getElementById('generate-barcode-btn-form');
        const barcodeInput = document.getElementById('product-barcode');
        const scannerInput = document.getElementById('barcode-scanner-input');
        const useScannedBtn = document.getElementById('use-scanned-barcode');
        
        if (scanBtn) {
            scanBtn.addEventListener('click', function() {
                scannerModal.show();
                if (scannerInput) setTimeout(function() { scannerInput.focus(); }, 500);
            });
        }
        
        if (generateBtn) {
            generateBtn.addEventListener('click', function() {
                const timestamp = Date.now();
                const random = Math.floor(Math.random() * 10000);
                const barcode = 'PRD-' + timestamp + '-' + random.toString().padStart(4, '0');
                if (barcodeInput) barcodeInput.value = barcode;
            });
        }
        
        if (useScannedBtn && scannerInput && barcodeInput) {
            useScannedBtn.addEventListener('click', function() {
                if (scannerInput.value.trim()) {
                    barcodeInput.value = scannerInput.value.trim();
                    scannerModal.hide();
                    scannerInput.value = '';
                }
            });
        }
        
        if (scannerInput && barcodeInput) {
            scannerInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    if (this.value.trim()) {
                        barcodeInput.value = this.value.trim();
                        scannerModal.hide();
                        this.value = '';
                    }
                }
            });
        }
    }
    
    // ========== MARGE ==========
    ";
        // line 827
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 827, $this->source); })()) != "restaurant")) {
            // line 828
            yield "    calculateMargin();
    ";
        }
        // line 830
        yield "    
    // ========== VALIDATION BOOTSTRAP ==========
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
    
    // ========== SWITCH \"AUTRES INFORMATIONS\" ==========
    const showExtraSwitch = document.getElementById('";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 844, $this->source); })()), "show_extra", [], "any", false, false, false, 844), "vars", [], "any", false, false, false, 844), "id", [], "any", false, false, false, 844), "html", null, true);
        yield "');
    const extraFields = document.getElementById('extraFields');

    if (showExtraSwitch && extraFields) {
        function toggleExtraFields() {
            extraFields.style.display = showExtraSwitch.checked ? 'block' : 'none';
        }
        toggleExtraFields();
        showExtraSwitch.addEventListener('change', toggleExtraFields);
    }
    
    // ========== SWITCH STATUT ==========
    const statusSwitch = document.getElementById('";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 856, $this->source); })()), "is_active", [], "any", false, false, false, 856), "vars", [], "any", false, false, false, 856), "id", [], "any", false, false, false, 856), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (statusSwitch && statusBadge && statusLabel) {
        function updateStatusDisplay() {
            if (statusSwitch.checked) {
                statusBadge.textContent = 'ACTIF';
                statusBadge.className = 'badge bg-success';
                statusLabel.textContent = 'Produit actif';
            } else {
                statusBadge.textContent = 'INACTIF';
                statusBadge.className = 'badge bg-danger';
                statusLabel.textContent = 'Produit inactif';
            }
        }
        updateStatusDisplay();
        statusSwitch.addEventListener('change', updateStatusDisplay);
    }
    
    // ========== SWITCH DATE CRITIQUE ==========
    const dateSwitch = document.getElementById('";
        // line 877
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 877, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 877), "vars", [], "any", false, false, false, 877), "id", [], "any", false, false, false, 877), "html", null, true);
        yield "');
    const dateBadge = document.getElementById('date-badge');
    const dateLabel = document.getElementById('date-label');
    
    if (dateSwitch && dateBadge && dateLabel) {
        function updateDateDisplay() {
            if (dateSwitch.checked) {
                dateBadge.textContent = 'AVEC DATE';
                dateBadge.className = 'badge bg-warning text-dark';
                dateLabel.textContent = 'Produit périssable';
            } else {
                dateBadge.textContent = 'SANS DATE';
                dateBadge.className = 'badge bg-secondary';
                dateLabel.textContent = 'Produit non périssable';
            }
        }
        updateDateDisplay();
        dateSwitch.addEventListener('change', updateDateDisplay);
    }
});
</script>

<!-- CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ============================================
   BASE
   ============================================ */
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

/* Form floating */
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
    border-radius: 8px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.2);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label {
    transform: scale(.85) translateY(-0.7rem) translateX(0.15rem);
    color: #667eea;
    font-size: 0.75rem;
}

/* Select2 */
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

/* ============================================
   ✅ STOCK INFO CARD (remplace l'alerte)
   ============================================ */
.stock-info-card {
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
    border-radius: 12px;
    border-left: 4px solid #0463f1;
    padding: 1rem 1.25rem;
    box-shadow: 0 2px 8px rgba(4, 99, 241, 0.08);
}

.stock-info-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.75rem;
}

.stock-info-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.stock-info-title h6 {
    margin: 0;
    font-weight: 700;
    color: #1e40af;
    font-size: 0.95rem;
}

.stock-info-title p {
    margin: 0;
    color: #3b82f6;
    font-size: 0.75rem;
}

.stock-info-body {
    padding-top: 0.5rem;
    border-top: 1px dashed #93c5fd;
}

.stock-info-text {
    font-size: 0.85rem;
    color: #1e3a8a;
    margin-bottom: 0.75rem;
}

.stock-info-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.stock-info-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    background: white;
    color: #1e40af;
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    border: 1px solid #bfdbfe;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.stock-info-badge i {
    font-size: 0.7rem;
    color: #3b82f6;
}

/* ============================================
   ✅ CURRENT STOCK CARD
   ============================================ */
.current-stock-card {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 0.9rem 1rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: calc(3.2rem + 2px);
}

.current-stock-content {
    display: flex;
    flex-direction: column;
}

.current-stock-label {
    font-size: 0.7rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.current-stock-value {
    display: flex;
    align-items: baseline;
    gap: 0.35rem;
}

.stock-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: #0463f1;
    line-height: 1;
}

.stock-unit {
    font-size: 0.8rem;
    color: #64748b;
}

.current-stock-status {
    margin-top: 0.5rem;
}

/* ============================================
   ✅ BOUTONS D'ACTION RESPONSIVE
   ============================================ */
.action-buttons-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
}

.action-button-left {
    display: flex;
    gap: 0.5rem;
}

.action-button-right {
    display: flex;
    gap: 0.5rem;
}

.btn-action {
    padding: 0.6rem 1.5rem;
    font-size: 0.9rem;
    font-weight: 600;
    border-radius: 10px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.btn-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.btn-primary.btn-action {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    min-width: 140px;
}

.btn-outline-secondary.btn-action {
    border: 2px solid #cbd5e1;
    color: #475569;
    min-width: 120px;
}

.btn-outline-secondary.btn-action:hover {
    background: #f1f5f9;
    border-color: #94a3b8;
}

.btn-info.btn-action {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
    color: white;
}

/* Switches */
.form-switch .form-check-input {
    width: 2.8em;
    height: 1.5em;
    cursor: pointer;
    margin-top: 0.2rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
#";
        // line 1160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1160, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 1160), "vars", [], "any", false, false, false, 1160), "id", [], "any", false, false, false, 1160), "html", null, true);
        yield ":checked {
    background-color: #ffc107;
    border-color: #ffc107;
}

/* Inputs group */
.input-group .btn {
    border-radius: 0 8px 8px 0;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
}
.input-group .btn-outline-primary {
    border-left: none;
}
.input-group .form-control {
    border-right: none;
}

/* ============================================
   ✅ RESPONSIVE MOBILE
   ============================================ */

/* Tablette */
@media (max-width: 991.98px) {
    .action-buttons-container {
        flex-wrap: wrap;
    }
}

/* Mobile */
@media (max-width: 767.98px) {
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
    
    /* Form controls */
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
    
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        font-size: 0.85rem;
    }
    
    /* Image */
    .product-preview,
    .product-placeholder {
        width: 120px !important;
        height: 120px !important;
    }
    
    .product-placeholder i {
        font-size: 3rem !important;
    }
    
    /* Stock info card */
    .stock-info-card {
        padding: 0.75rem 1rem;
    }
    
    .stock-info-icon {
        width: 32px;
        height: 32px;
        min-width: 32px;
        font-size: 0.9rem;
    }
    
    .stock-info-title h6 {
        font-size: 0.85rem;
    }
    
    .stock-info-title p {
        font-size: 0.7rem;
    }
    
    .stock-info-text {
        font-size: 0.78rem;
    }
    
    .stock-info-badge {
        font-size: 0.68rem;
        padding: 0.3rem 0.6rem;
    }
    
    /* Current stock */
    .stock-number {
        font-size: 1.25rem;
    }
    
    .stock-unit {
        font-size: 0.7rem;
    }
    
    /* ✅ Boutons d'action MOBILE : empilés verticalement */
    .action-buttons-container {
        flex-direction: column-reverse;
        align-items: stretch;
        gap: 0.5rem;
    }
    
    .action-button-left,
    .action-button-right {
        flex-direction: column;
        width: 100%;
        gap: 0.5rem;
    }
    
    .btn-action {
        width: 100%;
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
        min-width: auto !important;
    }
    
    /* Modals */
    .modal-body {
        padding: 0.75rem !important;
    }
    
    .modal-footer {
        padding: 0.5rem !important;
    }
    
    /* Badges */
    .badge {
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
    }
    
    /* Small */
    .small {
        font-size: 0.72rem !important;
    }
}

/* Très petits mobiles */
@media (max-width: 375.98px) {
    .stock-info-badge {
        font-size: 0.62rem;
        padding: 0.25rem 0.5rem;
    }
    
    .stock-info-icon {
        width: 28px;
        height: 28px;
        min-width: 28px;
        font-size: 0.8rem;
    }
    
    .btn-action {
        font-size: 0.85rem;
        padding: 0.6rem 0.9rem;
    }
}

/* Utilitaires */
@media (max-width: 575.98px) {
    .w-100-mobile {
        width: 100% !important;
    }
}
@media (min-width: 576px) {
    .w-sm-auto {
        width: auto !important;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .btn-action:hover {
        transform: none !important;
    }
    .product-preview:hover {
        transform: none !important;
    }
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/product/_form.html.twig";
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
        return array (  1479 => 1160,  1193 => 877,  1169 => 856,  1154 => 844,  1138 => 830,  1134 => 828,  1132 => 827,  1025 => 722,  986 => 686,  981 => 685,  979 => 684,  909 => 616,  896 => 606,  892 => 605,  880 => 596,  876 => 595,  858 => 579,  856 => 578,  850 => 575,  839 => 567,  835 => 565,  827 => 561,  825 => 560,  815 => 553,  807 => 547,  797 => 540,  776 => 522,  773 => 521,  771 => 518,  764 => 513,  762 => 512,  758 => 510,  744 => 499,  737 => 495,  733 => 494,  727 => 490,  714 => 479,  707 => 475,  703 => 474,  696 => 469,  693 => 468,  681 => 458,  677 => 457,  673 => 456,  661 => 447,  657 => 446,  653 => 445,  636 => 431,  633 => 430,  631 => 427,  615 => 414,  608 => 410,  605 => 409,  603 => 405,  589 => 394,  578 => 386,  574 => 385,  571 => 384,  569 => 381,  562 => 377,  558 => 376,  540 => 361,  529 => 353,  525 => 352,  522 => 351,  520 => 348,  513 => 344,  509 => 343,  495 => 331,  489 => 327,  483 => 323,  477 => 319,  475 => 318,  468 => 314,  464 => 313,  455 => 306,  453 => 305,  445 => 300,  440 => 298,  433 => 294,  430 => 293,  428 => 289,  423 => 287,  420 => 286,  417 => 285,  375 => 244,  355 => 226,  353 => 225,  348 => 222,  340 => 217,  333 => 213,  330 => 212,  328 => 207,  324 => 205,  322 => 204,  315 => 200,  308 => 196,  305 => 195,  303 => 190,  298 => 188,  287 => 180,  276 => 172,  273 => 171,  271 => 167,  258 => 157,  251 => 153,  248 => 152,  246 => 149,  233 => 139,  209 => 117,  207 => 112,  195 => 103,  188 => 99,  185 => 98,  183 => 94,  173 => 86,  169 => 84,  165 => 82,  163 => 81,  146 => 67,  141 => 65,  132 => 59,  124 => 53,  122 => 49,  115 => 44,  108 => 39,  104 => 37,  93 => 28,  91 => 27,  85 => 24,  81 => 23,  78 => 22,  76 => 21,  60 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/_form.html.twig #}

{# ✅ Sécurité : valeurs par défaut pour éviter les erreurs Twig #}
{% set companyType = companyType|default('retail') %}
{% set canEditStock = canEditStock|default(false) %}
{% set button_label = button_label|default('Enregistrer') %}

{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"row g-3 g-md-4\">
    <!-- Carte Image -->
    <div class=\"col-12 col-lg-4\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-image me-2\"></i>Image du produit
                </h5>
            </div>
            <div class=\"card-body text-center d-flex flex-column p-3 p-md-4\">
                <!-- Preview de l'image -->
                <div class=\"product-image-preview mb-3 mb-md-4 flex-grow-1 d-flex flex-column justify-content-center\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <div class=\"position-relative mx-auto\" style=\"width: 150px; height: 150px;\">
                            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                                 alt=\"{{ product.name }}\" 
                                 class=\"img-fluid rounded shadow-lg product-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 4px solid #f8f9fa;\">
                            {% if product.id is defined and product.id is not null %}
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
                        <div class=\"product-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 150px; height: 150px; border: 4px solid #f8f9fa;\">
                            <i class=\"fas fa-box fa-4x\"></i>
                        </div>
                    {% endif %}
                </div>
                
                <!-- Champ de téléchargement d'image -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        {{ form_widget(form.image, {'attr': {
                            'class': 'form-control form-control-sm', 
                            'onchange': 'previewProductImage(this)',
                            'accept': 'image/*'
                        }}) }}
                        <div class=\"form-text mt-1 small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            JPG, PNG, GIF, WebP. Max 5M
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            {{ form_errors(form.image) }}
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-2\">
                        <label for=\"{{ form.image.vars.id }}\" class=\"btn btn-outline-primary w-100 btn-sm\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            {{ product.image and product.image != 'default-product.png' ? 'Changer' : 'Choisir' }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte Informations du produit -->
    <div class=\"col-12 col-lg-8\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-box-open me-2\"></i>
                    {% if product.id is defined and product.id is not null %}
                        Modifier le produit
                    {% else %}
                        Nouveau produit
                    {% endif %}
                </h5>
            </div>
            <div class=\"card-body p-3 p-md-4\">
                <!-- Informations de base -->
                <div class=\"row g-2 g-md-3\">
                    <!-- Nom du produit -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.name, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'off'
                            }}) }}
                            <label for=\"{{ form.name.vars.id }}\">
                                <i class=\"fas fa-tag me-1\"></i> Nom du produit *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.name) }}
                            </div>
                        </div>
                    </div>
                    
                    <!-- Code-barres avec scanner -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            <div class=\"input-group\">
                                {{ form_widget(form.barcode, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off',
                                    'id': 'product-barcode'
                                }}) }}
                                <button type=\"button\" 
                                        class=\"btn btn-outline-primary border-start-0 btn-sm\" 
                                        id=\"scan-barcode-btn-form\"
                                        title=\"Scanner un code-barres\">
                                    <i class=\"fas fa-barcode\"></i>
                                </button>
                                <button type=\"button\" 
                                        class=\"btn btn-outline-secondary btn-sm\" 
                                        id=\"generate-barcode-btn-form\"
                                        title=\"Générer un code-barres automatique\">
                                    <i class=\"fas fa-sync-alt\"></i>
                                </button>
                            </div>
                            <label for=\"product-barcode\">
                                <i class=\"fas fa-barcode me-1\"></i> Code-barres
                            </label>
                            <div class=\"form-text small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Laissez vide pour générer automatiquement
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.barcode) }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Catégorie -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.category, {'attr': {
                                'class': 'form-control select2-category',
                                'placeholder': ' '
                            }}) }}
                            <label for=\"{{ form.category.vars.id }}\">
                                <i class=\"fas fa-folder me-1\"></i> Catégorie *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.category) }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Unité de mesure -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.unit, {'attr': {
                                'class': 'form-select select2-unit',  
                                'id': 'product_unit', 
                                'placeholder': ' '
                            }}) }}
                            <label for=\"{{ form.unit.vars.id }}\">
                                <i class=\"fas fa-weight-hanging me-1\"></i> Unité de mesure
                            </label>
                            <div class=\"form-text small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Si aucune unité n'est sélectionnée, \"Pièce\" sera utilisé par défaut.
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.unit) }}
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!-- Prix -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-{{ companyType == 'restaurant' ? '12' : '6' }}\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.purchase_price, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'off',
                                'oninput': 'calculateMargin()'
                            }}) }}
                            <label for=\"{{ form.purchase_price.vars.id }}\">
                                <i class=\"fas fa-arrow-down me-1\"></i> Prix d'achat (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.purchase_price) }}
                            </div>
                        </div>
                    </div>
                    {% if companyType != 'restaurant' %}
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.sale_price, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'off',
                                'oninput': 'calculateMargin()'
                            }}) }}
                            <label for=\"{{ form.sale_price.vars.id }}\">
                                <i class=\"fas fa-arrow-up me-1\"></i> Prix de vente (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.sale_price) }}
                            </div>
                        </div>
                    </div>
                    {% endif %}
                </div>
                
                <!-- Marge calculée -->
                {% if companyType != 'restaurant' %}
                <div class=\"row g-2 g-md-3 mt-2\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body py-2 px-3\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-2\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-chart-line me-1\"></i> Marge
                                    </small>
                                    <div>
                                        <span id=\"margin-amount\" class=\"fw-bold small\">0 FCFA</span>
                                        <span id=\"margin-percentage\" class=\"badge ms-2\">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <!-- ✅ SECTION STOCK : Bloc informatif propre (plus d'alerte) -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"stock-info-card\">
                            <div class=\"stock-info-header\">
                                <div class=\"stock-info-icon\">
                                    <i class=\"fas fa-boxes\"></i>
                                </div>
                                <div class=\"stock-info-title\">
                                    <h6>Gestion automatique du stock</h6>
                                    <p>Calculé à partir de la somme des lots actifs</p>
                                </div>
                            </div>
                            <div class=\"stock-info-body\">
                                <p class=\"stock-info-text\">
                                    <i class=\"fas fa-info-circle me-2\"></i>
                                    <strong>Pour modifier le stock</strong>, utilisez l'un des mouvements suivants :
                                </p>
                                <div class=\"stock-info-actions\">
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-shopping-cart\"></i> Achats
                                    </span>
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-tag\"></i> Ventes
                                    </span>
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-plus-circle\"></i> Ajustements
                                    </span>
                                    <span class=\"stock-info-badge\">
                                        <i class=\"fas fa-exchange-alt\"></i> Transferts
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ✅ Stock minimum d'alerte + Stock actuel -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    {# ✅ Largeur dynamique : pleine largeur en création, moitié en modification #}
                    {% set hasStockCard = product.id is defined and product.id is not null %}
                    
                    <div class=\"{{ hasStockCard ? 'col-12 col-md-6' : 'col-12' }}\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.min_quantity, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'off'
                            }}) }}
                            <label for=\"{{ form.min_quantity.vars.id }}\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Stock minimum d'alerte
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.min_quantity) }}
                            </div>
                            <small class=\"text-muted small\" id=\"min_quantity_unit_help\">Alerte en {{ product.unit ?: 'pièce' }}</small>
                        </div>
                    </div>
                    
                    <!-- Affichage du stock actuel (lecture seule) - UNIQUEMENT en modification -->
                    {% if hasStockCard %}
                    <div class=\"col-12 col-md-6\">
                        <div class=\"current-stock-card\">
                            <div class=\"current-stock-content\">
                                <div class=\"current-stock-label\">
                                    <i class=\"fas fa-cubes me-1\"></i> Stock actuel
                                </div>
                                <div class=\"current-stock-value\">
                                    <span class=\"stock-number\">{{ product.stockQuantity ?? 0 }}</span>
                                    <span class=\"stock-unit\">{{ product.unit ?: 'pièce(s)' }}</span>
                                </div>
                            </div>
                            <div class=\"current-stock-status\">
                                {% if product.stockQuantity <= product.minQuantity %}
                                    <span class=\"badge bg-danger\">
                                        <i class=\"fas fa-exclamation-triangle me-1\"></i>Stock faible
                                    </span>
                                {% else %}
                                    <span class=\"badge bg-success\">
                                        <i class=\"fas fa-check-circle me-1\"></i>OK
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% endif %}
                </div>
                <!-- Switches pour Statut et Date critique -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <!-- Switch Statut Actif/Inactif -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold small\">Statut du produit</span>
                                    </div>
                                    <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"status-badge\">
                                        {{ form.is_active.vars.data ? 'ACTIF' : 'INACTIF' }}
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.is_active, {'attr': {
                                        'class': 'form-check-input',
                                        'role': 'switch'
                                    }}) }}
                                    <label class=\"form-check-label small\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                        {{ form.is_active.vars.data ? 'Produit actif' : 'Produit inactif' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block small\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les produits inactifs ne seront pas visibles
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.is_active) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Switch Date critique -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                                        <span class=\"fw-bold small\">Date critique</span>
                                    </div>
                                    <span class=\"badge {{ form.has_expiry_date.vars.data ? 'bg-warning text-dark' : 'bg-secondary' }}\" id=\"date-badge\">
                                        {{ form.has_expiry_date.vars.data ? 'AVEC DATE' : 'SANS DATE' }}
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.has_expiry_date, {'attr': {
                                        'class': 'form-check-input',
                                        'role': 'switch'
                                    }}) }}
                                    <label class=\"form-check-label small\" for=\"{{ form.has_expiry_date.vars.id }}\" id=\"date-label\">
                                        {{ form.has_expiry_date.vars.data ? 'Produit périssable' : 'Produit non périssable' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block small\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert date d'expiration lors des achats
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.has_expiry_date) }}
                                </div>
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
                                'style': 'height: 80px'
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
            </div> <!-- fin card-body -->

            <!-- Bouton Autres informations -->
            <div class=\"row g-2 g-md-3 mt-2 px-3\">
                <div class=\"col-12\">
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body py-2 px-3\">
                            <div class=\"form-check form-switch\">
                                {{ form_widget(form.show_extra, {'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch'
                                }}) }}
                                <label class=\"form-check-label fw-bold small\" for=\"{{ form.show_extra.vars.id }}\">
                                    <i class=\"fas fa-ellipsis-h me-2\"></i>Autre information
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Champs supplémentaires (cachés par défaut) -->
            <div id=\"extraFields\" style=\"display: none;\" class=\"px-3\">
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.dosage, {'attr': {'class': 'form-control', 'placeholder': ' '}}) }}
                            <label for=\"{{ form.dosage.vars.id }}\">Dosage</label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.dosage) }}</div>
                            <small class=\"text-muted mt-1 d-block small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                EX : 500 mg
                            </small>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.form, {'attr': {'class': 'form-control', 'placeholder': ' '}}) }}
                            <label for=\"{{ form.form.vars.id }}\">Forme</label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.form) }}</div>
                            <small class=\"text-muted mt-1 d-block small\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                EX : Comprimé
                            </small>
                        </div>
                    </div>
                </div>

                {# ✅ Champs spécifiques aux pharmacies #}
                {% if companyType == 'pharmacy' %}
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.prescription_required, {'attr': {'class': 'form-check-input'}}) }}
                                    <label class=\"form-check-label small\" for=\"{{ form.prescription_required.vars.id }}\">
                                        <i class=\"fas fa-prescription me-2 text-danger\"></i>
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">{{ form_errors(form.prescription_required) }}</div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Requiert une ordonnance à la vente
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {# ✅ AJOUT : Visibilité sur le marketplace #}
                    <div class=\"col-12 col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.company_public, {'attr': {'class': 'form-check-input'}}) }}
                                    <label class=\"form-check-label small\" for=\"{{ form.company_public.vars.id }}\">
                                        <i class=\"fas fa-globe me-2 text-primary\"></i>
                                        Visible sur le marketplace
                                    </label>
                                    <div class=\"invalid-feedback d-block\">{{ form_errors(form.company_public) }}</div>
                                    <small class=\"text-muted mt-1 d-block small\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Décochez pour masquer ce produit sur le marketplace
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>

            {% if companyType == 'restaurant' %}
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3 px-3\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-3 p-md-4\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.is_storable, {'attr': {
                                        'class': 'form-check-input',
                                        'role': 'switch'
                                    }}) }}
                                    <label class=\"form-check-label fw-bold small\" for=\"{{ form.is_storable.vars.id }}\">
                                        <i class=\"fas fa-boxes me-2\"></i>Produit stockable
                                    </label>
                                    <div class=\"form-text mt-2 small\">
                                        <i class=\"fas fa-info-circle me-1 text-info\"></i>
                                        <strong>À quoi sert cette option ?</strong>
                                        <ul class=\"mt-1 mb-0 ps-3\">
                                            <li>✅ <strong>Stockable (activé)</strong> : Le produit sera remis en stock lors d'un retour client</li>
                                            <li>❌ <strong>Non stockable (désactivé)</strong> : Le produit ne sera PAS remis en stock (plat préparé, cocktail, produit frais déjà préparé)</li>
                                        </ul>
                                        <p class=\"mt-2 mb-0 text-warning small\">
                                            <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                            <strong>Important pour les restaurants :</strong> Seuls les produits stockables (canettes, bouteilles, ingrédients non préparés) seront remis en stock lors d'un retour.
                                            Les plats préparés et cocktails mélangés ne seront jamais remis en stock.
                                        </p>
                                    </div>
                                </div>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.is_storable) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}
            
            <!-- ✅ FOOTER AVEC BOUTONS D'ACTION RESPONSIVE -->
            <div class=\"card-footer bg-light py-3 py-md-3\">
                <div class=\"action-buttons-container\">
                    <!-- Annuler à gauche -->
                    <div class=\"action-button-left\">
                        <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary btn-action\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                    </div>
                    
                    <!-- Enregistrer + Voir à droite -->
                    <div class=\"action-button-right\">
                        {% if product.id is defined and product.id is not null %}
                            <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"btn btn-info btn-action\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        {% endif %}
                        <button type=\"submit\" class=\"btn btn-primary btn-action\">
                            <i class=\"fas fa-save me-2\"></i> 
                            {{ button_label|default('Enregistrer') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ form_end(form) }}

<!-- Modals -->
{% if product.id is defined and product.id is not null and product.image and product.image != 'default-product.png' %}
<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0 py-2\">
                <h5 class=\"modal-title text-danger fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3\">
                <div class=\"mb-3\">
                    <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                    <h5 class=\"fs-6\">Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted small\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                         alt=\"{{ product.name }}\" 
                         class=\"rounded shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2 flex-column flex-sm-row gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_admin_product_delete_image', {'id': product.id}) }}\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-image' ~ product.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm w-100\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModalForm\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
        <div class=\"modal-content\">
            <div class=\"modal-header py-2\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-barcode me-2\"></i> Scanner un code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\">
                    <i class=\"fas fa-barcode fa-3x text-primary mb-3\"></i>
                    <p class=\"text-muted small\">Scannez ou saisissez un code-barres</p>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold small\">Code-barres :</label>
                    <input type=\"text\" 
                           id=\"barcode-scanner-input\" 
                           class=\"form-control form-control-sm text-center\"
                           placeholder=\"Saisissez ou scannez...\"
                           autofocus
                           style=\"letter-spacing: 2px; font-family: 'Courier New', monospace;\">
                    <div class=\"form-text mt-2 small\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez directement ou utilisez votre scanner USB
                    </div>
                </div>
            </div>
            <div class=\"modal-footer py-2 flex-column flex-sm-row gap-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary btn-sm w-100 w-sm-auto\" id=\"use-scanned-barcode\">
                    <i class=\"fas fa-check me-1\"></i> Utiliser
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
// Preview d'image
function previewProductImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.product-preview') || 
                       document.querySelector('.product-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('product-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg product-preview';
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

// Calcul de la marge
function calculateMargin() {
    {% if companyType != 'restaurant' %}
    const purchasePriceInput = document.getElementById('{{ form.purchase_price.vars.id }}');
    const salePriceInput = document.getElementById('{{ form.sale_price.vars.id }}');
    
    const purchasePrice = purchasePriceInput ? parseFloat(purchasePriceInput.value) || 0 : 0;
    const salePrice = salePriceInput ? parseFloat(salePriceInput.value) || 0 : 0;
    
    if (purchasePrice > 0 && salePrice > 0) {
        const marginAmount = salePrice - purchasePrice;
        const marginPercentage = ((marginAmount / purchasePrice) * 100).toFixed(1);
        
        const marginAmountSpan = document.getElementById('margin-amount');
        const marginPercentageSpan = document.getElementById('margin-percentage');
        
        if (marginAmountSpan) marginAmountSpan.textContent = marginAmount.toLocaleString('fr-FR') + ' FCFA';
        if (marginPercentageSpan) {
            marginPercentageSpan.textContent = marginPercentage + '%';
            
            marginPercentageSpan.className = 'badge ms-2';
            if (marginPercentage >= 50) {
                marginPercentageSpan.classList.add('bg-success');
            } else if (marginPercentage >= 20) {
                marginPercentageSpan.classList.add('bg-warning', 'text-dark');
            } else {
                marginPercentageSpan.classList.add('bg-danger');
            }
        }
    } else {
        const marginAmountSpan = document.getElementById('margin-amount');
        const marginPercentageSpan = document.getElementById('margin-percentage');
        
        if (marginAmountSpan) marginAmountSpan.textContent = '0 FCFA';
        if (marginPercentageSpan) {
            marginPercentageSpan.textContent = '0%';
            marginPercentageSpan.className = 'badge bg-secondary ms-2';
        }
    }
    {% endif %}
}

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé, initialisation des scripts...');
    
    // ========== MISE À JOUR DE L'UNITÉ POUR LE STOCK ==========
    const unitSelect = document.getElementById('product_unit');
    const minQuantityHelp = document.getElementById('min_quantity_unit_help');
    
    if (unitSelect && minQuantityHelp) {
        function updateUnitHelps() {
            let unitText = 'pièce';
            if (unitSelect.value && unitSelect.options[unitSelect.selectedIndex]) {
                unitText = unitSelect.options[unitSelect.selectedIndex].text;
            }
            minQuantityHelp.textContent = 'Alerte en ' + unitText;
        }
        
        updateUnitHelps();
        unitSelect.addEventListener('change', updateUnitHelps);
    }
    
    // ========== SELECT2 ==========
    if (typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        if (\$('.select2-category').length) {
            if (\$('.select2-category').data('select2')) {
                \$('.select2-category').select2('destroy');
            }
            \$('.select2-category').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"Sélectionnez une catégorie...\",
                allowClear: false,
                minimumInputLength: 0,
                dropdownAutoWidth: true
            });
        }
        
        if (\$('.select2-unit').length) {
            if (\$('.select2-unit').data('select2')) {
                \$('.select2-unit').select2('destroy');
            }
            \$('.select2-unit').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"-- Choisir une unité --\",
                allowClear: true,
                dropdownAutoWidth: true
            });
        }
    }
    
    // ========== SCANNER ==========
    const scannerModalElement = document.getElementById('scannerModalForm');
    if (scannerModalElement && typeof bootstrap !== 'undefined') {
        const scannerModal = new bootstrap.Modal(scannerModalElement);
        const scanBtn = document.getElementById('scan-barcode-btn-form');
        const generateBtn = document.getElementById('generate-barcode-btn-form');
        const barcodeInput = document.getElementById('product-barcode');
        const scannerInput = document.getElementById('barcode-scanner-input');
        const useScannedBtn = document.getElementById('use-scanned-barcode');
        
        if (scanBtn) {
            scanBtn.addEventListener('click', function() {
                scannerModal.show();
                if (scannerInput) setTimeout(function() { scannerInput.focus(); }, 500);
            });
        }
        
        if (generateBtn) {
            generateBtn.addEventListener('click', function() {
                const timestamp = Date.now();
                const random = Math.floor(Math.random() * 10000);
                const barcode = 'PRD-' + timestamp + '-' + random.toString().padStart(4, '0');
                if (barcodeInput) barcodeInput.value = barcode;
            });
        }
        
        if (useScannedBtn && scannerInput && barcodeInput) {
            useScannedBtn.addEventListener('click', function() {
                if (scannerInput.value.trim()) {
                    barcodeInput.value = scannerInput.value.trim();
                    scannerModal.hide();
                    scannerInput.value = '';
                }
            });
        }
        
        if (scannerInput && barcodeInput) {
            scannerInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    if (this.value.trim()) {
                        barcodeInput.value = this.value.trim();
                        scannerModal.hide();
                        this.value = '';
                    }
                }
            });
        }
    }
    
    // ========== MARGE ==========
    {% if companyType != 'restaurant' %}
    calculateMargin();
    {% endif %}
    
    // ========== VALIDATION BOOTSTRAP ==========
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
    
    // ========== SWITCH \"AUTRES INFORMATIONS\" ==========
    const showExtraSwitch = document.getElementById('{{ form.show_extra.vars.id }}');
    const extraFields = document.getElementById('extraFields');

    if (showExtraSwitch && extraFields) {
        function toggleExtraFields() {
            extraFields.style.display = showExtraSwitch.checked ? 'block' : 'none';
        }
        toggleExtraFields();
        showExtraSwitch.addEventListener('change', toggleExtraFields);
    }
    
    // ========== SWITCH STATUT ==========
    const statusSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (statusSwitch && statusBadge && statusLabel) {
        function updateStatusDisplay() {
            if (statusSwitch.checked) {
                statusBadge.textContent = 'ACTIF';
                statusBadge.className = 'badge bg-success';
                statusLabel.textContent = 'Produit actif';
            } else {
                statusBadge.textContent = 'INACTIF';
                statusBadge.className = 'badge bg-danger';
                statusLabel.textContent = 'Produit inactif';
            }
        }
        updateStatusDisplay();
        statusSwitch.addEventListener('change', updateStatusDisplay);
    }
    
    // ========== SWITCH DATE CRITIQUE ==========
    const dateSwitch = document.getElementById('{{ form.has_expiry_date.vars.id }}');
    const dateBadge = document.getElementById('date-badge');
    const dateLabel = document.getElementById('date-label');
    
    if (dateSwitch && dateBadge && dateLabel) {
        function updateDateDisplay() {
            if (dateSwitch.checked) {
                dateBadge.textContent = 'AVEC DATE';
                dateBadge.className = 'badge bg-warning text-dark';
                dateLabel.textContent = 'Produit périssable';
            } else {
                dateBadge.textContent = 'SANS DATE';
                dateBadge.className = 'badge bg-secondary';
                dateLabel.textContent = 'Produit non périssable';
            }
        }
        updateDateDisplay();
        dateSwitch.addEventListener('change', updateDateDisplay);
    }
});
</script>

<!-- CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ============================================
   BASE
   ============================================ */
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

/* Form floating */
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
    border-radius: 8px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.2);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label {
    transform: scale(.85) translateY(-0.7rem) translateX(0.15rem);
    color: #667eea;
    font-size: 0.75rem;
}

/* Select2 */
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

/* ============================================
   ✅ STOCK INFO CARD (remplace l'alerte)
   ============================================ */
.stock-info-card {
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
    border-radius: 12px;
    border-left: 4px solid #0463f1;
    padding: 1rem 1.25rem;
    box-shadow: 0 2px 8px rgba(4, 99, 241, 0.08);
}

.stock-info-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.75rem;
}

.stock-info-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.stock-info-title h6 {
    margin: 0;
    font-weight: 700;
    color: #1e40af;
    font-size: 0.95rem;
}

.stock-info-title p {
    margin: 0;
    color: #3b82f6;
    font-size: 0.75rem;
}

.stock-info-body {
    padding-top: 0.5rem;
    border-top: 1px dashed #93c5fd;
}

.stock-info-text {
    font-size: 0.85rem;
    color: #1e3a8a;
    margin-bottom: 0.75rem;
}

.stock-info-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.stock-info-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    background: white;
    color: #1e40af;
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    border: 1px solid #bfdbfe;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.stock-info-badge i {
    font-size: 0.7rem;
    color: #3b82f6;
}

/* ============================================
   ✅ CURRENT STOCK CARD
   ============================================ */
.current-stock-card {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 0.9rem 1rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: calc(3.2rem + 2px);
}

.current-stock-content {
    display: flex;
    flex-direction: column;
}

.current-stock-label {
    font-size: 0.7rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.current-stock-value {
    display: flex;
    align-items: baseline;
    gap: 0.35rem;
}

.stock-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: #0463f1;
    line-height: 1;
}

.stock-unit {
    font-size: 0.8rem;
    color: #64748b;
}

.current-stock-status {
    margin-top: 0.5rem;
}

/* ============================================
   ✅ BOUTONS D'ACTION RESPONSIVE
   ============================================ */
.action-buttons-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
}

.action-button-left {
    display: flex;
    gap: 0.5rem;
}

.action-button-right {
    display: flex;
    gap: 0.5rem;
}

.btn-action {
    padding: 0.6rem 1.5rem;
    font-size: 0.9rem;
    font-weight: 600;
    border-radius: 10px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.btn-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.btn-primary.btn-action {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    min-width: 140px;
}

.btn-outline-secondary.btn-action {
    border: 2px solid #cbd5e1;
    color: #475569;
    min-width: 120px;
}

.btn-outline-secondary.btn-action:hover {
    background: #f1f5f9;
    border-color: #94a3b8;
}

.btn-info.btn-action {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
    color: white;
}

/* Switches */
.form-switch .form-check-input {
    width: 2.8em;
    height: 1.5em;
    cursor: pointer;
    margin-top: 0.2rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
#{{ form.has_expiry_date.vars.id }}:checked {
    background-color: #ffc107;
    border-color: #ffc107;
}

/* Inputs group */
.input-group .btn {
    border-radius: 0 8px 8px 0;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
}
.input-group .btn-outline-primary {
    border-left: none;
}
.input-group .form-control {
    border-right: none;
}

/* ============================================
   ✅ RESPONSIVE MOBILE
   ============================================ */

/* Tablette */
@media (max-width: 991.98px) {
    .action-buttons-container {
        flex-wrap: wrap;
    }
}

/* Mobile */
@media (max-width: 767.98px) {
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
    
    /* Form controls */
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
    
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        font-size: 0.85rem;
    }
    
    /* Image */
    .product-preview,
    .product-placeholder {
        width: 120px !important;
        height: 120px !important;
    }
    
    .product-placeholder i {
        font-size: 3rem !important;
    }
    
    /* Stock info card */
    .stock-info-card {
        padding: 0.75rem 1rem;
    }
    
    .stock-info-icon {
        width: 32px;
        height: 32px;
        min-width: 32px;
        font-size: 0.9rem;
    }
    
    .stock-info-title h6 {
        font-size: 0.85rem;
    }
    
    .stock-info-title p {
        font-size: 0.7rem;
    }
    
    .stock-info-text {
        font-size: 0.78rem;
    }
    
    .stock-info-badge {
        font-size: 0.68rem;
        padding: 0.3rem 0.6rem;
    }
    
    /* Current stock */
    .stock-number {
        font-size: 1.25rem;
    }
    
    .stock-unit {
        font-size: 0.7rem;
    }
    
    /* ✅ Boutons d'action MOBILE : empilés verticalement */
    .action-buttons-container {
        flex-direction: column-reverse;
        align-items: stretch;
        gap: 0.5rem;
    }
    
    .action-button-left,
    .action-button-right {
        flex-direction: column;
        width: 100%;
        gap: 0.5rem;
    }
    
    .btn-action {
        width: 100%;
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
        min-width: auto !important;
    }
    
    /* Modals */
    .modal-body {
        padding: 0.75rem !important;
    }
    
    .modal-footer {
        padding: 0.5rem !important;
    }
    
    /* Badges */
    .badge {
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
    }
    
    /* Small */
    .small {
        font-size: 0.72rem !important;
    }
}

/* Très petits mobiles */
@media (max-width: 375.98px) {
    .stock-info-badge {
        font-size: 0.62rem;
        padding: 0.25rem 0.5rem;
    }
    
    .stock-info-icon {
        width: 28px;
        height: 28px;
        min-width: 28px;
        font-size: 0.8rem;
    }
    
    .btn-action {
        font-size: 0.85rem;
        padding: 0.6rem 0.9rem;
    }
}

/* Utilitaires */
@media (max-width: 575.98px) {
    .w-100-mobile {
        width: 100% !important;
    }
}
@media (min-width: 576px) {
    .w-sm-auto {
        width: auto !important;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .btn-action:hover {
        transform: none !important;
    }
    .product-preview:hover {
        transform: none !important;
    }
}
</style>", "admin/product/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\_form.html.twig");
    }
}
