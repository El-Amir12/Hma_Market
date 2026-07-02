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
class __TwigTemplate_f80dd5889c24c4e90364737d8957c266 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/receive.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/receive.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Réceptionner transfert - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 4, $this->source); })()), "transferNumber", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 56, $this->source); })()), "transferNumber", [], "any", false, false, false, 56), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-md-6\">
                                <small class=\"text-muted\">Quantité</small>
                                <div class=\"fw-bold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 60, $this->source); })()), "quantity", [], "any", false, false, false, 60), 0, ",", " "), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 72, $this->source); })()), "sourceLocation", [], "any", false, false, false, 72), "displayName", [], "any", false, false, false, 72), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 82, $this->source); })()), "destinationLocation", [], "any", false, false, false, 82), "displayName", [], "any", false, false, false, 82), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 95, $this->source); })()), "stockBatch", [], "any", false, false, false, 95), "product", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"col-md-6\">
                                    <small class=\"text-muted\">N° lot</small>
                                    <div class=\"fw-bold\"><code>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 99, $this->source); })()), "stockBatch", [], "any", false, false, false, 99), "batchNumber", [], "any", false, false, false, 99), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118)]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  244 => 118,  237 => 114,  219 => 99,  212 => 95,  196 => 82,  183 => 72,  168 => 60,  161 => 56,  137 => 35,  117 => 18,  109 => 13,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/transfer/receive.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Réceptionner transfert - {{ transfer.transferNumber }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"text-decoration-none\">
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
            <a href=\"{{ path('app_stock_transfer_show', {'id': transfer.id}) }}\" class=\"btn btn-outline-secondary\">
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
                                <div class=\"fw-bold\">{{ transfer.transferNumber }}</div>
                            </div>
                            <div class=\"col-md-6\">
                                <small class=\"text-muted\">Quantité</small>
                                <div class=\"fw-bold\">{{ transfer.quantity|number_format(0, ',', ' ') }} unités</div>
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
                                    <p class=\"mb-0\">{{ transfer.sourceLocation.displayName }}</p>
                                    <small class=\"text-muted\">Stock déduit à l'expédition</small>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card bg-light border-0\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-map-marker-alt fa-2x text-primary mb-2\"></i>
                                    <h6 class=\"mb-0\">Emplacement destination</h6>
                                    <p class=\"mb-0\">{{ transfer.destinationLocation.displayName }}</p>
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
                                    <div class=\"fw-bold\">{{ transfer.stockBatch.product.name }}</div>
                                </div>
                                <div class=\"col-md-6\">
                                    <small class=\"text-muted\">N° lot</small>
                                    <div class=\"fw-bold\"><code>{{ transfer.stockBatch.batchNumber }}</code></div>
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
                            <input type=\"text\" class=\"form-control\" value=\"{{ \"now\"|date('d/m/Y H:i:s') }}\" readonly>
                        </div>

                        <div class=\"d-flex justify-content-end gap-2 mt-4 pt-3 border-top\">
                            <a href=\"{{ path('app_stock_transfer_show', {'id': transfer.id}) }}\" class=\"btn btn-outline-secondary\">
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
{% endblock %}", "stock/transfer/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\receive.html.twig");
    }
}
