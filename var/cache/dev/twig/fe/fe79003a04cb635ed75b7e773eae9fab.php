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

/* admin/purchase/show.html.twig */
class __TwigTemplate_0f0066969f581768104ea6c37b2404cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/show.html.twig"));

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

        yield "Achat #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 4, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
        $context["status_mapping"] = ["draft" => "Brouillon", "confirmed" => "Confirmé", "received" => "Reçu", "cancelled" => "Annulé"];
        // line 13
        yield "
";
        // line 14
        $context["status_colors"] = ["draft" => "warning", "confirmed" => "primary", "received" => "success", "cancelled" => "danger"];
        // line 20
        yield "
";
        // line 21
        $context["status_icons"] = ["draft" => "fa-edit", "confirmed" => "fa-clock", "received" => "fa-check-circle", "cancelled" => "fa-ban"];
        // line 27
        yield "
<style>
:root {
    --primary: #4361ee;
    --secondary: #3a0ca3;
    --success: #2a9d8f;
    --warning: #f4a261;
    --danger: #e63946;
    --light: #f8f9fa;
    --dark: #212529;
}

.page-transition {
    animation: fadeIn 0.5s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.card-hover {
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
}

.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    border-color: var(--primary);
}

.badge-status {
    padding: 0.5rem 1rem;
    font-weight: 500;
    border-radius: 20px;
    letter-spacing: 0.5px;
}

.icon-circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
}

.bg-primary-light { background-color: rgba(67, 97, 238, 0.1); }
.bg-success-light { background-color: rgba(42, 157, 143, 0.1); }
.bg-warning-light { background-color: rgba(244, 162, 97, 0.1); }
.bg-danger-light { background-color: rgba(230, 57, 70, 0.1); }
.bg-info-light { background-color: rgba(13, 202, 240, 0.1); }

.text-primary { color: var(--primary) !important; }
.text-success { color: var(--success) !important; }
.text-warning { color: var(--warning) !important; }
.text-danger { color: var(--danger) !important; }

.modal-blur {
    backdrop-filter: blur(5px);
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--primary);
}

/* Container des documents */
.document-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin: 1.5rem 0;
}

.document-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fc 100%);
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 2rem;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.document-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    border-color: var(--primary);
}

.document-card.active {
    border-color: var(--primary);
    background: linear-gradient(135deg, #f8f9fc 0%, #eef1fd 100%);
}

.document-card.disabled {
    opacity: 0.6;
    cursor: not-allowed;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.document-card.disabled:hover {
    transform: none;
    box-shadow: none;
}

.document-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 1.75rem;
}

.document-icon.primary { background: rgba(67, 97, 238, 0.1); color: var(--primary); }
.document-icon.success { background: rgba(42, 157, 143, 0.1); color: var(--success); }
.document-icon.secondary { background: rgba(108, 117, 125, 0.1); color: #6c757d; }

.document-actions {
    margin-top: 1.5rem;
    width: 100%;
}

.document-btn {
    width: 100%;
    padding: 0.875rem;
    border-radius: 8px;
    border: 2px solid transparent;
    font-weight: 500;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.document-btn-primary {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.document-btn-primary:hover {
    background: #3a56d4;
    border-color: #3a56d4;
    transform: translateY(-2px);
}

.document-btn-outline {
    background: transparent;
    color: var(--primary);
    border-color: var(--primary);
}

.document-btn-outline:hover {
    background: var(--primary);
    color: white;
    transform: translateY(-2px);
}

.document-btn-secondary {
    background: #6c757d;
    color: white;
    border-color: #6c757d;
}

.document-btn-secondary:hover {
    background: #5a6268;
    border-color: #5a6268;
    transform: translateY(-2px);
}

.dropdown-document {
    min-width: 250px;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    border: 1px solid #e9ecef;
    overflow: hidden;
}

.dropdown-item-document {
    padding: 0.875rem 1rem;
    border-bottom: 1px solid #f8f9fa;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.dropdown-item-document:last-child {
    border-bottom: none;
}

.dropdown-item-document:hover {
    background-color: #f8f9fa;
    color: var(--primary);
}

.dropdown-item-document i {
    width: 20px;
    text-align: center;
}

/* Tableau amélioré avec scroll */
.table-container {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    margin-bottom: 2rem;
}

.table-header {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    padding: 1.5rem;
    color: white;
}

.table-header h5 {
    color: white;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.table-header .text-muted {
    color: rgba(255, 255, 255, 0.8) !important;
    font-size: 0.9rem;
}

/* Container pour le défilement horizontal */
.table-responsive-container {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.table-modern {
    width: 100%;
    margin-bottom: 0;
    min-width: 1200px;
}

.table-modern thead th {
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    padding: 1rem 1.25rem;
    font-weight: 600;
    color: #495057;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 0.5px;
    white-space: nowrap;
    position: sticky;
    top: 0;
    z-index: 10;
}

.table-modern tbody td {
    padding: 1.25rem 1.25rem;
    vertical-align: middle;
    border-bottom: 1px solid #e9ecef;
    font-size: 0.9rem;
    white-space: nowrap;
}

.table-modern tbody tr:last-child td {
    border-bottom: none;
}

.table-modern tbody tr:hover {
    background-color: rgba(67, 97, 238, 0.02);
}

/* Style pour la barre de défilement */
.table-responsive-container::-webkit-scrollbar {
    height: 8px;
}

.table-responsive-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.table-responsive-container::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 4px;
}

.table-responsive-container::-webkit-scrollbar-thumb:hover {
    background: #a8a8a8;
}

/* Badges améliorés */
.badge-table {
    padding: 0.5rem 0.75rem;
    font-weight: 500;
    border-radius: 8px;
    font-size: 0.75rem;
    letter-spacing: 0.3px;
    display: inline-block;
    min-width: 80px;
    text-align: center;
}

/* Product card dans le tableau */
.product-cell {
    display: flex;
    align-items: center;
    gap: 1rem;
    min-height: 60px;
    min-width: 250px;
}

.product-icon {
    width: 45px;
    height: 45px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.product-info {
    flex: 1;
    min-width: 0;
}

.product-info strong {
    display: block;
    font-weight: 600;
    color: #343a40;
    margin-bottom: 0.25rem;
    line-height: 1.3;
    font-size: 0.95rem;
}

.product-info small {
    color: #6c757d;
    font-size: 0.8rem;
    display: block;
    margin-bottom: 0.25rem;
}

/* Cellules avec contenu complexe */
.cell-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 60px;
    min-width: 120px;
}

.cell-content.simple {
    min-width: 100px;
}

.date-cell {
    min-width: 150px;
}

.date-cell .small {
    line-height: 1.4;
}

.date-cell .text-muted {
    font-size: 0.75rem;
}

.date-cell strong {
    font-size: 0.85rem;
}

/* Boutons d'action */
.action-cell {
    min-width: 120px;
}

.action-buttons {
    display: flex;
    gap: 0.5rem;
    justify-content: center;
}

.btn-action {
    width: 36px;
    height: 36px;
    padding: 0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Total section */
.total-container {
    background: linear-gradient(135deg, #f8f9fc 0%, #ffffff 100%);
    border-radius: 12px;
    padding: 2.5rem;
    margin-top: 2rem;
    border: 1px solid #e9ecef;
    text-align: center;
}

.total-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: rgba(67, 97, 238, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.5rem;
    color: var(--primary);
}

/* Indicateur de scroll */
.scroll-hint {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.9);
    padding: 0.5rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    color: var(--primary);
    display: flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    animation: bounce 2s infinite;
    z-index: 5;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(-50%);}
    40% {transform: translateY(-55%);}
    60% {transform: translateY(-45%);}
}

/* Responsive */
@media (max-width: 768px) {
    .document-container {
        grid-template-columns: 1fr;
    }
    
    .table-header {
        padding: 1rem;
    }
    
    .scroll-hint {
        display: none;
    }
    
    .product-cell {
        min-width: 200px;
    }
}

/* Loading spinner */
.loading-spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid rgba(255,255,255,.3);
    border-radius: 50%;
    border-top-color: white;
    animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Ajout pour le modal de confirmation de téléchargement */
.modal-document .modal-content {
    border-radius: 15px;
    border: none;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

.modal-document .modal-header {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    border-bottom: none;
    border-radius: 15px 15px 0 0;
    padding: 1.5rem 2rem;
}

.modal-document .modal-body {
    padding: 2rem;
}

.modal-document .modal-footer {
    border-top: 1px solid #e9ecef;
    border-radius: 0 0 15px 15px;
    padding: 1.5rem 2rem;
}

.document-icon-lg {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
}

.document-icon-lg.primary { 
    background: rgba(67, 97, 238, 0.1); 
    color: var(--primary); 
}

.document-icon-lg.success { 
    background: rgba(42, 157, 143, 0.1); 
    color: var(--success); 
}
</style>

<div class=\"container-fluid px-4 py-4 page-transition\">
    <!-- Header avec navigation -->
    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-5\">
        <div class=\"mb-3 mb-md-0\">
            <nav aria-label=\"breadcrumb\" class=\"mb-3\">
                <ol class=\"breadcrumb bg-transparent px-0\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 572
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\" class=\"text-decoration-none text-muted\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Achats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active text-primary fw-bold\" aria-current=\"page\">
                        ";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 578, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 578), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <div class=\"d-flex align-items-center gap-3\">
                <h1 class=\"h2 fw-bold mb-0\">";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 583, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 583), "html", null, true);
        yield "</h1>
                <span class=\"badge-status bg-";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 584, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 584, $this->source); })()), "status", [], "any", false, false, false, 584), [], "array", false, false, false, 584), "html", null, true);
        yield "-light text-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 584, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 584, $this->source); })()), "status", [], "any", false, false, false, 584), [], "array", false, false, false, 584), "html", null, true);
        yield " border border-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 584, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 584, $this->source); })()), "status", [], "any", false, false, false, 584), [], "array", false, false, false, 584), "html", null, true);
        yield "\">
                    <i class=\"fas ";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_icons"]) || array_key_exists("status_icons", $context) ? $context["status_icons"] : (function () { throw new RuntimeError('Variable "status_icons" does not exist.', 585, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 585, $this->source); })()), "status", [], "any", false, false, false, 585), [], "array", false, false, false, 585), "html", null, true);
        yield " me-2\"></i>
                    ";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_mapping"]) || array_key_exists("status_mapping", $context) ? $context["status_mapping"] : (function () { throw new RuntimeError('Variable "status_mapping" does not exist.', 586, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 586, $this->source); })()), "status", [], "any", false, false, false, 586), [], "array", false, false, false, 586), "html", null, true);
        yield "
                </span>
            </div>
            <div class=\"d-flex align-items-center gap-2 mt-2\">
                <div class=\"d-flex align-items-center\">
                    ";
        // line 591
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "photo", [], "any", false, false, false, 591)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 592
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 592, $this->source); })()), "user", [], "any", false, false, false, 592), "photo", [], "any", false, false, false, 592))), "html", null, true);
            yield "\" 
                             class=\"user-avatar me-2\"
                             alt=\"";
            // line 594
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, true, false, 594), "fullName", [], "any", true, true, false, 594) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 594, $this->source); })()), "user", [], "any", false, false, false, 594), "fullName", [], "any", false, false, false, 594)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 594, $this->source); })()), "user", [], "any", false, false, false, 594), "fullName", [], "any", false, false, false, 594), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 594, $this->source); })()), "user", [], "any", false, false, false, 594), "email", [], "any", false, false, false, 594), "html", null, true)));
            yield "\">
                    ";
        } else {
            // line 596
            yield "                        <div class=\"user-avatar me-2 bg-primary d-flex align-items-center justify-content-center text-white\">
                            <i class=\"fas fa-user\"></i>
                        </div>
                    ";
        }
        // line 600
        yield "                    <div>
                        <span class=\"text-muted me-2\">Créé par:</span>
                        <strong>";
        // line 602
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, true, false, 602), "fullName", [], "any", true, true, false, 602) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 602, $this->source); })()), "user", [], "any", false, false, false, 602), "fullName", [], "any", false, false, false, 602)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 602, $this->source); })()), "user", [], "any", false, false, false, 602), "fullName", [], "any", false, false, false, 602), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 602, $this->source); })()), "user", [], "any", false, false, false, 602), "email", [], "any", false, false, false, 602), "html", null, true)));
        yield "</strong>
                    </div>
                </div>
                <div class=\"vr mx-3\"></div>
                <div class=\"text-muted\">
                    <i class=\"far fa-calendar me-1\"></i>
                    ";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 608, $this->source); })()), "createdAt", [], "any", false, false, false, 608), "d/m/Y à H:i"), "html", null, true);
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"d-flex flex-wrap gap-3\">
            ";
        // line 614
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 614, $this->source); })()), "status", [], "any", false, false, false, 614) == "confirmed")) {
            // line 615
            yield "                <!-- Bouton Réceptionner -->
                <button type=\"button\" 
                        class=\"btn btn-success px-4\"
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#receiveModal\">
                    <i class=\"fas fa-check-circle me-2\"></i> Réceptionner
                </button>
                
                <!-- Bouton Annuler -->
                <button type=\"button\" 
                        class=\"btn btn-danger px-4\"
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#cancelModal\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler
                </button>
            ";
        }
        // line 631
        yield "        </div>
        <a href=\"";
        // line 632
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
            <i class=\"fas fa-list me-2\"></i> Retour aux achats
        </a>
    </div>

    <!-- Section Informations -->
    <div class=\"row g-4 mb-4\">
        <!-- Carte Fournisseur -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm card-hover h-100\">
                <div class=\"card-header bg-white border-0 d-flex align-items-center\">
                    <div class=\"icon-circle bg-primary-light text-primary\">
                        <i class=\"fas fa-truck fa-lg\"></i>
                    </div>
                    <div>
                        <h5 class=\"fw-bold mb-0\">Fournisseur</h5>
                        <small class=\"text-muted\">Informations sur le fournisseur</small>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
        // line 652
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 652, $this->source); })()), "supplier", [], "any", false, false, false, 652)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 653
            yield "                        <div class=\"d-flex align-items-center mb-4\">
                            <div class=\"bg-primary-light rounded-circle d-inline-flex align-items-center justify-content-center p-3 me-3\">
                                <i class=\"fas fa-building fa-lg text-primary\"></i>
                            </div>
                            <div>
                                <h4 class=\"fw-bold mb-1\">";
            // line 658
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 658, $this->source); })()), "supplier", [], "any", false, false, false, 658), "name", [], "any", false, false, false, 658), "html", null, true);
            yield "</h4>
                                ";
            // line 659
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 659, $this->source); })()), "supplier", [], "any", false, false, false, 659), "contactPerson", [], "any", false, false, false, 659)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 660
                yield "                                <p class=\"text-muted mb-0\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 660, $this->source); })()), "supplier", [], "any", false, false, false, 660), "contactPerson", [], "any", false, false, false, 660), "html", null, true);
                yield "</p>
                                ";
            }
            // line 662
            yield "                            </div>
                        </div>
                        
                        <div class=\"space-y-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-envelope text-primary\"></i>
                                </div>
                                <div>
                                    <small class=\"text-muted d-block\">Email</small>
                                    <strong>";
            // line 672
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 672, $this->source); })()), "supplier", [], "any", false, false, false, 672), "email", [], "any", false, false, false, 672), "html", null, true);
            yield "</strong>
                                </div>
                            </div>
                            
                            ";
            // line 676
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 676, $this->source); })()), "supplier", [], "any", false, false, false, 676), "phone", [], "any", false, false, false, 676)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 677
                yield "                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-phone text-primary\"></i>
                                </div>
                                <div>
                                    <small class=\"text-muted d-block\">Téléphone</small>
                                    <strong>";
                // line 683
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 683, $this->source); })()), "supplier", [], "any", false, false, false, 683), "phone", [], "any", false, false, false, 683), "html", null, true);
                yield "</strong>
                                </div>
                            </div>
                            ";
            }
            // line 687
            yield "                            
                            ";
            // line 688
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 688, $this->source); })()), "supplier", [], "any", false, false, false, 688), "adress", [], "any", false, false, false, 688)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 689
                yield "                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-map-marker-alt text-primary\"></i>
                                </div>
                                <div>
                                    <small class=\"text-muted d-block\">Adresse</small>
                                    <strong>";
                // line 695
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 695, $this->source); })()), "supplier", [], "any", false, false, false, 695), "adress", [], "any", false, false, false, 695), "html", null, true);
                yield "</strong>
                                </div>
                            </div>
                            ";
            }
            // line 699
            yield "                        </div>
                        
                        <div class=\"mt-4 pt-3 border-top\">
                            <a href=\"";
            // line 702
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 702, $this->source); })()), "supplier", [], "any", false, false, false, 702), "id", [], "any", false, false, false, 702)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-external-link-alt me-2\"></i> Voir la fiche
                            </a>
                        </div>
                    ";
        } else {
            // line 708
            yield "                        <div class=\"text-center py-5\">
                            <div class=\"bg-light rounded-circle d-inline-flex align-items-center justify-content-center p-4 mb-3\">
                                <i class=\"fas fa-question-circle fa-2x text-muted\"></i>
                            </div>
                            <h5 class=\"text-muted fw-bold mb-2\">Aucun fournisseur</h5>
                            <p class=\"text-muted small\">Cet achat n'est associé à aucun fournisseur</p>
                        </div>
                    ";
        }
        // line 716
        yield "                </div>
            </div>
        </div>
        
        <!-- Carte Détails Achat -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm card-hover h-100\">
                <div class=\"card-header bg-white border-0 d-flex align-items-center\">
                    <div class=\"icon-circle bg-success-light text-success\">
                        <i class=\"fas fa-receipt fa-lg\"></i>
                    </div>
                    <div>
                        <h5 class=\"fw-bold mb-0\">Détails de l'achat</h5>
                        <small class=\"text-muted\">Informations générales</small>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"space-y-3\">
                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Numéro</span>
                            <strong class=\"text-dark\">";
        // line 736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 736, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 736), "html", null, true);
        yield "</strong>
                        </div>
                        
                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Création</span>
                            <strong>";
        // line 741
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 741, $this->source); })()), "createdAt", [], "any", false, false, false, 741), "d/m/Y H:i"), "html", null, true);
        yield "</strong>
                        </div>
                        
                        ";
        // line 744
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 744, $this->source); })()), "confirmedAt", [], "any", false, false, false, 744)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 745
            yield "                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Confirmation</span>
                            <strong>";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 747, $this->source); })()), "confirmedAt", [], "any", false, false, false, 747), "d/m/Y H:i"), "html", null, true);
            yield "</strong>
                        </div>
                        ";
        }
        // line 750
        yield "                        
                        ";
        // line 751
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 751, $this->source); })()), "receivedAt", [], "any", false, false, false, 751)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 752
            yield "                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Réception</span>
                            <strong>";
            // line 754
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 754, $this->source); })()), "receivedAt", [], "any", false, false, false, 754), "d/m/Y H:i"), "html", null, true);
            yield "</strong>
                        </div>
                        ";
        }
        // line 757
        yield "                        
                        ";
        // line 758
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 758, $this->source); })()), "cancelledAt", [], "any", false, false, false, 758)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 759
            yield "                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Annulation</span>
                            <strong>";
            // line 761
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 761, $this->source); })()), "cancelledAt", [], "any", false, false, false, 761), "d/m/Y H:i"), "html", null, true);
            yield "</strong>
                        </div>
                        ";
        }
        // line 764
        yield "                        
                        ";
        // line 765
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 765, $this->source); })()), "cancelledAt", [], "any", false, false, false, 765)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 766
            yield "                        <div class=\"d-flex justify-content-between align-items-start py-2\">
                            <span class=\"text-muted\">Annulé par</span>
                            <div class=\"text-end\">
                                <strong>";
            // line 769
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "cancelledBy", [], "any", false, true, false, 769), "fullName", [], "any", true, true, false, 769) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 769, $this->source); })()), "cancelledBy", [], "any", false, false, false, 769), "fullName", [], "any", false, false, false, 769)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 769, $this->source); })()), "cancelledBy", [], "any", false, false, false, 769), "fullName", [], "any", false, false, false, 769), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 769, $this->source); })()), "cancelledBy", [], "any", false, false, false, 769), "email", [], "any", false, false, false, 769), "html", null, true)));
            yield "</strong>
                                ";
            // line 770
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 770, $this->source); })()), "cancellationReason", [], "any", false, false, false, 770)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 771
                yield "                                    <div class=\"text-muted small mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 771, $this->source); })()), "cancellationReason", [], "any", false, false, false, 771), "html", null, true);
                yield "</div>
                                ";
            }
            // line 773
            yield "                            </div>
                        </div>
                        ";
        }
        // line 776
        yield "                        
                        <div class=\"pt-3 border-top mt-3\">
                            <div class=\"d-flex justify-content-between align-items-center py-2\">
                                <span class=\"text-muted\">Montant total</span>
                                <h4 class=\"fw-bold text-success mb-0\">";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 780, $this->source); })()), "totalAmount", [], "any", false, false, false, 780)), "html", null, true);
        yield "</h4>
                            </div>
                        </div>
                        
                        ";
        // line 784
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 784, $this->source); })()), "notes", [], "any", false, false, false, 784)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 785
            yield "                        <div class=\"mt-3 pt-3 border-top\">
                            <small class=\"text-muted d-block mb-2\">Notes</small>
                            <div class=\"bg-light p-3 rounded\">
                                <p class=\"mb-0\">";
            // line 788
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 788, $this->source); })()), "notes", [], "any", false, false, false, 788), "html", null, true));
            yield "</p>
                            </div>
                        </div>
                        ";
        }
        // line 792
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Documents -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white border-0 d-flex align-items-center\">
            <div class=\"icon-circle bg-info-light text-info\">
                <i class=\"fas fa-file-alt fa-lg\"></i>
            </div>
            <div>
                <h5 class=\"fw-bold mb-0\">Documents</h5>
                <small class=\"text-muted\">Visualiser, télécharger ou générer</small>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"document-container\">
                <!-- Bon de commande -->
                <div class=\"document-card ";
        // line 812
        yield (((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 812, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
        yield "\">
                    <div class=\"document-icon ";
        // line 813
        yield (((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 813, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("primary") : (""));
        yield "\">
                        <i class=\"fas fa-file-contract\"></i>
                    </div>
                    <h5 class=\"fw-bold mb-2\">Bon de commande</h5>
                    <p class=\"text-muted mb-3\">
                        ";
        // line 818
        yield (((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 818, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Document généré") : ("Générer le document"));
        yield "
                    </p>
                    
                    <div class=\"document-actions\">
                        <div class=\"dropdown\">
                            <button class=\"document-btn ";
        // line 823
        yield (((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 823, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("document-btn-primary") : ("document-btn-outline"));
        yield " dropdown-toggle\" 
                                    type=\"button\" 
                                    data-bs-toggle=\"dropdown\" 
                                    aria-expanded=\"false\">
                                <i class=\"fas ";
        // line 827
        yield (((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 827, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-eye") : ("fa-plus-circle"));
        yield " me-1\"></i>
                                ";
        // line 828
        yield (((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 828, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Voir les options") : ("Générer le document"));
        yield "
                            </button>
                            <ul class=\"dropdown-menu dropdown-document\">
                                ";
        // line 831
        if ((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 831, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 832
            yield "                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"viewDocument('bon-commande')\">
                                        <i class=\"fas fa-eye text-primary\"></i>
                                        <span>Voir le document</span>
                                    </a>
                                </li>
                                ";
        } else {
            // line 839
            yield "                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"generateDocument('bon-commande')\">
                                        <i class=\"fas fa-plus-circle text-primary\"></i>
                                        <span>Générer le document</span>
                                    </a>
                                </li>
                                ";
        }
        // line 846
        yield "                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"downloadDocument('bon-commande')\">
                                        <i class=\"fas fa-download text-primary\"></i>
                                        <span>Télécharger</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Reçu d'achat -->
                <div class=\"document-card ";
        // line 858
        yield (((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 858, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
        yield " ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 858, $this->source); })()), "status", [], "any", false, false, false, 858) != "received")) ? ("disabled") : (""));
        yield "\">
                    <div class=\"document-icon ";
        // line 859
        yield (((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 859, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
        yield "\">
                        <i class=\"fas fa-file-invoice-dollar\"></i>
                    </div>
                    <h5 class=\"fw-bold mb-2\">Reçu d'achat</h5>
                    <p class=\"text-muted mb-3\">
                        ";
        // line 864
        if ((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 864, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 865
            yield "                            Document généré
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 866
(isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 866, $this->source); })()), "status", [], "any", false, false, false, 866) == "received")) {
            // line 867
            yield "                            Générer le document
                        ";
        } else {
            // line 869
            yield "                            Disponible après réception
                        ";
        }
        // line 871
        yield "                    </p>
                    
                    ";
        // line 873
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 873, $this->source); })()), "status", [], "any", false, false, false, 873) == "received")) {
            // line 874
            yield "                    <div class=\"document-actions\">
                        <div class=\"dropdown\">
                            <button class=\"document-btn ";
            // line 876
            yield (((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 876, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("document-btn-primary") : ("document-btn-outline"));
            yield " dropdown-toggle\" 
                                    type=\"button\" 
                                    data-bs-toggle=\"dropdown\" 
                                    aria-expanded=\"false\">
                                <i class=\"fas ";
            // line 880
            yield (((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 880, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-eye") : ("fa-plus-circle"));
            yield " me-1\"></i>
                                ";
            // line 881
            yield (((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 881, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Voir les options") : ("Générer le document"));
            yield "
                            </button>
                            <ul class=\"dropdown-menu dropdown-document\">
                                ";
            // line 884
            if ((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 884, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 885
                yield "                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"viewDocument('recu-achat')\">
                                        <i class=\"fas fa-eye text-success\"></i>
                                        <span>Voir le document</span>
                                    </a>
                                </li>
                                ";
            } else {
                // line 892
                yield "                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"generateDocument('recu-achat')\">
                                        <i class=\"fas fa-plus-circle text-success\"></i>
                                        <span>Générer le document</span>
                                    </a>
                                </li>
                                ";
            }
            // line 899
            yield "                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"downloadDocument('recu-achat')\">
                                        <i class=\"fas fa-download text-success\"></i>
                                        <span>Télécharger</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    ";
        }
        // line 909
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des produits avec défilement horizontal -->
    <div class=\"table-container\">
        <!-- Entête du tableau -->
        <div class=\"table-header position-relative\">
            <h5 class=\"fw-bold mb-1\">
                <i class=\"fas fa-boxes me-2\"></i>
                Produits commandés
            </h5>
            <p class=\"text-muted mb-0\">
                ";
        // line 923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 923, $this->source); })()), "purchaseItems", [], "any", false, false, false, 923)), "html", null, true);
        yield " produit(s) dans cette commande
            </p>
            
            <!-- Indicateur de scroll -->
            <div class=\"scroll-hint d-none d-md-flex\">
                <i class=\"fas fa-arrows-left-right\"></i>
                <span>Défiler pour voir plus</span>
            </div>
        </div>
        
        <!-- Container avec défilement horizontal -->
        <div class=\"table-responsive-container\">
            <table class=\"table table-modern table-hover align-middle mb-0\">
                <thead>
                    <tr>
                        <th class=\"ps-4\" style=\"min-width: 280px;\">PRODUIT</th>
                        <th class=\"text-center\" style=\"min-width: 120px;\">N° LOT</th>
                        <th class=\"text-center\" style=\"min-width: 140px;\">STATUT</th>
                        <th class=\"text-center\" style=\"min-width: 100px;\">QUANTITÉ</th>
                        <th class=\"text-center\" style=\"min-width: 120px;\">PRIX UNITAIRE</th>
                        <th class=\"text-center\" style=\"min-width: 120px;\">TOTAL</th>
                        <th class=\"text-center\" style=\"min-width: 160px;\">DATES</th>
                        ";
        // line 945
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 945, $this->source); })()), "status", [], "any", false, false, false, 945) == "confirmed")) {
            // line 946
            yield "                        <th class=\"text-center pe-4\" style=\"min-width: 140px;\">ACTIONS</th>
                        ";
        }
        // line 948
        yield "                    </tr>
                </thead>
                <tbody id=\"productsTable\">
                    ";
        // line 951
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 951, $this->source); })()), "purchaseItems", [], "any", false, false, false, 951));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 952
            yield "                        ";
            $context["isPerishable"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 952), "hasExpiryDate", [], "any", false, false, false, 952);
            // line 953
            yield "                        ";
            $context["hasExpiryDate"] =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 953));
            // line 954
            yield "                        ";
            $context["hasManufacturingDate"] =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 954));
            // line 955
            yield "                        ";
            $context["isLotComplete"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 955) && ( !(isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 955, $this->source); })()) || (((isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 955, $this->source); })()) && (isset($context["hasManufacturingDate"]) || array_key_exists("hasManufacturingDate", $context) ? $context["hasManufacturingDate"] : (function () { throw new RuntimeError('Variable "hasManufacturingDate" does not exist.', 955, $this->source); })())) && (isset($context["hasExpiryDate"]) || array_key_exists("hasExpiryDate", $context) ? $context["hasExpiryDate"] : (function () { throw new RuntimeError('Variable "hasExpiryDate" does not exist.', 955, $this->source); })()))));
            // line 956
            yield "                        
                        <tr data-item-id=\"";
            // line 957
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 957), "html", null, true);
            yield "\" 
                            data-product-name=\"";
            // line 958
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 958), "name", [], "any", false, false, false, 958)), "html", null, true);
            yield "\" 
                            data-barcode=\"";
            // line 959
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 959), "barcode", [], "any", false, false, false, 959)), "html", null, true);
            yield "\"
                            data-is-perishable=\"";
            // line 960
            yield (((($tmp = (isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 960, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">
                            <!-- Colonne Produit -->
                            <td class=\"ps-4\">
                                <div class=\"product-cell\">
                                    <div class=\"product-icon bg-primary-light text-primary\">
                                        <i class=\"fas fa-box\"></i>
                                    </div>
                                    <div class=\"product-info\">
                                        <strong>";
            // line 968
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 968), "name", [], "any", false, false, false, 968), "html", null, true);
            yield "</strong>
                                        <small>";
            // line 969
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 969), "barcode", [], "any", false, false, false, 969), "html", null, true);
            yield "</small>
                                        ";
            // line 970
            if ((($tmp = (isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 970, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 971
                yield "                                        <span class=\"badge-table bg-info-light text-info border border-info\">
                                            <i class=\"fas fa-clock me-1\"></i> Périssable
                                        </span>
                                        ";
            }
            // line 975
            yield "                                    </div>
                                </div>
                            </td>
                            
                            <!-- Colonne Numéro de lot -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <span class=\"badge-table bg-info-light text-info border border-info\" id=\"batchNumber-";
            // line 982
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 982), "html", null, true);
            yield "\">
                                        ";
            // line 983
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", true, true, false, 983)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 983), "Non défini")) : ("Non défini")), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </td>
                            
                            <!-- Colonne Statut -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    ";
            // line 991
            if ((($tmp = (isset($context["isLotComplete"]) || array_key_exists("isLotComplete", $context) ? $context["isLotComplete"] : (function () { throw new RuntimeError('Variable "isLotComplete" does not exist.', 991, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 992
                yield "                                    <span class=\"badge-table bg-success-light text-success border border-success\">
                                        <i class=\"fas fa-check-circle me-1\"></i> Complet
                                    </span>
                                    ";
            } else {
                // line 996
                yield "                                    <span class=\"badge-table bg-";
                yield ((((isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 996, $this->source); })()) && ( !(isset($context["hasManufacturingDate"]) || array_key_exists("hasManufacturingDate", $context) ? $context["hasManufacturingDate"] : (function () { throw new RuntimeError('Variable "hasManufacturingDate" does not exist.', 996, $this->source); })()) ||  !(isset($context["hasExpiryDate"]) || array_key_exists("hasExpiryDate", $context) ? $context["hasExpiryDate"] : (function () { throw new RuntimeError('Variable "hasExpiryDate" does not exist.', 996, $this->source); })())))) ? ("danger") : ("warning"));
                yield "-light text-";
                yield ((((isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 996, $this->source); })()) && ( !(isset($context["hasManufacturingDate"]) || array_key_exists("hasManufacturingDate", $context) ? $context["hasManufacturingDate"] : (function () { throw new RuntimeError('Variable "hasManufacturingDate" does not exist.', 996, $this->source); })()) ||  !(isset($context["hasExpiryDate"]) || array_key_exists("hasExpiryDate", $context) ? $context["hasExpiryDate"] : (function () { throw new RuntimeError('Variable "hasExpiryDate" does not exist.', 996, $this->source); })())))) ? ("danger") : ("warning"));
                yield " border border-";
                yield ((((isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 996, $this->source); })()) && ( !(isset($context["hasManufacturingDate"]) || array_key_exists("hasManufacturingDate", $context) ? $context["hasManufacturingDate"] : (function () { throw new RuntimeError('Variable "hasManufacturingDate" does not exist.', 996, $this->source); })()) ||  !(isset($context["hasExpiryDate"]) || array_key_exists("hasExpiryDate", $context) ? $context["hasExpiryDate"] : (function () { throw new RuntimeError('Variable "hasExpiryDate" does not exist.', 996, $this->source); })())))) ? ("danger") : ("warning"));
                yield "\">
                                        <i class=\"fas fa-exclamation-circle me-1\"></i> 
                                        ";
                // line 998
                yield ((((isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 998, $this->source); })()) && ( !(isset($context["hasManufacturingDate"]) || array_key_exists("hasManufacturingDate", $context) ? $context["hasManufacturingDate"] : (function () { throw new RuntimeError('Variable "hasManufacturingDate" does not exist.', 998, $this->source); })()) ||  !(isset($context["hasExpiryDate"]) || array_key_exists("hasExpiryDate", $context) ? $context["hasExpiryDate"] : (function () { throw new RuntimeError('Variable "hasExpiryDate" does not exist.', 998, $this->source); })())))) ? ("Dates manquantes") : ("Lot incomplet"));
                yield "
                                    </span>
                                    ";
            }
            // line 1001
            yield "                                </div>
                            </td>
                            
                            <!-- Colonne Quantité -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <span class=\"badge-table bg-primary-light text-primary border border-primary\">";
            // line 1007
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 1007), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            
                            <!-- Colonne Prix unitaire -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <span class=\"fw-bold text-dark\">";
            // line 1014
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 1014)), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            
                            <!-- Colonne Total -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <strong class=\"text-success\">";
            // line 1021
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 1021)), "html", null, true);
            yield "</strong>
                                </div>
                            </td>
                            
                           <!-- ... dans show.html.twig, dans la section des dates du tableau ... -->
                            <td class=\"text-center\">
                                <div class=\"cell-content date-cell\">
                                    ";
            // line 1028
            if ((($tmp = (isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 1028, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1029
                yield "                                        <div class=\"date-display\">
                                            ";
                // line 1030
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 1030)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1031
                    yield "                                                <div class=\"mb-1\">
                                                    <small class=\"text-muted d-block\">Fabrication</small>
                                                    <strong class=\"text-primary\">";
                    // line 1033
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 1033), "d/m/Y"), "html", null, true);
                    yield "</strong>
                                                </div>
                                            ";
                }
                // line 1036
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 1036)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1037
                    yield "                                                <div>
                                                    <small class=\"text-muted d-block\">Expiration</small>
                                                    <strong class=\"";
                    // line 1039
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 1039) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) ? ("text-danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 1039) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+1 month"))) ? ("text-warning") : ("text-success"))));
                    yield "\">
                                                        ";
                    // line 1040
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 1040), "d/m/Y"), "html", null, true);
                    yield "
                                                    </strong>
                                                </div>
                                            ";
                }
                // line 1044
                yield "                                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 1044) ||  !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 1044))) {
                    // line 1045
                    yield "                                                <span class=\"text-danger small\">
                                                    <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                    Dates incomplètes
                                                </span>
                                            ";
                }
                // line 1050
                yield "                                        </div>
                                    ";
            } else {
                // line 1052
                yield "                                        <span class=\"text-muted small\">Non périssable</span>
                                    ";
            }
            // line 1054
            yield "                                </div>
                            </td>
                            
                            <!-- Colonne Actions -->
                            ";
            // line 1058
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1058, $this->source); })()), "status", [], "any", false, false, false, 1058) == "confirmed")) {
                // line 1059
                yield "                            <td class=\"text-center pe-4\">
                                <div class=\"cell-content action-cell\">
                                    <div class=\"action-buttons\">
                                        <button type=\"button\" 
                                                class=\"btn btn-outline-primary btn-action edit-item-btn\" 
                                                data-item-id=\"";
                // line 1064
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 1064), "html", null, true);
                yield "\"
                                                data-bs-toggle=\"modal\" 
                                                data-bs-target=\"#editItemModal\"
                                                title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-outline-danger btn-action delete-item-btn\" 
                                                data-item-id=\"";
                // line 1072
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 1072), "html", null, true);
                yield "\"
                                                data-product-name=\"";
                // line 1073
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 1073), "name", [], "any", false, false, false, 1073), "html", null, true);
                yield "\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            ";
            }
            // line 1081
            yield "                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 1082
        if (!$context['_iterated']) {
            // line 1083
            yield "                        <tr>
                            <td colspan=\"";
            // line 1084
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1084, $this->source); })()), "status", [], "any", false, false, false, 1084) == "confirmed")) ? (8) : (7));
            yield "\" class=\"text-center py-5\">
                                <div class=\"py-5\">
                                    <div class=\"bg-light rounded-circle d-inline-flex align-items-center justify-content-center p-4 mb-3\">
                                        <i class=\"fas fa-shopping-cart fa-2x text-muted\"></i>
                                    </div>
                                    <h5 class=\"text-muted fw-bold mb-2\">Aucun produit</h5>
                                    <p class=\"text-muted mb-4\">Aucun produit dans cette commande</p>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1095
        yield "                </tbody>
            </table>
        </div>
    </div>

    <!-- Section Total Centrée -->
    <div class=\"total-container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"total-icon\">
                    <i class=\"fas fa-calculator\"></i>
                </div>
                <h5 class=\"text-muted mb-2\">Montant total de l'achat</h5>
                <h1 class=\"fw-bold text-success mb-3\">";
        // line 1108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1108, $this->source); })()), "totalAmount", [], "any", false, false, false, 1108)), "html", null, true);
        yield "</h1>
                <p class=\"text-muted small mb-0\">
                    ";
        // line 1110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1110, $this->source); })()), "purchaseItems", [], "any", false, false, false, 1110)), "html", null, true);
        yield " produit(s) • 
                    ";
        // line 1111
        $context["totalQuantity"] = 0;
        // line 1112
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1112, $this->source); })()), "purchaseItems", [], "any", false, false, false, 1112));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1113
            yield "                        ";
            $context["totalQuantity"] = ((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 1113, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 1113));
            // line 1114
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1115
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 1115, $this->source); })()), "html", null, true);
        yield " unité(s)
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Modal de modification d'item -->
<div class=\"modal fade modal-blur\" id=\"editItemModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-primary text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-edit me-2\"></i>Modifier le produit
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <form id=\"editItemForm\">
                    <input type=\"hidden\" id=\"editItemId\" name=\"item_id\">
                    <input type=\"hidden\" id=\"editPurchaseId\" value=\"";
        // line 1135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1135, $this->source); })()), "id", [], "any", false, false, false, 1135), "html", null, true);
        yield "\">
                    
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold text-dark\">Produit</label>
                        <div class=\"bg-light p-3 rounded\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-box text-primary\"></i>
                                </div>
                                <div>
                                    <strong id=\"editProductName\" class=\"text-dark\"></strong>
                                    <div class=\"text-muted small\" id=\"editProductPrice\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <label for=\"editBatchNumber\" class=\"form-label fw-bold\">
                                Numéro de lot <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"text\" 
                                   class=\"form-control\" 
                                   id=\"editBatchNumber\" 
                                   name=\"batch_number\"
                                   required>
                            <div class=\"form-text small\">Généré automatiquement si vide</div>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editQuantity\" class=\"form-label fw-bold\">
                                Quantité <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"number\" 
                                   class=\"form-control\" 
                                   id=\"editQuantity\" 
                                   name=\"quantity\"
                                   min=\"1\" 
                                   required>
                        </div>
                    </div>
                    
                    <div id=\"expiryDateFields\" class=\"mt-4\" style=\"display: none;\">
                        <div class=\"alert alert-warning border-0 bg-warning-light\">
                            <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                            <span class=\"fw-bold\">Produit périssable</span>
                            <div class=\"small mt-1\">Les dates sont obligatoires pour la réception</div>
                        </div>
                        
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <label for=\"editManufacturingDate\" class=\"form-label fw-bold\">
                                    Date de fabrication <span class=\"text-danger\">*</span>
                                </label>
                                <input type=\"date\" 
                                       class=\"form-control\" 
                                       id=\"editManufacturingDate\" 
                                       name=\"manufacturing_date\"
                                       required>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <label for=\"editExpiryDate\" class=\"form-label fw-bold\">
                                    Date d'expiration <span class=\"text-danger\">*</span>
                                </label>
                                <input type=\"date\" 
                                       class=\"form-control\" 
                                       id=\"editExpiryDate\" 
                                       name=\"expiry_date\"
                                       required>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"alert alert-info border-0 bg-info-light mt-4\">
                        <i class=\"fas fa-info-circle me-2 text-info\"></i>
                        <small>Le prix unitaire est fixe et correspond au prix du produit</small>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary px-4\" id=\"saveItemBtn\">
                    <i class=\"fas fa-save me-2\"></i> Enregistrer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation suppression -->
<div class=\"modal fade modal-blur\" id=\"deleteItemModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-trash me-2\"></i>Supprimer le produit
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"alert alert-warning border-0 bg-warning-light\">
                    <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                    <strong>Attention :</strong> Cette action est irréversible.
                </div>
                
                <div class=\"text-center py-3\">
                    <div class=\"bg-danger-light rounded-circle d-inline-flex align-items-center justify-content-center p-3 mb-3\">
                        <i class=\"fas fa-trash fa-2x text-danger\"></i>
                    </div>
                    <h5 class=\"fw-bold mb-2\">Confirmer la suppression ?</h5>
                    <p class=\"text-muted\">Le produit <strong id=\"productNameToDelete\" class=\"text-danger\"></strong> sera retiré définitivement</p>
                </div>
                
                <div id=\"deleteResult\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger px-4\" id=\"confirmDeleteBtn\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de réception -->
<div class=\"modal fade modal-blur\" id=\"receiveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-success text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-check-circle me-2\"></i>Confirmer la réception
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"alert alert-info border-0 bg-info-light mb-4\">
                    <i class=\"fas fa-info-circle me-2 text-info\"></i>
                    <strong>Information importante</strong>
                    <ul class=\"mt-2 mb-0 ps-3\">
                        <li>L'achat sera marqué comme \"Reçu\"</li>
                        <li>Les stocks seront mis à jour automatiquement</li>
                        <li>Cette action est irréversible</li>
                    </ul>
                </div>
                
                <!-- Container pour notes de réception -->
                <div class=\"mb-4\">
                    <label for=\"receiveNotes\" class=\"form-label fw-bold\">
                        Notes de réception <span class=\"text-muted small\">(optionnel)</span>
                    </label>
                    <textarea class=\"form-control\" 
                              id=\"receiveNotes\" 
                              name=\"receiveNotes\"
                              rows=\"4\" 
                              placeholder=\"Ajoutez des notes concernant cette réception (condition des produits, remarques, etc.)...\"></textarea>
                    <div class=\"form-text small\">Ces notes seront sauvegardées avec l'achat.</div>
                </div>
                
                <div id=\"receiveValidation\" class=\"alert alert-warning border-0 bg-warning-light\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                    <span id=\"validationMessage\"></span>
                </div>
                
                <div id=\"receiveResult\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success px-4\" id=\"confirmReceiveBtn\">
                    <i class=\"fas fa-check-circle me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'annulation -->
<div class=\"modal fade modal-blur\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-ban me-2\"></i>Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"alert alert-warning border-0 bg-warning-light mb-4\">
                    <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                    <strong>Attention :</strong> Cette action est irréversible. La commande sera marquée comme annulée.
                </div>
                
                <!-- Container pour raison d'annulation -->
                <div class=\"mb-4\">
                    <label for=\"cancellationReason\" class=\"form-label fw-bold\">
                        Raison de l'annulation <span class=\"text-danger\">*</span>
                    </label>
                    <textarea class=\"form-control\" 
                              id=\"cancellationReason\" 
                              rows=\"5\" 
                              placeholder=\"Expliquez la raison de l'annulation de cette commande...\"
                              required></textarea>
                    <div class=\"form-text small\">Cette information sera enregistrée avec l'achat.</div>
                    <div class=\"invalid-feedback\" id=\"reasonError\">Veuillez saisir une raison.</div>
                </div>
                
                <div id=\"cancelResult\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                <button type=\"button\" class=\"btn btn-danger px-4\" id=\"confirmCancelBtn\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler la commande
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de téléchargement -->
<div class=\"modal fade modal-blur modal-document\" id=\"documentConfirmModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-primary text-white border-0\">
                <h5 class=\"modal-title fw-bold mb-0\">
                    <i class=\"fas fa-download me-2\"></i>
                    <span id=\"documentModalTitle\">Télécharger le document</span>
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"text-center mb-4\">
                    <div class=\"document-icon-lg primary\">
                        <i class=\"fas fa-file-contract\"></i>
                    </div>
                    <h4 class=\"fw-bold mb-2\" id=\"documentModalDocTitle\"></h4>
                    <p class=\"text-muted mb-0\" id=\"documentModalMessage\"></p>
                </div>
                
                <div class=\"alert alert-info border-0 bg-info-light\">
                    <i class=\"fas fa-info-circle me-2 text-info\"></i>
                    <span id=\"documentModalInfo\"></span>
                </div>
                
                <div id=\"documentModalResult\" class=\"mt-3\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary px-4\" id=\"confirmDocumentActionBtn\">
                    <i class=\"fas fa-download me-2\"></i> Télécharger
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// === FONCTIONS GLOBALES POUR LES DOCUMENTS ===
// Ces fonctions doivent être globales pour être appelées depuis onclick

function viewDocument(type) {
    let url;
    if (type === 'bon-commande') {
        url = \"";
        // line 1399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_view_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1399, $this->source); })()), "id", [], "any", false, false, false, 1399), "type" => "bon-commande"]), "html", null, true);
        yield "\";
    } else if (type === 'recu-achat') {
        url = \"";
        // line 1401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_view_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1401, $this->source); })()), "id", [], "any", false, false, false, 1401), "type" => "recu-achat"]), "html", null, true);
        yield "\";
    }
    
    if (url) {
        window.open(url, '_blank');
    }
}

function generateDocument(type) {
    showAlert('info', 'Génération du document en cours...');
    
    let url;
    if (type === 'bon-commande') {
        url = \"";
        // line 1414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_generate_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1414, $this->source); })()), "id", [], "any", false, false, false, 1414), "type" => "bon-commande"]), "html", null, true);
        yield "\";
    } else if (type === 'recu-achat') {
        url = \"";
        // line 1416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_generate_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1416, $this->source); })()), "id", [], "any", false, false, false, 1416), "type" => "recu-achat"]), "html", null, true);
        yield "\";
    }
    
    if (url) {
        const newWindow = window.open(url, '_blank');
        
        if (newWindow) {
            setTimeout(() => {
                showAlert('success', 'Document généré avec succès');
                setTimeout(() => {
                    location.reload();
                }, 2000);
            }, 1000);
        }
    }
}

function downloadDocument(type) {
    // Les variables globales pour gérer le téléchargement
    window.currentDocumentType = type;
    
    // Vérifier si le document existe
    if (type === 'bon-commande') {
        window.documentExists = ";
        // line 1439
        yield (((($tmp = (isset($context["has_bon_commande"]) || array_key_exists("has_bon_commande", $context) ? $context["has_bon_commande"] : (function () { throw new RuntimeError('Variable "has_bon_commande" does not exist.', 1439, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
    } else if (type === 'recu-achat') {
        window.documentExists = ";
        // line 1441
        yield (((($tmp = (isset($context["has_recu_achat"]) || array_key_exists("has_recu_achat", $context) ? $context["has_recu_achat"] : (function () { throw new RuntimeError('Variable "has_recu_achat" does not exist.', 1441, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
    }
    
    // Afficher le modal de confirmation
    const modalElement = document.getElementById('documentConfirmModal');
    const modal = new bootstrap.Modal(modalElement);
    
    // Configurer le modal
    const docTitleElement = document.getElementById('documentModalDocTitle');
    const messageElement = document.getElementById('documentModalMessage');
    const infoElement = document.getElementById('documentModalInfo');
    const resultElement = document.getElementById('documentModalResult');
    
    const documentName = type === 'bon-commande' ? 'Bon de commande' : 'Reçu d\\'achat';
    
    if (docTitleElement) docTitleElement.textContent = documentName;
    
    if (window.documentExists) {
        if (messageElement) {
            messageElement.textContent = 'Êtes-vous sûr de vouloir télécharger ce document ?';
        }
        if (infoElement) {
            infoElement.textContent = 'Le document sera téléchargé sur votre appareil.';
        }
    } else {
        if (messageElement) {
            messageElement.textContent = 'Ce document n\\'existe pas encore. Voulez-vous le générer et le télécharger ?';
        }
        if (infoElement) {
            infoElement.textContent = 'Le document sera généré puis téléchargé automatiquement.';
        }
    }
    
    // Vider les résultats précédents
    if (resultElement) resultElement.innerHTML = '';
    
    modal.show();
}

// Fonction d'alerte globale
function showAlert(type, message, container = null, icon = null) {
    const icons = {
        'success': 'fa-check-circle',
        'danger': 'fa-exclamation-circle',
        'warning': 'fa-exclamation-triangle',
        'info': 'fa-info-circle'
    };
    
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-\${type} alert-dismissible fade show border-0 shadow-sm`;
    alertDiv.innerHTML = `
        <div class=\"d-flex align-items-center\">
            \${icon ? `<i class=\"fas \${icon} me-2 fa-lg\"></i>` : `<i class=\"fas \${icons[type]} me-2 fa-lg\"></i>`}
            <div>\${message}</div>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    `;
    
    if (container) {
        container.innerHTML = '';
        container.appendChild(alertDiv);
    } else {
        document.querySelectorAll('.alert-fixed').forEach(alert => alert.remove());
        
        alertDiv.classList.add('alert-fixed', 'position-fixed');
        alertDiv.style.top = '20px';
        alertDiv.style.right = '20px';
        alertDiv.style.zIndex = '9999';
        alertDiv.style.minWidth = '350px';
        alertDiv.style.maxWidth = '500px';
        
        document.body.appendChild(alertDiv);
        
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.remove();
            }
        }, 5000);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const purchaseId = ";
        // line 1523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1523, $this->source); })()), "id", [], "any", false, false, false, 1523), "html", null, true);
        yield ";
    const purchaseStatus = '";
        // line 1524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1524, $this->source); })()), "status", [], "any", false, false, false, 1524), "html", null, true);
        yield "';
    
    // === GESTION DES MODIFICATIONS D'ITEMS ===
    if (purchaseStatus === 'confirmed') {
        let currentItemId = null;
        let itemToDeleteId = null;
        let itemToDeleteName = null;
        
        // Fonction pour générer un numéro de lot
        function generateBatchNumber() {
            const date = new Date();
            const random = Math.random().toString(36).substr(2, 6).toUpperCase();
            return `LOT-\${date.getFullYear()}\${(date.getMonth()+1).toString().padStart(2, '0')}\${date.getDate().toString().padStart(2, '0')}-\${random}`;
        }
        
        // Bouton \"Modifier\"
        document.querySelectorAll('.edit-item-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                currentItemId = this.dataset.itemId;
                
                const row = document.querySelector(`tr[data-item-id=\"\${currentItemId}\"]`);
                if (!row) return;
                
                const productName = row.querySelector('.product-info strong').textContent.trim();
                const batchNumberElement = row.querySelector('.badge-table.bg-info-light');
                const batchNumber = batchNumberElement ? batchNumberElement.textContent.trim() : '';
                const quantityBadge = row.querySelector('.badge-table.bg-primary-light');
                const quantity = quantityBadge ? parseInt(quantityBadge.textContent) : 1;
                const unitPriceCell = row.querySelector('td:nth-child(5) .cell-content');
                const unitPriceText = unitPriceCell ? unitPriceCell.textContent.trim() : '0 FCFA';
                
                // Remplir les champs du modal
                document.getElementById('editProductName').textContent = productName;
                document.getElementById('editProductPrice').textContent = 'Prix unitaire: ' + unitPriceText;
                document.getElementById('editBatchNumber').value = batchNumber === 'Non défini' || batchNumber === '' ? generateBatchNumber() : batchNumber;
                document.getElementById('editQuantity').value = quantity;
                document.getElementById('editItemId').value = currentItemId;
                
                const isPerishable = row.dataset.isPerishable === 'true';
                const expiryDateFields = document.getElementById('expiryDateFields');
                
                if (isPerishable) {
                    expiryDateFields.style.display = 'block';
                    
                    // Récupérer les dates existantes depuis le tableau
                    const dateCell = row.querySelector('.date-cell');
                    if (dateCell) {
                        const manufacturingDateSpan = dateCell.querySelector('div:nth-child(1) strong');
                        const expiryDateSpan = dateCell.querySelector('div:nth-child(2) strong');
                        
                        if (manufacturingDateSpan) {
                            const frDate = manufacturingDateSpan.textContent.trim();
                            if (frDate && frDate !== 'Dates manquantes') {
                                // Convertir dd/mm/yyyy en yyyy-mm-dd
                                const parts = frDate.split('/');
                                if (parts.length === 3) {
                                    const formattedDate = `\${parts[2]}-\${parts[1]}-\${parts[0]}`;
                                    document.getElementById('editManufacturingDate').value = formattedDate;
                                }
                            }
                        }
                        
                        if (expiryDateSpan) {
                            const frDate = expiryDateSpan.textContent.trim();
                            if (frDate && frDate !== 'Dates manquantes') {
                                // Convertir dd/mm/yyyy en yyyy-mm-dd
                                const parts = frDate.split('/');
                                if (parts.length === 3) {
                                    const formattedDate = `\${parts[2]}-\${parts[1]}-\${parts[0]}`;
                                    document.getElementById('editExpiryDate').value = formattedDate;
                                }
                            }
                        }
                    }
                    
                    // Si pas de dates, mettre des dates par défaut
                    if (!document.getElementById('editManufacturingDate').value) {
                        const today = new Date();
                        document.getElementById('editManufacturingDate').value = today.toISOString().split('T')[0];
                    }
                    
                    if (!document.getElementById('editExpiryDate').value) {
                        const expiryDate = new Date();
                        expiryDate.setMonth(expiryDate.getMonth() + 12);
                        document.getElementById('editExpiryDate').value = expiryDate.toISOString().split('T')[0];
                    }
                    
                    // Rendre les champs obligatoires
                    document.getElementById('editManufacturingDate').required = true;
                    document.getElementById('editExpiryDate').required = true;
                } else {
                    expiryDateFields.style.display = 'none';
                    // Désactiver la validation pour les champs de date
                    document.getElementById('editManufacturingDate').required = false;
                    document.getElementById('editExpiryDate').required = false;
                }
            });
        });
        
        // Bouton \"Supprimer\"
        document.querySelectorAll('.delete-item-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                itemToDeleteId = this.dataset.itemId;
                itemToDeleteName = this.dataset.productName;
                
                document.getElementById('productNameToDelete').textContent = itemToDeleteName;
                const modal = new bootstrap.Modal(document.getElementById('deleteItemModal'));
                modal.show();
            });
        });
        
        // Sauvegarder les modifications
        document.getElementById('saveItemBtn')?.addEventListener('click', function() {
            const btn = this;
            const itemId = document.getElementById('editItemId').value;
            
            if (!itemId) {
                showAlert('warning', 'Aucun produit sélectionné');
                return;
            }
            
            const batchNumber = document.getElementById('editBatchNumber').value.trim();
            const quantity = parseInt(document.getElementById('editQuantity').value);
            const manufacturingDate = document.getElementById('editManufacturingDate')?.value || '';
            const expiryDate = document.getElementById('editExpiryDate')?.value || '';
            
            if (!batchNumber) {
                showAlert('warning', 'Le numéro de lot est requis');
                return;
            }
            
            if (quantity <= 0 || isNaN(quantity)) {
                showAlert('warning', 'La quantité doit être supérieure à 0');
                return;
            }
            
            const expiryDateFields = document.getElementById('expiryDateFields');
            if (expiryDateFields.style.display !== 'none') {
                if (!manufacturingDate) {
                    showAlert('warning', 'La date de fabrication est requise pour les produits périssables');
                    return;
                }
                if (!expiryDate) {
                    showAlert('warning', 'La date d\\'expiration est requise pour les produits périssables');
                    return;
                }
            }
            
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
            
            const formData = new FormData();
            formData.append('batch_number', batchNumber);
            formData.append('quantity', quantity);
            
            if (manufacturingDate) {
                formData.append('manufacturing_date', manufacturingDate);
            }
            
            if (expiryDate) {
                formData.append('expiry_date', expiryDate);
            }
            
            fetch(`/admin/purchase/\${purchaseId}/edit-item/\${itemId}`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editItemModal'));
                    if (modal) modal.hide();
                    
                    showAlert('success', '✅ ' + data.message);
                    setTimeout(() => location.reload(), 1000);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de l\\'enregistrement'));
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                showAlert('danger', '❌ Erreur réseau: ' + error.message);
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
        
        // Confirmation suppression
        document.getElementById('confirmDeleteBtn')?.addEventListener('click', function() {
            if (!itemToDeleteId) return;
            
            const btn = this;
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Suppression...';
            
            fetch(`/admin/purchase/\${purchaseId}/remove-item/\${itemToDeleteId}`, {
                method: 'DELETE',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                const resultDiv = document.getElementById('deleteResult');
                
                if (data.success) {
                    showAlert('success', '✅ Produit supprimé avec succès', resultDiv, 'fa-trash');
                    
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('deleteItemModal'));
                        if (modal) modal.hide();
                        location.reload();
                    }, 1500);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de la suppression'), resultDiv, 'fa-exclamation-circle');
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                const resultDiv = document.getElementById('deleteResult');
                showAlert('danger', '❌ Erreur: ' + error.message, resultDiv, 'fa-exclamation-circle');
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
        
        // === CONFIRMATION DE RÉCEPTION ===
        document.getElementById('confirmReceiveBtn')?.addEventListener('click', function() {
            const btn = this;
            const modalElement = document.getElementById('receiveModal');
            if (!modalElement) return;
            
            const notesElement = modalElement.querySelector('#receiveNotes');
            const notes = notesElement ? notesElement.value.trim() : '';
            const resultDiv = modalElement.querySelector('#receiveResult');
            
            // Vérifier que tous les lots sont complets (pour les produits périssables)
            const incompleteItems = [];
            document.querySelectorAll('#productsTable tr[data-item-id]').forEach(row => {
                const isPerishable = row.dataset.isPerishable === 'true';
                if (isPerishable) {
                    const dateCell = row.querySelector('.date-cell');
                    const hasDates = dateCell && !dateCell.querySelector('.text-danger');
                    if (!hasDates) {
                        const productName = row.querySelector('.product-info strong').textContent;
                        incompleteItems.push(productName.trim());
                    }
                }
            });
            
            if (incompleteItems.length > 0) {
                const validationDiv = modalElement.querySelector('#receiveValidation');
                const messageSpan = modalElement.querySelector('#validationMessage');
                if (validationDiv && messageSpan) {
                    messageSpan.textContent = `Veuillez compléter les dates pour les produits périssables : \${incompleteItems.join(', ')}`;
                    validationDiv.style.display = 'block';
                }
                return;
            }
            
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
            
            const data = {
                notes: notes
            };
            
            fetch(`/admin/purchase/\${purchaseId}/receive-api`, {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', '✅ ' + data.message, resultDiv, 'fa-check-circle');
                    
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(modalElement);
                        if (modal) modal.hide();
                        
                        if (data.redirect_url) {
                            window.location.href = data.redirect_url;
                        } else {
                            window.location.href = `/admin/purchase/\${purchaseId}`;
                        }
                    }, 1500);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de la réception'), resultDiv, 'fa-exclamation-circle');
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                showAlert('danger', '❌ Erreur: ' + error.message, resultDiv, 'fa-exclamation-circle');
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
        
        // === CONFIRMATION D'ANNULATION ===
        document.getElementById('confirmCancelBtn')?.addEventListener('click', function() {
            const btn = this;
            const modalElement = document.getElementById('cancelModal');
            if (!modalElement) return;
            
            const reasonInput = modalElement.querySelector('#cancellationReason');
            const reason = reasonInput ? reasonInput.value.trim() : '';
            const resultDiv = modalElement.querySelector('#cancelResult');
            
            if (!reason) {
                reasonInput.classList.add('is-invalid');
                reasonInput.focus();
                return;
            }
            
            reasonInput.classList.remove('is-invalid');
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
            
            const formData = new FormData();
            formData.append('reason', reason);
            
            fetch(`/admin/purchase/\${purchaseId}/cancel`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', '✅ ' + data.message, resultDiv, 'fa-check-circle');
                    
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(modalElement);
                        if (modal) modal.hide();
                        location.reload();
                    }, 1500);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de l\\'annulation'), resultDiv, 'fa-exclamation-circle');
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                showAlert('danger', '❌ Erreur: ' + error.message, resultDiv, 'fa-exclamation-circle');
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
    }
    
    // === GESTION DU MODAL DE TÉLÉCHARGEMENT ===
    document.getElementById('confirmDocumentActionBtn')?.addEventListener('click', function() {
        const btn = this;
        const resultDiv = document.getElementById('documentModalResult');
        
        btn.disabled = true;
        const originalText = btn.innerHTML;
        btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
        
        // Déterminer l'URL
        let url;
        if (window.currentDocumentType === 'bon-commande') {
            if (window.documentExists) {
                url = \"";
        // line 1903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_download_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1903, $this->source); })()), "id", [], "any", false, false, false, 1903), "type" => "bon-commande"]), "html", null, true);
        yield "\";
            } else {
                url = \"";
        // line 1905
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_generate_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1905, $this->source); })()), "id", [], "any", false, false, false, 1905), "type" => "bon-commande"]), "html", null, true);
        yield "\";
            }
        } else if (window.currentDocumentType === 'recu-achat') {
            if (window.documentExists) {
                url = \"";
        // line 1909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_download_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1909, $this->source); })()), "id", [], "any", false, false, false, 1909), "type" => "recu-achat"]), "html", null, true);
        yield "\";
            } else {
                url = \"";
        // line 1911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_generate_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1911, $this->source); })()), "id", [], "any", false, false, false, 1911), "type" => "recu-achat"]), "html", null, true);
        yield "\";
            }
        }
        
        // Créer un lien temporaire pour le téléchargement
        const link = document.createElement('a');
        link.href = url;
        link.target = '_blank';
        
        // Déterminer le nom du fichier
        const filename = window.currentDocumentType === 'bon-commande' 
            ? 'bon-commande-";
        // line 1922
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1922, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 1922), "html", null, true);
        yield ".pdf' 
            : 'recu-achat-";
        // line 1923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1923, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 1923), "html", null, true);
        yield ".pdf';
        
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        
        showAlert('success', 'Téléchargement démarré', resultDiv);
        
        // Fermer le modal après un délai
        setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('documentConfirmModal'));
            if (modal) modal.hide();
            btn.disabled = false;
            btn.innerHTML = originalText;
            
            // Si on a généré un nouveau document, recharger la page après un délai
            if (!window.documentExists) {
                setTimeout(() => {
                    location.reload();
                }, 3000);
            }
        }, 1500);
    });
    
    // Animation des cartes
    const cards = document.querySelectorAll('.card-hover');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
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
        return "admin/purchase/show.html.twig";
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
        return array (  2414 => 1923,  2410 => 1922,  2396 => 1911,  2391 => 1909,  2384 => 1905,  2379 => 1903,  1997 => 1524,  1993 => 1523,  1908 => 1441,  1903 => 1439,  1877 => 1416,  1872 => 1414,  1856 => 1401,  1851 => 1399,  1584 => 1135,  1560 => 1115,  1554 => 1114,  1551 => 1113,  1546 => 1112,  1544 => 1111,  1540 => 1110,  1535 => 1108,  1520 => 1095,  1503 => 1084,  1500 => 1083,  1498 => 1082,  1493 => 1081,  1482 => 1073,  1478 => 1072,  1467 => 1064,  1460 => 1059,  1458 => 1058,  1452 => 1054,  1448 => 1052,  1444 => 1050,  1437 => 1045,  1434 => 1044,  1427 => 1040,  1423 => 1039,  1419 => 1037,  1416 => 1036,  1410 => 1033,  1406 => 1031,  1404 => 1030,  1401 => 1029,  1399 => 1028,  1389 => 1021,  1379 => 1014,  1369 => 1007,  1361 => 1001,  1355 => 998,  1345 => 996,  1339 => 992,  1337 => 991,  1326 => 983,  1322 => 982,  1313 => 975,  1307 => 971,  1305 => 970,  1301 => 969,  1297 => 968,  1286 => 960,  1282 => 959,  1278 => 958,  1274 => 957,  1271 => 956,  1268 => 955,  1265 => 954,  1262 => 953,  1259 => 952,  1254 => 951,  1249 => 948,  1245 => 946,  1243 => 945,  1218 => 923,  1202 => 909,  1190 => 899,  1181 => 892,  1172 => 885,  1170 => 884,  1164 => 881,  1160 => 880,  1153 => 876,  1149 => 874,  1147 => 873,  1143 => 871,  1139 => 869,  1135 => 867,  1133 => 866,  1130 => 865,  1128 => 864,  1120 => 859,  1114 => 858,  1100 => 846,  1091 => 839,  1082 => 832,  1080 => 831,  1074 => 828,  1070 => 827,  1063 => 823,  1055 => 818,  1047 => 813,  1043 => 812,  1021 => 792,  1014 => 788,  1009 => 785,  1007 => 784,  1000 => 780,  994 => 776,  989 => 773,  983 => 771,  981 => 770,  977 => 769,  972 => 766,  970 => 765,  967 => 764,  961 => 761,  957 => 759,  955 => 758,  952 => 757,  946 => 754,  942 => 752,  940 => 751,  937 => 750,  931 => 747,  927 => 745,  925 => 744,  919 => 741,  911 => 736,  889 => 716,  879 => 708,  870 => 702,  865 => 699,  858 => 695,  850 => 689,  848 => 688,  845 => 687,  838 => 683,  830 => 677,  828 => 676,  821 => 672,  809 => 662,  803 => 660,  801 => 659,  797 => 658,  790 => 653,  788 => 652,  765 => 632,  762 => 631,  744 => 615,  742 => 614,  733 => 608,  724 => 602,  720 => 600,  714 => 596,  709 => 594,  703 => 592,  701 => 591,  693 => 586,  689 => 585,  681 => 584,  677 => 583,  669 => 578,  660 => 572,  113 => 27,  111 => 21,  108 => 20,  106 => 14,  103 => 13,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Achat #{{ purchase.purchaseNumber }}{% endblock %}

{% block body %}
{% set status_mapping = {
    'draft': 'Brouillon',
    'confirmed': 'Confirmé',
    'received': 'Reçu',
    'cancelled': 'Annulé'
} %}

{% set status_colors = {
    'draft': 'warning',
    'confirmed': 'primary',
    'received': 'success',
    'cancelled': 'danger'
} %}

{% set status_icons = {
    'draft': 'fa-edit',
    'confirmed': 'fa-clock',
    'received': 'fa-check-circle',
    'cancelled': 'fa-ban'
} %}

<style>
:root {
    --primary: #4361ee;
    --secondary: #3a0ca3;
    --success: #2a9d8f;
    --warning: #f4a261;
    --danger: #e63946;
    --light: #f8f9fa;
    --dark: #212529;
}

.page-transition {
    animation: fadeIn 0.5s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.card-hover {
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
}

.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    border-color: var(--primary);
}

.badge-status {
    padding: 0.5rem 1rem;
    font-weight: 500;
    border-radius: 20px;
    letter-spacing: 0.5px;
}

.icon-circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
}

.bg-primary-light { background-color: rgba(67, 97, 238, 0.1); }
.bg-success-light { background-color: rgba(42, 157, 143, 0.1); }
.bg-warning-light { background-color: rgba(244, 162, 97, 0.1); }
.bg-danger-light { background-color: rgba(230, 57, 70, 0.1); }
.bg-info-light { background-color: rgba(13, 202, 240, 0.1); }

.text-primary { color: var(--primary) !important; }
.text-success { color: var(--success) !important; }
.text-warning { color: var(--warning) !important; }
.text-danger { color: var(--danger) !important; }

.modal-blur {
    backdrop-filter: blur(5px);
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--primary);
}

/* Container des documents */
.document-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin: 1.5rem 0;
}

.document-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fc 100%);
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 2rem;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.document-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    border-color: var(--primary);
}

.document-card.active {
    border-color: var(--primary);
    background: linear-gradient(135deg, #f8f9fc 0%, #eef1fd 100%);
}

.document-card.disabled {
    opacity: 0.6;
    cursor: not-allowed;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.document-card.disabled:hover {
    transform: none;
    box-shadow: none;
}

.document-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 1.75rem;
}

.document-icon.primary { background: rgba(67, 97, 238, 0.1); color: var(--primary); }
.document-icon.success { background: rgba(42, 157, 143, 0.1); color: var(--success); }
.document-icon.secondary { background: rgba(108, 117, 125, 0.1); color: #6c757d; }

.document-actions {
    margin-top: 1.5rem;
    width: 100%;
}

.document-btn {
    width: 100%;
    padding: 0.875rem;
    border-radius: 8px;
    border: 2px solid transparent;
    font-weight: 500;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.document-btn-primary {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.document-btn-primary:hover {
    background: #3a56d4;
    border-color: #3a56d4;
    transform: translateY(-2px);
}

.document-btn-outline {
    background: transparent;
    color: var(--primary);
    border-color: var(--primary);
}

.document-btn-outline:hover {
    background: var(--primary);
    color: white;
    transform: translateY(-2px);
}

.document-btn-secondary {
    background: #6c757d;
    color: white;
    border-color: #6c757d;
}

.document-btn-secondary:hover {
    background: #5a6268;
    border-color: #5a6268;
    transform: translateY(-2px);
}

.dropdown-document {
    min-width: 250px;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    border: 1px solid #e9ecef;
    overflow: hidden;
}

.dropdown-item-document {
    padding: 0.875rem 1rem;
    border-bottom: 1px solid #f8f9fa;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.dropdown-item-document:last-child {
    border-bottom: none;
}

.dropdown-item-document:hover {
    background-color: #f8f9fa;
    color: var(--primary);
}

.dropdown-item-document i {
    width: 20px;
    text-align: center;
}

/* Tableau amélioré avec scroll */
.table-container {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    margin-bottom: 2rem;
}

.table-header {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    padding: 1.5rem;
    color: white;
}

.table-header h5 {
    color: white;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.table-header .text-muted {
    color: rgba(255, 255, 255, 0.8) !important;
    font-size: 0.9rem;
}

/* Container pour le défilement horizontal */
.table-responsive-container {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.table-modern {
    width: 100%;
    margin-bottom: 0;
    min-width: 1200px;
}

.table-modern thead th {
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    padding: 1rem 1.25rem;
    font-weight: 600;
    color: #495057;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 0.5px;
    white-space: nowrap;
    position: sticky;
    top: 0;
    z-index: 10;
}

.table-modern tbody td {
    padding: 1.25rem 1.25rem;
    vertical-align: middle;
    border-bottom: 1px solid #e9ecef;
    font-size: 0.9rem;
    white-space: nowrap;
}

.table-modern tbody tr:last-child td {
    border-bottom: none;
}

.table-modern tbody tr:hover {
    background-color: rgba(67, 97, 238, 0.02);
}

/* Style pour la barre de défilement */
.table-responsive-container::-webkit-scrollbar {
    height: 8px;
}

.table-responsive-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.table-responsive-container::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 4px;
}

.table-responsive-container::-webkit-scrollbar-thumb:hover {
    background: #a8a8a8;
}

/* Badges améliorés */
.badge-table {
    padding: 0.5rem 0.75rem;
    font-weight: 500;
    border-radius: 8px;
    font-size: 0.75rem;
    letter-spacing: 0.3px;
    display: inline-block;
    min-width: 80px;
    text-align: center;
}

/* Product card dans le tableau */
.product-cell {
    display: flex;
    align-items: center;
    gap: 1rem;
    min-height: 60px;
    min-width: 250px;
}

.product-icon {
    width: 45px;
    height: 45px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.product-info {
    flex: 1;
    min-width: 0;
}

.product-info strong {
    display: block;
    font-weight: 600;
    color: #343a40;
    margin-bottom: 0.25rem;
    line-height: 1.3;
    font-size: 0.95rem;
}

.product-info small {
    color: #6c757d;
    font-size: 0.8rem;
    display: block;
    margin-bottom: 0.25rem;
}

/* Cellules avec contenu complexe */
.cell-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 60px;
    min-width: 120px;
}

.cell-content.simple {
    min-width: 100px;
}

.date-cell {
    min-width: 150px;
}

.date-cell .small {
    line-height: 1.4;
}

.date-cell .text-muted {
    font-size: 0.75rem;
}

.date-cell strong {
    font-size: 0.85rem;
}

/* Boutons d'action */
.action-cell {
    min-width: 120px;
}

.action-buttons {
    display: flex;
    gap: 0.5rem;
    justify-content: center;
}

.btn-action {
    width: 36px;
    height: 36px;
    padding: 0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Total section */
.total-container {
    background: linear-gradient(135deg, #f8f9fc 0%, #ffffff 100%);
    border-radius: 12px;
    padding: 2.5rem;
    margin-top: 2rem;
    border: 1px solid #e9ecef;
    text-align: center;
}

.total-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: rgba(67, 97, 238, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.5rem;
    color: var(--primary);
}

/* Indicateur de scroll */
.scroll-hint {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.9);
    padding: 0.5rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    color: var(--primary);
    display: flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    animation: bounce 2s infinite;
    z-index: 5;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(-50%);}
    40% {transform: translateY(-55%);}
    60% {transform: translateY(-45%);}
}

/* Responsive */
@media (max-width: 768px) {
    .document-container {
        grid-template-columns: 1fr;
    }
    
    .table-header {
        padding: 1rem;
    }
    
    .scroll-hint {
        display: none;
    }
    
    .product-cell {
        min-width: 200px;
    }
}

/* Loading spinner */
.loading-spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid rgba(255,255,255,.3);
    border-radius: 50%;
    border-top-color: white;
    animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Ajout pour le modal de confirmation de téléchargement */
.modal-document .modal-content {
    border-radius: 15px;
    border: none;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

.modal-document .modal-header {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    border-bottom: none;
    border-radius: 15px 15px 0 0;
    padding: 1.5rem 2rem;
}

.modal-document .modal-body {
    padding: 2rem;
}

.modal-document .modal-footer {
    border-top: 1px solid #e9ecef;
    border-radius: 0 0 15px 15px;
    padding: 1.5rem 2rem;
}

.document-icon-lg {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
}

.document-icon-lg.primary { 
    background: rgba(67, 97, 238, 0.1); 
    color: var(--primary); 
}

.document-icon-lg.success { 
    background: rgba(42, 157, 143, 0.1); 
    color: var(--success); 
}
</style>

<div class=\"container-fluid px-4 py-4 page-transition\">
    <!-- Header avec navigation -->
    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-5\">
        <div class=\"mb-3 mb-md-0\">
            <nav aria-label=\"breadcrumb\" class=\"mb-3\">
                <ol class=\"breadcrumb bg-transparent px-0\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_purchase_index') }}\" class=\"text-decoration-none text-muted\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Achats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active text-primary fw-bold\" aria-current=\"page\">
                        {{ purchase.purchaseNumber }}
                    </li>
                </ol>
            </nav>
            <div class=\"d-flex align-items-center gap-3\">
                <h1 class=\"h2 fw-bold mb-0\">{{ purchase.purchaseNumber }}</h1>
                <span class=\"badge-status bg-{{ status_colors[purchase.status] }}-light text-{{ status_colors[purchase.status] }} border border-{{ status_colors[purchase.status] }}\">
                    <i class=\"fas {{ status_icons[purchase.status] }} me-2\"></i>
                    {{ status_mapping[purchase.status] }}
                </span>
            </div>
            <div class=\"d-flex align-items-center gap-2 mt-2\">
                <div class=\"d-flex align-items-center\">
                    {% if purchase.user.photo %}
                        <img src=\"{{ asset('uploads/users/' ~ purchase.user.photo) }}\" 
                             class=\"user-avatar me-2\"
                             alt=\"{{ purchase.user.fullName ?? purchase.user.email }}\">
                    {% else %}
                        <div class=\"user-avatar me-2 bg-primary d-flex align-items-center justify-content-center text-white\">
                            <i class=\"fas fa-user\"></i>
                        </div>
                    {% endif %}
                    <div>
                        <span class=\"text-muted me-2\">Créé par:</span>
                        <strong>{{ purchase.user.fullName ?? purchase.user.email }}</strong>
                    </div>
                </div>
                <div class=\"vr mx-3\"></div>
                <div class=\"text-muted\">
                    <i class=\"far fa-calendar me-1\"></i>
                    {{ purchase.createdAt|date('d/m/Y à H:i') }}
                </div>
            </div>
        </div>
        
        <div class=\"d-flex flex-wrap gap-3\">
            {% if purchase.status == 'confirmed' %}
                <!-- Bouton Réceptionner -->
                <button type=\"button\" 
                        class=\"btn btn-success px-4\"
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#receiveModal\">
                    <i class=\"fas fa-check-circle me-2\"></i> Réceptionner
                </button>
                
                <!-- Bouton Annuler -->
                <button type=\"button\" 
                        class=\"btn btn-danger px-4\"
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#cancelModal\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler
                </button>
            {% endif %}
        </div>
        <a href=\"{{ path('admin_purchase_index') }}\" class=\"btn btn-outline-secondary px-4\">
            <i class=\"fas fa-list me-2\"></i> Retour aux achats
        </a>
    </div>

    <!-- Section Informations -->
    <div class=\"row g-4 mb-4\">
        <!-- Carte Fournisseur -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm card-hover h-100\">
                <div class=\"card-header bg-white border-0 d-flex align-items-center\">
                    <div class=\"icon-circle bg-primary-light text-primary\">
                        <i class=\"fas fa-truck fa-lg\"></i>
                    </div>
                    <div>
                        <h5 class=\"fw-bold mb-0\">Fournisseur</h5>
                        <small class=\"text-muted\">Informations sur le fournisseur</small>
                    </div>
                </div>
                <div class=\"card-body\">
                    {% if purchase.supplier %}
                        <div class=\"d-flex align-items-center mb-4\">
                            <div class=\"bg-primary-light rounded-circle d-inline-flex align-items-center justify-content-center p-3 me-3\">
                                <i class=\"fas fa-building fa-lg text-primary\"></i>
                            </div>
                            <div>
                                <h4 class=\"fw-bold mb-1\">{{ purchase.supplier.name }}</h4>
                                {% if purchase.supplier.contactPerson %}
                                <p class=\"text-muted mb-0\">{{ purchase.supplier.contactPerson }}</p>
                                {% endif %}
                            </div>
                        </div>
                        
                        <div class=\"space-y-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-envelope text-primary\"></i>
                                </div>
                                <div>
                                    <small class=\"text-muted d-block\">Email</small>
                                    <strong>{{ purchase.supplier.email }}</strong>
                                </div>
                            </div>
                            
                            {% if purchase.supplier.phone %}
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-phone text-primary\"></i>
                                </div>
                                <div>
                                    <small class=\"text-muted d-block\">Téléphone</small>
                                    <strong>{{ purchase.supplier.phone }}</strong>
                                </div>
                            </div>
                            {% endif %}
                            
                            {% if purchase.supplier.adress %}
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-map-marker-alt text-primary\"></i>
                                </div>
                                <div>
                                    <small class=\"text-muted d-block\">Adresse</small>
                                    <strong>{{ purchase.supplier.adress }}</strong>
                                </div>
                            </div>
                            {% endif %}
                        </div>
                        
                        <div class=\"mt-4 pt-3 border-top\">
                            <a href=\"{{ path('app_admin_supplier_show', {'id': purchase.supplier.id}) }}\" 
                               class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-external-link-alt me-2\"></i> Voir la fiche
                            </a>
                        </div>
                    {% else %}
                        <div class=\"text-center py-5\">
                            <div class=\"bg-light rounded-circle d-inline-flex align-items-center justify-content-center p-4 mb-3\">
                                <i class=\"fas fa-question-circle fa-2x text-muted\"></i>
                            </div>
                            <h5 class=\"text-muted fw-bold mb-2\">Aucun fournisseur</h5>
                            <p class=\"text-muted small\">Cet achat n'est associé à aucun fournisseur</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <!-- Carte Détails Achat -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm card-hover h-100\">
                <div class=\"card-header bg-white border-0 d-flex align-items-center\">
                    <div class=\"icon-circle bg-success-light text-success\">
                        <i class=\"fas fa-receipt fa-lg\"></i>
                    </div>
                    <div>
                        <h5 class=\"fw-bold mb-0\">Détails de l'achat</h5>
                        <small class=\"text-muted\">Informations générales</small>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"space-y-3\">
                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Numéro</span>
                            <strong class=\"text-dark\">{{ purchase.purchaseNumber }}</strong>
                        </div>
                        
                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Création</span>
                            <strong>{{ purchase.createdAt|date('d/m/Y H:i') }}</strong>
                        </div>
                        
                        {% if purchase.confirmedAt %}
                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Confirmation</span>
                            <strong>{{ purchase.confirmedAt|date('d/m/Y H:i') }}</strong>
                        </div>
                        {% endif %}
                        
                        {% if purchase.receivedAt %}
                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Réception</span>
                            <strong>{{ purchase.receivedAt|date('d/m/Y H:i') }}</strong>
                        </div>
                        {% endif %}
                        
                        {% if purchase.cancelledAt %}
                        <div class=\"d-flex justify-content-between align-items-center py-2\">
                            <span class=\"text-muted\">Annulation</span>
                            <strong>{{ purchase.cancelledAt|date('d/m/Y H:i') }}</strong>
                        </div>
                        {% endif %}
                        
                        {% if purchase.cancelledAt %}
                        <div class=\"d-flex justify-content-between align-items-start py-2\">
                            <span class=\"text-muted\">Annulé par</span>
                            <div class=\"text-end\">
                                <strong>{{ purchase.cancelledBy.fullName ?? purchase.cancelledBy.email }}</strong>
                                {% if purchase.cancellationReason %}
                                    <div class=\"text-muted small mt-1\">{{ purchase.cancellationReason }}</div>
                                {% endif %}
                            </div>
                        </div>
                        {% endif %}
                        
                        <div class=\"pt-3 border-top mt-3\">
                            <div class=\"d-flex justify-content-between align-items-center py-2\">
                                <span class=\"text-muted\">Montant total</span>
                                <h4 class=\"fw-bold text-success mb-0\">{{ purchase.totalAmount|format_fcfa }}</h4>
                            </div>
                        </div>
                        
                        {% if purchase.notes %}
                        <div class=\"mt-3 pt-3 border-top\">
                            <small class=\"text-muted d-block mb-2\">Notes</small>
                            <div class=\"bg-light p-3 rounded\">
                                <p class=\"mb-0\">{{ purchase.notes|nl2br }}</p>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Documents -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white border-0 d-flex align-items-center\">
            <div class=\"icon-circle bg-info-light text-info\">
                <i class=\"fas fa-file-alt fa-lg\"></i>
            </div>
            <div>
                <h5 class=\"fw-bold mb-0\">Documents</h5>
                <small class=\"text-muted\">Visualiser, télécharger ou générer</small>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"document-container\">
                <!-- Bon de commande -->
                <div class=\"document-card {{ has_bon_commande ? 'active' : '' }}\">
                    <div class=\"document-icon {{ has_bon_commande ? 'primary' : '' }}\">
                        <i class=\"fas fa-file-contract\"></i>
                    </div>
                    <h5 class=\"fw-bold mb-2\">Bon de commande</h5>
                    <p class=\"text-muted mb-3\">
                        {{ has_bon_commande ? 'Document généré' : 'Générer le document' }}
                    </p>
                    
                    <div class=\"document-actions\">
                        <div class=\"dropdown\">
                            <button class=\"document-btn {{ has_bon_commande ? 'document-btn-primary' : 'document-btn-outline' }} dropdown-toggle\" 
                                    type=\"button\" 
                                    data-bs-toggle=\"dropdown\" 
                                    aria-expanded=\"false\">
                                <i class=\"fas {{ has_bon_commande ? 'fa-eye' : 'fa-plus-circle' }} me-1\"></i>
                                {{ has_bon_commande ? 'Voir les options' : 'Générer le document' }}
                            </button>
                            <ul class=\"dropdown-menu dropdown-document\">
                                {% if has_bon_commande %}
                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"viewDocument('bon-commande')\">
                                        <i class=\"fas fa-eye text-primary\"></i>
                                        <span>Voir le document</span>
                                    </a>
                                </li>
                                {% else %}
                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"generateDocument('bon-commande')\">
                                        <i class=\"fas fa-plus-circle text-primary\"></i>
                                        <span>Générer le document</span>
                                    </a>
                                </li>
                                {% endif %}
                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"downloadDocument('bon-commande')\">
                                        <i class=\"fas fa-download text-primary\"></i>
                                        <span>Télécharger</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Reçu d'achat -->
                <div class=\"document-card {{ has_recu_achat ? 'active' : '' }} {{ purchase.status != 'received' ? 'disabled' : '' }}\">
                    <div class=\"document-icon {{ has_recu_achat ? 'success' : 'secondary' }}\">
                        <i class=\"fas fa-file-invoice-dollar\"></i>
                    </div>
                    <h5 class=\"fw-bold mb-2\">Reçu d'achat</h5>
                    <p class=\"text-muted mb-3\">
                        {% if has_recu_achat %}
                            Document généré
                        {% elseif purchase.status == 'received' %}
                            Générer le document
                        {% else %}
                            Disponible après réception
                        {% endif %}
                    </p>
                    
                    {% if purchase.status == 'received' %}
                    <div class=\"document-actions\">
                        <div class=\"dropdown\">
                            <button class=\"document-btn {{ has_recu_achat ? 'document-btn-primary' : 'document-btn-outline' }} dropdown-toggle\" 
                                    type=\"button\" 
                                    data-bs-toggle=\"dropdown\" 
                                    aria-expanded=\"false\">
                                <i class=\"fas {{ has_recu_achat ? 'fa-eye' : 'fa-plus-circle' }} me-1\"></i>
                                {{ has_recu_achat ? 'Voir les options' : 'Générer le document' }}
                            </button>
                            <ul class=\"dropdown-menu dropdown-document\">
                                {% if has_recu_achat %}
                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"viewDocument('recu-achat')\">
                                        <i class=\"fas fa-eye text-success\"></i>
                                        <span>Voir le document</span>
                                    </a>
                                </li>
                                {% else %}
                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"generateDocument('recu-achat')\">
                                        <i class=\"fas fa-plus-circle text-success\"></i>
                                        <span>Générer le document</span>
                                    </a>
                                </li>
                                {% endif %}
                                <li>
                                    <a class=\"dropdown-item dropdown-item-document\" href=\"javascript:void(0);\" onclick=\"downloadDocument('recu-achat')\">
                                        <i class=\"fas fa-download text-success\"></i>
                                        <span>Télécharger</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des produits avec défilement horizontal -->
    <div class=\"table-container\">
        <!-- Entête du tableau -->
        <div class=\"table-header position-relative\">
            <h5 class=\"fw-bold mb-1\">
                <i class=\"fas fa-boxes me-2\"></i>
                Produits commandés
            </h5>
            <p class=\"text-muted mb-0\">
                {{ purchase.purchaseItems|length }} produit(s) dans cette commande
            </p>
            
            <!-- Indicateur de scroll -->
            <div class=\"scroll-hint d-none d-md-flex\">
                <i class=\"fas fa-arrows-left-right\"></i>
                <span>Défiler pour voir plus</span>
            </div>
        </div>
        
        <!-- Container avec défilement horizontal -->
        <div class=\"table-responsive-container\">
            <table class=\"table table-modern table-hover align-middle mb-0\">
                <thead>
                    <tr>
                        <th class=\"ps-4\" style=\"min-width: 280px;\">PRODUIT</th>
                        <th class=\"text-center\" style=\"min-width: 120px;\">N° LOT</th>
                        <th class=\"text-center\" style=\"min-width: 140px;\">STATUT</th>
                        <th class=\"text-center\" style=\"min-width: 100px;\">QUANTITÉ</th>
                        <th class=\"text-center\" style=\"min-width: 120px;\">PRIX UNITAIRE</th>
                        <th class=\"text-center\" style=\"min-width: 120px;\">TOTAL</th>
                        <th class=\"text-center\" style=\"min-width: 160px;\">DATES</th>
                        {% if purchase.status == 'confirmed' %}
                        <th class=\"text-center pe-4\" style=\"min-width: 140px;\">ACTIONS</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody id=\"productsTable\">
                    {% for item in purchase.purchaseItems %}
                        {% set isPerishable = item.product.hasExpiryDate %}
                        {% set hasExpiryDate = item.expiryDate is not null %}
                        {% set hasManufacturingDate = item.manufacturingDate is not null %}
                        {% set isLotComplete = item.batchNumber and (not isPerishable or (isPerishable and hasManufacturingDate and hasExpiryDate)) %}
                        
                        <tr data-item-id=\"{{ item.id }}\" 
                            data-product-name=\"{{ item.product.name|lower }}\" 
                            data-barcode=\"{{ item.product.barcode|lower }}\"
                            data-is-perishable=\"{{ isPerishable ? 'true' : 'false' }}\">
                            <!-- Colonne Produit -->
                            <td class=\"ps-4\">
                                <div class=\"product-cell\">
                                    <div class=\"product-icon bg-primary-light text-primary\">
                                        <i class=\"fas fa-box\"></i>
                                    </div>
                                    <div class=\"product-info\">
                                        <strong>{{ item.product.name }}</strong>
                                        <small>{{ item.product.barcode }}</small>
                                        {% if isPerishable %}
                                        <span class=\"badge-table bg-info-light text-info border border-info\">
                                            <i class=\"fas fa-clock me-1\"></i> Périssable
                                        </span>
                                        {% endif %}
                                    </div>
                                </div>
                            </td>
                            
                            <!-- Colonne Numéro de lot -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <span class=\"badge-table bg-info-light text-info border border-info\" id=\"batchNumber-{{ item.id }}\">
                                        {{ item.batchNumber|default('Non défini') }}
                                    </span>
                                </div>
                            </td>
                            
                            <!-- Colonne Statut -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    {% if isLotComplete %}
                                    <span class=\"badge-table bg-success-light text-success border border-success\">
                                        <i class=\"fas fa-check-circle me-1\"></i> Complet
                                    </span>
                                    {% else %}
                                    <span class=\"badge-table bg-{{ isPerishable and (not hasManufacturingDate or not hasExpiryDate) ? 'danger' : 'warning' }}-light text-{{ isPerishable and (not hasManufacturingDate or not hasExpiryDate) ? 'danger' : 'warning' }} border border-{{ isPerishable and (not hasManufacturingDate or not hasExpiryDate) ? 'danger' : 'warning' }}\">
                                        <i class=\"fas fa-exclamation-circle me-1\"></i> 
                                        {{ isPerishable and (not hasManufacturingDate or not hasExpiryDate) ? 'Dates manquantes' : 'Lot incomplet' }}
                                    </span>
                                    {% endif %}
                                </div>
                            </td>
                            
                            <!-- Colonne Quantité -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <span class=\"badge-table bg-primary-light text-primary border border-primary\">{{ item.quantity }}</span>
                                </div>
                            </td>
                            
                            <!-- Colonne Prix unitaire -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <span class=\"fw-bold text-dark\">{{ item.unitPrice|format_fcfa }}</span>
                                </div>
                            </td>
                            
                            <!-- Colonne Total -->
                            <td class=\"text-center\">
                                <div class=\"cell-content simple\">
                                    <strong class=\"text-success\">{{ item.totalPrice|format_fcfa }}</strong>
                                </div>
                            </td>
                            
                           <!-- ... dans show.html.twig, dans la section des dates du tableau ... -->
                            <td class=\"text-center\">
                                <div class=\"cell-content date-cell\">
                                    {% if isPerishable %}
                                        <div class=\"date-display\">
                                            {% if item.manufacturingDate %}
                                                <div class=\"mb-1\">
                                                    <small class=\"text-muted d-block\">Fabrication</small>
                                                    <strong class=\"text-primary\">{{ item.manufacturingDate|date('d/m/Y') }}</strong>
                                                </div>
                                            {% endif %}
                                            {% if item.expiryDate %}
                                                <div>
                                                    <small class=\"text-muted d-block\">Expiration</small>
                                                    <strong class=\"{{ item.expiryDate < date() ? 'text-danger' : (item.expiryDate < date('+1 month') ? 'text-warning' : 'text-success') }}\">
                                                        {{ item.expiryDate|date('d/m/Y') }}
                                                    </strong>
                                                </div>
                                            {% endif %}
                                            {% if not item.manufacturingDate or not item.expiryDate %}
                                                <span class=\"text-danger small\">
                                                    <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                    Dates incomplètes
                                                </span>
                                            {% endif %}
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted small\">Non périssable</span>
                                    {% endif %}
                                </div>
                            </td>
                            
                            <!-- Colonne Actions -->
                            {% if purchase.status == 'confirmed' %}
                            <td class=\"text-center pe-4\">
                                <div class=\"cell-content action-cell\">
                                    <div class=\"action-buttons\">
                                        <button type=\"button\" 
                                                class=\"btn btn-outline-primary btn-action edit-item-btn\" 
                                                data-item-id=\"{{ item.id }}\"
                                                data-bs-toggle=\"modal\" 
                                                data-bs-target=\"#editItemModal\"
                                                title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </button>
                                        <button type=\"button\" 
                                                class=\"btn btn-outline-danger btn-action delete-item-btn\" 
                                                data-item-id=\"{{ item.id }}\"
                                                data-product-name=\"{{ item.product.name }}\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            {% endif %}
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"{{ purchase.status == 'confirmed' ? 8 : 7 }}\" class=\"text-center py-5\">
                                <div class=\"py-5\">
                                    <div class=\"bg-light rounded-circle d-inline-flex align-items-center justify-content-center p-4 mb-3\">
                                        <i class=\"fas fa-shopping-cart fa-2x text-muted\"></i>
                                    </div>
                                    <h5 class=\"text-muted fw-bold mb-2\">Aucun produit</h5>
                                    <p class=\"text-muted mb-4\">Aucun produit dans cette commande</p>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <!-- Section Total Centrée -->
    <div class=\"total-container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"total-icon\">
                    <i class=\"fas fa-calculator\"></i>
                </div>
                <h5 class=\"text-muted mb-2\">Montant total de l'achat</h5>
                <h1 class=\"fw-bold text-success mb-3\">{{ purchase.totalAmount|format_fcfa }}</h1>
                <p class=\"text-muted small mb-0\">
                    {{ purchase.purchaseItems|length }} produit(s) • 
                    {% set totalQuantity = 0 %}
                    {% for item in purchase.purchaseItems %}
                        {% set totalQuantity = totalQuantity + item.quantity %}
                    {% endfor %}
                    {{ totalQuantity }} unité(s)
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Modal de modification d'item -->
<div class=\"modal fade modal-blur\" id=\"editItemModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-primary text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-edit me-2\"></i>Modifier le produit
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <form id=\"editItemForm\">
                    <input type=\"hidden\" id=\"editItemId\" name=\"item_id\">
                    <input type=\"hidden\" id=\"editPurchaseId\" value=\"{{ purchase.id }}\">
                    
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold text-dark\">Produit</label>
                        <div class=\"bg-light p-3 rounded\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary-light rounded-circle p-2 me-3\">
                                    <i class=\"fas fa-box text-primary\"></i>
                                </div>
                                <div>
                                    <strong id=\"editProductName\" class=\"text-dark\"></strong>
                                    <div class=\"text-muted small\" id=\"editProductPrice\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <label for=\"editBatchNumber\" class=\"form-label fw-bold\">
                                Numéro de lot <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"text\" 
                                   class=\"form-control\" 
                                   id=\"editBatchNumber\" 
                                   name=\"batch_number\"
                                   required>
                            <div class=\"form-text small\">Généré automatiquement si vide</div>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editQuantity\" class=\"form-label fw-bold\">
                                Quantité <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"number\" 
                                   class=\"form-control\" 
                                   id=\"editQuantity\" 
                                   name=\"quantity\"
                                   min=\"1\" 
                                   required>
                        </div>
                    </div>
                    
                    <div id=\"expiryDateFields\" class=\"mt-4\" style=\"display: none;\">
                        <div class=\"alert alert-warning border-0 bg-warning-light\">
                            <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                            <span class=\"fw-bold\">Produit périssable</span>
                            <div class=\"small mt-1\">Les dates sont obligatoires pour la réception</div>
                        </div>
                        
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <label for=\"editManufacturingDate\" class=\"form-label fw-bold\">
                                    Date de fabrication <span class=\"text-danger\">*</span>
                                </label>
                                <input type=\"date\" 
                                       class=\"form-control\" 
                                       id=\"editManufacturingDate\" 
                                       name=\"manufacturing_date\"
                                       required>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <label for=\"editExpiryDate\" class=\"form-label fw-bold\">
                                    Date d'expiration <span class=\"text-danger\">*</span>
                                </label>
                                <input type=\"date\" 
                                       class=\"form-control\" 
                                       id=\"editExpiryDate\" 
                                       name=\"expiry_date\"
                                       required>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"alert alert-info border-0 bg-info-light mt-4\">
                        <i class=\"fas fa-info-circle me-2 text-info\"></i>
                        <small>Le prix unitaire est fixe et correspond au prix du produit</small>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary px-4\" id=\"saveItemBtn\">
                    <i class=\"fas fa-save me-2\"></i> Enregistrer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation suppression -->
<div class=\"modal fade modal-blur\" id=\"deleteItemModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-trash me-2\"></i>Supprimer le produit
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"alert alert-warning border-0 bg-warning-light\">
                    <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                    <strong>Attention :</strong> Cette action est irréversible.
                </div>
                
                <div class=\"text-center py-3\">
                    <div class=\"bg-danger-light rounded-circle d-inline-flex align-items-center justify-content-center p-3 mb-3\">
                        <i class=\"fas fa-trash fa-2x text-danger\"></i>
                    </div>
                    <h5 class=\"fw-bold mb-2\">Confirmer la suppression ?</h5>
                    <p class=\"text-muted\">Le produit <strong id=\"productNameToDelete\" class=\"text-danger\"></strong> sera retiré définitivement</p>
                </div>
                
                <div id=\"deleteResult\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger px-4\" id=\"confirmDeleteBtn\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de réception -->
<div class=\"modal fade modal-blur\" id=\"receiveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-success text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-check-circle me-2\"></i>Confirmer la réception
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"alert alert-info border-0 bg-info-light mb-4\">
                    <i class=\"fas fa-info-circle me-2 text-info\"></i>
                    <strong>Information importante</strong>
                    <ul class=\"mt-2 mb-0 ps-3\">
                        <li>L'achat sera marqué comme \"Reçu\"</li>
                        <li>Les stocks seront mis à jour automatiquement</li>
                        <li>Cette action est irréversible</li>
                    </ul>
                </div>
                
                <!-- Container pour notes de réception -->
                <div class=\"mb-4\">
                    <label for=\"receiveNotes\" class=\"form-label fw-bold\">
                        Notes de réception <span class=\"text-muted small\">(optionnel)</span>
                    </label>
                    <textarea class=\"form-control\" 
                              id=\"receiveNotes\" 
                              name=\"receiveNotes\"
                              rows=\"4\" 
                              placeholder=\"Ajoutez des notes concernant cette réception (condition des produits, remarques, etc.)...\"></textarea>
                    <div class=\"form-text small\">Ces notes seront sauvegardées avec l'achat.</div>
                </div>
                
                <div id=\"receiveValidation\" class=\"alert alert-warning border-0 bg-warning-light\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                    <span id=\"validationMessage\"></span>
                </div>
                
                <div id=\"receiveResult\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success px-4\" id=\"confirmReceiveBtn\">
                    <i class=\"fas fa-check-circle me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'annulation -->
<div class=\"modal fade modal-blur\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fw-bold\">
                    <i class=\"fas fa-ban me-2\"></i>Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"alert alert-warning border-0 bg-warning-light mb-4\">
                    <i class=\"fas fa-exclamation-triangle me-2 text-warning\"></i>
                    <strong>Attention :</strong> Cette action est irréversible. La commande sera marquée comme annulée.
                </div>
                
                <!-- Container pour raison d'annulation -->
                <div class=\"mb-4\">
                    <label for=\"cancellationReason\" class=\"form-label fw-bold\">
                        Raison de l'annulation <span class=\"text-danger\">*</span>
                    </label>
                    <textarea class=\"form-control\" 
                              id=\"cancellationReason\" 
                              rows=\"5\" 
                              placeholder=\"Expliquez la raison de l'annulation de cette commande...\"
                              required></textarea>
                    <div class=\"form-text small\">Cette information sera enregistrée avec l'achat.</div>
                    <div class=\"invalid-feedback\" id=\"reasonError\">Veuillez saisir une raison.</div>
                </div>
                
                <div id=\"cancelResult\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                <button type=\"button\" class=\"btn btn-danger px-4\" id=\"confirmCancelBtn\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler la commande
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de téléchargement -->
<div class=\"modal fade modal-blur modal-document\" id=\"documentConfirmModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-primary text-white border-0\">
                <h5 class=\"modal-title fw-bold mb-0\">
                    <i class=\"fas fa-download me-2\"></i>
                    <span id=\"documentModalTitle\">Télécharger le document</span>
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <div class=\"text-center mb-4\">
                    <div class=\"document-icon-lg primary\">
                        <i class=\"fas fa-file-contract\"></i>
                    </div>
                    <h4 class=\"fw-bold mb-2\" id=\"documentModalDocTitle\"></h4>
                    <p class=\"text-muted mb-0\" id=\"documentModalMessage\"></p>
                </div>
                
                <div class=\"alert alert-info border-0 bg-info-light\">
                    <i class=\"fas fa-info-circle me-2 text-info\"></i>
                    <span id=\"documentModalInfo\"></span>
                </div>
                
                <div id=\"documentModalResult\" class=\"mt-3\"></div>
            </div>
            <div class=\"modal-footer border-0 bg-light\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary px-4\" id=\"confirmDocumentActionBtn\">
                    <i class=\"fas fa-download me-2\"></i> Télécharger
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// === FONCTIONS GLOBALES POUR LES DOCUMENTS ===
// Ces fonctions doivent être globales pour être appelées depuis onclick

function viewDocument(type) {
    let url;
    if (type === 'bon-commande') {
        url = \"{{ path('admin_purchase_view_pdf', {id: purchase.id, type: 'bon-commande'}) }}\";
    } else if (type === 'recu-achat') {
        url = \"{{ path('admin_purchase_view_pdf', {id: purchase.id, type: 'recu-achat'}) }}\";
    }
    
    if (url) {
        window.open(url, '_blank');
    }
}

function generateDocument(type) {
    showAlert('info', 'Génération du document en cours...');
    
    let url;
    if (type === 'bon-commande') {
        url = \"{{ path('admin_purchase_generate_pdf', {id: purchase.id, type: 'bon-commande'}) }}\";
    } else if (type === 'recu-achat') {
        url = \"{{ path('admin_purchase_generate_pdf', {id: purchase.id, type: 'recu-achat'}) }}\";
    }
    
    if (url) {
        const newWindow = window.open(url, '_blank');
        
        if (newWindow) {
            setTimeout(() => {
                showAlert('success', 'Document généré avec succès');
                setTimeout(() => {
                    location.reload();
                }, 2000);
            }, 1000);
        }
    }
}

function downloadDocument(type) {
    // Les variables globales pour gérer le téléchargement
    window.currentDocumentType = type;
    
    // Vérifier si le document existe
    if (type === 'bon-commande') {
        window.documentExists = {{ has_bon_commande ? 'true' : 'false' }};
    } else if (type === 'recu-achat') {
        window.documentExists = {{ has_recu_achat ? 'true' : 'false' }};
    }
    
    // Afficher le modal de confirmation
    const modalElement = document.getElementById('documentConfirmModal');
    const modal = new bootstrap.Modal(modalElement);
    
    // Configurer le modal
    const docTitleElement = document.getElementById('documentModalDocTitle');
    const messageElement = document.getElementById('documentModalMessage');
    const infoElement = document.getElementById('documentModalInfo');
    const resultElement = document.getElementById('documentModalResult');
    
    const documentName = type === 'bon-commande' ? 'Bon de commande' : 'Reçu d\\'achat';
    
    if (docTitleElement) docTitleElement.textContent = documentName;
    
    if (window.documentExists) {
        if (messageElement) {
            messageElement.textContent = 'Êtes-vous sûr de vouloir télécharger ce document ?';
        }
        if (infoElement) {
            infoElement.textContent = 'Le document sera téléchargé sur votre appareil.';
        }
    } else {
        if (messageElement) {
            messageElement.textContent = 'Ce document n\\'existe pas encore. Voulez-vous le générer et le télécharger ?';
        }
        if (infoElement) {
            infoElement.textContent = 'Le document sera généré puis téléchargé automatiquement.';
        }
    }
    
    // Vider les résultats précédents
    if (resultElement) resultElement.innerHTML = '';
    
    modal.show();
}

// Fonction d'alerte globale
function showAlert(type, message, container = null, icon = null) {
    const icons = {
        'success': 'fa-check-circle',
        'danger': 'fa-exclamation-circle',
        'warning': 'fa-exclamation-triangle',
        'info': 'fa-info-circle'
    };
    
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-\${type} alert-dismissible fade show border-0 shadow-sm`;
    alertDiv.innerHTML = `
        <div class=\"d-flex align-items-center\">
            \${icon ? `<i class=\"fas \${icon} me-2 fa-lg\"></i>` : `<i class=\"fas \${icons[type]} me-2 fa-lg\"></i>`}
            <div>\${message}</div>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    `;
    
    if (container) {
        container.innerHTML = '';
        container.appendChild(alertDiv);
    } else {
        document.querySelectorAll('.alert-fixed').forEach(alert => alert.remove());
        
        alertDiv.classList.add('alert-fixed', 'position-fixed');
        alertDiv.style.top = '20px';
        alertDiv.style.right = '20px';
        alertDiv.style.zIndex = '9999';
        alertDiv.style.minWidth = '350px';
        alertDiv.style.maxWidth = '500px';
        
        document.body.appendChild(alertDiv);
        
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.remove();
            }
        }, 5000);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const purchaseId = {{ purchase.id }};
    const purchaseStatus = '{{ purchase.status }}';
    
    // === GESTION DES MODIFICATIONS D'ITEMS ===
    if (purchaseStatus === 'confirmed') {
        let currentItemId = null;
        let itemToDeleteId = null;
        let itemToDeleteName = null;
        
        // Fonction pour générer un numéro de lot
        function generateBatchNumber() {
            const date = new Date();
            const random = Math.random().toString(36).substr(2, 6).toUpperCase();
            return `LOT-\${date.getFullYear()}\${(date.getMonth()+1).toString().padStart(2, '0')}\${date.getDate().toString().padStart(2, '0')}-\${random}`;
        }
        
        // Bouton \"Modifier\"
        document.querySelectorAll('.edit-item-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                currentItemId = this.dataset.itemId;
                
                const row = document.querySelector(`tr[data-item-id=\"\${currentItemId}\"]`);
                if (!row) return;
                
                const productName = row.querySelector('.product-info strong').textContent.trim();
                const batchNumberElement = row.querySelector('.badge-table.bg-info-light');
                const batchNumber = batchNumberElement ? batchNumberElement.textContent.trim() : '';
                const quantityBadge = row.querySelector('.badge-table.bg-primary-light');
                const quantity = quantityBadge ? parseInt(quantityBadge.textContent) : 1;
                const unitPriceCell = row.querySelector('td:nth-child(5) .cell-content');
                const unitPriceText = unitPriceCell ? unitPriceCell.textContent.trim() : '0 FCFA';
                
                // Remplir les champs du modal
                document.getElementById('editProductName').textContent = productName;
                document.getElementById('editProductPrice').textContent = 'Prix unitaire: ' + unitPriceText;
                document.getElementById('editBatchNumber').value = batchNumber === 'Non défini' || batchNumber === '' ? generateBatchNumber() : batchNumber;
                document.getElementById('editQuantity').value = quantity;
                document.getElementById('editItemId').value = currentItemId;
                
                const isPerishable = row.dataset.isPerishable === 'true';
                const expiryDateFields = document.getElementById('expiryDateFields');
                
                if (isPerishable) {
                    expiryDateFields.style.display = 'block';
                    
                    // Récupérer les dates existantes depuis le tableau
                    const dateCell = row.querySelector('.date-cell');
                    if (dateCell) {
                        const manufacturingDateSpan = dateCell.querySelector('div:nth-child(1) strong');
                        const expiryDateSpan = dateCell.querySelector('div:nth-child(2) strong');
                        
                        if (manufacturingDateSpan) {
                            const frDate = manufacturingDateSpan.textContent.trim();
                            if (frDate && frDate !== 'Dates manquantes') {
                                // Convertir dd/mm/yyyy en yyyy-mm-dd
                                const parts = frDate.split('/');
                                if (parts.length === 3) {
                                    const formattedDate = `\${parts[2]}-\${parts[1]}-\${parts[0]}`;
                                    document.getElementById('editManufacturingDate').value = formattedDate;
                                }
                            }
                        }
                        
                        if (expiryDateSpan) {
                            const frDate = expiryDateSpan.textContent.trim();
                            if (frDate && frDate !== 'Dates manquantes') {
                                // Convertir dd/mm/yyyy en yyyy-mm-dd
                                const parts = frDate.split('/');
                                if (parts.length === 3) {
                                    const formattedDate = `\${parts[2]}-\${parts[1]}-\${parts[0]}`;
                                    document.getElementById('editExpiryDate').value = formattedDate;
                                }
                            }
                        }
                    }
                    
                    // Si pas de dates, mettre des dates par défaut
                    if (!document.getElementById('editManufacturingDate').value) {
                        const today = new Date();
                        document.getElementById('editManufacturingDate').value = today.toISOString().split('T')[0];
                    }
                    
                    if (!document.getElementById('editExpiryDate').value) {
                        const expiryDate = new Date();
                        expiryDate.setMonth(expiryDate.getMonth() + 12);
                        document.getElementById('editExpiryDate').value = expiryDate.toISOString().split('T')[0];
                    }
                    
                    // Rendre les champs obligatoires
                    document.getElementById('editManufacturingDate').required = true;
                    document.getElementById('editExpiryDate').required = true;
                } else {
                    expiryDateFields.style.display = 'none';
                    // Désactiver la validation pour les champs de date
                    document.getElementById('editManufacturingDate').required = false;
                    document.getElementById('editExpiryDate').required = false;
                }
            });
        });
        
        // Bouton \"Supprimer\"
        document.querySelectorAll('.delete-item-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                itemToDeleteId = this.dataset.itemId;
                itemToDeleteName = this.dataset.productName;
                
                document.getElementById('productNameToDelete').textContent = itemToDeleteName;
                const modal = new bootstrap.Modal(document.getElementById('deleteItemModal'));
                modal.show();
            });
        });
        
        // Sauvegarder les modifications
        document.getElementById('saveItemBtn')?.addEventListener('click', function() {
            const btn = this;
            const itemId = document.getElementById('editItemId').value;
            
            if (!itemId) {
                showAlert('warning', 'Aucun produit sélectionné');
                return;
            }
            
            const batchNumber = document.getElementById('editBatchNumber').value.trim();
            const quantity = parseInt(document.getElementById('editQuantity').value);
            const manufacturingDate = document.getElementById('editManufacturingDate')?.value || '';
            const expiryDate = document.getElementById('editExpiryDate')?.value || '';
            
            if (!batchNumber) {
                showAlert('warning', 'Le numéro de lot est requis');
                return;
            }
            
            if (quantity <= 0 || isNaN(quantity)) {
                showAlert('warning', 'La quantité doit être supérieure à 0');
                return;
            }
            
            const expiryDateFields = document.getElementById('expiryDateFields');
            if (expiryDateFields.style.display !== 'none') {
                if (!manufacturingDate) {
                    showAlert('warning', 'La date de fabrication est requise pour les produits périssables');
                    return;
                }
                if (!expiryDate) {
                    showAlert('warning', 'La date d\\'expiration est requise pour les produits périssables');
                    return;
                }
            }
            
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
            
            const formData = new FormData();
            formData.append('batch_number', batchNumber);
            formData.append('quantity', quantity);
            
            if (manufacturingDate) {
                formData.append('manufacturing_date', manufacturingDate);
            }
            
            if (expiryDate) {
                formData.append('expiry_date', expiryDate);
            }
            
            fetch(`/admin/purchase/\${purchaseId}/edit-item/\${itemId}`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editItemModal'));
                    if (modal) modal.hide();
                    
                    showAlert('success', '✅ ' + data.message);
                    setTimeout(() => location.reload(), 1000);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de l\\'enregistrement'));
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                showAlert('danger', '❌ Erreur réseau: ' + error.message);
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
        
        // Confirmation suppression
        document.getElementById('confirmDeleteBtn')?.addEventListener('click', function() {
            if (!itemToDeleteId) return;
            
            const btn = this;
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Suppression...';
            
            fetch(`/admin/purchase/\${purchaseId}/remove-item/\${itemToDeleteId}`, {
                method: 'DELETE',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                const resultDiv = document.getElementById('deleteResult');
                
                if (data.success) {
                    showAlert('success', '✅ Produit supprimé avec succès', resultDiv, 'fa-trash');
                    
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('deleteItemModal'));
                        if (modal) modal.hide();
                        location.reload();
                    }, 1500);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de la suppression'), resultDiv, 'fa-exclamation-circle');
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                const resultDiv = document.getElementById('deleteResult');
                showAlert('danger', '❌ Erreur: ' + error.message, resultDiv, 'fa-exclamation-circle');
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
        
        // === CONFIRMATION DE RÉCEPTION ===
        document.getElementById('confirmReceiveBtn')?.addEventListener('click', function() {
            const btn = this;
            const modalElement = document.getElementById('receiveModal');
            if (!modalElement) return;
            
            const notesElement = modalElement.querySelector('#receiveNotes');
            const notes = notesElement ? notesElement.value.trim() : '';
            const resultDiv = modalElement.querySelector('#receiveResult');
            
            // Vérifier que tous les lots sont complets (pour les produits périssables)
            const incompleteItems = [];
            document.querySelectorAll('#productsTable tr[data-item-id]').forEach(row => {
                const isPerishable = row.dataset.isPerishable === 'true';
                if (isPerishable) {
                    const dateCell = row.querySelector('.date-cell');
                    const hasDates = dateCell && !dateCell.querySelector('.text-danger');
                    if (!hasDates) {
                        const productName = row.querySelector('.product-info strong').textContent;
                        incompleteItems.push(productName.trim());
                    }
                }
            });
            
            if (incompleteItems.length > 0) {
                const validationDiv = modalElement.querySelector('#receiveValidation');
                const messageSpan = modalElement.querySelector('#validationMessage');
                if (validationDiv && messageSpan) {
                    messageSpan.textContent = `Veuillez compléter les dates pour les produits périssables : \${incompleteItems.join(', ')}`;
                    validationDiv.style.display = 'block';
                }
                return;
            }
            
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
            
            const data = {
                notes: notes
            };
            
            fetch(`/admin/purchase/\${purchaseId}/receive-api`, {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', '✅ ' + data.message, resultDiv, 'fa-check-circle');
                    
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(modalElement);
                        if (modal) modal.hide();
                        
                        if (data.redirect_url) {
                            window.location.href = data.redirect_url;
                        } else {
                            window.location.href = `/admin/purchase/\${purchaseId}`;
                        }
                    }, 1500);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de la réception'), resultDiv, 'fa-exclamation-circle');
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                showAlert('danger', '❌ Erreur: ' + error.message, resultDiv, 'fa-exclamation-circle');
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
        
        // === CONFIRMATION D'ANNULATION ===
        document.getElementById('confirmCancelBtn')?.addEventListener('click', function() {
            const btn = this;
            const modalElement = document.getElementById('cancelModal');
            if (!modalElement) return;
            
            const reasonInput = modalElement.querySelector('#cancellationReason');
            const reason = reasonInput ? reasonInput.value.trim() : '';
            const resultDiv = modalElement.querySelector('#cancelResult');
            
            if (!reason) {
                reasonInput.classList.add('is-invalid');
                reasonInput.focus();
                return;
            }
            
            reasonInput.classList.remove('is-invalid');
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
            
            const formData = new FormData();
            formData.append('reason', reason);
            
            fetch(`/admin/purchase/\${purchaseId}/cancel`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', '✅ ' + data.message, resultDiv, 'fa-check-circle');
                    
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(modalElement);
                        if (modal) modal.hide();
                        location.reload();
                    }, 1500);
                } else {
                    showAlert('danger', '❌ ' + (data.message || 'Erreur lors de l\\'annulation'), resultDiv, 'fa-exclamation-circle');
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            })
            .catch(error => {
                showAlert('danger', '❌ Erreur: ' + error.message, resultDiv, 'fa-exclamation-circle');
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        });
    }
    
    // === GESTION DU MODAL DE TÉLÉCHARGEMENT ===
    document.getElementById('confirmDocumentActionBtn')?.addEventListener('click', function() {
        const btn = this;
        const resultDiv = document.getElementById('documentModalResult');
        
        btn.disabled = true;
        const originalText = btn.innerHTML;
        btn.innerHTML = '<div class=\"loading-spinner\"></div> Traitement...';
        
        // Déterminer l'URL
        let url;
        if (window.currentDocumentType === 'bon-commande') {
            if (window.documentExists) {
                url = \"{{ path('admin_purchase_download_pdf', {id: purchase.id, type: 'bon-commande'}) }}\";
            } else {
                url = \"{{ path('admin_purchase_generate_pdf', {id: purchase.id, type: 'bon-commande'}) }}\";
            }
        } else if (window.currentDocumentType === 'recu-achat') {
            if (window.documentExists) {
                url = \"{{ path('admin_purchase_download_pdf', {id: purchase.id, type: 'recu-achat'}) }}\";
            } else {
                url = \"{{ path('admin_purchase_generate_pdf', {id: purchase.id, type: 'recu-achat'}) }}\";
            }
        }
        
        // Créer un lien temporaire pour le téléchargement
        const link = document.createElement('a');
        link.href = url;
        link.target = '_blank';
        
        // Déterminer le nom du fichier
        const filename = window.currentDocumentType === 'bon-commande' 
            ? 'bon-commande-{{ purchase.purchaseNumber }}.pdf' 
            : 'recu-achat-{{ purchase.purchaseNumber }}.pdf';
        
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        
        showAlert('success', 'Téléchargement démarré', resultDiv);
        
        // Fermer le modal après un délai
        setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('documentConfirmModal'));
            if (modal) modal.hide();
            btn.disabled = false;
            btn.innerHTML = originalText;
            
            // Si on a généré un nouveau document, recharger la page après un délai
            if (!window.documentExists) {
                setTimeout(() => {
                    location.reload();
                }, 3000);
            }
        }, 1500);
    });
    
    // Animation des cartes
    const cards = document.querySelectorAll('.card-hover');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>
{% endblock %}", "admin/purchase/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\show.html.twig");
    }
}
