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
class __TwigTemplate_84e716f4988209c560c8268f9fa0b593 extends Template
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
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 15) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 15) != "default-product.png"))) {
            // line 16
            yield "                        <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                            <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 17))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
            yield "\" 
                                 class=\"img-fluid rounded shadow-lg product-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                            ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 21)))) {
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewProductImage(this)", "accept" => "image/*"]]);
        // line 47
        yield "
                        <div class=\"form-text mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 5M
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 53), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-3\">
                        <label for=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            ";
        // line 61
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 61) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 61) != "default-product.png"))) ? ("Changer l'image") : ("Choisir une image"));
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 75)))) {
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 92
        yield "
                            <label for=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Nom du produit *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 97), 'errors');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "barcode", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "id" => "product-barcode"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "barcode", [], "any", false, false, false, 133), 'errors');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control select2-category", "placeholder" => " "]]);
        // line 146
        yield "
                            <label for=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "html", null, true);
        yield "\">
                                <i class=\"fas fa-folder me-1\"></i> Catégorie *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 151), 'errors');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "form-select select2-unit", "id" => "product_unit", "placeholder" => " "]]);
        // line 164
        yield "
                            <label for=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, false, 173), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!-- Prix -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-";
        // line 181
        yield (((($context["companyType"] ?? null) == "restaurant")) ? ("12") : ("6"));
        yield "\">
                        <div class=\"form-floating\">
                            ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchase_price", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
        // line 188
        yield "
                            <label for=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchase_price", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189), "html", null, true);
        yield "\">
                                <i class=\"fas fa-arrow-down me-1\"></i> Prix d'achat (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchase_price", [], "any", false, false, false, 193), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 197
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 198
            yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
            // line 200
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sale_price", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateMargin()"]]);
            // line 205
            yield "
                            <label for=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sale_price", [], "any", false, false, false, 206), "vars", [], "any", false, false, false, 206), "id", [], "any", false, false, false, 206), "html", null, true);
            yield "\">
                                <i class=\"fas fa-arrow-up me-1\"></i> Prix de vente (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
            // line 210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sale_price", [], "any", false, false, false, 210), 'errors');
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
        if ((($context["companyType"] ?? null) != "restaurant")) {
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_quantity", [], "any", false, false, false, 242), 'widget', ["attr" => ["class" => ("form-control" . (((        // line 243
array_key_exists("canEditStock", $context) &&  !($context["canEditStock"] ?? null))) ? (" bg-light") : (""))), "placeholder" => " ", "autocomplete" => "off", "readonly" => (((        // line 246
array_key_exists("canEditStock", $context) &&  !($context["canEditStock"] ?? null))) ? ("readonly") : (false))]]);
        // line 247
        yield "
                            <label for=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_quantity", [], "any", false, false, false, 248), "vars", [], "any", false, false, false, 248), "id", [], "any", false, false, false, 248), "html", null, true);
        yield "\">
                                <i class=\"fas fa-box me-1\"></i> Stock initial *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_quantity", [], "any", false, false, false, 252), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"stock_unit_help\">Unité : ";
        // line 254
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 254)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 254), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "min_quantity", [], "any", false, false, false, 259), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 263
        yield "
                            <label for=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "min_quantity", [], "any", false, false, false, 264), "vars", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264), "html", null, true);
        yield "\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Stock minimum d'alerte
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "min_quantity", [], "any", false, false, false, 268), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\" id=\"min_quantity_unit_help\">Alerte en ";
        // line 270
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 270)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 270), "html", null, true)) : ("pièce"));
        yield "</small>
                        </div>
                    </div>
                </div>

                <!-- Message informatif sur le stock (déplacé après les deux champs) -->
                ";
        // line 276
        if ((array_key_exists("canEditStock", $context) &&  !($context["canEditStock"] ?? null))) {
            // line 277
            yield "                <div class=\"row mt-2\">
                    <div class=\"col-12\">
                        <div class=\"alert alert-warning py-2 px-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <small>Le stock est géré automatiquement via les achats et les ventes. Seul un administrateur peut modifier cette valeur manuellement.</small>
                        </div>
                    </div>
                </div>
                ";
        } elseif ((        // line 285
array_key_exists("canEditStock", $context) && ($context["canEditStock"] ?? null))) {
            // line 286
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
        // line 295
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
        // line 307
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 307), "vars", [], "any", false, false, false, 307), "data", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 308
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 308), "vars", [], "any", false, false, false, 308), "data", [], "any", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 312), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 315
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 316), "vars", [], "any", false, false, false, 316), "id", [], "any", false, false, false, 316), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 317
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 317), "vars", [], "any", false, false, false, 317), "data", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit actif") : ("Produit inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les produits inactifs ne seront pas visibles
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 325
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 325), 'errors');
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
        // line 340
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 340), "vars", [], "any", false, false, false, 340), "data", [], "any", false, false, false, 340)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-warning text-dark") : ("bg-secondary"));
        yield "\" id=\"date-badge\">
                                        ";
        // line 341
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 341), "vars", [], "any", false, false, false, 341), "data", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("AVEC DATE") : ("SANS DATE"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 345), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 348
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 349), "vars", [], "any", false, false, false, 349), "id", [], "any", false, false, false, 349), "html", null, true);
        yield "\" id=\"date-label\">
                                        ";
        // line 350
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 350), "vars", [], "any", false, false, false, 350), "data", [], "any", false, false, false, 350)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Produit périssable") : ("Produit non périssable"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Requiert date d'expiration lors des achats
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 358), 'errors');
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
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 373
        yield "
                            <label for=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 374), "vars", [], "any", false, false, false, 374), "id", [], "any", false, false, false, 374), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 378
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 378), 'errors');
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
        // line 391
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "show_extra", [], "any", false, false, false, 391), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 394
        yield "
                                <label class=\"form-check-label fw-bold\" for=\"";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "show_extra", [], "any", false, false, false, 395), "vars", [], "any", false, false, false, 395), "id", [], "any", false, false, false, 395), "html", null, true);
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
        // line 409
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dosage", [], "any", false, false, false, 409), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dosage", [], "any", false, false, false, 410), "vars", [], "any", false, false, false, 410), "id", [], "any", false, false, false, 410), "html", null, true);
        yield "\">Dosage</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dosage", [], "any", false, false, false, 411), 'errors');
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
        // line 420
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "form", [], "any", false, false, false, 420), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                            <label for=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "form", [], "any", false, false, false, 421), "vars", [], "any", false, false, false, 421), "id", [], "any", false, false, false, 421), "html", null, true);
        yield "\">Forme</label>
                            <div class=\"invalid-feedback d-block\">";
        // line 422
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "form", [], "any", false, false, false, 422), 'errors');
        yield "</div>
                            <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    EX : Comprimé
                                </small>
                        </div>
                    </div>
                </div>

                ";
        // line 432
        yield "                ";
        if ((($context["companyType"] ?? null) == "pharmacy")) {
            // line 433
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 438
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prescription_required", [], "any", false, false, false, 438), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label\" for=\"";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prescription_required", [], "any", false, false, false, 439), "vars", [], "any", false, false, false, 439), "id", [], "any", false, false, false, 439), "html", null, true);
            yield "\">
                                        Prescription obligatoire
                                    </label>
                                    <div class=\"invalid-feedback d-block\">";
            // line 442
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prescription_required", [], "any", false, false, false, 442), 'errors');
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
        // line 453
        yield "            </div>

            ";
        // line 455
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 456
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 461
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_storable", [], "any", false, false, false, 461), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 464
            yield "
                                    <label class=\"form-check-label fw-bold\" for=\"";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_storable", [], "any", false, false, false, 465), "vars", [], "any", false, false, false, 465), "id", [], "any", false, false, false, 465), "html", null, true);
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
            // line 483
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_storable", [], "any", false, false, false, 483), 'errors');
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 490
        yield "            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer le produit")) : ("Enregistrer le produit")), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 504
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 504) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 504)))) {
            // line 505
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 505)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 509
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 515
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

<!-- Modals -->
";
        // line 518
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", true, true, false, 518) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 518))) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 518)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 518) != "default-product.png"))) {
            // line 519
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
            // line 535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 535))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 536), "html", null, true);
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
            // line 545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 545)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 546))), "html", null, true);
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
        // line 556
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
        // line 626
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 627
            yield "    const purchasePriceInput = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchase_price", [], "any", false, false, false, 627), "vars", [], "any", false, false, false, 627), "id", [], "any", false, false, false, 627), "html", null, true);
            yield "');
    const salePriceInput = document.getElementById('";
            // line 628
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sale_price", [], "any", false, false, false, 628), "vars", [], "any", false, false, false, 628), "id", [], "any", false, false, false, 628), "html", null, true);
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
        // line 665
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
        // line 785
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 786
            yield "    calculateMargin();
    ";
        }
        // line 788
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
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "show_extra", [], "any", false, false, false, 802), "vars", [], "any", false, false, false, 802), "id", [], "any", false, false, false, 802), "html", null, true);
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
        // line 820
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 820), "vars", [], "any", false, false, false, 820), "id", [], "any", false, false, false, 820), "html", null, true);
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
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 842), "vars", [], "any", false, false, false, 842), "id", [], "any", false, false, false, 842), "html", null, true);
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
        // line 996
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 996), "vars", [], "any", false, false, false, 996), "id", [], "any", false, false, false, 996), "html", null, true);
        yield ":checked {
    background-color: #ffc107;
    border-color: #ffc107;
}
#";
        // line 1000
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "has_expiry_date", [], "any", false, false, false, 1000), "vars", [], "any", false, false, false, 1000), "id", [], "any", false, false, false, 1000), "html", null, true);
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
        return array (  1294 => 1000,  1287 => 996,  1130 => 842,  1105 => 820,  1084 => 802,  1068 => 788,  1064 => 786,  1062 => 785,  940 => 665,  900 => 628,  895 => 627,  893 => 626,  821 => 556,  808 => 546,  804 => 545,  792 => 536,  788 => 535,  770 => 519,  768 => 518,  762 => 515,  754 => 509,  746 => 505,  744 => 504,  738 => 501,  728 => 494,  722 => 490,  712 => 483,  691 => 465,  688 => 464,  686 => 461,  679 => 456,  677 => 455,  673 => 453,  659 => 442,  653 => 439,  649 => 438,  642 => 433,  639 => 432,  627 => 422,  623 => 421,  619 => 420,  607 => 411,  603 => 410,  599 => 409,  582 => 395,  579 => 394,  577 => 391,  561 => 378,  554 => 374,  551 => 373,  549 => 369,  535 => 358,  524 => 350,  520 => 349,  517 => 348,  515 => 345,  508 => 341,  504 => 340,  486 => 325,  475 => 317,  471 => 316,  468 => 315,  466 => 312,  459 => 308,  455 => 307,  441 => 295,  430 => 286,  428 => 285,  418 => 277,  416 => 276,  407 => 270,  402 => 268,  395 => 264,  392 => 263,  390 => 259,  382 => 254,  377 => 252,  370 => 248,  367 => 247,  365 => 246,  364 => 243,  363 => 242,  356 => 237,  336 => 219,  334 => 218,  329 => 215,  321 => 210,  314 => 206,  311 => 205,  309 => 200,  305 => 198,  303 => 197,  296 => 193,  289 => 189,  286 => 188,  284 => 183,  279 => 181,  268 => 173,  257 => 165,  254 => 164,  252 => 160,  240 => 151,  233 => 147,  230 => 146,  228 => 143,  215 => 133,  191 => 111,  189 => 106,  177 => 97,  170 => 93,  167 => 92,  165 => 88,  155 => 80,  151 => 78,  147 => 76,  145 => 75,  128 => 61,  123 => 59,  114 => 53,  106 => 47,  104 => 43,  97 => 38,  90 => 33,  86 => 31,  75 => 22,  73 => 21,  67 => 18,  63 => 17,  60 => 16,  58 => 15,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\_form.html.twig");
    }
}
