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

/* return/edit.html.twig */
class __TwigTemplate_66df25edf3dc74599be62f5877c2cdb4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Modifier le retour #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 4, $this->source); })()), "returnNumber", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .info-card {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #64748b;
    }
    .quantity-edit {
        width: 100px;
        text-align: center;
    }
    .selected-item {
        background-color: #e0f2fe !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h2 mb-1\">
                <i class=\"fas fa-edit text-primary me-2\"></i>
                Modifier le retour
            </h1>
            <p class=\"text-muted\">Retour #";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 47, $this->source); })()), "returnNumber", [], "any", false, false, false, 47), "html", null, true);
        yield " - Commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 47, $this->source); })()), "orderNumber", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
        </div>
        <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> Retour
        </a>
    </div>

    <div class=\"alert alert-info mb-4\">
        <i class=\"fas fa-info-circle me-2\"></i>
        Vous pouvez modifier les informations du retour tant qu'il est en attente de validation.
        <strong>Les quantités peuvent être modifiées.</strong>
    </div>

    <!-- Informations récapitulatives -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Articles retournés</div>
                <div class=\"h5 mb-0\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 65, $this->source); })()), "returnItems", [], "any", false, false, false, 65)), "html", null, true);
        yield " article(s)</div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Montant total</div>
                <div class=\"h5 mb-0 text-primary\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 71, $this->source); })()), "totalRefundAmount", [], "any", false, false, false, 71), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Date de création</div>
                <div class=\"h6 mb-0\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 77, $this->source); })()), "createdAt", [], "any", false, false, false, 77), "d/m/Y H:i"), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header bg-white\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations du retour</h5>
                <span class=\"status-badge status-pending\">⏳ En attente</span>
            </div>
        </div>
        <form method=\"post\" id=\"editReturnForm\">
            <div class=\"card-body\">
                ";
        // line 91
        yield from $this->load("return/_form.html.twig", 91)->unwrap()->yield(CoreExtension::merge($context, ["returnOrder" =>         // line 92
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 92, $this->source); })()), "reasons" =>         // line 93
(isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 93, $this->source); })()), "refund_methods" =>         // line 94
(isset($context["refund_methods"]) || array_key_exists("refund_methods", $context) ? $context["refund_methods"] : (function () { throw new RuntimeError('Variable "refund_methods" does not exist.', 94, $this->source); })())]));
        // line 96
        yield "                
                <!-- Liste des articles retournés (MODIFIABLE) -->
                <div class=\"mt-4\">
                    <h6 class=\"fw-bold mb-3\"><i class=\"fas fa-boxes me-2\"></i>Articles retournés</h6>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Produit</th>
                                    <th class=\"text-center\">Quantité vendue</th>
                                    <th class=\"text-center\">Quantité retournée</th>
                                    <th class=\"text-center\">Prix unitaire</th>
                                    <th class=\"text-center\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 112, $this->source); })()), "returnItems", [], "any", false, false, false, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            yield "                                    ";
            $context["maxQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 113), "quantity", [], "any", false, false, false, 113);
            // line 114
            yield "                                    <tr class=\"return-item-row\" 
                                        data-item-id=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 115), "html", null, true);
            yield "\" 
                                        data-max-qty=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxQty"]) || array_key_exists("maxQty", $context) ? $context["maxQty"] : (function () { throw new RuntimeError('Variable "maxQty" does not exist.', 116, $this->source); })()), "html", null, true);
            yield "\" 
                                        data-unit-price=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 117), "html", null, true);
            yield "\"
                                        data-order-item-id=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118), "html", null, true);
            yield "\">
                                        <td>
                                            <strong>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 120), "html", null, true);
            yield "</strong>
                                            ";
            // line 121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                                                <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 122), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 124
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemType", [], "any", false, false, false, 124) == "recipe")) {
                // line 125
                yield "                                                <br><small class=\"text-muted\"><i class=\"fas fa-utensils\"></i> Menu</small>
                                            ";
            } else {
                // line 127
                yield "                                                <br><small class=\"text-muted\"><i class=\"fas fa-box\"></i> Produit</small>
                                            ";
            }
            // line 129
            yield "                                        </td>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-secondary\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxQty"]) || array_key_exists("maxQty", $context) ? $context["maxQty"] : (function () { throw new RuntimeError('Variable "maxQty" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"text-center\">
                                            <input type=\"number\" 
                                                   class=\"form-control quantity-edit return-quantity-edit\" 
                                                   name=\"quantities[";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "]\" 
                                                   value=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 137), "html", null, true);
            yield "\" 
                                                   min=\"0\" 
                                                   max=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxQty"]) || array_key_exists("maxQty", $context) ? $context["maxQty"] : (function () { throw new RuntimeError('Variable "maxQty" does not exist.', 139, $this->source); })()), "html", null, true);
            yield "\" 
                                                   style=\"width: 100px; margin: 0 auto; display: inline-block;\">
                                            <div class=\"small text-muted mt-1\" id=\"max-warning-";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 141), "html", null, true);
            yield "\" style=\"display: none; color: #dc2626;\">
                                                <i class=\"fas fa-exclamation-triangle\"></i> Max: ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxQty"]) || array_key_exists("maxQty", $context) ? $context["maxQty"] : (function () { throw new RuntimeError('Variable "maxQty" does not exist.', 142, $this->source); })()), "html", null, true);
            yield "
                                            </div>
                                        </td>
                                        <td class=\"text-center\">
                                            ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 146), 0, ",", " "), "html", null, true);
            yield " FCFA
                                        </td>
                                        <td class=\"text-center\">
                                            <strong class=\"item-total text-primary\" data-item-id=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 149), "html", null, true);
            yield "\">
                                                ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalRefund", [], "any", false, false, false, 150), 0, ",", " "), "html", null, true);
            yield " FCFA
                                            </strong>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "                            </tbody>
                            <tfoot class=\"table-light\">
                                <tr>
                                    <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                                    <td class=\"text-center fw-bold text-primary h5\" id=\"grandTotal\">
                                        ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 160, $this->source); })()), "totalRefundAmount", [], "any", false, false, false, 160), 0, ",", " "), "html", null, true);
        yield " FCFA
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"alert alert-info mt-2\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        <small>Vous pouvez modifier les quantités. Le montant total sera recalculé automatiquement.</small>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-white\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <strong>Montant à rembourser :</strong>
                        <span class=\"h4 text-primary ms-2\" id=\"totalRefundDisplay\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 176, $this->source); })()), "totalRefundAmount", [], "any", false, false, false, 176), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                    </div>
                    <div>
                        <a href=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)]), "html", null, true);
        yield "\" class=\"btn btn-secondary me-2\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"submitEditBtn\">
                            <i class=\"fas fa-save me-1\"></i> Enregistrer les modifications
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 193
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

        // line 194
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
\$(document).ready(function() {
    \$('.select2').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        width: '100%'
    });

    // Fonction pour recalculer le total
    function calculateTotal() {
        let grandTotal = 0;
        
        \$('.return-item-row').each(function() {
            let quantity = parseInt(\$(this).find('.return-quantity-edit').val()) || 0;
            let unitPrice = parseFloat(\$(this).data('unit-price'));
            let maxQty = \$(this).data('max-qty');
            let itemId = \$(this).data('item-id');
            let total = quantity * unitPrice;
            
            // Vérifier la limite
            if (quantity > maxQty) {
                \$(this).find('.return-quantity-edit').val(maxQty);
                quantity = maxQty;
                total = quantity * unitPrice;
                \$('#max-warning-' + itemId).show();
            } else {
                \$('#max-warning-' + itemId).hide();
            }
            
            // Mettre à jour l'affichage du total par article
            \$('.item-total[data-item-id=\"' + itemId + '\"]').text(total.toLocaleString('fr-FR') + ' FCFA');
            
            grandTotal += total;
        });
        
        // Mettre à jour le total général
        \$('#grandTotal').text(grandTotal.toLocaleString('fr-FR') + ' FCFA');
        \$('#totalRefundDisplay').text(grandTotal.toLocaleString('fr-FR') + ' FCFA');
        
        return grandTotal;
    }

    // Écouter les changements de quantité
    \$('.return-quantity-edit').on('input', function() {
        let row = \$(this).closest('.return-item-row');
        let maxQty = row.data('max-qty');
        let currentVal = parseInt(\$(this).val()) || 0;
        
        if (currentVal > maxQty) {
            \$(this).val(maxQty);
            alert(`La quantité ne peut pas dépasser \${maxQty} pour cet article.`);
        }
        if (currentVal < 0) {
            \$(this).val(0);
        }
        
        calculateTotal();
    });

    // Validation avant soumission
    \$('#editReturnForm').submit(function(e) {
        let hasError = false;
        
        \$('.return-item-row').each(function() {
            let quantity = parseInt(\$(this).find('.return-quantity-edit').val()) || 0;
            let maxQty = \$(this).data('max-qty');
            
            if (quantity > maxQty) {
                alert(`La quantité pour \"\${\$(this).find('strong').text()}\" dépasse la quantité vendue (\${maxQty}).`);
                hasError = true;
                return false;
            }
        });
        
        if (hasError) {
            e.preventDefault();
            return false;
        }
        
        // Vérifier qu'au moins un article est retourné
        let totalQuantity = 0;
        \$('.return-quantity-edit').each(function() {
            totalQuantity += parseInt(\$(this).val()) || 0;
        });
        
        if (totalQuantity === 0) {
            e.preventDefault();
            alert('Veuillez indiquer au moins une quantité à retourner.');
            return false;
        }
        
        let reason = \$('#reason').val();
        if (!reason) {
            e.preventDefault();
            alert('Veuillez sélectionner un motif de retour.');
            return false;
        }
        
        let refundMethod = \$('#refund_method').val();
        if (!refundMethod) {
            e.preventDefault();
            alert('Veuillez sélectionner une méthode de remboursement.');
            return false;
        }
    });
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
        return "return/edit.html.twig";
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
        return array (  428 => 194,  415 => 193,  391 => 179,  385 => 176,  366 => 160,  359 => 155,  348 => 150,  344 => 149,  338 => 146,  331 => 142,  327 => 141,  322 => 139,  317 => 137,  313 => 136,  305 => 131,  301 => 129,  297 => 127,  293 => 125,  290 => 124,  284 => 122,  282 => 121,  278 => 120,  273 => 118,  269 => 117,  265 => 116,  261 => 115,  258 => 114,  255 => 113,  251 => 112,  233 => 96,  231 => 94,  230 => 93,  229 => 92,  228 => 91,  211 => 77,  202 => 71,  193 => 65,  174 => 49,  167 => 47,  158 => 40,  145 => 39,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/return/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier le retour #{{ returnOrder.returnNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .info-card {
        background: #f8fafc;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #64748b;
    }
    .quantity-edit {
        width: 100px;
        text-align: center;
    }
    .selected-item {
        background-color: #e0f2fe !important;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h2 mb-1\">
                <i class=\"fas fa-edit text-primary me-2\"></i>
                Modifier le retour
            </h1>
            <p class=\"text-muted\">Retour #{{ returnOrder.returnNumber }} - Commande #{{ returnOrder.orderNumber }}</p>
        </div>
        <a href=\"{{ path('returns_show', {'id': returnOrder.id}) }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> Retour
        </a>
    </div>

    <div class=\"alert alert-info mb-4\">
        <i class=\"fas fa-info-circle me-2\"></i>
        Vous pouvez modifier les informations du retour tant qu'il est en attente de validation.
        <strong>Les quantités peuvent être modifiées.</strong>
    </div>

    <!-- Informations récapitulatives -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Articles retournés</div>
                <div class=\"h5 mb-0\">{{ returnOrder.returnItems|length }} article(s)</div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Montant total</div>
                <div class=\"h5 mb-0 text-primary\">{{ returnOrder.totalRefundAmount|number_format(0, ',', ' ') }} FCFA</div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Date de création</div>
                <div class=\"h6 mb-0\">{{ returnOrder.createdAt|date('d/m/Y H:i') }}</div>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header bg-white\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations du retour</h5>
                <span class=\"status-badge status-pending\">⏳ En attente</span>
            </div>
        </div>
        <form method=\"post\" id=\"editReturnForm\">
            <div class=\"card-body\">
                {% include 'return/_form.html.twig' with {
                    'returnOrder': returnOrder,
                    'reasons': reasons,
                    'refund_methods': refund_methods
                } %}
                
                <!-- Liste des articles retournés (MODIFIABLE) -->
                <div class=\"mt-4\">
                    <h6 class=\"fw-bold mb-3\"><i class=\"fas fa-boxes me-2\"></i>Articles retournés</h6>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Produit</th>
                                    <th class=\"text-center\">Quantité vendue</th>
                                    <th class=\"text-center\">Quantité retournée</th>
                                    <th class=\"text-center\">Prix unitaire</th>
                                    <th class=\"text-center\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for item in returnOrder.returnItems %}
                                    {% set maxQty = item.originalOrderItem.quantity %}
                                    <tr class=\"return-item-row\" 
                                        data-item-id=\"{{ item.id }}\" 
                                        data-max-qty=\"{{ maxQty }}\" 
                                        data-unit-price=\"{{ item.unitPriceAtSale }}\"
                                        data-order-item-id=\"{{ item.originalOrderItem.id }}\">
                                        <td>
                                            <strong>{{ item.productName }}</strong>
                                            {% if item.promotionName %}
                                                <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> {{ item.promotionName }}</small>
                                            {% endif %}
                                            {% if item.itemType == 'recipe' %}
                                                <br><small class=\"text-muted\"><i class=\"fas fa-utensils\"></i> Menu</small>
                                            {% else %}
                                                <br><small class=\"text-muted\"><i class=\"fas fa-box\"></i> Produit</small>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-secondary\">{{ maxQty }}</span>
                                        </td>
                                        <td class=\"text-center\">
                                            <input type=\"number\" 
                                                   class=\"form-control quantity-edit return-quantity-edit\" 
                                                   name=\"quantities[{{ item.id }}]\" 
                                                   value=\"{{ item.quantityReturned }}\" 
                                                   min=\"0\" 
                                                   max=\"{{ maxQty }}\" 
                                                   style=\"width: 100px; margin: 0 auto; display: inline-block;\">
                                            <div class=\"small text-muted mt-1\" id=\"max-warning-{{ item.id }}\" style=\"display: none; color: #dc2626;\">
                                                <i class=\"fas fa-exclamation-triangle\"></i> Max: {{ maxQty }}
                                            </div>
                                        </td>
                                        <td class=\"text-center\">
                                            {{ item.unitPriceAtSale|number_format(0, ',', ' ') }} FCFA
                                        </td>
                                        <td class=\"text-center\">
                                            <strong class=\"item-total text-primary\" data-item-id=\"{{ item.id }}\">
                                                {{ item.totalRefund|number_format(0, ',', ' ') }} FCFA
                                            </strong>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                            <tfoot class=\"table-light\">
                                <tr>
                                    <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                                    <td class=\"text-center fw-bold text-primary h5\" id=\"grandTotal\">
                                        {{ returnOrder.totalRefundAmount|number_format(0, ',', ' ') }} FCFA
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"alert alert-info mt-2\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        <small>Vous pouvez modifier les quantités. Le montant total sera recalculé automatiquement.</small>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-white\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <strong>Montant à rembourser :</strong>
                        <span class=\"h4 text-primary ms-2\" id=\"totalRefundDisplay\">{{ returnOrder.totalRefundAmount|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                    <div>
                        <a href=\"{{ path('returns_show', {'id': returnOrder.id}) }}\" class=\"btn btn-secondary me-2\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"submitEditBtn\">
                            <i class=\"fas fa-save me-1\"></i> Enregistrer les modifications
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
\$(document).ready(function() {
    \$('.select2').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        width: '100%'
    });

    // Fonction pour recalculer le total
    function calculateTotal() {
        let grandTotal = 0;
        
        \$('.return-item-row').each(function() {
            let quantity = parseInt(\$(this).find('.return-quantity-edit').val()) || 0;
            let unitPrice = parseFloat(\$(this).data('unit-price'));
            let maxQty = \$(this).data('max-qty');
            let itemId = \$(this).data('item-id');
            let total = quantity * unitPrice;
            
            // Vérifier la limite
            if (quantity > maxQty) {
                \$(this).find('.return-quantity-edit').val(maxQty);
                quantity = maxQty;
                total = quantity * unitPrice;
                \$('#max-warning-' + itemId).show();
            } else {
                \$('#max-warning-' + itemId).hide();
            }
            
            // Mettre à jour l'affichage du total par article
            \$('.item-total[data-item-id=\"' + itemId + '\"]').text(total.toLocaleString('fr-FR') + ' FCFA');
            
            grandTotal += total;
        });
        
        // Mettre à jour le total général
        \$('#grandTotal').text(grandTotal.toLocaleString('fr-FR') + ' FCFA');
        \$('#totalRefundDisplay').text(grandTotal.toLocaleString('fr-FR') + ' FCFA');
        
        return grandTotal;
    }

    // Écouter les changements de quantité
    \$('.return-quantity-edit').on('input', function() {
        let row = \$(this).closest('.return-item-row');
        let maxQty = row.data('max-qty');
        let currentVal = parseInt(\$(this).val()) || 0;
        
        if (currentVal > maxQty) {
            \$(this).val(maxQty);
            alert(`La quantité ne peut pas dépasser \${maxQty} pour cet article.`);
        }
        if (currentVal < 0) {
            \$(this).val(0);
        }
        
        calculateTotal();
    });

    // Validation avant soumission
    \$('#editReturnForm').submit(function(e) {
        let hasError = false;
        
        \$('.return-item-row').each(function() {
            let quantity = parseInt(\$(this).find('.return-quantity-edit').val()) || 0;
            let maxQty = \$(this).data('max-qty');
            
            if (quantity > maxQty) {
                alert(`La quantité pour \"\${\$(this).find('strong').text()}\" dépasse la quantité vendue (\${maxQty}).`);
                hasError = true;
                return false;
            }
        });
        
        if (hasError) {
            e.preventDefault();
            return false;
        }
        
        // Vérifier qu'au moins un article est retourné
        let totalQuantity = 0;
        \$('.return-quantity-edit').each(function() {
            totalQuantity += parseInt(\$(this).val()) || 0;
        });
        
        if (totalQuantity === 0) {
            e.preventDefault();
            alert('Veuillez indiquer au moins une quantité à retourner.');
            return false;
        }
        
        let reason = \$('#reason').val();
        if (!reason) {
            e.preventDefault();
            alert('Veuillez sélectionner un motif de retour.');
            return false;
        }
        
        let refundMethod = \$('#refund_method').val();
        if (!refundMethod) {
            e.preventDefault();
            alert('Veuillez sélectionner une méthode de remboursement.');
            return false;
        }
    });
});
</script>
{% endblock %}", "return/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\edit.html.twig");
    }
}
