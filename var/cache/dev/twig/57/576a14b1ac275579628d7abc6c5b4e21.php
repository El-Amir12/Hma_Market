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

/* super_admin/analysis_price/show.html.twig */
class __TwigTemplate_94c1f8b9c45a3a074d81317907b5db90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_price/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4), "html", null, true);
        yield " - Super Admin";
        
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
    .show-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
    }
    .show-header {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
    }
    .info-row {
        display: flex;
        padding: 1rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        width: 180px;
        font-weight: 600;
        color: #475569;
    }
    .info-value {
        flex: 1;
        color: #1e293b;
    }
    .price-badge {
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .action-buttons {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
    }
    .status-badge {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.8rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
    }
    .status-active {
        background: #d1fae5;
        color: #065f46;
    }
    .status-inactive {
        background: #fee2e2;
        color: #991b1b;
    }
    .action-footer {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-7\">
            <div class=\"show-card shadow-sm\">
                <div class=\"show-header p-4 text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <i class=\"fas fa-tag fa-2x mb-2\"></i>
                            <h2 class=\"h4 mb-0 fw-bold\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 83, $this->source); })()), "label", [], "any", false, false, false, 83), "html", null, true);
        yield "</h2>
                            <p class=\"mb-0 opacity-75 mt-1\">Détail de l'offre d'analyse</p>
                        </div>
                        <div class=\"action-buttons\">
                            <a href=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm\">
                                <i class=\"fas fa-edit me-1\"></i> Modifier
                            </a>
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_price_index");
        yield "\" class=\"btn btn-outline-light btn-sm\">
                                <i class=\"fas fa-arrow-left me-1\"></i> Retour
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class=\"p-4\">
                    <!-- Statut -->
                    <div class=\"text-center mb-4\">
                        <div class=\"status-badge ";
        // line 100
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 100, $this->source); })()), "isActive", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-active") : ("status-inactive"));
        yield "\">
                            <i class=\"fas ";
        // line 101
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 101, $this->source); })()), "isActive", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                            ";
        // line 102
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 102, $this->source); })()), "isActive", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Offre active") : ("Offre inactive"));
        yield "
                        </div>
                    </div>
                    
                    <!-- Informations -->
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-code me-2 text-primary\"></i> Type technique
                        </div>
                        <div class=\"info-value\">
                            <code class=\"type-badge\" style=\"background: #f1f5f9; padding: 0.25rem 0.5rem; border-radius: 0.5rem;\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112), "html", null, true);
        yield "</code>
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-tag me-2 text-primary\"></i> Libellé
                        </div>
                        <div class=\"info-value fw-semibold\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 120, $this->source); })()), "label", [], "any", false, false, false, 120), "html", null, true);
        yield "</div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-align-left me-2 text-primary\"></i> Description
                        </div>
                        <div class=\"info-value\">
                            ";
        // line 128
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "description", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 128, $this->source); })()), "description", [], "any", false, false, false, 128), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-money-bill-wave me-2 text-primary\"></i> Prix
                        </div>
                        <div class=\"info-value\">
                            <span class=\"price-badge\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 137, $this->source); })()), "priceFormatted", [], "any", false, false, false, 137), "html", null, true);
        yield "</span>
                            ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 138, $this->source); })()), "type", [], "any", false, false, false, 138) == "subscription")) {
            // line 139
            yield "                                <small class=\"text-muted\">/mois</small>
                            ";
        }
        // line 141
        yield "                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-sort-numeric-down me-2 text-primary\"></i> Ordre d'affichage
                        </div>
                        <div class=\"info-value\">
                            <span class=\"badge bg-secondary\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["price"] ?? null), "displayOrder", [], "any", true, true, false, 149)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 149, $this->source); })()), "displayOrder", [], "any", false, false, false, 149), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-calendar-plus me-2 text-primary\"></i> Date de création
                        </div>
                        <div class=\"info-value\">
                            ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 158, $this->source); })()), "createdAt", [], "any", false, false, false, 158), "d/m/Y à H:i:s"), "html", null, true);
        yield "
                        </div>
                    </div>
                    
                    ";
        // line 162
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 162, $this->source); })()), "updatedAt", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-calendar-edit me-2 text-primary\"></i> Dernière modification
                        </div>
                        <div class=\"info-value\">
                            ";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 168, $this->source); })()), "updatedAt", [], "any", false, false, false, 168), "d/m/Y à H:i:s"), "html", null, true);
            yield "
                        </div>
                    </div>
                    ";
        }
        // line 172
        yield "                    
                    <!-- Actions avec modal pour activation/désactivation -->
                    <div class=\"action-footer\">
                        <div>
                            <button type=\"button\" 
                                    class=\"btn ";
        // line 177
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 177, $this->source); })()), "isActive", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-warning") : ("btn-success"));
        yield " toggle-price-btn\"
                                    data-id=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178), "html", null, true);
        yield "\"
                                    data-label=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 179, $this->source); })()), "label", [], "any", false, false, false, 179), "html", null, true);
        yield "\"
                                    data-active=\"";
        // line 180
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 180, $this->source); })()), "isActive", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
                                    data-token=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 181, $this->source); })()), "id", [], "any", false, false, false, 181))), "html", null, true);
        yield "\">
                                <i class=\"fas ";
        // line 182
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 182, $this->source); })()), "isActive", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-ban") : ("fa-check-circle"));
        yield " me-1\"></i>
                                ";
        // line 183
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 183, $this->source); })()), "isActive", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "
                            </button>
                        </div>
                        <div>
                            <button type=\"button\" 
                                    class=\"btn btn-danger delete-price-btn\"
                                    data-id=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189), "html", null, true);
        yield "\"
                                    data-label=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 190, $this->source); })()), "label", [], "any", false, false, false, 190), "html", null, true);
        yield "\"
                                    data-token=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191))), "html", null, true);
        yield "\">
                                <i class=\"fas fa-trash me-1\"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer l'offre <strong id=\"deleteLabel\"></strong> ?</p>
                <div class=\"alert alert-warning mt-2\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette action est irréversible.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 259
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

        // line 260
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== MODALE SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteLabel = document.getElementById('deleteLabel');
    const deleteToken = document.getElementById('deleteToken');
    
    document.querySelectorAll('.delete-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const id = this.dataset.id;
            const label = this.dataset.label;
            const token = this.dataset.token;
            
            deleteLabel.textContent = label;
            deleteToken.value = token;
            deleteForm.action = '/super-admin/analysis-prices/' + id + '/delete';
            
            deleteModal.show();
        });
    });
    
    // ========== MODALE ACTIVATION/DÉSACTIVATION ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleModal'));
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleBtn = document.getElementById('toggleBtn');
    
    document.querySelectorAll('.toggle-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const id = this.dataset.id;
            const label = this.dataset.label;
            const isActive = this.dataset.active === 'true';
            const token = this.dataset.token;
            const newStatus = isActive ? 'désactiver' : 'activer';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong>\${newStatus}</strong> l'offre \"<strong>\${label}</strong>\" ?`;
            
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleToken.value = token;
            toggleForm.action = `/super-admin/analysis-prices/\${id}/toggle`;
            
            toggleModal.show();
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
        return "super_admin/analysis_price/show.html.twig";
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
        return array (  478 => 260,  465 => 259,  387 => 191,  383 => 190,  379 => 189,  370 => 183,  366 => 182,  362 => 181,  358 => 180,  354 => 179,  350 => 178,  346 => 177,  339 => 172,  332 => 168,  325 => 163,  323 => 162,  316 => 158,  304 => 149,  294 => 141,  290 => 139,  288 => 138,  284 => 137,  272 => 128,  261 => 120,  250 => 112,  237 => 102,  233 => 101,  229 => 100,  216 => 90,  210 => 87,  203 => 83,  193 => 75,  180 => 74,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_price/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ price.label }} - Super Admin{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .show-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
    }
    .show-header {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
    }
    .info-row {
        display: flex;
        padding: 1rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        width: 180px;
        font-weight: 600;
        color: #475569;
    }
    .info-value {
        flex: 1;
        color: #1e293b;
    }
    .price-badge {
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .action-buttons {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
    }
    .status-badge {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.8rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
    }
    .status-active {
        background: #d1fae5;
        color: #065f46;
    }
    .status-inactive {
        background: #fee2e2;
        color: #991b1b;
    }
    .action-footer {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-7\">
            <div class=\"show-card shadow-sm\">
                <div class=\"show-header p-4 text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <i class=\"fas fa-tag fa-2x mb-2\"></i>
                            <h2 class=\"h4 mb-0 fw-bold\">{{ price.label }}</h2>
                            <p class=\"mb-0 opacity-75 mt-1\">Détail de l'offre d'analyse</p>
                        </div>
                        <div class=\"action-buttons\">
                            <a href=\"{{ path('super_admin_analysis_price_edit', {'id': price.id}) }}\" class=\"btn btn-light btn-sm\">
                                <i class=\"fas fa-edit me-1\"></i> Modifier
                            </a>
                            <a href=\"{{ path('super_admin_analysis_price_index') }}\" class=\"btn btn-outline-light btn-sm\">
                                <i class=\"fas fa-arrow-left me-1\"></i> Retour
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class=\"p-4\">
                    <!-- Statut -->
                    <div class=\"text-center mb-4\">
                        <div class=\"status-badge {{ price.isActive ? 'status-active' : 'status-inactive' }}\">
                            <i class=\"fas {{ price.isActive ? 'fa-check-circle' : 'fa-ban' }} me-1\"></i>
                            {{ price.isActive ? 'Offre active' : 'Offre inactive' }}
                        </div>
                    </div>
                    
                    <!-- Informations -->
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-code me-2 text-primary\"></i> Type technique
                        </div>
                        <div class=\"info-value\">
                            <code class=\"type-badge\" style=\"background: #f1f5f9; padding: 0.25rem 0.5rem; border-radius: 0.5rem;\">{{ price.type }}</code>
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-tag me-2 text-primary\"></i> Libellé
                        </div>
                        <div class=\"info-value fw-semibold\">{{ price.label }}</div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-align-left me-2 text-primary\"></i> Description
                        </div>
                        <div class=\"info-value\">
                            {{ price.description|default('Aucune description')|nl2br }}
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-money-bill-wave me-2 text-primary\"></i> Prix
                        </div>
                        <div class=\"info-value\">
                            <span class=\"price-badge\">{{ price.priceFormatted }}</span>
                            {% if price.type == 'subscription' %}
                                <small class=\"text-muted\">/mois</small>
                            {% endif %}
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-sort-numeric-down me-2 text-primary\"></i> Ordre d'affichage
                        </div>
                        <div class=\"info-value\">
                            <span class=\"badge bg-secondary\">{{ price.displayOrder|default('Non défini') }}</span>
                        </div>
                    </div>
                    
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-calendar-plus me-2 text-primary\"></i> Date de création
                        </div>
                        <div class=\"info-value\">
                            {{ price.createdAt|date('d/m/Y à H:i:s') }}
                        </div>
                    </div>
                    
                    {% if price.updatedAt %}
                    <div class=\"info-row\">
                        <div class=\"info-label\">
                            <i class=\"fas fa-calendar-edit me-2 text-primary\"></i> Dernière modification
                        </div>
                        <div class=\"info-value\">
                            {{ price.updatedAt|date('d/m/Y à H:i:s') }}
                        </div>
                    </div>
                    {% endif %}
                    
                    <!-- Actions avec modal pour activation/désactivation -->
                    <div class=\"action-footer\">
                        <div>
                            <button type=\"button\" 
                                    class=\"btn {{ price.isActive ? 'btn-warning' : 'btn-success' }} toggle-price-btn\"
                                    data-id=\"{{ price.id }}\"
                                    data-label=\"{{ price.label }}\"
                                    data-active=\"{{ price.isActive ? 'true' : 'false' }}\"
                                    data-token=\"{{ csrf_token('toggle' ~ price.id) }}\">
                                <i class=\"fas {{ price.isActive ? 'fa-ban' : 'fa-check-circle' }} me-1\"></i>
                                {{ price.isActive ? 'Désactiver' : 'Activer' }}
                            </button>
                        </div>
                        <div>
                            <button type=\"button\" 
                                    class=\"btn btn-danger delete-price-btn\"
                                    data-id=\"{{ price.id }}\"
                                    data-label=\"{{ price.label }}\"
                                    data-token=\"{{ csrf_token('delete' ~ price.id) }}\">
                                <i class=\"fas fa-trash me-1\"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exchange-alt me-2\"></i>
                    Changer le statut
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmation suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer l'offre <strong id=\"deleteLabel\"></strong> ?</p>
                <div class=\"alert alert-warning mt-2\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette action est irréversible.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== MODALE SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteLabel = document.getElementById('deleteLabel');
    const deleteToken = document.getElementById('deleteToken');
    
    document.querySelectorAll('.delete-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const id = this.dataset.id;
            const label = this.dataset.label;
            const token = this.dataset.token;
            
            deleteLabel.textContent = label;
            deleteToken.value = token;
            deleteForm.action = '/super-admin/analysis-prices/' + id + '/delete';
            
            deleteModal.show();
        });
    });
    
    // ========== MODALE ACTIVATION/DÉSACTIVATION ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleModal'));
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleBtn = document.getElementById('toggleBtn');
    
    document.querySelectorAll('.toggle-price-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const id = this.dataset.id;
            const label = this.dataset.label;
            const isActive = this.dataset.active === 'true';
            const token = this.dataset.token;
            const newStatus = isActive ? 'désactiver' : 'activer';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong>\${newStatus}</strong> l'offre \"<strong>\${label}</strong>\" ?`;
            
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            
            toggleToken.value = token;
            toggleForm.action = `/super-admin/analysis-prices/\${id}/toggle`;
            
            toggleModal.show();
        });
    });
});
</script>
{% endblock %}", "super_admin/analysis_price/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_price\\show.html.twig");
    }
}
