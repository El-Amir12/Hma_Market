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

/* admin/stock_batch/show.html.twig */
class __TwigTemplate_2d4fe995476f068cc5eb233b4ee937a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/show.html.twig"));

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

        yield "Lot ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 4, $this->source); })()), "batchNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
    .info-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
    }
    .info-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1) !important;
    }
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 1.5rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.75rem;
        top: 0.25rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--primary-color);
        border: 2px solid white;
        box-shadow: 0 0 0 2px var(--primary-color);
    }
    .timeline-item.issue::before {
        background: var(--danger-color);
        box-shadow: 0 0 0 2px var(--danger-color);
    }
    .timeline-item.resolved::before {
        background: var(--success-color);
        box-shadow: 0 0 0 2px var(--success-color);
    }
    .issue-badge {
        font-size: 0.75rem;
        padding: 0.3rem 0.6rem;
    }
    .attachment-preview {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .attachment-preview:hover {
        transform: scale(1.05);
    }
    .status-card {
        border-left: 4px solid;
    }
    .status-pending { border-left-color: var(--warning-color); }
    .status-acknowledged { border-left-color: var(--info-color); }
    .status-under_review { border-left-color: var(--primary-color); }
    .status-recovered { border-left-color: var(--success-color); }
    .status-lost { border-left-color: var(--danger-color); }
    .status-closed { border-left-color: #6c757d; }
    .badge i { margin-right: 4px; }
    @media print {
        .no-print, .btn, .dropdown, .modal, .actions { display: none !important; }
        body { padding: 20px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .info-card { transform: none !important; }
    }
    .btn-action {
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        transform: translateY(-2px);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
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

        // line 95
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3 no-print\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\">Produits</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102)), "truncate", [30], "method", false, false, false, 102), "html", null, true);
        yield "</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        yield "\">Lots</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 104, $this->source); })()), "batchNumber", [], "any", false, false, false, 104), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                Lot ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 109, $this->source); })()), "batchNumber", [], "any", false, false, false, 109), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-1\">
                <i class=\"fas fa-calendar-alt me-1\"></i> Créé le ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 112, $this->source); })()), "createdAt", [], "any", false, false, false, 112), "d/m/Y H:i"), "html", null, true);
        yield "
                ";
        // line 113
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 113, $this->source); })()), "updatedAt", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " | Modifié le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 113, $this->source); })()), "updatedAt", [], "any", false, false, false, 113), "d/m/Y H:i"), "html", null, true);
        }
        // line 114
        yield "                ";
        if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 114, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 114, $this->source); })()), "purchase", [], "any", false, false, false, 114))) {
            // line 115
            yield "                    ";
            $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 115, $this->source); })()), "purchase", [], "any", false, false, false, 115);
            // line 116
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 116, $this->source); })()), "receivedAt", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                        ";
                $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 117, $this->source); })()), "receivedAt", [], "any", false, false, false, 117)], "method", false, false, false, 117), "days", [], "any", false, false, false, 117);
                // line 118
                yield "                        ";
                $context["daysRemaining"] = (30 - (isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 118, $this->source); })()));
                // line 119
                yield "                        <br>
                        <span class=\"badge ";
                // line 120
                if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 120, $this->source); })()) > 0)) {
                    yield "bg-success";
                } else {
                    yield "bg-secondary";
                }
                yield "\">
                            <i class=\"fas fa-calendar-check me-1\"></i>
                            Réceptionné le ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 122, $this->source); })()), "receivedAt", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true);
                yield "
                            ";
                // line 123
                if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 123, $this->source); })()) > 0)) {
                    // line 124
                    yield "                                (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 124, $this->source); })()), "html", null, true);
                    yield " jour(s) restant pour signaler)
                            ";
                } else {
                    // line 126
                    yield "                                (Délai de signalement expiré)
                            ";
                }
                // line 128
                yield "                        </span>
                    ";
            }
            // line 130
            yield "                ";
        }
        // line 131
        yield "            </p>
        </div>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" onclick=\"window.print()\" title=\"Imprimer\">
                <i class=\"fas fa-print me-1\"></i> Imprimer
            </button>
            ";
        // line 137
        if ((($tmp = (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 137, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-action\">
                    <i class=\"fas fa-edit me-1\"></i> Modifier
                </a>
            ";
        }
        // line 142
        yield "            
            ";
        // line 144
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 144, $this->source); })()), "hasIssue", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                ";
            // line 146
            yield "                ";
            $context["creditNote"] = ((array_key_exists("supplierCreditNote", $context)) ? ((isset($context["supplierCreditNote"]) || array_key_exists("supplierCreditNote", $context) ? $context["supplierCreditNote"] : (function () { throw new RuntimeError('Variable "supplierCreditNote" does not exist.', 146, $this->source); })())) : (null));
            // line 147
            yield "                ";
            if ((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 147, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info btn-action\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Voir l'avoir
                    </a>
                ";
            } else {
                // line 152
                yield "                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Avoir non trouvé\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoir introuvable
                    </button>
                ";
            }
            // line 156
            yield "            ";
        } elseif ((array_key_exists("canReportIssue", $context) && (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 156, $this->source); })()))) {
            // line 157
            yield "                ";
            // line 158
            yield "                ";
            if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 158, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 158, $this->source); })()), "purchase", [], "any", false, false, false, 158))) {
                // line 159
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 159, $this->source); })()), "purchase", [], "any", false, false, false, 159);
                // line 160
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 160, $this->source); })()), "receivedAt", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 161
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 161, $this->source); })()), "receivedAt", [], "any", false, false, false, 161)], "method", false, false, false, 161), "days", [], "any", false, false, false, 161);
                    // line 162
                    yield "                        ";
                    $context["daysRemaining"] = (30 - (isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 162, $this->source); })()));
                    // line 163
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-danger btn-action\" title=\"Encore ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 163, $this->source); })()), "html", null, true);
                    yield " jour(s) pour signaler un problème\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                            <span class=\"badge bg-danger ms-1\">";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 165, $this->source); })()), "html", null, true);
                    yield "j</span>
                        </a>
                    ";
                } else {
                    // line 168
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-danger btn-action\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                        </a>
                    ";
                }
                // line 172
                yield "                ";
            } else {
                // line 173
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-action\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                    </a>
                ";
            }
            // line 177
            yield "            ";
        } else {
            // line 178
            yield "                ";
            // line 179
            yield "                ";
            if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 179, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 179, $this->source); })()), "purchase", [], "any", false, false, false, 179))) {
                // line 180
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 180, $this->source); })()), "purchase", [], "any", false, false, false, 180);
                // line 181
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 181, $this->source); })()), "receivedAt", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 182
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 182, $this->source); })()), "receivedAt", [], "any", false, false, false, 182)], "method", false, false, false, 182), "days", [], "any", false, false, false, 182);
                    // line 183
                    yield "                        ";
                    if (((isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 183, $this->source); })()) > 30)) {
                        // line 184
                        yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Délai de 30 jours dépassé (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 184, $this->source); })()), "html", null, true);
                        yield " jours)\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement expiré
                                <span class=\"badge bg-secondary ms-1\">+";
                        // line 186
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 186, $this->source); })()) - 30), "html", null, true);
                        yield "j</span>
                            </button>
                        ";
                    } else {
                        // line 189
                        yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Commande non réceptionnée\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                            </button>
                        ";
                    }
                    // line 193
                    yield "                    ";
                } else {
                    // line 194
                    yield "                        <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Commande non réceptionnée\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                        </button>
                    ";
                }
                // line 198
                yield "                ";
            } else {
                // line 199
                yield "                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Signalement non disponible\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                    </button>
                ";
            }
            // line 203
            yield "            ";
        }
        // line 204
        yield "            
            <a href=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <!-- Colonne gauche - Informations générales -->
        <div class=\"col-lg-6\">
            <div class=\"card info-card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Numéro de lot</dt>
                                <dd class=\"col-sm-7 fw-bold\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 226, $this->source); })()), "batchNumber", [], "any", false, false, false, 226), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Produit</dt>
                                <dd class=\"col-sm-7\">
                                    <a href=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 230, $this->source); })()), "id", [], "any", false, false, false, 230)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                        ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 231, $this->source); })()), "name", [], "any", false, false, false, 231), "html", null, true);
        yield "
                                    </a>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 236, $this->source); })()), "barcode", [], "any", false, false, false, 236), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">";
        // line 239
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 239, $this->source); })()), "category", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 239, $this->source); })()), "category", [], "any", false, false, false, 239), "name", [], "any", false, false, false, 239), "html", null, true)) : ("Non catégorisé"));
        yield "</dd>
                            </dl>
                        </div>
                        <div class=\"col-md-6\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Emplacement</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 246
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 246, $this->source); })()), "location", [], "any", false, false, false, 246) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 246, $this->source); })()), "locationEntity", [], "any", false, false, false, 246))) {
            // line 247
            yield "                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> 
                                            ";
            // line 249
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 249, $this->source); })()), "locationEntity", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 249, $this->source); })()), "locationEntity", [], "any", false, false, false, 249), "displayName", [], "any", false, false, false, 249), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 249, $this->source); })()), "location", [], "any", false, false, false, 249), "html", null, true)));
            yield "
                                        </span>
                                    ";
        } else {
            // line 252
            yield "                                        <span class=\"text-muted\">—</span>
                                    ";
        }
        // line 254
        yield "                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Statut</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge ";
        // line 258
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 258, $this->source); })()), "isActive", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield "\">
                                        <i class=\"fas ";
        // line 259
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 259, $this->source); })()), "isActive", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
        yield " me-1\"></i>
                                        ";
        // line 260
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 260, $this->source); })()), "isActive", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                    </span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Avoir</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 266
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 266, $this->source); })()), "hasIssue", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                                        <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 267, $this->source); })()), "issueStatusBadgeClass", [], "any", false, false, false, 267), "html", null, true);
            yield "\">
                                            ";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 268, $this->source); })()), "issueStatusLabel", [], "any", false, false, false, 268), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 270, $this->source); })()), "issuePriority", [], "any", false, false, false, 270) == "critical")) {
                // line 271
                yield "                                            <span class=\"badge bg-danger ms-1\">Critique</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 272
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 272, $this->source); })()), "issuePriority", [], "any", false, false, false, 272) == "high")) {
                // line 273
                yield "                                            <span class=\"badge bg-warning text-dark ms-1\">Haute priorité</span>
                                        ";
            }
            // line 275
            yield "                                    ";
        } else {
            // line 276
            yield "                                        <span class=\"text-muted\">Aucun</span>
                                    ";
        }
        // line 278
        yield "                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quantités et prix -->
            <div class=\"card info-card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-line me-2 text-success\"></i>
                        Quantités et prix
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Quantité initiale</small>
                                <h3 class=\"mb-0 fw-bold text-primary\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 298, $this->source); })()), "initialQuantity", [], "any", false, false, false, 298), "html", null, true);
        yield "</h3>
                                <small>";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 299)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 299, $this->source); })()), "unit", [], "any", false, false, false, 299), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Quantité actuelle</small>
                                <h3 class=\"mb-0 fw-bold ";
        // line 305
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 305, $this->source); })()), "currentQuantity", [], "any", false, false, false, 305) <= 10)) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 306, $this->source); })()), "currentQuantity", [], "any", false, false, false, 306), "html", null, true);
        yield "
                                </h3>
                                <small>";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 308, $this->source); })()), "unit", [], "any", false, false, false, 308), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</small>
                                ";
        // line 309
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 309, $this->source); })()), "currentQuantity", [], "any", false, false, false, 309) <= 10)) {
            // line 310
            yield "                                    <span class=\"badge bg-warning text-dark mt-1 d-block\">Stock faible</span>
                                ";
        }
        // line 312
        yield "                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Pourcentage restant</small>
                                <h3 class=\"mb-0 fw-bold\">
                                    ";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 318, $this->source); })()), "currentQuantity", [], "any", false, false, false, 318) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 318, $this->source); })()), "initialQuantity", [], "any", false, false, false, 318)) * 100)), "html", null, true);
        yield "%
                                </h3>
                                <div class=\"progress mt-2\" style=\"height:8px\">
                                    <div class=\"progress-bar ";
        // line 321
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 321, $this->source); })()), "currentQuantity", [], "any", false, false, false, 321) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 321, $this->source); })()), "initialQuantity", [], "any", false, false, false, 321)) * 100) <= 10)) {
            yield "bg-danger";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 321, $this->source); })()), "currentQuantity", [], "any", false, false, false, 321) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 321, $this->source); })()), "initialQuantity", [], "any", false, false, false, 321)) * 100) <= 30)) {
            yield "bg-warning";
        } else {
            yield "bg-success";
        }
        yield "\" 
                                         style=\"width: ";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 322, $this->source); })()), "currentQuantity", [], "any", false, false, false, 322) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 322, $this->source); })()), "initialQuantity", [], "any", false, false, false, 322)) * 100)), "html", null, true);
        yield "%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Prix unitaire</small>
                                <h4 class=\"mb-0 fw-bold text-primary\">";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 331, $this->source); })()), "unitPrice", [], "any", false, false, false, 331), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 331, $this->source); })()), "hmaService", [], "any", false, false, false, 331)), "html", null, true);
        yield "</h4>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Valeur totale</small>
                                <h4 class=\"mb-0 fw-bold text-success\">";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 337, $this->source); })()), "currentQuantity", [], "any", false, false, false, 337) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 337, $this->source); })()), "unitPrice", [], "any", false, false, false, 337)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 337, $this->source); })()), "hmaService", [], "any", false, false, false, 337)), "html", null, true);
        yield "</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dates -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                        Dates
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Date de fabrication</small>
                                <h5 class=\"mb-0 fw-bold\">
                                    ";
        // line 358
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 358, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 358, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 358), "d/m/Y"), "html", null, true)) : ("Non renseignée"));
        yield "
                                </h5>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Date d'expiration</small>
                                <h5 class=\"mb-0 fw-bold ";
        // line 365
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 365, $this->source); })()), "expiryDate", [], "any", false, false, false, 365) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 365, $this->source); })()), "expiryDate", [], "any", false, false, false, 365) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            yield "text-danger";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 365, $this->source); })()), "expiryDate", [], "any", false, false, false, 365) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 365, $this->source); })()), "expiryDate", [], "any", false, false, false, 365) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            yield "text-warning";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 366
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 366, $this->source); })()), "expiryDate", [], "any", false, false, false, 366)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 366, $this->source); })()), "expiryDate", [], "any", false, false, false, 366), "d/m/Y"), "html", null, true)) : ("Non périssable"));
        yield "
                                </h5>
                                ";
        // line 368
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 368, $this->source); })()), "expiryDate", [], "any", false, false, false, 368) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 368, $this->source); })()), "expiryDate", [], "any", false, false, false, 368) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 369
            yield "                                    <span class=\"badge bg-danger mt-1\">Expiré</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 370
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 370, $this->source); })()), "expiryDate", [], "any", false, false, false, 370) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 370, $this->source); })()), "expiryDate", [], "any", false, false, false, 370) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            // line 371
            yield "                                    <span class=\"badge bg-warning text-dark mt-1\">Expire bientôt</span>
                                ";
        }
        // line 373
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Avoir et mouvements -->
        <div class=\"col-lg-6\">
            <!-- Informations avoir -->
            ";
        // line 383
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 383, $this->source); })()), "hasIssue", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 384
            yield "            <div class=\"card info-card border-0 shadow-sm mb-4 status-card status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 384, $this->source); })()), "issueStatus", [], "any", false, false, false, 384), "html", null, true);
            yield "\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                        Avoir fournisseur
                    </h5>
                    <span class=\"badge ";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 390, $this->source); })()), "issueStatusBadgeClass", [], "any", false, false, false, 390), "html", null, true);
            yield " fs-6 px-3 py-2\">
                        ";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 391, $this->source); })()), "issueStatusLabel", [], "any", false, false, false, 391), "html", null, true);
            yield "
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant déclaré</small>
                            <div class=\"fw-bold text-danger fs-5\">";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 398, $this->source); })()), "issueDeclaredAmount", [], "any", false, false, false, 398), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 398, $this->source); })()), "hmaService", [], "any", false, false, false, 398)), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Priorité</small>
                            <div>
                                <span class=\"badge ";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 403, $this->source); })()), "issuePriorityBadgeClass", [], "any", false, false, false, 403), "html", null, true);
            yield "\">
                                    ";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 404, $this->source); })()), "issuePriorityLabel", [], "any", false, false, false, 404), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant récupéré</small>
                            <div class=\"fw-bold text-success\">";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 412, $this->source); })()), "issueRecoveredAmount", [], "any", false, false, false, 412)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 412, $this->source); })()), "issueRecoveredAmount", [], "any", false, false, false, 412)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 412, $this->source); })()), "hmaService", [], "any", false, false, false, 412)), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant perdu</small>
                            <div class=\"fw-bold text-secondary\">";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 416, $this->source); })()), "issueLostAmount", [], "any", false, false, false, 416)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 416, $this->source); })()), "issueLostAmount", [], "any", false, false, false, 416)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 416, $this->source); })()), "hmaService", [], "any", false, false, false, 416)), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Signalé le</small>
                            <div>";
            // line 422
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 422, $this->source); })()), "issueReportedAt", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 422, $this->source); })()), "issueReportedAt", [], "any", false, false, false, 422), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Résolu le</small>
                            <div>";
            // line 426
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 426, $this->source); })()), "issueResolvedAt", [], "any", false, false, false, 426)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 426, $this->source); })()), "issueResolvedAt", [], "any", false, false, false, 426), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</div>
                        </div>
                    </div>
                    ";
            // line 429
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 429, $this->source); })()), "supplierCreditNoteId", [], "any", false, false, false, 429)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 430
                yield "                        <div class=\"mt-3 text-center\">
                            <a href=\"";
                // line 431
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 431, $this->source); })()), "supplierCreditNoteId", [], "any", false, false, false, 431)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-sm\">
                                <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                            </a>
                        </div>
                    ";
            }
            // line 436
            yield "                </div>
            </div>
            ";
        } else {
            // line 439
            yield "            <div class=\"card info-card border-0 shadow-sm mb-4 bg-light\">
                <div class=\"card-body text-center py-4\">
                    <i class=\"fas fa-check-circle fa-3x text-success mb-2\"></i>
                    <h5 class=\"mb-1\">Aucun problème signalé</h5>
                    <p class=\"text-muted small mb-3\">Ce lot n'a pas d'avoir fournisseur associé</p>
                    
                    ";
            // line 446
            yield "                    ";
            if ((($tmp = (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 446, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 447
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 447, $this->source); })()), "id", [], "any", false, false, false, 447)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                        </a>
                    ";
            } else {
                // line 451
                yield "                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" disabled title=\"Signalement non disponible (commande trop ancienne ou non réceptionnée)\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                        </button>
                        <p class=\"text-muted small mt-2\">Le signalement n'est disponible que pour les lots issus de commandes réceptionnées depuis moins de 30 jours.</p>
                    ";
            }
            // line 456
            yield "                </div>
            </div>
            ";
        }
        // line 459
        yield "
            <!-- Informations d'achat -->
            ";
        // line 461
        if ((($tmp = (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 461, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 462
            yield "            <div class=\"card info-card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-receipt me-2 text-primary\"></i>
                        Informations d'achat
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Commande</dt>
                        <dd class=\"col-sm-8\">
                            <a href=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 473, $this->source); })()), "purchase", [], "any", false, false, false, 473), "id", [], "any", false, false, false, 473)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                ";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 474, $this->source); })()), "purchase", [], "any", false, false, false, 474), "purchaseNumber", [], "any", false, false, false, 474), "html", null, true);
            yield "
                            </a>
                        </dd>
                        <dt class=\"col-sm-4 text-muted\">Fournisseur</dt>
                        <dd class=\"col-sm-8\">";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 478), "supplier", [], "any", false, true, false, 478), "name", [], "any", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 478, $this->source); })()), "purchase", [], "any", false, false, false, 478), "supplier", [], "any", false, false, false, 478), "name", [], "any", false, false, false, 478), "Non renseigné")) : ("Non renseigné")), "html", null, true);
            yield "</dd>
                        <dt class=\"col-sm-4 text-muted\">Date d'achat</dt>
                        <dd class=\"col-sm-8\">";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 480, $this->source); })()), "purchase", [], "any", false, false, false, 480), "createdAt", [], "any", false, false, false, 480), "d/m/Y"), "html", null, true);
            yield "</dd>
                        <dt class=\"col-sm-4 text-muted\">Quantité achetée</dt>
                        <dd class=\"col-sm-8\">";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 482, $this->source); })()), "quantity", [], "any", false, false, false, 482), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 482)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 482, $this->source); })()), "unit", [], "any", false, false, false, 482), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "</dd>
                        <dt class=\"col-sm-4 text-muted\">Prix d'achat</dt>
                        <dd class=\"col-sm-8\">";
            // line 484
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 484, $this->source); })()), "unitPrice", [], "any", false, false, false, 484), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 484, $this->source); })()), "hmaService", [], "any", false, false, false, 484)), "html", null, true);
            yield "</dd>
                    </dl>
                </div>
            </div>
            ";
        }
        // line 489
        yield "
            <!-- Mouvements de stock -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-exchange-alt me-2 text-info\"></i>
                        Mouvements de stock
                    </h5>
                    <span class=\"badge bg-secondary\">";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 497, $this->source); })()), "stockMovements", [], "any", false, false, false, 497)), "html", null, true);
        yield " mouvement(s)</span>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 500
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 500, $this->source); })()), "stockMovements", [], "any", false, false, false, 500)) > 0)) {
            // line 501
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 502
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 502, $this->source); })()), "stockMovements", [], "any", false, false, false, 502), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 502, $this->source); })()), "createdAt", [], "any", false, false, false, 502) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 502, $this->source); })()), "createdAt", [], "any", false, false, false, 502)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
                // line 503
                yield "                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div class=\"flex-grow-1\">
                                            <span class=\"badge 
                                                ";
                // line 507
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 507) == "PURCHASE")) {
                    yield "bg-success
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 508
$context["movement"], "movementType", [], "any", false, false, false, 508) == "SALE")) {
                    yield "bg-danger
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 509
$context["movement"], "movementType", [], "any", false, false, false, 509) == "ADJUSTMENT")) {
                    yield "bg-warning text-dark
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 510
$context["movement"], "movementType", [], "any", false, false, false, 510) == "RETURN")) {
                    yield "bg-info
                                                ";
                } else {
                    // line 511
                    yield "bg-secondary
                                                ";
                }
                // line 512
                yield " me-2\">
                                                <i class=\"fas 
                                                    ";
                // line 514
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 514) == "PURCHASE")) {
                    yield "fa-cart-plus
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 515
$context["movement"], "movementType", [], "any", false, false, false, 515) == "SALE")) {
                    yield "fa-shopping-cart
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 516
$context["movement"], "movementType", [], "any", false, false, false, 516) == "ADJUSTMENT")) {
                    yield "fa-sliders-h
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 517
$context["movement"], "movementType", [], "any", false, false, false, 517) == "RETURN")) {
                    yield "fa-undo-alt
                                                    ";
                } else {
                    // line 518
                    yield "fa-question
                                                    ";
                }
                // line 519
                yield " me-1\"></i>
                                                ";
                // line 520
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 520) == "PURCHASE")) {
                    yield "Achat
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 521
$context["movement"], "movementType", [], "any", false, false, false, 521) == "SALE")) {
                    yield "Vente
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 522
$context["movement"], "movementType", [], "any", false, false, false, 522) == "ADJUSTMENT")) {
                    yield "Ajustement
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 523
$context["movement"], "movementType", [], "any", false, false, false, 523) == "RETURN")) {
                    yield "Retour
                                                ";
                } else {
                    // line 524
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 524), "html", null, true);
                }
                // line 525
                yield "                                            </span>
                                            <span class=\"fw-bold\">";
                // line 526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 526), "html", null, true);
                yield "</span>
                                            <small class=\"text-muted\">";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 527, $this->source); })()), "unit", [], "any", false, false, false, 527), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                yield "</small>
                                            ";
                // line 528
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 529
                    yield "                                                <br><small class=\"text-muted\">Prix: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 529), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 529, $this->source); })()), "hmaService", [], "any", false, false, false, 529)), "html", null, true);
                    yield "</small>
                                            ";
                }
                // line 531
                yield "                                        </div>
                                        <div class=\"text-end\">
                                            <small class=\"text-muted\">";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 533), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                            ";
                // line 534
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 534)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 535
                    yield "                                                <br><small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>";
                    // line 536
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, true, false, 536), "fullName", [], "any", true, true, false, 536)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 536), "fullName", [], "any", false, false, false, 536), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 536), "email", [], "any", false, false, false, 536))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 536), "email", [], "any", false, false, false, 536))), "html", null, true);
                    yield "
                                                </small>
                                            ";
                }
                // line 539
                yield "                                        </div>
                                    </div>
                                    ";
                // line 541
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 541)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 542
                    yield "                                        <div class=\"mt-2\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                ";
                    // line 545
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 545), "html", null, true);
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 549
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            yield "                        </div>
                    ";
        } else {
            // line 553
            yield "                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun mouvement de stock</p>
                        </div>
                    ";
        }
        // line 558
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 565
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

        // line 566
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const printBtn = document.querySelector('button[onclick=\"window.print()\"]');
    if (printBtn) {
        printBtn.addEventListener('click', function() {
            setTimeout(() => {
                window.print();
            }, 100);
        });
    }
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
        return "admin/stock_batch/show.html.twig";
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
        return array (  1159 => 566,  1146 => 565,  1130 => 558,  1123 => 553,  1119 => 551,  1112 => 549,  1105 => 545,  1100 => 542,  1098 => 541,  1094 => 539,  1088 => 536,  1085 => 535,  1083 => 534,  1079 => 533,  1075 => 531,  1069 => 529,  1067 => 528,  1063 => 527,  1059 => 526,  1056 => 525,  1053 => 524,  1048 => 523,  1044 => 522,  1040 => 521,  1036 => 520,  1033 => 519,  1029 => 518,  1024 => 517,  1020 => 516,  1016 => 515,  1012 => 514,  1008 => 512,  1004 => 511,  999 => 510,  995 => 509,  991 => 508,  987 => 507,  981 => 503,  977 => 502,  974 => 501,  972 => 500,  966 => 497,  956 => 489,  948 => 484,  941 => 482,  936 => 480,  931 => 478,  924 => 474,  920 => 473,  907 => 462,  905 => 461,  901 => 459,  896 => 456,  889 => 451,  881 => 447,  878 => 446,  870 => 439,  865 => 436,  857 => 431,  854 => 430,  852 => 429,  846 => 426,  839 => 422,  830 => 416,  823 => 412,  812 => 404,  808 => 403,  800 => 398,  790 => 391,  786 => 390,  776 => 384,  774 => 383,  762 => 373,  758 => 371,  756 => 370,  753 => 369,  751 => 368,  746 => 366,  736 => 365,  726 => 358,  702 => 337,  693 => 331,  681 => 322,  671 => 321,  665 => 318,  657 => 312,  653 => 310,  651 => 309,  647 => 308,  642 => 306,  634 => 305,  625 => 299,  621 => 298,  599 => 278,  595 => 276,  592 => 275,  588 => 273,  586 => 272,  583 => 271,  581 => 270,  576 => 268,  571 => 267,  569 => 266,  560 => 260,  556 => 259,  552 => 258,  546 => 254,  542 => 252,  536 => 249,  532 => 247,  530 => 246,  520 => 239,  514 => 236,  506 => 231,  502 => 230,  495 => 226,  471 => 205,  468 => 204,  465 => 203,  459 => 199,  456 => 198,  450 => 194,  447 => 193,  441 => 189,  435 => 186,  429 => 184,  426 => 183,  423 => 182,  420 => 181,  417 => 180,  414 => 179,  412 => 178,  409 => 177,  401 => 173,  398 => 172,  390 => 168,  384 => 165,  376 => 163,  373 => 162,  370 => 161,  367 => 160,  364 => 159,  361 => 158,  359 => 157,  356 => 156,  350 => 152,  342 => 148,  339 => 147,  336 => 146,  334 => 145,  331 => 144,  328 => 142,  320 => 138,  318 => 137,  310 => 131,  307 => 130,  303 => 128,  299 => 126,  293 => 124,  291 => 123,  287 => 122,  278 => 120,  275 => 119,  272 => 118,  269 => 117,  266 => 116,  263 => 115,  260 => 114,  255 => 113,  251 => 112,  245 => 109,  237 => 104,  233 => 103,  227 => 102,  223 => 101,  215 => 95,  202 => 94,  105 => 7,  92 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Lot {{ batch.batchNumber }} - {{ product.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .info-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
    }
    .info-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1) !important;
    }
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 1.5rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.75rem;
        top: 0.25rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--primary-color);
        border: 2px solid white;
        box-shadow: 0 0 0 2px var(--primary-color);
    }
    .timeline-item.issue::before {
        background: var(--danger-color);
        box-shadow: 0 0 0 2px var(--danger-color);
    }
    .timeline-item.resolved::before {
        background: var(--success-color);
        box-shadow: 0 0 0 2px var(--success-color);
    }
    .issue-badge {
        font-size: 0.75rem;
        padding: 0.3rem 0.6rem;
    }
    .attachment-preview {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .attachment-preview:hover {
        transform: scale(1.05);
    }
    .status-card {
        border-left: 4px solid;
    }
    .status-pending { border-left-color: var(--warning-color); }
    .status-acknowledged { border-left-color: var(--info-color); }
    .status-under_review { border-left-color: var(--primary-color); }
    .status-recovered { border-left-color: var(--success-color); }
    .status-lost { border-left-color: var(--danger-color); }
    .status-closed { border-left-color: #6c757d; }
    .badge i { margin-right: 4px; }
    @media print {
        .no-print, .btn, .dropdown, .modal, .actions { display: none !important; }
        body { padding: 20px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .info-card { transform: none !important; }
    }
    .btn-action {
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        transform: translateY(-2px);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3 no-print\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_product_index') }}\">Produits</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\">{{ product.name|u.truncate(30) }}</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\">Lots</a></li>
                    <li class=\"breadcrumb-item active\">{{ batch.batchNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                Lot {{ batch.batchNumber }}
            </h1>
            <p class=\"text-muted mt-1\">
                <i class=\"fas fa-calendar-alt me-1\"></i> Créé le {{ batch.createdAt|date('d/m/Y H:i') }}
                {% if batch.updatedAt %} | Modifié le {{ batch.updatedAt|date('d/m/Y H:i') }}{% endif %}
                {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                    {% set purchase = purchaseItem.purchase %}
                    {% if purchase.receivedAt %}
                        {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                        {% set daysRemaining = 30 - daysSinceReception %}
                        <br>
                        <span class=\"badge {% if daysRemaining > 0 %}bg-success{% else %}bg-secondary{% endif %}\">
                            <i class=\"fas fa-calendar-check me-1\"></i>
                            Réceptionné le {{ purchase.receivedAt|date('d/m/Y') }}
                            {% if daysRemaining > 0 %}
                                ({{ daysRemaining }} jour(s) restant pour signaler)
                            {% else %}
                                (Délai de signalement expiré)
                            {% endif %}
                        </span>
                    {% endif %}
                {% endif %}
            </p>
        </div>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" onclick=\"window.print()\" title=\"Imprimer\">
                <i class=\"fas fa-print me-1\"></i> Imprimer
            </button>
            {% if canEdit %}
                <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" class=\"btn btn-warning btn-action\">
                    <i class=\"fas fa-edit me-1\"></i> Modifier
                </a>
            {% endif %}
            
            {# ✅ CONDITION POUR SIGNALER UN PROBLÈME #}
            {% if batch.hasIssue %}
                {# Si le lot a un avoir #}
                {% set creditNote = supplierCreditNote is defined ? supplierCreditNote : null %}
                {% if creditNote %}
                    <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" class=\"btn btn-outline-info btn-action\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Voir l'avoir
                    </a>
                {% else %}
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Avoir non trouvé\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoir introuvable
                    </button>
                {% endif %}
            {% elseif canReportIssue is defined and canReportIssue %}
                {# Si le signalement est autorisé - calcul du temps restant #}
                {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                    {% set purchase = purchaseItem.purchase %}
                    {% if purchase.receivedAt %}
                        {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                        {% set daysRemaining = 30 - daysSinceReception %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-action\" title=\"Encore {{ daysRemaining }} jour(s) pour signaler un problème\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                            <span class=\"badge bg-danger ms-1\">{{ daysRemaining }}j</span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-action\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                        </a>
                    {% endif %}
                {% else %}
                    <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-action\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                    </a>
                {% endif %}
            {% else %}
                {# Si le signalement n'est pas autorisé #}
                {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                    {% set purchase = purchaseItem.purchase %}
                    {% if purchase.receivedAt %}
                        {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                        {% if daysSinceReception > 30 %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Délai de 30 jours dépassé ({{ daysSinceReception }} jours)\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement expiré
                                <span class=\"badge bg-secondary ms-1\">+{{ daysSinceReception - 30 }}j</span>
                            </button>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Commande non réceptionnée\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                            </button>
                        {% endif %}
                    {% else %}
                        <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Commande non réceptionnée\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                        </button>
                    {% endif %}
                {% else %}
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" disabled title=\"Signalement non disponible\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                    </button>
                {% endif %}
            {% endif %}
            
            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <!-- Colonne gauche - Informations générales -->
        <div class=\"col-lg-6\">
            <div class=\"card info-card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Numéro de lot</dt>
                                <dd class=\"col-sm-7 fw-bold\">{{ batch.batchNumber }}</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Produit</dt>
                                <dd class=\"col-sm-7\">
                                    <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"text-decoration-none\">
                                        {{ product.name }}
                                    </a>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">{{ product.barcode }}</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">{{ product.category ? product.category.name : 'Non catégorisé' }}</dd>
                            </dl>
                        </div>
                        <div class=\"col-md-6\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Emplacement</dt>
                                <dd class=\"col-sm-7\">
                                    {% if batch.location or batch.locationEntity %}
                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> 
                                            {{ batch.locationEntity ? batch.locationEntity.displayName : batch.location }}
                                        </span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Statut</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        <i class=\"fas {{ batch.isActive ? 'fa-check-circle' : 'fa-pause-circle' }} me-1\"></i>
                                        {{ batch.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Avoir</dt>
                                <dd class=\"col-sm-7\">
                                    {% if batch.hasIssue %}
                                        <span class=\"badge {{ batch.issueStatusBadgeClass }}\">
                                            {{ batch.issueStatusLabel }}
                                        </span>
                                        {% if batch.issuePriority == 'critical' %}
                                            <span class=\"badge bg-danger ms-1\">Critique</span>
                                        {% elseif batch.issuePriority == 'high' %}
                                            <span class=\"badge bg-warning text-dark ms-1\">Haute priorité</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"text-muted\">Aucun</span>
                                    {% endif %}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quantités et prix -->
            <div class=\"card info-card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-line me-2 text-success\"></i>
                        Quantités et prix
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Quantité initiale</small>
                                <h3 class=\"mb-0 fw-bold text-primary\">{{ batch.initialQuantity }}</h3>
                                <small>{{ product.unit|default('pièce(s)') }}</small>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Quantité actuelle</small>
                                <h3 class=\"mb-0 fw-bold {% if batch.currentQuantity <= 10 %}text-danger{% else %}text-success{% endif %}\">
                                    {{ batch.currentQuantity }}
                                </h3>
                                <small>{{ product.unit|default('pièce(s)') }}</small>
                                {% if batch.currentQuantity <= 10 %}
                                    <span class=\"badge bg-warning text-dark mt-1 d-block\">Stock faible</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Pourcentage restant</small>
                                <h3 class=\"mb-0 fw-bold\">
                                    {{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%
                                </h3>
                                <div class=\"progress mt-2\" style=\"height:8px\">
                                    <div class=\"progress-bar {% if batch.currentQuantity/batch.initialQuantity*100 <= 10 %}bg-danger{% elseif batch.currentQuantity/batch.initialQuantity*100 <= 30 %}bg-warning{% else %}bg-success{% endif %}\" 
                                         style=\"width: {{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Prix unitaire</small>
                                <h4 class=\"mb-0 fw-bold text-primary\">{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</h4>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Valeur totale</small>
                                <h4 class=\"mb-0 fw-bold text-success\">{{ (batch.currentQuantity * batch.unitPrice)|price_with_currency(batch.hmaService) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dates -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                        Dates
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Date de fabrication</small>
                                <h5 class=\"mb-0 fw-bold\">
                                    {{ batch.manufacturingDate ? batch.manufacturingDate|date('d/m/Y') : 'Non renseignée' }}
                                </h5>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Date d'expiration</small>
                                <h5 class=\"mb-0 fw-bold {% if batch.expiryDate and batch.expiryDate < date() %}text-danger{% elseif batch.expiryDate and batch.expiryDate < date('+30 days') %}text-warning{% else %}text-success{% endif %}\">
                                    {{ batch.expiryDate ? batch.expiryDate|date('d/m/Y') : 'Non périssable' }}
                                </h5>
                                {% if batch.expiryDate and batch.expiryDate < date() %}
                                    <span class=\"badge bg-danger mt-1\">Expiré</span>
                                {% elseif batch.expiryDate and batch.expiryDate < date('+30 days') %}
                                    <span class=\"badge bg-warning text-dark mt-1\">Expire bientôt</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Avoir et mouvements -->
        <div class=\"col-lg-6\">
            <!-- Informations avoir -->
            {% if batch.hasIssue %}
            <div class=\"card info-card border-0 shadow-sm mb-4 status-card status-{{ batch.issueStatus }}\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                        Avoir fournisseur
                    </h5>
                    <span class=\"badge {{ batch.issueStatusBadgeClass }} fs-6 px-3 py-2\">
                        {{ batch.issueStatusLabel }}
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant déclaré</small>
                            <div class=\"fw-bold text-danger fs-5\">{{ batch.issueDeclaredAmount|price_with_currency(batch.hmaService) }}</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Priorité</small>
                            <div>
                                <span class=\"badge {{ batch.issuePriorityBadgeClass }}\">
                                    {{ batch.issuePriorityLabel }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant récupéré</small>
                            <div class=\"fw-bold text-success\">{{ (batch.issueRecoveredAmount ?: 0)|price_with_currency(batch.hmaService) }}</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant perdu</small>
                            <div class=\"fw-bold text-secondary\">{{ (batch.issueLostAmount ?: 0)|price_with_currency(batch.hmaService) }}</div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Signalé le</small>
                            <div>{{ batch.issueReportedAt ? batch.issueReportedAt|date('d/m/Y H:i') : '—' }}</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Résolu le</small>
                            <div>{{ batch.issueResolvedAt ? batch.issueResolvedAt|date('d/m/Y H:i') : '—' }}</div>
                        </div>
                    </div>
                    {% if batch.supplierCreditNoteId %}
                        <div class=\"mt-3 text-center\">
                            <a href=\"{{ path('app_supplier_credit_note_show', {'id': batch.supplierCreditNoteId}) }}\" class=\"btn btn-outline-danger btn-sm\">
                                <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
            {% else %}
            <div class=\"card info-card border-0 shadow-sm mb-4 bg-light\">
                <div class=\"card-body text-center py-4\">
                    <i class=\"fas fa-check-circle fa-3x text-success mb-2\"></i>
                    <h5 class=\"mb-1\">Aucun problème signalé</h5>
                    <p class=\"text-muted small mb-3\">Ce lot n'a pas d'avoir fournisseur associé</p>
                    
                    {# ✅ CONDITION POUR SIGNALER UN PROBLÈME #}
                    {% if canReportIssue %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                        </a>
                    {% else %}
                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" disabled title=\"Signalement non disponible (commande trop ancienne ou non réceptionnée)\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                        </button>
                        <p class=\"text-muted small mt-2\">Le signalement n'est disponible que pour les lots issus de commandes réceptionnées depuis moins de 30 jours.</p>
                    {% endif %}
                </div>
            </div>
            {% endif %}

            <!-- Informations d'achat -->
            {% if purchaseItem %}
            <div class=\"card info-card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-receipt me-2 text-primary\"></i>
                        Informations d'achat
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Commande</dt>
                        <dd class=\"col-sm-8\">
                            <a href=\"{{ path('purchase_show', {'id': purchaseItem.purchase.id}) }}\" class=\"text-decoration-none\">
                                {{ purchaseItem.purchase.purchaseNumber }}
                            </a>
                        </dd>
                        <dt class=\"col-sm-4 text-muted\">Fournisseur</dt>
                        <dd class=\"col-sm-8\">{{ purchaseItem.purchase.supplier.name|default('Non renseigné') }}</dd>
                        <dt class=\"col-sm-4 text-muted\">Date d'achat</dt>
                        <dd class=\"col-sm-8\">{{ purchaseItem.purchase.createdAt|date('d/m/Y') }}</dd>
                        <dt class=\"col-sm-4 text-muted\">Quantité achetée</dt>
                        <dd class=\"col-sm-8\">{{ purchaseItem.quantity }} {{ product.unit|default('pièce(s)') }}</dd>
                        <dt class=\"col-sm-4 text-muted\">Prix d'achat</dt>
                        <dd class=\"col-sm-8\">{{ purchaseItem.unitPrice|price_with_currency(batch.hmaService) }}</dd>
                    </dl>
                </div>
            </div>
            {% endif %}

            <!-- Mouvements de stock -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-exchange-alt me-2 text-info\"></i>
                        Mouvements de stock
                    </h5>
                    <span class=\"badge bg-secondary\">{{ batch.stockMovements|length }} mouvement(s)</span>
                </div>
                <div class=\"card-body p-0\">
                    {% if batch.stockMovements|length > 0 %}
                        <div class=\"list-group list-group-flush\">
                            {% for movement in batch.stockMovements|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div class=\"flex-grow-1\">
                                            <span class=\"badge 
                                                {% if movement.movementType == 'PURCHASE' %}bg-success
                                                {% elseif movement.movementType == 'SALE' %}bg-danger
                                                {% elseif movement.movementType == 'ADJUSTMENT' %}bg-warning text-dark
                                                {% elseif movement.movementType == 'RETURN' %}bg-info
                                                {% else %}bg-secondary
                                                {% endif %} me-2\">
                                                <i class=\"fas 
                                                    {% if movement.movementType == 'PURCHASE' %}fa-cart-plus
                                                    {% elseif movement.movementType == 'SALE' %}fa-shopping-cart
                                                    {% elseif movement.movementType == 'ADJUSTMENT' %}fa-sliders-h
                                                    {% elseif movement.movementType == 'RETURN' %}fa-undo-alt
                                                    {% else %}fa-question
                                                    {% endif %} me-1\"></i>
                                                {% if movement.movementType == 'PURCHASE' %}Achat
                                                {% elseif movement.movementType == 'SALE' %}Vente
                                                {% elseif movement.movementType == 'ADJUSTMENT' %}Ajustement
                                                {% elseif movement.movementType == 'RETURN' %}Retour
                                                {% else %}{{ movement.movementType }}{% endif %}
                                            </span>
                                            <span class=\"fw-bold\">{{ movement.quantity }}</span>
                                            <small class=\"text-muted\">{{ product.unit|default('pièce(s)') }}</small>
                                            {% if movement.unitPrice %}
                                                <br><small class=\"text-muted\">Prix: {{ movement.unitPrice|price_with_currency(batch.hmaService) }}</small>
                                            {% endif %}
                                        </div>
                                        <div class=\"text-end\">
                                            <small class=\"text-muted\">{{ movement.createdAt|date('d/m/Y H:i') }}</small>
                                            {% if movement.user %}
                                                <br><small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>{{ movement.user.fullName|default(movement.user.email) }}
                                                </small>
                                            {% endif %}
                                        </div>
                                    </div>
                                    {% if movement.notes %}
                                        <div class=\"mt-2\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                {{ movement.notes }}
                                            </small>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun mouvement de stock</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const printBtn = document.querySelector('button[onclick=\"window.print()\"]');
    if (printBtn) {
        printBtn.addEventListener('click', function() {
            setTimeout(() => {
                window.print();
            }, 100);
        });
    }
});
</script>
{% endblock %}", "admin/stock_batch/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\show.html.twig");
    }
}
