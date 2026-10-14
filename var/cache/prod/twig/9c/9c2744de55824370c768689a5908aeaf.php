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
class __TwigTemplate_7863c28cfee8d34383e0e26a27f9c0cd extends Template
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
        $this->parent = $this->load("base-auth.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Inscription entreprise - HMA Market";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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

/* ✅ NOUVEAU : Style pour les champs de mot de passe */
.password-strength {
    height: 4px;
    border-radius: 2px;
    background: #e5e7eb;
    margin-top: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.password-strength-bar {
    height: 100%;
    width: 0;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.password-strength-bar.weak {
    width: 33%;
    background: #ef4444;
}

.password-strength-bar.medium {
    width: 66%;
    background: #f59e0b;
}

.password-strength-bar.strong {
    width: 100%;
    background: #10b981;
}

.password-hint {
    font-size: 12px;
    color: #6b7280;
    margin-top: 4px;
}

.password-toggle {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #6b7280;
    z-index: 10;
}

.password-input-wrapper {
    position: relative;
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
        yield from [];
    }

    // line 278
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 279
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
        // line 306
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            
            ";
        // line 309
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "vars", [], "any", false, false, false, 309), "errors", [], "any", false, false, false, 309)) > 0)) {
            // line 310
            yield "                <div class=\"alert alert-danger mb-4\">
                    ";
            // line 311
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'errors');
            yield "
                </div>
            ";
        }
        // line 314
        yield "            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyName", [], "any", false, false, false, 317), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nom de l'entreprise *"]);
        // line 319
        yield "
                    ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyName", [], "any", false, false, false, 320), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: Ma Société SARL"]]);
        // line 325
        yield "
                    <div class=\"form-text\">Le nom officiel de votre entreprise</div>
                    ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyName", [], "any", false, false, false, 327), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 331
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyType", [], "any", false, false, false, 331), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Type d'entreprise *"]);
        // line 333
        yield "
                    ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyType", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        // line 338
        yield "
                    <div class=\"form-text\">Sélectionnez votre secteur d'activité</div>
                    ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyType", [], "any", false, false, false, 340), 'errors');
        yield "
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 346), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Email professionnel *"]);
        // line 348
        yield "
                    ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 349), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "contact@votre-entreprise.com"]]);
        // line 354
        yield "
                    <div class=\"form-text\">Cet email servira d'identifiant de connexion</div>
                    ";
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 356), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 360
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 360), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Téléphone *"]);
        // line 362
        yield "
                    ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 363), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "+229 XX XX XX XX"]]);
        // line 368
        yield "
                    <div class=\"form-text\">Pour vous contacter en cas de besoin</div>
                    ";
        // line 370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 370), 'errors');
        yield "
                </div>
            </div>
            
            ";
        // line 375
        yield "            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 377
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 377), "first", [], "any", false, false, false, 377), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Mot de passe *"]);
        // line 379
        yield "
                    <div class=\"password-input-wrapper\">
                        ";
        // line 381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 381), "first", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Minimum 8 caractères"]]);
        // line 386
        yield "
                        <i class=\"fas fa-eye password-toggle\" data-target=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 387), "first", [], "any", false, false, false, 387), "vars", [], "any", false, false, false, 387), "id", [], "any", false, false, false, 387), "html", null, true);
        yield "\"></i>
                    </div>
                    <div class=\"password-strength\">
                        <div class=\"password-strength-bar\" id=\"passwordStrengthBar\"></div>
                    </div>
                    <div class=\"password-hint\" id=\"passwordHint\">
                        Au moins 8 caractères, avec lettres et chiffres
                    </div>
                    ";
        // line 395
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 395), "first", [], "any", false, false, false, 395), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 399), "second", [], "any", false, false, false, 399), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Confirmer le mot de passe *"]);
        // line 401
        yield "
                    <div class=\"password-input-wrapper\">
                        ";
        // line 403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 403), "second", [], "any", false, false, false, 403), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Retapez le mot de passe"]]);
        // line 408
        yield "
                        <i class=\"fas fa-eye password-toggle\" data-target=\"";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 409), "second", [], "any", false, false, false, 409), "vars", [], "any", false, false, false, 409), "id", [], "any", false, false, false, 409), "html", null, true);
        yield "\"></i>
                    </div>
                    <div class=\"form-text\">Les deux mots de passe doivent être identiques</div>
                    ";
        // line 412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 412), "second", [], "any", false, false, false, 412), 'errors');
        yield "
                </div>
            </div>
            ";
        // line 416
        yield "            
            <div class=\"mb-4\">
                ";
        // line 418
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "address", [], "any", false, false, false, 418), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Adresse"]);
        // line 420
        yield "
                ";
        // line 421
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "address", [], "any", false, false, false, 421), 'widget', ["attr" => ["class" => "form-control form-control-lg", "rows" => 3, "placeholder" => "Adresse complète de votre entreprise"]]);
        // line 427
        yield "
                <div class=\"form-text\">Adresse physique de votre établissement</div>
                ";
        // line 429
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "address", [], "any", false, false, false, 429), 'errors');
        yield "
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 434
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 434), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Ville"]);
        // line 436
        yield "
                    ";
        // line 437
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 437), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ville"]]);
        // line 442
        yield "
                    ";
        // line 443
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 443), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 447
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "country", [], "any", false, false, false, 447), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Pays"]);
        // line 449
        yield "
                    ";
        // line 450
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "country", [], "any", false, false, false, 450), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        // line 454
        yield "
                    ";
        // line 455
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "country", [], "any", false, false, false, 455), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Champ Logo de l'entreprise -->
            <div class=\"mb-4\">
                ";
        // line 461
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 461), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Logo de l'entreprise"]);
        // line 463
        yield "
                
                <div class=\"logo-upload-container\" id=\"logoUploadContainer\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-cloud-upload-alt fa-3x text-muted mb-3\"></i>
                        <h5 class=\"fw-semibold mb-2\">Ajoutez votre logo</h5>
                        <p class=\"text-muted mb-3\">Glissez-déposez ou cliquez pour sélectionner</p>
                    </div>
                    
                    <label for=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 472), "vars", [], "any", false, false, false, 472), "id", [], "any", false, false, false, 472), "html", null, true);
        yield "\" class=\"file-upload-label\">
                        <i class=\"fas fa-image me-2\"></i>Choisir un fichier
                    </label>
                    
                    ";
        // line 476
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 476), 'widget', ["attr" => ["class" => "d-none", "accept" => "image/*"]]);
        // line 481
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
        // line 498
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 498), 'errors');
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
        // line 522
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none fw-semibold\">
                            Se connecter
                        </a>
                    </p>
                </div>
            </div>
            
            ";
        // line 529
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
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
                        <h5 class=\"fw-semibold\">Utilisateurs illimités</h5>
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
        yield from [];
    }

    // line 659
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 660
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== GESTION DU MOT DE PASSE ====================
    const passwordInput = document.getElementById('";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 664), "first", [], "any", false, false, false, 664), "vars", [], "any", false, false, false, 664), "id", [], "any", false, false, false, 664), "html", null, true);
        yield "');
    const confirmInput = document.getElementById('";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 665), "second", [], "any", false, false, false, 665), "vars", [], "any", false, false, false, 665), "id", [], "any", false, false, false, 665), "html", null, true);
        yield "');
    const strengthBar = document.getElementById('passwordStrengthBar');
    const passwordHint = document.getElementById('passwordHint');
    
    // Indicateur de force du mot de passe
    if (passwordInput && strengthBar) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/\\d/.test(password)) strength++;
            if (/[^a-zA-Z\\d]/.test(password)) strength++;
            
            // Reset
            strengthBar.className = 'password-strength-bar';
            
            if (password.length === 0) {
                passwordHint.textContent = 'Au moins 8 caractères, avec lettres et chiffres';
                passwordHint.style.color = '#6b7280';
            } else if (strength <= 1) {
                strengthBar.classList.add('weak');
                passwordHint.textContent = 'Mot de passe faible';
                passwordHint.style.color = '#ef4444';
            } else if (strength <= 2) {
                strengthBar.classList.add('medium');
                passwordHint.textContent = 'Mot de passe moyen';
                passwordHint.style.color = '#f59e0b';
            } else {
                strengthBar.classList.add('strong');
                passwordHint.textContent = 'Mot de passe fort';
                passwordHint.style.color = '#10b981';
            }
        });
    }
    
    // Toggle visibilité du mot de passe
    document.querySelectorAll('.password-toggle').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetInput = document.getElementById(targetId);
            
            if (targetInput) {
                if (targetInput.type === 'password') {
                    targetInput.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    targetInput.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            }
        });
    });
    
    // ==================== GESTION DU LOGO ====================
    const logoInput = document.getElementById('";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 723), "vars", [], "any", false, false, false, 723), "id", [], "any", false, false, false, 723), "html", null, true);
        yield "');
    const logoPreviewContainer = document.getElementById('logoPreview');
    const previewImage = document.getElementById('previewImage');
    const removeLogoBtn = document.getElementById('removeLogo');
    const logoUploadContainer = document.getElementById('logoUploadContainer');
    
    if (logoInput) {
        logoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) {
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
        
        logoUploadContainer.addEventListener('drop', function(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            logoInput.files = files;
            logoInput.dispatchEvent(new Event('change'));
        });
        
        removeLogoBtn.addEventListener('click', function() {
            logoInput.value = '';
            previewImage.src = '';
            logoPreviewContainer.style.display = 'none';
        });
    }
    
    // ==================== VALIDATION DU FORMULAIRE ====================
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
    
    // Effet de focus
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
        return array (  886 => 723,  825 => 665,  821 => 664,  814 => 660,  807 => 659,  673 => 529,  663 => 522,  636 => 498,  617 => 481,  615 => 476,  608 => 472,  597 => 463,  595 => 461,  586 => 455,  583 => 454,  581 => 450,  578 => 449,  576 => 447,  569 => 443,  566 => 442,  564 => 437,  561 => 436,  559 => 434,  551 => 429,  547 => 427,  545 => 421,  542 => 420,  540 => 418,  536 => 416,  530 => 412,  524 => 409,  521 => 408,  519 => 403,  515 => 401,  513 => 399,  506 => 395,  495 => 387,  492 => 386,  490 => 381,  486 => 379,  484 => 377,  480 => 375,  473 => 370,  469 => 368,  467 => 363,  464 => 362,  462 => 360,  455 => 356,  451 => 354,  449 => 349,  446 => 348,  444 => 346,  435 => 340,  431 => 338,  429 => 334,  426 => 333,  424 => 331,  417 => 327,  413 => 325,  411 => 320,  408 => 319,  406 => 317,  401 => 314,  395 => 311,  392 => 310,  389 => 309,  384 => 306,  355 => 279,  348 => 278,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/register.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\registration\\register.html.twig");
    }
}
