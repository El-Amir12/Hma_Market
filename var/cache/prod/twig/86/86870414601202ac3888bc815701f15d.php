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

/* super_admin/analysis_price/edit.html.twig */
class __TwigTemplate_dc886244e6010e8344d421708c1a089c extends Template
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
        yield "Modifier le prix - Super Admin";
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
<style>
    .form-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
    }
    .form-header {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }
    .form-group-custom {
        margin-bottom: 1.5rem;
    }
    .form-group-custom label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #1e293b;
    }
    .form-group-custom .form-control,
    .form-group-custom .form-select {
        border-radius: 0.75rem;
        border: 1px solid #e2e8f0;
        padding: 0.75rem 1rem;
        transition: all 0.2s ease;
    }
    .form-group-custom .form-control:focus,
    .form-group-custom .form-select:focus {
        border-color: #f59e0b;
        box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
    }
    .price-preview {
        background: linear-gradient(135deg, #fef3c7 0%, #fffbeb 100%);
        border-radius: 1rem;
        padding: 1rem;
        margin-top: 1rem;
        text-align: center;
    }
    .price-preview-value {
        font-size: 2rem;
        font-weight: bold;
        color: #d97706;
    }
    .info-badge {
        background: #fef3c7;
        color: #b45309;
        padding: 0.5rem 1rem;
        border-radius: 0.75rem;
        font-size: 0.8rem;
        margin-bottom: 1rem;
    }
    .btn-custom {
        padding: 0.75rem 1.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .btn-custom-primary {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border: none;
        color: white;
    }
    .btn-custom-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
    }
    .btn-custom-secondary {
        background: #f1f5f9;
        border: none;
        color: #475569;
    }
    .btn-custom-secondary:hover {
        background: #e2e8f0;
        transform: translateY(-1px);
    }
</style>
";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-7\">
            <div class=\"form-card shadow-sm\">
                <div class=\"form-header p-4 text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <i class=\"fas fa-edit fa-2x mb-2\"></i>
                            <h2 class=\"h4 mb-0 fw-bold\">Modifier le prix</h2>
                            <p class=\"mb-0 opacity-75 mt-1\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "label", [], "any", false, false, false, 94), "html", null, true);
        yield "</p>
                        </div>
                        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_index");
        yield "\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour
                        </a>
                    </div>
                </div>
                
                <div class=\"p-4\">
                    <div class=\"info-badge\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        <strong>Information :</strong> Les modifications seront immédiatement visibles par les utilisateurs.
                    </div>
                    
                    ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "priceForm"]]);
        yield "
                    
                    ";
        // line 110
        yield from $this->load("super_admin/analysis_price/_form.html.twig", 110)->unwrap()->yield($context);
        // line 111
        yield "                    
                    <hr class=\"my-4\">
                    
                    <div class=\"d-flex justify-content-end gap-2\">
                        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_index");
        yield "\" class=\"btn btn-custom btn-custom-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-custom btn-custom-primary\" id=\"submitBtn\">
                            <i class=\"fas fa-save me-1\"></i> Enregistrer
                        </button>
                    </div>
                    
                    ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
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
        return "super_admin/analysis_price/edit.html.twig";
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
        return array (  214 => 123,  203 => 115,  197 => 111,  195 => 110,  190 => 108,  175 => 96,  170 => 94,  159 => 85,  152 => 84,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/analysis_price/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\edit.html.twig");
    }
}
