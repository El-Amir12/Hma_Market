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

/* supplier_credit_note/show.html.twig */
class __TwigTemplate_3db6f6ba853da6057b8fc59bc49766d8 extends Template
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
        yield "Avoir n°";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "creditNoteNumber", [], "any", false, false, false, 4), "html", null, true);
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
    .timeline-item.status-closed::before {
        background: #28a745;
        box-shadow: 0 0 0 2px #28a745;
    }
    .timeline-item.status-rejected::before {
        background: #dc3545;
        box-shadow: 0 0 0 2px #dc3545;
    }
    .attachment-preview {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .attachment-preview:hover {
        transform: scale(1.05);
    }
    .modal-fullsize .modal-dialog {
        max-width: 90%;
        margin: 1.75rem auto;
    }
    .modal-fullsize .modal-content {
        background: transparent;
        border: none;
    }
    .modal-fullsize .modal-body {
        text-align: center;
        padding: 0;
    }
    .modal-fullsize img, .modal-fullsize video {
        max-width: 100%;
        max-height: 80vh;
        border-radius: 8px;
        box-shadow: 0 0 30px rgba(0,0,0,0.5);
    }
    .stock-action-card {
        border-left: 4px solid #ffc107;
    }
    .stock-action-applied {
        border-left: 4px solid #28a745;
        background-color: #f0fff4;
    }
    .stock-action-pending {
        border-left: 4px solid #ffc107;
        background-color: #fffaf0;
    }
    .timeline-performed-by {
        font-size: 0.7rem;
        color: #6c757d;
        margin-top: 0.25rem;
    }
    .timeline-performed-by i {
        margin-right: 0.25rem;
    }
</style>
";
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-file-invoice-dollar me-2 text-primary\"></i>
                Avoir n°";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "creditNoteNumber", [], "any", false, false, false, 104), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-1\">
                Créé le ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "reportedAt", [], "any", false, false, false, 107), "d/m/Y H:i"), "html", null, true);
        yield " par ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "reportedBy", [], "any", false, false, false, 107), "fullName", [], "any", false, false, false, 107), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111)]), "html", null, true);
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-boxes me-1\"></i> Voir le lot
            </a>
            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <!-- Colonne gauche - Informations principales -->
        <div class=\"col-lg-8\">
            <!-- Badges de statut -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex flex-wrap gap-3 align-items-center\">
                        <div>
                            <span class=\"badge ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "statusBadgeClass", [], "any", false, false, false, 128), "html", null, true);
        yield " fs-6 px-3 py-2\">
                                ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "statusLabel", [], "any", false, false, false, 129), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div>
                            <span class=\"badge ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "priorityBadgeClass", [], "any", false, false, false, 133), "html", null, true);
        yield " fs-6 px-3 py-2\">
                                Priorité: ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "priorityLabel", [], "any", false, false, false, 134), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div>
                            <span class=\"badge bg-secondary fs-6 px-3 py-2\">
                                Type: ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "issueTypeLabel", [], "any", false, false, false, 139), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte ACTION SUR LE STOCK -->
            ";
        // line 147
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockAction", [], "any", false, false, false, 147) && (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockAction", [], "any", false, false, false, 147) != "none"))) {
            // line 148
            yield "            <div class=\"card shadow-sm mb-4 stock-action-card ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionApplied", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("stock-action-applied") : ("stock-action-pending"));
            yield "\">
                <div class=\"card-header ";
            // line 149
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionApplied", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-success text-white";
            } else {
                yield "bg-warning text-dark";
            }
            yield "\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Action recommandée sur le stock
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <small class=\"text-muted\">Action recommandée</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-";
            // line 161
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockAction", [], "any", false, false, false, 161) == "reduce")) {
                yield "minus-circle";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockAction", [], "any", false, false, false, 161) == "zero")) {
                yield "trash-alt";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockAction", [], "any", false, false, false, 161) == "return")) {
                yield "truck";
            } else {
                yield "info-circle";
            }
            yield " me-2\"></i>
                                    ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionLabel", [], "any", false, false, false, 162), "html", null, true);
            yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <small class=\"text-muted\">Quantité concernée</small>
                                <div class=\"fw-bold text-danger\">
                                    ";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", false, false, false, 170), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, true, false, 170), "product", [], "any", false, true, false, 170), "unit", [], "any", true, true, false, 170)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 170), "product", [], "any", false, false, false, 170), "unit", [], "any", false, false, false, 170), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"alert ";
            // line 176
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionApplied", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "alert-success";
            } else {
                yield "alert-warning";
            }
            yield " mb-0\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas ";
            // line 178
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionApplied", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "fa-check-circle";
            } else {
                yield "fa-exclamation-triangle";
            }
            yield " fs-4 me-3\"></i>
                            <div>
                                ";
            // line 180
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionApplied", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 181
                yield "                                    <strong>✓ Action appliquée</strong><br>
                                    <small>Le stock a déjà été ajusté conformément à l'action recommandée.</small>
                                ";
            } else {
                // line 184
                yield "                                    <strong>⚠️ Action non encore appliquée</strong><br>
                                    <small>L'action sur le stock n'a pas encore été exécutée. Cliquez sur le bouton ci-dessous pour l'appliquer.</small>
                                ";
            }
            // line 187
            yield "                            </div>
                        </div>
                    </div>
                    
                    ";
            // line 191
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionApplied", [], "any", false, false, false, 191) && (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK_MANAGER")))) {
                // line 192
                yield "                    <div class=\"mt-3\">
                        <form method=\"post\" action=\"";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_apply_stock_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 193)]), "html", null, true);
                yield "\" 
                              onsubmit=\"return confirm('Confirmez-vous l\\'application de cette action sur le stock ?\\n\\nAction: ";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockActionLabel", [], "any", false, false, false, 194), "html", null, true);
                yield "\\nQuantité concernée: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", false, false, false, 194), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, true, false, 194), "product", [], "any", false, true, false, 194), "unit", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 194), "product", [], "any", false, false, false, 194), "unit", [], "any", false, false, false, 194), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                yield "\\n\\nCette action est irréversible.');\">
                            <button type=\"submit\" class=\"btn btn-warning w-100\">
                                <i class=\"fas fa-play me-2\"></i> Appliquer l'action sur le stock
                            </button>
                        </form>
                    </div>
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 200
($context["creditNote"] ?? null), "stockActionApplied", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 201
                yield "                    <div class=\"mt-3 text-muted small text-center\">
                        <i class=\"fas fa-check-circle text-success me-1\"></i> 
                        Action appliquée le ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "resolvedAt", [], "any", false, false, false, 203), "d/m/Y H:i"), "date inconnue"), "html", null, true);
                yield "
                    </div>
                    ";
            }
            // line 206
            yield "                </div>
            </div>
            ";
        }
        // line 209
        yield "
            <!-- Description -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-align-left me-2 text-primary\"></i> Description du problème</h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"mb-0\">";
        // line 216
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "description", [], "any", false, false, false, 216), "html", null, true));
        yield "</p>
                </div>
            </div>

            <!-- Montants -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-chart-line me-2 text-primary\"></i> Montants</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-md-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <small class=\"text-muted\">Déclaré</small>
                                <h4 class=\"text-danger mb-0\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 230), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 230)), "html", null, true);
        yield "</h4>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <small class=\"text-muted\">Récupéré</small>
                                <h4 class=\"text-success mb-0\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "recoveredAmount", [], "any", false, false, false, 236)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "recoveredAmount", [], "any", false, false, false, 236)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 236)), "html", null, true);
        yield "</h4>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <small class=\"text-muted\">Perdu</small>
                                <h4 class=\"text-secondary mb-0\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "lostAmount", [], "any", false, false, false, 242)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "lostAmount", [], "any", false, false, false, 242)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 242)), "html", null, true);
        yield "</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pièces jointes -->
            ";
        // line 250
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "attachments", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 251
            yield "            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-paperclip me-2 text-primary\"></i> Pièces jointes</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex flex-wrap gap-3\">
                        ";
            // line 257
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "attachments", [], "any", false, false, false, 257));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 258
                yield "                            ";
                $context["extension"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["attachment"], ".")));
                // line 259
                yield "                            ";
                if (CoreExtension::inFilter(($context["extension"] ?? null), ["jpg", "jpeg", "png", "gif", "webp"])) {
                    // line 260
                    yield "                                <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#imageModal\" data-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"])), "html", null, true);
                    yield "\">
                                    <img src=\"";
                    // line 261
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"])), "html", null, true);
                    yield "\" 
                                         alt=\"Pièce jointe\" 
                                         class=\"attachment-preview\">
                                </a>
                            ";
                } elseif (CoreExtension::inFilter(                // line 265
($context["extension"] ?? null), ["mp4", "mov", "mpeg"])) {
                    // line 266
                    yield "                                <video class=\"attachment-preview\" style=\"background: #000;\">
                                    <source src=\"";
                    // line 267
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"])), "html", null, true);
                    yield "\" type=\"video/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extension"] ?? null), "html", null, true);
                    yield "\">
                                </video>
                            ";
                }
                // line 270
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 275
        yield "
            <!-- Réponse du fournisseur -->
            ";
        // line 277
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierResponse", [], "any", false, false, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 278
            yield "            <div class=\"card shadow-sm mb-4 border-info\">
                <div class=\"card-header bg-info text-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-reply-all me-2\"></i> Réponse du fournisseur</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <strong>Décision:</strong> 
                        ";
            // line 285
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierDecision", [], "any", false, false, false, 285) == "accept_full")) {
                // line 286
                yield "                            <span class=\"badge bg-success\">Acceptation totale</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 287
($context["creditNote"] ?? null), "supplierDecision", [], "any", false, false, false, 287) == "accept_partial")) {
                // line 288
                yield "                            <span class=\"badge bg-warning text-dark\">Acceptation partielle</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 289
($context["creditNote"] ?? null), "supplierDecision", [], "any", false, false, false, 289) == "refuse")) {
                // line 290
                yield "                            <span class=\"badge bg-danger\">Refus</span>
                        ";
            } else {
                // line 292
                yield "                            <span class=\"badge bg-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierDecision", [], "any", false, false, false, 292), "html", null, true);
                yield "</span>
                        ";
            }
            // line 294
            yield "                    </div>
                    <div class=\"mb-3\">
                        <strong>Réponse:</strong>
                        <p class=\"mt-2\">";
            // line 297
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierResponse", [], "any", false, false, false, 297), "html", null, true));
            yield "</p>
                    </div>
                    ";
            // line 299
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierProposedAmount", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 300
                yield "                    <div class=\"mb-3\">
                        <strong>Montant proposé:</strong>
                        <span class=\"fw-bold text-primary\">";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierProposedAmount", [], "any", false, false, false, 302), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 302)), "html", null, true);
                yield "</span>
                    </div>
                    ";
            }
            // line 305
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierReference", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 306
                yield "                    <div class=\"mb-3\">
                        <strong>Référence fournisseur:</strong>
                        <span class=\"text-muted\">";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierReference", [], "any", false, false, false, 308), "html", null, true);
                yield "</span>
                    </div>
                    ";
            }
            // line 311
            yield "                    <div class=\"text-muted small\">
                        Réponse le ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierResponseAt", [], "any", false, false, false, 312), "d/m/Y H:i"), "html", null, true);
            yield "
                    </div>
                </div>
            </div>
            ";
        }
        // line 317
        yield "
            <!-- Résolution (Admin/Manager) -->
            ";
        // line 319
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "resolvedBy", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 320
            yield "            <div class=\"card shadow-sm mb-4 border-success\">
                <div class=\"card-header bg-success text-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-check-circle me-2\"></i> Résolution</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Résolu par</small>
                            <div class=\"fw-bold\">";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "resolvedBy", [], "any", false, false, false, 328), "fullName", [], "any", false, false, false, 328), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"col-md-6\">
                            <small class=\"text-muted\">Date de résolution</small>
                            <div class=\"fw-bold\">";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "resolvedAt", [], "any", false, false, false, 332), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                    ";
            // line 335
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "resolutionNotes", [], "any", false, false, false, 335)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "                    <div>
                        <small class=\"text-muted\">Notes internes</small>
                        <p class=\"mt-1\">";
                // line 338
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "resolutionNotes", [], "any", false, false, false, 338), "html", null, true));
                yield "</p>
                    </div>
                    ";
            }
            // line 341
            yield "                </div>
            </div>
            ";
        }
        // line 344
        yield "
            <!-- Formulaire de résolution (pour Admin/Manager) -->
            ";
        // line 346
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 347
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 347), ["closed", "recovered", "lost", "refused"])) {
                // line 348
                yield "                <div class=\"card shadow-sm mb-4 border-warning\">
                    <div class=\"card-header bg-warning text-dark\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-sync-alt me-2\"></i> Mettre à jour le statut</h5>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_resolve", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 353)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Confirmez-vous cette mise à jour ?')\">
                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">Nouveau statut</label>
                                    <select name=\"status\" class=\"form-select\" required>
                                        <option value=\"recovered\" ";
                // line 358
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 358) == "recovered")) ? ("selected") : (""));
                yield ">Récupéré</option>
                                        <option value=\"partially_recovered\" ";
                // line 359
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 359) == "partially_recovered")) ? ("selected") : (""));
                yield ">Partiellement récupéré</option>
                                        <option value=\"lost\" ";
                // line 360
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 360) == "lost")) ? ("selected") : (""));
                yield ">Perdu</option>
                                        <option value=\"closed\" ";
                // line 361
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 361) == "closed")) ? ("selected") : (""));
                yield ">Clôturé</option>
                                    </select>
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">Montant récupéré (FCFA)</label>
                                    <input type=\"number\" name=\"recovered_amount\" class=\"form-control\" step=\"100\" value=\"";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "recoveredAmount", [], "any", false, false, false, 366), "html", null, true);
                yield "\">
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">Montant perdu (FCFA)</label>
                                    <input type=\"number\" name=\"lost_amount\" class=\"form-control\" step=\"100\" value=\"";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "lostAmount", [], "any", false, false, false, 370), "html", null, true);
                yield "\">
                                </div>
                                <div class=\"col-12 mb-3\">
                                    <label class=\"form-label fw-bold\">Notes de résolution</label>
                                    <textarea name=\"resolution_notes\" class=\"form-control\" rows=\"3\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button type=\"submit\" class=\"btn btn-warning\">
                                        <i class=\"fas fa-save me-1\"></i> Enregistrer la résolution
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                ";
            }
            // line 386
            yield "            ";
        }
        // line 387
        yield "        </div>

        <!-- Colonne droite - Informations contextuelles -->
        <div class=\"col-lg-4\">
            <!-- Informations lot -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-boxes me-2 text-primary\"></i> Lot concerné</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-2\">
                        <small class=\"text-muted\">N° lot</small>
                        <div class=\"fw-bold\">";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 399), "batchNumber", [], "any", false, false, false, 399), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"mb-2\">
                        <small class=\"text-muted\">Produit</small>
                        <div>";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 403), "product", [], "any", false, false, false, 403), "name", [], "any", false, false, false, 403), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"mb-2\">
                        <small class=\"text-muted\">Quantité en stock</small>
                        <div>";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 407), "currentQuantity", [], "any", false, false, false, 407), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, true, false, 407), "product", [], "any", false, true, false, 407), "unit", [], "any", true, true, false, 407)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 407), "product", [], "any", false, false, false, 407), "unit", [], "any", false, false, false, 407), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"mb-2\">
                        <small class=\"text-muted\">Prix unitaire</small>
                        <div class=\"fw-bold text-primary\">";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 411), "unitPrice", [], "any", false, false, false, 411), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 411)), "html", null, true);
        yield "</div>
                    </div>
                    <a href=\"";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 413), "id", [], "any", false, false, false, 413)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-info w-100 mt-2\">
                        <i class=\"fas fa-eye me-1\"></i> Détails du lot
                    </a>
                </div>
            </div>

            <!-- Informations fournisseur -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-truck me-2 text-primary\"></i> Fournisseur</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-2\">
                        <small class=\"text-muted\">Nom</small>
                        <div class=\"fw-bold\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplier", [], "any", false, false, false, 427), "name", [], "any", false, false, false, 427), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"mb-2\">
                        <small class=\"text-muted\">Email</small>
                        <div>";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplier", [], "any", false, false, false, 431), "email", [], "any", false, false, false, 431), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"mb-2\">
                        <small class=\"text-muted\">Téléphone</small>
                        <div>";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplier", [], "any", false, true, false, 435), "phone", [], "any", true, true, false, 435)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplier", [], "any", false, false, false, 435), "phone", [], "any", false, false, false, 435), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            <!-- Historique - Version corrigée -->
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-history me-2 text-primary\"></i> Historique</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"timeline\">
                        ";
        // line 447
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
            // line 448
            yield "                        <div class=\"timeline-item\">
                            <div class=\"fw-bold\">
                                ";
            // line 450
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 450) == "created")) {
                // line 451
                yield "                                    📝 Création
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 452
$context["history"], "action", [], "any", false, false, false, 452) == "supplier_responded")) {
                // line 453
                yield "                                    💬 Réponse fournisseur
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 454
$context["history"], "action", [], "any", false, false, false, 454) == "status_updated")) {
                // line 455
                yield "                                    🔄 Mise à jour statut
                                ";
            } else {
                // line 457
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 457), "html", null, true);
                yield "
                                ";
            }
            // line 459
            yield "                            </div>
                            <div class=\"small text-muted\">
                                <i class=\"fas fa-calendar-alt me-1\"></i>
                                ";
            // line 462
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "performedAt", [], "any", false, false, false, 462), "d/m/Y H:i"), "html", null, true);
            yield "
                            </div>
                            <div class=\"timeline-performed-by\">
                                ";
            // line 465
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["history"], "performedBy", [], "any", false, false, false, 465)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 466
                yield "                                    <i class=\"fas fa-user-circle\"></i> 
                                    par <strong>";
                // line 467
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "performedBy", [], "any", false, false, false, 467), "fullName", [], "any", false, false, false, 467), "html", null, true);
                yield "</strong>
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 468
$context["history"], "performedByName", [], "any", false, false, false, 468)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 469
                yield "                                    <i class=\"fas fa-building\"></i> 
                                    par <strong>";
                // line 470
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "performedByName", [], "any", false, false, false, 470), "html", null, true);
                yield "</strong>
                                ";
            } else {
                // line 472
                yield "                                    <i class=\"fas fa-robot\"></i> 
                                    par <strong>Système</strong>
                                ";
            }
            // line 475
            yield "                            </div>
                            ";
            // line 476
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["history"], "notes", [], "any", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 477
                yield "                            <div class=\"text-muted small mt-2\">
                                <i class=\"fas fa-comment me-1\"></i>
                                ";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "notes", [], "any", false, false, false, 479), "html", null, true);
                yield "
                            </div>
                            ";
            }
            // line 482
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["history"], "oldValue", [], "any", false, false, false, 482) && CoreExtension::getAttribute($this->env, $this->source, $context["history"], "newValue", [], "any", false, false, false, 482))) {
                // line 483
                yield "                            <div class=\"text-muted small mt-1\">
                                <span class=\"text-danger\">";
                // line 484
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "oldValue", [], "any", false, false, false, 484), "html", null, true);
                yield "</span>
                                <i class=\"fas fa-arrow-right mx-1\"></i>
                                <span class=\"text-success\">";
                // line 486
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "newValue", [], "any", false, false, false, 486), "html", null, true);
                yield "</span>
                            </div>
                            ";
            }
            // line 489
            yield "                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 491
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour agrandir les images -->
<div class=\"modal fade modal-fullsize\" id=\"imageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content bg-transparent\">
            <div class=\"modal-body text-center\">
                <img src=\"\" alt=\"Aperçu\" id=\"modalImage\" style=\"max-width: 100%; max-height: 80vh;\">
            </div>
            <div class=\"text-center mt-3\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 513
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 514
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du modal d'image
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
        imageModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const imageUrl = button.getAttribute('data-image');
            const modalImage = document.getElementById('modalImage');
            if (modalImage) {
                modalImage.src = imageUrl;
            }
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
        return "supplier_credit_note/show.html.twig";
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
        return array (  927 => 514,  920 => 513,  895 => 491,  888 => 489,  882 => 486,  877 => 484,  874 => 483,  871 => 482,  865 => 479,  861 => 477,  859 => 476,  856 => 475,  851 => 472,  846 => 470,  843 => 469,  841 => 468,  837 => 467,  834 => 466,  832 => 465,  826 => 462,  821 => 459,  815 => 457,  811 => 455,  809 => 454,  806 => 453,  804 => 452,  801 => 451,  799 => 450,  795 => 448,  791 => 447,  776 => 435,  769 => 431,  762 => 427,  745 => 413,  740 => 411,  731 => 407,  724 => 403,  717 => 399,  703 => 387,  700 => 386,  681 => 370,  674 => 366,  666 => 361,  662 => 360,  658 => 359,  654 => 358,  646 => 353,  639 => 348,  636 => 347,  634 => 346,  630 => 344,  625 => 341,  619 => 338,  615 => 336,  613 => 335,  607 => 332,  600 => 328,  590 => 320,  588 => 319,  584 => 317,  576 => 312,  573 => 311,  567 => 308,  563 => 306,  560 => 305,  554 => 302,  550 => 300,  548 => 299,  543 => 297,  538 => 294,  532 => 292,  528 => 290,  526 => 289,  523 => 288,  521 => 287,  518 => 286,  516 => 285,  507 => 278,  505 => 277,  501 => 275,  495 => 271,  489 => 270,  481 => 267,  478 => 266,  476 => 265,  469 => 261,  464 => 260,  461 => 259,  458 => 258,  454 => 257,  446 => 251,  444 => 250,  433 => 242,  424 => 236,  415 => 230,  398 => 216,  389 => 209,  384 => 206,  378 => 203,  374 => 201,  372 => 200,  359 => 194,  355 => 193,  352 => 192,  350 => 191,  344 => 187,  339 => 184,  334 => 181,  332 => 180,  323 => 178,  314 => 176,  303 => 170,  292 => 162,  280 => 161,  261 => 149,  256 => 148,  254 => 147,  243 => 139,  235 => 134,  231 => 133,  224 => 129,  220 => 128,  203 => 114,  197 => 111,  188 => 107,  182 => 104,  174 => 98,  167 => 97,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "supplier_credit_note/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\show.html.twig");
    }
}
