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

/* super_admin/analysis/new.html.twig */
class __TwigTemplate_c71b2e77463bfe68f93f2176f4deec39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/new.html.twig"));

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

        yield "Nouvelle analyse - ";
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
        font-size: 1.5rem;
        font-weight: bold;
        color: #0463f1;
    }
    .price-card .price small {
        font-size: 0.8rem;
        font-weight: normal;
    }
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    .period-warning {
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        // line 49
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
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
        </div>
        <div>
            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Informations entreprise -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-building me-2 text-primary\"></i>
                Entreprise concernée
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-2 text-center\">
                    <div class=\"rounded-circle bg-primary bg-opacity-10 p-3 d-inline-block\">
                        <i class=\"fas fa-building fa-3x text-primary\"></i>
                    </div>
                </div>
                <div class=\"col-md-10\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Nom de l'entreprise</small>
                                <div class=\"fw-bold fs-5\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 94, $this->source); })()), "companyName", [], "any", false, false, false, 94), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">N° Abonnement</small>
                                <div class=\"fw-bold\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 100, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 100), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Type</small>
                                <div>";
        // line 106
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106) == "restaurant")) ? ("🍽️ Restaurant") : ("🛒 Commerce"));
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Email</small>
                                <div>";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 112, $this->source); })()), "email", [], "any", false, false, false, 112), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-cog me-2 text-primary\"></i>
                Paramètres de l'analyse
            </h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 130
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_start', ["attr" => ["id" => "analysisForm"]]);
        yield "
            
            <!-- Type d'analyse -->
            <div class=\"mb-4\">
                <label class=\"form-label fw-bold\">📊 Type d'analyse</label>
                <div class=\"row g-3\" id=\"typeCards\">
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"standard\" data-price=\"50000\">
                            <i class=\"fas fa-file-excel fa-3x text-success mb-2\"></i>
                            <h6 class=\"mb-1\">Analyse Standard</h6>
                            <div class=\"price\">50 000 <small>FCFA</small></div>
                            <small class=\"text-muted\">Export Excel complet</small>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"powerbi\" data-price=\"150000\">
                            <i class=\"fas fa-chart-line fa-3x text-info mb-2\"></i>
                            <h6 class=\"mb-1\">Analyse Power BI</h6>
                            <div class=\"price\">150 000 <small>FCFA</small></div>
                            <small class=\"text-muted\">+ Dashboard interactif</small>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"custom\" data-price=\"300000\">
                            <i class=\"fas fa-crown fa-3x text-warning mb-2\"></i>
                            <h6 class=\"mb-1\">Analyse sur mesure</h6>
                            <div class=\"price\">300 000 <small>FCFA</small></div>
                            <small class=\"text-muted\">+ Accompagnement</small>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"subscription\" data-price=\"100000\">
                            <i class=\"fas fa-calendar-alt fa-3x text-primary mb-2\"></i>
                            <h6 class=\"mb-1\">Abonnement mensuel</h6>
                            <div class=\"price\">100 000 <small>FCFA/mois</small></div>
                            <small class=\"text-muted\">Automatique chaque mois</small>
                        </div>
                    </div>
                </div>
                <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'analyse.
                </div>
                ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "type", [], "any", false, false, false, 172), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
            </div>
            
            <!-- Période -->
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-6\">
                    ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "period_start", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "period_start", [], "any", false, false, false, 179), 'widget');
        yield "
                    ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "period_start", [], "any", false, false, false, 180), 'errors');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "period_end", [], "any", false, false, false, 183), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "period_end", [], "any", false, false, false, 184), 'widget');
        yield "
                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "period_end", [], "any", false, false, false, 185), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Période warning -->
            <div class=\"period-warning\" id=\"periodWarning\" style=\"display: none;\">
                <i class=\"fas fa-info-circle me-2\"></i>
                <span id=\"periodWarningText\"></span>
            </div>
            
            <!-- Notes -->
            <div class=\"mb-4\">
                ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "notes", [], "any", false, false, false, 197), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "notes", [], "any", false, false, false, 198), 'widget');
        yield "
                ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "notes", [], "any", false, false, false, 199), 'errors');
        yield "
                <small class=\"text-muted\">Ces notes seront transmises à l'équipe d'analyse</small>
            </div>
            
            <!-- Récapitulatif -->
            <div class=\"info-card\">
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
            
            <div class=\"alert alert-warning mt-3\">
                <div class=\"d-flex gap-3\">
                    <i class=\"fas fa-info-circle fa-2x\"></i>
                    <div>
                        <strong class=\"d-block\">📌 Important</strong>
                        <small>
                            - L'analyse sera disponible après confirmation du paiement.<br>
                            - Le lien de paiement sera généré automatiquement.<br>
                            - Un email sera envoyé à l'entreprise avec le lien de téléchargement.
                        </small>
                    </div>
                </div>
            </div>
            
            <div class=\"d-flex justify-content-end gap-2 mt-4 pt-3 border-top\">
                <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                    <i class=\"fas fa-save me-1\"></i> Créer la demande
                </button>
            </div>
            
            ";
        // line 241
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 247
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

        // line 248
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeCards = document.querySelectorAll('.price-card');
    const typeInput = document.querySelector('#";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "type", [], "any", false, false, false, 252), "vars", [], "any", false, false, false, 252), "id", [], "any", false, false, false, 252), "html", null, true);
        yield "');
    const submitBtn = document.getElementById('submitBtn');
    const typeError = document.querySelector('.type-error');
    const periodStart = document.querySelector('#";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "period_start", [], "any", false, false, false, 255), "vars", [], "any", false, false, false, 255), "id", [], "any", false, false, false, 255), "html", null, true);
        yield "');
    const periodEnd = document.querySelector('#";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "period_end", [], "any", false, false, false, 256), "vars", [], "any", false, false, false, 256), "id", [], "any", false, false, false, 256), "html", null, true);
        yield "');
    const recapType = document.getElementById('recapType');
    const recapPeriod = document.getElementById('recapPeriod');
    const totalAmountSpan = document.getElementById('totalAmount');
    const periodWarning = document.getElementById('periodWarning');
    const periodWarningText = document.getElementById('periodWarningText');
    
    let selectedType = null;
    let selectedPrice = 0;
    
    // Sélection du type
    typeCards.forEach(card => {
        card.addEventListener('click', function() {
            typeCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedType = this.dataset.type;
            selectedPrice = parseInt(this.dataset.price);
            typeInput.value = selectedType;
            typeError.style.display = 'none';
            submitBtn.disabled = false;
            
            // Mise à jour récapitulatif
            const typeLabel = this.querySelector('h6').textContent;
            recapType.innerHTML = `<strong>\${typeLabel}</strong> - \${selectedPrice.toLocaleString()} FCFA`;
            updateTotalAmount();
        });
    });
    
    // Validation des dates
    function validateDates() {
        const start = periodStart.value;
        const end = periodEnd.value;
        
        if (start && end) {
            const startDate = new Date(start);
            const endDate = new Date(end);
            const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            
            if (diffDays > 365) {
                periodWarning.style.display = 'block';
                periodWarningText.innerHTML = `⚠️ La période sélectionnée couvre \${diffDays} jours. Pour les analyses sur une longue période, des frais supplémentaires peuvent s'appliquer. Contactez le support.`;
            } else if (diffDays > 90) {
                periodWarning.style.display = 'block';
                periodWarningText.innerHTML = `ℹ️ Période de \${diffDays} jours. L'analyse sera plus volumineuse.`;
            } else {
                periodWarning.style.display = 'none';
            }
            
            recapPeriod.innerHTML = `<strong>\${new Date(start).toLocaleDateString('fr-FR')}</strong> au <strong>\${new Date(end).toLocaleDateString('fr-FR')}</strong> (\${diffDays} jours)`;
        } else if (start) {
            recapPeriod.innerHTML = `À partir du <strong>\${new Date(start).toLocaleDateString('fr-FR')}</strong>`;
        } else if (end) {
            recapPeriod.innerHTML = `Jusqu'au <strong>\${new Date(end).toLocaleDateString('fr-FR')}</strong>`;
        } else {
            recapPeriod.innerHTML = 'Période non définie';
        }
        
        updateTotalAmount();
    }
    
    function updateTotalAmount() {
        if (selectedPrice > 0) {
            totalAmountSpan.textContent = selectedPrice.toLocaleString() + ' FCFA';
        } else {
            totalAmountSpan.textContent = '0 FCFA';
        }
    }
    
    periodStart?.addEventListener('change', validateDates);
    periodEnd?.addEventListener('change', validateDates);
    
    validateDates();
    
    // Confirmation avant soumission
    document.getElementById('analysisForm').addEventListener('submit', function(e) {
        if (!selectedType) {
            e.preventDefault();
            typeError.style.display = 'block';
            typeError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }
        
        const start = periodStart.value;
        const end = periodEnd.value;
        
        if (!start || !end) {
            e.preventDefault();
            alert('Veuillez sélectionner une période complète.');
            return false;
        }
        
        const typeLabel = document.querySelector('.price-card.selected h6').textContent;
        const message = `Confirmez la création de l'analyse suivante :\\n\\n` +
                       `📊 Type: \${typeLabel}\\n` +
                       `📅 Période: \${new Date(start).toLocaleDateString('fr-FR')} au \${new Date(end).toLocaleDateString('fr-FR')}\\n` +
                       `💰 Montant: \${selectedPrice.toLocaleString()} FCFA\\n\\n` +
                       `Un lien de paiement sera généré pour l'entreprise.`;
        
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
        return "super_admin/analysis/new.html.twig";
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
        return array (  461 => 256,  457 => 255,  451 => 252,  444 => 248,  431 => 247,  415 => 241,  404 => 233,  367 => 199,  363 => 198,  359 => 197,  344 => 185,  340 => 184,  336 => 183,  330 => 180,  326 => 179,  322 => 178,  313 => 172,  268 => 130,  247 => 112,  238 => 106,  229 => 100,  220 => 94,  191 => 68,  175 => 55,  167 => 49,  154 => 48,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouvelle analyse - {{ company.companyName }}{% endblock %}

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
        font-size: 1.5rem;
        font-weight: bold;
        color: #0463f1;
    }
    .price-card .price small {
        font-size: 0.8rem;
        font-weight: normal;
    }
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    .period-warning {
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('super_admin_analysis_index') }}\" class=\"text-decoration-none\">
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
        </div>
        <div>
            <a href=\"{{ path('super_admin_analysis_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Informations entreprise -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-building me-2 text-primary\"></i>
                Entreprise concernée
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-2 text-center\">
                    <div class=\"rounded-circle bg-primary bg-opacity-10 p-3 d-inline-block\">
                        <i class=\"fas fa-building fa-3x text-primary\"></i>
                    </div>
                </div>
                <div class=\"col-md-10\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Nom de l'entreprise</small>
                                <div class=\"fw-bold fs-5\">{{ company.companyName }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">N° Abonnement</small>
                                <div class=\"fw-bold\">{{ company.subscriptionNumber }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Type</small>
                                <div>{{ company.type == 'restaurant' ? '🍽️ Restaurant' : '🛒 Commerce' }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Email</small>
                                <div>{{ company.email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-cog me-2 text-primary\"></i>
                Paramètres de l'analyse
            </h5>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'id': 'analysisForm'}}) }}
            
            <!-- Type d'analyse -->
            <div class=\"mb-4\">
                <label class=\"form-label fw-bold\">📊 Type d'analyse</label>
                <div class=\"row g-3\" id=\"typeCards\">
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"standard\" data-price=\"50000\">
                            <i class=\"fas fa-file-excel fa-3x text-success mb-2\"></i>
                            <h6 class=\"mb-1\">Analyse Standard</h6>
                            <div class=\"price\">50 000 <small>FCFA</small></div>
                            <small class=\"text-muted\">Export Excel complet</small>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"powerbi\" data-price=\"150000\">
                            <i class=\"fas fa-chart-line fa-3x text-info mb-2\"></i>
                            <h6 class=\"mb-1\">Analyse Power BI</h6>
                            <div class=\"price\">150 000 <small>FCFA</small></div>
                            <small class=\"text-muted\">+ Dashboard interactif</small>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"custom\" data-price=\"300000\">
                            <i class=\"fas fa-crown fa-3x text-warning mb-2\"></i>
                            <h6 class=\"mb-1\">Analyse sur mesure</h6>
                            <div class=\"price\">300 000 <small>FCFA</small></div>
                            <small class=\"text-muted\">+ Accompagnement</small>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"price-card text-center p-3\" data-type=\"subscription\" data-price=\"100000\">
                            <i class=\"fas fa-calendar-alt fa-3x text-primary mb-2\"></i>
                            <h6 class=\"mb-1\">Abonnement mensuel</h6>
                            <div class=\"price\">100 000 <small>FCFA/mois</small></div>
                            <small class=\"text-muted\">Automatique chaque mois</small>
                        </div>
                    </div>
                </div>
                <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'analyse.
                </div>
                {{ form_widget(form.type, {'attr': {'style': 'display: none;'}}) }}
            </div>
            
            <!-- Période -->
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-6\">
                    {{ form_label(form.period_start, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.period_start) }}
                    {{ form_errors(form.period_start) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_label(form.period_end, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.period_end) }}
                    {{ form_errors(form.period_end) }}
                </div>
            </div>
            
            <!-- Période warning -->
            <div class=\"period-warning\" id=\"periodWarning\" style=\"display: none;\">
                <i class=\"fas fa-info-circle me-2\"></i>
                <span id=\"periodWarningText\"></span>
            </div>
            
            <!-- Notes -->
            <div class=\"mb-4\">
                {{ form_label(form.notes, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.notes) }}
                {{ form_errors(form.notes) }}
                <small class=\"text-muted\">Ces notes seront transmises à l'équipe d'analyse</small>
            </div>
            
            <!-- Récapitulatif -->
            <div class=\"info-card\">
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
            
            <div class=\"alert alert-warning mt-3\">
                <div class=\"d-flex gap-3\">
                    <i class=\"fas fa-info-circle fa-2x\"></i>
                    <div>
                        <strong class=\"d-block\">📌 Important</strong>
                        <small>
                            - L'analyse sera disponible après confirmation du paiement.<br>
                            - Le lien de paiement sera généré automatiquement.<br>
                            - Un email sera envoyé à l'entreprise avec le lien de téléchargement.
                        </small>
                    </div>
                </div>
            </div>
            
            <div class=\"d-flex justify-content-end gap-2 mt-4 pt-3 border-top\">
                <a href=\"{{ path('super_admin_analysis_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                    <i class=\"fas fa-save me-1\"></i> Créer la demande
                </button>
            </div>
            
            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeCards = document.querySelectorAll('.price-card');
    const typeInput = document.querySelector('#{{ form.type.vars.id }}');
    const submitBtn = document.getElementById('submitBtn');
    const typeError = document.querySelector('.type-error');
    const periodStart = document.querySelector('#{{ form.period_start.vars.id }}');
    const periodEnd = document.querySelector('#{{ form.period_end.vars.id }}');
    const recapType = document.getElementById('recapType');
    const recapPeriod = document.getElementById('recapPeriod');
    const totalAmountSpan = document.getElementById('totalAmount');
    const periodWarning = document.getElementById('periodWarning');
    const periodWarningText = document.getElementById('periodWarningText');
    
    let selectedType = null;
    let selectedPrice = 0;
    
    // Sélection du type
    typeCards.forEach(card => {
        card.addEventListener('click', function() {
            typeCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedType = this.dataset.type;
            selectedPrice = parseInt(this.dataset.price);
            typeInput.value = selectedType;
            typeError.style.display = 'none';
            submitBtn.disabled = false;
            
            // Mise à jour récapitulatif
            const typeLabel = this.querySelector('h6').textContent;
            recapType.innerHTML = `<strong>\${typeLabel}</strong> - \${selectedPrice.toLocaleString()} FCFA`;
            updateTotalAmount();
        });
    });
    
    // Validation des dates
    function validateDates() {
        const start = periodStart.value;
        const end = periodEnd.value;
        
        if (start && end) {
            const startDate = new Date(start);
            const endDate = new Date(end);
            const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            
            if (diffDays > 365) {
                periodWarning.style.display = 'block';
                periodWarningText.innerHTML = `⚠️ La période sélectionnée couvre \${diffDays} jours. Pour les analyses sur une longue période, des frais supplémentaires peuvent s'appliquer. Contactez le support.`;
            } else if (diffDays > 90) {
                periodWarning.style.display = 'block';
                periodWarningText.innerHTML = `ℹ️ Période de \${diffDays} jours. L'analyse sera plus volumineuse.`;
            } else {
                periodWarning.style.display = 'none';
            }
            
            recapPeriod.innerHTML = `<strong>\${new Date(start).toLocaleDateString('fr-FR')}</strong> au <strong>\${new Date(end).toLocaleDateString('fr-FR')}</strong> (\${diffDays} jours)`;
        } else if (start) {
            recapPeriod.innerHTML = `À partir du <strong>\${new Date(start).toLocaleDateString('fr-FR')}</strong>`;
        } else if (end) {
            recapPeriod.innerHTML = `Jusqu'au <strong>\${new Date(end).toLocaleDateString('fr-FR')}</strong>`;
        } else {
            recapPeriod.innerHTML = 'Période non définie';
        }
        
        updateTotalAmount();
    }
    
    function updateTotalAmount() {
        if (selectedPrice > 0) {
            totalAmountSpan.textContent = selectedPrice.toLocaleString() + ' FCFA';
        } else {
            totalAmountSpan.textContent = '0 FCFA';
        }
    }
    
    periodStart?.addEventListener('change', validateDates);
    periodEnd?.addEventListener('change', validateDates);
    
    validateDates();
    
    // Confirmation avant soumission
    document.getElementById('analysisForm').addEventListener('submit', function(e) {
        if (!selectedType) {
            e.preventDefault();
            typeError.style.display = 'block';
            typeError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }
        
        const start = periodStart.value;
        const end = periodEnd.value;
        
        if (!start || !end) {
            e.preventDefault();
            alert('Veuillez sélectionner une période complète.');
            return false;
        }
        
        const typeLabel = document.querySelector('.price-card.selected h6').textContent;
        const message = `Confirmez la création de l'analyse suivante :\\n\\n` +
                       `📊 Type: \${typeLabel}\\n` +
                       `📅 Période: \${new Date(start).toLocaleDateString('fr-FR')} au \${new Date(end).toLocaleDateString('fr-FR')}\\n` +
                       `💰 Montant: \${selectedPrice.toLocaleString()} FCFA\\n\\n` +
                       `Un lien de paiement sera généré pour l'entreprise.`;
        
        if (!confirm(message)) {
            e.preventDefault();
            return false;
        }
    });
});
</script>
{% endblock %}", "super_admin/analysis/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis\\new.html.twig");
    }
}
