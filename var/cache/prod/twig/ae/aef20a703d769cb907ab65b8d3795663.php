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

/* admin/product/edit.html.twig */
class __TwigTemplate_9fd2dab43aafe4a0e211246692a76080 extends Template
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
        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
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
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 19)), "truncate", [30], "method", false, false, false, 19), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-edit me-1\"></i> Modifier
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold text-gray-800\">
                <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier le produit
            </h1>
            <p class=\"text-muted mt-2 mb-0\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Modifiez les informations du produit <strong>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong>
            </p>
        </div>
        <div>
            <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-eye me-2\"></i> Voir le produit
            </a>
        </div>
    </div>

    <!-- Message informatif sur la modification du stock (si non admin) -->
    ";
        // line 43
        if ((array_key_exists("canEditStock", $context) &&  !($context["canEditStock"] ?? null))) {
            // line 44
            yield "    <div class=\"alert alert-warning alert-dismissible fade show mb-4\" role=\"alert\">
        <div class=\"d-flex\">
            <div class=\"me-3\">
                <i class=\"fas fa-lock fa-2x\"></i>
            </div>
            <div>
                <strong>⚠️ Modification du stock restreinte</strong><br>
                Seul un administrateur peut modifier le stock initial manuellement. 
                Les managers et responsables stock doivent utiliser les <strong>achats</strong> et les <strong>ventes</strong> pour faire varier le stock.
                <br>
                <small class=\"text-muted\">Contactez votre administrateur pour toute modification exceptionnelle du stock.</small>
            </div>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 60
        yield "
    <!-- Formulaire avec passage de la variable canEditStock -->
    ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/product/_form.html.twig", ["button_label" => "Mettre à jour", "canEditStock" => ((        // line 64
array_key_exists("canEditStock", $context)) ? (Twig\Extension\CoreExtension::default(($context["canEditStock"] ?? null), false)) : (false))]);
        // line 65
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
        return "admin/product/edit.html.twig";
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
        return array (  152 => 65,  150 => 64,  149 => 62,  145 => 60,  127 => 44,  125 => 43,  115 => 36,  108 => 32,  92 => 19,  88 => 18,  80 => 13,  72 => 7,  65 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\edit.html.twig");
    }
}
