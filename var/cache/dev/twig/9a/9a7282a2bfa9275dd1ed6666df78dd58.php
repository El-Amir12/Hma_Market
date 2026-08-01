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

/* marketplace/favorites/index.html.twig */
class __TwigTemplate_3f87ace256188b62913328f676e35999 extends Template
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
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/favorites/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/favorites/index.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Mes favoris - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root {
        --card-radius: 16px;
        --card-shadow: 0 2px 12px rgba(0,0,0,0.06);
        --card-shadow-hover: 0 12px 35px rgba(0,0,0,0.12);
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
    }

    /* ==================== PAGE HEADER ==================== */
    .page-header-favorites {
        margin-bottom: 2rem;
        padding: 1.5rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .page-header-favorites .header-left h1 {
        font-size: 1.6rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.1rem;
    }

    .page-header-favorites .header-left h1 i {
        color: #ef4444;
        margin-right: 0.5rem;
    }

    .page-header-favorites .header-left .subtitle {
        color: #64748b;
        font-size: 0.9rem;
        margin: 0;
    }

    .page-header-favorites .header-right .stat-badge {
        background: #fef2f2;
        color: #dc2626;
        padding: 0.4rem 1.2rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border: 1px solid #fecaca;
    }

    /* ==================== PRODUCT CARD ==================== */
    .favorite-card {
        background: white;
        border-radius: var(--card-radius);
        overflow: hidden;
        border: 1px solid #e5e7eb;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: var(--card-shadow);
        cursor: pointer;
    }

    .favorite-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-shadow-hover);
        border-color: #ef4444;
    }

    /* ==================== PRODUCT IMAGE ==================== */
    .favorite-card .product-image {
        height: 200px;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }

    .favorite-card .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .favorite-card:hover .product-image img {
        transform: scale(1.05);
    }

    .favorite-card .product-image .placeholder {
        font-size: 4rem;
        color: #cbd5e1;
    }

    /* ==================== FAVORITE BUTTON ==================== */
    .favorite-card .favorite-btn {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255,255,255,0.95);
        border: none;
        color: #ef4444;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(4px);
        z-index: 3;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        font-size: 1rem;
    }

    .favorite-card .favorite-btn:hover {
        background: white;
        transform: scale(1.1);
        box-shadow: 0 4px 16px rgba(239, 68, 68, 0.2);
    }

    /* ==================== PRODUCT BODY ==================== */
    .favorite-card .product-body {
        padding: 1rem 1.2rem 1.2rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .favorite-card .product-category {
        font-size: 0.7rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-bottom: 0.3rem;
    }

    .favorite-card .product-name {
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 0.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.4;
        color: #0f172a;
        flex: 1;
        min-height: 44px;
    }

    .favorite-card .product-price {
        font-weight: 800;
        font-size: 1.2rem;
        color: var(--primary-color);
        margin-bottom: 0.5rem;
    }

    /* ==================== FAVORITE METADATA ==================== */
    .favorite-card .favorite-meta {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.7rem;
        color: #94a3b8;
        margin-top: 0.25rem;
        padding-top: 0.5rem;
        border-top: 1px solid #f1f5f9;
    }

    .favorite-card .favorite-meta i {
        font-size: 0.6rem;
    }

    .favorite-card .favorite-meta .date {
        color: #64748b;
    }

    /* ==================== VIEW DETAILS BUTTON ==================== */
    .favorite-card .view-details-btn {
        width: 100%;
        border-radius: 10px;
        padding: 0.5rem;
        border: 2px solid #e5e7eb;
        background: transparent;
        color: #64748b;
        font-weight: 600;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        margin-top: 0.5rem;
    }

    .favorite-card .view-details-btn:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
    }

    /* ==================== PRODUCTS GRID ==================== */
    .favorites-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    /* ==================== MODAL ==================== */
    .favorite-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        overflow: hidden;
    }

    .favorite-modal .modal-header {
        background: var(--primary-gradient);
        color: white;
        padding: 1.2rem 1.5rem;
        border-bottom: none;
    }

    .favorite-modal .modal-header .btn-close {
        filter: brightness(0) invert(1);
        opacity: 0.7;
    }

    .favorite-modal .modal-header .btn-close:hover {
        opacity: 1;
    }

    .favorite-modal .modal-body {
        padding: 1.5rem;
    }

    .favorite-modal .modal-footer {
        border-top: none;
        padding: 1rem 1.5rem 1.5rem;
    }

    /* ==================== MODAL PRODUCT INFO ==================== */
    .modal-product-image {
        width: 100%;
        max-height: 250px;
        object-fit: contain;
        border-radius: 12px;
        background: #f8fafc;
        padding: 0.5rem;
        border: 1px solid #e5e7eb;
    }

    .modal-product-image-placeholder {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8fafc;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        font-size: 4rem;
        color: #cbd5e1;
    }

    .modal-info-row {
        display: flex;
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .modal-info-row:last-child {
        border-bottom: none;
    }

    .modal-info-label {
        font-weight: 600;
        color: #64748b;
        min-width: 120px;
        font-size: 0.85rem;
    }

    .modal-info-value {
        color: #0f172a;
        font-size: 0.9rem;
    }

    .modal-info-value .badge-category {
        background: #e8f0fe;
        color: var(--primary-color);
        padding: 0.2rem 0.7rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .modal-info-value .badge-favorite {
        background: #fef2f2;
        color: #dc2626;
        padding: 0.2rem 0.7rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    /* ==================== EMPTY STATE ==================== */
    .empty-state-favorites {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }

    .empty-state-favorites .icon-wrapper {
        width: 80px;
        height: 80px;
        background: #fef2f2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .empty-state-favorites .icon-wrapper i {
        font-size: 2.5rem;
        color: #ef4444;
    }

    .empty-state-favorites h4 {
        color: #0f172a;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .empty-state-favorites p {
        color: #94a3b8;
        max-width: 450px;
        margin: 0 auto 1.5rem;
    }

    .empty-state-favorites .btn-primary {
        border-radius: 50px;
        padding: 0.6rem 2rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .empty-state-favorites .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(4, 99, 241, 0.3);
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .favorites-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
        }
        .favorite-card .product-image {
            height: 160px;
        }
    }

    @media (max-width: 768px) {
        .page-header-favorites {
            flex-direction: column;
            align-items: flex-start;
            padding: 1rem 1.25rem;
        }
        .page-header-favorites .header-left h1 {
            font-size: 1.3rem;
        }
        .page-header-favorites .header-right {
            width: 100%;
        }
        .page-header-favorites .header-right .stat-badge {
            width: 100%;
            justify-content: center;
        }

        .favorites-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
        }
        .favorite-card .product-image {
            height: 140px;
        }
        .favorite-card .product-name {
            font-size: 0.9rem;
            min-height: 38px;
        }
        .favorite-card .product-price {
            font-size: 1rem;
        }

        .modal-product-image {
            max-height: 180px;
        }
        .modal-info-row {
            flex-direction: column;
            gap: 0.2rem;
        }
        .modal-info-label {
            min-width: auto;
        }
    }

    @media (max-width: 480px) {
        .favorites-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
        }
        .favorite-card .product-image {
            height: 120px;
        }
        .favorite-card .product-body {
            padding: 0.75rem 0.8rem 1rem;
        }
        .favorite-card .product-name {
            font-size: 0.8rem;
            min-height: 34px;
        }
        .favorite-card .product-price {
            font-size: 0.9rem;
        }
        .favorite-card .favorite-btn {
            width: 30px;
            height: 30px;
            font-size: 0.8rem;
            top: 8px;
            right: 8px;
        }
        .favorite-card .view-details-btn {
            font-size: 0.7rem;
            padding: 0.3rem;
        }
        .favorite-card .favorite-meta {
            font-size: 0.6rem;
        }
        .page-header-favorites .header-left h1 {
            font-size: 1.1rem;
        }
        .empty-state-favorites {
            padding: 2rem 1rem;
        }
        .empty-state-favorites .icon-wrapper {
            width: 60px;
            height: 60px;
        }
        .empty-state-favorites .icon-wrapper i {
            font-size: 2rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 483
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

        // line 484
        yield "<div class=\"container py-4\">
    <!-- ==================== PAGE HEADER ==================== -->
    <div class=\"page-header-favorites\">
        <div class=\"header-left\">
            <h1>
                <i class=\"fas fa-heart\"></i>
                Mes favoris
            </h1>
            <p class=\"subtitle\">
                Retrouvez tous vos produits préférés en un seul endroit
            </p>
        </div>
        <div class=\"header-right\">
            <span class=\"stat-badge\">
                <i class=\"fas fa-heart\"></i>
                ";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 499, $this->source); })())), "html", null, true);
        yield " produit(s)
            </span>
        </div>
    </div>

    <!-- ==================== FAVORITES GRID ==================== -->
    ";
        // line 505
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 505, $this->source); })())) > 0)) {
            // line 506
            yield "        <div class=\"favorites-grid\">
            ";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 507, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 508
                yield "                <div class=\"favorite-card\" onclick=\"openFavoriteModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 508), "html", null, true);
                yield ")\" data-favorite-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 508), "html", null, true);
                yield "\">
                    <div class=\"product-image\">
                        ";
                // line 510
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 510), "image", [], "any", false, false, false, 510) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 510), "image", [], "any", false, false, false, 510) != "default-product.png"))) {
                    // line 511
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 511), "image", [], "any", false, false, false, 511))), "html", null, true);
                    yield "\" 
                                 alt=\"";
                    // line 512
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 512), "name", [], "any", false, false, false, 512), "html", null, true);
                    yield "\" 
                                 loading=\"lazy\">
                        ";
                } else {
                    // line 515
                    yield "                            <div class=\"placeholder\">
                                <i class=\"fas fa-box\"></i>
                            </div>
                        ";
                }
                // line 519
                yield "                        <button class=\"favorite-btn\" 
                                onclick=\"event.stopPropagation(); toggleFavorite(this, ";
                // line 520
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 520), "id", [], "any", false, false, false, 520), "html", null, true);
                yield ")\"
                                data-product-id=\"";
                // line 521
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 521), "id", [], "any", false, false, false, 521), "html", null, true);
                yield "\">
                            <i class=\"fas fa-heart\"></i>
                        </button>
                    </div>
                    
                    <div class=\"product-body\">
                        <div class=\"product-category\">
                            ";
                // line 528
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 528), "category", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 528), "category", [], "any", false, false, false, 528), "name", [], "any", false, false, false, 528), "html", null, true)) : ("Non catégorisé"));
                yield "
                        </div>
                        
                        <h6 class=\"product-name\">";
                // line 531
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 531), "name", [], "any", false, false, false, 531), "html", null, true);
                yield "</h6>
                        
                        <div class=\"product-price\">
                            ";
                // line 534
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 534), "salePrice", [], "any", false, false, false, 534), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 534), "hmaService", [], "any", false, false, false, 534)), "html", null, true);
                yield "
                        </div>
                        
                        <div class=\"favorite-meta\">
                            <i class=\"fas fa-calendar-plus\"></i>
                            <span class=\"date\">Ajouté le ";
                // line 539
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "createdAt", [], "any", false, false, false, 539), "d/m/Y"), "html", null, true);
                yield "</span>
                        </div>
                        
                        <button class=\"view-details-btn\" onclick=\"event.stopPropagation(); openFavoriteModal(";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 542), "html", null, true);
                yield ")\">
                            <i class=\"fas fa-eye\"></i> Voir les détails
                        </button>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 548
            yield "        </div>
    ";
        } else {
            // line 550
            yield "        <!-- ==================== EMPTY STATE ==================== -->
        <div class=\"empty-state-favorites\">
            <div class=\"icon-wrapper\">
                <i class=\"fas fa-heart\"></i>
            </div>
            <h4>Aucun favori</h4>
            <p>
                Vous n'avez pas encore ajouté de produits à vos favoris.
                <br>Commencez à explorer notre catalogue et cliquez sur le cœur ❤️ pour ajouter vos produits préférés.
            </p>
            <a href=\"";
            // line 560
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_products");
            yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-arrow-left me-2\"></i> Découvrir les produits
            </a>
        </div>
    ";
        }
        // line 565
        yield "</div>

<!-- ==================== MODAL DÉTAIL FAVORI ==================== -->
<div class=\"modal fade favorite-modal\" id=\"favoriteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"favoriteModalTitle\">
                    <i class=\"fas fa-heart me-2\"></i> Détail du favori
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"favoriteModalContent\">
                    <div class=\"text-center py-4\">
                        <i class=\"fas fa-spinner fa-spin fa-2x text-primary\"></i>
                        <p class=\"mt-2 text-muted\">Chargement...</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Fermer
                </button>
                <a href=\"#\" id=\"viewProductBtn\" class=\"btn btn-primary\">
                    <i class=\"fas fa-eye me-1\"></i> Voir le produit
                </a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 598
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 599
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== STOCKER LES DONNÉES DES FAVORIS ====================
    window.favoritesData = {};
    ";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 604, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 605
            yield "        window.favoritesData[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 605), "html", null, true);
            yield "] = {
            id: ";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 606), "html", null, true);
            yield ",
            productId: ";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 607), "id", [], "any", false, false, false, 607), "html", null, true);
            yield ",
            productName: \"";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 608), "name", [], "any", false, false, false, 608), "js"), "html", null, true);
            yield "\",
            productCategory: \"";
            // line 609
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 609), "category", [], "any", false, false, false, 609)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 609), "category", [], "any", false, false, false, 609), "name", [], "any", false, false, false, 609), "js"), "html", null, true)) : ("Non catégorisé"));
            yield "\",
            productPrice: \"";
            // line 610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 610), "salePrice", [], "any", false, false, false, 610), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 610), "hmaService", [], "any", false, false, false, 610)), "js"), "html", null, true);
            yield "\",
            productImage: \"";
            // line 611
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 611), "image", [], "any", false, false, false, 611) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 611), "image", [], "any", false, false, false, 611) != "default-product.png"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 611), "image", [], "any", false, false, false, 611))), "html", null, true)) : (""));
            yield "\",
            createdAt: \"";
            // line 612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "createdAt", [], "any", false, false, false, 612), "d/m/Y à H:i"), "html", null, true);
            yield "\",
            productDescription: \"";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, true, false, 613), "description", [], "any", true, true, false, 613)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 613), "description", [], "any", false, false, false, 613), "Aucune description")) : ("Aucune description")), "js"), "html", null, true);
            yield "\",
            productStock: ";
            // line 614
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, true, false, 614), "stockQuantity", [], "any", true, true, false, 614)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 614), "stockQuantity", [], "any", false, false, false, 614), 0)) : (0)), "html", null, true);
            yield ",
            productUnit: \"";
            // line 615
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, true, false, 615), "unit", [], "any", true, true, false, 615)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 615), "unit", [], "any", false, false, false, 615), "pièce")) : ("pièce")), "html", null, true);
            yield "\",
            productBarcode: \"";
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, true, false, 616), "barcode", [], "any", true, true, false, 616)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 616), "barcode", [], "any", false, false, false, 616), "")) : ("")), "html", null, true);
            yield "\",
            productPrescription: ";
            // line 617
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 617), "prescriptionRequired", [], "any", false, false, false, 617)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield ",
            productForm: \"";
            // line 618
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, true, false, 618), "form", [], "any", true, true, false, 618)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 618), "form", [], "any", false, false, false, 618), "")) : ("")), "html", null, true);
            yield "\",
            productDosage: \"";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, true, false, 619), "dosage", [], "any", true, true, false, 619)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "product", [], "any", false, false, false, 619), "dosage", [], "any", false, false, false, 619), "")) : ("")), "html", null, true);
            yield "\"
        };
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        yield "
    // ==================== OUVRIRE LE MODAL ====================
    window.openFavoriteModal = function(favoriteId) {
        const data = window.favoritesData[favoriteId];
        if (!data) {
            showNotification('Erreur : favori non trouvé', 'error');
            return;
        }

        const modal = new bootstrap.Modal(document.getElementById('favoriteModal'));
        const content = document.getElementById('favoriteModalContent');
        const title = document.getElementById('favoriteModalTitle');
        const viewBtn = document.getElementById('viewProductBtn');

        title.innerHTML = '<i class=\"fas fa-heart text-danger me-2\"></i> ' + data.productName;
        viewBtn.href = '/marketplace/product/' + data.productId;

        const isInStock = data.productStock > 0;

        content.innerHTML = `
            <div class=\"row g-4\">
                <div class=\"col-md-5\">
                    \${data.productImage ? `
                        <img src=\"\${data.productImage}\" alt=\"\${data.productName}\" class=\"modal-product-image\">
                    ` : `
                        <div class=\"modal-product-image-placeholder\">
                            <i class=\"fas fa-box\"></i>
                        </div>
                    `}
                </div>
                <div class=\"col-md-7\">
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-tag me-2\"></i>Catégorie</span>
                        <span class=\"modal-info-value\">
                            <span class=\"badge-category\">\${data.productCategory}</span>
                        </span>
                    </div>
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-credit-card me-2\"></i>Prix</span>
                        <span class=\"modal-info-value fw-bold text-primary\">\${data.productPrice}</span>
                    </div>
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-box me-2\"></i>Stock</span>
                        <span class=\"modal-info-value\">
                            \${isInStock ? `
                                <span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i> Disponible (\${data.productStock} \${data.productUnit})</span>
                            ` : `
                                <span class=\"text-danger\"><i class=\"fas fa-times-circle me-1\"></i> Indisponible</span>
                            `}
                        </span>
                    </div>
                    \${data.productBarcode ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-barcode me-2\"></i>Code-barres</span>
                        <span class=\"modal-info-value\" style=\"font-family: monospace;\">\${data.productBarcode}</span>
                    </div>
                    ` : ''}
                    \${data.productForm ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-capsules me-2\"></i>Forme</span>
                        <span class=\"modal-info-value\">\${data.productForm}</span>
                    </div>
                    ` : ''}
                    \${data.productDosage ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-weight me-2\"></i>Dosage</span>
                        <span class=\"modal-info-value\">\${data.productDosage}</span>
                    </div>
                    ` : ''}
                    \${data.productPrescription ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-prescription-bottle me-2\"></i>Prescription</span>
                        <span class=\"modal-info-value\">
                            <span class=\"badge bg-warning text-dark\"><i class=\"fas fa-prescription-bottle me-1\"></i> Obligatoire</span>
                        </span>
                    </div>
                    ` : ''}
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-calendar-plus me-2\"></i>Ajouté le</span>
                        <span class=\"modal-info-value\">\${data.createdAt}</span>
                    </div>
                    \${data.productDescription ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-align-left me-2\"></i>Description</span>
                        <span class=\"modal-info-value\" style=\"font-size: 0.85rem;\">\${data.productDescription}</span>
                    </div>
                    ` : ''}
                </div>
            </div>
        `;

        modal.show();
    };

    // ==================== TOGGLE FAVORI ====================
    window.toggleFavorite = function(btn, productId) {
        const icon = btn.querySelector('i');
        const card = btn.closest('.favorite-card');
        
        btn.disabled = true;
        icon.className = 'fas fa-spinner fa-spin';
        
        fetch('";
        // line 724
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorite_toggle");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ productId: productId })
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(data => {
                    throw new Error(data.error || 'Erreur serveur');
                });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                if (data.isFavorite) {
                    icon.className = 'fas fa-heart';
                    btn.style.color = '#ef4444';
                    showNotification('✓ Ajouté aux favoris', 'success');
                } else {
                    icon.className = 'far fa-heart';
                    btn.style.color = '#94a3b8';
                    if (card) {
                        card.style.opacity = '0.5';
                        setTimeout(() => {
                            card.remove();
                            // Mettre à jour le compteur
                            updateFavoritesCount();
                            // Recharger la page si plus de favoris
                            const remaining = document.querySelectorAll('.favorite-card').length;
                            if (remaining === 0) {
                                location.reload();
                            }
                        }, 300);
                    }
                    showNotification('Retiré des favoris', 'info');
                }
                updateFavoritesCount();
            } else {
                icon.className = 'fas fa-heart';
                btn.style.color = '#ef4444';
                showNotification(data.error || 'Erreur', 'error');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            icon.className = 'fas fa-heart';
            btn.style.color = '#ef4444';
            showNotification(error.message || 'Erreur de connexion', 'error');
        })
        .finally(() => {
            btn.disabled = false;
        });
    };

    // ==================== MISE À JOUR DES COMPTEURS ====================
    window.updateFavoritesCount = function() {
        const badge = document.getElementById('favoritesCount');
        if (badge) {
            fetch('";
        // line 786
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites_count");
        yield "')
                .then(r => r.json())
                .then(data => {
                    badge.textContent = data.count || 0;
                    badge.style.display = data.count > 0 ? 'block' : 'none';
                })
                .catch(() => {});
        }
    };

    // ==================== NOTIFICATIONS ====================
    function showNotification(message, type = 'info') {
        const colors = {
            success: 'bg-success',
            error: 'bg-danger',
            info: 'bg-primary',
            warning: 'bg-warning'
        };
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            info: 'fa-info-circle',
            warning: 'fa-exclamation-triangle'
        };
        
        const notification = document.createElement('div');
        notification.className = `position-fixed bottom-0 end-0 p-3 m-3 \${colors[type] || colors.info} text-white rounded-4 shadow-lg`;
        notification.style.zIndex = '9999';
        notification.style.animation = 'slideUp 0.3s ease';
        notification.style.maxWidth = '400px';
        notification.style.boxShadow = '0 10px 40px rgba(0,0,0,0.15)';
        notification.innerHTML = `
            <div class=\"d-flex align-items-center gap-2\">
                <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                <span class=\"fw-medium\">\${message}</span>
                <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('.position-fixed').remove()\" style=\"opacity: 0.6;\"></button>
            </div>
        `;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.animation = 'slideDown 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 4000);
    }
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
        return "marketplace/favorites/index.html.twig";
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
        return array (  1043 => 786,  978 => 724,  874 => 622,  865 => 619,  861 => 618,  857 => 617,  853 => 616,  849 => 615,  845 => 614,  841 => 613,  837 => 612,  833 => 611,  829 => 610,  825 => 609,  821 => 608,  817 => 607,  813 => 606,  808 => 605,  804 => 604,  796 => 599,  783 => 598,  741 => 565,  733 => 560,  721 => 550,  717 => 548,  705 => 542,  699 => 539,  691 => 534,  685 => 531,  679 => 528,  669 => 521,  665 => 520,  662 => 519,  656 => 515,  650 => 512,  645 => 511,  643 => 510,  635 => 508,  631 => 507,  628 => 506,  626 => 505,  617 => 499,  600 => 484,  587 => 483,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/favorites/index.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Mes favoris - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --card-radius: 16px;
        --card-shadow: 0 2px 12px rgba(0,0,0,0.06);
        --card-shadow-hover: 0 12px 35px rgba(0,0,0,0.12);
        --primary-gradient: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
    }

    /* ==================== PAGE HEADER ==================== */
    .page-header-favorites {
        margin-bottom: 2rem;
        padding: 1.5rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 1px solid #e5e7eb;
        box-shadow: var(--card-shadow);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .page-header-favorites .header-left h1 {
        font-size: 1.6rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.1rem;
    }

    .page-header-favorites .header-left h1 i {
        color: #ef4444;
        margin-right: 0.5rem;
    }

    .page-header-favorites .header-left .subtitle {
        color: #64748b;
        font-size: 0.9rem;
        margin: 0;
    }

    .page-header-favorites .header-right .stat-badge {
        background: #fef2f2;
        color: #dc2626;
        padding: 0.4rem 1.2rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border: 1px solid #fecaca;
    }

    /* ==================== PRODUCT CARD ==================== */
    .favorite-card {
        background: white;
        border-radius: var(--card-radius);
        overflow: hidden;
        border: 1px solid #e5e7eb;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: var(--card-shadow);
        cursor: pointer;
    }

    .favorite-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-shadow-hover);
        border-color: #ef4444;
    }

    /* ==================== PRODUCT IMAGE ==================== */
    .favorite-card .product-image {
        height: 200px;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }

    .favorite-card .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .favorite-card:hover .product-image img {
        transform: scale(1.05);
    }

    .favorite-card .product-image .placeholder {
        font-size: 4rem;
        color: #cbd5e1;
    }

    /* ==================== FAVORITE BUTTON ==================== */
    .favorite-card .favorite-btn {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255,255,255,0.95);
        border: none;
        color: #ef4444;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(4px);
        z-index: 3;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        font-size: 1rem;
    }

    .favorite-card .favorite-btn:hover {
        background: white;
        transform: scale(1.1);
        box-shadow: 0 4px 16px rgba(239, 68, 68, 0.2);
    }

    /* ==================== PRODUCT BODY ==================== */
    .favorite-card .product-body {
        padding: 1rem 1.2rem 1.2rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .favorite-card .product-category {
        font-size: 0.7rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-bottom: 0.3rem;
    }

    .favorite-card .product-name {
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 0.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.4;
        color: #0f172a;
        flex: 1;
        min-height: 44px;
    }

    .favorite-card .product-price {
        font-weight: 800;
        font-size: 1.2rem;
        color: var(--primary-color);
        margin-bottom: 0.5rem;
    }

    /* ==================== FAVORITE METADATA ==================== */
    .favorite-card .favorite-meta {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.7rem;
        color: #94a3b8;
        margin-top: 0.25rem;
        padding-top: 0.5rem;
        border-top: 1px solid #f1f5f9;
    }

    .favorite-card .favorite-meta i {
        font-size: 0.6rem;
    }

    .favorite-card .favorite-meta .date {
        color: #64748b;
    }

    /* ==================== VIEW DETAILS BUTTON ==================== */
    .favorite-card .view-details-btn {
        width: 100%;
        border-radius: 10px;
        padding: 0.5rem;
        border: 2px solid #e5e7eb;
        background: transparent;
        color: #64748b;
        font-weight: 600;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        margin-top: 0.5rem;
    }

    .favorite-card .view-details-btn:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #f8fafc;
    }

    /* ==================== PRODUCTS GRID ==================== */
    .favorites-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    /* ==================== MODAL ==================== */
    .favorite-modal .modal-content {
        border-radius: var(--card-radius);
        border: none;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        overflow: hidden;
    }

    .favorite-modal .modal-header {
        background: var(--primary-gradient);
        color: white;
        padding: 1.2rem 1.5rem;
        border-bottom: none;
    }

    .favorite-modal .modal-header .btn-close {
        filter: brightness(0) invert(1);
        opacity: 0.7;
    }

    .favorite-modal .modal-header .btn-close:hover {
        opacity: 1;
    }

    .favorite-modal .modal-body {
        padding: 1.5rem;
    }

    .favorite-modal .modal-footer {
        border-top: none;
        padding: 1rem 1.5rem 1.5rem;
    }

    /* ==================== MODAL PRODUCT INFO ==================== */
    .modal-product-image {
        width: 100%;
        max-height: 250px;
        object-fit: contain;
        border-radius: 12px;
        background: #f8fafc;
        padding: 0.5rem;
        border: 1px solid #e5e7eb;
    }

    .modal-product-image-placeholder {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8fafc;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        font-size: 4rem;
        color: #cbd5e1;
    }

    .modal-info-row {
        display: flex;
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .modal-info-row:last-child {
        border-bottom: none;
    }

    .modal-info-label {
        font-weight: 600;
        color: #64748b;
        min-width: 120px;
        font-size: 0.85rem;
    }

    .modal-info-value {
        color: #0f172a;
        font-size: 0.9rem;
    }

    .modal-info-value .badge-category {
        background: #e8f0fe;
        color: var(--primary-color);
        padding: 0.2rem 0.7rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .modal-info-value .badge-favorite {
        background: #fef2f2;
        color: #dc2626;
        padding: 0.2rem 0.7rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    /* ==================== EMPTY STATE ==================== */
    .empty-state-favorites {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: var(--card-radius);
        border: 2px dashed #e5e7eb;
    }

    .empty-state-favorites .icon-wrapper {
        width: 80px;
        height: 80px;
        background: #fef2f2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .empty-state-favorites .icon-wrapper i {
        font-size: 2.5rem;
        color: #ef4444;
    }

    .empty-state-favorites h4 {
        color: #0f172a;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .empty-state-favorites p {
        color: #94a3b8;
        max-width: 450px;
        margin: 0 auto 1.5rem;
    }

    .empty-state-favorites .btn-primary {
        border-radius: 50px;
        padding: 0.6rem 2rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .empty-state-favorites .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(4, 99, 241, 0.3);
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 992px) {
        .favorites-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
        }
        .favorite-card .product-image {
            height: 160px;
        }
    }

    @media (max-width: 768px) {
        .page-header-favorites {
            flex-direction: column;
            align-items: flex-start;
            padding: 1rem 1.25rem;
        }
        .page-header-favorites .header-left h1 {
            font-size: 1.3rem;
        }
        .page-header-favorites .header-right {
            width: 100%;
        }
        .page-header-favorites .header-right .stat-badge {
            width: 100%;
            justify-content: center;
        }

        .favorites-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
        }
        .favorite-card .product-image {
            height: 140px;
        }
        .favorite-card .product-name {
            font-size: 0.9rem;
            min-height: 38px;
        }
        .favorite-card .product-price {
            font-size: 1rem;
        }

        .modal-product-image {
            max-height: 180px;
        }
        .modal-info-row {
            flex-direction: column;
            gap: 0.2rem;
        }
        .modal-info-label {
            min-width: auto;
        }
    }

    @media (max-width: 480px) {
        .favorites-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
        }
        .favorite-card .product-image {
            height: 120px;
        }
        .favorite-card .product-body {
            padding: 0.75rem 0.8rem 1rem;
        }
        .favorite-card .product-name {
            font-size: 0.8rem;
            min-height: 34px;
        }
        .favorite-card .product-price {
            font-size: 0.9rem;
        }
        .favorite-card .favorite-btn {
            width: 30px;
            height: 30px;
            font-size: 0.8rem;
            top: 8px;
            right: 8px;
        }
        .favorite-card .view-details-btn {
            font-size: 0.7rem;
            padding: 0.3rem;
        }
        .favorite-card .favorite-meta {
            font-size: 0.6rem;
        }
        .page-header-favorites .header-left h1 {
            font-size: 1.1rem;
        }
        .empty-state-favorites {
            padding: 2rem 1rem;
        }
        .empty-state-favorites .icon-wrapper {
            width: 60px;
            height: 60px;
        }
        .empty-state-favorites .icon-wrapper i {
            font-size: 2rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <!-- ==================== PAGE HEADER ==================== -->
    <div class=\"page-header-favorites\">
        <div class=\"header-left\">
            <h1>
                <i class=\"fas fa-heart\"></i>
                Mes favoris
            </h1>
            <p class=\"subtitle\">
                Retrouvez tous vos produits préférés en un seul endroit
            </p>
        </div>
        <div class=\"header-right\">
            <span class=\"stat-badge\">
                <i class=\"fas fa-heart\"></i>
                {{ favorites|length }} produit(s)
            </span>
        </div>
    </div>

    <!-- ==================== FAVORITES GRID ==================== -->
    {% if favorites|length > 0 %}
        <div class=\"favorites-grid\">
            {% for favorite in favorites %}
                <div class=\"favorite-card\" onclick=\"openFavoriteModal({{ favorite.id }})\" data-favorite-id=\"{{ favorite.id }}\">
                    <div class=\"product-image\">
                        {% if favorite.product.image and favorite.product.image != 'default-product.png' %}
                            <img src=\"{{ asset('uploads/products/' ~ favorite.product.image) }}\" 
                                 alt=\"{{ favorite.product.name }}\" 
                                 loading=\"lazy\">
                        {% else %}
                            <div class=\"placeholder\">
                                <i class=\"fas fa-box\"></i>
                            </div>
                        {% endif %}
                        <button class=\"favorite-btn\" 
                                onclick=\"event.stopPropagation(); toggleFavorite(this, {{ favorite.product.id }})\"
                                data-product-id=\"{{ favorite.product.id }}\">
                            <i class=\"fas fa-heart\"></i>
                        </button>
                    </div>
                    
                    <div class=\"product-body\">
                        <div class=\"product-category\">
                            {{ favorite.product.category ? favorite.product.category.name : 'Non catégorisé' }}
                        </div>
                        
                        <h6 class=\"product-name\">{{ favorite.product.name }}</h6>
                        
                        <div class=\"product-price\">
                            {{ favorite.product.salePrice|price_with_currency(favorite.product.hmaService) }}
                        </div>
                        
                        <div class=\"favorite-meta\">
                            <i class=\"fas fa-calendar-plus\"></i>
                            <span class=\"date\">Ajouté le {{ favorite.createdAt|date('d/m/Y') }}</span>
                        </div>
                        
                        <button class=\"view-details-btn\" onclick=\"event.stopPropagation(); openFavoriteModal({{ favorite.id }})\">
                            <i class=\"fas fa-eye\"></i> Voir les détails
                        </button>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <!-- ==================== EMPTY STATE ==================== -->
        <div class=\"empty-state-favorites\">
            <div class=\"icon-wrapper\">
                <i class=\"fas fa-heart\"></i>
            </div>
            <h4>Aucun favori</h4>
            <p>
                Vous n'avez pas encore ajouté de produits à vos favoris.
                <br>Commencez à explorer notre catalogue et cliquez sur le cœur ❤️ pour ajouter vos produits préférés.
            </p>
            <a href=\"{{ path('marketplace_products') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-arrow-left me-2\"></i> Découvrir les produits
            </a>
        </div>
    {% endif %}
</div>

<!-- ==================== MODAL DÉTAIL FAVORI ==================== -->
<div class=\"modal fade favorite-modal\" id=\"favoriteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"favoriteModalTitle\">
                    <i class=\"fas fa-heart me-2\"></i> Détail du favori
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"favoriteModalContent\">
                    <div class=\"text-center py-4\">
                        <i class=\"fas fa-spinner fa-spin fa-2x text-primary\"></i>
                        <p class=\"mt-2 text-muted\">Chargement...</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Fermer
                </button>
                <a href=\"#\" id=\"viewProductBtn\" class=\"btn btn-primary\">
                    <i class=\"fas fa-eye me-1\"></i> Voir le produit
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== STOCKER LES DONNÉES DES FAVORIS ====================
    window.favoritesData = {};
    {% for favorite in favorites %}
        window.favoritesData[{{ favorite.id }}] = {
            id: {{ favorite.id }},
            productId: {{ favorite.product.id }},
            productName: \"{{ favorite.product.name|e('js') }}\",
            productCategory: \"{{ favorite.product.category ? favorite.product.category.name|e('js') : 'Non catégorisé' }}\",
            productPrice: \"{{ favorite.product.salePrice|price_with_currency(favorite.product.hmaService)|e('js') }}\",
            productImage: \"{{ favorite.product.image and favorite.product.image != 'default-product.png' ? asset('uploads/products/' ~ favorite.product.image) : '' }}\",
            createdAt: \"{{ favorite.createdAt|date('d/m/Y à H:i') }}\",
            productDescription: \"{{ favorite.product.description|default('Aucune description')|e('js') }}\",
            productStock: {{ favorite.product.stockQuantity|default(0) }},
            productUnit: \"{{ favorite.product.unit|default('pièce') }}\",
            productBarcode: \"{{ favorite.product.barcode|default('') }}\",
            productPrescription: {{ favorite.product.prescriptionRequired ? 'true' : 'false' }},
            productForm: \"{{ favorite.product.form|default('') }}\",
            productDosage: \"{{ favorite.product.dosage|default('') }}\"
        };
    {% endfor %}

    // ==================== OUVRIRE LE MODAL ====================
    window.openFavoriteModal = function(favoriteId) {
        const data = window.favoritesData[favoriteId];
        if (!data) {
            showNotification('Erreur : favori non trouvé', 'error');
            return;
        }

        const modal = new bootstrap.Modal(document.getElementById('favoriteModal'));
        const content = document.getElementById('favoriteModalContent');
        const title = document.getElementById('favoriteModalTitle');
        const viewBtn = document.getElementById('viewProductBtn');

        title.innerHTML = '<i class=\"fas fa-heart text-danger me-2\"></i> ' + data.productName;
        viewBtn.href = '/marketplace/product/' + data.productId;

        const isInStock = data.productStock > 0;

        content.innerHTML = `
            <div class=\"row g-4\">
                <div class=\"col-md-5\">
                    \${data.productImage ? `
                        <img src=\"\${data.productImage}\" alt=\"\${data.productName}\" class=\"modal-product-image\">
                    ` : `
                        <div class=\"modal-product-image-placeholder\">
                            <i class=\"fas fa-box\"></i>
                        </div>
                    `}
                </div>
                <div class=\"col-md-7\">
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-tag me-2\"></i>Catégorie</span>
                        <span class=\"modal-info-value\">
                            <span class=\"badge-category\">\${data.productCategory}</span>
                        </span>
                    </div>
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-credit-card me-2\"></i>Prix</span>
                        <span class=\"modal-info-value fw-bold text-primary\">\${data.productPrice}</span>
                    </div>
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-box me-2\"></i>Stock</span>
                        <span class=\"modal-info-value\">
                            \${isInStock ? `
                                <span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i> Disponible (\${data.productStock} \${data.productUnit})</span>
                            ` : `
                                <span class=\"text-danger\"><i class=\"fas fa-times-circle me-1\"></i> Indisponible</span>
                            `}
                        </span>
                    </div>
                    \${data.productBarcode ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-barcode me-2\"></i>Code-barres</span>
                        <span class=\"modal-info-value\" style=\"font-family: monospace;\">\${data.productBarcode}</span>
                    </div>
                    ` : ''}
                    \${data.productForm ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-capsules me-2\"></i>Forme</span>
                        <span class=\"modal-info-value\">\${data.productForm}</span>
                    </div>
                    ` : ''}
                    \${data.productDosage ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-weight me-2\"></i>Dosage</span>
                        <span class=\"modal-info-value\">\${data.productDosage}</span>
                    </div>
                    ` : ''}
                    \${data.productPrescription ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-prescription-bottle me-2\"></i>Prescription</span>
                        <span class=\"modal-info-value\">
                            <span class=\"badge bg-warning text-dark\"><i class=\"fas fa-prescription-bottle me-1\"></i> Obligatoire</span>
                        </span>
                    </div>
                    ` : ''}
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-calendar-plus me-2\"></i>Ajouté le</span>
                        <span class=\"modal-info-value\">\${data.createdAt}</span>
                    </div>
                    \${data.productDescription ? `
                    <div class=\"modal-info-row\">
                        <span class=\"modal-info-label\"><i class=\"fas fa-align-left me-2\"></i>Description</span>
                        <span class=\"modal-info-value\" style=\"font-size: 0.85rem;\">\${data.productDescription}</span>
                    </div>
                    ` : ''}
                </div>
            </div>
        `;

        modal.show();
    };

    // ==================== TOGGLE FAVORI ====================
    window.toggleFavorite = function(btn, productId) {
        const icon = btn.querySelector('i');
        const card = btn.closest('.favorite-card');
        
        btn.disabled = true;
        icon.className = 'fas fa-spinner fa-spin';
        
        fetch('{{ path('marketplace_favorite_toggle') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ productId: productId })
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(data => {
                    throw new Error(data.error || 'Erreur serveur');
                });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                if (data.isFavorite) {
                    icon.className = 'fas fa-heart';
                    btn.style.color = '#ef4444';
                    showNotification('✓ Ajouté aux favoris', 'success');
                } else {
                    icon.className = 'far fa-heart';
                    btn.style.color = '#94a3b8';
                    if (card) {
                        card.style.opacity = '0.5';
                        setTimeout(() => {
                            card.remove();
                            // Mettre à jour le compteur
                            updateFavoritesCount();
                            // Recharger la page si plus de favoris
                            const remaining = document.querySelectorAll('.favorite-card').length;
                            if (remaining === 0) {
                                location.reload();
                            }
                        }, 300);
                    }
                    showNotification('Retiré des favoris', 'info');
                }
                updateFavoritesCount();
            } else {
                icon.className = 'fas fa-heart';
                btn.style.color = '#ef4444';
                showNotification(data.error || 'Erreur', 'error');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            icon.className = 'fas fa-heart';
            btn.style.color = '#ef4444';
            showNotification(error.message || 'Erreur de connexion', 'error');
        })
        .finally(() => {
            btn.disabled = false;
        });
    };

    // ==================== MISE À JOUR DES COMPTEURS ====================
    window.updateFavoritesCount = function() {
        const badge = document.getElementById('favoritesCount');
        if (badge) {
            fetch('{{ path('marketplace_favorites_count') }}')
                .then(r => r.json())
                .then(data => {
                    badge.textContent = data.count || 0;
                    badge.style.display = data.count > 0 ? 'block' : 'none';
                })
                .catch(() => {});
        }
    };

    // ==================== NOTIFICATIONS ====================
    function showNotification(message, type = 'info') {
        const colors = {
            success: 'bg-success',
            error: 'bg-danger',
            info: 'bg-primary',
            warning: 'bg-warning'
        };
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            info: 'fa-info-circle',
            warning: 'fa-exclamation-triangle'
        };
        
        const notification = document.createElement('div');
        notification.className = `position-fixed bottom-0 end-0 p-3 m-3 \${colors[type] || colors.info} text-white rounded-4 shadow-lg`;
        notification.style.zIndex = '9999';
        notification.style.animation = 'slideUp 0.3s ease';
        notification.style.maxWidth = '400px';
        notification.style.boxShadow = '0 10px 40px rgba(0,0,0,0.15)';
        notification.innerHTML = `
            <div class=\"d-flex align-items-center gap-2\">
                <i class=\"fas \${icons[type] || icons.info} fa-lg\"></i>
                <span class=\"fw-medium\">\${message}</span>
                <button type=\"button\" class=\"btn-close btn-close-white ms-2\" onclick=\"this.closest('.position-fixed').remove()\" style=\"opacity: 0.6;\"></button>
            </div>
        `;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.animation = 'slideDown 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 4000);
    }
});
</script>
{% endblock %}", "marketplace/favorites/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\favorites\\index.html.twig");
    }
}
