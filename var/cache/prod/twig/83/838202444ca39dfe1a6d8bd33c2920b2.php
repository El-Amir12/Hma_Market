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

/* purchase/edit.html.twig */
class __TwigTemplate_c2bbffbd6919dfce475ff248df198dee extends Template
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
        yield "Modifier la commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 3), "html", null, true);
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
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <div>
                    <h1><i class=\"fas fa-edit\"></i> Modifier la commande</h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\">Achats</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\">
                                ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 16), "html", null, true);
        yield "
                            </a></li>
                            <li class=\"breadcrumb-item active\">Modifier</li>
                        </ol>
                    </nav>
                </div>
                <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 22)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>

            <div class=\"card\">
                <div class=\"card-header bg-warning text-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-edit\"></i> Modifier les informations</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                    
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchase_number", [], "any", false, false, false, 36), 'label');
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchase_number", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchase_number", [], "any", false, false, false, 38), 'errors');
        yield "
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supplier", [], "any", false, false, false, 42), 'label');
        yield "
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supplier", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supplier", [], "any", false, false, false, 44), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 49), 'label');
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 51), 'errors');
        yield "
                    </div>
                    
                    <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                        <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\" class=\"btn btn-secondary me-md-2\">
                            <i class=\"fas fa-times\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-warning\">
                            <i class=\"fas fa-save\"></i> Enregistrer les modifications
                        </button>
                    </div>
                    
                    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
            
            ";
        // line 67
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "canEdit", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "                <div class=\"alert alert-warning mt-3\">
                    <i class=\"fas fa-exclamation-triangle\"></i> 
                    Cette commande ne peut normalement plus être modifiée car son statut est \"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "status", [], "any", false, false, false, 70), "html", null, true);
            yield "\". 
                    En tant qu'administrateur, vous pouvez toujours la modifier.
                </div>
            ";
        }
        // line 74
        yield "        </div>
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
        return "purchase/edit.html.twig";
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
        return array (  195 => 74,  188 => 70,  184 => 68,  182 => 67,  175 => 63,  164 => 55,  157 => 51,  153 => 50,  149 => 49,  141 => 44,  137 => 43,  133 => 42,  126 => 38,  122 => 37,  118 => 36,  111 => 32,  98 => 22,  89 => 16,  85 => 15,  81 => 14,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "purchase/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\edit.html.twig");
    }
}
