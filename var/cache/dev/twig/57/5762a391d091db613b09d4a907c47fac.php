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
class __TwigTemplate_8c535f8cf59f0fd62fbbaf3becc99ff6 extends Template
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

    // line 64
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

        // line 65
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 71
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
        // line 84
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
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 110, $this->source); })()), "companyName", [], "any", false, false, false, 110), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">N° Abonnement</small>
                                <div class=\"fw-bold\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 116, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 116), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Type</small>
                                <div>";
        // line 122
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 122, $this->source); })()), "type", [], "any", false, false, false, 122) == "restaurant")) ? ("🍽️ Restaurant") : ("🛒 Commerce"));
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-2\">
                                <small class=\"text-muted\">Email</small>
                                <div>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), "html", null, true);
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
        // line 147
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'form_start', ["attr" => ["id" => "analysisForm"]]);
        yield "
            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), 'errors');
        yield "
            
            <!-- Type d'analyse - Caché car on utilise des cartes -->
            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "type", [], "any", false, false, false, 151), 'widget', ["attr" => ["style" => "display: none;", "id" => "typeInput"]]);
        yield "
            
            <div class=\"mb-4\">
                <label class=\"form-label fw-bold\">📊 Type d'analyse</label>
                <div class=\"row g-3\" id=\"typeCards\">
                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 157
            yield "                        <div class=\"col-md-3\">
                            <div class=\"price-card text-center p-3\" 
                                 data-type=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 159), "html", null, true);
            yield "\" 
                                 data-price=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 160), "html", null, true);
            yield "\"
                                 data-label=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 161), "html", null, true);
            yield "\">
                                ";
            // line 162
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 162) == "standard")) {
                // line 163
                yield "                                    <i class=\"fas fa-file-excel fa-3x text-success mb-2\"></i>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 164
$context["price"], "type", [], "any", false, false, false, 164) == "powerbi")) {
                // line 165
                yield "                                    <i class=\"fas fa-chart-line fa-3x text-info mb-2\"></i>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 166
$context["price"], "type", [], "any", false, false, false, 166) == "custom")) {
                // line 167
                yield "                                    <i class=\"fas fa-crown fa-3x text-warning mb-2\"></i>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 168
$context["price"], "type", [], "any", false, false, false, 168) == "subscription")) {
                // line 169
                yield "                                    <i class=\"fas fa-calendar-alt fa-3x text-primary mb-2\"></i>
                                ";
            } else {
                // line 171
                yield "                                    <i class=\"fas fa-chart-simple fa-3x text-secondary mb-2\"></i>
                                ";
            }
            // line 173
            yield "                                <h6 class=\"mb-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "label", [], "any", false, false, false, 173), "html", null, true);
            yield "</h6>
                                <div class=\"price\">
                                    ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 175), 0, ",", " "), "html", null, true);
            yield " 
                                    <small>FCFA";
            // line 176
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["price"], "type", [], "any", false, false, false, 176) == "subscription")) {
                yield "/mois";
            }
            yield "</small>
                                </div>
                                <small class=\"text-muted\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 178)), "truncate", [50], "method", false, false, false, 178), "html", null, true);
            yield "</small>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "                </div>
                <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'analyse.
                </div>
            </div>

            <!-- Période -->
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-6\">
                    ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "period_start", [], "any", false, false, false, 191), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📅 Date de début"]);
        yield "
                    ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "period_start", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-control", "id" => "periodStart"]]);
        yield "
                    <small class=\"text-muted\">Maximum 365 jours (1 an)</small>
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "period_start", [], "any", false, false, false, 194), 'errors');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "period_end", [], "any", false, false, false, 197), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📅 Date de fin"]);
        yield "
                    ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "period_end", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "form-control", "id" => "periodEnd"]]);
        yield "
                    ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "period_end", [], "any", false, false, false, 199), 'errors');
        yield "
                </div>
            </div>

            <!-- Période warning -->
            <div id=\"periodWarning\" style=\"display: none;\" class=\"mb-3\"></div>

            <!-- Notes -->
            <div class=\"mb-4\">
                ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "notes", [], "any", false, false, false, 208), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📝 Notes / Instructions"]);
        yield "
                ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "notes", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Informations complémentaires pour l'analyse..."]]);
        yield "
                <small class=\"text-muted\">Ces notes seront transmises à l'équipe d'analyse</small>
                ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "notes", [], "any", false, false, false, 211), 'errors');
        yield "
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
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </a>
                <button type=\"button\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                    <i class=\"fas fa-save me-1\"></i> Créer la demande
                </button>
            </div>
            
            ";
        // line 252
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), 'form_end');
        yield "
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
                    Confirmation
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
                    Un lien de paiement sera généré et envoyé à l'entreprise.
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

    // line 289
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

        // line 290
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
    const periodWarning = document.getElementById('periodWarning');
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
            
            recapType.innerHTML = `<strong>\${selectedLabel}</strong> - \${selectedPrice.toLocaleString()} FCFA\${selectedType === 'subscription' ? '/mois' : ''}`;
            updateTotalAmount();
        });
    });
    
    function updateTotalAmount() {
        if (selectedPrice > 0) {
            totalAmountSpan.textContent = selectedPrice.toLocaleString() + ' FCFA' + (selectedType === 'subscription' ? '/mois' : '');
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
            
            if (diffDays > MAX_PERIOD_DAYS) {
                periodWarning.className = 'period-error mb-3';
                periodWarning.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Période trop longue !</strong><br>
                    La période sélectionnée couvre \${diffDays} jours. La période maximale autorisée est de \${MAX_PERIOD_DAYS} jours (environ 1 an).
                `;
                periodWarning.style.display = 'block';
                submitBtn.disabled = true;
            } else if (diffDays > 90) {
                periodWarning.className = 'period-warning mb-3';
                periodWarning.innerHTML = `
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>ℹ️ Période longue</strong><br>
                    Période de \${diffDays} jours. L'analyse sera plus volumineuse.
                `;
                periodWarning.style.display = 'block';
                submitBtn.disabled = false;
            } else {
                periodWarning.style.display = 'none';
                submitBtn.disabled = false;
            }
            
            recapPeriod.innerHTML = `<strong>\${startDate.toLocaleDateString('fr-FR')}</strong> au <strong>\${endDate.toLocaleDateString('fr-FR')}</strong> (\${diffDays} jours)`;
            return true;
        } else if (start) {
            recapPeriod.innerHTML = `À partir du <strong>\${new Date(start).toLocaleDateString('fr-FR')}</strong>`;
        } else if (end) {
            recapPeriod.innerHTML = `Jusqu'au <strong>\${new Date(end).toLocaleDateString('fr-FR')}</strong>`;
        } else {
            recapPeriod.innerHTML = 'Période non définie';
            periodWarning.style.display = 'none';
        }
        
        updateTotalAmount();
        return true;
    }
    
    if (periodStart) periodStart.addEventListener('change', validatePeriod);
    if (periodEnd) periodEnd.addEventListener('change', validatePeriod);
    validatePeriod();
    
    // Bouton d'envoi - ouvre modal de confirmation
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
            periodWarning.className = 'period-error mb-3';
            periodWarning.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période incomplète !</strong><br>
                Veuillez sélectionner une date de début et une date de fin.
            `;
            periodWarning.style.display = 'block';
            periodWarning.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const startDate = new Date(start);
        const endDate = new Date(end);
        const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
        
        if (diffDays > MAX_PERIOD_DAYS) {
            periodWarning.className = 'period-error mb-3';
            periodWarning.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période trop longue !</strong><br>
                La période sélectionnée couvre \${diffDays} jours. La période maximale est de \${MAX_PERIOD_DAYS} jours.
            `;
            periodWarning.style.display = 'block';
            periodWarning.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const confirmMessage = document.getElementById('confirmMessage');
        confirmMessage.innerHTML = `
            <strong>Confirmez-vous la création de l'analyse ?</strong><br><br>
            <div class=\"text-start\">
                <div class=\"mb-2\">
                    <i class=\"fas fa-building text-primary me-2\"></i>
                    <strong>Entreprise :</strong> ";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 441, $this->source); })()), "companyName", [], "any", false, false, false, 441), "html", null, true);
        yield "
                </div>
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
                    <strong>Montant :</strong> \${selectedPrice.toLocaleString()} FCFA\${selectedType === 'subscription' ? '/mois' : ''}
                </div>
            </div>
        `;
        
        confirmModal.show();
    });
    
    // ✅ Soumission du formulaire (comme pour l'entreprise)
    confirmSubmitBtn.addEventListener('click', function() {
        confirmSubmitBtn.disabled = true;
        confirmSubmitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Création en cours...';
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
        return array (  691 => 441,  537 => 290,  524 => 289,  477 => 252,  466 => 244,  430 => 211,  425 => 209,  421 => 208,  409 => 199,  405 => 198,  401 => 197,  395 => 194,  390 => 192,  386 => 191,  375 => 182,  365 => 178,  358 => 176,  354 => 175,  348 => 173,  344 => 171,  340 => 169,  338 => 168,  335 => 167,  333 => 166,  330 => 165,  328 => 164,  325 => 163,  323 => 162,  319 => 161,  315 => 160,  311 => 159,  307 => 157,  303 => 156,  295 => 151,  289 => 148,  284 => 147,  263 => 128,  254 => 122,  245 => 116,  236 => 110,  207 => 84,  191 => 71,  183 => 65,  170 => 64,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
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
            {# ✅ Formulaire Symfony standard comme pour l'entreprise #}
            {{ form_start(form, {'attr': {'id': 'analysisForm'}}) }}
            {{ form_errors(form) }}
            
            <!-- Type d'analyse - Caché car on utilise des cartes -->
            {{ form_widget(form.type, {'attr': {'style': 'display: none;', 'id': 'typeInput'}}) }}
            
            <div class=\"mb-4\">
                <label class=\"form-label fw-bold\">📊 Type d'analyse</label>
                <div class=\"row g-3\" id=\"typeCards\">
                    {% for price in prices %}
                        <div class=\"col-md-3\">
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
                                {% elseif price.type == 'subscription' %}
                                    <i class=\"fas fa-calendar-alt fa-3x text-primary mb-2\"></i>
                                {% else %}
                                    <i class=\"fas fa-chart-simple fa-3x text-secondary mb-2\"></i>
                                {% endif %}
                                <h6 class=\"mb-1\">{{ price.label }}</h6>
                                <div class=\"price\">
                                    {{ price.price|number_format(0, ',', ' ') }} 
                                    <small>FCFA{% if price.type == 'subscription' %}/mois{% endif %}</small>
                                </div>
                                <small class=\"text-muted\">{{ price.description|u.truncate(50) }}</small>
                            </div>
                        </div>
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

            <!-- Période warning -->
            <div id=\"periodWarning\" style=\"display: none;\" class=\"mb-3\"></div>

            <!-- Notes -->
            <div class=\"mb-4\">
                {{ form_label(form.notes, '📝 Notes / Instructions', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.notes, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Informations complémentaires pour l\\'analyse...'}}) }}
                <small class=\"text-muted\">Ces notes seront transmises à l'équipe d'analyse</small>
                {{ form_errors(form.notes) }}
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
                <button type=\"button\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                    <i class=\"fas fa-save me-1\"></i> Créer la demande
                </button>
            </div>
            
            {{ form_end(form) }}
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
                    Confirmation
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
                    Un lien de paiement sera généré et envoyé à l'entreprise.
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
    const periodWarning = document.getElementById('periodWarning');
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
            
            recapType.innerHTML = `<strong>\${selectedLabel}</strong> - \${selectedPrice.toLocaleString()} FCFA\${selectedType === 'subscription' ? '/mois' : ''}`;
            updateTotalAmount();
        });
    });
    
    function updateTotalAmount() {
        if (selectedPrice > 0) {
            totalAmountSpan.textContent = selectedPrice.toLocaleString() + ' FCFA' + (selectedType === 'subscription' ? '/mois' : '');
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
            
            if (diffDays > MAX_PERIOD_DAYS) {
                periodWarning.className = 'period-error mb-3';
                periodWarning.innerHTML = `
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <strong>⚠️ Période trop longue !</strong><br>
                    La période sélectionnée couvre \${diffDays} jours. La période maximale autorisée est de \${MAX_PERIOD_DAYS} jours (environ 1 an).
                `;
                periodWarning.style.display = 'block';
                submitBtn.disabled = true;
            } else if (diffDays > 90) {
                periodWarning.className = 'period-warning mb-3';
                periodWarning.innerHTML = `
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <strong>ℹ️ Période longue</strong><br>
                    Période de \${diffDays} jours. L'analyse sera plus volumineuse.
                `;
                periodWarning.style.display = 'block';
                submitBtn.disabled = false;
            } else {
                periodWarning.style.display = 'none';
                submitBtn.disabled = false;
            }
            
            recapPeriod.innerHTML = `<strong>\${startDate.toLocaleDateString('fr-FR')}</strong> au <strong>\${endDate.toLocaleDateString('fr-FR')}</strong> (\${diffDays} jours)`;
            return true;
        } else if (start) {
            recapPeriod.innerHTML = `À partir du <strong>\${new Date(start).toLocaleDateString('fr-FR')}</strong>`;
        } else if (end) {
            recapPeriod.innerHTML = `Jusqu'au <strong>\${new Date(end).toLocaleDateString('fr-FR')}</strong>`;
        } else {
            recapPeriod.innerHTML = 'Période non définie';
            periodWarning.style.display = 'none';
        }
        
        updateTotalAmount();
        return true;
    }
    
    if (periodStart) periodStart.addEventListener('change', validatePeriod);
    if (periodEnd) periodEnd.addEventListener('change', validatePeriod);
    validatePeriod();
    
    // Bouton d'envoi - ouvre modal de confirmation
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
            periodWarning.className = 'period-error mb-3';
            periodWarning.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période incomplète !</strong><br>
                Veuillez sélectionner une date de début et une date de fin.
            `;
            periodWarning.style.display = 'block';
            periodWarning.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const startDate = new Date(start);
        const endDate = new Date(end);
        const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
        
        if (diffDays > MAX_PERIOD_DAYS) {
            periodWarning.className = 'period-error mb-3';
            periodWarning.innerHTML = `
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <strong>⚠️ Période trop longue !</strong><br>
                La période sélectionnée couvre \${diffDays} jours. La période maximale est de \${MAX_PERIOD_DAYS} jours.
            `;
            periodWarning.style.display = 'block';
            periodWarning.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        
        const confirmMessage = document.getElementById('confirmMessage');
        confirmMessage.innerHTML = `
            <strong>Confirmez-vous la création de l'analyse ?</strong><br><br>
            <div class=\"text-start\">
                <div class=\"mb-2\">
                    <i class=\"fas fa-building text-primary me-2\"></i>
                    <strong>Entreprise :</strong> {{ company.companyName }}
                </div>
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
                    <strong>Montant :</strong> \${selectedPrice.toLocaleString()} FCFA\${selectedType === 'subscription' ? '/mois' : ''}
                </div>
            </div>
        `;
        
        confirmModal.show();
    });
    
    // ✅ Soumission du formulaire (comme pour l'entreprise)
    confirmSubmitBtn.addEventListener('click', function() {
        confirmSubmitBtn.disabled = true;
        confirmSubmitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Création en cours...';
        form.submit();
    });
});
</script>
{% endblock %}", "super_admin/analysis/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis\\new.html.twig");
    }
}
