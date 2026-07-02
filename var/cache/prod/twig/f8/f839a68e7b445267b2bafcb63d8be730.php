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
class __TwigTemplate_0278e5a434af4e6333524db995e37b6b extends Template
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

    // line 226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyName", [], "any", false, false, false, 258), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nom de l'entreprise *"]);
        // line 260
        yield "
                    ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyName", [], "any", false, false, false, 261), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: Ma Société SARL"]]);
        // line 266
        yield "
                    <div class=\"form-text\">Le nom officiel de votre entreprise</div>
                    ";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyName", [], "any", false, false, false, 268), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 272
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyType", [], "any", false, false, false, 272), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Type d'entreprise *"]);
        // line 274
        yield "
                    ";
        // line 275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyType", [], "any", false, false, false, 275), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        // line 279
        yield "
                    <div class=\"form-text\">Sélectionnez votre secteur d'activité</div>
                    ";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "companyType", [], "any", false, false, false, 281), 'errors');
        yield "
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 287), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Email professionnel *"]);
        // line 289
        yield "
                    ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 290), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "contact@votre-entreprise.com"]]);
        // line 295
        yield "
                    <div class=\"form-text\">Nous enverrons vos identifiants à cette adresse</div>
                    ";
        // line 297
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 297), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 301), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Téléphone *"]);
        // line 303
        yield "
                    ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "+229 XX XX XX XX"]]);
        // line 309
        yield "
                    <div class=\"form-text\">Pour vous contacter en cas de besoin</div>
                    ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 311), 'errors');
        yield "
                </div>
            </div>
            
            <div class=\"mb-4\">
                ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "address", [], "any", false, false, false, 316), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Adresse"]);
        // line 318
        yield "
                ";
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "address", [], "any", false, false, false, 319), 'widget', ["attr" => ["class" => "form-control form-control-lg", "rows" => 3, "placeholder" => "Adresse complète de votre entreprise"]]);
        // line 325
        yield "
                <div class=\"form-text\">Adresse physique de votre établissement</div>
                ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "address", [], "any", false, false, false, 327), 'errors');
        yield "
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 332), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Ville"]);
        // line 334
        yield "
                    ";
        // line 335
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 335), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ville"]]);
        // line 340
        yield "
                    ";
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 341), 'errors');
        yield "
                </div>
                
                <div class=\"col-md-6 mb-4\">
                    ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "country", [], "any", false, false, false, 345), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Pays"]);
        // line 347
        yield "
                    ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "country", [], "any", false, false, false, 348), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        // line 352
        yield "
                    ";
        // line 353
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "country", [], "any", false, false, false, 353), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Champ Logo de l'entreprise - AJOUTÉ ICI -->
            <div class=\"mb-4\">
                ";
        // line 359
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 359), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Logo de l'entreprise"]);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 370), "vars", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370), "html", null, true);
        yield "\" class=\"file-upload-label\">
                        <i class=\"fas fa-image me-2\"></i>Choisir un fichier
                    </label>
                    
                    ";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 374), 'widget', ["attr" => ["class" => "d-none", "accept" => "image/*"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 396), 'errors');
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
        // line 556
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 557
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'upload du logo
    const logoInput = document.getElementById('";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "logoFile", [], "any", false, false, false, 561), "vars", [], "any", false, false, false, 561), "id", [], "any", false, false, false, 561), "html", null, true);
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
        return array (  697 => 561,  690 => 557,  679 => 556,  547 => 427,  537 => 420,  510 => 396,  491 => 379,  489 => 374,  482 => 370,  471 => 361,  469 => 359,  460 => 353,  457 => 352,  455 => 348,  452 => 347,  450 => 345,  443 => 341,  440 => 340,  438 => 335,  435 => 334,  433 => 332,  425 => 327,  421 => 325,  419 => 319,  416 => 318,  414 => 316,  406 => 311,  402 => 309,  400 => 304,  397 => 303,  395 => 301,  388 => 297,  384 => 295,  382 => 290,  379 => 289,  377 => 287,  368 => 281,  364 => 279,  362 => 275,  359 => 274,  357 => 272,  350 => 268,  346 => 266,  344 => 261,  341 => 260,  339 => 258,  332 => 254,  303 => 227,  296 => 226,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/register.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\registration\\register.html.twig");
    }
}
