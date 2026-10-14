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

/* stock/transfer/print.html.twig */
class __TwigTemplate_60d56393155d67bde0ae94cf202196ca extends Template
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
        // line 2
        return "base_print.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_print.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Transfert ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
<div class=\"print-header\">
    <h1>BON DE TRANSFERT</h1>
    <p>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 10), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdAt", [], "any", false, false, false, 10), "d/m/Y H:i"), "html", null, true);
        yield "</p>
</div>

<div class=\"row mb-4\">
    <div class=\"col-6\">
        <h6 class=\"fw-bold text-primary\">
            <i class=\"fas fa-warehouse me-1\"></i> Source
        </h6>
        <p class=\"mb-0\">
            ";
        // line 19
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "sourceLocation", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "sourceLocation", [], "any", false, false, false, 19), "displayName", [], "any", false, false, false, 19), "html", null, true)) : ("Non défini"));
        yield "
        </p>
    </div>
    <div class=\"col-6 text-end\">
        <h6 class=\"fw-bold text-primary\">
            <i class=\"fas fa-map-marker-alt me-1\"></i> Destination
        </h6>
        <p class=\"mb-0\">
            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "destinationLocation", [], "any", false, false, false, 27), "displayName", [], "any", false, false, false, 27), "html", null, true);
        yield "
        </p>
    </div>
</div>

<table class=\"table table-bordered\">
    <thead class=\"table-light\">
        <tr>
            <th>Produit</th>
            <th>N° lot</th>
            <th class=\"text-end\">Quantité</th>
            <th class=\"text-end\">Prix unitaire</th>
            <th class=\"text-end\">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 44), "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            <td><code>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 45), "batchNumber", [], "any", false, false, false, 45), "html", null, true);
        yield "</code></td>
            <td class=\"text-end\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 46), 0, ",", " "), "html", null, true);
        yield "</td>
            <td class=\"text-end\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 47), "unitPrice", [], "any", false, false, false, 47), CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "hmaService", [], "any", false, false, false, 47)), "html", null, true);
        yield "</td>
            <td class=\"text-end fw-bold\">
                ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 49) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 49), "unitPrice", [], "any", false, false, false, 49)), CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "hmaService", [], "any", false, false, false, 49)), "html", null, true);
        yield "
            </td>
        </tr>
    </tbody>
</table>

<div class=\"row mt-4\">
    <div class=\"col-6\">
        <p class=\"mb-1\">
            <strong>Statut :</strong>
            <span class=\"badge ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "statusBadgeClass", [], "any", false, false, false, 59), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "statusLabel", [], "any", false, false, false, 59), "html", null, true);
        yield "</span>
        </p>
        <p class=\"mb-1\"><strong>Créé par :</strong> ";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 61), "fullName", [], "any", false, false, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 61), "fullName", [], "any", false, false, false, 61), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 61), "email", [], "any", false, false, false, 61), "html", null, true)));
        yield "</p>
        ";
        // line 62
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "            <p class=\"mb-1\"><strong>Réceptionné par :</strong> ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 63), "fullName", [], "any", false, false, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 63), "fullName", [], "any", false, false, false, 63), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), "html", null, true)));
            yield "</p>
            <p class=\"mb-1\"><strong>Date de réception :</strong> ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedAt", [], "any", false, false, false, 64), "d/m/Y H:i"), "html", null, true);
            yield "</p>
        ";
        }
        // line 66
        yield "    </div>
    <div class=\"col-6\">
        ";
        // line 68
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "reason", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "            <p class=\"mb-1\"><strong>Raison :</strong></p>
            <p class=\"text-muted\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "reason", [], "any", false, false, false, 70), "html", null, true);
            yield "</p>
        ";
        }
        // line 72
        yield "    </div>
</div>

<div class=\"row mt-5 pt-5\">
    <div class=\"col-6\">
        <p class=\"border-top pt-2 text-center\">Signature expéditeur</p>
    </div>
    <div class=\"col-6\">
        <p class=\"border-top pt-2 text-center\">Signature destinataire</p>
    </div>
</div>

<div class=\"print-footer\">
    Document généré par HMA Market le ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "stock/transfer/print.html.twig";
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
        return array (  204 => 85,  189 => 72,  184 => 70,  181 => 69,  179 => 68,  175 => 66,  170 => 64,  165 => 63,  163 => 62,  159 => 61,  152 => 59,  139 => 49,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  102 => 27,  91 => 19,  77 => 10,  72 => 7,  65 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/transfer/print.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\print.html.twig");
    }
}
