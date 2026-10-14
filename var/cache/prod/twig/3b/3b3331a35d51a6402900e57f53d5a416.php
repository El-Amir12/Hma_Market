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

/* stock/inventory/new.html.twig */
class __TwigTemplate_1b3e06052058aa64febdeeb7b08f930e extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Nouvel inventaire - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ============================================
   ÉTAPES
   ============================================ */
.steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1.5rem;
    position: relative;
    padding: 0 0.5rem;
}

.step {
    text-align: center;
    flex: 1;
    position: relative;
    z-index: 1;
}

.step-circle {
    width: 40px;
    height: 40px;
    background: #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.4rem;
    font-weight: 700;
    color: #6c757d;
    font-size: 0.9rem;
    border: 3px solid white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.step.active .step-circle {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.step-label {
    font-size: 0.7rem;
    color: #6c757d;
    font-weight: 500;
    line-height: 1.2;
}

.step.active .step-label {
    color: #667eea;
    font-weight: 700;
}

.steps-line {
    position: absolute;
    top: 20px;
    left: 12%;
    right: 12%;
    height: 2px;
    background: #e9ecef;
    z-index: 0;
}

/* ============================================
   FORMULAIRE
   ============================================ */
.form-card {
    background: white;
    border-radius: 16px;
    padding: 1.75rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    max-width: 700px;
    margin: 0 auto;
}

.form-card-header {
    text-align: center;
    margin-bottom: 1.75rem;
    padding-bottom: 1.25rem;
    border-bottom: 2px solid #f1f5f9;
}

.form-card-header .header-icon {
    width: 65px;
    height: 65px;
    border-radius: 16px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    margin-bottom: 1rem;
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.25);
}

.form-card-header h2 {
    font-weight: 800;
    font-size: 1.35rem;
    color: #1e293b;
    margin-bottom: 0.35rem;
}

.form-card-header p {
    color: #64748b;
    font-size: 0.88rem;
    margin: 0;
}

/* Champs du formulaire */
.form-label {
    font-size: 0.85rem;
    font-weight: 600;
    color: #334155;
    margin-bottom: 0.4rem;
}

.form-control, .form-select {
    border-radius: 10px;
    border: 2px solid #e2e8f0;
    padding: 0.65rem 0.9rem;
    font-size: 0.9rem;
    transition: all 0.2s;
}

.form-control:focus, .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

textarea.form-control {
    min-height: 90px;
    resize: vertical;
}

/* Select2 Location */
.select2-container--bootstrap-5 .select2-selection {
    min-height: 48px !important;
    border: 2px solid #e2e8f0 !important;
    border-radius: 10px !important;
    padding: 0.4rem 0.65rem !important;
    transition: all 0.2s;
}

.select2-container--bootstrap-5.select2-container--focus .select2-selection {
    border-color: #667eea !important;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15) !important;
}

.select2-container--bootstrap-5 .select2-dropdown {
    border: 2px solid #667eea !important;
    border-radius: 10px !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    overflow: hidden;
    margin-top: 4px;
}

.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    color: white !important;
}

/* Boutons */
.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.75rem;
    margin-top: 1.75rem;
    padding-top: 1.25rem;
    border-top: 1px solid #e9ecef;
    flex-wrap: wrap;
}

.btn-action {
    padding: 0.7rem 1.75rem;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 12px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn-primary.btn-action {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    min-width: 200px;
    justify-content: center;
}

.btn-primary.btn-action:hover {
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

/* Erreurs */
.field-error {
    color: #dc2626;
    font-size: 0.8rem;
    margin-top: 0.3rem;
    display: flex;
    align-items: center;
    gap: 0.35rem;
}

.form-error-box {
    background: #fef2f2;
    border: 1px solid #fecaca;
    border-left: 4px solid #ef4444;
    border-radius: 10px;
    padding: 1rem 1.15rem;
    margin-bottom: 1.25rem;
    color: #991b1b;
    font-size: 0.88rem;
}

.form-error-box .error-title {
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }

    .steps {
        padding: 0;
        margin-bottom: 1.25rem;
    }

    .step-circle {
        width: 34px;
        height: 34px;
        font-size: 0.8rem;
        border-width: 2px;
    }

    .step-label {
        font-size: 0.62rem;
    }

    .steps-line {
        top: 17px;
    }

    .form-card {
        padding: 1.15rem;
        border-radius: 14px;
    }

    .form-card-header .header-icon {
        width: 55px;
        height: 55px;
        font-size: 1.4rem;
    }

    .form-card-header h2 {
        font-size: 1.1rem;
    }

    .form-card-header p {
        font-size: 0.8rem;
    }

    .action-buttons {
        flex-direction: column-reverse;
        align-items: stretch;
        gap: 0.5rem;
    }

    .btn-action {
        width: 100%;
        padding: 0.65rem 1rem;
        font-size: 0.88rem;
        justify-content: center;
        min-width: auto !important;
    }
}
</style>
";
        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 308
        yield "<div class=\"container-fluid px-3 px-md-4 py-3\">

    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 316
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 322
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Inventaires</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">Nouveau</li>
                </ol>
            </nav>
            <h1 class=\"h4 h3-md mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle text-primary me-2\"></i>
                Nouvel inventaire
            </h1>
        </div>
    </div>

    <!-- Étapes -->
    <div class=\"steps\">
        <div class=\"step active\">
            <div class=\"step-circle\">1</div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">2</div>
            <div class=\"step-label\">Ajout</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">Comptage</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Validation</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <!-- Formulaire -->
    <div class=\"form-card\">

        <div class=\"form-card-header\">
            <div class=\"header-icon\">
                <i class=\"fas fa-clipboard-list\"></i>
            </div>
            <h2>Créer un nouvel inventaire</h2>
            <p>Renseignez les informations de base pour démarrer</p>
        </div>

        <!-- Erreurs globales -->
        ";
        // line 370
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 370), "errors", [], "any", false, false, false, 370)) > 0)) {
            // line 371
            yield "            <div class=\"form-error-box\">
                <div class=\"error-title\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                    Le formulaire contient des erreurs
                </div>
                <ul class=\"mb-0 ps-3\">
                    ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 377), "errors", [], "any", false, false, false, 377));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 378
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 378), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            yield "                </ul>
            </div>
        ";
        }
        // line 383
        yield "
        ";
        // line 384
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "newInventoryForm"]]);
        yield "

            <div class=\"mb-3\">
                ";
        // line 387
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inventory_date", [], "any", false, false, false, 387), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 388
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inventory_date", [], "any", false, false, false, 388), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 389
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inventory_date", [], "any", false, false, false, 389), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 393
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 393), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 394), 'widget', ["attr" => ["class" => "form-select select2-location"]]);
        yield "
                ";
        // line 395
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 395), 'errors');
        yield "
                <small class=\"text-muted d-block mt-2\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Laissez vide pour inventorier tous les emplacements
                </small>
            </div>

            <div class=\"mb-3\">
                ";
        // line 403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 403), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 404
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 404), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Instructions particulières, remarques..."]]);
        yield "
                ";
        // line 405
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 405), 'errors');
        yield "
            </div>

            <div class=\"action-buttons\">
                <a href=\"";
        // line 409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary btn-action\" id=\"submitBtn\">
                    <i class=\"fas fa-arrow-right me-2\"></i>Continuer
                </button>
            </div>

        ";
        // line 417
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 422
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 423
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const locationSelect = document.querySelector('.select2-location');
    if (locationSelect && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$(locationSelect).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '-- Tous les emplacements --',
            allowClear: true,
            width: '100%'
        });
    }

    // Feedback visuel au submit
    const form = document.getElementById('newInventoryForm');
    const submitBtn = document.getElementById('submitBtn');

    form?.addEventListener('submit', function() {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Création...';
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
        return "stock/inventory/new.html.twig";
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
        return array (  566 => 423,  559 => 422,  550 => 417,  539 => 409,  532 => 405,  528 => 404,  524 => 403,  513 => 395,  509 => 394,  505 => 393,  498 => 389,  494 => 388,  490 => 387,  484 => 384,  481 => 383,  476 => 380,  467 => 378,  463 => 377,  455 => 371,  453 => 370,  402 => 322,  393 => 316,  383 => 308,  376 => 307,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/inventory/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\new.html.twig");
    }
}
