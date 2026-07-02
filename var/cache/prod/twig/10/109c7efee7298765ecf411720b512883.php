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
class __TwigTemplate_7b33ce25d4e8bfa1de759164f7bf2bdb extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier le retour #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnNumber", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnNumber", [], "any", false, false, false, 47), "html", null, true);
        yield " - Commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "orderNumber", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
        </div>
        <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "id", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> Retour
        </a>
    </div>

    <div class=\"alert alert-info mb-4\">
        <i class=\"fas fa-info-circle me-2\"></i>
        Vous pouvez modifier les informations du retour tant qu'il est en attente de validation.
        <strong>Les quantités peuvent être modifiées.</strong>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Articles retournés</div>
                <div class=\"h5 mb-0\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnItems", [], "any", false, false, false, 64)), "html", null, true);
        yield " article(s)</div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Montant total</div>
                <div class=\"h5 mb-0 text-primary\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "totalRefundAmount", [], "any", false, false, false, 70), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"info-card\">
                <div class=\"info-label\">Date de création</div>
                <div class=\"h6 mb-0\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "createdAt", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true);
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
        // line 90
        yield from $this->load("return/_form.html.twig", 90)->unwrap()->yield(CoreExtension::merge($context, ["returnOrder" =>         // line 91
($context["returnOrder"] ?? null), "reasons" =>         // line 92
($context["reasons"] ?? null), "refund_methods" =>         // line 93
($context["refund_methods"] ?? null)]));
        // line 95
        yield "                
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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnItems", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 111
            yield "                                    ";
            $context["maxQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 111), "quantity", [], "any", false, false, false, 111);
            // line 112
            yield "                                    <tr class=\"return-item-row\" 
                                        data-item-id=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 113), "html", null, true);
            yield "\" 
                                        data-max-qty=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxQty"] ?? null), "html", null, true);
            yield "\" 
                                        data-unit-price=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 115), "html", null, true);
            yield "\"
                                        data-order-item-id=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
            yield "\">
                                        <td>
                                            <strong>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 118), "html", null, true);
            yield "</strong>
                                            ";
            // line 119
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "                                                <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 120), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 122
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemType", [], "any", false, false, false, 122) == "recipe")) {
                // line 123
                yield "                                                <br><small class=\"text-muted\"><i class=\"fas fa-utensils\"></i> Menu</small>
                                            ";
            } else {
                // line 125
                yield "                                                <br><small class=\"text-muted\"><i class=\"fas fa-box\"></i> Produit</small>
                                            ";
            }
            // line 127
            yield "                                        </td>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-secondary\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxQty"] ?? null), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"text-center\">
                                            <input type=\"number\" 
                                                   class=\"form-control quantity-edit return-quantity-edit\" 
                                                   name=\"quantities[";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 134), "html", null, true);
            yield "]\" 
                                                   value=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 135), "html", null, true);
            yield "\" 
                                                   min=\"0\" 
                                                   max=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxQty"] ?? null), "html", null, true);
            yield "\" 
                                                   style=\"width: 100px; margin: 0 auto; display: inline-block;\">
                                            <div class=\"small text-muted mt-1\" id=\"max-warning-";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 139), "html", null, true);
            yield "\" style=\"display: none; color: #dc2626;\">
                                                <i class=\"fas fa-exclamation-triangle\"></i> Max: ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxQty"] ?? null), "html", null, true);
            yield "
                                            </div>
                                        </td>
                                        <td class=\"text-center\">
                                            ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 144), 0, ",", " "), "html", null, true);
            yield " FCFA
                                        </td>
                                        <td class=\"text-center\">
                                            <strong class=\"item-total text-primary\" data-item-id=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 147), "html", null, true);
            yield "\">
                                                ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalRefund", [], "any", false, false, false, 148), 0, ",", " "), "html", null, true);
            yield " FCFA
                                            </strong>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "                            </tbody>
                            <tfoot class=\"table-light\">
                                <tr>
                                    <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                                    <td class=\"text-center fw-bold text-primary h5\" id=\"grandTotal\">
                                        ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "totalRefundAmount", [], "any", false, false, false, 158), 0, ",", " "), "html", null, true);
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
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "totalRefundAmount", [], "any", false, false, false, 174), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                    </div>
                    <div>
                        <a href=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "id", [], "any", false, false, false, 177)]), "html", null, true);
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
        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 192
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

    function calculateTotal() {
        let grandTotal = 0;
        
        \$('.return-item-row').each(function() {
            let quantity = parseInt(\$(this).find('.return-quantity-edit').val()) || 0;
            let unitPrice = parseFloat(\$(this).data('unit-price'));
            let maxQty = \$(this).data('max-qty');
            let itemId = \$(this).data('item-id');
            let total = quantity * unitPrice;
            
            if (quantity > maxQty) {
                \$(this).find('.return-quantity-edit').val(maxQty);
                quantity = maxQty;
                total = quantity * unitPrice;
                \$('#max-warning-' + itemId).show();
            } else {
                \$('#max-warning-' + itemId).hide();
            }
            
            \$('.item-total[data-item-id=\"' + itemId + '\"]').text(total.toLocaleString('fr-FR') + ' FCFA');
            grandTotal += total;
        });
        
        \$('#grandTotal').text(grandTotal.toLocaleString('fr-FR') + ' FCFA');
        \$('#totalRefundDisplay').text(grandTotal.toLocaleString('fr-FR') + ' FCFA');
        
        return grandTotal;
    }

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
        return array (  372 => 192,  365 => 191,  347 => 177,  341 => 174,  322 => 158,  315 => 153,  304 => 148,  300 => 147,  294 => 144,  287 => 140,  283 => 139,  278 => 137,  273 => 135,  269 => 134,  261 => 129,  257 => 127,  253 => 125,  249 => 123,  246 => 122,  240 => 120,  238 => 119,  234 => 118,  229 => 116,  225 => 115,  221 => 114,  217 => 113,  214 => 112,  211 => 111,  207 => 110,  190 => 95,  188 => 93,  187 => 92,  186 => 91,  185 => 90,  168 => 76,  159 => 70,  150 => 64,  132 => 49,  125 => 47,  116 => 40,  109 => 39,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\edit.html.twig");
    }
}
