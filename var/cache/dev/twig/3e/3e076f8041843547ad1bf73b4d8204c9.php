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
class __TwigTemplate_ceb216d6631e3090277268e6ea454297 extends Template
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
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-4\">
    <!-- Carte Image -->
    <div class=\"col-lg-4\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-image me-2\"></i>Image du produit
                </h5>
            </div>
            <div class=\"card-body text-center d-flex flex-column\">
                <!-- Preview de l'image -->
                <div class=\"product-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                    ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16) != "default-product.png"))) {
            // line 17
            yield "                        <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                            <img src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            yield "\" 
                                 class=\"img-fluid rounded shadow-lg product-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                            ";
            // line 22
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)))) {
                // line 23
                yield "                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                        style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deleteImageModal\"
                                        title=\"Supprimer l'image\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            ";
            }
            // line 32
            yield "                        </div>
                    ";
        } else {
            // line 34
            yield "                        <div class=\"product-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                            <i class=\"fas fa-box fa-5x\"></i>
                        </div>
                    ";
        }
        // line 39
        yield "                </div>
                
                <!-- Champ de téléchargement d'image -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewProductImage(this)", "accept" => "image/*"]]);
        // line 48
        yield "
                        <div class=\"form-text mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 5M
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-3\">
                        <label for=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            ";
        // line 62
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62) != "default-product.png"))) ? ("Changer l'image") : ("Choisir une image"));
        yield "
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte Informations du produit -->
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-box-open me-2\"></i>
                    ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)))) {
            // line 77
            yield "                        Modifier le produit
                    ";
        } else {
            // line 79
            yield "                        Nouveau produit
                    ";
        }
        // line 81
        yield "                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <!-- Nom du produit -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 93
        yield "
                            <label for=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "name", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Nom du produit *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <!-- Code-barres avec scanner -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <div class=\"input-group\">
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "barcode", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "id" => "product-barcode"]]);
        // line 112
        yield "
                                <button type=\"button\" 
                                        class=\"btn btn-outline-primary border-start-0\" 
                                        id=\"scan-barcode-btn-form\"
                                        title=\"Scanner un code-barres\">
                                    <i class=\"fas fa-barcode\"></i>
                                </button>
                                <button type=\"button\" 
                                        class=\"btn btn-outline-secondary\" 
                                        id=\"generate-barcode-btn-form\"
                                        title=\"Générer un code-barres automatique\">
                                    <i class=\"fas fa-sync-alt\"></i>
                                </button>
                            </div>
                            <label for=\"product-barcode\">
                                <i class=\"fas fa-barcode me-1\"></i> Code-barres
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Laissez vide pour générer automatiquement
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "barcode", [], "any", false, false, false, 134), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Catégorie -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "category", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-control select2-category", "placeholder" => " "]]);
        // line 147
        yield "
                            <label for=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "category", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
        yield "\">
                                <i class=\"fas fa-folder me-1\"></i> Catégorie *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "category", [], "any", false, false, false, 152), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Unité de mesure -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "unit", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-select select2-unit", "id" => "product_unit", "placeholder" => " "]]);
        // line 166
        yield "
                            <label for=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "unit", [], "any", false, false, false, 167), "vars", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167), "html", null, true);
        yield "\">
                                <i class=\"fas fa-weight-hanging me-1\"></i> Unité de mesure
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Si aucune unité n'est sélectionnée, \"Pièce\" sera utilisé par défaut.
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "unit", [], "any", false, false, false, 175), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!-- Prix -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-";
        // line 183
        yield ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 183, $this->source); })()) == "restaurant")) ? ("12") : ("6"));
        yield "\">
                        <div class=\"form-floating\">
                            ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "purchase_price", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
        // line 190
        yield "
                            <label for=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "purchase_price", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "id", [], "any", false, false, false, 191), "html", null, true);
        yield "\">
                                <i class=\"fas fa-arrow-down me-1\"></i> Prix d'achat (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "purchase_price", [], "any", false, false, false, 195), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 199
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 199, $this->source); })()) != "restaurant")) {
            // line 200
            yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
            // line 202
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "sale_price", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
            // line 207
            yield "
                            <label for=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "sale_price", [], "any", false, false, false, 208), "vars", [], "any", false, false, false, 208), "id", [], "any", false, false, false, 208), "html", null, true);
            yield "\">
                                <i class=\"fas fa-arrow-up me-1\"></i> Prix de vente (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
            // line 212
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "sale_price", [], "any", false, false, false, 212), 'errors');
            yield "
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 217
        yield "                </div>
                
                <!-- Marge calculée -->
                ";
        // line 220
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 220, $this->source); })()) != "restaurant")) {
            // line 221
            yield "                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body py-2\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-chart-line me-1\"></i> Marge
                                    </small>
                                    <div>
                                        <span id=\"margin-amount\" class=\"fw-bold\">0 FCFA</span>
                                        <span id=\"margin-percentage\" class=\"badge ms-2\">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 239
        yield "
                <!-- Stock -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "stock_quantity", [], "any", false, false, false, 244), 'widget', ["attr" => ["class" => ("form-control" . (((        // line 245
array_key_exists("canEditStock", $context) &&  !(isset($context["canEditStock"]) || array_key_exists("canEditStock", $context) ? $context["canEditStock"] : (function () { throw new RuntimeError('Variable "canEditStock" does not exist.', 245, $this->source); })()))) ? (" bg-light") : (""))), "placeholder" => " ", "autocomplete" => "off", "readonly" => (((        // line 248
array_key_exists("canEditStock", $context) &&  !(isset($context["canEditStock"]) || array_key_exists("canEditStock", $context) ? $context["canEditStock"] : (function () { throw new RuntimeError('Variable "canEditStock" does not exist.', 248, $this->source); })()))) ? ("readonly") : (false))]]);
        // line 249
        yield "
                            <label for=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "stock_quantity", [], "any", false, false, false, 250), "vars", [], "any", false, false, false, 250), "id", [], "any", false, false, false, 250), "html", null, true);
        yield "\">
                                <i class=\"fas fa-box me-1\"></i> Stock initial *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "stock_quantity", [], "any", false, false, false, 254), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"stock_unit_help\">Unité : ";
        // line 256
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 256, $this->source); })()), "unit", [], "any", false, false, false, 256)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 256, $this->source); })()), "unit", [], "any", false, false, false, 256), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "min_quantity", [], "any", false, false, false, 261), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 265
        yield "
                            <label for=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "min_quantity", [], "any", false, false, false, 266), "vars", [], "any", false, false, false, 266), "id", [], "any", false, false, false, 266), "html", null, true);
        yield "\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Stock minimum d'alerte
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "min_quantity", [], "any", false, false, false, 270), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"min_quantity_unit_help\">Alerte en ";
        // line 272
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 272, $this->source); })()), "unit", [], "any", false, false, false, 272)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 272, $this->source); })()), "unit", [], "any", false, false, false, 272), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                </div>

                <!-- Message informatif sur le stock -->
                ";
        // line 278
        if ((array_key_exists("canEditStock", $context) &&  !(isset($context["canEditStock"]) || array_key_exists("canEditStock", $context) ? $context["canEditStock"] : (function () { throw new RuntimeError('Variable "canEditStock" does not exist.', 278, $this->source); })()))) {
            // line 279
            yield "                <div class=\"row mt-2\">
                    <div class=\"col-12\">
                        <div class=\"alert alert-warning py-2 px-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <small>Le stock est géré automatiquement via les achats et les ventes. Seul un administrateur peut modifier cette valeur manuellement.</small>
                        </div>
                    </div>
                </div>
                ";
        } elseif ((        // line 287
array_key_exists("canEditStock", $context) && (isset($context["canEditStock"]) || array_key_exists("canEditStock", $context) ? $context["canEditStock"] : (function () { throw new RuntimeError('Variable "canEditStock" does not exist.', 287, $this->source); })()))) {
            // line 288
            yield "                <div class=\"row mt-2\">
                    <div class=\"col-12\">
                        <div class=\"alert alert-info py-2 px-3\">
                            <i class=\"fas fa-history me-2\"></i>
                            <small>La modification du stock sera tracée (qui et quand).</small>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 297
        yield "                
                <!-- Switches pour Statut et Date critique -->
                <div class=\"row g-3 mt-3\">
                    <!-- Switch Statut Actif/Inactif -->
                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut du produit</span>
                                    </div>
                                    <span class=\"badge ";
        // line 309
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "is_active", [], "any", false, false, false, 309), "vars", [], "any", false, false, false, 309), "data", [], "any", false, false, false, 309)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 310
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "is_active", [], "any", false, false, false, 310), "vars", [], "any", false, false, false, 310), "data", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "is_active", [], "any", false, false, false, 314), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 317
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "is_active", [], "any", false, false, false, 318), "vars", [], "any", false, false, false, 318), "id", [], "any", false, false, false, 318), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 319
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "is_active", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "data", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit actif") : ("Produit inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les produits inactifs ne seront pas visibles
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "is_active", [], "any", false, false, false, 327), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Switch Date critique -->
                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                                        <span class=\"fw-bold\">Date critique</span>
                                    </div>
                                    <span class=\"badge ";
        // line 342
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 342), "vars", [], "any", false, false, false, 342), "data", [], "any", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-warning text-dark") : ("bg-secondary"));
        yield "\" id=\"date-badge\">
                                        ";
        // line 343
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "data", [], "any", false, false, false, 343)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("AVEC DATE") : ("SANS DATE"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 347), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 350
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 351), "vars", [], "any", false, false, false, 351), "id", [], "any", false, false, false, 351), "html", null, true);
        yield "\" id=\"date-label\">
                                        ";
        // line 352
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 352), "vars", [], "any", false, false, false, 352), "data", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit périssable") : ("Produit non périssable"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert date d'expiration lors des achats
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 360
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 360), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Description -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 371
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "description", [], "any", false, false, false, 371), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 375
        yield "
                            <label for=\"";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "description", [], "any", false, false, false, 376), "vars", [], "any", false, false, false, 376), "id", [], "any", false, false, false, 376), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 380
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "description", [], "any", false, false, false, 380), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- fin card-body -->

            <!-- Bouton Autres informations -->
            <div class=\"row g-3 mt-3 px-3\">
                <div class=\"col-12\">
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body py-2\">
                            <div class=\"form-check form-switch\">
                                ";
        // line 393
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "show_extra", [], "any", false, false, false, 393), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 396
        yield "
                                <label class=\"form-check-label fw-bold\" for=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "show_extra", [], "any", false, false, false, 397), "vars", [], "any", false, false, false, 397), "id", [], "any", false, false, false, 397), "html", null, true);
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
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "dosage", [], "any", false, false, false, 411), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "dosage", [], "any", false, false, false, 412), "vars", [], "any", false, false, false, 412), "id", [], "any", false, false, false, 412), "html", null, true);
        yield "\">Dosage</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 413
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "dosage", [], "any", false, false, false, 413), 'errors');
        yield "</div>
                            <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    EX : 500 mg
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 422
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "form", [], "any", false, false, false, 422), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "form", [], "any", false, false, false, 423), "vars", [], "any", false, false, false, 423), "id", [], "any", false, false, false, 423), "html", null, true);
        yield "\">Forme</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "form", [], "any", false, false, false, 424), 'errors');
        yield "</div>
                            <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    EX : Comprimé
                                </small>
                        </div>
                    </div>
                </div>

                ";
        // line 434
        yield "                ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 434, $this->source); })()) == "pharmacy")) {
            // line 435
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 440
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "prescription_required", [], "any", false, false, false, 440), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label\" for=\"";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "prescription_required", [], "any", false, false, false, 441), "vars", [], "any", false, false, false, 441), "id", [], "any", false, false, false, 441), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-prescription me-2 text-danger\"></i>
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">";
            // line 445
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), "prescription_required", [], "any", false, false, false, 445), 'errors');
            yield "</div>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Requiert une ordonnance à la vente
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
            // line 456
            yield "                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 460
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), "company_public", [], "any", false, false, false, 460), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label\" for=\"";
            // line 461
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "company_public", [], "any", false, false, false, 461), "vars", [], "any", false, false, false, 461), "id", [], "any", false, false, false, 461), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-globe me-2 text-primary\"></i>
                                        Visible sur le marketplace
                                    </label>
                                    <div class=\"invalid-feedback d-block\">";
            // line 465
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "company_public", [], "any", false, false, false, 465), 'errors');
            yield "</div>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Décochez pour masquer ce produit sur le marketplace
                                    </small>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-eye-slash me-1\"></i>
                                        Il restera visible dans votre back-office
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 480
        yield "            </div>

            ";
        // line 482
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 482, $this->source); })()) == "restaurant")) {
            // line 483
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 488
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), "is_storable", [], "any", false, false, false, 488), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 491
            yield "
                                    <label class=\"form-check-label fw-bold\" for=\"";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 492, $this->source); })()), "is_storable", [], "any", false, false, false, 492), "vars", [], "any", false, false, false, 492), "id", [], "any", false, false, false, 492), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-boxes me-2\"></i>Produit stockable
                                    </label>
                                    <div class=\"form-text mt-2\">
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
            // line 510
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 510, $this->source); })()), "is_storable", [], "any", false, false, false, 510), 'errors');
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 517
        yield "            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 521
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 528, $this->source); })()), "Enregistrer le produit")) : ("Enregistrer le produit")), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 531
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 531) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 531, $this->source); })()), "id", [], "any", false, false, false, 531)))) {
            // line 532
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 532, $this->source); })()), "id", [], "any", false, false, false, 532)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 536
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 542
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 542, $this->source); })()), 'form_end');
        yield "

<!-- Modals -->
";
        // line 545
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 545) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 545, $this->source); })()), "id", [], "any", false, false, false, 545))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 545, $this->source); })()), "image", [], "any", false, false, false, 545)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 545, $this->source); })()), "image", [], "any", false, false, false, 545) != "default-product.png"))) {
            // line 546
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
            // line 562
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 562, $this->source); })()), "image", [], "any", false, false, false, 562))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 563
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 563, $this->source); })()), "name", [], "any", false, false, false, 563), "html", null, true);
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
            // line 572
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 572, $this->source); })()), "id", [], "any", false, false, false, 572)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 573, $this->source); })()), "id", [], "any", false, false, false, 573))), "html", null, true);
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
        // line 583
        yield "
<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModalForm\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-barcode me-2\"></i> Scanner un code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-barcode fa-4x text-primary mb-3\"></i>
                    <p class=\"text-muted\">Scannez ou saisissez un code-barres</p>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\">Code-barres :</label>
                    <input type=\"text\" 
                           id=\"barcode-scanner-input\" 
                           class=\"form-control form-control-lg text-center\"
                           placeholder=\"Saisissez ou scannez...\"
                           autofocus
                           style=\"letter-spacing: 2px; font-family: 'Courier New', monospace;\">
                    <div class=\"form-text mt-2\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez directement ou utilisez votre scanner USB
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"use-scanned-barcode\">
                    <i class=\"fas fa-check me-1\"></i> Utiliser ce code
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
                // Remplacer le placeholder par une image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg product-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                // Mettre à jour l'image existante
                preview.src = e.target.result;
            }
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

// Calcul de la marge
function calculateMargin() {
    ";
        // line 653
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 653, $this->source); })()) != "restaurant")) {
            // line 654
            yield "    const purchasePriceInput = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 654, $this->source); })()), "purchase_price", [], "any", false, false, false, 654), "vars", [], "any", false, false, false, 654), "id", [], "any", false, false, false, 654), "html", null, true);
            yield "');
    const salePriceInput = document.getElementById('";
            // line 655
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 655, $this->source); })()), "sale_price", [], "any", false, false, false, 655), "vars", [], "any", false, false, false, 655), "id", [], "any", false, false, false, 655), "html", null, true);
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
            
            // Changer la couleur selon la marge
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
        // line 692
        yield "}

// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé, initialisation des scripts...');
    
    // ========== MISE À JOUR DE L'UNITÉ POUR LE STOCK ET L'ALERTE ==========
    const unitSelect = document.getElementById('product_unit');
    const stockUnitHelp = document.getElementById('stock_unit_help');
    const minQuantityHelp = document.getElementById('min_quantity_unit_help');
    
    if (unitSelect && stockUnitHelp && minQuantityHelp) {
        function updateUnitHelps() {
            const selectedOption = unitSelect.options[unitSelect.selectedIndex];
            let unitText = selectedOption ? selectedOption.text : 'pièce';
            // Si l'option est le placeholder, on affiche \"pièce\"
            if (unitSelect.value === '' || !unitSelect.value) {
                unitText = 'pièce';
            }
            stockUnitHelp.textContent = 'Unité : ' + unitText;
            minQuantityHelp.textContent = 'Alerte en ' + unitText;
        }
        
        // Initialiser
        updateUnitHelps();
        
        // Écouter le changement
        unitSelect.addEventListener('change', updateUnitHelps);
    }
    
    // ========== SELECT2 POUR CATÉGORIE ==========
    if (typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        // Catégorie
        if (\$('.select2-category').length) {
            // Détruire toute instance existante avant de recréer
            if (\$('.select2-category').data('select2')) {
                \$('.select2-category').select2('destroy');
            }
            
            \$('.select2-category').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"Sélectionnez une catégorie...\",
                allowClear: false,
                minimumInputLength: 0
            });
        }
        
        // ========== SELECT2 POUR UNITÉ ==========
        if (\$('.select2-unit').length) {
            if (\$('.select2-unit').data('select2')) {
                \$('.select2-unit').select2('destroy');
            }
            
            \$('.select2-unit').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"-- Choisir une unité --\",
                allowClear: true
            });
        }
    } else {
        console.warn('jQuery ou Select2 non chargé');
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
    } else {
        console.warn('Bootstrap non chargé ou modal introuvable');
    }
    
    // ========== MARGE ==========
    ";
        // line 812
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 812, $this->source); })()) != "restaurant")) {
            // line 813
            yield "    calculateMargin();
    ";
        }
        // line 815
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
    
    // ========== GESTION DU SWITCH \"AUTRES INFORMATIONS\" ==========
    const showExtraSwitch = document.getElementById('";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 829, $this->source); })()), "show_extra", [], "any", false, false, false, 829), "vars", [], "any", false, false, false, 829), "id", [], "any", false, false, false, 829), "html", null, true);
        yield "');
    const extraFields = document.getElementById('extraFields');

    if (showExtraSwitch && extraFields) {
        // Fonction pour basculer l'affichage
        function toggleExtraFields() {
            extraFields.style.display = showExtraSwitch.checked ? 'block' : 'none';
        }
        
        // Appliquer l'état initial
        toggleExtraFields();
        
        // Ajouter l'écouteur d'événement
        showExtraSwitch.addEventListener('change', toggleExtraFields);
    }
    
    // ========== GESTION DES SWITCHES STATUT ET DATE ==========
    // Switch statut
    const statusSwitch = document.getElementById('";
        // line 847
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 847, $this->source); })()), "is_active", [], "any", false, false, false, 847), "vars", [], "any", false, false, false, 847), "id", [], "any", false, false, false, 847), "html", null, true);
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
    
    // Switch date critique
    const dateSwitch = document.getElementById('";
        // line 869
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 869, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 869), "vars", [], "any", false, false, false, 869), "id", [], "any", false, false, false, 869), "html", null, true);
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
    
    // ========== MISE À JOUR DE L'UNITÉ DANS LES CHAMPS STOCK ==========
    function updateStockUnitHelp() {
        const unitSelectField = document.getElementById('product_unit');
        const stockHelp = document.getElementById('stock_unit_help');
        const minHelp = document.getElementById('min_quantity_unit_help');
        
        if (unitSelectField && stockHelp && minHelp) {
            let selectedText = unitSelectField.options[unitSelectField.selectedIndex]?.text || 'pièce';
            if (selectedText === '-- Choisir une unité --' || !selectedText) {
                selectedText = 'pièce';
            }
            stockHelp.textContent = 'Unité : ' + selectedText;
            minHelp.textContent = 'Alerte en ' + selectedText;
        }
    }
    
    // Initialiser et écouter les changements d'unité
    const unitField = document.getElementById('product_unit');
    if (unitField) {
        updateStockUnitHelp();
        unitField.addEventListener('change', updateStockUnitHelp);
    }
});
</script>

<!-- CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
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
.product-preview {
    transition: all 0.3s ease;
}
.product-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.input-group .btn {
    border-radius: 0 10px 10px 0;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.input-group .btn-outline-primary {
    border-left: none;
}
.input-group .form-control {
    border-right: none;
}
.input-group .form-control:focus {
    border-color: #667eea;
    box-shadow: none;
}
.input-group .btn:focus {
    box-shadow: none;
}
#margin-percentage {
    transition: all 0.3s ease;
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-input:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
#";
        // line 1023
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1023, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 1023), "vars", [], "any", false, false, false, 1023), "id", [], "any", false, false, false, 1023), "html", null, true);
        yield ":checked {
    background-color: #ffc107;
    border-color: #ffc107;
}
#";
        // line 1027
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1027, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 1027), "vars", [], "any", false, false, false, 1027), "id", [], "any", false, false, false, 1027), "html", null, true);
        yield ":focus {
    box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
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
        return array (  1339 => 1027,  1332 => 1023,  1175 => 869,  1150 => 847,  1129 => 829,  1113 => 815,  1109 => 813,  1107 => 812,  985 => 692,  945 => 655,  940 => 654,  938 => 653,  866 => 583,  853 => 573,  849 => 572,  837 => 563,  833 => 562,  815 => 546,  813 => 545,  807 => 542,  799 => 536,  791 => 532,  789 => 531,  783 => 528,  773 => 521,  767 => 517,  757 => 510,  736 => 492,  733 => 491,  731 => 488,  724 => 483,  722 => 482,  718 => 480,  700 => 465,  693 => 461,  689 => 460,  683 => 456,  670 => 445,  663 => 441,  659 => 440,  652 => 435,  649 => 434,  637 => 424,  633 => 423,  629 => 422,  617 => 413,  613 => 412,  609 => 411,  592 => 397,  589 => 396,  587 => 393,  571 => 380,  564 => 376,  561 => 375,  559 => 371,  545 => 360,  534 => 352,  530 => 351,  527 => 350,  525 => 347,  518 => 343,  514 => 342,  496 => 327,  485 => 319,  481 => 318,  478 => 317,  476 => 314,  469 => 310,  465 => 309,  451 => 297,  440 => 288,  438 => 287,  428 => 279,  426 => 278,  417 => 272,  412 => 270,  405 => 266,  402 => 265,  400 => 261,  392 => 256,  387 => 254,  380 => 250,  377 => 249,  375 => 248,  374 => 245,  373 => 244,  366 => 239,  346 => 221,  344 => 220,  339 => 217,  331 => 212,  324 => 208,  321 => 207,  319 => 202,  315 => 200,  313 => 199,  306 => 195,  299 => 191,  296 => 190,  294 => 185,  289 => 183,  278 => 175,  267 => 167,  264 => 166,  262 => 162,  249 => 152,  242 => 148,  239 => 147,  237 => 144,  224 => 134,  200 => 112,  198 => 107,  186 => 98,  179 => 94,  176 => 93,  174 => 89,  164 => 81,  160 => 79,  156 => 77,  154 => 76,  137 => 62,  132 => 60,  123 => 54,  115 => 48,  113 => 44,  106 => 39,  99 => 34,  95 => 32,  84 => 23,  82 => 22,  76 => 19,  72 => 18,  69 => 17,  67 => 16,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/_form.html.twig #}

{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"row g-4\">
    <!-- Carte Image -->
    <div class=\"col-lg-4\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-image me-2\"></i>Image du produit
                </h5>
            </div>
            <div class=\"card-body text-center d-flex flex-column\">
                <!-- Preview de l'image -->
                <div class=\"product-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                                 alt=\"{{ product.name }}\" 
                                 class=\"img-fluid rounded shadow-lg product-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                            {% if product.id is defined and product.id is not null %}
                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                        style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deleteImageModal\"
                                        title=\"Supprimer l'image\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"product-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                            <i class=\"fas fa-box fa-5x\"></i>
                        </div>
                    {% endif %}
                </div>
                
                <!-- Champ de téléchargement d'image -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        {{ form_widget(form.image, {'attr': {
                            'class': 'form-control', 
                            'onchange': 'previewProductImage(this)',
                            'accept': 'image/*'
                        }}) }}
                        <div class=\"form-text mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 5M
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            {{ form_errors(form.image) }}
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-3\">
                        <label for=\"{{ form.image.vars.id }}\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            {{ product.image and product.image != 'default-product.png' ? 'Changer l\\'image' : 'Choisir une image' }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte Informations du produit -->
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-box-open me-2\"></i>
                    {% if product.id is defined and product.id is not null %}
                        Modifier le produit
                    {% else %}
                        Nouveau produit
                    {% endif %}
                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <!-- Nom du produit -->
                    <div class=\"col-md-6\">
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
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <div class=\"input-group\">
                                {{ form_widget(form.barcode, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off',
                                    'id': 'product-barcode'
                                }}) }}
                                <button type=\"button\" 
                                        class=\"btn btn-outline-primary border-start-0\" 
                                        id=\"scan-barcode-btn-form\"
                                        title=\"Scanner un code-barres\">
                                    <i class=\"fas fa-barcode\"></i>
                                </button>
                                <button type=\"button\" 
                                        class=\"btn btn-outline-secondary\" 
                                        id=\"generate-barcode-btn-form\"
                                        title=\"Générer un code-barres automatique\">
                                    <i class=\"fas fa-sync-alt\"></i>
                                </button>
                            </div>
                            <label for=\"product-barcode\">
                                <i class=\"fas fa-barcode me-1\"></i> Code-barres
                            </label>
                            <div class=\"form-text\">
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
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
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
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.unit, {'attr': {
                                'class': 'form-select select2-unit',  
                                'id': 'product_unit', 
                                'placeholder': ' '
                            }}) }}
                            <label for=\"{{ form.unit.vars.id }}\">
                                <i class=\"fas fa-weight-hanging me-1\"></i> Unité de mesure
                            </label>
                            <div class=\"form-text\">
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
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-{{ companyType == 'restaurant' ? '12' : '6' }}\">
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
                    <div class=\"col-md-6\">
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
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body py-2\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-chart-line me-1\"></i> Marge
                                    </small>
                                    <div>
                                        <span id=\"margin-amount\" class=\"fw-bold\">0 FCFA</span>
                                        <span id=\"margin-percentage\" class=\"badge ms-2\">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <!-- Stock -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.stock_quantity, {'attr': {
                                'class': 'form-control' ~ (canEditStock is defined and not canEditStock ? ' bg-light' : ''),
                                'placeholder': ' ',
                                'autocomplete': 'off',
                                'readonly': canEditStock is defined and not canEditStock ? 'readonly' : false
                            }}) }}
                            <label for=\"{{ form.stock_quantity.vars.id }}\">
                                <i class=\"fas fa-box me-1\"></i> Stock initial *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.stock_quantity) }}
                            </div>
                            <small class=\"text-muted\" id=\"stock_unit_help\">Unité : {{ product.unit ?: 'pièce' }}</small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
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
                            <small class=\"text-muted\" id=\"min_quantity_unit_help\">Alerte en {{ product.unit ?: 'pièce' }}</small>
                        </div>
                    </div>
                </div>

                <!-- Message informatif sur le stock -->
                {% if canEditStock is defined and not canEditStock %}
                <div class=\"row mt-2\">
                    <div class=\"col-12\">
                        <div class=\"alert alert-warning py-2 px-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <small>Le stock est géré automatiquement via les achats et les ventes. Seul un administrateur peut modifier cette valeur manuellement.</small>
                        </div>
                    </div>
                </div>
                {% elseif canEditStock is defined and canEditStock %}
                <div class=\"row mt-2\">
                    <div class=\"col-12\">
                        <div class=\"alert alert-info py-2 px-3\">
                            <i class=\"fas fa-history me-2\"></i>
                            <small>La modification du stock sera tracée (qui et quand).</small>
                        </div>
                    </div>
                </div>
                {% endif %}
                
                <!-- Switches pour Statut et Date critique -->
                <div class=\"row g-3 mt-3\">
                    <!-- Switch Statut Actif/Inactif -->
                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut du produit</span>
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
                                    <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                        {{ form.is_active.vars.data ? 'Produit actif' : 'Produit inactif' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
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
                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light h-100\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                                        <span class=\"fw-bold\">Date critique</span>
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
                                    <label class=\"form-check-label\" for=\"{{ form.has_expiry_date.vars.id }}\" id=\"date-label\">
                                        {{ form.has_expiry_date.vars.data ? 'Produit périssable' : 'Produit non périssable' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
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
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
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
            </div> <!-- fin card-body -->

            <!-- Bouton Autres informations -->
            <div class=\"row g-3 mt-3 px-3\">
                <div class=\"col-12\">
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body py-2\">
                            <div class=\"form-check form-switch\">
                                {{ form_widget(form.show_extra, {'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch'
                                }}) }}
                                <label class=\"form-check-label fw-bold\" for=\"{{ form.show_extra.vars.id }}\">
                                    <i class=\"fas fa-ellipsis-h me-2\"></i>Autre information
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Champs supplémentaires (cachés par défaut) -->
            <div id=\"extraFields\" style=\"display: none;\" class=\"px-3\">
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.dosage, {'attr': {'class': 'form-control', 'placeholder': ' '}}) }}
                            <label for=\"{{ form.dosage.vars.id }}\">Dosage</label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.dosage) }}</div>
                            <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    EX : 500 mg
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.form, {'attr': {'class': 'form-control', 'placeholder': ' '}}) }}
                            <label for=\"{{ form.form.vars.id }}\">Forme</label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.form) }}</div>
                            <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    EX : Comprimé
                                </small>
                        </div>
                    </div>
                </div>

                {# ✅ Champs spécifiques aux pharmacies #}
                {% if companyType == 'pharmacy' %}
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.prescription_required, {'attr': {'class': 'form-check-input'}}) }}
                                    <label class=\"form-check-label\" for=\"{{ form.prescription_required.vars.id }}\">
                                        <i class=\"fas fa-prescription me-2 text-danger\"></i>
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">{{ form_errors(form.prescription_required) }}</div>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Requiert une ordonnance à la vente
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {# ✅ AJOUT : Visibilité sur le marketplace #}
                    <div class=\"col-md-6\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.company_public, {'attr': {'class': 'form-check-input'}}) }}
                                    <label class=\"form-check-label\" for=\"{{ form.company_public.vars.id }}\">
                                        <i class=\"fas fa-globe me-2 text-primary\"></i>
                                        Visible sur le marketplace
                                    </label>
                                    <div class=\"invalid-feedback d-block\">{{ form_errors(form.company_public) }}</div>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Décochez pour masquer ce produit sur le marketplace
                                    </small>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-eye-slash me-1\"></i>
                                        Il restera visible dans votre back-office
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>

            {% if companyType == 'restaurant' %}
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.is_storable, {'attr': {
                                        'class': 'form-check-input',
                                        'role': 'switch'
                                    }}) }}
                                    <label class=\"form-check-label fw-bold\" for=\"{{ form.is_storable.vars.id }}\">
                                        <i class=\"fas fa-boxes me-2\"></i>Produit stockable
                                    </label>
                                    <div class=\"form-text mt-2\">
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
            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            {{ button_label|default('Enregistrer le produit') }}
                        </button>
                        
                        {% if product.id is defined and product.id is not null %}
                            <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"btn btn-info btn-lg\">
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

<!-- Modals -->
{% if product.id is defined and product.id is not null and product.image and product.image != 'default-product.png' %}
<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
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
                    <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                         alt=\"{{ product.name }}\" 
                         class=\"rounded shadow-lg\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_admin_product_delete_image', {'id': product.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-image' ~ product.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer l'image
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModalForm\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-barcode me-2\"></i> Scanner un code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-barcode fa-4x text-primary mb-3\"></i>
                    <p class=\"text-muted\">Scannez ou saisissez un code-barres</p>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\">Code-barres :</label>
                    <input type=\"text\" 
                           id=\"barcode-scanner-input\" 
                           class=\"form-control form-control-lg text-center\"
                           placeholder=\"Saisissez ou scannez...\"
                           autofocus
                           style=\"letter-spacing: 2px; font-family: 'Courier New', monospace;\">
                    <div class=\"form-text mt-2\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez directement ou utilisez votre scanner USB
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"use-scanned-barcode\">
                    <i class=\"fas fa-check me-1\"></i> Utiliser ce code
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
                // Remplacer le placeholder par une image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg product-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                // Mettre à jour l'image existante
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
            
            // Changer la couleur selon la marge
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

// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé, initialisation des scripts...');
    
    // ========== MISE À JOUR DE L'UNITÉ POUR LE STOCK ET L'ALERTE ==========
    const unitSelect = document.getElementById('product_unit');
    const stockUnitHelp = document.getElementById('stock_unit_help');
    const minQuantityHelp = document.getElementById('min_quantity_unit_help');
    
    if (unitSelect && stockUnitHelp && minQuantityHelp) {
        function updateUnitHelps() {
            const selectedOption = unitSelect.options[unitSelect.selectedIndex];
            let unitText = selectedOption ? selectedOption.text : 'pièce';
            // Si l'option est le placeholder, on affiche \"pièce\"
            if (unitSelect.value === '' || !unitSelect.value) {
                unitText = 'pièce';
            }
            stockUnitHelp.textContent = 'Unité : ' + unitText;
            minQuantityHelp.textContent = 'Alerte en ' + unitText;
        }
        
        // Initialiser
        updateUnitHelps();
        
        // Écouter le changement
        unitSelect.addEventListener('change', updateUnitHelps);
    }
    
    // ========== SELECT2 POUR CATÉGORIE ==========
    if (typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        // Catégorie
        if (\$('.select2-category').length) {
            // Détruire toute instance existante avant de recréer
            if (\$('.select2-category').data('select2')) {
                \$('.select2-category').select2('destroy');
            }
            
            \$('.select2-category').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"Sélectionnez une catégorie...\",
                allowClear: false,
                minimumInputLength: 0
            });
        }
        
        // ========== SELECT2 POUR UNITÉ ==========
        if (\$('.select2-unit').length) {
            if (\$('.select2-unit').data('select2')) {
                \$('.select2-unit').select2('destroy');
            }
            
            \$('.select2-unit').select2({
                theme: \"bootstrap-5\",
                language: \"fr\",
                width: \"100%\",
                placeholder: \"-- Choisir une unité --\",
                allowClear: true
            });
        }
    } else {
        console.warn('jQuery ou Select2 non chargé');
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
    } else {
        console.warn('Bootstrap non chargé ou modal introuvable');
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
    
    // ========== GESTION DU SWITCH \"AUTRES INFORMATIONS\" ==========
    const showExtraSwitch = document.getElementById('{{ form.show_extra.vars.id }}');
    const extraFields = document.getElementById('extraFields');

    if (showExtraSwitch && extraFields) {
        // Fonction pour basculer l'affichage
        function toggleExtraFields() {
            extraFields.style.display = showExtraSwitch.checked ? 'block' : 'none';
        }
        
        // Appliquer l'état initial
        toggleExtraFields();
        
        // Ajouter l'écouteur d'événement
        showExtraSwitch.addEventListener('change', toggleExtraFields);
    }
    
    // ========== GESTION DES SWITCHES STATUT ET DATE ==========
    // Switch statut
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
    
    // Switch date critique
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
    
    // ========== MISE À JOUR DE L'UNITÉ DANS LES CHAMPS STOCK ==========
    function updateStockUnitHelp() {
        const unitSelectField = document.getElementById('product_unit');
        const stockHelp = document.getElementById('stock_unit_help');
        const minHelp = document.getElementById('min_quantity_unit_help');
        
        if (unitSelectField && stockHelp && minHelp) {
            let selectedText = unitSelectField.options[unitSelectField.selectedIndex]?.text || 'pièce';
            if (selectedText === '-- Choisir une unité --' || !selectedText) {
                selectedText = 'pièce';
            }
            stockHelp.textContent = 'Unité : ' + selectedText;
            minHelp.textContent = 'Alerte en ' + selectedText;
        }
    }
    
    // Initialiser et écouter les changements d'unité
    const unitField = document.getElementById('product_unit');
    if (unitField) {
        updateStockUnitHelp();
        unitField.addEventListener('change', updateStockUnitHelp);
    }
});
</script>

<!-- CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
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
.product-preview {
    transition: all 0.3s ease;
}
.product-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.input-group .btn {
    border-radius: 0 10px 10px 0;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.input-group .btn-outline-primary {
    border-left: none;
}
.input-group .form-control {
    border-right: none;
}
.input-group .form-control:focus {
    border-color: #667eea;
    box-shadow: none;
}
.input-group .btn:focus {
    box-shadow: none;
}
#margin-percentage {
    transition: all 0.3s ease;
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-input:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
#{{ form.has_expiry_date.vars.id }}:checked {
    background-color: #ffc107;
    border-color: #ffc107;
}
#{{ form.has_expiry_date.vars.id }}:focus {
    box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
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
</style>", "admin/product/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\_form.html.twig");
    }
}
