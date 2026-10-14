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

/* stock/transfer/show.html.twig */
class __TwigTemplate_355934bc4b384d7aae9663ad28cc43f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/show.html.twig"));

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

        yield "Détail transfert - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 4, $this->source); })()), "transferNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        border-bottom: 1px dashed #e9ecef;
        gap: 1rem;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #64748b;
        font-size: 0.82rem;
        font-weight: 500;
        flex-shrink: 0;
    }
    .info-value {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.88rem;
        text-align: right;
        word-break: break-word;
    }

    .route-display {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: #f8fafc;
        border-radius: 10px;
        padding: 1rem;
        margin: 1rem 0;
    }
    .route-point {
        flex: 1;
        text-align: center;
    }
    .route-point .point-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        margin-bottom: 0.5rem;
    }
    .route-point.from .point-icon {
        background: #d1fae5;
        color: #065f46;
    }
    .route-point.to .point-icon {
        background: #dbeafe;
        color: #1e40af;
    }
    .route-point .point-label {
        font-size: 0.68rem;
        color: #64748b;
        text-transform: uppercase;
        font-weight: 600;
    }
    .route-point .point-name {
        font-weight: 700;
        font-size: 0.88rem;
        color: #1e293b;
        margin-top: 0.15rem;
    }
    .route-arrow {
        color: #0463f1;
        font-size: 1.3rem;
        flex-shrink: 0;
    }

    .action-btn {
        font-weight: 600;
        padding: 0.6rem 1.2rem;
        border-radius: 8px;
    }

    @media (max-width: 768px) {
        .route-display {
            flex-direction: column;
            gap: 0.5rem;
        }
        .route-arrow {
            transform: rotate(90deg);
        }
        .info-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.25rem;
        }
        .info-value {
            text-align: left;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
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

        // line 110
        yield "<div class=\"container-fluid px-2 px-md-4 py-3\">
    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">

            <!-- EN-TÊTE -->
            <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
                <div>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-1\">
                            <li class=\"breadcrumb-item small\">
                                <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                                </a>
                            </li>
                            <li class=\"breadcrumb-item small\">
                                <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active small\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 129, $this->source); })()), "transferNumber", [], "any", false, false, false, 129), "html", null, true);
        yield "</li>
                        </ol>
                    </nav>
                    <h1 class=\"h3 mb-0 fw-bold\">
                        <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                        Détail du transfert
                    </h1>
                </div>
                <div class=\"d-flex gap-2 flex-wrap\">
                    ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 138, $this->source); })()), "status", [], "any", false, false, false, 138) == "pending")) {
            // line 139
            yield "                        <button type=\"button\" 
                                class=\"btn btn-success action-btn start-transfer-btn\" 
                                data-id=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141), "html", null, true);
            yield "\" 
                                data-number=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 142, $this->source); })()), "transferNumber", [], "any", false, false, false, 142), "html", null, true);
            yield "\"
                                data-token=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("start-transfer-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143))), "html", null, true);
            yield "\">
                            <i class=\"fas fa-truck me-1\"></i> Expédier
                        </button>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 146
(isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 146, $this->source); })()), "status", [], "any", false, false, false, 146) == "in_transit")) {
            // line 147
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-info text-white action-btn\">
                            <i class=\"fas fa-check-circle me-1\"></i> Réceptionner
                        </a>
                    ";
        }
        // line 152
        yield "
                    ";
        // line 153
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 153, $this->source); })()), "status", [], "any", false, false, false, 153), ["pending", "in_transit"])) {
            // line 154
            yield "                        <button type=\"button\" 
                                class=\"btn btn-outline-danger action-btn cancel-transfer-btn\" 
                                data-id=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156), "html", null, true);
            yield "\" 
                                data-number=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 157, $this->source); })()), "transferNumber", [], "any", false, false, false, 157), "html", null, true);
            yield "\"
                                data-token=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel-transfer-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158))), "html", null, true);
            yield "\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    ";
        }
        // line 162
        yield "
                    <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"btn btn-outline-secondary action-btn\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </a>
                </div>
            </div>

            <!-- CARTE PRINCIPALE -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations du transfert
                    </h5>
                    <span class=\"badge ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 176, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 176), "html", null, true);
        yield "\">
                        <i class=\"fas ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 177, $this->source); })()), "statusIcon", [], "any", false, false, false, 177), "html", null, true);
        yield " me-1\"></i>
                        ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 178, $this->source); })()), "statusLabel", [], "any", false, false, false, 178), "html", null, true);
        yield "
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-hashtag me-1\"></i> N° transfert
                        </span>
                        <span class=\"info-value\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 186, $this->source); })()), "transferNumber", [], "any", false, false, false, 186), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Date de création
                        </span>
                        <span class=\"info-value\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 192, $this->source); })()), "createdAt", [], "any", false, false, false, 192), "d/m/Y H:i:s"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-boxes me-1\"></i> Quantité transférée
                        </span>
                        <span class=\"info-value text-primary\">
                            ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 199, $this->source); })()), "quantity", [], "any", false, false, false, 199), 0, ",", " "), "html", null, true);
        yield " unités
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-user me-1\"></i> Créé par
                        </span>
                        <span class=\"info-value\">
                            ";
        // line 207
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 207, $this->source); })()), "createdBy", [], "any", false, false, false, 207), "fullName", [], "any", false, false, false, 207)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 207, $this->source); })()), "createdBy", [], "any", false, false, false, 207), "fullName", [], "any", false, false, false, 207), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 207, $this->source); })()), "createdBy", [], "any", false, false, false, 207), "email", [], "any", false, false, false, 207), "html", null, true)));
        yield "
                        </span>
                    </div>
                    ";
        // line 210
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 210, $this->source); })()), "reason", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-comment me-1\"></i> Raison
                        </span>
                        <span class=\"info-value\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 215, $this->source); })()), "reason", [], "any", false, false, false, 215), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 218
        yield "
                    ";
        // line 219
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 219, $this->source); })()), "receivedBy", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-user-check me-1\"></i> Réceptionné par
                        </span>
                        <span class=\"info-value text-success\">
                            ";
            // line 225
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 225, $this->source); })()), "receivedBy", [], "any", false, false, false, 225), "fullName", [], "any", false, false, false, 225)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 225, $this->source); })()), "receivedBy", [], "any", false, false, false, 225), "fullName", [], "any", false, false, false, 225), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 225, $this->source); })()), "receivedBy", [], "any", false, false, false, 225), "email", [], "any", false, false, false, 225), "html", null, true)));
            yield "
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-check me-1\"></i> Date de réception
                        </span>
                        <span class=\"info-value text-success\">
                            ";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 233, $this->source); })()), "receivedAt", [], "any", false, false, false, 233), "d/m/Y H:i:s"), "html", null, true);
            yield "
                        </span>
                    </div>
                    ";
        }
        // line 237
        yield "                </div>
            </div>

            <!-- CARTE TRAJET -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-route me-2 text-primary\"></i>
                        Trajet du transfert
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"route-display\">
                        <div class=\"route-point from\">
                            <div class=\"point-icon\">
                                <i class=\"fas fa-warehouse\"></i>
                            </div>
                            <div class=\"point-label\">De</div>
                            <div class=\"point-name\">
                                ";
        // line 256
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 256, $this->source); })()), "sourceLocation", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 256, $this->source); })()), "sourceLocation", [], "any", false, false, false, 256), "displayName", [], "any", false, false, false, 256), "html", null, true)) : ("Non défini"));
        yield "
                            </div>
                        </div>
                        <div class=\"route-arrow\">
                            <i class=\"fas fa-long-arrow-alt-right\"></i>
                        </div>
                        <div class=\"route-point to\">
                            <div class=\"point-icon\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                            </div>
                            <div class=\"point-label\">Vers</div>
                            <div class=\"point-name\">
                                ";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 268, $this->source); })()), "destinationLocation", [], "any", false, false, false, 268), "displayName", [], "any", false, false, false, 268), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARTE LOT ET PRODUIT -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-barcode me-1\"></i> N° lot
                        </span>
                        <span class=\"info-value\">
                            <code>";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 289, $this->source); })()), "stockBatch", [], "any", false, false, false, 289), "batchNumber", [], "any", false, false, false, 289), "html", null, true);
        yield "</code>
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-box me-1\"></i> Produit
                        </span>
                        <span class=\"info-value\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 296, $this->source); })()), "stockBatch", [], "any", false, false, false, 296), "product", [], "any", false, false, false, 296), "name", [], "any", false, false, false, 296), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-barcode me-1\"></i> Code-barres
                        </span>
                        <span class=\"info-value\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 302, $this->source); })()), "stockBatch", [], "any", false, false, false, 302), "product", [], "any", false, false, false, 302), "barcode", [], "any", false, false, false, 302), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-tag me-1\"></i> Prix unitaire
                        </span>
                        <span class=\"info-value\">
                            ";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 309, $this->source); })()), "stockBatch", [], "any", false, false, false, 309), "unitPrice", [], "any", false, false, false, 309), CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 309, $this->source); })()), "hmaService", [], "any", false, false, false, 309)), "html", null, true);
        yield "
                        </span>
                    </div>
                    ";
        // line 312
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 312, $this->source); })()), "stockBatch", [], "any", false, false, false, 312), "expiryDate", [], "any", false, false, false, 312)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 313
            yield "                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-times me-1\"></i> Expiration
                        </span>
                        <span class=\"info-value\">
                            ";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 318, $this->source); })()), "stockBatch", [], "any", false, false, false, 318), "expiryDate", [], "any", false, false, false, 318), "d/m/Y"), "html", null, true);
            yield "
                        </span>
                    </div>
                    ";
        }
        // line 322
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMATION DÉPART -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-truck me-2\"></i> Confirmer le départ
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\">—</strong> ?</p>
                <div class=\"alert alert-warning mb-0\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera <strong>déduit</strong> de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>
                <form id=\"startTransferForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"startTransferToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> Confirmer le départ
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMATION ANNULATION -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler le transfert
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\">—</strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est <strong>irréversible</strong>.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" id=\"cancelTransferToken\" value=\"\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </button>
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-ban me-1\"></i> Confirmer l'annulation
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 397
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

        // line 398
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // MODAL EXPÉDITION
    // ============================================
    const startModalEl = document.getElementById('startTransferModal');
    const startModal = new bootstrap.Modal(startModalEl);
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    const startTransferToken = document.getElementById('startTransferToken');

    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startTransferToken.value = token;

            startModal.show();
        });
    });

    // ============================================
    // MODAL ANNULATION
    // ============================================
    const cancelModalEl = document.getElementById('cancelTransferModal');
    const cancelModal = new bootstrap.Modal(cancelModalEl);
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    const cancelTransferToken = document.getElementById('cancelTransferToken');

    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelTransferToken.value = token;

            cancelModal.show();
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
        return "stock/transfer/show.html.twig";
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
        return array (  648 => 398,  635 => 397,  551 => 322,  544 => 318,  537 => 313,  535 => 312,  529 => 309,  519 => 302,  510 => 296,  500 => 289,  476 => 268,  461 => 256,  440 => 237,  433 => 233,  422 => 225,  415 => 220,  413 => 219,  410 => 218,  404 => 215,  398 => 211,  396 => 210,  390 => 207,  379 => 199,  369 => 192,  360 => 186,  349 => 178,  345 => 177,  341 => 176,  325 => 163,  322 => 162,  315 => 158,  311 => 157,  307 => 156,  303 => 154,  301 => 153,  298 => 152,  289 => 147,  287 => 146,  281 => 143,  277 => 142,  273 => 141,  269 => 139,  267 => 138,  255 => 129,  248 => 125,  240 => 120,  228 => 110,  215 => 109,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/transfer/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détail transfert - {{ transfer.transferNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        border-bottom: 1px dashed #e9ecef;
        gap: 1rem;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #64748b;
        font-size: 0.82rem;
        font-weight: 500;
        flex-shrink: 0;
    }
    .info-value {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.88rem;
        text-align: right;
        word-break: break-word;
    }

    .route-display {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: #f8fafc;
        border-radius: 10px;
        padding: 1rem;
        margin: 1rem 0;
    }
    .route-point {
        flex: 1;
        text-align: center;
    }
    .route-point .point-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        margin-bottom: 0.5rem;
    }
    .route-point.from .point-icon {
        background: #d1fae5;
        color: #065f46;
    }
    .route-point.to .point-icon {
        background: #dbeafe;
        color: #1e40af;
    }
    .route-point .point-label {
        font-size: 0.68rem;
        color: #64748b;
        text-transform: uppercase;
        font-weight: 600;
    }
    .route-point .point-name {
        font-weight: 700;
        font-size: 0.88rem;
        color: #1e293b;
        margin-top: 0.15rem;
    }
    .route-arrow {
        color: #0463f1;
        font-size: 1.3rem;
        flex-shrink: 0;
    }

    .action-btn {
        font-weight: 600;
        padding: 0.6rem 1.2rem;
        border-radius: 8px;
    }

    @media (max-width: 768px) {
        .route-display {
            flex-direction: column;
            gap: 0.5rem;
        }
        .route-arrow {
            transform: rotate(90deg);
        }
        .info-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.25rem;
        }
        .info-value {
            text-align: left;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-3\">
    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">

            <!-- EN-TÊTE -->
            <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
                <div>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-1\">
                            <li class=\"breadcrumb-item small\">
                                <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                                </a>
                            </li>
                            <li class=\"breadcrumb-item small\">
                                <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active small\">{{ transfer.transferNumber }}</li>
                        </ol>
                    </nav>
                    <h1 class=\"h3 mb-0 fw-bold\">
                        <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                        Détail du transfert
                    </h1>
                </div>
                <div class=\"d-flex gap-2 flex-wrap\">
                    {% if transfer.status == 'pending' %}
                        <button type=\"button\" 
                                class=\"btn btn-success action-btn start-transfer-btn\" 
                                data-id=\"{{ transfer.id }}\" 
                                data-number=\"{{ transfer.transferNumber }}\"
                                data-token=\"{{ csrf_token('start-transfer-' ~ transfer.id) }}\">
                            <i class=\"fas fa-truck me-1\"></i> Expédier
                        </button>
                    {% elseif transfer.status == 'in_transit' %}
                        <a href=\"{{ path('app_stock_transfer_receive', {'id': transfer.id}) }}\" 
                           class=\"btn btn-info text-white action-btn\">
                            <i class=\"fas fa-check-circle me-1\"></i> Réceptionner
                        </a>
                    {% endif %}

                    {% if transfer.status in ['pending', 'in_transit'] %}
                        <button type=\"button\" 
                                class=\"btn btn-outline-danger action-btn cancel-transfer-btn\" 
                                data-id=\"{{ transfer.id }}\" 
                                data-number=\"{{ transfer.transferNumber }}\"
                                data-token=\"{{ csrf_token('cancel-transfer-' ~ transfer.id) }}\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    {% endif %}

                    <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"btn btn-outline-secondary action-btn\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </a>
                </div>
            </div>

            <!-- CARTE PRINCIPALE -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations du transfert
                    </h5>
                    <span class=\"badge {{ transfer.statusBadgeClass }}\">
                        <i class=\"fas {{ transfer.statusIcon }} me-1\"></i>
                        {{ transfer.statusLabel }}
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-hashtag me-1\"></i> N° transfert
                        </span>
                        <span class=\"info-value\">{{ transfer.transferNumber }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Date de création
                        </span>
                        <span class=\"info-value\">{{ transfer.createdAt|date('d/m/Y H:i:s') }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-boxes me-1\"></i> Quantité transférée
                        </span>
                        <span class=\"info-value text-primary\">
                            {{ transfer.quantity|number_format(0, ',', ' ') }} unités
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-user me-1\"></i> Créé par
                        </span>
                        <span class=\"info-value\">
                            {{ transfer.createdBy.fullName ?: transfer.createdBy.email }}
                        </span>
                    </div>
                    {% if transfer.reason %}
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-comment me-1\"></i> Raison
                        </span>
                        <span class=\"info-value\">{{ transfer.reason }}</span>
                    </div>
                    {% endif %}

                    {% if transfer.receivedBy %}
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-user-check me-1\"></i> Réceptionné par
                        </span>
                        <span class=\"info-value text-success\">
                            {{ transfer.receivedBy.fullName ?: transfer.receivedBy.email }}
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-check me-1\"></i> Date de réception
                        </span>
                        <span class=\"info-value text-success\">
                            {{ transfer.receivedAt|date('d/m/Y H:i:s') }}
                        </span>
                    </div>
                    {% endif %}
                </div>
            </div>

            <!-- CARTE TRAJET -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-route me-2 text-primary\"></i>
                        Trajet du transfert
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"route-display\">
                        <div class=\"route-point from\">
                            <div class=\"point-icon\">
                                <i class=\"fas fa-warehouse\"></i>
                            </div>
                            <div class=\"point-label\">De</div>
                            <div class=\"point-name\">
                                {{ transfer.sourceLocation ? transfer.sourceLocation.displayName : 'Non défini' }}
                            </div>
                        </div>
                        <div class=\"route-arrow\">
                            <i class=\"fas fa-long-arrow-alt-right\"></i>
                        </div>
                        <div class=\"route-point to\">
                            <div class=\"point-icon\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                            </div>
                            <div class=\"point-label\">Vers</div>
                            <div class=\"point-name\">
                                {{ transfer.destinationLocation.displayName }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARTE LOT ET PRODUIT -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-barcode me-1\"></i> N° lot
                        </span>
                        <span class=\"info-value\">
                            <code>{{ transfer.stockBatch.batchNumber }}</code>
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-box me-1\"></i> Produit
                        </span>
                        <span class=\"info-value\">{{ transfer.stockBatch.product.name }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-barcode me-1\"></i> Code-barres
                        </span>
                        <span class=\"info-value\">{{ transfer.stockBatch.product.barcode }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-tag me-1\"></i> Prix unitaire
                        </span>
                        <span class=\"info-value\">
                            {{ transfer.stockBatch.unitPrice|price_with_currency(transfer.hmaService) }}
                        </span>
                    </div>
                    {% if transfer.stockBatch.expiryDate %}
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-times me-1\"></i> Expiration
                        </span>
                        <span class=\"info-value\">
                            {{ transfer.stockBatch.expiryDate|date('d/m/Y') }}
                        </span>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMATION DÉPART -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-truck me-2\"></i> Confirmer le départ
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\">—</strong> ?</p>
                <div class=\"alert alert-warning mb-0\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera <strong>déduit</strong> de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>
                <form id=\"startTransferForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"startTransferToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> Confirmer le départ
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMATION ANNULATION -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler le transfert
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\">—</strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est <strong>irréversible</strong>.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" id=\"cancelTransferToken\" value=\"\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </button>
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-ban me-1\"></i> Confirmer l'annulation
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // MODAL EXPÉDITION
    // ============================================
    const startModalEl = document.getElementById('startTransferModal');
    const startModal = new bootstrap.Modal(startModalEl);
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    const startTransferToken = document.getElementById('startTransferToken');

    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startTransferToken.value = token;

            startModal.show();
        });
    });

    // ============================================
    // MODAL ANNULATION
    // ============================================
    const cancelModalEl = document.getElementById('cancelTransferModal');
    const cancelModal = new bootstrap.Modal(cancelModalEl);
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    const cancelTransferToken = document.getElementById('cancelTransferToken');

    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelTransferToken.value = token;

            cancelModal.show();
        });
    });

});
</script>
{% endblock %}", "stock/transfer/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\show.html.twig");
    }
}
