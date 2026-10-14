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

/* return/show.html.twig */
class __TwigTemplate_2cbec3a779c2e987fec6644c2f3beea6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/show.html.twig"));

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

        yield "Retour #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 4, $this->source); })()), "returnNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
    .status-badge {
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 600;
        display: inline-block;
    }
    @media (min-width: 768px) {
        .status-badge {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-approved { background: #dbeafe; color: #2563eb; }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-rejected { background: #fee2e2; color: #dc2626; }
    
    .info-card {
        background: white;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }
    @media (min-width: 768px) {
        .info-card {
            border-radius: 16px;
        }
    }
    .info-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 0.75rem 1rem;
    }
    @media (min-width: 768px) {
        .info-card .card-header {
            padding: 1rem 1.25rem;
        }
    }
    .info-item {
        padding: 0.5rem 1rem;
        border-bottom: 1px solid #f1f5f9;
    }
    @media (min-width: 768px) {
        .info-item {
            padding: 0.75rem 1.25rem;
        }
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.65rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    @media (min-width: 768px) {
        .info-label {
            font-size: 0.75rem;
        }
    }
    .info-value {
        font-weight: 600;
        font-size: 0.85rem;
    }
    @media (min-width: 768px) {
        .info-value {
            font-size: 1rem;
        }
    }
    
    .motif-badge {
        background-color: #0463f1 !important;
        color: white !important;
        padding: 4px 10px !important;
        border-radius: 20px !important;
        font-weight: 500 !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
        font-size: 0.75rem !important;
    }
    @media (min-width: 768px) {
        .motif-badge {
            padding: 6px 12px !important;
            gap: 6px !important;
            font-size: 0.85rem !important;
        }
    }
    
    .card-header-actions {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: stretch;
        flex-wrap: wrap;
        gap: 0.5rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .card-header-actions {
            flex-direction: row;
            align-items: center;
            gap: 1rem;
        }
    }
    
    /* ✅ ACTIONS GROUP - BIEN ALIGNÉES */
    .action-buttons-group {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .action-buttons-group .btn {
        padding: 0.3rem 0.6rem;
        font-weight: 500;
        font-size: 0.75rem;
        transition: transform 0.2s, box-shadow 0.2s;
        flex: 1;
        min-width: 80px;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        white-space: nowrap;
    }
    @media (min-width: 768px) {
        .action-buttons-group .btn {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            flex: 0 1 auto;
            min-width: auto;
        }
    }
    .action-buttons-group .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    /* ✅ BOUTONS HEADER */
    .header-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .header-buttons .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        white-space: nowrap;
    }
    @media (max-width: 576px) {
        .header-buttons .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .header-buttons .btn i {
            font-size: 0.7rem !important;
        }
    }
    
    .quantity-this-return {
        background-color: #8b5cf6 !important;
        color: white !important;
        font-size: 0.7rem !important;
        padding: 3px 8px !important;
        border-radius: 8px !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
    }
    @media (min-width: 768px) {
        .quantity-this-return {
            font-size: 0.85rem !important;
            padding: 5px 10px !important;
            gap: 6px !important;
        }
    }
    
    /* Table responsive */
    .table-return-items {
        font-size: 0.75rem;
    }
    @media (min-width: 768px) {
        .table-return-items {
            font-size: 0.9rem;
        }
    }
    .table-return-items th,
    .table-return-items td {
        padding: 0.4rem 0.3rem;
        vertical-align: middle;
    }
    @media (min-width: 768px) {
        .table-return-items th,
        .table-return-items td {
            padding: 0.6rem 0.75rem;
        }
    }
    
    /* Container responsive */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .h2 {
            font-size: 1.3rem !important;
        }
        .h5 {
            font-size: 0.9rem !important;
        }
        .h4 {
            font-size: 1.1rem !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
    }
    
    /* Badge progress bar */
    .progress-bar-custom {
        height: 4px;
        background-color: #e5e7eb;
        border-radius: 10px;
        overflow: hidden;
    }
    @media (min-width: 768px) {
        .progress-bar-custom {
            height: 6px;
        }
    }
    
    /* Modal responsive */
    @media (max-width: 576px) {
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.5rem !important;
        }
    }
    
    /* User avatar responsive */
    .user-avatar-sm {
        width: 28px;
        height: 28px;
    }
    @media (min-width: 768px) {
        .user-avatar-sm {
            width: 32px;
            height: 32px;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 281
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

        // line 282
        yield "<div class=\"container-fluid px-2 px-md-4 py-3 py-md-4\">
    <!-- ✅ EN-TÊTE AVEC BOUTONS BIEN ALIGNÉS -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h4 h-md-2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Retour #";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 288, $this->source); })()), "returnNumber", [], "any", false, false, false, 288), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted small\">Créé le ";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 290, $this->source); })()), "createdAt", [], "any", false, false, false, 290), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        </div>
        <div class=\"header-buttons\">
            <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
            ";
        // line 296
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 296, $this->source); })()), "status", [], "any", false, false, false, 296) == "pending")) {
            // line 297
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 297, $this->source); })()), "id", [], "any", false, false, false, 297)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                </a>
            ";
        }
        // line 301
        yield "            ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 301, $this->source); })()), "status", [], "any", false, false, false, 301) == "pending") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 301, $this->source); })()), "status", [], "any", false, false, false, 301) == "approved"))) {
            // line 302
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_print_receipt", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 302, $this->source); })()), "id", [], "any", false, false, false, 302)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
                </a>
            ";
        }
        // line 306
        yield "        </div>
    </div>

    <div class=\"row g-3 g-md-4\">
        <div class=\"col-12 col-lg-4\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-info-circle me-2\"></i> Informations générales</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 318
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 318, $this->source); })()), "status", [], "any", false, false, false, 318) == "pending")) {
            // line 319
            yield "                            <span class=\"status-badge status-pending\">⏳ En attente</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 320
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 320, $this->source); })()), "status", [], "any", false, false, false, 320) == "approved")) {
            // line 321
            yield "                            <span class=\"status-badge status-approved\">✓ Approuvé</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 322
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 322, $this->source); })()), "status", [], "any", false, false, false, 322) == "completed")) {
            // line 323
            yield "                            <span class=\"status-badge status-completed\">✅ Remboursé</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 324
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 324, $this->source); })()), "status", [], "any", false, false, false, 324) == "rejected")) {
            // line 325
            yield "                            <span class=\"status-badge status-rejected\">❌ Rejeté</span>
                        ";
        }
        // line 327
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">N° commande</div>
                    <div class=\"info-value\">
                        <a href=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 332, $this->source); })()), "originalOrder", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332)]), "html", null, true);
        yield "\" class=\"text-primary small\">
                            ";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 333, $this->source); })()), "orderNumber", [], "any", false, false, false, 333), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">";
        // line 339
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 339, $this->source); })()), "customerName", [], "any", false, false, false, 339)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 339, $this->source); })()), "customerName", [], "any", false, false, false, 339), "html", null, true)) : ("Non renseigné"));
        yield "</div>
                    <div class=\"small text-muted\">";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 340, $this->source); })()), "customerPhone", [], "any", false, false, false, 340), "html", null, true);
        yield "</div>
                </div>
            </div>

            <!-- Validation -->
            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-user-check me-2\"></i> Validation</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Enregistré par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
        // line 353
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 353, $this->source); })()), "returnedBy", [], "any", false, false, false, 353), "photo", [], "any", false, false, false, 353)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 354
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 354, $this->source); })()), "returnedBy", [], "any", false, false, false, 354), "photo", [], "any", false, false, false, 354))), "html", null, true);
            yield "\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            ";
        } else {
            // line 356
            yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            ";
        }
        // line 360
        yield "                            <div>
                                <strong class=\"small\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 361, $this->source); })()), "returnedBy", [], "any", false, false, false, 361), "fullName", [], "any", false, false, false, 361), "html", null, true);
        yield "</strong>
                                <br><small class=\"text-muted\">";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 362, $this->source); })()), "returnedBy", [], "any", false, false, false, 362), "email", [], "any", false, false, false, 362)), "truncate", [20], "method", false, false, false, 362), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 368
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 368, $this->source); })()), "approvedBy", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 369
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Approuvé par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
            // line 373
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 373, $this->source); })()), "approvedBy", [], "any", false, false, false, 373), "photo", [], "any", false, false, false, 373)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 374
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 374, $this->source); })()), "approvedBy", [], "any", false, false, false, 374), "photo", [], "any", false, false, false, 374))), "html", null, true);
                yield "\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            ";
            } else {
                // line 376
                yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            ";
            }
            // line 380
            yield "                            <div>
                                <strong class=\"small\">";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 381, $this->source); })()), "approvedBy", [], "any", false, false, false, 381), "fullName", [], "any", false, false, false, 381), "html", null, true);
            yield "</strong>
                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-calendar me-1\"></i> ";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 383, $this->source); })()), "approvedAt", [], "any", false, false, false, 383), "d/m/Y H:i"), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 390
        yield "                
                ";
        // line 391
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 391, $this->source); })()), "completedBy", [], "any", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 392
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Remboursé par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
            // line 396
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 396, $this->source); })()), "completedBy", [], "any", false, false, false, 396), "photo", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 397
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 397, $this->source); })()), "completedBy", [], "any", false, false, false, 397), "photo", [], "any", false, false, false, 397))), "html", null, true);
                yield "\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            ";
            } else {
                // line 399
                yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            ";
            }
            // line 403
            yield "                            <div>
                                <strong class=\"small\">";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 404, $this->source); })()), "completedBy", [], "any", false, false, false, 404), "fullName", [], "any", false, false, false, 404), "html", null, true);
            yield "</strong>
                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-calendar me-1\"></i> ";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 406, $this->source); })()), "completedAt", [], "any", false, false, false, 406), "d/m/Y H:i"), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 413
        yield "            </div>

            <!-- Montants -->
            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-line me-2\"></i> Montants</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Total à rembourser</div>
                    <div class=\"info-value h5 h-md-4 text-primary mb-0\">";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 422, $this->source); })()), "totalRefundAmount", [], "any", false, false, false, 422), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Méthode de remboursement</div>
                    <div class=\"info-value small\">
                        ";
        // line 427
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 427, $this->source); })()), "refundMethod", [], "any", false, false, false, 427) == "cash")) {
            // line 428
            yield "                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 429
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 429, $this->source); })()), "refundMethod", [], "any", false, false, false, 429) == "mobile_money")) {
            // line 430
            yield "                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 431
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 431, $this->source); })()), "refundMethod", [], "any", false, false, false, 431) == "bank_transfer")) {
            // line 432
            yield "                            <i class=\"fas fa-university text-primary me-1\"></i> Virement bancaire
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 433
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 433, $this->source); })()), "refundMethod", [], "any", false, false, false, 433) == "wallet")) {
            // line 434
            yield "                            <i class=\"fas fa-wallet text-secondary me-1\"></i> Porte-monnaie
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 435
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 435, $this->source); })()), "refundMethod", [], "any", false, false, false, 435) == "credit_note")) {
            // line 436
            yield "                            <i class=\"fas fa-file-invoice text-warning me-1\"></i> Avoir
                        ";
        }
        // line 438
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-lg-8\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <div class=\"card-header-actions\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-boxes me-2\"></i> Articles retournés</h5>
                        
                        <div class=\"action-buttons-group\">
                            ";
        // line 450
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 450, $this->source); })()), "status", [], "any", false, false, false, 450) == "pending") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
            // line 451
            yield "                                <button type=\"button\" class=\"btn btn-danger\" id=\"rejectReturnBtn\">
                                    <i class=\"fas fa-times me-1\"></i> Rejeter
                                </button>
                                <button type=\"button\" class=\"btn btn-success\" id=\"approveReturnBtn\">
                                    <i class=\"fas fa-check me-1\"></i> Approuver
                                </button>
                            ";
        }
        // line 458
        yield "                            
                            ";
        // line 459
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 459, $this->source); })()), "status", [], "any", false, false, false, 459) == "approved") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
            // line 460
            yield "                                <button type=\"button\" class=\"btn btn-primary\" id=\"completeReturnBtn\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> <span class=\"d-none d-sm-inline\">Rembourser</span>
                                </button>
                            ";
        }
        // line 464
        yield "                        </div>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 table-return-items\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 80px;\">Article</th>
                                <th class=\"text-center\" style=\"min-width: 80px;\">
                                    Total retourné
                                </th>
                                <th class=\"text-center\" style=\"min-width: 60px;\">
                                    <span class=\"d-none d-sm-inline\">Dans ce retour</span>
                                    <span class=\"d-inline d-sm-none\">Quant.</span>
                                </th>
                                <th class=\"text-center d-none d-md-table-cell\">Prix unitaire</th>
                                <th class=\"text-center\" style=\"min-width: 70px;\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 484, $this->source); })()), "returnItems", [], "any", false, false, false, 484));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 485
            yield "                                ";
            $context["totalReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["totalReturnedQuantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485), [], "array", true, true, false, 485)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["totalReturnedQuantities"]) || array_key_exists("totalReturnedQuantities", $context) ? $context["totalReturnedQuantities"] : (function () { throw new RuntimeError('Variable "totalReturnedQuantities" does not exist.', 485, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485), [], "array", false, false, false, 485), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 485))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 485)));
            // line 486
            yield "                                ";
            $context["totalOrderQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 486), "quantity", [], "any", false, false, false, 486);
            // line 487
            yield "                                ";
            $context["remaining"] = ((isset($context["totalOrderQty"]) || array_key_exists("totalOrderQty", $context) ? $context["totalOrderQty"] : (function () { throw new RuntimeError('Variable "totalOrderQty" does not exist.', 487, $this->source); })()) - (isset($context["totalReturned"]) || array_key_exists("totalReturned", $context) ? $context["totalReturned"] : (function () { throw new RuntimeError('Variable "totalReturned" does not exist.', 487, $this->source); })()));
            // line 488
            yield "                                ";
            $context["returnPercentage"] = Twig\Extension\CoreExtension::round((((isset($context["totalReturned"]) || array_key_exists("totalReturned", $context) ? $context["totalReturned"] : (function () { throw new RuntimeError('Variable "totalReturned" does not exist.', 488, $this->source); })()) / (isset($context["totalOrderQty"]) || array_key_exists("totalOrderQty", $context) ? $context["totalOrderQty"] : (function () { throw new RuntimeError('Variable "totalOrderQty" does not exist.', 488, $this->source); })())) * 100));
            // line 489
            yield "                                
                                <tr>
                                    <td>
                                        <strong class=\"small\">";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 492)), "truncate", [20], "method", false, false, false, 492), "html", null, true);
            yield "</strong>
                                        ";
            // line 493
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 493)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 494
                yield "                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 494)), "truncate", [10], "method", false, false, false, 494), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 496
            yield "                                        <br><small class=\"text-muted d-none d-sm-inline\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemType", [], "any", false, false, false, 496) == "recipe")) ? ("Menu") : ("Produit"));
            yield "</small>
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex align-items-center justify-content-center gap-1 gap-md-2 flex-wrap\">
                                            <span class=\"badge\" style=\"background: #dc2626; color: white; font-size: 0.7rem; padding: 4px 8px;\">
                                                <i class=\"fas fa-undo-alt me-1\"></i> ";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReturned"]) || array_key_exists("totalReturned", $context) ? $context["totalReturned"] : (function () { throw new RuntimeError('Variable "totalReturned" does not exist.', 501, $this->source); })()), "html", null, true);
            yield "
                                            </span>
                                            <span class=\"text-muted fw-bold small\">/</span>
                                            <span class=\"badge\" style=\"background: #0463f1; color: white; font-size: 0.7rem; padding: 4px 8px;\">
                                                <i class=\"fas fa-box me-1\"></i> ";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalOrderQty"]) || array_key_exists("totalOrderQty", $context) ? $context["totalOrderQty"] : (function () { throw new RuntimeError('Variable "totalOrderQty" does not exist.', 505, $this->source); })()), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                        
                                        <div class=\"progress-bar-custom mt-1\" style=\"width: 80px; margin: 0 auto;\">
                                            <div style=\"width: ";
            // line 510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["returnPercentage"]) || array_key_exists("returnPercentage", $context) ? $context["returnPercentage"] : (function () { throw new RuntimeError('Variable "returnPercentage" does not exist.', 510, $this->source); })()), "html", null, true);
            yield "%; background-color: #dc2626; height: 4px;\"></div>
                                        </div>
                                        
                                        <div class=\"mt-1\">
                                            ";
            // line 514
            if (((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 514, $this->source); })()) > 0)) {
                // line 515
                yield "                                                <span class=\"badge\" style=\"background: #f59e0b; color: white; font-size: 0.55rem; padding: 2px 6px; border-radius: 20px;\">
                                                    <i class=\"fas fa-box-open me-1\"></i> ";
                // line 516
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 516, $this->source); })()), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 519
                yield "                                                <span class=\"badge\" style=\"background: #10b981; color: white; font-size: 0.55rem; padding: 2px 6px; border-radius: 20px;\">
                                                    <i class=\"fas fa-check-circle me-1\"></i> Complet
                                                </span>
                                            ";
            }
            // line 523
            yield "                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"quantity-this-return\" style=\"font-size: 0.65rem; padding: 2px 6px;\">
                                            <i class=\"fas fa-exchange-alt me-1\"></i> ";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 527), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"text-center d-none d-md-table-cell\">
                                        ";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 531), 0, ",", " "), "html", null, true);
            yield " FCFA
                                    </td>
                                    <td class=\"text-center\">
                                        <strong class=\"text-primary small\">";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalRefund", [], "any", false, false, false, 534), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"4\" class=\"text-end fw-bold small\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5 h-md-4\">
                                    ";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 543, $this->source); })()), "totalRefundAmount", [], "any", false, false, false, 543), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-comment me-2\"></i> Motif et notes</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Motif du retour</div>
                    <div class=\"info-value\">
                        <span class=\"motif-badge\">
                            <i class=\"fas fa-tag me-1\"></i> ";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 559, $this->source); })()), "reason", [], "any", false, false, false, 559), [], "array", true, true, false, 559)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 559, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 559, $this->source); })()), "reason", [], "any", false, false, false, 559), [], "array", false, false, false, 559), CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 559, $this->source); })()), "reason", [], "any", false, false, false, 559))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 559, $this->source); })()), "reason", [], "any", false, false, false, 559))), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                ";
        // line 563
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 563, $this->source); })()), "reasonNotes", [], "any", false, false, false, 563)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 564
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Détails du motif</div>
                    <div class=\"info-value small\">";
            // line 566
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 566, $this->source); })()), "reasonNotes", [], "any", false, false, false, 566), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 569
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 569, $this->source); })()), "notes", [], "any", false, false, false, 569)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 570
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Notes internes</div>
                    <div class=\"info-value text-muted small\">";
            // line 572
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 572, $this->source); })()), "notes", [], "any", false, false, false, 572), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 575
        yield "            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"confirmApproveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-check-circle me-2\"></i> Approuver</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-check-circle fa-2x fa-md-3x text-success mb-3\"></i>
                <p class=\"small\">Approuver cette demande de retour ?</p>
                <p class=\"text-muted small\">Le retour pourra ensuite être remboursé.</p>
            </div>
            <div class=\"modal-footer justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"confirmApproveBtn\">Approuver</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmRejectModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-ban me-2\"></i> Rejeter</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\">
                    <i class=\"fas fa-exclamation-triangle fa-2x fa-md-3x text-danger mb-3\"></i>
                    <p class=\"small\">Rejeter cette demande de retour ?</p>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label small\">Motif du rejet</label>
                    <textarea id=\"rejectReason\" class=\"form-control form-control-sm\" rows=\"3\" placeholder=\"Expliquez pourquoi...\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"confirmRejectBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmCompleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-money-bill-wave me-2\"></i> Remboursement</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-money-bill-wave fa-2x fa-md-3x text-primary mb-3\"></i>
                <p class=\"small\">Confirmer le remboursement ?</p>
                <div class=\"alert alert-warning small p-2 p-md-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Les produits seront remis en stock.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"confirmCompleteBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 650
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

        // line 651
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    let returnId = ";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 654, $this->source); })()), "id", [], "any", false, false, false, 654), "html", null, true);
        yield ";

    const approveBtn = document.getElementById('approveReturnBtn');
    const rejectBtn = document.getElementById('rejectReturnBtn');
    const completeBtn = document.getElementById('completeReturnBtn');

    if (approveBtn) {
        approveBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmApproveModal')).show();
        });
    }

    document.getElementById('confirmApproveBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/approve', {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Approuver';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Approuver';
        });
    });

    if (rejectBtn) {
        rejectBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmRejectModal')).show();
        });
    }

    document.getElementById('confirmRejectBtn')?.addEventListener('click', function() {
        const btn = this;
        const reason = document.getElementById('rejectReason').value;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/reject', {
            method: 'POST',
            headers: { 
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ reason: reason })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Confirmer';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Confirmer';
        });
    });

    if (completeBtn) {
        completeBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmCompleteModal')).show();
        });
    }

    document.getElementById('confirmCompleteBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/complete', {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Confirmer';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Confirmer';
        });
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
        return "return/show.html.twig";
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
        return array (  1008 => 654,  1002 => 651,  989 => 650,  905 => 575,  899 => 572,  895 => 570,  892 => 569,  886 => 566,  882 => 564,  880 => 563,  873 => 559,  854 => 543,  847 => 538,  837 => 534,  831 => 531,  824 => 527,  818 => 523,  812 => 519,  806 => 516,  803 => 515,  801 => 514,  794 => 510,  786 => 505,  779 => 501,  770 => 496,  764 => 494,  762 => 493,  758 => 492,  753 => 489,  750 => 488,  747 => 487,  744 => 486,  741 => 485,  737 => 484,  715 => 464,  709 => 460,  707 => 459,  704 => 458,  695 => 451,  693 => 450,  679 => 438,  675 => 436,  673 => 435,  670 => 434,  668 => 433,  665 => 432,  663 => 431,  660 => 430,  658 => 429,  655 => 428,  653 => 427,  645 => 422,  634 => 413,  624 => 406,  619 => 404,  616 => 403,  610 => 399,  604 => 397,  602 => 396,  596 => 392,  594 => 391,  591 => 390,  581 => 383,  576 => 381,  573 => 380,  567 => 376,  561 => 374,  559 => 373,  553 => 369,  551 => 368,  542 => 362,  538 => 361,  535 => 360,  529 => 356,  523 => 354,  521 => 353,  505 => 340,  501 => 339,  492 => 333,  488 => 332,  481 => 327,  477 => 325,  475 => 324,  472 => 323,  470 => 322,  467 => 321,  465 => 320,  462 => 319,  460 => 318,  446 => 306,  438 => 302,  435 => 301,  427 => 297,  425 => 296,  419 => 293,  413 => 290,  408 => 288,  400 => 282,  387 => 281,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/return/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Retour #{{ returnOrder.returnNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .status-badge {
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 600;
        display: inline-block;
    }
    @media (min-width: 768px) {
        .status-badge {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-approved { background: #dbeafe; color: #2563eb; }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-rejected { background: #fee2e2; color: #dc2626; }
    
    .info-card {
        background: white;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }
    @media (min-width: 768px) {
        .info-card {
            border-radius: 16px;
        }
    }
    .info-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 0.75rem 1rem;
    }
    @media (min-width: 768px) {
        .info-card .card-header {
            padding: 1rem 1.25rem;
        }
    }
    .info-item {
        padding: 0.5rem 1rem;
        border-bottom: 1px solid #f1f5f9;
    }
    @media (min-width: 768px) {
        .info-item {
            padding: 0.75rem 1.25rem;
        }
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.65rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    @media (min-width: 768px) {
        .info-label {
            font-size: 0.75rem;
        }
    }
    .info-value {
        font-weight: 600;
        font-size: 0.85rem;
    }
    @media (min-width: 768px) {
        .info-value {
            font-size: 1rem;
        }
    }
    
    .motif-badge {
        background-color: #0463f1 !important;
        color: white !important;
        padding: 4px 10px !important;
        border-radius: 20px !important;
        font-weight: 500 !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
        font-size: 0.75rem !important;
    }
    @media (min-width: 768px) {
        .motif-badge {
            padding: 6px 12px !important;
            gap: 6px !important;
            font-size: 0.85rem !important;
        }
    }
    
    .card-header-actions {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: stretch;
        flex-wrap: wrap;
        gap: 0.5rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .card-header-actions {
            flex-direction: row;
            align-items: center;
            gap: 1rem;
        }
    }
    
    /* ✅ ACTIONS GROUP - BIEN ALIGNÉES */
    .action-buttons-group {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .action-buttons-group .btn {
        padding: 0.3rem 0.6rem;
        font-weight: 500;
        font-size: 0.75rem;
        transition: transform 0.2s, box-shadow 0.2s;
        flex: 1;
        min-width: 80px;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        white-space: nowrap;
    }
    @media (min-width: 768px) {
        .action-buttons-group .btn {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            flex: 0 1 auto;
            min-width: auto;
        }
    }
    .action-buttons-group .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    /* ✅ BOUTONS HEADER */
    .header-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .header-buttons .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        white-space: nowrap;
    }
    @media (max-width: 576px) {
        .header-buttons .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .header-buttons .btn i {
            font-size: 0.7rem !important;
        }
    }
    
    .quantity-this-return {
        background-color: #8b5cf6 !important;
        color: white !important;
        font-size: 0.7rem !important;
        padding: 3px 8px !important;
        border-radius: 8px !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
    }
    @media (min-width: 768px) {
        .quantity-this-return {
            font-size: 0.85rem !important;
            padding: 5px 10px !important;
            gap: 6px !important;
        }
    }
    
    /* Table responsive */
    .table-return-items {
        font-size: 0.75rem;
    }
    @media (min-width: 768px) {
        .table-return-items {
            font-size: 0.9rem;
        }
    }
    .table-return-items th,
    .table-return-items td {
        padding: 0.4rem 0.3rem;
        vertical-align: middle;
    }
    @media (min-width: 768px) {
        .table-return-items th,
        .table-return-items td {
            padding: 0.6rem 0.75rem;
        }
    }
    
    /* Container responsive */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .h2 {
            font-size: 1.3rem !important;
        }
        .h5 {
            font-size: 0.9rem !important;
        }
        .h4 {
            font-size: 1.1rem !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
    }
    
    /* Badge progress bar */
    .progress-bar-custom {
        height: 4px;
        background-color: #e5e7eb;
        border-radius: 10px;
        overflow: hidden;
    }
    @media (min-width: 768px) {
        .progress-bar-custom {
            height: 6px;
        }
    }
    
    /* Modal responsive */
    @media (max-width: 576px) {
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.5rem !important;
        }
    }
    
    /* User avatar responsive */
    .user-avatar-sm {
        width: 28px;
        height: 28px;
    }
    @media (min-width: 768px) {
        .user-avatar-sm {
            width: 32px;
            height: 32px;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-3 py-md-4\">
    <!-- ✅ EN-TÊTE AVEC BOUTONS BIEN ALIGNÉS -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h4 h-md-2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Retour #{{ returnOrder.returnNumber }}
            </h1>
            <p class=\"text-muted small\">Créé le {{ returnOrder.createdAt|date('d/m/Y H:i') }}</p>
        </div>
        <div class=\"header-buttons\">
            <a href=\"{{ path('returns_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
            {% if returnOrder.status == 'pending' %}
                <a href=\"{{ path('returns_edit', {'id': returnOrder.id}) }}\" class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                </a>
            {% endif %}
            {% if returnOrder.status == 'pending' or returnOrder.status == 'approved' %}
                <a href=\"{{ path('returns_print_receipt', {'id': returnOrder.id}) }}\" class=\"btn btn-outline-info btn-sm\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
                </a>
            {% endif %}
        </div>
    </div>

    <div class=\"row g-3 g-md-4\">
        <div class=\"col-12 col-lg-4\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-info-circle me-2\"></i> Informations générales</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        {% if returnOrder.status == 'pending' %}
                            <span class=\"status-badge status-pending\">⏳ En attente</span>
                        {% elseif returnOrder.status == 'approved' %}
                            <span class=\"status-badge status-approved\">✓ Approuvé</span>
                        {% elseif returnOrder.status == 'completed' %}
                            <span class=\"status-badge status-completed\">✅ Remboursé</span>
                        {% elseif returnOrder.status == 'rejected' %}
                            <span class=\"status-badge status-rejected\">❌ Rejeté</span>
                        {% endif %}
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">N° commande</div>
                    <div class=\"info-value\">
                        <a href=\"{{ path('app_orders_show', {'id': returnOrder.originalOrder.id}) }}\" class=\"text-primary small\">
                            {{ returnOrder.orderNumber }}
                        </a>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">{{ returnOrder.customerName ?: 'Non renseigné' }}</div>
                    <div class=\"small text-muted\">{{ returnOrder.customerPhone }}</div>
                </div>
            </div>

            <!-- Validation -->
            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-user-check me-2\"></i> Validation</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Enregistré par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            {% if returnOrder.returnedBy.photo %}
                                <img src=\"{{ asset('uploads/users/' ~ returnOrder.returnedBy.photo) }}\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            {% else %}
                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            {% endif %}
                            <div>
                                <strong class=\"small\">{{ returnOrder.returnedBy.fullName }}</strong>
                                <br><small class=\"text-muted\">{{ returnOrder.returnedBy.email|u.truncate(20) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                {% if returnOrder.approvedBy %}
                <div class=\"info-item\">
                    <div class=\"info-label\">Approuvé par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            {% if returnOrder.approvedBy.photo %}
                                <img src=\"{{ asset('uploads/users/' ~ returnOrder.approvedBy.photo) }}\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            {% else %}
                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            {% endif %}
                            <div>
                                <strong class=\"small\">{{ returnOrder.approvedBy.fullName }}</strong>
                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-calendar me-1\"></i> {{ returnOrder.approvedAt|date('d/m/Y H:i') }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
                
                {% if returnOrder.completedBy %}
                <div class=\"info-item\">
                    <div class=\"info-label\">Remboursé par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            {% if returnOrder.completedBy.photo %}
                                <img src=\"{{ asset('uploads/users/' ~ returnOrder.completedBy.photo) }}\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            {% else %}
                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            {% endif %}
                            <div>
                                <strong class=\"small\">{{ returnOrder.completedBy.fullName }}</strong>
                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-calendar me-1\"></i> {{ returnOrder.completedAt|date('d/m/Y H:i') }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>

            <!-- Montants -->
            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-line me-2\"></i> Montants</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Total à rembourser</div>
                    <div class=\"info-value h5 h-md-4 text-primary mb-0\">{{ returnOrder.totalRefundAmount|number_format(0, ',', ' ') }} FCFA</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Méthode de remboursement</div>
                    <div class=\"info-value small\">
                        {% if returnOrder.refundMethod == 'cash' %}
                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        {% elseif returnOrder.refundMethod == 'mobile_money' %}
                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        {% elseif returnOrder.refundMethod == 'bank_transfer' %}
                            <i class=\"fas fa-university text-primary me-1\"></i> Virement bancaire
                        {% elseif returnOrder.refundMethod == 'wallet' %}
                            <i class=\"fas fa-wallet text-secondary me-1\"></i> Porte-monnaie
                        {% elseif returnOrder.refundMethod == 'credit_note' %}
                            <i class=\"fas fa-file-invoice text-warning me-1\"></i> Avoir
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-lg-8\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <div class=\"card-header-actions\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-boxes me-2\"></i> Articles retournés</h5>
                        
                        <div class=\"action-buttons-group\">
                            {% if returnOrder.status == 'pending' and (is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER')) %}
                                <button type=\"button\" class=\"btn btn-danger\" id=\"rejectReturnBtn\">
                                    <i class=\"fas fa-times me-1\"></i> Rejeter
                                </button>
                                <button type=\"button\" class=\"btn btn-success\" id=\"approveReturnBtn\">
                                    <i class=\"fas fa-check me-1\"></i> Approuver
                                </button>
                            {% endif %}
                            
                            {% if returnOrder.status == 'approved' and (is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER')) %}
                                <button type=\"button\" class=\"btn btn-primary\" id=\"completeReturnBtn\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> <span class=\"d-none d-sm-inline\">Rembourser</span>
                                </button>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 table-return-items\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 80px;\">Article</th>
                                <th class=\"text-center\" style=\"min-width: 80px;\">
                                    Total retourné
                                </th>
                                <th class=\"text-center\" style=\"min-width: 60px;\">
                                    <span class=\"d-none d-sm-inline\">Dans ce retour</span>
                                    <span class=\"d-inline d-sm-none\">Quant.</span>
                                </th>
                                <th class=\"text-center d-none d-md-table-cell\">Prix unitaire</th>
                                <th class=\"text-center\" style=\"min-width: 70px;\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in returnOrder.returnItems %}
                                {% set totalReturned = totalReturnedQuantities[item.originalOrderItem.id]|default(item.quantityReturned) %}
                                {% set totalOrderQty = item.originalOrderItem.quantity %}
                                {% set remaining = totalOrderQty - totalReturned %}
                                {% set returnPercentage = (totalReturned / totalOrderQty * 100)|round %}
                                
                                <tr>
                                    <td>
                                        <strong class=\"small\">{{ item.productName|u.truncate(20) }}</strong>
                                        {% if item.promotionName %}
                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> {{ item.promotionName|u.truncate(10) }}</small>
                                        {% endif %}
                                        <br><small class=\"text-muted d-none d-sm-inline\">{{ item.itemType == 'recipe' ? 'Menu' : 'Produit' }}</small>
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex align-items-center justify-content-center gap-1 gap-md-2 flex-wrap\">
                                            <span class=\"badge\" style=\"background: #dc2626; color: white; font-size: 0.7rem; padding: 4px 8px;\">
                                                <i class=\"fas fa-undo-alt me-1\"></i> {{ totalReturned }}
                                            </span>
                                            <span class=\"text-muted fw-bold small\">/</span>
                                            <span class=\"badge\" style=\"background: #0463f1; color: white; font-size: 0.7rem; padding: 4px 8px;\">
                                                <i class=\"fas fa-box me-1\"></i> {{ totalOrderQty }}
                                            </span>
                                        </div>
                                        
                                        <div class=\"progress-bar-custom mt-1\" style=\"width: 80px; margin: 0 auto;\">
                                            <div style=\"width: {{ returnPercentage }}%; background-color: #dc2626; height: 4px;\"></div>
                                        </div>
                                        
                                        <div class=\"mt-1\">
                                            {% if remaining > 0 %}
                                                <span class=\"badge\" style=\"background: #f59e0b; color: white; font-size: 0.55rem; padding: 2px 6px; border-radius: 20px;\">
                                                    <i class=\"fas fa-box-open me-1\"></i> {{ remaining }}
                                                </span>
                                            {% else %}
                                                <span class=\"badge\" style=\"background: #10b981; color: white; font-size: 0.55rem; padding: 2px 6px; border-radius: 20px;\">
                                                    <i class=\"fas fa-check-circle me-1\"></i> Complet
                                                </span>
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"quantity-this-return\" style=\"font-size: 0.65rem; padding: 2px 6px;\">
                                            <i class=\"fas fa-exchange-alt me-1\"></i> {{ item.quantityReturned }}
                                        </span>
                                    </td>
                                    <td class=\"text-center d-none d-md-table-cell\">
                                        {{ item.unitPriceAtSale|number_format(0, ',', ' ') }} FCFA
                                    </td>
                                    <td class=\"text-center\">
                                        <strong class=\"text-primary small\">{{ item.totalRefund|number_format(0, ',', ' ') }} FCFA</strong>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"4\" class=\"text-end fw-bold small\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5 h-md-4\">
                                    {{ returnOrder.totalRefundAmount|number_format(0, ',', ' ') }} FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-comment me-2\"></i> Motif et notes</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Motif du retour</div>
                    <div class=\"info-value\">
                        <span class=\"motif-badge\">
                            <i class=\"fas fa-tag me-1\"></i> {{ reasons[returnOrder.reason]|default(returnOrder.reason) }}
                        </span>
                    </div>
                </div>
                {% if returnOrder.reasonNotes %}
                <div class=\"info-item\">
                    <div class=\"info-label\">Détails du motif</div>
                    <div class=\"info-value small\">{{ returnOrder.reasonNotes|nl2br }}</div>
                </div>
                {% endif %}
                {% if returnOrder.notes %}
                <div class=\"info-item\">
                    <div class=\"info-label\">Notes internes</div>
                    <div class=\"info-value text-muted small\">{{ returnOrder.notes|nl2br }}</div>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"confirmApproveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-check-circle me-2\"></i> Approuver</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-check-circle fa-2x fa-md-3x text-success mb-3\"></i>
                <p class=\"small\">Approuver cette demande de retour ?</p>
                <p class=\"text-muted small\">Le retour pourra ensuite être remboursé.</p>
            </div>
            <div class=\"modal-footer justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"confirmApproveBtn\">Approuver</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmRejectModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-ban me-2\"></i> Rejeter</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\">
                    <i class=\"fas fa-exclamation-triangle fa-2x fa-md-3x text-danger mb-3\"></i>
                    <p class=\"small\">Rejeter cette demande de retour ?</p>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label small\">Motif du rejet</label>
                    <textarea id=\"rejectReason\" class=\"form-control form-control-sm\" rows=\"3\" placeholder=\"Expliquez pourquoi...\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"confirmRejectBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmCompleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-money-bill-wave me-2\"></i> Remboursement</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-money-bill-wave fa-2x fa-md-3x text-primary mb-3\"></i>
                <p class=\"small\">Confirmer le remboursement ?</p>
                <div class=\"alert alert-warning small p-2 p-md-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Les produits seront remis en stock.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"confirmCompleteBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    let returnId = {{ returnOrder.id }};

    const approveBtn = document.getElementById('approveReturnBtn');
    const rejectBtn = document.getElementById('rejectReturnBtn');
    const completeBtn = document.getElementById('completeReturnBtn');

    if (approveBtn) {
        approveBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmApproveModal')).show();
        });
    }

    document.getElementById('confirmApproveBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/approve', {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Approuver';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Approuver';
        });
    });

    if (rejectBtn) {
        rejectBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmRejectModal')).show();
        });
    }

    document.getElementById('confirmRejectBtn')?.addEventListener('click', function() {
        const btn = this;
        const reason = document.getElementById('rejectReason').value;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/reject', {
            method: 'POST',
            headers: { 
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ reason: reason })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Confirmer';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Confirmer';
        });
    });

    if (completeBtn) {
        completeBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmCompleteModal')).show();
        });
    }

    document.getElementById('confirmCompleteBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/complete', {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Confirmer';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Confirmer';
        });
    });
});
</script>
{% endblock %}", "return/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\show.html.twig");
    }
}
