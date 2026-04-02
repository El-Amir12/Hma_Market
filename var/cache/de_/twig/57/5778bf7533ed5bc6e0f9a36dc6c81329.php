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

/* purchase/receive.html.twig */
class __TwigTemplate_d30ba998f5ac6142dc197a17287102cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/receive.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/receive.html.twig"));

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

        yield "Réceptionner la commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 4, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
    .batch-card {
        transition: all 0.3s ease;
        border-left: 4px solid #0463f1;
        margin-bottom: 1rem;
    }
    .batch-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .perishable-badge {
        background-color: #ffc107;
        color: #000;
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
    }
    .remove-checkbox {
        width: 1.2rem;
        height: 1.2rem;
        cursor: pointer;
    }
    .quantity-price-row {
        display: flex;
        gap: 1rem;
        align-items: center;
    }
    .quantity-price-row .form-group {
        flex: 1;
    }
    .card-footer-actions {
        background: #f8f9fa;
        border-top: 1px solid #e9ecef;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1>
                    <i class=\"bi bi-box-seam text-primary\"></i>
                    Réceptionner la commande
                </h1>
                <div>
                    <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary me-2\">
                        <i class=\"bi bi-eye\"></i> Voir la commande
                    </a>
                    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"bi bi-arrow-left\"></i> Retour
                    </a>
                </div>
            </div>

            <!-- Informations commande -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-info-circle\"></i> Informations commande
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">N° commande</small>
                            <div class=\"fw-bold\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 75, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 75), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Fournisseur</small>
                            <div class=\"fw-bold\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 79, $this->source); })()), "supplier", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Date commande</small>
                            <div class=\"fw-bold\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 83, $this->source); })()), "createdAt", [], "any", false, false, false, 83), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Total initial</small>
                            <div class=\"fw-bold text-primary\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 87, $this->source); })()), "totalAmount", [], "any", false, false, false, 87), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de réception -->
            <form method=\"POST\" class=\"receive-form\">
                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 95, $this->source); })()), "purchaseItems", [], "any", false, false, false, 95));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            yield "                    ";
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 96);
            // line 97
            yield "                    <div class=\"card shadow-sm batch-card\">
                        <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                            <div class=\"d-flex align-items-center\">
                                ";
            // line 100
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 100, $this->source); })()), "image", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 101, $this->source); })()), "image", [], "any", false, false, false, 101))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102), "html", null, true);
                yield "\" 
                                         class=\"rounded me-3\"
                                         style=\"width: 40px; height: 40px; object-fit: cover;\">
                                ";
            } else {
                // line 106
                yield "                                    <div class=\"bg-light rounded me-3 d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                        <i class=\"bi bi-box text-secondary\"></i>
                                    </div>
                                ";
            }
            // line 110
            yield "                                <div>
                                    <h6 class=\"mb-0\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">
                                        Code: ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 113, $this->source); })()), "barcode", [], "any", false, false, false, 113), "html", null, true);
            yield " | 
                                        Unité: ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 114, $this->source); })()), "unit", [], "any", false, false, false, 114), "pièce")) : ("pièce")), "html", null, true);
            yield "
                                        ";
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "                                            <span class=\"perishable-badge ms-2\">
                                                <i class=\"bi bi-calendar-exclamation\"></i> Périssable
                                            </span>
                                        ";
            }
            // line 120
            yield "                                    </small>
                                </div>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"fw-bold text-primary\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 124), 0, ",", " "), "html", null, true);
            yield " FCFA</div>
                                <small class=\"text-muted\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 125), 0, ",", " "), "html", null, true);
            yield " FCFA/unité</small>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <input type=\"hidden\" name=\"item_id[]\" value=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 129), "html", null, true);
            yield "\">
                            
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input remove-checkbox\" type=\"checkbox\" 
                                               name=\"remove_";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\" id=\"remove_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\" value=\"1\">
                                        <label class=\"form-check-label text-danger\" for=\"remove_";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "\">
                                            <i class=\"bi bi-trash\"></i> Ne pas réceptionner cet article
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-upc-scan\"></i> Numéro de lot
                                        ";
            // line 147
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 147, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "                                            <span class=\"text-danger\">*</span>
                                        ";
            }
            // line 150
            yield "                                    </label>
                                    <input type=\"text\" 
                                           name=\"batch_number_";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 152), "html", null, true);
            yield "\" 
                                           class=\"form-control\" 
                                           value=\"";
            // line 154
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 154)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 154), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("LOT-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 154, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 154)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 154)), "html", null, true)));
            yield "\"
                                           ";
            // line 155
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 155, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required";
            }
            // line 156
            yield "                                           placeholder=\"Ex: LOT-20250328-001\">
                                    <small class=\"text-muted\">Laissez vide pour génération automatique</small>
                                </div>

                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-box-seam\"></i> Quantité commandée
                                    </label>
                                    <input type=\"number\" 
                                           class=\"form-control\" 
                                           value=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 166), "html", null, true);
            yield "\" 
                                           readonly disabled>
                                </div>

                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-check-circle\"></i> Quantité reçue
                                    </label>
                                    <input type=\"number\" 
                                           name=\"received_quantity_";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 175), "html", null, true);
            yield "\" 
                                           class=\"form-control received-quantity\" 
                                           value=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 177), "html", null, true);
            yield "\"
                                           min=\"0\"
                                           step=\"1\">
                                </div>
                            </div>

                            <div class=\"row mt-3\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-tag\"></i> Prix unitaire commandé (FCFA)
                                    </label>
                                    <input type=\"text\" 
                                        class=\"form-control\" 
                                        value=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 190)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 190)) : (0)), 0, ",", " "), "html", null, true);
            yield "\" 
                                        readonly disabled>
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-pencil\"></i> Prix unitaire réel (FCFA)
                                    </label>
                                    <input type=\"number\" 
                                        name=\"received_price_";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 199), "html", null, true);
            yield "\" 
                                        class=\"form-control received-price\" 
                                        value=\"";
            // line 201
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 201)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 201), "html", null, true)) : (0));
            yield "\"
                                        step=\"0.01\"
                                        min=\"0\">
                                </div>
                            </div>

                            ";
            // line 207
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 207, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 208
                yield "                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-calendar-plus\"></i> Date de fabrication
                                        <span class=\"text-danger\">*</span>
                                    </label>
                                    <input type=\"date\" 
                                           name=\"manufacturing_date_";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 215), "html", null, true);
                yield "\" 
                                           class=\"form-control\" 
                                           required
                                           value=\"";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                yield "\">
                                </div>
                                
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-calendar-x\"></i> Date d'expiration
                                        <span class=\"text-danger\">*</span>
                                    </label>
                                    <input type=\"date\" 
                                           name=\"expiry_date_";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 227), "html", null, true);
                yield "\" 
                                           class=\"form-control\" 
                                           required
                                           min=\"";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                yield "\">
                                </div>
                            </div>
                            ";
            } else {
                // line 234
                yield "                            <div class=\"alert alert-success mb-0\">
                                <i class=\"bi bi-check-circle\"></i>
                                Ce produit n'est pas périssable. Le lot sera créé automatiquement.
                            </div>
                            ";
            }
            // line 239
            yield "                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        yield "
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <div class=\"alert alert-warning\">
                            <i class=\"bi bi-exclamation-triangle\"></i>
                            <strong>Attention :</strong> La réception va créer des lots de stock et mettre à jour les quantités disponibles.
                            Les articles non réceptionnés seront supprimés de la commande. Cette action est irréversible.
                        </div>
                        
                        <div class=\"d-flex justify-content-end gap-2\">
                            <a href=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 252, $this->source); })()), "id", [], "any", false, false, false, 252)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"bi bi-x-lg\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-success\">
                                <i class=\"bi bi-check-lg\"></i> Confirmer la réception
                            </button>
                        </div>
                    </div>
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

    // line 267
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

        // line 268
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la case \"Ne pas réceptionner\"
    const checkboxes = document.querySelectorAll('.remove-checkbox');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const card = this.closest('.batch-card');
            const inputs = card.querySelectorAll('input:not([type=\"checkbox\"]), select');
            inputs.forEach(input => {
                input.disabled = this.checked;
            });
            // Désactiver aussi les champs de date si présents
            const dateInputs = card.querySelectorAll('input[type=\"date\"]');
            dateInputs.forEach(input => input.disabled = this.checked);
        });
    });

    // Validation des dates d'expiration
    const expiryInputs = document.querySelectorAll('input[name^=\"expiry_date_\"]');
    expiryInputs.forEach(input => {
        input.addEventListener('change', function() {
            const expiryDate = new Date(this.value);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (expiryDate < today) {
                alert('La date d\\'expiration ne peut pas être antérieure à aujourd\\'hui.');
                this.value = '';
            }
        });
    });
    
    // Confirmation avant soumission
    const form = document.querySelector('.receive-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Vérifier qu'il y a au moins un article non supprimé
            let hasReceived = false;
            const items = document.querySelectorAll('.batch-card');
            items.forEach(card => {
                const removeCheck = card.querySelector('.remove-checkbox');
                if (!removeCheck || !removeCheck.checked) {
                    hasReceived = true;
                }
            });
            if (!hasReceived) {
                e.preventDefault();
                alert('Vous devez réceptionner au moins un article.');
                return;
            }

            // Vérifier les champs requis pour les produits non supprimés
            const requiredInputs = form.querySelectorAll('[required]:not(:disabled)');
            let missing = false;
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    missing = true;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (missing) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires.');
            } else {
                if (!confirm('Confirmez-vous la réception de cette commande ? Les lots seront créés et le stock sera mis à jour.')) {
                    e.preventDefault();
                }
            }
        });
    }
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
        return "purchase/receive.html.twig";
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
        return array (  557 => 268,  544 => 267,  519 => 252,  507 => 242,  491 => 239,  484 => 234,  477 => 230,  471 => 227,  459 => 218,  453 => 215,  444 => 208,  442 => 207,  433 => 201,  428 => 199,  416 => 190,  400 => 177,  395 => 175,  383 => 166,  371 => 156,  367 => 155,  363 => 154,  358 => 152,  354 => 150,  350 => 148,  348 => 147,  334 => 136,  328 => 135,  319 => 129,  312 => 125,  308 => 124,  302 => 120,  296 => 116,  294 => 115,  290 => 114,  286 => 113,  281 => 111,  278 => 110,  272 => 106,  265 => 102,  260 => 101,  258 => 100,  253 => 97,  250 => 96,  233 => 95,  222 => 87,  215 => 83,  208 => 79,  201 => 75,  181 => 58,  175 => 55,  164 => 46,  151 => 45,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/receive.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Réceptionner la commande {{ purchase.purchaseNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .batch-card {
        transition: all 0.3s ease;
        border-left: 4px solid #0463f1;
        margin-bottom: 1rem;
    }
    .batch-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .perishable-badge {
        background-color: #ffc107;
        color: #000;
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
    }
    .remove-checkbox {
        width: 1.2rem;
        height: 1.2rem;
        cursor: pointer;
    }
    .quantity-price-row {
        display: flex;
        gap: 1rem;
        align-items: center;
    }
    .quantity-price-row .form-group {
        flex: 1;
    }
    .card-footer-actions {
        background: #f8f9fa;
        border-top: 1px solid #e9ecef;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1>
                    <i class=\"bi bi-box-seam text-primary\"></i>
                    Réceptionner la commande
                </h1>
                <div>
                    <a href=\"{{ path('purchase_show', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary me-2\">
                        <i class=\"bi bi-eye\"></i> Voir la commande
                    </a>
                    <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-primary\">
                        <i class=\"bi bi-arrow-left\"></i> Retour
                    </a>
                </div>
            </div>

            <!-- Informations commande -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-info-circle\"></i> Informations commande
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">N° commande</small>
                            <div class=\"fw-bold\">{{ purchase.purchaseNumber }}</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Fournisseur</small>
                            <div class=\"fw-bold\">{{ purchase.supplier.name }}</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Date commande</small>
                            <div class=\"fw-bold\">{{ purchase.createdAt|date('d/m/Y H:i') }}</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Total initial</small>
                            <div class=\"fw-bold text-primary\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de réception -->
            <form method=\"POST\" class=\"receive-form\">
                {% for item in purchase.purchaseItems %}
                    {% set product = item.product %}
                    <div class=\"card shadow-sm batch-card\">
                        <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                            <div class=\"d-flex align-items-center\">
                                {% if product.image %}
                                    <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                                         alt=\"{{ product.name }}\" 
                                         class=\"rounded me-3\"
                                         style=\"width: 40px; height: 40px; object-fit: cover;\">
                                {% else %}
                                    <div class=\"bg-light rounded me-3 d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                        <i class=\"bi bi-box text-secondary\"></i>
                                    </div>
                                {% endif %}
                                <div>
                                    <h6 class=\"mb-0\">{{ product.name }}</h6>
                                    <small class=\"text-muted\">
                                        Code: {{ product.barcode }} | 
                                        Unité: {{ product.unit|default('pièce') }}
                                        {% if product.hasExpiryDate %}
                                            <span class=\"perishable-badge ms-2\">
                                                <i class=\"bi bi-calendar-exclamation\"></i> Périssable
                                            </span>
                                        {% endif %}
                                    </small>
                                </div>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"fw-bold text-primary\">{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</div>
                                <small class=\"text-muted\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA/unité</small>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <input type=\"hidden\" name=\"item_id[]\" value=\"{{ item.id }}\">
                            
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input remove-checkbox\" type=\"checkbox\" 
                                               name=\"remove_{{ item.id }}\" id=\"remove_{{ item.id }}\" value=\"1\">
                                        <label class=\"form-check-label text-danger\" for=\"remove_{{ item.id }}\">
                                            <i class=\"bi bi-trash\"></i> Ne pas réceptionner cet article
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-upc-scan\"></i> Numéro de lot
                                        {% if product.hasExpiryDate %}
                                            <span class=\"text-danger\">*</span>
                                        {% endif %}
                                    </label>
                                    <input type=\"text\" 
                                           name=\"batch_number_{{ item.id }}\" 
                                           class=\"form-control\" 
                                           value=\"{{ item.batchNumber ?: 'LOT-' ~ purchase.purchaseNumber ~ '-' ~ loop.index }}\"
                                           {% if product.hasExpiryDate %}required{% endif %}
                                           placeholder=\"Ex: LOT-20250328-001\">
                                    <small class=\"text-muted\">Laissez vide pour génération automatique</small>
                                </div>

                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-box-seam\"></i> Quantité commandée
                                    </label>
                                    <input type=\"number\" 
                                           class=\"form-control\" 
                                           value=\"{{ item.quantity }}\" 
                                           readonly disabled>
                                </div>

                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-check-circle\"></i> Quantité reçue
                                    </label>
                                    <input type=\"number\" 
                                           name=\"received_quantity_{{ item.id }}\" 
                                           class=\"form-control received-quantity\" 
                                           value=\"{{ item.quantity }}\"
                                           min=\"0\"
                                           step=\"1\">
                                </div>
                            </div>

                            <div class=\"row mt-3\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-tag\"></i> Prix unitaire commandé (FCFA)
                                    </label>
                                    <input type=\"text\" 
                                        class=\"form-control\" 
                                        value=\"{{ (item.unitPrice ?: 0)|number_format(0, ',', ' ') }}\" 
                                        readonly disabled>
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-pencil\"></i> Prix unitaire réel (FCFA)
                                    </label>
                                    <input type=\"number\" 
                                        name=\"received_price_{{ item.id }}\" 
                                        class=\"form-control received-price\" 
                                        value=\"{{ item.unitPrice ?: 0 }}\"
                                        step=\"0.01\"
                                        min=\"0\">
                                </div>
                            </div>

                            {% if product.hasExpiryDate %}
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-calendar-plus\"></i> Date de fabrication
                                        <span class=\"text-danger\">*</span>
                                    </label>
                                    <input type=\"date\" 
                                           name=\"manufacturing_date_{{ item.id }}\" 
                                           class=\"form-control\" 
                                           required
                                           value=\"{{ \"now\"|date('Y-m-d') }}\">
                                </div>
                                
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-calendar-x\"></i> Date d'expiration
                                        <span class=\"text-danger\">*</span>
                                    </label>
                                    <input type=\"date\" 
                                           name=\"expiry_date_{{ item.id }}\" 
                                           class=\"form-control\" 
                                           required
                                           min=\"{{ \"now\"|date('Y-m-d') }}\">
                                </div>
                            </div>
                            {% else %}
                            <div class=\"alert alert-success mb-0\">
                                <i class=\"bi bi-check-circle\"></i>
                                Ce produit n'est pas périssable. Le lot sera créé automatiquement.
                            </div>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}

                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <div class=\"alert alert-warning\">
                            <i class=\"bi bi-exclamation-triangle\"></i>
                            <strong>Attention :</strong> La réception va créer des lots de stock et mettre à jour les quantités disponibles.
                            Les articles non réceptionnés seront supprimés de la commande. Cette action est irréversible.
                        </div>
                        
                        <div class=\"d-flex justify-content-end gap-2\">
                            <a href=\"{{ path('purchase_show', {id: purchase.id}) }}\" class=\"btn btn-secondary\">
                                <i class=\"bi bi-x-lg\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-success\">
                                <i class=\"bi bi-check-lg\"></i> Confirmer la réception
                            </button>
                        </div>
                    </div>
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
    // Gestion de la case \"Ne pas réceptionner\"
    const checkboxes = document.querySelectorAll('.remove-checkbox');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const card = this.closest('.batch-card');
            const inputs = card.querySelectorAll('input:not([type=\"checkbox\"]), select');
            inputs.forEach(input => {
                input.disabled = this.checked;
            });
            // Désactiver aussi les champs de date si présents
            const dateInputs = card.querySelectorAll('input[type=\"date\"]');
            dateInputs.forEach(input => input.disabled = this.checked);
        });
    });

    // Validation des dates d'expiration
    const expiryInputs = document.querySelectorAll('input[name^=\"expiry_date_\"]');
    expiryInputs.forEach(input => {
        input.addEventListener('change', function() {
            const expiryDate = new Date(this.value);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (expiryDate < today) {
                alert('La date d\\'expiration ne peut pas être antérieure à aujourd\\'hui.');
                this.value = '';
            }
        });
    });
    
    // Confirmation avant soumission
    const form = document.querySelector('.receive-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Vérifier qu'il y a au moins un article non supprimé
            let hasReceived = false;
            const items = document.querySelectorAll('.batch-card');
            items.forEach(card => {
                const removeCheck = card.querySelector('.remove-checkbox');
                if (!removeCheck || !removeCheck.checked) {
                    hasReceived = true;
                }
            });
            if (!hasReceived) {
                e.preventDefault();
                alert('Vous devez réceptionner au moins un article.');
                return;
            }

            // Vérifier les champs requis pour les produits non supprimés
            const requiredInputs = form.querySelectorAll('[required]:not(:disabled)');
            let missing = false;
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    missing = true;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (missing) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires.');
            } else {
                if (!confirm('Confirmez-vous la réception de cette commande ? Les lots seront créés et le stock sera mis à jour.')) {
                    e.preventDefault();
                }
            }
        });
    }
});
</script>
{% endblock %}", "purchase/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\receive.html.twig");
    }
}
