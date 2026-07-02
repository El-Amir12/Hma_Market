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
class __TwigTemplate_b04cdf714e8621b9e80a4d1bdf7075bb extends Template
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
        yield "Lot ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        background: #0463f1;
        border: 2px solid white;
        box-shadow: 0 0 0 2px #0463f1;
    }
    .timeline-item.issue::before {
        background: #dc3545;
        box-shadow: 0 0 0 2px #dc3545;
    }
    .timeline-item.resolved::before {
        background: #28a745;
        box-shadow: 0 0 0 2px #28a745;
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
    .status-pending { border-left-color: #ffc107; }
    .status-acknowledged { border-left-color: #17a2b8; }
    .status-under_review { border-left-color: #0d6efd; }
    .status-recovered { border-left-color: #28a745; }
    .status-lost { border-left-color: #dc3545; }
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
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 102)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 102)), "truncate", [30], "method", false, false, false, 102), "html", null, true);
        yield "</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 103)]), "html", null, true);
        yield "\">Lots</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 104), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                Lot ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 109), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-1\">
                <i class=\"fas fa-calendar-alt me-1\"></i> Créé le ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "createdAt", [], "any", false, false, false, 112), "d/m/Y H:i"), "html", null, true);
        yield "
                ";
        // line 113
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "updatedAt", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " | Modifié le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "updatedAt", [], "any", false, false, false, 113), "d/m/Y H:i"), "html", null, true);
        }
        // line 114
        yield "            </p>
        </div>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-outline-secondary btn-action\" onclick=\"window.print()\" title=\"Imprimer\">
                <i class=\"fas fa-print me-1\"></i> Imprimer
            </button>
            ";
        // line 120
        if ((($tmp = ($context["canEdit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 121)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-action\">
                    <i class=\"fas fa-edit me-1\"></i> Modifier
                </a>
            ";
        }
        // line 125
        yield "            ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hasIssue", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger btn-action\">
                    <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                </a>
            ";
        } else {
            // line 130
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "supplierCreditNoteId", [], "any", false, false, false, 130)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-action\">
                    <i class=\"fas fa-file-invoice-dollar me-1\"></i> Voir l'avoir
                </a>
                ";
            // line 134
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatus", [], "any", false, false, false, 134) == "recovered") || (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatus", [], "any", false, false, false, 134) == "closed"))) {
                // line 135
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 135)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning btn-action\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> Nouveau problème
                    </a>
                ";
            }
            // line 139
            yield "            ";
        }
        // line 140
        yield "            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 140)]), "html", null, true);
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
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 161), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Produit</dt>
                                <dd class=\"col-sm-7\">
                                    <a href=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 165)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                        ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 166), "html", null, true);
        yield "
                                    </a>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 171), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">";
        // line 174
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true)) : ("Non catégorisé"));
        yield "</dd>
                            </dl>
                        </div>
                        <div class=\"col-md-6\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Emplacement</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 181
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "location", [], "any", false, false, false, 181) || CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "locationEntity", [], "any", false, false, false, 181))) {
            // line 182
            yield "                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> 
                                            ";
            // line 184
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "locationEntity", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "locationEntity", [], "any", false, false, false, 184), "displayName", [], "any", false, false, false, 184), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "location", [], "any", false, false, false, 184), "html", null, true)));
            yield "
                                        </span>
                                    ";
        } else {
            // line 187
            yield "                                        <span class=\"text-muted\">—</span>
                                    ";
        }
        // line 189
        yield "                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Statut</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge ";
        // line 193
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "isActive", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield "\">
                                        <i class=\"fas ";
        // line 194
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "isActive", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
        yield " me-1\"></i>
                                        ";
        // line 195
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "isActive", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                    </span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Avoir</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 201
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hasIssue", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 202
            yield "                                        <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatusBadgeClass", [], "any", false, false, false, 202), "html", null, true);
            yield "\">
                                            ";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatusLabel", [], "any", false, false, false, 203), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 205
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issuePriority", [], "any", false, false, false, 205) == "critical")) {
                // line 206
                yield "                                            <span class=\"badge bg-danger ms-1\">Critique</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 207
($context["batch"] ?? null), "issuePriority", [], "any", false, false, false, 207) == "high")) {
                // line 208
                yield "                                            <span class=\"badge bg-warning text-dark ms-1\">Haute priorité</span>
                                        ";
            }
            // line 210
            yield "                                    ";
        } else {
            // line 211
            yield "                                        <span class=\"text-muted\">Aucun</span>
                                    ";
        }
        // line 213
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
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 233), "html", null, true);
        yield "</h3>
                                <small>";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 234)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 234), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Quantité actuelle</small>
                                <h3 class=\"mb-0 fw-bold ";
        // line 240
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 240) <= 10)) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 241), "html", null, true);
        yield "
                                </h3>
                                <small>";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 243), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</small>
                                ";
        // line 244
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 244) <= 10)) {
            // line 245
            yield "                                    <span class=\"badge bg-warning text-dark mt-1 d-block\">Stock faible</span>
                                ";
        }
        // line 247
        yield "                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <small class=\"text-muted\">Pourcentage restant</small>
                                <h3 class=\"mb-0 fw-bold\">
                                    ";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 253) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 253)) * 100)), "html", null, true);
        yield "%
                                </h3>
                                <div class=\"progress mt-2\" style=\"height:8px\">
                                    <div class=\"progress-bar ";
        // line 256
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 256) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 256)) * 100) <= 10)) {
            yield "bg-danger";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 256) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 256)) * 100) <= 30)) {
            yield "bg-warning";
        } else {
            yield "bg-success";
        }
        yield "\" 
                                         style=\"width: ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 257) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 257)) * 100)), "html", null, true);
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
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "unitPrice", [], "any", false, false, false, 266), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 266)), "html", null, true);
        yield "</h4>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Valeur totale</small>
                                <h4 class=\"mb-0 fw-bold text-success\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 272) * CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "unitPrice", [], "any", false, false, false, 272)), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 272)), "html", null, true);
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
        // line 293
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "manufacturingDate", [], "any", false, false, false, 293)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "manufacturingDate", [], "any", false, false, false, 293), "d/m/Y"), "html", null, true)) : ("Non renseignée"));
        yield "
                                </h5>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted\">Date d'expiration</small>
                                <h5 class=\"mb-0 fw-bold ";
        // line 300
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 300) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 300) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            yield "text-danger";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 300) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 300) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            yield "text-warning";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 301
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 301), "d/m/Y"), "html", null, true)) : ("Non périssable"));
        yield "
                                </h5>
                                ";
        // line 303
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 303) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 303) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 304
            yield "                                    <span class=\"badge bg-danger mt-1\">Expiré</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 305
($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 305) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 305) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            // line 306
            yield "                                    <span class=\"badge bg-warning text-dark mt-1\">Expire bientôt</span>
                                ";
        }
        // line 308
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
        // line 318
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hasIssue", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 319
            yield "            <div class=\"card info-card border-0 shadow-sm mb-4 status-card status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatus", [], "any", false, false, false, 319), "html", null, true);
            yield "\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                        Avoir fournisseur
                    </h5>
                    <span class=\"badge ";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatusBadgeClass", [], "any", false, false, false, 325), "html", null, true);
            yield " fs-6 px-3 py-2\">
                        ";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatusLabel", [], "any", false, false, false, 326), "html", null, true);
            yield "
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant déclaré</small>
                            <div class=\"fw-bold text-danger fs-5\">";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueDeclaredAmount", [], "any", false, false, false, 333), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 333)), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Priorité</small>
                            <div>
                                <span class=\"badge ";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issuePriorityBadgeClass", [], "any", false, false, false, 338), "html", null, true);
            yield "\">
                                    ";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issuePriorityLabel", [], "any", false, false, false, 339), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant récupéré</small>
                            <div class=\"fw-bold text-success\">";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueRecoveredAmount", [], "any", false, false, false, 347)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueRecoveredAmount", [], "any", false, false, false, 347)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 347)), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Montant perdu</small>
                            <div class=\"fw-bold text-secondary\">";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueLostAmount", [], "any", false, false, false, 351)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueLostAmount", [], "any", false, false, false, 351)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 351)), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Signalé le</small>
                            <div>";
            // line 357
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueReportedAt", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueReportedAt", [], "any", false, false, false, 357), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Résolu le</small>
                            <div>";
            // line 361
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueResolvedAt", [], "any", false, false, false, 361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueResolvedAt", [], "any", false, false, false, 361), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</div>
                        </div>
                    </div>
                    ";
            // line 364
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "supplierCreditNoteId", [], "any", false, false, false, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 365
                yield "                        <div class=\"mt-3 text-center\">
                            <a href=\"";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "supplierCreditNoteId", [], "any", false, false, false, 366)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-sm\">
                                <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                            </a>
                        </div>
                    ";
            }
            // line 371
            yield "                </div>
            </div>
            ";
        } else {
            // line 374
            yield "            <div class=\"card info-card border-0 shadow-sm mb-4 bg-light\">
                <div class=\"card-body text-center py-4\">
                    <i class=\"fas fa-check-circle fa-3x text-success mb-2\"></i>
                    <h5 class=\"mb-1\">Aucun problème signalé</h5>
                    <p class=\"text-muted small mb-3\">Ce lot n'a pas d'avoir fournisseur associé</p>
                    <a href=\"";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 379)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger btn-sm\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                    </a>
                </div>
            </div>
            ";
        }
        // line 385
        yield "
            <!-- 🔥 Informations d'achat - -->
            ";
        // line 387
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "purchaseItemId", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 388
            yield "            <div class=\"card info-card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-receipt me-2 text-primary\"></i>
                        Informations d'achat
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
            // line 397
            yield "                    ";
            $context["purchaseItem"] = ((array_key_exists("purchase_item", $context)) ? (($context["purchase_item"] ?? null)) : (null));
            // line 398
            yield "                    ";
            if ((($context["purchaseItem"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 398))) {
                // line 399
                yield "                        <dl class=\"row mb-0\">
                            <dt class=\"col-sm-4 text-muted\">Commande</dt>
                            <dd class=\"col-sm-8\">
                                <a href=\"";
                // line 402
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 402), "id", [], "any", false, false, false, 402)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                    ";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 403), "purchaseNumber", [], "any", false, false, false, 403), "html", null, true);
                yield "
                                </a>
                            </dd>
                            <dt class=\"col-sm-4 text-muted\">Fournisseur</dt>
                            <dd class=\"col-sm-8\">";
                // line 407
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 407), "supplier", [], "any", false, true, false, 407), "name", [], "any", true, true, false, 407)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 407), "supplier", [], "any", false, false, false, 407), "name", [], "any", false, false, false, 407), "Non renseigné")) : ("Non renseigné")), "html", null, true);
                yield "</dd>
                            <dt class=\"col-sm-4 text-muted\">Date d'achat</dt>
                            <dd class=\"col-sm-8\">";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 409), "createdAt", [], "any", false, false, false, 409), "d/m/Y"), "html", null, true);
                yield "</dd>
                            <dt class=\"col-sm-4 text-muted\">Quantité achetée</dt>
                            <dd class=\"col-sm-8\">";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "quantity", [], "any", false, false, false, 411), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 411), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                yield "</dd>
                            <dt class=\"col-sm-4 text-muted\">Prix d'achat</dt>
                            <dd class=\"col-sm-8\">";
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "unitPrice", [], "any", false, false, false, 413), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 413)), "html", null, true);
                yield "</dd>
                        </dl>
                    ";
            } else {
                // line 416
                yield "                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-link fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Information d'achat non disponible</p>
                        </div>
                    ";
            }
            // line 421
            yield "                </div>
            </div>
            ";
        }
        // line 424
        yield "
            <!-- Mouvements de stock -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-exchange-alt me-2 text-info\"></i>
                        Mouvements de stock
                    </h5>
                    <span class=\"badge bg-secondary\">";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "stockMovements", [], "any", false, false, false, 432)), "html", null, true);
        yield " mouvement(s)</span>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 435
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "stockMovements", [], "any", false, false, false, 435)) > 0)) {
            // line 436
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 437
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "stockMovements", [], "any", false, false, false, 437), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "createdAt", [], "any", false, false, false, 437) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "createdAt", [], "any", false, false, false, 437)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
                // line 438
                yield "                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div class=\"flex-grow-1\">
                                            <span class=\"badge 
                                                ";
                // line 442
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 442) == "PURCHASE")) {
                    yield "bg-success
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 443
$context["movement"], "movementType", [], "any", false, false, false, 443) == "SALE")) {
                    yield "bg-danger
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 444
$context["movement"], "movementType", [], "any", false, false, false, 444) == "ADJUSTMENT")) {
                    yield "bg-warning text-dark
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 445
$context["movement"], "movementType", [], "any", false, false, false, 445) == "RETURN")) {
                    yield "bg-info
                                                ";
                } else {
                    // line 446
                    yield "bg-secondary
                                                ";
                }
                // line 447
                yield " me-2\">
                                                <i class=\"fas 
                                                    ";
                // line 449
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 449) == "PURCHASE")) {
                    yield "fa-cart-plus
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 450
$context["movement"], "movementType", [], "any", false, false, false, 450) == "SALE")) {
                    yield "fa-shopping-cart
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 451
$context["movement"], "movementType", [], "any", false, false, false, 451) == "ADJUSTMENT")) {
                    yield "fa-sliders-h
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 452
$context["movement"], "movementType", [], "any", false, false, false, 452) == "RETURN")) {
                    yield "fa-undo-alt
                                                    ";
                } else {
                    // line 453
                    yield "fa-question
                                                    ";
                }
                // line 454
                yield " me-1\"></i>
                                                ";
                // line 455
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 455) == "PURCHASE")) {
                    yield "Achat
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 456
$context["movement"], "movementType", [], "any", false, false, false, 456) == "SALE")) {
                    yield "Vente
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 457
$context["movement"], "movementType", [], "any", false, false, false, 457) == "ADJUSTMENT")) {
                    yield "Ajustement
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 458
$context["movement"], "movementType", [], "any", false, false, false, 458) == "RETURN")) {
                    yield "Retour
                                                ";
                } else {
                    // line 459
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 459), "html", null, true);
                }
                // line 460
                yield "                                            </span>
                                            <span class=\"fw-bold\">";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 461), "html", null, true);
                yield "</span>
                                            <small class=\"text-muted\">";
                // line 462
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 462)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 462), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                yield "</small>
                                            ";
                // line 463
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 463)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 464
                    yield "                                                <br><small class=\"text-muted\">Prix: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 464), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 464)), "html", null, true);
                    yield "</small>
                                            ";
                }
                // line 466
                yield "                                        </div>
                                        <div class=\"text-end\">
                                            <small class=\"text-muted\">";
                // line 468
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 468), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                            ";
                // line 469
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 469)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 470
                    yield "                                                <br><small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>";
                    // line 471
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, true, false, 471), "fullName", [], "any", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 471), "fullName", [], "any", false, false, false, 471), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 471), "email", [], "any", false, false, false, 471))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 471), "email", [], "any", false, false, false, 471))), "html", null, true);
                    yield "
                                                </small>
                                            ";
                }
                // line 474
                yield "                                        </div>
                                    </div>
                                    ";
                // line 476
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 477
                    yield "                                        <div class=\"mt-2\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                ";
                    // line 480
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 480), "html", null, true);
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 484
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            yield "                        </div>
                    ";
        } else {
            // line 488
            yield "                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun mouvement de stock</p>
                        </div>
                    ";
        }
        // line 493
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 500
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 501
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Ajouter une classe pour l'impression
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
        return array (  948 => 501,  941 => 500,  931 => 493,  924 => 488,  920 => 486,  913 => 484,  906 => 480,  901 => 477,  899 => 476,  895 => 474,  889 => 471,  886 => 470,  884 => 469,  880 => 468,  876 => 466,  870 => 464,  868 => 463,  864 => 462,  860 => 461,  857 => 460,  854 => 459,  849 => 458,  845 => 457,  841 => 456,  837 => 455,  834 => 454,  830 => 453,  825 => 452,  821 => 451,  817 => 450,  813 => 449,  809 => 447,  805 => 446,  800 => 445,  796 => 444,  792 => 443,  788 => 442,  782 => 438,  778 => 437,  775 => 436,  773 => 435,  767 => 432,  757 => 424,  752 => 421,  745 => 416,  739 => 413,  732 => 411,  727 => 409,  722 => 407,  715 => 403,  711 => 402,  706 => 399,  703 => 398,  700 => 397,  690 => 388,  688 => 387,  684 => 385,  675 => 379,  668 => 374,  663 => 371,  655 => 366,  652 => 365,  650 => 364,  644 => 361,  637 => 357,  628 => 351,  621 => 347,  610 => 339,  606 => 338,  598 => 333,  588 => 326,  584 => 325,  574 => 319,  572 => 318,  560 => 308,  556 => 306,  554 => 305,  551 => 304,  549 => 303,  544 => 301,  534 => 300,  524 => 293,  500 => 272,  491 => 266,  479 => 257,  469 => 256,  463 => 253,  455 => 247,  451 => 245,  449 => 244,  445 => 243,  440 => 241,  432 => 240,  423 => 234,  419 => 233,  397 => 213,  393 => 211,  390 => 210,  386 => 208,  384 => 207,  381 => 206,  379 => 205,  374 => 203,  369 => 202,  367 => 201,  358 => 195,  354 => 194,  350 => 193,  344 => 189,  340 => 187,  334 => 184,  330 => 182,  328 => 181,  318 => 174,  312 => 171,  304 => 166,  300 => 165,  293 => 161,  268 => 140,  265 => 139,  257 => 135,  254 => 134,  247 => 130,  239 => 126,  236 => 125,  228 => 121,  226 => 120,  218 => 114,  213 => 113,  209 => 112,  203 => 109,  195 => 104,  191 => 103,  185 => 102,  181 => 101,  173 => 95,  166 => 94,  75 => 7,  68 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\show.html.twig");
    }
}
