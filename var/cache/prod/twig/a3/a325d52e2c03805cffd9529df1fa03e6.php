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

/* return/new.html.twig */
class __TwigTemplate_85d7750df6cbde12b6aa5b602f7782b3 extends Template
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
        yield "Nouveau retour - Commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 4), "html", null, true);
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
    .order-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        padding: 1.5rem;
        color: white;
        margin-bottom: 1.5rem;
    }
    .items-table {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .items-table thead {
        background: #f8fafc;
    }
    .select-item-checkbox {
        width: 40px;
        text-align: center;
    }
    .quantity-input {
        width: 100px;
        text-align: center;
    }
    .selected-item {
        background-color: #e0f2fe !important;
    }
    .already-returned-info {
        font-size: 0.7rem;
        margin-top: 0.25rem;
    }
    .already-returned-info.text-warning { color: #d97706; }
    .already-returned-info.text-danger { color: #dc2626; }
    .already-returned-info.text-success { color: #16a34a; }
</style>
";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Nouveau retour
            </h1>
            <p class=\"text-muted\">Commande #";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
        </div>
        <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> Retour à la commande
        </a>
    </div>

    <div class=\"order-card\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <small class=\"opacity-75\">N° commande</small>
                <h5 class=\"mb-0\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 67), "html", null, true);
        yield "</h5>
            </div>
            <div class=\"col-md-4\">
                <small class=\"opacity-75\">Client</small>
                <h5 class=\"mb-0\">";
        // line 71
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 71), "html", null, true)) : ("Non renseigné"));
        yield "</h5>
                <small>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerPhone", [], "any", false, false, false, 72), "html", null, true);
        yield "</small>
            </div>
            <div class=\"col-md-4\">
                <small class=\"opacity-75\">Date</small>
                <h5 class=\"mb-0\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true);
        yield "</h5>
            </div>
        </div>
    </div>

    <form method=\"post\" id=\"returnForm\">
        <div class=\"items-table mb-4\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th class=\"select-item-checkbox\">
                                <input type=\"checkbox\" id=\"selectAll\">
                            </th>
                            <th>Produit</th>
                            <th class=\"text-center\">Quantité vendue</th>
                            <th class=\"text-center\">Déjà retourné</th>
                            <th class=\"text-center\">Restant</th>
                            <th class=\"text-center\">Prix unitaire</th>
                            <th class=\"text-center\">Total retour</th>
                            <th class=\"text-center\">Quantité à retourner</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            yield "                            ";
            $context["alreadyReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returned_quantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), [], "array", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["returned_quantities"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101)] ?? null) : null), 0)) : (0));
            // line 102
            yield "                            ";
            $context["maxReturnable"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 102) - ($context["alreadyReturned"] ?? null));
            // line 103
            yield "                            <tr class=\"order-item-row\" 
                                data-item-id=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 104), "html", null, true);
            yield "\" 
                                data-max-returnable=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxReturnable"] ?? null), "html", null, true);
            yield "\"
                                data-unit-price=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 106), "html", null, true);
            yield "\">
                                <td class=\"text-center\">
                                    <input type=\"checkbox\" class=\"item-checkbox\" value=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 108), "html", null, true);
            yield "\" ";
            if ((($context["maxReturnable"] ?? null) <= 0)) {
                yield "disabled";
            }
            yield ">
                                </td>
                                <td>
                                    <strong>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 111), "html", null, true);
            yield "</strong>
                                    ";
            // line 112
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                                        <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 113), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 115
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "                                        <br><small class=\"text-muted\"><i class=\"fas fa-utensils\"></i> Menu/Recette</small>
                                    ";
            } else {
                // line 118
                yield "                                        <br><small class=\"text-muted\"><i class=\"fas fa-box\"></i> Produit simple</small>
                                    ";
            }
            // line 120
            yield "                                    <div class=\"already-returned-info\">
                                        ";
            // line 121
            if ((($context["alreadyReturned"] ?? null) > 0)) {
                // line 122
                yield "                                            <span class=\"text-warning\">
                                                <i class=\"fas fa-info-circle\"></i> Déjà retourné: ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alreadyReturned"] ?? null), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 123), "html", null, true);
                yield "
                                            </span>
                                        ";
            } else {
                // line 126
                yield "                                            <span class=\"text-success\">
                                                <i class=\"fas fa-check-circle\"></i> Aucun retour
                                            </span>
                                        ";
            }
            // line 130
            yield "                                        ";
            if ((($context["maxReturnable"] ?? null) <= 0)) {
                // line 131
                yield "                                            <span class=\"text-danger d-block\">
                                                <i class=\"fas fa-times-circle\"></i> Complètement retourné
                                            </span>
                                        ";
            }
            // line 135
            yield "                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-secondary\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 138), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-center\">
                                    ";
            // line 141
            if ((($context["alreadyReturned"] ?? null) > 0)) {
                // line 142
                yield "                                        <span class=\"badge bg-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alreadyReturned"] ?? null), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 144
                yield "                                        <span class=\"badge bg-success\">0</span>
                                    ";
            }
            // line 146
            yield "                                </td>
                                <td class=\"text-center\">
                                    <strong class=\"text-";
            // line 148
            if ((($context["maxReturnable"] ?? null) > 0)) {
                yield "success";
            } else {
                yield "danger";
            }
            yield "\">
                                        ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxReturnable"] ?? null), "html", null, true);
            yield "
                                    </strong>
                                </td>
                                <td class=\"text-center\">
                                    ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 153), 0, ",", " "), "html", null, true);
            yield " FCFA
                                </td>
                                <td class=\"text-center total-item-";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 155), "html", null, true);
            yield "\">
                                    0 FCFA
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"number\" class=\"form-control quantity-input return-quantity\" 
                                           data-item-id=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 160), "html", null, true);
            yield "\" 
                                           min=\"0\" 
                                           max=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxReturnable"] ?? null), "html", null, true);
            yield "\" 
                                           value=\"0\" 
                                           ";
            // line 164
            if ((($context["maxReturnable"] ?? null) <= 0)) {
                yield "disabled";
            }
            yield ">
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header bg-white\">
                <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations du retour</h5>
            </div>
            <div class=\"card-body\">
                ";
        // line 178
        yield from $this->load("return/_form.html.twig", 178)->unwrap()->yield(CoreExtension::merge($context, ["reasons" =>         // line 179
($context["reasons"] ?? null), "refund_methods" =>         // line 180
($context["refund_methods"] ?? null)]));
        // line 182
        yield "            </div>
            <div class=\"card-footer bg-white\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <strong>Montant total à rembourser :</strong>
                        <span id=\"totalRefundAmount\" class=\"h4 text-primary ms-2\">0 FCFA</span>
                    </div>
                    <div>
                        <button type=\"button\" class=\"btn btn-secondary me-2\" onclick=\"history.back()\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\">
                            <i class=\"fas fa-save me-1\"></i> Créer la demande
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
";
        yield from [];
    }

    // line 204
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 205
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

    \$('#selectAll').change(function() {
        let isChecked = \$(this).is(':checked');
        \$('.item-checkbox:not(:disabled)').each(function() {
            \$(this).prop('checked', isChecked).trigger('change');
        });
    });

    \$('.item-checkbox').change(function() {
        let row = \$(this).closest('tr');
        let quantityInput = row.find('.return-quantity');
        let isChecked = \$(this).is(':checked');
        let maxReturnable = row.data('max-returnable');
        
        if (isChecked) {
            quantityInput.prop('disabled', false);
            if (quantityInput.val() == 0 || quantityInput.val() > maxReturnable) {
                quantityInput.val(Math.min(1, maxReturnable));
            }
            row.addClass('selected-item');
        } else {
            quantityInput.prop('disabled', true).val(0);
            row.removeClass('selected-item');
        }
        calculateTotalRefund();
    });

    \$('.return-quantity').on('input', function() {
        let row = \$(this).closest('tr');
        let maxReturnable = row.data('max-returnable');
        let currentVal = parseInt(\$(this).val()) || 0;
        
        if (currentVal > maxReturnable) {
            \$(this).val(maxReturnable);
            alert(`Vous ne pouvez retourner que \${maxReturnable} unité(s) maximum pour cet article.`);
        }
        if (currentVal < 0) {
            \$(this).val(0);
        }
        calculateTotalRefund();
    });

    function calculateTotalRefund() {
        let total = 0;
        \$('.order-item-row').each(function() {
            let checkbox = \$(this).find('.item-checkbox');
            if (checkbox.is(':checked') && !checkbox.is(':disabled')) {
                let quantity = parseInt(\$(this).find('.return-quantity').val()) || 0;
                let unitPrice = parseFloat(\$(this).data('unit-price'));
                let itemTotal = quantity * unitPrice;
                total += itemTotal;
                \$(this).find('.total-item-' + \$(this).data('item-id')).text(itemTotal.toLocaleString('fr-FR') + ' FCFA');
            } else {
                \$(this).find('.total-item-' + \$(this).data('item-id')).text('0 FCFA');
            }
        });
        \$('#totalRefundAmount').text(total.toLocaleString('fr-FR') + ' FCFA');
    }

    \$('#returnForm').submit(function(e) {
        let selectedItems = [];
        let hasError = false;
        
        \$('.order-item-row').each(function() {
            let checkbox = \$(this).find('.item-checkbox');
            if (checkbox.is(':checked') && !checkbox.is(':disabled')) {
                let itemId = \$(this).data('item-id');
                let quantity = parseInt(\$(this).find('.return-quantity').val()) || 0;
                let maxReturnable = \$(this).data('max-returnable');
                
                if (quantity > maxReturnable) {
                    alert(`La quantité pour \"\${\$(this).find('strong').first().text()}\" dépasse la quantité retournable (\${maxReturnable}).`);
                    hasError = true;
                    return false;
                }
                
                if (quantity > 0) {
                    selectedItems[itemId] = quantity;
                }
            }
        });

        if (hasError) {
            e.preventDefault();
            return false;
        }

        if (Object.keys(selectedItems).length === 0) {
            e.preventDefault();
            alert('Veuillez sélectionner au moins un article à retourner.');
            return false;
        }

        for (let itemId in selectedItems) {
            \$('<input>').attr({
                type: 'hidden',
                name: 'items[' + itemId + ']',
                value: selectedItems[itemId]
            }).appendTo('#returnForm');
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
        
        \$('#submitBtn').prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm me-2\"></span> Création en cours...');
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
        return "return/new.html.twig";
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
        return array (  411 => 205,  404 => 204,  379 => 182,  377 => 180,  376 => 179,  375 => 178,  363 => 168,  351 => 164,  346 => 162,  341 => 160,  333 => 155,  328 => 153,  321 => 149,  313 => 148,  309 => 146,  305 => 144,  299 => 142,  297 => 141,  291 => 138,  286 => 135,  280 => 131,  277 => 130,  271 => 126,  263 => 123,  260 => 122,  258 => 121,  255 => 120,  251 => 118,  247 => 116,  244 => 115,  238 => 113,  236 => 112,  232 => 111,  222 => 108,  217 => 106,  213 => 105,  209 => 104,  206 => 103,  203 => 102,  200 => 101,  196 => 100,  169 => 76,  162 => 72,  158 => 71,  151 => 67,  139 => 58,  134 => 56,  125 => 49,  118 => 48,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\new.html.twig");
    }
}
