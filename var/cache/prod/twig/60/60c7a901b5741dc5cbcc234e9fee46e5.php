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

/* print/cash_ticket.html.twig */
class __TwigTemplate_fdf06396d0ef972dbac702074da959d1 extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "print/base_ticket.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("print/base_ticket.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"header\">
    <h1> ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
    <p>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
        yield "</p>
    <p> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", false, false, false, 8), "")) : ("")), "html", null, true);
        yield "</p>
    <p>SIRET: ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "siret", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "siret", [], "any", false, false, false, 9), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        yield "</p>
    <div class=\"divider\"></div>
    <div class=\"info-row\">
        <span class=\"info-label\">N° Commande</span>
        <span>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 13), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Date</span>
        <span>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 17), "d/m/Y H:i"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Caissier</span>
        <span>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 21), "fullName", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21))), "html", null, true);
        yield "</span>
    </div>
</div>
";
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "<div class=\"divider\"></div>
<div class=\"info-row\">
    <span>Désignation</span>
    <span>Qté</span>
    <span>Prix</span>
</div>
<div class=\"dotted-divider\"></div>

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            yield "<div class=\"info-row\">
    <span style=\"flex:2\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 37), "html", null, true);
            yield "</span>
    <span style=\"width:40px; text-align:center\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>
    <span style=\"width:70px; text-align:right\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 39), 0, ",", " "), "html", null, true);
            yield "</span>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "
<div class=\"divider\"></div>

<div class=\"total-row\">
    <span>Total HT</span>
    <span>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 47) / 1.18), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
</div>
<div class=\"total-row\">
    <span>TVA (18%)</span>
    <span>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 51) - (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 51) / 1.18)), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
</div>
<div class=\"total-row\">
    <span>TOTAL TTC</span>
    <span>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 55), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
</div>
<div class=\"total-row\">
    <span>Payé</span>
    <span>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "amountPaid", [], "any", false, false, false, 59), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
</div>
";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 61) > 0)) {
            // line 62
            yield "<div class=\"total-row\">
    <span>Monnaie</span>
    <span>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 64), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
</div>
";
        }
        // line 67
        yield "
<div class=\"cash-summary\">
    <div class=\"divider\"></div>
    <div class=\"info-row\">
        <span class=\"info-label\">Mode de paiement</span>
        <span>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 72), ["_" => " "])), "html", null, true);
        yield "</span>
    </div>
</div>

";
        // line 76
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "<div class=\"notes\">
    <strong> Notes:</strong><br>
    ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 79), "html", null, true);
            yield "
</div>
";
        }
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "<div class=\"footer\">
    <p> Ticket caisse - À conserver</p>
    <p>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["print_date"] ?? null), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "print/cash_ticket.html.twig";
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
        return array (  231 => 87,  227 => 85,  220 => 84,  211 => 79,  207 => 77,  205 => 76,  198 => 72,  191 => 67,  185 => 64,  181 => 62,  179 => 61,  174 => 59,  167 => 55,  160 => 51,  153 => 47,  146 => 42,  137 => 39,  133 => 38,  129 => 37,  126 => 36,  122 => 35,  112 => 27,  105 => 26,  96 => 21,  89 => 17,  82 => 13,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  60 => 5,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "print/cash_ticket.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\print\\cash_ticket.html.twig");
    }
}
