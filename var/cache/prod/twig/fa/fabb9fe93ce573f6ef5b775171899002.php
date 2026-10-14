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

/* stock/inventory/count.html.twig */
class __TwigTemplate_e2c02937389e5af92a792ec01eb76c8d extends Template
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
        yield "Comptage - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
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
/* ============================================
   ÉTAPES
   ============================================ */
.steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    position: relative;
    padding: 0 1rem;
}

.step {
    text-align: center;
    flex: 1;
    position: relative;
    z-index: 1;
}

.step-circle {
    width: 44px;
    height: 44px;
    background: #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.5rem;
    font-weight: 700;
    color: #6c757d;
    font-size: 1rem;
    border: 3px solid white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.step.active .step-circle {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.step.completed .step-circle {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.step-label {
    font-size: 0.75rem;
    color: #6c757d;
    font-weight: 500;
}

.step.active .step-label {
    color: #667eea;
    font-weight: 700;
}

.step.completed .step-label {
    color: #10b981;
    font-weight: 600;
}

.steps-line {
    position: absolute;
    top: 22px;
    left: 10%;
    right: 10%;
    height: 3px;
    background: #e9ecef;
    z-index: 0;
}

/* ============================================
   CARTE INVENTAIRE
   ============================================ */
.inventory-info {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 20px;
    padding: 1.5rem 2rem;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.inventory-info h3 {
    font-weight: 800;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
}

.inventory-info .badge {
    background: rgba(255, 255, 255, 0.25) !important;
    color: white !important;
    font-weight: 600;
    padding: 0.4rem 0.9rem;
    border-radius: 2rem;
    font-size: 0.8rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
}

/* ============================================
   PROGRESSION
   ============================================ */
.progress-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    margin-bottom: 1.5rem;
    border: 1px solid #e9ecef;
}

.progress-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.progress-info h5 {
    margin: 0;
    font-weight: 700;
    font-size: 1rem;
}

.progress-info .progress-stats {
    display: flex;
    gap: 1rem;
}

.progress-info .stat {
    text-align: center;
}

.progress-info .stat .value {
    font-size: 1.25rem;
    font-weight: 800;
    color: #667eea;
    line-height: 1;
}

.progress-info .stat .label {
    font-size: 0.7rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.progress {
    height: 12px;
    border-radius: 10px;
    background: #f1f5f9;
    overflow: hidden;
}

.progress-bar {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 10px;
    transition: width 0.5s ease;
    position: relative;
}

.progress-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* ============================================
   TABLEAU DE COMPTAGE
   ============================================ */
.count-table-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
}

.count-table {
    margin: 0;
    width: 100%;
}

.count-table thead {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    position: sticky;
    top: 0;
    z-index: 10;
}

.count-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
}

.count-table tbody tr {
    transition: all 0.2s;
    border-bottom: 1px solid #f1f5f9;
}

.count-table tbody tr:hover {
    background: #f8fafc;
}

.count-table tbody td {
    padding: 1rem;
    vertical-align: middle;
}

.product-info {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.product-avatar {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1rem;
}

.product-name {
    font-weight: 600;
    color: #1e293b;
    font-size: 0.9rem;
}

.product-barcode {
    font-size: 0.75rem;
    color: #94a3b8;
    font-family: 'Courier New', monospace;
}

.quantity-badge {
    display: inline-block;
    padding: 0.35rem 0.75rem;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.85rem;
}

.quantity-badge.expected {
    background: #eef2ff;
    color: #4f46e5;
}

.count-input {
    width: 120px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 0.5rem 0.75rem;
    font-weight: 700;
    font-size: 1rem;
    text-align: center;
    transition: all 0.3s;
}

.count-input:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.difference-badge {
    font-weight: 700;
    padding: 0.35rem 0.75rem;
    border-radius: 8px;
    font-size: 0.85rem;
    display: inline-block;
}

.difference-badge.positive {
    background: #dcfce7;
    color: #16a34a;
}

.difference-badge.negative {
    background: #fee2e2;
    color: #dc2626;
}

.difference-badge.zero {
    background: #f1f5f9;
    color: #64748b;
}

/* ============================================
   BOUTON SUPPRESSION LIGNE
   ============================================ */
.btn-remove-item {
    width: 36px;
    height: 36px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    border: 2px solid #fecaca;
    background: #fef2f2;
    color: #dc2626;
    transition: all 0.2s ease;
    cursor: pointer;
}

.btn-remove-item:hover {
    background: #dc2626;
    border-color: #dc2626;
    color: white;
    transform: scale(1.08);
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
}

.btn-remove-item i {
    font-size: 0.9rem;
}

/* ============================================
   BOUTONS D'ACTION
   ============================================ */
.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
    margin-top: 1.5rem;
}

.btn-action {
    padding: 0.7rem 1.75rem;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 12px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.btn-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn-primary.btn-action {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    min-width: 180px;
}

.btn-success.btn-action {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border: none;
    min-width: 180px;
}

/* ============================================
   MODALS
   ============================================ */
.confirmation-modal .modal-content {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

.confirmation-modal .modal-header {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    border: none;
    padding: 1.25rem 1.5rem;
}

.confirmation-modal .modal-header.warning-header {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
}

.confirmation-modal .modal-header.danger-header {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
}

.confirmation-modal .modal-header .modal-title {
    font-weight: 700;
    font-size: 1rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.confirmation-modal .modal-header .btn-close {
    filter: brightness(0) invert(1);
    opacity: 0.9;
}

.confirmation-modal .modal-body {
    padding: 1.5rem;
}

.confirm-summary {
    background: #f8fafc;
    border-radius: 12px;
    padding: 1rem;
    border: 1px solid #e2e8f0;
    margin-bottom: 1rem;
}

.confirm-summary .summary-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 0.5rem 0;
    gap: 1rem;
    border-bottom: 1px dashed #e2e8f0;
}

.confirm-summary .summary-row:last-child {
    border-bottom: none;
}

.confirm-summary .summary-label {
    color: #64748b;
    font-size: 0.85rem;
    font-weight: 500;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    gap: 0.35rem;
}

.confirm-summary .summary-value {
    font-weight: 700;
    color: #1e293b;
    font-size: 0.9rem;
    text-align: right;
    word-break: break-word;
}

.summary-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.75rem;
    margin-top: 1rem;
}

.summary-stat {
    text-align: center;
    padding: 0.75rem 0.5rem;
    background: white;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
}

.summary-stat .stat-value {
    font-size: 1.5rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 0.25rem;
}

.summary-stat .stat-label {
    font-size: 0.7rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}

.summary-stat.success .stat-value { color: #10b981; }
.summary-stat.danger .stat-value { color: #dc2626; }
.summary-stat.neutral .stat-value { color: #64748b; }

.alert-modal-warning {
    background: #fef3c7;
    border-left: 4px solid #f59e0b;
    border-radius: 10px;
    padding: 0.85rem 1rem;
    display: flex;
    gap: 0.75rem;
    align-items: flex-start;
    color: #78350f;
    font-size: 0.85rem;
    margin-top: 1rem;
}

.alert-modal-warning i {
    color: #d97706;
    font-size: 1.1rem;
    flex-shrink: 0;
    margin-top: 0.1rem;
}

.alert-modal-success {
    background: #d1fae5;
    border-left: 4px solid #10b981;
    border-radius: 10px;
    padding: 0.85rem 1rem;
    display: flex;
    gap: 0.75rem;
    align-items: flex-start;
    color: #065f46;
    font-size: 0.85rem;
    margin-top: 1rem;
}

.alert-modal-success i {
    color: #059669;
    font-size: 1.1rem;
    flex-shrink: 0;
    margin-top: 0.1rem;
}

.confirmation-modal .modal-footer {
    border: none;
    padding: 1rem 1.5rem 1.25rem;
    gap: 0.5rem;
    background: #f8fafc;
}

.confirmation-modal .modal-footer .btn {
    border-radius: 10px;
    font-weight: 600;
    padding: 0.6rem 1.5rem;
}

/* ============================================
   RESPONSIVE MOBILE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }

    .steps {
        margin-bottom: 1.5rem;
    }

    .step-circle {
        width: 34px;
        height: 34px;
        font-size: 0.8rem;
    }

    .step-label {
        font-size: 0.6rem;
    }

    .steps-line {
        top: 17px;
    }

    .inventory-info {
        padding: 1.25rem;
        border-radius: 16px;
    }

    .inventory-info h3 {
        font-size: 1.1rem;
    }

    .inventory-info .badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.7rem;
    }

    .progress-info h5 {
        font-size: 0.9rem;
    }

    .progress-info .stat .value {
        font-size: 1.1rem;
    }

    .count-table thead {
        display: none;
    }

    .count-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        position: relative;
    }

    /* ✅ Bouton suppression en haut à droite de la carte mobile */
    .count-table tbody tr .btn-remove-item {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        width: 32px;
        height: 32px;
    }

    .count-table tbody td {
        display: block;
        padding: 0.4rem 0 !important;
        border: none;
    }

    .count-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 0.25rem;
    }

    /* Cacher le label \"Actions\" sur mobile */
    .count-table tbody td[data-label=\"Actions\"]::before {
        display: none;
    }

    .product-info {
        justify-content: flex-start;
    }

    .count-input {
        width: 100%;
        max-width: 200px;
    }

    .action-buttons {
        flex-direction: column-reverse;
        align-items: stretch;
    }

    .btn-action {
        width: 100%;
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
        min-width: auto !important;
    }

    .confirmation-modal .modal-footer {
        flex-direction: column-reverse;
    }

    .confirmation-modal .modal-footer .btn {
        width: 100%;
    }

    .summary-stats {
        grid-template-columns: 1fr;
    }

    .confirm-summary .summary-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.25rem;
    }

    .confirm-summary .summary-value {
        text-align: left;
    }
}
</style>
";
        yield from [];
    }

    // line 702
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 703
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 710
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Comptage</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Comptage - ";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 719), "html", null, true);
        yield "
            </h1>
        </div>
    </div>

    <!-- Étapes -->
    <div class=\"steps\">
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Ajout produits</div>
        </div>
        <div class=\"step active\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Validation</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <!-- Info inventaire -->
    <div class=\"inventory-info\">
        <h3>
            <i class=\"fas fa-clipboard-list me-2\"></i>
            ";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 749), "html", null, true);
        yield "
        </h3>
        <div class=\"d-flex flex-wrap gap-2 mt-3\">
            <span class=\"badge\">
                <i class=\"fas fa-calendar me-1\"></i>
                ";
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryDate", [], "any", false, false, false, 754), "d/m/Y"), "html", null, true);
        yield "
            </span>
            ";
        // line 756
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 756)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 757
            yield "                <span class=\"badge\">
                    <i class=\"fas fa-map-marker-alt me-1\"></i>
                    ";
            // line 759
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 759), "name", [], "any", false, false, false, 759), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 762
        yield "            <span class=\"badge\">
                <i class=\"fas fa-info-circle me-1\"></i>
                ";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusLabel", [], "any", false, false, false, 764), "html", null, true);
        yield "
            </span>
        </div>
    </div>

    <!-- Progression -->
    <div class=\"progress-card\">
        <div class=\"progress-info\">
            <h5>
                <i class=\"fas fa-chart-line text-primary me-2\"></i>
                Progression du comptage
            </h5>
            <div class=\"progress-stats\">
                <div class=\"stat\">
                    <div class=\"value\">";
        // line 778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["countedItems"] ?? null), "html", null, true);
        yield "</div>
                    <div class=\"label\">Comptés</div>
                </div>
                <div class=\"stat\">
                    <div class=\"value\">";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
        yield "</div>
                    <div class=\"label\">Total</div>
                </div>
                <div class=\"stat\">
                    <div class=\"value\">";
        // line 786
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true);
        yield "%</div>
                    <div class=\"label\">Progression</div>
                </div>
            </div>
        </div>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true);
        yield "%\" 
                 aria-valuenow=\"";
        // line 793
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>

    <!-- Formulaire de comptage -->
    <form method=\"post\" id=\"countForm\">
        <div class=\"count-table-card\">
            <table class=\"count-table\">
                <thead>
                    <tr>
                        <th style=\"width: 35%;\">Produit</th>
                        <th style=\"width: 12%;\" class=\"text-center\">Attendu</th>
                        <th style=\"width: 20%;\" class=\"text-center\">Compté</th>
                        <th style=\"width: 15%;\" class=\"text-center\">Écart</th>
                        <th style=\"width: 18%;\" class=\"text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 811
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 812
            yield "                    <tr data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 812), "html", null, true);
            yield "\">
                        <td data-label=\"Produit\">
                            <div class=\"product-info\">
                                <div class=\"product-avatar\">
                                    ";
            // line 816
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 816), "name", [], "any", false, false, false, 816))), "html", null, true);
            yield "
                                </div>
                                <div>
                                    <div class=\"product-name\">";
            // line 819
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 819), "name", [], "any", false, false, false, 819), "html", null, true);
            yield "</div>
                                    ";
            // line 820
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 820), "barcode", [], "any", false, false, false, 820)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 821
                yield "                                        <div class=\"product-barcode\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 821), "barcode", [], "any", false, false, false, 821), "html", null, true);
                yield "</div>
                                    ";
            }
            // line 823
            yield "                                </div>
                            </div>
                            <input type=\"hidden\" name=\"items[";
            // line 825
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 825), "html", null, true);
            yield "][id]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 825), "html", null, true);
            yield "\">
                        </td>
                        <td data-label=\"Attendu\" class=\"text-center\">
                            <span class=\"quantity-badge expected\">
                                ";
            // line 829
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 829), "html", null, true);
            yield "
                                <small>";
            // line 830
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 830), "unit", [], "any", false, false, false, 830)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 830), "unit", [], "any", false, false, false, 830), "html", null, true)) : ("u"));
            yield "</small>
                            </span>
                        </td>
                        <td data-label=\"Compté\" class=\"text-center\">
                            <input type=\"number\" 
                                   name=\"items[";
            // line 835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 835), "html", null, true);
            yield "][actual_quantity]\" 
                                   value=\"";
            // line 836
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 836), "html", null, true);
            yield "\"
                                   class=\"count-input\"
                                   min=\"0\"
                                   data-expected=\"";
            // line 839
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 839), "html", null, true);
            yield "\"
                                   oninput=\"updateDifference(this)\">
                        </td>
                        <td data-label=\"Écart\" class=\"text-center\">
                            <span class=\"difference-badge ";
            // line 843
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 843) > 0)) ? ("positive") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 843) < 0)) ? ("negative") : ("zero"))));
            yield "\"
                                  id=\"difference-";
            // line 844
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 844), "html", null, true);
            yield "\">
                                ";
            // line 845
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 845) > 0)) {
                yield "+";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 845), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td data-label=\"Actions\" class=\"text-center\">
                            ";
            // line 850
            yield "                            <button type=\"button\" 
                                    class=\"btn-remove-item remove-item-btn\"
                                    data-item-id=\"";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 852), "html", null, true);
            yield "\"
                                    data-product-name=\"";
            // line 853
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 853), "name", [], "any", false, false, false, 853), "html", null, true);
            yield "\"
                                    data-product-barcode=\"";
            // line 854
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 854), "barcode", [], "any", false, false, false, 854)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 854), "barcode", [], "any", false, false, false, 854), "html", null, true)) : ("—"));
            yield "\"
                                    title=\"Retirer ce produit de l'inventaire\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </td>
                    </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 861
        yield "                </tbody>
            </table>
        </div>

        <!-- Boutons d'action -->
        <div class=\"action-buttons\">
            <a href=\"";
        // line 867
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-times me-2\"></i>Annuler
            </a>
            <div class=\"d-flex gap-2 flex-column flex-sm-row\">
                <button type=\"submit\" class=\"btn btn-primary btn-action\" id=\"saveBtn\">
                    <i class=\"fas fa-save me-2\"></i>Sauvegarder
                </button>
                <button type=\"button\" class=\"btn btn-success btn-action\" id=\"openValidateModalBtn\">
                    <i class=\"fas fa-check me-2\"></i>Valider
                </button>
            </div>
        </div>
    </form>
</div>

<!-- ==========================================
     MODAL DE CONFIRMATION DE VALIDATION
========================================== -->
<div class=\"modal fade confirmation-modal\" id=\"validateInventoryModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle\"></i>
                    Confirmer la validation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"mb-3 small text-muted\">
                    Vérifiez le récapitulatif avant de valider l'inventaire :
                </p>

                <div class=\"confirm-summary\">
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-clipboard-list text-primary\"></i> N° inventaire
                        </span>
                        <span class=\"summary-value\">";
        // line 905
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 905), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-calendar text-primary\"></i> Date
                        </span>
                        <span class=\"summary-value\">";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryDate", [], "any", false, false, false, 911), "d/m/Y"), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 913
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 913)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 914
            yield "                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-map-marker-alt text-primary\"></i> Emplacement
                        </span>
                        <span class=\"summary-value\">";
            // line 918
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 918), "name", [], "any", false, false, false, 918), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 921
        yield "                </div>

                <div class=\"summary-stats\">
                    <div class=\"summary-stat neutral\">
                        <div class=\"stat-value\" id=\"modalTotalItems\">—</div>
                        <div class=\"stat-label\">Produits</div>
                    </div>
                    <div class=\"summary-stat success\">
                        <div class=\"stat-value\" id=\"modalNoDifference\">—</div>
                        <div class=\"stat-label\">Sans écart</div>
                    </div>
                    <div class=\"summary-stat danger\">
                        <div class=\"stat-value\" id=\"modalWithDifference\">—</div>
                        <div class=\"stat-label\">Avec écart</div>
                    </div>
                </div>

                <div id=\"modalAlertDifferences\" class=\"alert-modal-warning\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                    <div>
                        <strong id=\"modalAlertTitle\">Écarts détectés</strong>
                        <small class=\"d-block mt-1\" id=\"modalAlertText\">
                            Des ajustements de stock seront automatiquement appliqués pour corriger les écarts.
                        </small>
                    </div>
                </div>

                <div id=\"modalAlertNoDifferences\" class=\"alert-modal-success\" style=\"display: none;\">
                    <i class=\"fas fa-check-circle\"></i>
                    <div>
                        <strong>Aucun écart constaté</strong>
                        <small class=\"d-block mt-1\">
                            Tous les stocks sont conformes. L'inventaire sera marqué comme terminé.
                        </small>
                    </div>
                </div>

                <div class=\"alert-modal-warning mt-3\">
                    <i class=\"fas fa-lock\"></i>
                    <div>
                        <strong>Action irréversible</strong>
                        <small class=\"d-block mt-1\">
                            Une fois validé, l'inventaire ne pourra plus être modifié.
                        </small>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmValidateBtn\">
                    <i class=\"fas fa-check-circle me-1\"></i> Confirmer la validation
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL DE SUPPRESSION D'UN PRODUIT
========================================== -->
<div class=\"modal fade confirmation-modal\" id=\"removeItemModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header danger-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-trash-alt\"></i>
                    Retirer le produit
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"mb-3 small text-muted\">
                    Voulez-vous vraiment retirer ce produit de l'inventaire ?
                </p>

                <div class=\"confirm-summary\">
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-box text-primary\"></i> Produit
                        </span>
                        <span class=\"summary-value\" id=\"removeItemName\">—</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-barcode text-primary\"></i> Code-barres
                        </span>
                        <span class=\"summary-value\" id=\"removeItemBarcode\">—</span>
                    </div>
                </div>

                <div class=\"alert-modal-warning\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                    <div>
                        <strong>Le produit sera retiré de l'inventaire</strong>
                        <small class=\"d-block mt-1\">
                            Le stock réel du produit n'est pas affecté. Seul le comptage en cours sera modifié.
                        </small>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>
                <form method=\"post\" 
                      id=\"removeItemForm\"
                      action=\"\"
                      class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"removeItemToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash-alt me-1\"></i> Retirer le produit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1042
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1043
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// ✅ Mise à jour dynamique des écarts
function updateDifference(input) {
    const expected = parseInt(input.dataset.expected) || 0;
    const actual = parseInt(input.value) || 0;
    const difference = actual - expected;

    const row = input.closest('tr');
    const badge = row.querySelector('.difference-badge');

    if (badge) {
        badge.textContent = (difference > 0 ? '+' : '') + difference;
        badge.className = 'difference-badge ' + 
            (difference > 0 ? 'positive' : (difference < 0 ? 'negative' : 'zero'));
    }
}

document.addEventListener('DOMContentLoaded', function() {

    // ✅ Mettre à jour tous les écarts au chargement
    document.querySelectorAll('.count-input').forEach(input => {
        updateDifference(input);
    });

    // ============================================
    // MODAL DE VALIDATION
    // ============================================
    const validateModalEl = document.getElementById('validateInventoryModal');
    const validateModal = new bootstrap.Modal(validateModalEl);
    const openValidateBtn = document.getElementById('openValidateModalBtn');
    const confirmValidateBtn = document.getElementById('confirmValidateBtn');
    const countForm = document.getElementById('countForm');

    let isConfirmed = false;

    function computeStats() {
        const inputs = document.querySelectorAll('.count-input');
        let totalItems = inputs.length;
        let noDifference = 0;
        let withDifference = 0;

        inputs.forEach(input => {
            const expected = parseInt(input.dataset.expected) || 0;
            const actual = parseInt(input.value) || 0;
            if (actual === expected) {
                noDifference++;
            } else {
                withDifference++;
            }
        });

        return { totalItems, noDifference, withDifference };
    }

    openValidateBtn?.addEventListener('click', function() {
        const stats = computeStats();

        document.getElementById('modalTotalItems').textContent = stats.totalItems;
        document.getElementById('modalNoDifference').textContent = stats.noDifference;
        document.getElementById('modalWithDifference').textContent = stats.withDifference;

        const alertWithDiff = document.getElementById('modalAlertDifferences');
        const alertNoDiff = document.getElementById('modalAlertNoDifferences');

        if (stats.withDifference > 0) {
            alertWithDiff.style.display = 'flex';
            alertNoDiff.style.display = 'none';
            document.getElementById('modalAlertTitle').textContent = 
                `\${stats.withDifference} écart(s) détecté(s)`;
            document.getElementById('modalAlertText').textContent = 
                `\${stats.withDifference} produit(s) avec écart — des ajustements de stock seront automatiquement appliqués.`;
        } else {
            alertWithDiff.style.display = 'none';
            alertNoDiff.style.display = 'flex';
        }

        validateModal.show();
    });

    confirmValidateBtn?.addEventListener('click', function() {
        isConfirmed = true;
        this.disabled = true;
        this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Validation...';
        validateModal.hide();

        setTimeout(() => {
            const validateInput = document.createElement('input');
            validateInput.type = 'hidden';
            validateInput.name = 'validate';
            validateInput.value = '1';
            countForm.appendChild(validateInput);
            countForm.submit();
        }, 200);
    });

    validateModalEl?.addEventListener('hidden.bs.modal', function() {
        if (!isConfirmed) {
            confirmValidateBtn.disabled = false;
            confirmValidateBtn.innerHTML = '<i class=\"fas fa-check-circle me-1\"></i> Confirmer la validation';
        }
    });

    // ============================================
    // SPINNER sur \"Sauvegarder\"
    // ============================================
    const saveBtn = document.getElementById('saveBtn');
    countForm?.addEventListener('submit', function(e) {
        if (!isConfirmed) {
            saveBtn.disabled = true;
            saveBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Sauvegarde...';
        }
    });

    // ============================================
    // MODAL DE SUPPRESSION D'UN PRODUIT
    // ============================================
    const removeModalEl = document.getElementById('removeItemModal');
    const removeModal = new bootstrap.Modal(removeModalEl);
    const removeItemName = document.getElementById('removeItemName');
    const removeItemBarcode = document.getElementById('removeItemBarcode');
    const removeItemForm = document.getElementById('removeItemForm');
    const removeItemToken = document.getElementById('removeItemToken');

    // ✅ URL de base pour la suppression — générée par Twig pour l'inventaire courant
    const removeUrlTemplate = \"";
        // line 1168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_remove_item", ["inventoryId" => CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "id", [], "any", false, false, false, 1168), "itemId" => "__ITEM_ID__"]), "html", null, true);
        yield "\";

    document.querySelectorAll('.remove-item-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.dataset.itemId;
            const productName = this.dataset.productName;
            const productBarcode = this.dataset.productBarcode;

            // Remplir le modal
            removeItemName.textContent = productName;
            removeItemBarcode.textContent = productBarcode;

            // Configurer le formulaire
            removeItemForm.action = removeUrlTemplate.replace('__ITEM_ID__', itemId);

            // ✅ CSRF token — on utilise un token unique par item
            // Symfony génère un token qu'on peut valider côté controller
            removeItemToken.value = '";
        // line 1185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("remove-item"), "html", null, true);
        yield "';

            removeModal.show();
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
        return "stock/inventory/count.html.twig";
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
        return array (  1420 => 1185,  1400 => 1168,  1272 => 1043,  1265 => 1042,  1141 => 921,  1135 => 918,  1129 => 914,  1127 => 913,  1122 => 911,  1113 => 905,  1072 => 867,  1064 => 861,  1043 => 854,  1039 => 853,  1035 => 852,  1031 => 850,  1021 => 845,  1017 => 844,  1013 => 843,  1006 => 839,  1000 => 836,  996 => 835,  988 => 830,  984 => 829,  975 => 825,  971 => 823,  965 => 821,  963 => 820,  959 => 819,  953 => 816,  945 => 812,  928 => 811,  907 => 793,  903 => 792,  894 => 786,  887 => 782,  880 => 778,  863 => 764,  859 => 762,  853 => 759,  849 => 757,  847 => 756,  842 => 754,  834 => 749,  801 => 719,  789 => 710,  780 => 703,  773 => 702,  74 => 7,  67 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/inventory/count.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\count.html.twig");
    }
}
