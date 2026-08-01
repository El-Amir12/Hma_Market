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

/* stock/adjustment/new.html.twig */
class __TwigTemplate_0ce7056d2ed8742d409915d510eeb0f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/new.html.twig"));

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

        yield "Nouvel ajustement - HMA Market";
        
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
    .type-card {
        cursor: pointer;
        transition: all 0.2s;
        border: 2px solid #e9ecef;
        border-radius: 1rem;
    }
    .type-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .type-card.selected {
        border-color: #0d6efd;
        background-color: rgba(13, 110, 253, 0.05);
    }
    .type-card .card-body {
        padding: 1rem;
    }
    .form-section {
        background: #f8f9fa;
        border-radius: 0.75rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
    }
    .form-section-title {
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6c757d;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #dee2e6;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-calculator me-1\"></i> Ajustements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouvel ajustement</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle text-primary me-2\"></i>
                Nouvel ajustement de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                ⚠️ Cette action est irréversible. Un ajustement modifie directement votre stock.
            </p>
        </div>
        <div>
            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-calculator me-2 text-primary\"></i>
                        Formulaire d'ajustement
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "adjustmentForm"]]);
        yield "
                    
                    <!-- ÉTAPE 1 : Type d'ajustement -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-tag me-1\"></i> 1. Type d'ajustement
                        </div>
                        <div class=\"mb-3\">
                            <div id=\"type-buttons\" class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"card type-card\" data-type=\"in\">
                                        <div class=\"card-body text-center\">
                                            <i class=\"fas fa-plus-circle fa-3x text-success mb-2\"></i>
                                            <h5 class=\"mb-1 fw-bold text-success\">Entrée (+) </h5>
                                            <small class=\"text-muted\">Surplus, don, réception sans commande</small>
                                            <div class=\"mt-2\">
                                                <span class=\"badge bg-success bg-opacity-10 text-success\">Augmente le stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"card type-card\" data-type=\"out\">
                                        <div class=\"card-body text-center\">
                                            <i class=\"fas fa-minus-circle fa-3x text-danger mb-2\"></i>
                                            <h5 class=\"mb-1 fw-bold text-danger\">Sortie (-)</h5>
                                            <small class=\"text-muted\">Casse, perte, vol, échantillon</small>
                                            <div class=\"mt-2\">
                                                <span class=\"badge bg-danger bg-opacity-10 text-danger\">Diminue le stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'ajustement.
                            </div>
                        </div>
                    </div>

                    <!-- ÉTAPE 2 : Lot concerné -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-boxes me-1\"></i> 2. Lot concerné
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "stock_batch", [], "any", false, false, false, 137), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "stock_batch", [], "any", false, false, false, 138), 'widget');
        yield "
                            ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "stock_batch", [], "any", false, false, false, 139), 'errors');
        yield "
                            <small class=\"text-muted\">Le stock actuel du lot sera modifié</small>
                        </div>
                    </div>

                    <!-- ÉTAPE 3 : Quantité (pleine largeur) -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-hashtag me-1\"></i> 3. Quantité
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 mb-3\">
                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "quantity", [], "any", false, false, false, 151), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                                ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "quantity", [], "any", false, false, false, 152), 'widget');
        yield "
                                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "quantity", [], "any", false, false, false, 153), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <!-- ÉTAPE 4 : Raison -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-pen me-1\"></i> 4. Raison de l'ajustement
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "reason", [], "any", false, false, false, 164), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "reason", [], "any", false, false, false, 165), 'widget');
        yield "
                            ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "reason", [], "any", false, false, false, 166), 'errors');
        yield "
                            <small class=\"text-muted text-danger\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                Cette raison sera conservée dans l'historique et ne pourra pas être modifiée.
                            </small>
                        </div>
                    </div>

                    <!-- ÉTAPE 5 : Justificatif -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-paperclip me-1\"></i> 5. Justificatif (optionnel)
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "justification_file", [], "any", false, false, false, 180), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "justification_file", [], "any", false, false, false, 181), 'widget');
        yield "
                            ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "justification_file", [], "any", false, false, false, 182), 'errors');
        yield "
                            <small class=\"text-muted\">Formats acceptés : JPG, PNG, GIF, PDF (max 5Mo)</small>
                        </div>
                    </div>

                    <!-- ALERTE IMPORTANTE -->
                    <div class=\"alert alert-warning border-0 shadow-sm mt-3\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-exclamation-triangle fa-2x\"></i>
                            </div>
                            <div>
                                <strong class=\"d-block\">⚠️ Action irréversible</strong>
                                <small>Une fois l'ajustement effectué, il ne pourra pas être modifié ni supprimé. 
                                Seul un administrateur pourra créer un ajustement inverse si nécessaire.</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-2 mt-4 pt-3 border-top\">
                        <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                            <i class=\"fas fa-save me-1\"></i> Effectuer l'ajustement
                        </button>
                    </div>

                    ";
        // line 210
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), 'form_end');
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

    // line 218
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

        // line 219
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
        width: '100%'
    });

    // Gestion du type d'ajustement
    let selectedType = null;
    const typeInput = document.createElement('input');
    typeInput.type = 'hidden';
    typeInput.name = 'stock_adjustment[type]';
    document.getElementById('adjustmentForm').appendChild(typeInput);

    const typeCards = document.querySelectorAll('.type-card');
    const submitBtn = document.getElementById('submitBtn');
    const typeError = document.querySelector('.type-error');

    typeCards.forEach(card => {
        card.addEventListener('click', function() {
            // Retirer la sélection de toutes les cartes
            typeCards.forEach(c => c.classList.remove('selected'));
            
            // Sélectionner la carte cliquée
            this.classList.add('selected');
            selectedType = this.dataset.type;
            typeInput.value = selectedType;
            
            // Cacher l'erreur
            typeError.style.display = 'none';
            
            // Activer le bouton
            submitBtn.disabled = false;
        });
    });

    // Validation avant soumission
    document.getElementById('adjustmentForm').addEventListener('submit', function(e) {
        if (!selectedType) {
            e.preventDefault();
            typeError.style.display = 'block';
            typeError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }
        
        // Confirmation supplémentaire
        const typeLabel = selectedType === 'in' ? 'ENTRÉE (+) ' : 'SORTIE (-)';
        const message = `⚠️ Attention : Vous allez effectuer un ajustement de type \${typeLabel}.\\n\\n` +
                       `Cette action est IRREVERSIBLE et modifie directement votre stock.\\n\\n` +
                       `Confirmez-vous cet ajustement ?`;
        
        if (!confirm(message)) {
            e.preventDefault();
            return false;
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
        return "stock/adjustment/new.html.twig";
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
        return array (  411 => 219,  398 => 218,  380 => 210,  369 => 202,  346 => 182,  342 => 181,  338 => 180,  321 => 166,  317 => 165,  313 => 164,  299 => 153,  295 => 152,  291 => 151,  276 => 139,  272 => 138,  268 => 137,  219 => 91,  200 => 75,  180 => 58,  172 => 53,  164 => 47,  151 => 46,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/adjustment/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouvel ajustement - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    .type-card {
        cursor: pointer;
        transition: all 0.2s;
        border: 2px solid #e9ecef;
        border-radius: 1rem;
    }
    .type-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .type-card.selected {
        border-color: #0d6efd;
        background-color: rgba(13, 110, 253, 0.05);
    }
    .type-card .card-body {
        padding: 1rem;
    }
    .form-section {
        background: #f8f9fa;
        border-radius: 0.75rem;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
    }
    .form-section-title {
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6c757d;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #dee2e6;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_adjustment_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-calculator me-1\"></i> Ajustements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouvel ajustement</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle text-primary me-2\"></i>
                Nouvel ajustement de stock
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                ⚠️ Cette action est irréversible. Un ajustement modifie directement votre stock.
            </p>
        </div>
        <div>
            <a href=\"{{ path('app_stock_adjustment_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-calculator me-2 text-primary\"></i>
                        Formulaire d'ajustement
                    </h5>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'adjustmentForm'}}) }}
                    
                    <!-- ÉTAPE 1 : Type d'ajustement -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-tag me-1\"></i> 1. Type d'ajustement
                        </div>
                        <div class=\"mb-3\">
                            <div id=\"type-buttons\" class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"card type-card\" data-type=\"in\">
                                        <div class=\"card-body text-center\">
                                            <i class=\"fas fa-plus-circle fa-3x text-success mb-2\"></i>
                                            <h5 class=\"mb-1 fw-bold text-success\">Entrée (+) </h5>
                                            <small class=\"text-muted\">Surplus, don, réception sans commande</small>
                                            <div class=\"mt-2\">
                                                <span class=\"badge bg-success bg-opacity-10 text-success\">Augmente le stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"card type-card\" data-type=\"out\">
                                        <div class=\"card-body text-center\">
                                            <i class=\"fas fa-minus-circle fa-3x text-danger mb-2\"></i>
                                            <h5 class=\"mb-1 fw-bold text-danger\">Sortie (-)</h5>
                                            <small class=\"text-muted\">Casse, perte, vol, échantillon</small>
                                            <div class=\"mt-2\">
                                                <span class=\"badge bg-danger bg-opacity-10 text-danger\">Diminue le stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                                <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'ajustement.
                            </div>
                        </div>
                    </div>

                    <!-- ÉTAPE 2 : Lot concerné -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-boxes me-1\"></i> 2. Lot concerné
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.stock_batch, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(form.stock_batch) }}
                            {{ form_errors(form.stock_batch) }}
                            <small class=\"text-muted\">Le stock actuel du lot sera modifié</small>
                        </div>
                    </div>

                    <!-- ÉTAPE 3 : Quantité (pleine largeur) -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-hashtag me-1\"></i> 3. Quantité
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 mb-3\">
                                {{ form_label(form.quantity, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                                {{ form_widget(form.quantity) }}
                                {{ form_errors(form.quantity) }}
                            </div>
                        </div>
                    </div>

                    <!-- ÉTAPE 4 : Raison -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-pen me-1\"></i> 4. Raison de l'ajustement
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.reason, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(form.reason) }}
                            {{ form_errors(form.reason) }}
                            <small class=\"text-muted text-danger\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                Cette raison sera conservée dans l'historique et ne pourra pas être modifiée.
                            </small>
                        </div>
                    </div>

                    <!-- ÉTAPE 5 : Justificatif -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-paperclip me-1\"></i> 5. Justificatif (optionnel)
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.justification_file, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(form.justification_file) }}
                            {{ form_errors(form.justification_file) }}
                            <small class=\"text-muted\">Formats acceptés : JPG, PNG, GIF, PDF (max 5Mo)</small>
                        </div>
                    </div>

                    <!-- ALERTE IMPORTANTE -->
                    <div class=\"alert alert-warning border-0 shadow-sm mt-3\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-exclamation-triangle fa-2x\"></i>
                            </div>
                            <div>
                                <strong class=\"d-block\">⚠️ Action irréversible</strong>
                                <small>Une fois l'ajustement effectué, il ne pourra pas être modifié ni supprimé. 
                                Seul un administrateur pourra créer un ajustement inverse si nécessaire.</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-2 mt-4 pt-3 border-top\">
                        <a href=\"{{ path('app_stock_adjustment_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                            <i class=\"fas fa-save me-1\"></i> Effectuer l'ajustement
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
        width: '100%'
    });

    // Gestion du type d'ajustement
    let selectedType = null;
    const typeInput = document.createElement('input');
    typeInput.type = 'hidden';
    typeInput.name = 'stock_adjustment[type]';
    document.getElementById('adjustmentForm').appendChild(typeInput);

    const typeCards = document.querySelectorAll('.type-card');
    const submitBtn = document.getElementById('submitBtn');
    const typeError = document.querySelector('.type-error');

    typeCards.forEach(card => {
        card.addEventListener('click', function() {
            // Retirer la sélection de toutes les cartes
            typeCards.forEach(c => c.classList.remove('selected'));
            
            // Sélectionner la carte cliquée
            this.classList.add('selected');
            selectedType = this.dataset.type;
            typeInput.value = selectedType;
            
            // Cacher l'erreur
            typeError.style.display = 'none';
            
            // Activer le bouton
            submitBtn.disabled = false;
        });
    });

    // Validation avant soumission
    document.getElementById('adjustmentForm').addEventListener('submit', function(e) {
        if (!selectedType) {
            e.preventDefault();
            typeError.style.display = 'block';
            typeError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }
        
        // Confirmation supplémentaire
        const typeLabel = selectedType === 'in' ? 'ENTRÉE (+) ' : 'SORTIE (-)';
        const message = `⚠️ Attention : Vous allez effectuer un ajustement de type \${typeLabel}.\\n\\n` +
                       `Cette action est IRREVERSIBLE et modifie directement votre stock.\\n\\n` +
                       `Confirmez-vous cet ajustement ?`;
        
        if (!confirm(message)) {
            e.preventDefault();
            return false;
        }
    });
});
</script>
{% endblock %}", "stock/adjustment/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\adjustment\\new.html.twig");
    }
}
