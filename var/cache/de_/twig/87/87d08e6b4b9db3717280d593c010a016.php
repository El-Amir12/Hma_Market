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

/* sale/orders/receipts_content.html.twig */
class __TwigTemplate_d1d3fd6b91910c7314fd859f0b66ade8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/receipts_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/receipts_content.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 3
            yield "    <div class=\"receipt\" style=\"page-break-after: always; margin-bottom: 20px; border-bottom: 1px dashed #ccc; padding-bottom: 20px;\">
        <div class=\"receipt-header\">
            <h2>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 5, $this->source); })()), "companyName", [], "any", false, false, false, 5), "html", null, true);
            yield "</h2>
            <p>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 6, $this->source); })()), "address", [], "any", false, false, false, 6), "Adresse non renseignée")) : ("Adresse non renseignée")), "html", null, true);
            yield "</p>
            <p>Tél: ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 7, $this->source); })()), "phone", [], "any", false, false, false, 7), "Non renseigné")) : ("Non renseigné")), "html", null, true);
            yield "</p>
            <div class=\"receipt-line\"></div>
            <p><strong>Reçu N°:</strong> ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 9), "html", null, true);
            yield "</p>
            <p><strong>Date:</strong> ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 10), "d/m/Y H:i"), "html", null, true);
            yield "</p>
            <p><strong>Caissier:</strong> ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 11), "fullName", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 11), "fullName", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11))), "html", null, true);
            yield "</p>
            <div class=\"receipt-line\"></div>
        </div>

        <div class=\"receipt-body\">
            <p><strong>Client:</strong> ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
            ";
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "                <p><strong>Tél:</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 18), "html", null, true);
                yield "</p>
            ";
            }
            // line 20
            yield "            <div class=\"receipt-line\"></div>
            
            <table class=\"receipt-items\">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Qté</th>
                        <th>Prix</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                yield "                        <tr>
                            <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                            <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                            <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 36), 0, ",", " "), "html", null, true);
                yield " FCFA</td>
                            <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 37), 0, ",", " "), "html", null, true);
                yield " FCFA</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                </tbody>
            </table>
            
            <div class=\"receipt-line\"></div>
            
            <div class=\"receipt-total\">
                <p><strong>Total:</strong> ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 46), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
                <p><strong>Payé:</strong> ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "amountPaid", [], "any", false, false, false, 47), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
                <p><strong>Monnaie:</strong> ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "changeAmount", [], "any", false, false, false, 48), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
                <p><strong>Mode:</strong> ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 49), ["_" => " "])), "html", null, true);
            yield "</p>
            </div>
        </div>

        <div class=\"receipt-footer\">
            <div class=\"receipt-line\"></div>
            <p>Merci de votre visite !</p>
            <p>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 56, $this->source); })()), "companyName", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>
            <small>Document généré par HMA Market</small>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sale/orders/receipts_content.html.twig";
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
        return array (  169 => 56,  159 => 49,  155 => 48,  151 => 47,  147 => 46,  139 => 40,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  115 => 33,  111 => 32,  97 => 20,  91 => 18,  89 => 17,  85 => 16,  77 => 11,  73 => 10,  69 => 9,  64 => 7,  60 => 6,  56 => 5,  52 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/receipts_content.html.twig #}
{% for order in orders %}
    <div class=\"receipt\" style=\"page-break-after: always; margin-bottom: 20px; border-bottom: 1px dashed #ccc; padding-bottom: 20px;\">
        <div class=\"receipt-header\">
            <h2>{{ company.companyName }}</h2>
            <p>{{ company.address|default('Adresse non renseignée') }}</p>
            <p>Tél: {{ company.phone|default('Non renseigné') }}</p>
            <div class=\"receipt-line\"></div>
            <p><strong>Reçu N°:</strong> {{ order.orderNumber }}</p>
            <p><strong>Date:</strong> {{ order.createdAt|date('d/m/Y H:i') }}</p>
            <p><strong>Caissier:</strong> {{ order.user.fullName|default(order.user.email) }}</p>
            <div class=\"receipt-line\"></div>
        </div>

        <div class=\"receipt-body\">
            <p><strong>Client:</strong> {{ order.customerName }}</p>
            {% if order.customerPhone %}
                <p><strong>Tél:</strong> {{ order.customerPhone }}</p>
            {% endif %}
            <div class=\"receipt-line\"></div>
            
            <table class=\"receipt-items\">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Qté</th>
                        <th>Prix</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in order.orderItems %}
                        <tr>
                            <td>{{ item.productName }}</td>
                            <td>{{ item.quantity }}</td>
                            <td>{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</td>
                            <td>{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
            
            <div class=\"receipt-line\"></div>
            
            <div class=\"receipt-total\">
                <p><strong>Total:</strong> {{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</p>
                <p><strong>Payé:</strong> {{ order.amountPaid|number_format(0, ',', ' ') }} FCFA</p>
                <p><strong>Monnaie:</strong> {{ order.changeAmount|number_format(0, ',', ' ') }} FCFA</p>
                <p><strong>Mode:</strong> {{ order.paymentMethod|replace({'_': ' '})|capitalize }}</p>
            </div>
        </div>

        <div class=\"receipt-footer\">
            <div class=\"receipt-line\"></div>
            <p>Merci de votre visite !</p>
            <p>{{ company.companyName }}</p>
            <small>Document généré par HMA Market</small>
        </div>
    </div>
{% endfor %}", "sale/orders/receipts_content.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\receipts_content.html.twig");
    }
}
