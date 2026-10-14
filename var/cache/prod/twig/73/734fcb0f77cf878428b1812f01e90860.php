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

/* stock/adjustment/show.html.twig */
class __TwigTemplate_64d9e01351073c3892749d2b2b47f138 extends Template
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
        yield "Détail ajustement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
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
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Tableau de bord</a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\">Ajustements</a>
                    </li>
                    <li class=\"breadcrumb-item active\">#";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Détail de l'ajustement
            </h1>
        </div>
        <div>
            <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                            Informations
                        </h5>
                        <span class=\"badge ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "typeBadgeClass", [], "any", false, false, false, 42), "html", null, true);
        yield " fs-6\">
                            <i class=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "typeIcon", [], "any", false, false, false, 43), "html", null, true);
        yield " me-1\"></i>
                            ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "typeLabel", [], "any", false, false, false, 44), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Date</small>
                                <div class=\"fw-bold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "createdAt", [], "any", false, false, false, 53), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Quantité</small>
                                <div class=\"fw-bold ";
        // line 59
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "type", [], "any", false, false, false, 59) == "in")) ? ("text-success") : ("text-danger"));
        yield "\">
                                    ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "type", [], "any", false, false, false, 60) == "in")) ? ("+") : ("-"));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "quantity", [], "any", false, false, false, 60), 0, ",", " "), "html", null, true);
        yield " unité(s)
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Raison</small>
                                <div class=\"fw-bold\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "reason", [], "any", false, false, false, 67), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Utilisateur</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-user me-1\"></i>
                                    ";
        // line 75
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "createdBy", [], "any", false, false, false, 75), "fullName", [], "any", false, false, false, 75)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "createdBy", [], "any", false, false, false, 75), "fullName", [], "any", false, false, false, 75), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "createdBy", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75), "html", null, true)));
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 81
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "justificationFile", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                            ";
            $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "justificationFile", [], "any", false, false, false, 82), "/");
            // line 83
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["parts"] ?? null)) >= 3)) {
                // line 84
                yield "                                ";
                $context["filename"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["parts"] ?? null), 2), "/");
                // line 85
                yield "                                <div class=\"col-12\">
                                    <div class=\"border-bottom pb-2\">
                                        <small class=\"text-muted\">Justificatif</small>
                                        <div class=\"mt-2\">
                                            <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_upload", ["folder" => (($_v0 =                 // line 90
($context["parts"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "companyId" => (($_v1 =                 // line 91
($context["parts"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null), "filename" =>                 // line 92
($context["filename"] ?? null)]), "html", null, true);
                // line 93
                yield "\" 
                                               target=\"_blank\" 
                                               class=\"btn btn-sm btn-outline-info\">
                                                <i class=\"fas fa-paperclip me-1\"></i>
                                                Voir le justificatif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 103
            yield "                        ";
        }
        // line 104
        yield "                    </div>
                </div>
            </div>

            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">N° lot</small>
                                <div class=\"fw-bold\"><code>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "stockBatch", [], "any", false, false, false, 120), "batchNumber", [], "any", false, false, false, 120), "html", null, true);
        yield "</code></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Produit</small>
                                <div class=\"fw-bold\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "stockBatch", [], "any", false, false, false, 126), "product", [], "any", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Code-barres</small>
                                <div class=\"fw-bold\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "stockBatch", [], "any", false, false, false, 132), "product", [], "any", false, false, false, 132), "barcode", [], "any", false, false, false, 132), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Nouveau stock</small>
                                <div class=\"fw-bold\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adjustment"] ?? null), "stockBatch", [], "any", false, false, false, 138), "currentQuantity", [], "any", false, false, false, 138), 0, ",", " "), "html", null, true);
        yield " unités</div>
                            </div>
                        </div>
                    </div>
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
        return "stock/adjustment/show.html.twig";
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
        return array (  266 => 138,  257 => 132,  248 => 126,  239 => 120,  221 => 104,  218 => 103,  206 => 93,  204 => 92,  203 => 91,  202 => 90,  201 => 89,  195 => 85,  192 => 84,  189 => 83,  186 => 82,  183 => 81,  175 => 75,  164 => 67,  153 => 60,  149 => 59,  140 => 53,  128 => 44,  124 => 43,  120 => 42,  102 => 27,  90 => 18,  85 => 16,  79 => 13,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/adjustment/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\adjustment\\show.html.twig");
    }
}
