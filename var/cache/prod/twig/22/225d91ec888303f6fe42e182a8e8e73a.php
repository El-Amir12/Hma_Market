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

/* super_admin/analysis_price/show.html.twig */
class __TwigTemplate_24ddaba54a2d9b089d0f7577aa3a52c5 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "label", [], "any", false, false, false, 4), "html", null, true);
        yield " - Super Admin";
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
    .show-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
    }
    .show-header {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
    }
    .info-row {
        display: flex;
        padding: 0.75rem 0;
        border-bottom: 1px solid #e2e8f0;
        flex-wrap: wrap;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        width: 180px;
        font-weight: 600;
        color: #475569;
        flex-shrink: 0;
    }
    .info-value {
        flex: 1;
        color: #1e293b;
        word-break: break-word;
    }
    .price-badge {
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .status-badge {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.8rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
    }
    .status-active {
        background: #d1fae5;
        color: #065f46;
    }
    .status-inactive {
        background: #fee2e2;
        color: #991b1b;
    }
    .action-footer {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .type-badge {
        background: #f1f5f9;
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
        font-family: monospace;
        font-size: 0.85rem;
    }

    /* ========================================
       RESPONSIVE - MOBILE
    ======================================== */
    @media (max-width: 576px) {
        .container {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        
        .show-header {
            padding: 0.75rem !important;
        }
        .show-header .h4 {
            font-size: 1rem !important;
        }
        .show-header .h2 {
            font-size: 1.1rem !important;
        }
        .show-header .fa-2x {
            font-size: 1.5rem !important;
        }
        .show-header .opacity-75 {
            font-size: 0.7rem !important;
        }
        
        .show-card .p-4 {
            padding: 0.75rem !important;
        }
        
        .action-buttons .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .action-buttons .btn i {
            font-size: 0.6rem !important;
        }
        
        .info-row {
            padding: 0.5rem 0 !important;
            flex-direction: column !important;
            gap: 0.15rem !important;
        }
        .info-label {
            width: 100% !important;
            font-size: 0.7rem !important;
        }
        .info-value {
            font-size: 0.8rem !important;
            padding-left: 0.25rem !important;
        }
        .info-value .type-badge {
            font-size: 0.7rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .info-value .badge {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .info-value .text-muted {
            font-size: 0.65rem !important;
        }
        
        .price-badge {
            font-size: 1.3rem !important;
        }
        
        .status-badge {
            font-size: 0.6rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .status-badge i {
            font-size: 0.6rem !important;
        }
        
        .action-footer {
            flex-direction: column !important;
            gap: 0.5rem !important;
            margin-top: 1rem !important;
            padding-top: 1rem !important;
        }
        .action-footer .btn {
            width: 100% !important;
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
            justify-content: center !important;
        }
        .action-footer .btn i {
            font-size: 0.7rem !important;
        }
        
        .text-center.mb-4 {
            margin-bottom: 0.75rem !important;
        }
        
        /* MODALES */
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
            flex-wrap: wrap;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .modal-title {
            font-size: 0.9rem !important;
        }
        .modal-body p {
            font-size: 0.8rem !important;
        }
        .modal-body .alert {
            font-size: 0.75rem !important;
            padding: 0.5rem !important;
        }
    }

    /* Tablette */
    @media (min-width: 577px) and (max-width: 768px) {
        .container {
            padding-left: 16px !important;
            padding-right: 16px !important;
        }
        
        .show-header {
            padding: 1rem !important;
        }
        .show-header .h4 {
            font-size: 1.1rem !important;
        }
        
        .show-card .p-4 {
            padding: 1rem !important;
        }
        
        .info-label {
            font-size: 0.8rem !important;
        }
        .info-value {
            font-size: 0.85rem !important;
        }
        
        .price-badge {
            font-size: 1.6rem !important;
        }
        
        .action-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.3rem 0.8rem !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 246
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 247
        yield "<div class=\"container py-2 py-md-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-8 col-lg-7\">
            <div class=\"show-card shadow-sm\">
                <div class=\"show-header p-3 p-md-4 text-white\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                        <div>
                            <i class=\"fas fa-tag fa-2x mb-1 mb-md-2\"></i>
                            <h2 class=\"h4 mb-0 fw-bold\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "label", [], "any", false, false, false, 255), 0, 30), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "label", [], "any", false, false, false, 255)) > 30)) {
            yield "...";
        }
        yield "</h2>
                            <p class=\"mb-0 opacity-75 mt-1 small d-none d-sm-block\">Détail de l'offre d'analyse</p>
                            <p class=\"mb-0 opacity-75 mt-1 small d-block d-sm-none\">Détail offre</p>
                        </div>
                        <div class=\"action-buttons w-100 w-sm-auto\">
                            <a href=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "id", [], "any", false, false, false, 260)]), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm flex-grow-1 flex-sm-grow-0\">
                                <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                            </a>
                            <a href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_index");
        yield "\" class=\"btn btn-outline-light btn-sm flex-grow-1 flex-sm-grow-0\">
                                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class=\"p-3 p-md-4\">
                    <!-- Statut -->
                    <div class=\"text-center mb-3 mb-md-4\">
                        <div class=\"status-badge ";
        // line 273
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-active") : ("status-inactive"));
        yield "\">
                            <i class=\"fas ";
        // line 274
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 274)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                            <span class=\"d-none d-sm-inline\">";
        // line 275
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Offre active") : ("Offre inactive"));
        yield "</span>
                            <span class=\"d-inline d-sm-none\">";
        // line 276
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "</span>
                        </div>
                    </div>
                    
                    <!-- Informations -->
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-code me-2 text-primary\"></i> Type technique
                        </div>
                        <div class=\"info-value\">
                            <code class=\"type-badge\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "type", [], "any", false, false, false, 286), "html", null, true);
        yield "</code>
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-tag me-2 text-primary\"></i> Libellé
                        </div>
                        <div class=\"info-value fw-semibold\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "label", [], "any", false, false, false, 294), "html", null, true);
        yield "</div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-align-left me-2 text-primary\"></i> Description
                        </div>
                        <div class=\"info-value\">
                            ";
        // line 302
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "description", [], "any", true, true, false, 302)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "description", [], "any", false, false, false, 302), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-money-bill-wave me-2 text-primary\"></i> Prix
                        </div>
                        <div class=\"info-value\">
                            <span class=\"price-badge\">";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "priceFormatted", [], "any", false, false, false, 311), "html", null, true);
        yield "</span>
                            ";
        // line 312
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "type", [], "any", false, false, false, 312) == "subscription")) {
            // line 313
            yield "                                <small class=\"text-muted\">/mois</small>
                            ";
        }
        // line 315
        yield "                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-sort-numeric-down me-2 text-primary\"></i> Ordre d'affichage
                        </div>
                        <div class=\"info-value\">
                            <span class=\"badge bg-secondary\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "displayOrder", [], "any", true, true, false, 323)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "displayOrder", [], "any", false, false, false, 323), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-calendar-plus me-2 text-primary\"></i> Date de création
                        </div>
                        <div class=\"info-value\">
                            ";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "createdAt", [], "any", false, false, false, 332), "d/m/Y à H:i:s"), "html", null, true);
        yield "
                        </div>
                    </div>
                    
                    ";
        // line 336
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "updatedAt", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 337
            yield "                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-calendar-edit me-2 text-primary\"></i> Dernière modification
                        </div>
                        <div class=\"info-value\">
                            ";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "updatedAt", [], "any", false, false, false, 342), "d/m/Y à H:i:s"), "html", null, true);
            yield "
                        </div>
                    </div>
                    ";
        }
        // line 346
        yield "                    
                    <!-- Actions avec modal pour activation/désactivation -->
                    <div class=\"action-footer\">
                        <div class=\"w-100 w-sm-auto\">
                            <button type=\"button\" 
                                    class=\"btn ";
        // line 351
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-warning") : ("btn-success"));
        yield " w-100 w-sm-auto toggle-price-btn\"
                                    data-id=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "id", [], "any", false, false, false, 352), "html", null, true);
        yield "\"
                                    data-label=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "label", [], "any", false, false, false, 353), "html", null, true);
        yield "\"
                                    data-active=\"";
        // line 354
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 354)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
                                    data-token=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "id", [], "any", false, false, false, 355))), "html", null, true);
        yield "\">
                                <i class=\"fas ";
        // line 356
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 356)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-ban") : ("fa-check-circle"));
        yield " me-1\"></i>
                                ";
        // line 357
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "isActive", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "
                            </button>
                        </div>
                        <div class=\"w-100 w-sm-auto\">
                            <button type=\"button\" 
                                    class=\"btn btn-danger w-100 w-sm-auto delete-price-btn\"
                                    data-id=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "id", [], "any", false, false, false, 363), "html", null, true);
        yield "\"
                                    data-label=\"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "label", [], "any", false, false, false, 364), "html", null, true);
        yield "\"
                                    data-token=\"";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "id", [], "any", false, false, false, 365))), "html", null, true);
        yield "\">
                                <i class=\"fas fa-trash me-1\"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark py-2 py-md-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p id=\"toggleMessage\" class=\"small mb-0\"></p>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn btn-sm\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2 py-md-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small mb-0\">Supprimer l'offre <strong id=\"deleteLabel\"></strong> ?</p>
                <div class=\"alert alert-warning mt-2 p-2 small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Action irréversible.
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 433
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 434
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== MODALE SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteLabel = document.getElementById('deleteLabel');
    const deleteToken = document.getElementById('deleteToken');
    
    document.querySelectorAll('.delete-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const id = this.dataset.id;
            const label = this.dataset.label;
            const token = this.dataset.token;
            
            deleteLabel.textContent = label;
            deleteToken.value = token;
            deleteForm.action = '/super-admin/analysis-prices/' + id + '/delete';
            
            deleteModal.show();
        });
    });
    
    // ========== MODALE ACTIVATION/DÉSACTIVATION ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleModal'));
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleBtn = document.getElementById('toggleBtn');
    
    document.querySelectorAll('.toggle-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const id = this.dataset.id;
            const label = this.dataset.label;
            const isActive = this.dataset.active === 'true';
            const token = this.dataset.token;
            const newStatus = isActive ? 'désactiver' : 'activer';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong>\${newStatus}</strong> l'offre \"<strong>\${label}</strong>\" ?`;
            
            toggleBtn.className = isActive ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleToken.value = token;
            toggleForm.action = `/super-admin/analysis-prices/\${id}/toggle`;
            
            toggleModal.show();
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
        return "super_admin/analysis_price/show.html.twig";
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
        return array (  604 => 434,  597 => 433,  525 => 365,  521 => 364,  517 => 363,  508 => 357,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  477 => 346,  470 => 342,  463 => 337,  461 => 336,  454 => 332,  442 => 323,  432 => 315,  428 => 313,  426 => 312,  422 => 311,  410 => 302,  399 => 294,  388 => 286,  375 => 276,  371 => 275,  367 => 274,  363 => 273,  350 => 263,  344 => 260,  333 => 255,  323 => 247,  316 => 246,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/analysis_price/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\show.html.twig");
    }
}
