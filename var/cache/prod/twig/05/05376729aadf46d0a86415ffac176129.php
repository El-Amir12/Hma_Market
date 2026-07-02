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

/* stock/transfer/receive.html.twig */
class __TwigTemplate_9f74e50085b4922c6cbfbf39143fdd91 extends Template
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
        yield "Réceptionner transfert - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 4), "html", null, true);
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
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Réception</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-check-circle text-success me-2\"></i>
                Réceptionner le transfert
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Confirmez la réception des marchandises
            </p>
        </div>
        <div>
            <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-clipboard-list me-2 text-primary\"></i>
                        Confirmation de réception
                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Informations du transfert -->
                    <div class=\"alert alert-info\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <small class=\"text-muted\">N° transfert</small>
                                <div class=\"fw-bold\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 56), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-md-6\">
                                <small class=\"text-muted\">Quantité</small>
                                <div class=\"fw-bold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 60), 0, ",", " "), "html", null, true);
        yield " unités</div>
                            </div>
                        </div>
                    </div>

                    <!-- Détails du transfert -->
                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card bg-light border-0\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-map-marker-alt fa-2x text-success mb-2\"></i>
                                    <h6 class=\"mb-0\">Emplacement source</h6>
                                    <p class=\"mb-0\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "sourceLocation", [], "any", false, false, false, 72), "displayName", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
                                    <small class=\"text-muted\">Stock déduit à l'expédition</small>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card bg-light border-0\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-map-marker-alt fa-2x text-primary mb-2\"></i>
                                    <h6 class=\"mb-0\">Emplacement destination</h6>
                                    <p class=\"mb-0\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "destinationLocation", [], "any", false, false, false, 82), "displayName", [], "any", false, false, false, 82), "html", null, true);
        yield "</p>
                                    <small class=\"text-muted\">Stock sera ajouté à la réception</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Produit concerné -->
                    <div class=\"card bg-light border-0 mb-4\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <small class=\"text-muted\">Produit</small>
                                    <div class=\"fw-bold\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 95), "product", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"col-md-6\">
                                    <small class=\"text-muted\">N° lot</small>
                                    <div class=\"fw-bold\"><code>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 99), "batchNumber", [], "any", false, false, false, 99), "html", null, true);
        yield "</code></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire de réception -->
                    <form method=\"post\" id=\"receiveForm\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            <strong>Attention :</strong> Cette action est irréversible. Une fois réceptionné, le transfert sera marqué comme terminé.
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Date de réception</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i:s"), "html", null, true);
        yield "\" readonly>
                        </div>

                        <div class=\"d-flex justify-content-end gap-2 mt-4 pt-3 border-top\">
                            <a href=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 118)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-times me-1\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-success\" onclick=\"return confirm('Confirmez-vous la réception de ce transfert ? Cette action est irréversible.')\">
                                <i class=\"fas fa-check-circle me-1\"></i> Confirmer la réception
                            </button>
                        </div>
                    </form>
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
        return "stock/transfer/receive.html.twig";
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
        return array (  214 => 118,  207 => 114,  189 => 99,  182 => 95,  166 => 82,  153 => 72,  138 => 60,  131 => 56,  107 => 35,  87 => 18,  79 => 13,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/transfer/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\receive.html.twig");
    }
}
