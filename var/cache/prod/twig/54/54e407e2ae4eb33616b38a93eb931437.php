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

/* super_admin/subscription_plan/edit.html.twig */
class __TwigTemplate_da623f276e6c7c8e0912ed6c8f9898a7 extends Template
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
        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 3), "html", null, true);
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
        yield "<div class=\"container-fluid px-4 py-5\">
    <!-- En-tête moderne -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-5 shadow-lg p-5 text-white\" style=\"background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);\">
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                            <i class=\"bi bi-pencil-square text-white display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-5 fw-bold mb-2\">Modifier : ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 17), "html", null, true);
        yield "</h1>
                            <p class=\"text-white-50 mb-0 fs-5\">Mettez à jour les caractéristiques de ce plan</p>
                        </div>
                    </div>
                </div>
                <!-- Vague décorative en bas -->
                <div class=\"wave-bottom position-absolute bottom-0 start-0 end-0\">
                    <svg viewBox=\"0 0 1440 120\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z\" fill=\"white\" fill-opacity=\"0.2\"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 34
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-4 shadow-sm mb-4\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-";
                // line 37
                yield ((($context["label"] == "success")) ? ("check-circle-fill") : ("exclamation-triangle-fill"));
                yield " fs-4 me-3\"></i>
                    <span>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
    <!-- Formulaire -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card border-0 shadow-lg rounded-5\">
                <div class=\"card-body p-5\">
                    ";
        // line 50
        yield from $this->load("super_admin/subscription_plan/_form.html.twig", 50)->unwrap()->yield(CoreExtension::merge($context, ["button_label" => "Mettre à jour"]));
        // line 51
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles complémentaires -->
<style>
.modern-header {
    min-height: 220px;
}
.icon-wrapper {
    backdrop-filter: blur(8px);
    transition: transform 0.3s ease;
}
.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}
.wave-bottom svg {
    width: 100%;
    height: auto;
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
        return "super_admin/subscription_plan/edit.html.twig";
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
        return array (  149 => 51,  147 => 50,  139 => 44,  133 => 43,  122 => 38,  118 => 37,  112 => 35,  107 => 34,  103 => 33,  84 => 17,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/subscription_plan/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\edit.html.twig");
    }
}
