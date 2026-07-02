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

/* admin/stock_batch/print.html.twig */
class __TwigTemplate_a0b6fe89e1c55c62f58f922aa75e2f59 extends Template
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
        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Lot ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        @media print {
            body { margin: 0; padding: 20px; }
            .no-print { display: none; }
        }
        .batch-label {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
            font-family: Arial, sans-serif;
        }
        .barcode {
            font-family: 'Courier New', monospace;
            font-size: 24px;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <div class=\"batch-label\">
        <h2>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
        yield "</h2>
        <div class=\"barcode\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 29), "html", null, true);
        yield "</div>
        <p><strong>Emplacement:</strong> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "location", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "location", [], "any", false, false, false, 30), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
        <p><strong>Quantité:</strong> ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 31), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
        <p><strong>Expiration:</strong> ";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</p>
        <div class=\"no-print\">
            <button onclick=\"window.print()\">Imprimer</button>
            <button onclick=\"window.close()\">Fermer</button>
        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/stock_batch/print.html.twig";
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
        return array (  91 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/print.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\print.html.twig");
    }
}
