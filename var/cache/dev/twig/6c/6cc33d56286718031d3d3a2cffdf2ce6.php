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

/* purchase/show.html.twig */
class __TwigTemplate_1d0dfe7be79f0117b3b2a5a9e45a7bd6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/show.html.twig"));

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

        yield "Commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 4, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .stat-card {
        border-radius: 1rem;
        transition: all 0.2s ease;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .timeline-item {
        position: relative;
        padding-left: 2rem;
        padding-bottom: 1.5rem;
        border-left: 2px solid #e9ecef;
    }
    .timeline-item:last-child {
        border-left: 2px solid transparent;
    }
    .timeline-icon {
        position: absolute;
        left: -0.75rem;
        top: 0;
        width: 2rem;
        height: 2rem;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .timeline-icon i {
        font-size: 1rem;
    }
    .user-avatar-md {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        object-fit: cover;
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .user-avatar-md i {
        font-size: 2rem;
        color: #6c757d;
    }
    .badge-status {
        font-size: 0.85rem;
        padding: 0.35rem 0.75rem;
        border-radius: 2rem;
    }
    .btn-pdf {
        padding: 0.3rem 0.75rem;
        font-size: 0.8rem;
    }
    .table-product-img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 8px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- En‑tête -->
            <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
                <div>
                    <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                        <i class=\"fas fa-receipt text-primary me-2\"></i>
                        Commande ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 83, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 83), "html", null, true);
        yield "
                    </h1>
                    <p class=\"text-muted\">
                        Créée le ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 86, $this->source); })()), "createdAt", [], "any", false, false, false, 86), "d/m/Y à H:i"), "html", null, true);
        yield "
                    </p>
                </div>
                <div class=\"d-flex gap-2\">
                    ";
        // line 90
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 90, $this->source); })()), "bonCommande", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bons-commande/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 91, $this->source); })()), "bonCommande", [], "any", false, false, false, 91))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                            <i class=\"fas fa-file-pdf me-1\"></i> Bon de commande
                        </a>
                    ";
        }
        // line 95
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 95, $this->source); })()), "recuAchat", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recus-achat/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 96, $this->source); })()), "recuAchat", [], "any", false, false, false, 96))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                            <i class=\"fas fa-file-pdf me-1\"></i> Reçu d'achat
                        </a>
                    ";
        }
        // line 100
        yield "                    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\" target=\"_blank\">
                        <i class=\"fas fa-print me-1\"></i> Imprimer
                    </a>
                    ";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103) == "confirmed")) {
            // line 104
            yield "                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler la commande
                        </button>
                    ";
        }
        // line 108
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </a>
                </div>
            </div>

            <!-- Cartes info -->
            <div class=\"row g-4 mb-4\">
                <!-- Carte informations générales -->
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card shadow-sm stat-card h-100 border-0\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <h5 class=\"card-title mb-0\">
                                    <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations
                                </h5>
                                <span class=\"badge ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 124, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 124), "html", null, true);
        yield " badge-status\">
                                    <i class=\"fas ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 125, $this->source); })()), "statusIcon", [], "any", false, false, false, 125), "html", null, true);
        yield " me-1\"></i>
                                    ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 126, $this->source); })()), "statusLabel", [], "any", false, false, false, 126), "html", null, true);
        yield "
                                </span>
                            </div>
                            <table class=\"table table-sm table-borderless\">
                                <tr>
                                    <td class=\"text-muted\">N° commande</td>
                                    <td class=\"fw-bold\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 132, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 132), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted\">Date création</td>
                                    <td>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 136, $this->source); })()), "createdAt", [], "any", false, false, false, 136), "d/m/Y H:i"), "html", null, true);
        yield "</td>
                                </tr>
                                ";
        // line 138
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 138, $this->source); })()), "confirmedAt", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "                                <tr>
                                    <td class=\"text-muted\">Date confirmation</td>
                                    <td>";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 141, $this->source); })()), "confirmedAt", [], "any", false, false, false, 141), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        // line 144
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 144, $this->source); })()), "receivedAt", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                                <tr>
                                    <td class=\"text-muted\">Date réception</td>
                                    <td>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 147, $this->source); })()), "receivedAt", [], "any", false, false, false, 147), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        // line 150
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 150, $this->source); })()), "cancelledAt", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "                                <tr>
                                    <td class=\"text-muted\">Date annulation</td>
                                    <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 153, $this->source); })()), "cancelledAt", [], "any", false, false, false, 153), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted\">Motif annulation</td>
                                    <td class=\"text-danger\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 157, $this->source); })()), "cancellationReason", [], "any", false, false, false, 157), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        // line 160
        yield "                            </table>
                        </div>
                    </div>
                </div>

                <!-- Carte fournisseur -->
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card shadow-sm stat-card h-100 border-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title mb-3\">
                                <i class=\"fas fa-truck text-primary me-2\"></i>Fournisseur
                            </h5>
                            ";
        // line 172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 172, $this->source); })()), "supplier", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                                <h6 class=\"mb-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 173, $this->source); })()), "supplier", [], "any", false, false, false, 173), "name", [], "any", false, false, false, 173), "html", null, true);
            yield "</h6>
                                <p class=\"text-muted mb-2\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 174, $this->source); })()), "supplier", [], "any", false, false, false, 174), "contactPerson", [], "any", false, false, false, 174), "html", null, true);
            yield "</p>
                                <p class=\"mb-1\"><i class=\"fas fa-phone-alt me-2 text-muted\"></i> ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 175, $this->source); })()), "supplier", [], "any", false, false, false, 175), "phone", [], "any", false, false, false, 175), "html", null, true);
            yield "</p>
                                <p class=\"mb-1\"><i class=\"fas fa-envelope me-2 text-muted\"></i> ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 176, $this->source); })()), "supplier", [], "any", false, false, false, 176), "email", [], "any", false, false, false, 176), "html", null, true);
            yield "</p>
                                <p class=\"mb-0\"><i class=\"fas fa-map-marker-alt me-2 text-muted\"></i> ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 177, $this->source); })()), "supplier", [], "any", false, false, false, 177), "adress", [], "any", false, false, false, 177), "html", null, true);
            yield "</p>
                            ";
        } else {
            // line 179
            yield "                                <p class=\"text-muted\">Aucun fournisseur renseigné</p>
                            ";
        }
        // line 181
        yield "                        </div>
                    </div>
                </div>

                <!-- Carte utilisateur créateur + total -->
                <div class=\"col-md-12 col-lg-4\">
                    <div class=\"card shadow-sm stat-card h-100 border-0\">
                        <div class=\"card-body\">
                            <div class=\"row g-3\">
                                <div class=\"col-12\">
                                    <h5 class=\"card-title mb-3\">
                                        <i class=\"fas fa-user-circle text-primary me-2\"></i>Créée par
                                    </h5>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar-md me-3\">
                                            ";
        // line 196
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196), "photo", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197), "photo", [], "any", false, false, false, 197))), "html", null, true);
            yield "\" 
                                                     alt=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 198, $this->source); })()), "user", [], "any", false, false, false, 198), "fullName", [], "any", false, false, false, 198), "html", null, true);
            yield "\"
                                                     class=\"w-100 h-100 rounded-circle object-fit-cover\">
                                            ";
        } else {
            // line 201
            yield "                                                <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center w-100 h-100\">
                                                    <i class=\"fas fa-user-circle fa-2x text-secondary\"></i>
                                                </div>
                                            ";
        }
        // line 205
        yield "                                        </div>
                                        <div>
                                            <div class=\"fw-bold\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 207, $this->source); })()), "user", [], "any", false, false, false, 207), "fullName", [], "any", false, false, false, 207), "html", null, true);
        yield "</div>
                                            <div class=\"small text-muted\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 208, $this->source); })()), "user", [], "any", false, false, false, 208), "email", [], "any", false, false, false, 208), "html", null, true);
        yield "</div>
                                            <div class=\"small text-muted\">";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 209, $this->source); })()), "user", [], "any", false, false, false, 209), "phone", [], "any", false, false, false, 209), "html", null, true);
        yield "</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 mt-3\">
                                    <hr>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"text-muted\">Total commande</span>
                                        <h3 class=\"mb-0 text-primary fw-bold\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 217, $this->source); })()), "totalAmount", [], "any", false, false, false, 217), 0, ",", " "), "html", null, true);
        yield " FCFA</h3>
                                    </div>
                                    <div class=\"text-muted small mt-1\">
                                        ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 220, $this->source); })()), "purchaseItems", [], "any", false, false, false, 220)), "html", null, true);
        yield " produit(s) commandé(s)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline des statuts -->
            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-history me-2\"></i>Historique des statuts</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"timeline\">
                                ";
        // line 238
        $context["statusHistory"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 238, $this->source); })()), "statusHistory", [], "any", false, false, false, 238);
        // line 239
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusHistory"]) || array_key_exists("statusHistory", $context) ? $context["statusHistory"] : (function () { throw new RuntimeError('Variable "statusHistory" does not exist.', 239, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 240
            yield "                                    <div class=\"timeline-item\">
                                        <div class=\"timeline-icon bg-white border border-";
            // line 241
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 241) == "Création")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 241) == "Confirmation")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 241) == "Réception")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 241) == "Annulation")) ? ("danger") : ("secondary"))))))));
            yield "\">
                                            <i class=\"fas ";
            // line 242
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Création")) ? ("fa-plus-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Confirmation")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Réception")) ? ("fa-box-open") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Annulation")) ? ("fa-ban") : ("fa-edit"))))))));
            yield " text-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Création")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Confirmation")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Réception")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 242) == "Annulation")) ? ("danger") : ("secondary"))))))));
            yield "\"></i>
                                        </div>
                                        <div class=\"ms-2\">
                                            <strong>";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 245), "html", null, true);
            yield "</strong>
                                            <div class=\"small text-muted\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 246), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                                            <div class=\"small\">par ";
            // line 247
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 247), "fullName", [], "any", false, false, false, 247), "html", null, true)) : ("Système"));
            yield "</div>
                                            ";
            // line 248
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", true, true, false, 248)) {
                // line 249
                yield "                                                <div class=\"small text-danger\">Motif : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", false, false, false, 249), "html", null, true);
                yield "</div>
                                            ";
            }
            // line 251
            yield "                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tableau des produits -->
            <div class=\"card shadow-sm border-0\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-boxes me-2\"></i>Produits commandés</h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Produit</th>
                                <th>Code-barres</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total</th>
                                <th>Lot</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 278, $this->source); })()), "purchaseItems", [], "any", false, false, false, 278));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 279
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 282
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 282), "image", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 283
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 283), "image", [], "any", false, false, false, 283))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 284), "name", [], "any", false, false, false, 284), "html", null, true);
                yield "\"
                                                 class=\"table-product-img me-2\">
                                        ";
            }
            // line 287
            yield "                                        <div>
                                            <strong>";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 288), "name", [], "any", false, false, false, 288), "html", null, true);
            yield "</strong>
                                            ";
            // line 289
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 289), "hasExpiryDate", [], "any", false, false, false, 289)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 290
                yield "                                                <span class=\"badge bg-warning text-dark ms-1\">Périssable</span>
                                            ";
            }
            // line 292
            yield "                                        </div>
                                    </div>
                                </td>
                                <td><code>";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 295), "barcode", [], "any", false, false, false, 295), "html", null, true);
            yield "</code></td>
                                <td>";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 296), "html", null, true);
            yield "</td>
                                <td>";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 297), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td class=\"fw-bold text-primary\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 298), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td>
                                    ";
            // line 300
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 301
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 301), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 303
                yield "                                        <span class=\"text-muted\">-</span>
                                    ";
            }
            // line 305
            yield "                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"4\" class=\"text-end fw-bold\">Total général</td>
                                <td colspan=\"2\" class=\"fw-bold text-primary h5\">
                                    ";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 313, $this->source); })()), "totalAmount", [], "any", false, false, false, 313), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Notes -->
            ";
        // line 322
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 322, $this->source); })()), "notes", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 323
            yield "                <div class=\"card shadow-sm border-0 mt-4\">
                    <div class=\"card-header bg-white py-3\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-sticky-note me-2\"></i>Notes</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
            // line 328
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 328, $this->source); })()), "notes", [], "any", false, false, false, 328), "html", null, true));
            yield "
                    </div>
                </div>
            ";
        }
        // line 332
        yield "        </div>
    </div>
</div>

<!-- Modal d'annulation -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\" aria-labelledby=\"cancelModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"cancelModalLabel\">Annuler la commande</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            <form action=\"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 344, $this->source); })()), "id", [], "any", false, false, false, 344)]), "html", null, true);
        yield "\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <label for=\"cancelReason\" class=\"form-label\">Motif d'annulation <span class=\"text-danger\">*</span></label>
                        <textarea class=\"form-control\" id=\"cancelReason\" name=\"reason\" rows=\"3\" required></textarea>
                    </div>
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        L'annulation enverra une notification au fournisseur.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 365
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 366
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Scripts supplémentaires éventuels
</script>
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
        return "purchase/show.html.twig";
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
        return array (  721 => 366,  708 => 365,  677 => 344,  663 => 332,  656 => 328,  649 => 323,  647 => 322,  635 => 313,  628 => 308,  620 => 305,  616 => 303,  610 => 301,  608 => 300,  603 => 298,  599 => 297,  595 => 296,  591 => 295,  586 => 292,  582 => 290,  580 => 289,  576 => 288,  573 => 287,  567 => 284,  562 => 283,  560 => 282,  555 => 279,  551 => 278,  525 => 254,  517 => 251,  511 => 249,  509 => 248,  505 => 247,  501 => 246,  497 => 245,  489 => 242,  485 => 241,  482 => 240,  477 => 239,  475 => 238,  454 => 220,  448 => 217,  437 => 209,  433 => 208,  429 => 207,  425 => 205,  419 => 201,  413 => 198,  408 => 197,  406 => 196,  389 => 181,  385 => 179,  380 => 177,  376 => 176,  372 => 175,  368 => 174,  363 => 173,  361 => 172,  347 => 160,  341 => 157,  334 => 153,  330 => 151,  327 => 150,  321 => 147,  317 => 145,  314 => 144,  308 => 141,  304 => 139,  302 => 138,  297 => 136,  290 => 132,  281 => 126,  277 => 125,  273 => 124,  253 => 108,  247 => 104,  245 => 103,  238 => 100,  230 => 96,  227 => 95,  219 => 91,  217 => 90,  210 => 86,  204 => 83,  194 => 75,  181 => 74,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Commande {{ purchase.purchaseNumber }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .stat-card {
        border-radius: 1rem;
        transition: all 0.2s ease;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .timeline-item {
        position: relative;
        padding-left: 2rem;
        padding-bottom: 1.5rem;
        border-left: 2px solid #e9ecef;
    }
    .timeline-item:last-child {
        border-left: 2px solid transparent;
    }
    .timeline-icon {
        position: absolute;
        left: -0.75rem;
        top: 0;
        width: 2rem;
        height: 2rem;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .timeline-icon i {
        font-size: 1rem;
    }
    .user-avatar-md {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        object-fit: cover;
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .user-avatar-md i {
        font-size: 2rem;
        color: #6c757d;
    }
    .badge-status {
        font-size: 0.85rem;
        padding: 0.35rem 0.75rem;
        border-radius: 2rem;
    }
    .btn-pdf {
        padding: 0.3rem 0.75rem;
        font-size: 0.8rem;
    }
    .table-product-img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 8px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- En‑tête -->
            <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
                <div>
                    <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                        <i class=\"fas fa-receipt text-primary me-2\"></i>
                        Commande {{ purchase.purchaseNumber }}
                    </h1>
                    <p class=\"text-muted\">
                        Créée le {{ purchase.createdAt|date('d/m/Y à H:i') }}
                    </p>
                </div>
                <div class=\"d-flex gap-2\">
                    {% if purchase.bonCommande %}
                        <a href=\"{{ asset('uploads/bons-commande/' ~ purchase.bonCommande) }}\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                            <i class=\"fas fa-file-pdf me-1\"></i> Bon de commande
                        </a>
                    {% endif %}
                    {% if purchase.recuAchat %}
                        <a href=\"{{ asset('uploads/recus-achat/' ~ purchase.recuAchat) }}\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                            <i class=\"fas fa-file-pdf me-1\"></i> Reçu d'achat
                        </a>
                    {% endif %}
                    <a href=\"{{ path('purchase_print', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary\" target=\"_blank\">
                        <i class=\"fas fa-print me-1\"></i> Imprimer
                    </a>
                    {% if purchase.status == 'confirmed' %}
                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler la commande
                        </button>
                    {% endif %}
                    <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </a>
                </div>
            </div>

            <!-- Cartes info -->
            <div class=\"row g-4 mb-4\">
                <!-- Carte informations générales -->
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card shadow-sm stat-card h-100 border-0\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <h5 class=\"card-title mb-0\">
                                    <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations
                                </h5>
                                <span class=\"badge {{ purchase.statusBadgeClass }} badge-status\">
                                    <i class=\"fas {{ purchase.statusIcon }} me-1\"></i>
                                    {{ purchase.statusLabel }}
                                </span>
                            </div>
                            <table class=\"table table-sm table-borderless\">
                                <tr>
                                    <td class=\"text-muted\">N° commande</td>
                                    <td class=\"fw-bold\">{{ purchase.purchaseNumber }}</td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted\">Date création</td>
                                    <td>{{ purchase.createdAt|date('d/m/Y H:i') }}</td>
                                </tr>
                                {% if purchase.confirmedAt %}
                                <tr>
                                    <td class=\"text-muted\">Date confirmation</td>
                                    <td>{{ purchase.confirmedAt|date('d/m/Y H:i') }}</td>
                                </tr>
                                {% endif %}
                                {% if purchase.receivedAt %}
                                <tr>
                                    <td class=\"text-muted\">Date réception</td>
                                    <td>{{ purchase.receivedAt|date('d/m/Y H:i') }}</td>
                                </tr>
                                {% endif %}
                                {% if purchase.cancelledAt %}
                                <tr>
                                    <td class=\"text-muted\">Date annulation</td>
                                    <td>{{ purchase.cancelledAt|date('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted\">Motif annulation</td>
                                    <td class=\"text-danger\">{{ purchase.cancellationReason }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Carte fournisseur -->
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card shadow-sm stat-card h-100 border-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title mb-3\">
                                <i class=\"fas fa-truck text-primary me-2\"></i>Fournisseur
                            </h5>
                            {% if purchase.supplier %}
                                <h6 class=\"mb-1\">{{ purchase.supplier.name }}</h6>
                                <p class=\"text-muted mb-2\">{{ purchase.supplier.contactPerson }}</p>
                                <p class=\"mb-1\"><i class=\"fas fa-phone-alt me-2 text-muted\"></i> {{ purchase.supplier.phone }}</p>
                                <p class=\"mb-1\"><i class=\"fas fa-envelope me-2 text-muted\"></i> {{ purchase.supplier.email }}</p>
                                <p class=\"mb-0\"><i class=\"fas fa-map-marker-alt me-2 text-muted\"></i> {{ purchase.supplier.adress }}</p>
                            {% else %}
                                <p class=\"text-muted\">Aucun fournisseur renseigné</p>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <!-- Carte utilisateur créateur + total -->
                <div class=\"col-md-12 col-lg-4\">
                    <div class=\"card shadow-sm stat-card h-100 border-0\">
                        <div class=\"card-body\">
                            <div class=\"row g-3\">
                                <div class=\"col-12\">
                                    <h5 class=\"card-title mb-3\">
                                        <i class=\"fas fa-user-circle text-primary me-2\"></i>Créée par
                                    </h5>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar-md me-3\">
                                            {% if purchase.user.photo %}
                                                <img src=\"{{ asset('uploads/users/' ~ purchase.user.photo) }}\" 
                                                     alt=\"{{ purchase.user.fullName }}\"
                                                     class=\"w-100 h-100 rounded-circle object-fit-cover\">
                                            {% else %}
                                                <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center w-100 h-100\">
                                                    <i class=\"fas fa-user-circle fa-2x text-secondary\"></i>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div>
                                            <div class=\"fw-bold\">{{ purchase.user.fullName }}</div>
                                            <div class=\"small text-muted\">{{ purchase.user.email }}</div>
                                            <div class=\"small text-muted\">{{ purchase.user.phone }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 mt-3\">
                                    <hr>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"text-muted\">Total commande</span>
                                        <h3 class=\"mb-0 text-primary fw-bold\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</h3>
                                    </div>
                                    <div class=\"text-muted small mt-1\">
                                        {{ purchase.purchaseItems|length }} produit(s) commandé(s)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline des statuts -->
            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-history me-2\"></i>Historique des statuts</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"timeline\">
                                {% set statusHistory = purchase.statusHistory %}
                                {% for event in statusHistory %}
                                    <div class=\"timeline-item\">
                                        <div class=\"timeline-icon bg-white border border-{{ event.status == 'Création' ? 'primary' : (event.status == 'Confirmation' ? 'success' : (event.status == 'Réception' ? 'info' : (event.status == 'Annulation' ? 'danger' : 'secondary'))) }}\">
                                            <i class=\"fas {{ event.status == 'Création' ? 'fa-plus-circle' : (event.status == 'Confirmation' ? 'fa-check-circle' : (event.status == 'Réception' ? 'fa-box-open' : (event.status == 'Annulation' ? 'fa-ban' : 'fa-edit'))) }} text-{{ event.status == 'Création' ? 'primary' : (event.status == 'Confirmation' ? 'success' : (event.status == 'Réception' ? 'info' : (event.status == 'Annulation' ? 'danger' : 'secondary'))) }}\"></i>
                                        </div>
                                        <div class=\"ms-2\">
                                            <strong>{{ event.status }}</strong>
                                            <div class=\"small text-muted\">{{ event.date|date('d/m/Y H:i') }}</div>
                                            <div class=\"small\">par {{ event.by ? event.by.fullName : 'Système' }}</div>
                                            {% if event.reason is defined %}
                                                <div class=\"small text-danger\">Motif : {{ event.reason }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tableau des produits -->
            <div class=\"card shadow-sm border-0\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-boxes me-2\"></i>Produits commandés</h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 align-middle\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Produit</th>
                                <th>Code-barres</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total</th>
                                <th>Lot</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in purchase.purchaseItems %}
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        {% if item.product.image %}
                                            <img src=\"{{ asset('uploads/products/' ~ item.product.image) }}\" 
                                                 alt=\"{{ item.product.name }}\"
                                                 class=\"table-product-img me-2\">
                                        {% endif %}
                                        <div>
                                            <strong>{{ item.product.name }}</strong>
                                            {% if item.product.hasExpiryDate %}
                                                <span class=\"badge bg-warning text-dark ms-1\">Périssable</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </td>
                                <td><code>{{ item.product.barcode }}</code></td>
                                <td>{{ item.quantity }}</td>
                                <td>{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</td>
                                <td class=\"fw-bold text-primary\">{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</td>
                                <td>
                                    {% if item.batchNumber %}
                                        <span class=\"badge bg-secondary\">{{ item.batchNumber }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">-</span>
                                    {% endif %}
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"4\" class=\"text-end fw-bold\">Total général</td>
                                <td colspan=\"2\" class=\"fw-bold text-primary h5\">
                                    {{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Notes -->
            {% if purchase.notes %}
                <div class=\"card shadow-sm border-0 mt-4\">
                    <div class=\"card-header bg-white py-3\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-sticky-note me-2\"></i>Notes</h5>
                    </div>
                    <div class=\"card-body\">
                        {{ purchase.notes|nl2br }}
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Modal d'annulation -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\" aria-labelledby=\"cancelModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"cancelModalLabel\">Annuler la commande</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            <form action=\"{{ path('purchase_cancel', {id: purchase.id}) }}\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <label for=\"cancelReason\" class=\"form-label\">Motif d'annulation <span class=\"text-danger\">*</span></label>
                        <textarea class=\"form-control\" id=\"cancelReason\" name=\"reason\" rows=\"3\" required></textarea>
                    </div>
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        L'annulation enverra une notification au fournisseur.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    // Scripts supplémentaires éventuels
</script>
{% endblock %}", "purchase/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\show.html.twig");
    }
}
