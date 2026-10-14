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

/* marketplace/profile/edit.html.twig */
class __TwigTemplate_e606ed32135d3d59d4806e0257a98239 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/profile/edit.html.twig"));

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

        yield "Modifier mon profil - HMA Market";
        
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
    .profile-edit-container {
        padding: 2rem 0;
    }

    .profile-edit-card {
        border: none;
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.08);
        overflow: hidden;
    }

    .profile-edit-card .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        padding: 2rem;
        border: none;
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    .profile-edit-card .card-header .avatar-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: white;
        border: 3px solid rgba(255,255,255,0.3);
        flex-shrink: 0;
        backdrop-filter: blur(10px);
    }

    .profile-edit-card .card-header h3 {
        font-weight: 800;
        margin-bottom: 0.25rem;
    }

    .profile-edit-card .card-header p {
        opacity: 0.9;
        margin-bottom: 0;
    }

    .profile-edit-card .card-body {
        padding: 2.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group .form-label {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .form-group .form-label .required {
        color: #ef4444;
        margin-left: 0.25rem;
    }

    .form-group .form-control,
    .form-group .form-select {
        border-radius: 12px;
        padding: 0.75rem 1rem;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .form-group .form-control:focus,
    .form-group .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.1);
    }

    .form-group .form-control:disabled,
    .form-group .form-control[readonly] {
        background-color: #f1f5f9;
        cursor: not-allowed;
        opacity: 0.7;
    }

    .form-group .form-control.is-invalid,
    .form-group .form-select.is-invalid {
        border-color: #ef4444;
    }

    .form-group .form-text {
        color: #94a3b8;
        font-size: 0.8rem;
        margin-top: 0.25rem;
    }

    .form-group textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

    /* ✅ Select2 avec drapeaux */
    .select2-country + .select2-container .select2-selection__rendered {
        font-size: 0.95rem;
        padding: 0.5rem 1rem;
    }

    .select2-country + .select2-container .select2-selection__rendered .flag-icon {
        margin-right: 8px;
        font-size: 1.2rem;
    }

    .select2-country + .select2-container .select2-selection {
        border-radius: 12px !important;
        border: 2px solid #e5e7eb !important;
        min-height: 50px !important;
        padding: 0.2rem 0 !important;
    }

    .select2-country + .select2-container .select2-selection:focus,
    .select2-country + .select2-container .select2-selection--single {
        border-color: #e5e7eb;
    }

    .select2-country + .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 2.2rem;
        padding-left: 1rem;
        padding-right: 2rem;
    }

    .select2-country + .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
        height: 48px;
    }

    /* Options Select2 avec drapeaux */
    .select2-results__option .flag-icon {
        margin-right: 10px;
        font-size: 1.2rem;
    }

    .select2-results__option--highlighted .flag-icon {
        color: white;
    }

    .btn-actions {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
        flex-wrap: wrap;
    }

    .btn-actions .btn {
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-actions .btn-primary {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        border: none;
        color: white;
    }

    .btn-actions .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(4, 99, 241, 0.3);
    }

    .btn-actions .btn-secondary {
        background: #f1f5f9;
        border: 2px solid #e5e7eb;
        color: #64748b;
    }

    .btn-actions .btn-secondary:hover {
        background: #e2e8f0;
        transform: translateY(-2px);
    }

    .btn-actions .btn-danger {
        background: #fee2e2;
        border: 2px solid #fecaca;
        color: #dc2626;
    }

    .btn-actions .btn-danger:hover {
        background: #fecaca;
        transform: translateY(-2px);
    }

    .alert-custom {
        border-radius: 12px;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        border: none;
    }

    .alert-custom.alert-info {
        background: #eff6ff;
        color: #1e40af;
        border-left: 4px solid var(--primary-color);
    }

    .alert-custom.alert-success {
        background: #f0fdf4;
        color: #166534;
        border-left: 4px solid #10b981;
    }

    .alert-custom.alert-danger {
        background: #fef2f2;
        color: #991b1b;
        border-left: 4px solid #ef4444;
    }

    .alert-custom.alert-warning {
        background: #fffbeb;
        color: #92400e;
        border-left: 4px solid #f59e0b;
    }

    .alert-custom i {
        margin-right: 0.75rem;
    }

    /* ✅ Formulaire en 2 colonnes sur desktop */
    @media (min-width: 768px) {
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .form-row .full-width {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 768px) {
        .profile-edit-card .card-body {
            padding: 1.5rem;
        }
        .profile-edit-card .card-header {
            padding: 1.5rem;
            flex-direction: column;
            text-align: center;
        }
        .profile-edit-card .card-header .avatar-wrapper {
            width: 60px;
            height: 60px;
            font-size: 1.8rem;
        }
        .profile-edit-container {
            padding: 1rem 0;
        }
        .btn-actions .btn {
            flex: 1;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .profile-edit-card .card-body {
            padding: 1rem;
        }
        .form-group .form-control,
        .form-group .form-select {
            font-size: 0.85rem;
            padding: 0.6rem 0.8rem;
        }
        .btn-actions {
            flex-direction: column;
        }
        .btn-actions .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 300
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

        // line 301
        yield "<div class=\"profile-edit-container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10 col-lg-8\">
            <div class=\"profile-edit-card card\">
                <!-- Header -->
                <div class=\"card-header\">
                    <div class=\"avatar-wrapper\">
                        ";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 308, $this->source); })()), "fullName", [], "any", false, false, false, 308), CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 308, $this->source); })()), "email", [], "any", false, false, false, 308))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 308, $this->source); })()), "email", [], "any", false, false, false, 308))), 0, 2)), "html", null, true);
        yield "
                    </div>
                    <div>
                        <h3>Modifier mon profil</h3>
                        <p>Mettez à jour vos informations personnelles</p>
                    </div>
                </div>

                <!-- Body -->
                <div class=\"card-body\">
                    ";
        // line 319
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "flashes", [], "any", false, false, false, 319));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 320
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 321
                yield "                            <div class=\"alert-custom alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-";
                // line 322
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "danger")) {
                    yield "exclamation-circle";
                } elseif (($context["label"] == "warning")) {
                    yield "exclamation-triangle";
                } else {
                    yield "info-circle";
                }
                yield "\"></i>
                                ";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        yield "
                    ";
        // line 330
        yield "                    <div class=\"alert-custom alert-info\">
                        <i class=\"fas fa-info-circle\"></i>
                        <strong>Information :</strong> L'adresse email ne peut pas être modifiée. 
                        Si vous souhaitez changer votre email, veuillez contacter le support.
                    </div>

                    ";
        // line 337
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), 'form_start', ["attr" => ["id" => "profileForm", "novalidate" => "novalidate"]]);
        yield "

                    <!-- Email (non modifiable) -->
                    <div class=\"form-group\">
                        ";
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "email", [], "any", false, false, false, 341), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                        ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "email", [], "any", false, false, false, 342), 'widget', ["attr" => ["class" => "form-control", "disabled" => "disabled", "readonly" => "readonly"]]);
        // line 348
        yield "
                        <div class=\"form-text\">L'email ne peut pas être modifié.</div>
                        ";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "email", [], "any", false, false, false, 350), 'errors');
        yield "
                    </div>

                    <div class=\"form-row\">
                        <!-- Nom complet -->
                        <div class=\"form-group full-width\">
                            ";
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "full_name", [], "any", false, false, false, 356), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom complet *"]);
        yield "
                            ";
        // line 357
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "full_name", [], "any", false, false, false, 357), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom complet"]]);
        // line 362
        yield "
                            ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "full_name", [], "any", false, false, false, 363), 'errors');
        yield "
                        </div>

                        <!-- Téléphone -->
                        <div class=\"form-group\">
                            ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "phone", [], "any", false, false, false, 368), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                            ";
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "phone", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+229 01 56 13 92 00"]]);
        // line 374
        yield "
                            ";
        // line 375
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "phone", [], "any", false, false, false, 375), 'errors');
        yield "
                        </div>

                        <!-- Ville -->
                        <div class=\"form-group\">
                            ";
        // line 380
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "city", [], "any", false, false, false, 380), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ville"]);
        yield "
                            ";
        // line 381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "city", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre ville"]]);
        // line 386
        yield "
                            ";
        // line 387
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "city", [], "any", false, false, false, 387), 'errors');
        yield "
                        </div>

                        <!-- Adresse (pleine largeur) -->
                        <div class=\"form-group full-width\">
                            ";
        // line 392
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), "address", [], "any", false, false, false, 392), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        yield "
                            ";
        // line 393
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "address", [], "any", false, false, false, 393), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse complète"]]);
        // line 398
        yield "
                            ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "address", [], "any", false, false, false, 399), 'errors');
        yield "
                        </div>

                        <!-- Pays (pleine largeur) -->
                        <div class=\"form-group full-width\">
                            ";
        // line 404
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "country", [], "any", false, false, false, 404), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Pays"]);
        yield "
                            ";
        // line 405
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "country", [], "any", false, false, false, 405), 'widget', ["attr" => ["class" => "form-select select2-country", "data-placeholder" => "🌍 Sélectionnez votre pays"]]);
        // line 410
        yield "
                            <div class=\"form-text\">
                                <i class=\"fas fa-globe me-1\"></i>
                                Sélectionnez votre pays pour une meilleure expérience.
                            </div>
                            ";
        // line 415
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 415, $this->source); })()), "country", [], "any", false, false, false, 415), 'errors');
        yield "
                        </div>

                        <!-- Bio (pleine largeur) -->
                        <div class=\"form-group full-width\">
                            ";
        // line 420
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "bio", [], "any", false, false, false, 420), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Bio"]);
        yield "
                            ";
        // line 421
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 421, $this->source); })()), "bio", [], "any", false, false, false, 421), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Parlez-nous un peu de vous...", "rows" => 4]]);
        // line 427
        yield "
                            ";
        // line 428
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "bio", [], "any", false, false, false, 428), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class=\"btn-actions\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Enregistrer les modifications
                        </button>
                        <a href=\"";
        // line 437
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_profile");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-times\"></i> Annuler
                        </a>
                        <a href=\"";
        // line 440
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_change_password");
        yield "\" class=\"btn btn-danger\">
                            <i class=\"fas fa-key\"></i> Changer mon mot de passe
                        </a>
                    </div>

                    ";
        // line 445
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 453
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

        // line 454
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== SELECT2 PAYS AVEC DRAPEAUX ====================
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        // Fonction pour formater les options avec drapeaux
        function formatCountryOption(option) {
            if (!option.id) {
                return option.text;
            }
            
            // Extraire le code pays de la valeur
            const countryCode = option.element.value;
            // Récupérer le libellé avec le drapeau
            const text = option.text;
            
            // Si le texte contient déjà un drapeau, on le garde
            if (text.match(/[\\u{1F1E6}-\\u{1F1FF}]/u)) {
                return text;
            }
            
            return text;
        }

        function formatCountrySelection(option) {
            if (!option.id) {
                return option.text;
            }
            return option.text;
        }

        \$('.select2-country').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🌍 Sélectionnez votre pays',
            allowClear: true,
            width: '100%',
            templateResult: formatCountryOption,
            templateSelection: formatCountrySelection,
            escapeMarkup: function(markup) {
                return markup;
            }
        });

        // ✅ Sélectionner automatiquement le pays si un seul pays est disponible
        const countrySelect = \$('.select2-country');
        if (countrySelect.find('option').length === 2) { // placeholder + 1 option
            countrySelect.val(countrySelect.find('option:last-child').val()).trigger('change');
        }
    }

    // ==================== FORM VALIDATION ====================
    const form = document.getElementById('profileForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Enregistrement...';
            }
        });
    }

    // ==================== GESTION DES ERREURS ====================
    // Ajouter la classe is-invalid aux champs avec des erreurs
    document.querySelectorAll('.form-group .form-control.is-invalid, .form-group .form-select.is-invalid').forEach(function(element) {
        const parent = element.closest('.form-group');
        if (parent) {
            const feedback = document.createElement('div');
            feedback.className = 'invalid-feedback';
            feedback.textContent = element.validationMessage || 'Ce champ est invalide.';
            parent.appendChild(feedback);
        }
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
        return "marketplace/profile/edit.html.twig";
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
        return array (  675 => 454,  662 => 453,  644 => 445,  636 => 440,  630 => 437,  618 => 428,  615 => 427,  613 => 421,  609 => 420,  601 => 415,  594 => 410,  592 => 405,  588 => 404,  580 => 399,  577 => 398,  575 => 393,  571 => 392,  563 => 387,  560 => 386,  558 => 381,  554 => 380,  546 => 375,  543 => 374,  541 => 369,  537 => 368,  529 => 363,  526 => 362,  524 => 357,  520 => 356,  511 => 350,  507 => 348,  505 => 342,  501 => 341,  493 => 337,  485 => 330,  482 => 328,  476 => 327,  466 => 323,  454 => 322,  449 => 321,  444 => 320,  439 => 319,  426 => 308,  417 => 301,  404 => 300,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/profile/edit.html.twig #}

{% extends 'base_marketplace.html.twig' %}

{% block title %}Modifier mon profil - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .profile-edit-container {
        padding: 2rem 0;
    }

    .profile-edit-card {
        border: none;
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.08);
        overflow: hidden;
    }

    .profile-edit-card .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        padding: 2rem;
        border: none;
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    .profile-edit-card .card-header .avatar-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: white;
        border: 3px solid rgba(255,255,255,0.3);
        flex-shrink: 0;
        backdrop-filter: blur(10px);
    }

    .profile-edit-card .card-header h3 {
        font-weight: 800;
        margin-bottom: 0.25rem;
    }

    .profile-edit-card .card-header p {
        opacity: 0.9;
        margin-bottom: 0;
    }

    .profile-edit-card .card-body {
        padding: 2.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group .form-label {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .form-group .form-label .required {
        color: #ef4444;
        margin-left: 0.25rem;
    }

    .form-group .form-control,
    .form-group .form-select {
        border-radius: 12px;
        padding: 0.75rem 1rem;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .form-group .form-control:focus,
    .form-group .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.1);
    }

    .form-group .form-control:disabled,
    .form-group .form-control[readonly] {
        background-color: #f1f5f9;
        cursor: not-allowed;
        opacity: 0.7;
    }

    .form-group .form-control.is-invalid,
    .form-group .form-select.is-invalid {
        border-color: #ef4444;
    }

    .form-group .form-text {
        color: #94a3b8;
        font-size: 0.8rem;
        margin-top: 0.25rem;
    }

    .form-group textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

    /* ✅ Select2 avec drapeaux */
    .select2-country + .select2-container .select2-selection__rendered {
        font-size: 0.95rem;
        padding: 0.5rem 1rem;
    }

    .select2-country + .select2-container .select2-selection__rendered .flag-icon {
        margin-right: 8px;
        font-size: 1.2rem;
    }

    .select2-country + .select2-container .select2-selection {
        border-radius: 12px !important;
        border: 2px solid #e5e7eb !important;
        min-height: 50px !important;
        padding: 0.2rem 0 !important;
    }

    .select2-country + .select2-container .select2-selection:focus,
    .select2-country + .select2-container .select2-selection--single {
        border-color: #e5e7eb;
    }

    .select2-country + .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 2.2rem;
        padding-left: 1rem;
        padding-right: 2rem;
    }

    .select2-country + .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
        height: 48px;
    }

    /* Options Select2 avec drapeaux */
    .select2-results__option .flag-icon {
        margin-right: 10px;
        font-size: 1.2rem;
    }

    .select2-results__option--highlighted .flag-icon {
        color: white;
    }

    .btn-actions {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
        flex-wrap: wrap;
    }

    .btn-actions .btn {
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-actions .btn-primary {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        border: none;
        color: white;
    }

    .btn-actions .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(4, 99, 241, 0.3);
    }

    .btn-actions .btn-secondary {
        background: #f1f5f9;
        border: 2px solid #e5e7eb;
        color: #64748b;
    }

    .btn-actions .btn-secondary:hover {
        background: #e2e8f0;
        transform: translateY(-2px);
    }

    .btn-actions .btn-danger {
        background: #fee2e2;
        border: 2px solid #fecaca;
        color: #dc2626;
    }

    .btn-actions .btn-danger:hover {
        background: #fecaca;
        transform: translateY(-2px);
    }

    .alert-custom {
        border-radius: 12px;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        border: none;
    }

    .alert-custom.alert-info {
        background: #eff6ff;
        color: #1e40af;
        border-left: 4px solid var(--primary-color);
    }

    .alert-custom.alert-success {
        background: #f0fdf4;
        color: #166534;
        border-left: 4px solid #10b981;
    }

    .alert-custom.alert-danger {
        background: #fef2f2;
        color: #991b1b;
        border-left: 4px solid #ef4444;
    }

    .alert-custom.alert-warning {
        background: #fffbeb;
        color: #92400e;
        border-left: 4px solid #f59e0b;
    }

    .alert-custom i {
        margin-right: 0.75rem;
    }

    /* ✅ Formulaire en 2 colonnes sur desktop */
    @media (min-width: 768px) {
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .form-row .full-width {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 768px) {
        .profile-edit-card .card-body {
            padding: 1.5rem;
        }
        .profile-edit-card .card-header {
            padding: 1.5rem;
            flex-direction: column;
            text-align: center;
        }
        .profile-edit-card .card-header .avatar-wrapper {
            width: 60px;
            height: 60px;
            font-size: 1.8rem;
        }
        .profile-edit-container {
            padding: 1rem 0;
        }
        .btn-actions .btn {
            flex: 1;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .profile-edit-card .card-body {
            padding: 1rem;
        }
        .form-group .form-control,
        .form-group .form-select {
            font-size: 0.85rem;
            padding: 0.6rem 0.8rem;
        }
        .btn-actions {
            flex-direction: column;
        }
        .btn-actions .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"profile-edit-container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10 col-lg-8\">
            <div class=\"profile-edit-card card\">
                <!-- Header -->
                <div class=\"card-header\">
                    <div class=\"avatar-wrapper\">
                        {{ customer.fullName|default(customer.email)|slice(0, 2)|upper }}
                    </div>
                    <div>
                        <h3>Modifier mon profil</h3>
                        <p>Mettez à jour vos informations personnelles</p>
                    </div>
                </div>

                <!-- Body -->
                <div class=\"card-body\">
                    {# Flash messages #}
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert-custom alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-{% if label == 'success' %}check-circle{% elseif label == 'danger' %}exclamation-circle{% elseif label == 'warning' %}exclamation-triangle{% else %}info-circle{% endif %}\"></i>
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {# Information email non modifiable #}
                    <div class=\"alert-custom alert-info\">
                        <i class=\"fas fa-info-circle\"></i>
                        <strong>Information :</strong> L'adresse email ne peut pas être modifiée. 
                        Si vous souhaitez changer votre email, veuillez contacter le support.
                    </div>

                    {# Formulaire #}
                    {{ form_start(form, {'attr': {'id': 'profileForm', 'novalidate': 'novalidate'}}) }}

                    <!-- Email (non modifiable) -->
                    <div class=\"form-group\">
                        {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.email, {
                            'attr': {
                                'class': 'form-control',
                                'disabled': 'disabled',
                                'readonly': 'readonly'
                            }
                        }) }}
                        <div class=\"form-text\">L'email ne peut pas être modifié.</div>
                        {{ form_errors(form.email) }}
                    </div>

                    <div class=\"form-row\">
                        <!-- Nom complet -->
                        <div class=\"form-group full-width\">
                            {{ form_label(form.full_name, 'Nom complet *', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.full_name, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Votre nom complet'
                                }
                            }) }}
                            {{ form_errors(form.full_name) }}
                        </div>

                        <!-- Téléphone -->
                        <div class=\"form-group\">
                            {{ form_label(form.phone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.phone, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': '+229 01 56 13 92 00'
                                }
                            }) }}
                            {{ form_errors(form.phone) }}
                        </div>

                        <!-- Ville -->
                        <div class=\"form-group\">
                            {{ form_label(form.city, 'Ville', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.city, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Votre ville'
                                }
                            }) }}
                            {{ form_errors(form.city) }}
                        </div>

                        <!-- Adresse (pleine largeur) -->
                        <div class=\"form-group full-width\">
                            {{ form_label(form.address, 'Adresse', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.address, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Votre adresse complète'
                                }
                            }) }}
                            {{ form_errors(form.address) }}
                        </div>

                        <!-- Pays (pleine largeur) -->
                        <div class=\"form-group full-width\">
                            {{ form_label(form.country, 'Pays', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.country, {
                                'attr': {
                                    'class': 'form-select select2-country',
                                    'data-placeholder': '🌍 Sélectionnez votre pays'
                                }
                            }) }}
                            <div class=\"form-text\">
                                <i class=\"fas fa-globe me-1\"></i>
                                Sélectionnez votre pays pour une meilleure expérience.
                            </div>
                            {{ form_errors(form.country) }}
                        </div>

                        <!-- Bio (pleine largeur) -->
                        <div class=\"form-group full-width\">
                            {{ form_label(form.bio, 'Bio', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.bio, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Parlez-nous un peu de vous...',
                                    'rows': 4
                                }
                            }) }}
                            {{ form_errors(form.bio) }}
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class=\"btn-actions\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Enregistrer les modifications
                        </button>
                        <a href=\"{{ path('marketplace_profile') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-times\"></i> Annuler
                        </a>
                        <a href=\"{{ path('marketplace_change_password') }}\" class=\"btn btn-danger\">
                            <i class=\"fas fa-key\"></i> Changer mon mot de passe
                        </a>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== SELECT2 PAYS AVEC DRAPEAUX ====================
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        // Fonction pour formater les options avec drapeaux
        function formatCountryOption(option) {
            if (!option.id) {
                return option.text;
            }
            
            // Extraire le code pays de la valeur
            const countryCode = option.element.value;
            // Récupérer le libellé avec le drapeau
            const text = option.text;
            
            // Si le texte contient déjà un drapeau, on le garde
            if (text.match(/[\\u{1F1E6}-\\u{1F1FF}]/u)) {
                return text;
            }
            
            return text;
        }

        function formatCountrySelection(option) {
            if (!option.id) {
                return option.text;
            }
            return option.text;
        }

        \$('.select2-country').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🌍 Sélectionnez votre pays',
            allowClear: true,
            width: '100%',
            templateResult: formatCountryOption,
            templateSelection: formatCountrySelection,
            escapeMarkup: function(markup) {
                return markup;
            }
        });

        // ✅ Sélectionner automatiquement le pays si un seul pays est disponible
        const countrySelect = \$('.select2-country');
        if (countrySelect.find('option').length === 2) { // placeholder + 1 option
            countrySelect.val(countrySelect.find('option:last-child').val()).trigger('change');
        }
    }

    // ==================== FORM VALIDATION ====================
    const form = document.getElementById('profileForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Enregistrement...';
            }
        });
    }

    // ==================== GESTION DES ERREURS ====================
    // Ajouter la classe is-invalid aux champs avec des erreurs
    document.querySelectorAll('.form-group .form-control.is-invalid, .form-group .form-select.is-invalid').forEach(function(element) {
        const parent = element.closest('.form-group');
        if (parent) {
            const feedback = document.createElement('div');
            feedback.className = 'invalid-feedback';
            feedback.textContent = element.validationMessage || 'Ce champ est invalide.';
            parent.appendChild(feedback);
        }
    });
});
</script>
{% endblock %}", "marketplace/profile/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\profile\\edit.html.twig");
    }
}
