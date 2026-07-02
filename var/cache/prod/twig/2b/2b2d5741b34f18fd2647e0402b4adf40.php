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

/* marketplace/pharmacy/_filters.html.twig */
class __TwigTemplate_4ea97f3de68621b91b679ff2161d1b0c extends Template
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
        yield "
<style>
    .filters-container {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid var(--gray-200);
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .filters-container .filter-group {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        align-items: flex-end;
    }

    .filters-container .filter-item {
        flex: 1;
        min-width: 180px;
    }

    .filter-item label {
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 0.3rem;
        display: block;
        color: var(--dark-color);
    }

    .filter-item label i {
        color: var(--primary-color);
    }

    .filter-item .form-select,
    .filter-item .form-control {
        border-radius: 12px;
        border: 2px solid var(--gray-200);
        padding: 0.6rem 1rem;
        height: 48px;
        transition: all 0.3s ease;
        background-color: white;
    }

    .filter-item .form-control:focus,
    .filter-item .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.08);
        outline: none;
    }

    .filter-item .form-control::placeholder {
        color: #94a3b8;
        font-size: 0.9rem;
    }

    .pharmacy-select-container {
        display: none;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid var(--gray-200);
    }

    .pharmacy-select-container.visible {
        display: block;
    }

    .filter-actions {
        display: flex;
        gap: 0.75rem;
        align-items: flex-end;
        flex-wrap: wrap;
    }

    .filter-actions .btn {
        border-radius: 12px;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        height: 48px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filter-actions .btn-primary {
        background: var(--primary-color);
        border: 2px solid var(--primary-color);
        color: white;
    }

    .filter-actions .btn-primary:hover {
        background: #0355d4;
        border-color: #0355d4;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
    }

    .filter-actions .btn-outline-secondary {
        background: white;
        border: 2px solid var(--gray-200);
        color: var(--gray-500);
    }

    .filter-actions .btn-outline-secondary:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .filters-container { padding: 1rem; }
        .filters-container .filter-group { flex-direction: column; }
        .filter-item { min-width: 100%; }
        .filter-actions { width: 100%; }
        .filter-actions .btn { flex: 1; justify-content: center; }
    }
</style>

<div class=\"filters-container\">
    <form method=\"get\" id=\"filterForm\" class=\"filter-group\">
        <input type=\"hidden\" name=\"mode\" value=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mode"] ?? null), "html", null, true);
        yield "\">
        
        <div class=\"filter-item\">
            <label for=\"countrySelect\">
                <i class=\"fas fa-globe text-primary me-1\"></i> Pays
            </label>
            <select id=\"countrySelect\" class=\"form-select select2\">
                <option value=\"\">-- Sélectionnez un pays --</option>
            </select>
        </div>
        
        <div class=\"filter-item\">
            <label for=\"citySelect\">
                <i class=\"fas fa-city text-primary me-1\"></i> Ville
            </label>
            <select id=\"citySelect\" class=\"form-select select2\" disabled>
                <option value=\"\">-- Sélectionnez une ville --</option>
            </select>
        </div>

        ";
        // line 143
        if ((($context["mode"] ?? null) == "pharmacy")) {
            // line 144
            yield "        <div class=\"filter-item\">
            <label for=\"searchPharmacyInput\">
                <i class=\"fas fa-search text-primary me-1\"></i> Rechercher
            </label>
            <input type=\"text\" id=\"searchPharmacyInput\" class=\"form-control\" 
                   placeholder=\"Nom de la pharmacie...\" 
                   value=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : ("")), "html", null, true);
            yield "\">
        </div>
        ";
        }
        // line 153
        yield "
        <div class=\"filter-actions\">
            <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-check\"></i> Appliquer
            </button>
            <button type=\"button\" id=\"clearFiltersBtn\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-eraser\"></i> Effacer
            </button>
        </div>
    </form>

    ";
        // line 165
        yield "    <div id=\"pharmacySelector\" class=\"pharmacy-select-container ";
        if (((($context["mode"] ?? null) == "product") && ($context["selectedCity"] ?? null))) {
            yield "visible";
        }
        yield "\">
        <div class=\"filter-group\" style=\"margin-top: 0;\">
            <div class=\"filter-item\" style=\"flex: 1;\">
                <label for=\"pharmacySelect\">
                    <i class=\"fas fa-store text-primary me-1\"></i> Pharmacie
                </label>
                <select id=\"pharmacySelect\" class=\"form-select select2\" ";
        // line 171
        if ((($tmp =  !($context["selectedCity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                    <option value=\"\">-- Sélectionnez une pharmacie --</option>
                    ";
        // line 173
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pharmacies"] ?? null)) > 0)) {
            // line 174
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pharmacies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                // line 175
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "id", [], "any", false, false, false, 175), "html", null, true);
                yield "\" ";
                if ((($context["selectedPharmacy"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "id", [], "any", false, false, false, 175))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "name", [], "any", false, false, false, 176), "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pharmacy'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "                    ";
        }
        // line 180
        yield "                </select>
            </div>
        </div>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_filters.html.twig";
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
        return array (  264 => 180,  261 => 179,  252 => 176,  243 => 175,  238 => 174,  236 => 173,  229 => 171,  217 => 165,  204 => 153,  198 => 150,  190 => 144,  188 => 143,  165 => 123,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_filters.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_filters.html.twig");
    }
}
