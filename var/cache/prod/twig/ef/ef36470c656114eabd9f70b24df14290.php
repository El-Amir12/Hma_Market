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

/* admin/supplier/new.html.twig */
class __TwigTemplate_939ba8f456260cd86142e54420cace69 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        yield "Nouveau Fournisseur - HMA Market";
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
        yield "<div class=\"container-fluid px-3 px-md-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3 mb-md-4 gap-3\">
        <div class=\"w-100\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-2\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-truck me-1\"></i> Fournisseurs
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouveau</li>
                </ol>
            </nav>
            <h1 class=\"h4 h-md-3 mb-1 text-gray-800\">
                <i class=\"fas fa-plus-circle text-primary me-2\"></i> Nouveau Fournisseur
            </h1>
            <p class=\"text-muted mb-0 small\">Ajoutez un nouveau fournisseur</p>
        </div>
        <div class=\"float-animation d-none d-md-block flex-shrink-0\">
            <i class=\"fas fa-truck fa-3x text-primary opacity-50\"></i>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
    <!-- Formulaire -->
    ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/supplier/_form.html.twig");
        yield "
</div>
";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* ============================================
       STYLES COMMUNS AUX FORMULAIRES FOURNISSEURS
       ============================================ */
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }

    .card-hover {
        transition: all 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
    }

    .card-hover:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }

    /* Form floating */
    .form-floating > label {
        padding-left: 2.5rem;
    }

    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3.5rem + 2px);
        line-height: 1.25;
        padding: 1rem 0.75rem 0.5rem 2.5rem;
        border-radius: 10px;
        border: 2px solid #e0e0e0;
    }

    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }

    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
        color: #667eea;
    }

    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }

    .btn-outline-secondary:hover,
    .btn-info:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* ============================================
       ✅ BOUTONS D'ACTION RESPONSIVE
       ============================================ */
    .action-buttons-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        justify-content: center;
    }

    /* Mobile (< 576px) : boutons empilés en colonne, ordre logique */
    @media (max-width: 575.98px) {
        .action-buttons-wrapper {
            flex-direction: column;
        }

        .action-buttons-wrapper .btn-action {
            width: 100%;
            padding: 0.65rem 1rem;
            font-size: 0.9rem;
        }

        /* Enregistrer en 1er (action principale) */
        .action-buttons-wrapper .btn-action-primary {
            order: -1;
        }
    }

    /* Tablette (576px - 767px) : boutons côte à côte, largeur auto */
    @media (min-width: 576px) and (max-width: 767.98px) {
        .action-buttons-wrapper {
            flex-direction: row;
            justify-content: space-between;
        }

        .action-buttons-wrapper .btn-action {
            flex: 1;
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
        }
    }

    /* Desktop (≥ 768px) : Annuler + Voir à gauche, Enregistrer à droite */
    @media (min-width: 768px) {
        .action-buttons-wrapper {
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: nowrap;
        }

        /* Les boutons secondaires groupés à gauche */
        .action-buttons-wrapper .btn-action:not(.btn-action-primary) {
            flex: 0 0 auto;
        }

        /* Le bouton principal à droite */
        .action-buttons-wrapper .btn-action-primary {
            margin-left: auto;
            flex: 0 0 auto;
        }
    }

    /* Icône + texte : espacement adapté sur mobile */
    @media (max-width: 575.98px) {
        .btn-action i {
            margin-right: 0.5rem !important;
        }
    }

    /* Animation flottante (desktop) */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .float-animation {
        animation: float 3s ease-in-out infinite;
    }

    /* Container mobile padding */
    @media (max-width: 575.98px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
    }
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/supplier/new.html.twig";
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
        return array (  155 => 51,  148 => 50,  140 => 46,  136 => 44,  126 => 40,  123 => 39,  118 => 38,  108 => 34,  105 => 33,  101 => 32,  80 => 14,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/supplier/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\new.html.twig");
    }
}
