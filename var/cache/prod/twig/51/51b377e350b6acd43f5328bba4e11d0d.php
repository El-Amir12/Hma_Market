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
class __TwigTemplate_ea7dad4c74ed3389a17d429b1963b265 extends Template
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
<style>
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
    .info-card {
        background: #e8f4fd;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    .steps {
        display: flex;
        justify-content: space-between;
        margin-bottom: 2rem;
        position: relative;
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
        margin: 0 auto 0.5rem;
        font-weight: bold;
        color: #6c757d;
    }
    .step.active .step-circle {
        background: #0d6efd;
        color: white;
    }
    .step.completed .step-circle {
        background: #198754;
        color: white;
    }
    .step-label {
        font-size: 0.8rem;
        color: #6c757d;
    }
    .step.active .step-label {
        color: #0d6efd;
        font-weight: bold;
    }
    .step.completed .step-label {
        color: #198754;
    }
    .steps-line {
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
        height: 2px;
        background: #e9ecef;
        z-index: 0;
    }
</style>
";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouvel inventaire</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle text-primary me-2\"></i>
                Nouvel inventaire
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Créez un inventaire pour comptabiliser votre stock physique
            </p>
        </div>
        <div>
            <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
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
            <div class=\"step-label\">Ajout produits</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Validation</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-calculator me-2 text-primary\"></i>
                        Formulaire d'inventaire
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 153
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "inventoryForm"]]);
        yield "
                    
                    <!-- ÉTAPE 1 : Date -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> 1. Date de l'inventaire
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inventory_date", [], "any", false, false, false, 161), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inventory_date", [], "any", false, false, false, 162), 'widget');
        yield "
                            ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inventory_date", [], "any", false, false, false, 163), 'errors');
        yield "
                            <small class=\"text-muted\">Date à laquelle l'inventaire physique est réalisé</small>
                        </div>
                    </div>

                    <!-- ÉTAPE 2 : Emplacement -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-map-marker-alt me-1\"></i> 2. Emplacement
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 174), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 175), 'widget');
        yield "
                            ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 176), 'errors');
        yield "
                            <small class=\"text-muted\">Laissez vide pour tous les emplacements</small>
                        </div>
                    </div>

                    <!-- ÉTAPE 3 : Notes -->
                    <div class=\"form-section\">
                        <div class=\"form-section-title\">
                            <i class=\"fas fa-pen me-1\"></i> 3. Notes (optionnel)
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 187), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 188), 'widget');
        yield "
                            ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 189), 'errors');
        yield "
                            <small class=\"text-muted\">Instructions particulières pour les compteurs</small>
                        </div>
                    </div>

                    <!-- Information -->
                    <div class=\"info-card\">
                        <div class=\"d-flex\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-info-circle fa-2x text-primary\"></i>
                            </div>
                            <div>
                                <strong class=\"d-block\">Comment se déroule un inventaire ?</strong>
                                <small>
                                    1. Créez l'inventaire avec une date<br>
                                    2. Ajoutez les produits à compter<br>
                                    3. Saisissez les quantités physiques comptées<br>
                                    4. Validez l'inventaire → les ajustements sont automatiques
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-2 mt-4 pt-3 border-top\">
                        <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-1\"></i> Créer et ajouter des produits
                        </button>
                    </div>

                    ";
        // line 221
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 229
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 230
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('.select2-location').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un emplacement --',
        allowClear: true,
        width: '100%'
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
        return array (  359 => 230,  352 => 229,  340 => 221,  329 => 213,  302 => 189,  298 => 188,  294 => 187,  280 => 176,  276 => 175,  272 => 174,  258 => 163,  254 => 162,  250 => 161,  239 => 153,  199 => 116,  179 => 99,  171 => 94,  163 => 88,  156 => 87,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/inventory/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\new.html.twig");
    }
}
