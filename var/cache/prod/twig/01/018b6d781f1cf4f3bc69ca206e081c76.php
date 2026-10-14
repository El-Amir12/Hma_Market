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

/* admin/category/show.html.twig */
class __TwigTemplate_c2cb25ef53e7f98810e079df9a71f105 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - Détails - HMA Market";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.card-hover { 
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); 
    border: 1px solid rgba(102, 126, 234, 0.1); 
}
.card-hover:hover { 
    transform: translateY(-5px); 
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important; 
    border-color: rgba(102, 126, 234, 0.3); 
}
.card-hover-sm:hover { 
    transform: translateY(-3px); 
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08) !important; 
}
.btn-hover-scale { 
    transition: all 0.2s ease; 
}
.btn-hover-scale:hover { 
    transform: scale(1.05); 
}
.btn-hover-lift { 
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); 
}
.btn-hover-lift:hover { 
    transform: translateY(-3px); 
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3); 
}
.bg-gradient-primary { 
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important; 
}
.bg-gradient-info { 
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%) !important; 
}
.bg-gradient-success { 
    background: linear-gradient(135deg, #28a745 0%, #218838 100%) !important; 
}
.slide-in-left { 
    animation: slideInLeft 0.5s ease-out; 
}
@keyframes slideInLeft { 
    from { transform: translateX(-20px); opacity: 0; } 
    to { transform: translateX(0); opacity: 1; } 
}

.info-grid { 
    display: grid; 
    gap: 0.75rem; 
}
.info-item { 
    padding-bottom: 0.75rem; 
    border-bottom: 1px solid #f0f0f0; 
}
.info-item:last-child { 
    border-bottom: none; 
}
.info-label { 
    font-weight: 600; 
    color: #495057; 
    margin-bottom: 0.25rem; 
    display: flex; 
    align-items: center; 
    font-size: 0.85rem;
}
.info-value { 
    color: #212529; 
    font-size: 0.95rem; 
}
.stats-grid { 
    display: grid; 
    grid-template-columns: repeat(2, 1fr); 
    gap: 0.75rem; 
}
.stat-item { 
    display: flex; 
    align-items: center; 
    gap: 0.75rem; 
    padding: 0.5rem; 
    background: #f8f9fa; 
    border-radius: 10px; 
    transition: all 0.3s ease; 
}
.stat-item:hover { 
    background: #e9ecef; 
    transform: translateY(-2px); 
}
.stat-icon { 
    width: 35px; 
    height: 35px; 
    border-radius: 10px; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-size: 1rem; 
    flex-shrink: 0;
}
.stat-number { 
    font-size: 1.3rem; 
    font-weight: 700; 
    line-height: 1; 
}
.stat-label { 
    font-size: 0.75rem; 
    color: #6c757d; 
    margin-top: 0.15rem; 
}
.product-row:hover { 
    background-color: rgba(102, 126, 234, 0.05); 
    transition: all 0.2s ease; 
}
.table th { 
    font-weight: 600; 
    background-color: #f8f9fa; 
    border-bottom: 2px solid #dee2e6; 
    font-size: 0.75rem;
    padding: 0.5rem 0.4rem;
}
.table td { 
    vertical-align: middle; 
    padding: 0.4rem 0.3rem;
    font-size: 0.8rem;
}
.badge { 
    font-weight: 500; 
    letter-spacing: 0.3px; 
    font-size: 0.65rem;
    padding: 0.2rem 0.4rem;
}
.category-image { 
    transition: all 0.3s ease; 
    max-height: 180px;
    width: 100%;
    object-fit: cover;
}
.category-image:hover { 
    transform: scale(1.05); 
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important; 
}
.category-placeholder { 
    border-radius: 15px; 
    transition: all 0.3s ease; 
    height: 180px;
}
.category-placeholder:hover { 
    transform: scale(1.05); 
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important; 
}
.breadcrumb { 
    background-color: transparent; 
    padding-left: 0; 
    margin-bottom: 0.5rem; 
}
.breadcrumb-item a { 
    color: #667eea; 
    transition: color 0.2s ease; 
}
.breadcrumb-item a:hover { 
    color: #0463f1; 
    text-decoration: underline; 
}
.breadcrumb-item.active { 
    color: #6c757d; 
}

/* ✅ RESPONSIVE */
@media (max-width: 992px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.75rem !important;
        width: 100%;
    }
    
    .btn-group {
        flex-direction: row !important;
        width: 100%;
        gap: 0.5rem;
    }
    
    .btn-group .btn {
        flex: 1;
        width: auto !important;
    }
}

@media (max-width: 768px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    h1.h3 {
        font-size: 1.2rem !important;
    }
    
    .breadcrumb {
        font-size: 0.7rem;
    }
    
    .d-flex.align-items-center.mb-4 {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.5rem;
    }
    
    .d-flex.align-items-center.mb-4 .btn-group {
        width: 100%;
    }
    
    .btn-group .btn {
        font-size: 0.75rem;
        padding: 0.3rem 0.6rem;
    }
    
    .btn-group .btn i {
        font-size: 0.8rem;
    }
    
    /* Colonnes en pleine largeur */
    .col-lg-8, .col-lg-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.5rem;
    }
    
    .stat-item {
        padding: 0.4rem;
        gap: 0.5rem;
    }
    
    .stat-icon {
        width: 30px;
        height: 30px;
        font-size: 0.8rem;
    }
    
    .stat-number {
        font-size: 1.1rem;
    }
    
    .stat-label {
        font-size: 0.65rem;
    }
    
    .info-label {
        font-size: 0.75rem;
    }
    
    .info-value {
        font-size: 0.85rem;
    }
    
    .category-image,
    .category-placeholder {
        height: 140px;
    }
    
    /* Tableau responsive */
    .table-responsive {
        font-size: 0.7rem;
    }
    
    .table th {
        font-size: 0.65rem;
        padding: 0.3rem 0.2rem;
    }
    
    .table td {
        font-size: 0.7rem;
        padding: 0.3rem 0.2rem;
    }
    
    .table td .badge {
        font-size: 0.55rem;
        padding: 0.1rem 0.3rem;
    }
    
    .btn-group-sm .btn {
        font-size: 0.6rem;
        padding: 0.15rem 0.3rem;
    }
    
    .btn-group-sm .btn i {
        font-size: 0.6rem;
    }
    
    /* Sous-catégories */
    .col-md-6.col-lg-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .card-body .row .col-md-6.col-lg-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .modal .modal-body {
        padding: 1rem;
    }
    
    .modal .modal-footer {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .modal .modal-footer .btn {
        width: 100%;
    }
    
    .modal .modal-footer form {
        width: 100%;
    }
    
    .modal .modal-footer form button {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    h1.h3 {
        font-size: 1rem !important;
    }
    
    .btn-group .btn {
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
    }
    
    .btn-group .btn i {
        font-size: 0.7rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr 1fr;
        gap: 0.35rem;
    }
    
    .stat-item {
        padding: 0.3rem;
        gap: 0.35rem;
    }
    
    .stat-icon {
        width: 26px;
        height: 26px;
        font-size: 0.65rem;
        border-radius: 6px;
    }
    
    .stat-number {
        font-size: 0.9rem;
    }
    
    .stat-label {
        font-size: 0.55rem;
    }
    
    .category-image,
    .category-placeholder {
        height: 110px;
    }
    
    .table th {
        font-size: 0.55rem;
        padding: 0.2rem 0.15rem;
    }
    
    .table td {
        font-size: 0.6rem;
        padding: 0.2rem 0.15rem;
    }
    
    .table td .badge {
        font-size: 0.45rem;
        padding: 0.05rem 0.2rem;
    }
    
    .btn-group-sm .btn {
        font-size: 0.5rem;
        padding: 0.1rem 0.2rem;
    }
    
    .btn-group-sm .btn i {
        font-size: 0.5rem;
    }
    
    .info-label {
        font-size: 0.65rem;
    }
    
    .info-value {
        font-size: 0.75rem;
    }
    
    .card-header h5 {
        font-size: 0.85rem;
    }
    
    .card-body .d-flex.align-items-start {
        flex-direction: column;
        align-items: center !important;
        text-align: center;
    }
    
    .card-body .d-flex.align-items-start .me-3 {
        margin-right: 0 !important;
        margin-bottom: 0.5rem;
    }
    
    .card-body .d-flex.align-items-start .flex-grow-1 {
        text-align: center;
    }
    
    .badge {
        font-size: 0.5rem;
        padding: 0.1rem 0.3rem;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .card-hover-sm:hover {
        transform: none !important;
    }
    .stat-item:hover {
        transform: none !important;
    }
    .category-image:hover {
        transform: none !important;
    }
    .category-placeholder:hover {
        transform: none !important;
    }
}
</style>
";
        yield from [];
    }

    // line 463
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 464
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- En-tête avec navigation et actions -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 471
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Catégories
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 475)), "truncate", [20, "..."], "method", false, false, false, 475), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            
            <div class=\"d-flex flex-wrap align-items-center gap-2\">
                <a href=\"";
        // line 480
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
                </a>
                <h1 class=\"h4 h-md-3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-tags me-2\"></i> ";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 484), "html", null, true);
        yield "
                </h1>
            </div>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Détails de la catégorie de produits</p>
        </div>
        <div class=\"d-flex gap-1 gap-md-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 490)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-sm btn-hover-lift flex-fill flex-sm-grow-0\">
                <i class=\"fas fa-edit me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
            </a>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-sm btn-hover-lift flex-fill flex-sm-grow-0\"
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#deleteCategoryModal\">
                <i class=\"fas fa-trash me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
            </button>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 503));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 504
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        yield "    
    ";
        // line 510
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 510));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 511
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 512
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 516
        yield "
    <div class=\"row g-3 g-md-4\">
        <!-- Carte principale des informations -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"card shadow-lg border-0 mb-3 mb-md-4 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-2\">
                        <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                            <i class=\"fas fa-info-circle me-2\"></i> Informations de la catégorie
                        </h5>
                        <!-- ✅ Badge de statut dans l'en-tête -->
                        <div class=\"d-flex flex-wrap gap-1\">
                            ";
        // line 528
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 529
            yield "                                <span class=\"badge bg-success\">
                                    <i class=\"fas fa-check-circle me-1\"></i> Active
                                </span>
                            ";
        } else {
            // line 533
            yield "                                <span class=\"badge bg-danger\">
                                    <i class=\"fas fa-times-circle me-1\"></i> Inactive
                                </span>
                            ";
        }
        // line 537
        yield "                            ";
        // line 538
        yield "                            ";
        if ((($context["companyType"] ?? null) == "pharmacy")) {
            // line 539
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "companyPublic", [], "any", false, false, false, 539)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 540
                yield "                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-eye me-1\"></i> Visible
                                    </span>
                                ";
            } else {
                // line 544
                yield "                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-eye-slash me-1\"></i> Masquée
                                    </span>
                                ";
            }
            // line 548
            yield "                            ";
        }
        // line 549
        yield "                        </div>
                    </div>
                </div>
                <div class=\"card-body p-3 p-md-4\">
                    <div class=\"row g-3\">
                        <!-- Image de la catégorie -->
                        <div class=\"col-12 col-md-4\">
                            <div class=\"text-center\">
                                ";
        // line 557
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 557)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 558
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 558))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 559), "html", null, true);
            yield "\"
                                         class=\"img-fluid rounded shadow-lg category-image\">
                                ";
        } else {
            // line 562
            yield "                                    <div class=\"bg-gradient-primary rounded d-flex align-items-center justify-content-center category-placeholder\">
                                        <i class=\"fas fa-folder fa-3x fa-md-4x text-white\"></i>
                                    </div>
                                ";
        }
        // line 566
        yield "                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"col-12 col-md-8\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-tag text-primary me-2\"></i> Nom</div>
                                    <div class=\"info-value\">";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 574), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-link text-primary me-2\"></i> Slug</div>
                                    <div class=\"info-value\"><code class=\"bg-light p-1 p-md-2 rounded small\">";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 579), "html", null, true);
        yield "</code></div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-align-left text-primary me-2\"></i> Description</div>
                                    <div class=\"info-value small\">";
        // line 584
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 584), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-sitemap text-primary me-2\"></i> Catégorie parente</div>
                                    <div class=\"info-value\">
                                        ";
        // line 590
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 591
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 591), "id", [], "any", false, false, false, 591)]), "html", null, true);
            yield "\" 
                                               class=\"text-decoration-none\">
                                                <span class=\"badge bg-primary\">
                                                    <i class=\"fas fa-level-up-alt me-1\"></i> ";
            // line 594
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 594), "name", [], "any", false, false, false, 594), "html", null, true);
            yield "
                                                </span>
                                            </a>
                                        ";
        } else {
            // line 598
            yield "                                            <span class=\"text-muted small\">
                                                <i class=\"fas fa-folder me-1\"></i> Catégorie principale
                                            </span>
                                        ";
        }
        // line 602
        yield "                                    </div>
                                </div>
                                
                                ";
        // line 605
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", true, true, false, 605) && CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", false, false, false, 605))) {
            // line 606
            yield "                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-user text-primary me-2\"></i> Créateur</div>
                                    <div class=\"info-value\">";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", false, false, false, 608), "email", [], "any", false, false, false, 608), "html", null, true);
            yield "</div>
                                </div>
                                ";
        }
        // line 611
        yield "                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-plus text-primary me-2\"></i> Créée le</div>
                                    <div class=\"info-value small\">";
        // line 614
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "createdAt", [], "any", false, false, false, 614), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
                                </div>
                                
                                <div class=\"info-item\">
                                    <div class=\"info-label\"><i class=\"fas fa-calendar-edit text-primary me-2\"></i> Modifiée le</div>
                                    <div class=\"info-value small\">
                                        ";
        // line 620
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "updatedAt", [], "any", false, false, false, 620)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 621
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "updatedAt", [], "any", false, false, false, 621), "d/m/Y à H:i"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 623
            yield "                                            <span class=\"text-muted\">Jamais modifiée</span>
                                        ";
        }
        // line 625
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte des statistiques -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-lg border-0 mb-3 mb-md-4 card-hover\">
                <div class=\"card-header bg-gradient-info text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-bar me-2\"></i> Statistiques</h5>
                </div>
                <div class=\"card-body p-3 p-md-4\">
                    <div class=\"text-center mb-3 mb-md-4\">
                        <div class=\"display-6 display-md-4 text-primary mb-1\">";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 642)), "html", null, true);
        yield "</div>
                        <div class=\"text-muted small\">Produits dans cette catégorie</div>
                    </div>
                    
                    <hr>
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-primary\"><i class=\"fas fa-box text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 652), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isActive", [], "any", false, false, false, 652); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits actifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-warning\"><i class=\"fas fa-box text-dark\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 660), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isActive", [], "any", false, false, false, 660); })), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Produits inactifs</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-info\"><i class=\"fas fa-sitemap text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 668)), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Sous-catégories</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-item\">
                            <div class=\"stat-icon bg-success\"><i class=\"fas fa-layer-group text-white\"></i></div>
                            <div class=\"stat-content\">
                                <div class=\"stat-number\">";
        // line 676
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 676)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 676), "children", [], "any", false, false, false, 676)), "html", null, true)) : (0));
        yield "</div>
                                <div class=\"stat-label\">Catégories sœurs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carte actions rapides -->
            <div class=\"card shadow-lg border-0 card-hover\">
                <div class=\"card-header bg-gradient-success text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\"><i class=\"fas fa-bolt me-2\"></i> Actions rapides</h5>
                </div>
                <div class=\"card-body p-3 p-md-4\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 691)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-sm\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        
                        ";
        // line 695
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 695)) > 0)) {
            // line 696
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 696), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye me-2\"></i> Voir les sous-catégories
                            </a>
                        ";
        }
        // line 700
        yield "                        
                        ";
        // line 701
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 701)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 702
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 702), "id", [], "any", false, false, false, 702)]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-sm\">
                                <i class=\"fas fa-level-up-alt me-2\"></i> Voir la catégorie parente
                            </a>
                        ";
        }
        // line 706
        yield "                        
                        <a href=\"";
        // line 707
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 707), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                        </a>
                        ";
        // line 710
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 711
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 711)]), "html", null, true);
            yield "\" 
                                class=\"btn btn-outline-warning btn-sm\">
                                <i class=\"fas fa-percent me-2\"></i> Promotions
                            </a>
                        ";
        }
        // line 715
        yield "    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits dans cette catégorie -->
    <div class=\"card shadow-lg border-0 mb-3 mb-md-4 card-hover\">
        <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3 d-flex flex-wrap justify-content-between align-items-center gap-2\">
            <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                <i class=\"fas fa-boxes me-2\"></i> 
                Produits 
                <span class=\"badge bg-light text-dark ms-2\">";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 728)), "html", null, true);
        yield "</span>
            </h5>
            <a href=\"";
        // line 730
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 730), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter
            </a>
        </div>
        
        <div class=\"card-body p-0 p-md-3\">
            ";
        // line 736
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 736)) > 0)) {
            // line 737
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                             <tr>
                                <th width=\"60\" class=\"d-none d-sm-table-cell\">Image</th>
                                <th>Nom</th>
                                <th class=\"d-none d-md-table-cell\">Description</th>
                                <th class=\"d-none d-lg-table-cell\">Prix achat</th>
                                <th class=\"d-none d-sm-table-cell\">Prix vente</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th class=\"text-end\">Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            ";
            // line 752
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 752));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 753
                yield "                                <tr class=\"product-row\">
                                    <td class=\"d-none d-sm-table-cell\" style=\"width: 50px;\">
                                        ";
                // line 755
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 755) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 755) != "default-product.png"))) {
                    // line 756
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 756))), "html", null, true);
                    yield "\" 
                                                 alt=\"";
                    // line 757
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 757), "html", null, true);
                    yield "\"
                                                 class=\"img-thumbnail\" 
                                                 style=\"width: 45px; height: 45px; object-fit: cover;\">
                                        ";
                } else {
                    // line 761
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 45px; height: 45px;\">
                                                <i class=\"fas fa-box text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 766
                yield "                                    </td>
                                    <td><strong class=\"small\">";
                // line 767
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 767)), "truncate", [20], "method", false, false, false, 767), "html", null, true);
                yield "</strong></td>
                                    <td class=\"d-none d-md-table-cell small\">";
                // line 768
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 768)), "truncate", [30, "..."], "method", false, false, false, 768), "html", null, true);
                yield "</td>
                                    <td class=\"d-none d-lg-table-cell small\"><span class=\"fw-bold text-primary\">";
                // line 769
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 769), 0, ",", " "), "html", null, true);
                yield "</span></td>
                                    <td class=\"d-none d-sm-table-cell\">
                                        ";
                // line 771
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 771))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 772
                    yield "                                            <span class=\"fw-bold text-success small\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 772), 0, ",", " "), "html", null, true);
                    yield "</span>
                                        ";
                } else {
                    // line 774
                    yield "                                            <span class=\"text-muted small\">-</span>
                                        ";
                }
                // line 776
                yield "                                    </td>
                                    <td>
                                        <span class=\"badge ";
                // line 778
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 778) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 778))) ? ("bg-warning text-dark") : ("bg-info"));
                yield "\">
                                            ";
                // line 779
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 779), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-wrap gap-1\">
                                            <span class=\"badge ";
                // line 784
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 784)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
                yield "\">
                                                ";
                // line 785
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 785)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                            </span>
                                            ";
                // line 788
                yield "                                            ";
                if ((($context["companyType"] ?? null) == "pharmacy")) {
                    // line 789
                    yield "                                                <span class=\"badge ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 789)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-primary") : ("bg-secondary"));
                    yield "\" style=\"font-size: 8px;\">
                                                    <i class=\"fas ";
                    // line 790
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 790)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-eye") : ("fa-eye-slash"));
                    yield " me-1\"></i>
                                                    ";
                    // line 791
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 791)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Visible") : ("Masqué"));
                    yield "
                                                </span>
                                            ";
                }
                // line 794
                yield "                                        </div>
                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 798
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 798)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 801
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 801)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 808
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 812
            yield "                <div class=\"text-center py-4 py-md-5\">
                    <i class=\"fas fa-box-open fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h5 class=\"text-muted fs-6 fs-md-5\">Aucun produit dans cette catégorie</h5>
                    <p class=\"text-muted small mb-3 mb-md-4\">Commencez par ajouter des produits à cette catégorie</p>
                    <a href=\"";
            // line 816
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 816), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                        <i class=\"fas fa-plus me-1\"></i> Ajouter un produit
                    </a>
                </div>
            ";
        }
        // line 821
        yield "        </div>
    </div>

    <!-- Liste des sous-catégories -->
    ";
        // line 825
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 825)) > 0)) {
            // line 826
            yield "    <div class=\"card shadow-lg border-0 card-hover\">
        <div class=\"card-header bg-gradient-info text-white py-2 py-md-3 d-flex flex-wrap justify-content-between align-items-center gap-2\">
            <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                <i class=\"fas fa-sitemap me-2\"></i> 
                Sous-catégories 
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 831
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 831)), "html", null, true);
            yield "</span>
            </h5>
            <a href=\"";
            // line 833
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "?parent=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 833), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\">
                <i class=\"fas fa-plus me-1\"></i> Ajouter
            </a>
        </div>
        
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3\">
                ";
            // line 840
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 840));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 841
                yield "                <div class=\"col-12 col-sm-6 col-md-4\">
                    <div class=\"card border-0 bg-light h-100 card-hover-sm\">
                        <div class=\"card-body p-2 p-md-3\">
                            <div class=\"d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-2\">
                                ";
                // line 845
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 845)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 846
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 846))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 847
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 847), "html", null, true);
                    yield "\"
                                         class=\"rounded\"
                                         style=\"width: 50px; height: 50px; object-fit: cover;\">
                                ";
                } else {
                    // line 851
                    yield "                                    <div class=\"bg-secondary rounded d-flex align-items-center justify-content-center\"
                                         style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-folder text-white\"></i>
                                    </div>
                                ";
                }
                // line 856
                yield "                                <div class=\"flex-grow-1 text-center text-sm-start\">
                                    <h6 class=\"mb-1 fs-6 fs-md-5\">";
                // line 857
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 857)), "truncate", [15], "method", false, false, false, 857), "html", null, true);
                yield "</h6>
                                    <div class=\"d-flex flex-wrap justify-content-center justify-content-sm-start align-items-center gap-1 mb-2\">
                                        <span class=\"badge ";
                // line 859
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 859)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
                yield "\" style=\"font-size: 0.6rem;\">
                                            ";
                // line 860
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 860)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
                yield "
                                        </span>
                                        <span class=\"badge bg-primary\" style=\"font-size: 0.6rem;\">";
                // line 862
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["child"], "products", [], "any", false, false, false, 862)), "html", null, true);
                yield "</span>
                                        ";
                // line 864
                yield "                                        ";
                if ((($context["companyType"] ?? null) == "pharmacy")) {
                    // line 865
                    yield "                                            <span class=\"badge ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "companyPublic", [], "any", false, false, false, 865)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-primary") : ("bg-secondary"));
                    yield "\" style=\"font-size: 0.5rem;\">
                                                <i class=\"fas ";
                    // line 866
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "companyPublic", [], "any", false, false, false, 866)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-eye") : ("fa-eye-slash"));
                    yield " me-1\"></i>
                                                ";
                    // line 867
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "companyPublic", [], "any", false, false, false, 867)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Visible") : ("Masquée"));
                    yield "
                                            </span>
                                        ";
                }
                // line 870
                yield "                                    </div>
                                    <div class=\"d-flex gap-1 justify-content-center justify-content-sm-start\">
                                        <a href=\"";
                // line 872
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 872)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 875
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 875)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 885
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 889
        yield "</div>

<!-- Modal de suppression avec confirmation -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la catégorie
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-trash-alt fa-3x fa-md-4 text-danger mb-3\"></i>
                <h5 class=\"fs-6\">Êtes-vous sûr de vouloir supprimer <strong id=\"deleteCategoryNameSpan\">";
        // line 903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 903), "html", null, true);
        yield "</strong> ?</h5>
                <p class=\"text-muted small\">Cette action est irréversible.</p>

                <div id=\"deleteWarning\" class=\"alert alert-warning mt-2 p-2 small\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <span id=\"deleteWarningMessage\"></span>
                </div>

                <div id=\"deleteConfirmInputGroup\" class=\"input-group mt-2\" style=\"display: none;\">
                    <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                    <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control form-control-sm\" placeholder=\"Saisissez le nom pour confirmer\">
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2 flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form id=\"deleteForm\" method=\"post\" class=\"flex-grow-1 flex-md-grow-0\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger w-100 btn-sm\" id=\"deleteConfirmBtn\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 932
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 933
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Suppression avec confirmation par saisie ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');
    const deleteConfirmInput = document.getElementById('deleteConfirmName');
    const deleteWarning = document.getElementById('deleteWarning');
    const deleteWarningMessage = document.getElementById('deleteWarningMessage');
    const deleteConfirmInputGroup = document.getElementById('deleteConfirmInputGroup');
    const deleteCategoryNameSpan = document.getElementById('deleteCategoryNameSpan');

    const categoryName = \"";
        // line 947
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 947), "js"), "html", null, true);
        yield "\";
    const hasProducts = ";
        // line 948
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 948)) > 0)) ? ("true") : ("false"));
        yield ";
    const hasChildren = ";
        // line 949
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 949)) > 0)) ? ("true") : ("false"));
        yield ";

    // Initialisation du modal (affichage conditionnel)
    if (hasProducts || hasChildren) {
        let message = '';
        if (hasProducts && hasChildren) {
            message = `Cette catégorie contient des produits et des sous-catégories.`;
        } else if (hasProducts) {
            message = `Cette catégorie contient des produits.`;
        } else if (hasChildren) {
            message = `Cette catégorie contient des sous-catégories.`;
        }
        message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${categoryName}\".`;
        deleteWarningMessage.textContent = message;
        deleteWarning.style.display = 'block';
        deleteConfirmInputGroup.style.display = 'flex';
        deleteConfirmBtn.disabled = true;
    } else {
        deleteWarningMessage.textContent = `La catégorie \"\${categoryName}\" sera définitivement supprimée.`;
        deleteWarning.style.display = 'block';
        deleteConfirmBtn.disabled = false;
    }

    // Activer le bouton quand le nom saisi correspond
    if (deleteConfirmInput && deleteConfirmBtn) {
        deleteConfirmInput.addEventListener('input', function() {
            deleteConfirmBtn.disabled = this.value.trim() !== categoryName;
        });
    }

    // Remplir le formulaire au moment de l'ouverture du modal
    const deleteButton = document.querySelector('[data-bs-target=\"#deleteCategoryModal\"]');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            deleteForm.action = `/admin/category/";
        // line 983
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 983), "html", null, true);
        yield "`;
            deleteToken.value = '";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 984))), "html", null, true);
        yield "';
            deleteConfirmInput.value = '';
            deleteConfirmBtn.disabled = (hasProducts || hasChildren);
            deleteModal.show();
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
        return "admin/category/show.html.twig";
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
        return array (  1402 => 984,  1398 => 983,  1361 => 949,  1357 => 948,  1353 => 947,  1336 => 933,  1329 => 932,  1296 => 903,  1280 => 889,  1274 => 885,  1258 => 875,  1252 => 872,  1248 => 870,  1242 => 867,  1238 => 866,  1233 => 865,  1230 => 864,  1226 => 862,  1221 => 860,  1217 => 859,  1212 => 857,  1209 => 856,  1202 => 851,  1195 => 847,  1190 => 846,  1188 => 845,  1182 => 841,  1178 => 840,  1166 => 833,  1161 => 831,  1154 => 826,  1152 => 825,  1146 => 821,  1136 => 816,  1130 => 812,  1124 => 808,  1111 => 801,  1105 => 798,  1099 => 794,  1093 => 791,  1089 => 790,  1084 => 789,  1081 => 788,  1076 => 785,  1072 => 784,  1064 => 779,  1060 => 778,  1056 => 776,  1052 => 774,  1046 => 772,  1044 => 771,  1039 => 769,  1035 => 768,  1031 => 767,  1028 => 766,  1021 => 761,  1014 => 757,  1009 => 756,  1007 => 755,  1003 => 753,  999 => 752,  982 => 737,  980 => 736,  969 => 730,  964 => 728,  949 => 715,  940 => 711,  938 => 710,  930 => 707,  927 => 706,  919 => 702,  917 => 701,  914 => 700,  904 => 696,  902 => 695,  895 => 691,  877 => 676,  866 => 668,  855 => 660,  844 => 652,  831 => 642,  812 => 625,  808 => 623,  802 => 621,  800 => 620,  791 => 614,  786 => 611,  780 => 608,  776 => 606,  774 => 605,  769 => 602,  763 => 598,  756 => 594,  749 => 591,  747 => 590,  738 => 584,  730 => 579,  722 => 574,  712 => 566,  706 => 562,  700 => 559,  695 => 558,  693 => 557,  683 => 549,  680 => 548,  674 => 544,  668 => 540,  665 => 539,  662 => 538,  660 => 537,  654 => 533,  648 => 529,  646 => 528,  632 => 516,  622 => 512,  619 => 511,  615 => 510,  612 => 509,  602 => 505,  599 => 504,  595 => 503,  579 => 490,  570 => 484,  563 => 480,  555 => 475,  548 => 471,  539 => 464,  532 => 463,  73 => 8,  66 => 7,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\show.html.twig");
    }
}
