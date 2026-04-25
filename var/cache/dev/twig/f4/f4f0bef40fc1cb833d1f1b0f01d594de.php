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
class __TwigTemplate_c3c1fd79d7bc70ab6d851406199de07a extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
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
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15) != "default-product.png"))) {
            // line 16
            yield "                        <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                            <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
            yield "\" 
                                 class=\"img-fluid rounded shadow-lg product-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                            ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)))) {
                // line 22
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
            // line 31
            yield "                        </div>
                    ";
        } else {
            // line 33
            yield "                        <div class=\"product-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                            <i class=\"fas fa-box fa-5x\"></i>
                        </div>
                    ";
        }
        // line 38
        yield "                </div>
                
                <!-- Champ de téléchargement d'image -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewProductImage(this)", "accept" => "image/*"]]);
        // line 47
        yield "
                        <div class=\"form-text mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 5M
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-3\">
                        <label for=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            ";
        // line 61
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61) != "default-product.png"))) ? ("Changer l'image") : ("Choisir une image"));
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
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)))) {
            // line 76
            yield "                        Modifier le produit
                    ";
        } else {
            // line 78
            yield "                        Nouveau produit
                    ";
        }
        // line 80
        yield "                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <!-- Nom du produit -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 92
        yield "
                            <label for=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Nom du produit *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <!-- Code-barres avec scanner -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <div class=\"input-group\">
                                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "barcode", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "id" => "product-barcode"]]);
        // line 111
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
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "barcode", [], "any", false, false, false, 133), 'errors');
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
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "category", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control select2-category", "placeholder" => " "]]);
        // line 146
        yield "
                            <label for=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "category", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "html", null, true);
        yield "\">
                                <i class=\"fas fa-folder me-1\"></i> Catégorie *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "category", [], "any", false, false, false, 151), 'errors');
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
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "unit", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "form-select select2-unit", "id" => "product_unit", "placeholder" => " "]]);
        // line 164
        yield "
                            <label for=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "unit", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "html", null, true);
        yield "\">
                                <i class=\"fas fa-weight-hanging me-1\"></i> Unité de mesure
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Si aucune unité n'est sélectionnée, \"Pièce\" sera utilisé par défaut.
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "unit", [], "any", false, false, false, 173), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!-- Prix -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-";
        // line 181
        yield ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 181, $this->source); })()) == "restaurant")) ? ("12") : ("6"));
        yield "\">
                        <div class=\"form-floating\">
                            ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "purchase_price", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
        // line 188
        yield "
                            <label for=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "purchase_price", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189), "html", null, true);
        yield "\">
                                <i class=\"fas fa-arrow-down me-1\"></i> Prix d'achat (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "purchase_price", [], "any", false, false, false, 193), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 197
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 197, $this->source); })()) != "restaurant")) {
            // line 198
            yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
            // line 200
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "sale_price", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
            // line 205
            yield "
                            <label for=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "sale_price", [], "any", false, false, false, 206), "vars", [], "any", false, false, false, 206), "id", [], "any", false, false, false, 206), "html", null, true);
            yield "\">
                                <i class=\"fas fa-arrow-up me-1\"></i> Prix de vente (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
            // line 210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "sale_price", [], "any", false, false, false, 210), 'errors');
            yield "
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 215
        yield "                </div>
                
                <!-- Marge calculée -->
                ";
        // line 218
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 218, $this->source); })()) != "restaurant")) {
            // line 219
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
        // line 237
        yield "                
                <!-- Stock -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "stock_quantity", [], "any", false, false, false, 242), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 246
        yield "
                            <label for=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "stock_quantity", [], "any", false, false, false, 247), "vars", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247), "html", null, true);
        yield "\">
                                <i class=\"fas fa-box me-1\"></i> Stock initial *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "stock_quantity", [], "any", false, false, false, 251), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"stock_unit_help\">Unité : ";
        // line 253
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 253, $this->source); })()), "unit", [], "any", false, false, false, 253)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 253, $this->source); })()), "unit", [], "any", false, false, false, 253), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "min_quantity", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 262
        yield "
                            <label for=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "min_quantity", [], "any", false, false, false, 263), "vars", [], "any", false, false, false, 263), "id", [], "any", false, false, false, 263), "html", null, true);
        yield "\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Stock minimum d'alerte
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "min_quantity", [], "any", false, false, false, 267), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"min_quantity_unit_help\">Alerte en ";
        // line 269
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 269, $this->source); })()), "unit", [], "any", false, false, false, 269)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 269, $this->source); })()), "unit", [], "any", false, false, false, 269), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                </div>
                
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
        // line 285
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "is_active", [], "any", false, false, false, 285), "vars", [], "any", false, false, false, 285), "data", [], "any", false, false, false, 285)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 286
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "is_active", [], "any", false, false, false, 286), "vars", [], "any", false, false, false, 286), "data", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "is_active", [], "any", false, false, false, 290), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 293
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "is_active", [], "any", false, false, false, 294), "vars", [], "any", false, false, false, 294), "id", [], "any", false, false, false, 294), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 295
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "is_active", [], "any", false, false, false, 295), "vars", [], "any", false, false, false, 295), "data", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit actif") : ("Produit inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les produits inactifs ne seront pas visibles
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "is_active", [], "any", false, false, false, 303), 'errors');
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
        // line 318
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 318), "vars", [], "any", false, false, false, 318), "data", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-warning text-dark") : ("bg-secondary"));
        yield "\" id=\"date-badge\">
                                        ";
        // line 319
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "data", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("AVEC DATE") : ("SANS DATE"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 323
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 326
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 327), "vars", [], "any", false, false, false, 327), "id", [], "any", false, false, false, 327), "html", null, true);
        yield "\" id=\"date-label\">
                                        ";
        // line 328
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 328), "vars", [], "any", false, false, false, 328), "data", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit périssable") : ("Produit non périssable"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert date d'expiration lors des achats
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 336
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 336), 'errors');
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
        // line 347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "description", [], "any", false, false, false, 347), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 351
        yield "
                            <label for=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "description", [], "any", false, false, false, 352), "vars", [], "any", false, false, false, 352), "id", [], "any", false, false, false, 352), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "description", [], "any", false, false, false, 356), 'errors');
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
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "show_extra", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 372
        yield "
                                <label class=\"form-check-label fw-bold\" for=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "show_extra", [], "any", false, false, false, 373), "vars", [], "any", false, false, false, 373), "id", [], "any", false, false, false, 373), "html", null, true);
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
        // line 387
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "dosage", [], "any", false, false, false, 387), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "dosage", [], "any", false, false, false, 388), "vars", [], "any", false, false, false, 388), "id", [], "any", false, false, false, 388), "html", null, true);
        yield "\">Dosage</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 389
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "dosage", [], "any", false, false, false, 389), 'errors');
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
        // line 398
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "form", [], "any", false, false, false, 398), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "form", [], "any", false, false, false, 399), "vars", [], "any", false, false, false, 399), "id", [], "any", false, false, false, 399), "html", null, true);
        yield "\">Forme</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "form", [], "any", false, false, false, 400), 'errors');
        yield "</div>
                            <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    EX : Comprimé
                                </small>
                        </div>
                    </div>
                </div>

                ";
        // line 410
        yield "                ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 410, $this->source); })()) == "pharmacy")) {
            // line 411
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 416
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "prescription_required", [], "any", false, false, false, 416), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label\" for=\"";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "prescription_required", [], "any", false, false, false, 417), "vars", [], "any", false, false, false, 417), "id", [], "any", false, false, false, 417), "html", null, true);
            yield "\">
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">";
            // line 420
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "prescription_required", [], "any", false, false, false, 420), 'errors');
            yield "</div>
                                    <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert une ordonance à la vente
                                </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 431
        yield "            </div>

            ";
        // line 434
        yield "            ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 434, $this->source); })()) == "restaurant")) {
            // line 435
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 440
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "is_storable", [], "any", false, false, false, 440), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 443
            yield "
                                    <label class=\"form-check-label fw-bold\" for=\"";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()), "is_storable", [], "any", false, false, false, 444), "vars", [], "any", false, false, false, 444), "id", [], "any", false, false, false, 444), "html", null, true);
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
            // line 462
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "is_storable", [], "any", false, false, false, 462), 'errors');
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 469
        yield "            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 473
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 480, $this->source); })()), "Enregistrer le produit")) : ("Enregistrer le produit")), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 483
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 483) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 483, $this->source); })()), "id", [], "any", false, false, false, 483)))) {
            // line 484
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 484, $this->source); })()), "id", [], "any", false, false, false, 484)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 488
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 494
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), 'form_end');
        yield "

<!-- Modals -->
";
        // line 497
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 497) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 497, $this->source); })()), "id", [], "any", false, false, false, 497))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 497, $this->source); })()), "image", [], "any", false, false, false, 497)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 497, $this->source); })()), "image", [], "any", false, false, false, 497) != "default-product.png"))) {
            // line 498
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
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 514, $this->source); })()), "image", [], "any", false, false, false, 514))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 515
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 515, $this->source); })()), "name", [], "any", false, false, false, 515), "html", null, true);
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
            // line 524
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 524, $this->source); })()), "id", [], "any", false, false, false, 524)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 525
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 525, $this->source); })()), "id", [], "any", false, false, false, 525))), "html", null, true);
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
        // line 535
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
        // line 605
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 605, $this->source); })()) != "restaurant")) {
            // line 606
            yield "    const purchasePriceInput = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 606, $this->source); })()), "purchase_price", [], "any", false, false, false, 606), "vars", [], "any", false, false, false, 606), "id", [], "any", false, false, false, 606), "html", null, true);
            yield "');
    const salePriceInput = document.getElementById('";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), "sale_price", [], "any", false, false, false, 607), "vars", [], "any", false, false, false, 607), "id", [], "any", false, false, false, 607), "html", null, true);
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
        // line 644
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
        // line 764
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 764, $this->source); })()) != "restaurant")) {
            // line 765
            yield "    calculateMargin();
    ";
        }
        // line 767
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
        // line 781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 781, $this->source); })()), "show_extra", [], "any", false, false, false, 781), "vars", [], "any", false, false, false, 781), "id", [], "any", false, false, false, 781), "html", null, true);
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
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 799, $this->source); })()), "is_active", [], "any", false, false, false, 799), "vars", [], "any", false, false, false, 799), "id", [], "any", false, false, false, 799), "html", null, true);
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
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 821, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 821), "vars", [], "any", false, false, false, 821), "id", [], "any", false, false, false, 821), "html", null, true);
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
        // line 975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 975, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 975), "vars", [], "any", false, false, false, 975), "id", [], "any", false, false, false, 975), "html", null, true);
        yield ":checked {
    background-color: #ffc107;
    border-color: #ffc107;
}
#";
        // line 979
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 979, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 979), "vars", [], "any", false, false, false, 979), "id", [], "any", false, false, false, 979), "html", null, true);
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
        return array (  1270 => 979,  1263 => 975,  1106 => 821,  1081 => 799,  1060 => 781,  1044 => 767,  1040 => 765,  1038 => 764,  916 => 644,  876 => 607,  871 => 606,  869 => 605,  797 => 535,  784 => 525,  780 => 524,  768 => 515,  764 => 514,  746 => 498,  744 => 497,  738 => 494,  730 => 488,  722 => 484,  720 => 483,  714 => 480,  704 => 473,  698 => 469,  688 => 462,  667 => 444,  664 => 443,  662 => 440,  655 => 435,  652 => 434,  648 => 431,  634 => 420,  628 => 417,  624 => 416,  617 => 411,  614 => 410,  602 => 400,  598 => 399,  594 => 398,  582 => 389,  578 => 388,  574 => 387,  557 => 373,  554 => 372,  552 => 369,  536 => 356,  529 => 352,  526 => 351,  524 => 347,  510 => 336,  499 => 328,  495 => 327,  492 => 326,  490 => 323,  483 => 319,  479 => 318,  461 => 303,  450 => 295,  446 => 294,  443 => 293,  441 => 290,  434 => 286,  430 => 285,  411 => 269,  406 => 267,  399 => 263,  396 => 262,  394 => 258,  386 => 253,  381 => 251,  374 => 247,  371 => 246,  369 => 242,  362 => 237,  342 => 219,  340 => 218,  335 => 215,  327 => 210,  320 => 206,  317 => 205,  315 => 200,  311 => 198,  309 => 197,  302 => 193,  295 => 189,  292 => 188,  290 => 183,  285 => 181,  274 => 173,  263 => 165,  260 => 164,  258 => 160,  246 => 151,  239 => 147,  236 => 146,  234 => 143,  221 => 133,  197 => 111,  195 => 106,  183 => 97,  176 => 93,  173 => 92,  171 => 88,  161 => 80,  157 => 78,  153 => 76,  151 => 75,  134 => 61,  129 => 59,  120 => 53,  112 => 47,  110 => 43,  103 => 38,  96 => 33,  92 => 31,  81 => 22,  79 => 21,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  48 => 2,);
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
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'off'
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

                {# Champ prescription_required uniquement pour les pharmacies #}
                {% if companyType == 'pharmacy' %}
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.prescription_required, {'attr': {'class': 'form-check-input'}}) }}
                                    <label class=\"form-check-label\" for=\"{{ form.prescription_required.vars.id }}\">
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">{{ form_errors(form.prescription_required) }}</div>
                                    <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert une ordonance à la vente
                                </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>

            {# templates/product/_form.html.twig - Remplacer is_ingredient par is_storable #}
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
