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
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "unit", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-select", "id" => "product_unit", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "unit", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "id", [], "any", false, false, false, 162), "html", null, true);
        yield "\">
                                <i class=\"fas fa-weight-hanging me-1\"></i> Unité de mesure
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Si aucune unité n'est sélectionnée, \"Pièce\" sera utilisé par défaut.
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "unit", [], "any", false, false, false, 170), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!-- Prix -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-";
        // line 178
        yield ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 178, $this->source); })()) == "restaurant")) ? ("12") : ("6"));
        yield "\">
                        <div class=\"form-floating\">
                            ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "purchase_price", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
        // line 185
        yield "
                            <label for=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "purchase_price", [], "any", false, false, false, 186), "vars", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186), "html", null, true);
        yield "\">
                                <i class=\"fas fa-arrow-down me-1\"></i> Prix d'achat (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "purchase_price", [], "any", false, false, false, 190), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 194
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 194, $this->source); })()) != "restaurant")) {
            // line 195
            yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
            // line 197
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "sale_price", [], "any", false, false, false, 197), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
            // line 202
            yield "
                            <label for=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "sale_price", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203), "html", null, true);
            yield "\">
                                <i class=\"fas fa-arrow-up me-1\"></i> Prix de vente (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
            // line 207
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "sale_price", [], "any", false, false, false, 207), 'errors');
            yield "
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 212
        yield "                </div>
                
                <!-- Marge calculée -->
                ";
        // line 215
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 215, $this->source); })()) != "restaurant")) {
            // line 216
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
        // line 234
        yield "                
                <!-- Stock -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "stock_quantity", [], "any", false, false, false, 239), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 243
        yield "
                            <label for=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "stock_quantity", [], "any", false, false, false, 244), "vars", [], "any", false, false, false, 244), "id", [], "any", false, false, false, 244), "html", null, true);
        yield "\">
                                <i class=\"fas fa-box me-1\"></i> Stock initial *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "stock_quantity", [], "any", false, false, false, 248), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"stock_unit_help\">Unité : ";
        // line 250
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 250, $this->source); })()), "unit", [], "any", false, false, false, 250)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 250, $this->source); })()), "unit", [], "any", false, false, false, 250), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "min_quantity", [], "any", false, false, false, 255), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 259
        yield "
                            <label for=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "min_quantity", [], "any", false, false, false, 260), "vars", [], "any", false, false, false, 260), "id", [], "any", false, false, false, 260), "html", null, true);
        yield "\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Stock minimum d'alerte
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "min_quantity", [], "any", false, false, false, 264), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"min_quantity_unit_help\">Alerte en ";
        // line 266
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 266, $this->source); })()), "unit", [], "any", false, false, false, 266)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 266, $this->source); })()), "unit", [], "any", false, false, false, 266), "html", null, true)) : ("pièce"));
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
        // line 282
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "is_active", [], "any", false, false, false, 282), "vars", [], "any", false, false, false, 282), "data", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 283
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "is_active", [], "any", false, false, false, 283), "vars", [], "any", false, false, false, 283), "data", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "is_active", [], "any", false, false, false, 287), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 290
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "is_active", [], "any", false, false, false, 291), "vars", [], "any", false, false, false, 291), "id", [], "any", false, false, false, 291), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 292
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "is_active", [], "any", false, false, false, 292), "vars", [], "any", false, false, false, 292), "data", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit actif") : ("Produit inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les produits inactifs ne seront pas visibles
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 300
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "is_active", [], "any", false, false, false, 300), 'errors');
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
        // line 315
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 315), "vars", [], "any", false, false, false, 315), "data", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-warning text-dark") : ("bg-secondary"));
        yield "\" id=\"date-badge\">
                                        ";
        // line 316
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 316), "vars", [], "any", false, false, false, 316), "data", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("AVEC DATE") : ("SANS DATE"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 320), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 323
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 324), "vars", [], "any", false, false, false, 324), "id", [], "any", false, false, false, 324), "html", null, true);
        yield "\" id=\"date-label\">
                                        ";
        // line 325
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 325), "vars", [], "any", false, false, false, 325), "data", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit périssable") : ("Produit non périssable"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert date d'expiration lors des achats
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 333), 'errors');
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
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "description", [], "any", false, false, false, 344), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 348
        yield "
                            <label for=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "description", [], "any", false, false, false, 349), "vars", [], "any", false, false, false, 349), "id", [], "any", false, false, false, 349), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 353
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "description", [], "any", false, false, false, 353), 'errors');
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
        // line 366
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "show_extra", [], "any", false, false, false, 366), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 369
        yield "
                                <label class=\"form-check-label fw-bold\" for=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "show_extra", [], "any", false, false, false, 370), "vars", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370), "html", null, true);
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
        // line 384
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "dosage", [], "any", false, false, false, 384), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), "dosage", [], "any", false, false, false, 385), "vars", [], "any", false, false, false, 385), "id", [], "any", false, false, false, 385), "html", null, true);
        yield "\">Dosage</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 386
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "dosage", [], "any", false, false, false, 386), 'errors');
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
        // line 395
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "form", [], "any", false, false, false, 395), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "form", [], "any", false, false, false, 396), "vars", [], "any", false, false, false, 396), "id", [], "any", false, false, false, 396), "html", null, true);
        yield "\">Forme</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 397
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "form", [], "any", false, false, false, 397), 'errors');
        yield "</div>
                            <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    EX : Comprimé
                                </small>
                        </div>
                    </div>
                </div>

                ";
        // line 407
        yield "                ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 407, $this->source); })()) == "pharmacy")) {
            // line 408
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 413
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "prescription_required", [], "any", false, false, false, 413), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label\" for=\"";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "prescription_required", [], "any", false, false, false, 414), "vars", [], "any", false, false, false, 414), "id", [], "any", false, false, false, 414), "html", null, true);
            yield "\">
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">";
            // line 417
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "prescription_required", [], "any", false, false, false, 417), 'errors');
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
        // line 428
        yield "            </div>
            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 433
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 440, $this->source); })()), "Enregistrer le produit")) : ("Enregistrer le produit")), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 443
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 443) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 443, $this->source); })()), "id", [], "any", false, false, false, 443)))) {
            // line 444
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 444, $this->source); })()), "id", [], "any", false, false, false, 444)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 448
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 454
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 454, $this->source); })()), 'form_end');
        yield "

<!-- Modals -->
";
        // line 457
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 457) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 457, $this->source); })()), "id", [], "any", false, false, false, 457))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 457, $this->source); })()), "image", [], "any", false, false, false, 457)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 457, $this->source); })()), "image", [], "any", false, false, false, 457) != "default-product.png"))) {
            // line 458
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
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 474, $this->source); })()), "image", [], "any", false, false, false, 474))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 475, $this->source); })()), "name", [], "any", false, false, false, 475), "html", null, true);
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
            // line 484
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 484, $this->source); })()), "id", [], "any", false, false, false, 484)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 485, $this->source); })()), "id", [], "any", false, false, false, 485))), "html", null, true);
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
        // line 495
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
        // line 565
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 565, $this->source); })()) != "restaurant")) {
            // line 566
            yield "    const purchasePriceInput = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "purchase_price", [], "any", false, false, false, 566), "vars", [], "any", false, false, false, 566), "id", [], "any", false, false, false, 566), "html", null, true);
            yield "');
    const salePriceInput = document.getElementById('";
            // line 567
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "sale_price", [], "any", false, false, false, 567), "vars", [], "any", false, false, false, 567), "id", [], "any", false, false, false, 567), "html", null, true);
            yield "');
    
    const purchasePrice = purchasePriceInput ? parseFloat(purchasePriceInput.value) || 0 : 0;
    const salePrice = salePriceInput ? parseFloat(salePriceInput.value) || 0 : 0;
    
    if (purchasePrice > 0 && salePrice > 0) {
        const marginAmount = salePrice - purchasePrice;
        const marginPercentage = ((marginAmount / purchasePrice) * 100).toFixed(1);
        
        document.getElementById('margin-amount').textContent = marginAmount.toLocaleString('fr-FR') + ' FCFA';
        
        const badge = document.getElementById('margin-percentage');
        badge.textContent = marginPercentage + '%';
        
        // Changer la couleur selon la marge
        if (marginPercentage >= 50) {
            badge.className = 'badge bg-success ms-2';
        } else if (marginPercentage >= 20) {
            badge.className = 'badge bg-warning text-dark ms-2';
        } else {
            badge.className = 'badge bg-danger ms-2';
        }
    } else {
        document.getElementById('margin-amount').textContent = '0 FCFA';
        document.getElementById('margin-percentage').textContent = '0%';
        document.getElementById('margin-percentage').className = 'badge bg-secondary ms-2';
    }
    ";
        }
        // line 595
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
            if (unitSelect.value === '') unitText = 'pièce';
            stockUnitHelp.textContent = `Unité : \${unitText}`;
            minQuantityHelp.textContent = `Alerte en \${unitText}`;
        }
        
        // Initialiser
        updateUnitHelps();
        
        // Écouter le changement
        unitSelect.addEventListener('change', updateUnitHelps);
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
                if (scannerInput) scannerInput.focus();
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
                if (e.key === 'Enter' || e.key === 'Tab') {
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
    
    // ========== SELECT2 ==========
    if (typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        console.log('=== DÉBOGAGE SELECT2 ===');
        console.log('Nombre d\\'éléments .select2-category :', \$('.select2-category').length);
        console.log('Instance Select2 existante ?', \$('.select2-category').data('select2') ? 'OUI' : 'NON');
        
        // Détruire toute instance existante avant de recréer
        if (\$('.select2-category').data('select2')) {
            console.log('Destruction de l\\'instance existante');
            \$('.select2-category').select2('destroy');
        }
        
        console.log('Initialisation de Select2...');
        \$('.select2-category').select2({
            theme: \"bootstrap-5\",
            language: \"fr\",
            width: \"100%\",
            placeholder: \"Sélectionnez une catégorie...\",
            allowClear: false,
            minimumInputLength: 0
        });
        console.log('Select2 initialisé');
    } else {
        console.warn('jQuery ou Select2 non chargé');
    }
    
    // ========== MARGE ==========
    ";
        // line 702
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 702, $this->source); })()) != "restaurant")) {
            // line 703
            yield "    calculateMargin();
    ";
        }
        // line 705
        yield "    
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
    
    // ========== GESTION DU SWITCH \"AUTRES INFORMATIONS\" ==========
    console.log('Recherche du switch avec ID :', '";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 719, $this->source); })()), "show_extra", [], "any", false, false, false, 719), "vars", [], "any", false, false, false, 719), "id", [], "any", false, false, false, 719), "html", null, true);
        yield "');
    const showExtraSwitch = document.getElementById('";
        // line 720
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 720, $this->source); })()), "show_extra", [], "any", false, false, false, 720), "vars", [], "any", false, false, false, 720), "id", [], "any", false, false, false, 720), "html", null, true);
        yield "');
    const extraFields = document.getElementById('extraFields');

    if (showExtraSwitch) {
        console.log('✅ Switch trouvé :', showExtraSwitch);
        console.log('État initial du switch (checked) :', showExtraSwitch.checked);
    } else {
        console.error('❌ Switch non trouvé avec ID :', '";
        // line 727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 727, $this->source); })()), "show_extra", [], "any", false, false, false, 727), "vars", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727), "html", null, true);
        yield "');
    }

    if (extraFields) {
        console.log('✅ Div extraFields trouvée :', extraFields);
        console.log('Style display initial de extraFields :', extraFields.style.display);
    } else {
        console.error('❌ Div extraFields non trouvée');
    }

    if (showExtraSwitch && extraFields) {
        // Fonction pour basculer l'affichage
        function toggleExtraFields() {
            console.log('Événement change déclenché. Nouvel état checked :', showExtraSwitch.checked);
            const newDisplay = showExtraSwitch.checked ? 'block' : 'none';
            extraFields.style.display = newDisplay;
            console.log('Nouveau style display de extraFields :', newDisplay);
        }
        
        // Appliquer l'état initial
        toggleExtraFields();
        
        // Ajouter l'écouteur d'événement
        showExtraSwitch.addEventListener('change', toggleExtraFields);
        console.log('Écouteur d\\'événement change attaché avec succès.');
    } else {
        console.error('Impossible d\\'attacher l\\'événement : un des éléments est manquant.');
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
        // line 866
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 866, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 866), "vars", [], "any", false, false, false, 866), "id", [], "any", false, false, false, 866), "html", null, true);
        yield ":checked {
    background-color: #ffc107;
    border-color: #ffc107;
}
#";
        // line 870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "has_expiry_date", [], "any", false, false, false, 870), "vars", [], "any", false, false, false, 870), "id", [], "any", false, false, false, 870), "html", null, true);
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
        return array (  1152 => 870,  1145 => 866,  1003 => 727,  993 => 720,  989 => 719,  973 => 705,  969 => 703,  967 => 702,  858 => 595,  827 => 567,  822 => 566,  820 => 565,  748 => 495,  735 => 485,  731 => 484,  719 => 475,  715 => 474,  697 => 458,  695 => 457,  689 => 454,  681 => 448,  673 => 444,  671 => 443,  665 => 440,  655 => 433,  648 => 428,  634 => 417,  628 => 414,  624 => 413,  617 => 408,  614 => 407,  602 => 397,  598 => 396,  594 => 395,  582 => 386,  578 => 385,  574 => 384,  557 => 370,  554 => 369,  552 => 366,  536 => 353,  529 => 349,  526 => 348,  524 => 344,  510 => 333,  499 => 325,  495 => 324,  492 => 323,  490 => 320,  483 => 316,  479 => 315,  461 => 300,  450 => 292,  446 => 291,  443 => 290,  441 => 287,  434 => 283,  430 => 282,  411 => 266,  406 => 264,  399 => 260,  396 => 259,  394 => 255,  386 => 250,  381 => 248,  374 => 244,  371 => 243,  369 => 239,  362 => 234,  342 => 216,  340 => 215,  335 => 212,  327 => 207,  320 => 203,  317 => 202,  315 => 197,  311 => 195,  309 => 194,  302 => 190,  295 => 186,  292 => 185,  290 => 180,  285 => 178,  274 => 170,  263 => 162,  259 => 161,  246 => 151,  239 => 147,  236 => 146,  234 => 143,  221 => 133,  197 => 111,  195 => 106,  183 => 97,  176 => 93,  173 => 92,  171 => 88,  161 => 80,  157 => 78,  153 => 76,  151 => 75,  134 => 61,  129 => 59,  120 => 53,  112 => 47,  110 => 43,  103 => 38,  96 => 33,  92 => 31,  81 => 22,  79 => 21,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  48 => 2,);
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
                            {{ form_widget(form.unit, {'attr': {'class': 'form-select', 'id': 'product_unit', 'placeholder': ' '}}) }}
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
        
        document.getElementById('margin-amount').textContent = marginAmount.toLocaleString('fr-FR') + ' FCFA';
        
        const badge = document.getElementById('margin-percentage');
        badge.textContent = marginPercentage + '%';
        
        // Changer la couleur selon la marge
        if (marginPercentage >= 50) {
            badge.className = 'badge bg-success ms-2';
        } else if (marginPercentage >= 20) {
            badge.className = 'badge bg-warning text-dark ms-2';
        } else {
            badge.className = 'badge bg-danger ms-2';
        }
    } else {
        document.getElementById('margin-amount').textContent = '0 FCFA';
        document.getElementById('margin-percentage').textContent = '0%';
        document.getElementById('margin-percentage').className = 'badge bg-secondary ms-2';
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
            if (unitSelect.value === '') unitText = 'pièce';
            stockUnitHelp.textContent = `Unité : \${unitText}`;
            minQuantityHelp.textContent = `Alerte en \${unitText}`;
        }
        
        // Initialiser
        updateUnitHelps();
        
        // Écouter le changement
        unitSelect.addEventListener('change', updateUnitHelps);
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
                if (scannerInput) scannerInput.focus();
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
                if (e.key === 'Enter' || e.key === 'Tab') {
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
    
    // ========== SELECT2 ==========
    if (typeof \$ !== 'undefined' && typeof \$.fn.select2 !== 'undefined') {
        console.log('=== DÉBOGAGE SELECT2 ===');
        console.log('Nombre d\\'éléments .select2-category :', \$('.select2-category').length);
        console.log('Instance Select2 existante ?', \$('.select2-category').data('select2') ? 'OUI' : 'NON');
        
        // Détruire toute instance existante avant de recréer
        if (\$('.select2-category').data('select2')) {
            console.log('Destruction de l\\'instance existante');
            \$('.select2-category').select2('destroy');
        }
        
        console.log('Initialisation de Select2...');
        \$('.select2-category').select2({
            theme: \"bootstrap-5\",
            language: \"fr\",
            width: \"100%\",
            placeholder: \"Sélectionnez une catégorie...\",
            allowClear: false,
            minimumInputLength: 0
        });
        console.log('Select2 initialisé');
    } else {
        console.warn('jQuery ou Select2 non chargé');
    }
    
    // ========== MARGE ==========
    {% if companyType != 'restaurant' %}
    calculateMargin();
    {% endif %}
    
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
    
    // ========== GESTION DU SWITCH \"AUTRES INFORMATIONS\" ==========
    console.log('Recherche du switch avec ID :', '{{ form.show_extra.vars.id }}');
    const showExtraSwitch = document.getElementById('{{ form.show_extra.vars.id }}');
    const extraFields = document.getElementById('extraFields');

    if (showExtraSwitch) {
        console.log('✅ Switch trouvé :', showExtraSwitch);
        console.log('État initial du switch (checked) :', showExtraSwitch.checked);
    } else {
        console.error('❌ Switch non trouvé avec ID :', '{{ form.show_extra.vars.id }}');
    }

    if (extraFields) {
        console.log('✅ Div extraFields trouvée :', extraFields);
        console.log('Style display initial de extraFields :', extraFields.style.display);
    } else {
        console.error('❌ Div extraFields non trouvée');
    }

    if (showExtraSwitch && extraFields) {
        // Fonction pour basculer l'affichage
        function toggleExtraFields() {
            console.log('Événement change déclenché. Nouvel état checked :', showExtraSwitch.checked);
            const newDisplay = showExtraSwitch.checked ? 'block' : 'none';
            extraFields.style.display = newDisplay;
            console.log('Nouveau style display de extraFields :', newDisplay);
        }
        
        // Appliquer l'état initial
        toggleExtraFields();
        
        // Ajouter l'écouteur d'événement
        showExtraSwitch.addEventListener('change', toggleExtraFields);
        console.log('Écouteur d\\'événement change attaché avec succès.');
    } else {
        console.error('Impossible d\\'attacher l\\'événement : un des éléments est manquant.');
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
