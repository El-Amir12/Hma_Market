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

/* company/analysis/new.html.twig */
class __TwigTemplate_1c2f5a201859d484d7a2cf6fc8d2482b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/analysis/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/analysis/new.html.twig"));

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

        yield "Nouvelle analyse - HMA Market";
        
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
    .price-card {
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid #e5e7eb;
        border-radius: 1rem;
    }
    .price-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    .price-card.selected {
        border-color: #0463f1;
        background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 100%);
    }
    .price-card .price {
        font-size: 1.3rem;
        font-weight: bold;
        color: #0463f1;
    }
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
    }
    .period-warning {
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }
    .period-error {
        background: #fee2e2;
        border-left: 4px solid #dc2626;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }
    .modal-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
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

        // line 60
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouvelle analyse</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle me-2 text-primary\"></i>
                Nouvelle analyse
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Commandez une analyse approfondie de vos données
            </p>
        </div>
        <div>
            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Formulaire de demande
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_start', ["attr" => ["id" => "analysisForm"]]);
        yield "
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'errors');
        yield "
                    
                    <!-- Type d'analyse - Caché car on utilise des cartes -->
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "type", [], "any", false, false, false, 108), 'widget', ["attr" => ["style" => "display: none;", "id" => "typeInput"]]);
        yield "
                    
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold\">📊 Type d'analyse</label>
                        <div class=\"row g-3\" id=\"typeCards\">
                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 114
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 114) != "subscription")) {
                // line 115
                yield "                                <div class=\"col-md-6\">
                                    <div class=\"price-card text-center p-3\" 
                                         data-type=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 117), "html", null, true);
                yield "\" 
                                         data-price=\"";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 118), "html", null, true);
                yield "\"
                                         data-label=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 119), "html", null, true);
                yield "\">
                                        ";
                // line 120
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 120) == "standard")) {
                    // line 121
                    yield "                                            <i class=\"fas fa-file-excel fa-3x text-success mb-2\"></i>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 122
$context["price"], "type", [], "any", false, false, false, 122) == "powerbi")) {
                    // line 123
                    yield "                                            <i class=\"fas fa-chart-line fa-3x text-info mb-2\"></i>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 124
$context["price"], "type", [], "any", false, false, false, 124) == "custom")) {
                    // line 125
                    yield "                                            <i class=\"fas fa-crown fa-3x text-warning mb-2\"></i>
                                        ";
                } else {
                    // line 127
                    yield "                                            <i class=\"fas fa-chart-simple fa-3x text-secondary mb-2\"></i>
                                        ";
                }
                // line 129
                yield "                                        <h6 class=\"mb-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 129), "html", null, true);
                yield "</h6>
                                        <div class=\"price\">
                                            ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 131), 0, ",", " "), "html", null, true);
                yield " 
                                            <small>FCFA</small>
                                        </div>
                                        <small class=\"text-muted\">";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 134)), "truncate", [50], "method", false, false, false, 134), "html", null, true);
                yield "</small>
                                    </div>
                                </div>
                                ";
            }
            // line 138
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                        </div>
                        <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'analyse.
                        </div>
                    </div>

                    <!-- Période -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "period_start", [], "any", false, false, false, 148), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📅 Date de début"]);
        yield "
                            ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "period_start", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "form-control", "id" => "periodStart"]]);
        yield "
                            <small class=\"text-muted\">Maximum 365 jours (1 an)</small>
                            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "period_start", [], "any", false, false, false, 151), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "period_end", [], "any", false, false, false, 154), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📅 Date de fin"]);
        yield "
                            ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "period_end", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => "form-control", "id" => "periodEnd"]]);
        yield "
                            ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "period_end", [], "any", false, false, false, 156), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Période warning/error -->
                    <div id=\"periodMessage\" style=\"display: none;\" class=\"mb-3\"></div>

                    <!-- Notes -->
                    <div class=\"mb-4\">
                        ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "notes", [], "any", false, false, false, 165), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📝 Notes / Instructions"]);
        yield "
                        ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "notes", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Informations complémentaires pour l'analyse..."]]);
        yield "
                        <small class=\"text-muted\">Ces notes seront transmises à l'équipe d'analyse</small>
                        ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "notes", [], "any", false, false, false, 168), 'errors');
        yield "
                    </div>

                    <!-- Récapitulatif -->
                    <div class=\"info-card mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                            <div>
                                <strong>📋 Récapitulatif</strong><br>
                                <small id=\"recapType\" class=\"text-muted\">Aucun type sélectionné</small><br>
                                <small id=\"recapPeriod\" class=\"text-muted\">Période non définie</small>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"text-muted small\">Montant total</div>
                                <div class=\"fs-3 fw-bold text-primary\" id=\"totalAmount\">0 FCFA</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"alert alert-info\">
                        <div class=\"d-flex gap-3\">
                            <i class=\"fas fa-info-circle fa-2x\"></i>
                            <div>
                                <strong class=\"d-block\">📌 Comment ça marche ?</strong>
                                <small>
                                    1. Remplissez ce formulaire de demande.<br>
                                    2. Notre équipe vous contactera pour finaliser le paiement.<br>
                                    3. Une fois le paiement confirmé, l'analyse sera générée.<br>
                                    4. Vous recevrez un email avec le lien de téléchargement.
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-2 mt-4\">
                        <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"button\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                            <i class=\"fas fa-paper-plane me-1\"></i> Envoyer la demande
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

<!-- MODAL CONFIRMATION -->
<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-question-circle me-2\"></i>
                    Confirmation de la demande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"modal-icon bg-primary bg-opacity-10\">
                    <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                </div>
                <p id=\"confirmMessage\" class=\"mb-3\"></p>
                <div class=\"alert alert-info text-start small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Notre équipe vous contactera sous 24-48h pour finaliser votre commande.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmSubmitBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 249
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

        // line 250
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeCards = document.querySelectorAll('.price-card');
    const typeInput = document.getElementById('analysis_request_type');
    const submitBtn = document.getElementById('submitBtn');
    const typeError = document.querySelector('.type-error');
    const periodStart = document.getElementById('analysis_request_period_start');
    const periodEnd = document.getElementById('analysis_request_period_end');
    const recapType = document.getElementById('recapType');
    const recapPeriod = document.getElementById('recapPeriod');
    const totalAmountSpan = document.getElementById('totalAmount');
    const periodMessage = document.getElementById('periodMessage');
    const form = document.getElementById('analysisForm');
    
    const MAX_PERIOD_DAYS = 365;
    
    let selectedType = null;
    let selectedPrice = 0;
    let selectedLabel = '';
    
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
    const confirmSubmitBtn = document.getElementById('confirmSubmitBtn');
    
    // Sélection du type
    typeCards.forEach(card => {
        card.addEventListener('click', function() {
            typeCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedType = this.dataset.type;
            selectedPrice = parseInt(this.dataset.price);
            selectedLabel = this.dataset.label;
            
            if (typeInput) {
                typeInput.value = selectedType;
            }
            
            typeError.style.display = 'none';
            submitBtn.disabled = false;
            
            recapType.innerHTML = `<strong>\${selectedLabel}</strong> - \${selectedPrice.toLocaleString()} FCFA`;
            updateTotalAmount();
        });
    });
    
    function updateTotalAmount() {
        if (selectedPrice > 0) {
            totalAmountSpan.textContent = selectedPrice.toLocaleString() + ' FCFA';
        } else {
            totalAmountSpan.textContent = '0 FCFA';
        }
    }
    
    function validatePeriod() {
        const start = periodStart ? periodStart.value : null;
        const end = periodEnd ? periodEnd.value : null;
        
        if (start && end) {
            const startDate = new Date(start);
            const endDate = new Date(end);
            const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (diffDays > MAX_PERIOD_DAYS) {
                periodMessage.className = 'period-error mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Période trop longue !</strong><br>
                    La période sélectionnée couvre \${diffDays} jours. La période maximale est de \${MAX_PERIOD_DAYS} jours (1 an).
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = true;
                return false;
            }
            
            if (endDate > today) {
                periodMessage.className = 'period-error mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Date invalide !</strong><br>
                    La date de fin ne peut pas être dans le futur.
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = true;
                return false;
            }
            
            if (startDate > today) {
                periodMessage.className = 'period-error mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Date invalide !</strong><br>
                    La date de début ne peut pas être dans le futur.
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = true;
                return false;
            }
            
            if (diffDays > 90 && diffDays <= MAX_PERIOD_DAYS) {
                periodMessage.className = 'period-warning mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>ℹ️ Période longue</strong><br>
                    Période de \${diffDays} jours. L'analyse sera plus volumineuse et pourrait prendre plus de temps.
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = false;
            } else {
                periodMessage.style.display = 'none';
                submitBtn.disabled = false;
            }
            
            recapPeriod.innerHTML = `<strong>\${startDate.toLocaleDateString('fr-FR')}</strong> au <strong>\${endDate.toLocaleDateString('fr-FR')}</strong> (\${diffDays} jours)`;
            return true;
        } else {
            periodMessage.style.display = 'none';
            recapPeriod.innerHTML = 'Période non définie';
            return false;
        }
    }
    
    if (periodStart) periodStart.addEventListener('change', validatePeriod);
    if (periodEnd) periodEnd.addEventListener('change', validatePeriod);
    validatePeriod();
    
    // Bouton d'envoi
    submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (!selectedType) {
            typeError.style.display = 'block';
            typeError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const start = periodStart ? periodStart.value : null;
        const end = periodEnd ? periodEnd.value : null;
        
        if (!start || !end) {
            periodMessage.className = 'period-error mb-3';
            periodMessage.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période incomplète !</strong><br>
                Veuillez sélectionner une date de début et une date de fin.
            `;
            periodMessage.style.display = 'block';
            periodMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const startDate = new Date(start);
        const endDate = new Date(end);
        const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
        
        if (diffDays > MAX_PERIOD_DAYS) {
            periodMessage.className = 'period-error mb-3';
            periodMessage.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période trop longue !</strong><br>
                La période sélectionnée couvre \${diffDays} jours. La période maximale est de \${MAX_PERIOD_DAYS} jours (1 an).
            `;
            periodMessage.style.display = 'block';
            periodMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const confirmMessage = document.getElementById('confirmMessage');
        confirmMessage.innerHTML = `
            <strong>Confirmez-vous votre demande d'analyse ?</strong><br><br>
            <div class=\"text-start\">
                <div class=\"mb-2\">
                    <i class=\"fas fa-tag text-primary me-2\"></i>
                    <strong>Type :</strong> \${selectedLabel}
                </div>
                <div class=\"mb-2\">
                    <i class=\"fas fa-calendar text-primary me-2\"></i>
                    <strong>Période :</strong> \${startDate.toLocaleDateString('fr-FR')} au \${endDate.toLocaleDateString('fr-FR')}
                </div>
                <div class=\"mb-2\">
                    <i class=\"fas fa-hourglass-half text-primary me-2\"></i>
                    <strong>Durée :</strong> \${diffDays} jours
                </div>
                <div>
                    <i class=\"fas fa-money-bill-wave text-primary me-2\"></i>
                    <strong>Montant :</strong> \${selectedPrice.toLocaleString()} FCFA
                </div>
            </div>
        `;
        
        confirmModal.show();
    });
    
    // Soumission du formulaire
    confirmSubmitBtn.addEventListener('click', function() {
        confirmSubmitBtn.disabled = true;
        confirmSubmitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Envoi en cours...';
        form.submit();
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
        return "company/analysis/new.html.twig";
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
        return array (  483 => 250,  470 => 249,  421 => 210,  410 => 202,  373 => 168,  368 => 166,  364 => 165,  352 => 156,  348 => 155,  344 => 154,  338 => 151,  333 => 149,  329 => 148,  318 => 139,  312 => 138,  305 => 134,  299 => 131,  293 => 129,  289 => 127,  285 => 125,  283 => 124,  280 => 123,  278 => 122,  275 => 121,  273 => 120,  269 => 119,  265 => 118,  261 => 117,  257 => 115,  254 => 114,  250 => 113,  242 => 108,  236 => 105,  232 => 104,  213 => 88,  193 => 71,  185 => 66,  177 => 60,  164 => 59,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/company/analysis/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouvelle analyse - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .price-card {
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid #e5e7eb;
        border-radius: 1rem;
    }
    .price-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    .price-card.selected {
        border-color: #0463f1;
        background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 100%);
    }
    .price-card .price {
        font-size: 1.3rem;
        font-weight: bold;
        color: #0463f1;
    }
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
    }
    .period-warning {
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }
    .period-error {
        background: #fee2e2;
        border-left: 4px solid #dc2626;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }
    .modal-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
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
                        <a href=\"{{ path('company_analysis_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Nouvelle analyse</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-plus-circle me-2 text-primary\"></i>
                Nouvelle analyse
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Commandez une analyse approfondie de vos données
            </p>
        </div>
        <div>
            <a href=\"{{ path('company_analysis_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Formulaire de demande
                    </h5>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'id': 'analysisForm'}}) }}
                    {{ form_errors(form) }}
                    
                    <!-- Type d'analyse - Caché car on utilise des cartes -->
                    {{ form_widget(form.type, {'attr': {'style': 'display: none;', 'id': 'typeInput'}}) }}
                    
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold\">📊 Type d'analyse</label>
                        <div class=\"row g-3\" id=\"typeCards\">
                            {% for price in prices %}
                                {% if price.type != 'subscription' %}
                                <div class=\"col-md-6\">
                                    <div class=\"price-card text-center p-3\" 
                                         data-type=\"{{ price.type }}\" 
                                         data-price=\"{{ price.price }}\"
                                         data-label=\"{{ price.label }}\">
                                        {% if price.type == 'standard' %}
                                            <i class=\"fas fa-file-excel fa-3x text-success mb-2\"></i>
                                        {% elseif price.type == 'powerbi' %}
                                            <i class=\"fas fa-chart-line fa-3x text-info mb-2\"></i>
                                        {% elseif price.type == 'custom' %}
                                            <i class=\"fas fa-crown fa-3x text-warning mb-2\"></i>
                                        {% else %}
                                            <i class=\"fas fa-chart-simple fa-3x text-secondary mb-2\"></i>
                                        {% endif %}
                                        <h6 class=\"mb-1\">{{ price.label }}</h6>
                                        <div class=\"price\">
                                            {{ price.price|number_format(0, ',', ' ') }} 
                                            <small>FCFA</small>
                                        </div>
                                        <small class=\"text-muted\">{{ price.description|u.truncate(50) }}</small>
                                    </div>
                                </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                        <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'analyse.
                        </div>
                    </div>

                    <!-- Période -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            {{ form_label(form.period_start, '📅 Date de début', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(form.period_start, {'attr': {'class': 'form-control', 'id': 'periodStart'}}) }}
                            <small class=\"text-muted\">Maximum 365 jours (1 an)</small>
                            {{ form_errors(form.period_start) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_label(form.period_end, '📅 Date de fin', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(form.period_end, {'attr': {'class': 'form-control', 'id': 'periodEnd'}}) }}
                            {{ form_errors(form.period_end) }}
                        </div>
                    </div>

                    <!-- Période warning/error -->
                    <div id=\"periodMessage\" style=\"display: none;\" class=\"mb-3\"></div>

                    <!-- Notes -->
                    <div class=\"mb-4\">
                        {{ form_label(form.notes, '📝 Notes / Instructions', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.notes, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Informations complémentaires pour l\\'analyse...'}}) }}
                        <small class=\"text-muted\">Ces notes seront transmises à l'équipe d'analyse</small>
                        {{ form_errors(form.notes) }}
                    </div>

                    <!-- Récapitulatif -->
                    <div class=\"info-card mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                            <div>
                                <strong>📋 Récapitulatif</strong><br>
                                <small id=\"recapType\" class=\"text-muted\">Aucun type sélectionné</small><br>
                                <small id=\"recapPeriod\" class=\"text-muted\">Période non définie</small>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"text-muted small\">Montant total</div>
                                <div class=\"fs-3 fw-bold text-primary\" id=\"totalAmount\">0 FCFA</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"alert alert-info\">
                        <div class=\"d-flex gap-3\">
                            <i class=\"fas fa-info-circle fa-2x\"></i>
                            <div>
                                <strong class=\"d-block\">📌 Comment ça marche ?</strong>
                                <small>
                                    1. Remplissez ce formulaire de demande.<br>
                                    2. Notre équipe vous contactera pour finaliser le paiement.<br>
                                    3. Une fois le paiement confirmé, l'analyse sera générée.<br>
                                    4. Vous recevrez un email avec le lien de téléchargement.
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-2 mt-4\">
                        <a href=\"{{ path('company_analysis_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-1\"></i> Annuler
                        </a>
                        <button type=\"button\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                            <i class=\"fas fa-paper-plane me-1\"></i> Envoyer la demande
                        </button>
                    </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMATION -->
<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-question-circle me-2\"></i>
                    Confirmation de la demande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"modal-icon bg-primary bg-opacity-10\">
                    <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                </div>
                <p id=\"confirmMessage\" class=\"mb-3\"></p>
                <div class=\"alert alert-info text-start small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Notre équipe vous contactera sous 24-48h pour finaliser votre commande.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmSubmitBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeCards = document.querySelectorAll('.price-card');
    const typeInput = document.getElementById('analysis_request_type');
    const submitBtn = document.getElementById('submitBtn');
    const typeError = document.querySelector('.type-error');
    const periodStart = document.getElementById('analysis_request_period_start');
    const periodEnd = document.getElementById('analysis_request_period_end');
    const recapType = document.getElementById('recapType');
    const recapPeriod = document.getElementById('recapPeriod');
    const totalAmountSpan = document.getElementById('totalAmount');
    const periodMessage = document.getElementById('periodMessage');
    const form = document.getElementById('analysisForm');
    
    const MAX_PERIOD_DAYS = 365;
    
    let selectedType = null;
    let selectedPrice = 0;
    let selectedLabel = '';
    
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
    const confirmSubmitBtn = document.getElementById('confirmSubmitBtn');
    
    // Sélection du type
    typeCards.forEach(card => {
        card.addEventListener('click', function() {
            typeCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedType = this.dataset.type;
            selectedPrice = parseInt(this.dataset.price);
            selectedLabel = this.dataset.label;
            
            if (typeInput) {
                typeInput.value = selectedType;
            }
            
            typeError.style.display = 'none';
            submitBtn.disabled = false;
            
            recapType.innerHTML = `<strong>\${selectedLabel}</strong> - \${selectedPrice.toLocaleString()} FCFA`;
            updateTotalAmount();
        });
    });
    
    function updateTotalAmount() {
        if (selectedPrice > 0) {
            totalAmountSpan.textContent = selectedPrice.toLocaleString() + ' FCFA';
        } else {
            totalAmountSpan.textContent = '0 FCFA';
        }
    }
    
    function validatePeriod() {
        const start = periodStart ? periodStart.value : null;
        const end = periodEnd ? periodEnd.value : null;
        
        if (start && end) {
            const startDate = new Date(start);
            const endDate = new Date(end);
            const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (diffDays > MAX_PERIOD_DAYS) {
                periodMessage.className = 'period-error mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Période trop longue !</strong><br>
                    La période sélectionnée couvre \${diffDays} jours. La période maximale est de \${MAX_PERIOD_DAYS} jours (1 an).
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = true;
                return false;
            }
            
            if (endDate > today) {
                periodMessage.className = 'period-error mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Date invalide !</strong><br>
                    La date de fin ne peut pas être dans le futur.
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = true;
                return false;
            }
            
            if (startDate > today) {
                periodMessage.className = 'period-error mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Date invalide !</strong><br>
                    La date de début ne peut pas être dans le futur.
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = true;
                return false;
            }
            
            if (diffDays > 90 && diffDays <= MAX_PERIOD_DAYS) {
                periodMessage.className = 'period-warning mb-3';
                periodMessage.innerHTML = `
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>ℹ️ Période longue</strong><br>
                    Période de \${diffDays} jours. L'analyse sera plus volumineuse et pourrait prendre plus de temps.
                `;
                periodMessage.style.display = 'block';
                submitBtn.disabled = false;
            } else {
                periodMessage.style.display = 'none';
                submitBtn.disabled = false;
            }
            
            recapPeriod.innerHTML = `<strong>\${startDate.toLocaleDateString('fr-FR')}</strong> au <strong>\${endDate.toLocaleDateString('fr-FR')}</strong> (\${diffDays} jours)`;
            return true;
        } else {
            periodMessage.style.display = 'none';
            recapPeriod.innerHTML = 'Période non définie';
            return false;
        }
    }
    
    if (periodStart) periodStart.addEventListener('change', validatePeriod);
    if (periodEnd) periodEnd.addEventListener('change', validatePeriod);
    validatePeriod();
    
    // Bouton d'envoi
    submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (!selectedType) {
            typeError.style.display = 'block';
            typeError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const start = periodStart ? periodStart.value : null;
        const end = periodEnd ? periodEnd.value : null;
        
        if (!start || !end) {
            periodMessage.className = 'period-error mb-3';
            periodMessage.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période incomplète !</strong><br>
                Veuillez sélectionner une date de début et une date de fin.
            `;
            periodMessage.style.display = 'block';
            periodMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const startDate = new Date(start);
        const endDate = new Date(end);
        const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
        
        if (diffDays > MAX_PERIOD_DAYS) {
            periodMessage.className = 'period-error mb-3';
            periodMessage.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période trop longue !</strong><br>
                La période sélectionnée couvre \${diffDays} jours. La période maximale est de \${MAX_PERIOD_DAYS} jours (1 an).
            `;
            periodMessage.style.display = 'block';
            periodMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const confirmMessage = document.getElementById('confirmMessage');
        confirmMessage.innerHTML = `
            <strong>Confirmez-vous votre demande d'analyse ?</strong><br><br>
            <div class=\"text-start\">
                <div class=\"mb-2\">
                    <i class=\"fas fa-tag text-primary me-2\"></i>
                    <strong>Type :</strong> \${selectedLabel}
                </div>
                <div class=\"mb-2\">
                    <i class=\"fas fa-calendar text-primary me-2\"></i>
                    <strong>Période :</strong> \${startDate.toLocaleDateString('fr-FR')} au \${endDate.toLocaleDateString('fr-FR')}
                </div>
                <div class=\"mb-2\">
                    <i class=\"fas fa-hourglass-half text-primary me-2\"></i>
                    <strong>Durée :</strong> \${diffDays} jours
                </div>
                <div>
                    <i class=\"fas fa-money-bill-wave text-primary me-2\"></i>
                    <strong>Montant :</strong> \${selectedPrice.toLocaleString()} FCFA
                </div>
            </div>
        `;
        
        confirmModal.show();
    });
    
    // Soumission du formulaire
    confirmSubmitBtn.addEventListener('click', function() {
        confirmSubmitBtn.disabled = true;
        confirmSubmitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Envoi en cours...';
        form.submit();
    });
});
</script>
{% endblock %}", "company/analysis/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\company\\analysis\\new.html.twig");
    }
}
