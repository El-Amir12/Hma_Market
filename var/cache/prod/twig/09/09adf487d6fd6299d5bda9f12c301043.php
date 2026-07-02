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

/* admin/category/new.html.twig */
class __TwigTemplate_9a5ac1aefbf3ebecd2d6cb8c14ec5d41 extends Template
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
        yield "Nouvelle Catégorie - HMA Market";
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
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec effets d'animation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary mb-2 btn-hover-scale\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
            </a>
            <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle Catégorie
            </h1>
            <p class=\"text-muted mt-2\">Créez une nouvelle catégorie pour organiser vos produits</p>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-folder-plus fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
    <!-- Formulaire -->
    ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/category/_form.html.twig");
        yield "

    <!-- Info-bulle d'aide -->
    <div class=\"alert alert-info alert-dismissible fade show mt-4\" role=\"alert\">
        <div class=\"d-flex\">
            <div class=\"me-3\">
                <i class=\"fas fa-lightbulb fa-2x text-info\"></i>
            </div>
            <div>
                <h6 class=\"alert-heading mb-1\">
                    <i class=\"fas fa-info-circle me-1\"></i> Conseils pour créer une catégorie
                </h6>
                <ul class=\"mb-0 ps-3 small\">
                    <li>Choisissez un nom clair et descriptif</li>
                    <li>Ajoutez une image représentative si possible</li>
                    <li>Organisez vos catégories en hiérarchie pour une meilleure navigation</li>
                    <li>Les catégories désactivées ne seront pas visibles dans le catalogue</li>
                </ul>
            </div>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
</div>

";
        // line 63
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "<style>
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

.float-up {
    animation: floatUp 3s ease-in-out infinite;
}

@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-hover-scale {
    transition: all 0.2s ease;
}

.btn-hover-scale:hover {
    transform: scale(1.05);
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
        return "admin/category/new.html.twig";
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
        return array (  173 => 64,  162 => 63,  135 => 39,  131 => 37,  121 => 33,  118 => 32,  114 => 31,  111 => 30,  101 => 26,  98 => 25,  94 => 24,  77 => 10,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\new.html.twig");
    }
}
