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

/* print/customer_ticket.html.twig */
class __TwigTemplate_f1adf0cc43766a67e1e03e83ff7853c0 extends Template
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
    <h1>";
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
    <p> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 9), "")) : ("")), "html", null, true);
        yield "</p>
    <div class=\"divider\"></div>
    <div class=\"info-row\">
        <span class=\"info-label\">Facture N°</span>
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
        <span class=\"info-label\">Client</span>
        <span>";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 21), "html", null, true)) : ("Sur place"));
        yield "</span>
    </div>
    ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerPhone", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Tél</span>
        <span>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerPhone", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 29
        yield "    <div class=\"info-row\">
        <span class=\"info-label\">Caissier</span>
        <span>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 31), "fullName", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 31), "fullName", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31))), "html", null, true);
        yield "</span>
    </div>
</div>
";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "<div class=\"divider\"></div>
<div class=\"info-row\">
    <span>Désignation</span>
    <span>Qté</span>
    <span>Prix</span>
</div>
<div class=\"dotted-divider\"></div>

";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            yield "<div class=\"info-row\">
    <span style=\"flex:2\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
    <span style=\"width:40px; text-align:center\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 48), "html", null, true);
            yield "</span>
    <span style=\"width:70px; text-align:right\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 49), 0, ",", " "), "html", null, true);
            yield "</span>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
<div class=\"divider\"></div>

<div class=\"total-row\">
    <span>TOTAL</span>
    <span>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 57), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
</div>

<div class=\"total-row\">
    <span>Payé</span>
    <span>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "amountPaid", [], "any", false, false, false, 62), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
</div>

";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 65) > 0)) {
            // line 66
            yield "<div class=\"total-row\">
    <span>Monnaie</span>
    <span>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 68), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
</div>
";
        }
        // line 71
        yield "
<div class=\"info-row\">
    <span>Mode de paiement</span>
    <span>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 74), ["_" => " "])), "html", null, true);
        yield "</span>
</div>

";
        // line 77
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "<div class=\"notes\">
    <strong> Notes:</strong><br>
    ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 80), "html", null, true);
            yield "
</div>
";
        }
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "<div class=\"footer\">
    <p> Merci de votre visite ! </p>
    <p>Retrouvez-nous sur :</p>
    <p> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "website", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "website", [], "any", false, false, false, 89), "www.votre-site.com")) : ("www.votre-site.com")), "html", null, true);
        yield "</p>
    <p>";
        // line 90
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
        return "print/customer_ticket.html.twig";
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
        return array (  242 => 90,  238 => 89,  233 => 86,  226 => 85,  217 => 80,  213 => 78,  211 => 77,  205 => 74,  200 => 71,  194 => 68,  190 => 66,  188 => 65,  182 => 62,  174 => 57,  167 => 52,  158 => 49,  154 => 48,  150 => 47,  147 => 46,  143 => 45,  133 => 37,  126 => 36,  117 => 31,  113 => 29,  107 => 26,  103 => 24,  101 => 23,  96 => 21,  89 => 17,  82 => 13,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  60 => 5,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "print/customer_ticket.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\print\\customer_ticket.html.twig");
    }
}
