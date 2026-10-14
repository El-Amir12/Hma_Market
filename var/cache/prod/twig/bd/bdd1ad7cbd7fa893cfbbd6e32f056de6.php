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

/* stock/inventory/validate.html.twig */
class __TwigTemplate_9d739b8a2d679fd10902d23ec9905843 extends Template
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
        yield "Validation - ";
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
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    position: relative;
    overflow: hidden;
}

.inventory-info::before {
    content: '';
    position: absolute;
    top: -30%;
    right: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}

.inventory-info h3 {
    font-weight: 800;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
    position: relative;
    z-index: 1;
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
    position: relative;
    z-index: 1;
}

/* ============================================
   CARTES STATISTIQUES
   ============================================ */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.stat-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    color: white;
}

.stat-icon.primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.stat-icon.success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

.stat-icon.warning {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
}

.stat-icon.danger {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
}

.stat-content {
    flex: 1;
    min-width: 0;
}

.stat-value {
    font-size: 1.75rem;
    font-weight: 800;
    color: #1e293b;
    line-height: 1;
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.75rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}

/* ============================================
   TABLEAU DES ÉCARTS
   ============================================ */
.differences-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    margin-bottom: 1.5rem;
}

.differences-header {
    background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
    padding: 1rem 1.5rem;
    border-bottom: 1px solid #fde68a;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.differences-header i {
    font-size: 1.5rem;
    color: #d97706;
}

.differences-header h5 {
    margin: 0;
    font-weight: 700;
    color: #92400e;
    font-size: 1rem;
}

.differences-table {
    margin: 0;
    width: 100%;
}

.differences-table thead {
    background: #f8fafc;
}

.differences-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
}

.differences-table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
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

.quantity-badge.actual {
    background: #f0fdf4;
    color: #16a34a;
}

.difference-badge {
    font-weight: 700;
    padding: 0.5rem 1rem;
    border-radius: 10px;
    font-size: 0.9rem;
    display: inline-block;
    min-width: 70px;
    text-align: center;
}

.difference-badge.positive {
    background: #dcfce7;
    color: #16a34a;
    border: 2px solid #86efac;
}

.difference-badge.negative {
    background: #fee2e2;
    color: #dc2626;
    border: 2px solid #fca5a5;
}

/* ============================================
   ÉTAT SANS ÉCART
   ============================================ */
.no-difference-card {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    border: 2px solid #86efac;
    border-radius: 16px;
    padding: 3rem 2rem;
    text-align: center;
    margin-bottom: 1.5rem;
}

.no-difference-card i {
    font-size: 4rem;
    color: #16a34a;
    margin-bottom: 1rem;
}

.no-difference-card h4 {
    color: #14532d;
    font-weight: 800;
    margin-bottom: 0.5rem;
}

.no-difference-card p {
    color: #166534;
    margin: 0;
    font-size: 0.95rem;
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

.btn-success.btn-action {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border: none;
    min-width: 220px;
}

/* ============================================
   MODAL DE CONFIRMATION
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

/* Résumé dans le modal */
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

/* Statistiques dans le modal */
.modal-stats {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.75rem;
    margin-top: 1rem;
}

.modal-stat {
    text-align: center;
    padding: 0.85rem 0.5rem;
    background: white;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
}

.modal-stat .stat-value {
    font-size: 1.5rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 0.25rem;
}

.modal-stat .stat-label {
    font-size: 0.7rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}

.modal-stat.primary .stat-value { color: #667eea; }
.modal-stat.success .stat-value { color: #10b981; }
.modal-stat.warning .stat-value { color: #f59e0b; }
.modal-stat.danger .stat-value { color: #dc2626; }

/* Alertes modal */
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

    .stats-grid {
        grid-template-columns: 1fr;
        gap: 0.75rem;
    }

    .stat-card {
        padding: 1rem;
    }

    .stat-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
        font-size: 1rem;
    }

    .stat-value {
        font-size: 1.4rem;
    }

    .differences-table thead {
        display: none;
    }

    .differences-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .differences-table tbody td {
        display: block;
        padding: 0.4rem 0 !important;
        border: none;
    }

    .differences-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 0.25rem;
    }

    .product-info {
        justify-content: flex-start;
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

    .modal-stats {
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

    // line 690
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 691
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 698
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Validation</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-check-circle text-success me-2\"></i>
                Validation - ";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 707), "html", null, true);
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
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step active\">
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
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 737), "html", null, true);
        yield "
        </h3>
        <div class=\"d-flex flex-wrap gap-2 mt-3\">
            <span class=\"badge\">
                <i class=\"fas fa-calendar me-1\"></i>
                ";
        // line 742
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryDate", [], "any", false, false, false, 742), "d/m/Y"), "html", null, true);
        yield "
            </span>
            ";
        // line 744
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 744)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 745
            yield "                <span class=\"badge\">
                    <i class=\"fas fa-map-marker-alt me-1\"></i>
                    ";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 747), "name", [], "any", false, false, false, 747), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 750
        yield "            <span class=\"badge\">
                <i class=\"fas fa-info-circle me-1\"></i>
                ";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "statusLabel", [], "any", false, false, false, 752), "html", null, true);
        yield "
            </span>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-icon primary\">
                <i class=\"fas fa-boxes\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Produits total</div>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon ";
        // line 769
        yield (((($context["differenceCount"] ?? null) > 0)) ? ("warning") : ("success"));
        yield "\">
                <i class=\"fas fa-exclamation-triangle\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">";
        // line 773
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["differenceCount"] ?? null), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Produits avec écart</div>
            </div>
        </div>
    </div>

    <!-- Écarts -->
    ";
        // line 780
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["differences"] ?? null)) > 0)) {
            // line 781
            yield "        <div class=\"differences-card\">
            <div class=\"differences-header\">
                <i class=\"fas fa-exclamation-triangle\"></i>
                <h5>
                    Écarts détectés (";
            // line 785
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["differences"] ?? null)), "html", null, true);
            yield ")
                </h5>
            </div>
            <table class=\"differences-table\">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th class=\"text-center\">Attendu</th>
                        <th class=\"text-center\">Compté</th>
                        <th class=\"text-center\">Écart</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 798
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["differences"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 799
                yield "                    <tr>
                        <td data-label=\"Produit\">
                            <div class=\"product-info\">
                                <div class=\"product-avatar\">
                                    ";
                // line 803
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 803), "name", [], "any", false, false, false, 803))), "html", null, true);
                yield "
                                </div>
                                <div>
                                    <div class=\"product-name\">";
                // line 806
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 806), "name", [], "any", false, false, false, 806), "html", null, true);
                yield "</div>
                                    ";
                // line 807
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 807), "barcode", [], "any", false, false, false, 807)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 808
                    yield "                                        <div class=\"product-barcode\" style=\"font-size: 0.75rem; color: #94a3b8; font-family: 'Courier New', monospace;\">
                                            ";
                    // line 809
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 809), "barcode", [], "any", false, false, false, 809), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 812
                yield "                                </div>
                            </div>
                        </td>
                        <td data-label=\"Attendu\" class=\"text-center\">
                            <span class=\"quantity-badge expected\">";
                // line 816
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 816), "html", null, true);
                yield "</span>
                        </td>
                        <td data-label=\"Compté\" class=\"text-center\">
                            <span class=\"quantity-badge actual\">";
                // line 819
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 819), "html", null, true);
                yield "</span>
                        </td>
                        <td data-label=\"Écart\" class=\"text-center\">
                            <span class=\"difference-badge ";
                // line 822
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 822) > 0)) ? ("positive") : ("negative"));
                yield "\">
                                ";
                // line 823
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 823) > 0)) {
                    yield "+";
                }
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 823), "html", null, true);
                yield "
                            </span>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 828
            yield "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 832
            yield "        <div class=\"no-difference-card\">
            <i class=\"fas fa-check-circle\"></i>
            <h4>Aucun écart détecté</h4>
            <p>Le stock physique correspond exactement au stock système.</p>
        </div>
    ";
        }
        // line 838
        yield "
    <!-- Boutons d'action -->
    <form method=\"post\" id=\"validateInventoryForm\">
        <div class=\"action-buttons\">
            <a href=\"";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "id", [], "any", false, false, false, 842)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour au comptage
            </a>
            ";
        // line 846
        yield "            <button type=\"button\" class=\"btn btn-success btn-action\" id=\"openValidateInventoryModalBtn\">
                <i class=\"fas fa-check-circle me-2\"></i>
                Valider l'inventaire
            </button>
        </div>
    </form>
</div>

<!-- ==========================================
     MODAL DE CONFIRMATION
========================================== -->
<div class=\"modal fade confirmation-modal\" id=\"confirmValidateInventoryModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header ";
        // line 860
        if ((($context["differenceCount"] ?? null) > 0)) {
            yield "warning-header";
        }
        yield "\">
                <h5 class=\"modal-title\">
                    <i class=\"fas ";
        // line 862
        if ((($context["differenceCount"] ?? null) > 0)) {
            yield "fa-exclamation-triangle";
        } else {
            yield "fa-check-circle";
        }
        yield "\"></i>
                    ";
        // line 863
        if ((($context["differenceCount"] ?? null) > 0)) {
            // line 864
            yield "                        Confirmer la validation avec écarts
                    ";
        } else {
            // line 866
            yield "                        Confirmer la validation
                    ";
        }
        // line 868
        yield "                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"mb-3 small text-muted\">
                    Vérifiez le récapitulatif avant de valider définitivement :
                </p>

                <!-- Résumé -->
                <div class=\"confirm-summary\">
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-clipboard-list text-primary\"></i> N° inventaire
                        </span>
                        <span class=\"summary-value\">";
        // line 882
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryNumber", [], "any", false, false, false, 882), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-calendar text-primary\"></i> Date
                        </span>
                        <span class=\"summary-value\">";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "inventoryDate", [], "any", false, false, false, 888), "d/m/Y"), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 890
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 890)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 891
            yield "                    <div class=\"summary-row\">
                        <span class=\"summary-label\">
                            <i class=\"fas fa-map-marker-alt text-primary\"></i> Emplacement
                        </span>
                        <span class=\"summary-value\">";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "location", [], "any", false, false, false, 895), "name", [], "any", false, false, false, 895), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 898
        yield "                </div>

                <!-- Statistiques -->
                <div class=\"modal-stats\">
                    <div class=\"modal-stat primary\">
                        <div class=\"stat-value\">";
        // line 903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
        yield "</div>
                        <div class=\"stat-label\">Produits total</div>
                    </div>
                    <div class=\"modal-stat ";
        // line 906
        if ((($context["differenceCount"] ?? null) > 0)) {
            yield "warning";
        } else {
            yield "success";
        }
        yield "\">
                        <div class=\"stat-value\">";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["differenceCount"] ?? null), "html", null, true);
        yield "</div>
                        <div class=\"stat-label\">Produits avec écart</div>
                    </div>
                </div>

                <!-- Alerte adaptative -->
                ";
        // line 913
        if ((($context["differenceCount"] ?? null) > 0)) {
            // line 914
            yield "                    <div class=\"alert-modal-warning\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        <div>
                            <strong>";
            // line 917
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["differenceCount"] ?? null), "html", null, true);
            yield " ajustement(s) vont être appliqué(s)</strong>
                            <small class=\"d-block mt-1\">
                                Le stock sera automatiquement corrigé pour correspondre aux quantités comptées.
                                Chaque écart génèrera un mouvement de stock <strong>adjustment_in</strong> ou <strong>adjustment_out</strong>.
                            </small>
                        </div>
                    </div>
                ";
        } else {
            // line 925
            yield "                    <div class=\"alert-modal-success\">
                        <i class=\"fas fa-check-circle\"></i>
                        <div>
                            <strong>Aucun écart constaté</strong>
                            <small class=\"d-block mt-1\">
                                Le stock physique correspond exactement au stock système.
                                L'inventaire sera simplement marqué comme terminé.
                            </small>
                        </div>
                    </div>
                ";
        }
        // line 936
        yield "
                <div class=\"alert-modal-warning mt-3\">
                    <i class=\"fas fa-lock\"></i>
                    <div>
                        <strong>Action irréversible</strong>
                        <small class=\"d-block mt-1\">
                            Une fois validé, l'inventaire ne pourra plus être modifié ni annulé.
                        </small>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmValidateInventoryBtn\">
                    <i class=\"fas fa-check-circle me-1\"></i> Confirmer la validation
                </button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 960
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 961
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {

    const modalEl = document.getElementById('confirmValidateInventoryModal');
    const modal = new bootstrap.Modal(modalEl);
    const openBtn = document.getElementById('openValidateInventoryModalBtn');
    const confirmBtn = document.getElementById('confirmValidateInventoryBtn');
    const form = document.getElementById('validateInventoryForm');

    let isConfirmed = false;

    // ✅ Ouvrir le modal
    openBtn?.addEventListener('click', function() {
        modal.show();
    });

    // ✅ Confirmer la validation
    confirmBtn?.addEventListener('click', function() {
        isConfirmed = true;
        this.disabled = true;
        this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Validation...';
        modal.hide();

        setTimeout(() => {
            form.submit();
        }, 200);
    });

    // ✅ Restaurer le bouton si le modal est fermé sans confirmer
    modalEl?.addEventListener('hidden.bs.modal', function() {
        if (!isConfirmed) {
            confirmBtn.disabled = false;
            confirmBtn.innerHTML = '<i class=\"fas fa-check-circle me-1\"></i> Confirmer la validation';
        }
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
        return "stock/inventory/validate.html.twig";
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
        return array (  1188 => 961,  1181 => 960,  1154 => 936,  1141 => 925,  1130 => 917,  1125 => 914,  1123 => 913,  1114 => 907,  1106 => 906,  1100 => 903,  1093 => 898,  1087 => 895,  1081 => 891,  1079 => 890,  1074 => 888,  1065 => 882,  1049 => 868,  1045 => 866,  1041 => 864,  1039 => 863,  1031 => 862,  1024 => 860,  1008 => 846,  1002 => 842,  996 => 838,  988 => 832,  982 => 828,  968 => 823,  964 => 822,  958 => 819,  952 => 816,  946 => 812,  940 => 809,  937 => 808,  935 => 807,  931 => 806,  925 => 803,  919 => 799,  915 => 798,  899 => 785,  893 => 781,  891 => 780,  881 => 773,  874 => 769,  866 => 764,  851 => 752,  847 => 750,  841 => 747,  837 => 745,  835 => 744,  830 => 742,  822 => 737,  789 => 707,  777 => 698,  768 => 691,  761 => 690,  74 => 7,  67 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/inventory/validate.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\validate.html.twig");
    }
}
