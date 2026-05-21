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

/* supplier_credit_note/supplier_respond.html.twig */
class __TwigTemplate_5c068979499a5c314074005b2ccb64fc extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/supplier_respond.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/supplier_respond.html.twig"));

        $this->parent = $this->load("base_simple.html.twig", 2);
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

        yield "Répondre à l'avoir n°";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 4, $this->source); })()), "creditNoteNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
    :root {
        --primary: #0463f1;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #3b82f6;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
        --gray-700: #374151;
    }
    
    body {
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
    }
    
    .credit-card {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.2);
        border: none;
        margin-top: 2rem;
    }
    
    .credit-header {
        background: linear-gradient(135deg, #0463f1 0%, #0355d0 100%);
        padding: 1.5rem;
        color: white;
    }
    
    .credit-header h4 {
        margin: 0;
        font-weight: 600;
    }
    
    .credit-header .credit-number {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-top: 0.25rem;
    }
    
    .info-card {
        background: var(--gray-100);
        border-radius: 0.75rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--gray-200);
    }
    
    .info-row:last-child {
        border-bottom: none;
    }
    
    .info-label {
        font-weight: 600;
        color: var(--gray-600);
        font-size: 0.85rem;
    }
    
    .info-value {
        font-weight: 500;
        color: var(--gray-700);
    }
    
    .amount-highlight {
        color: var(--danger);
        font-size: 1.2rem;
        font-weight: 700;
    }
    
    .description-box {
        background: #fff3cd;
        border-left: 4px solid var(--warning);
        padding: 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
    }
    
    /* 🔥 STYLES POUR LES PIÈCES JOINTES */
    .attachments-box {
        background: #e8f4f8;
        border-left: 4px solid #17a2b8;
        padding: 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
    }
    
    .attachment-item {
        margin: 15px 0;
        padding: 10px;
        background: white;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
    }
    
    .attachment-image {
        max-width: 100%;
        max-height: 300px;
        border-radius: 8px;
        border: 1px solid #ddd;
        margin-top: 8px;
    }
    
    .attachment-video {
        max-width: 100%;
        max-height: 300px;
        border-radius: 8px;
        margin-top: 8px;
    }
    
    .attachment-link {
        color: #0d6efd;
        text-decoration: none;
        word-break: break-all;
    }
    
    .attachment-link:hover {
        text-decoration: underline;
    }
    
    .form-label {
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--gray-600);
        margin-bottom: 0.5rem;
    }
    
    .form-control, .form-select {
        border-radius: 0.5rem;
        border: 1px solid var(--gray-200);
        padding: 0.6rem 1rem;
        transition: all 0.2s;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(4, 99, 241, 0.25);
        outline: none;
    }
    
    .form-check {
        padding: 0.5rem 0;
        margin: 0;
        border-bottom: 1px solid var(--gray-100);
    }
    
    .form-check:last-child {
        border-bottom: none;
    }
    
    .form-check-input {
        margin-top: 0.2rem;
        cursor: pointer;
    }
    
    .form-check-label {
        cursor: pointer;
        font-weight: 500;
        margin-left: 0.5rem;
    }
    
    .btn-send {
        background: linear-gradient(135deg, var(--success) 0%, #059669 100%);
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        border-radius: 0.5rem;
        transition: all 0.2s;
    }
    
    .btn-send:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
    }
    
    .btn-close-window {
        background: var(--gray-200);
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 0.5rem;
        transition: all 0.2s;
    }
    
    .btn-close-window:hover {
        background: var(--gray-600);
        color: white;
    }
    
    .footer-note {
        background: var(--gray-100);
        padding: 0.75rem;
        text-align: center;
        font-size: 0.75rem;
        color: var(--gray-600);
        border-top: 1px solid var(--gray-200);
    }
    
    .badge-issue {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .badge-quality { background: #fef3c7; color: #92400e; }
    .badge-damaged { background: #fee2e2; color: #991b1b; }
    .badge-quantity { background: #dbeafe; color: #1e40af; }
    .badge-other { background: var(--gray-200); color: var(--gray-600); }
    
    @media (max-width: 768px) {
        .attachment-image, .attachment-video {
            max-height: 200px;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 238
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

        // line 239
        yield "<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8 col-md-10\">
            
            <!-- En-tête -->
            <div class=\"text-center mb-4\">
                <i class=\"fas fa-file-invoice-dollar fa-3x text-white mb-2\"></i>
                <h2 class=\"text-white mb-0\">Action requise</h2>
                <p class=\"text-white-50\">Veuillez répondre à cet avoir dans les plus brefs délais</p>
            </div>
            
            <!-- Carte principale -->
            <div class=\"card credit-card\">
                <div class=\"credit-header\">
                    <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                        <div>
                            <h4 class=\"mb-0\">
                                <i class=\"fas fa-receipt me-2\"></i>
                                Avoir fournisseur
                            </h4>
                            <div class=\"credit-number\">
                                N° ";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 260, $this->source); })()), "creditNoteNumber", [], "any", false, false, false, 260), "html", null, true);
        yield "
                            </div>
                        </div>
                        <div>
                            <span class=\"badge-issue 
                                ";
        // line 265
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 265, $this->source); })()), "issueType", [], "any", false, false, false, 265) == "quality")) {
            yield "badge-quality
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 266
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 266, $this->source); })()), "issueType", [], "any", false, false, false, 266) == "damaged")) {
            yield "badge-damaged
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 267
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 267, $this->source); })()), "issueType", [], "any", false, false, false, 267) == "quantity_missing")) {
            yield "badge-quantity
                                ";
        } else {
            // line 268
            yield "badge-other";
        }
        yield "\">
                                <i class=\"fas 
                                    ";
        // line 270
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 270, $this->source); })()), "issueType", [], "any", false, false, false, 270) == "quality")) {
            yield "fa-flask
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 271
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 271, $this->source); })()), "issueType", [], "any", false, false, false, 271) == "damaged")) {
            yield "fa-box
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 272
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 272, $this->source); })()), "issueType", [], "any", false, false, false, 272) == "quantity_missing")) {
            yield "fa-calculator
                                    ";
        } else {
            // line 273
            yield "fa-question";
        }
        yield " me-1\"></i>
                                ";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 274, $this->source); })()), "issueTypeLabel", [], "any", false, false, false, 274), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    <!-- Informations produit -->
                    <div class=\"info-card\">
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-box me-1\"></i> Produit</span>
                            <span class=\"info-value\">";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 285, $this->source); })()), "stockBatch", [], "any", false, false, false, 285), "product", [], "any", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-tag me-1\"></i> Numéro de lot</span>
                            <span class=\"info-value\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 289, $this->source); })()), "stockBatch", [], "any", false, false, false, 289), "batchNumber", [], "any", false, false, false, 289), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-chart-line me-1\"></i> Quantité concernée</span>
                            <span class=\"info-value\">";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 293, $this->source); })()), "affectedQuantity", [], "any", false, false, false, 293), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 293, $this->source); })()), "stockBatch", [], "any", false, false, false, 293), "currentQuantity", [], "any", false, false, false, 293))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 293, $this->source); })()), "stockBatch", [], "any", false, false, false, 293), "currentQuantity", [], "any", false, false, false, 293))), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, true, false, 293), "product", [], "any", false, true, false, 293), "unit", [], "any", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 293, $this->source); })()), "stockBatch", [], "any", false, false, false, 293), "product", [], "any", false, false, false, 293), "unit", [], "any", false, false, false, 293), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-money-bill-wave me-1\"></i> Montant déclaré</span>
                            <span class=\"amount-highlight\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 297, $this->source); })()), "declaredAmount", [], "any", false, false, false, 297), CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 297, $this->source); })()), "hmaService", [], "any", false, false, false, 297)), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-flag me-1\"></i> Priorité</span>
                            <span class=\"info-value\">
                                <span class=\"badge 
                                    ";
        // line 303
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 303, $this->source); })()), "priority", [], "any", false, false, false, 303) == "critical")) {
            yield "bg-danger
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 304
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 304, $this->source); })()), "priority", [], "any", false, false, false, 304) == "high")) {
            yield "bg-warning text-dark
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 305
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 305, $this->source); })()), "priority", [], "any", false, false, false, 305) == "medium")) {
            yield "bg-info
                                    ";
        } else {
            // line 306
            yield "bg-secondary";
        }
        yield "\">
                                    ";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 307, $this->source); })()), "priorityLabel", [], "any", false, false, false, 307)), "html", null, true);
        yield "
                                </span>
                            </span>
                        </div>
                    </div>
                    
                    <!-- Description du problème -->
                    <div class=\"description-box\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-comment-dots text-warning me-2\"></i>
                            <strong class=\"text-warning\">Description du problème</strong>
                        </div>
                        <p class=\"mb-0 text-dark\">";
        // line 319
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 319, $this->source); })()), "description", [], "any", false, false, false, 319), "html", null, true));
        yield "</p>
                    </div>
                    
                    <!-- 🔥 PIÈCES JOINTES - SANS AFFICHAGE DU NOM DE FICHIER -->
                    ";
        // line 323
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 323, $this->source); })()), "attachments", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 324
            yield "                    <div class=\"attachments-box\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <i class=\"fas fa-paperclip text-info me-2\"></i>
                            <strong class=\"text-info\">Pièces jointes</strong>
                        </div>
                        <p class=\"small text-muted mb-2\">Fichiers joints pour illustrer le problème :</p>
                        
                        ";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 331, $this->source); })()), "attachments", [], "any", false, false, false, 331));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 332
                yield "                            ";
                $context["extension"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["attachment"], ".")));
                // line 333
                yield "                            <div class=\"attachment-item\">
                                ";
                // line 334
                if (CoreExtension::inFilter((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 334, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp"])) {
                    // line 335
                    yield "                                    ";
                    // line 336
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"]))), "html", null, true);
                    yield "\" 
                                        alt=\"Pièce jointe\"
                                        class=\"attachment-image\"
                                        onerror=\"this.style.display='none'; this.parentElement.querySelector('.img-error').style.display='block';\">
                                    <div class=\"img-error text-muted small mt-2\" style=\"display: none;\">
                                        <i class=\"fas fa-exclamation-triangle\"></i> Image non disponible
                                    </div>
                                ";
                } elseif (CoreExtension::inFilter(                // line 343
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 343, $this->source); })()), ["mp4", "mov", "avi", "mkv", "webm"])) {
                    // line 344
                    yield "                                    <div class=\"mb-2\">
                                        <i class=\"fas fa-video text-primary me-1\"></i>
                                        <strong>Vidéo :</strong> ";
                    // line 346
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attachment"], "html", null, true);
                    yield "
                                    </div>
                                    <video controls class=\"attachment-video\">
                                        <source src=\"";
                    // line 349
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"]))), "html", null, true);
                    yield "\" type=\"video/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 349, $this->source); })()), "html", null, true);
                    yield "\">
                                        Votre navigateur ne supporte pas la lecture de vidéos.
                                    </video>
                                ";
                } else {
                    // line 353
                    yield "                                    <div>
                                        <i class=\"fas fa-file text-primary me-1\"></i>
                                        <strong>Fichier :</strong> 
                                        <a href=\"";
                    // line 356
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"]))), "html", null, true);
                    yield "\" 
                                        class=\"attachment-link\"
                                        target=\"_blank\">
                                            ";
                    // line 359
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attachment"], "html", null, true);
                    yield "
                                        </a>
                                    </div>
                                ";
                }
                // line 363
                yield "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 365
            yield "                        
                        <p class=\"small text-muted mt-2 mb-0\">
                            <i class=\"fas fa-info-circle\"></i> Ces fichiers sont également disponibles dans l'espace client.
                        </p>
                    </div>
                    ";
        }
        // line 371
        yield "                    
                    <!-- Formulaire -->
                    <form method=\"post\" id=\"responseForm\">
                        <div class=\"mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-reply-all me-1\"></i> Votre réponse
                                <span class=\"text-danger\">*</span>
                            </label>
                            <textarea name=\"response\" class=\"form-control\" rows=\"4\" required 
                                      placeholder=\"Expliquez votre position...\"></textarea>
                            <div class=\"form-text\">Votre réponse sera enregistrée et visible par nos équipes.</div>
                        </div>
                        
                        <div class=\"mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-gavel me-1\"></i> Décision
                                <span class=\"text-danger\">*</span>
                            </label>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"accept_full\" value=\"accept_full\" class=\"form-check-input\" checked>
                                <label class=\"form-check-label text-success\" for=\"accept_full\">
                                    <i class=\"fas fa-check-circle me-1\"></i> J'accepte le retour et le montant
                                </label>
                            </div>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"accept_partial\" value=\"accept_partial\" class=\"form-check-input\">
                                <label class=\"form-check-label text-warning\" for=\"accept_partial\">
                                    <i class=\"fas fa-adjust me-1\"></i> J'accepte le retour mais montant différent
                                </label>
                            </div>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"refuse\" value=\"refuse\" class=\"form-check-input\">
                                <label class=\"form-check-label text-danger\" for=\"refuse\">
                                    <i class=\"fas fa-times-circle me-1\"></i> Je refuse (justifier dans la réponse)
                                </label>
                            </div>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"need_info\" value=\"need_info\" class=\"form-check-input\">
                                <label class=\"form-check-label text-info\" for=\"need_info\">
                                    <i class=\"fas fa-info-circle me-1\"></i> Besoin de plus d'informations
                                </label>
                            </div>
                        </div>
                        
                        <div class=\"mb-4\" id=\"proposedAmountDiv\" style=\"display: none;\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-money-bill me-1\"></i> Montant proposé (FCFA)
                            </label>
                            <input type=\"number\" name=\"proposed_amount\" class=\"form-control\" step=\"100\" 
                                   placeholder=\"Ex: 50000\">
                            <div class=\"form-text\">Laissez vide si le montant est identique à celui déclaré.</div>
                        </div>
                        
                        <div class=\"mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-hashtag me-1\"></i> Votre référence interne
                            </label>
                            <input type=\"text\" name=\"reference\" class=\"form-control\" 
                                   placeholder=\"Optionnel - Votre numéro de référence\">
                        </div>
                        
                        <div class=\"d-flex justify-content-between gap-3 flex-wrap\">
                            <button type=\"button\" class=\"btn-close-window\" onclick=\"window.close();\">
                                <i class=\"fas fa-times me-1\"></i> Fermer
                            </button>
                            <button type=\"submit\" class=\"btn-send\">
                                <i class=\"fas fa-paper-plane me-1\"></i> Envoyer ma réponse
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class=\"footer-note\">
                    <i class=\"fas fa-envelope me-1\"></i>
                    Un email de confirmation vous sera envoyé après traitement.
                </div>
            </div>
            
            <!-- Informations supplémentaires -->
            <div class=\"text-center mt-4\">
                <small class=\"text-white-50\">
                    <i class=\"fas fa-lock me-1\"></i> Transactions sécurisées
                    <span class=\"mx-2\">•</span>
                    <i class=\"fas fa-clock me-1\"></i> Réponse sous 30 jours
                </small>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const decisionRadios = document.querySelectorAll('input[name=\"decision\"]');
    const proposedAmountDiv = document.getElementById('proposedAmountDiv');
    
    function toggleProposedAmount() {
        const selected = document.querySelector('input[name=\"decision\"]:checked');
        if (selected && selected.value === 'accept_partial') {
            proposedAmountDiv.style.display = 'block';
        } else {
            proposedAmountDiv.style.display = 'none';
        }
    }
    
    decisionRadios.forEach(radio => {
        radio.addEventListener('change', toggleProposedAmount);
    });
    
    toggleProposedAmount();
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
        return "supplier_credit_note/supplier_respond.html.twig";
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
        return array (  600 => 371,  592 => 365,  585 => 363,  578 => 359,  572 => 356,  567 => 353,  558 => 349,  552 => 346,  548 => 344,  546 => 343,  535 => 336,  533 => 335,  531 => 334,  528 => 333,  525 => 332,  521 => 331,  512 => 324,  510 => 323,  503 => 319,  488 => 307,  483 => 306,  478 => 305,  474 => 304,  470 => 303,  461 => 297,  452 => 293,  445 => 289,  438 => 285,  424 => 274,  419 => 273,  414 => 272,  410 => 271,  406 => 270,  400 => 268,  395 => 267,  391 => 266,  387 => 265,  379 => 260,  356 => 239,  343 => 238,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/supplier_credit_note/supplier_respond.html.twig #}
{% extends 'base_simple.html.twig' %}

{% block title %}Répondre à l'avoir n°{{ creditNote.creditNoteNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary: #0463f1;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #3b82f6;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
        --gray-700: #374151;
    }
    
    body {
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
    }
    
    .credit-card {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.2);
        border: none;
        margin-top: 2rem;
    }
    
    .credit-header {
        background: linear-gradient(135deg, #0463f1 0%, #0355d0 100%);
        padding: 1.5rem;
        color: white;
    }
    
    .credit-header h4 {
        margin: 0;
        font-weight: 600;
    }
    
    .credit-header .credit-number {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-top: 0.25rem;
    }
    
    .info-card {
        background: var(--gray-100);
        border-radius: 0.75rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--gray-200);
    }
    
    .info-row:last-child {
        border-bottom: none;
    }
    
    .info-label {
        font-weight: 600;
        color: var(--gray-600);
        font-size: 0.85rem;
    }
    
    .info-value {
        font-weight: 500;
        color: var(--gray-700);
    }
    
    .amount-highlight {
        color: var(--danger);
        font-size: 1.2rem;
        font-weight: 700;
    }
    
    .description-box {
        background: #fff3cd;
        border-left: 4px solid var(--warning);
        padding: 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
    }
    
    /* 🔥 STYLES POUR LES PIÈCES JOINTES */
    .attachments-box {
        background: #e8f4f8;
        border-left: 4px solid #17a2b8;
        padding: 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
    }
    
    .attachment-item {
        margin: 15px 0;
        padding: 10px;
        background: white;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
    }
    
    .attachment-image {
        max-width: 100%;
        max-height: 300px;
        border-radius: 8px;
        border: 1px solid #ddd;
        margin-top: 8px;
    }
    
    .attachment-video {
        max-width: 100%;
        max-height: 300px;
        border-radius: 8px;
        margin-top: 8px;
    }
    
    .attachment-link {
        color: #0d6efd;
        text-decoration: none;
        word-break: break-all;
    }
    
    .attachment-link:hover {
        text-decoration: underline;
    }
    
    .form-label {
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--gray-600);
        margin-bottom: 0.5rem;
    }
    
    .form-control, .form-select {
        border-radius: 0.5rem;
        border: 1px solid var(--gray-200);
        padding: 0.6rem 1rem;
        transition: all 0.2s;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(4, 99, 241, 0.25);
        outline: none;
    }
    
    .form-check {
        padding: 0.5rem 0;
        margin: 0;
        border-bottom: 1px solid var(--gray-100);
    }
    
    .form-check:last-child {
        border-bottom: none;
    }
    
    .form-check-input {
        margin-top: 0.2rem;
        cursor: pointer;
    }
    
    .form-check-label {
        cursor: pointer;
        font-weight: 500;
        margin-left: 0.5rem;
    }
    
    .btn-send {
        background: linear-gradient(135deg, var(--success) 0%, #059669 100%);
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        border-radius: 0.5rem;
        transition: all 0.2s;
    }
    
    .btn-send:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
    }
    
    .btn-close-window {
        background: var(--gray-200);
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 0.5rem;
        transition: all 0.2s;
    }
    
    .btn-close-window:hover {
        background: var(--gray-600);
        color: white;
    }
    
    .footer-note {
        background: var(--gray-100);
        padding: 0.75rem;
        text-align: center;
        font-size: 0.75rem;
        color: var(--gray-600);
        border-top: 1px solid var(--gray-200);
    }
    
    .badge-issue {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    .badge-quality { background: #fef3c7; color: #92400e; }
    .badge-damaged { background: #fee2e2; color: #991b1b; }
    .badge-quantity { background: #dbeafe; color: #1e40af; }
    .badge-other { background: var(--gray-200); color: var(--gray-600); }
    
    @media (max-width: 768px) {
        .attachment-image, .attachment-video {
            max-height: 200px;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8 col-md-10\">
            
            <!-- En-tête -->
            <div class=\"text-center mb-4\">
                <i class=\"fas fa-file-invoice-dollar fa-3x text-white mb-2\"></i>
                <h2 class=\"text-white mb-0\">Action requise</h2>
                <p class=\"text-white-50\">Veuillez répondre à cet avoir dans les plus brefs délais</p>
            </div>
            
            <!-- Carte principale -->
            <div class=\"card credit-card\">
                <div class=\"credit-header\">
                    <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                        <div>
                            <h4 class=\"mb-0\">
                                <i class=\"fas fa-receipt me-2\"></i>
                                Avoir fournisseur
                            </h4>
                            <div class=\"credit-number\">
                                N° {{ creditNote.creditNoteNumber }}
                            </div>
                        </div>
                        <div>
                            <span class=\"badge-issue 
                                {% if creditNote.issueType == 'quality' %}badge-quality
                                {% elseif creditNote.issueType == 'damaged' %}badge-damaged
                                {% elseif creditNote.issueType == 'quantity_missing' %}badge-quantity
                                {% else %}badge-other{% endif %}\">
                                <i class=\"fas 
                                    {% if creditNote.issueType == 'quality' %}fa-flask
                                    {% elseif creditNote.issueType == 'damaged' %}fa-box
                                    {% elseif creditNote.issueType == 'quantity_missing' %}fa-calculator
                                    {% else %}fa-question{% endif %} me-1\"></i>
                                {{ creditNote.issueTypeLabel }}
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    <!-- Informations produit -->
                    <div class=\"info-card\">
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-box me-1\"></i> Produit</span>
                            <span class=\"info-value\">{{ creditNote.stockBatch.product.name }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-tag me-1\"></i> Numéro de lot</span>
                            <span class=\"info-value\">{{ creditNote.stockBatch.batchNumber }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-chart-line me-1\"></i> Quantité concernée</span>
                            <span class=\"info-value\">{{ creditNote.affectedQuantity|default(creditNote.stockBatch.currentQuantity) }} {{ creditNote.stockBatch.product.unit|default('pièce(s)') }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-money-bill-wave me-1\"></i> Montant déclaré</span>
                            <span class=\"amount-highlight\">{{ creditNote.declaredAmount|price_with_currency(creditNote.hmaService) }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\"><i class=\"fas fa-flag me-1\"></i> Priorité</span>
                            <span class=\"info-value\">
                                <span class=\"badge 
                                    {% if creditNote.priority == 'critical' %}bg-danger
                                    {% elseif creditNote.priority == 'high' %}bg-warning text-dark
                                    {% elseif creditNote.priority == 'medium' %}bg-info
                                    {% else %}bg-secondary{% endif %}\">
                                    {{ creditNote.priorityLabel|upper }}
                                </span>
                            </span>
                        </div>
                    </div>
                    
                    <!-- Description du problème -->
                    <div class=\"description-box\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <i class=\"fas fa-comment-dots text-warning me-2\"></i>
                            <strong class=\"text-warning\">Description du problème</strong>
                        </div>
                        <p class=\"mb-0 text-dark\">{{ creditNote.description|nl2br }}</p>
                    </div>
                    
                    <!-- 🔥 PIÈCES JOINTES - SANS AFFICHAGE DU NOM DE FICHIER -->
                    {% if creditNote.attachments %}
                    <div class=\"attachments-box\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <i class=\"fas fa-paperclip text-info me-2\"></i>
                            <strong class=\"text-info\">Pièces jointes</strong>
                        </div>
                        <p class=\"small text-muted mb-2\">Fichiers joints pour illustrer le problème :</p>
                        
                        {% for attachment in creditNote.attachments %}
                            {% set extension = attachment|split('.')|last|lower %}
                            <div class=\"attachment-item\">
                                {% if extension in ['jpg', 'jpeg', 'png', 'gif', 'webp'] %}
                                    {# 🔥 PLUS DE TEXTE \"Image : nom_fichier.jpg\" #}
                                    <img src=\"{{ absolute_url(asset('uploads/credit_notes_attachments/' ~ attachment)) }}\" 
                                        alt=\"Pièce jointe\"
                                        class=\"attachment-image\"
                                        onerror=\"this.style.display='none'; this.parentElement.querySelector('.img-error').style.display='block';\">
                                    <div class=\"img-error text-muted small mt-2\" style=\"display: none;\">
                                        <i class=\"fas fa-exclamation-triangle\"></i> Image non disponible
                                    </div>
                                {% elseif extension in ['mp4', 'mov', 'avi', 'mkv', 'webm'] %}
                                    <div class=\"mb-2\">
                                        <i class=\"fas fa-video text-primary me-1\"></i>
                                        <strong>Vidéo :</strong> {{ attachment }}
                                    </div>
                                    <video controls class=\"attachment-video\">
                                        <source src=\"{{ absolute_url(asset('uploads/credit_notes_attachments/' ~ attachment)) }}\" type=\"video/{{ extension }}\">
                                        Votre navigateur ne supporte pas la lecture de vidéos.
                                    </video>
                                {% else %}
                                    <div>
                                        <i class=\"fas fa-file text-primary me-1\"></i>
                                        <strong>Fichier :</strong> 
                                        <a href=\"{{ absolute_url(asset('uploads/credit_notes_attachments/' ~ attachment)) }}\" 
                                        class=\"attachment-link\"
                                        target=\"_blank\">
                                            {{ attachment }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        {% endfor %}
                        
                        <p class=\"small text-muted mt-2 mb-0\">
                            <i class=\"fas fa-info-circle\"></i> Ces fichiers sont également disponibles dans l'espace client.
                        </p>
                    </div>
                    {% endif %}
                    
                    <!-- Formulaire -->
                    <form method=\"post\" id=\"responseForm\">
                        <div class=\"mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-reply-all me-1\"></i> Votre réponse
                                <span class=\"text-danger\">*</span>
                            </label>
                            <textarea name=\"response\" class=\"form-control\" rows=\"4\" required 
                                      placeholder=\"Expliquez votre position...\"></textarea>
                            <div class=\"form-text\">Votre réponse sera enregistrée et visible par nos équipes.</div>
                        </div>
                        
                        <div class=\"mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-gavel me-1\"></i> Décision
                                <span class=\"text-danger\">*</span>
                            </label>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"accept_full\" value=\"accept_full\" class=\"form-check-input\" checked>
                                <label class=\"form-check-label text-success\" for=\"accept_full\">
                                    <i class=\"fas fa-check-circle me-1\"></i> J'accepte le retour et le montant
                                </label>
                            </div>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"accept_partial\" value=\"accept_partial\" class=\"form-check-input\">
                                <label class=\"form-check-label text-warning\" for=\"accept_partial\">
                                    <i class=\"fas fa-adjust me-1\"></i> J'accepte le retour mais montant différent
                                </label>
                            </div>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"refuse\" value=\"refuse\" class=\"form-check-input\">
                                <label class=\"form-check-label text-danger\" for=\"refuse\">
                                    <i class=\"fas fa-times-circle me-1\"></i> Je refuse (justifier dans la réponse)
                                </label>
                            </div>
                            
                            <div class=\"form-check\">
                                <input type=\"radio\" name=\"decision\" id=\"need_info\" value=\"need_info\" class=\"form-check-input\">
                                <label class=\"form-check-label text-info\" for=\"need_info\">
                                    <i class=\"fas fa-info-circle me-1\"></i> Besoin de plus d'informations
                                </label>
                            </div>
                        </div>
                        
                        <div class=\"mb-4\" id=\"proposedAmountDiv\" style=\"display: none;\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-money-bill me-1\"></i> Montant proposé (FCFA)
                            </label>
                            <input type=\"number\" name=\"proposed_amount\" class=\"form-control\" step=\"100\" 
                                   placeholder=\"Ex: 50000\">
                            <div class=\"form-text\">Laissez vide si le montant est identique à celui déclaré.</div>
                        </div>
                        
                        <div class=\"mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-hashtag me-1\"></i> Votre référence interne
                            </label>
                            <input type=\"text\" name=\"reference\" class=\"form-control\" 
                                   placeholder=\"Optionnel - Votre numéro de référence\">
                        </div>
                        
                        <div class=\"d-flex justify-content-between gap-3 flex-wrap\">
                            <button type=\"button\" class=\"btn-close-window\" onclick=\"window.close();\">
                                <i class=\"fas fa-times me-1\"></i> Fermer
                            </button>
                            <button type=\"submit\" class=\"btn-send\">
                                <i class=\"fas fa-paper-plane me-1\"></i> Envoyer ma réponse
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class=\"footer-note\">
                    <i class=\"fas fa-envelope me-1\"></i>
                    Un email de confirmation vous sera envoyé après traitement.
                </div>
            </div>
            
            <!-- Informations supplémentaires -->
            <div class=\"text-center mt-4\">
                <small class=\"text-white-50\">
                    <i class=\"fas fa-lock me-1\"></i> Transactions sécurisées
                    <span class=\"mx-2\">•</span>
                    <i class=\"fas fa-clock me-1\"></i> Réponse sous 30 jours
                </small>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const decisionRadios = document.querySelectorAll('input[name=\"decision\"]');
    const proposedAmountDiv = document.getElementById('proposedAmountDiv');
    
    function toggleProposedAmount() {
        const selected = document.querySelector('input[name=\"decision\"]:checked');
        if (selected && selected.value === 'accept_partial') {
            proposedAmountDiv.style.display = 'block';
        } else {
            proposedAmountDiv.style.display = 'none';
        }
    }
    
    decisionRadios.forEach(radio => {
        radio.addEventListener('change', toggleProposedAmount);
    });
    
    toggleProposedAmount();
});
</script>
{% endblock %}", "supplier_credit_note/supplier_respond.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\supplier_respond.html.twig");
    }
}
