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

/* company/settings/index.html.twig */
class __TwigTemplate_2d5cc54ed5c7871f0d684c218f66936a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/settings/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/settings/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Paramètres entreprise - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 4, $this->source); })()), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root {
        --primary-color: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "primaryColor", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 10, $this->source); })()), "primaryColor", [], "any", false, false, false, 10), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield ";
    }
    
    .settings-container {
        max-width: 1400px;
        margin: 0 auto;
    }
    
    /* Hero Header */
    .settings-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 24px;
        padding: 2rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }
    
    .settings-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: pulse 4s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.05); opacity: 0.8; }
    }
    
    .settings-hero h1 {
        color: white;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        position: relative;
    }
    
    .settings-hero p {
        color: rgba(255,255,255,0.9);
        margin-bottom: 0;
        position: relative;
    }
    
    /* Navigation par onglets */
    .settings-tabs {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        border-bottom: 2px solid #e5e7eb;
        padding-bottom: 0;
        background: white;
        border-radius: 16px;
        padding: 0.5rem;
    }
    
    .settings-tab {
        padding: 0.75rem 1.5rem;
        border: none;
        background: transparent;
        font-weight: 600;
        color: #64748b;
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .settings-tab i {
        margin-right: 0.5rem;
    }
    
    .settings-tab:hover {
        background: #f1f5f9;
        color: var(--primary-color);
    }
    
    .settings-tab.active {
        background: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px rgba(var(--primary-color-rgb, 4, 99, 241), 0.3);
    }
    
    /* Sections */
    .settings-section {
        background: white;
        border-radius: 24px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
    }
    
    .settings-section:hover {
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }
    
    .section-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f1f5f9;
    }
    
    .section-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-color-dark, #0350c4));
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
    }
    
    .section-title {
        flex: 1;
    }
    
    .section-title h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }
    
    .section-title p {
        color: #64748b;
        font-size: 0.85rem;
        margin-bottom: 0;
    }
    
    /* Preview cards */
    .preview-card {
        background: #f8fafc;
        border-radius: 16px;
        padding: 1rem;
        margin-top: 1rem;
        border: 1px solid #e5e7eb;
    }
    
    .preview-title {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.5px;
        margin-bottom: 0.75rem;
    }
    
    /* Logo preview */
    .logo-preview {
        display: flex;
        align-items: center;
        gap: 1rem;
        background: #f8fafc;
        border-radius: 16px;
        padding: 1rem;
        margin-top: 1rem;
    }
    
    .logo-preview-img {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        object-fit: cover;
        background: white;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
    }
    
    .logo-preview-img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    /* Color picker custom */
    .color-preview {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        border: 2px solid white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .color-preview:hover {
        transform: scale(1.1);
    }
    
    /* Ticket preview */
    .ticket-preview {
        background: white;
        border-radius: 16px;
        padding: 1rem;
        max-width: 300px;
        margin-top: 1rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border: 1px solid #e5e7eb;
    }
    
    .ticket-header {
        text-align: center;
        border-bottom: 1px dashed #e5e7eb;
        padding-bottom: 0.5rem;
        margin-bottom: 0.5rem;
    }
    
    .ticket-footer {
        text-align: center;
        border-top: 1px dashed #e5e7eb;
        padding-top: 0.5rem;
        margin-top: 0.5rem;
        font-size: 0.7rem;
        color: #64748b;
    }
    
    /* Form styling */
    .form-group {
        margin-bottom: 1.25rem;
    }
    
    .form-label {
        font-weight: 600;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
        color: #1e293b;
    }
    
    .form-control, .form-select {
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        padding: 0.625rem 1rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.1);
    }
    
    /* Action buttons */
    .action-buttons {
        position: sticky;
        bottom: 2rem;
        background: white;
        padding: 1rem;
        border-radius: 60px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
        margin-top: 2rem;
    }
    
    /* Badge */
    .info-badge {
        background: #e0f2fe;
        color: #0284c7;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .settings-hero { padding: 1.5rem; }
        .settings-hero h1 { font-size: 1.5rem; }
        .settings-tab { padding: 0.5rem 1rem; font-size: 0.875rem; }
        .action-buttons { margin: 1rem; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 292
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

        // line 293
        yield "<div class=\"container-fluid settings-container py-4\">
    
    <!-- Hero Section -->
    <div class=\"settings-hero\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <div>
                <h1>
                    <i class=\"fas fa-sliders-h me-2\"></i>
                    Paramètres entreprise
                </h1>
                <p>Personnalisez votre espace de travail et les documents</p>
            </div>
            <div class=\"info-badge\">
                <i class=\"fas fa-shield-alt me-1\"></i>
                Seul le propriétaire peut modifier ces paramètres
            </div>
        </div>
    </div>
    
    <!-- Onglets -->
    <div class=\"settings-tabs\" id=\"settingsTabs\">
        <button class=\"settings-tab active\" data-section=\"general\">
            <i class=\"fas fa-building\"></i> Général
        </button>
        <button class=\"settings-tab\" data-section=\"branding\">
            <i class=\"fas fa-palette\"></i> Apparence
        </button>
        <button class=\"settings-tab\" data-section=\"contact\">
            <i class=\"fas fa-address-card\"></i> Contact
        </button>
        <button class=\"settings-tab\" data-section=\"receipt\">
            <i class=\"fas fa-receipt\"></i> Ticket
        </button>
        <button class=\"settings-tab\" data-section=\"taxes\">
            <i class=\"fas fa-percent\"></i> Taxes
        </button>
    </div>
    
    ";
        // line 331
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), 'form_start', ["attr" => ["id" => "companySettingsForm", "class" => "settings-form"]]);
        yield "
    
    <!-- Section 1: Général -->
    <div id=\"section-general\" class=\"settings-section\" style=\"display: block;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-building\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Informations générales</h3>
                <p>Identité et description de votre entreprise</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "companyName", [], "any", false, false, false, 348), 'label', ["label" => "Nom de l'entreprise"]);
        yield "
                    ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "companyName", [], "any", false, false, false, 349), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Restaurant Le Gourmet"]]);
        yield "
                    <small class=\"text-muted\">Apparaît dans le header, les factures et les tickets</small>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 355
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "slogan", [], "any", false, false, false, 355), 'label', ["label" => "Slogan"]);
        yield "
                    ";
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "slogan", [], "any", false, false, false, 356), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: La qualité fait la différence"]]);
        yield "
                    <small class=\"text-muted\">Optionnel - Apparaît sous le nom</small>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-group\">
                    ";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "description", [], "any", false, false, false, 362), 'label', ["label" => "Description"]);
        yield "
                    ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "description", [], "any", false, false, false, 363), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Présentez votre activité..."]]);
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"logo-preview\">
            ";
        // line 369
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 369, $this->source); })()), "logo", [], "any", false, false, false, 369)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 370
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 370, $this->source); })()), "logo", [], "any", false, false, false, 370))), "html", null, true);
            yield "\" class=\"logo-preview-img\" alt=\"Logo\">
            ";
        } else {
            // line 372
            yield "                <div class=\"logo-preview-img d-flex align-items-center justify-content-center bg-light\">
                    <i class=\"fas fa-store fa-2x text-muted\"></i>
                </div>
            ";
        }
        // line 376
        yield "            <div class=\"flex-grow-1\">
                ";
        // line 377
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 377, $this->source); })()), "logoFile", [], "any", false, false, false, 377), 'label', ["label" => "Logo de l'entreprise"]);
        yield "
                ";
        // line 378
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), "logoFile", [], "any", false, false, false, 378), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        yield "
                <small class=\"text-muted\">Format recommandé: PNG ou JPG, 200x200px</small>
            </div>
        </div>
    </div>
    
    <!-- Section 2: Apparence -->
    <div id=\"section-branding\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-palette\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Apparence & Personnalisation</h3>
                <p>Couleurs et thème de votre interface</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "primaryColor", [], "any", false, false, false, 399), 'label', ["label" => "Couleur principale"]);
        yield "
                    <div class=\"d-flex align-items-center gap-3\">
                        ";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "primaryColor", [], "any", false, false, false, 401), 'widget', ["attr" => ["class" => "form-control", "type" => "color", "style" => "width: 80px; height: 50px;"]]);
        yield "
                        <div class=\"color-preview\" style=\"background: ";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "primaryColor", [], "any", false, true, false, 402), "vars", [], "any", false, true, false, 402), "value", [], "any", true, true, false, 402)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "primaryColor", [], "any", false, false, false, 402), "vars", [], "any", false, false, false, 402), "value", [], "any", false, false, false, 402), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield "\"></div>
                        <span class=\"text-muted small\">Boutons, liens, accents</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 409
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), "secondaryColor", [], "any", false, false, false, 409), 'label', ["label" => "Couleur secondaire"]);
        yield "
                    <div class=\"d-flex align-items-center gap-3\">
                        ";
        // line 411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "secondaryColor", [], "any", false, false, false, 411), 'widget', ["attr" => ["class" => "form-control", "type" => "color", "style" => "width: 80px; height: 50px;"]]);
        yield "
                        <div class=\"color-preview\" style=\"background: ";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "secondaryColor", [], "any", false, true, false, 412), "vars", [], "any", false, true, false, 412), "value", [], "any", true, true, false, 412)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "secondaryColor", [], "any", false, false, false, 412), "vars", [], "any", false, false, false, 412), "value", [], "any", false, false, false, 412), "#8b5cf6")) : ("#8b5cf6")), "html", null, true);
        yield "\"></div>
                        <span class=\"text-muted small\">Éléments secondaires</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"preview-card mt-3\">
            <div class=\"preview-title\">
                <i class=\"fas fa-eye me-1\"></i> Aperçu
            </div>
            <div class=\"d-flex gap-3 flex-wrap\">
                <button class=\"btn\" style=\"background: ";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "primaryColor", [], "any", false, true, false, 424), "vars", [], "any", false, true, false, 424), "value", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "primaryColor", [], "any", false, false, false, 424), "vars", [], "any", false, false, false, 424), "value", [], "any", false, false, false, 424), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield "; color: white; border-radius: 12px;\">
                    Bouton principal
                </button>
                <button class=\"btn\" style=\"background: ";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "secondaryColor", [], "any", false, true, false, 427), "vars", [], "any", false, true, false, 427), "value", [], "any", true, true, false, 427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), "secondaryColor", [], "any", false, false, false, 427), "vars", [], "any", false, false, false, 427), "value", [], "any", false, false, false, 427), "#8b5cf6")) : ("#8b5cf6")), "html", null, true);
        yield "; color: white; border-radius: 12px;\">
                    Bouton secondaire
                </button>
                <div class=\"alert\" style=\"background: ";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "primaryColor", [], "any", false, true, false, 430), "vars", [], "any", false, true, false, 430), "value", [], "any", true, true, false, 430)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "primaryColor", [], "any", false, false, false, 430), "vars", [], "any", false, false, false, 430), "value", [], "any", false, false, false, 430), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield "20; border-left: 4px solid ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "primaryColor", [], "any", false, true, false, 430), "vars", [], "any", false, true, false, 430), "value", [], "any", true, true, false, 430)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "primaryColor", [], "any", false, false, false, 430), "vars", [], "any", false, false, false, 430), "value", [], "any", false, false, false, 430), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield ";\">
                    Message avec la couleur principale
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 3: Contact -->
    <div id=\"section-contact\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-address-card\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Coordonnées</h3>
                <p>Informations de contact et localisation</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 452
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "email", [], "any", false, false, false, 452), 'label', ["label" => "Email"]);
        yield "
                    ";
        // line 453
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "email", [], "any", false, false, false, 453), 'widget', ["attr" => ["class" => "form-control", "type" => "email"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 458, $this->source); })()), "phone", [], "any", false, false, false, 458), 'label', ["label" => "Téléphone"]);
        yield "
                    ";
        // line 459
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "phone", [], "any", false, false, false, 459), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-group\">
                    ";
        // line 464
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "address", [], "any", false, false, false, 464), 'label', ["label" => "Adresse"]);
        yield "
                    ";
        // line 465
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "address", [], "any", false, false, false, 465), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 470
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 470, $this->source); })()), "city", [], "any", false, false, false, 470), 'label', ["label" => "Ville"]);
        yield "
                    ";
        // line 471
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 471, $this->source); })()), "city", [], "any", false, false, false, 471), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 476
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 476, $this->source); })()), "country", [], "any", false, false, false, 476), 'label', ["label" => "Pays"]);
        yield "
                    ";
        // line 477
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 477, $this->source); })()), "country", [], "any", false, false, false, 477), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 482
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "website", [], "any", false, false, false, 482), 'label', ["label" => "Site web"]);
        yield "
                    ";
        // line 483
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 483, $this->source); })()), "website", [], "any", false, false, false, 483), 'widget', ["attr" => ["class" => "form-control", "type" => "url"]]);
        yield "
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 4: Ticket de caisse -->
    <div id=\"section-receipt\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-receipt\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Ticket de caisse</h3>
                <p>Personnalisez l'apparence de vos tickets</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 504
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 504, $this->source); })()), "receiptHeader", [], "any", false, false, false, 504), 'label', ["label" => "En-tête du ticket"]);
        yield "
                    ";
        // line 505
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 505, $this->source); })()), "receiptHeader", [], "any", false, false, false, 505), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Merci de votre visite !
Bonne journée"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 510
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 510, $this->source); })()), "receiptFooter", [], "any", false, false, false, 510), 'label', ["label" => "Pied de page"]);
        yield "
                    ";
        // line 511
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 511, $this->source); })()), "receiptFooter", [], "any", false, false, false, 511), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Suivez-nous sur Instagram
@votrepage"]]);
        yield "
                </div>
            </div>
        </div>
        
        <!-- Aperçu du ticket -->
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"preview-title mt-2\">
                    <i class=\"fas fa-eye me-1\"></i> Aperçu du ticket
                </div>
                <div class=\"ticket-preview\">
                    <div class=\"ticket-header\">
                        <strong>";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 524, $this->source); })()), "companyName", [], "any", false, false, false, 524), "html", null, true);
        yield "</strong>
                        ";
        // line 525
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 525, $this->source); })()), "slogan", [], "any", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 526
            yield "                            <br><small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 526, $this->source); })()), "slogan", [], "any", false, false, false, 526), "html", null, true);
            yield "</small>
                        ";
        }
        // line 528
        yield "                        <br><small>";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 528, $this->source); })()), "address", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 528, $this->source); })()), "address", [], "any", false, false, false, 528) . " - "), "html", null, true)) : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 528, $this->source); })()), "city", [], "any", false, false, false, 528), "html", null, true);
        yield "</small>
                        <br><small>Tél: ";
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 529, $this->source); })()), "phone", [], "any", false, false, false, 529), "html", null, true);
        yield "</small>
                    </div>
                    <div style=\"font-size: 0.7rem; padding: 0.5rem 0;\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Article 1</span>
                            <span>1 x 500 FCFA</span>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <span>Article 2</span>
                            <span>2 x 1000 FCFA</span>
                        </div>
                        <hr class=\"my-1\">
                        <div class=\"d-flex justify-content-between fw-bold\">
                            <span>TOTAL</span>
                            <span>2500 FCFA</span>
                        </div>
                    </div>
                    <div class=\"ticket-footer\">
                        ";
        // line 547
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "receiptHeader", [], "any", false, false, false, 547), "vars", [], "any", false, false, false, 547), "value", [], "any", false, false, false, 547)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "receiptHeader", [], "any", false, false, false, 547), "vars", [], "any", false, false, false, 547), "value", [], "any", false, false, false, 547), "html", null, true)) : ("Merci de votre visite !"));
        yield "
                        <br>
                        ";
        // line 549
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 549, $this->source); })()), "receiptFooter", [], "any", false, false, false, 549), "vars", [], "any", false, false, false, 549), "value", [], "any", false, false, false, 549)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 549, $this->source); })()), "receiptFooter", [], "any", false, false, false, 549), "vars", [], "any", false, false, false, 549), "value", [], "any", false, false, false, 549), "html", null, true)) : ("À bientôt !"));
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-info mt-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Ces messages apparaîtront sur tous les tickets de caisse imprimés.
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 5: Taxes -->
    <div id=\"section-taxes\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-percent\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Taxes et devises</h3>
                <p>Configuration fiscale de votre entreprise</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 577
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "defaultTaxRate", [], "any", false, false, false, 577), 'label', ["label" => "Taux de TVA par défaut (%)"]);
        yield "
                    ";
        // line 578
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), "defaultTaxRate", [], "any", false, false, false, 578), 'widget', ["attr" => ["class" => "form-control", "step" => "0.1"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"alert alert-secondary\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    <strong>Devise actuelle :</strong> 
                    ";
        // line 585
        $context["country"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 585, $this->source); })()), "country", [], "any", false, false, false, 585);
        // line 586
        yield "                    ";
        $context["currency"] = (((CoreExtension::getAttribute($this->env, $this->source, ["CM" => "XAF", "CI" => "XOF", "SN" => "XOF", "FR" => "EUR", "US" => "USD", "BJ" => "FCFA", "TG" => "XOF", "ML" => "XOF", "BF" => "XOF", "NE" => "XOF", "GA" => "XAF", "CG" => "XAF", "CD" => "CDF", "MA" => "MAD", "TN" => "TND", "DZ" => "DZD"],         // line 591
(isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 591, $this->source); })()), [], "array", true, true, false, 587) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["CM" => "XAF", "CI" => "XOF", "SN" => "XOF", "FR" => "EUR", "US" => "USD", "BJ" => "FCFA", "TG" => "XOF", "ML" => "XOF", "BF" => "XOF", "NE" => "XOF", "GA" => "XAF", "CG" => "XAF", "CD" => "CDF", "MA" => "MAD", "TN" => "TND", "DZ" => "DZD"], (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 591, $this->source); })()), [], "array", false, false, false, 587)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["CM" => "XAF", "CI" => "XOF", "SN" => "XOF", "FR" => "EUR", "US" => "USD", "BJ" => "FCFA", "TG" => "XOF", "ML" => "XOF", "BF" => "XOF", "NE" => "XOF", "GA" => "XAF", "CG" => "XAF", "CD" => "CDF", "MA" => "MAD", "TN" => "TND", "DZ" => "DZD"], (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 591, $this->source); })()), [], "array", false, false, false, 587)) : ("FCFA"));
        // line 592
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 592, $this->source); })()), "html", null, true);
        yield "
                    <span class=\"text-muted ms-2\">(Basée sur le pays sélectionné)</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Boutons d'action sticky -->
    <div class=\"action-buttons\">
        <a href=\"";
        // line 601
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-4\">
            <i class=\"fas fa-arrow-left me-2\"></i> Annuler
        </a>
        <div>
            <button type=\"button\" class=\"btn btn-secondary btn-lg px-4 me-2\" onclick=\"resetForm()\">
                <i class=\"fas fa-undo me-2\"></i> Réinitialiser
            </button>
            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\" style=\"background: var(--primary-color);\">
                <i class=\"fas fa-save me-2\"></i> Enregistrer les modifications
            </button>
        </div>
    </div>
    
    ";
        // line 614
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), 'form_end');
        yield "
</div>

";
        // line 617
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 618
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Gestion des onglets
    const tabs = document.querySelectorAll('.settings-tab');
    const sections = {
        general: document.getElementById('section-general'),
        branding: document.getElementById('section-branding'),
        contact: document.getElementById('section-contact'),
        receipt: document.getElementById('section-receipt'),
        taxes: document.getElementById('section-taxes')
    };
    
    function showSection(sectionId) {
        Object.values(sections).forEach(section => {
            if (section) section.style.display = 'none';
        });
        if (sections[sectionId]) sections[sectionId].style.display = 'block';
        
        // Mettre à jour les onglets actifs
        tabs.forEach(tab => {
            if (tab.dataset.section === sectionId) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });
    }
    
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            showSection(tab.dataset.section);
        });
    });
    
    // Aperçu des couleurs en temps réel
    const primaryColorInput = document.querySelector('#";
        // line 653
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 653, $this->source); })()), "primaryColor", [], "any", false, false, false, 653), "vars", [], "any", false, false, false, 653), "id", [], "any", false, false, false, 653), "html", null, true);
        yield "');
    const secondaryColorInput = document.querySelector('#";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 654, $this->source); })()), "secondaryColor", [], "any", false, false, false, 654), "vars", [], "any", false, false, false, 654), "id", [], "any", false, false, false, 654), "html", null, true);
        yield "');
    
    function updateColorPreviews() {
        const primaryColor = primaryColorInput?.value || '#0463f1';
        const secondaryColor = secondaryColorInput?.value || '#8b5cf6';
        
        document.documentElement.style.setProperty('--primary-color', primaryColor);
        
        const primaryPreview = document.querySelector('#section-branding .color-preview:first-child');
        const secondaryPreview = document.querySelector('#section-branding .color-preview:last-child');
        if (primaryPreview) primaryPreview.style.background = primaryColor;
        if (secondaryPreview) secondaryPreview.style.background = secondaryColor;
        
        const primaryBtn = document.querySelector('#section-branding .btn:first-child');
        const secondaryBtn = document.querySelector('#section-branding .btn:last-child');
        if (primaryBtn) primaryBtn.style.background = primaryColor;
        if (secondaryBtn) secondaryBtn.style.background = secondaryColor;
        
        const alertPreview = document.querySelector('#section-branding .alert');
        if (alertPreview) {
            alertPreview.style.background = primaryColor + '20';
            alertPreview.style.borderLeftColor = primaryColor;
        }
    }
    
    if (primaryColorInput) primaryColorInput.addEventListener('input', updateColorPreviews);
    if (secondaryColorInput) secondaryColorInput.addEventListener('input', updateColorPreviews);
    
    // Aperçu du ticket en temps réel
    const receiptHeaderInput = document.querySelector('#";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 683, $this->source); })()), "receiptHeader", [], "any", false, false, false, 683), "vars", [], "any", false, false, false, 683), "id", [], "any", false, false, false, 683), "html", null, true);
        yield "');
    const receiptFooterInput = document.querySelector('#";
        // line 684
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 684, $this->source); })()), "receiptFooter", [], "any", false, false, false, 684), "vars", [], "any", false, false, false, 684), "id", [], "any", false, false, false, 684), "html", null, true);
        yield "');
    
    function updateTicketPreview() {
        const ticketHeader = document.querySelector('.ticket-preview .ticket-footer');
        if (ticketHeader) {
            const headerText = receiptHeaderInput?.value || 'Merci de votre visite !';
            const footerText = receiptFooterInput?.value || 'À bientôt !';
            ticketHeader.innerHTML = headerText.replace(/\\n/g, '<br>') + '<br>' + footerText.replace(/\\n/g, '<br>');
        }
    }
    
    if (receiptHeaderInput) receiptHeaderInput.addEventListener('input', updateTicketPreview);
    if (receiptFooterInput) receiptFooterInput.addEventListener('input', updateTicketPreview);
    
    // Réinitialisation du formulaire
    function resetForm() {
        if (confirm('Êtes-vous sûr de vouloir réinitialiser tous les paramètres ?')) {
            document.getElementById('companySettingsForm').reset();
            updateColorPreviews();
            updateTicketPreview();
            showNotification('Formulaire réinitialisé', 'info');
        }
    }
    
    // Notification
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'success' ? 'success' : (type === 'error' ? 'danger' : 'info')} text-white rounded shadow`;
        notification.style.zIndex = '9999';
        notification.innerHTML = `<i class=\"fas fa-\${type === 'success' ? 'check-circle' : (type === 'error' ? 'exclamation-circle' : 'info-circle')} me-2\"></i>\${message}`;
        document.body.appendChild(notification);
        setTimeout(() => notification.remove(), 3000);
    }
    
    // Afficher notification si flash message
    ";
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 719, $this->source); })()), "flashes", ["success"], "method", false, false, false, 719));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 720
            yield "        showNotification('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "', 'success');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 722
        yield "    
    // Animation d'entrée
    document.querySelectorAll('.settings-section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        setTimeout(() => {
            section.style.transition = 'all 0.5s ease';
            section.style.opacity = '1';
            section.style.transform = 'translateY(0)';
        }, 100);
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
        return "company/settings/index.html.twig";
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
        return array (  1044 => 722,  1035 => 720,  1031 => 719,  993 => 684,  989 => 683,  957 => 654,  953 => 653,  915 => 618,  892 => 617,  886 => 614,  870 => 601,  857 => 592,  855 => 591,  853 => 586,  851 => 585,  841 => 578,  837 => 577,  806 => 549,  801 => 547,  780 => 529,  774 => 528,  768 => 526,  766 => 525,  762 => 524,  745 => 511,  741 => 510,  732 => 505,  728 => 504,  704 => 483,  700 => 482,  692 => 477,  688 => 476,  680 => 471,  676 => 470,  668 => 465,  664 => 464,  656 => 459,  652 => 458,  644 => 453,  640 => 452,  613 => 430,  607 => 427,  601 => 424,  586 => 412,  582 => 411,  577 => 409,  567 => 402,  563 => 401,  558 => 399,  534 => 378,  530 => 377,  527 => 376,  521 => 372,  515 => 370,  513 => 369,  504 => 363,  500 => 362,  491 => 356,  487 => 355,  478 => 349,  474 => 348,  454 => 331,  414 => 293,  401 => 292,  109 => 10,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/company/settings/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Paramètres entreprise - {{ company.companyName }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-color: {{ company.primaryColor|default('#0463f1') }};
    }
    
    .settings-container {
        max-width: 1400px;
        margin: 0 auto;
    }
    
    /* Hero Header */
    .settings-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 24px;
        padding: 2rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }
    
    .settings-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: pulse 4s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.05); opacity: 0.8; }
    }
    
    .settings-hero h1 {
        color: white;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        position: relative;
    }
    
    .settings-hero p {
        color: rgba(255,255,255,0.9);
        margin-bottom: 0;
        position: relative;
    }
    
    /* Navigation par onglets */
    .settings-tabs {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        border-bottom: 2px solid #e5e7eb;
        padding-bottom: 0;
        background: white;
        border-radius: 16px;
        padding: 0.5rem;
    }
    
    .settings-tab {
        padding: 0.75rem 1.5rem;
        border: none;
        background: transparent;
        font-weight: 600;
        color: #64748b;
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .settings-tab i {
        margin-right: 0.5rem;
    }
    
    .settings-tab:hover {
        background: #f1f5f9;
        color: var(--primary-color);
    }
    
    .settings-tab.active {
        background: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px rgba(var(--primary-color-rgb, 4, 99, 241), 0.3);
    }
    
    /* Sections */
    .settings-section {
        background: white;
        border-radius: 24px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
    }
    
    .settings-section:hover {
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }
    
    .section-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f1f5f9;
    }
    
    .section-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-color-dark, #0350c4));
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
    }
    
    .section-title {
        flex: 1;
    }
    
    .section-title h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }
    
    .section-title p {
        color: #64748b;
        font-size: 0.85rem;
        margin-bottom: 0;
    }
    
    /* Preview cards */
    .preview-card {
        background: #f8fafc;
        border-radius: 16px;
        padding: 1rem;
        margin-top: 1rem;
        border: 1px solid #e5e7eb;
    }
    
    .preview-title {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.5px;
        margin-bottom: 0.75rem;
    }
    
    /* Logo preview */
    .logo-preview {
        display: flex;
        align-items: center;
        gap: 1rem;
        background: #f8fafc;
        border-radius: 16px;
        padding: 1rem;
        margin-top: 1rem;
    }
    
    .logo-preview-img {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        object-fit: cover;
        background: white;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
    }
    
    .logo-preview-img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    /* Color picker custom */
    .color-preview {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        border: 2px solid white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .color-preview:hover {
        transform: scale(1.1);
    }
    
    /* Ticket preview */
    .ticket-preview {
        background: white;
        border-radius: 16px;
        padding: 1rem;
        max-width: 300px;
        margin-top: 1rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border: 1px solid #e5e7eb;
    }
    
    .ticket-header {
        text-align: center;
        border-bottom: 1px dashed #e5e7eb;
        padding-bottom: 0.5rem;
        margin-bottom: 0.5rem;
    }
    
    .ticket-footer {
        text-align: center;
        border-top: 1px dashed #e5e7eb;
        padding-top: 0.5rem;
        margin-top: 0.5rem;
        font-size: 0.7rem;
        color: #64748b;
    }
    
    /* Form styling */
    .form-group {
        margin-bottom: 1.25rem;
    }
    
    .form-label {
        font-weight: 600;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
        color: #1e293b;
    }
    
    .form-control, .form-select {
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        padding: 0.625rem 1rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.1);
    }
    
    /* Action buttons */
    .action-buttons {
        position: sticky;
        bottom: 2rem;
        background: white;
        padding: 1rem;
        border-radius: 60px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
        margin-top: 2rem;
    }
    
    /* Badge */
    .info-badge {
        background: #e0f2fe;
        color: #0284c7;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .settings-hero { padding: 1.5rem; }
        .settings-hero h1 { font-size: 1.5rem; }
        .settings-tab { padding: 0.5rem 1rem; font-size: 0.875rem; }
        .action-buttons { margin: 1rem; }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid settings-container py-4\">
    
    <!-- Hero Section -->
    <div class=\"settings-hero\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <div>
                <h1>
                    <i class=\"fas fa-sliders-h me-2\"></i>
                    Paramètres entreprise
                </h1>
                <p>Personnalisez votre espace de travail et les documents</p>
            </div>
            <div class=\"info-badge\">
                <i class=\"fas fa-shield-alt me-1\"></i>
                Seul le propriétaire peut modifier ces paramètres
            </div>
        </div>
    </div>
    
    <!-- Onglets -->
    <div class=\"settings-tabs\" id=\"settingsTabs\">
        <button class=\"settings-tab active\" data-section=\"general\">
            <i class=\"fas fa-building\"></i> Général
        </button>
        <button class=\"settings-tab\" data-section=\"branding\">
            <i class=\"fas fa-palette\"></i> Apparence
        </button>
        <button class=\"settings-tab\" data-section=\"contact\">
            <i class=\"fas fa-address-card\"></i> Contact
        </button>
        <button class=\"settings-tab\" data-section=\"receipt\">
            <i class=\"fas fa-receipt\"></i> Ticket
        </button>
        <button class=\"settings-tab\" data-section=\"taxes\">
            <i class=\"fas fa-percent\"></i> Taxes
        </button>
    </div>
    
    {{ form_start(form, {'attr': {'id': 'companySettingsForm', 'class': 'settings-form'}}) }}
    
    <!-- Section 1: Général -->
    <div id=\"section-general\" class=\"settings-section\" style=\"display: block;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-building\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Informations générales</h3>
                <p>Identité et description de votre entreprise</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.companyName, 'Nom de l\\'entreprise') }}
                    {{ form_widget(form.companyName, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Restaurant Le Gourmet'}}) }}
                    <small class=\"text-muted\">Apparaît dans le header, les factures et les tickets</small>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.slogan, 'Slogan') }}
                    {{ form_widget(form.slogan, {'attr': {'class': 'form-control', 'placeholder': 'Ex: La qualité fait la différence'}}) }}
                    <small class=\"text-muted\">Optionnel - Apparaît sous le nom</small>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-group\">
                    {{ form_label(form.description, 'Description') }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 3, 'placeholder': 'Présentez votre activité...'}}) }}
                </div>
            </div>
        </div>
        
        <div class=\"logo-preview\">
            {% if company.logo %}
                <img src=\"{{ asset('uploads/logos/' ~ company.logo) }}\" class=\"logo-preview-img\" alt=\"Logo\">
            {% else %}
                <div class=\"logo-preview-img d-flex align-items-center justify-content-center bg-light\">
                    <i class=\"fas fa-store fa-2x text-muted\"></i>
                </div>
            {% endif %}
            <div class=\"flex-grow-1\">
                {{ form_label(form.logoFile, 'Logo de l\\'entreprise') }}
                {{ form_widget(form.logoFile, {'attr': {'class': 'form-control', 'accept': 'image/*'}}) }}
                <small class=\"text-muted\">Format recommandé: PNG ou JPG, 200x200px</small>
            </div>
        </div>
    </div>
    
    <!-- Section 2: Apparence -->
    <div id=\"section-branding\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-palette\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Apparence & Personnalisation</h3>
                <p>Couleurs et thème de votre interface</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.primaryColor, 'Couleur principale') }}
                    <div class=\"d-flex align-items-center gap-3\">
                        {{ form_widget(form.primaryColor, {'attr': {'class': 'form-control', 'type': 'color', 'style': 'width: 80px; height: 50px;'}}) }}
                        <div class=\"color-preview\" style=\"background: {{ form.primaryColor.vars.value|default('#0463f1') }}\"></div>
                        <span class=\"text-muted small\">Boutons, liens, accents</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.secondaryColor, 'Couleur secondaire') }}
                    <div class=\"d-flex align-items-center gap-3\">
                        {{ form_widget(form.secondaryColor, {'attr': {'class': 'form-control', 'type': 'color', 'style': 'width: 80px; height: 50px;'}}) }}
                        <div class=\"color-preview\" style=\"background: {{ form.secondaryColor.vars.value|default('#8b5cf6') }}\"></div>
                        <span class=\"text-muted small\">Éléments secondaires</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"preview-card mt-3\">
            <div class=\"preview-title\">
                <i class=\"fas fa-eye me-1\"></i> Aperçu
            </div>
            <div class=\"d-flex gap-3 flex-wrap\">
                <button class=\"btn\" style=\"background: {{ form.primaryColor.vars.value|default('#0463f1') }}; color: white; border-radius: 12px;\">
                    Bouton principal
                </button>
                <button class=\"btn\" style=\"background: {{ form.secondaryColor.vars.value|default('#8b5cf6') }}; color: white; border-radius: 12px;\">
                    Bouton secondaire
                </button>
                <div class=\"alert\" style=\"background: {{ form.primaryColor.vars.value|default('#0463f1') }}20; border-left: 4px solid {{ form.primaryColor.vars.value|default('#0463f1') }};\">
                    Message avec la couleur principale
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 3: Contact -->
    <div id=\"section-contact\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-address-card\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Coordonnées</h3>
                <p>Informations de contact et localisation</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.email, 'Email') }}
                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'type': 'email'}}) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.phone, 'Téléphone') }}
                    {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-group\">
                    {{ form_label(form.address, 'Adresse') }}
                    {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    {{ form_label(form.city, 'Ville') }}
                    {{ form_widget(form.city, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    {{ form_label(form.country, 'Pays') }}
                    {{ form_widget(form.country, {'attr': {'class': 'form-select'}}) }}
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    {{ form_label(form.website, 'Site web') }}
                    {{ form_widget(form.website, {'attr': {'class': 'form-control', 'type': 'url'}}) }}
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 4: Ticket de caisse -->
    <div id=\"section-receipt\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-receipt\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Ticket de caisse</h3>
                <p>Personnalisez l'apparence de vos tickets</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.receiptHeader, 'En-tête du ticket') }}
                    {{ form_widget(form.receiptHeader, {'attr': {'class': 'form-control', 'rows': 3, 'placeholder': 'Merci de votre visite !\\nBonne journée'}}) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.receiptFooter, 'Pied de page') }}
                    {{ form_widget(form.receiptFooter, {'attr': {'class': 'form-control', 'rows': 3, 'placeholder': 'Suivez-nous sur Instagram\\n@votrepage'}}) }}
                </div>
            </div>
        </div>
        
        <!-- Aperçu du ticket -->
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"preview-title mt-2\">
                    <i class=\"fas fa-eye me-1\"></i> Aperçu du ticket
                </div>
                <div class=\"ticket-preview\">
                    <div class=\"ticket-header\">
                        <strong>{{ company.companyName }}</strong>
                        {% if company.slogan %}
                            <br><small>{{ company.slogan }}</small>
                        {% endif %}
                        <br><small>{{ company.address ? company.address ~ ' - ' : '' }}{{ company.city }}</small>
                        <br><small>Tél: {{ company.phone }}</small>
                    </div>
                    <div style=\"font-size: 0.7rem; padding: 0.5rem 0;\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Article 1</span>
                            <span>1 x 500 FCFA</span>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <span>Article 2</span>
                            <span>2 x 1000 FCFA</span>
                        </div>
                        <hr class=\"my-1\">
                        <div class=\"d-flex justify-content-between fw-bold\">
                            <span>TOTAL</span>
                            <span>2500 FCFA</span>
                        </div>
                    </div>
                    <div class=\"ticket-footer\">
                        {{ form.receiptHeader.vars.value ?: 'Merci de votre visite !' }}
                        <br>
                        {{ form.receiptFooter.vars.value ?: 'À bientôt !' }}
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-info mt-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Ces messages apparaîtront sur tous les tickets de caisse imprimés.
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 5: Taxes -->
    <div id=\"section-taxes\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-percent\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Taxes et devises</h3>
                <p>Configuration fiscale de votre entreprise</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    {{ form_label(form.defaultTaxRate, 'Taux de TVA par défaut (%)') }}
                    {{ form_widget(form.defaultTaxRate, {'attr': {'class': 'form-control', 'step': '0.1'}}) }}
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"alert alert-secondary\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    <strong>Devise actuelle :</strong> 
                    {% set country = company.country %}
                    {% set currency = {
                        'CM': 'XAF', 'CI': 'XOF', 'SN': 'XOF', 'FR': 'EUR', 
                        'US': 'USD', 'BJ': 'FCFA', 'TG': 'XOF', 'ML': 'XOF',
                        'BF': 'XOF', 'NE': 'XOF', 'GA': 'XAF', 'CG': 'XAF',
                        'CD': 'CDF', 'MA': 'MAD', 'TN': 'TND', 'DZ': 'DZD'
                    }[country] ?? 'FCFA' %}
                    {{ currency }}
                    <span class=\"text-muted ms-2\">(Basée sur le pays sélectionné)</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Boutons d'action sticky -->
    <div class=\"action-buttons\">
        <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-outline-secondary btn-lg px-4\">
            <i class=\"fas fa-arrow-left me-2\"></i> Annuler
        </a>
        <div>
            <button type=\"button\" class=\"btn btn-secondary btn-lg px-4 me-2\" onclick=\"resetForm()\">
                <i class=\"fas fa-undo me-2\"></i> Réinitialiser
            </button>
            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\" style=\"background: var(--primary-color);\">
                <i class=\"fas fa-save me-2\"></i> Enregistrer les modifications
            </button>
        </div>
    </div>
    
    {{ form_end(form) }}
</div>

{% block javascripts %}
{{ parent() }}
<script>
    // Gestion des onglets
    const tabs = document.querySelectorAll('.settings-tab');
    const sections = {
        general: document.getElementById('section-general'),
        branding: document.getElementById('section-branding'),
        contact: document.getElementById('section-contact'),
        receipt: document.getElementById('section-receipt'),
        taxes: document.getElementById('section-taxes')
    };
    
    function showSection(sectionId) {
        Object.values(sections).forEach(section => {
            if (section) section.style.display = 'none';
        });
        if (sections[sectionId]) sections[sectionId].style.display = 'block';
        
        // Mettre à jour les onglets actifs
        tabs.forEach(tab => {
            if (tab.dataset.section === sectionId) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });
    }
    
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            showSection(tab.dataset.section);
        });
    });
    
    // Aperçu des couleurs en temps réel
    const primaryColorInput = document.querySelector('#{{ form.primaryColor.vars.id }}');
    const secondaryColorInput = document.querySelector('#{{ form.secondaryColor.vars.id }}');
    
    function updateColorPreviews() {
        const primaryColor = primaryColorInput?.value || '#0463f1';
        const secondaryColor = secondaryColorInput?.value || '#8b5cf6';
        
        document.documentElement.style.setProperty('--primary-color', primaryColor);
        
        const primaryPreview = document.querySelector('#section-branding .color-preview:first-child');
        const secondaryPreview = document.querySelector('#section-branding .color-preview:last-child');
        if (primaryPreview) primaryPreview.style.background = primaryColor;
        if (secondaryPreview) secondaryPreview.style.background = secondaryColor;
        
        const primaryBtn = document.querySelector('#section-branding .btn:first-child');
        const secondaryBtn = document.querySelector('#section-branding .btn:last-child');
        if (primaryBtn) primaryBtn.style.background = primaryColor;
        if (secondaryBtn) secondaryBtn.style.background = secondaryColor;
        
        const alertPreview = document.querySelector('#section-branding .alert');
        if (alertPreview) {
            alertPreview.style.background = primaryColor + '20';
            alertPreview.style.borderLeftColor = primaryColor;
        }
    }
    
    if (primaryColorInput) primaryColorInput.addEventListener('input', updateColorPreviews);
    if (secondaryColorInput) secondaryColorInput.addEventListener('input', updateColorPreviews);
    
    // Aperçu du ticket en temps réel
    const receiptHeaderInput = document.querySelector('#{{ form.receiptHeader.vars.id }}');
    const receiptFooterInput = document.querySelector('#{{ form.receiptFooter.vars.id }}');
    
    function updateTicketPreview() {
        const ticketHeader = document.querySelector('.ticket-preview .ticket-footer');
        if (ticketHeader) {
            const headerText = receiptHeaderInput?.value || 'Merci de votre visite !';
            const footerText = receiptFooterInput?.value || 'À bientôt !';
            ticketHeader.innerHTML = headerText.replace(/\\n/g, '<br>') + '<br>' + footerText.replace(/\\n/g, '<br>');
        }
    }
    
    if (receiptHeaderInput) receiptHeaderInput.addEventListener('input', updateTicketPreview);
    if (receiptFooterInput) receiptFooterInput.addEventListener('input', updateTicketPreview);
    
    // Réinitialisation du formulaire
    function resetForm() {
        if (confirm('Êtes-vous sûr de vouloir réinitialiser tous les paramètres ?')) {
            document.getElementById('companySettingsForm').reset();
            updateColorPreviews();
            updateTicketPreview();
            showNotification('Formulaire réinitialisé', 'info');
        }
    }
    
    // Notification
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'success' ? 'success' : (type === 'error' ? 'danger' : 'info')} text-white rounded shadow`;
        notification.style.zIndex = '9999';
        notification.innerHTML = `<i class=\"fas fa-\${type === 'success' ? 'check-circle' : (type === 'error' ? 'exclamation-circle' : 'info-circle')} me-2\"></i>\${message}`;
        document.body.appendChild(notification);
        setTimeout(() => notification.remove(), 3000);
    }
    
    // Afficher notification si flash message
    {% for flash in app.flashes('success') %}
        showNotification('{{ flash }}', 'success');
    {% endfor %}
    
    // Animation d'entrée
    document.querySelectorAll('.settings-section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        setTimeout(() => {
            section.style.transition = 'all 0.5s ease';
            section.style.opacity = '1';
            section.style.transform = 'translateY(0)';
        }, 100);
    });
</script>
{% endblock %}
{% endblock %}", "company/settings/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\company\\settings\\index.html.twig");
    }
}
