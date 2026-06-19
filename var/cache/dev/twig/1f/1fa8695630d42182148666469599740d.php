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
class __TwigTemplate_d595a0a8a16a96bd76b0d53242f94f5a extends Template
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
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    .timeline {
        position: relative;
        padding: 1rem 0;
    }
    .timeline-item {
        position: relative;
        padding-left: 3rem;
        padding-bottom: 1.5rem;
        border-left: 2px solid #e9ecef;
        margin-left: 1rem;
    }
    .timeline-item:last-child {
        border-left-color: transparent;
        padding-bottom: 0;
    }
    .timeline-icon {
        position: absolute;
        left: -1.2rem;
        top: 0;
        width: 2.5rem;
        height: 2.5rem;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 1;
    }
    .badge-status {
        font-size: 0.85rem;
        padding: 0.4rem 1rem;
        border-radius: 2rem;
        font-weight: 500;
    }
    .btn-pdf {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
        border-radius: 0.5rem;
    }
    .table-product-img {
        width: 45px;
        height: 45px;
        object-fit: cover;
        border-radius: 0.5rem;
    }
    .badge-issue {
        background-color: #fef3c7;
        color: #92400e;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }
    .btn-view-issue {
        padding: 0.2rem 0.5rem;
        font-size: 0.7rem;
        border-radius: 0.375rem;
    }
    .user-avatar-lg {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        border-bottom: 1px solid #f0f0f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    @media (max-width: 768px) {
        .timeline-item {
            padding-left: 2.5rem;
        }
        .timeline-icon {
            width: 2rem;
            height: 2rem;
            left: -1rem;
        }
        .table th, .table td {
            padding: 0.75rem;
            font-size: 0.85rem;
        }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animated-card {
        animation: fadeInUp 0.4s ease-out;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
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

        // line 126
        yield "<div class=\"container-fluid py-4\">
    <div class=\"animated-card\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3\">
            <div>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-2\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Commandes
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 142, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 142), "html", null, true);
        yield "</li>
                    </ol>
                </nav>
                <h1 class=\"h2 mb-0 fw-bold\">
                    <i class=\"fas fa-receipt text-primary me-2\"></i>
                    Commande ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 147, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 147), "html", null, true);
        yield "
                </h1>
                <p class=\"text-muted mt-1 mb-0\">
                    <i class=\"fas fa-calendar-alt me-1\"></i>
                    Créée le ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 151, $this->source); })()), "createdAt", [], "any", false, false, false, 151), "d/m/Y à H:i"), "html", null, true);
        yield "
                </p>
            </div>
            <div class=\"d-flex gap-2 flex-wrap\">
                ";
        // line 155
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 155, $this->source); })()), "bonCommande", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bons-commande/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 156, $this->source); })()), "bonCommande", [], "any", false, false, false, 156))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Bon de commande
                    </a>
                ";
        }
        // line 160
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 160, $this->source); })()), "recuAchat", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recus-achat/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 161, $this->source); })()), "recuAchat", [], "any", false, false, false, 161))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Reçu d'achat
                    </a>
                ";
        }
        // line 165
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-pdf\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </a>
                ";
        // line 168
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 168, $this->source); })()), "status", [], "any", false, false, false, 168) == "confirmed")) {
            // line 169
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-pdf\">
                        <i class=\"fas fa-box-open me-1\"></i> Réceptionner
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-pdf\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                        <i class=\"fas fa-ban me-1\"></i> Annuler
                    </button>
                ";
        }
        // line 176
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-secondary btn-pdf\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations générales
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <span class=\"badge ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 192, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 192), "html", null, true);
        yield " badge-status\">
                                <i class=\"fas ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 193, $this->source); })()), "statusIcon", [], "any", false, false, false, 193), "html", null, true);
        yield " me-1\"></i>
                                ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 194, $this->source); })()), "statusLabel", [], "any", false, false, false, 194), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">N° commande</span>
                            <span class=\"info-value\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 199, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 199), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date création</span>
                            <span class=\"info-value\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 203, $this->source); })()), "createdAt", [], "any", false, false, false, 203), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                        </div>
                        ";
        // line 205
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 205, $this->source); })()), "confirmedAt", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date confirmation</span>
                            <span class=\"info-value text-success\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 208, $this->source); })()), "confirmedAt", [], "any", false, false, false, 208), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 211
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 211, $this->source); })()), "receivedAt", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 212
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date réception</span>
                            <span class=\"info-value text-info\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 214, $this->source); })()), "receivedAt", [], "any", false, false, false, 214), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 217
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 217, $this->source); })()), "cancelledAt", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 218
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date annulation</span>
                            <span class=\"info-value text-danger\">";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 220, $this->source); })()), "cancelledAt", [], "any", false, false, false, 220), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Motif annulation</span>
                            <span class=\"info-value text-danger\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 224, $this->source); })()), "cancellationReason", [], "any", false, false, false, 224), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 227
        yield "                    </div>
                </div>
            </div>

            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-truck text-primary me-2\"></i>Fournisseur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        ";
        // line 239
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 239, $this->source); })()), "supplier", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 240
            yield "                            <h6 class=\"fw-bold mb-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 240, $this->source); })()), "supplier", [], "any", false, false, false, 240), "name", [], "any", false, false, false, 240), "html", null, true);
            yield "</h6>
                            ";
            // line 241
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 241, $this->source); })()), "supplier", [], "any", false, false, false, 241), "contactPerson", [], "any", false, false, false, 241)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 242
                yield "                                <p class=\"text-muted small mb-2\">
                                    <i class=\"fas fa-user me-1\"></i> ";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 243, $this->source); })()), "supplier", [], "any", false, false, false, 243), "contactPerson", [], "any", false, false, false, 243), "html", null, true);
                yield "
                                </p>
                            ";
            }
            // line 246
            yield "                            <div class=\"info-row\">
                                <span class=\"info-label\">Téléphone</span>
                                <span class=\"info-value\">";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 248, $this->source); })()), "supplier", [], "any", false, false, false, 248), "phone", [], "any", false, false, false, 248), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Email</span>
                                <span class=\"info-value small\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 252, $this->source); })()), "supplier", [], "any", false, false, false, 252), "email", [], "any", false, false, false, 252), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Adresse</span>
                                <span class=\"info-value small\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 256, $this->source); })()), "supplier", [], "any", false, false, false, 256), "adress", [], "any", false, false, false, 256), "html", null, true);
            yield "</span>
                            </div>
                        ";
        } else {
            // line 259
            yield "                            <div class=\"text-center text-muted py-4\">
                                <i class=\"fas fa-building fa-3x mb-2 opacity-50\"></i>
                                <p>Aucun fournisseur renseigné</p>
                            </div>
                        ";
        }
        // line 264
        yield "                    </div>
                </div>
            </div>

            <div class=\"col-12 col-md-12 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-user-circle text-primary me-2\"></i>Créateur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"user-avatar-lg me-3\">
                                ";
        // line 278
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 278, $this->source); })()), "user", [], "any", false, false, false, 278), "photo", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 279
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 279, $this->source); })()), "user", [], "any", false, false, false, 279), "photo", [], "any", false, false, false, 279))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 280, $this->source); })()), "user", [], "any", false, false, false, 280), "fullName", [], "any", false, false, false, 280), "html", null, true);
            yield "\"
                                         class=\"w-100 h-100 rounded-circle object-fit-cover\">
                                ";
        } else {
            // line 283
            yield "                                    <i class=\"fas fa-user-circle fa-3x text-secondary\"></i>
                                ";
        }
        // line 285
        yield "                            </div>
                            <div>
                                <div class=\"fw-bold fs-5\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 287, $this->source); })()), "user", [], "any", false, false, false, 287), "fullName", [], "any", false, false, false, 287), "html", null, true);
        yield "</div>
                                <div class=\"small text-muted\">
                                    <i class=\"fas fa-envelope me-1\"></i> ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 289, $this->source); })()), "user", [], "any", false, false, false, 289), "email", [], "any", false, false, false, 289), "html", null, true);
        yield "
                                </div>
                                <div class=\"small text-muted\">
                                    <i class=\"fas fa-phone me-1\"></i> ";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 292, $this->source); })()), "user", [], "any", false, false, false, 292), "phone", [], "any", false, false, false, 292), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">Total commande</span>
                            <span class=\"fs-2 fw-bold text-primary\">";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 299, $this->source); })()), "totalAmount", [], "any", false, false, false, 299), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        <div class=\"text-muted small mt-1\">
                            <i class=\"fas fa-box me-1\"></i>
                            ";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 303, $this->source); })()), "purchaseItems", [], "any", false, false, false, 303)), "html", null, true);
        yield " produit(s) commandé(s)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card shadow-sm border-0 mb-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-history me-2 text-primary\"></i>Historique des statuts
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"timeline\">
                            ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 320, $this->source); })()), "statusHistory", [], "any", false, false, false, 320));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 321
            yield "                                ";
            $context["statusColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 321) == "Création")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 321) == "Confirmation")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 321) == "Réception")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 321) == "Annulation")) ? ("danger") : ("secondary"))))))));
            // line 322
            yield "                                <div class=\"timeline-item\">
                                    <div class=\"timeline-icon bg-white border border-";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusColor"]) || array_key_exists("statusColor", $context) ? $context["statusColor"] : (function () { throw new RuntimeError('Variable "statusColor" does not exist.', 323, $this->source); })()), "html", null, true);
            yield " shadow-sm\">
                                        <i class=\"fas ";
            // line 324
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 324) == "Création")) ? ("fa-plus-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 324) == "Confirmation")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 324) == "Réception")) ? ("fa-box-open") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 324) == "Annulation")) ? ("fa-ban") : ("fa-edit"))))))));
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusColor"]) || array_key_exists("statusColor", $context) ? $context["statusColor"] : (function () { throw new RuntimeError('Variable "statusColor" does not exist.', 324, $this->source); })()), "html", null, true);
            yield "\"></i>
                                    </div>
                                    <div class=\"timeline-content\">
                                        <div class=\"d-flex flex-wrap justify-content-between align-items-center\">
                                            <strong class=\"fs-6\">";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 328), "html", null, true);
            yield "</strong>
                                            <small class=\"text-muted\">";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 329), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                        </div>
                                        <div class=\"small text-muted mt-1\">
                                            <i class=\"fas fa-user me-1\"></i> par ";
            // line 332
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 332), "fullName", [], "any", false, false, false, 332), "html", null, true)) : ("Système"));
            yield "
                                        </div>
                                        ";
            // line 334
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", true, true, false, 334) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", false, false, false, 334))) {
                // line 335
                yield "                                            <div class=\"small text-danger mt-1\">
                                                <i class=\"fas fa-comment me-1\"></i> Motif : ";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", false, false, false, 336), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 339
            yield "                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card shadow-sm border-0\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits commandés
                </h5>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 30%\">Produit</th>
                            <th style=\"width: 12%\">Code-barres</th>
                            <th style=\"width: 8%\" class=\"text-center\">Quantité</th>
                            <th style=\"width: 12%\" class=\"text-end\">Prix unitaire</th>
                            <th style=\"width: 12%\" class=\"text-end\">Total</th>
                            <th style=\"width: 13%\">Lot</th>
                            <th style=\"width: 13%\">Problème</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 368, $this->source); })()), "purchaseItems", [], "any", false, false, false, 368));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 369
            yield "                            ";
            // line 370
            yield "                            ";
            $context["hasIssue"] = false;
            // line 371
            yield "                            ";
            $context["creditNoteId"] = null;
            // line 372
            yield "                            ";
            $context["creditNoteStatus"] = null;
            // line 373
            yield "                            ";
            $context["creditNoteNumber"] = null;
            // line 374
            yield "                            
                            ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 375), "stockBatches", [], "any", false, false, false, 375));
            foreach ($context['_seq'] as $context["_key"] => $context["stockBatch"]) {
                // line 376
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["stockBatch"], "purchaseItemId", [], "any", false, false, false, 376) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 376))) {
                    // line 377
                    yield "                                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["stockBatch"], "supplierCreditNoteId", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 378
                        yield "                                        ";
                        $context["hasIssue"] = true;
                        // line 379
                        yield "                                        ";
                        $context["creditNoteId"] = CoreExtension::getAttribute($this->env, $this->source, $context["stockBatch"], "supplierCreditNoteId", [], "any", false, false, false, 379);
                        // line 380
                        yield "                                        ";
                        $context["creditNoteStatus"] = CoreExtension::getAttribute($this->env, $this->source, $context["stockBatch"], "issueStatus", [], "any", false, false, false, 380);
                        // line 381
                        yield "                                        ";
                        $context["creditNoteNumber"] = ("AVR-" . (isset($context["creditNoteId"]) || array_key_exists("creditNoteId", $context) ? $context["creditNoteId"] : (function () { throw new RuntimeError('Variable "creditNoteId" does not exist.', 381, $this->source); })()));
                        // line 382
                        yield "                                    ";
                    }
                    // line 383
                    yield "                                ";
                }
                // line 384
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stockBatch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            yield "                            
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 389
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 389), "image", [], "any", false, false, false, 389) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 389), "image", [], "any", false, false, false, 389) != "default-product.png"))) {
                // line 390
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 390), "image", [], "any", false, false, false, 390))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 391), "name", [], "any", false, false, false, 391), "html", null, true);
                yield "\"
                                                 class=\"table-product-img me-2\">
                                        ";
            } else {
                // line 394
                yield "                                            <div class=\"table-product-img bg-light d-flex align-items-center justify-content-center me-2\">
                                                <i class=\"fas fa-box text-secondary\"></i>
                                            </div>
                                        ";
            }
            // line 398
            yield "                                        <div>
                                            <div class=\"fw-semibold\">";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 399), "name", [], "any", false, false, false, 399), "html", null, true);
            yield "</div>
                                            ";
            // line 400
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 400), "hasExpiryDate", [], "any", false, false, false, 400)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 401
                yield "                                                <span class=\"badge bg-warning text-dark mt-1\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>Périssable
                                                </span>
                                            ";
            }
            // line 405
            yield "                                        </div>
                                    </div>
                                </td>
                                <td><code class=\"small\">";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 408), "barcode", [], "any", false, false, false, 408), "html", null, true);
            yield "</code></td>
                                <td class=\"text-center\">";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 409), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 410), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td class=\"text-end fw-bold text-primary\">";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 411), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td>
                                    ";
            // line 413
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 413)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 414
                yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-tag me-1\"></i>";
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 415), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 418
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 420
            yield "                                </td>
                                <td>
                                    ";
            // line 422
            if (((isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 422, $this->source); })()) && (isset($context["creditNoteId"]) || array_key_exists("creditNoteId", $context) ? $context["creditNoteId"] : (function () { throw new RuntimeError('Variable "creditNoteId" does not exist.', 422, $this->source); })()))) {
                // line 423
                yield "                                        <div class=\"d-flex align-items-center gap-2\">
                                            <span class=\"badge-issue\">
                                                <i class=\"fas fa-exclamation-triangle\"></i>
                                                ";
                // line 426
                if ((($tmp = (isset($context["creditNoteStatus"]) || array_key_exists("creditNoteStatus", $context) ? $context["creditNoteStatus"] : (function () { throw new RuntimeError('Variable "creditNoteStatus" does not exist.', 426, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 427
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace((isset($context["creditNoteStatus"]) || array_key_exists("creditNoteStatus", $context) ? $context["creditNoteStatus"] : (function () { throw new RuntimeError('Variable "creditNoteStatus" does not exist.', 427, $this->source); })()), ["_" => " "])), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 429
                    yield "                                                    Problème signalé
                                                ";
                }
                // line 431
                yield "                                            </span>
                                            <a href=\"";
                // line 432
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => (isset($context["creditNoteId"]) || array_key_exists("creditNoteId", $context) ? $context["creditNoteId"] : (function () { throw new RuntimeError('Variable "creditNoteId" does not exist.', 432, $this->source); })())]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-danger btn-view-issue\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-eye me-1\"></i> Voir
                                            </a>
                                        </div>
                                    ";
            } else {
                // line 439
                yield "                                        <span class=\"text-muted small\">
                                            <i class=\"fas fa-check-circle text-success me-1\"></i>Aucun problème
                                        </span>
                                    ";
            }
            // line 443
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        yield "                    </tbody>
                    <tfoot class=\"table-light\">
                        <tr>
                            <td colspan=\"5\" class=\"text-end fw-bold fs-6\">Total général</td>
                            <td colspan=\"2\" class=\"text-end\">
                                <span class=\"fs-4 fw-bold text-primary\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 451, $this->source); })()), "totalAmount", [], "any", false, false, false, 451), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        ";
        // line 459
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 459, $this->source); })()), "notes", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 460
            yield "        <div class=\"card shadow-sm border-0 mt-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-sticky-note me-2 text-primary\"></i>Notes
                </h5>
            </div>
            <div class=\"card-body bg-light\">
                <p class=\"mb-0\">";
            // line 467
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 467, $this->source); })()), "notes", [], "any", false, false, false, 467), "html", null, true));
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 471
        yield "    </div>
</div>

<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form action=\"";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 483, $this->source); })()), "id", [], "any", false, false, false, 483)]), "html", null, true);
        yield "\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning mb-3\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        L'annulation enverra une notification au fournisseur.
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"cancelReason\" class=\"form-label fw-bold\">
                            Motif d'annulation <span class=\"text-danger\">*</span>
                        </label>
                        <textarea class=\"form-control\" id=\"cancelReason\" name=\"reason\" rows=\"4\" 
                                  placeholder=\"Veuillez expliquer le motif de l'annulation...\"
                                  required></textarea>
                        <div class=\"form-text\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Ce motif sera visible par le fournisseur.
                        </div>
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

    // line 512
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

        // line 513
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 0.1) + 's';
            card.classList.add('animated-card');
        });
    });
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
        return array (  942 => 513,  929 => 512,  890 => 483,  876 => 471,  869 => 467,  860 => 460,  858 => 459,  847 => 451,  840 => 446,  832 => 443,  826 => 439,  816 => 432,  813 => 431,  809 => 429,  803 => 427,  801 => 426,  796 => 423,  794 => 422,  790 => 420,  786 => 418,  780 => 415,  777 => 414,  775 => 413,  770 => 411,  766 => 410,  762 => 409,  758 => 408,  753 => 405,  747 => 401,  745 => 400,  741 => 399,  738 => 398,  732 => 394,  726 => 391,  721 => 390,  719 => 389,  713 => 385,  707 => 384,  704 => 383,  701 => 382,  698 => 381,  695 => 380,  692 => 379,  689 => 378,  686 => 377,  683 => 376,  679 => 375,  676 => 374,  673 => 373,  670 => 372,  667 => 371,  664 => 370,  662 => 369,  658 => 368,  630 => 342,  622 => 339,  616 => 336,  613 => 335,  611 => 334,  606 => 332,  600 => 329,  596 => 328,  587 => 324,  583 => 323,  580 => 322,  577 => 321,  573 => 320,  553 => 303,  546 => 299,  536 => 292,  530 => 289,  525 => 287,  521 => 285,  517 => 283,  511 => 280,  506 => 279,  504 => 278,  488 => 264,  481 => 259,  475 => 256,  468 => 252,  461 => 248,  457 => 246,  451 => 243,  448 => 242,  446 => 241,  441 => 240,  439 => 239,  425 => 227,  419 => 224,  412 => 220,  408 => 218,  405 => 217,  399 => 214,  395 => 212,  392 => 211,  386 => 208,  382 => 206,  380 => 205,  375 => 203,  368 => 199,  360 => 194,  356 => 193,  352 => 192,  332 => 176,  321 => 169,  319 => 168,  312 => 165,  304 => 161,  301 => 160,  293 => 156,  291 => 155,  284 => 151,  277 => 147,  269 => 142,  262 => 138,  254 => 133,  245 => 126,  232 => 125,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
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
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    .timeline {
        position: relative;
        padding: 1rem 0;
    }
    .timeline-item {
        position: relative;
        padding-left: 3rem;
        padding-bottom: 1.5rem;
        border-left: 2px solid #e9ecef;
        margin-left: 1rem;
    }
    .timeline-item:last-child {
        border-left-color: transparent;
        padding-bottom: 0;
    }
    .timeline-icon {
        position: absolute;
        left: -1.2rem;
        top: 0;
        width: 2.5rem;
        height: 2.5rem;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 1;
    }
    .badge-status {
        font-size: 0.85rem;
        padding: 0.4rem 1rem;
        border-radius: 2rem;
        font-weight: 500;
    }
    .btn-pdf {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
        border-radius: 0.5rem;
    }
    .table-product-img {
        width: 45px;
        height: 45px;
        object-fit: cover;
        border-radius: 0.5rem;
    }
    .badge-issue {
        background-color: #fef3c7;
        color: #92400e;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }
    .btn-view-issue {
        padding: 0.2rem 0.5rem;
        font-size: 0.7rem;
        border-radius: 0.375rem;
    }
    .user-avatar-lg {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        border-bottom: 1px solid #f0f0f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    @media (max-width: 768px) {
        .timeline-item {
            padding-left: 2.5rem;
        }
        .timeline-icon {
            width: 2rem;
            height: 2rem;
            left: -1rem;
        }
        .table th, .table td {
            padding: 0.75rem;
            font-size: 0.85rem;
        }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animated-card {
        animation: fadeInUp 0.4s ease-out;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"animated-card\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3\">
            <div>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-2\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path('purchase_index') }}\" class=\"text-decoration-none\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Commandes
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">{{ purchase.purchaseNumber }}</li>
                    </ol>
                </nav>
                <h1 class=\"h2 mb-0 fw-bold\">
                    <i class=\"fas fa-receipt text-primary me-2\"></i>
                    Commande {{ purchase.purchaseNumber }}
                </h1>
                <p class=\"text-muted mt-1 mb-0\">
                    <i class=\"fas fa-calendar-alt me-1\"></i>
                    Créée le {{ purchase.createdAt|date('d/m/Y à H:i') }}
                </p>
            </div>
            <div class=\"d-flex gap-2 flex-wrap\">
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
                <a href=\"{{ path('purchase_print', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary btn-pdf\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </a>
                {% if purchase.status == 'confirmed' %}
                    <a href=\"{{ path('purchase_receive', {id: purchase.id}) }}\" class=\"btn btn-success btn-pdf\">
                        <i class=\"fas fa-box-open me-1\"></i> Réceptionner
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-pdf\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                        <i class=\"fas fa-ban me-1\"></i> Annuler
                    </button>
                {% endif %}
                <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-secondary btn-pdf\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations générales
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <span class=\"badge {{ purchase.statusBadgeClass }} badge-status\">
                                <i class=\"fas {{ purchase.statusIcon }} me-1\"></i>
                                {{ purchase.statusLabel }}
                            </span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">N° commande</span>
                            <span class=\"info-value\">{{ purchase.purchaseNumber }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date création</span>
                            <span class=\"info-value\">{{ purchase.createdAt|date('d/m/Y H:i') }}</span>
                        </div>
                        {% if purchase.confirmedAt %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date confirmation</span>
                            <span class=\"info-value text-success\">{{ purchase.confirmedAt|date('d/m/Y H:i') }}</span>
                        </div>
                        {% endif %}
                        {% if purchase.receivedAt %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date réception</span>
                            <span class=\"info-value text-info\">{{ purchase.receivedAt|date('d/m/Y H:i') }}</span>
                        </div>
                        {% endif %}
                        {% if purchase.cancelledAt %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date annulation</span>
                            <span class=\"info-value text-danger\">{{ purchase.cancelledAt|date('d/m/Y H:i') }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Motif annulation</span>
                            <span class=\"info-value text-danger\">{{ purchase.cancellationReason }}</span>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-truck text-primary me-2\"></i>Fournisseur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        {% if purchase.supplier %}
                            <h6 class=\"fw-bold mb-2\">{{ purchase.supplier.name }}</h6>
                            {% if purchase.supplier.contactPerson %}
                                <p class=\"text-muted small mb-2\">
                                    <i class=\"fas fa-user me-1\"></i> {{ purchase.supplier.contactPerson }}
                                </p>
                            {% endif %}
                            <div class=\"info-row\">
                                <span class=\"info-label\">Téléphone</span>
                                <span class=\"info-value\">{{ purchase.supplier.phone }}</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Email</span>
                                <span class=\"info-value small\">{{ purchase.supplier.email }}</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Adresse</span>
                                <span class=\"info-value small\">{{ purchase.supplier.adress }}</span>
                            </div>
                        {% else %}
                            <div class=\"text-center text-muted py-4\">
                                <i class=\"fas fa-building fa-3x mb-2 opacity-50\"></i>
                                <p>Aucun fournisseur renseigné</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <div class=\"col-12 col-md-12 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-user-circle text-primary me-2\"></i>Créateur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"user-avatar-lg me-3\">
                                {% if purchase.user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ purchase.user.photo) }}\" 
                                         alt=\"{{ purchase.user.fullName }}\"
                                         class=\"w-100 h-100 rounded-circle object-fit-cover\">
                                {% else %}
                                    <i class=\"fas fa-user-circle fa-3x text-secondary\"></i>
                                {% endif %}
                            </div>
                            <div>
                                <div class=\"fw-bold fs-5\">{{ purchase.user.fullName }}</div>
                                <div class=\"small text-muted\">
                                    <i class=\"fas fa-envelope me-1\"></i> {{ purchase.user.email }}
                                </div>
                                <div class=\"small text-muted\">
                                    <i class=\"fas fa-phone me-1\"></i> {{ purchase.user.phone }}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">Total commande</span>
                            <span class=\"fs-2 fw-bold text-primary\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                        <div class=\"text-muted small mt-1\">
                            <i class=\"fas fa-box me-1\"></i>
                            {{ purchase.purchaseItems|length }} produit(s) commandé(s)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card shadow-sm border-0 mb-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-history me-2 text-primary\"></i>Historique des statuts
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"timeline\">
                            {% for event in purchase.statusHistory %}
                                {% set statusColor = event.status == 'Création' ? 'primary' : (event.status == 'Confirmation' ? 'success' : (event.status == 'Réception' ? 'info' : (event.status == 'Annulation' ? 'danger' : 'secondary'))) %}
                                <div class=\"timeline-item\">
                                    <div class=\"timeline-icon bg-white border border-{{ statusColor }} shadow-sm\">
                                        <i class=\"fas {{ event.status == 'Création' ? 'fa-plus-circle' : (event.status == 'Confirmation' ? 'fa-check-circle' : (event.status == 'Réception' ? 'fa-box-open' : (event.status == 'Annulation' ? 'fa-ban' : 'fa-edit'))) }} text-{{ statusColor }}\"></i>
                                    </div>
                                    <div class=\"timeline-content\">
                                        <div class=\"d-flex flex-wrap justify-content-between align-items-center\">
                                            <strong class=\"fs-6\">{{ event.status }}</strong>
                                            <small class=\"text-muted\">{{ event.date|date('d/m/Y H:i') }}</small>
                                        </div>
                                        <div class=\"small text-muted mt-1\">
                                            <i class=\"fas fa-user me-1\"></i> par {{ event.by ? event.by.fullName : 'Système' }}
                                        </div>
                                        {% if event.reason is defined and event.reason %}
                                            <div class=\"small text-danger mt-1\">
                                                <i class=\"fas fa-comment me-1\"></i> Motif : {{ event.reason }}
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card shadow-sm border-0\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits commandés
                </h5>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 30%\">Produit</th>
                            <th style=\"width: 12%\">Code-barres</th>
                            <th style=\"width: 8%\" class=\"text-center\">Quantité</th>
                            <th style=\"width: 12%\" class=\"text-end\">Prix unitaire</th>
                            <th style=\"width: 12%\" class=\"text-end\">Total</th>
                            <th style=\"width: 13%\">Lot</th>
                            <th style=\"width: 13%\">Problème</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in purchase.purchaseItems %}
                            {# Récupérer l'avoir associé via l'ID stocké dans StockBatch #}
                            {% set hasIssue = false %}
                            {% set creditNoteId = null %}
                            {% set creditNoteStatus = null %}
                            {% set creditNoteNumber = null %}
                            
                            {% for stockBatch in item.product.stockBatches %}
                                {% if stockBatch.purchaseItemId == item.id %}
                                    {% if stockBatch.supplierCreditNoteId %}
                                        {% set hasIssue = true %}
                                        {% set creditNoteId = stockBatch.supplierCreditNoteId %}
                                        {% set creditNoteStatus = stockBatch.issueStatus %}
                                        {% set creditNoteNumber = 'AVR-' ~ creditNoteId %}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                            
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        {% if item.product.image and item.product.image != 'default-product.png' %}
                                            <img src=\"{{ asset('uploads/products/' ~ item.product.image) }}\" 
                                                 alt=\"{{ item.product.name }}\"
                                                 class=\"table-product-img me-2\">
                                        {% else %}
                                            <div class=\"table-product-img bg-light d-flex align-items-center justify-content-center me-2\">
                                                <i class=\"fas fa-box text-secondary\"></i>
                                            </div>
                                        {% endif %}
                                        <div>
                                            <div class=\"fw-semibold\">{{ item.product.name }}</div>
                                            {% if item.product.hasExpiryDate %}
                                                <span class=\"badge bg-warning text-dark mt-1\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>Périssable
                                                </span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </td>
                                <td><code class=\"small\">{{ item.product.barcode }}</code></td>
                                <td class=\"text-center\">{{ item.quantity }}</td>
                                <td class=\"text-end\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</td>
                                <td class=\"text-end fw-bold text-primary\">{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</td>
                                <td>
                                    {% if item.batchNumber %}
                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-tag me-1\"></i>{{ item.batchNumber }}
                                        </span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if hasIssue and creditNoteId %}
                                        <div class=\"d-flex align-items-center gap-2\">
                                            <span class=\"badge-issue\">
                                                <i class=\"fas fa-exclamation-triangle\"></i>
                                                {% if creditNoteStatus %}
                                                    {{ creditNoteStatus|replace({'_': ' '})|capitalize }}
                                                {% else %}
                                                    Problème signalé
                                                {% endif %}
                                            </span>
                                            <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNoteId}) }}\" 
                                               class=\"btn btn-sm btn-outline-danger btn-view-issue\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-eye me-1\"></i> Voir
                                            </a>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted small\">
                                            <i class=\"fas fa-check-circle text-success me-1\"></i>Aucun problème
                                        </span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot class=\"table-light\">
                        <tr>
                            <td colspan=\"5\" class=\"text-end fw-bold fs-6\">Total général</td>
                            <td colspan=\"2\" class=\"text-end\">
                                <span class=\"fs-4 fw-bold text-primary\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        {% if purchase.notes %}
        <div class=\"card shadow-sm border-0 mt-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-sticky-note me-2 text-primary\"></i>Notes
                </h5>
            </div>
            <div class=\"card-body bg-light\">
                <p class=\"mb-0\">{{ purchase.notes|nl2br }}</p>
            </div>
        </div>
        {% endif %}
    </div>
</div>

<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form action=\"{{ path('purchase_cancel', {id: purchase.id}) }}\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning mb-3\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        L'annulation enverra une notification au fournisseur.
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"cancelReason\" class=\"form-label fw-bold\">
                            Motif d'annulation <span class=\"text-danger\">*</span>
                        </label>
                        <textarea class=\"form-control\" id=\"cancelReason\" name=\"reason\" rows=\"4\" 
                                  placeholder=\"Veuillez expliquer le motif de l'annulation...\"
                                  required></textarea>
                        <div class=\"form-text\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Ce motif sera visible par le fournisseur.
                        </div>
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
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 0.1) + 's';
            card.classList.add('animated-card');
        });
    });
</script>
{% endblock %}", "purchase/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\show.html.twig");
    }
}
