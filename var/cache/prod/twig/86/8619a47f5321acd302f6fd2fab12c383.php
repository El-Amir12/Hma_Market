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

/* super_admin/analysis/show.html.twig */
class __TwigTemplate_c1619b5fcdcb415c370649a778812698 extends Template
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
        yield "Analyse ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
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
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 1rem;
    }
    .status-badge {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
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
        background: #e5e7eb;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 1.5rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.5rem;
        top: 0.25rem;
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background: #0463f1;
        border: 2px solid white;
        box-shadow: 0 0 0 2px #e5e7eb;
    }
    .timeline-item.completed::before {
        background: #10b981;
    }
    .timeline-item.pending::before {
        background: #f59e0b;
    }
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .payment-link {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 0.75rem;
        padding: 1rem;
    }
    .payment-link input {
        font-size: 0.8rem;
        font-family: monospace;
    }
    .payment-details {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-top: 1rem;
    }
    .payment-details pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.7rem;
        overflow-x: auto;
        max-height: 200px;
    }
    .company-logo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        background: white;
        padding: 5px;
    }
    .company-initials {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .modal-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    .btn-loading {
        pointer-events: none;
        opacity: 0.7;
    }
    .report-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1rem;
        color: white;
    }
    .report-card .btn {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
    }
    .report-card .btn:hover {
        background: rgba(255,255,255,0.3);
    }
    .upload-form {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
        margin-top: 1rem;
    }
</style>
";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 153), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                Analyse #";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 158), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"action-buttons\">
            <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche -->
        <div class=\"col-xl-7\">
            <!-- Informations générales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">N° Demande</small>
                                <div class=\"fw-bold fs-5\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 184), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "createdAt", [], "any", false, false, false, 190), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Type d'analyse</small>
                                <div class=\"fw-bold\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "typeLabel", [], "any", false, false, false, 196), "html", null, true);
        yield "</div>
                                <small class=\"text-muted\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "amountFormatted", [], "any", false, false, false, 197), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut</small>
                                <div>
                                    <span class=\"badge ";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "statusBadgeClass", [], "any", false, false, false, 204), "html", null, true);
        yield " status-badge\">
                                        <i class=\"fas ";
        // line 205
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 205) == "completed")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 205) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 205) == "processing")) ? ("fa-spinner fa-pulse") : ("fa-times-circle"))))));
        yield " me-1\"></i>
                                        ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "statusLabel", [], "any", false, false, false, 206), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période analysée</small>
                                <div class=\"fw-bold\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "periodStart", [], "any", false, false, false, 214), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "periodEnd", [], "any", false, false, false, 214), "d/m/Y"), "html", null, true);
        yield "</div>
                                ";
        // line 215
        $context["daysCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "periodStart", [], "any", false, false, false, 215), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "periodEnd", [], "any", false, false, false, 215)], "method", false, false, false, 215), "days", [], "any", false, false, false, 215);
        // line 216
        yield "                                <small class=\"text-muted\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysCount"] ?? null), "html", null, true);
        yield " jours de données</small>
                            </div>
                        </div>
                        ";
        // line 219
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "notes", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Notes / Instructions</small>
                                <div class=\"mt-1\">";
            // line 223
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "notes", [], "any", false, false, false, 223), "html", null, true));
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 227
        yield "                    </div>
                </div>
            </div>

            <!-- Chronologie -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-history me-2 text-primary\"></i>
                        Chronologie
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"timeline\">
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Demande créée</div>
                            <small class=\"text-muted\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "createdAt", [], "any", false, false, false, 243), "d/m/Y H:i:s"), "html", null, true);
        yield "</small>
                            <div class=\"text-muted small\">Demande enregistrée avec succès</div>
                        </div>
                        
                        ";
        // line 247
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paidAt", [], "any", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 248
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Paiement reçu</div>
                            <small class=\"text-muted\">";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paidAt", [], "any", false, false, false, 250), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Transaction #";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", false, false, false, 251), "html", null, true);
            yield "</div>
                        </div>
                        ";
        } else {
            // line 254
            yield "                        <div class=\"timeline-item pending\">
                            <div class=\"fw-bold\">En attente de paiement</div>
                            <small class=\"text-muted\">Expire le ";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "expiresAt", [], "any", false, false, false, 256), "d/m/Y"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Générer le lien de paiement ci-dessous</div>
                        </div>
                        ";
        }
        // line 260
        yield "                        
                        ";
        // line 261
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportedAt", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 262
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Données brutes exportées</div>
                            <small class=\"text-muted\">";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportedAt", [], "any", false, false, false, 264), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Fichier ZIP disponible</div>
                        </div>
                        ";
        }
        // line 268
        yield "                        
                        ";
        // line 269
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportUploadedAt", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 270
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Rapport final uploadé</div>
                            <small class=\"text-muted\">";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportUploadedAt", [], "any", false, false, false, 272), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Type: ";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportType", [], "any", false, false, false, 273)), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 276
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite -->
        <div class=\"col-xl-5\">
            <!-- Entreprise -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-building me-2 text-primary\"></i>
                        Entreprise
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-3\">
                        ";
        // line 293
        $context["logoPath"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 293), "logo", [], "any", false, false, false, 293);
        // line 294
        yield "                        ";
        if ((($context["logoPath"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(($context["logoPath"] ?? null)))) {
            // line 295
            yield "                            ";
            if ((is_string($_v0 = ($context["logoPath"] ?? null)) && is_string($_v1 = "uploads/") && str_starts_with($_v0, $_v1))) {
                // line 296
                yield "                                ";
                $context["logoFullPath"] = ($context["logoPath"] ?? null);
                // line 297
                yield "                            ";
            } elseif ((is_string($_v2 = ($context["logoPath"] ?? null)) && is_string($_v3 = "/") && str_starts_with($_v2, $_v3))) {
                // line 298
                yield "                                ";
                $context["logoFullPath"] = ($context["logoPath"] ?? null);
                // line 299
                yield "                            ";
            } else {
                // line 300
                yield "                                ";
                $context["logoFullPath"] = ("uploads/logos/" . ($context["logoPath"] ?? null));
                // line 301
                yield "                            ";
            }
            // line 302
            yield "                            
                            ";
            // line 303
            if ((is_string($_v4 = ($context["logoFullPath"] ?? null)) && is_string($_v5 = "/") && str_starts_with($_v4, $_v5))) {
                // line 304
                yield "                                ";
                $context["logoUrl"] = ($context["logoFullPath"] ?? null);
                // line 305
                yield "                            ";
            } else {
                // line 306
                yield "                                ";
                $context["logoUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["logoFullPath"] ?? null));
                // line 307
                yield "                            ";
            }
            // line 308
            yield "                            
                            <img src=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logoUrl"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 309), "companyName", [], "any", false, false, false, 309), "html", null, true);
            yield "\" class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 310), "companyName", [], "any", false, false, false, 310), 0, 2)), "html", null, true);
            yield "</div>';\">
                        ";
        } else {
            // line 312
            yield "                            <div class=\"company-initials\">
                                ";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 313), "companyName", [], "any", false, false, false, 313), 0, 2)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 316
        yield "                    </div>
                    <div class=\"text-center mb-3\">
                        <h5 class=\"mb-0\">";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 318), "companyName", [], "any", false, false, false, 318), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 319), "subscriptionNumber", [], "any", false, false, false, 319), "html", null, true);
        yield "</small>
                    </div>
                    <div class=\"row g-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Type</span>
                                <span>";
        // line 325
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 325), "type", [], "any", false, false, false, 325) == "restaurant")) ? ("🍽️ Restaurant") : ("🛒 Commerce"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Email</span>
                                <span>";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 331), "email", [], "any", false, false, false, 331), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Téléphone</span>
                                <span>";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, true, false, 337), "phone", [], "any", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 337), "phone", [], "any", false, false, false, 337), "—")) : ("—")), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Date création</span>
                                <span>";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 343), "createdAt", [], "any", false, false, false, 343), "d/m/Y"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, false, false, 348), "id", [], "any", false, false, false, 348)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary w-100\">
                            <i class=\"fas fa-eye me-1\"></i> Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            <!-- Actions principales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Actions
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 365
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 365) == "pending")) {
            // line 366
            yield "                        <div class=\"payment-link mb-3\">
                            <div class=\"fw-bold mb-2\">🔗 Lien de paiement</div>
                            <div class=\"input-group mb-2\">
                                <input type=\"text\" id=\"paymentLinkInput\" class=\"form-control form-control-sm\" readonly>
                                <button class=\"btn btn-sm btn-primary\" id=\"copyPaymentLinkBtn\" title=\"Copier le lien\">
                                    <i class=\"fas fa-copy\"></i>
                                </button>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button class=\"btn btn-sm btn-success w-100\" id=\"generatePaymentLinkBtn\">
                                    <i class=\"fas fa-credit-card me-1\"></i> Générer le lien
                                </button>
                                <button class=\"btn btn-sm btn-info w-100\" id=\"sendEmailLinkBtn\" style=\"display: none;\">
                                    <i class=\"fas fa-envelope me-1\"></i> Envoyer par email
                                </button>
                            </div>
                        </div>
                        <div class=\"alert alert-warning small\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i>
                            Ce lien expirera le ";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "expiresAt", [], "any", false, false, false, 385), "d/m/Y"), "html", null, true);
            yield ".
                        </div>
                    ";
        }
        // line 388
        yield "                    
                    ";
        // line 390
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 390) == "paid")) {
            // line 391
            yield "                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Le paiement a été confirmé. Vous pouvez maintenant exporter les données brutes.
                        </div>
                        <button type=\"button\" class=\"btn btn-primary w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmGenerateRawModal\">
                            <i class=\"fas fa-database me-1\"></i> Exporter les données brutes (ZIP)
                        </button>
                    ";
        }
        // line 399
        yield "                    
                    ";
        // line 401
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 401) == "processing") && CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportPath", [], "any", false, false, false, 401))) {
            // line 402
            yield "                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            Les données brutes sont prêtes.
                        </div>
                        
                        <!-- Télécharger données brutes -->
                        <a href=\"";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 408)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary w-100 mb-3\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger les données brutes (ZIP)
                        </a>
                        
                        <hr>
                        
                        <div class=\"fw-bold mb-3\">📤 Uploader le rapport final</div>
                        <form method=\"post\" action=\"";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_upload_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 415)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" class=\"upload-form\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Sélectionner le fichier</label>
                                <input type=\"file\" name=\"report\" class=\"form-control\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required>
                                <small class=\"text-muted d-block mt-1\">Formats acceptés: Excel (.xlsx), Power BI (.pbix), PDF, ZIP</small>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-1\"></i> Uploader le rapport final
                            </button>
                        </form>
                    ";
        }
        // line 426
        yield "                    
                    ";
        // line 428
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 428) == "completed")) {
            // line 429
            yield "                        <div class=\"report-card\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <i class=\"fas fa-file-alt fa-2x me-2\"></i>
                                    <strong>Rapport final</strong>
                                    <div class=\"small\">";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportFilename", [], "any", false, false, false, 434), "html", null, true);
            yield "</div>
                                    <div class=\"small opacity-75\">Uploadé le ";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportUploadedAt", [], "any", false, false, false, 435), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                                </div>
                                <div class=\"btn-group-vertical\">
                                    <a href=\"";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 438)]), "html", null, true);
            yield "\" class=\"btn btn-sm mb-1\">
                                        <i class=\"fas fa-download\"></i> Télécharger
                                    </a>
                                    <button type=\"button\" class=\"btn btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmReplaceModal\">
                                        <i class=\"fas fa-sync-alt\"></i> Remplacer
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            L'entreprise peut maintenant télécharger son rapport.
                        </div>
                        
                        <a href=\"";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 455)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary w-100\">
                            <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                        </a>
                    ";
        }
        // line 459
        yield "                    
                    ";
        // line 461
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 461) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportPath", [], "any", false, false, false, 461))) {
            // line 462
            yield "                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-spinner fa-pulse me-1\"></i>
                            Génération des données brutes en cours...
                        </div>
                        <div class=\"progress mb-3\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width: 100%\">Génération...</div>
                        </div>
                        <button type=\"button\" class=\"btn btn-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmCancelModal\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    ";
        }
        // line 473
        yield "                    
                    ";
        // line 475
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 475) == "failed")) {
            // line 476
            yield "                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Une erreur est survenue.
                        </div>
                        <button type=\"button\" class=\"btn btn-warning w-100 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmRetryModal\">
                            <i class=\"fas fa-sync me-1\"></i> Réessayer
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmForcePaidModal\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Forcer le statut à \"Payé\"
                        </button>
                    ";
        }
        // line 487
        yield "                </div>
            </div>

            <!-- Détails du paiement -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Détails du paiement
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 499
        $context["payment"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["payments"] ?? null));
        // line 500
        yield "                    
                    ";
        // line 501
        if ((($tmp = ($context["payment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 502
            yield "                    <div class=\"row g-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">ID Transaction</span>
                                <span class=\"fw-bold\">";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "transactionId", [], "any", false, false, false, 506), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Date de paiement</span>
                                <span>";
            // line 512
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paidAt", [], "any", false, false, false, 512)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paidAt", [], "any", false, false, false, 512), "d/m/Y H:i:s"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paidAt", [], "any", false, false, false, 512), "d/m/Y H:i:s"), "html", null, true)));
            yield "</span>
                            </div>
                        </div>
                        
                        ";
            // line 517
            yield "                        ";
            if ((($context["subtotal"] ?? null) > 0)) {
                // line 518
                yield "                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Sous-total</span>
                                <span>";
                // line 521
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["subtotal"] ?? null), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                            </div>
                        </div>
                        ";
            }
            // line 525
            yield "                        
                        ";
            // line 527
            yield "                        ";
            if ((($context["tax_amount"] ?? null) > 0)) {
                // line 528
                yield "                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">
                                    Frais de transaction
                                    ";
                // line 532
                if ((($context["tax_rate"] ?? null) > 0)) {
                    yield "(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tax_rate"] ?? null), "html", null, true);
                    yield "%)";
                }
                // line 533
                yield "                                </span>
                                <span>";
                // line 534
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["tax_amount"] ?? null), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                            </div>
                        </div>
                        ";
            }
            // line 538
            yield "                        
                        ";
            // line 540
            yield "                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Montant total payé</span>
                                <span class=\"fw-bold text-success\">";
            // line 543
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "amountFormatted", [], "any", false, false, false, 543), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Statut</span>
                                <span><span class=\"badge bg-success\">";
            // line 550
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "statusLabel", [], "any", false, false, false, 550), "html", null, true);
            yield "</span></span>
                            </div>
                        </div>
                        
                        ";
            // line 555
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 555) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, true, false, 555), "mode", [], "any", true, true, false, 555))) {
                // line 556
                yield "                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Mode de paiement</span>
                                <span>
                                    ";
                // line 560
                $context["mode"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 560), "mode", [], "any", false, false, false, 560);
                // line 561
                yield "                                    ";
                if (((($context["mode"] ?? null) == "momo_test") || (($context["mode"] ?? null) == "momo"))) {
                    // line 562
                    yield "                                        Mobile Money
                                    ";
                } elseif (((                // line 563
($context["mode"] ?? null) == "card_test") || (($context["mode"] ?? null) == "card"))) {
                    // line 564
                    yield "                                        Carte bancaire
                                    ";
                } else {
                    // line 566
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["mode"] ?? null), ["_test" => ""])), "html", null, true);
                    yield "
                                    ";
                }
                // line 568
                yield "                                </span>
                            </div>
                        </div>
                        ";
            }
            // line 572
            yield "                    </div>
                    
                    ";
            // line 575
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 575) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 575), "id", [], "any", false, false, false, 575))) {
                // line 576
                yield "                    <div class=\"mt-3 pt-2 border-top\">
                        <details>
                            <summary class=\"text-muted small\" style=\"cursor: pointer;\">
                                <i class=\"fas fa-info-circle me-1\"></i> Détails complets de la transaction
                            </summary>
                            <div class=\"mt-2 p-2 bg-light rounded small\">
                                <strong>ID FedaPay:</strong> ";
                // line 582
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 582), "id", [], "any", false, false, false, 582), "html", null, true);
                yield "<br>
                                ";
                // line 583
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, true, false, 583), "currency", [], "any", true, true, false, 583)) {
                    // line 584
                    yield "                                <strong>Devise:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 584), "currency", [], "any", false, false, false, 584), "html", null, true);
                    yield "<br>
                                ";
                }
                // line 586
                yield "                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, true, false, 586), "mode", [], "any", true, true, false, 586)) {
                    // line 587
                    yield "                                <strong>Mode:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 587), "mode", [], "any", false, false, false, 587), "html", null, true);
                    yield "<br>
                                ";
                }
                // line 589
                yield "                                <strong>Données brutes:</strong>
                                <pre class=\"mt-1 mb-0 small\" style=\"font-size: 0.65rem; overflow-x: auto;\">";
                // line 590
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 590), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
                yield "</pre>
                            </div>
                        </details>
                    </div>
                    ";
            }
            // line 595
            yield "                    
                    ";
        } else {
            // line 597
            yield "                    <div class=\"alert alert-info mb-0\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Aucun paiement enregistré.
                    </div>
                    ";
        }
        // line 602
        yield "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 609
        yield "
";
        // line 611
        yield "<div class=\"modal fade\" id=\"confirmGenerateRawModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-database me-2\"></i>
                    Export des données brutes
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"modal-icon bg-primary bg-opacity-10\">
                    <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                </div>
                <p class=\"mb-3\">
                    <strong>Confirmez-vous l'export des données brutes ?</strong>
                </p>
                <div class=\"alert alert-info text-start small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette opération peut prendre plusieurs minutes. Vous recevrez un fichier ZIP contenant toutes les données au format Excel.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmGenerateRawBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 644
        yield "<div class=\"modal fade\" id=\"confirmReplaceModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" action=\"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_replace_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 647)]), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" id=\"replaceReportFormModal\">
                <div class=\"modal-header bg-warning\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-sync-alt me-2\"></i>
                        Remplacer le rapport
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>Voulez-vous remplacer le rapport actuel ?</p>
                    <div class=\"alert alert-warning small\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        L'ancien fichier sera supprimé définitivement.
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Nouveau fichier</label>
                            <input type=\"file\" name=\"report\" class=\"form-control\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required>
                            <small class=\"text-muted d-block mt-1\">Formats acceptés: Excel (.xlsx), Power BI (.pbix), PDF, ZIP</small>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-warning\">
                        <i class=\"fas fa-sync-alt me-1\"></i> Remplacer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        // line 679
        yield "<div class=\"modal fade\" id=\"confirmRetryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title\">Réessayer</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous réessayer de générer l'analyse ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning\" id=\"confirmRetryBtn\">Réessayer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 698
        yield "<div class=\"modal fade\" id=\"confirmForcePaidModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Forcer le statut à \"Payé\"</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Attention ! Cette action est irréversible.</p>
                <div class=\"alert alert-danger small\">Assurez-vous que le paiement a bien été effectué.</div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmForcePaidBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 718
        yield "<div class=\"modal fade\" id=\"confirmCancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Annuler la génération</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous vraiment annuler la génération ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Non</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmCancelBtn\">Oui, annuler</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 737
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 738
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const analysisId = ";
        // line 741
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 741), "html", null, true);
        yield ";
    
    // ==================== GÉNÉRATION EXPORT BRUT ====================
    const generateRawBtn = document.getElementById('confirmGenerateRawBtn');
    if (generateRawBtn) {
        generateRawBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_generate_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 749)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            generateRawBtn.disabled = true;
            generateRawBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Génération...';
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmGenerateRawModal'));
            modal.hide();
            form.submit();
        });
    }
    
    // ==================== AUTRES ACTIONS ====================
    const retryBtn = document.getElementById('confirmRetryBtn');
    if (retryBtn) {
        retryBtn.addEventListener('click', () => {
            window.location.href = '";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_retry", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 764)]), "html", null, true);
        yield "';
        });
    }
    
    const forcePaidBtn = document.getElementById('confirmForcePaidBtn');
    if (forcePaidBtn) {
        forcePaidBtn.addEventListener('click', () => {
            window.location.href = '";
        // line 771
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_force_to_paid", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 771)]), "html", null, true);
        yield "';
        });
    }
    
    const cancelBtn = document.getElementById('confirmCancelBtn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 780)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    // ==================== LIEN DE PAIEMENT ====================
    const generateLinkBtn = document.getElementById('generatePaymentLinkBtn');
    const sendEmailBtn = document.getElementById('sendEmailLinkBtn');
    const paymentLinkInput = document.getElementById('paymentLinkInput');
    const copyBtn = document.getElementById('copyPaymentLinkBtn');
    
    if (generateLinkBtn && ";
        // line 792
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 792) == "pending")) ? ("true") : ("false"));
        yield ") {
        generateLinkBtn.addEventListener('click', async () => {
            generateLinkBtn.disabled = true;
            generateLinkBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Génération...';
            
            const response = await fetch('";
        // line 797
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 797)]), "html", null, true);
        yield "');
            const data = await response.json();
            
            if (data.payment_url && data.payment_url !== '#') {
                paymentLinkInput.value = data.payment_url;
                generateLinkBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Lien généré';
                sendEmailBtn.style.display = 'block';
                showToast('success', 'Lien généré avec succès');
            } else {
                generateLinkBtn.innerHTML = '<i class=\"fas fa-credit-card me-1\"></i> Générer le lien';
                showToast('error', 'Erreur lors de la génération');
            }
            generateLinkBtn.disabled = false;
        });
    }
    
    if (sendEmailBtn) {
        sendEmailBtn.addEventListener('click', async () => {
            const paymentLink = paymentLinkInput.value;
            if (!paymentLink) {
                showToast('error', 'Générez d\\'abord le lien');
                return;
            }
            
            sendEmailBtn.disabled = true;
            sendEmailBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Envoi...';
            
            const response = await fetch('";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_send_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 824)]), "html", null, true);
        yield "', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ payment_link: paymentLink })
            });
            const data = await response.json();
            
            if (data.success) {
                showToast('success', 'Email envoyé avec succès');
                sendEmailBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Email envoyé';
            } else {
                showToast('error', data.error || 'Erreur');
                sendEmailBtn.innerHTML = '<i class=\"fas fa-envelope me-1\"></i> Envoyer par email';
                sendEmailBtn.disabled = false;
            }
        });
    }
    
    if (copyBtn) {
        copyBtn.addEventListener('click', () => {
            paymentLinkInput.select();
            document.execCommand('copy');
            showToast('success', 'Lien copié');
        });
    }
    
    function showToast(type, message) {
        const toast = document.createElement('div');
        toast.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'success' ? 'success' : 'danger'} text-white rounded shadow`;
        toast.style.zIndex = '9999';
        toast.style.cursor = 'pointer';
        toast.innerHTML = `<i class=\"fas fa-\${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2\"></i>\${message}`;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
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
        return "super_admin/analysis/show.html.twig";
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
        return array (  1239 => 824,  1209 => 797,  1201 => 792,  1186 => 780,  1174 => 771,  1164 => 764,  1146 => 749,  1135 => 741,  1129 => 738,  1122 => 737,  1100 => 718,  1079 => 698,  1059 => 679,  1025 => 647,  1020 => 644,  986 => 611,  983 => 609,  975 => 602,  968 => 597,  964 => 595,  956 => 590,  953 => 589,  947 => 587,  944 => 586,  938 => 584,  936 => 583,  932 => 582,  924 => 576,  921 => 575,  917 => 572,  911 => 568,  905 => 566,  901 => 564,  899 => 563,  896 => 562,  893 => 561,  891 => 560,  885 => 556,  882 => 555,  875 => 550,  865 => 543,  860 => 540,  857 => 538,  850 => 534,  847 => 533,  841 => 532,  835 => 528,  832 => 527,  829 => 525,  822 => 521,  817 => 518,  814 => 517,  807 => 512,  798 => 506,  792 => 502,  790 => 501,  787 => 500,  785 => 499,  771 => 487,  758 => 476,  755 => 475,  752 => 473,  739 => 462,  736 => 461,  733 => 459,  726 => 455,  706 => 438,  700 => 435,  696 => 434,  689 => 429,  686 => 428,  683 => 426,  669 => 415,  659 => 408,  651 => 402,  648 => 401,  645 => 399,  635 => 391,  632 => 390,  629 => 388,  623 => 385,  602 => 366,  599 => 365,  580 => 348,  572 => 343,  563 => 337,  554 => 331,  545 => 325,  536 => 319,  532 => 318,  528 => 316,  522 => 313,  519 => 312,  514 => 310,  508 => 309,  505 => 308,  502 => 307,  499 => 306,  496 => 305,  493 => 304,  491 => 303,  488 => 302,  485 => 301,  482 => 300,  479 => 299,  476 => 298,  473 => 297,  470 => 296,  467 => 295,  464 => 294,  462 => 293,  443 => 276,  437 => 273,  433 => 272,  429 => 270,  427 => 269,  424 => 268,  417 => 264,  413 => 262,  411 => 261,  408 => 260,  401 => 256,  397 => 254,  391 => 251,  387 => 250,  383 => 248,  381 => 247,  374 => 243,  356 => 227,  349 => 223,  344 => 220,  342 => 219,  335 => 216,  333 => 215,  327 => 214,  316 => 206,  312 => 205,  308 => 204,  298 => 197,  294 => 196,  285 => 190,  276 => 184,  251 => 162,  244 => 158,  236 => 153,  229 => 149,  221 => 143,  214 => 142,  75 => 7,  68 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/analysis/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis\\show.html.twig");
    }
}
