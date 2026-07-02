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

/* return/index.html.twig */
class __TwigTemplate_45a1108a396f7fe0b061c9fe48686cf1 extends Template
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
        yield "Retours & Avoirs";
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .stats-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        transition: transform 0.2s, box-shadow 0.2s;
        cursor: pointer;
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .stats-card .card-body {
        padding: 1rem;
    }
    .stats-card i {
        opacity: 0.9;
        color: #0463f1;
    }
    .stats-card .text-warning i {
        color: #f59e0b;
    }
    .stats-card .text-primary i {
        color: #0463f1;
    }
    .stats-card .text-success i {
        color: #10b981;
    }
    
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
    
    .reason-badge {
        background: #f3f4f6;
        color: #4b5563;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 500;
        display: inline-block;
        white-space: normal;
        word-break: break-word;
        max-width: 150px;
        line-height: 1.3;
    }
    
    .filter-section {
        background: white;
        border-radius: 16px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        border: 1px solid #e5e7eb;
    }
    .return-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .return-row:hover {
        background-color: #f8f9fa;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 8px;
        min-height: 38px;
    }
    .order-result-item {
        transition: background 0.2s;
        border-left: 3px solid transparent;
    }
    .order-result-item:hover {
        background-color: #f8fafc;
    }
    .order-result-item.has-return {
        border-left-color: #f59e0b;
        background-color: #fffbeb;
    }
    .order-result-item.has-return:hover {
        background-color: #fef3c7;
    }
    
    .quick-filter-btn {
        transition: all 0.2s;
    }
    .quick-filter-btn:hover {
        transform: translateY(-2px);
    }
    .quick-filter-btn.active {
        background-color: #0463f1;
        color: white;
        border-color: #0463f1;
    }
    
    .confirm-modal-icon {
        width: 70px;
        height: 70px;
        background: #e8f4fd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    .confirm-modal-icon i {
        font-size: 2rem;
        color: #0463f1;
    }
    .confirm-modal-icon.warning {
        background: #fef3c7;
    }
    .confirm-modal-icon.warning i {
        color: #f59e0b;
    }
    .confirm-modal-icon.danger {
        background: #fee2e2;
    }
    .confirm-modal-icon.danger i {
        color: #dc2626;
    }
    .confirm-modal-icon.success {
        background: #dcfce7;
    }
    .confirm-modal-icon.success i {
        color: #16a34a;
    }

    .returns-table {
        min-width: 1000px;
    }
    .returns-table th,
    .returns-table td {
        vertical-align: middle;
    }
    .returns-table th:nth-child(1),
    .returns-table td:nth-child(1) { min-width: 40px; }
    .returns-table th:nth-child(2),
    .returns-table td:nth-child(2) { min-width: 130px; }
    .returns-table th:nth-child(3),
    .returns-table td:nth-child(3) { min-width: 160px; }
    .returns-table th:nth-child(4),
    .returns-table td:nth-child(4) { min-width: 180px; }
    .returns-table th:nth-child(5),
    .returns-table td:nth-child(5) { min-width: 100px; }
    .returns-table th:nth-child(6),
    .returns-table td:nth-child(6) { min-width: 140px; }
    .returns-table th:nth-child(7),
    .returns-table td:nth-child(7) { min-width: 150px; }
    .returns-table th:nth-child(8),
    .returns-table td:nth-child(8) { min-width: 160px; }
    .returns-table th:nth-child(9),
    .returns-table td:nth-child(9) { min-width: 110px; }
    .returns-table th:nth-child(10),
    .returns-table td:nth-child(10) { min-width: 150px; }

    .customer-info {
        white-space: normal;
        word-break: break-word;
    }
    .customer-name {
        font-weight: 500;
        margin-bottom: 0.25rem;
    }
    .customer-phone {
        font-size: 0.7rem;
        color: #6c757d;
    }
    .customer-phone i {
        font-size: 0.65rem;
    }

    .btn-group {
        display: flex;
        gap: 0.25rem;
    }
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
    
    /* Style pour la colonne checkbox */
    .checkbox-col {
        cursor: pointer;
    }
    .select-all-checkbox, .return-checkbox {
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    /* À ajouter dans les styles de index.html.twig */
    .returns-table {
        white-space: nowrap;  /* Empêche le retour à la ligne dans les cellules */
    }
    .returns-table td,
    .returns-table th {
        white-space: nowrap;  /* Force le texte à rester sur une ligne */
    }
    .returns-table .customer-info {
        white-space: normal;  /* Exception pour le nom du client qui peut être long */
        min-width: 180px;
        max-width: 200px;
    }
    .returns-table .reason-badge {
        white-space: normal;  /* Exception pour le motif qui peut être long */
        max-width: 150px;
    }
    
    /* Toolbar d'actions */
    .actions-toolbar {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    
    @media (max-width: 1200px) {
        .table-responsive {
            overflow-x: auto;
        }
    }
</style>
";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Retours & Avoirs
            </h1>
            <p class=\"text-muted\">Gérez les demandes de retour et les avoirs clients</p>
        </div>
        <div class=\"actions-toolbar\">
            <button type=\"button\" class=\"btn btn-outline-warning quick-filter-btn\" id=\"filterPendingBtn\">
                <i class=\"fas fa-clock me-1\"></i> En attente
            </button>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#selectOrderModal\">
                <i class=\"fas fa-plus-circle me-1\"></i> Nouveau retour
            </button>
            <button type=\"button\" id=\"printSelectedBtn\" class=\"btn btn-outline-info\" disabled>
                <i class=\"fas fa-print me-1\"></i> Imprimer sélection
            </button>
            <a href=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 260), "query", [], "any", false, false, false, 260), "all", [], "any", false, false, false, 260)), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\" target=\"_blank\">
                <i class=\"fas fa-file-pdf me-1\"></i> Exporter PDF
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"mb-4\">
        <div class=\"row g-3 mb-3\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1\">En attente</h6>
                                <h3 class=\"mb-0 text-warning\">";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", false, false, false, 275), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1\">Approuvés</h6>
                                <h3 class=\"mb-0 text-primary\">";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "approved", [], "any", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "approved", [], "any", false, false, false, 288), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1\">Remboursés</h6>
                                <h3 class=\"mb-0 text-success\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 301)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", false, false, false, 301), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-money-bill-wave fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1\">Rejetés</h6>
                                <h3 class=\"mb-0 text-danger\">";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "rejected", [], "any", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "rejected", [], "any", false, false, false, 314), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row g-3\">
            <div class=\"col-12\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1\">Total retours</h6>
                                <h3 class=\"mb-0\">";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_returns", [], "any", true, true, false, 329)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_returns", [], "any", false, false, false, 329), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-undo-alt fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section recherche et filtres avec ligne pointillée -->
    <div class=\"filter-section\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3 pb-2\" style=\"border-bottom: 2px dotted #e5e7eb;\">
            <div>
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"fw-semibold\">Filtres</span>
            </div>
            <div class=\"d-flex gap-2\">
                <button type=\"button\" id=\"resetFiltersBtn\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Réinitialiser
                </button>
                <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Appliquer les filtres
                </button>
            </div>
        </div>
        
        <div class=\"row g-3 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"form-label fw-bold small\">🔍 Recherche</label>
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"N° retour, n° commande, client...\" value=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 359), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-bold small\">📊 Statut</label>
                <select id=\"statusSelect\" class=\"form-select\">
                    <option value=\"all\" ";
        // line 364
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 364) == "all")) {
            yield "selected";
        }
        yield ">Tous les statuts</option>
                    <option value=\"pending\" ";
        // line 365
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 365) == "pending")) {
            yield "selected";
        }
        yield ">⏳ En attente</option>
                    <option value=\"approved\" ";
        // line 366
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 366) == "approved")) {
            yield "selected";
        }
        yield ">✓ Approuvés</option>
                    <option value=\"completed\" ";
        // line 367
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 367) == "completed")) {
            yield "selected";
        }
        yield ">✅ Remboursés</option>
                    <option value=\"rejected\" ";
        // line 368
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 368) == "rejected")) {
            yield "selected";
        }
        yield ">❌ Rejetés</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-bold small\">👤 Enregistré par</label>
                <select id=\"userSelect\" class=\"form-select select2\">
                    <option value=\"\">Tous les utilisateurs</option>
                    ";
        // line 375
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 376
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 376), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_id", [], "any", false, false, false, 376) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 376))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 377
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 378
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 378))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" width=\"20\" height=\"20\">
                            ";
            } else {
                // line 380
                yield "                                <i class=\"fas fa-user-circle me-1\"></i>
                            ";
            }
            // line 382
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 382), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 382), "html", null, true);
            yield ")
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        yield "                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-bold small\">📅 Date début</label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control\" value=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 389), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label fw-bold small\">📅 Date fin</label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control\" value=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 393), "html", null, true);
        yield "\">
            </div>
        </div>
    </div>

    <!-- Tableau des retours -->
    <div class=\"card\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <form id=\"multiplePrintForm\" action=\"";
        // line 402
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_print_multiple_receipts");
        yield "\" method=\"POST\" target=\"_blank\">
                    <table class=\"table table-hover mb-0 returns-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th class=\"text-center\">
                                    <input type=\"checkbox\" id=\"selectAllCheckbox\" class=\"select-all-checkbox\">
                                </th>
                                <th>N° Retour</th>
                                <th>N° Commande</th>
                                <th>Client</th>
                                <th>Date</th>
                                <th class=\"text-end\">Montant</th>
                                <th>Motif</th>
                                <th>Enregistré par</th>
                                <th>Statut</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["returns"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
            // line 422
            yield "                                <tr class=\"return-row\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 422)]), "html", null, true);
            yield "\">
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <input type=\"checkbox\" name=\"return_ids[]\" value=\"";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 424), "html", null, true);
            yield "\" class=\"return-checkbox\">
                                    </td>
                                    <td>
                                        <strong class=\"text-primary\">";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 427), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>
                                        <code>";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "orderNumber", [], "any", false, false, false, 430), "html", null, true);
            yield "</code>
                                    </td>
                                    <td>
                                        <div class=\"customer-info\">
                                            <div class=\"customer-name\">";
            // line 434
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerName", [], "any", false, false, false, 434)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerName", [], "any", false, false, false, 434), "html", null, true)) : ("Non renseigné"));
            yield "</div>
                                            <div class=\"customer-phone\">
                                                <i class=\"fas fa-phone me-1\"></i>";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerPhone", [], "any", false, false, false, 436), "html", null, true);
            yield "
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        ";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 441), "d/m/Y"), "html", null, true);
            yield "
                                        <br>
                                        <small class=\"text-muted\">";
            // line 443
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 443), "H:i"), "html", null, true);
            yield "</small>
                                    </td>
                                    <td class=\"text-end\">
                                        <strong>";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "totalRefundAmount", [], "any", false, false, false, 446), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                    <td>
                                        <span class=\"reason-badge\">
                                            ";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 450), [], "array", true, true, false, 450)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["reasons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 450)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 450))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 450))), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            ";
            // line 455
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 455), "photo", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 456), "photo", [], "any", false, false, false, 456))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" width=\"30\" height=\"30\">
                                            ";
            } else {
                // line 458
                yield "                                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 30px; height: 30px;\">
                                                    <i class=\"fas fa-user text-secondary\"></i>
                                                </div>
                                            ";
            }
            // line 462
            yield "                                            <div>
                                                <small>";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 463), "fullName", [], "any", false, false, false, 463), "html", null, true);
            yield "</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 468
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 468) == "pending")) {
                // line 469
                yield "                                            <span class=\"status-badge status-pending\">En attente</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 470
$context["return"], "status", [], "any", false, false, false, 470) == "approved")) {
                // line 471
                yield "                                            <span class=\"status-badge status-approved\">Approuvé</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 472
$context["return"], "status", [], "any", false, false, false, 472) == "completed")) {
                // line 473
                yield "                                            <span class=\"status-badge status-completed\">Remboursé</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 474
$context["return"], "status", [], "any", false, false, false, 474) == "rejected")) {
                // line 475
                yield "                                            <span class=\"status-badge status-rejected\">Rejeté</span>
                                        ";
            }
            // line 477
            yield "                                    </td>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 480)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_print_receipt", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 483)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Imprimer le reçu\" target=\"_blank\">
                                                <i class=\"fas fa-print\"></i>
                                            </a>
                                            ";
            // line 486
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 486) == "pending") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
                // line 487
                yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success approve-return\" 
                                                        data-id=\"";
                // line 488
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 488), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 488), "html", null, true);
                yield "\" title=\"Approuver\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger reject-return\" 
                                                        data-id=\"";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 492), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 492), "html", null, true);
                yield "\" title=\"Rejeter\">
                                                    <i class=\"fas fa-times\"></i>
                                                </button>
                                            ";
            }
            // line 496
            yield "                                            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 496) == "approved") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
                // line 497
                yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success complete-return\" 
                                                        data-id=\"";
                // line 498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 498), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 498), "html", null, true);
                yield "\" title=\"Confirmer remboursement\">
                                                    <i class=\"fas fa-money-bill-wave\"></i>
                                                </button>
                                            ";
            }
            // line 502
            yield "                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 505
        if (!$context['_iterated']) {
            // line 506
            yield "                                <tr>
                                    <td colspan=\"10\" class=\"text-center py-5\">
                                        <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                        <p class=\"text-muted mb-0\">Aucun retour trouvé</p>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        yield "                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        ";
        // line 518
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 519
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 522
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 523
                yield "                        <li class=\"page-item ";
                if (($context["i"] == ($context["currentPage"] ?? null))) {
                    yield "active";
                }
                yield "\">
                            <a class=\"page-link\" href=\"#\" data-page=\"";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 527
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 531
        yield "    </div>
</div>

<!-- Modal de sélection de commande pour nouveau retour -->
<div class=\"modal fade\" id=\"selectOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-search me-2\"></i> Sélectionner une commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <!-- 🔥 MESSAGE INFORMATIF STYLISÉ -->
                <div class=\"border-0 shadow-sm mb-3\" style=\"background-color: #fef3c7; border-left: 4px solid #f59e0b;\">
                    <div class=\"d-flex\">
                        <div class=\"me-3\">
                            <i class=\"fas fa-info-circle fa-2x text-warning\"></i>
                        </div>
                        <div>
                            <strong class=\"d-block\">Retours multiples autorisés !</strong>
                            <small>Les commandes avec un retour en cours peuvent encore être retournées s'il reste des quantités.<br>
                            Recherchez la commande, vérifiez le badge <span class=\"badge bg-info\">encore retournable(s)</span> et cliquez pour créer un nouveau retour.</small>
                        </div>
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\">Rechercher par numéro de commande ou téléphone client</label>
                    <div class=\"input-group\">
                        <input type=\"text\" id=\"orderSearchInput\" class=\"form-control\" placeholder=\"Ex: VENTE-20241215-ABC123 ou 691234567\" autocomplete=\"off\">
                        <button class=\"btn btn-primary\" id=\"searchOrderBtn\">
                            <i class=\"fas fa-search\"></i> Rechercher
                        </button>
                    </div>
                    <small class=\"text-muted mt-1 d-block\">Saisissez au moins 3 caractères</small>
                </div>
                <div id=\"orderSearchResults\" style=\"max-height: 400px; overflow-y: auto;\">
                    <div class=\"text-center text-muted py-4\">
                        <i class=\"fas fa-search fa-2x mb-2\"></i>
                        <p>Recherchez une commande pour créer un retour</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmCompleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-body text-center p-4\">
                <div class=\"confirm-modal-icon warning\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                </div>
                <h4 class=\"mb-2\">Confirmer le remboursement</h4>
                <p class=\"text-muted mb-3\">Êtes-vous sûr de vouloir confirmer le remboursement du retour <strong id=\"completeReturnNumber\"></strong> ?</p>
                <p class=\"small text-warning mb-0\">⚠️ Attention : Cette action remettra les produits en stock.</p>
            </div>
            <div class=\"modal-footer justify-content-center border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning\" id=\"confirmCompleteBtn\">Confirmer le remboursement</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 603
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 604
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
\$(document).ready(function() {
    \$('.select2').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        width: '100%'
    });

    \$('#filterPendingBtn').click(function() {
        \$('#statusSelect').val('pending').trigger('change');
        \$('#applyFiltersBtn').click();
    });

    // === GESTION DES CASES À COCHER ===
    function updatePrintButtonState() {
        var checkedCount = \$('.return-checkbox:checked').length;
        \$('#printSelectedBtn').prop('disabled', checkedCount === 0);
    }

    \$('#selectAllCheckbox').change(function() {
        \$('.return-checkbox').prop('checked', \$(this).prop('checked'));
        updatePrintButtonState();
    });

    \$(document).on('change', '.return-checkbox', function() {
        updatePrintButtonState();
        var allChecked = \$('.return-checkbox:checked').length === \$('.return-checkbox').length;
        \$('#selectAllCheckbox').prop('checked', allChecked);
    });

    \$('#printSelectedBtn').click(function() {
        var checkedCount = \$('.return-checkbox:checked').length;
        if (checkedCount === 0) {
            alert('Veuillez sélectionner au moins un retour à imprimer.');
            return;
        }
        \$('#multiplePrintForm').submit();
    });

    // === RECHERCHE DE COMMANDE ===
    let searchTimeout;
    let newReturnBaseUrl = \"";
        // line 648
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_new", ["orderId" => "ID_PLACEHOLDER"]);
        yield "\".replace('ID_PLACEHOLDER', '');

    function escapeHtml(text) {
        if (!text) return '';
        let div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function searchOrders() {
        let search = \$('#orderSearchInput').val();
        if (search.length < 3) {
            \$('#orderSearchResults').html(`
                <div class=\"text-center text-muted py-4\">
                    <i class=\"fas fa-search fa-2x mb-2\"></i>
                    <p>Saisissez au moins 3 caractères pour rechercher</p>
                </div>
            `);
            return;
        }
        
        \$('#orderSearchResults').html(`
            <div class=\"text-center py-4\">
                <div class=\"spinner-border text-primary\"></div>
                <p class=\"mt-2\">Recherche en cours...</p>
            </div>
        `);
        
        \$.ajax({
            url: '";
        // line 677
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_search_orders");
        yield "?q=' + encodeURIComponent(search),
            method: 'GET',
            success: function(orders) {
                if (orders.length === 0) {
                    \$('#orderSearchResults').html(`
                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-inbox fa-2x mb-2\"></i>
                            <p>Aucune commande trouvée</p>
                            <small>Vérifiez le numéro ou essayez avec le téléphone du client</small>
                        </div>
                    `);
                    return;
                }
                
                let html = '<div class=\"list-group\">';
                orders.forEach(function(order) {
                    // 🔥 MODIFICATION : Afficher les quantités retournées et restantes
                    let returnInfo = '';
                    if (order.has_return) {
                        returnInfo = `
                            <div class=\"mt-2\">
                                <span class=\"badge bg-warning me-1\">
                                    <i class=\"fas fa-undo-alt me-1\"></i>Retour en cours
                                </span>
                                \${order.remaining_items > 0 ? 
                                    `<span class=\"badge bg-info\">
                                        <i class=\"fas fa-boxes me-1\"></i>\${order.remaining_items} article(s) encore retournable(s)
                                    </span>` : 
                                    `<span class=\"badge bg-danger\">
                                        <i class=\"fas fa-ban me-1\"></i>Plus rien à retourner
                                    </span>`
                                }
                            </div>
                        `;
                    }
                    
                    let returnUrl = newReturnBaseUrl + order.id;
                    let isDisabled = order.has_return && order.remaining_items === 0;
                    
                    html += `
                        <a href=\"\${returnUrl}\" 
                        class=\"list-group-item list-group-item-action order-result-item \${order.has_return ? 'has-return' : ''}\" 
                        \${isDisabled ? 'onclick=\"return false;\" style=\"opacity:0.6; cursor:not-allowed;\"' : ''}>
                            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                                <div class=\"flex-grow-1\">
                                    <div>
                                        <strong class=\"text-primary\">\${escapeHtml(order.order_number)}</strong>
                                    </div>
                                    <div class=\"mt-1\">
                                        <i class=\"fas fa-user text-muted me-1\"></i>
                                        <strong>\${escapeHtml(order.customer_name || 'Client non renseigné')}</strong>
                                        \${order.customer_phone ? '<br><small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>' + escapeHtml(order.customer_phone) + '</small>' : ''}
                                    </div>
                                    \${returnInfo}
                                </div>
                                <div class=\"text-end\">
                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-calendar me-1\"></i>\${new Date(order.created_at).toLocaleDateString('fr-FR')}
                                    </div>
                                    <div class=\"mt-1\">
                                        <strong class=\"text-success fs-5\">\${order.total_amount.toLocaleString('fr-FR')} FCFA</strong>
                                    </div>
                                    \${order.already_returned_amount > 0 ? 
                                        `<small class=\"text-warning\">Déjà retourné: \${order.already_returned_amount.toLocaleString('fr-FR')} FCFA</small>` : ''
                                    }
                                </div>
                            </div>
                        </a>
                    `;
                });
                html += '</div>';
                \$('#orderSearchResults').html(html);
                
                // 🔥 MODIFICATION : Ne pas bloquer si des quantités restent
                \$('.order-result-item.has-return').click(function(e) {
                    let hasRemaining = \$(this).find('.badge.bg-info').length > 0;
                    if (!hasRemaining) {
                        e.preventDefault();
                        alert('Cette commande a déjà été entièrement retournée. Aucun article restant à retourner.');
                    }
                });
            },
            error: function() {
                \$('#orderSearchResults').html(`
                    <div class=\"text-center text-danger py-4\">
                        <i class=\"fas fa-exclamation-triangle fa-2x mb-2\"></i>
                        <p>Erreur lors de la recherche</p>
                        <small>Veuillez réessayer</small>
                    </div>
                `);
            }
        });
    }

    \$('#searchOrderBtn').click(searchOrders);
    \$('#orderSearchInput').keypress(function(e) {
        if (e.key === 'Enter') { e.preventDefault(); searchOrders(); }
    });
    \$('#orderSearchInput').on('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(searchOrders, 500);
    });
    \$('#selectOrderModal').on('shown.bs.modal', function() {
        \$('#orderSearchInput').val('').focus();
        \$('#orderSearchResults').html(`
            <div class=\"text-center text-muted py-4\">
                <i class=\"fas fa-search fa-2x mb-2\"></i>
                <p>Recherchez une commande pour créer un retour</p>
            </div>
        `);
    });

    // === FILTRES ===
    function applyFilters() {
        let params = new URLSearchParams();
        let search = \$('#searchInput').val();
        let status = \$('#statusSelect').val();
        let userId = \$('#userSelect').val();
        let dateFrom = \$('#dateFrom').val();
        let dateTo = \$('#dateTo').val();
        
        if (search) params.append('search', search);
        if (status && status !== 'all') params.append('status', status);
        if (userId) params.append('user_id', userId);
        if (dateFrom) params.append('date_from', dateFrom);
        if (dateTo) params.append('date_to', dateTo);
        
        window.location.href = '";
        // line 804
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "?' + params.toString();
    }

    \$('#applyFiltersBtn').click(applyFilters);
    \$('#resetFiltersBtn').click(function() {
        window.location.href = '";
        // line 809
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "';
    });

    // === PAGINATION ===
    \$('.page-link').click(function(e) {
        e.preventDefault();
        let page = \$(this).data('page');
        let params = new URLSearchParams(window.location.search);
        params.set('page', page);
        window.location.href = '";
        // line 818
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "?' + params.toString();
    });

    // === LIGNE CLIQUABLE ===
    \$('.return-row').click(function(e) {
        if (!\$(e.target).closest('.btn-group').length && !\$(e.target).closest('a').length && !\$(e.target).closest('input[type=\"checkbox\"]').length) {
            window.location.href = \$(this).data('href');
        }
    });

    // === ACTIONS AVEC EFFET DE CHARGEMENT ===
    let currentReturnId = null;
    let currentReturnNumber = null;
    let isProcessing = false;

    \$('#confirmApproveModal, #confirmRejectModal, #confirmCompleteModal').on('show.bs.modal', function(e) {
        \$(this).data('bs.modal')._config.backdrop = 'static';
        \$(this).data('bs.modal')._config.keyboard = false;
    });

    \$('.approve-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        \$('#approveReturnNumber').text(currentReturnNumber);
        \$('#confirmApproveBtn').prop('disabled', false).html('Approuver');
        \$('#confirmApproveModal').modal({backdrop: 'static', keyboard: false}).modal('show');
    });

    \$('#confirmApproveBtn').click(function() {
        if (isProcessing) return;
        var \$btn = \$(this);
        isProcessing = true;
        \$btn.prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...');
        
        \$.ajax({
            url: '/returns/' + currentReturnId + '/approve',
            method: 'POST',
            success: function(response) {
                if (response.success) location.reload();
                else { alert(response.error); resetAndHide(\$btn, '#confirmApproveModal'); }
            },
            error: function() { alert('Erreur'); resetAndHide(\$btn, '#confirmApproveModal'); }
        });
    });

    \$('.reject-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        \$('#rejectReturnNumber').text(currentReturnNumber);
        \$('#rejectReason').val('');
        \$('#confirmRejectBtn').prop('disabled', false).html('Rejeter');
        \$('#confirmRejectModal').modal({backdrop: 'static', keyboard: false}).modal('show');
    });

    \$('#confirmRejectBtn').click(function() {
        if (isProcessing) return;
        var \$btn = \$(this);
        isProcessing = true;
        \$btn.prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...');
        
        \$.ajax({
            url: '/returns/' + currentReturnId + '/reject',
            method: 'POST',
            data: { reason: \$('#rejectReason').val() },
            success: function(response) {
                if (response.success) location.reload();
                else { alert(response.error); resetAndHide(\$btn, '#confirmRejectModal'); }
            },
            error: function() { alert('Erreur'); resetAndHide(\$btn, '#confirmRejectModal'); }
        });
    });

    \$('.complete-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        \$('#completeReturnNumber').text(currentReturnNumber);
        \$('#confirmCompleteBtn').prop('disabled', false).html('Confirmer');
        \$('#confirmCompleteModal').modal({backdrop: 'static', keyboard: false}).modal('show');
    });

    \$('#confirmCompleteBtn').click(function() {
        if (isProcessing) return;
        var \$btn = \$(this);
        isProcessing = true;
        \$btn.prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...');
        
        \$.ajax({
            url: '/returns/' + currentReturnId + '/complete',
            method: 'POST',
            success: function(response) {
                if (response.success) location.reload();
                else { alert(response.error); resetAndHide(\$btn, '#confirmCompleteModal'); }
            },
            error: function() { alert('Erreur'); resetAndHide(\$btn, '#confirmCompleteModal'); }
        });
    });

    function resetAndHide(\$btn, modalId) {
        isProcessing = false;
        \$btn.prop('disabled', false).html(\$btn.data('original-text') || \$btn.text());
        \$(modalId).modal('hide');
    }
    
    \$('#confirmApproveBtn, #confirmRejectBtn, #confirmCompleteBtn').each(function() {
        \$(this).data('original-text', \$(this).html());
    });
    
    \$('#confirmApproveModal, #confirmRejectModal, #confirmCompleteModal').on('hidden.bs.modal', function() {
        isProcessing = false;
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
        return "return/index.html.twig";
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
        return array (  1126 => 818,  1114 => 809,  1106 => 804,  976 => 677,  944 => 648,  897 => 604,  890 => 603,  815 => 531,  809 => 527,  798 => 524,  791 => 523,  787 => 522,  782 => 519,  780 => 518,  773 => 513,  761 => 506,  759 => 505,  752 => 502,  743 => 498,  740 => 497,  737 => 496,  728 => 492,  719 => 488,  716 => 487,  714 => 486,  708 => 483,  702 => 480,  697 => 477,  693 => 475,  691 => 474,  688 => 473,  686 => 472,  683 => 471,  681 => 470,  678 => 469,  676 => 468,  668 => 463,  665 => 462,  659 => 458,  653 => 456,  651 => 455,  643 => 450,  636 => 446,  630 => 443,  625 => 441,  617 => 436,  612 => 434,  605 => 430,  599 => 427,  593 => 424,  587 => 422,  582 => 421,  560 => 402,  548 => 393,  541 => 389,  535 => 385,  523 => 382,  519 => 380,  513 => 378,  511 => 377,  502 => 376,  498 => 375,  486 => 368,  480 => 367,  474 => 366,  468 => 365,  462 => 364,  454 => 359,  421 => 329,  403 => 314,  387 => 301,  371 => 288,  355 => 275,  337 => 260,  315 => 240,  308 => 239,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\index.html.twig");
    }
}
