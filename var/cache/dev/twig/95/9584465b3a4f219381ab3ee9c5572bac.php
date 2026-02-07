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

/* admin/purchase/cart.html.twig */
class __TwigTemplate_cc4f7d81078b15a6d23a0f0fcc5efca0 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/cart.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Panier d'achat - Réceptions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-shopping-cart me-2\"></i>
                        Panier d'achat
                    </h4>
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour aux achats
                        </a>
                    </div>
                </div>

                <div class=\"card-body\">
                    <!-- Recherche de produits -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-8\">
                            <div class=\"input-group\">
                                <input type=\"text\" 
                                       id=\"searchProduct\" 
                                       class=\"form-control\" 
                                       placeholder=\"Rechercher un produit par nom, code-barres ou scanner...\"
                                       autocomplete=\"off\">
                                <button class=\"btn btn-primary\" type=\"button\" id=\"searchButton\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                            <div id=\"searchResults\" class=\"list-group mt-2\" style=\"display: none;\"></div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"input-group\">
                                <select id=\"supplierSelect\" class=\"form-select\">
                                    <option value=\"\">Sélectionner un fournisseur...</option>
                                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 43
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\" 
                                                ";
            // line 44
            if (((isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 44, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44) == CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 44)))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 45), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                                </select>
                                <button class=\"btn btn-outline-primary\" type=\"button\" id=\"addSupplierBtn\">
                                    <i class=\"fas fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Panier -->
                    <div class=\"table-responsive\">
                        ";
        // line 58
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 58, $this->source); })())) > 0)) {
            // line 59
            yield "                            <table class=\"table table-hover\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th width=\"50\">#</th>
                                        <th>Produit</th>
                                        <th class=\"text-center\">N° Lot (provisoire)</th>
                                        <th class=\"text-center\">Prix d'achat</th>
                                        <th class=\"text-center\">Quantité</th>
                                        <th class=\"text-center\">Fabrication</th>
                                        <th class=\"text-center\">Expiration</th>
                                        <th class=\"text-center\">Total</th>
                                        <th class=\"text-center\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id=\"cartItems\">
                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 74, $this->source); })()));
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
                // line 75
                yield "                                        <tr data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 75), "html", null, true);
                yield "\">
                                            <td>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 76), "html", null, true);
                yield "</td>
                                            <td>
                                                <strong>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 78), "html", null, true);
                yield "</strong><br>
                                                <small class=\"text-muted\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", false, false, false, 79), "html", null, true);
                yield "</small>
                                            </td>
                                            <td class=\"text-center\">
                                                <input type=\"text\" 
                                                       class=\"form-control form-control-sm batch-number\" 
                                                       value=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batch_number", [], "any", false, false, false, 84), "html", null, true);
                yield "\"
                                                       style=\"width: 120px;\"
                                                       placeholder=\"LOT-PROVISOIRE\">
                                            </td>
                                            <td class=\"text-center\">
                                                ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 89)), "html", null, true);
                yield "
                                            </td>
                                            <td class=\"text-center\" style=\"width: 100px;\">
                                                <input type=\"number\" 
                                                       class=\"form-control form-control-sm quantity-input\" 
                                                       value=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 94), "html", null, true);
                yield "\"
                                                       min=\"1\">
                                            </td>
                                            <td class=\"text-center\">
                                                ";
                // line 98
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_expiry_date", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 99
                    yield "                                                    <input type=\"date\" 
                                                           class=\"form-control form-control-sm manufacturing-date\" 
                                                           value=\"";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturing_date", [], "any", false, false, false, 101), "html", null, true);
                    yield "\"
                                                           style=\"width: 140px;\"
                                                           title=\"Date de fabrication (sera confirmée à la réception)\">
                                                ";
                } else {
                    // line 105
                    yield "                                                    <span class=\"text-muted\">N/A</span>
                                                ";
                }
                // line 107
                yield "                                            </td>
                                            <td class=\"text-center\">
                                                ";
                // line 109
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_expiry_date", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 110
                    yield "                                                    <input type=\"date\" 
                                                           class=\"form-control form-control-sm expiry-date\" 
                                                           value=\"";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiry_date", [], "any", false, false, false, 112), "html", null, true);
                    yield "\"
                                                           style=\"width: 140px;\"
                                                           title=\"Date d'expiration (sera confirmée à la réception)\">
                                                ";
                } else {
                    // line 116
                    yield "                                                    <span class=\"text-muted\">N/A</span>
                                                ";
                }
                // line 118
                yield "                                            </td>
                                            <td class=\"text-center\">
                                                <strong>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 120) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 120))), "html", null, true);
                yield "</strong>
                                            </td>
                                            <td class=\"text-center\">
                                                <button class=\"btn btn-sm btn-outline-danger remove-item\" 
                                                        data-index=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 124), "html", null, true);
                yield "\">
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
            // line 130
            yield "                                </tbody>
                                <tfoot class=\"table-light\">
                                    <tr>
                                        <td colspan=\"5\" class=\"text-end\">
                                            <strong>Fournisseur :</strong>
                                            <span id=\"currentSupplier\" class=\"ms-2\">
                                                ";
            // line 136
            if ((($tmp = (isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 136, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 137
                yield "                                                    <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, false, 137), "html", null, true);
                yield "</span>
                                                ";
            } else {
                // line 139
                yield "                                                    <span class=\"badge bg-warning text-dark\">Non sélectionné</span>
                                                ";
            }
            // line 141
            yield "                                            </span>
                                        </td>
                                        <td class=\"text-center\">
                                            <strong>Total :</strong>
                                        </td>
                                        <td class=\"text-center\">
                                            <h5 class=\"mb-0 text-success\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa((isset($context["total_amount"]) || array_key_exists("total_amount", $context) ? $context["total_amount"] : (function () { throw new RuntimeError('Variable "total_amount" does not exist.', 147, $this->source); })())), "html", null, true);
            yield "</h5>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        ";
        } else {
            // line 154
            yield "                            <div class=\"text-center py-5\">
                                <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
                                <h4 class=\"text-muted\">Votre panier est vide</h4>
                                <p class=\"text-muted\">Commencez par rechercher et ajouter des produits</p>
                            </div>
                        ";
        }
        // line 160
        yield "                    </div>

                    <!-- Actions du panier -->
                    ";
        // line 163
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 163, $this->source); })())) > 0)) {
            // line 164
            yield "                        <div class=\"d-flex justify-content-between align-items-center mt-4\">
                            <button class=\"btn btn-outline-danger\" id=\"clearCartBtn\">
                                <i class=\"fas fa-trash me-1\"></i> Vider le panier
                            </button>
                            <div class=\"d-flex gap-2 align-items-center\">
                                <span class=\"me-3\">
                                    <i class=\"fas fa-cube me-1\"></i>
                                    <strong id=\"itemCount\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 171, $this->source); })())), "html", null, true);
            yield "</strong> produit(s)
                                </span>
                                
                                <!-- Bouton pour confirmer la commande -->
                                <button type=\"button\" 
                                        class=\"btn btn-lg px-4 ";
            // line 176
            if ((($tmp = (isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 176, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "btn-success";
            } else {
                yield "btn-secondary";
            }
            yield "\" 
                                        id=\"confirmOrderBtn\"
                                        ";
            // line 178
            if ((($tmp =  !(isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 178, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                                    <i class=\"fas fa-paper-plane me-2\"></i>
                                    Confirmer la commande
                                </button>
                            </div>
                        </div>
                        
                        <div class=\"alert alert-info mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <strong>Processus d'achat :</strong>
                            <ul class=\"mb-0 mt-2\">
                                <li>1. Ajoutez les produits au panier</li>
                                <li>2. Sélectionnez un fournisseur</li>
                                <li>3. Confirmez la commande pour envoyer le bon de commande au fournisseur</li>
                                <li>4. Les dates et numéros de lot seront saisis lors de la réception physique</li>
                            </ul>
                        </div>
                    ";
        }
        // line 196
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'ajout de produit -->
<div class=\"modal fade\" id=\"addProductModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter un produit</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"productModalContent\">
                <!-- Contenu chargé dynamiquement -->
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation -->
<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"confirmModalBody\">
                Êtes-vous sûr de vouloir effectuer cette action ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmActionBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de commande -->
<div class=\"modal fade\" id=\"confirmOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle me-2\"></i>
                    Confirmer la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>Important :</strong> 
                    <ul class=\"mb-0 mt-2\">
                        <li>La commande sera envoyée au fournisseur <strong id=\"modalSupplierName\">";
        // line 252
        yield (((($tmp = (isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 252, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart_supplier"]) || array_key_exists("cart_supplier", $context) ? $context["cart_supplier"] : (function () { throw new RuntimeError('Variable "cart_supplier" does not exist.', 252, $this->source); })()), "name", [], "any", false, false, false, 252), "html", null, true)) : (""));
        yield "</strong></li>
                        <li>Un email de confirmation sera envoyé</li>
                        <li>Un bon de commande PDF sera généré</li>
                        <li>Les dates et numéros de lot seront saisis lors de la réception physique</li>
                        <li>Le statut passera à \"Confirmé\" en attendant la livraison</li>
                    </ul>
                </div>
                
                <h6>Récapitulatif de la commande :</h6>
                <div class=\"table-responsive\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-end\">Prix unitaire</th>
                                <th class=\"text-end\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 272, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 273
            yield "                            <tr>
                                <td>";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 274), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 275), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 276)), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 277) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 277))), "html", null, true);
            yield "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Total général :</strong></td>
                                <td class=\"text-end\"><strong>";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa((isset($context["total_amount"]) || array_key_exists("total_amount", $context) ? $context["total_amount"] : (function () { throw new RuntimeError('Variable "total_amount" does not exist.', 284, $this->source); })())), "html", null, true);
        yield "</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
                <div id=\"confirmOrderResult\" class=\"mt-3\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmOrderFinalBtn\">
                    <i class=\"fas fa-paper-plane me-2\"></i> Confirmer et envoyer la commande
                </button>
            </div>
        </div>
    </div>
</div>

<!-- CSRF Token -->
<meta name=\"csrf-token\" content=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("purchase_confirm"), "html", null, true);
        yield "\">

<style>
    .cart-item:hover {
        background-color: #f8f9fa;
    }
    .quantity-input {
        width: 80px;
        margin: 0 auto;
    }
    #searchResults {
        position: absolute;
        z-index: 1050;
        width: calc(100% - 50px);
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #dee2e6;
        border-radius: 0.375rem;
    }
    .list-group-item:hover {
        background-color: #f8f9fa;
        cursor: pointer;
    }
    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentAction = null;
    let currentIndex = null;
    let csrfToken = '";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("purchase_confirm"), "html", null, true);
        yield "';

    // ========== GESTION DU FOURNISSEUR ==========
    const supplierSelect = document.getElementById('supplierSelect');
    const currentSupplierSpan = document.getElementById('currentSupplier');
    const confirmOrderBtn = document.getElementById('confirmOrderBtn'); // Déclaré UNE SEULE FOIS ici
    const modalSupplierName = document.getElementById('modalSupplierName');
    
    function updateSupplierDisplay(supplierName = null) {
        if (!currentSupplierSpan) return;
        
        if (supplierName) {
            currentSupplierSpan.innerHTML = `<span class=\"badge bg-success\">\${supplierName}</span>`;
        } else {
            currentSupplierSpan.innerHTML = '<span class=\"badge bg-warning text-dark\">Non sélectionné</span>';
        }
    }
    
    function updateConfirmButtonState() {
        if (!confirmOrderBtn || !supplierSelect) return;
        
        const supplierId = supplierSelect.value;
        const isSupplierSelected = supplierId && supplierId !== '';
        
        confirmOrderBtn.disabled = !isSupplierSelected;
        
        if (isSupplierSelected) {
            confirmOrderBtn.classList.remove('btn-secondary');
            confirmOrderBtn.classList.add('btn-success');
            confirmOrderBtn.title = 'Cliquez pour confirmer la commande';
        } else {
            confirmOrderBtn.classList.remove('btn-success');
            confirmOrderBtn.classList.add('btn-secondary');
            confirmOrderBtn.title = 'Sélectionnez d\\'abord un fournisseur';
        }
    }
    
    // Initialiser les états
    updateConfirmButtonState();
    
    if (supplierSelect) {
        supplierSelect.addEventListener('change', function() {
            const supplierId = this.value;
            
            if (!supplierId) {
                updateSupplierDisplay(null);
                updateConfirmButtonState();
                return;
            }
            
            // Afficher un indicateur de chargement
            const originalContent = currentSupplierSpan ? currentSupplierSpan.innerHTML : '';
            if (currentSupplierSpan) {
                currentSupplierSpan.innerHTML = '<span class=\"badge bg-info\"><i class=\"fas fa-spinner fa-spin me-1\"></i> Mise à jour...</span>';
            }
            
            // Désactiver temporairement le bouton
            if (confirmOrderBtn) {
                confirmOrderBtn.disabled = true;
            }
            
            // Envoyer la requête pour mettre à jour le fournisseur
            fetch(`/admin/purchase/cart/set-supplier/\${supplierId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new URLSearchParams({
                    '_token': csrfToken
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Erreur réseau: \${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Mettre à jour l'affichage
                    const selectedOption = supplierSelect.options[supplierSelect.selectedIndex];
                    updateSupplierDisplay(selectedOption.text);
                    
                    // Mettre à jour le nom dans le modal
                    if (modalSupplierName) {
                        modalSupplierName.textContent = selectedOption.text;
                    }
                    
                    showAlert('success', 'Fournisseur sélectionné: ' + selectedOption.text);
                } else {
                    if (currentSupplierSpan) {
                        currentSupplierSpan.innerHTML = originalContent;
                    }
                    showAlert('danger', 'Erreur lors de la sélection du fournisseur');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                if (currentSupplierSpan) {
                    currentSupplierSpan.innerHTML = originalContent;
                }
                showAlert('danger', 'Erreur: ' + error.message);
                supplierSelect.value = '';
            })
            .finally(() => {
                updateConfirmButtonState();
            });
        });
    }

    // ========== GESTION DU BOUTON CONFIRMER COMMANDE ==========
    if (confirmOrderBtn) {
        confirmOrderBtn.addEventListener('click', function() {
            if (!supplierSelect || !supplierSelect.value) {
                showAlert('danger', 'Veuillez sélectionner un fournisseur avant de confirmer la commande.');
                supplierSelect.focus();
                return;
            }
            
            // Mettre à jour le nom du fournisseur dans le modal
            const selectedOption = supplierSelect.options[supplierSelect.selectedIndex];
            if (modalSupplierName) {
                modalSupplierName.textContent = selectedOption.text;
            }
            
            // Afficher le modal
            const modal = document.getElementById('confirmOrderModal');
            if (modal) {
                const bootstrapModal = new bootstrap.Modal(modal);
                bootstrapModal.show();
            }
        });
    }

    // Confirmation finale de commande
    const confirmOrderFinalBtn = document.getElementById('confirmOrderFinalBtn');
    if (confirmOrderFinalBtn) {
        confirmOrderFinalBtn.addEventListener('click', function() {
            const resultDiv = document.getElementById('confirmOrderResult');
            const btn = this;
            
            resultDiv.innerHTML = `
                <div class=\"text-center py-3\">
                    <i class=\"fas fa-spinner fa-spin fa-2x text-primary mb-2\"></i>
                    <p class=\"mb-0\">Confirmation en cours...</p>
                </div>
            `;
            
            btn.disabled = true;
            btn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Confirmation...';
            
            // Utiliser fetch avec gestion d'erreurs améliorée
            fetch('/admin/purchase/confirm-order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new URLSearchParams({
                    '_token': csrfToken
                })
            })
            .then(response => {
                if (!response.ok) {
                    // Si c'est une erreur 500, on essaie de voir si la commande a quand même été créée
                    console.error('Erreur HTTP:', response.status);
                    
                    // On vérifie si on peut quand même récupérer une réponse JSON
                    return response.text().then(text => {
                        console.log('Réponse serveur:', text);
                        try {
                            // Essayer de parser le JSON même en cas d'erreur HTTP
                            const data = JSON.parse(text);
                            return data;
                        } catch (e) {
                            // Si ce n'est pas du JSON, on lance une erreur
                            throw new Error(`Erreur HTTP \${response.status}: \${text.substring(0, 100)}`);
                        }
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log('Données reçues:', data);
                
                if (data.success) {
                    resultDiv.innerHTML = `
                        <div class=\"alert alert-success\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-check-circle fa-2x me-3\"></i>
                                <div>
                                    <h5 class=\"mb-1\">Commande confirmée avec succès !</h5>
                                    <p class=\"mb-1\">\${data.message}</p>
                                    <div class=\"mt-2\">
                                        <strong>Numéro de commande :</strong> \${data.purchase_number}<br>
                                        <strong>Montant total :</strong> \${formatFcfa(data.total_amount)}
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    // Stocker l'ID de la commande pour la redirection
                    const purchaseId = data.purchase_id;
                    
                    // Redirection après succès
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('confirmOrderModal'));
                        if (modal) {
                            modal.hide();
                        }
                        
                        // Vérifier si le panier est bien vidé avant la redirection
                        fetch('/admin/purchase/cart/check-empty', {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(cartData => {
                            if (cartData.is_empty) {
                                // Panier vidé, on redirige
                                window.location.href = '/admin/purchase/' + purchaseId;
                            } else {
                                // Panier non vidé, on force le vidage
                                fetch('/admin/purchase/cart/clear', {
                                    method: 'POST'
                                })
                                .then(() => {
                                    window.location.href = '/admin/purchase/' + purchaseId;
                                });
                            }
                        })
                        .catch(() => {
                            // En cas d'erreur, rediriger quand même
                            window.location.href = '/admin/purchase/' + purchaseId;
                        });
                        
                    }, 2000);
                    
                } else {
                    resultDiv.innerHTML = `
                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            \${data.message || 'Erreur lors de la confirmation'}
                        </div>
                    `;
                    btn.disabled = false;
                    btn.innerHTML = '<i class=\"fas fa-paper-plane me-2\"></i> Confirmer et envoyer la commande';
                }
            })
            .catch(error => {
                console.error('Erreur complète:', error);
                resultDiv.innerHTML = `
                    <div class=\"alert alert-danger\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        <strong>Erreur :</strong> Une erreur s'est produite. 
                        <p class=\"mb-0 mt-2 small\">\${error.message.substring(0, 200)}</p>
                        <p class=\"mb-0 small\">Veuillez vérifier la console pour plus de détails.</p>
                    </div>
                `;
                btn.disabled = false;
                btn.innerHTML = '<i class=\"fas fa-paper-plane me-2\"></i> Confirmer et envoyer la commande';
            });
        });
    }
    
    // ========== RECHERCHE DE PRODUITS ==========
    const searchInput = document.getElementById('searchProduct');
    const searchResults = document.getElementById('searchResults');
    let searchTimeout = null;

    if (searchInput && searchResults) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(searchProducts, 300);
        });

        const searchButton = document.getElementById('searchButton');
        if (searchButton) {
            searchButton.addEventListener('click', searchProducts);
        }
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                searchProducts();
            }
        });
    }

    function searchProducts() {
        if (!searchInput || !searchResults) return;
        
        const query = searchInput.value.trim();
        if (query.length < 1) {
            searchResults.style.display = 'none';
            return;
        }

        fetch(`/admin/purchase/search-products?q=\${encodeURIComponent(query)}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: \${response.status}`);
            }
            return response.json();
        })
        .then(products => {
            if (!products || products.length === 0) {
                searchResults.innerHTML = `
                    <div class=\"list-group-item text-muted\">
                        <i class=\"fas fa-search me-2\"></i>
                        Aucun produit trouvé pour \"\${escapeHtml(query)}\"
                    </div>
                `;
            } else {
                searchResults.innerHTML = products.map(product => `
                    <div class=\"list-group-item list-group-item-action product-item\" 
                         data-id=\"\${product.id}\"
                         data-name=\"\${escapeHtml(product.name)}\"
                         data-barcode=\"\${escapeHtml(product.barcode)}\"
                         data-purchase-price=\"\${product.purchase_price}\"
                         data-has-expiry-date=\"\${product.has_expiry_date ? '1' : '0'}\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <strong>\${escapeHtml(product.name)}</strong>
                                <div class=\"text-muted small\">
                                    \${escapeHtml(product.barcode)} • \${escapeHtml(product.category)}
                                </div>
                                <div class=\"small\">
                                    <span class=\"badge \${getStockBadgeClass(product.stock_status)}\">
                                        \${getStockStatusText(product.stock_status)}
                                    </span>
                                    Stock: \${product.current_stock}
                                </div>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"fw-bold\">\${formatFcfa(product.purchase_price)}</div>
                                <div class=\"text-muted small\">\${formatFcfa(product.sale_price)} vente</div>
                            </div>
                        </div>
                    </div>
                `).join('');
                
                document.querySelectorAll('.product-item').forEach(item => {
                    item.addEventListener('click', function() {
                        const productId = this.dataset.id;
                        const productName = this.dataset.name;
                        const hasExpiryDate = this.dataset.hasExpiryDate === '1';
                        
                        openAddProductModal(productId, productName, hasExpiryDate);
                        
                        searchResults.style.display = 'none';
                        searchInput.value = '';
                    });
                });
            }
            searchResults.style.display = 'block';
        })
        .catch(error => {
            console.error('Erreur recherche:', error);
            searchResults.innerHTML = `
                <div class=\"list-group-item text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Erreur lors de la recherche: \${error.message}
                </div>
            `;
            searchResults.style.display = 'block';
        });
    }

    function openAddProductModal(productId, productName, hasExpiryDate) {
        const productModalContent = document.getElementById('productModalContent');
        if (!productModalContent) return;
        
        let formHtml = `
            <form id=\"addProductForm\">
                <input type=\"hidden\" name=\"product_id\" value=\"\${productId}\">
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">Produit</label>
                    <input type=\"text\" class=\"form-control\" value=\"\${productName}\" disabled>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">Numéro de lot (provisoire) *</label>
                    <input type=\"text\" 
                           class=\"form-control\" 
                           name=\"batch_number\" 
                           value=\"LOT-PROV-\${new Date().toISOString().slice(0,10).replace(/-/g, '')}-\${Math.random().toString(36).substr(2, 4).toUpperCase()}\"
                           required>
                    <div class=\"form-text\">Ce numéro sera confirmé à la réception physique</div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">Quantité *</label>
                    <input type=\"number\" 
                           class=\"form-control\" 
                           name=\"quantity\" 
                           min=\"1\" 
                           value=\"1\" 
                           required>
                </div>
        `;
        
        if (hasExpiryDate) {
            const today = new Date().toISOString().split('T')[0];
            const oneYearFromNow = new Date();
            oneYearFromNow.setFullYear(oneYearFromNow.getFullYear() + 1);
            const expiryDate = oneYearFromNow.toISOString().split('T')[0];
            
            formHtml += `
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Date de fabrication (estimée)</label>
                        <input type=\"date\" 
                               class=\"form-control\" 
                               name=\"manufacturing_date\" 
                               value=\"\${today}\">
                        <div class=\"form-text\">À confirmer à réception</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Date d'expiration (estimée)</label>
                        <input type=\"date\" 
                               class=\"form-control\" 
                               name=\"expiry_date\" 
                               value=\"\${expiryDate}\">
                        <div class=\"form-text\">À confirmer à réception</div>
                    </div>
                </div>
            `;
        }
        
        formHtml += `
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                </div>
            </form>
        `;
        
        productModalContent.innerHTML = formHtml;
        
        const modal = new bootstrap.Modal(document.getElementById('addProductModal'));
        modal.show();
        
        const addProductForm = document.getElementById('addProductForm');
        if (addProductForm) {
            addProductForm.addEventListener('submit', function(e) {
                e.preventDefault();
                addProductToCart(this);
            });
        }
    }

    function addProductToCart(form) {
        const formData = new FormData(form);
        
        fetch('/admin/purchase/cart/add-product', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
                if (modal) {
                    modal.hide();
                }
                location.reload();
            } else {
                showAlert('danger', data.message);
            }
        })
        .catch(error => {
            showAlert('danger', 'Erreur: ' + error.message);
        });
    }

    // ========== GESTION DU PANIER ==========
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', function() {
            const row = this.closest('tr');
            if (!row) return;
            
            const index = row.dataset.index;
            const quantity = this.value;
            
            if (quantity <= 0) {
                showAlert('warning', 'La quantité doit être supérieure à 0');
                this.value = 1;
                return;
            }
            
            updateCartItem(index, { quantity: quantity });
        });
    });

    document.querySelectorAll('.batch-number').forEach(input => {
        input.addEventListener('change', function() {
            const row = this.closest('tr');
            if (!row) return;
            
            const index = row.dataset.index;
            updateCartItem(index, { batch_number: this.value });
        });
    });

    document.querySelectorAll('.manufacturing-date, .expiry-date').forEach(input => {
        input.addEventListener('change', function() {
            const row = this.closest('tr');
            if (!row) return;
            
            const index = row.dataset.index;
            const data = {
                manufacturing_date: row.querySelector('.manufacturing-date')?.value || '',
                expiry_date: row.querySelector('.expiry-date')?.value || ''
            };
            
            updateCartItem(index, data);
        });
    });

    function updateCartItem(index, data) {
        const formData = new FormData();
        for (const key in data) {
            if (data[key] !== null && data[key] !== undefined) {
                formData.append(key, data[key]);
            }
        }
        
        fetch(`/admin/purchase/cart/update/\${index}`, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                showAlert('danger', data.message);
            }
        });
    }

    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function() {
            currentIndex = this.dataset.index;
            showConfirmModal(
                'Supprimer le produit',
                'Êtes-vous sûr de vouloir retirer ce produit du panier ?',
                removeCartItem
            );
        });
    });

    function removeCartItem() {
        fetch(`/admin/purchase/cart/remove/\${currentIndex}`, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }

    const clearCartBtn = document.getElementById('clearCartBtn');
    if (clearCartBtn) {
        clearCartBtn.addEventListener('click', function() {
            showConfirmModal(
                'Vider le panier',
                'Êtes-vous sûr de vouloir vider complètement le panier ? Tous les produits seront supprimés.',
                clearCart
            );
        });
    }

    function clearCart() {
        fetch('/admin/purchase/cart/clear', {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }

    function showConfirmModal(title, message, callback) {
        const confirmModalBody = document.getElementById('confirmModalBody');
        const modalTitle = document.querySelector('#confirmModal .modal-title');
        
        if (confirmModalBody) confirmModalBody.textContent = message;
        if (modalTitle) modalTitle.textContent = title;
        
        const modalElement = document.getElementById('confirmModal');
        if (!modalElement) return;
        
        const modal = new bootstrap.Modal(modalElement);
        modal.show();
        
        currentAction = callback;
        
        const confirmActionBtn = document.getElementById('confirmActionBtn');
        if (confirmActionBtn) {
            confirmActionBtn.onclick = function() {
                if (currentAction) {
                    currentAction();
                }
                modal.hide();
            };
        }
    }

    function showAlert(type, message) {
        // Supprimer les alertes existantes
        document.querySelectorAll('.alert-fixed').forEach(alert => alert.remove());
        
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-\${type} alert-dismissible fade show alert-fixed position-fixed`;
        alertDiv.style.top = '20px';
        alertDiv.style.right = '20px';
        alertDiv.style.zIndex = '9999';
        alertDiv.style.minWidth = '300px';
        alertDiv.innerHTML = `
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        `;
        
        document.body.appendChild(alertDiv);
        
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.remove();
            }
        }, 5000);
    }

    // Fonction pour formater en FCFA
    function formatFcfa(amount) {
        // Convertir en nombre
        const num = parseFloat(amount);
        if (isNaN(num)) return '0 FCFA';
        
        // Formater avec espace comme séparateur de milliers
        const formatted = new Intl.NumberFormat('fr-FR', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 2
        }).format(num);
        
        return formatted + ' FCFA';
    }

    function getStockStatusText(status) {
        const statuses = {
            'out_of_stock': 'Rupture',
            'low_stock': 'Stock faible',
            'in_stock': 'En stock'
        };
        return statuses[status] || status;
    }

    function getStockBadgeClass(status) {
        const classes = {
            'out_of_stock': 'bg-danger',
            'low_stock': 'bg-warning text-dark',
            'in_stock': 'bg-success'
        };
        return classes[status] || 'bg-secondary';
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // ========== GESTION DU SCAN CODE-BARRES ==========
    let barcodeBuffer = '';
    let lastKeyTime = Date.now();
    
    if (searchInput) {
        searchInput.addEventListener('keydown', function(e) {
            const currentTime = Date.now();
            
            if (currentTime - lastKeyTime > 100) {
                barcodeBuffer = '';
            }
            
            lastKeyTime = currentTime;
            
            if (e.key !== 'Enter') {
                barcodeBuffer += e.key;
            }
            
            if (e.key === 'Enter') {
                e.preventDefault();
                
                if (barcodeBuffer.length >= 8) {
                    searchInput.value = barcodeBuffer;
                    searchProducts();
                }
                
                barcodeBuffer = '';
            }
        });
    }
});
</script>
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
        return "admin/purchase/cart.html.twig";
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
        return array (  602 => 336,  566 => 303,  544 => 284,  538 => 280,  529 => 277,  525 => 276,  521 => 275,  517 => 274,  514 => 273,  510 => 272,  487 => 252,  429 => 196,  406 => 178,  397 => 176,  389 => 171,  380 => 164,  378 => 163,  373 => 160,  365 => 154,  355 => 147,  347 => 141,  343 => 139,  337 => 137,  335 => 136,  327 => 130,  307 => 124,  300 => 120,  296 => 118,  292 => 116,  285 => 112,  281 => 110,  279 => 109,  275 => 107,  271 => 105,  264 => 101,  260 => 99,  258 => 98,  251 => 94,  243 => 89,  235 => 84,  227 => 79,  223 => 78,  218 => 76,  213 => 75,  196 => 74,  179 => 59,  177 => 58,  165 => 48,  156 => 45,  150 => 44,  145 => 43,  141 => 42,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier d'achat - Réceptions{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-shopping-cart me-2\"></i>
                        Panier d'achat
                    </h4>
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('admin_purchase_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour aux achats
                        </a>
                    </div>
                </div>

                <div class=\"card-body\">
                    <!-- Recherche de produits -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-8\">
                            <div class=\"input-group\">
                                <input type=\"text\" 
                                       id=\"searchProduct\" 
                                       class=\"form-control\" 
                                       placeholder=\"Rechercher un produit par nom, code-barres ou scanner...\"
                                       autocomplete=\"off\">
                                <button class=\"btn btn-primary\" type=\"button\" id=\"searchButton\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                            <div id=\"searchResults\" class=\"list-group mt-2\" style=\"display: none;\"></div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"input-group\">
                                <select id=\"supplierSelect\" class=\"form-select\">
                                    <option value=\"\">Sélectionner un fournisseur...</option>
                                    {% for supplier in suppliers %}
                                        <option value=\"{{ supplier.id }}\" 
                                                {% if cart_supplier and cart_supplier.id == supplier.id %}selected{% endif %}>
                                            {{ supplier.name }}
                                        </option>
                                    {% endfor %}
                                </select>
                                <button class=\"btn btn-outline-primary\" type=\"button\" id=\"addSupplierBtn\">
                                    <i class=\"fas fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Panier -->
                    <div class=\"table-responsive\">
                        {% if cart|length > 0 %}
                            <table class=\"table table-hover\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th width=\"50\">#</th>
                                        <th>Produit</th>
                                        <th class=\"text-center\">N° Lot (provisoire)</th>
                                        <th class=\"text-center\">Prix d'achat</th>
                                        <th class=\"text-center\">Quantité</th>
                                        <th class=\"text-center\">Fabrication</th>
                                        <th class=\"text-center\">Expiration</th>
                                        <th class=\"text-center\">Total</th>
                                        <th class=\"text-center\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id=\"cartItems\">
                                    {% for item in cart %}
                                        <tr data-index=\"{{ loop.index0 }}\">
                                            <td>{{ loop.index }}</td>
                                            <td>
                                                <strong>{{ item.product_name }}</strong><br>
                                                <small class=\"text-muted\">{{ item.barcode }}</small>
                                            </td>
                                            <td class=\"text-center\">
                                                <input type=\"text\" 
                                                       class=\"form-control form-control-sm batch-number\" 
                                                       value=\"{{ item.batch_number }}\"
                                                       style=\"width: 120px;\"
                                                       placeholder=\"LOT-PROVISOIRE\">
                                            </td>
                                            <td class=\"text-center\">
                                                {{ item.purchase_price|format_fcfa }}
                                            </td>
                                            <td class=\"text-center\" style=\"width: 100px;\">
                                                <input type=\"number\" 
                                                       class=\"form-control form-control-sm quantity-input\" 
                                                       value=\"{{ item.quantity }}\"
                                                       min=\"1\">
                                            </td>
                                            <td class=\"text-center\">
                                                {% if item.has_expiry_date %}
                                                    <input type=\"date\" 
                                                           class=\"form-control form-control-sm manufacturing-date\" 
                                                           value=\"{{ item.manufacturing_date }}\"
                                                           style=\"width: 140px;\"
                                                           title=\"Date de fabrication (sera confirmée à la réception)\">
                                                {% else %}
                                                    <span class=\"text-muted\">N/A</span>
                                                {% endif %}
                                            </td>
                                            <td class=\"text-center\">
                                                {% if item.has_expiry_date %}
                                                    <input type=\"date\" 
                                                           class=\"form-control form-control-sm expiry-date\" 
                                                           value=\"{{ item.expiry_date }}\"
                                                           style=\"width: 140px;\"
                                                           title=\"Date d'expiration (sera confirmée à la réception)\">
                                                {% else %}
                                                    <span class=\"text-muted\">N/A</span>
                                                {% endif %}
                                            </td>
                                            <td class=\"text-center\">
                                                <strong>{{ (item.purchase_price * item.quantity)|format_fcfa }}</strong>
                                            </td>
                                            <td class=\"text-center\">
                                                <button class=\"btn btn-sm btn-outline-danger remove-item\" 
                                                        data-index=\"{{ loop.index0 }}\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot class=\"table-light\">
                                    <tr>
                                        <td colspan=\"5\" class=\"text-end\">
                                            <strong>Fournisseur :</strong>
                                            <span id=\"currentSupplier\" class=\"ms-2\">
                                                {% if cart_supplier %}
                                                    <span class=\"badge bg-success\">{{ cart_supplier.name }}</span>
                                                {% else %}
                                                    <span class=\"badge bg-warning text-dark\">Non sélectionné</span>
                                                {% endif %}
                                            </span>
                                        </td>
                                        <td class=\"text-center\">
                                            <strong>Total :</strong>
                                        </td>
                                        <td class=\"text-center\">
                                            <h5 class=\"mb-0 text-success\">{{ total_amount|format_fcfa }}</h5>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        {% else %}
                            <div class=\"text-center py-5\">
                                <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
                                <h4 class=\"text-muted\">Votre panier est vide</h4>
                                <p class=\"text-muted\">Commencez par rechercher et ajouter des produits</p>
                            </div>
                        {% endif %}
                    </div>

                    <!-- Actions du panier -->
                    {% if cart|length > 0 %}
                        <div class=\"d-flex justify-content-between align-items-center mt-4\">
                            <button class=\"btn btn-outline-danger\" id=\"clearCartBtn\">
                                <i class=\"fas fa-trash me-1\"></i> Vider le panier
                            </button>
                            <div class=\"d-flex gap-2 align-items-center\">
                                <span class=\"me-3\">
                                    <i class=\"fas fa-cube me-1\"></i>
                                    <strong id=\"itemCount\">{{ cart|length }}</strong> produit(s)
                                </span>
                                
                                <!-- Bouton pour confirmer la commande -->
                                <button type=\"button\" 
                                        class=\"btn btn-lg px-4 {% if cart_supplier %}btn-success{% else %}btn-secondary{% endif %}\" 
                                        id=\"confirmOrderBtn\"
                                        {% if not cart_supplier %}disabled{% endif %}>
                                    <i class=\"fas fa-paper-plane me-2\"></i>
                                    Confirmer la commande
                                </button>
                            </div>
                        </div>
                        
                        <div class=\"alert alert-info mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <strong>Processus d'achat :</strong>
                            <ul class=\"mb-0 mt-2\">
                                <li>1. Ajoutez les produits au panier</li>
                                <li>2. Sélectionnez un fournisseur</li>
                                <li>3. Confirmez la commande pour envoyer le bon de commande au fournisseur</li>
                                <li>4. Les dates et numéros de lot seront saisis lors de la réception physique</li>
                            </ul>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'ajout de produit -->
<div class=\"modal fade\" id=\"addProductModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter un produit</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"productModalContent\">
                <!-- Contenu chargé dynamiquement -->
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation -->
<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"confirmModalBody\">
                Êtes-vous sûr de vouloir effectuer cette action ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmActionBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de commande -->
<div class=\"modal fade\" id=\"confirmOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle me-2\"></i>
                    Confirmer la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>Important :</strong> 
                    <ul class=\"mb-0 mt-2\">
                        <li>La commande sera envoyée au fournisseur <strong id=\"modalSupplierName\">{{ cart_supplier ? cart_supplier.name : '' }}</strong></li>
                        <li>Un email de confirmation sera envoyé</li>
                        <li>Un bon de commande PDF sera généré</li>
                        <li>Les dates et numéros de lot seront saisis lors de la réception physique</li>
                        <li>Le statut passera à \"Confirmé\" en attendant la livraison</li>
                    </ul>
                </div>
                
                <h6>Récapitulatif de la commande :</h6>
                <div class=\"table-responsive\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-end\">Prix unitaire</th>
                                <th class=\"text-end\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in cart %}
                            <tr>
                                <td>{{ item.product_name }}</td>
                                <td class=\"text-center\">{{ item.quantity }}</td>
                                <td class=\"text-end\">{{ item.purchase_price|format_fcfa }}</td>
                                <td class=\"text-end\">{{ (item.purchase_price * item.quantity)|format_fcfa }}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Total général :</strong></td>
                                <td class=\"text-end\"><strong>{{ total_amount|format_fcfa }}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
                <div id=\"confirmOrderResult\" class=\"mt-3\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmOrderFinalBtn\">
                    <i class=\"fas fa-paper-plane me-2\"></i> Confirmer et envoyer la commande
                </button>
            </div>
        </div>
    </div>
</div>

<!-- CSRF Token -->
<meta name=\"csrf-token\" content=\"{{ csrf_token('purchase_confirm') }}\">

<style>
    .cart-item:hover {
        background-color: #f8f9fa;
    }
    .quantity-input {
        width: 80px;
        margin: 0 auto;
    }
    #searchResults {
        position: absolute;
        z-index: 1050;
        width: calc(100% - 50px);
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #dee2e6;
        border-radius: 0.375rem;
    }
    .list-group-item:hover {
        background-color: #f8f9fa;
        cursor: pointer;
    }
    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentAction = null;
    let currentIndex = null;
    let csrfToken = '{{ csrf_token('purchase_confirm') }}';

    // ========== GESTION DU FOURNISSEUR ==========
    const supplierSelect = document.getElementById('supplierSelect');
    const currentSupplierSpan = document.getElementById('currentSupplier');
    const confirmOrderBtn = document.getElementById('confirmOrderBtn'); // Déclaré UNE SEULE FOIS ici
    const modalSupplierName = document.getElementById('modalSupplierName');
    
    function updateSupplierDisplay(supplierName = null) {
        if (!currentSupplierSpan) return;
        
        if (supplierName) {
            currentSupplierSpan.innerHTML = `<span class=\"badge bg-success\">\${supplierName}</span>`;
        } else {
            currentSupplierSpan.innerHTML = '<span class=\"badge bg-warning text-dark\">Non sélectionné</span>';
        }
    }
    
    function updateConfirmButtonState() {
        if (!confirmOrderBtn || !supplierSelect) return;
        
        const supplierId = supplierSelect.value;
        const isSupplierSelected = supplierId && supplierId !== '';
        
        confirmOrderBtn.disabled = !isSupplierSelected;
        
        if (isSupplierSelected) {
            confirmOrderBtn.classList.remove('btn-secondary');
            confirmOrderBtn.classList.add('btn-success');
            confirmOrderBtn.title = 'Cliquez pour confirmer la commande';
        } else {
            confirmOrderBtn.classList.remove('btn-success');
            confirmOrderBtn.classList.add('btn-secondary');
            confirmOrderBtn.title = 'Sélectionnez d\\'abord un fournisseur';
        }
    }
    
    // Initialiser les états
    updateConfirmButtonState();
    
    if (supplierSelect) {
        supplierSelect.addEventListener('change', function() {
            const supplierId = this.value;
            
            if (!supplierId) {
                updateSupplierDisplay(null);
                updateConfirmButtonState();
                return;
            }
            
            // Afficher un indicateur de chargement
            const originalContent = currentSupplierSpan ? currentSupplierSpan.innerHTML : '';
            if (currentSupplierSpan) {
                currentSupplierSpan.innerHTML = '<span class=\"badge bg-info\"><i class=\"fas fa-spinner fa-spin me-1\"></i> Mise à jour...</span>';
            }
            
            // Désactiver temporairement le bouton
            if (confirmOrderBtn) {
                confirmOrderBtn.disabled = true;
            }
            
            // Envoyer la requête pour mettre à jour le fournisseur
            fetch(`/admin/purchase/cart/set-supplier/\${supplierId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new URLSearchParams({
                    '_token': csrfToken
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Erreur réseau: \${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Mettre à jour l'affichage
                    const selectedOption = supplierSelect.options[supplierSelect.selectedIndex];
                    updateSupplierDisplay(selectedOption.text);
                    
                    // Mettre à jour le nom dans le modal
                    if (modalSupplierName) {
                        modalSupplierName.textContent = selectedOption.text;
                    }
                    
                    showAlert('success', 'Fournisseur sélectionné: ' + selectedOption.text);
                } else {
                    if (currentSupplierSpan) {
                        currentSupplierSpan.innerHTML = originalContent;
                    }
                    showAlert('danger', 'Erreur lors de la sélection du fournisseur');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                if (currentSupplierSpan) {
                    currentSupplierSpan.innerHTML = originalContent;
                }
                showAlert('danger', 'Erreur: ' + error.message);
                supplierSelect.value = '';
            })
            .finally(() => {
                updateConfirmButtonState();
            });
        });
    }

    // ========== GESTION DU BOUTON CONFIRMER COMMANDE ==========
    if (confirmOrderBtn) {
        confirmOrderBtn.addEventListener('click', function() {
            if (!supplierSelect || !supplierSelect.value) {
                showAlert('danger', 'Veuillez sélectionner un fournisseur avant de confirmer la commande.');
                supplierSelect.focus();
                return;
            }
            
            // Mettre à jour le nom du fournisseur dans le modal
            const selectedOption = supplierSelect.options[supplierSelect.selectedIndex];
            if (modalSupplierName) {
                modalSupplierName.textContent = selectedOption.text;
            }
            
            // Afficher le modal
            const modal = document.getElementById('confirmOrderModal');
            if (modal) {
                const bootstrapModal = new bootstrap.Modal(modal);
                bootstrapModal.show();
            }
        });
    }

    // Confirmation finale de commande
    const confirmOrderFinalBtn = document.getElementById('confirmOrderFinalBtn');
    if (confirmOrderFinalBtn) {
        confirmOrderFinalBtn.addEventListener('click', function() {
            const resultDiv = document.getElementById('confirmOrderResult');
            const btn = this;
            
            resultDiv.innerHTML = `
                <div class=\"text-center py-3\">
                    <i class=\"fas fa-spinner fa-spin fa-2x text-primary mb-2\"></i>
                    <p class=\"mb-0\">Confirmation en cours...</p>
                </div>
            `;
            
            btn.disabled = true;
            btn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Confirmation...';
            
            // Utiliser fetch avec gestion d'erreurs améliorée
            fetch('/admin/purchase/confirm-order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new URLSearchParams({
                    '_token': csrfToken
                })
            })
            .then(response => {
                if (!response.ok) {
                    // Si c'est une erreur 500, on essaie de voir si la commande a quand même été créée
                    console.error('Erreur HTTP:', response.status);
                    
                    // On vérifie si on peut quand même récupérer une réponse JSON
                    return response.text().then(text => {
                        console.log('Réponse serveur:', text);
                        try {
                            // Essayer de parser le JSON même en cas d'erreur HTTP
                            const data = JSON.parse(text);
                            return data;
                        } catch (e) {
                            // Si ce n'est pas du JSON, on lance une erreur
                            throw new Error(`Erreur HTTP \${response.status}: \${text.substring(0, 100)}`);
                        }
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log('Données reçues:', data);
                
                if (data.success) {
                    resultDiv.innerHTML = `
                        <div class=\"alert alert-success\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-check-circle fa-2x me-3\"></i>
                                <div>
                                    <h5 class=\"mb-1\">Commande confirmée avec succès !</h5>
                                    <p class=\"mb-1\">\${data.message}</p>
                                    <div class=\"mt-2\">
                                        <strong>Numéro de commande :</strong> \${data.purchase_number}<br>
                                        <strong>Montant total :</strong> \${formatFcfa(data.total_amount)}
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    // Stocker l'ID de la commande pour la redirection
                    const purchaseId = data.purchase_id;
                    
                    // Redirection après succès
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('confirmOrderModal'));
                        if (modal) {
                            modal.hide();
                        }
                        
                        // Vérifier si le panier est bien vidé avant la redirection
                        fetch('/admin/purchase/cart/check-empty', {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(cartData => {
                            if (cartData.is_empty) {
                                // Panier vidé, on redirige
                                window.location.href = '/admin/purchase/' + purchaseId;
                            } else {
                                // Panier non vidé, on force le vidage
                                fetch('/admin/purchase/cart/clear', {
                                    method: 'POST'
                                })
                                .then(() => {
                                    window.location.href = '/admin/purchase/' + purchaseId;
                                });
                            }
                        })
                        .catch(() => {
                            // En cas d'erreur, rediriger quand même
                            window.location.href = '/admin/purchase/' + purchaseId;
                        });
                        
                    }, 2000);
                    
                } else {
                    resultDiv.innerHTML = `
                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            \${data.message || 'Erreur lors de la confirmation'}
                        </div>
                    `;
                    btn.disabled = false;
                    btn.innerHTML = '<i class=\"fas fa-paper-plane me-2\"></i> Confirmer et envoyer la commande';
                }
            })
            .catch(error => {
                console.error('Erreur complète:', error);
                resultDiv.innerHTML = `
                    <div class=\"alert alert-danger\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        <strong>Erreur :</strong> Une erreur s'est produite. 
                        <p class=\"mb-0 mt-2 small\">\${error.message.substring(0, 200)}</p>
                        <p class=\"mb-0 small\">Veuillez vérifier la console pour plus de détails.</p>
                    </div>
                `;
                btn.disabled = false;
                btn.innerHTML = '<i class=\"fas fa-paper-plane me-2\"></i> Confirmer et envoyer la commande';
            });
        });
    }
    
    // ========== RECHERCHE DE PRODUITS ==========
    const searchInput = document.getElementById('searchProduct');
    const searchResults = document.getElementById('searchResults');
    let searchTimeout = null;

    if (searchInput && searchResults) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(searchProducts, 300);
        });

        const searchButton = document.getElementById('searchButton');
        if (searchButton) {
            searchButton.addEventListener('click', searchProducts);
        }
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                searchProducts();
            }
        });
    }

    function searchProducts() {
        if (!searchInput || !searchResults) return;
        
        const query = searchInput.value.trim();
        if (query.length < 1) {
            searchResults.style.display = 'none';
            return;
        }

        fetch(`/admin/purchase/search-products?q=\${encodeURIComponent(query)}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: \${response.status}`);
            }
            return response.json();
        })
        .then(products => {
            if (!products || products.length === 0) {
                searchResults.innerHTML = `
                    <div class=\"list-group-item text-muted\">
                        <i class=\"fas fa-search me-2\"></i>
                        Aucun produit trouvé pour \"\${escapeHtml(query)}\"
                    </div>
                `;
            } else {
                searchResults.innerHTML = products.map(product => `
                    <div class=\"list-group-item list-group-item-action product-item\" 
                         data-id=\"\${product.id}\"
                         data-name=\"\${escapeHtml(product.name)}\"
                         data-barcode=\"\${escapeHtml(product.barcode)}\"
                         data-purchase-price=\"\${product.purchase_price}\"
                         data-has-expiry-date=\"\${product.has_expiry_date ? '1' : '0'}\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <strong>\${escapeHtml(product.name)}</strong>
                                <div class=\"text-muted small\">
                                    \${escapeHtml(product.barcode)} • \${escapeHtml(product.category)}
                                </div>
                                <div class=\"small\">
                                    <span class=\"badge \${getStockBadgeClass(product.stock_status)}\">
                                        \${getStockStatusText(product.stock_status)}
                                    </span>
                                    Stock: \${product.current_stock}
                                </div>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"fw-bold\">\${formatFcfa(product.purchase_price)}</div>
                                <div class=\"text-muted small\">\${formatFcfa(product.sale_price)} vente</div>
                            </div>
                        </div>
                    </div>
                `).join('');
                
                document.querySelectorAll('.product-item').forEach(item => {
                    item.addEventListener('click', function() {
                        const productId = this.dataset.id;
                        const productName = this.dataset.name;
                        const hasExpiryDate = this.dataset.hasExpiryDate === '1';
                        
                        openAddProductModal(productId, productName, hasExpiryDate);
                        
                        searchResults.style.display = 'none';
                        searchInput.value = '';
                    });
                });
            }
            searchResults.style.display = 'block';
        })
        .catch(error => {
            console.error('Erreur recherche:', error);
            searchResults.innerHTML = `
                <div class=\"list-group-item text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Erreur lors de la recherche: \${error.message}
                </div>
            `;
            searchResults.style.display = 'block';
        });
    }

    function openAddProductModal(productId, productName, hasExpiryDate) {
        const productModalContent = document.getElementById('productModalContent');
        if (!productModalContent) return;
        
        let formHtml = `
            <form id=\"addProductForm\">
                <input type=\"hidden\" name=\"product_id\" value=\"\${productId}\">
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">Produit</label>
                    <input type=\"text\" class=\"form-control\" value=\"\${productName}\" disabled>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">Numéro de lot (provisoire) *</label>
                    <input type=\"text\" 
                           class=\"form-control\" 
                           name=\"batch_number\" 
                           value=\"LOT-PROV-\${new Date().toISOString().slice(0,10).replace(/-/g, '')}-\${Math.random().toString(36).substr(2, 4).toUpperCase()}\"
                           required>
                    <div class=\"form-text\">Ce numéro sera confirmé à la réception physique</div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">Quantité *</label>
                    <input type=\"number\" 
                           class=\"form-control\" 
                           name=\"quantity\" 
                           min=\"1\" 
                           value=\"1\" 
                           required>
                </div>
        `;
        
        if (hasExpiryDate) {
            const today = new Date().toISOString().split('T')[0];
            const oneYearFromNow = new Date();
            oneYearFromNow.setFullYear(oneYearFromNow.getFullYear() + 1);
            const expiryDate = oneYearFromNow.toISOString().split('T')[0];
            
            formHtml += `
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Date de fabrication (estimée)</label>
                        <input type=\"date\" 
                               class=\"form-control\" 
                               name=\"manufacturing_date\" 
                               value=\"\${today}\">
                        <div class=\"form-text\">À confirmer à réception</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Date d'expiration (estimée)</label>
                        <input type=\"date\" 
                               class=\"form-control\" 
                               name=\"expiry_date\" 
                               value=\"\${expiryDate}\">
                        <div class=\"form-text\">À confirmer à réception</div>
                    </div>
                </div>
            `;
        }
        
        formHtml += `
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                </div>
            </form>
        `;
        
        productModalContent.innerHTML = formHtml;
        
        const modal = new bootstrap.Modal(document.getElementById('addProductModal'));
        modal.show();
        
        const addProductForm = document.getElementById('addProductForm');
        if (addProductForm) {
            addProductForm.addEventListener('submit', function(e) {
                e.preventDefault();
                addProductToCart(this);
            });
        }
    }

    function addProductToCart(form) {
        const formData = new FormData(form);
        
        fetch('/admin/purchase/cart/add-product', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
                if (modal) {
                    modal.hide();
                }
                location.reload();
            } else {
                showAlert('danger', data.message);
            }
        })
        .catch(error => {
            showAlert('danger', 'Erreur: ' + error.message);
        });
    }

    // ========== GESTION DU PANIER ==========
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', function() {
            const row = this.closest('tr');
            if (!row) return;
            
            const index = row.dataset.index;
            const quantity = this.value;
            
            if (quantity <= 0) {
                showAlert('warning', 'La quantité doit être supérieure à 0');
                this.value = 1;
                return;
            }
            
            updateCartItem(index, { quantity: quantity });
        });
    });

    document.querySelectorAll('.batch-number').forEach(input => {
        input.addEventListener('change', function() {
            const row = this.closest('tr');
            if (!row) return;
            
            const index = row.dataset.index;
            updateCartItem(index, { batch_number: this.value });
        });
    });

    document.querySelectorAll('.manufacturing-date, .expiry-date').forEach(input => {
        input.addEventListener('change', function() {
            const row = this.closest('tr');
            if (!row) return;
            
            const index = row.dataset.index;
            const data = {
                manufacturing_date: row.querySelector('.manufacturing-date')?.value || '',
                expiry_date: row.querySelector('.expiry-date')?.value || ''
            };
            
            updateCartItem(index, data);
        });
    });

    function updateCartItem(index, data) {
        const formData = new FormData();
        for (const key in data) {
            if (data[key] !== null && data[key] !== undefined) {
                formData.append(key, data[key]);
            }
        }
        
        fetch(`/admin/purchase/cart/update/\${index}`, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                showAlert('danger', data.message);
            }
        });
    }

    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function() {
            currentIndex = this.dataset.index;
            showConfirmModal(
                'Supprimer le produit',
                'Êtes-vous sûr de vouloir retirer ce produit du panier ?',
                removeCartItem
            );
        });
    });

    function removeCartItem() {
        fetch(`/admin/purchase/cart/remove/\${currentIndex}`, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }

    const clearCartBtn = document.getElementById('clearCartBtn');
    if (clearCartBtn) {
        clearCartBtn.addEventListener('click', function() {
            showConfirmModal(
                'Vider le panier',
                'Êtes-vous sûr de vouloir vider complètement le panier ? Tous les produits seront supprimés.',
                clearCart
            );
        });
    }

    function clearCart() {
        fetch('/admin/purchase/cart/clear', {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }

    function showConfirmModal(title, message, callback) {
        const confirmModalBody = document.getElementById('confirmModalBody');
        const modalTitle = document.querySelector('#confirmModal .modal-title');
        
        if (confirmModalBody) confirmModalBody.textContent = message;
        if (modalTitle) modalTitle.textContent = title;
        
        const modalElement = document.getElementById('confirmModal');
        if (!modalElement) return;
        
        const modal = new bootstrap.Modal(modalElement);
        modal.show();
        
        currentAction = callback;
        
        const confirmActionBtn = document.getElementById('confirmActionBtn');
        if (confirmActionBtn) {
            confirmActionBtn.onclick = function() {
                if (currentAction) {
                    currentAction();
                }
                modal.hide();
            };
        }
    }

    function showAlert(type, message) {
        // Supprimer les alertes existantes
        document.querySelectorAll('.alert-fixed').forEach(alert => alert.remove());
        
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-\${type} alert-dismissible fade show alert-fixed position-fixed`;
        alertDiv.style.top = '20px';
        alertDiv.style.right = '20px';
        alertDiv.style.zIndex = '9999';
        alertDiv.style.minWidth = '300px';
        alertDiv.innerHTML = `
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        `;
        
        document.body.appendChild(alertDiv);
        
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.remove();
            }
        }, 5000);
    }

    // Fonction pour formater en FCFA
    function formatFcfa(amount) {
        // Convertir en nombre
        const num = parseFloat(amount);
        if (isNaN(num)) return '0 FCFA';
        
        // Formater avec espace comme séparateur de milliers
        const formatted = new Intl.NumberFormat('fr-FR', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 2
        }).format(num);
        
        return formatted + ' FCFA';
    }

    function getStockStatusText(status) {
        const statuses = {
            'out_of_stock': 'Rupture',
            'low_stock': 'Stock faible',
            'in_stock': 'En stock'
        };
        return statuses[status] || status;
    }

    function getStockBadgeClass(status) {
        const classes = {
            'out_of_stock': 'bg-danger',
            'low_stock': 'bg-warning text-dark',
            'in_stock': 'bg-success'
        };
        return classes[status] || 'bg-secondary';
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // ========== GESTION DU SCAN CODE-BARRES ==========
    let barcodeBuffer = '';
    let lastKeyTime = Date.now();
    
    if (searchInput) {
        searchInput.addEventListener('keydown', function(e) {
            const currentTime = Date.now();
            
            if (currentTime - lastKeyTime > 100) {
                barcodeBuffer = '';
            }
            
            lastKeyTime = currentTime;
            
            if (e.key !== 'Enter') {
                barcodeBuffer += e.key;
            }
            
            if (e.key === 'Enter') {
                e.preventDefault();
                
                if (barcodeBuffer.length >= 8) {
                    searchInput.value = barcodeBuffer;
                    searchProducts();
                }
                
                barcodeBuffer = '';
            }
        });
    }
});
</script>
{% endblock %}", "admin/purchase/cart.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\cart.html.twig");
    }
}
