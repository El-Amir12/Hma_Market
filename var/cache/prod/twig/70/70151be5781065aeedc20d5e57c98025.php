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

/* purchase/new.html.twig */
class __TwigTemplate_7738aaa6943ca377f3807299974967f7 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Valider la réception";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-clipboard-check me-2\"></i>
                        Validation de la réception
                    </h4>
                </div>
                <div class=\"card-body\">
                    <!-- Récapitulatif -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card border-primary\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h5 class=\"mb-0\">
                                        <i class=\"fas fa-info-circle me-2\"></i>
                                        Récapitulatif
                                    </h5>
                                </div>
                                <div class=\"card-body\">
                                    <table class=\"table table-sm\">
                                        <tr>
                                            <th>Nombre de produits :</th>
                                            <td class=\"text-end\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["cart"] ?? null)), "html", null, true);
        yield "</td>
                                        </tr>
                                        <tr>
                                            <th>Fournisseur :</th>
                                            <td class=\"text-end\">
                                                ";
        // line 36
        if ((($tmp = ($context["supplier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                                ";
        } else {
            // line 39
            yield "                                                    <span class=\"text-warning\">Non spécifié</span>
                                                ";
        }
        // line 41
        yield "                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total d'achat :</th>
                                            <td class=\"text-end h5 text-success\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(($context["total_amount"] ?? null), "EUR"), "html", null, true);
        yield "</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card border-warning\">
                                <div class=\"card-header bg-warning text-dark\">
                                    <h5 class=\"mb-0\">
                                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                        Important
                                    </h5>
                                </div>
                                <div class=\"card-body\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-check-circle text-success me-2\"></i>
                                        La validation va :
                                    </p>
                                    <ul class=\"small mb-0\">
                                        <li>Enregistrer l'achat dans l'historique</li>
                                        <li>Créer les lots de stock</li>
                                        <li>Mettre à jour les quantités en stock</li>
                                        <li>Enregistrer les mouvements de stock</li>
                                    </ul>
                                    <div class=\"alert alert-info mt-3 mb-0 py-2\">
                                        <i class=\"fas fa-info-circle me-2\"></i>
                                        Cette action est définitive et ne peut être annulée.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Détail des produits -->
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Détail des produits</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Produit</th>
                                            <th class=\"text-center\">N° Lot</th>
                                            <th class=\"text-center\">Quantité</th>
                                            <th class=\"text-center\">Prix unitaire</th>
                                            <th class=\"text-center\">Total</th>
                                            <th class=\"text-center\">Dates</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            yield "                                            <tr>
                                                <td>
                                                    <strong>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 101), "html", null, true);
            yield "</strong><br>
                                                    <small class=\"text-muted\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", false, false, false, 102), "html", null, true);
            yield "</small>
                                                </td>
                                                <td class=\"text-center\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batch_number", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                                                <td class=\"text-center\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                                                <td class=\"text-center\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 106), "EUR"), "html", null, true);
            yield "</td>
                                                <td class=\"text-center\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 107) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 107)), "EUR"), "html", null, true);
            yield "</td>
                                                <td class=\"text-center small\">
                                                    ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_expiry_date", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturing_date", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 111
                    yield "                                                            Fab: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturing_date", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
                    yield "<br>
                                                        ";
                }
                // line 113
                yield "                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiry_date", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "                                                            Exp: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiry_date", [], "any", false, false, false, 114), "d/m/Y"), "html", null, true);
                    yield "
                                                        ";
                }
                // line 116
                yield "                                                    ";
            } else {
                // line 117
                yield "                                                        <span class=\"text-muted\">Non périssable</span>
                                                    ";
            }
            // line 119
            yield "                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire de validation -->
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">
                                <i class=\"fas fa-paper-plane me-2\"></i>
                                Finaliser la réception
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supplier", [], "any", false, false, false, 140), 'row');
        yield "
                                        
                                        ";
        // line 142
        if ((($tmp =  !($context["supplier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 143
            yield "                                            <div class=\"alert alert-warning mt-3\">
                                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                                Aucun fournisseur n'a été sélectionné. Vous pouvez en choisir un ci-dessous.
                                            </div>
                                        ";
        }
        // line 148
        yield "                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 150), 'row');
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 d-flex justify-content-between\">
                                    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_cart");
        yield "\" class=\"btn btn-outline-secondary\">
                                        <i class=\"fas fa-arrow-left me-2\"></i>
                                        Retour au panier
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-success btn-lg px-5\">
                                        <i class=\"fas fa-save me-2\"></i>
                                        Enregistrer la réception
                                    </button>
                                </div>
                            ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "purchase/new.html.twig";
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
        return array (  309 => 164,  297 => 155,  289 => 150,  285 => 148,  278 => 143,  276 => 142,  271 => 140,  265 => 137,  248 => 122,  240 => 119,  236 => 117,  233 => 116,  227 => 114,  224 => 113,  218 => 111,  215 => 110,  213 => 109,  208 => 107,  204 => 106,  200 => 105,  196 => 104,  191 => 102,  187 => 101,  183 => 99,  179 => 98,  123 => 45,  117 => 41,  113 => 39,  107 => 37,  105 => 36,  97 => 31,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "purchase/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\new.html.twig");
    }
}
