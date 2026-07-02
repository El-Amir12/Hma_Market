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

/* stock/transfer/new.html.twig */
class __TwigTemplate_9e84130fc3f5d7eec0babb24457761dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/new.html.twig"));

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

        yield "Nouveau transfert - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary: #0463f1;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #0ea5e9;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
    }

    .form-section {
        background: var(--gray-100);
        border-radius: 1rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    .form-section:hover {
        border-color: var(--primary);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .form-section-title {
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--gray-600);
        margin-bottom: 1.25rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid var(--gray-200);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .form-section-title i {
        color: var(--primary);
        font-size: 1.1rem;
    }
    .info-card {
        background: linear-gradient(135deg, #e8f4fd 0%, #dbeafe 100%);
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid var(--primary);
    }
    .alert-custom {
        border-radius: 1rem;
        border: none;
        padding: 1rem 1.25rem;
    }
    .step-indicator {
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
        width: 45px;
        height: 45px;
        background: white;
        border: 2px solid var(--gray-200);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.6rem;
        font-weight: bold;
        color: var(--gray-600);
        transition: all 0.3s ease;
    }
    .step.active .step-circle {
        background: var(--primary);
        border-color: var(--primary);
        color: white;
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.2);
    }
    .step.completed .step-circle {
        background: var(--success);
        border-color: var(--success);
        color: white;
    }
    .step-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--gray-600);
    }
    .step.active .step-label {
        color: var(--primary);
    }
    .step.completed .step-label {
        color: var(--success);
    }
    .steps-line {
        position: absolute;
        top: 22px;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--gray-200);
        z-index: 0;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.75rem;
        border-color: var(--gray-200);
        min-height: 42px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 40px;
        padding-left: 1rem;
    }
    .form-control, .form-select {
        border-radius: 0.75rem;
        border-color: var(--gray-200);
        padding: 0.6rem 1rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }
    .btn {
        border-radius: 0.75rem;
        padding: 0.6rem 1.25rem;
        font-weight: 500;
        transition: all 0.2s;
    }
    .btn-primary {
        background: var(--primary);
        border: none;
    }
    .btn-primary:hover {
        background: #0350c4;
        transform: translateY(-1px);
    }
    .btn-outline-secondary:hover {
        transform: translateY(-1px);
    }
    .badge-info {
        background: rgba(4, 99, 241, 0.1);
        color: var(--primary);
        padding: 0.35rem 0.75rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 166
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

        // line 167
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouveau transfert</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle text-primary me-2\"></i>
                Nouveau transfert de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Transférez des marchandises d'un emplacement à un autre
            </p>
        </div>
        <div>
            <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Indicateur d'étapes -->
    <div class=\"step-indicator\">
        <div class=\"step active\">
            <div class=\"step-circle\">1</div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">2</div>
            <div class=\"step-label\">Expédition</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">En transit</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Réception</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">
            <div class=\"card border-0 shadow-sm\" style=\"border-radius: 1.25rem; overflow: hidden;\">
                <div class=\"card-header bg-white py-3\" style=\"border-bottom: 1px solid #eef2f6;\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-exchange-alt me-2 text-primary\"></i>
                        Formulaire de transfert
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 232
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "transferForm"]]);
        yield "
                    
                    <!-- ÉTAPE 1 : Lot à transférer -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-boxes\"></i>
                            <span>1. Lot à transférer</span>
                            <span class=\"badge-info ms-2\">Obligatoire</span>
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "stock_batch", [], "any", false, false, false, 242), 'label', ["label_attr" => ["class" => "form-label fw-semibold mb-2"]]);
        yield "
                            ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "stock_batch", [], "any", false, false, false, 243), 'widget');
        yield "
                            ";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "stock_batch", [], "any", false, false, false, 244), 'errors');
        yield "
                            <small class=\"text-muted d-block mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Seuls les lots avec stock disponible sont affichés
                            </small>
                        </div>
                    </div>

                    <!-- ÉTAPE 2 : Emplacement de destination -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            <span>2. Emplacement de destination</span>
                            <span class=\"badge-info ms-2\">Obligatoire</span>
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 260
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "destination_location", [], "any", false, false, false, 260), 'label', ["label_attr" => ["class" => "form-label fw-semibold mb-2"]]);
        yield "
                            ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "destination_location", [], "any", false, false, false, 261), 'widget');
        yield "
                            ";
        // line 262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "destination_location", [], "any", false, false, false, 262), 'errors');
        yield "
                            <small class=\"text-muted d-block mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                L'emplacement où les produits seront transférés
                            </small>
                        </div>
                    </div>

                    <!-- ÉTAPE 3 : Quantité -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-hashtag\"></i>
                            <span>3. Quantité à transférer</span>
                            <span class=\"badge-info ms-2\">Obligatoire</span>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 279
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "quantity", [], "any", false, false, false, 279), 'label', ["label_attr" => ["class" => "form-label fw-semibold mb-2"]]);
        yield "
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 0.75rem 0 0 0.75rem;\">
                                        <i class=\"fas fa-box text-primary\"></i>
                                    </span>
                                    ";
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "quantity", [], "any", false, false, false, 284), 'widget', ["attr" => ["class" => "border-start-0"]]);
        yield "
                                </div>
                                ";
        // line 286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "quantity", [], "any", false, false, false, 286), 'errors');
        yield "
                                <small class=\"text-muted d-block mt-2\" id=\"stockInfo\">
                                    <i class=\"fas fa-database me-1\"></i>
                                    Chargez un lot pour voir le stock disponible
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- ÉTAPE 4 : Raison du transfert -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-pen\"></i>
                            <span>4. Raison du transfert</span>
                            <span class=\"badge-info ms-2\">Optionnel</span>
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "reason", [], "any", false, false, false, 303), 'label', ["label_attr" => ["class" => "form-label fw-semibold mb-2"]]);
        yield "
                            ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "reason", [], "any", false, false, false, 304), 'widget');
        yield "
                            ";
        // line 305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "reason", [], "any", false, false, false, 305), 'errors');
        yield "
                            <small class=\"text-muted d-block mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Une raison claire facilite le suivi des transferts
                            </small>
                        </div>
                    </div>

                    <!-- Information sur le transfert -->
                    <div class=\"info-card\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 p-2\">
                                    <i class=\"fas fa-truck fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <div>
                                <strong class=\"d-block mb-1\">📦 Comment fonctionne un transfert ?</strong>
                                <small class=\"text-secondary\">
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Le transfert est d'abord créé (statut \"En attente\")<br>
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Expédition → stock déduit de l'emplacement source<br>
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Réception → stock ajouté à l'emplacement destination<br>
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Le transfert est marqué \"Terminé\"
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- ALERTE IMPORTANTE -->
                    <div class=\"alert alert-warning alert-custom mt-3\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-exclamation-triangle fa-2x text-warning\"></i>
                            </div>
                            <div>
                                <strong class=\"d-block mb-1\">⚠️ Points importants</strong>
                                <small class=\"d-block\">
                                    • Le stock n'est déduit qu'après avoir <strong>expédié</strong> le transfert<br>
                                    • Le stock n'est ajouté qu'après avoir <strong>réceptionné</strong> le transfert<br>
                                    • Un transfert peut être <strong>annulé</strong> tant qu'il n'est pas réceptionné
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 mt-4 pt-3 border-top\">
                        <a href=\"";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary px-4\">
                            <i class=\"fas fa-save me-1\"></i> Créer le transfert
                        </button>
                    </div>

                    ";
        // line 359
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), 'form_end');
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

    // line 367
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

        // line 368
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select2 pour le lot
    \$('.select2-batch').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un lot --',
        allowClear: true,
        width: '100%',
        templateResult: function(data) {
            if (!data.id) return data.text;
            // Personnaliser l'affichage dans la liste déroulante
            return \$('<span><i class=\"fas fa-box me-2 text-primary\"></i>' + data.text + '</span>');
        }
    });

    // Select2 pour l'emplacement destination
    \$('.select2-location').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un emplacement --',
        allowClear: true,
        width: '100%',
        templateResult: function(data) {
            if (!data.id) return data.text;
            return \$('<span><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>' + data.text + '</span>');
        }
    });

    // Afficher les informations du lot sélectionné
    const batchSelect = \$('#";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "stock_batch", [], "any", false, false, false, 401), "vars", [], "any", false, false, false, 401), "id", [], "any", false, false, false, 401), "html", null, true);
        yield "');
    const quantityInput = \$('#";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "quantity", [], "any", false, false, false, 402), "vars", [], "any", false, false, false, 402), "id", [], "any", false, false, false, 402), "html", null, true);
        yield "');
    const stockInfo = \$('#stockInfo');
    
    batchSelect.on('change', function() {
        const selectedOption = \$(this).find('option:selected');
        const batchInfo = selectedOption.text();
        
        // Extraire le stock disponible du texte (pattern: Stock: X unités)
        const stockMatch = batchInfo.match(/Stock:\\s*(\\d+)/i);
        if (stockMatch && stockMatch[1]) {
            const maxStock = parseInt(stockMatch[1]);
            quantityInput.attr('max', maxStock);
            quantityInput.attr('placeholder', maxStock);
            
            // Mettre à jour l'info stock
            stockInfo.html('<i class=\"fas fa-database me-1 text-success\"></i> Stock disponible: <strong>' + maxStock.toLocaleString() + '</strong> unités');
            stockInfo.removeClass('text-muted').addClass('text-success');
        } else {
            stockInfo.html('<i class=\"fas fa-info-circle me-1\"></i> Chargez un lot pour voir le stock disponible');
            stockInfo.removeClass('text-success').addClass('text-muted');
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
        return "stock/transfer/new.html.twig";
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
        return array (  600 => 402,  596 => 401,  560 => 368,  547 => 367,  529 => 359,  518 => 351,  469 => 305,  465 => 304,  461 => 303,  441 => 286,  436 => 284,  428 => 279,  408 => 262,  404 => 261,  400 => 260,  381 => 244,  377 => 243,  373 => 242,  360 => 232,  320 => 195,  300 => 178,  292 => 173,  284 => 167,  271 => 166,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/transfer/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouveau transfert - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary: #0463f1;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #0ea5e9;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
    }

    .form-section {
        background: var(--gray-100);
        border-radius: 1rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    .form-section:hover {
        border-color: var(--primary);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .form-section-title {
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--gray-600);
        margin-bottom: 1.25rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid var(--gray-200);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .form-section-title i {
        color: var(--primary);
        font-size: 1.1rem;
    }
    .info-card {
        background: linear-gradient(135deg, #e8f4fd 0%, #dbeafe 100%);
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid var(--primary);
    }
    .alert-custom {
        border-radius: 1rem;
        border: none;
        padding: 1rem 1.25rem;
    }
    .step-indicator {
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
        width: 45px;
        height: 45px;
        background: white;
        border: 2px solid var(--gray-200);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.6rem;
        font-weight: bold;
        color: var(--gray-600);
        transition: all 0.3s ease;
    }
    .step.active .step-circle {
        background: var(--primary);
        border-color: var(--primary);
        color: white;
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.2);
    }
    .step.completed .step-circle {
        background: var(--success);
        border-color: var(--success);
        color: white;
    }
    .step-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--gray-600);
    }
    .step.active .step-label {
        color: var(--primary);
    }
    .step.completed .step-label {
        color: var(--success);
    }
    .steps-line {
        position: absolute;
        top: 22px;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--gray-200);
        z-index: 0;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.75rem;
        border-color: var(--gray-200);
        min-height: 42px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 40px;
        padding-left: 1rem;
    }
    .form-control, .form-select {
        border-radius: 0.75rem;
        border-color: var(--gray-200);
        padding: 0.6rem 1rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.1);
    }
    .btn {
        border-radius: 0.75rem;
        padding: 0.6rem 1.25rem;
        font-weight: 500;
        transition: all 0.2s;
    }
    .btn-primary {
        background: var(--primary);
        border: none;
    }
    .btn-primary:hover {
        background: #0350c4;
        transform: translateY(-1px);
    }
    .btn-outline-secondary:hover {
        transform: translateY(-1px);
    }
    .badge-info {
        background: rgba(4, 99, 241, 0.1);
        color: var(--primary);
        padding: 0.35rem 0.75rem;
        border-radius: 2rem;
        font-size: 0.7rem;
        font-weight: 500;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouveau transfert</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle text-primary me-2\"></i>
                Nouveau transfert de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Transférez des marchandises d'un emplacement à un autre
            </p>
        </div>
        <div>
            <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Indicateur d'étapes -->
    <div class=\"step-indicator\">
        <div class=\"step active\">
            <div class=\"step-circle\">1</div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">2</div>
            <div class=\"step-label\">Expédition</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">En transit</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Réception</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">
            <div class=\"card border-0 shadow-sm\" style=\"border-radius: 1.25rem; overflow: hidden;\">
                <div class=\"card-header bg-white py-3\" style=\"border-bottom: 1px solid #eef2f6;\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-exchange-alt me-2 text-primary\"></i>
                        Formulaire de transfert
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'transferForm'}}) }}
                    
                    <!-- ÉTAPE 1 : Lot à transférer -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-boxes\"></i>
                            <span>1. Lot à transférer</span>
                            <span class=\"badge-info ms-2\">Obligatoire</span>
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.stock_batch, null, {'label_attr': {'class': 'form-label fw-semibold mb-2'}}) }}
                            {{ form_widget(form.stock_batch) }}
                            {{ form_errors(form.stock_batch) }}
                            <small class=\"text-muted d-block mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Seuls les lots avec stock disponible sont affichés
                            </small>
                        </div>
                    </div>

                    <!-- ÉTAPE 2 : Emplacement de destination -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            <span>2. Emplacement de destination</span>
                            <span class=\"badge-info ms-2\">Obligatoire</span>
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.destination_location, null, {'label_attr': {'class': 'form-label fw-semibold mb-2'}}) }}
                            {{ form_widget(form.destination_location) }}
                            {{ form_errors(form.destination_location) }}
                            <small class=\"text-muted d-block mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                L'emplacement où les produits seront transférés
                            </small>
                        </div>
                    </div>

                    <!-- ÉTAPE 3 : Quantité -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-hashtag\"></i>
                            <span>3. Quantité à transférer</span>
                            <span class=\"badge-info ms-2\">Obligatoire</span>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.quantity, null, {'label_attr': {'class': 'form-label fw-semibold mb-2'}}) }}
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 0.75rem 0 0 0.75rem;\">
                                        <i class=\"fas fa-box text-primary\"></i>
                                    </span>
                                    {{ form_widget(form.quantity, {'attr': {'class': 'border-start-0'}}) }}
                                </div>
                                {{ form_errors(form.quantity) }}
                                <small class=\"text-muted d-block mt-2\" id=\"stockInfo\">
                                    <i class=\"fas fa-database me-1\"></i>
                                    Chargez un lot pour voir le stock disponible
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- ÉTAPE 4 : Raison du transfert -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-pen\"></i>
                            <span>4. Raison du transfert</span>
                            <span class=\"badge-info ms-2\">Optionnel</span>
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.reason, null, {'label_attr': {'class': 'form-label fw-semibold mb-2'}}) }}
                            {{ form_widget(form.reason) }}
                            {{ form_errors(form.reason) }}
                            <small class=\"text-muted d-block mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Une raison claire facilite le suivi des transferts
                            </small>
                        </div>
                    </div>

                    <!-- Information sur le transfert -->
                    <div class=\"info-card\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <div class=\"rounded-circle bg-primary bg-opacity-10 p-2\">
                                    <i class=\"fas fa-truck fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <div>
                                <strong class=\"d-block mb-1\">📦 Comment fonctionne un transfert ?</strong>
                                <small class=\"text-secondary\">
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Le transfert est d'abord créé (statut \"En attente\")<br>
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Expédition → stock déduit de l'emplacement source<br>
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Réception → stock ajouté à l'emplacement destination<br>
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> Le transfert est marqué \"Terminé\"
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- ALERTE IMPORTANTE -->
                    <div class=\"alert alert-warning alert-custom mt-3\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-exclamation-triangle fa-2x text-warning\"></i>
                            </div>
                            <div>
                                <strong class=\"d-block mb-1\">⚠️ Points importants</strong>
                                <small class=\"d-block\">
                                    • Le stock n'est déduit qu'après avoir <strong>expédié</strong> le transfert<br>
                                    • Le stock n'est ajouté qu'après avoir <strong>réceptionné</strong> le transfert<br>
                                    • Un transfert peut être <strong>annulé</strong> tant qu'il n'est pas réceptionné
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 mt-4 pt-3 border-top\">
                        <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"btn btn-outline-secondary px-4\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary px-4\">
                            <i class=\"fas fa-save me-1\"></i> Créer le transfert
                        </button>
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
    // Select2 pour le lot
    \$('.select2-batch').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un lot --',
        allowClear: true,
        width: '100%',
        templateResult: function(data) {
            if (!data.id) return data.text;
            // Personnaliser l'affichage dans la liste déroulante
            return \$('<span><i class=\"fas fa-box me-2 text-primary\"></i>' + data.text + '</span>');
        }
    });

    // Select2 pour l'emplacement destination
    \$('.select2-location').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un emplacement --',
        allowClear: true,
        width: '100%',
        templateResult: function(data) {
            if (!data.id) return data.text;
            return \$('<span><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>' + data.text + '</span>');
        }
    });

    // Afficher les informations du lot sélectionné
    const batchSelect = \$('#{{ form.stock_batch.vars.id }}');
    const quantityInput = \$('#{{ form.quantity.vars.id }}');
    const stockInfo = \$('#stockInfo');
    
    batchSelect.on('change', function() {
        const selectedOption = \$(this).find('option:selected');
        const batchInfo = selectedOption.text();
        
        // Extraire le stock disponible du texte (pattern: Stock: X unités)
        const stockMatch = batchInfo.match(/Stock:\\s*(\\d+)/i);
        if (stockMatch && stockMatch[1]) {
            const maxStock = parseInt(stockMatch[1]);
            quantityInput.attr('max', maxStock);
            quantityInput.attr('placeholder', maxStock);
            
            // Mettre à jour l'info stock
            stockInfo.html('<i class=\"fas fa-database me-1 text-success\"></i> Stock disponible: <strong>' + maxStock.toLocaleString() + '</strong> unités');
            stockInfo.removeClass('text-muted').addClass('text-success');
        } else {
            stockInfo.html('<i class=\"fas fa-info-circle me-1\"></i> Chargez un lot pour voir le stock disponible');
            stockInfo.removeClass('text-success').addClass('text-muted');
        }
    });
});
</script>
{% endblock %}", "stock/transfer/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\new.html.twig");
    }
}
