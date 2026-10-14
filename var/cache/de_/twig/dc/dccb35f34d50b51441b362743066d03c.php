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

/* super_admin/subscription_plan/index.html.twig */
class __TwigTemplate_b71c3b768152b72092f171cba94de105 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Plans d'abonnement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .modern-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 120px;
    }
    .floating-bg .shape {
        position: absolute;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
    }
    .shape-1 {
        width: 250px; height: 250px; top: -80px; right: -40px;
        animation: float 8s ease-in-out infinite;
    }
    .shape-2 {
        width: 150px; height: 150px; bottom: -40px; left: -20px;
        animation: float 12s ease-in-out infinite reverse;
    }
    @keyframes float {
        0%,100%{ transform: translateY(0) rotate(0deg); }
        50%{ transform: translateY(-20px) rotate(5deg); }
    }
    .icon-wrapper {
        transition: transform 0.3s;
    }
    .icon-wrapper:hover {
        transform: scale(1.05) rotate(5deg);
    }
    .hover-lift {
        transition: all 0.3s;
    }
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 30px rgba(0,0,0,0.15) !important;
    }
    /* Dégradés pour les en-têtes selon le plan */
    .bg-gradient-freemium { background: linear-gradient(135deg, #6b7280, #4b5563); }
    .bg-gradient-basic    { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
    .bg-gradient-premium  { background: linear-gradient(135deg, #8b5cf6, #6d28d9); }
    .bg-gradient-trial    { background: linear-gradient(135deg, #10b981, #059669); }
    .bg-gradient-secondary{ background: linear-gradient(135deg, #9ca3af, #6b7280); }

    .btn {
        transition: all 0.2s ease;
    }
    .btn:hover {
        transform: translateY(-2px);
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        
        .modern-header {
            min-height: 80px;
            padding: 0.75rem !important;
            border-radius: 0.75rem !important;
        }
        
        .modern-header .display-5 {
            font-size: 1.1rem !important;
        }
        .modern-header .text-white-50 {
            font-size: 0.65rem !important;
        }
        .modern-header .icon-wrapper {
            padding: 0.5rem !important;
        }
        .modern-header .icon-wrapper i {
            font-size: 1.5rem !important;
        }
        .modern-header .d-flex.align-items-center.gap-4 {
            gap: 0.5rem !important;
        }
        
        .shape-1 {
            width: 100px;
            height: 100px;
            top: -30px;
            right: -20px;
        }
        .shape-2 {
            width: 80px;
            height: 80px;
            bottom: -20px;
            left: -10px;
        }
        
        .alert {
            font-size: 0.7rem !important;
            padding: 0.5rem 0.75rem !important;
            border-radius: 0.75rem !important;
        }
        
        .btn-lg {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.75rem !important;
        }
        
        .card {
            border-radius: 0.75rem !important;
        }
        .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .card-header h5 {
            font-size: 0.8rem !important;
        }
        .card-header .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        
        .card-body .display-6 {
            font-size: 1.3rem !important;
        }
        .card-body .text-muted {
            font-size: 0.6rem !important;
        }
        
        .card-body h6 {
            font-size: 0.7rem !important;
        }
        .card-body .d-flex.align-items-center {
            gap: 0.25rem !important;
        }
        .card-body .d-flex.align-items-center i {
            font-size: 0.9rem !important;
            margin-right: 0.5rem !important;
        }
        .card-body .d-flex.align-items-center span {
            font-size: 0.65rem !important;
        }
        .card-body .d-flex.align-items-center span strong {
            font-size: 0.65rem !important;
        }
        
        .card-body .badge.fs-6 {
            font-size: 0.55rem !important;
            padding: 0.1rem 0.4rem !important;
        }
        .card-body .text-muted {
            font-size: 0.55rem !important;
        }
        
        .card-body .btn-sm {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .card-body .btn-sm i {
            font-size: 0.6rem !important;
        }
        
        .modal .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .modal .modal-header h5 {
            font-size: 0.8rem !important;
        }
        .modal .modal-body {
            padding: 0.5rem 0.75rem !important;
        }
        .modal .modal-body p {
            font-size: 0.7rem !important;
        }
        .modal .modal-footer {
            padding: 0.5rem !important;
        }
        .modal .modal-footer .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.6rem !important;
        }
        
        .gap-4 {
            gap: 0.5rem !important;
        }
        .row.g-4 {
            --bs-gutter-y: 0.5rem;
            --bs-gutter-x: 0.5rem;
        }
        
        .d-flex.gap-2.justify-content-center {
            gap: 0.25rem !important;
        }
        
        .mb-3 {
            margin-bottom: 0.25rem !important;
        }
        .mb-4 {
            margin-bottom: 0.5rem !important;
        }
        .mb-5 {
            margin-bottom: 0.75rem !important;
        }
        .py-4 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }
        
        .rounded-4 {
            border-radius: 0.75rem !important;
        }
        
        /* Désactiver hover sur mobile */
        .hover-lift:hover {
            transform: none !important;
        }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .modern-header {
            min-height: 100px;
            padding: 1rem !important;
        }
        .modern-header .display-5 {
            font-size: 1.4rem !important;
        }
        .modern-header .icon-wrapper i {
            font-size: 2rem !important;
        }
        
        .card-body .display-6 {
            font-size: 1.5rem !important;
        }
        .card-body .d-flex.align-items-center span {
            font-size: 0.7rem !important;
        }
        .card-body .d-flex.align-items-center span strong {
            font-size: 0.7rem !important;
        }
        
        .btn-lg {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.8rem !important;
        }
        
        .row.g-4 {
            --bs-gutter-y: 0.75rem;
            --bs-gutter-x: 0.75rem;
        }
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
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">
    <!-- En-tête moderne -->
    <div class=\"row mb-3 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg p-3 p-md-5 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                <div class=\"floating-bg\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                </div>
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex align-items-center gap-2 gap-md-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-2 p-md-4\">
                            <i class=\"bi bi-tags display-6 display-md-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-6 display-md-5 fw-bold mb-1 mb-md-2\">Plans d'abonnement</h1>
                            <p class=\"text-white-50 mb-0 small d-none d-sm-block\">Gérez les offres proposées aux entreprises</p>
                            <p class=\"text-white-50 mb-0 small d-block d-sm-none\">Offres entreprises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "flashes", [], "any", false, false, false, 294));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 295
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 296
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-4 shadow-sm mb-3 mb-md-4 small\">
                ";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        yield "
    <!-- Bouton nouveau plan -->
    <div class=\"d-flex justify-content-end mb-3 mb-md-4\">
        <a href=\"";
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_new");
        yield "\" class=\"btn btn-primary btn-sm btn-md-lg rounded-pill px-3 px-md-4 shadow-sm\">
            <i class=\"bi bi-plus-circle me-1 me-md-2\"></i><span class=\"d-none d-sm-inline\">Nouveau plan</span>
            <span class=\"d-inline d-sm-none\">Nouveau</span>
        </a>
    </div>

    <!-- Grille des plans -->
    <div class=\"row g-2 g-md-4\">
        ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 313, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 314
            yield "            <div class=\"col-12 col-md-6 col-xl-4\">
                <div class=\"card h-100 border-0 shadow-lg hover-lift rounded-4 overflow-hidden d-flex flex-column\">
                    <!-- En-tête avec nom et badge illimité/limité -->
                    ";
            // line 317
            $context["bgClass"] = "bg-gradient-secondary";
            // line 318
            yield "                    ";
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 318)) == "freemium")) {
                // line 319
                yield "                        ";
                $context["bgClass"] = "bg-gradient-freemium";
                // line 320
                yield "                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 320)) == "basic")) {
                // line 321
                yield "                        ";
                $context["bgClass"] = "bg-gradient-basic";
                // line 322
                yield "                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 322)) == "premium")) {
                // line 323
                yield "                        ";
                $context["bgClass"] = "bg-gradient-premium";
                // line 324
                yield "                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 324)) == "trial")) {
                // line 325
                yield "                        ";
                $context["bgClass"] = "bg-gradient-trial";
                // line 326
                yield "                    ";
            }
            // line 327
            yield "                    
                    <div class=\"card-header ";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bgClass"]) || array_key_exists("bgClass", $context) ? $context["bgClass"] : (function () { throw new RuntimeError('Variable "bgClass" does not exist.', 328, $this->source); })()), "html", null, true);
            yield " text-white py-2 py-md-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 329), "html", null, true);
            yield "</h5>
                        <span class=\"badge bg-white text-dark rounded-pill px-2 px-md-3 py-1 py-md-2\" style=\"font-size:0.55rem;\">
                            ";
            // line 331
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isUnlimited", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Illimité";
            } else {
                yield "Limité";
            }
            // line 332
            yield "                        </span>
                    </div>

                    <div class=\"card-body p-2 p-md-4 d-flex flex-column flex-grow-1\">
                        <!-- Prix -->
                        <div class=\"text-center mb-2 mb-md-4\">
                            <h2 class=\"display-6 fw-bold text-primary mb-0\">";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceMonthly", [], "any", false, false, false, 338), 0, ",", " "), "html", null, true);
            yield " FCFA</h2>
                            <p class=\"text-muted small\" style=\"font-size:0.6rem;\">/mois • <small>";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceYearly", [], "any", false, false, false, 339), 0, ",", " "), "html", null, true);
            yield " FCFA/an</small></p>
                        </div>

                        <!-- Section Commerce -->
                        <div class=\"mb-2 mb-md-3\">
                            <h6 class=\"fw-bold text-primary mb-1 mb-md-2 fs-6 fs-md-5\">
                                <i class=\"bi bi-shop me-1 me-md-2\"></i>Commerce
                            </h6>
                            <div class=\"mb-1 mb-md-2\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-people-fill text-success me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Utilisateurs/rôle :</strong> 
                                        ";
            // line 352
            $context["maxUsers"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxUsersPerRole", [], "any", false, false, false, 352);
            // line 353
            yield "                                        ";
            if (((null === (isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 353, $this->source); })())) || ((isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 353, $this->source); })()) >= 999999999))) {
                // line 354
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 356
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 356, $this->source); })())), "html", null, true);
                yield "
                                        ";
            }
            // line 358
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-box-fill text-info me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Produits :</strong> 
                                        ";
            // line 364
            $context["maxProducts"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 364);
            // line 365
            yield "                                        ";
            if (((null === (isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 365, $this->source); })())) || ((isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 365, $this->source); })()) >= 999999999))) {
                // line 366
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 368
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 368, $this->source); })())), "html", null, true);
                yield "
                                        ";
            }
            // line 370
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-cart-fill text-warning me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Commandes/mois :</strong> 
                                        ";
            // line 376
            $context["maxOrders"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxOrdersPerMonth", [], "any", false, false, false, 376);
            // line 377
            yield "                                        ";
            if (((null === (isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 377, $this->source); })())) || ((isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 377, $this->source); })()) >= 999999999))) {
                // line 378
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 380
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 380, $this->source); })())), "html", null, true);
                yield "
                                        ";
            }
            // line 382
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-tags-fill text-primary me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Catégories :</strong> 
                                        ";
            // line 388
            $context["maxCategories"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxCategories", [], "any", false, false, false, 388);
            // line 389
            yield "                                        ";
            if (((null === (isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 389, $this->source); })())) || ((isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 389, $this->source); })()) >= 999999999))) {
                // line 390
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 392
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 392, $this->source); })())), "html", null, true);
                yield "
                                        ";
            }
            // line 394
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-truck text-secondary me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Fournisseurs :</strong> 
                                        ";
            // line 400
            $context["maxSuppliers"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxSuppliers", [], "any", false, false, false, 400);
            // line 401
            yield "                                        ";
            if (((null === (isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 401, $this->source); })())) || ((isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 401, $this->source); })()) >= 999999999))) {
                // line 402
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 404
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 404, $this->source); })())), "html", null, true);
                yield "
                                        ";
            }
            // line 406
            yield "                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Section Restaurant (Recettes) -->
                        <div class=\"mb-2 mb-md-3 pt-1 pt-md-2 border-top\">
                            <h6 class=\"fw-bold text-success mb-1 mb-md-2 fs-6 fs-md-5\">
                                <i class=\"bi bi-egg-fried me-1 me-md-2\"></i>Restaurant
                            </h6>
                            <div class=\"mb-1 mb-md-2\">
                                <!-- Recettes -->
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-book-fill text-success me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Recettes :</strong> 
                                        ";
            // line 422
            $context["maxRecipes"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipes", [], "any", false, false, false, 422);
            // line 423
            yield "                                        ";
            if (((null === (isset($context["maxRecipes"]) || array_key_exists("maxRecipes", $context) ? $context["maxRecipes"] : (function () { throw new RuntimeError('Variable "maxRecipes" does not exist.', 423, $this->source); })())) || ((isset($context["maxRecipes"]) || array_key_exists("maxRecipes", $context) ? $context["maxRecipes"] : (function () { throw new RuntimeError('Variable "maxRecipes" does not exist.', 423, $this->source); })()) >= 999999999))) {
                // line 424
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 426
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxRecipes"]) || array_key_exists("maxRecipes", $context) ? $context["maxRecipes"] : (function () { throw new RuntimeError('Variable "maxRecipes" does not exist.', 426, $this->source); })())), "html", null, true);
                yield "
                                        ";
            }
            // line 428
            yield "                                    </span>
                                </div>
                                
                                <!-- Catégories de recettes -->
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-tag-fill text-info me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Catégories de recettes :</strong> 
                                        ";
            // line 436
            $context["maxRecipeCategories"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipeCategories", [], "any", false, false, false, 436);
            // line 437
            yield "                                        ";
            if (((null === (isset($context["maxRecipeCategories"]) || array_key_exists("maxRecipeCategories", $context) ? $context["maxRecipeCategories"] : (function () { throw new RuntimeError('Variable "maxRecipeCategories" does not exist.', 437, $this->source); })())) || ((isset($context["maxRecipeCategories"]) || array_key_exists("maxRecipeCategories", $context) ? $context["maxRecipeCategories"] : (function () { throw new RuntimeError('Variable "maxRecipeCategories" does not exist.', 437, $this->source); })()) >= 999999999))) {
                // line 438
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 440
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxRecipeCategories"]) || array_key_exists("maxRecipeCategories", $context) ? $context["maxRecipeCategories"] : (function () { throw new RuntimeError('Variable "maxRecipeCategories" does not exist.', 440, $this->source); })())), "html", null, true);
                yield "
                                        ";
            }
            // line 442
            yield "                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Nombre de fonctionnalités -->
                        ";
            // line 448
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 448)) > 0)) {
                // line 449
                yield "                            <div class=\"d-flex align-items-center mb-2 mb-md-3\">
                                <i class=\"bi bi-star-fill text-warning me-2 me-md-3 fs-6 fs-md-5\"></i>
                                <span class=\"small\"><strong>Fonctionnalités :</strong> ";
                // line 451
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 451)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 454
            yield "
                        <!-- Statut actif/inactif et nombre d'abonnements -->
                        <div class=\"d-flex justify-content-between align-items-center mt-auto mb-2 mb-md-3\">
                            <span class=\"badge bg-";
            // line 457
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 457)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
            yield " p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-";
            // line 458
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("x-circle"));
            yield " me-1\"></i>
                                ";
            // line 459
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">";
            // line 461
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 461)), "html", null, true);
            yield " abonnement(s)</small>
                        </div>

                        <!-- Actions centrées -->
                        <div class=\"d-flex gap-1 gap-md-2 justify-content-center mt-1 mt-md-2\">
                            <a href=\"";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 466)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill px-2 px-md-3\" title=\"Détails\">
                                <i class=\"bi bi-eye\"></i>
                            </a>
                            <a href=\"";
            // line 469
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 469)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning rounded-pill px-2 px-md-3\" title=\"Modifier\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <button type=\"button\" class=\"btn btn-sm btn-outline-";
            // line 472
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 472)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
            yield " rounded-pill px-2 px-md-3\" 
                                    data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 473), "html", null, true);
            yield "\" 
                                    title=\"";
            // line 474
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 474)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                <i class=\"bi bi-";
            // line 475
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 475)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-fill") : ("play-fill"));
            yield "\"></i>
                            </button>
                            ";
            // line 477
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 477)) == 0)) {
                // line 478
                yield "                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger rounded-pill px-2 px-md-3\" 
                                        data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 479), "html", null, true);
                yield "\" 
                                        title=\"Supprimer\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            ";
            }
            // line 484
            yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Toggle -->
            <div class=\"modal fade\" id=\"toggleModal";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 490), "html", null, true);
            yield "\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-";
            // line 493
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 493)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield " text-white border-0 py-2 py-md-3\">
                            <h5 class=\"modal-title fs-6 fs-md-5\">
                                <i class=\"bi bi-";
            // line 495
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-circle") : ("play-circle"));
            yield " me-2\"></i>
                                ";
            // line 496
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield " le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-3 p-md-4\">
                            <p class=\"mb-0 small\">
                                Êtes-vous sûr de vouloir ";
            // line 502
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 502)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
            yield " le plan <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 502), "html", null, true);
            yield "</strong> ?
                                ";
            // line 503
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 503)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 504
                yield "                                    <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                                ";
            } else {
                // line 506
                yield "                                    <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                                ";
            }
            // line 508
            yield "                            </p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm px-3 px-md-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"";
            // line 512
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 512)]), "html", null, true);
            yield "\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 513))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-";
            // line 514
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 514)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield " btn-sm px-3 px-md-4 rounded-pill\">Confirmer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Delete -->
            ";
            // line 522
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 522)) == 0)) {
                // line 523
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 523), "html", null, true);
                yield "\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-danger text-white border-0 py-2 py-md-3\">
                            <h5 class=\"modal-title fs-6 fs-md-5\">
                                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-3 p-md-4\">
                            <p class=\"small\">Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 533), "html", null, true);
                yield "</strong> ?</p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm px-3 px-md-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 537)]), "html", null, true);
                yield "\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 538))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm px-3 px-md-4 rounded-pill\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 546
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 547
            yield "            <!-- Aucun plan trouvé -->
            <div class=\"col-12 text-center py-3 py-md-5\">
                <i class=\"bi bi-tags display-3 text-muted\"></i>
                <p class=\"mt-2 mt-md-3 fs-5\">Aucun plan d'abonnement.</p>
                <a href=\"";
            // line 551
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_new");
            yield "\" class=\"btn btn-primary btn-sm btn-md-lg rounded-pill px-4 px-md-5\">Créer le premier</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
        yield "    </div>
</div>
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
        return "super_admin/subscription_plan/index.html.twig";
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
        return array (  928 => 554,  919 => 551,  913 => 547,  908 => 546,  897 => 538,  893 => 537,  886 => 533,  872 => 523,  870 => 522,  859 => 514,  855 => 513,  851 => 512,  845 => 508,  841 => 506,  837 => 504,  835 => 503,  829 => 502,  820 => 496,  816 => 495,  811 => 493,  805 => 490,  797 => 484,  789 => 479,  786 => 478,  784 => 477,  779 => 475,  775 => 474,  771 => 473,  767 => 472,  761 => 469,  755 => 466,  747 => 461,  742 => 459,  738 => 458,  734 => 457,  729 => 454,  723 => 451,  719 => 449,  717 => 448,  709 => 442,  703 => 440,  699 => 438,  696 => 437,  694 => 436,  684 => 428,  678 => 426,  674 => 424,  671 => 423,  669 => 422,  651 => 406,  645 => 404,  641 => 402,  638 => 401,  636 => 400,  628 => 394,  622 => 392,  618 => 390,  615 => 389,  613 => 388,  605 => 382,  599 => 380,  595 => 378,  592 => 377,  590 => 376,  582 => 370,  576 => 368,  572 => 366,  569 => 365,  567 => 364,  559 => 358,  553 => 356,  549 => 354,  546 => 353,  544 => 352,  528 => 339,  524 => 338,  516 => 332,  510 => 331,  505 => 329,  501 => 328,  498 => 327,  495 => 326,  492 => 325,  489 => 324,  486 => 323,  483 => 322,  480 => 321,  477 => 320,  474 => 319,  471 => 318,  469 => 317,  464 => 314,  459 => 313,  448 => 305,  443 => 302,  437 => 301,  427 => 297,  422 => 296,  417 => 295,  413 => 294,  385 => 268,  372 => 267,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plans d'abonnement{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .modern-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 120px;
    }
    .floating-bg .shape {
        position: absolute;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
    }
    .shape-1 {
        width: 250px; height: 250px; top: -80px; right: -40px;
        animation: float 8s ease-in-out infinite;
    }
    .shape-2 {
        width: 150px; height: 150px; bottom: -40px; left: -20px;
        animation: float 12s ease-in-out infinite reverse;
    }
    @keyframes float {
        0%,100%{ transform: translateY(0) rotate(0deg); }
        50%{ transform: translateY(-20px) rotate(5deg); }
    }
    .icon-wrapper {
        transition: transform 0.3s;
    }
    .icon-wrapper:hover {
        transform: scale(1.05) rotate(5deg);
    }
    .hover-lift {
        transition: all 0.3s;
    }
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 30px rgba(0,0,0,0.15) !important;
    }
    /* Dégradés pour les en-têtes selon le plan */
    .bg-gradient-freemium { background: linear-gradient(135deg, #6b7280, #4b5563); }
    .bg-gradient-basic    { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
    .bg-gradient-premium  { background: linear-gradient(135deg, #8b5cf6, #6d28d9); }
    .bg-gradient-trial    { background: linear-gradient(135deg, #10b981, #059669); }
    .bg-gradient-secondary{ background: linear-gradient(135deg, #9ca3af, #6b7280); }

    .btn {
        transition: all 0.2s ease;
    }
    .btn:hover {
        transform: translateY(-2px);
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        
        .modern-header {
            min-height: 80px;
            padding: 0.75rem !important;
            border-radius: 0.75rem !important;
        }
        
        .modern-header .display-5 {
            font-size: 1.1rem !important;
        }
        .modern-header .text-white-50 {
            font-size: 0.65rem !important;
        }
        .modern-header .icon-wrapper {
            padding: 0.5rem !important;
        }
        .modern-header .icon-wrapper i {
            font-size: 1.5rem !important;
        }
        .modern-header .d-flex.align-items-center.gap-4 {
            gap: 0.5rem !important;
        }
        
        .shape-1 {
            width: 100px;
            height: 100px;
            top: -30px;
            right: -20px;
        }
        .shape-2 {
            width: 80px;
            height: 80px;
            bottom: -20px;
            left: -10px;
        }
        
        .alert {
            font-size: 0.7rem !important;
            padding: 0.5rem 0.75rem !important;
            border-radius: 0.75rem !important;
        }
        
        .btn-lg {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.75rem !important;
        }
        
        .card {
            border-radius: 0.75rem !important;
        }
        .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .card-header h5 {
            font-size: 0.8rem !important;
        }
        .card-header .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        
        .card-body .display-6 {
            font-size: 1.3rem !important;
        }
        .card-body .text-muted {
            font-size: 0.6rem !important;
        }
        
        .card-body h6 {
            font-size: 0.7rem !important;
        }
        .card-body .d-flex.align-items-center {
            gap: 0.25rem !important;
        }
        .card-body .d-flex.align-items-center i {
            font-size: 0.9rem !important;
            margin-right: 0.5rem !important;
        }
        .card-body .d-flex.align-items-center span {
            font-size: 0.65rem !important;
        }
        .card-body .d-flex.align-items-center span strong {
            font-size: 0.65rem !important;
        }
        
        .card-body .badge.fs-6 {
            font-size: 0.55rem !important;
            padding: 0.1rem 0.4rem !important;
        }
        .card-body .text-muted {
            font-size: 0.55rem !important;
        }
        
        .card-body .btn-sm {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .card-body .btn-sm i {
            font-size: 0.6rem !important;
        }
        
        .modal .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .modal .modal-header h5 {
            font-size: 0.8rem !important;
        }
        .modal .modal-body {
            padding: 0.5rem 0.75rem !important;
        }
        .modal .modal-body p {
            font-size: 0.7rem !important;
        }
        .modal .modal-footer {
            padding: 0.5rem !important;
        }
        .modal .modal-footer .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.6rem !important;
        }
        
        .gap-4 {
            gap: 0.5rem !important;
        }
        .row.g-4 {
            --bs-gutter-y: 0.5rem;
            --bs-gutter-x: 0.5rem;
        }
        
        .d-flex.gap-2.justify-content-center {
            gap: 0.25rem !important;
        }
        
        .mb-3 {
            margin-bottom: 0.25rem !important;
        }
        .mb-4 {
            margin-bottom: 0.5rem !important;
        }
        .mb-5 {
            margin-bottom: 0.75rem !important;
        }
        .py-4 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }
        
        .rounded-4 {
            border-radius: 0.75rem !important;
        }
        
        /* Désactiver hover sur mobile */
        .hover-lift:hover {
            transform: none !important;
        }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .modern-header {
            min-height: 100px;
            padding: 1rem !important;
        }
        .modern-header .display-5 {
            font-size: 1.4rem !important;
        }
        .modern-header .icon-wrapper i {
            font-size: 2rem !important;
        }
        
        .card-body .display-6 {
            font-size: 1.5rem !important;
        }
        .card-body .d-flex.align-items-center span {
            font-size: 0.7rem !important;
        }
        .card-body .d-flex.align-items-center span strong {
            font-size: 0.7rem !important;
        }
        
        .btn-lg {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.8rem !important;
        }
        
        .row.g-4 {
            --bs-gutter-y: 0.75rem;
            --bs-gutter-x: 0.75rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">
    <!-- En-tête moderne -->
    <div class=\"row mb-3 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg p-3 p-md-5 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                <div class=\"floating-bg\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                </div>
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex align-items-center gap-2 gap-md-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-2 p-md-4\">
                            <i class=\"bi bi-tags display-6 display-md-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-6 display-md-5 fw-bold mb-1 mb-md-2\">Plans d'abonnement</h1>
                            <p class=\"text-white-50 mb-0 small d-none d-sm-block\">Gérez les offres proposées aux entreprises</p>
                            <p class=\"text-white-50 mb-0 small d-block d-sm-none\">Offres entreprises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-4 shadow-sm mb-3 mb-md-4 small\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Bouton nouveau plan -->
    <div class=\"d-flex justify-content-end mb-3 mb-md-4\">
        <a href=\"{{ path('app_super_admin_subscription_plan_new') }}\" class=\"btn btn-primary btn-sm btn-md-lg rounded-pill px-3 px-md-4 shadow-sm\">
            <i class=\"bi bi-plus-circle me-1 me-md-2\"></i><span class=\"d-none d-sm-inline\">Nouveau plan</span>
            <span class=\"d-inline d-sm-none\">Nouveau</span>
        </a>
    </div>

    <!-- Grille des plans -->
    <div class=\"row g-2 g-md-4\">
        {% for plan in plans %}
            <div class=\"col-12 col-md-6 col-xl-4\">
                <div class=\"card h-100 border-0 shadow-lg hover-lift rounded-4 overflow-hidden d-flex flex-column\">
                    <!-- En-tête avec nom et badge illimité/limité -->
                    {% set bgClass = 'bg-gradient-secondary' %}
                    {% if plan.name|lower == 'freemium' %}
                        {% set bgClass = 'bg-gradient-freemium' %}
                    {% elseif plan.name|lower == 'basic' %}
                        {% set bgClass = 'bg-gradient-basic' %}
                    {% elseif plan.name|lower == 'premium' %}
                        {% set bgClass = 'bg-gradient-premium' %}
                    {% elseif plan.name|lower == 'trial' %}
                        {% set bgClass = 'bg-gradient-trial' %}
                    {% endif %}
                    
                    <div class=\"card-header {{ bgClass }} text-white py-2 py-md-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">{{ plan.displayName }}</h5>
                        <span class=\"badge bg-white text-dark rounded-pill px-2 px-md-3 py-1 py-md-2\" style=\"font-size:0.55rem;\">
                            {% if plan.isUnlimited %}Illimité{% else %}Limité{% endif %}
                        </span>
                    </div>

                    <div class=\"card-body p-2 p-md-4 d-flex flex-column flex-grow-1\">
                        <!-- Prix -->
                        <div class=\"text-center mb-2 mb-md-4\">
                            <h2 class=\"display-6 fw-bold text-primary mb-0\">{{ plan.priceMonthly|number_format(0, ',', ' ') }} FCFA</h2>
                            <p class=\"text-muted small\" style=\"font-size:0.6rem;\">/mois • <small>{{ plan.priceYearly|number_format(0, ',', ' ') }} FCFA/an</small></p>
                        </div>

                        <!-- Section Commerce -->
                        <div class=\"mb-2 mb-md-3\">
                            <h6 class=\"fw-bold text-primary mb-1 mb-md-2 fs-6 fs-md-5\">
                                <i class=\"bi bi-shop me-1 me-md-2\"></i>Commerce
                            </h6>
                            <div class=\"mb-1 mb-md-2\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-people-fill text-success me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Utilisateurs/rôle :</strong> 
                                        {% set maxUsers = plan.maxUsersPerRole %}
                                        {% if maxUsers is null or maxUsers >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxUsers|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-box-fill text-info me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Produits :</strong> 
                                        {% set maxProducts = plan.maxProducts %}
                                        {% if maxProducts is null or maxProducts >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxProducts|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-cart-fill text-warning me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Commandes/mois :</strong> 
                                        {% set maxOrders = plan.maxOrdersPerMonth %}
                                        {% if maxOrders is null or maxOrders >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxOrders|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-tags-fill text-primary me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Catégories :</strong> 
                                        {% set maxCategories = plan.maxCategories %}
                                        {% if maxCategories is null or maxCategories >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxCategories|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-truck text-secondary me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Fournisseurs :</strong> 
                                        {% set maxSuppliers = plan.maxSuppliers %}
                                        {% if maxSuppliers is null or maxSuppliers >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxSuppliers|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Section Restaurant (Recettes) -->
                        <div class=\"mb-2 mb-md-3 pt-1 pt-md-2 border-top\">
                            <h6 class=\"fw-bold text-success mb-1 mb-md-2 fs-6 fs-md-5\">
                                <i class=\"bi bi-egg-fried me-1 me-md-2\"></i>Restaurant
                            </h6>
                            <div class=\"mb-1 mb-md-2\">
                                <!-- Recettes -->
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-book-fill text-success me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Recettes :</strong> 
                                        {% set maxRecipes = plan.maxRecipes %}
                                        {% if maxRecipes is null or maxRecipes >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxRecipes|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                
                                <!-- Catégories de recettes -->
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"bi bi-tag-fill text-info me-2 me-md-3 fs-6 fs-md-5\"></i>
                                    <span class=\"small\">
                                        <strong>Catégories de recettes :</strong> 
                                        {% set maxRecipeCategories = plan.maxRecipeCategories %}
                                        {% if maxRecipeCategories is null or maxRecipeCategories >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxRecipeCategories|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Nombre de fonctionnalités -->
                        {% if plan.features|length > 0 %}
                            <div class=\"d-flex align-items-center mb-2 mb-md-3\">
                                <i class=\"bi bi-star-fill text-warning me-2 me-md-3 fs-6 fs-md-5\"></i>
                                <span class=\"small\"><strong>Fonctionnalités :</strong> {{ plan.features|length }}</span>
                            </div>
                        {% endif %}

                        <!-- Statut actif/inactif et nombre d'abonnements -->
                        <div class=\"d-flex justify-content-between align-items-center mt-auto mb-2 mb-md-3\">
                            <span class=\"badge bg-{{ plan.isActive ? 'success' : 'secondary' }} p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-{{ plan.isActive ? 'check-circle' : 'x-circle' }} me-1\"></i>
                                {{ plan.isActive ? 'Actif' : 'Inactif' }}
                            </span>
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">{{ plan.subscriptions|length }} abonnement(s)</small>
                        </div>

                        <!-- Actions centrées -->
                        <div class=\"d-flex gap-1 gap-md-2 justify-content-center mt-1 mt-md-2\">
                            <a href=\"{{ path('app_super_admin_subscription_plan_show', {'id': plan.id}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill px-2 px-md-3\" title=\"Détails\">
                                <i class=\"bi bi-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_super_admin_subscription_plan_edit', {'id': plan.id}) }}\" class=\"btn btn-sm btn-outline-warning rounded-pill px-2 px-md-3\" title=\"Modifier\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <button type=\"button\" class=\"btn btn-sm btn-outline-{{ plan.isActive ? 'danger' : 'success' }} rounded-pill px-2 px-md-3\" 
                                    data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal{{ plan.id }}\" 
                                    title=\"{{ plan.isActive ? 'Désactiver' : 'Activer' }}\">
                                <i class=\"bi bi-{{ plan.isActive ? 'pause-fill' : 'play-fill' }}\"></i>
                            </button>
                            {% if plan.subscriptions|length == 0 %}
                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger rounded-pill px-2 px-md-3\" 
                                        data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ plan.id }}\" 
                                        title=\"Supprimer\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Toggle -->
            <div class=\"modal fade\" id=\"toggleModal{{ plan.id }}\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-{{ plan.isActive ? 'warning' : 'success' }} text-white border-0 py-2 py-md-3\">
                            <h5 class=\"modal-title fs-6 fs-md-5\">
                                <i class=\"bi bi-{{ plan.isActive ? 'pause-circle' : 'play-circle' }} me-2\"></i>
                                {{ plan.isActive ? 'Désactiver' : 'Activer' }} le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-3 p-md-4\">
                            <p class=\"mb-0 small\">
                                Êtes-vous sûr de vouloir {{ plan.isActive ? 'désactiver' : 'activer' }} le plan <strong>{{ plan.displayName }}</strong> ?
                                {% if plan.isActive %}
                                    <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                                {% else %}
                                    <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                                {% endif %}
                            </p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm px-3 px-md-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"{{ path('app_super_admin_subscription_plan_toggle', {'id': plan.id}) }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ plan.id) }}\">
                                <button type=\"submit\" class=\"btn btn-{{ plan.isActive ? 'warning' : 'success' }} btn-sm px-3 px-md-4 rounded-pill\">Confirmer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Delete -->
            {% if plan.subscriptions|length == 0 %}
            <div class=\"modal fade\" id=\"deleteModal{{ plan.id }}\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-danger text-white border-0 py-2 py-md-3\">
                            <h5 class=\"modal-title fs-6 fs-md-5\">
                                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-3 p-md-4\">
                            <p class=\"small\">Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>{{ plan.displayName }}</strong> ?</p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm px-3 px-md-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"{{ path('app_super_admin_subscription_plan_delete', {'id': plan.id}) }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ plan.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm px-3 px-md-4 rounded-pill\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        {% else %}
            <!-- Aucun plan trouvé -->
            <div class=\"col-12 text-center py-3 py-md-5\">
                <i class=\"bi bi-tags display-3 text-muted\"></i>
                <p class=\"mt-2 mt-md-3 fs-5\">Aucun plan d'abonnement.</p>
                <a href=\"{{ path('app_super_admin_subscription_plan_new') }}\" class=\"btn btn-primary btn-sm btn-md-lg rounded-pill px-4 px-md-5\">Créer le premier</a>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "super_admin/subscription_plan/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\index.html.twig");
    }
}
