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

/* admin/Location/edit.html.twig */
class __TwigTemplate_5163552d615bcfde3beaf3a7796b54a9 extends Template
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
        yield "Modifier l'emplacement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
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
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-edit me-1\"></i> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-edit me-2 text-warning\"></i>
                Modifier l'emplacement
            </h1>
            <p class=\"text-muted mt-1\">
                Modifiez les informations de l'emplacement
            </p>
        </div>
        <div class=\"btn-group\">
            ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "stockBatches", [], "any", false, false, false, 31)) == 0)) {
            // line 32
            yield "                <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            ";
        }
        // line 36
        yield "        </div>
    </div>

    ";
        // line 39
        yield from $this->load("admin/location/_form.html.twig", 39)->unwrap()->yield(CoreExtension::toArray(["form" =>         // line 40
($context["form"] ?? null), "location" =>         // line 41
($context["location"] ?? null), "button_label" => "Mettre à jour"]));
        // line 44
        yield "</div>

<!-- Modal suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer l'emplacement <strong>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
        yield "</strong> ?</p>
                ";
        // line 58
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "code", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                    <p><small class=\"text-muted\">Code: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "code", [], "any", false, false, false, 59), "html", null, true);
            yield "</small></p>
                ";
        }
        // line 61
        yield "                <p class=\"text-danger mb-0\">⚠️ Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" action=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 65)]), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 66))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
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
        return "admin/Location/edit.html.twig";
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
        return array (  157 => 66,  153 => 65,  147 => 61,  141 => 59,  139 => 58,  135 => 57,  120 => 44,  118 => 41,  117 => 40,  116 => 39,  111 => 36,  105 => 32,  103 => 31,  87 => 18,  79 => 13,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/Location/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\Location\\edit.html.twig");
    }
}
