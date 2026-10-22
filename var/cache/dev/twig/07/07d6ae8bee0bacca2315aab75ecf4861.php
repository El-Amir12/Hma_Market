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

/* admin/category/edit.html.twig */
class __TwigTemplate_cc35d0dba3b6fc31a072032c5f3dfa54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
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

        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ========== ANIMATIONS ========== */
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}
@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}
.float-up {
    animation: floatUp 3s ease-in-out infinite;
}
@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}
.btn-hover-scale {
    transition: all 0.2s ease;
}
.btn-hover-scale:hover {
    transform: scale(1.05);
}
.breadcrumb {
    background-color: transparent;
    padding-left: 0;
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
.bg-gradient-light {
    background: linear-gradient(135deg, #f8f9fa 0%, #eef0f3 100%);
}

/* ========== STYLES DU FORMULAIRE (_form.html.twig) ========== */
.card-hover {
    transition: all 0.3s ease;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #eef0f3;
}
.card-hover:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.10) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
    font-size: 0.85rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.2rem + 2px);
    line-height: 1.25;
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
    font-size: 0.9rem;
    border-radius: 10px;
    border: 2px solid #e6e9ef;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.7rem) translateX(0.15rem);
    color: #667eea;
    font-size: 0.75rem;
}
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e6e9ef;
    border-radius: 10px !important;
    min-height: calc(3.2rem + 2px);
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
    font-size: 0.9rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 100% !important;
}
.form-switch .form-check-input {
    width: 2.8em;
    height: 1.5em;
    cursor: pointer;
    margin-top: 0.2rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-info:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(23, 162, 184, 0.4);
}
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* ========== FOOTER D'ACTIONS ========== */
.form-actions-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    background: #f8f9fa;
    border-top: 1px solid #eef0f3;
    padding: 1rem 1.5rem;
    border-radius: 0 0 14px 14px;
}
.form-actions-footer .actions-left,
.form-actions-footer .actions-right {
    display: flex;
    gap: 0.5rem;
    align-items: center;
    flex-wrap: wrap;
}
.form-actions-footer .actions-right {
    margin-left: auto;
}
.form-actions-footer .btn {
    padding: 0.5rem 1.1rem;
    font-size: 0.875rem;
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.2s ease;
}

/* ========== RESPONSIVE ========== */
@media (min-width: 577px) and (max-width: 991.98px) {
    .card-body { padding: 1.25rem !important; }
    .profile-preview,
    .category-placeholder {
        width: 140px !important;
        height: 140px !important;
    }
}
@media (max-width: 768px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    .card-body { padding: 0.85rem !important; }
    .card-header { padding: 0.6rem 0.85rem !important; }

    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
        font-size: 0.85rem;
    }
    .form-floating > label {
        padding-left: 2rem;
        font-size: 0.8rem;
    }
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
    }
    .profile-preview,
    .category-placeholder {
        width: 110px !important;
        height: 110px !important;
    }
    .category-placeholder i { font-size: 2.5rem !important; }

    /* Boutons superposés */
    .form-actions-footer {
        flex-direction: column;
        align-items: stretch;
        gap: 0.5rem;
        padding: 0.85rem;
    }
    .form-actions-footer .actions-left,
    .form-actions-footer .actions-right {
        width: 100%;
        margin-left: 0;
        gap: 0.5rem;
    }
    .form-actions-footer .btn {
        flex: 1 1 100%;
        width: 100%;
        padding: 0.55rem 0.75rem;
        font-size: 0.85rem;
    }

    .card-hover:hover,
    .btn-primary:hover,
    .btn-info:hover,
    .profile-preview:hover {
        transform: none !important;
        box-shadow: inherit !important;
    }

    /* En-tête responsive */
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.75rem;
    }
    h1.h3 { font-size: 1.15rem !important; }
    .breadcrumb { font-size: 0.75rem; }
}
@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    .card-body { padding: 0.65rem !important; }
    .card-header { padding: 0.5rem 0.65rem !important; font-size: 0.85rem; }
    .profile-preview,
    .category-placeholder {
        width: 90px !important;
        height: 90px !important;
    }
    .category-placeholder i { font-size: 2rem !important; }
    .form-actions-footer .btn { font-size: 0.8rem; padding: 0.5rem 0.6rem; }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 267
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

        // line 268
        yield "<div class=\"container-fluid px-4\">
    <!-- ============================================
         EN-TÊTE
         ============================================ -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 277
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-list-alt me-1\"></i> Catégories
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 282, $this->source); })()), "id", [], "any", false, false, false, 282)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 283, $this->source); })()), "name", [], "any", false, false, false, 283)), "truncate", [20, "..."], "method", false, false, false, 283), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
                </ol>
            </nav>

            <div class=\"d-flex align-items-center flex-wrap gap-2\">
                <a href=\"";
        // line 291
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-edit me-2\"></i> Modifier la catégorie
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Mettez à jour les informations de la catégorie</p>
        </div>
        <div class=\"float-up d-none d-md-block\">
            <i class=\"fas fa-folder-edit fa-3x text-warning opacity-75\"></i>
        </div>
    </div>

    <!-- ============================================
         ALERTES FLASH
         ============================================ -->
    ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "flashes", ["success"], "method", false, false, false, 308));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 309
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "flashes", ["error"], "method", false, false, false, 314));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 315
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        yield "
    <!-- ============================================
         INFOS RAPIDES
         ============================================ -->
    <div class=\"row mb-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 bg-gradient-light shadow-sm\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex align-items-center\">
                        ";
        // line 329
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 329, $this->source); })()), "image", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 330
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 330, $this->source); })()), "image", [], "any", false, false, false, 330))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 331, $this->source); })()), "name", [], "any", false, false, false, 331), "html", null, true);
            yield "\"
                                 class=\"rounded me-3\"
                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                        ";
        } else {
            // line 335
            yield "                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center me-3\"
                                 style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-folder text-white\"></i>
                            </div>
                        ";
        }
        // line 340
        yield "                        <div>
                            <h5 class=\"mb-1\">";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 341, $this->source); })()), "name", [], "any", false, false, false, 341), "html", null, true);
        yield "</h5>
                            <div class=\"d-flex align-items-center flex-wrap gap-1\">
                                <span class=\"badge ";
        // line 343
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 343, $this->source); })()), "isActive", [], "any", false, false, false, 343)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                    ";
        // line 344
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 344, $this->source); })()), "isActive", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "
                                </span>
                                <span class=\"badge bg-info\">
                                    ";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 347, $this->source); })()), "products", [], "any", false, false, false, 347)), "html", null, true);
        yield " produits
                                </span>
                                <span class=\"badge bg-secondary\">
                                    ";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 350, $this->source); })()), "children", [], "any", false, false, false, 350)), "html", null, true);
        yield " sous-catégories
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         FORMULAIRE (partial)
         ============================================ -->
    ";
        // line 363
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/category/_form.html.twig", ["form" =>         // line 364
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "category" =>         // line 365
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 365, $this->source); })()), "companyType" =>         // line 366
(isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 366, $this->source); })()), "button_label" => "Mettre à jour"]);
        // line 368
        yield "

    <!-- ============================================
         ZONE DE DANGER (suppression)
         ============================================ -->
    ";
        // line 373
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 373, $this->source); })()), "products", [], "any", false, false, false, 373)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 373, $this->source); })()), "children", [], "any", false, false, false, 373)) == 0))) {
            // line 374
            yield "    <div class=\"row mt-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-danger shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Zone de danger
                    </h5>
                </div>
                <div class=\"card-body\">
                    <h6 class=\"text-danger mb-3\">Supprimer cette catégorie</h6>
                    <p class=\"text-muted mb-4\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Cette action est irréversible. Une fois supprimée, la catégorie ne pourra plus être restaurée.
                    </p>
                    <button type=\"button\" 
                            class=\"btn btn-outline-danger\"
                            data-bs-toggle=\"modal\" 
                            data-bs-target=\"#deleteCategoryModal\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer cette catégorie
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal suppression -->
    <div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la catégorie
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <div class=\"mb-4\">
                        <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                        <h5>Êtes-vous sûr de vouloir supprimer cette catégorie ?</h5>
                        <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                    </div>
                    <div class=\"mb-3\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            La catégorie <strong>\"";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 418, $this->source); })()), "name", [], "any", false, false, false, 418), "html", null, true);
            yield "\"</strong> sera définitivement supprimée.
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </button>
                    <form action=\"";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 426, $this->source); })()), "id", [], "any", false, false, false, 426)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 427, $this->source); })()), "id", [], "any", false, false, false, 427))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash me-2\"></i> Supprimer définitivement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 437
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 440
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

        // line 441
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('category-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // ========== Select2 pour catégorie parente ==========
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Rechercher une catégorie parente...',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true,
            language: {
                noResults: function() { return 'Aucune catégorie trouvée'; }
            }
        });
    }

    // ========== Switch statut ==========
    const activeSwitch = document.getElementById('";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 483, $this->source); })()), "is_active", [], "any", false, false, false, 483), "vars", [], "any", false, false, false, 483), "id", [], "any", false, false, false, 483), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Catégorie active' : 'Catégorie inactive';
        });
    }

    // ========== Switch visibilité (pharmacie) ==========
    ";
        // line 496
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 496, $this->source); })()) == "pharmacy")) {
            // line 497
            yield "    const visibilitySwitch = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 497, $this->source); })()), "company_public", [], "any", false, false, false, 497), "vars", [], "any", false, false, false, 497), "id", [], "any", false, false, false, 497), "html", null, true);
            yield "');
    const visibilityBadge = document.getElementById('visibility-badge');
    const visibilityLabel = document.getElementById('visibility-label');
    if (visibilitySwitch && visibilityBadge && visibilityLabel) {
        visibilitySwitch.addEventListener('change', function() {
            const isVisible = this.checked;
            visibilityBadge.textContent = isVisible ? 'VISIBLE' : 'MASQUÉE';
            visibilityBadge.className = isVisible ? 'badge bg-success' : 'badge bg-secondary';
            visibilityLabel.textContent = isVisible ? 'Visible sur le marketplace' : 'Masquée sur le marketplace';
        });
    }
    ";
        }
        // line 509
        yield "
    // ========== Validation Bootstrap ==========
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
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
        return "admin/category/edit.html.twig";
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
        return array (  739 => 509,  723 => 497,  721 => 496,  705 => 483,  660 => 441,  647 => 440,  635 => 437,  622 => 427,  618 => 426,  607 => 418,  561 => 374,  559 => 373,  552 => 368,  550 => 366,  549 => 365,  548 => 364,  547 => 363,  531 => 350,  525 => 347,  519 => 344,  515 => 343,  510 => 341,  507 => 340,  500 => 335,  493 => 331,  488 => 330,  486 => 329,  475 => 320,  465 => 316,  462 => 315,  457 => 314,  447 => 310,  444 => 309,  440 => 308,  420 => 291,  409 => 283,  405 => 282,  397 => 277,  386 => 268,  373 => 267,  104 => 8,  91 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/edit.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Modifier {{ category.name }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ========== ANIMATIONS ========== */
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}
@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}
.float-up {
    animation: floatUp 3s ease-in-out infinite;
}
@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}
.btn-hover-scale {
    transition: all 0.2s ease;
}
.btn-hover-scale:hover {
    transform: scale(1.05);
}
.breadcrumb {
    background-color: transparent;
    padding-left: 0;
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
.bg-gradient-light {
    background: linear-gradient(135deg, #f8f9fa 0%, #eef0f3 100%);
}

/* ========== STYLES DU FORMULAIRE (_form.html.twig) ========== */
.card-hover {
    transition: all 0.3s ease;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #eef0f3;
}
.card-hover:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.10) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
    font-size: 0.85rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.2rem + 2px);
    line-height: 1.25;
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
    font-size: 0.9rem;
    border-radius: 10px;
    border: 2px solid #e6e9ef;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.7rem) translateX(0.15rem);
    color: #667eea;
    font-size: 0.75rem;
}
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e6e9ef;
    border-radius: 10px !important;
    min-height: calc(3.2rem + 2px);
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
    font-size: 0.9rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 100% !important;
}
.form-switch .form-check-input {
    width: 2.8em;
    height: 1.5em;
    cursor: pointer;
    margin-top: 0.2rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-info:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(23, 162, 184, 0.4);
}
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* ========== FOOTER D'ACTIONS ========== */
.form-actions-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    background: #f8f9fa;
    border-top: 1px solid #eef0f3;
    padding: 1rem 1.5rem;
    border-radius: 0 0 14px 14px;
}
.form-actions-footer .actions-left,
.form-actions-footer .actions-right {
    display: flex;
    gap: 0.5rem;
    align-items: center;
    flex-wrap: wrap;
}
.form-actions-footer .actions-right {
    margin-left: auto;
}
.form-actions-footer .btn {
    padding: 0.5rem 1.1rem;
    font-size: 0.875rem;
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.2s ease;
}

/* ========== RESPONSIVE ========== */
@media (min-width: 577px) and (max-width: 991.98px) {
    .card-body { padding: 1.25rem !important; }
    .profile-preview,
    .category-placeholder {
        width: 140px !important;
        height: 140px !important;
    }
}
@media (max-width: 768px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    .card-body { padding: 0.85rem !important; }
    .card-header { padding: 0.6rem 0.85rem !important; }

    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
        font-size: 0.85rem;
    }
    .form-floating > label {
        padding-left: 2rem;
        font-size: 0.8rem;
    }
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
    }
    .profile-preview,
    .category-placeholder {
        width: 110px !important;
        height: 110px !important;
    }
    .category-placeholder i { font-size: 2.5rem !important; }

    /* Boutons superposés */
    .form-actions-footer {
        flex-direction: column;
        align-items: stretch;
        gap: 0.5rem;
        padding: 0.85rem;
    }
    .form-actions-footer .actions-left,
    .form-actions-footer .actions-right {
        width: 100%;
        margin-left: 0;
        gap: 0.5rem;
    }
    .form-actions-footer .btn {
        flex: 1 1 100%;
        width: 100%;
        padding: 0.55rem 0.75rem;
        font-size: 0.85rem;
    }

    .card-hover:hover,
    .btn-primary:hover,
    .btn-info:hover,
    .profile-preview:hover {
        transform: none !important;
        box-shadow: inherit !important;
    }

    /* En-tête responsive */
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.75rem;
    }
    h1.h3 { font-size: 1.15rem !important; }
    .breadcrumb { font-size: 0.75rem; }
}
@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    .card-body { padding: 0.65rem !important; }
    .card-header { padding: 0.5rem 0.65rem !important; font-size: 0.85rem; }
    .profile-preview,
    .category-placeholder {
        width: 90px !important;
        height: 90px !important;
    }
    .category-placeholder i { font-size: 2rem !important; }
    .form-actions-footer .btn { font-size: 0.8rem; padding: 0.5rem 0.6rem; }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- ============================================
         EN-TÊTE
         ============================================ -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_category_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-list-alt me-1\"></i> Catégories
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" class=\"text-decoration-none\">
                            {{ category.name|u.truncate(20, '...') }}
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
                </ol>
            </nav>

            <div class=\"d-flex align-items-center flex-wrap gap-2\">
                <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-edit me-2\"></i> Modifier la catégorie
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Mettez à jour les informations de la catégorie</p>
        </div>
        <div class=\"float-up d-none d-md-block\">
            <i class=\"fas fa-folder-edit fa-3x text-warning opacity-75\"></i>
        </div>
    </div>

    <!-- ============================================
         ALERTES FLASH
         ============================================ -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- ============================================
         INFOS RAPIDES
         ============================================ -->
    <div class=\"row mb-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 bg-gradient-light shadow-sm\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex align-items-center\">
                        {% if category.image %}
                            <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" 
                                 alt=\"{{ category.name }}\"
                                 class=\"rounded me-3\"
                                 style=\"width: 60px; height: 60px; object-fit: cover;\">
                        {% else %}
                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center me-3\"
                                 style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-folder text-white\"></i>
                            </div>
                        {% endif %}
                        <div>
                            <h5 class=\"mb-1\">{{ category.name }}</h5>
                            <div class=\"d-flex align-items-center flex-wrap gap-1\">
                                <span class=\"badge {{ category.isActive ? 'bg-success' : 'bg-danger' }}\">
                                    {{ category.isActive ? 'Active' : 'Inactive' }}
                                </span>
                                <span class=\"badge bg-info\">
                                    {{ category.products|length }} produits
                                </span>
                                <span class=\"badge bg-secondary\">
                                    {{ category.children|length }} sous-catégories
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         FORMULAIRE (partial)
         ============================================ -->
    {{ include('admin/category/_form.html.twig', {
        'form': form,
        'category': category,
        'companyType': companyType,
        'button_label': 'Mettre à jour'
    }) }}

    <!-- ============================================
         ZONE DE DANGER (suppression)
         ============================================ -->
    {% if category.products|length == 0 and category.children|length == 0 %}
    <div class=\"row mt-4\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-danger shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Zone de danger
                    </h5>
                </div>
                <div class=\"card-body\">
                    <h6 class=\"text-danger mb-3\">Supprimer cette catégorie</h6>
                    <p class=\"text-muted mb-4\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Cette action est irréversible. Une fois supprimée, la catégorie ne pourra plus être restaurée.
                    </p>
                    <button type=\"button\" 
                            class=\"btn btn-outline-danger\"
                            data-bs-toggle=\"modal\" 
                            data-bs-target=\"#deleteCategoryModal\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer cette catégorie
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal suppression -->
    <div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la catégorie
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-4\">
                    <div class=\"mb-4\">
                        <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                        <h5>Êtes-vous sûr de vouloir supprimer cette catégorie ?</h5>
                        <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                    </div>
                    <div class=\"mb-3\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            La catégorie <strong>\"{{ category.name }}\"</strong> sera définitivement supprimée.
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </button>
                    <form action=\"{{ path('app_admin_category_delete', {'id': category.id}) }}\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash me-2\"></i> Supprimer définitivement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('category-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // ========== Select2 pour catégorie parente ==========
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Rechercher une catégorie parente...',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true,
            language: {
                noResults: function() { return 'Aucune catégorie trouvée'; }
            }
        });
    }

    // ========== Switch statut ==========
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Catégorie active' : 'Catégorie inactive';
        });
    }

    // ========== Switch visibilité (pharmacie) ==========
    {% if companyType == 'pharmacy' %}
    const visibilitySwitch = document.getElementById('{{ form.company_public.vars.id }}');
    const visibilityBadge = document.getElementById('visibility-badge');
    const visibilityLabel = document.getElementById('visibility-label');
    if (visibilitySwitch && visibilityBadge && visibilityLabel) {
        visibilitySwitch.addEventListener('change', function() {
            const isVisible = this.checked;
            visibilityBadge.textContent = isVisible ? 'VISIBLE' : 'MASQUÉE';
            visibilityBadge.className = isVisible ? 'badge bg-success' : 'badge bg-secondary';
            visibilityLabel.textContent = isVisible ? 'Visible sur le marketplace' : 'Masquée sur le marketplace';
        });
    }
    {% endif %}

    // ========== Validation Bootstrap ==========
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>
{% endblock %}", "admin/category/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\edit.html.twig");
    }
}
