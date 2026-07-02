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
class __TwigTemplate_e35520d690e7c10e5f1d88ce7e39e682 extends Template
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
        yield "Retour #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnNumber", [], "any", false, false, false, 4), "html", null, true);
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
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-approved { background: #dbeafe; color: #2563eb; }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-rejected { background: #fee2e2; color: #dc2626; }
    
    .info-card {
        background: white;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }
    .info-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    .info-item {
        padding: 0.75rem 1.25rem;
        border-bottom: 1px solid #f1f5f9;
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    .info-value {
        font-weight: 600;
    }
    
    .motif-badge {
        background-color: #0463f1 !important;
        color: white !important;
        padding: 6px 12px !important;
        border-radius: 20px !important;
        font-weight: 500 !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 6px !important;
    }
    
    .card-header-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .action-buttons-group {
        display: flex;
        gap: 0.5rem;
    }
    .action-buttons-group .btn {
        padding: 0.5rem 1rem;
        font-weight: 500;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .action-buttons-group .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .quantity-this-return {
        background-color: #8b5cf6 !important;
        color: white !important;
        font-size: 0.85rem !important;
        padding: 5px 10px !important;
        border-radius: 8px !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 6px !important;
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Retour #";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnNumber", [], "any", false, false, false, 100), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted\">Créé le ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "createdAt", [], "any", false, false, false, 102), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        </div>
        <div>
            <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
            </a>
            ";
        // line 108
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 108) == "pending")) {
            // line 109
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"fas fa-edit me-1\"></i> Modifier
                </a>
            ";
        }
        // line 113
        yield "        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-lg-4\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations générales</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 125) == "pending")) {
            // line 126
            yield "                            <span class=\"status-badge status-pending\">⏳ En attente de validation</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 127) == "approved")) {
            // line 128
            yield "                            <span class=\"status-badge status-approved\">✓ Approuvé - En attente de remboursement</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 129
($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 129) == "completed")) {
            // line 130
            yield "                            <span class=\"status-badge status-completed\">✅ Remboursé</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 131
($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 131) == "rejected")) {
            // line 132
            yield "                            <span class=\"status-badge status-rejected\">❌ Rejeté</span>
                        ";
        }
        // line 134
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">N° commande associée</div>
                    <div class=\"info-value\">
                        <a href=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "originalOrder", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139)]), "html", null, true);
        yield "\" class=\"text-primary\">
                            ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "orderNumber", [], "any", false, false, false, 140), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">";
        // line 146
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "customerName", [], "any", false, false, false, 146)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "customerName", [], "any", false, false, false, 146), "html", null, true)) : ("Non renseigné"));
        yield "</div>
                    <div class=\"small text-muted\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "customerPhone", [], "any", false, false, false, 147), "html", null, true);
        yield "</div>
                </div>
                <!-- Qui a approuvé et remboursé -->
                <div class=\"info-card mt-4\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-user-check me-2\"></i> Validation</h5>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Enregistré par</div>
                        <div class=\"info-value\">
                            <div class=\"d-flex align-items-center\">
                                ";
        // line 158
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 158), "photo", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 159), "photo", [], "any", false, false, false, 159))), "html", null, true);
            yield "\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                                ";
        } else {
            // line 161
            yield "                                    <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                        <i class=\"fas fa-user text-secondary\"></i>
                                    </div>
                                ";
        }
        // line 165
        yield "                                <div>
                                    <strong>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 166), "fullName", [], "any", false, false, false, 166), "html", null, true);
        yield "</strong>
                                    <br><small class=\"text-muted\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 167), "email", [], "any", false, false, false, 167), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 173
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 174
            yield "                    <div class=\"info-item\">
                        <div class=\"info-label\">Approuvé par</div>
                        <div class=\"info-value\">
                            <div class=\"d-flex align-items-center\">
                                ";
            // line 178
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 178), "photo", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 179), "photo", [], "any", false, false, false, 179))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                                ";
            } else {
                // line 181
                yield "                                    <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                        <i class=\"fas fa-user text-secondary\"></i>
                                    </div>
                                ";
            }
            // line 185
            yield "                                <div>
                                    <strong>";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 186), "fullName", [], "any", false, false, false, 186), "html", null, true);
            yield "</strong>
                                    <br><small class=\"text-muted\">
                                        <i class=\"fas fa-calendar me-1\"></i> ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedAt", [], "any", false, false, false, 188), "d/m/Y H:i"), "html", null, true);
            yield "
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 195
        yield "                    
                    ";
        // line 196
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                    <div class=\"info-item\">
                        <div class=\"info-label\">Remboursé par</div>
                        <div class=\"info-value\">
                            <div class=\"d-flex align-items-center\">
                                ";
            // line 201
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 201), "photo", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 202
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 202), "photo", [], "any", false, false, false, 202))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                                ";
            } else {
                // line 204
                yield "                                    <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                        <i class=\"fas fa-user text-secondary\"></i>
                                    </div>
                                ";
            }
            // line 208
            yield "                                <div>
                                    <strong>";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 209), "fullName", [], "any", false, false, false, 209), "html", null, true);
            yield "</strong>
                                    <br><small class=\"text-muted\">
                                        <i class=\"fas fa-calendar me-1\"></i> ";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedAt", [], "any", false, false, false, 211), "d/m/Y H:i"), "html", null, true);
            yield "
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 218
        yield "                </div>
            </div>

            <div class=\"info-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-chart-line me-2\"></i> Montants</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Total à rembourser</div>
                    <div class=\"info-value h4 text-primary mb-0\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "totalRefundAmount", [], "any", false, false, false, 227), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Méthode de remboursement</div>
                    <div class=\"info-value\">
                        ";
        // line 232
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 232) == "cash")) {
            // line 233
            yield "                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 234
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 234) == "mobile_money")) {
            // line 235
            yield "                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 236
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 236) == "bank_transfer")) {
            // line 237
            yield "                            <i class=\"fas fa-university text-primary me-1\"></i> Virement bancaire
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 238
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 238) == "wallet")) {
            // line 239
            yield "                            <i class=\"fas fa-wallet text-secondary me-1\"></i> Porte-monnaie électronique
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 240
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 240) == "credit_note")) {
            // line 241
            yield "                            <i class=\"fas fa-file-invoice text-warning me-1\"></i> Avoir / Note de crédit
                        ";
        }
        // line 243
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-8\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <div class=\"card-header-actions\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-boxes me-2\"></i> Articles retournés</h5>
                        
                        ";
        // line 254
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 254) == "pending") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
            // line 255
            yield "                            <div class=\"action-buttons-group\">
                                <button type=\"button\" class=\"btn btn-danger\" id=\"rejectReturnBtn\">
                                    <i class=\"fas fa-times me-1\"></i> Rejeter
                                </button>
                                <button type=\"button\" class=\"btn btn-success\" id=\"approveReturnBtn\">
                                    <i class=\"fas fa-check me-1\"></i> Approuver
                                </button>
                            </div>
                        ";
        }
        // line 264
        yield "                        
                        ";
        // line 265
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 265) == "approved") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
            // line 266
            yield "                            <div class=\"action-buttons-group\">
                                <button type=\"button\" class=\"btn btn-primary\" id=\"completeReturnBtn\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> Confirmer le remboursement
                                </button>
                            </div>
                        ";
        }
        // line 272
        yield "                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>
                                    ";
        // line 279
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 280
            yield "                                        Article
                                    ";
        } else {
            // line 282
            yield "                                        Produit
                                    ";
        }
        // line 284
        yield "                                <th class=\"text-center\">Total retourné<br><small>(cumulé)</small></th>
                                <th class=\"text-center\">Dans ce retour</th>
                                <th class=\"text-center\">Prix unitaire</th>
                                <th class=\"text-center\">Total remboursé</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnItems", [], "any", false, false, false, 291));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 292
            yield "                                ";
            $context["totalReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["totalReturnedQuantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 292), "id", [], "any", false, false, false, 292), [], "array", true, true, false, 292)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["totalReturnedQuantities"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 292), "id", [], "any", false, false, false, 292)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 292))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 292)));
            // line 293
            yield "                                ";
            $context["totalOrderQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 293), "quantity", [], "any", false, false, false, 293);
            // line 294
            yield "                                ";
            $context["remaining"] = (($context["totalOrderQty"] ?? null) - ($context["totalReturned"] ?? null));
            // line 295
            yield "                                ";
            $context["returnPercentage"] = Twig\Extension\CoreExtension::round(((($context["totalReturned"] ?? null) / ($context["totalOrderQty"] ?? null)) * 100));
            // line 296
            yield "                                
                                <tr>
                                    <td>
                                        <strong>";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 299), "html", null, true);
            yield "</strong>
                                        ";
            // line 300
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 301
                yield "                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 301), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 303
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemType", [], "any", false, false, false, 303) == "recipe")) {
                // line 304
                yield "                                            <br><small class=\"text-muted\"><i class=\"fas fa-utensils\"></i> Menu</small>
                                        ";
            } else {
                // line 306
                yield "                                            <br><small class=\"text-muted\"><i class=\"fas fa-box\"></i> Produit</small>
                                        ";
            }
            // line 308
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex align-items-center justify-content-center gap-2 flex-wrap\">
                                            <span class=\"badge\" style=\"background: #dc2626; color: white; font-size: 0.9rem; padding: 6px 12px; border-radius: 8px;\">
                                                <i class=\"fas fa-undo-alt me-1\"></i> ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalReturned"] ?? null), "html", null, true);
            yield "
                                            </span>
                                            <span class=\"text-muted fw-bold\">/</span>
                                            <span class=\"badge\" style=\"background: #0463f1; color: white; font-size: 0.9rem; padding: 6px 12px; border-radius: 8px;\">
                                                <i class=\"fas fa-box me-1\"></i> ";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalOrderQty"] ?? null), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                        
                                        <div class=\"mt-2\" style=\"width: 100%; background-color: #e5e7eb; border-radius: 10px; overflow: hidden;\">
                                            <div style=\"width: ";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["returnPercentage"] ?? null), "html", null, true);
            yield "%; background-color: #dc2626; height: 6px;\"></div>
                                        </div>
                                        
                                        <div class=\"mt-1\">
                                            ";
            // line 325
            if ((($context["remaining"] ?? null) > 0)) {
                // line 326
                yield "                                                <span class=\"badge\" style=\"background: #f59e0b; color: white; font-size: 0.7rem; padding: 4px 10px; border-radius: 20px;\">
                                                    <i class=\"fas fa-box-open me-1\"></i> Restant: ";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["remaining"] ?? null), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 330
                yield "                                                <span class=\"badge\" style=\"background: #10b981; color: white; font-size: 0.7rem; padding: 4px 10px; border-radius: 20px;\">
                                                    <i class=\"fas fa-check-circle me-1\"></i> Complet
                                                </span>
                                            ";
            }
            // line 334
            yield "                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"quantity-this-return\">
                                            <i class=\"fas fa-exchange-alt me-1\"></i> ";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 338), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 342), 0, ",", " "), "html", null, true);
            yield " FCFA
                                    </td>
                                    <td class=\"text-center\">
                                        <strong class=\"text-primary\">";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalRefund", [], "any", false, false, false, 345), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5\">
                                    ";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "totalRefundAmount", [], "any", false, false, false, 354), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class=\"info-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-comment me-2\"></i> Motif et notes</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Motif du retour</div>
                    <div class=\"info-value\">
                        <span class=\"motif-badge\">
                            <i class=\"fas fa-tag me-1\"></i> ";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 370), [], "array", true, true, false, 370)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["reasons"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 370)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 370))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 370))), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                ";
        // line 374
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reasonNotes", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 375
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Détails du motif</div>
                    <div class=\"info-value\">";
            // line 377
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reasonNotes", [], "any", false, false, false, 377), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 380
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "notes", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 381
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Notes internes</div>
                    <div class=\"info-value text-muted\">";
            // line 383
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "notes", [], "any", false, false, false, 383), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 386
        yield "            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"confirmApproveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-check-circle me-2\"></i> Approuver le retour</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-check-circle fa-3x text-success mb-3\"></i>
                <p>Êtes-vous sûr de vouloir <strong>approuver</strong> cette demande de retour ?</p>
                <p class=\"text-muted small\">Le retour pourra ensuite être remboursé.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmApproveBtn\">Approuver</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmRejectModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-ban me-2\"></i> Rejeter le retour</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\">
                    <i class=\"fas fa-exclamation-triangle fa-3x text-danger mb-3\"></i>
                    <p>Êtes-vous sûr de vouloir <strong>rejeter</strong> cette demande de retour ?</p>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Motif du rejet (optionnel)</label>
                    <textarea id=\"rejectReason\" class=\"form-control\" rows=\"3\" placeholder=\"Expliquez pourquoi ce retour est rejeté...\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmRejectBtn\">Confirmer le rejet</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmCompleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-money-bill-wave me-2\"></i> Confirmer le remboursement</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-money-bill-wave fa-3x text-primary mb-3\"></i>
                <p>Êtes-vous sûr de vouloir <strong>confirmer le remboursement</strong> ?</p>
                <div class=\"alert alert-warning mt-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>Attention :</strong> Cette action remettra les produits en stock et le remboursement sera effectué.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmCompleteBtn\">Confirmer le remboursement</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 461
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 462
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
\$(document).ready(function() {
    let returnId = ";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "id", [], "any", false, false, false, 465), "html", null, true);
        yield ";

    \$('#approveReturnBtn').click(function() {
        \$('#confirmApproveModal').modal('show');
    });

    \$('#confirmApproveBtn').click(function() {
        \$.ajax({
            url: '/returns/' + returnId + '/approve',
            method: 'POST',
            success: function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert(response.error);
                }
            },
            error: function(xhr) {
                alert('Une erreur est survenue');
            }
        });
    });

    \$('#rejectReturnBtn').click(function() {
        \$('#confirmRejectModal').modal('show');
    });

    \$('#confirmRejectBtn').click(function() {
        let reason = \$('#rejectReason').val();
        \$.ajax({
            url: '/returns/' + returnId + '/reject',
            method: 'POST',
            data: { reason: reason },
            success: function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert(response.error);
                }
            },
            error: function(xhr) {
                alert('Une erreur est survenue');
            }
        });
    });

    \$('#completeReturnBtn').click(function() {
        \$('#confirmCompleteModal').modal('show');
    });

    \$('#confirmCompleteBtn').click(function() {
        \$.ajax({
            url: '/returns/' + returnId + '/complete',
            method: 'POST',
            success: function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert(response.error);
                }
            },
            error: function(xhr) {
                alert('Une erreur est survenue');
            }
        });
    });
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
        return array (  770 => 465,  764 => 462,  757 => 461,  679 => 386,  673 => 383,  669 => 381,  666 => 380,  660 => 377,  656 => 375,  654 => 374,  647 => 370,  628 => 354,  621 => 349,  611 => 345,  605 => 342,  598 => 338,  592 => 334,  586 => 330,  580 => 327,  577 => 326,  575 => 325,  568 => 321,  560 => 316,  553 => 312,  547 => 308,  543 => 306,  539 => 304,  536 => 303,  530 => 301,  528 => 300,  524 => 299,  519 => 296,  516 => 295,  513 => 294,  510 => 293,  507 => 292,  503 => 291,  494 => 284,  490 => 282,  486 => 280,  484 => 279,  475 => 272,  467 => 266,  465 => 265,  462 => 264,  451 => 255,  449 => 254,  436 => 243,  432 => 241,  430 => 240,  427 => 239,  425 => 238,  422 => 237,  420 => 236,  417 => 235,  415 => 234,  412 => 233,  410 => 232,  402 => 227,  391 => 218,  381 => 211,  376 => 209,  373 => 208,  367 => 204,  361 => 202,  359 => 201,  353 => 197,  351 => 196,  348 => 195,  338 => 188,  333 => 186,  330 => 185,  324 => 181,  318 => 179,  316 => 178,  310 => 174,  308 => 173,  299 => 167,  295 => 166,  292 => 165,  286 => 161,  280 => 159,  278 => 158,  264 => 147,  260 => 146,  251 => 140,  247 => 139,  240 => 134,  236 => 132,  234 => 131,  231 => 130,  229 => 129,  226 => 128,  224 => 127,  221 => 126,  219 => 125,  205 => 113,  197 => 109,  195 => 108,  189 => 105,  183 => 102,  178 => 100,  171 => 95,  164 => 94,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\show.html.twig");
    }
}
