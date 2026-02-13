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

/* registration/register.html.twig */
class __TwigTemplate_7f7b8434ebf5fec7d9764b36c1bb028d extends Template
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
        // line 1
        return "base-auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->load("base-auth.html.twig", 1);
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

        yield "Inscription entreprise - HMA Market";
        
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
.progress-container {
    margin-bottom: 3rem;
}

.progress-steps {
    display: flex;
    justify-content: space-between;
    position: relative;
    margin-bottom: 2rem;
}

.progress-steps::before {
    content: '';
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
    height: 3px;
    background: #e5e7eb;
    z-index: 1;
}

.step {
    position: relative;
    z-index: 2;
    text-align: center;
    flex: 1;
}

.step-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #e5e7eb;
    color: #6b7280;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-weight: 600;
    border: 3px solid white;
    transition: all 0.3s ease;
}

.step.active .step-circle {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.step.completed .step-circle {
    background: linear-gradient(135deg, var(--success-color) 0%, #059669 100%);
    color: white;
}

.step-label {
    font-size: 14px;
    font-weight: 500;
    color: #6b7280;
}

.step.active .step-label {
    color: var(--primary-color);
    font-weight: 600;
}

.step.completed .step-label {
    color: var(--success-color);
}

.benefit-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.benefit-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(4, 99, 241, 0.05) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    flex-shrink: 0;
    color: var(--primary-color);
    font-size: 20px;
}

.benefit-content h5 {
    color: var(--dark-color);
    margin-bottom: 5px;
}

.pricing-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    border: 2px solid #e5e7eb;
    transition: all 0.3s ease;
}

.pricing-card:hover {
    border-color: var(--primary-color);
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.pricing-card.popular {
    border-color: var(--primary-color);
    position: relative;
    overflow: hidden;
}

.pricing-card.popular::before {
    content: 'Populaire';
    position: absolute;
    top: 20px;
    right: -35px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 8px 40px;
    transform: rotate(45deg);
    font-size: 12px;
    font-weight: 600;
}

.price {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--dark-color);
    margin: 1rem 0;
}

.price-period {
    color: #6b7280;
    font-size: 14px;
}

.form-select {
    border-radius: 12px;
    padding: 14px 18px;
    border: 2px solid #e5e7eb;
    font-size: 15px;
}

.form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
}

/* Style pour le champ logo */
.logo-upload-container {
    border: 2px dashed #e5e7eb;
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    background: #f9fafb;
    transition: all 0.3s ease;
    cursor: pointer;
}

.logo-upload-container:hover {
    border-color: var(--primary-color);
    background: #f0f4ff;
}

.logo-upload-container.drag-over {
    border-color: var(--primary-color);
    background: #e8f0ff;
}

.logo-preview-container {
    margin-top: 1rem;
    display: none;
}

.logo-preview {
    width: 120px;
    height: 120px;
    border-radius: 8px;
    object-fit: contain;
    background: white;
    padding: 10px;
    border: 2px solid #e5e7eb;
}

.file-upload-label {
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 24px;
    background: white;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    margin-bottom: 1rem;
}

.file-upload-label:hover {
    background: var(--primary-color);
    color: white;
}

.file-info {
    font-size: 14px;
    color: #6b7280;
    margin-top: 0.5rem;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 226
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

        // line 227
        yield "<div class=\"row g-4\">
    <!-- Formulaire d'Inscription -->
    <div class=\"col-lg-7\">
        <div class=\"form-container\">
            <!-- Progress Steps -->
            <div class=\"progress-container\">
                <div class=\"progress-steps\">
                    <div class=\"step completed\">
                        <div class=\"step-circle\">1</div>
                        <div class=\"step-label\">Informations</div>
                    </div>
                    <div class=\"step active\">
                        <div class=\"step-circle\">2</div>
                        <div class=\"step-label\">Validation</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">3</div>
                        <div class=\"step-label\">Activation</div>
                    </div>
                </div>
                
                <div class=\"text-center\">
                    <h3 class=\"fw-bold mb-1\">Inscription entreprise</h3>
                    <p class=\"text-muted\">Étape 2 sur 3 - Informations de votre entreprise</p>
                </div>
            </div>
            
            ";
        // line 254
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 254, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 258, $this->source); })()), "companyName", [], "any", false, false, false, 258), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nom de l'entreprise *"]);
        // line 260
        yield "
                    ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 261, $this->source); })()), "companyName", [], "any", false, false, false, 261), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: Ma Société SARL"]]);
        // line 266
        yield "
                    <div class=\"form-text\">Le nom officiel de votre entreprise</div>
                    ";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 268, $this->source); })()), "companyName", [], "any", false, false, false, 268), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 272
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 272, $this->source); })()), "companyType", [], "any", false, false, false, 272), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Type d'entreprise *"]);
        // line 274
        yield "
                    ";
        // line 275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 275, $this->source); })()), "companyType", [], "any", false, false, false, 275), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        // line 279
        yield "
                    <div class=\"form-text\">Sélectionnez votre secteur d'activité</div>
                    ";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 281, $this->source); })()), "companyType", [], "any", false, false, false, 281), 'errors');
        yield "
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 287, $this->source); })()), "email", [], "any", false, false, false, 287), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Email professionnel *"]);
        // line 289
        yield "
                    ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 290, $this->source); })()), "email", [], "any", false, false, false, 290), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "contact@votre-entreprise.com"]]);
        // line 295
        yield "
                    <div class=\"form-text\">Nous enverrons vos identifiants à cette adresse</div>
                    ";
        // line 297
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 297, $this->source); })()), "email", [], "any", false, false, false, 297), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 301, $this->source); })()), "phone", [], "any", false, false, false, 301), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Téléphone *"]);
        // line 303
        yield "
                    ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 304, $this->source); })()), "phone", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "+229 XX XX XX XX"]]);
        // line 309
        yield "
                    <div class=\"form-text\">Pour vous contacter en cas de besoin</div>
                    ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 311, $this->source); })()), "phone", [], "any", false, false, false, 311), 'errors');
        yield "
                </div>
            </div>
            
            <div class=\"mb-4\">
                ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 316, $this->source); })()), "address", [], "any", false, false, false, 316), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Adresse"]);
        // line 318
        yield "
                ";
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 319, $this->source); })()), "address", [], "any", false, false, false, 319), 'widget', ["attr" => ["class" => "form-control form-control-lg", "rows" => 3, "placeholder" => "Adresse complète de votre entreprise"]]);
        // line 325
        yield "
                <div class=\"form-text\">Adresse physique de votre établissement</div>
                ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 327, $this->source); })()), "address", [], "any", false, false, false, 327), 'errors');
        yield "
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 332, $this->source); })()), "city", [], "any", false, false, false, 332), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Ville"]);
        // line 334
        yield "
                    ";
        // line 335
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 335, $this->source); })()), "city", [], "any", false, false, false, 335), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ville"]]);
        // line 340
        yield "
                    ";
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 341, $this->source); })()), "city", [], "any", false, false, false, 341), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 345, $this->source); })()), "country", [], "any", false, false, false, 345), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Pays"]);
        // line 347
        yield "
                    ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 348, $this->source); })()), "country", [], "any", false, false, false, 348), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        // line 352
        yield "
                    ";
        // line 353
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 353, $this->source); })()), "country", [], "any", false, false, false, 353), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Champ Logo de l'entreprise - AJOUTÉ ICI -->
            <div class=\"mb-4\">
                ";
        // line 359
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 359, $this->source); })()), "logoFile", [], "any", false, false, false, 359), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Logo de l'entreprise"]);
        // line 361
        yield "
                
                <div class=\"logo-upload-container\" id=\"logoUploadContainer\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-cloud-upload-alt fa-3x text-muted mb-3\"></i>
                        <h5 class=\"fw-semibold mb-2\">Ajoutez votre logo</h5>
                        <p class=\"text-muted mb-3\">Glissez-déposez ou cliquez pour sélectionner</p>
                    </div>
                    
                    <label for=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 370, $this->source); })()), "logoFile", [], "any", false, false, false, 370), "vars", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370), "html", null, true);
        yield "\" class=\"file-upload-label\">
                        <i class=\"fas fa-image me-2\"></i>Choisir un fichier
                    </label>
                    
                    ";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 374, $this->source); })()), "logoFile", [], "any", false, false, false, 374), 'widget', ["attr" => ["class" => "d-none", "accept" => "image/*"]]);
        // line 379
        yield "
                    
                    <div class=\"file-info\">
                        <small class=\"text-muted\">Formats acceptés : JPG, PNG, GIF, WebP, SVG</small>
                        <br>
                        <small class=\"text-muted\">Taille max : 2 Mo</small>
                    </div>
                    
                    <div id=\"logoPreview\" class=\"logo-preview-container\">
                        <img id=\"previewImage\" src=\"\" alt=\"Aperçu du logo\" class=\"logo-preview\">
                        <div class=\"mt-2\">
                            <button type=\"button\" id=\"removeLogo\" class=\"btn btn-sm btn-outline-danger\">
                                <i class=\"fas fa-trash me-1\"></i>Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                ";
        // line 396
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 396, $this->source); })()), "logoFile", [], "any", false, false, false, 396), 'errors');
        yield "
            </div>
            
            <div class=\"mb-4\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"terms\" name=\"terms\" required>
                    <label class=\"form-check-label\" for=\"terms\">
                        J'accepte les <a href=\"#\" class=\"text-decoration-none fw-semibold\">conditions d'utilisation</a> 
                        et la <a href=\"#\" class=\"text-decoration-none fw-semibold\">politique de confidentialité</a> *
                    </label>
                    <div class=\"invalid-feedback\">
                        Vous devez accepter les conditions pour continuer.
                    </div>
                </div>
            </div>
            
            <div class=\"d-grid gap-3\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg py-3 fw-semibold\">
                    <i class=\"fas fa-rocket me-2\"></i>Créer mon compte gratuitement
                </button>
                
                <div class=\"text-center\">
                    <p class=\"text-muted mb-0\">
                        Déjà inscrit ? 
                        <a href=\"";
        // line 420
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none fw-semibold\">
                            Se connecter
                        </a>
                    </p>
                </div>
            </div>
            
            ";
        // line 427
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 427, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
    
    <!-- Informations HMA Market -->
    <div class=\"col-lg-5\">
        <div class=\"info-container\">
            <div class=\"text-center mb-5\">
                <h3 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-gift text-primary me-2\"></i>Votre pack découverte
                </h3>
                <p class=\"text-muted\">14 jours pour tout tester, sans engagement</p>
            </div>
            
            <!-- Benefits List -->
            <div class=\"mb-5\">
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-calendar-check\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">14 jours d'essai gratuit</h5>
                        <p class=\"text-muted small mb-0\">
                            Testez toutes les fonctionnalités premium sans limite
                        </p>
                    </div>
                </div>
                
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-users\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">Jusqu'à 3 utilisateurs</h5>
                        <p class=\"text-muted small mb-0\">
                            Invitez vos collaborateurs gratuitement
                        </p>
                    </div>
                </div>
                
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-chart-line\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">Rapports illimités</h5>
                        <p class=\"text-muted small mb-0\">
                            Analysez vos performances en temps réel
                        </p>
                    </div>
                </div>
                
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-headset\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">Support prioritaire</h5>
                        <p class=\"text-muted small mb-0\">
                            Notre équipe vous accompagne personnellement
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Pricing Card -->
            <div class=\"pricing-card popular mb-4\">
                <h5 class=\"fw-bold mb-3\">Starter</h5>
                <p class=\"text-muted mb-3\">Parfait pour démarrer</p>
                <div class=\"price\">0 FCFA</div>
                <p class=\"price-period\">/mois après l'essai</p>
                
                <div class=\"text-start mt-4\">
                    <p class=\"mb-2\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        Gestion des stocks
                    </p>
                    <p class=\"mb-2\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        Point de vente
                    </p>
                    <p class=\"mb-2\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        Rapports basiques
                    </p>
                    <p class=\"mb-0\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        3 utilisateurs
                    </p>
                </div>
            </div>
            
            <!-- Security Note -->
            <div class=\"bg-white p-4 rounded-3\">
                <div class=\"d-flex align-items-start\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-shield-alt fa-2x text-success\"></i>
                    </div>
                    <div>
                        <h6 class=\"fw-semibold mb-2\">Sécurité garantie</h6>
                        <p class=\"small text-muted mb-0\">
                            Vos données sont chiffrées et sauvegardées quotidiennement. Conformité RGPD.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class=\"text-center mt-5\">
                <p class=\"text-muted small mb-2\">
                    <i class=\"fas fa-question-circle me-1\"></i>
                    Questions ? Contactez-nous :
                </p>
                <div class=\"d-flex justify-content-center gap-3\">
                    <a href=\"mailto:support@hmamarket.com\" class=\"text-decoration-none\">
                        <i class=\"fas fa-envelope me-1\"></i>Email
                    </a>
                    <a href=\"tel:+2290156139200\" class=\"text-decoration-none\">
                        <i class=\"fas fa-phone me-1\"></i>Téléphone
                    </a>
                    <a href=\"https://wa.me/2290156139200\" class=\"text-decoration-none\">
                        <i class=\"fab fa-whatsapp me-1\"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 556
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

        // line 557
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'upload du logo
    const logoInput = document.getElementById('";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 561, $this->source); })()), "logoFile", [], "any", false, false, false, 561), "vars", [], "any", false, false, false, 561), "id", [], "any", false, false, false, 561), "html", null, true);
        yield "');
    const logoPreviewContainer = document.getElementById('logoPreview');
    const previewImage = document.getElementById('previewImage');
    const removeLogoBtn = document.getElementById('removeLogo');
    const logoUploadContainer = document.getElementById('logoUploadContainer');
    
    if (logoInput) {
        // Afficher l'aperçu quand un fichier est sélectionné
        logoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) { // 2 MB
                    alert('Le fichier est trop volumineux. Taille max: 2 Mo');
                    this.value = '';
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    logoPreviewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
        
        // Drag and drop
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            logoUploadContainer.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            logoUploadContainer.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            logoUploadContainer.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            logoUploadContainer.classList.add('drag-over');
        }
        
        function unhighlight() {
            logoUploadContainer.classList.remove('drag-over');
        }
        
        // Gérer le drop de fichier
        logoUploadContainer.addEventListener('drop', function(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            logoInput.files = files;
            logoInput.dispatchEvent(new Event('change'));
        });
        
        // Supprimer le logo sélectionné
        removeLogoBtn.addEventListener('click', function() {
            logoInput.value = '';
            previewImage.src = '';
            logoPreviewContainer.style.display = 'none';
        });
    }
    
    // Validation du formulaire
    const form = document.querySelector('form.needs-validation');
    const termsCheckbox = document.getElementById('terms');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            if (!termsCheckbox.checked) {
                event.preventDefault();
                event.stopPropagation();
                termsCheckbox.classList.add('is-invalid');
            } else {
                termsCheckbox.classList.remove('is-invalid');
            }
            
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    }
    
    // Ajouter l'effet de focus sur les champs
    const formControls = form.querySelectorAll('.form-control, .form-select');
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        control.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
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
        return "registration/register.html.twig";
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
        return array (  751 => 561,  744 => 557,  721 => 556,  589 => 427,  579 => 420,  552 => 396,  533 => 379,  531 => 374,  524 => 370,  513 => 361,  511 => 359,  502 => 353,  499 => 352,  497 => 348,  494 => 347,  492 => 345,  485 => 341,  482 => 340,  480 => 335,  477 => 334,  475 => 332,  467 => 327,  463 => 325,  461 => 319,  458 => 318,  456 => 316,  448 => 311,  444 => 309,  442 => 304,  439 => 303,  437 => 301,  430 => 297,  426 => 295,  424 => 290,  421 => 289,  419 => 287,  410 => 281,  406 => 279,  404 => 275,  401 => 274,  399 => 272,  392 => 268,  388 => 266,  386 => 261,  383 => 260,  381 => 258,  374 => 254,  345 => 227,  332 => 226,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-auth.html.twig' %}

{% block title %}Inscription entreprise - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.progress-container {
    margin-bottom: 3rem;
}

.progress-steps {
    display: flex;
    justify-content: space-between;
    position: relative;
    margin-bottom: 2rem;
}

.progress-steps::before {
    content: '';
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
    height: 3px;
    background: #e5e7eb;
    z-index: 1;
}

.step {
    position: relative;
    z-index: 2;
    text-align: center;
    flex: 1;
}

.step-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #e5e7eb;
    color: #6b7280;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-weight: 600;
    border: 3px solid white;
    transition: all 0.3s ease;
}

.step.active .step-circle {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.step.completed .step-circle {
    background: linear-gradient(135deg, var(--success-color) 0%, #059669 100%);
    color: white;
}

.step-label {
    font-size: 14px;
    font-weight: 500;
    color: #6b7280;
}

.step.active .step-label {
    color: var(--primary-color);
    font-weight: 600;
}

.step.completed .step-label {
    color: var(--success-color);
}

.benefit-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.benefit-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(4, 99, 241, 0.05) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    flex-shrink: 0;
    color: var(--primary-color);
    font-size: 20px;
}

.benefit-content h5 {
    color: var(--dark-color);
    margin-bottom: 5px;
}

.pricing-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    border: 2px solid #e5e7eb;
    transition: all 0.3s ease;
}

.pricing-card:hover {
    border-color: var(--primary-color);
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.pricing-card.popular {
    border-color: var(--primary-color);
    position: relative;
    overflow: hidden;
}

.pricing-card.popular::before {
    content: 'Populaire';
    position: absolute;
    top: 20px;
    right: -35px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    padding: 8px 40px;
    transform: rotate(45deg);
    font-size: 12px;
    font-weight: 600;
}

.price {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--dark-color);
    margin: 1rem 0;
}

.price-period {
    color: #6b7280;
    font-size: 14px;
}

.form-select {
    border-radius: 12px;
    padding: 14px 18px;
    border: 2px solid #e5e7eb;
    font-size: 15px;
}

.form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
}

/* Style pour le champ logo */
.logo-upload-container {
    border: 2px dashed #e5e7eb;
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    background: #f9fafb;
    transition: all 0.3s ease;
    cursor: pointer;
}

.logo-upload-container:hover {
    border-color: var(--primary-color);
    background: #f0f4ff;
}

.logo-upload-container.drag-over {
    border-color: var(--primary-color);
    background: #e8f0ff;
}

.logo-preview-container {
    margin-top: 1rem;
    display: none;
}

.logo-preview {
    width: 120px;
    height: 120px;
    border-radius: 8px;
    object-fit: contain;
    background: white;
    padding: 10px;
    border: 2px solid #e5e7eb;
}

.file-upload-label {
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 24px;
    background: white;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    margin-bottom: 1rem;
}

.file-upload-label:hover {
    background: var(--primary-color);
    color: white;
}

.file-info {
    font-size: 14px;
    color: #6b7280;
    margin-top: 0.5rem;
}
</style>
{% endblock %}

{% block body %}
<div class=\"row g-4\">
    <!-- Formulaire d'Inscription -->
    <div class=\"col-lg-7\">
        <div class=\"form-container\">
            <!-- Progress Steps -->
            <div class=\"progress-container\">
                <div class=\"progress-steps\">
                    <div class=\"step completed\">
                        <div class=\"step-circle\">1</div>
                        <div class=\"step-label\">Informations</div>
                    </div>
                    <div class=\"step active\">
                        <div class=\"step-circle\">2</div>
                        <div class=\"step-label\">Validation</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">3</div>
                        <div class=\"step-label\">Activation</div>
                    </div>
                </div>
                
                <div class=\"text-center\">
                    <h3 class=\"fw-bold mb-1\">Inscription entreprise</h3>
                    <p class=\"text-muted\">Étape 2 sur 3 - Informations de votre entreprise</p>
                </div>
            </div>
            
            {{ form_start(registrationForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    {{ form_label(registrationForm.companyName, 'Nom de l\\'entreprise *', {
                        'label_attr': {'class': 'form-label fw-semibold'}
                    }) }}
                    {{ form_widget(registrationForm.companyName, {
                        'attr': {
                            'class': 'form-control form-control-lg',
                            'placeholder': 'Ex: Ma Société SARL'
                        }
                    }) }}
                    <div class=\"form-text\">Le nom officiel de votre entreprise</div>
                    {{ form_errors(registrationForm.companyName) }}
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    {{ form_label(registrationForm.companyType, 'Type d\\'entreprise *', {
                        'label_attr': {'class': 'form-label fw-semibold'}
                    }) }}
                    {{ form_widget(registrationForm.companyType, {
                        'attr': {
                            'class': 'form-select form-select-lg'
                        }
                    }) }}
                    <div class=\"form-text\">Sélectionnez votre secteur d'activité</div>
                    {{ form_errors(registrationForm.companyType) }}
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    {{ form_label(registrationForm.email, 'Email professionnel *', {
                        'label_attr': {'class': 'form-label fw-semibold'}
                    }) }}
                    {{ form_widget(registrationForm.email, {
                        'attr': {
                            'class': 'form-control form-control-lg',
                            'placeholder': 'contact@votre-entreprise.com'
                        }
                    }) }}
                    <div class=\"form-text\">Nous enverrons vos identifiants à cette adresse</div>
                    {{ form_errors(registrationForm.email) }}
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    {{ form_label(registrationForm.phone, 'Téléphone *', {
                        'label_attr': {'class': 'form-label fw-semibold'}
                    }) }}
                    {{ form_widget(registrationForm.phone, {
                        'attr': {
                            'class': 'form-control form-control-lg',
                            'placeholder': '+229 XX XX XX XX'
                        }
                    }) }}
                    <div class=\"form-text\">Pour vous contacter en cas de besoin</div>
                    {{ form_errors(registrationForm.phone) }}
                </div>
            </div>
            
            <div class=\"mb-4\">
                {{ form_label(registrationForm.address, 'Adresse', {
                    'label_attr': {'class': 'form-label fw-semibold'}
                }) }}
                {{ form_widget(registrationForm.address, {
                    'attr': {
                        'class': 'form-control form-control-lg',
                        'rows': 3,
                        'placeholder': 'Adresse complète de votre entreprise'
                    }
                }) }}
                <div class=\"form-text\">Adresse physique de votre établissement</div>
                {{ form_errors(registrationForm.address) }}
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    {{ form_label(registrationForm.city, 'Ville', {
                        'label_attr': {'class': 'form-label fw-semibold'}
                    }) }}
                    {{ form_widget(registrationForm.city, {
                        'attr': {
                            'class': 'form-control form-control-lg',
                            'placeholder': 'Ville'
                        }
                    }) }}
                    {{ form_errors(registrationForm.city) }}
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    {{ form_label(registrationForm.country, 'Pays', {
                        'label_attr': {'class': 'form-label fw-semibold'}
                    }) }}
                    {{ form_widget(registrationForm.country, {
                        'attr': {
                            'class': 'form-select form-select-lg'
                        }
                    }) }}
                    {{ form_errors(registrationForm.country) }}
                </div>
            </div>
            
            <!-- Champ Logo de l'entreprise - AJOUTÉ ICI -->
            <div class=\"mb-4\">
                {{ form_label(registrationForm.logoFile, 'Logo de l\\'entreprise', {
                    'label_attr': {'class': 'form-label fw-semibold'}
                }) }}
                
                <div class=\"logo-upload-container\" id=\"logoUploadContainer\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-cloud-upload-alt fa-3x text-muted mb-3\"></i>
                        <h5 class=\"fw-semibold mb-2\">Ajoutez votre logo</h5>
                        <p class=\"text-muted mb-3\">Glissez-déposez ou cliquez pour sélectionner</p>
                    </div>
                    
                    <label for=\"{{ registrationForm.logoFile.vars.id }}\" class=\"file-upload-label\">
                        <i class=\"fas fa-image me-2\"></i>Choisir un fichier
                    </label>
                    
                    {{ form_widget(registrationForm.logoFile, {
                        'attr': {
                            'class': 'd-none',
                            'accept': 'image/*'
                        }
                    }) }}
                    
                    <div class=\"file-info\">
                        <small class=\"text-muted\">Formats acceptés : JPG, PNG, GIF, WebP, SVG</small>
                        <br>
                        <small class=\"text-muted\">Taille max : 2 Mo</small>
                    </div>
                    
                    <div id=\"logoPreview\" class=\"logo-preview-container\">
                        <img id=\"previewImage\" src=\"\" alt=\"Aperçu du logo\" class=\"logo-preview\">
                        <div class=\"mt-2\">
                            <button type=\"button\" id=\"removeLogo\" class=\"btn btn-sm btn-outline-danger\">
                                <i class=\"fas fa-trash me-1\"></i>Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                {{ form_errors(registrationForm.logoFile) }}
            </div>
            
            <div class=\"mb-4\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"terms\" name=\"terms\" required>
                    <label class=\"form-check-label\" for=\"terms\">
                        J'accepte les <a href=\"#\" class=\"text-decoration-none fw-semibold\">conditions d'utilisation</a> 
                        et la <a href=\"#\" class=\"text-decoration-none fw-semibold\">politique de confidentialité</a> *
                    </label>
                    <div class=\"invalid-feedback\">
                        Vous devez accepter les conditions pour continuer.
                    </div>
                </div>
            </div>
            
            <div class=\"d-grid gap-3\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg py-3 fw-semibold\">
                    <i class=\"fas fa-rocket me-2\"></i>Créer mon compte gratuitement
                </button>
                
                <div class=\"text-center\">
                    <p class=\"text-muted mb-0\">
                        Déjà inscrit ? 
                        <a href=\"{{ path('app_login') }}\" class=\"text-decoration-none fw-semibold\">
                            Se connecter
                        </a>
                    </p>
                </div>
            </div>
            
            {{ form_end(registrationForm) }}
        </div>
    </div>
    
    <!-- Informations HMA Market -->
    <div class=\"col-lg-5\">
        <div class=\"info-container\">
            <div class=\"text-center mb-5\">
                <h3 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-gift text-primary me-2\"></i>Votre pack découverte
                </h3>
                <p class=\"text-muted\">14 jours pour tout tester, sans engagement</p>
            </div>
            
            <!-- Benefits List -->
            <div class=\"mb-5\">
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-calendar-check\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">14 jours d'essai gratuit</h5>
                        <p class=\"text-muted small mb-0\">
                            Testez toutes les fonctionnalités premium sans limite
                        </p>
                    </div>
                </div>
                
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-users\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">Jusqu'à 3 utilisateurs</h5>
                        <p class=\"text-muted small mb-0\">
                            Invitez vos collaborateurs gratuitement
                        </p>
                    </div>
                </div>
                
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-chart-line\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">Rapports illimités</h5>
                        <p class=\"text-muted small mb-0\">
                            Analysez vos performances en temps réel
                        </p>
                    </div>
                </div>
                
                <div class=\"benefit-item\">
                    <div class=\"benefit-icon\">
                        <i class=\"fas fa-headset\"></i>
                    </div>
                    <div class=\"benefit-content\">
                        <h5 class=\"fw-semibold\">Support prioritaire</h5>
                        <p class=\"text-muted small mb-0\">
                            Notre équipe vous accompagne personnellement
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Pricing Card -->
            <div class=\"pricing-card popular mb-4\">
                <h5 class=\"fw-bold mb-3\">Starter</h5>
                <p class=\"text-muted mb-3\">Parfait pour démarrer</p>
                <div class=\"price\">0 FCFA</div>
                <p class=\"price-period\">/mois après l'essai</p>
                
                <div class=\"text-start mt-4\">
                    <p class=\"mb-2\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        Gestion des stocks
                    </p>
                    <p class=\"mb-2\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        Point de vente
                    </p>
                    <p class=\"mb-2\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        Rapports basiques
                    </p>
                    <p class=\"mb-0\">
                        <i class=\"fas fa-check text-success me-2\"></i>
                        3 utilisateurs
                    </p>
                </div>
            </div>
            
            <!-- Security Note -->
            <div class=\"bg-white p-4 rounded-3\">
                <div class=\"d-flex align-items-start\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-shield-alt fa-2x text-success\"></i>
                    </div>
                    <div>
                        <h6 class=\"fw-semibold mb-2\">Sécurité garantie</h6>
                        <p class=\"small text-muted mb-0\">
                            Vos données sont chiffrées et sauvegardées quotidiennement. Conformité RGPD.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class=\"text-center mt-5\">
                <p class=\"text-muted small mb-2\">
                    <i class=\"fas fa-question-circle me-1\"></i>
                    Questions ? Contactez-nous :
                </p>
                <div class=\"d-flex justify-content-center gap-3\">
                    <a href=\"mailto:support@hmamarket.com\" class=\"text-decoration-none\">
                        <i class=\"fas fa-envelope me-1\"></i>Email
                    </a>
                    <a href=\"tel:+2290156139200\" class=\"text-decoration-none\">
                        <i class=\"fas fa-phone me-1\"></i>Téléphone
                    </a>
                    <a href=\"https://wa.me/2290156139200\" class=\"text-decoration-none\">
                        <i class=\"fab fa-whatsapp me-1\"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'upload du logo
    const logoInput = document.getElementById('{{ registrationForm.logoFile.vars.id }}');
    const logoPreviewContainer = document.getElementById('logoPreview');
    const previewImage = document.getElementById('previewImage');
    const removeLogoBtn = document.getElementById('removeLogo');
    const logoUploadContainer = document.getElementById('logoUploadContainer');
    
    if (logoInput) {
        // Afficher l'aperçu quand un fichier est sélectionné
        logoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) { // 2 MB
                    alert('Le fichier est trop volumineux. Taille max: 2 Mo');
                    this.value = '';
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    logoPreviewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
        
        // Drag and drop
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            logoUploadContainer.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            logoUploadContainer.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            logoUploadContainer.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            logoUploadContainer.classList.add('drag-over');
        }
        
        function unhighlight() {
            logoUploadContainer.classList.remove('drag-over');
        }
        
        // Gérer le drop de fichier
        logoUploadContainer.addEventListener('drop', function(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            logoInput.files = files;
            logoInput.dispatchEvent(new Event('change'));
        });
        
        // Supprimer le logo sélectionné
        removeLogoBtn.addEventListener('click', function() {
            logoInput.value = '';
            previewImage.src = '';
            logoPreviewContainer.style.display = 'none';
        });
    }
    
    // Validation du formulaire
    const form = document.querySelector('form.needs-validation');
    const termsCheckbox = document.getElementById('terms');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            if (!termsCheckbox.checked) {
                event.preventDefault();
                event.stopPropagation();
                termsCheckbox.classList.add('is-invalid');
            } else {
                termsCheckbox.classList.remove('is-invalid');
            }
            
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    }
    
    // Ajouter l'effet de focus sur les champs
    const formControls = form.querySelectorAll('.form-control, .form-select');
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        control.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
    });
});
</script>
{% endblock %}
{% endblock %}", "registration/register.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\registration\\register.html.twig");
    }
}
