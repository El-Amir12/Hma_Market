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

/* admin/purchase/_form.html.twig */
class __TwigTemplate_47feea56f3366190749f2bfaa1cb46f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"container-fluid\">
    <!-- En-tête -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h4 class=\"mb-0\">
                            <i class=\"fas fa-cart-plus me-2\"></i>
                            ";
        // line 12
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12) == "new")) ? ("Nouvel achat") : ("Modifier l'achat"));
        yield "
                        </h4>
                        <span class=\"badge bg-light text-dark fs-6\">
                            <i class=\"fas fa-hashtag me-1\"></i>
                            ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "reference", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 16, $this->source); })()), "reference", [], "any", false, false, false, 16), "AUTO-GÉNÉRÉ")) : ("AUTO-GÉNÉRÉ")), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informations de base -->
    <div class=\"row g-4 mb-4\">
        <!-- Fournisseur -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-truck me-2\"></i> Fournisseur
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-8\">
                            <div class=\"form-floating\">
                                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "supplier", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control select2-supplier", "placeholder" => " ", "required" => true, "data-allow-clear" => true]]);
        // line 43
        yield "
                                <label for=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "supplier", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-user-tie me-1\"></i> Fournisseur *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "supplier", [], "any", false, false, false, 48), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 d-flex align-items-end\">
                            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
        yield "\" 
                               class=\"btn btn-outline-primary w-100\"
                               target=\"_blank\">
                                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau
                            </a>
                        </div>
                    </div>
                    
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "reception_date", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 67
        yield "
                                <label for=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "reception_date", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de réception *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "reception_date", [], "any", false, false, false, 72), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "expected_delivery_date", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 81
        yield "
                                <label for=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "expected_delivery_date", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date livraison prévue
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informations supplémentaires -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i> Informations complémentaires
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"form-floating mb-3\">
                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "invoice_number", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 105
        yield "
                        <label for=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "invoice_number", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-invoice me-1\"></i> Numéro de facture
                        </label>
                    </div>
                    
                    <div class=\"form-floating\">
                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "notes", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 116
        yield "
                        <label for=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "notes", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117), "html", null, true);
        yield "\">
                            <i class=\"fas fa-sticky-note me-1\"></i> Notes
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Panier d'achat -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-shopping-cart me-2\"></i> Panier d'achat
                        </h5>
                        <button type=\"button\" 
                                class=\"btn btn-light btn-sm\"
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#addProductModal\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Ajouter un produit
                        </button>
                    </div>
                </div>
                <div class=\"card-body\">
                    <!-- Tableau des produits -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle\" id=\"purchase-items-table\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th width=\"5%\">#</th>
                                    <th width=\"25%\">Produit</th>
                                    <th width=\"10%\">Code barre</th>
                                    <th width=\"10%\">Quantité</th>
                                    <th width=\"15%\">Prix d'achat</th>
                                    <th width=\"10%\">Total</th>
                                    <th width=\"15%\">Lot</th>
                                    <th width=\"10%\">Actions</th>
                                </tr>
                            </thead>
                            <tbody id=\"purchase-items-body\">
                                ";
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", true, true, false, 160) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 160, $this->source); })()), "purchaseItems", [], "any", false, false, false, 160)) > 0))) {
            // line 161
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 161, $this->source); })()), "purchaseItems", [], "any", false, false, false, 161));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 162
                yield "                                        <tr data-product-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 162), "id", [], "any", false, false, false, 162), "html", null, true);
                yield "\">
                                            <td>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 163), "html", null, true);
                yield "</td>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <img src=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 166), "image", [], "any", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 166), "image", [], "any", false, false, false, 166), "default-product.png")) : ("default-product.png")))), "html", null, true);
                yield "\" 
                                                         class=\"rounded me-3\"
                                                         style=\"width: 40px; height: 40px; object-fit: cover;\">
                                                    <div>
                                                        <strong>";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "html", null, true);
                yield "</strong>
                                                        <small class=\"d-block text-muted\">";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 171), "category", [], "any", false, true, false, 171), "name", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 171), "category", [], "any", false, false, false, 171), "name", [], "any", false, false, false, 171), "")) : ("")), "html", null, true);
                yield "</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"badge bg-secondary\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 176), "barcode", [], "any", false, false, false, 176), "html", null, true);
                yield "</span>
                                            </td>
                                            <td>
                                                <input type=\"number\" 
                                                       class=\"form-control quantity-input\"
                                                       value=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 181), "html", null, true);
                yield "\"
                                                       min=\"1\"
                                                       style=\"width: 80px;\">
                                            </td>
                                            <td>
                                                <div class=\"input-group\" style=\"width: 150px;\">
                                                    <input type=\"number\" 
                                                           class=\"form-control price-input\"
                                                           value=\"";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchasePrice", [], "any", false, false, false, 189), "html", null, true);
                yield "\"
                                                           min=\"0\"
                                                           step=\"0.01\">
                                                    <span class=\"input-group-text\">FCFA</span>
                                                </div>
                                            </td>
                                            <td class=\"item-total\">
                                                ";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 196) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchasePrice", [], "any", false, false, false, 196)), 0, ",", " "), "html", null, true);
                yield " FCFA
                                            </td>
                                            <td>
                                                <input type=\"text\" 
                                                       class=\"form-control lot-number-input\"
                                                       value=\"";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lotNumber", [], "any", true, true, false, 201)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lotNumber", [], "any", false, false, false, 201), "")) : ("")), "html", null, true);
                yield "\"
                                                       placeholder=\"AUTO\">
                                            </td>
                                            <td>
                                                <button type=\"button\" 
                                                        class=\"btn btn-danger btn-sm remove-item\"
                                                        title=\"Supprimer\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "                                ";
        } else {
            // line 214
            yield "                                    <tr id=\"empty-cart-message\">
                                        <td colspan=\"8\" class=\"text-center py-5\">
                                            <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3\"></i>
                                            <h5 class=\"text-muted\">Panier vide</h5>
                                            <p class=\"text-muted\">Ajoutez des produits pour commencer</p>
                                        </td>
                                    </tr>
                                ";
        }
        // line 222
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Résumé du panier -->
                <div class=\"card-footer bg-light\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-6\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-scan me-2 text-primary\"></i>
                                <small class=\"text-muted\">
                                    Scanner, rechercher par nom ou code barre
                                </small>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"d-flex justify-content-end align-items-center\">
                                <div class=\"me-4\">
                                    <h6 class=\"mb-0 text-muted\">Total général :</h6>
                                    <h3 class=\"mb-0 text-success\" id=\"grand-total\">0 FCFA</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Boutons d'action -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <button type=\"button\" 
                                    class=\"btn btn-outline-danger\"
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#cancelPurchaseModal\">
                                <i class=\"fas fa-times me-2\"></i> Annuler l'achat
                            </button>
                        </div>
                        
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_index");
        yield "\" 
                               class=\"btn btn-outline-secondary btn-lg px-4\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Retour
                            </a>
                            
                            <button type=\"submit\" 
                                    class=\"btn btn-primary btn-lg px-5\"
                                    id=\"submit-purchase\">
                                <i class=\"fas fa-check-circle me-2\"></i> Valider la réception
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 285
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), 'form_end');
        yield "

<!-- Modal d'ajout de produit -->
<div class=\"modal fade\" id=\"addProductModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-gradient-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-search-plus me-2\"></i> Rechercher un produit
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <!-- Barre de recherche -->
                <div class=\"mb-4\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-text bg-light\">
                            <i class=\"fas fa-search\"></i>
                        </span>
                        <input type=\"text\" 
                               class=\"form-control\" 
                               id=\"product-search\"
                               placeholder=\"Rechercher par nom, code barre...\">
                        <button class=\"btn btn-outline-primary\" type=\"button\" id=\"scan-search-btn\">
                            <i class=\"fas fa-barcode\"></i> Scanner
                        </button>
                    </div>
                    <div class=\"form-text mt-2\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez le nom, scannez le code barre, ou cliquez sur Scanner
                    </div>
                </div>

                <!-- Résultats de recherche -->
                <div class=\"table-responsive\" style=\"max-height: 400px; overflow-y: auto;\">
                    <table class=\"table table-hover\" id=\"search-results-table\">
                        <thead class=\"table-light sticky-top\">
                            <tr>
                                <th width=\"5%\"></th>
                                <th width=\"25%\">Produit</th>
                                <th width=\"15%\">Code barre</th>
                                <th width=\"15%\">Catégorie</th>
                                <th width=\"15%\">Stock actuel</th>
                                <th width=\"15%\">Prix d'achat</th>
                                <th width=\"10%\">Action</th>
                            </tr>
                        </thead>
                        <tbody id=\"search-results-body\">
                            <!-- Les résultats seront chargés ici via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Fermer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal scanner -->
<div class=\"modal fade\" id=\"scannerModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
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
                <button type=\"button\" class=\"btn btn-primary\" id=\"use-scanned-barcode-search\">
                    <i class=\"fas fa-check me-1\"></i> Rechercher
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation suppression -->
<div class=\"modal fade\" id=\"removeItemModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Supprimer ce produit du panier ?</h5>
                    <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirm-remove-item\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal annulation achat -->
<div class=\"modal fade\" id=\"cancelPurchaseModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Annuler l'achat
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-ban fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr d'annuler cet achat ?</h5>
                    <p class=\"text-muted\">Tous les produits ajoutés seront perdus.</p>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Continuer l'achat
                </button>
                <a href=\"";
        // line 437
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_index");
        yield "\" class=\"btn btn-danger\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler l'achat
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Champs cachés pour les données -->
<input type=\"hidden\" id=\"products-data\" value=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((array_key_exists("products_data", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["products_data"]) || array_key_exists("products_data", $context) ? $context["products_data"] : (function () { throw new RuntimeError('Variable "products_data" does not exist.', 446, $this->source); })()), [])) : ([]))), "html", null, true);
        yield "\">
<div id=\"purchase-items-data\" 
     data-items=\"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 448, $this->source); })()), "purchaseItems", [], "any", false, false, false, 448), [])) : ([]))), "html", null, true);
        yield "\"
     data-items-count=\"";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", true, true, false, 449)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 449, $this->source); })()), "purchaseItems", [], "any", false, false, false, 449), [])) : ([]))), "html", null, true);
        yield "\"></div>

";
        // line 451
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 970
        yield "
";
        // line 971
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 451
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

        // line 452
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
let purchaseItems = [];
let itemToRemove = null;

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2 pour les fournisseurs
    \$('.select2-supplier').select2({
        theme: \"bootstrap-5\",
        language: \"fr\",
        width: \"100%\",
        placeholder: \"Sélectionnez un fournisseur...\",
        allowClear: true,
        dropdownParent: \$('.card-body')
    });

    // Charger les items existants
    const itemsData = document.getElementById('purchase-items-data');
    if (itemsData) {
        const initialItems = JSON.parse(itemsData.dataset.items);
        purchaseItems = initialItems.map(item => ({
            productId: item.product.id,
            productName: item.product.name,
            productImage: item.product.image,
            productBarcode: item.product.barcode,
            category: item.product.category ? item.product.category.name : '',
            quantity: item.quantity,
            purchasePrice: item.purchasePrice,
            lotNumber: item.lotNumber || '',
            expiryDate: item.expiryDate || null,
            manufactureDate: item.manufactureDate || null,
            hasExpiryDate: item.product.hasExpiryDate || false
        }));
    }

    // Calculer le total initial
    calculateGrandTotal();

    // Gérer l'ajout de produit
    document.getElementById('product-search').addEventListener('input', debounce(searchProducts, 300));
    
    // Scanner pour la recherche
    document.getElementById('scan-search-btn').addEventListener('click', function() {
        const scannerModal = new bootstrap.Modal(document.getElementById('scannerModal'));
        scannerModal.show();
    });

    // Utiliser le code scanné pour la recherche
    document.getElementById('use-scanned-barcode-search').addEventListener('click', function() {
        const barcode = document.getElementById('barcode-scanner-input').value.trim();
        if (barcode) {
            searchProductsByBarcode(barcode);
            bootstrap.Modal.getInstance(document.getElementById('scannerModal')).hide();
        }
    });

    // Gestion des événements sur le tableau
    document.getElementById('purchase-items-body').addEventListener('input', function(e) {
        if (e.target.classList.contains('quantity-input') || e.target.classList.contains('price-input')) {
            updateItem(e.target);
        }
        if (e.target.classList.contains('lot-number-input')) {
            updateLotNumber(e.target);
        }
    });

    // Gestion des événements sur le tableau
    document.getElementById('purchase-items-body').addEventListener('click', function(e) {
        if (e.target.closest('.remove-item')) {
            const row = e.target.closest('tr');
            itemToRemove = row.getAttribute('data-product-id');
            const modal = new bootstrap.Modal(document.getElementById('removeItemModal'));
            modal.show();
        }
    });

    // Confirmer la suppression
    document.getElementById('confirm-remove-item').addEventListener('click', function() {
        if (itemToRemove) {
            removeItem(itemToRemove);
            bootstrap.Modal.getInstance(document.getElementById('removeItemModal')).hide();
            itemToRemove = null;
        }
    });

    // Soumission du formulaire
    document.getElementById('submit-purchase').addEventListener('click', function(e) {
        e.preventDefault();
        prepareFormData();
        document.querySelector('form').submit();
    });

    // Gestion du scanner dans le modal
    const scannerInput = document.getElementById('barcode-scanner-input');
    scannerInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === 'Tab') {
            e.preventDefault();
            if (this.value.trim()) {
                searchProductsByBarcode(this.value.trim());
                bootstrap.Modal.getInstance(document.getElementById('scannerModal')).hide();
                this.value = '';
            }
        }
    });
});

// Fonction de recherche de produits
function searchProducts() {
    const query = document.getElementById('product-search').value.trim();
    if (query.length < 2) {
        document.getElementById('search-results-body').innerHTML = '';
        return;
    }

    fetch(`/admin/purchase/search-products?q=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            const tbody = document.getElementById('search-results-body');
            tbody.innerHTML = '';

            if (data.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan=\"7\" class=\"text-center py-4\">
                            <i class=\"fas fa-search fa-2x text-muted mb-3\"></i>
                            <p class=\"text-muted\">Aucun produit trouvé</p>
                        </td>
                    </tr>
                `;
                return;
            }

            data.forEach(product => {
                const isInCart = purchaseItems.some(item => item.productId === product.id);
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <img src=\"/uploads/products/\${product.image || 'default-product.png'}\" 
                             class=\"rounded\"
                             style=\"width: 40px; height: 40px; object-fit: cover;\">
                    </td>
                    <td>
                        <strong>\${product.name}</strong>
                        <small class=\"d-block text-muted\">\${product.description || ''}</small>
                    </td>
                    <td><span class=\"badge bg-secondary\">\${product.barcode}</span></td>
                    <td>\${product.category ? product.category.name : ''}</td>
                    <td>
                        <span class=\"badge \${product.stockQuantity < product.minQuantity ? 'bg-danger' : 'bg-success'}\">
                            \${product.stockQuantity}
                        </span>
                    </td>
                    <td class=\"text-end\">\${product.purchasePrice.toLocaleString('fr-FR')} FCFA</td>
                    <td>
                        \${isInCart ? 
                            '<span class=\"badge bg-success\"><i class=\"fas fa-check me-1\"></i> Ajouté</span>' :
                            `<button class=\"btn btn-sm btn-outline-primary add-to-cart\" 
                                     data-product-id=\"\${product.id}\"
                                     data-product-name=\"\${product.name}\"
                                     data-product-image=\"\${product.image || 'default-product.png'}\"
                                     data-product-barcode=\"\${product.barcode}\"
                                     data-category=\"\${product.category ? product.category.name : ''}\"
                                     data-purchase-price=\"\${product.purchasePrice}\"
                                     data-has-expiry-date=\"\${product.hasExpiryDate}\">
                                <i class=\"fas fa-plus\"></i>
                            </button>`
                        }
                    </td>
                `;
                tbody.appendChild(row);
            });

            // Ajouter les événements aux boutons d'ajout
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    addToCart({
                        productId: this.dataset.productId,
                        productName: this.dataset.productName,
                        productImage: this.dataset.productImage,
                        productBarcode: this.dataset.productBarcode,
                        category: this.dataset.category,
                        purchasePrice: parseFloat(this.dataset.purchasePrice),
                        hasExpiryDate: this.dataset.hasExpiryDate === 'true'
                    });
                    this.innerHTML = '<span class=\"badge bg-success\"><i class=\"fas fa-check me-1\"></i> Ajouté</span>';
                    this.classList.remove('btn-outline-primary');
                    this.classList.add('btn-success');
                    this.disabled = true;
                });
            });
        })
        .catch(error => {
            console.error('Erreur:', error);
        });
}

// Recherche par code barre
function searchProductsByBarcode(barcode) {
    document.getElementById('product-search').value = barcode;
    searchProducts();
}

// Ajouter au panier
function addToCart(product) {
    // Vérifier si le produit est déjà dans le panier
    const existingIndex = purchaseItems.findIndex(item => item.productId == product.productId);
    
    if (existingIndex > -1) {
        // Incrémenter la quantité
        purchaseItems[existingIndex].quantity += 1;
        updateRow(existingIndex);
    } else {
        // Ajouter un nouvel item
        const newItem = {
            ...product,
            quantity: 1,
            lotNumber: '',
            expiryDate: null,
            manufactureDate: null
        };
        purchaseItems.push(newItem);
        addRow(newItem);
    }

    // Mettre à jour l'interface
    updateCartInterface();
    calculateGrandTotal();

    // Fermer le modal si le panier était vide
    if (document.getElementById('empty-cart-message')) {
        document.getElementById('empty-cart-message').remove();
    }
}

// Ajouter une ligne au tableau
function addRow(item) {
    const tbody = document.getElementById('purchase-items-body');
    const index = purchaseItems.length;
    
    const row = document.createElement('tr');
    row.setAttribute('data-product-id', item.productId);
    
    // Générer les champs de date si nécessaire
    const dateFields = item.hasExpiryDate ? `
        <div class=\"row g-2 mt-2\">
            <div class=\"col-6\">
                <input type=\"date\" 
                       class=\"form-control form-control-sm manufacture-date-input\"
                       placeholder=\"Fab.\"
                       title=\"Date de fabrication\">
            </div>
            <div class=\"col-6\">
                <input type=\"date\" 
                       class=\"form-control form-control-sm expiry-date-input\"
                       placeholder=\"Exp.\"
                       title=\"Date d'expiration\">
            </div>
        </div>
    ` : '';
    
    row.innerHTML = `
        <td>\${index + 1}</td>
        <td>
            <div class=\"d-flex align-items-center\">
                <img src=\"/uploads/products/\${item.productImage}\" 
                     class=\"rounded me-3\"
                     style=\"width: 40px; height: 40px; object-fit: cover;\">
                <div>
                    <strong>\${item.productName}</strong>
                    <small class=\"d-block text-muted\">\${item.category}</small>
                </div>
            </div>
        </td>
        <td><span class=\"badge bg-secondary\">\${item.productBarcode}</span></td>
        <td>
            <input type=\"number\" 
                   class=\"form-control quantity-input\"
                   value=\"\${item.quantity}\"
                   min=\"1\"
                   style=\"width: 80px;\">
        </td>
        <td>
            <div class=\"input-group\" style=\"width: 150px;\">
                <input type=\"number\" 
                       class=\"form-control price-input\"
                       value=\"\${item.purchasePrice}\"
                       min=\"0\"
                       step=\"0.01\">
                <span class=\"input-group-text\">FCFA</span>
            </div>
        </td>
        <td class=\"item-total\">
            \${(item.quantity * item.purchasePrice).toLocaleString('fr-FR')} FCFA
        </td>
        <td>
            <input type=\"text\" 
                   class=\"form-control lot-number-input\"
                   value=\"\${item.lotNumber}\"
                   placeholder=\"AUTO\">
            \${dateFields}
        </td>
        <td>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-sm remove-item\"
                    title=\"Supprimer\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </td>
    `;
    
    tbody.appendChild(row);
    
    // Ajouter les événements pour les champs de date
    if (item.hasExpiryDate) {
        row.querySelector('.manufacture-date-input').addEventListener('change', function() {
            updateManufactureDate(item.productId, this.value);
        });
        row.querySelector('.expiry-date-input').addEventListener('change', function() {
            updateExpiryDate(item.productId, this.value);
        });
    }
}

// Mettre à jour une ligne existante
function updateRow(index) {
    const item = purchaseItems[index];
    const row = document.querySelector(`tr[data-product-id=\"\${item.productId}\"]`);
    
    if (row) {
        const quantityInput = row.querySelector('.quantity-input');
        const priceInput = row.querySelector('.price-input');
        const totalCell = row.querySelector('.item-total');
        
        if (quantityInput) quantityInput.value = item.quantity;
        if (priceInput) priceInput.value = item.purchasePrice;
        if (totalCell) {
            totalCell.textContent = (item.quantity * item.purchasePrice).toLocaleString('fr-FR') + ' FCFA';
        }
    }
}

// Mettre à jour un item
function updateItem(input) {
    const row = input.closest('tr');
    const productId = row.getAttribute('data-product-id');
    const index = purchaseItems.findIndex(item => item.productId == productId);
    
    if (index > -1) {
        if (input.classList.contains('quantity-input')) {
            purchaseItems[index].quantity = parseFloat(input.value) || 1;
        } else if (input.classList.contains('price-input')) {
            purchaseItems[index].purchasePrice = parseFloat(input.value) || 0;
        }
        
        const totalCell = row.querySelector('.item-total');
        if (totalCell) {
            totalCell.textContent = (purchaseItems[index].quantity * purchaseItems[index].purchasePrice).toLocaleString('fr-FR') + ' FCFA';
        }
        
        calculateGrandTotal();
    }
}

// Mettre à jour le numéro de lot
function updateLotNumber(input) {
    const row = input.closest('tr');
    const productId = row.getAttribute('data-product-id');
    const index = purchaseItems.findIndex(item => item.productId == productId);
    
    if (index > -1) {
        purchaseItems[index].lotNumber = input.value;
    }
}

// Mettre à jour la date de fabrication
function updateManufactureDate(productId, date) {
    const index = purchaseItems.findIndex(item => item.productId == productId);
    if (index > -1) {
        purchaseItems[index].manufactureDate = date;
    }
}

// Mettre à jour la date d'expiration
function updateExpiryDate(productId, date) {
    const index = purchaseItems.findIndex(item => item.productId == productId);
    if (index > -1) {
        purchaseItems[index].expiryDate = date;
    }
}

// Supprimer un item
function removeItem(productId) {
    const index = purchaseItems.findIndex(item => item.productId == productId);
    if (index > -1) {
        purchaseItems.splice(index, 1);
        
        const row = document.querySelector(`tr[data-product-id=\"\${productId}\"]`);
        if (row) row.remove();
        
        updateCartInterface();
        calculateGrandTotal();
        updateRowNumbers();
    }
}

// Mettre à jour l'interface du panier
function updateCartInterface() {
    if (purchaseItems.length === 0) {
        const tbody = document.getElementById('purchase-items-body');
        tbody.innerHTML = `
            <tr id=\"empty-cart-message\">
                <td colspan=\"8\" class=\"text-center py-5\">
                    <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Panier vide</h5>
                    <p class=\"text-muted\">Ajoutez des produits pour commencer</p>
                </td>
            </tr>
        `;
    }
}

// Mettre à jour les numéros de ligne
function updateRowNumbers() {
    const rows = document.querySelectorAll('#purchase-items-body tr:not(#empty-cart-message)');
    rows.forEach((row, index) => {
        const firstCell = row.querySelector('td:first-child');
        if (firstCell) {
            firstCell.textContent = index + 1;
        }
    });
}

// Calculer le total général
function calculateGrandTotal() {
    let grandTotal = 0;
    
    purchaseItems.forEach(item => {
        grandTotal += item.quantity * item.purchasePrice;
    });
    
    document.getElementById('grand-total').textContent = 
        grandTotal.toLocaleString('fr-FR') + ' FCFA';
}

// Préparer les données pour la soumission
function prepareFormData() {
    // Créer un champ caché pour chaque item
    const form = document.querySelector('form');
    
    // Supprimer les anciens champs d'items
    document.querySelectorAll('[name^=\"purchase_items\"]').forEach(field => field.remove());
    
    // Ajouter les nouveaux champs
    purchaseItems.forEach((item, index) => {
        // Produit ID
        const productField = document.createElement('input');
        productField.type = 'hidden';
        productField.name = `purchase_items[\${index}][product]`;
        productField.value = item.productId;
        form.appendChild(productField);
        
        // Quantité
        const quantityField = document.createElement('input');
        quantityField.type = 'hidden';
        quantityField.name = `purchase_items[\${index}][quantity]`;
        quantityField.value = item.quantity;
        form.appendChild(quantityField);
        
        // Prix d'achat
        const priceField = document.createElement('input');
        priceField.type = 'hidden';
        priceField.name = `purchase_items[\${index}][purchasePrice]`;
        priceField.value = item.purchasePrice;
        form.appendChild(priceField);
        
        // Numéro de lot
        const lotField = document.createElement('input');
        lotField.type = 'hidden';
        lotField.name = `purchase_items[\${index}][lotNumber]`;
        lotField.value = item.lotNumber || '';
        form.appendChild(lotField);
        
        // Dates si nécessaire
        if (item.hasExpiryDate) {
            if (item.manufactureDate) {
                const manufactureField = document.createElement('input');
                manufactureField.type = 'hidden';
                manufactureField.name = `purchase_items[\${index}][manufactureDate]`;
                manufactureField.value = item.manufactureDate;
                form.appendChild(manufactureField);
            }
            
            if (item.expiryDate) {
                const expiryField = document.createElement('input');
                expiryField.type = 'hidden';
                expiryField.name = `purchase_items[\${index}][expiryDate]`;
                expiryField.value = item.expiryDate;
                form.appendChild(expiryField);
            }
        }
    });
}

// Fonction debounce pour la recherche
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 971
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

        // line 972
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

.bg-gradient-success {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
}

.bg-gradient-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%) !important;
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
.form-floating > .form-control:not(:placeholder-shown) ~ label {
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

.select2-container--bootstrap-5 .select2-selection:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
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

#purchase-items-table tbody tr {
    transition: all 0.2s ease;
}

#purchase-items-table tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
}

.quantity-input:focus, .price-input:focus, .lot-number-input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}

#grand-total {
    font-weight: 700;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

.sticky-top {
    position: sticky;
    top: 0;
    z-index: 10;
}

.modal-backdrop {
    backdrop-filter: blur(5px);
}

.btn-close-white {
    filter: brightness(0) invert(1);
}

.input-group-lg .form-control {
    border-radius: 10px 0 0 10px;
}

.input-group-lg .btn {
    border-radius: 0 10px 10px 0;
}

/* Animation pour l'ajout au panier */
@keyframes highlight {
    0% { background-color: rgba(102, 126, 234, 0.3); }
    100% { background-color: transparent; }
}

.highlight {
    animation: highlight 1s ease;
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
        return "admin/purchase/_form.html.twig";
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
        return array (  1188 => 972,  1175 => 971,  647 => 452,  634 => 451,  623 => 971,  620 => 970,  618 => 451,  613 => 449,  609 => 448,  604 => 446,  592 => 437,  437 => 285,  417 => 268,  369 => 222,  359 => 214,  356 => 213,  330 => 201,  322 => 196,  312 => 189,  301 => 181,  293 => 176,  285 => 171,  281 => 170,  274 => 166,  268 => 163,  263 => 162,  245 => 161,  243 => 160,  197 => 117,  194 => 116,  192 => 112,  183 => 106,  180 => 105,  178 => 102,  155 => 82,  152 => 81,  150 => 78,  141 => 72,  134 => 68,  131 => 67,  129 => 64,  115 => 53,  107 => 48,  100 => 44,  97 => 43,  95 => 38,  70 => 16,  63 => 12,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/purchase/_form.html.twig #}
{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"container-fluid\">
    <!-- En-tête -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h4 class=\"mb-0\">
                            <i class=\"fas fa-cart-plus me-2\"></i>
                            {{ form.vars.name == 'new' ? 'Nouvel achat' : 'Modifier l\\'achat' }}
                        </h4>
                        <span class=\"badge bg-light text-dark fs-6\">
                            <i class=\"fas fa-hashtag me-1\"></i>
                            {{ purchase.reference|default('AUTO-GÉNÉRÉ') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informations de base -->
    <div class=\"row g-4 mb-4\">
        <!-- Fournisseur -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-truck me-2\"></i> Fournisseur
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-8\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.supplier, {'attr': {
                                    'class': 'form-control select2-supplier',
                                    'placeholder': ' ',
                                    'required': true,
                                    'data-allow-clear': true
                                }}) }}
                                <label for=\"{{ form.supplier.vars.id }}\">
                                    <i class=\"fas fa-user-tie me-1\"></i> Fournisseur *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.supplier) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 d-flex align-items-end\">
                            <a href=\"{{ path('app_admin_supplier_new') }}\" 
                               class=\"btn btn-outline-primary w-100\"
                               target=\"_blank\">
                                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau
                            </a>
                        </div>
                    </div>
                    
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.reception_date, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.reception_date.vars.id }}\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de réception *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.reception_date) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.expected_delivery_date, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.expected_delivery_date.vars.id }}\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date livraison prévue
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informations supplémentaires -->
        <div class=\"col-lg-6\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i> Informations complémentaires
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"form-floating mb-3\">
                        {{ form_widget(form.invoice_number, {'attr': {
                            'class': 'form-control',
                            'placeholder': ' '
                        }}) }}
                        <label for=\"{{ form.invoice_number.vars.id }}\">
                            <i class=\"fas fa-file-invoice me-1\"></i> Numéro de facture
                        </label>
                    </div>
                    
                    <div class=\"form-floating\">
                        {{ form_widget(form.notes, {'attr': {
                            'class': 'form-control',
                            'placeholder': ' ',
                            'style': 'height: 100px'
                        }}) }}
                        <label for=\"{{ form.notes.vars.id }}\">
                            <i class=\"fas fa-sticky-note me-1\"></i> Notes
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Panier d'achat -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-shopping-cart me-2\"></i> Panier d'achat
                        </h5>
                        <button type=\"button\" 
                                class=\"btn btn-light btn-sm\"
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#addProductModal\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Ajouter un produit
                        </button>
                    </div>
                </div>
                <div class=\"card-body\">
                    <!-- Tableau des produits -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle\" id=\"purchase-items-table\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th width=\"5%\">#</th>
                                    <th width=\"25%\">Produit</th>
                                    <th width=\"10%\">Code barre</th>
                                    <th width=\"10%\">Quantité</th>
                                    <th width=\"15%\">Prix d'achat</th>
                                    <th width=\"10%\">Total</th>
                                    <th width=\"15%\">Lot</th>
                                    <th width=\"10%\">Actions</th>
                                </tr>
                            </thead>
                            <tbody id=\"purchase-items-body\">
                                {% if purchase.purchaseItems is defined and purchase.purchaseItems|length > 0 %}
                                    {% for item in purchase.purchaseItems %}
                                        <tr data-product-id=\"{{ item.product.id }}\">
                                            <td>{{ loop.index }}</td>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <img src=\"{{ asset('uploads/products/' ~ item.product.image|default('default-product.png')) }}\" 
                                                         class=\"rounded me-3\"
                                                         style=\"width: 40px; height: 40px; object-fit: cover;\">
                                                    <div>
                                                        <strong>{{ item.product.name }}</strong>
                                                        <small class=\"d-block text-muted\">{{ item.product.category.name|default('') }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"badge bg-secondary\">{{ item.product.barcode }}</span>
                                            </td>
                                            <td>
                                                <input type=\"number\" 
                                                       class=\"form-control quantity-input\"
                                                       value=\"{{ item.quantity }}\"
                                                       min=\"1\"
                                                       style=\"width: 80px;\">
                                            </td>
                                            <td>
                                                <div class=\"input-group\" style=\"width: 150px;\">
                                                    <input type=\"number\" 
                                                           class=\"form-control price-input\"
                                                           value=\"{{ item.purchasePrice }}\"
                                                           min=\"0\"
                                                           step=\"0.01\">
                                                    <span class=\"input-group-text\">FCFA</span>
                                                </div>
                                            </td>
                                            <td class=\"item-total\">
                                                {{ (item.quantity * item.purchasePrice)|number_format(0, ',', ' ') }} FCFA
                                            </td>
                                            <td>
                                                <input type=\"text\" 
                                                       class=\"form-control lot-number-input\"
                                                       value=\"{{ item.lotNumber|default('') }}\"
                                                       placeholder=\"AUTO\">
                                            </td>
                                            <td>
                                                <button type=\"button\" 
                                                        class=\"btn btn-danger btn-sm remove-item\"
                                                        title=\"Supprimer\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                {% else %}
                                    <tr id=\"empty-cart-message\">
                                        <td colspan=\"8\" class=\"text-center py-5\">
                                            <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3\"></i>
                                            <h5 class=\"text-muted\">Panier vide</h5>
                                            <p class=\"text-muted\">Ajoutez des produits pour commencer</p>
                                        </td>
                                    </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Résumé du panier -->
                <div class=\"card-footer bg-light\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-6\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-scan me-2 text-primary\"></i>
                                <small class=\"text-muted\">
                                    Scanner, rechercher par nom ou code barre
                                </small>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"d-flex justify-content-end align-items-center\">
                                <div class=\"me-4\">
                                    <h6 class=\"mb-0 text-muted\">Total général :</h6>
                                    <h3 class=\"mb-0 text-success\" id=\"grand-total\">0 FCFA</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Boutons d'action -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <button type=\"button\" 
                                    class=\"btn btn-outline-danger\"
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#cancelPurchaseModal\">
                                <i class=\"fas fa-times me-2\"></i> Annuler l'achat
                            </button>
                        </div>
                        
                        <div class=\"btn-group\">
                            <a href=\"{{ path('app_admin_purchase_index') }}\" 
                               class=\"btn btn-outline-secondary btn-lg px-4\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Retour
                            </a>
                            
                            <button type=\"submit\" 
                                    class=\"btn btn-primary btn-lg px-5\"
                                    id=\"submit-purchase\">
                                <i class=\"fas fa-check-circle me-2\"></i> Valider la réception
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ form_end(form) }}

<!-- Modal d'ajout de produit -->
<div class=\"modal fade\" id=\"addProductModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-gradient-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-search-plus me-2\"></i> Rechercher un produit
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <!-- Barre de recherche -->
                <div class=\"mb-4\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-text bg-light\">
                            <i class=\"fas fa-search\"></i>
                        </span>
                        <input type=\"text\" 
                               class=\"form-control\" 
                               id=\"product-search\"
                               placeholder=\"Rechercher par nom, code barre...\">
                        <button class=\"btn btn-outline-primary\" type=\"button\" id=\"scan-search-btn\">
                            <i class=\"fas fa-barcode\"></i> Scanner
                        </button>
                    </div>
                    <div class=\"form-text mt-2\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez le nom, scannez le code barre, ou cliquez sur Scanner
                    </div>
                </div>

                <!-- Résultats de recherche -->
                <div class=\"table-responsive\" style=\"max-height: 400px; overflow-y: auto;\">
                    <table class=\"table table-hover\" id=\"search-results-table\">
                        <thead class=\"table-light sticky-top\">
                            <tr>
                                <th width=\"5%\"></th>
                                <th width=\"25%\">Produit</th>
                                <th width=\"15%\">Code barre</th>
                                <th width=\"15%\">Catégorie</th>
                                <th width=\"15%\">Stock actuel</th>
                                <th width=\"15%\">Prix d'achat</th>
                                <th width=\"10%\">Action</th>
                            </tr>
                        </thead>
                        <tbody id=\"search-results-body\">
                            <!-- Les résultats seront chargés ici via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Fermer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal scanner -->
<div class=\"modal fade\" id=\"scannerModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
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
                <button type=\"button\" class=\"btn btn-primary\" id=\"use-scanned-barcode-search\">
                    <i class=\"fas fa-check me-1\"></i> Rechercher
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation suppression -->
<div class=\"modal fade\" id=\"removeItemModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Supprimer ce produit du panier ?</h5>
                    <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirm-remove-item\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal annulation achat -->
<div class=\"modal fade\" id=\"cancelPurchaseModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Annuler l'achat
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-ban fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr d'annuler cet achat ?</h5>
                    <p class=\"text-muted\">Tous les produits ajoutés seront perdus.</p>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Continuer l'achat
                </button>
                <a href=\"{{ path('app_admin_purchase_index') }}\" class=\"btn btn-danger\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler l'achat
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Champs cachés pour les données -->
<input type=\"hidden\" id=\"products-data\" value=\"{{ products_data|default([])|json_encode }}\">
<div id=\"purchase-items-data\" 
     data-items=\"{{ purchase.purchaseItems|default([])|json_encode }}\"
     data-items-count=\"{{ purchase.purchaseItems|default([])|length }}\"></div>

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
let purchaseItems = [];
let itemToRemove = null;

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2 pour les fournisseurs
    \$('.select2-supplier').select2({
        theme: \"bootstrap-5\",
        language: \"fr\",
        width: \"100%\",
        placeholder: \"Sélectionnez un fournisseur...\",
        allowClear: true,
        dropdownParent: \$('.card-body')
    });

    // Charger les items existants
    const itemsData = document.getElementById('purchase-items-data');
    if (itemsData) {
        const initialItems = JSON.parse(itemsData.dataset.items);
        purchaseItems = initialItems.map(item => ({
            productId: item.product.id,
            productName: item.product.name,
            productImage: item.product.image,
            productBarcode: item.product.barcode,
            category: item.product.category ? item.product.category.name : '',
            quantity: item.quantity,
            purchasePrice: item.purchasePrice,
            lotNumber: item.lotNumber || '',
            expiryDate: item.expiryDate || null,
            manufactureDate: item.manufactureDate || null,
            hasExpiryDate: item.product.hasExpiryDate || false
        }));
    }

    // Calculer le total initial
    calculateGrandTotal();

    // Gérer l'ajout de produit
    document.getElementById('product-search').addEventListener('input', debounce(searchProducts, 300));
    
    // Scanner pour la recherche
    document.getElementById('scan-search-btn').addEventListener('click', function() {
        const scannerModal = new bootstrap.Modal(document.getElementById('scannerModal'));
        scannerModal.show();
    });

    // Utiliser le code scanné pour la recherche
    document.getElementById('use-scanned-barcode-search').addEventListener('click', function() {
        const barcode = document.getElementById('barcode-scanner-input').value.trim();
        if (barcode) {
            searchProductsByBarcode(barcode);
            bootstrap.Modal.getInstance(document.getElementById('scannerModal')).hide();
        }
    });

    // Gestion des événements sur le tableau
    document.getElementById('purchase-items-body').addEventListener('input', function(e) {
        if (e.target.classList.contains('quantity-input') || e.target.classList.contains('price-input')) {
            updateItem(e.target);
        }
        if (e.target.classList.contains('lot-number-input')) {
            updateLotNumber(e.target);
        }
    });

    // Gestion des événements sur le tableau
    document.getElementById('purchase-items-body').addEventListener('click', function(e) {
        if (e.target.closest('.remove-item')) {
            const row = e.target.closest('tr');
            itemToRemove = row.getAttribute('data-product-id');
            const modal = new bootstrap.Modal(document.getElementById('removeItemModal'));
            modal.show();
        }
    });

    // Confirmer la suppression
    document.getElementById('confirm-remove-item').addEventListener('click', function() {
        if (itemToRemove) {
            removeItem(itemToRemove);
            bootstrap.Modal.getInstance(document.getElementById('removeItemModal')).hide();
            itemToRemove = null;
        }
    });

    // Soumission du formulaire
    document.getElementById('submit-purchase').addEventListener('click', function(e) {
        e.preventDefault();
        prepareFormData();
        document.querySelector('form').submit();
    });

    // Gestion du scanner dans le modal
    const scannerInput = document.getElementById('barcode-scanner-input');
    scannerInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === 'Tab') {
            e.preventDefault();
            if (this.value.trim()) {
                searchProductsByBarcode(this.value.trim());
                bootstrap.Modal.getInstance(document.getElementById('scannerModal')).hide();
                this.value = '';
            }
        }
    });
});

// Fonction de recherche de produits
function searchProducts() {
    const query = document.getElementById('product-search').value.trim();
    if (query.length < 2) {
        document.getElementById('search-results-body').innerHTML = '';
        return;
    }

    fetch(`/admin/purchase/search-products?q=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            const tbody = document.getElementById('search-results-body');
            tbody.innerHTML = '';

            if (data.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan=\"7\" class=\"text-center py-4\">
                            <i class=\"fas fa-search fa-2x text-muted mb-3\"></i>
                            <p class=\"text-muted\">Aucun produit trouvé</p>
                        </td>
                    </tr>
                `;
                return;
            }

            data.forEach(product => {
                const isInCart = purchaseItems.some(item => item.productId === product.id);
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <img src=\"/uploads/products/\${product.image || 'default-product.png'}\" 
                             class=\"rounded\"
                             style=\"width: 40px; height: 40px; object-fit: cover;\">
                    </td>
                    <td>
                        <strong>\${product.name}</strong>
                        <small class=\"d-block text-muted\">\${product.description || ''}</small>
                    </td>
                    <td><span class=\"badge bg-secondary\">\${product.barcode}</span></td>
                    <td>\${product.category ? product.category.name : ''}</td>
                    <td>
                        <span class=\"badge \${product.stockQuantity < product.minQuantity ? 'bg-danger' : 'bg-success'}\">
                            \${product.stockQuantity}
                        </span>
                    </td>
                    <td class=\"text-end\">\${product.purchasePrice.toLocaleString('fr-FR')} FCFA</td>
                    <td>
                        \${isInCart ? 
                            '<span class=\"badge bg-success\"><i class=\"fas fa-check me-1\"></i> Ajouté</span>' :
                            `<button class=\"btn btn-sm btn-outline-primary add-to-cart\" 
                                     data-product-id=\"\${product.id}\"
                                     data-product-name=\"\${product.name}\"
                                     data-product-image=\"\${product.image || 'default-product.png'}\"
                                     data-product-barcode=\"\${product.barcode}\"
                                     data-category=\"\${product.category ? product.category.name : ''}\"
                                     data-purchase-price=\"\${product.purchasePrice}\"
                                     data-has-expiry-date=\"\${product.hasExpiryDate}\">
                                <i class=\"fas fa-plus\"></i>
                            </button>`
                        }
                    </td>
                `;
                tbody.appendChild(row);
            });

            // Ajouter les événements aux boutons d'ajout
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    addToCart({
                        productId: this.dataset.productId,
                        productName: this.dataset.productName,
                        productImage: this.dataset.productImage,
                        productBarcode: this.dataset.productBarcode,
                        category: this.dataset.category,
                        purchasePrice: parseFloat(this.dataset.purchasePrice),
                        hasExpiryDate: this.dataset.hasExpiryDate === 'true'
                    });
                    this.innerHTML = '<span class=\"badge bg-success\"><i class=\"fas fa-check me-1\"></i> Ajouté</span>';
                    this.classList.remove('btn-outline-primary');
                    this.classList.add('btn-success');
                    this.disabled = true;
                });
            });
        })
        .catch(error => {
            console.error('Erreur:', error);
        });
}

// Recherche par code barre
function searchProductsByBarcode(barcode) {
    document.getElementById('product-search').value = barcode;
    searchProducts();
}

// Ajouter au panier
function addToCart(product) {
    // Vérifier si le produit est déjà dans le panier
    const existingIndex = purchaseItems.findIndex(item => item.productId == product.productId);
    
    if (existingIndex > -1) {
        // Incrémenter la quantité
        purchaseItems[existingIndex].quantity += 1;
        updateRow(existingIndex);
    } else {
        // Ajouter un nouvel item
        const newItem = {
            ...product,
            quantity: 1,
            lotNumber: '',
            expiryDate: null,
            manufactureDate: null
        };
        purchaseItems.push(newItem);
        addRow(newItem);
    }

    // Mettre à jour l'interface
    updateCartInterface();
    calculateGrandTotal();

    // Fermer le modal si le panier était vide
    if (document.getElementById('empty-cart-message')) {
        document.getElementById('empty-cart-message').remove();
    }
}

// Ajouter une ligne au tableau
function addRow(item) {
    const tbody = document.getElementById('purchase-items-body');
    const index = purchaseItems.length;
    
    const row = document.createElement('tr');
    row.setAttribute('data-product-id', item.productId);
    
    // Générer les champs de date si nécessaire
    const dateFields = item.hasExpiryDate ? `
        <div class=\"row g-2 mt-2\">
            <div class=\"col-6\">
                <input type=\"date\" 
                       class=\"form-control form-control-sm manufacture-date-input\"
                       placeholder=\"Fab.\"
                       title=\"Date de fabrication\">
            </div>
            <div class=\"col-6\">
                <input type=\"date\" 
                       class=\"form-control form-control-sm expiry-date-input\"
                       placeholder=\"Exp.\"
                       title=\"Date d'expiration\">
            </div>
        </div>
    ` : '';
    
    row.innerHTML = `
        <td>\${index + 1}</td>
        <td>
            <div class=\"d-flex align-items-center\">
                <img src=\"/uploads/products/\${item.productImage}\" 
                     class=\"rounded me-3\"
                     style=\"width: 40px; height: 40px; object-fit: cover;\">
                <div>
                    <strong>\${item.productName}</strong>
                    <small class=\"d-block text-muted\">\${item.category}</small>
                </div>
            </div>
        </td>
        <td><span class=\"badge bg-secondary\">\${item.productBarcode}</span></td>
        <td>
            <input type=\"number\" 
                   class=\"form-control quantity-input\"
                   value=\"\${item.quantity}\"
                   min=\"1\"
                   style=\"width: 80px;\">
        </td>
        <td>
            <div class=\"input-group\" style=\"width: 150px;\">
                <input type=\"number\" 
                       class=\"form-control price-input\"
                       value=\"\${item.purchasePrice}\"
                       min=\"0\"
                       step=\"0.01\">
                <span class=\"input-group-text\">FCFA</span>
            </div>
        </td>
        <td class=\"item-total\">
            \${(item.quantity * item.purchasePrice).toLocaleString('fr-FR')} FCFA
        </td>
        <td>
            <input type=\"text\" 
                   class=\"form-control lot-number-input\"
                   value=\"\${item.lotNumber}\"
                   placeholder=\"AUTO\">
            \${dateFields}
        </td>
        <td>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-sm remove-item\"
                    title=\"Supprimer\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </td>
    `;
    
    tbody.appendChild(row);
    
    // Ajouter les événements pour les champs de date
    if (item.hasExpiryDate) {
        row.querySelector('.manufacture-date-input').addEventListener('change', function() {
            updateManufactureDate(item.productId, this.value);
        });
        row.querySelector('.expiry-date-input').addEventListener('change', function() {
            updateExpiryDate(item.productId, this.value);
        });
    }
}

// Mettre à jour une ligne existante
function updateRow(index) {
    const item = purchaseItems[index];
    const row = document.querySelector(`tr[data-product-id=\"\${item.productId}\"]`);
    
    if (row) {
        const quantityInput = row.querySelector('.quantity-input');
        const priceInput = row.querySelector('.price-input');
        const totalCell = row.querySelector('.item-total');
        
        if (quantityInput) quantityInput.value = item.quantity;
        if (priceInput) priceInput.value = item.purchasePrice;
        if (totalCell) {
            totalCell.textContent = (item.quantity * item.purchasePrice).toLocaleString('fr-FR') + ' FCFA';
        }
    }
}

// Mettre à jour un item
function updateItem(input) {
    const row = input.closest('tr');
    const productId = row.getAttribute('data-product-id');
    const index = purchaseItems.findIndex(item => item.productId == productId);
    
    if (index > -1) {
        if (input.classList.contains('quantity-input')) {
            purchaseItems[index].quantity = parseFloat(input.value) || 1;
        } else if (input.classList.contains('price-input')) {
            purchaseItems[index].purchasePrice = parseFloat(input.value) || 0;
        }
        
        const totalCell = row.querySelector('.item-total');
        if (totalCell) {
            totalCell.textContent = (purchaseItems[index].quantity * purchaseItems[index].purchasePrice).toLocaleString('fr-FR') + ' FCFA';
        }
        
        calculateGrandTotal();
    }
}

// Mettre à jour le numéro de lot
function updateLotNumber(input) {
    const row = input.closest('tr');
    const productId = row.getAttribute('data-product-id');
    const index = purchaseItems.findIndex(item => item.productId == productId);
    
    if (index > -1) {
        purchaseItems[index].lotNumber = input.value;
    }
}

// Mettre à jour la date de fabrication
function updateManufactureDate(productId, date) {
    const index = purchaseItems.findIndex(item => item.productId == productId);
    if (index > -1) {
        purchaseItems[index].manufactureDate = date;
    }
}

// Mettre à jour la date d'expiration
function updateExpiryDate(productId, date) {
    const index = purchaseItems.findIndex(item => item.productId == productId);
    if (index > -1) {
        purchaseItems[index].expiryDate = date;
    }
}

// Supprimer un item
function removeItem(productId) {
    const index = purchaseItems.findIndex(item => item.productId == productId);
    if (index > -1) {
        purchaseItems.splice(index, 1);
        
        const row = document.querySelector(`tr[data-product-id=\"\${productId}\"]`);
        if (row) row.remove();
        
        updateCartInterface();
        calculateGrandTotal();
        updateRowNumbers();
    }
}

// Mettre à jour l'interface du panier
function updateCartInterface() {
    if (purchaseItems.length === 0) {
        const tbody = document.getElementById('purchase-items-body');
        tbody.innerHTML = `
            <tr id=\"empty-cart-message\">
                <td colspan=\"8\" class=\"text-center py-5\">
                    <i class=\"fas fa-shopping-cart fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Panier vide</h5>
                    <p class=\"text-muted\">Ajoutez des produits pour commencer</p>
                </td>
            </tr>
        `;
    }
}

// Mettre à jour les numéros de ligne
function updateRowNumbers() {
    const rows = document.querySelectorAll('#purchase-items-body tr:not(#empty-cart-message)');
    rows.forEach((row, index) => {
        const firstCell = row.querySelector('td:first-child');
        if (firstCell) {
            firstCell.textContent = index + 1;
        }
    });
}

// Calculer le total général
function calculateGrandTotal() {
    let grandTotal = 0;
    
    purchaseItems.forEach(item => {
        grandTotal += item.quantity * item.purchasePrice;
    });
    
    document.getElementById('grand-total').textContent = 
        grandTotal.toLocaleString('fr-FR') + ' FCFA';
}

// Préparer les données pour la soumission
function prepareFormData() {
    // Créer un champ caché pour chaque item
    const form = document.querySelector('form');
    
    // Supprimer les anciens champs d'items
    document.querySelectorAll('[name^=\"purchase_items\"]').forEach(field => field.remove());
    
    // Ajouter les nouveaux champs
    purchaseItems.forEach((item, index) => {
        // Produit ID
        const productField = document.createElement('input');
        productField.type = 'hidden';
        productField.name = `purchase_items[\${index}][product]`;
        productField.value = item.productId;
        form.appendChild(productField);
        
        // Quantité
        const quantityField = document.createElement('input');
        quantityField.type = 'hidden';
        quantityField.name = `purchase_items[\${index}][quantity]`;
        quantityField.value = item.quantity;
        form.appendChild(quantityField);
        
        // Prix d'achat
        const priceField = document.createElement('input');
        priceField.type = 'hidden';
        priceField.name = `purchase_items[\${index}][purchasePrice]`;
        priceField.value = item.purchasePrice;
        form.appendChild(priceField);
        
        // Numéro de lot
        const lotField = document.createElement('input');
        lotField.type = 'hidden';
        lotField.name = `purchase_items[\${index}][lotNumber]`;
        lotField.value = item.lotNumber || '';
        form.appendChild(lotField);
        
        // Dates si nécessaire
        if (item.hasExpiryDate) {
            if (item.manufactureDate) {
                const manufactureField = document.createElement('input');
                manufactureField.type = 'hidden';
                manufactureField.name = `purchase_items[\${index}][manufactureDate]`;
                manufactureField.value = item.manufactureDate;
                form.appendChild(manufactureField);
            }
            
            if (item.expiryDate) {
                const expiryField = document.createElement('input');
                expiryField.type = 'hidden';
                expiryField.name = `purchase_items[\${index}][expiryDate]`;
                expiryField.value = item.expiryDate;
                form.appendChild(expiryField);
            }
        }
    });
}

// Fonction debounce pour la recherche
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
</script>
{% endblock %}

{% block stylesheets %}
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

.bg-gradient-success {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
}

.bg-gradient-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%) !important;
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
.form-floating > .form-control:not(:placeholder-shown) ~ label {
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

.select2-container--bootstrap-5 .select2-selection:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
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

#purchase-items-table tbody tr {
    transition: all 0.2s ease;
}

#purchase-items-table tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
}

.quantity-input:focus, .price-input:focus, .lot-number-input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}

#grand-total {
    font-weight: 700;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

.sticky-top {
    position: sticky;
    top: 0;
    z-index: 10;
}

.modal-backdrop {
    backdrop-filter: blur(5px);
}

.btn-close-white {
    filter: brightness(0) invert(1);
}

.input-group-lg .form-control {
    border-radius: 10px 0 0 10px;
}

.input-group-lg .btn {
    border-radius: 0 10px 10px 0;
}

/* Animation pour l'ajout au panier */
@keyframes highlight {
    0% { background-color: rgba(102, 126, 234, 0.3); }
    100% { background-color: transparent; }
}

.highlight {
    animation: highlight 1s ease;
}
</style>
{% endblock %}", "admin/purchase/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\_form.html.twig");
    }
}
